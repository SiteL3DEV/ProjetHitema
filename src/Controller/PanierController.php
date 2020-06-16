<?php

namespace App\Controller;

use Twig\Environment;
use App\Entity\Panier;
use App\Entity\Annonce;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
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
    $panier->setAnnonce($annonce);
    $panier->setId_utilisateur($user->getId());
    $em->persist($panier);
    $em->flush();
    return new Response($panier->getId());
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


}
