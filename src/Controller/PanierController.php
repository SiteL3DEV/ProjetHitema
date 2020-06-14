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
   * @Route("/ajoutpanier/{idproduit}", name="oc_ajout_panier")
   */
  public function ajouterPanier(int $idproduit, SerializerInterface $serializer)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    $panier = new Panier();
    $panier->setId_produit($idproduit);
    $panier->setId_utilisateur($user->getId());
    $em = $this->getDoctrine()->getManager();
    $em->persist($panier);
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
    $annonces = [];
    foreach($panier as $onePanier){
        array_push($annonces, $em->getRepository(Annonce::class)->findOneBy(array('id' => $onePanier->getId_produit())));
    }
    $response = $serializer->serialize($annonces,'json');
    return new Response($response);
  }

}
