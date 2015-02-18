<?php

namespace Proxies\__CG__\afijos\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BienesCustodio extends \afijos\MainBundle\Entity\BienesCustodio implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'descripcion', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'marca', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'oficina', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'direccion', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'depart', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'seccion', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'componentes', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'serie');
        }

        return array('__isInitialized__', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'descripcion', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'marca', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'oficina', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'direccion', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'depart', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'seccion', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'componentes', '' . "\0" . 'afijos\\MainBundle\\Entity\\BienesCustodio' . "\0" . 'serie');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BienesCustodio $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarca($marca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarca', array($marca));

        return parent::setMarca($marca);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarca', array());

        return parent::getMarca();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeccion($seccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeccion', array($seccion));

        return parent::setSeccion($seccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeccion', array());

        return parent::getSeccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setOficina($oficina)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOficina', array($oficina));

        return parent::setOficina($oficina);
    }

    /**
     * {@inheritDoc}
     */
    public function getOficina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOficina', array());

        return parent::getOficina();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', array($direccion));

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', array());

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepart($depart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepart', array($depart));

        return parent::setDepart($depart);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepart', array());

        return parent::getDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setComponentes($componentes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComponentes', array($componentes));

        return parent::setComponentes($componentes);
    }

    /**
     * {@inheritDoc}
     */
    public function getComponentes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComponentes', array());

        return parent::getComponentes();
    }

    /**
     * {@inheritDoc}
     */
    public function setSerie($serie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSerie', array($serie));

        return parent::setSerie($serie);
    }

    /**
     * {@inheritDoc}
     */
    public function getSerie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerie', array());

        return parent::getSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigo($codigo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigo', array($codigo));

        return parent::setCodigo($codigo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigo', array());

        return parent::getCodigo();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtiqueta($etiqueta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtiqueta', array($etiqueta));

        return parent::setEtiqueta($etiqueta);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtiqueta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtiqueta', array());

        return parent::getEtiqueta();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEliminado($eliminado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEliminado', array($eliminado));

        return parent::setEliminado($eliminado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEliminado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEliminado', array());

        return parent::getEliminado();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservaciones($observaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservaciones', array($observaciones));

        return parent::setObservaciones($observaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservaciones', array());

        return parent::getObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setHistorico($historico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHistorico', array($historico));

        return parent::setHistorico($historico);
    }

    /**
     * {@inheritDoc}
     */
    public function getHistorico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHistorico', array());

        return parent::getHistorico();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechAdquisicion($fechAdquisicion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechAdquisicion', array($fechAdquisicion));

        return parent::setFechAdquisicion($fechAdquisicion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechAdquisicion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechAdquisicion', array());

        return parent::getFechAdquisicion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaRegistro($fechaRegistro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaRegistro', array($fechaRegistro));

        return parent::setFechaRegistro($fechaRegistro);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaRegistro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaRegistro', array());

        return parent::getFechaRegistro();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaMarcha($fechaMarcha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaMarcha', array($fechaMarcha));

        return parent::setFechaMarcha($fechaMarcha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaMarcha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaMarcha', array());

        return parent::getFechaMarcha();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoDocumento($tipoDocumento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoDocumento', array($tipoDocumento));

        return parent::setTipoDocumento($tipoDocumento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoDocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoDocumento', array());

        return parent::getTipoDocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroDocumento($numeroDocumento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroDocumento', array($numeroDocumento));

        return parent::setNumeroDocumento($numeroDocumento);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroDocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroDocumento', array());

        return parent::getNumeroDocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcedencia($procedencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcedencia', array($procedencia));

        return parent::setProcedencia($procedencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcedencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcedencia', array());

        return parent::getProcedencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinanciamiento($financiamiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinanciamiento', array($financiamiento));

        return parent::setFinanciamiento($financiamiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinanciamiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinanciamiento', array());

        return parent::getFinanciamiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setBienAsegurable($bienAsegurable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBienAsegurable', array($bienAsegurable));

        return parent::setBienAsegurable($bienAsegurable);
    }

    /**
     * {@inheritDoc}
     */
    public function getBienAsegurable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBienAsegurable', array());

        return parent::getBienAsegurable();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalidad($calidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalidad', array($calidad));

        return parent::setCalidad($calidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalidad', array());

        return parent::getCalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setFactorEstado($factorEstado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFactorEstado', array($factorEstado));

        return parent::setFactorEstado($factorEstado);
    }

    /**
     * {@inheritDoc}
     */
    public function getFactorEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactorEstado', array());

        return parent::getFactorEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorHistorico($valorHistorico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorHistorico', array($valorHistorico));

        return parent::setValorHistorico($valorHistorico);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorHistorico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorHistorico', array());

        return parent::getValorHistorico();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorAdquisicion($valorAdquisicion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorAdquisicion', array($valorAdquisicion));

        return parent::setValorAdquisicion($valorAdquisicion);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorAdquisicion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorAdquisicion', array());

        return parent::getValorAdquisicion();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorResidual($valorResidual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorResidual', array($valorResidual));

        return parent::setValorResidual($valorResidual);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorResidual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorResidual', array());

        return parent::getValorResidual();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorDepreciable($valorDepreciable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorDepreciable', array($valorDepreciable));

        return parent::setValorDepreciable($valorDepreciable);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorDepreciable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorDepreciable', array());

        return parent::getValorDepreciable();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorDepreciacionAcumulada($valorDepreciacionAcumulada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorDepreciacionAcumulada', array($valorDepreciacionAcumulada));

        return parent::setValorDepreciacionAcumulada($valorDepreciacionAcumulada);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorDepreciacionAcumulada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorDepreciacionAcumulada', array());

        return parent::getValorDepreciacionAcumulada();
    }

    /**
     * {@inheritDoc}
     */
    public function setUltimaFechaDepreciacion($ultimaFechaDepreciacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUltimaFechaDepreciacion', array($ultimaFechaDepreciacion));

        return parent::setUltimaFechaDepreciacion($ultimaFechaDepreciacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getUltimaFechaDepreciacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUltimaFechaDepreciacion', array());

        return parent::getUltimaFechaDepreciacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorLibros($valorLibros)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorLibros', array($valorLibros));

        return parent::setValorLibros($valorLibros);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorLibros()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorLibros', array());

        return parent::getValorLibros();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidadPropiedad(\afijos\MainBundle\Entity\UnidadPropiedad $unidadPropiedad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidadPropiedad', array($unidadPropiedad));

        return parent::setUnidadPropiedad($unidadPropiedad);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidadPropiedad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidadPropiedad', array());

        return parent::getUnidadPropiedad();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgencia(\afijos\MainBundle\Entity\Agencia $agencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgencia', array($agencia));

        return parent::setAgencia($agencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgencia', array());

        return parent::getAgencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setAreaOperativa(\afijos\MainBundle\Entity\AreaOperativa $areaOperativa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAreaOperativa', array($areaOperativa));

        return parent::setAreaOperativa($areaOperativa);
    }

    /**
     * {@inheritDoc}
     */
    public function getAreaOperativa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAreaOperativa', array());

        return parent::getAreaOperativa();
    }

    /**
     * {@inheritDoc}
     */
    public function setCanton(\afijos\MainBundle\Entity\Canton $canton)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanton', array($canton));

        return parent::setCanton($canton);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanton()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanton', array());

        return parent::getCanton();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuentaContable(\afijos\MainBundle\Entity\CuentaContable $cuentaContable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuentaContable', array($cuentaContable));

        return parent::setCuentaContable($cuentaContable);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuentaContable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuentaContable', array());

        return parent::getCuentaContable();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartamento(\afijos\MainBundle\Entity\Departamento $departamento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartamento', array($departamento));

        return parent::setDepartamento($departamento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartamento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartamento', array());

        return parent::getDepartamento();
    }

    /**
     * {@inheritDoc}
     */
    public function setDependencia(\afijos\MainBundle\Entity\Dependencia $dependencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDependencia', array($dependencia));

        return parent::setDependencia($dependencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getDependencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDependencia', array());

        return parent::getDependencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlan(\afijos\MainBundle\Entity\Plan $plan)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlan', array($plan));

        return parent::setPlan($plan);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlan', array());

        return parent::getPlan();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrabajador(\afijos\MainBundle\Entity\Trabajador $trabajador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrabajador', array($trabajador));

        return parent::setTrabajador($trabajador);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrabajador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrabajador', array());

        return parent::getTrabajador();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}