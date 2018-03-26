<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity
 * @ORM\Table(name="Experiences")
 */

class Experiences
{

  /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue
  */
    protected $id;
    
    /**
    * @ORM\Column(type="string")
    **/
    protected $name;
    
    /**
    * @ORM\Column(type="date")
    **/
    protected $datedebut;
    
    /**
    * @ORM\Column(type="date")
    **/
    protected $datefin;
    
    /**
    * @ORM\Column(type="string")
    **/
    protected $lieu;
    
    public function Getid()
    {
        return $this->id;
    }
  
    public function GetName()
    {
        return $this->name;
    }
  
    public function Getdatedebut()
    {
        return $this->datedebut;
    }
  
    public function Getdatefin()
    {
        return $this->datefin;
    }
  
    public function Getlieu()
    {
        return $this->lieu;
    }
  
    public function setName($name)
    {
        $this->name = $name;
    }
  
    public function Setdatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }
  
    public function Setdatefin($datefin)
    {
        $this->datefin = $datefin;
    }
  
    public function Setlieu($lieu)
    {
        $this->lieu = $lieu;
    }
}
