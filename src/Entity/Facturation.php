<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FacturationRepository")
 */
class Facturation
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
  private $montant;
  /**
 * @ORM\Column(type="integer")
 */
  private $numero;



  /**
   * Get the value of montant
   */ 
  public function getMontant()
  {
    return $this->montant;
  }

  /**
   * Set the value of montant
   *
   * @return  self
   */ 
  public function setMontant($montant)
  {
    $this->montant = $montant;

    return $this;
  }

  /**
   * Get the value of numero
   */ 
  public function getNumero()
  {
    return $this->numero;
  }

  /**
   * Set the value of numero
   *
   * @return  self
   */ 
  public function setNumero($numero)
  {
    $this->numero = $numero;

    return $this;
  }
}