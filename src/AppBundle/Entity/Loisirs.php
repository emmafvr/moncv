<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity
 * @ORM\Table(name="Loisirs")
 */

class Loisirs {
    
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
    
    public function Getid()
  {
    return $this->id;
  }
  
  public function Getname()
  {
    return $this->name;
  }
  
  public function setName($name)
  {
    $this->name = $name;
  }
  
}
