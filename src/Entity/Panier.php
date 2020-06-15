<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
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
  private $id_utilisateur;



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

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
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
}