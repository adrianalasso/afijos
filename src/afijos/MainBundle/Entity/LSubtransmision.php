<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LSubtransmision
 *
 * @ORM\Table(name="lineas_subtransmision")
 * @ORM\Entity
 */
class LSubtransmision extends Activos
{ 
    /**
     * @var string
     *
     * @ORM\Column(name="lsub_coorde_este", type="string", length=255)
     */
    private $coordeEste;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_coorde_norte", type="string", length=255)
     */
    private $coordeNorte;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_etapa_funcional", type="string", length=255)
     */
    private $etapaFuncional;

    /**
     * @var decimal
     *
     * @ORM\Column(name="lsub_altura", type="decimal", scale=2, nullable=true)
     */
    private $altura;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_anio_fabricacion", type="string", length=255)
     */
    private $anioFabricacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="lsub_voltaje", type="integer")
     */
    private $voltaje;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_posteria", type="string", length=255)
     */
    private $posteria;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_material", type="string", length=255)
     */
    private $material;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_nombre_estructura", type="string", length=255)
     */
    private $nombrEstructura;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_estado_estructura", type="string", length=255)
     */
    private $estadoEstructura;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_observ_estructura", type="text", nullable=true)
     */
    private $observEstructura;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_tipo_estructura", type="string", length=255)
     */
    private $tipoEstructura;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_descripcion_ptierra", type="string", length=255)
     */
    private $descripcionPTierra;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_tipo_ptierra", type="string", length=255)
     */
    private $tipoPTierra;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="lsub_calibre_ptierra", type="string", length=255)
     */
    private $calibrePTierra;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lsub_estado_ptierra", type="string", length=255)
     */
    private $estadoPTierra;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_observ_ptierra",type="text", nullable=true)
     */
    private $observPTierra;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_calibre_tensor", type="string", length=255)
     */
    private $calibreTensor;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_tipo_tensor", type="string", length=255)
     */
    private $tipoTensor;

    /**
     * @var integer
     *
     * @ORM\Column(name="lsub_cantidad_tensor", type="integer")
     */
    private $cantidadTensor;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_estado_tensor", type="string", length=255)
     */
    private $estadoTensor;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_observ_tensor", type="text" , nullable=true)
     */
    private $observTensor;

    /**
     * @var integer
     *
     * @ORM\Column(name="lsub_longitud_cfase", type="integer")
     */
    private $longitudCFase;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_tipo_cfase", type="string", length=255)
     */
    private $tipoCFase;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_material_cfase", type="string", length=255)
     */
    private $materialCFase;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_calibre_cfase", type="string", length=255)
     */
    private $calibreCFase;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_estado_cfase", type="string", length=255)
     */
    private $estadoCFase;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_observ_cfase", type="text", nullable=true)
     */
    private $observCFase;

    /**
     * @var integer
     *
     * @ORM\Column(name="lsub_longitud_cguardia", type="integer")
     */
    private $longitudCGuardia;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_material_cguardia", type="string", length=255)
     */
    private $materialCGuardia;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_tipo_cguardia", type="string", length=255)
     */
    private $tipoCGuardia;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_calibre_cguardia", type="string", length=255)
     */
    private $calibreCGuardia;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_estado_cguardia", type="string", length=255)
     */
    private $estadoCGuardia;

    /**
     * @var string
     *
     * @ORM\Column(name="lsub_observ_cguardia", type="text", nullable=true)
     */
    private $observCGuardia;

    /**
     * Set coordeEste
     *
     * @param string $coordeEste
     * @return LSubtransmision
     */
    public function setCoordeEste($coordeEste)
    {
        $this->coordeEste = $coordeEste;
    
        return $this;
    }

    /**
     * Get coordeEste
     *
     * @return string 
     */
    public function getCoordeEste()
    {
        return $this->coordeEste;
    }

    /**
     * Set coordeNorte
     *
     * @param string $coordeNorte
     * @return LSubtransmision
     */
    public function setCoordeNorte($coordeNorte)
    {
        $this->coordeNorte = $coordeNorte;
    
        return $this;
    }

    /**
     * Get coordeNorte
     *
     * @return string 
     */
    public function getCoordeNorte()
    {
        return $this->coordeNorte;
    }

    /**
     * Set etapaFuncional
     *
     * @param string $etapaFuncional
     * @return LSubtransmision
     */
    public function setEtapaFuncional($etapaFuncional)
    {
        $this->etapaFuncional = $etapaFuncional;
    
        return $this;
    }

    /**
     * Get etapaFuncional
     *
     * @return string 
     */
    public function getEtapaFuncional()
    {
        return $this->etapaFuncional;
    }

    /**
     * Set altura
     *
     * @param string $altura
     * @return LSubtransmision
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    
        return $this;
    }

    /**
     * Get altura
     *
     * @return string 
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set anioFabricacion
     *
     * @param string $anioFabricacion
     * @return LSubtransmision
     */
    public function setAnioFabricacion($anioFabricacion)
    {
        $this->anioFabricacion = $anioFabricacion;
    
        return $this;
    }

    /**
     * Get anioFabricacion
     *
     * @return string 
     */
    public function getAnioFabricacion()
    {
        return $this->anioFabricacion;
    }

    /**
     * Set voltaje
     *
     * @param string $voltaje
     * @return LSubtransmision
     */
    public function setVoltaje($voltaje)
    {
        $this->voltaje = $voltaje;
    
        return $this;
    }

    /**
     * Get voltaje
     *
     * @return string 
     */
    public function getVoltaje()
    {
        return $this->voltaje;
    }

    /**
     * Set posteria
     *
     * @param string $posteria
     * @return LSubtransmision
     */
    public function setPosteria($posteria)
    {
        $this->posteria = $posteria;
    
        return $this;
    }

    /**
     * Get posteria
     *
     * @return string 
     */
    public function getPosteria()
    {
        return $this->posteria;
    }

    /**
     * Set material
     *
     * @param string $material
     * @return LSubtransmision
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
     * Set tipo
     *
     * @param string $tipo
     * @return LSubtransmision
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
     * Set nombrEstructura
     *
     * @param string $nombrEstructura
     * @return LSubtransmision
     */
    public function setNombrEstructura($nombrEstructura)
    {
        $this->nombrEstructura = $nombrEstructura;
    
        return $this;
    }

    /**
     * Get nombrEstructura
     *
     * @return string 
     */
    public function getNombrEstructura()
    {
        return $this->nombrEstructura;
    }

    /**
     * Set estadoEstructura
     *
     * @param string $estadoEstructura
     * @return LSubtransmision
     */
    public function setEstadoEstructura($estadoEstructura)
    {
        $this->estadoEstructura = $estadoEstructura;
    
        return $this;
    }

    /**
     * Get estadoEstructura
     *
     * @return string 
     */
    public function getEstadoEstructura()
    {
        return $this->estadoEstructura;
    }

    /**
     * Set observEstructura
     *
     * @param string $observEstructura
     * @return LSubtransmision
     */
    public function setObservEstructura($observEstructura)
    {
        $this->observEstructura = $observEstructura;
    
        return $this;
    }

    /**
     * Get observEstructura
     *
     * @return string 
     */
    public function getObservEstructura()
    {
        return $this->observEstructura;
    }

    /**
     * Set tipoEstructura
     *
     * @param string $tipoEstructura
     * @return LSubtransmision
     */
    public function setTipoEstructura($tipoEstructura)
    {
        $this->tipoEstructura = $tipoEstructura;
    
        return $this;
    }

    /**
     * Get tipoEstructura
     *
     * @return string 
     */
    public function getTipoEstructura()
    {
        return $this->tipoEstructura;
    }

    /**
     * Set descripcionPTierra
     *
     * @param string $descripcionPTierra
     * @return LSubtransmision
     */
    public function setDescripcionPTierra($descripcionPTierra)
    {
        $this->descripcionPTierra = $descripcionPTierra;
    
        return $this;
    }

    /**
     * Get descripcionPTierra
     *
     * @return string 
     */
    public function getDescripcionPTierra()
    {
        return $this->descripcionPTierra;
    }

    /**
     * Set tipoPTierra
     *
     * @param string $tipoPTierra
     * @return LSubtransmision
     */
    public function setTipoPTierra($tipoPTierra)
    {
        $this->tipoPTierra = $tipoPTierra;
    
        return $this;
    }

    /**
     * Get tipoPTierra
     *
     * @return string 
     */
    public function getTipoPTierra()
    {
        return $this->tipoPTierra;
    }    
    
    /**
     * Set calibrePTierra
     *
     * @param string $calibrePTierra
     * @return LSubtransmision
     */
    public function setCalibrePTierra($calibrePTierra)
    {
        $this->calibrePTierra = $calibrePTierra;
    
        return $this;
    }

    /**
     * Get calibrePTierra
     *
     * @return string 
     */
    public function getCalibrePTierra()
    {
        return $this->calibrePTierra;
    }

    /**
     * Set estadoPTierra
     *
     * @param string $estadoPTierra
     * @return LSubtransmision
     */
    public function setEstadoPTierra($estadoPTierra)
    {
        $this->estadoPTierra = $estadoPTierra;
    
        return $this;
    }

    /**
     * Get estadoPTierra
     *
     * @return string 
     */
    public function getEstadoPTierra()
    {
        return $this->estadoPTierra;
    }

    /**
     * Set observPTierra
     *
     * @param string $observPTierra
     * @return LSubtransmision
     */
    public function setObservPTierra($observPTierra)
    {
        $this->observPTierra = $observPTierra;
    
        return $this;
    }

    /**
     * Get observPTierra
     *
     * @return string 
     */
    public function getObservPTierra()
    {
        return $this->observPTierra;
    }

    /**
     * Set calibreTensor
     *
     * @param string $calibreTensor
     * @return LSubtransmision
     */
    public function setCalibreTensor($calibreTensor)
    {
        $this->calibreTensor = $calibreTensor;
    
        return $this;
    }

    /**
     * Get calibreTensor
     *
     * @return string 
     */
    public function getCalibreTensor()
    {
        return $this->calibreTensor;
    }

    /**
     * Set tipoTensor
     *
     * @param string $tipoTensor
     * @return LSubtransmision
     */
    public function setTipoTensor($tipoTensor)
    {
        $this->tipoTensor = $tipoTensor;
    
        return $this;
    }

    /**
     * Get tipoTensor
     *
     * @return string 
     */
    public function getTipoTensor()
    {
        return $this->tipoTensor;
    }

    /**
     * Set cantidadTensor
     *
     * @param integer $cantidadTensor
     * @return LSubtransmision
     */
    public function setCantidadTensor($cantidadTensor)
    {
        $this->cantidadTensor = $cantidadTensor;
    
        return $this;
    }

    /**
     * Get cantidadTensor
     *
     * @return integer 
     */
    public function getCantidadTensor()
    {
        return $this->cantidadTensor;
    }

    /**
     * Set estadoTensor
     *
     * @param string $estadoTensor
     * @return LSubtransmision
     */
    public function setEstadoTensor($estadoTensor)
    {
        $this->estadoTensor = $estadoTensor;
    
        return $this;
    }

    /**
     * Get estadoTensor
     *
     * @return string 
     */
    public function getEstadoTensor()
    {
        return $this->estadoTensor;
    }

    /**
     * Set observTensor
     *
     * @param string $observTensor
     * @return LSubtransmision
     */
    public function setObservTensor($observTensor)
    {
        $this->observTensor = $observTensor;
    
        return $this;
    }

    /**
     * Get observTensor
     *
     * @return string 
     */
    public function getObservTensor()
    {
        return $this->observTensor;
    }

    /**
     * Set longitudCFase
     *
     * @param string $longitudCFase
     * @return LSubtransmision
     */
    public function setLongitudCFase($longitudCFase)
    {
        $this->longitudCFase = $longitudCFase;
    
        return $this;
    }

    /**
     * Get longitudCFase
     *
     * @return string 
     */
    public function getLongitudCFase()
    {
        return $this->longitudCFase;
    }

    /**
     * Set tipoCFase
     *
     * @param string $tipoCFase
     * @return LSubtransmision
     */
    public function setTipoCFase($tipoCFase)
    {
        $this->tipoCFase = $tipoCFase;
    
        return $this;
    }

    /**
     * Get tipoCFase
     *
     * @return string 
     */
    public function getTipoCFase()
    {
        return $this->tipoCFase;
    }

    /**
     * Set materialCFase
     *
     * @param string $materialCFase
     * @return LSubtransmision
     */
    public function setMaterialCFase($materialCFase)
    {
        $this->materialCFase = $materialCFase;
    
        return $this;
    }

    /**
     * Get materialCFase
     *
     * @return string 
     */
    public function getMaterialCFase()
    {
        return $this->materialCFase;
    }

    /**
     * Set calibreCFase
     *
     * @param string $calibreCFase
     * @return LSubtransmision
     */
    public function setCalibreCFase($calibreCFase)
    {
        $this->calibreCFase = $calibreCFase;
    
        return $this;
    }

    /**
     * Get calibreCFase
     *
     * @return string 
     */
    public function getCalibreCFase()
    {
        return $this->calibreCFase;
    }

    /**
     * Set estadoCFase
     *
     * @param string $estadoCFase
     * @return LSubtransmision
     */
    public function setEstadoCFase($estadoCFase)
    {
        $this->estadoCFase = $estadoCFase;
    
        return $this;
    }

    /**
     * Get estadoCFase
     *
     * @return string 
     */
    public function getEstadoCFase()
    {
        return $this->estadoCFase;
    }

    /**
     * Set observCFase
     *
     * @param string $observCFase
     * @return LSubtransmision
     */
    public function setObservCFase($observCFase)
    {
        $this->observCFase = $observCFase;
    
        return $this;
    }

    /**
     * Get observCFase
     *
     * @return string 
     */
    public function getObservCFase()
    {
        return $this->observCFase;
    }

    /**
     * Set longitudCGuardia
     *
     * @param string $longitudCGuardia
     * @return LSubtransmision
     */
    public function setLongitudCGuardia($longitudCGuardia)
    {
        $this->longitudCGuardia = $longitudCGuardia;
    
        return $this;
    }

    /**
     * Get longitudCGuardia
     *
     * @return string 
     */
    public function getLongitudCGuardia()
    {
        return $this->longitudCGuardia;
    }

    /**
     * Set materialCGuardia
     *
     * @param string $materialCGuardia
     * @return LSubtransmision
     */
    public function setMaterialCGuardia($materialCGuardia)
    {
        $this->materialCGuardia = $materialCGuardia;
    
        return $this;
    }

    /**
     * Get materialCGuardia
     *
     * @return string 
     */
    public function getMaterialCGuardia()
    {
        return $this->materialCGuardia;
    }

    /**
     * Set tipoCGuardia
     *
     * @param string $tipoCGuardia
     * @return LSubtransmision
     */
    public function setTipoCGuardia($tipoCGuardia)
    {
        $this->tipoCGuardia = $tipoCGuardia;
    
        return $this;
    }

    /**
     * Get tipoCGuardia
     *
     * @return string 
     */
    public function getTipoCGuardia()
    {
        return $this->tipoCGuardia;
    }

    /**
     * Set calibreCGuardia
     *
     * @param string $calibreCGuardia
     * @return LSubtransmision
     */
    public function setCalibreCGuardia($calibreCGuardia)
    {
        $this->calibreCGuardia = $calibreCGuardia;
    
        return $this;
    }

    /**
     * Get calibreCGuardia
     *
     * @return string 
     */
    public function getCalibreCGuardia()
    {
        return $this->calibreCGuardia;
    }

    /**
     * Set estadoCGuardia
     *
     * @param string $estadoCGuardia
     * @return LSubtransmision
     */
    public function setEstadoCGuardia($estadoCGuardia)
    {
        $this->estadoCGuardia = $estadoCGuardia;
    
        return $this;
    }

    /**
     * Get estadoCGuardia
     *
     * @return string 
     */
    public function getEstadoCGuardia()
    {
        return $this->estadoCGuardia;
    }

    /**
     * Set observCGuardia
     *
     * @param string $observCGuardia
     * @return LSubtransmision
     */
    public function setObservCGuardia($observCGuardia)
    {
        $this->observCGuardia = $observCGuardia;
    
        return $this;
    }

    /**
     * Get observCGuardia
     *
     * @return string 
     */
    public function getObservCGuardia()
    {
        return $this->observCGuardia;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Subtransmision", inversedBy="lsubtransmision")
     * @ORM\JoinColumn(name="clsub_id", referencedColumnName="clsub_id", onDelete="RESTRICT")
     * @return integer
     */
    private $subtransmision;
    public function setSubtransmision(\afijos\MainBundle\Entity\Subtransmision $subtransmision=null){
            $this->subtransmision=$subtransmision;
    }

    public function getSubtransmision(){
            return $this->subtransmision;
    }    
    
    public function __toString() {
        return $this->getSubtransmision()." - ".$this->getCodigo();
    }
}
