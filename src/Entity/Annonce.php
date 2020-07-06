<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceRepository")
 */
class Annonce
{
  /**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer")
 */
  private $id;
  /**
   * @ORM\ManyToOne(targetEntity="Utilisateurs")
   * @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
   */
  private $utilisateur;
  /**
 * @ORM\Column(type="date")
 */
  private $date;
  /**
 * @ORM\Column(type="integer")
 */
  private $tarif;
  /**
 * @ORM\Column(type="string", length=200)
 */
  private $description;
  /**
 * @ORM\Column(type="string", length=100)
 */
  private $adresse;
  /**
 * @ORM\Column(type="string", length=60)
 */
  private $categorie;
/**
 * @ORM\Column(type="string")
 * @Assert\NotBlank(message="Upload your image")
 * @Assert\File(mimeTypes={ "image/png", "image/jpeg" })
 */
  private $image;
  /**
 * @ORM\Column(type="string", length=200)
 */
  private $nom;



  /**
   * Get the value of image
   */ 
  public function getImage()
  {
    return $this->image;
  }

  /**
   * Set the value of image
   *
   * @return  self
   */ 
  public function setImage($image)
  {
    $this->image = $image;

    return $this;
  }

  /**
   * Get the value of categorie
   */ 
  public function getCategorie()
  {
    return $this->categorie;
  }

  /**
   * Set the value of categorie
   *
   * @return  self
   */ 
  public function setCategorie($categorie)
  {
    $this->categorie = $categorie;

    return $this;
  }

  /**
   * Get the value of adresse
   */ 
  public function getAdresse()
  {
    return $this->adresse;
  }

  /**
   * Set the value of adresse
   *
   * @return  self
   */ 
  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;

    return $this;
  }

  /**
   * Get the value of description
   */ 
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of tarif
   */ 
  public function getTarif()
  {
    return $this->tarif;
  }

  /**
   * Set the value of tarif
   *
   * @return  self
   */ 
  public function setTarif($tarif)
  {
    $this->tarif = $tarif;

    return $this;
  }

  /**
   * Get the value of date
   */ 
  public function getDate()
  {
    return $this->date;
  }

  /**
   * Set the value of date
   *
   * @return  self
   */ 
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

  public function getId(): ?int
  {
      return $this->id;
  }


  /**
   * Get the value of nom
   */ 
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set the value of nom
   *
   * @return  self
   */ 
  public function setNom($nom)
  {
    $this->nom = $nom;

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