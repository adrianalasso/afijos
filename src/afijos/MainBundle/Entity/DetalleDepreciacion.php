<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleDepreciacion
 *
 * @ORM\Table(name="detalle_depreciacion")
 * @ORM\Entity
 */
class DetalleDepreciacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="deprecAcumulada", type="decimal", scale=2)
     */
    private $deprecAcumulada;

    /**
     * @var float
     *
     * @ORM\Column(name="deprecMensual", type="decimal", scale=2)
     */
    private $deprecMensual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaDepreciacion", type="date")
     */
    private $fechaDepreciacion;

    /**
     * @var string
     *
     * @ORM\Column(name="mesDepreciacion", type="string", length=255)
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
     * @return DetalleDepreciacion
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
     * @return DetalleDepreciacion
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
     * @return DetalleDepreciacion
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
     * @return DetalleDepreciacion
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
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\BienesCustodio")
     * @ORM\JoinColumn(name="actv_id", referencedColumnName="actv_id", onDelete="CASCADE")
     * @return integer
     */
    private $bienesCustodio;
    public function setBienesCustodio(\afijos\MainBundle\Entity\BienesCustodio $bienesCustodio){
            $this->bienesCustodio=$bienesCustodio;
    }

    public function getBienesCustodio(){
            return $this->bienesCustodio;
    }    
}
