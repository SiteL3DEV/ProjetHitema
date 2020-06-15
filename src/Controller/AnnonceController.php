<?php

namespace App\Controller;

use Twig\Environment;
use App\Entity\Annonce;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\String\Slugger\SluggerInterface;

class AnnonceController extends AbstractController
{
  /**
   * @Route("/detailannonce/{idannonce}", name="oc_annonce_detail")
   */
  public function detailAnnonce(string $idannonce, Environment $twig)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    /** @var \App\Entity\Utilisateurs $user */
    $user = $this->getUser();
    if($user){
      $name = $user->getNom().' '.$user->getPrenom();
      $btnLogInOut = 'Se déconnecter';
    }
    $em = $this->getDoctrine()->getManager();
    $annonce = $em->getRepository(Annonce::class)->findOneBy(array('id' => $idannonce));
    $content = $twig->render('detail_annonce.html.twig', [
                                                  'loginout' => $btnLogInOut,
                                                  'name' => $name,
                                                  'annonce' => $annonce
                                                ]);
    return new Response($content);
  }

  /**
   * @Route("/deposerannonce", name="oc_deposer_annonce")
   */
  public function deposerAnnonce( Request $request, SluggerInterface $slugger)
  {
      $annonce = new Annonce();
      $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
      /** @var \App\Entity\Utilisateurs $user **/
      $user = $this->getUser();
      if($user){
          $name = $user->getNom().' '.$user->getPrenom();
          $btnLogInOut = 'Se déconnecter';
      }
      // J'ai raccourci cette partie, car c'est plus rapide à écrire !
      $form = $this->get('form.factory')->createBuilder(FormType::class, $annonce)
          ->add('tarif', TextType::class)
          ->add('description', TextType::class)
          ->add('adresse',      TextType::class)
          ->add('categorie',   ChoiceType::class, [
              'choices' => [
                  'Bricolage' => true,
                  'Ménager' => true,
                  'Test' => true,
              ]])
          ->add('image',  FileType::class)
          ->add('date',  DateType::class)
          ->add('nom',     TextType::class)
          ->add('Enregistrer',     SubmitType::class)
          ->getForm()
      ;
      $annonce->setId_utilisateur($user->getId());
      // Si la requête est en POST
      if ($request->isMethod('POST')) {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
          $form->handleRequest($request);

          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($form->isValid()) {
              // On enregistre notre objet $advert dans la base de données, par exemple

              $file =  $form->get('image')->getData();
              if ($file) {
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $file->move(
                        '/ProjetHitema/public/img/annonces',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                
              $annonce->setImage($newFilename);
            }

              $em = $this->getDoctrine()->getManager();
              $em->persist($annonce);
              $em->flush();

              $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

              // On redirige vers la page de visualisation de l'annonce nouvellement créée
              return $this->redirectToRoute('oc_deposer_annonce', array('id' => $annonce->getId()));
          }
      }

      return $this->render('deposer_annonce.html.twig', [
              'name' => $name,
              'form' => $form->createView()
          ]
      );
  }

}
