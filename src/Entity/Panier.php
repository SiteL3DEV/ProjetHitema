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
 * @ORM\Column(type="integer")
 */
  private $id_produit;
  /**
 * @ORM\Column(type="date")
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

  public function getId(): ?int
  {
      return $this->id;
  }

  public function getIdProduit(): ?int
  {
      return $this->id_produit;
  }

  public function setIdProduit(int $id_produit): self
  {
      $this->id_produit = $id_produit;

      return $this;
  }

  public function getIdUtilisateur(): ?\DateTimeInterface
  {
      return $this->id_utilisateur;
  }

  public function setIdUtilisateur(\DateTimeInterface $id_utilisateur): self
  {
      $this->id_utilisateur = $id_utilisateur;

      return $this;
  }
}