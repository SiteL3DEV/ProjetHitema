<?php 

namespace App\Controller;

// ...
use App\Entity\Avis;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="creer_avis")
     */
    public function creerAvis(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $avis = new Avis();
        $avis->setId_produit(12);
        $avis->setNote(5);
        $avis->setCommentaire('Test commentaire');
        $avis->setId_utilisateur(9);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($avis);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new avis with id '.$avis->getId());
    }

    /**
     * @Route("/getavis", name="recup_avis")
     */
    public function getAvis(): Response
    {
        $avis = $this->getDoctrine()
        ->getRepository(Avis::class)
        ->findAvisByCom("Test commentaire2");

        return new Response($avis[0]->getNote());
    }
}