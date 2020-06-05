<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateursRepository")
 */
class Utilisateurs implements UserInterface
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
  private $username;
  /**
 * @ORM\Column(type="string", length=50)
 */
  private $password;
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
   * @ORM\Column(type="json")
   */
  private $roles = [];

  /**
   * Get the value of username
   */ 
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Set the value of username
   *
   * @return  self
   */ 
  public function setUsername($username)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Get the value of pass
   */ 
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of pass
   *
   * @return  self
   */ 
  public function setPassword($password)
  {
    $this->password = $password;

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

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }
  public function getRoles(): array
  {
      $roles = $this->roles;

      // il est obligatoire d'avoir au moins un rôle si on est authentifié, par convention c'est ROLE_USER
      if (empty($roles)) {
          $roles[] = 'ROLE_USER';
      }

      return array_unique($roles);
  }

  public function setRoles(array $roles): void
  {
      $this->roles = $roles;
  }

  public function getSalt(): ?string
  {
      return null;
  }

  public function eraseCredentials(): void
  {
  }
}