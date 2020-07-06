<?php

namespace App\Controller;

use Twig\Environment;
use App\Entity\Panier;
use App\Entity\Annonce;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{

  public function ajoutQuantite(int $idpanier, string $operation,SerializerInterface $serializer){
    $panier = new Panier();
    $em = $this->getDoctrine()->getManager();
    $panier = $em->getRepository(Panier::class)->find($idpanier);

    if (!$panier) {
        throw $this->createNotFoundException(
            'No product found for id '.$panier
        );
    }
    if($operation == "ajout")
      $panier->setQuantite($panier->getQuantite() + 1);
    else if($operation == "suppr")
      $panier->setQuantite($panier->getQuantite() - 1);
    $em->flush();
  }

  /**
   * @Route("/ajoutpanier/{idannonce}", name="oc_ajout_panier")
   */
  public function ajouterPanier(int $idannonce, SerializerInterface $serializer)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    $panier = new Panier();
    $em = $this->getDoctrine()->getManager();
    $annonce = $em->getRepository(Annonce::class)->findOneBy(array('id' => $idannonce));
    $panierIfExist = $em->getRepository(Panier::class)->findOneBy(array('annonce' => $idannonce));
    $panierid;
    if(!$panierIfExist){
      $panier->setAnnonce($annonce);
      $panier->setId_utilisateur($user->getId());
      $panier->setQuantite(1);
      $em->persist($panier);
      $em->flush();
      $panierid = $panier->getId();
    }else{
      $panierid = $this->ajoutQuantite($panierIfExist->getId(), 'ajout', $serializer);
    }
    return new Response($panierid);
  }

  /**
   * @Route("/ajoutquantitepanier/{idpanier}/{operation}", name="oc_ajout_quantitepanier")
   */
  public function ajouterQuantitePanier(int $idpanier, string $operation,SerializerInterface $serializer)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    $idpanier = $this->ajoutQuantite($idpanier, $operation, $serializer);
    return new Response($idpanier);
  }

  /**
   * @Route("/supprimepanier/{idproduit}", name="oc_supprime_panier")
   */
  public function supprimerPanier(int $idproduit, SerializerInterface $serializer)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $panier = $em->getRepository(Panier::class)->findOneBy(array('id' => $idproduit));
    $em->remove($panier);
    $em->flush();
    return new Response($panier->getId());
  }

  /**
   * @Route("/getpanier", name="oc_get_panier")
   */
  public function getPanier(SerializerInterface $serializer)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $panier = $em->getRepository(Panier::class)->findAll();
    $panierannonces = $em->getRepository(Panier::class)->findAllPanierAnnonce($user->getId());
    $response = $serializer->serialize($panierannonces,'json');
    return new Response($response);
  }

  /**
   * @Route("/panier", name="oc_panier")
   */
  public function panier(SerializerInterface $serializer, Environment $twig)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user **/
    $user = $this->getUser();
    if($user){
        $name = $user->getNom().' '.$user->getPrenom();
        $btnLogInOut = 'Se déconnecter';
    }
    $em = $this->getDoctrine()->getManager();
    $panier = $em->getRepository(Panier::class)->findAllPanierAnnonce($user->getId());
    $content = $twig->render('panier.html.twig', [
        'loginout' => $btnLogInOut,
        'name' => $name,
        'panier' => $panier
    ]);
    return new Response($content);
  }
  /**
   * @Route("/create-order/{price}", name="oc_paypal")
   */
  public function paypalCreate(int $price, Request $req)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user **/
    $user = $this->getUser();

    $accesstoken = $this->authPaypal();
    //var_dump($accesstoken);
    $response = HttpClient::create()->request('POST', 'https://api.sandbox.paypal.com/v2/checkout/orders', [
        'headers' => [
            'Content-Type' => 'application/json'
        ],
        'auth_bearer' => $accesstoken,
        'body' => '{
          "intent": "CAPTURE",
          "purchase_units": [
            {
              "amount": {
                "currency_code": "EUR",
                "value": "'.$price.'"
              }
            }
          ]
        }'
    ]);
    return new Response($response->getContent());
  }

  /**
   * @Route("/capture-order/{orderid}", name="oc_paypal_capture")
   */
  public function paypalCapture(string $orderid, Request $req)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user **/
    $user = $this->getUser();

    $accesstoken = $this->authPaypal();
    $response = HttpClient::create()->request('POST', 'https://api.sandbox.paypal.com/v2/checkout/orders/'.$orderid.'/capture', [
        'headers' => [
            'Content-Type' => 'application/json'
        ],
        'auth_bearer' => $accesstoken,
    ]);
    return new Response($response->getContent());
  }

  /**
   * @Route("/setpaye", name="oc_paypal_setpaye")
   */
  public function setPaye(Request $req)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user **/
    $user = $this->getUser();

    $em = $this->getDoctrine()->getManager();
    $em->getRepository(Panier::class)->setPanierPaye($user->getId());
    
    return new Response('ok');
  }

  private function authPaypal(){
    $response = HttpClient::create()->request('POST', 'https://api.sandbox.paypal.com/v1/oauth2/token', [
      'headers' => [
          'Content-Type' => 'application/json'
      ],
     'auth_basic' => 
       ['AUdA5pbFjfPf4I_Ml5chml778ytGbkWVJe2epcQh_I4QUc_PmIwgZGW5upuIGECTpV7fwdjn9waUvuHm', 'EIL2xUhQd3kOkJf9GIb-zZByl7Fv0l790gNw8WIA1PUIorY9rkeIQ4v4Myxq6KhBnoqJ16VS0htFiqi4']
     ,
     'body' => [
      'grant_type' => 'client_credentials'
     ]

    ]);
    return(json_decode($response->getContent())->access_token);
  }

}
