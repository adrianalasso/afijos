-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2014 a las 07:40:37
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
(1, 1, 'MACHALA'),
(2, 1, 'PASAJE'),
(3, 2, 'GUAYAQUIL'),
(4, 2, 'NARANJAL'),
(5, 1, 'Santa Rosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `id_depart` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_depart`,`id_empleado`),
  KEY `IDX_666965233D090EE5` (`id_depart`),
  KEY `IDX_66696523890253C7` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_depart`, `id_empleado`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id_depart` int(11) NOT NULL AUTO_INCREMENT,
  `desc_depart` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_depart`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_depart`, `desc_depart`) VALUES
(1, 'ACTIVOS FIJOS');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `codigo_empleado`, `cedula_empleado`, `apellidos_empleado`, `nombres_empleado`, `tipo_emp`) VALUES
(1, '000001', '0706225653', 'LASSO ZAMORA', 'ADRIANA MARIA', 'usuario');

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
  `alturaLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaFabricLSubtrans` datetime NOT NULL,
  `estadoLSubtrans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserLSubtrans` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nombEstructura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoEstructura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserEstructura` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tipoEstructura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadoPTierra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obserPTierra` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cantidadTensor` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `lineas_subtransmision`
--

INSERT INTO `lineas_subtransmision` (`id_lsubtrans`, `id_canton`, `codigoLSubtrans`, `coordeEsteLSubtrans`, `coordeNorteLSubtrans`, `alturaLSubtrans`, `fechaFabricLSubtrans`, `estadoLSubtrans`, `obserLSubtrans`, `nombEstructura`, `estadoEstructura`, `obserEstructura`, `tipoEstructura`, `estadoPTierra`, `obserPTierra`, `cantidadTensor`, `estadoTensor`, `obserTensor`, `longitudCFase`, `estadoCFase`, `obserCFase`, `longitudCGuardia`, `estadoCGuardia`, `obserCGuardia`, `tipoPTierra`, `descPTierra`, `calibrePTierra`, `tipoTensor`, `calibreTensor`, `tipoCFase`, `matCFase`, `calibreCFase`, `tipoCGuardia`, `matCGuardia`, `calibreCGuardia`, `etapa`, `voltaje`, `posteria`, `matLSubtrans`, `id_subtransmision`, `tipoLSubtrans`) VALUES
(1, 1, 'lsub0001', 'norte', 'sur', 'alt1', '2014-10-29 00:00:00', 'b', 'ass', 'est1', 'b', 'as', 'ptierra1', 'b', 'as', 1, 'b', 'as', '123', 'b', 'as', '212', 'b', 'as', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, ''),
(10, 1, 'lsub1', 'asd', 'sd', 'alt1', '2014-10-29 00:00:00', 'asas', 'sd', 'sd', 'b', 'sd', 'ptierra1', 'asd', 'sd', 2, 'asd', 'sd', 'asd', 'asa', 'dfsdf', 'as', 'b', 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, ''),
(11, 1, 'asd', 'asca', 'asdasd', 'asda', '2014-10-29 00:00:00', 'asd', 'as', 'aas', 'asd', 'as', 'asc', 'asd', 'asas', 4, 'b', 'as', 'as', 'b', 'asas', '212', 'ascas', 'asas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, ''),
(12, 1, 'asd', 'asd', 'asdasd', 'asda', '2014-10-29 00:00:00', 'asd', 'jkj', 'aas', 'as', 'jk', 'asd', 'as', 'jk', 1, 'asda', 'jk', 'as', 'asa', 'jk', 'asc', 'as', 'jk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, ''),
(13, 3, 'asd', 'asca', 'asdasd', 'asda', '2014-10-31 00:00:00', 'asc', 'asd', 'est1', 'asd', 'asd', 'as', 'asd', 'asd', 3, 'asd', 'asds', '123', 'asdas', 'asdas', 'as', 'as', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, ''),
(14, 1, 'as', 'as', 'aas', 'as', '2014-11-11 00:00:00', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 2, 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 2, 'as'),
(15, 3, 'asd', 'asd', 'asd', 'asd', '2014-11-11 00:00:00', 'asd', 'dasda', 'as', 'dasd', 'asd', 'jh', 'k', 'jhlk', 1, 'jh', 'lkjh', 'lk', 'jh', 'lkj', 'h', 'lkjh', 'lk', 'lkjh', 'lkjhl', 'lkjh', 'lkj', 'hl', 'kjh', 'lk', 'jh', 'lkjh', 'lk', 'lkjh', 'jh', 'lkj', 'hl', 'lk', 2, 'kjh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id_picture` int(11) NOT NULL AUTO_INCREMENT,
  `pic_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_lsubtrans` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_picture`),
  KEY `IDX_D9667615B3DBF437` (`id_lsubtrans`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `picture`
--

INSERT INTO `picture` (`id_picture`, `pic_path`, `id_lsubtrans`) VALUES
(6, 'bundles/afijos/lsubbundle/img/tortuga-marina-01.jpg', 1),
(8, 'bundles/afijos/lsubbundle/img/545105d9f1044.jpeg', 1),
(9, 'bundles/afijos/lsubbundle/img/545105ea2d182.jpeg', 1),
(10, 'bundles/afijos/lsubbundle/img/545107d37c372.jpeg', 10),
(11, 'bundles/afijos/lsubbundle/img/545107d37d5c8.jpeg', 10),
(12, 'bundles/afijos/lsubbundle/img/5451087a4beba.jpeg', 10),
(13, 'bundles/afijos/lsubbundle/img/54510da92a07e.jpeg', 11),
(14, 'bundles/afijos/lsubbundle/img/54510da92b1fa.jpeg', 11),
(15, 'bundles/afijos/lsubbundle/img/54514edd6b6bc.jpeg', 10),
(16, 'bundles/afijos/lsubbundle/img/54514eee32a39.jpeg', 11),
(18, 'bundles/afijos/lsubbundle/img/5451b9d71cf6d.jpeg', 12),
(19, 'bundles/afijos/lsubbundle/img/5453220f532b9.jpeg', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `id_provincia` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_provincia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nomb_provincia`) VALUES
(1, 'EL ORO'),
(2, 'GUAYAS'),
(3, 'AZUAY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subestacion`
--

CREATE TABLE IF NOT EXISTS `subestacion` (
  `id_subestacion` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_subestacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_subestacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

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
(12, 'La Iberia'),
(13, 'Porotillo'),
(14, 'La Primavera');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `subtransmision`
--

INSERT INTO `subtransmision` (`id`, `id_subestacion_salida`, `id_subestacion_llegada`) VALUES
(1, 5, 3),
(2, 4, 1),
(3, 6, 1),
(4, 6, 8),
(5, 1, 11),
(6, 11, 7);

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
(1, 'super', '0706225653', '3210');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `FK_5C32FC1753AF4E34` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`) ON DELETE CASCADE;

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `FK_666965233D090EE5` FOREIGN KEY (`id_depart`) REFERENCES `departamento` (`id_depart`),
  ADD CONSTRAINT `FK_66696523890253C7` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id`);

--
-- Filtros para la tabla `lineas_subtransmision`
--
ALTER TABLE `lineas_subtransmision`
  ADD CONSTRAINT `FK_AA0BDB52A0743B01` FOREIGN KEY (`id_subtransmision`) REFERENCES `subtransmision` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_AA0BDB527DA94CCC` FOREIGN KEY (`id_canton`) REFERENCES `canton` (`id_canton`) ON DELETE SET NULL;

--
-- Filtros para la tabla `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `FK_D9667615B3DBF437` FOREIGN KEY (`id_lsubtrans`) REFERENCES `lineas_subtransmision` (`id_lsubtrans`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subtransmision`
--
ALTER TABLE `subtransmision`
  ADD CONSTRAINT `FK_5076FEDF94F5399A` FOREIGN KEY (`id_subestacion_salida`) REFERENCES `subestacion` (`id_subestacion`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_5076FEDF4382ED35` FOREIGN KEY (`id_subestacion_llegada`) REFERENCES `subestacion` (`id_subestacion`) ON DELETE SET NULL;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_2265B05DBF396750` FOREIGN KEY (`id`) REFERENCES `empleado` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
