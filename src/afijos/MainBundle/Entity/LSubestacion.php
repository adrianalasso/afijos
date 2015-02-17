<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LSubestacion
 *
 * @ORM\Table(name="subestaciones")
 * @ORM\Entity
 */
class LSubestacion extends Activos
{
    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_anio", type="string", length=255)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_modelo", type="string", length=255)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_serie", type="string", length=255)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_material", type="string", length=255)
     */
    private $material;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_productividad", type="string", length=255)
     */
    private $productividad;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_capacidad", type="string", length=255)
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_unidades", type="string", length=255)
     */
    private $unidades;

    /**
     * @var string
     *
     * @ORM\Column(name="lsubest_cantidad", type="string", length=255)
     */
    private $cantidad;

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return LSubestacion
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
     * Set tipo
     *
     * @param string $tipo
     * @return LSubestacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set anio
     *
     * @param string $anio
     * @return LSubestacion
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return string 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return LSubestacion
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
     * Set modelo
     *
     * @param string $modelo
     * @return LSubestacion
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set serie
     *
     * @param string $serie
     * @return LSubestacion
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

    /**
     * Set color
     *
     * @param string $color
     * @return LSubestacion
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set material
     *
     * @param string $material
     * @return LSubestacion
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    
        return $this;
    }

    /**
     * Get material
     *
     * @return string 
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set productividad
     *
     * @param string $productividad
     * @return LSubestacion
     */
    public function setProductividad($productividad)
    {
        $this->productividad = $productividad;
    
        return $this;
    }

    /**
     * Get productividad
     *
     * @return string 
     */
    public function getProductividad()
    {
        return $this->productividad;
    }

    /**
     * Set capacidad
     *
     * @param string $capacidad
     * @return LSubestacion
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    
        return $this;
    }

    /**
     * Get capacidad
     *
     * @return string 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set unidades
     *
     * @param string $unidades
     * @return LSubestacion
     */
    public function setUnidades($unidades)
    {
        $this->unidades = $unidades;
    
        return $this;
    }

    /**
     * Get unidades
     *
     * @return string 
     */
    public function getUnidades()
    {
        return $this->unidades;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return LSubestacion
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Subestacion", inversedBy="lsubestacion")
     * @ORM\JoinColumn(name="csubest_id", referencedColumnName="csubest_id", onDelete="RESTRICT")
     * @return integer
     */
    private $subestacion;
    public function setSubestacion(\afijos\MainBundle\Entity\Subestacion $subestacion=null){
            $this->subestacion=$subestacion;
    }

    public function getSubestacion(){
            return $this->subestacion;
    }
}
