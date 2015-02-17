-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2014 a las 08:52:26
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `afijos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes_custodio`
--

CREATE TABLE IF NOT EXISTS `bienes_custodio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_etiqueta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_adquisicion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `factor_estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_marcha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `procedencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bien_asegurable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_historico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_adquisicion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_depreciable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_residual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `couta_deprec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deprec_acumulada` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_libros` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grupo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parroquia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `componentes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `financiamiento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_unidad_propiedad` int(11) DEFAULT NULL,
  `id_direccion` int(11) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `id_dependencia` int(11) DEFAULT NULL,
  `id_canton` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_783092DB7B501F07` (`id_unidad_propiedad`),
  KEY `IDX_783092DB73B102B2` (`id_direccion`),
  KEY `IDX_783092DB6325E299` (`id_departamento`),
  KEY `IDX_783092DBCA22CD3F` (`id_dependencia`),
  KEY `IDX_783092DB7DA94CCC` (`id_canton`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canton`
--

CREATE TABLE IF NOT EXISTS `canton` (
  `id_canton` int(11) NOT NULL AUTO_INCREMENT,
  `id_provincia` int(11) DEFAULT NULL,
  `nomb_canton` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_canton`),
  KEY `IDX_5C32FC1753AF4E34` (`id_provincia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `canton`
--

INSERT INTO `canton` (`id_canton`, `id_provincia`, `nomb_canton`) VALUES
(1, 1, 'Machala'),
(2, 1, 'Pasaje'),
(3, 2, 'Guayaquil'),
(4, 2, 'Naranjal'),
(5, 1, 'Santa Rosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE IF NOT EXISTS `dependencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_empleado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_empleado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_empleado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombres_empleado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_emp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `codigo_empleado`, `cedula_empleado`, `apellidos_empleado`, `nombres_empleado`, `tipo_emp`) VALUES
(1, '000001', '0706225653', 'LASSO ZAMORA', 'ADRIANA MARIA', 'usuario'),
(2, '00002', '0702369703', 'Verdaguer', 'Carlos', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_lsubestacion`
--

CREATE TABLE IF NOT EXISTS `imagen_lsubestacion` (
  `id_picture` int(11) NOT NULL AUTO_INCREMENT,
  `id_lsubest` int(11) DEFAULT NULL,
  `pic_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_picture`),
  KEY `IDX_2CA4F7BC3F2AE91C` (`id_lsubest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_lsubtransmision`
--

CREATE TABLE IF NOT EXISTS `imagen_lsubtransmision` (
  `id_picture` int(11) NOT NULL AUTO_INCREMENT,
  `id_lsubtrans` int(11) DEFAULT NULL,
  `pic_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_picture`),
  KEY `IDX_D89BC4C4B3DBF437` (`id_lsubtrans`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `imagen_lsubtransmision`
--

INSERT INTO `imagen_lsubtransmision` (`id_picture`, `id_lsubtrans`, `pic_path`) VALUES
(3, 239, 'bundles/afijos/lsubbundle/img/5470f268456bb.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_subestacion`
--

CREATE TABLE IF NOT EXISTS `lineas_subestacion` (
  `id_lsubest` int(11) NOT NULL AUTO_INCREMENT,
  `id_canton` int(11) DEFAULT NULL,
  `id_subestacion` int(11) DEFAULT NULL,
  `codigo_lsubest` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parroquia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regional` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dependencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `custodio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etiqueta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuenta_contable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_cuenta_contable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `compo_sistema` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productividad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unidades` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_operativa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_lsubest`),
  KEY `IDX_ECA6A3D27DA94CCC` (`id_canton`),
  KEY `IDX_ECA6A3D221304921` (`id_subestacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `lineas_subestacion`
--

INSERT INTO `lineas_subestacion` (`id_lsubest`, `id_canton`, `id_subestacion`, `codigo_lsubest`, `parroquia`, `regional`, `dependencia`, `custodio`, `etiqueta`, `cuenta_contable`, `sub_cuenta_contable`, `descripcion`, `tipo`, `compo_sistema`, `anio`, `marca`, `modelo`, `serie`, `color`, `material`, `productividad`, `estado`, `capacidad`, `unidades`, `cantidad`, `observaciones`, `area_operativa`) VALUES
(1, 1, 10, '64978', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '65', '465', '465', '46', '54', '654', '654', '654', '6', '54', '654');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_subtransmision`
--

CREATE TABLE IF NOT EXISTS `lineas_subtransmision` (
  `id_lsubtrans` int(11) NOT NULL AUTO_INCREMENT,
  `id_canton` int(11) DEFAULT NULL,
  `codigoLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coordeEsteLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coordeNorteLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alturaLSubtrans` decimal(10,2) NOT NULL,
  `fechaFabricLSubtrans` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `estadoLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserLSubtrans` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nombEstructura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoEstructura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserEstructura` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tipoEstructura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoPTierra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserPTierra` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cantidadTensor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `estadoTensor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserTensor` longtext COLLATE utf8_unicode_ci NOT NULL,
  `longitudCFase` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoCFase` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserCFase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `longitudCGuardia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoCGuardia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserCGuardia` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tipoPTierra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descPTierra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calibrePTierra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipoTensor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calibreTensor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipoCFase` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matCFase` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calibreCFase` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipoCGuardia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matCGuardia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calibreCGuardia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `etapa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `voltaje` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `posteria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_subtransmision` int(11) DEFAULT NULL,
  `tipoLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_lsubtrans`),
  KEY `IDX_AA0BDB527DA94CCC` (`id_canton`),
  KEY `IDX_AA0BDB52A0743B01` (`id_subtransmision`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=240 ;

--
-- Volcado de datos para la tabla `lineas_subtransmision`
--

INSERT INTO `lineas_subtransmision` (`id_lsubtrans`, `id_canton`, `codigoLSubtrans`, `coordeEsteLSubtrans`, `coordeNorteLSubtrans`, `alturaLSubtrans`, `fechaFabricLSubtrans`, `estadoLSubtrans`, `obserLSubtrans`, `nombEstructura`, `estadoEstructura`, `obserEstructura`, `tipoEstructura`, `estadoPTierra`, `obserPTierra`, `cantidadTensor`, `estadoTensor`, `obserTensor`, `longitudCFase`, `estadoCFase`, `obserCFase`, `longitudCGuardia`, `estadoCGuardia`, `obserCGuardia`, `tipoPTierra`, `descPTierra`, `calibrePTierra`, `tipoTensor`, `calibreTensor`, `tipoCFase`, `matCFase`, `calibreCFase`, `tipoCGuardia`, `matCGuardia`, `calibreCGuardia`, `etapa`, `voltaje`, `posteria`, `matLSubtrans`, `id_subtransmision`, `tipoLSubtrans`) VALUES
(1, 1, 'lsub0001', 'norte', 'sur', '0.00', '2014-10-29', 'b', 'ass', 'est1', 'b', 'as', 'ptierra1', 'b', 'as', '1', 'b', 'as', '123', 'b', 'as', '212', 'b', 'as', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, ''),
(11, 1, 'asd', 'asca', 'asdasd', '0.00', '2014-10-29', 'asd', 'as', 'aas', 'asd', 'as', 'asc', 'asd', 'asas', '4', 'b', 'as', 'as', 'b', 'asas', '212', 'ascas', 'asas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, ''),
(12, 1, 'asd', 'asd', 'asdasd', '0.00', '2014-10-29', 'asd', 'jkj', 'aas', 'as', 'jk', 'asd', 'as', 'jk', '1', 'asda', 'jk', 'as', 'asa', 'jk', 'asc', 'as', 'jk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, ''),
(13, 3, 'asd', 'asca', 'asdasd', '0.00', '2014-10-31', 'asc', 'asd', 'est1', 'asd', 'asd', 'as', 'asd', 'asd', '3', 'asd', 'asds', '123', 'asdas', 'asdas', 'as', 'as', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, ''),
(14, 1, 'as', 'as', 'aas', '0.00', '2014-11-11', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', '2', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 2, 'as'),
(15, 3, 'asd', 'asd', 'asd', '0.00', '2014-11-11', 'asd', 'dasda', 'as', 'dasd', 'asd', 'jh', 'k', 'jhlk', '1', 'jh', 'lkjh', 'lk', 'jh', 'lkj', 'h', 'lkjh', 'lk', 'lkjh', 'lkjhl', 'lkjh', 'lkj', 'hl', 'kjh', 'lk', 'jh', 'lkjh', 'lk', 'lkjh', 'jh', 'lkj', 'hl', 'lk', 2, 'kjh'),
(17, 1, '000015', '645', '645', '654.00', '0000-00-00', '654', '654', '64', '64', '654', '654', '654', '654', '654', '65', '4654', '64', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', 1, '645'),
(21, 4, '987654321', '654', '654', '654.00', '0000-00-00', '654', '65', '654', '654', '654', '654', '546', '54', '654', '65', '46', '546', '46', '54', '654', '65', '46', '65', '465', '46', '654', '654', '54', '654', '65', '65', '46', '54', '654', '987', '654', '654', 3, '654'),
(22, 4, '987654321', '654', '654', '654.00', '0000-00-00', '654', '65', '654', '654', '654', '654', '546', '54', '654', '65', '46', '546', '46', '54', '654', '65', '46', '65', '465', '46', '654', '654', '54', '654', '65', '65', '46', '54', '654', '987', '654', '654', 3, '654'),
(24, 2, '654', '654', '65', '6.00', '0000-00-00', '654', '654', '654', '654', '65', '64', '65', '46', '654', '54', '654', '6', '54', '654', '6', '54', '654', '46', '54', '654', '54', '6', '54', '654', '6', '54', '654', '6', '654', '654', '54', '654', 2, '4654'),
(25, 4, '0123456', '654', '645', '654.00', '0000-00-00', '654', '654', '987', '987', '987', '97', '987', '987', '987', '987', '987', '987', '987', '987', '987', '987', '654', '987', '987', '987', '987', '978', '987', '987', '987', '987', '987', '987', '645', '645', '654', '654', 2, '64'),
(26, 3, '00045', '987', '987', '987.00', '0000-00-00', '79', '87', '987', '98', '79', '987', '79', '87', '98', '87', '987', '987', '879', '87', '98', '789', '87', '87', '987', '98', '987', '79', '987', '98', '79', '79', '87', '9', '654', '9', '98', '987', 2, '987'),
(27, 1, '00065', '645', '654', '654.00', '0000-00-00', '654', '654', '64', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '654', '65', '4', '654', '654', '645', '654', '654', '65', '46', '54', '6', '54', '654', '654', '654', '654', '654', 3, '654'),
(29, 4, '987', '978', '987', '978.00', '978', '987', '987', '987', '987', '987', '987', '987', '987', '987', '79', '87', '987', '87', '987', '987', '9', '87', '987', '987', '987', '987', '98', '987', '98', '79', '9', '87', '987', '987', '987', '987', '987', 5, '987'),
(30, 1, '102-000493', '603351', '9607608', '12.00', '2001', 'BUENO', 'N/D', 'AU-1-10°-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '1', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'N/D', 'N/D', 'N/D', 'TTD', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON', 7, 'CIRCULAR_500 Kg'),
(31, 1, '102-000494', '603352', '9607627', '16.50', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'BUENO', 'N/D', '1', 'BUENO', 'N/D', '19.03', 'BUENO', 'N/D', '19.03', 'BUENO', '2 BALIZA', 'COBRE ', '7 H', '1/0', 'TTD', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(32, 1, '102-000495', '603352', '9607627', '16.50', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '1', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TTD', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(33, 1, '102-000496', '603333', '9607795', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '169.07', 'BUENO', 'N/D', '169.07', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(34, 1, '102-000497', '603322', '9607936', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '141.43', 'BUENO', 'N/D', '141.43', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(35, 1, '102-000498', '603322', '9607936', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', ' N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(36, 1, '102-000499', '603449', '9608092', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '201.59', 'BUENO', 'N/D', '201.59', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(37, 1, '102-000500', '603581', '9608244', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '201.32', 'BUENO', 'N/D', '201.32', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(38, 1, '102-000501', '603719', '9608414', '20.00', '2001', 'BUENO', 'N/D', 'RU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'BUENO', 'N/D', '218.96', 'BUENO', 'N/D', '218.96', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'TTD', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(39, 1, '102-000502', '603681', '9608552', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '143.14', 'BUENO', 'N/D', '143.14', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(40, 1, '102-000503', '603642', '9608692', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '145.33', 'BUENO', 'N/D', '145.33', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(41, 1, '102-000504', '603605', '9608833', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '145.78', 'BUENO', 'N/D', '145.78', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(42, 1, '102-000505', '603568', '9608973', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'RU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'N/D', 'N/D', '144.81', 'BUENO', 'N/D', '144.81', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', '(TT) (TTD)', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(43, 1, '102-000506', '603627', '9609118', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.54', 'BUENO', 'N/D', '156.54', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(44, 1, '102-000507', '603684', '9609264', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.72', 'BUENO', 'N/D', '156.72', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(45, 1, '102-000508', '603745', '9609416', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '8', 'BUENO', 'N/D', '163.79', 'BUENO', 'N/D', '163.79', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(46, 1, '102-000509', '603745', '9609416', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '0', 'BUENO', '---', '0', '_', '_', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(47, 1, '102-000510', '603724', '9609577', '18.00', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '162.36', 'BUENO', 'N/D', '162.36', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(48, 1, '102-000511', '603712', '9609750', '18.00', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '173.38', 'BUENO', 'N/D', '173.38', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(49, 1, '102-000512', '603699', '9609895', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '145.58', 'BUENO', 'N/D', '145.58', 'BUENO', '1BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(50, 1, '102-000513', '603683', '9610054', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.81', 'BUENO', 'N/D', '159.81', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(51, 1, '102-000514', '603667', '9610214', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.8', 'BUENO', 'N/D', '160.8', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(52, 1, '102-000515', '603655', '9610373', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.45', 'BUENO', 'N/D', '159.45', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(53, 1, '102-000516', '603634', '9610531', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.43', 'BUENO', 'N/D', '159.43', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(54, 1, '102-000517', '603619', '9610688', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.69', 'BUENO', 'N/D', '157.69', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(55, 1, '102-000518', '603604', '9610846', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.71', 'BUENO', 'N/D', '158.71', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(56, 1, '102-000519', '603589', '9611005', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.7', 'BUENO', 'N/D', '159.7', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(57, 1, '102-000520', '603572', '9611167', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '162.89', 'BUENO', 'N/D', '162.89', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(58, 1, '102-000521', '603572', '9611167', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', ' N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(59, 1, '102-000522', '603557', '9611322', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '155.72', 'BUENO', 'N/D', '155.72', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(60, 1, '102-000523', '603542', '9611470', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '148.76', 'BUENO', 'N/D', '148.76', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(61, 1, '102-000524', '603525', '9611629', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.91', 'BUENO', 'N/D', '159.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(62, 1, '102-000525', '603511', '9611788', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.6', 'BUENO', 'N/D', '159.6', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(63, 1, '102-000526', '603495', '9611956', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '168.76', 'BUENO', 'N/D', '168.76', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(64, 1, '102-000527', '603481', '9612103', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '147.67', 'BUENO', 'N/D', '147.67', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(65, 1, '102-000528', '603464', '9612262', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.91', 'BUENO', 'N/D', '159.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(66, 1, '102-000529', '603442', '9612419', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.55', 'BUENO', 'N/D', '158.55', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(67, 1, '102-000530', '603428', '9612577', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.59', 'BUENO', 'N/D', '158.59', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(68, 1, '102-000531', '603411', '9612737', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.91', 'BUENO', 'N/D', '160.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(69, 1, '102-000532', '603393', '9612897', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '161.01', 'BUENO', 'N/D', '161.01', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(70, 1, '102-000533', '603393', '9612897', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(71, 1, '102-000534', '603390', '9613009', '18.00', '1982', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', '2', 'BUENO', 'N/D', '112.04', 'BUENO', 'N/D', '112.04', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', '(TP) (TPD)', '1/0 ', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(72, 1, '102-000535', '603377', '9613169', '18.00', '1993', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.56', 'BUENO', 'N/D', '160.56', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(73, 1, '102-000536', '603365', '9613325', '18.00', '2001', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.46', 'BUENO', 'N/D', '156.46', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(74, 1, '102-000537', '603354', '9613474', '18.00', '1992', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '149.4', 'BUENO', 'N/D', '149.4', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(75, 1, '102-000538', '603335', '9613632', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.17', 'BUENO', 'N/D', '159.17', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(76, 1, '102-000539', '603320', '9613788', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.72', 'BUENO', 'N/D', '156.72', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(77, 1, '102-000540', '603305', '9613953', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '165.68', 'BUENO', 'N/D', '165.68', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(78, 1, '102-000541', '603290', '9614129', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '176.63', 'BUENO', 'N/D', '176.63', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(79, 1, '102-000542', '603277', '9614266', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '137.62', 'BUENO', 'N/D', '137.62', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(80, 1, '102-000543', '603263', '9614424', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.61', 'BUENO', 'N/D', '158.61', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(81, 1, '102-000544', '603251', '9614583', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.45', 'BUENO', 'N/D', '159.45', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(82, 1, '102-000545', '603229', '9614746', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '164.52', 'BUENO', 'N/D', '164.52', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(83, 1, '102-000546', '603229', '9614746', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(84, 1, '102-000547', '603215', '9614903', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.62', 'BUENO', 'N/D', '157.62', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(85, 1, '102-000548', '603199', '9615062', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.8', 'BUENO', 'N/D', '159.8', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(86, 1, '102-000549', '603183', '9615222', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.8', 'BUENO', 'N/D', '160.8', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(87, 1, '102-000550', '603165', '9615390', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '168.96', 'BUENO', 'N/D', '168.96', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(88, 1, '102-000551', '603151', '9615541', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '151.64', 'BUENO', 'N/D', '151.64', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(89, 1, '102-000552', '603133', '9615712', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '171.95', 'BUENO', 'N/D', '171.95', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(90, 1, '102-000553', '603118', '9615858', '16.50', '2001', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '146.77', 'BUENO', 'N/D', '146.77', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(91, 1, '102-000554', '603103', '9616017', '16.50', '1999', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.7', 'BUENO', 'N/D', '159.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(92, 1, '102-000555', '603083', '9616178', '16.50', '2001', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '162.24', 'BUENO', 'N/D', '162.24', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(93, 1, '102-000556', '603066', '9616336', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.9', 'BUENO', 'N/D', '158.9', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(94, 1, '102-000557', '603051', '9616495', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.7', 'BUENO', 'N/D', '159.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(95, 1, '102-000558', '603034', '9616648', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '153.95', 'BUENO', 'N/D', '153.95', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(96, 1, '102-000559', '603034', '9616648', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(97, 1, '102-000560', '603014', '9616818', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '171.17', 'BUENO', 'N/D', '171.17', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(98, 1, '102-000561', '602995', '9616981', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '164.1', 'BUENO', 'N/D', '164.1', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON', 7, 'RECTANGULAR_1200 Kg'),
(99, 1, '102-000562', '602980', '9617138', '16.50', '1991', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.7', 'BUENO', 'N/D', '157.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_800 Kg'),
(100, 1, '102-000563', '602961', '9617303', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '166.1', 'BUENO', 'N/D', '166.1', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(101, 1, '102-000564', '602945', '9617460', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.81', 'BUENO', 'N/D', '157.81', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(102, 1, '102-000565', '602928', '9617619', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.91', 'BUENO', 'N/D', '159.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(103, 1, '102-000566', '602908', '9617776', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.28', 'BUENO', 'N/D', '158.28', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(104, 1, '102-000567', '602889', '9617935', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.13', 'BUENO', 'N/D', '160.13', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(105, 1, '102-000568', '602872', '9618103', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '168.86', 'BUENO', 'N/D', '168.86', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(106, 1, '102-000569', '602839', '9618253', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '153.59', 'BUENO', 'N/D', '153.59', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(107, 1, '102-000570', '602839', '9618408', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '155', 'BUENO', 'N/D', '155', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(108, 1, '102-000571', '602824', '9618564', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '156.78', 'BUENO', 'N/D', '156.78', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(109, 1, '102-000572', '602824', '9618564', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(110, 1, '102-000573', '602799', '9618748', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '185.69', 'BUENO', 'N/D', '185.69', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(111, 1, '102-000574', '602786', '9618887', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '138.92', 'BUENO', 'N/D', '138.92', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(112, 1, '102-000575', '602794', '9619062', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '175.18', 'BUENO', 'N/D', '175.18', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(113, 1, '102-000576', '602755', '9619207', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '150.34', 'BUENO', 'N/D', '150.34', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(114, 1, '102-000577', '602739', '9619366', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.8', 'BUENO', 'N/D', '159.8', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(115, 1, '102-000578', '602724', '9619524', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '158.71', 'BUENO', 'N/D', '158.71', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(116, 1, '102-000579', '602710', '9619688', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '164.6', 'BUENO', 'N/D', '164.6', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(117, 1, '102-000580', '602690', '9619844', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '157.3', 'BUENO', 'N/D', '157.3', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(118, 1, '102-000581', '602680', '9619991', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '147.34', 'BUENO', 'N/D', '147.34', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(119, 1, '102-000582', '602662', '9620150', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '160.04', 'BUENO', 'N/D', '160.04', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(120, 1, '102-000583', '602648', '9620308', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '158.6', 'BUENO', 'N/D', '158.6', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(121, 1, '102-000584', '602633', '9620468', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '160.7', 'BUENO', 'N/D', '160.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(122, 1, '102-000585', '602633', '9620468', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(123, 1, '102-000586', '602618', '9620628', '16.50', '2001', 'REGULAR', 'TRIZADO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.7', 'BUENO', 'N/D', '160.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(124, 1, '102-000587', '602602', '9620785', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.82', 'BUENO', 'N/D', '157.82', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(125, 1, '102-000588', '602590', '9620915', '20.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'RU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '1', 'BUENO', 'N/D', '130.55', 'BUENO', 'N/D', '130.55', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(126, 1, '102-000589', '602539', '9621118', '18.00', '2001', 'MALO', 'TRIZADO', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', '2', 'BUENO', 'N/D', '209.41', 'BUENO', 'N/D', '209.41', 'BUENO', '2 BALIZA', 'COBRE ', '7 H', '1/0', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1800 Kg'),
(127, 1, '102-000590', '602486', '9621294', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '183.84', 'BUENO', 'N/D', '183.84', 'BUENO', '2 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_1200 Kg'),
(128, 1, '102-000591', '602431', '9621470', '20.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '184.4', 'BUENO', 'N/D', '184.4', 'BUENO', '2 BALIZA', 'COBRE ', '7 H', '1/0', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(129, 1, '102-000592', '602431', '9621470', '20.00', '2001', 'REGULAR', 'TRIZADO', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', '2 FLOJOS', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 7, 'RECTANGULAR_2400 Kg'),
(130, 1, '102-000593', '602352', '9621729', '30.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'AU-1-30Â°', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '270.77', 'BUENO', 'N/D', '270.77', 'BUENO', '4 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'ACERO', 7, 'TORRE_30Â°'),
(131, 1, '102-000594', '602472', '9622277', '30.00', '2001', 'BUENO', 'BASES DE CEMENTO CON METAL', 'AU-1-30Â°', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '560.68', 'BUENO', 'N/D', '560.68', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'ACERO', 7, 'TORRE_30Â°'),
(132, 1, '0004568', '654', '654', '54.00', '654', '54654', '64', '654', '654', '654', '654654', '54', '654', '46', '654', '65', '4646', '4', '654', '65', '54', '65', '654', '6', '546', '65', '54', '54', '654', '65', '46', '54', '6', '654', '654', '6', '546', 2, '6'),
(133, 1, '000345', '654', '654', '654.00', '65', '54', '654', '65', '46', '54', '654', '654', '65', '54', '65', '46', '54', '65', '46', '54', '654', '6', '65', '46', '54', '46', '654', '654', '6', '54', '65', '46', '54', '64', '654', '46', '654', 1, '654'),
(134, 1, '654123', '654', '654', '65.00', '46', '654', '6', '654', '6', '54', '4', '65', '46', '654', '4', '654', '65', '46', '54', '65', '46', '54', '654', '6', '54', '54', '65', '46', '54', '65', '46', '54', '65', '64', '654', '54', '654', 1, '654'),
(135, 2, '102-000493', '603351', '9607608', '12.00', '2001', 'BUENO', 'N/D', 'AU-1-10Â°-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '1', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'N/D', 'N/D', 'N/D', 'TTD', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'CIRCULAR_500 Kg');
INSERT INTO `lineas_subtransmision` (`id_lsubtrans`, `id_canton`, `codigoLSubtrans`, `coordeEsteLSubtrans`, `coordeNorteLSubtrans`, `alturaLSubtrans`, `fechaFabricLSubtrans`, `estadoLSubtrans`, `obserLSubtrans`, `nombEstructura`, `estadoEstructura`, `obserEstructura`, `tipoEstructura`, `estadoPTierra`, `obserPTierra`, `cantidadTensor`, `estadoTensor`, `obserTensor`, `longitudCFase`, `estadoCFase`, `obserCFase`, `longitudCGuardia`, `estadoCGuardia`, `obserCGuardia`, `tipoPTierra`, `descPTierra`, `calibrePTierra`, `tipoTensor`, `calibreTensor`, `tipoCFase`, `matCFase`, `calibreCFase`, `tipoCGuardia`, `matCGuardia`, `calibreCGuardia`, `etapa`, `voltaje`, `posteria`, `matLSubtrans`, `id_subtransmision`, `tipoLSubtrans`) VALUES
(136, 2, '102-000494', '603352', '9607627', '16.50', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'BUENO', 'N/D', '1', 'BUENO', 'N/D', '19.03', 'BUENO', 'N/D', '19.03', 'BUENO', '2 BALIZA', 'COBRE ', '7 H', '1/0', 'TTD', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(137, 2, '102-000495', '603352', '9607627', '16.50', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '1', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TTD', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(138, 2, '102-000496', '603333', '9607795', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '169.07', 'BUENO', 'N/D', '169.07', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(139, 2, '102-000497', '603322', '9607936', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '141.43', 'BUENO', 'N/D', '141.43', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(140, 2, '102-000498', '603322', '9607936', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', ' N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(141, 2, '102-000499', '603449', '9608092', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '201.59', 'BUENO', 'N/D', '201.59', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(142, 2, '102-000500', '603581', '9608244', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '201.32', 'BUENO', 'N/D', '201.32', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(143, 2, '102-000501', '603719', '9608414', '20.00', '2001', 'BUENO', 'N/D', 'RU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'BUENO', 'N/D', '218.96', 'BUENO', 'N/D', '218.96', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'TTD', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(144, 2, '102-000502', '603681', '9608552', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '143.14', 'BUENO', 'N/D', '143.14', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(145, 2, '102-000503', '603642', '9608692', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '145.33', 'BUENO', 'N/D', '145.33', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(146, 2, '102-000504', '603605', '9608833', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '145.78', 'BUENO', 'N/D', '145.78', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(147, 2, '102-000505', '603568', '9608973', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'RU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'N/D', 'N/D', '144.81', 'BUENO', 'N/D', '144.81', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', '(TT) (TTD)', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(148, 2, '102-000506', '603627', '9609118', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.54', 'BUENO', 'N/D', '156.54', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(149, 2, '102-000507', '603684', '9609264', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.72', 'BUENO', 'N/D', '156.72', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(150, 2, '102-000508', '603745', '9609416', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '8', 'BUENO', 'N/D', '163.79', 'BUENO', 'N/D', '163.79', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(151, 2, '102-000509', '603745', '9609416', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '0', 'BUENO', '---', '0', '_', '_', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(152, 2, '102-000510', '603724', '9609577', '18.00', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '162.36', 'BUENO', 'N/D', '162.36', 'BUENO', '2 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(153, 2, '102-000511', '603712', '9609750', '18.00', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '173.38', 'BUENO', 'N/D', '173.38', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(154, 2, '102-000512', '603699', '9609895', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '145.58', 'BUENO', 'N/D', '145.58', 'BUENO', '1BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(155, 2, '102-000513', '603683', '9610054', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.81', 'BUENO', 'N/D', '159.81', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(156, 2, '102-000514', '603667', '9610214', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.8', 'BUENO', 'N/D', '160.8', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(157, 2, '102-000515', '603655', '9610373', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.45', 'BUENO', 'N/D', '159.45', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(158, 2, '102-000516', '603634', '9610531', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.43', 'BUENO', 'N/D', '159.43', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(159, 2, '102-000517', '603619', '9610688', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.69', 'BUENO', 'N/D', '157.69', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(160, 2, '102-000518', '603604', '9610846', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.71', 'BUENO', 'N/D', '158.71', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(161, 2, '102-000519', '603589', '9611005', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.7', 'BUENO', 'N/D', '159.7', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(162, 2, '102-000520', '603572', '9611167', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '162.89', 'BUENO', 'N/D', '162.89', 'BUENO', '1 BALIZA', ' N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(163, 2, '102-000521', '603572', '9611167', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', ' N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(164, 2, '102-000522', '603557', '9611322', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '155.72', 'BUENO', 'N/D', '155.72', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(165, 2, '102-000523', '603542', '9611470', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '148.76', 'BUENO', 'N/D', '148.76', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(166, 2, '102-000524', '603525', '9611629', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.91', 'BUENO', 'N/D', '159.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(167, 2, '102-000525', '603511', '9611788', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.6', 'BUENO', 'N/D', '159.6', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(168, 2, '102-000526', '603495', '9611956', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '168.76', 'BUENO', 'N/D', '168.76', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(169, 2, '102-000527', '603481', '9612103', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '147.67', 'BUENO', 'N/D', '147.67', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(170, 2, '102-000528', '603464', '9612262', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.91', 'BUENO', 'N/D', '159.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(171, 2, '102-000529', '603442', '9612419', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.55', 'BUENO', 'N/D', '158.55', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(172, 2, '102-000530', '603428', '9612577', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.59', 'BUENO', 'N/D', '158.59', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(173, 2, '102-000531', '603411', '9612737', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.91', 'BUENO', 'N/D', '160.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(174, 2, '102-000532', '603393', '9612897', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '161.01', 'BUENO', 'N/D', '161.01', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(175, 2, '102-000533', '603393', '9612897', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '6', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(176, 2, '102-000534', '603390', '9613009', '18.00', '1982', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', '2', 'BUENO', 'N/D', '112.04', 'BUENO', 'N/D', '112.04', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', '(TP) (TPD)', '1/0 ', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(177, 2, '102-000535', '603377', '9613169', '18.00', '1993', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.56', 'BUENO', 'N/D', '160.56', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(178, 2, '102-000536', '603365', '9613325', '18.00', '2001', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.46', 'BUENO', 'N/D', '156.46', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(179, 2, '102-000537', '603354', '9613474', '18.00', '1992', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '149.4', 'BUENO', 'N/D', '149.4', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(180, 2, '102-000538', '603335', '9613632', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.17', 'BUENO', 'N/D', '159.17', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(181, 2, '102-000539', '603320', '9613788', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '156.72', 'BUENO', 'N/D', '156.72', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(182, 2, '102-000540', '603305', '9613953', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '165.68', 'BUENO', 'N/D', '165.68', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(183, 2, '102-000541', '603290', '9614129', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '176.63', 'BUENO', 'N/D', '176.63', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(184, 2, '102-000542', '603277', '9614266', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '137.62', 'BUENO', 'N/D', '137.62', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(185, 2, '102-000543', '603263', '9614424', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.61', 'BUENO', 'N/D', '158.61', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(186, 2, '102-000544', '603251', '9614583', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.45', 'BUENO', 'N/D', '159.45', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(187, 2, '102-000545', '603229', '9614746', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '164.52', 'BUENO', 'N/D', '164.52', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(188, 2, '102-000546', '603229', '9614746', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(189, 2, '102-000547', '603215', '9614903', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.62', 'BUENO', 'N/D', '157.62', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(190, 2, '102-000548', '603199', '9615062', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.8', 'BUENO', 'N/D', '159.8', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(191, 2, '102-000549', '603183', '9615222', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.8', 'BUENO', 'N/D', '160.8', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(192, 2, '102-000550', '603165', '9615390', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '168.96', 'BUENO', 'N/D', '168.96', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(193, 2, '102-000551', '603151', '9615541', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '151.64', 'BUENO', 'N/D', '151.64', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(194, 2, '102-000552', '603133', '9615712', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '171.95', 'BUENO', 'N/D', '171.95', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(195, 2, '102-000553', '603118', '9615858', '16.50', '2001', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '146.77', 'BUENO', 'N/D', '146.77', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(196, 2, '102-000554', '603103', '9616017', '16.50', '1999', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.7', 'BUENO', 'N/D', '159.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(197, 2, '102-000555', '603083', '9616178', '16.50', '2001', 'BUENO', 'N/D', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '162.24', 'BUENO', 'N/D', '162.24', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(198, 2, '102-000556', '603066', '9616336', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.9', 'BUENO', 'N/D', '158.9', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(199, 2, '102-000557', '603051', '9616495', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.7', 'BUENO', 'N/D', '159.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(200, 2, '102-000558', '603034', '9616648', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '153.95', 'BUENO', 'N/D', '153.95', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(201, 2, '102-000559', '603034', '9616648', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(202, 2, '102-000560', '603014', '9616818', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '171.17', 'BUENO', 'N/D', '171.17', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(203, 2, '102-000561', '602995', '9616981', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '164.1', 'BUENO', 'N/D', '164.1', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON', 2, 'RECTANGULAR_1200 Kg'),
(204, 2, '102-000562', '602980', '9617138', '16.50', '1991', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.7', 'BUENO', 'N/D', '157.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_800 Kg'),
(205, 2, '102-000563', '602961', '9617303', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '166.1', 'BUENO', 'N/D', '166.1', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(206, 2, '102-000564', '602945', '9617460', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.81', 'BUENO', 'N/D', '157.81', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(207, 2, '102-000565', '602928', '9617619', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.91', 'BUENO', 'N/D', '159.91', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(208, 2, '102-000566', '602908', '9617776', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '158.28', 'BUENO', 'N/D', '158.28', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(209, 2, '102-000567', '602889', '9617935', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.13', 'BUENO', 'N/D', '160.13', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(210, 2, '102-000568', '602872', '9618103', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '168.86', 'BUENO', 'N/D', '168.86', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(211, 2, '102-000569', '602839', '9618253', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '153.59', 'BUENO', 'N/D', '153.59', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(212, 2, '102-000570', '602839', '9618408', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '155', 'BUENO', 'N/D', '155', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(213, 2, '102-000571', '602824', '9618564', '18.00', '2001', 'BUENO', 'N/D', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '156.78', 'BUENO', 'N/D', '156.78', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(214, 2, '102-000572', '602824', '9618564', '18.00', '2001', 'BUENO', 'N/D', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'N/D', 'N/D', 'N/D', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(215, 2, '102-000573', '602799', '9618748', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '185.69', 'BUENO', 'N/D', '185.69', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(216, 2, '102-000574', '602786', '9618887', '16.50', '2001', 'BUENO', 'N/D', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '138.92', 'BUENO', 'N/D', '138.92', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(217, 2, '102-000575', '602794', '9619062', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '175.18', 'BUENO', 'N/D', '175.18', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(218, 2, '102-000576', '602755', '9619207', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '150.34', 'BUENO', 'N/D', '150.34', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(219, 2, '102-000577', '602739', '9619366', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '159.8', 'BUENO', 'N/D', '159.8', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(220, 2, '102-000578', '602724', '9619524', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '158.71', 'BUENO', 'N/D', '158.71', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(221, 2, '102-000579', '602710', '9619688', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '164.6', 'BUENO', 'N/D', '164.6', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(222, 2, '102-000580', '602690', '9619844', '18.00', '1993', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '157.3', 'BUENO', 'N/D', '157.3', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(223, 2, '102-000581', '602680', '9619991', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '147.34', 'BUENO', 'N/D', '147.34', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(224, 2, '102-000582', '602662', '9620150', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '160.04', 'BUENO', 'N/D', '160.04', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(225, 2, '102-000583', '602648', '9620308', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', '158.6', 'BUENO', 'N/D', '158.6', 'BUENO', '1 BALIZA', 'COBRE ', '7 H', '1/0', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(226, 2, '102-000584', '602633', '9620468', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '4', 'BUENO', 'N/D', '160.7', 'BUENO', 'N/D', '160.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(227, 2, '102-000585', '602633', '9620468', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(228, 2, '102-000586', '602618', '9620628', '16.50', '2001', 'REGULAR', 'TRIZADO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '160.7', 'BUENO', 'N/D', '160.7', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(229, 2, '102-000587', '602602', '9620785', '18.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '157.82', 'BUENO', 'N/D', '157.82', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(230, 2, '102-000588', '602590', '9620915', '20.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'RU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', '1', 'BUENO', 'N/D', '130.55', 'BUENO', 'N/D', '130.55', 'BUENO', '1 BALIZA', 'N/D', 'N/D', 'N/D', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(231, 2, '102-000589', '602539', '9621118', '18.00', '2001', 'MALO', 'TRIZADO', 'SU-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'BUENO', 'N/D', '2', 'BUENO', 'N/D', '209.41', 'BUENO', 'N/D', '209.41', 'BUENO', '2 BALIZA', 'COBRE ', '7 H', '1/0', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1800 Kg'),
(232, 2, '102-000590', '602486', '9621294', '16.50', '2001', 'BUENO', 'BASE DE CEMENTO', 'S-1-G', 'BUENO', 'AISLADORES PORCELANA', 'PASANTE', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '183.84', 'BUENO', 'N/D', '183.84', 'BUENO', '2 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_1200 Kg'),
(233, 2, '102-000591', '602431', '9621470', '20.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'ERH-G', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', 'N/D', '184.4', 'BUENO', 'N/D', '184.4', 'BUENO', '2 BALIZA', 'COBRE ', '7 H', '1/0', 'TT', '1/0', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(234, 2, '102-000592', '602431', '9621470', '20.00', '2001', 'REGULAR', 'TRIZADO', 'ND', 'ND', 'ND', 'DOBLE RETENCION', 'BUENO', 'N/D', '4', 'BUENO', '2 FLOJOS', '0', 'BUENO', '---', '0', '_', '_', 'COBRE ', '7 H', '1/0', 'TT', '1/0', '_', '_', '_', '_', '_', '_', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'HORMIGON  ', 2, 'RECTANGULAR_2400 Kg'),
(235, 2, '102-000593', '602352', '9621729', '30.00', '2001', 'BUENO', 'BASE DE CEMENTO', 'AU-1-30Â°', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '270.77', 'BUENO', 'N/D', '270.77', 'BUENO', '4 BALIZA', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'ACERO', 2, 'TORRE_30Â°'),
(236, 2, '102-000594', '602472', '9622277', '30.00', '2001', 'BUENO', 'BASES DE CEMENTO CON METAL', 'AU-1-30Â°', 'BUENO', 'AISLADORES PORCELANA', 'DOBLE RETENCION', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', '560.68', 'BUENO', 'N/D', '560.68', 'BUENO', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'N/D', 'ACSR', 'ALUMINIO', '266,8 MCM', '_', 'ACERO', '2 AWG', 'LINEAS Y SUBESTACIONES DE SUBTRANSMISION', '69KV', 'POSTES TORRES Y ACCESORIOS', 'ACERO', 2, 'TORRE_30Â°'),
(237, 1, '3164987', '654', '654', '654.00', '65', '546', '54654', '654', '65', '46', '654', '54', '654', '54', '6', '54', '654', '46', '54', '654', '65', '4', '54', '654', '6', '6', '654', '6', '54', '65', '6', '546', '54', '654', '654', '46', '654', 1, '654'),
(239, 3, '987', '987', '98', '87.00', '98', '987', '9', '9', '87', '98', '987', '98', '79', '98', '987', '9', '87', '98', '79', '87', '79', '87', '7', '9879', '87', '87', '7', '987', '9', '87', '98', '7987', '98', '987', '987', '7', '79', 2, '798');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `id_provincia` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_provincia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nomb_provincia`) VALUES
(1, 'El Oro'),
(2, 'Guayas'),
(4, 'Esmeralda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subestacion`
--

CREATE TABLE IF NOT EXISTS `subestacion` (
  `id_subestacion` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_subestacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_subestacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `subestacion`
--

INSERT INTO `subestacion` (`id_subestacion`, `nomb_subestacion`) VALUES
(1, 'La Avanzada'),
(3, 'Los Pinos'),
(4, 'Santa Rosa'),
(5, 'Machala (Centro)'),
(6, 'Arenillas'),
(7, 'Portovelo (Pache)'),
(8, 'Huaquillas'),
(9, 'Pagua'),
(10, 'Balao'),
(11, 'Saracay'),
(15, 'Pitahaya');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtransmision`
--

CREATE TABLE IF NOT EXISTS `subtransmision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_subestacion_salida` int(11) DEFAULT NULL,
  `id_subestacion_llegada` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5076FEDF94F5399A` (`id_subestacion_salida`),
  KEY `IDX_5076FEDF4382ED35` (`id_subestacion_llegada`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `subtransmision`
--

INSERT INTO `subtransmision` (`id`, `id_subestacion_salida`, `id_subestacion_llegada`) VALUES
(1, 5, 3),
(2, 4, 1),
(3, 6, 1),
(4, 6, 8),
(5, 1, 11),
(6, 11, 7),
(7, 6, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_propiedad`
--

CREATE TABLE IF NOT EXISTS `unidad_propiedad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuenta_activo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuenta_deprec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `porcentaje_deprec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_residual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vida_util` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `tipo_usuario` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `tipo_usuario`, `username`, `password`) VALUES
(1, 'super', '0706225653', '3210'),
(2, 'admin', '0702369703', 'afijos');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bienes_custodio`
--
ALTER TABLE `bienes_custodio`
  ADD CONSTRAINT `FK_783092DB7DA94CCC` FOREIGN KEY (`id_canton`) REFERENCES `canton` (`id_canton`),
  ADD CONSTRAINT `FK_783092DB6325E299` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id`),
  ADD CONSTRAINT `FK_783092DB73B102B2` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id`),
  ADD CONSTRAINT `FK_783092DB7B501F07` FOREIGN KEY (`id_unidad_propiedad`) REFERENCES `unidad_propiedad` (`id`),
  ADD CONSTRAINT `FK_783092DBCA22CD3F` FOREIGN KEY (`id_dependencia`) REFERENCES `dependencia` (`id`);

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `FK_5C32FC1753AF4E34` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`);

--
-- Filtros para la tabla `imagen_lsubestacion`
--
ALTER TABLE `imagen_lsubestacion`
  ADD CONSTRAINT `FK_2CA4F7BC3F2AE91C` FOREIGN KEY (`id_lsubest`) REFERENCES `lineas_subestacion` (`id_lsubest`);

--
-- Filtros para la tabla `imagen_lsubtransmision`
--
ALTER TABLE `imagen_lsubtransmision`
  ADD CONSTRAINT `FK_D89BC4C4B3DBF437` FOREIGN KEY (`id_lsubtrans`) REFERENCES `lineas_subtransmision` (`id_lsubtrans`);

--
-- Filtros para la tabla `lineas_subestacion`
--
ALTER TABLE `lineas_subestacion`
  ADD CONSTRAINT `FK_ECA6A3D221304921` FOREIGN KEY (`id_subestacion`) REFERENCES `subestacion` (`id_subestacion`),
  ADD CONSTRAINT `FK_ECA6A3D27DA94CCC` FOREIGN KEY (`id_canton`) REFERENCES `canton` (`id_canton`);

--
-- Filtros para la tabla `lineas_subtransmision`
--
ALTER TABLE `lineas_subtransmision`
  ADD CONSTRAINT `FK_AA0BDB527DA94CCC` FOREIGN KEY (`id_canton`) REFERENCES `canton` (`id_canton`),
  ADD CONSTRAINT `FK_AA0BDB52A0743B01` FOREIGN KEY (`id_subtransmision`) REFERENCES `subtransmision` (`id`);

--
-- Filtros para la tabla `subtransmision`
--
ALTER TABLE `subtransmision`
  ADD CONSTRAINT `FK_5076FEDF4382ED35` FOREIGN KEY (`id_subestacion_llegada`) REFERENCES `subestacion` (`id_subestacion`),
  ADD CONSTRAINT `FK_5076FEDF94F5399A` FOREIGN KEY (`id_subestacion_salida`) REFERENCES `subestacion` (`id_subestacion`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_2265B05DBF396750` FOREIGN KEY (`id`) REFERENCES `empleado` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
