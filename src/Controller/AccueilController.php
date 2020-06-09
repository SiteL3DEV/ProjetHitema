<?php
// src/Controller/AccueilController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Avis;
use Twig\Environment;

class AccueilController extends AbstractController
{
  /**
   * @Route("/accueil", name="oc_accueil_index")
   */
  public function index(Environment $twig)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\User $user */
    $user = $this->getUser();
    $btnLogInOut = 'Se connecter';
    if($user){
      $btnLogInOut = 'Se déconnecter';
    }
    $content = $twig->render('index.html.twig', ['loginout' => $btnLogInOut]);

    return new Response($content);
  }
}
