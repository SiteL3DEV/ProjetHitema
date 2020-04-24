<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateursRepository")
 */
class Utilisateurs
{
  /**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer")
 */
  private $id;
  /**
 * @ORM\Column(type="string", length=50)
 */
  private $login;
  /**
 * @ORM\Column(type="string", length=50)
 */
  private $pass;
  /**
 * @ORM\Column(type="string", length=50)
 */
  private $nom;
  /**
 * @ORM\Column(type="string", length=60)
 */
  private $prenom;
  /**
 * @ORM\Column(type="string", length=100)
 */
  private $adresse;
  /**
 * @ORM\Column(type="string", length=60)
 */
  private $mail;
  /**
 * @ORM\Column(type="string", length=60)
 */
  private $type;


  /**
   * Get the value of login
   */ 
  public function getLogin()
  {
    return $this->login;
  }

  /**
   * Set the value of login
   *
   * @return  self
   */ 
  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
  }

  /**
   * Get the value of pass
   */ 
  public function getPass()
  {
    return $this->pass;
  }

  /**
   * Set the value of pass
   *
   * @return  self
   */ 
  public function setPass($pass)
  {
    $this->pass = $pass;

    return $this;
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
   * Get the value of prenom
   */ 
  public function getPrenom()
  {
    return $this->prenom;
  }

  /**
   * Set the value of prenom
   *
   * @return  self
   */ 
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;

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
   * Get the value of mail
   */ 
  public function getMail()
  {
    return $this->mail;
  }

  /**
   * Set the value of mail
   *
   * @return  self
   */ 
  public function setMail($mail)
  {
    $this->mail = $mail;

    return $this;
  }

  /**
   * Get the value of type
   */ 
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   *
   * @return  self
   */ 
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }
}