<?php

namespace App\Controller;

use Twig\Environment;
use App\Entity\Annonce;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="oc_profil")
     */
    public function detailAnnonce(/*string $idannonce, */Environment $twig)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var \App\Entity\Utilisateurs $user */
        $user = $this->getUser();
        if($user){
            $name = $user->getNom().' '.$user->getPrenom();
            $btnLogInOut = 'Se déconnecter';
        }
        /*$em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->findOneBy(array('id' => $idannonce));*/
        $content = $twig->render('profile.html.twig', [
            'loginout' => $btnLogInOut,
            'name' => $name,
            /*'annonce' => $annonce*/
        ]);
        return new Response($content);
    }

}
