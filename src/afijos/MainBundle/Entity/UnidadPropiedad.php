<?php

namespace afijos\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="unidad_propiedad")
 * @ORM\Entity
 */
class UnidadPropiedad
{
    /**
     * @var string
     *
     * @ORM\Column(name="udp_id", type="string", length=255)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="udp_cuenta_activo", type="string", length=255)
     */
    private $cuentActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="udp_cuenta_depreciacion", type="string", length=255)
     */
    private $cuentaDeprec;

    /**
     * @var string
     *
     * @ORM\Column(name="udp_descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="udp_indice_depreciacion", type="integer")
     */
    private $indiceDeprec;

    /**
     * @var integer
     *
     * @ORM\Column(name="udp_indice_residual", type="integer")
     */
    private $indiceResidual;

    /**
     * @var integer
     *
     * @ORM\Column(name="udp_vida_util_anios", type="integer")
     */
    private $vidaUtilA;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="udp_vida_util_meses", type="integer", nullable=true)
     */
    private $vidaUtilM;
    
    /**
     * Set id
     *
     * @param string $id
     * @return UnidadPropiedad
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
     * Set cuentActivo
     *
     * @param string $cuentActivo
     * @return UnidadPropiedad
     */
    public function setCuentActivo($cuentActivo)
    {
        $this->cuentActivo = $cuentActivo;
    
        return $this;
    }

    /**
     * Get cuentActivo
     *
     * @return string 
     */
    public function getCuentActivo()
    {
        return $this->cuentActivo;
    }

    /**
     * Set cuentaDeprec
     *
     * @param string $cuentaDeprec
     * @return UnidadPropiedad
     */
    public function setCuentaDeprec($cuentaDeprec)
    {
        $this->cuentaDeprec = $cuentaDeprec;
    
        return $this;
    }

    /**
     * Get cuentaDeprec
     *
     * @return string 
     */
    public function getCuentaDeprec()
    {
        return $this->cuentaDeprec;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return UnidadPropiedad
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
     * Set indiceDeprec
     *
     * @param string $indiceDeprec
     * @return UnidadPropiedad
     */
    public function setIndiceDeprec($indiceDeprec)
    {
        $this->indiceDeprec = $indiceDeprec;
    
        return $this;
    }

    /**
     * Get indiceDeprec
     *
     * @return string 
     */
    public function getIndiceDeprec()
    {
        return $this->indiceDeprec;
    }

    /**
     * Set indiceResidual
     *
     * @param string $indiceResidual
     * @return UnidadPropiedad
     */
    public function setIndiceResidual($indiceResidual)
    {
        $this->indiceResidual = $indiceResidual;
    
        return $this;
    }

    /**
     * Get indiceResidual
     *
     * @return string 
     */
    public function getIndiceResidual()
    {
        return $this->indiceResidual;
    }

    /**
     * Set vidaUtilA
     *
     * @param string $vidaUtilA
     * @return UnidadPropiedad
     */
    public function setVidaUtilA($vidaUtilA)
    {
        $this->vidaUtilA = $vidaUtilA;
    
        return $this;
    }

    /**
     * Get vidaUtilA
     *
     * @return string 
     */
    public function getVidaUtilA()
    {
        return $this->vidaUtilA;
    }  
    
    /**
     * Set vidaUtilM
     *
     * @param integer $vidaUtilM
     * @return UnidadPropiedad
     */
    public function setVidaUtilM($vidaUtilM)
    {
        $this->vidaUtilM = $vidaUtilM;    
        return $this;
    }

    /**
     * Get vidaUtil
     *
     * @return integer 
     */
    public function getVidaUtilM()
    {
        return $this->vidaUtilM;
    }  
    
    public function __toString(){
        return $this->id." - ".$this->descripcion;
    }
    
}
