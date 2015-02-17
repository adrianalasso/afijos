<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BienesCustodio
 *
 * @ORM\Table(name="bienes_custodio")
 * @ORM\Entity
 */
class BienesCustodio extends Activos
{
    /**
     * @var string
     *
     * @ORM\Column(name="bc_descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="bc_marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="bc_oficina", type="string", length=255)
     */
    private $oficina;   

    /**
     * @var string
     *
     * @ORM\Column(name="bc_direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="bc_departamento", type="string", length=255)
     */
    private $depart;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="bc_seccion", type="string", length=255)
     */
    private $seccion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="bc_componentes", type="string", length=255, nullable=true)
     */
    private $componentes;

    /**
     * @var string
     *
     * @ORM\Column(name="bc_serie", type="string", length=255, nullable=true)
     */
    private $serie;

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return BienesCustodio
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
     * Set marca
     *
     * @param string $marca
     * @return BienesCustodio
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set seccion
     *
     * @param string $seccion
     * @return BienesCustodio
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;
    
        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set oficina
     *
     * @param string $oficina
     * @return BienesCustodio
     */
    public function setOficina($oficina)
    {
        $this->oficina = $oficina;
    
        return $this;
    }

    /**
     * Get oficina
     *
     * @return string 
     */
    public function getOficina()
    {
        return $this->oficina;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return BienesCustodio
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    
    /**
     * Set depart
     *
     * @param string $depart
     * @return BienesCustodio
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    
        return $this;
    }

    /**
     * Get depart
     *
     * @return string 
     */
    public function getDepart()
    {
        return $this->depart;
    }
    
    /**
     * Set componenetes
     *
     * @param string $componenetes
     * @return BienesCustodio
     */
    public function setComponentes($componentes)
    {
        $this->componentes = $componentes;
    
        return $this;
    }

    /**
     * Get componenetes
     *
     * @return string 
     */
    public function getComponentes()
    {
        return $this->componentes;
    }

    /**
     * Set serie
     *
     * @param string $serie
     * @return BienesCustodio
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
    
        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }    
    
}
