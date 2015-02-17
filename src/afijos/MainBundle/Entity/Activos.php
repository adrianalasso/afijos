<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activos
 *
 * @ORM\Table(name="activos")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="activo", type="string")
 * @ORM\DiscriminatorMap({"bienescustodio" = "BienesCustodio", "lsubestacion" = "LSubestacion", "lsubtransmision" = "LSubtransmision"})
 */
class Activos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="actv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_codigo", type="string", length=20)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_etiqueta", type="string", length=20,nullable=true)
     */
    private $etiqueta;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_estado", type="string", length=20)
     */
    private $estado;
    
    /**
     * @var string
     *
     * @ORM\Column(name="actv_eliminado", type="string", length=20,nullable=true)
     */
    private $eliminado;

    /**
     * @var text
     *
     * @ORM\Column(name="actv_observaciones", type="text",nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_historico", type="string", length=20,nullable=true)
     */
    private $historico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actv_fecha_registro", type="date", nullable=true)
     */
    private $fechaRegistro;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actv_fecha_adquisicion", type="date", nullable=true)
     */
    private $fechAdquisicion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actv_fecha_marcha", type="date", nullable=true,nullable=true)
     */
    private $fechaMarcha;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_tipo_documento", type="string", length=20)
     */
    private $tipoDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_numero_documento", type="string", length=20)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_procedencia", type="string", length=20,nullable=true)
     */
    private $procedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_financiamiento", type="string", length=50,nullable=true)
     */
    private $financiamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_bien_asegurable", type="string", length=10)
     */
    private $bienAsegurable;

    /**
     * @var string
     *
     * @ORM\Column(name="actv_calidad", type="string", length=20,nullable=true)
     */
    private $calidad;

    /**
     * @var decimal
     *
     * @ORM\Column(name="actv_factor_estado", type="decimal", scale=2,nullable=true)
     */
    private $factorEstado;

    /**
     * @var decimal
     *
     * @ORM\Column(name="actv_valor_historico", type="decimal", scale=2, nullable=true)
     */
    private $valorHistorico;

    /**
     * @var decimal
     *
     * @ORM\Column(name="actv_valor_adquisicion", type="decimal", scale=2, nullable=true)
     */
    private $valorAdquisicion;

    /**
     * @var decimal
     *
     * @ORM\Column(name="actv_valor_residual", type="decimal", scale=2, nullable=true)
     */
    private $valorResidual;

    /**
     * @var decimal
     *
     * @ORM\Column(name="actv_valor_depreciable", type="decimal", scale=2, nullable=true)
     */
    private $valorDepreciable;

    /**
     * @var decimal
     *
     * @ORM\Column(name="actv_valor_depreciacion_acumulada", type="decimal", scale=2, nullable=true)
     */
    private $valorDepreciacionAcumulada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actv_ultima_fecha_depreciacion", type="date", nullable=true)
     */
    private $ultimaFechaDepreciacion;

    /**
     * @var decimal
     *
     * @ORM\Column(name="actv_valor_libros", type="decimal", scale=2, nullable=true)
     */
    private $valorLibros;


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
     * Set codigo
     *
     * @param string $codigo
     * @return Activos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set etiqueta
     *
     * @param string $etiqueta
     * @return Activos
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    
        return $this;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Activos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set eliminado
     *
     * @param string $eliminado
     * @return Activos
     */
    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;
    
        return $this;
    }

    /**
     * Get eliminado
     *
     * @return string 
     */
    public function getEliminado()
    {
        return $this->eliminado;
    }
    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Activos
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set historico
     *
     * @param string $historico
     * @return Activos
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;
    
        return $this;
    }

    /**
     * Get historico
     *
     * @return string 
     */
    public function getHistorico()
    {
        return $this->historico;
    }

    /**
     * Set fechAdquisicion
     *
     * @param string $fechAdquisicion
     * @return Activos
     */
    public function setFechAdquisicion($fechAdquisicion)
    {
        $this->fechAdquisicion = $fechAdquisicion;
    
        return $this;
    }

    /**
     * Get fechAdquisicion
     *
     * @return string 
     */
    public function getFechAdquisicion()
    {
        return $this->fechAdquisicion;
    }
    
    /**
     * Set fechaRegistro
     *
     * @param string $fechaRegistro
     * @return Activos
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;    
        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return string 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }
    
    /**
     * Set fechaMarcha
     *
     * @param \DateTime $fechaMarcha
     * @return Activos
     */
    public function setFechaMarcha($fechaMarcha)
    {
        $this->fechaMarcha = $fechaMarcha;
    
        return $this;
    }

    /**
     * Get fechaMarcha
     *
     * @return \DateTime 
     */
    public function getFechaMarcha()
    {
        return $this->fechaMarcha;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     * @return Activos
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    
        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     * @return Activos
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
    
        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string 
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set procedencia
     *
     * @param string $procedencia
     * @return Activos
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;
    
        return $this;
    }

    /**
     * Get procedencia
     *
     * @return string 
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set financiamiento
     *
     * @param string $financiamiento
     * @return Activos
     */
    public function setFinanciamiento($financiamiento)
    {
        $this->financiamiento = $financiamiento;
    
        return $this;
    }

    /**
     * Get financiamiento
     *
     * @return string 
     */
    public function getFinanciamiento()
    {
        return $this->financiamiento;
    }

    /**
     * Set bienAsegurable
     *
     * @param string $bienAsegurable
     * @return Activos
     */
    public function setBienAsegurable($bienAsegurable)
    {
        $this->bienAsegurable = $bienAsegurable;
    
        return $this;
    }

    /**
     * Get bienAsegurable
     *
     * @return string 
     */
    public function getBienAsegurable()
    {
        return $this->bienAsegurable;
    }

    /**
     * Set calidad
     *
     * @param string $calidad
     * @return Activos
     */
    public function setCalidad($calidad)
    {
        $this->calidad = $calidad;
    
        return $this;
    }

    /**
     * Get calidad
     *
     * @return string 
     */
    public function getCalidad()
    {
        return $this->calidad;
    }

    /**
     * Set factorEstado
     *
     * @param string $factorEstado
     * @return Activos
     */
    public function setFactorEstado($factorEstado)
    {
        $this->factorEstado = $factorEstado;
    
        return $this;
    }

    /**
     * Get factorEstado
     *
     * @return string 
     */
    public function getFactorEstado()
    {
        return $this->factorEstado;
    }

    /**
     * Set valorHistorico
     *
     * @param string $valorHistorico
     * @return Activos
     */
    public function setValorHistorico($valorHistorico)
    {
        $this->valorHistorico = $valorHistorico;
    
        return $this;
    }

    /**
     * Get valorHistorico
     *
     * @return string 
     */
    public function getValorHistorico()
    {
        return $this->valorHistorico;
    }

    /**
     * Set valorAdquisicion
     *
     * @param string $valorAdquisicion
     * @return Activos
     */
    public function setValorAdquisicion($valorAdquisicion)
    {
        $this->valorAdquisicion = $valorAdquisicion;
    
        return $this;
    }

    /**
     * Get valorAdquisicion
     *
     * @return string 
     */
    public function getValorAdquisicion()
    {
        return $this->valorAdquisicion;
    }

    /**
     * Set valorResidual
     *
     * @param string $valorResidual
     * @return Activos
     */
    public function setValorResidual($valorResidual)
    {
        $this->valorResidual = $valorResidual;
    
        return $this;
    }

    /**
     * Get valorResidual
     *
     * @return string 
     */
    public function getValorResidual()
    {
        return $this->valorResidual;
    }

    /**
     * Set valorDepreciable
     *
     * @param string $valorDepreciable
     * @return Activos
     */
    public function setValorDepreciable($valorDepreciable)
    {
        $this->valorDepreciable = $valorDepreciable;
    
        return $this;
    }

    /**
     * Get valorDepreciable
     *
     * @return string 
     */
    public function getValorDepreciable()
    {
        return $this->valorDepreciable;
    }

    /**
     * Set valorDepreciacionAcumulada
     *
     * @param string $valorDepreciacionAcumulada
     * @return Activos
     */
    public function setValorDepreciacionAcumulada($valorDepreciacionAcumulada)
    {
        $this->valorDepreciacionAcumulada = $valorDepreciacionAcumulada;
    
        return $this;
    }

    /**
     * Get valorDepreciacionAcumulada
     *
     * @return string 
     */
    public function getValorDepreciacionAcumulada()
    {
        return $this->valorDepreciacionAcumulada;
    }

    /**
     * Set ultimaFechaDepreciacion
     *
     * @param \DateTime $ultimaFechaDepreciacion
     * @return Activos
     */
    public function setUltimaFechaDepreciacion($ultimaFechaDepreciacion)
    {
        $this->ultimaFechaDepreciacion = $ultimaFechaDepreciacion;
    
        return $this;
    }

    /**
     * Get ultimaFechaDepreciacion
     *
     * @return \DateTime 
     */
    public function getUltimaFechaDepreciacion()
    {
        return $this->ultimaFechaDepreciacion;
    }

    /**
     * Set valorLibros
     *
     * @param string $valorLibros
     * @return Activos
     */
    public function setValorLibros($valorLibros)
    {
        $this->valorLibros = $valorLibros;
    
        return $this;
    }

    /**
     * Get valorLibros
     *
     * @return string 
     */
    public function getValorLibros()
    {
        return $this->valorLibros;
    }
    
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\UnidadPropiedad", inversedBy="activos")
     * @ORM\JoinColumn(name="udp_id", referencedColumnName="udp_id", onDelete="RESTRICT")
     * @return integer
     */
    private $unidadPropiedad;
    public function setUnidadPropiedad(\afijos\MainBundle\Entity\UnidadPropiedad $unidadPropiedad){
            $this->unidadPropiedad=$unidadPropiedad;
    }

    public function getUnidadPropiedad(){
            return $this->unidadPropiedad;
    }
        
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Agencia", inversedBy="activos")
     * @ORM\JoinColumn(name="ag_id", referencedColumnName="ag_id", onDelete="RESTRICT")
     * @return integer
     */
    private $agencia;
    public function setAgencia(\afijos\MainBundle\Entity\Agencia $agencia){
            $this->agencia=$agencia;
    }

    public function getAgencia(){
            return $this->agencia;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\AreaOperativa", inversedBy="activos")
     * @ORM\JoinColumn(name="ap_id", referencedColumnName="ap_id", onDelete="RESTRICT")
     * @return integer
     */
    private $areaOperativa;
    public function setAreaOperativa(\afijos\MainBundle\Entity\AreaOperativa $areaOperativa){
            $this->areaOperativa=$areaOperativa;
    }

    public function getAreaOperativa(){
            return $this->areaOperativa;
    }    
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Canton", inversedBy="activos")
     * @ORM\JoinColumn(name="ctn_id", referencedColumnName="ctn_id", onDelete="RESTRICT")
     * @return integer
     */
    private $canton;
    public function setCanton(\afijos\MainBundle\Entity\Canton $canton){
            $this->canton=$canton;
    }

    public function getCanton(){
            return $this->canton;
    }    
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\CuentaContable", inversedBy="activos")
     * @ORM\JoinColumn(name="cc_id", referencedColumnName="cc_id", onDelete="RESTRICT")
     * @return integer
     */
    private $cuentaContable;
    public function setCuentaContable(\afijos\MainBundle\Entity\CuentaContable $cuentaContable){
            $this->cuentaContable=$cuentaContable;
    }

    public function getCuentaContable(){
            return $this->cuentaContable;
    }    
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Departamento", inversedBy="activos")
     * @ORM\JoinColumn(name="dpto_id", referencedColumnName="dpto_id", onDelete="RESTRICT")
     * @return integer
     */
    private $departamento;
    public function setDepartamento(\afijos\MainBundle\Entity\Departamento $departamento){
            $this->departamento=$departamento;
    }

    public function getDepartamento(){
            return $this->departamento;
    }    
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Dependencia", inversedBy="activos")
     * @ORM\JoinColumn(name="dpd_id", referencedColumnName="dpd_id", onDelete="RESTRICT")
     * @return integer
     */
    private $dependencia;
    public function setDependencia(\afijos\MainBundle\Entity\Dependencia $dependencia){
            $this->dependencia=$dependencia;
    }

    public function getDependencia(){
            return $this->dependencia;
    } 
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Plan", inversedBy="activos")
     * @ORM\JoinColumn(name="pln_id", referencedColumnName="pln_id", onDelete="RESTRICT")
     * @return integer
     */
    private $plan;
    
    public function setPlan(\afijos\MainBundle\Entity\Plan $plan){
            $this->plan=$plan;
    }

    public function getPlan(){
            return $this->plan;
    }   
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Trabajador")
     * @ORM\JoinColumn(name="emp_id", referencedColumnName="emp_id", onDelete="SET NULL")
     * @return integer
     */
    private $trabajador;
    
    public function setTrabajador(\afijos\MainBundle\Entity\Trabajador $trabajador){
            $this->trabajador=$trabajador;
    }

    public function getTrabajador(){
            return $this->trabajador;
    }   
    
    public function __toString() {
        return $this->codigo;
    }
}
