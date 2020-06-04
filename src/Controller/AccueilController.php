<?php
// src/Controller/AccueilController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Avis;
use Twig\Environment;

class AccueilController
{
  /**
   * @Route("/accueil", name="oc_accueil_index")
   */
  public function index(Environment $twig)
  {
    $content = $twig->render('index.html.twig'/*, ['name' => 'winzou']*/);

    return new Response($content);
  }

  /*public function viewAction()
  {
    $advert = new Advert;
    $advert->setContent("Recherche développeur Symfony3.");
	
    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert
    ));
  }*/
}
