<?php 

namespace App\Controller;

// ...
use App\Entity\Avis;
use App\Entity\Annonce;
use JMS\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis/{idannonce}/{note}/{comment}", name="creer_avis")
     */
    public function creerAvis(int $idannonce, int $note, string $comment): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var \App\Entity\Utilisateurs $user **/
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $annonce = $entityManager->getRepository(Annonce::class)->find($idannonce);

        $avis = new Avis();
        $avis->setAnnonce($annonce);
        $avis->setNote($note);
        $avis->setCommentaire($comment);
        $avis->setUtilisateur($user);

        $entityManager->persist($avis);

        $entityManager->flush();

        return new Response('Saved new avis with id '.$avis->getId());
    }

    /**
     * @Route("/getavis/{annonceid}", name="recup_avis")
     */
    public function getAvis(string $annonceid, SerializerInterface $serializer): Response
    {
        $avis = $this->getDoctrine()
        ->getRepository(Avis::class)
        ->findBy(array("annonce" => $annonceid));
        $response = $serializer->serialize($avis,'json');
        return new Response($response);
    }
}