<?php 

namespace App\Controller;

// ...
use App\Entity\Utilisateurs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UtilisateursController extends AbstractController
{
    /**
     * @Route("/createuser", name="create_user")
     */
    public function createUser(Request $request, UserPasswordEncoderInterface $encoder)
    {;
        $user = new Utilisateurs();

        // J'ai raccourci cette partie, car c'est plus rapide à écrire !
        $form = $this->get('form.factory')->createBuilder(FormType::class, $user)
          ->add('username', TextType::class)
          ->add('password', TextType::class)
          ->add('nom',      TextType::class)
          ->add('prenom',   TextType::class)
          ->add('adresse',  TextType::class)
          ->add('mail',     TextType::class)
          ->add('type',     TextType::class)
          ->add('Enregistrer',     SubmitType::class)
          ->getForm()
        ;
        // Si la requête est en POST
        if ($request->isMethod('POST')) {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
          $form->handleRequest($request);
  
          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($form->isValid()) {
            // On enregistre notre objet $advert dans la base de données, par exemple
            $encoded = $encoder->encodePassword(
                $user, $form['password']->getData());
            $user->setPassword($encoded);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
  
            $request->getSession()->getFlashBag()->add('notice', 'Utilisateur bien enregistrée.');
  
            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('oc_accueil_index', array('id' => $user->getId()));
          }
        }

        return $this->render('security/createuser.html.twig', [
            'form' => $form->createView()
            ]
        );
    }
}