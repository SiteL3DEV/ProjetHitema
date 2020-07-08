<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\AvisRepository")
 */
class Avis
{
  /**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer")
 */
  private $id;
  /**
   * @ORM\ManyToOne(targetEntity="Annonce")
   * @ORM\JoinColumn(name="annonce_id", referencedColumnName="id")
   */
  private $annonce;
  /**
 * @ORM\Column(type="integer")
 */
  private $note;
  /**
 * @ORM\Column(type="string", length=200)
 */
  private $commentaire;
  /**
   * @ORM\ManyToOne(targetEntity="Utilisateurs")
   * @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
   */
  private $utilisateur;
  /**
   *
   * @ORM\Column(name="dateavis", type="date")
   */
  private $dateavis;


  public function __construct()
  {
      $this->dateavis = new \DateTime();
  }

  /**
   * Get the value of note
   */ 
  public function getNote()
  {
    return $this->note;
  }

  /**
   * Set the value of note
   *
   * @return  self
   */ 
  public function setNote($note)
  {
    $this->note = $note;

    return $this;
  }

  /**
   * Get the value of commentaire
   */ 
  public function getCommentaire()
  {
    return $this->commentaire;
  }

  /**
   * Set the value of commentaire
   *
   * @return  self
   */ 
  public function setCommentaire($commentaire)
  {
    $this->commentaire = $commentaire;

    return $this;
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }



  /**
   * Get the value of utilisateur
   */ 
  public function getUtilisateur()
  {
    return $this->utilisateur;
  }

  /**
   * Set the value of utilisateur
   *
   * @return  self
   */ 
  public function setUtilisateur($utilisateur)
  {
    $this->utilisateur = $utilisateur;

    return $this;
  }

  /**
   * Get the value of annonce
   */ 
  public function getAnnonce()
  {
    return $this->annonce;
  }

  /**
   * Set the value of annonce
   *
   * @return  self
   */ 
  public function setAnnonce($annonce)
  {
    $this->annonce = $annonce;

    return $this;
  } 

  /**
   * Get the value of dateavis
   */ 
  public function getDateavis()
  {
    return $this->dateavis;
  }

  /**
   * Set the value of dateavis
   *
   * @return  self
   */ 
  public function setDateavis($dateavis)
  {
    $this->dateavis = $dateavis;

    return $this;
  }
}