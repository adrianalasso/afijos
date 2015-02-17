<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreaOperativa
 *
 * @ORM\Table(name="area_operativa")
 * @ORM\Entity
 */
class AreaOperativa
{
    /**
     * @var string
     *
     * @ORM\Column(name="ap_id", type="string", length=255)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_descripcion", type="string", length=255)
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return AreaOperativa
     */
    public function setId($id)
    {
        $this->id = $id;    
        return $this;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return AreaOperativa
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    public function __toString(){
        return  $this->descripcion;
    }
}
