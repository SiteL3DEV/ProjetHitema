<?php
// src/Controller/AccueilController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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
}
