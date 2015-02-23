<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleDepreciacionLSt
 *
 * @ORM\Table(name="detalle_depreciacion_lsubtrans")
 * @ORM\Entity
 */
class DetalleDepreciacionLSt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dep_lsubtrans_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="dep_lsubtrans_deprec_acumulada", type="decimal", scale=2)
     */
    private $deprecAcumulada;

    /**
     * @var float
     *
     * @ORM\Column(name="dep_lsubtrans_deprec_mensual", type="decimal", scale=2)
     */
    private $deprecMensual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dep_lsubtrans_fecha_depreciacion", type="date")
     */
    private $fechaDepreciacion;

    /**
     * @var string
     *
     * @ORM\Column(name="dep_lsubtrans_mes_depreciacion", type="string", length=255)
     */
    private $mesDepreciacion;

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
     * Set deprecAcumulada
     *
     * @param float $deprecAcumulada
     * @return DetalleDepreciacionLSt
     */
    public function setDeprecAcumulada($deprecAcumulada)
    {
        $this->deprecAcumulada = $deprecAcumulada;
    
        return $this;
    }

    /**
     * Get deprecAcumulada
     *
     * @return float 
     */
    public function getDeprecAcumulada()
    {
        return $this->deprecAcumulada;
    }

    /**
     * Set deprecMensual
     *
     * @param float $deprecMensual
     * @return DetalleDepreciacionLSt
     */
    public function setDeprecMensual($deprecMensual)
    {
        $this->deprecMensual = $deprecMensual;
    
        return $this;
    }

    /**
     * Get deprecMensual
     *
     * @return float 
     */
    public function getDeprecMensual()
    {
        return $this->deprecMensual;
    }

    /**
     * Set fechaDepreciacion
     *
     * @param \DateTime $fechaDepreciacion
     * @return DetalleDepreciacionLSt
     */
    public function setFechaDepreciacion($fechaDepreciacion)
    {
        $this->fechaDepreciacion = $fechaDepreciacion;    
        return $this;
    }

    /**
     * Get fechaDepreciacion
     *
     * @return \DateTime 
     */
    public function getFechaDepreciacion()
    {
        return $this->fechaDepreciacion;
    }

    /**
     * Set mesDepreciacion
     *
     * @param string $mesDepreciacion
     * @return DetalleDepreciacionLSt
     */
    public function setMesDepreciacion($mesDepreciacion)
    {
        $this->mesDepreciacion = $mesDepreciacion;
    
        return $this;
    }

    /**
     * Get mesDepreciacion
     *
     * @return string 
     */
    public function getMesDepreciacion()
    {
        return $this->mesDepreciacion;
    }
        
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\LSubtransmision")
     * @ORM\JoinColumn(name="actv_id", referencedColumnName="actv_id", onDelete="CASCADE")
     * @return integer
     */
    private $lsubtransmision;
    public function setLSubtransmision(\afijos\MainBundle\Entity\LSubtransmision $lsubtransmision){
            $this->lsubtransmision=$lsubtransmision;
    }

    public function getLSubtransmision(){
            return $this->lsubtransmision;
    }    
}
