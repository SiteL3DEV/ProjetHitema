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
   * @ORM\ManyToOne(targetEntity="Utilisateurs")
   * @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
   */
  private $utilisateur;
  /**
 * @ORM\Column(type="integer")
 */
  private $quantite;

  /**
 * @ORM\Column(type="string", length=20)
 */
  private $status = 'impaye';


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

  /**
   * Get the value of quantite
   */ 
  public function getQuantite()
  {
    return $this->quantite;
  }

  /**
   * Set the value of quantite
   *
   * @return  self
   */ 
  public function setQuantite($quantite)
  {
    $this->quantite = $quantite;

    return $this;
  }

  /**
   * Get the value of status
   */ 
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   *
   * @return  self
   */ 
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
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
}