<?php
namespace afijos\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Bajas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Bajas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bj_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="bj_descripcion", type="string", length=255)
     */
    private $descripcion;
    /**
     * @var string
     *
     * @ORM\Column(name="bj_detalle", type="text",  nullable=true)
     */
    private $detalle;
    /**
     * @var string
     *
     * @ORM\Column(name="bj_estado", type="string", length=255, nullable=true)
     */
    private $estado;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bj_fecha_solicitada", type="datetime", nullable=true)
     */
    private $fechaSolicitada;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bj_fecha_aprobado", type="datetime", nullable=true)
     */
    private $fechaAprobado;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }
    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Bajas
     */
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
        return $this;
    }
    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion(){
        return $this->descripcion;
    }
    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Bajas
     */
    public function setDetalle($detalle){
        $this->detalle = $detalle;
        return $this;
    }
    /**
     * Get detalle
     *
     * @return string
     */
    public function getDetalle(){
        return $this->detalle;
    }
    /**
     * Set detalle
     *
     * @param string $estado
     * @return Bajas
     */
    public function setEstado($estado){
        $this->estado = $estado;
        return $this;
    }
    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado(){
        return $this->estado;
    }
    
    /**
     * Set fechaSolicitada
     *
     * @param string $fechaSolicitada
     * @return Bajas
     */
    public function setFechaSolicitada($fechaSolicitada)
    {
        $this->fechaSolicitada = $fechaSolicitada;
    
        return $this;
    }

    /**
     * Get fechaSolicitada
     *
     * @return string 
     */
    public function getFechaSolicitada()
    {
        return $this->fechaSolicitada;
    }
    
    /**
     * Set fechaAprobado
     *
     * @param \DateTime $fechaAprobado
     * @return Bajas
     */
    public function setFechaAprobado($fechaAprobado)
    {
        $this->fechaAprobado = $fechaAprobado;
    
        return $this;
    }

    /**
     * Get fechaAprobado
     *
     * @return \DateTime 
     */
    public function getFechaAprobado()
    {
        return $this->fechaAprobado;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\BienesCustodio")
     * @ORM\JoinColumn(name="actv_id", referencedColumnName="actv_id", onDelete="SET NULL")
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