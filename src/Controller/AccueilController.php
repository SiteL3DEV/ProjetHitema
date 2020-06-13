<?php

namespace App\Controller;
use Twig\Environment;
use App\Entity\Annonce;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
  /**
   * @Route("/accueil", name="oc_accueil_index")
   */
  public function index(Environment $twig)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    $btnLogInOut = 'Se connecter';
    $name = '';

    $em = $this->getDoctrine()->getManager();
    $listAnnonces = $em->getRepository(Annonce::class)->findAll();
    if (!$listAnnonces) {
      throw $this->createNotFoundException(
          'Aucune annonce touvée'
      );
    }
    if($user){
      $name = $user->getNom().' '.$user->getPrenom();
      $btnLogInOut = 'Se déconnecter';
    }
    $content = $twig->render('index.html.twig', [
                                                  'loginout' => $btnLogInOut,
                                                  'name' => $name,
                                                  'annonces' => $listAnnonces
                                                ]);

    return new Response($content);
  }

  /**
   * @Route("/tabannonces/{nom}", name="tab_annonces")
   */
  public function getTabAnnonces(string $nom,  SerializerInterface $serializer){
    $em = $this->getDoctrine()->getManager();
    $listAnnonces = $em->getRepository(Annonce::class)->findByNom($nom);
    $response = $serializer->serialize($listAnnonces,'json');
    return new Response($response);
  }
}
