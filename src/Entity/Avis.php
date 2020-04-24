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
 * @ORM\Column(type="integer")
 */
  private $id_produit;
  /**
 * @ORM\Column(type="integer")
 */
  private $note;
  /**
 * @ORM\Column(type="string", length=200)
 */
  private $commentaire;
  /**
 * @ORM\Column(type="integer")
 */
  private $id_utilisateur;


  /**
   * Get the value of id_produit
   */ 
  public function getId_produit()
  {
    return $this->id_produit;
  }

  /**
   * Set the value of id_produit
   *
   * @return  self
   */ 
  public function setId_produit($id_produit)
  {
    $this->id_produit = $id_produit;

    return $this;
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
   * Get the value of id_utilisateur
   */ 
  public function getId_utilisateur()
  {
    return $this->id_utilisateur;
  }

  /**
   * Set the value of id_utilisateur
   *
   * @return  self
   */ 
  public function setId_utilisateur($id_utilisateur)
  {
    $this->id_utilisateur = $id_utilisateur;

    return $this;
  }
}