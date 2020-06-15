<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /** 
     * @Route("/contact", name="oc_contact")
     */
    public function NouveauContact(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var \App\Entity\Utilisateurs $user * */
        $user = $this->getUser();
        if ($user) {
            $name = $user->getNom() . ' ' . $user->getPrenom();

        }


        return $this->render('contact.html.twig', [
                'name' => $name,
            ]
        );

    }
}