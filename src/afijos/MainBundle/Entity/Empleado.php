<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Empleado
 *
 * @ORM\Table(name="empleado")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="tipo_emp", type="string")
 * @ORM\DiscriminatorMap({"usuario" = "Usuario", "trabajador" = "Trabajador"})
 */
class Empleado
{
    /**
     * @var string
     *
     * @ORM\Column(name="emp_id", type="string", length=10)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_apellidos", type="string", length=50)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_nombres", type="string", length=50)
     */
    private $nombres;
        
    /**
     * Set id
     *
     * @param string $id
     * @return Empleado
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Empleado
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Empleado
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }              
    
    public function __toString(){
        return $this->id." - ".$this->apellidos." ".$this->nombres;
    }
}
