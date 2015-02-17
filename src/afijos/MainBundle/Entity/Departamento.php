<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento")
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dpto_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dpto_descripcion", type="string", length=255)
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Departamento
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
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Subsistema")
     * @ORM\JoinColumn(name="ssist_id", referencedColumnName="ssist_id", onDelete="SET NULL")
     * @return integer
     */
    private $subsistema;
    public function setSubsistema(\afijos\MainBundle\Entity\Subsistema $subsistema){
            $this->subsistema=$subsistema;
    }

    public function getSubsistema(){
            return $this->subsistema;
    }       
    
    public function __toString(){
        return  $this->getSubsistema()." - ".$this->descripcion;
    }    
}
