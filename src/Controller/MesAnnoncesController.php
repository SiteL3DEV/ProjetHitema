<?php

namespace App\Controller;
use App\Entity\Panier;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twig\Environment;
use App\Entity\Annonce;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class MesAnnoncesController extends AbstractController
{
  /**
   * @Route("/Mesannonces", name="oc_mes_annonces")
   */
  public function index(Environment $twig)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    $btnLogInOut = 'Se connecter';
    $name = '';

    $em = $this->getDoctrine()->getManager();

    $listAnnonces = $em->getRepository(Annonce::class)->byUser($user ->getId());
    if($user){
      $name = $user->getNom().' '.$user->getPrenom();
      $btnLogInOut = 'Se déconnecter';
    }
    $content = $twig->render('mes_annonces.html.twig', [
                                                  'loginout' => $btnLogInOut,
                                                  'name' => $name,
                                                  'annonces' => $listAnnonces
                                                ]);

    return new Response($content);
  }
    /**
     * @Route("/modifierAnnonce/{idannonce}", name="oc_Modifier_Annonce")
     */
    public function editAnnonce(Request $request, int $idannonce)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var \App\Entity\Utilisateurs $user */
        $user= $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($idannonce);
        $form = $this->get('form.factory')->createBuilder(FormType::class, $annonce)
            ->add('tarif', TextType::class)
            ->add('description', TextType::class)
            ->add('adresse',      TextType::class)
            ->add('categorie',   TextType::class)
            ->add('image',  FileType::class, array('data_class' => null,'required' => false))
            ->add('nom',     TextType::class)
            ->add('Enregistrer',     SubmitType::class)
            ->getForm();
            
        if($user){
            $name = $user->getNom().' '.$user->getPrenom();
            $email = $user->getMail();
            $mdp = $user->getPassword();
            $btnLogInOut = 'Se déconnecter';
        }
        if ($request->getMethod() === 'POST')
        {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em->flush();

                return $this->redirect($this->generateUrl('oc_profil'));
            }

            $em->refresh($user); // Add this line
        }

        return $this->render('ModifierAnnonce.html.twig', array(
            'form'   => $form->createView(),
            'loginout' => $btnLogInOut,
            'name' => $name,
            'email' => $email,
            'mdp' => $mdp,
        ));

    }
    public function supprimerAnnonce(int $idproduit, SerializerInterface $serializer)
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
}

