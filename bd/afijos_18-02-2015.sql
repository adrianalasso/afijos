-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2015 a las 02:15:10
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
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE IF NOT EXISTS `activos` (
  `actv_id` int(11) NOT NULL AUTO_INCREMENT,
  `udp_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ag_id` int(11) DEFAULT NULL,
  `ap_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctn_id` int(11) DEFAULT NULL,
  `cc_id` int(11) DEFAULT NULL,
  `dpto_id` int(11) DEFAULT NULL,
  `dpd_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pln_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_codigo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `actv_etiqueta` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `actv_observaciones` longtext COLLATE utf8_unicode_ci,
  `actv_historico` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_fecha_adquisicion` date DEFAULT NULL,
  `actv_fecha_marcha` date DEFAULT NULL,
  `actv_tipo_documento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `actv_numero_documento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `actv_procedencia` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_financiamiento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_bien_asegurable` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `actv_calidad` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_factor_estado` decimal(10,2) DEFAULT NULL,
  `actv_valor_historico` decimal(10,2) DEFAULT NULL,
  `actv_valor_adquisicion` decimal(10,2) DEFAULT NULL,
  `actv_valor_residual` decimal(10,2) DEFAULT NULL,
  `actv_valor_depreciable` decimal(10,2) DEFAULT NULL,
  `actv_valor_depreciacion_acumulada` decimal(10,2) DEFAULT NULL,
  `actv_ultima_fecha_depreciacion` date DEFAULT NULL,
  `actv_valor_libros` decimal(10,2) DEFAULT NULL,
  `activo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_eliminado` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actv_fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`actv_id`),
  KEY `IDX_FA4585174A050E2` (`udp_id`),
  KEY `IDX_FA458515D817A78` (`ag_id`),
  KEY `IDX_FA45851904F155E` (`ap_id`),
  KEY `IDX_FA458517109064A` (`ctn_id`),
  KEY `IDX_FA45851A823BE4F` (`cc_id`),
  KEY `IDX_FA458511FA00731` (`dpto_id`),
  KEY `IDX_FA45851F6317056` (`dpd_id`),
  KEY `IDX_FA45851A4DBAA3C` (`pln_id`),
  KEY `IDX_FA458517A663008` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28392 ;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`actv_id`, `udp_id`, `ag_id`, `ap_id`, `ctn_id`, `cc_id`, `dpto_id`, `dpd_id`, `pln_id`, `actv_codigo`, `actv_etiqueta`, `actv_estado`, `actv_observaciones`, `actv_historico`, `actv_fecha_adquisicion`, `actv_fecha_marcha`, `actv_tipo_documento`, `actv_numero_documento`, `actv_procedencia`, `actv_financiamiento`, `actv_bien_asegurable`, `actv_calidad`, `actv_factor_estado`, `actv_valor_historico`, `actv_valor_adquisicion`, `actv_valor_residual`, `actv_valor_depreciable`, `actv_valor_depreciacion_acumulada`, `actv_ultima_fecha_depreciacion`, `actv_valor_libros`, `activo`, `emp_id`, `actv_eliminado`, `actv_fecha_registro`) VALUES
(28347, 'M44', 1, '1612', 1, 1, NULL, '08-S01', '1901', '123', '123', 'A', NULL, 'NO', '2015-02-14', '2015-02-14', 'T', 'N', 'P', 'F', 'S', 'C', '1.00', NULL, '120.00', '3.60', '116.40', NULL, NULL, NULL, 'bienescustodio', '703048918', 'NO', '2015-02-14'),
(28348, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '456', '456', 'A', NULL, 'NO', '2015-02-14', '2015-02-14', 'T', 'N', 'P', 'F', 'S', 'C', '1.00', NULL, '200.00', '24.00', '176.00', '0.00', NULL, NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28349, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '741', '741', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '65', '55', '5', '5', '5', '5', '5.00', NULL, '300.00', '36.00', '264.00', '0.00', '2015-02-14', NULL, 'bienescustodio', '1', 'NO', '2015-02-14'),
(28350, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '3.60', '116.40', '116.40', '2020-02-14', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28351, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-14', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28352, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-14', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28353, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-14', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28354, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-14', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28355, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-14', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28356, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-15', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28357, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-15', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28358, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-15', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28359, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-15', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28360, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '01', '01', 'a', NULL, 'NO', '2015-02-14', '2015-02-14', '4', '4', '4', '4', '4', '4', '4.00', NULL, '120.00', '14.40', '105.60', '0.00', '2015-02-15', NULL, 'bienescustodio', '10', 'NO', '2015-02-14'),
(28361, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '987', '987', 'as', NULL, 'NO', '2015-02-14', '2015-02-14', '65', '65', '65', '65', '65', '65', '65.00', NULL, '100.00', '3.00', '97.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-14'),
(28362, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '987', '987', 'as', NULL, 'NO', '2015-02-14', '2015-02-14', '5', '5', '5', '5', '5', '5', '5.00', NULL, '150.00', '4.50', '145.50', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-14'),
(28363, 'E18', 1, '1601', 3, 1, NULL, '08-S01', '0', '0002', '0002', 'as', NULL, 'NO', '2015-02-14', '2015-02-14', '8', '8', '8', '8', '8', '8', '8.00', NULL, '80.00', '2.40', '77.60', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-14'),
(28364, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '005', '005', 'a', NULL, 'NO', '2015-02-15', '2015-02-15', '8', '8', '8', '8', '8', '8', '8.00', NULL, '200.00', '6.00', '194.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28365, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '7', '7', 'as', NULL, 'NO', '2015-02-15', '2015-02-15', '7', '7', '7', '7', '7', '7', '7.00', NULL, '700.00', '21.00', '679.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28366, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '8', '8', 'as', NULL, 'NO', '2015-02-15', '2015-02-15', '7', '7', '7', '7', '7', '7', '7.00', NULL, '700.00', '21.00', '679.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28367, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '98522', '98522', 'as', NULL, 'NO', '2015-02-15', '2015-02-15', '4', '4', '4', '4', '4', '4', '4.00', NULL, '400.00', '12.00', '388.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28368, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '98498', '9849', 'as', NULL, 'NO', '2015-02-15', '2015-02-15', '12', '8', '8', '8', '8', '8', '12.00', NULL, '800.00', '24.00', '776.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '10', 'NO', '2015-02-15'),
(28369, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '0045', '0045', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '15.00', '485.00', '0.00', '2015-02-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28370, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '0045', '0045', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '15.00', '485.00', '0.00', '2015-02-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28371, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '0045', '0045', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '15.00', '485.00', '0.00', '2015-02-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28372, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '0045', '0045', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '15.00', '485.00', '0.00', '2015-02-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28373, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '0045', '0045', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '15.00', '485.00', '0.00', '2015-02-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28374, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '0045', '0045', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '15.00', '485.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28375, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '0078', '0078', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '8', '8', '8', '8', '8', '8', '8.00', NULL, '800.00', '24.00', '776.00', '0.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28376, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '7777', '7777', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '7', '7', '7', '7', '7', '7', '7.00', NULL, '700.00', '21.00', '679.00', '679.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28377, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '99', '99', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '9', '9', '9', '9', '9', '9', '9.00', NULL, '800.00', '24.00', '776.00', '776.00', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28378, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '977', '977', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '7', '7', '7', '7', '7', '7', '7.00', NULL, '700.00', '21.00', '679.00', '169.75', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28379, 'E04', 1, '1601', 1, 1, NULL, '08-A01', '0', '12354', '12254', 'A', NULL, 'NO', '2015-02-15', '2015-02-15', '8', '8', '8', '8', '8', '8', '8.00', NULL, '198.00', '23.76', '174.24', '43.56', '2015-03-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28380, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '78', '78', 'as', NULL, 'NO', '2015-02-15', '2015-02-15', '8', '8', '8', '8', '8', '8', '8.00', NULL, '198.00', '5.94', '192.06', '320.10', '2015-03-15', NULL, 'bienescustodio', '10', 'NO', '2015-02-15'),
(28381, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '78', '87', 'a', NULL, 'NO', '2015-02-15', '2015-02-15', '8', '8', '8', '8', '8', '8', '8.00', NULL, '198.00', '5.94', '192.06', '3.20', '2015-03-15', NULL, 'bienescustodio', '800801284', 'NO', '2015-02-15'),
(28382, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '9884', '984894', 'as', NULL, 'NO', '2015-02-15', '2015-02-15', '56', '56', '56', '65', '56', '65', '56.00', NULL, '198.00', '5.94', '192.06', '192.06', '2020-02-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28383, 'M44', 1, '1601', 1, 1, NULL, '08-A01', '0', '456', '456', 'as', NULL, 'NO', '2015-02-15', '2015-02-15', '5', '5', '5', '5', '5', '5', '5.00', NULL, '198.00', '5.94', '192.06', '192.06', '2025-02-15', NULL, 'bienescustodio', '1', 'NO', '2015-02-15'),
(28384, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '789456', '789456', 'A', NULL, 'NO', '2014-11-03', '2014-12-01', '5', '5', '2', '5', '5', '5', '5.00', NULL, '100.00', '3.00', '97.00', '97.00', '2019-12-01', NULL, 'bienescustodio', '1', 'SI', '2015-02-17'),
(28385, 'E20', 1, '1601', 1, 1, NULL, '08-A01', '0', '456123', '456123', 'as', NULL, 'NO', '2015-02-17', '2015-02-17', '5', '5', '5', '5', '5', '5', '5.00', NULL, '520.00', '15.60', '504.40', '504.40', '2025-02-17', NULL, 'bienescustodio', '1', 'NO', '2015-02-17'),
(28386, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '654321', '654321', 'as', NULL, 'NO', '2015-02-17', '2015-02-17', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '15.00', '485.00', '485.00', '2020-02-17', NULL, 'bienescustodio', '1', 'NO', '2015-02-17'),
(28387, 'M45', 1, '1601', 1, 1, NULL, '08-L01', '0', '789', '456', 'as', NULL, 'NO', '2015-02-17', '2015-02-17', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '0.00', '500.00', '0.00', '2015-02-17', NULL, 'bienescustodio', '1', 'NO', '2015-02-17'),
(28388, 'M45', 1, '1601', 1, 1, NULL, '08-A01', '0', '784512', '784512', 'as', NULL, 'NO', '2015-02-17', '2015-02-17', '5', '5', '5', '5', '5', '5', '5.00', NULL, '500.00', '0.00', '500.00', '0.00', '2015-02-17', NULL, 'bienescustodio', '1', 'NO', '2015-02-17'),
(28389, 'E18', 1, '1601', 1, 1, NULL, '08-A01', '0', '78', '9', 'as', NULL, 'NO', '2015-02-17', '2015-02-17', '5', '5', '5', '5', '5', '5', '5.00', NULL, '100.00', '3.00', '97.00', '97.00', '2020-02-17', NULL, 'bienescustodio', '1', 'NO', '2015-02-17'),
(28390, 'M45', 1, '1601', 1, 1, 1, '08-A01', '0', '5', '5', 'as', NULL, 'NO', '2015-02-17', '2015-02-17', '5', '5', '5', '5', '5', '5', '5.00', NULL, '100.00', '0.00', '100.00', '0.00', '2015-02-17', NULL, 'lsubestacion', '10', 'NO', '2015-02-17'),
(28391, 'M45', 1, '1601', 1, 1, 1, '08-A01', '0', '5', '5', '5', NULL, 'NO', '2015-02-17', '2015-02-17', '5', '5', '5', '5', '5', '5', '5.00', NULL, '510.00', '0.00', '510.00', '0.00', '2015-02-17', NULL, 'lsubtransmision', '10', 'NO', '2015-02-17');

--
-- Disparadores `activos`
--
DROP TRIGGER IF EXISTS `trigger_actualizar_valores`;
DELIMITER //
CREATE TRIGGER `trigger_actualizar_valores` BEFORE UPDATE ON `activos`
 FOR EACH ROW SET NEW.actv_valor_residual=(NEW.actv_valor_adquisicion*(SELECT udp_indice_residual FROM unidad_propiedad WHERE udp_id=NEW.udp_id))/100, NEW.actv_valor_depreciable=(NEW.actv_valor_adquisicion-NEW.actv_valor_residual)
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trigger_calcular_valores`;
DELIMITER //
CREATE TRIGGER `trigger_calcular_valores` BEFORE INSERT ON `activos`
 FOR EACH ROW IF NEW.actv_valor_adquisicion>0 THEN
	SET NEW.actv_fecha_registro = NOW(),NEW.actv_eliminado = 'NO', NEW.actv_valor_depreciacion_acumulada = 0, NEW.actv_historico='NO', NEW.actv_ultima_fecha_depreciacion=NEW.actv_fecha_marcha, NEW.actv_valor_residual=(NEW.actv_valor_adquisicion*(SELECT udp_indice_residual FROM unidad_propiedad WHERE udp_id=NEW.udp_id))/100, NEW.actv_valor_depreciable=(NEW.actv_valor_adquisicion-NEW.actv_valor_residual);

ELSE
	SET NEW.actv_valor_adquisicion=0, NEW.actv_fecha_registro = NOW(),NEW.actv_eliminado = 'NO', NEW.actv_historico='NO', NEW.actv_valor_depreciacion_acumulada = 0, NEW.actv_ultima_fecha_depreciacion=NEW.actv_fecha_marcha, NEW.actv_valor_residual=(NEW.actv_valor_adquisicion*(SELECT udp_indice_residual FROM unidad_propiedad WHERE udp_id=NEW.udp_id))/100, NEW.actv_valor_depreciable=(NEW.actv_valor_adquisicion-NEW.actv_valor_residual);
END IF
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE IF NOT EXISTS `agencia` (
  `ag_id` int(11) NOT NULL AUTO_INCREMENT,
  `ag_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`ag_id`, `ag_nombre`) VALUES
(1, 'MACHALA'),
(2, 'ARENILLAS'),
(3, 'ATAHUALPA'),
(4, 'BALSAS'),
(5, 'CHILLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_operativa`
--

CREATE TABLE IF NOT EXISTS `area_operativa` (
  `ap_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ap_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `area_operativa`
--

INSERT INTO `area_operativa` (`ap_id`, `ap_descripcion`) VALUES
('1601', 'SUBTRANSMISION'),
('1602', 'SISTEMA DE DISTRIBUCION'),
('1603', 'SISTEMA DE ALUMBRADO PUBLICO GENERAL'),
('1604', 'COMERCIALIZACION (INSTALACIONES A CONSUMIDORES)'),
('1609', 'CENTRALES GEOTERMICAS'),
('1610', 'REPETIDORAS'),
('1612', 'ADMINISTRACION'),
('161801', 'SUBTRANSMISION - EDIFICIO'),
('161802', 'ADMINISTRACION - EDIFICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bajas`
--

CREATE TABLE IF NOT EXISTS `bajas` (
  `bj_id` int(11) NOT NULL AUTO_INCREMENT,
  `actv_id` int(11) DEFAULT NULL,
  `bj_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bj_detalle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bj_estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bj_fecha_solicitada` datetime DEFAULT NULL,
  `bj_fecha_aprobado` datetime DEFAULT NULL,
  PRIMARY KEY (`bj_id`),
  KEY `IDX_972158C4E5CB40B6` (`actv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `bajas`
--

INSERT INTO `bajas` (`bj_id`, `actv_id`, `bj_descripcion`, `bj_detalle`, `bj_estado`, `bj_fecha_solicitada`, `bj_fecha_aprobado`) VALUES
(9, 28384, 'as', 'as', 'APROBADO', '2015-02-17 18:42:41', '2015-02-17 18:42:47');

--
-- Disparadores `bajas`
--
DROP TRIGGER IF EXISTS `trigger_fecha_pendiente`;
DELIMITER //
CREATE TRIGGER `trigger_fecha_pendiente` BEFORE INSERT ON `bajas`
 FOR EACH ROW SET NEW.bj_fecha_solicitada = NOW(), NEW.bj_estado='PENDIENTE'
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes_custodio`
--

CREATE TABLE IF NOT EXISTS `bienes_custodio` (
  `actv_id` int(11) NOT NULL,
  `bc_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bc_marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bc_oficina` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bc_direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bc_departamento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bc_seccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bc_componentes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bc_serie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`actv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bienes_custodio`
--

INSERT INTO `bienes_custodio` (`actv_id`, `bc_descripcion`, `bc_marca`, `bc_oficina`, `bc_direccion`, `bc_departamento`, `bc_seccion`, `bc_componentes`, `bc_serie`) VALUES
(28347, 'ESCRITORIO', 'ND', 'ND', 'ND', 'ND', 'ND', 'ND', 'ND'),
(28348, 'PC LAPTOP', 'HP', 'OFICINAS ADMINISTRATIVAS PRINCIPALES', 'DIRECCION TECNICA', 'SUPERINTENDENCIA GENERACION SUBESTACIONE', 'SUBESTACIONES', 'ND', 'ND'),
(28349, 'ESCRITORIO', '654', '46', 'Puerto Bolivar', '54', '11', '654', '11'),
(28350, '5', '5', '5', '5', '5', '5', '5', '5'),
(28351, '5', '5', '5', '5', '5', '5', '5', '5'),
(28352, '5', '5', '5', '5', '5', '5', '5', '5'),
(28353, '5', '5', '5', '5', '5', '5', '5', '5'),
(28354, '5', '5', '5', '5', '5', '5', '5', '5'),
(28355, '5', '5', '5', '5', '5', '5', '5', '5'),
(28356, '5', '5', '5', '5', '5', '5', '5', '5'),
(28357, '5', '5', '5', '5', '5', '5', '5', '5'),
(28358, '5', '5', '5', '5', '5', '5', '5', '5'),
(28359, '5', '5', '5', '5', '5', '5', '5', '5'),
(28360, '5', '5', '5', '5', '5', '5', '5', '5'),
(28361, '65', '65', '65', '65', '65', '65', '65', '65'),
(28362, '5', '5', '5', '5', '5', '5', '5', '5'),
(28363, '8', '8', '8', '8', '8', '8', '8', '8'),
(28364, '5', '5', '5', '5', '5', '5', '5', '5'),
(28365, '7', '7', '7', '7', '7', '7', '7', '7'),
(28366, '8', '8', '8', '8', '12', '8', '8', '8'),
(28367, '9', '9', '9', '9', '9', '9', '9', '9'),
(28368, '121', '21', '12', '12', '21', '212', '12', '1212'),
(28369, '5', '5', '5', '5', '5', '5', '5', '5'),
(28370, '5', '5', '5', '5', '5', '5', '5', '5'),
(28371, '5', '5', '5', '5', '5', '5', '5', '5'),
(28372, '5', '5', '5', '5', '5', '5', '5', '5'),
(28373, '5', '5', '5', '5', '5', '5', '5', '5'),
(28374, '5', '5', '5', '5', '5', '5', '5', '5'),
(28375, '7', '8', '8', '8', '8', '8', '8', '8'),
(28376, '7', '7', '7', '7', '7', '7', '7', '7'),
(28377, '9', '9', '9', '9', '9', '9', '9', '9'),
(28378, '977', '977', '977', '977', '7977', '977', '977', '977'),
(28379, '5', '5', '5', '5', '5', '5', '5', '5'),
(28380, '78', '87', '87', '87', '8', '87', '87', '87'),
(28381, '8', '8', '8', '8', '8', '8', '8', '8'),
(28382, '989', '8', '89', '8', '8', '89', '98', '89'),
(28383, '5', '5', '5', '5', '5', '5', '5', '5'),
(28384, '5', '5', '5', '5', '5', '5', '5', '5'),
(28385, 'a5', '5', '5', '5', '5', '5', '5', '5'),
(28386, '5', '5', '5', '5', '5', '5', '5', '5'),
(28387, '5', '5', '5', '5', '5', '5', '5', '5'),
(28388, '45', '45', '4', '5', '5', '5', '45', '45'),
(28389, '4', '5', '5', '5', '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canton`
--

CREATE TABLE IF NOT EXISTS `canton` (
  `ctn_id` int(11) NOT NULL AUTO_INCREMENT,
  `ctn_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prv_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ctn_id`),
  KEY `IDX_5C32FC17EEA6FCAF` (`prv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `canton`
--

INSERT INTO `canton` (`ctn_id`, `ctn_nombre`, `prv_id`) VALUES
(1, 'Machala', 1),
(2, 'Pasaje', 1),
(3, 'ARENILLAS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_lsubtransmision`
--

CREATE TABLE IF NOT EXISTS `categoria_lsubtransmision` (
  `clsub_id` int(11) NOT NULL AUTO_INCREMENT,
  `csubest_id_salida` int(11) DEFAULT NULL,
  `csubest_id_llegada` int(11) DEFAULT NULL,
  PRIMARY KEY (`clsub_id`),
  KEY `IDX_3222414154707589` (`csubest_id_salida`),
  KEY `IDX_32224141C7FC29A7` (`csubest_id_llegada`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categoria_lsubtransmision`
--

INSERT INTO `categoria_lsubtransmision` (`clsub_id`, `csubest_id_salida`, `csubest_id_llegada`) VALUES
(1, 9, 2),
(2, 9, 11),
(3, 13, 18),
(4, 12, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_subestacion`
--

CREATE TABLE IF NOT EXISTS `categoria_subestacion` (
  `csubest_id` int(11) NOT NULL AUTO_INCREMENT,
  `csubest_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`csubest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `categoria_subestacion`
--

INSERT INTO `categoria_subestacion` (`csubest_id`, `csubest_nombre`) VALUES
(2, 'La Pitahaya'),
(5, 'LA AVANZADA'),
(6, 'LOS PINOS'),
(7, 'SANTA ROSA'),
(8, 'MACHALA CENTRO'),
(9, 'ARENILLAS'),
(10, 'PORTOVELO (PACHE)'),
(11, 'HUAQUILLAS'),
(12, 'PAGUA'),
(13, 'BALAO'),
(14, 'SARACAY'),
(15, 'LA IBERIA'),
(16, 'POROTILLO'),
(17, 'LA PRIMAVERA'),
(18, 'NARANJAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `emp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dpto_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`,`dpto_id`),
  KEY `IDX_666965237A663008` (`emp_id`),
  KEY `IDX_666965231FA00731` (`dpto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`emp_id`, `dpto_id`) VALUES
('0706225653', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_contable`
--

CREATE TABLE IF NOT EXISTS `cuenta_contable` (
  `cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cc_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cuenta_contable`
--

INSERT INTO `cuenta_contable` (`cc_id`, `cc_codigo`, `cc_descripcion`) VALUES
(1, '1.2.1.03.03', 'EDIFICIOS Y ESTRUCTURAS'),
(2, '1.2.1.03.04', 'INSTALACIONES ELECTROMECANICAS'),
(3, '1.2.1.03.04', 'POSTES TORRES Y ACCESORIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `dpto_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpto_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ssist_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`dpto_id`),
  KEY `IDX_40E497EB76A96CC8` (`ssist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`dpto_id`, `dpto_descripcion`, `ssist_id`) VALUES
(1, 'ACTIVOS FIJOS', 17),
(2, 'CONTABILIDAD', 9),
(3, 'ADQUISICIONES', 9),
(4, 'ARCHIVO GENERAL', 47),
(5, 'ASESORIA JURIDICA', 50),
(6, 'AUDITORIA INTERNA', 50),
(7, 'AUXILIAR AUDITOR', 8),
(8, 'BODEGA', 9),
(9, 'CETEORO', 48),
(10, 'COACTIVOS', 12),
(11, 'ESTUDIOS ECONOMICOS', 13),
(12, 'ESTUDIOS TECNICOS', 13),
(13, 'FERUM', 14),
(14, 'GIS', 13),
(15, 'GERENTE', 47),
(16, 'JEFE DEL GIS', 51),
(17, 'INGENIERO 1', 51),
(18, 'PERSONAL', 49),
(19, 'PRESUPUESTO', 9),
(20, 'RECAUDACIONES', 15),
(21, 'RELACIONES PUBLICAS', 50),
(22, 'SECRETARIA', 15),
(23, 'SECRETARIA', 8),
(24, 'SECRETARIA GERENCIA', 47),
(25, 'SECRETARIA Y ARCHIVO', 50),
(26, 'SEGURIDAD INDUSTRIAL', 49),
(27, 'SERVICIOS GENERALES', 49),
(28, 'SUPERINTENDENCIA ACOMETIDOS Y MEDIDORES', 15),
(29, 'SUPERINTENDENCIA CONTRATOS Y SERVICIOS', 15),
(30, 'SUPERINTENDENCIA DE AGENCIAS', 15),
(31, 'SUPERINTENDENCIA DE CONTROL DE ENTREGA', 50),
(32, 'SUPERINTENDENCIA DE CONTROL DE ENTREGA', 15),
(33, 'SUPERINTENDENCIA DE INFORMATICA', 50),
(34, 'SUPERINTENDENCIA DISTRIBUCION', 14),
(35, 'SUPERINTENDENCIA GENERACION DE SUBESTACIONES', 14),
(36, 'SUPERINTENDENCIA INGENIERIA CONSTRUCCIONES', 14),
(37, 'TESORERIA', 9),
(38, 'TRABAJO SOCIAL', 49),
(39, 'ND', 47),
(40, 'ND', 8),
(41, 'ND', 15),
(42, 'ND', 9),
(43, 'ND', 13),
(44, 'ND', 49),
(46, 'ND', 14),
(47, 'ND', 50),
(49, 'ND', 52),
(50, 'ASESORIA JURIDICA', 47),
(51, 'SUPERINTENDENCIA DE INFORMATICA', 50),
(52, 'RELACIONES PUBLICAS', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE IF NOT EXISTS `dependencia` (
  `dpd_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dpd_descipcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`dpd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`dpd_id`, `dpd_descipcion`) VALUES
('08-A01', 'AGENCIA MACHALA'),
('08-L01', 'L/S ARENILLAS - HUAQUILLAS'),
('08-S01', 'SUBESTACION ARENILLAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_depreciacion`
--

CREATE TABLE IF NOT EXISTS `detalle_depreciacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deprecAcumulada` decimal(10,2) NOT NULL,
  `deprecMensual` decimal(10,2) NOT NULL,
  `fechaDepreciacion` date NOT NULL,
  `mesDepreciacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actv_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F58917FE5CB40B6` (`actv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3193 ;

--
-- Volcado de datos para la tabla `detalle_depreciacion`
--

INSERT INTO `detalle_depreciacion` (`id`, `deprecAcumulada`, `deprecMensual`, `fechaDepreciacion`, `mesDepreciacion`, `actv_id`) VALUES
(2593, '1.60', '1.60', '2015-03-15', '03', 28383),
(2594, '3.20', '1.60', '2015-04-15', '04', 28383),
(2595, '4.80', '1.60', '2015-05-15', '05', 28383),
(2596, '6.40', '1.60', '2015-06-15', '06', 28383),
(2597, '8.00', '1.60', '2015-07-15', '07', 28383),
(2598, '9.60', '1.60', '2015-08-15', '08', 28383),
(2599, '11.20', '1.60', '2015-09-15', '09', 28383),
(2600, '12.80', '1.60', '2015-10-15', '10', 28383),
(2601, '14.40', '1.60', '2015-11-15', '11', 28383),
(2602, '16.01', '1.60', '2015-12-15', '12', 28383),
(2603, '17.61', '1.60', '2016-01-15', '01', 28383),
(2604, '19.21', '1.60', '2016-02-15', '02', 28383),
(2605, '20.81', '1.60', '2016-03-15', '03', 28383),
(2606, '22.41', '1.60', '2016-04-15', '04', 28383),
(2607, '24.01', '1.60', '2016-05-15', '05', 28383),
(2608, '25.61', '1.60', '2016-06-15', '06', 28383),
(2609, '27.21', '1.60', '2016-07-15', '07', 28383),
(2610, '28.81', '1.60', '2016-08-15', '08', 28383),
(2611, '30.41', '1.60', '2016-09-15', '09', 28383),
(2612, '32.01', '1.60', '2016-10-15', '10', 28383),
(2613, '33.61', '1.60', '2016-11-15', '11', 28383),
(2614, '35.21', '1.60', '2016-12-15', '12', 28383),
(2615, '36.81', '1.60', '2017-01-15', '01', 28383),
(2616, '38.41', '1.60', '2017-02-15', '02', 28383),
(2617, '40.01', '1.60', '2017-03-15', '03', 28383),
(2618, '41.61', '1.60', '2017-04-15', '04', 28383),
(2619, '43.21', '1.60', '2017-05-15', '05', 28383),
(2620, '44.81', '1.60', '2017-06-15', '06', 28383),
(2621, '46.41', '1.60', '2017-07-15', '07', 28383),
(2622, '48.02', '1.60', '2017-08-15', '08', 28383),
(2623, '49.62', '1.60', '2017-09-15', '09', 28383),
(2624, '51.22', '1.60', '2017-10-15', '10', 28383),
(2625, '52.82', '1.60', '2017-11-15', '11', 28383),
(2626, '54.42', '1.60', '2017-12-15', '12', 28383),
(2627, '56.02', '1.60', '2018-01-15', '01', 28383),
(2628, '57.62', '1.60', '2018-02-15', '02', 28383),
(2629, '59.22', '1.60', '2018-03-15', '03', 28383),
(2630, '60.82', '1.60', '2018-04-15', '04', 28383),
(2631, '62.42', '1.60', '2018-05-15', '05', 28383),
(2632, '64.02', '1.60', '2018-06-15', '06', 28383),
(2633, '65.62', '1.60', '2018-07-15', '07', 28383),
(2634, '67.22', '1.60', '2018-08-15', '08', 28383),
(2635, '68.82', '1.60', '2018-09-15', '09', 28383),
(2636, '70.42', '1.60', '2018-10-15', '10', 28383),
(2637, '72.02', '1.60', '2018-11-15', '11', 28383),
(2638, '73.62', '1.60', '2018-12-15', '12', 28383),
(2639, '75.22', '1.60', '2019-01-15', '01', 28383),
(2640, '76.82', '1.60', '2019-02-15', '02', 28383),
(2641, '78.42', '1.60', '2019-03-15', '03', 28383),
(2642, '80.03', '1.60', '2019-04-15', '04', 28383),
(2643, '81.63', '1.60', '2019-05-15', '05', 28383),
(2644, '83.23', '1.60', '2019-06-15', '06', 28383),
(2645, '84.83', '1.60', '2019-07-15', '07', 28383),
(2646, '86.43', '1.60', '2019-08-15', '08', 28383),
(2647, '88.03', '1.60', '2019-09-15', '09', 28383),
(2648, '89.63', '1.60', '2019-10-15', '10', 28383),
(2649, '91.23', '1.60', '2019-11-15', '11', 28383),
(2650, '92.83', '1.60', '2019-12-15', '12', 28383),
(2651, '94.43', '1.60', '2020-01-15', '01', 28383),
(2652, '96.03', '1.60', '2020-02-15', '02', 28383),
(2653, '97.63', '1.60', '2020-03-15', '03', 28383),
(2654, '99.23', '1.60', '2020-04-15', '04', 28383),
(2655, '100.83', '1.60', '2020-05-15', '05', 28383),
(2656, '102.43', '1.60', '2020-06-15', '06', 28383),
(2657, '104.03', '1.60', '2020-07-15', '07', 28383),
(2658, '105.63', '1.60', '2020-08-15', '08', 28383),
(2659, '107.23', '1.60', '2020-09-15', '09', 28383),
(2660, '108.83', '1.60', '2020-10-15', '10', 28383),
(2661, '110.43', '1.60', '2020-11-15', '11', 28383),
(2662, '112.04', '1.60', '2020-12-15', '12', 28383),
(2663, '113.64', '1.60', '2021-01-15', '01', 28383),
(2664, '115.24', '1.60', '2021-02-15', '02', 28383),
(2665, '116.84', '1.60', '2021-03-15', '03', 28383),
(2666, '118.44', '1.60', '2021-04-15', '04', 28383),
(2667, '120.04', '1.60', '2021-05-15', '05', 28383),
(2668, '121.64', '1.60', '2021-06-15', '06', 28383),
(2669, '123.24', '1.60', '2021-07-15', '07', 28383),
(2670, '124.84', '1.60', '2021-08-15', '08', 28383),
(2671, '126.44', '1.60', '2021-09-15', '09', 28383),
(2672, '128.04', '1.60', '2021-10-15', '10', 28383),
(2673, '129.64', '1.60', '2021-11-15', '11', 28383),
(2674, '131.24', '1.60', '2021-12-15', '12', 28383),
(2675, '132.84', '1.60', '2022-01-15', '01', 28383),
(2676, '134.44', '1.60', '2022-02-15', '02', 28383),
(2677, '136.04', '1.60', '2022-03-15', '03', 28383),
(2678, '137.64', '1.60', '2022-04-15', '04', 28383),
(2679, '139.24', '1.60', '2022-05-15', '05', 28383),
(2680, '140.84', '1.60', '2022-06-15', '06', 28383),
(2681, '142.44', '1.60', '2022-07-15', '07', 28383),
(2682, '144.05', '1.60', '2022-08-15', '08', 28383),
(2683, '145.65', '1.60', '2022-09-15', '09', 28383),
(2684, '147.25', '1.60', '2022-10-15', '10', 28383),
(2685, '148.85', '1.60', '2022-11-15', '11', 28383),
(2686, '150.45', '1.60', '2022-12-15', '12', 28383),
(2687, '152.05', '1.60', '2023-01-15', '01', 28383),
(2688, '153.65', '1.60', '2023-02-15', '02', 28383),
(2689, '155.25', '1.60', '2023-03-15', '03', 28383),
(2690, '156.85', '1.60', '2023-04-15', '04', 28383),
(2691, '158.45', '1.60', '2023-05-15', '05', 28383),
(2692, '160.05', '1.60', '2023-06-15', '06', 28383),
(2693, '161.65', '1.60', '2023-07-15', '07', 28383),
(2694, '163.25', '1.60', '2023-08-15', '08', 28383),
(2695, '164.85', '1.60', '2023-09-15', '09', 28383),
(2696, '166.45', '1.60', '2023-10-15', '10', 28383),
(2697, '168.05', '1.60', '2023-11-15', '11', 28383),
(2698, '169.65', '1.60', '2023-12-15', '12', 28383),
(2699, '171.25', '1.60', '2024-01-15', '01', 28383),
(2700, '172.85', '1.60', '2024-02-15', '02', 28383),
(2701, '174.45', '1.60', '2024-03-15', '03', 28383),
(2702, '176.06', '1.60', '2024-04-15', '04', 28383),
(2703, '177.66', '1.60', '2024-05-15', '05', 28383),
(2704, '179.26', '1.60', '2024-06-15', '06', 28383),
(2705, '180.86', '1.60', '2024-07-15', '07', 28383),
(2706, '182.46', '1.60', '2024-08-15', '08', 28383),
(2707, '184.06', '1.60', '2024-09-15', '09', 28383),
(2708, '185.66', '1.60', '2024-10-15', '10', 28383),
(2709, '187.26', '1.60', '2024-11-15', '11', 28383),
(2710, '188.86', '1.60', '2024-12-15', '12', 28383),
(2711, '190.46', '1.60', '2025-01-15', '01', 28383),
(2712, '192.06', '1.60', '2025-02-15', '02', 28383),
(2773, '4.20', '4.20', '2015-03-17', '03', 28385),
(2774, '8.41', '4.20', '2015-04-17', '04', 28385),
(2775, '12.61', '4.20', '2015-05-17', '05', 28385),
(2776, '16.81', '4.20', '2015-06-17', '06', 28385),
(2777, '21.02', '4.20', '2015-07-17', '07', 28385),
(2778, '25.22', '4.20', '2015-08-17', '08', 28385),
(2779, '29.42', '4.20', '2015-09-17', '09', 28385),
(2780, '33.63', '4.20', '2015-10-17', '10', 28385),
(2781, '37.83', '4.20', '2015-11-17', '11', 28385),
(2782, '42.03', '4.20', '2015-12-17', '12', 28385),
(2783, '46.24', '4.20', '2016-01-17', '01', 28385),
(2784, '50.44', '4.20', '2016-02-17', '02', 28385),
(2785, '54.64', '4.20', '2016-03-17', '03', 28385),
(2786, '58.85', '4.20', '2016-04-17', '04', 28385),
(2787, '63.05', '4.20', '2016-05-17', '05', 28385),
(2788, '67.25', '4.20', '2016-06-17', '06', 28385),
(2789, '71.46', '4.20', '2016-07-17', '07', 28385),
(2790, '75.66', '4.20', '2016-08-17', '08', 28385),
(2791, '79.86', '4.20', '2016-09-17', '09', 28385),
(2792, '84.07', '4.20', '2016-10-17', '10', 28385),
(2793, '88.27', '4.20', '2016-11-17', '11', 28385),
(2794, '92.47', '4.20', '2016-12-17', '12', 28385),
(2795, '96.68', '4.20', '2017-01-17', '01', 28385),
(2796, '100.88', '4.20', '2017-02-17', '02', 28385),
(2797, '105.08', '4.20', '2017-03-17', '03', 28385),
(2798, '109.29', '4.20', '2017-04-17', '04', 28385),
(2799, '113.49', '4.20', '2017-05-17', '05', 28385),
(2800, '117.69', '4.20', '2017-06-17', '06', 28385),
(2801, '121.90', '4.20', '2017-07-17', '07', 28385),
(2802, '126.10', '4.20', '2017-08-17', '08', 28385),
(2803, '130.30', '4.20', '2017-09-17', '09', 28385),
(2804, '134.51', '4.20', '2017-10-17', '10', 28385),
(2805, '138.71', '4.20', '2017-11-17', '11', 28385),
(2806, '142.91', '4.20', '2017-12-17', '12', 28385),
(2807, '147.12', '4.20', '2018-01-17', '01', 28385),
(2808, '151.32', '4.20', '2018-02-17', '02', 28385),
(2809, '155.52', '4.20', '2018-03-17', '03', 28385),
(2810, '159.73', '4.20', '2018-04-17', '04', 28385),
(2811, '163.93', '4.20', '2018-05-17', '05', 28385),
(2812, '168.13', '4.20', '2018-06-17', '06', 28385),
(2813, '172.34', '4.20', '2018-07-17', '07', 28385),
(2814, '176.54', '4.20', '2018-08-17', '08', 28385),
(2815, '180.74', '4.20', '2018-09-17', '09', 28385),
(2816, '184.95', '4.20', '2018-10-17', '10', 28385),
(2817, '189.15', '4.20', '2018-11-17', '11', 28385),
(2818, '193.35', '4.20', '2018-12-17', '12', 28385),
(2819, '197.56', '4.20', '2019-01-17', '01', 28385),
(2820, '201.76', '4.20', '2019-02-17', '02', 28385),
(2821, '205.96', '4.20', '2019-03-17', '03', 28385),
(2822, '210.17', '4.20', '2019-04-17', '04', 28385),
(2823, '214.37', '4.20', '2019-05-17', '05', 28385),
(2824, '218.57', '4.20', '2019-06-17', '06', 28385),
(2825, '222.78', '4.20', '2019-07-17', '07', 28385),
(2826, '226.98', '4.20', '2019-08-17', '08', 28385),
(2827, '231.18', '4.20', '2019-09-17', '09', 28385),
(2828, '235.39', '4.20', '2019-10-17', '10', 28385),
(2829, '239.59', '4.20', '2019-11-17', '11', 28385),
(2830, '243.79', '4.20', '2019-12-17', '12', 28385),
(2831, '248.00', '4.20', '2020-01-17', '01', 28385),
(2832, '252.20', '4.20', '2020-02-17', '02', 28385),
(2833, '256.40', '4.20', '2020-03-17', '03', 28385),
(2834, '260.61', '4.20', '2020-04-17', '04', 28385),
(2835, '264.81', '4.20', '2020-05-17', '05', 28385),
(2836, '269.01', '4.20', '2020-06-17', '06', 28385),
(2837, '273.22', '4.20', '2020-07-17', '07', 28385),
(2838, '277.42', '4.20', '2020-08-17', '08', 28385),
(2839, '281.62', '4.20', '2020-09-17', '09', 28385),
(2840, '285.83', '4.20', '2020-10-17', '10', 28385),
(2841, '290.03', '4.20', '2020-11-17', '11', 28385),
(2842, '294.23', '4.20', '2020-12-17', '12', 28385),
(2843, '298.44', '4.20', '2021-01-17', '01', 28385),
(2844, '302.64', '4.20', '2021-02-17', '02', 28385),
(2845, '306.84', '4.20', '2021-03-17', '03', 28385),
(2846, '311.05', '4.20', '2021-04-17', '04', 28385),
(2847, '315.25', '4.20', '2021-05-17', '05', 28385),
(2848, '319.45', '4.20', '2021-06-17', '06', 28385),
(2849, '323.66', '4.20', '2021-07-17', '07', 28385),
(2850, '327.86', '4.20', '2021-08-17', '08', 28385),
(2851, '332.06', '4.20', '2021-09-17', '09', 28385),
(2852, '336.27', '4.20', '2021-10-17', '10', 28385),
(2853, '340.47', '4.20', '2021-11-17', '11', 28385),
(2854, '344.67', '4.20', '2021-12-17', '12', 28385),
(2855, '348.88', '4.20', '2022-01-17', '01', 28385),
(2856, '353.08', '4.20', '2022-02-17', '02', 28385),
(2857, '357.28', '4.20', '2022-03-17', '03', 28385),
(2858, '361.49', '4.20', '2022-04-17', '04', 28385),
(2859, '365.69', '4.20', '2022-05-17', '05', 28385),
(2860, '369.89', '4.20', '2022-06-17', '06', 28385),
(2861, '374.10', '4.20', '2022-07-17', '07', 28385),
(2862, '378.30', '4.20', '2022-08-17', '08', 28385),
(2863, '382.50', '4.20', '2022-09-17', '09', 28385),
(2864, '386.71', '4.20', '2022-10-17', '10', 28385),
(2865, '390.91', '4.20', '2022-11-17', '11', 28385),
(2866, '395.11', '4.20', '2022-12-17', '12', 28385),
(2867, '399.32', '4.20', '2023-01-17', '01', 28385),
(2868, '403.52', '4.20', '2023-02-17', '02', 28385),
(2869, '407.72', '4.20', '2023-03-17', '03', 28385),
(2870, '411.93', '4.20', '2023-04-17', '04', 28385),
(2871, '416.13', '4.20', '2023-05-17', '05', 28385),
(2872, '420.33', '4.20', '2023-06-17', '06', 28385),
(2873, '424.54', '4.20', '2023-07-17', '07', 28385),
(2874, '428.74', '4.20', '2023-08-17', '08', 28385),
(2875, '432.94', '4.20', '2023-09-17', '09', 28385),
(2876, '437.15', '4.20', '2023-10-17', '10', 28385),
(2877, '441.35', '4.20', '2023-11-17', '11', 28385),
(2878, '445.55', '4.20', '2023-12-17', '12', 28385),
(2879, '449.76', '4.20', '2024-01-17', '01', 28385),
(2880, '453.96', '4.20', '2024-02-17', '02', 28385),
(2881, '458.16', '4.20', '2024-03-17', '03', 28385),
(2882, '462.37', '4.20', '2024-04-17', '04', 28385),
(2883, '466.57', '4.20', '2024-05-17', '05', 28385),
(2884, '470.77', '4.20', '2024-06-17', '06', 28385),
(2885, '474.98', '4.20', '2024-07-17', '07', 28385),
(2886, '479.18', '4.20', '2024-08-17', '08', 28385),
(2887, '483.38', '4.20', '2024-09-17', '09', 28385),
(2888, '487.59', '4.20', '2024-10-17', '10', 28385),
(2889, '491.79', '4.20', '2024-11-17', '11', 28385),
(2890, '495.99', '4.20', '2024-12-17', '12', 28385),
(2891, '500.20', '4.20', '2025-01-17', '01', 28385),
(2892, '504.40', '4.20', '2025-02-17', '02', 28385),
(2893, '1.62', '1.62', '2015-01-01', '01', 28384),
(2894, '3.23', '1.62', '2015-02-01', '02', 28384),
(2895, '4.85', '1.62', '2015-03-01', '03', 28384),
(2896, '6.47', '1.62', '2015-04-01', '04', 28384),
(2897, '8.08', '1.62', '2015-05-01', '05', 28384),
(2898, '9.70', '1.62', '2015-06-01', '06', 28384),
(2899, '11.32', '1.62', '2015-07-01', '07', 28384),
(2900, '12.93', '1.62', '2015-08-01', '08', 28384),
(2901, '14.55', '1.62', '2015-09-01', '09', 28384),
(2902, '16.17', '1.62', '2015-10-01', '10', 28384),
(2903, '17.78', '1.62', '2015-11-01', '11', 28384),
(2904, '19.40', '1.62', '2015-12-01', '12', 28384),
(2905, '21.02', '1.62', '2016-01-01', '01', 28384),
(2906, '22.63', '1.62', '2016-02-01', '02', 28384),
(2907, '24.25', '1.62', '2016-03-01', '03', 28384),
(2908, '25.87', '1.62', '2016-04-01', '04', 28384),
(2909, '27.48', '1.62', '2016-05-01', '05', 28384),
(2910, '29.10', '1.62', '2016-06-01', '06', 28384),
(2911, '30.72', '1.62', '2016-07-01', '07', 28384),
(2912, '32.33', '1.62', '2016-08-01', '08', 28384),
(2913, '33.95', '1.62', '2016-09-01', '09', 28384),
(2914, '35.57', '1.62', '2016-10-01', '10', 28384),
(2915, '37.18', '1.62', '2016-11-01', '11', 28384),
(2916, '38.80', '1.62', '2016-12-01', '12', 28384),
(2917, '40.42', '1.62', '2017-01-01', '01', 28384),
(2918, '42.03', '1.62', '2017-02-01', '02', 28384),
(2919, '43.65', '1.62', '2017-03-01', '03', 28384),
(2920, '45.27', '1.62', '2017-04-01', '04', 28384),
(2921, '46.88', '1.62', '2017-05-01', '05', 28384),
(2922, '48.50', '1.62', '2017-06-01', '06', 28384),
(2923, '50.12', '1.62', '2017-07-01', '07', 28384),
(2924, '51.73', '1.62', '2017-08-01', '08', 28384),
(2925, '53.35', '1.62', '2017-09-01', '09', 28384),
(2926, '54.97', '1.62', '2017-10-01', '10', 28384),
(2927, '56.58', '1.62', '2017-11-01', '11', 28384),
(2928, '58.20', '1.62', '2017-12-01', '12', 28384),
(2929, '59.82', '1.62', '2018-01-01', '01', 28384),
(2930, '61.43', '1.62', '2018-02-01', '02', 28384),
(2931, '63.05', '1.62', '2018-03-01', '03', 28384),
(2932, '64.67', '1.62', '2018-04-01', '04', 28384),
(2933, '66.28', '1.62', '2018-05-01', '05', 28384),
(2934, '67.90', '1.62', '2018-06-01', '06', 28384),
(2935, '69.52', '1.62', '2018-07-01', '07', 28384),
(2936, '71.13', '1.62', '2018-08-01', '08', 28384),
(2937, '72.75', '1.62', '2018-09-01', '09', 28384),
(2938, '74.37', '1.62', '2018-10-01', '10', 28384),
(2939, '75.98', '1.62', '2018-11-01', '11', 28384),
(2940, '77.60', '1.62', '2018-12-01', '12', 28384),
(2941, '79.22', '1.62', '2019-01-01', '01', 28384),
(2942, '80.83', '1.62', '2019-02-01', '02', 28384),
(2943, '82.45', '1.62', '2019-03-01', '03', 28384),
(2944, '84.07', '1.62', '2019-04-01', '04', 28384),
(2945, '85.68', '1.62', '2019-05-01', '05', 28384),
(2946, '87.30', '1.62', '2019-06-01', '06', 28384),
(2947, '88.92', '1.62', '2019-07-01', '07', 28384),
(2948, '90.53', '1.62', '2019-08-01', '08', 28384),
(2949, '92.15', '1.62', '2019-09-01', '09', 28384),
(2950, '93.77', '1.62', '2019-10-01', '10', 28384),
(2951, '95.38', '1.62', '2019-11-01', '11', 28384),
(2952, '97.00', '1.62', '2019-12-01', '12', 28384),
(2953, '8.08', '8.08', '2015-03-17', '03', 28386),
(2954, '16.17', '8.08', '2015-04-17', '04', 28386),
(2955, '24.25', '8.08', '2015-05-17', '05', 28386),
(2956, '32.33', '8.08', '2015-06-17', '06', 28386),
(2957, '40.42', '8.08', '2015-07-17', '07', 28386),
(2958, '48.50', '8.08', '2015-08-17', '08', 28386),
(2959, '56.58', '8.08', '2015-09-17', '09', 28386),
(2960, '64.67', '8.08', '2015-10-17', '10', 28386),
(2961, '72.75', '8.08', '2015-11-17', '11', 28386),
(2962, '80.83', '8.08', '2015-12-17', '12', 28386),
(2963, '88.92', '8.08', '2016-01-17', '01', 28386),
(2964, '97.00', '8.08', '2016-02-17', '02', 28386),
(2965, '105.08', '8.08', '2016-03-17', '03', 28386),
(2966, '113.17', '8.08', '2016-04-17', '04', 28386),
(2967, '121.25', '8.08', '2016-05-17', '05', 28386),
(2968, '129.33', '8.08', '2016-06-17', '06', 28386),
(2969, '137.42', '8.08', '2016-07-17', '07', 28386),
(2970, '145.50', '8.08', '2016-08-17', '08', 28386),
(2971, '153.58', '8.08', '2016-09-17', '09', 28386),
(2972, '161.67', '8.08', '2016-10-17', '10', 28386),
(2973, '169.75', '8.08', '2016-11-17', '11', 28386),
(2974, '177.83', '8.08', '2016-12-17', '12', 28386),
(2975, '185.92', '8.08', '2017-01-17', '01', 28386),
(2976, '194.00', '8.08', '2017-02-17', '02', 28386),
(2977, '202.08', '8.08', '2017-03-17', '03', 28386),
(2978, '210.17', '8.08', '2017-04-17', '04', 28386),
(2979, '218.25', '8.08', '2017-05-17', '05', 28386),
(2980, '226.33', '8.08', '2017-06-17', '06', 28386),
(2981, '234.42', '8.08', '2017-07-17', '07', 28386),
(2982, '242.50', '8.08', '2017-08-17', '08', 28386),
(2983, '250.58', '8.08', '2017-09-17', '09', 28386),
(2984, '258.67', '8.08', '2017-10-17', '10', 28386),
(2985, '266.75', '8.08', '2017-11-17', '11', 28386),
(2986, '274.83', '8.08', '2017-12-17', '12', 28386),
(2987, '282.92', '8.08', '2018-01-17', '01', 28386),
(2988, '291.00', '8.08', '2018-02-17', '02', 28386),
(2989, '299.08', '8.08', '2018-03-17', '03', 28386),
(2990, '307.17', '8.08', '2018-04-17', '04', 28386),
(2991, '315.25', '8.08', '2018-05-17', '05', 28386),
(2992, '323.33', '8.08', '2018-06-17', '06', 28386),
(2993, '331.42', '8.08', '2018-07-17', '07', 28386),
(2994, '339.50', '8.08', '2018-08-17', '08', 28386),
(2995, '347.58', '8.08', '2018-09-17', '09', 28386),
(2996, '355.67', '8.08', '2018-10-17', '10', 28386),
(2997, '363.75', '8.08', '2018-11-17', '11', 28386),
(2998, '371.83', '8.08', '2018-12-17', '12', 28386),
(2999, '379.92', '8.08', '2019-01-17', '01', 28386),
(3000, '388.00', '8.08', '2019-02-17', '02', 28386),
(3001, '396.08', '8.08', '2019-03-17', '03', 28386),
(3002, '404.17', '8.08', '2019-04-17', '04', 28386),
(3003, '412.25', '8.08', '2019-05-17', '05', 28386),
(3004, '420.33', '8.08', '2019-06-17', '06', 28386),
(3005, '428.42', '8.08', '2019-07-17', '07', 28386),
(3006, '436.50', '8.08', '2019-08-17', '08', 28386),
(3007, '444.58', '8.08', '2019-09-17', '09', 28386),
(3008, '452.67', '8.08', '2019-10-17', '10', 28386),
(3009, '460.75', '8.08', '2019-11-17', '11', 28386),
(3010, '468.83', '8.08', '2019-12-17', '12', 28386),
(3011, '476.92', '8.08', '2020-01-17', '01', 28386),
(3012, '485.00', '8.08', '2020-02-17', '02', 28386),
(3073, '1.62', '1.62', '2015-03-17', '03', 28389),
(3074, '3.23', '1.62', '2015-04-17', '04', 28389),
(3075, '4.85', '1.62', '2015-05-17', '05', 28389),
(3076, '6.47', '1.62', '2015-06-17', '06', 28389),
(3077, '8.08', '1.62', '2015-07-17', '07', 28389),
(3078, '9.70', '1.62', '2015-08-17', '08', 28389),
(3079, '11.32', '1.62', '2015-09-17', '09', 28389),
(3080, '12.93', '1.62', '2015-10-17', '10', 28389),
(3081, '14.55', '1.62', '2015-11-17', '11', 28389),
(3082, '16.17', '1.62', '2015-12-17', '12', 28389),
(3083, '17.78', '1.62', '2016-01-17', '01', 28389),
(3084, '19.40', '1.62', '2016-02-17', '02', 28389),
(3085, '21.02', '1.62', '2016-03-17', '03', 28389),
(3086, '22.63', '1.62', '2016-04-17', '04', 28389),
(3087, '24.25', '1.62', '2016-05-17', '05', 28389),
(3088, '25.87', '1.62', '2016-06-17', '06', 28389),
(3089, '27.48', '1.62', '2016-07-17', '07', 28389),
(3090, '29.10', '1.62', '2016-08-17', '08', 28389),
(3091, '30.72', '1.62', '2016-09-17', '09', 28389),
(3092, '32.33', '1.62', '2016-10-17', '10', 28389),
(3093, '33.95', '1.62', '2016-11-17', '11', 28389),
(3094, '35.57', '1.62', '2016-12-17', '12', 28389),
(3095, '37.18', '1.62', '2017-01-17', '01', 28389),
(3096, '38.80', '1.62', '2017-02-17', '02', 28389),
(3097, '40.42', '1.62', '2017-03-17', '03', 28389),
(3098, '42.03', '1.62', '2017-04-17', '04', 28389),
(3099, '43.65', '1.62', '2017-05-17', '05', 28389),
(3100, '45.27', '1.62', '2017-06-17', '06', 28389),
(3101, '46.88', '1.62', '2017-07-17', '07', 28389),
(3102, '48.50', '1.62', '2017-08-17', '08', 28389),
(3103, '50.12', '1.62', '2017-09-17', '09', 28389),
(3104, '51.73', '1.62', '2017-10-17', '10', 28389),
(3105, '53.35', '1.62', '2017-11-17', '11', 28389),
(3106, '54.97', '1.62', '2017-12-17', '12', 28389),
(3107, '56.58', '1.62', '2018-01-17', '01', 28389),
(3108, '58.20', '1.62', '2018-02-17', '02', 28389),
(3109, '59.82', '1.62', '2018-03-17', '03', 28389),
(3110, '61.43', '1.62', '2018-04-17', '04', 28389),
(3111, '63.05', '1.62', '2018-05-17', '05', 28389),
(3112, '64.67', '1.62', '2018-06-17', '06', 28389),
(3113, '66.28', '1.62', '2018-07-17', '07', 28389),
(3114, '67.90', '1.62', '2018-08-17', '08', 28389),
(3115, '69.52', '1.62', '2018-09-17', '09', 28389),
(3116, '71.13', '1.62', '2018-10-17', '10', 28389),
(3117, '72.75', '1.62', '2018-11-17', '11', 28389),
(3118, '74.37', '1.62', '2018-12-17', '12', 28389),
(3119, '75.98', '1.62', '2019-01-17', '01', 28389),
(3120, '77.60', '1.62', '2019-02-17', '02', 28389),
(3121, '79.22', '1.62', '2019-03-17', '03', 28389),
(3122, '80.83', '1.62', '2019-04-17', '04', 28389),
(3123, '82.45', '1.62', '2019-05-17', '05', 28389),
(3124, '84.07', '1.62', '2019-06-17', '06', 28389),
(3125, '85.68', '1.62', '2019-07-17', '07', 28389),
(3126, '87.30', '1.62', '2019-08-17', '08', 28389),
(3127, '88.92', '1.62', '2019-09-17', '09', 28389),
(3128, '90.53', '1.62', '2019-10-17', '10', 28389),
(3129, '92.15', '1.62', '2019-11-17', '11', 28389),
(3130, '93.77', '1.62', '2019-12-17', '12', 28389),
(3131, '95.38', '1.62', '2020-01-17', '01', 28389),
(3132, '97.00', '1.62', '2020-02-17', '02', 28389),
(3133, '1.94', '1.94', '2015-03-14', '03', 28350),
(3134, '3.88', '1.94', '2015-04-14', '04', 28350),
(3135, '5.82', '1.94', '2015-05-14', '05', 28350),
(3136, '7.76', '1.94', '2015-06-14', '06', 28350),
(3137, '9.70', '1.94', '2015-07-14', '07', 28350),
(3138, '11.64', '1.94', '2015-08-14', '08', 28350),
(3139, '13.58', '1.94', '2015-09-14', '09', 28350),
(3140, '15.52', '1.94', '2015-10-14', '10', 28350),
(3141, '17.46', '1.94', '2015-11-14', '11', 28350),
(3142, '19.40', '1.94', '2015-12-14', '12', 28350),
(3143, '21.34', '1.94', '2016-01-14', '01', 28350),
(3144, '23.28', '1.94', '2016-02-14', '02', 28350),
(3145, '25.22', '1.94', '2016-03-14', '03', 28350),
(3146, '27.16', '1.94', '2016-04-14', '04', 28350),
(3147, '29.10', '1.94', '2016-05-14', '05', 28350),
(3148, '31.04', '1.94', '2016-06-14', '06', 28350),
(3149, '32.98', '1.94', '2016-07-14', '07', 28350),
(3150, '34.92', '1.94', '2016-08-14', '08', 28350),
(3151, '36.86', '1.94', '2016-09-14', '09', 28350),
(3152, '38.80', '1.94', '2016-10-14', '10', 28350),
(3153, '40.74', '1.94', '2016-11-14', '11', 28350),
(3154, '42.68', '1.94', '2016-12-14', '12', 28350),
(3155, '44.62', '1.94', '2017-01-14', '01', 28350),
(3156, '46.56', '1.94', '2017-02-14', '02', 28350),
(3157, '48.50', '1.94', '2017-03-14', '03', 28350),
(3158, '50.44', '1.94', '2017-04-14', '04', 28350),
(3159, '52.38', '1.94', '2017-05-14', '05', 28350),
(3160, '54.32', '1.94', '2017-06-14', '06', 28350),
(3161, '56.26', '1.94', '2017-07-14', '07', 28350),
(3162, '58.20', '1.94', '2017-08-14', '08', 28350),
(3163, '60.14', '1.94', '2017-09-14', '09', 28350),
(3164, '62.08', '1.94', '2017-10-14', '10', 28350),
(3165, '64.02', '1.94', '2017-11-14', '11', 28350),
(3166, '65.96', '1.94', '2017-12-14', '12', 28350),
(3167, '67.90', '1.94', '2018-01-14', '01', 28350),
(3168, '69.84', '1.94', '2018-02-14', '02', 28350),
(3169, '71.78', '1.94', '2018-03-14', '03', 28350),
(3170, '73.72', '1.94', '2018-04-14', '04', 28350),
(3171, '75.66', '1.94', '2018-05-14', '05', 28350),
(3172, '77.60', '1.94', '2018-06-14', '06', 28350),
(3173, '79.54', '1.94', '2018-07-14', '07', 28350),
(3174, '81.48', '1.94', '2018-08-14', '08', 28350),
(3175, '83.42', '1.94', '2018-09-14', '09', 28350),
(3176, '85.36', '1.94', '2018-10-14', '10', 28350),
(3177, '87.30', '1.94', '2018-11-14', '11', 28350),
(3178, '89.24', '1.94', '2018-12-14', '12', 28350),
(3179, '91.18', '1.94', '2019-01-14', '01', 28350),
(3180, '93.12', '1.94', '2019-02-14', '02', 28350),
(3181, '95.06', '1.94', '2019-03-14', '03', 28350),
(3182, '97.00', '1.94', '2019-04-14', '04', 28350),
(3183, '98.94', '1.94', '2019-05-14', '05', 28350),
(3184, '100.88', '1.94', '2019-06-14', '06', 28350),
(3185, '102.82', '1.94', '2019-07-14', '07', 28350),
(3186, '104.76', '1.94', '2019-08-14', '08', 28350),
(3187, '106.70', '1.94', '2019-09-14', '09', 28350),
(3188, '108.64', '1.94', '2019-10-14', '10', 28350),
(3189, '110.58', '1.94', '2019-11-14', '11', 28350),
(3190, '112.52', '1.94', '2019-12-14', '12', 28350),
(3191, '114.46', '1.94', '2020-01-14', '01', 28350),
(3192, '116.40', '1.94', '2020-02-14', '02', 28350);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `emp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `emp_apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_emp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`emp_id`, `emp_apellidos`, `emp_nombres`, `tipo_emp`) VALUES
('0700123456', 'SANCHEZ', 'JOSE', 'usuario'),
('0702548987', 'TORRES', 'ANDREA', 'usuario'),
('0706225653', 'Linda92', 'Adry', 'usuario'),
('1', 'TABLERISTAS CENTRAL 2 ', ' ', 'trabajador'),
('10', 'SUBESTACION LA PEA?A ', ' ', 'trabajador'),
('100', 'TRANSELECTRIC BIENES DE CNEL EN LA SUB ', ' ', 'trabajador'),
('1000', 'BODEGA DE ACTIVOS FIJOS (REUTILIZABLE) ', ' ', 'trabajador'),
('1001225117', 'RODRIGUEZ LUDE?A', 'JORGE WASHIN', 'trabajador'),
('1001682788', 'RODRIGUEZ LUDE?A', 'RAFAEL ROSWEL', 'trabajador'),
('100220771', 'SEMPERTEGUI JARAMILLO', 'JORGE EDUARDO', 'trabajador'),
('101290336', 'AGUILAR FEIJOO', 'JORGE OSWALDO', 'trabajador'),
('101638450', 'TOLEDO AGREDA', 'EDGAR RODRIGO', 'trabajador'),
('102660370', 'GUERRERO PALADINES', 'FREDDY VICENTE', 'trabajador'),
('102740248', 'SARMIENTO RIOFRIO', 'JORGE ALBERTO', 'trabajador'),
('105732531', 'PEREZ AYALA', 'ANGEL FERNANDO', 'trabajador'),
('11', 'SUBESTACION BARBONES ', ' ', 'trabajador'),
('1101193124', 'OJEDA OJEDA', 'SEGUNDO FIDEL', 'trabajador'),
('1101508164', 'PEDREROS JARAMILLO', 'JOSE VICENTE', 'trabajador'),
('1101868931', 'ROMERO LOAYZA', 'JENNY DOLORES', 'trabajador'),
('1102423736', 'CASTILLO CASTILLO', 'SEGUNDO MANUEL', 'trabajador'),
('1102637822', 'ALBAN GUTIERREZ', 'MARCIA THEBY', 'trabajador'),
('1102643242', 'LAMAR AGUILAR', 'FREDY GIOVANNY', 'trabajador'),
('1102896972', 'QUICHIMBO BERMEO', 'EDWIN ', 'trabajador'),
('1102910849', 'MACAS YAGUANA', 'REMIGIO RAFAEL', 'trabajador'),
('1104347784', 'RAMIREZ VARGAS', 'JESSICA NATHALY', 'trabajador'),
('1104883911', 'RETETE LOPEZ', 'WILSON GEOVANY', 'trabajador'),
('12', 'SUBESTACION SANTA ROSA ', ' ', 'trabajador'),
('1205622812', 'ROMERO GUERRERO', 'ANGEL GABRIEL', 'trabajador'),
('1206363747', 'MALDONADO LOPEZ', 'JORGE DAVID', 'trabajador'),
('1212121212', 'COMPA?IA DE', 'SEGURIDAD ', 'trabajador'),
('13', 'SUBESTACION LA AVANZADA ', ' ', 'trabajador'),
('1301491740', 'PICO SALTOS', 'NICOLAS AGUSTIN', 'trabajador'),
('1302427198', 'ZAMBRANO PIEDRA', 'JOSE VICENTE', 'trabajador'),
('1303154346', 'ESPINOZA FARIAS', 'LUIS ANTONIO', 'trabajador'),
('1303185639', 'CASTILLO MURILLO', 'JOSE FRANCISCO', 'trabajador'),
('1304263419', 'CALERO MOREIRA', 'LUIS FELIPE', 'trabajador'),
('1304791328', 'SALTOS CEDE?O', 'FROVEN RENE', 'trabajador'),
('1305680413', 'DELGADO ZAMBRANO', 'SONIA ROCIO', 'trabajador'),
('1308310232', 'MACIAS VERA', 'CARLOS BENITO', 'trabajador'),
('1309797460', 'ECHEVERRIA MUGUERZA', 'CANDY ', 'trabajador'),
('1310426133', 'ALCIVAR INTRIAGO', 'SANDRA YADIRA', 'trabajador'),
('1311490898', 'MOLINA CEVALLOS', 'ANGEL FABIAN', 'trabajador'),
('14', 'SUBESTACION SARACAY ', ' ', 'trabajador'),
('15', 'SUBESTACION ARENILLAS ', ' ', 'trabajador'),
('16', 'SUBESTACION HUAQUILLAS ', ' ', 'trabajador'),
('17', 'SUBESTACION PAGUA ', ' ', 'trabajador'),
('1712492451', 'ESPINOZA COBOS', 'TEDDY ', 'trabajador'),
('18', 'SUBESTACION PORTOVELO(PACHE) ', ' ', 'trabajador'),
('19', 'SUBESTACION LOS PINOS ', ' ', 'trabajador'),
('1900332378', 'ROBLES VARGAS', 'HILTER JOSE', 'trabajador'),
('20', 'SUBESTACION LA IBERIA ', ' ', 'trabajador'),
('2000', 'BODEGA DE ACTIVOS FIJOS (MAL ESTADO) ', ' ', 'trabajador'),
('200487437', 'VELA IBARRA', 'LUIS ENRIQUE', 'trabajador'),
('21', 'SUBESTACION BALAO ', ' ', 'trabajador'),
('22', 'SUBESTACION POROTILLO ', ' ', 'trabajador'),
('23', 'SUBESTACION MACHALA CENTRO ', ' ', 'trabajador'),
('24', 'SUBESTACION LA PRIMAVERA ', ' ', 'trabajador'),
('25', 'DESPACHADOR DE RECLAMOS ', ' ', 'trabajador'),
('302303615', 'AUCANCELA ZHINDON', 'JORGE LUIS', 'trabajador'),
('6', 'CETEORO ', ' ', 'trabajador'),
('603318395', 'LEMA YUMI', 'IVAN MAURICIO', 'trabajador'),
('603840943', 'CASTRO ROJAS', 'ABRAHAN MAURICIO', 'trabajador'),
('700519945', 'ROSALES CARDENAS', 'LUIS MARIANO', 'trabajador'),
('700758113', 'CENTENO LOPEZ', 'ENRIQUE REY', 'trabajador'),
('700806557', 'MOLESTINA BATALLAS', 'GARDENIA ROBERTINA', 'trabajador'),
('700814106', 'ZERNA SINAULE', 'RAUL ARISTOBULO', 'trabajador'),
('700830896', 'VIDAL ROSARIO', 'JACINTO SALOMON', 'trabajador'),
('700832249', 'MIRANDA CASTILLO', 'LUIS EDILBERTO', 'trabajador'),
('700833965', 'CRUZ ESPINOZA', 'GALO ESTEBAN', 'trabajador'),
('700903503', 'LAPO CONDE', 'ANGEL BOLIVAR', 'trabajador'),
('700905185', 'BRAVO VILELA', 'GUILLERMO ', 'trabajador'),
('700925746', 'BLACIO ARMIJOS', 'GOBER LEOPOLDO', 'trabajador'),
('700926355', 'LANDIN ZAPATA', 'MANUEL EDUARDO', 'trabajador'),
('700933914', 'MEDINA AUCAPE?A', 'KLEBER ELIAS', 'trabajador'),
('700984123', 'VASQUEZ GUERRERO', 'VICTORIANO ENRIQUE', 'trabajador'),
('701015315', 'ZUMBA AGUILAR', 'FULVIO VICENTE', 'trabajador'),
('701021586', 'TAPIA LOAYZA', 'LUIS ARTURO', 'trabajador'),
('701031809', 'ARIAS SANCHEZ', 'JORGE ERALDO', 'trabajador'),
('701046278', 'RIVERA MOROCHO', 'EDGAR ENRIQUE', 'trabajador'),
('701078412', 'A?AZCO A?AZCO', 'VICTOR HUGO', 'trabajador'),
('701078545', 'A?AZCO LOAYZA', 'GILBERT ARTURO', 'trabajador'),
('701078602', 'CABRERA CEVALLOS', 'CARLOS DEMETRIO', 'trabajador'),
('701089898', 'JIMENEZ TOGRA', 'JOSE ALFREDO', 'trabajador'),
('701093965', 'VEGA SIGUENZA', 'ALICIA CIRILA', 'trabajador'),
('701113706', 'PE?A CHAMBA', 'FELIX ANTONIO', 'trabajador'),
('701114738', 'MONCADA SOLANO', 'FRANCISCO ISIDRO', 'trabajador'),
('701116022', 'MARIN LOAYZA', 'JUAN FRANCISCO', 'trabajador'),
('701133241', 'ECHEVERRIA MARTINEZ', 'WALTER LUPERCIO', 'trabajador'),
('701137903', 'LLIVICHUSCA SILVESTRE', 'RAMON AUGUSTO', 'trabajador'),
('701154940', 'TANDAZO ZAMBRANO', 'EDDIE DE LA CRUZ', 'trabajador'),
('701173718', 'HURTADO MARIN', 'KLEBER ENRIQUE', 'trabajador'),
('701185928', 'ALPRECHT OJEDIZ', 'KLEBER ', 'trabajador'),
('701211286', 'LUDE?A ROMERO', 'JORGE ENRIQUE', 'trabajador'),
('701233157', 'ERAS DIAZ', 'SIXTO TEODORO', 'trabajador'),
('701236473', 'BENENAULA MARQUEZ', 'GERMAN ANDRES', 'trabajador'),
('701240459', 'GANDARA CHERRES', 'FABIAN HUMBERTO', 'trabajador'),
('701240913', 'CUN TIZON', 'PEDRO BISMARK', 'trabajador'),
('701243115', 'MOROCHO BARZALLO', 'EULOGIO RAMIRO', 'trabajador'),
('701250672', 'CAMACHO RAMON', 'CARLOS ALBERTO', 'trabajador'),
('701264194', 'RIVERA MATAMOROS', 'MARIO GUSTAVO', 'trabajador'),
('701264467', 'QUEZADA JARAMILLO', 'ELVIS FREDDY', 'trabajador'),
('701270837', 'CUEVA JARAMILLO', 'ALEX RUPERTO', 'trabajador'),
('701285561', 'BORJA ESPINOZA', 'KLEBER GONZALO', 'trabajador'),
('701313322', 'VILLACIS MOCHA', 'ABEL STEPHEN', 'trabajador'),
('701325482', 'PORRAS FREDDY', 'ALBERTO ', 'trabajador'),
('701327231', 'BARREZUETA PALACIOS', 'CARLOS JAVIER', 'trabajador'),
('701343139', 'VERA SISALEMA', 'ELIAS NICOLAS', 'trabajador'),
('701379745', 'AGUILAR JARA', 'PAQUITA MELANIA', 'trabajador'),
('701381295', 'RIVAS GALARZA', 'VICENTE BOLIVAR', 'trabajador'),
('701390924', 'MU?OZ CABANILLA', 'WASHINGTON ENRIQUE', 'trabajador'),
('701405334', 'OLAYA HONORES', 'AGUSTIN ENRIQUE', 'trabajador'),
('701417933', 'TELLO AREVALO', 'MARCOS AQUILINO', 'trabajador'),
('701434789', 'CUENCA AGUIRRE', 'FAUSTO TITO', 'trabajador'),
('701462145', 'TORRES RIOS', 'CARLOS ARTURO', 'trabajador'),
('701474496', 'CHICA ESPINOSA', 'AUGUSTO ANTONIO', 'trabajador'),
('701489999', 'CRUZ NOVILLO', 'DIEGO FABIAN', 'trabajador'),
('701490104', 'GOROTIZA VALAREZO', 'FULTON ', 'trabajador'),
('701499402', 'ESPINOSA QUEZADA', 'ERMEL FERNANDO', 'trabajador'),
('701539892', 'FLORES LUZURIAGA', 'JOSELITO HIPOLITO', 'trabajador'),
('701545345', 'RAMIREZ QUEZADA', 'FRANCISCO SABINO', 'trabajador'),
('701549230', 'PAVON URDIALES', 'EDMUNDO ', 'trabajador'),
('701575722', 'ESPINOSA BELKISS', 'JANNETH ', 'trabajador'),
('701597494', 'BARRERA SIGUENZA', 'SILVIA PATRICIA', 'trabajador'),
('701601726', 'CUENCA CEVALLOS', 'ORLANDO GONZALO', 'trabajador'),
('701602708', 'BARBOTO ANDRADE', 'JHON ALEX', 'trabajador'),
('701613556', 'LOAYZA LEON', 'MARCO ANTONIO', 'trabajador'),
('701619983', 'GUERRERO CALLE', 'GLORIA MATILDE', 'trabajador'),
('701643918', 'GUEVARA POGO', 'SERVIO HERMEL', 'trabajador'),
('701644692', 'GUERRERO VILLAGOMEZ', 'TANYA DEL CISNE', 'trabajador'),
('701646267', 'JIMENEZ MENDEZ', 'OCTAVIANO ESTANISLAO', 'trabajador'),
('701658387', 'A?AZCO A?AZCO', 'JOSE FIDEL', 'trabajador'),
('701674723', 'CABRERA MURILLO', 'GRICELDA DOMITILA', 'trabajador'),
('701677742', 'VEGA VELEZ', 'GERMAN EMILIO', 'trabajador'),
('701677866', 'MENDEZ CAMPOVERDE', 'LIVIA PATRICIA', 'trabajador'),
('701684318', 'TANDAZO SARANGO', 'LUZ ESPERANZA', 'trabajador'),
('701710857', 'LOMAS QUI?ONEZ', 'GONZALO DARIO', 'trabajador'),
('701718330', 'CASTA?EDA CARRANZA', 'GONZALO ENRIQUE', 'trabajador'),
('701719833', 'AGUILERA SALDA?A', 'JOSE ALBERTO', 'trabajador'),
('701720682', 'ARMIJOS MOSQUERA', 'VICENTA MARIANA', 'trabajador'),
('701723421', 'CANGAS GUNCAY', 'LUIS MIGUEL', 'trabajador'),
('701727471', 'VARGAS CASTRO', 'JOSE VICENTE', 'trabajador'),
('701730152', 'AJILA CHAPIN', 'AGUSTIN ALBERTO', 'trabajador'),
('701736217', 'CAMPOVERDE ZAMBRANO', 'GERARDO ENRIQUE', 'trabajador'),
('701753295', 'PAULINI SANCHEZ', 'TERESA DE JESUS', 'trabajador'),
('701756900', 'CEVALLOS JIMENEZ', 'JOSE VICENTE', 'trabajador'),
('701760696', 'AJILA MOROCHO', 'CRISPIN VIDAL', 'trabajador'),
('701791485', 'ULLAURI CASTRO', 'REGINA ABIGAIL', 'trabajador'),
('701798696', 'ASANZA ROMERO', 'ARCENIO MANUEL', 'trabajador'),
('701806002', 'ARMIJOS VILLAVICENCIO', 'LEONARDO JACINTO', 'trabajador'),
('701821555', 'ZAMBRANO JAEN', 'GONZALO PORFIRIO', 'trabajador'),
('701839672', 'SALTOS QUINTANA', 'GABRIEL ARMANDO', 'trabajador'),
('701840936', 'PANTOJA AGUACONDO', 'JORGE ELIAS', 'trabajador'),
('701848715', 'ARCE OSORIO', 'JHON WISTON', 'trabajador'),
('701852592', 'CUEVA MARTINEZ', 'PEDRO IVAN', 'trabajador'),
('701880130', 'ENCALADA CUENCA', 'LUIS LORENZO', 'trabajador'),
('701882946', 'MERA GARCIA', 'FRANCISCO ANTONIO', 'trabajador'),
('701900292', 'ARAUJO VERDUGO', 'JUAN JOSE', 'trabajador'),
('701902611', 'BARREZUETA ESPINOZA', 'CARLOS ALA', 'trabajador'),
('701906687', 'PACHECO NARVAEZ', 'IVAN HENRY', 'trabajador'),
('701920886', 'FRANCO RUIZ', 'WILSON EFRAIN', 'trabajador'),
('701950818', 'PINEDA YAGUAL', 'CESAR FELIPE', 'trabajador'),
('701956351', 'CORREA ILLESCAS', 'GREGORIO NIVA', 'trabajador'),
('701978389', 'REY BALBIN', 'EDWIN ERNESTO', 'trabajador'),
('701993420', 'LALANGUI DIAZ', 'HERNAN AVILIO', 'trabajador'),
('702001447', 'IBA?EZ ALONSO', 'CRISTOBAL EDUARDO', 'trabajador'),
('702008368', 'PINEDA ORELLANA', 'JHONSON RICARDO', 'trabajador'),
('702008566', 'ARIAS BARRERA', 'MARCOS WILBERTO', 'trabajador'),
('702011529', 'LAPO ESPINOZA', 'LUIS VICENTE', 'trabajador'),
('702014911', 'VALVERDE ALVARADO', 'CAMILO SEBASTIAN', 'trabajador'),
('702018243', 'CARRION ARMIJOS', 'BIRENA MARIA', 'trabajador'),
('702018581', 'SOTO ORDO?EZ', 'MIRIAM ELIZABETH', 'trabajador'),
('702024043', 'CHIRIBOGA DURAN', 'MERCY MAGALITA', 'trabajador'),
('702042342', 'VALLE JIMENEZ', 'LUIS ALFREDO', 'trabajador'),
('702053778', 'GALARZA VALAREZO', 'MANUEL ELADIO', 'trabajador'),
('702057100', 'AGUILAR VEINTIMILLA', 'FREDI OSWALDO', 'trabajador'),
('702059791', 'CASTA?EDA CARRANZA', 'JORGE WASHINGTON', 'trabajador'),
('702060229', 'GUANUCHE MALLA', 'AURELIO ', 'trabajador'),
('702060237', 'CASTILLO FIGUEROA', 'JACQUELINE ELIZABETH', 'trabajador'),
('702068461', 'ORDO?EZ AGUILAR', 'STALIN PEDRO', 'trabajador'),
('702073289', 'TOLEDO ESPINOZA', 'NERY MERCEDES', 'trabajador'),
('702078577', 'CEVALLOS GAVILANEZ', 'JORGE MILTON', 'trabajador'),
('702078718', 'CARRION AGUIRRE', 'JORGE ENRIQUE', 'trabajador'),
('702080995', 'RODRIGUEZ CORREA', 'LUIS ALBERTO', 'trabajador'),
('702092909', 'RIOS RIOS', 'SARA JEANNET', 'trabajador'),
('702094756', 'MONTERO ORDO?EZ', 'LENNY YULANOVA', 'trabajador'),
('702102203', 'LOAYZA FLORES', 'LUIS ANTONIO', 'trabajador'),
('702123233', 'ARAMBULO BRIONES', 'MARCO MIGUEL', 'trabajador'),
('702124199', 'ZAPUTT ORELLANA', 'ANABELLE ', 'trabajador'),
('702127994', 'SANCHEZ ASTUDILLO', 'JORGE MAURICIO', 'trabajador'),
('702130618', 'SANDOVAL MORALES', 'CARLOS WASHINGTON', 'trabajador'),
('702131855', 'PALADINES FAJARDO', 'CARMEN LUCILA', 'trabajador'),
('702132275', 'URDIN AGUILAR', 'DAYSE YUMARI', 'trabajador'),
('702149634', 'ESPINOZA ERREYES', 'EDIN JOSELITO', 'trabajador'),
('702161142', 'POMA PRECIADO', 'ALVARO RAMIRO', 'trabajador'),
('702164476', 'ESPINOZA A?AZCO', 'FERNANDO PATRICIO', 'trabajador'),
('702169616', 'VALAREZO ESPINOZA', 'WASHINGTON HONORIO', 'trabajador'),
('702173980', 'TORRES RIOS', 'LORGIA HORTENCIA', 'trabajador'),
('702185125', 'MONTERO ORDONEZ', 'NELVIA MARITHZAYA', 'trabajador'),
('702194358', 'CORREA MOROCHO', 'FRANCISCO PAUL', 'trabajador'),
('702199258', 'FERNANDEZ LOJAN', 'DARWIN PATRICIO', 'trabajador'),
('702202565', 'AGUIRRE ESPINOZA', 'PAMELA PRISCILA', 'trabajador'),
('702208471', 'SUAREZ SALCEDO', 'JAVIER BENITO', 'trabajador'),
('702209313', 'MOSCOSO OCHOA', 'JORGE FABRICIO', 'trabajador'),
('702211079', 'ORTIZ QUIZHPE', 'JUAN ALBERTO', 'trabajador'),
('702211533', 'CRUZ ESPINOZA', 'WALTER VICENTE', 'trabajador'),
('702214263', 'LOPEZ SIGUENZA', 'SEGUNDO ESTEBAN', 'trabajador'),
('702219254', 'CRIOLLO DUMA', 'JORGE MARCELO', 'trabajador'),
('702224312', 'BELTRAN RAMIREZ', 'LUIS GEOVANY', 'trabajador'),
('702224361', 'MORA SANCHEZ', 'MARIO FERNANDO', 'trabajador'),
('702226564', 'SARMIENTO GAVILANES', 'ANGEL PATRICIO', 'trabajador'),
('702234998', 'CRUZ OCHOA', 'JORGE JAVIER', 'trabajador'),
('702240029', 'REY TORRES', 'HENRY MIGUEL', 'trabajador'),
('702245127', 'ENCALADA MACAS', 'HECTOR EDMUNDO', 'trabajador'),
('702257437', 'PLAZA QUIROLA', 'PATRICIA PAOLA', 'trabajador'),
('702262940', 'FLORES JARAMILLO', 'JOSE LUIS', 'trabajador'),
('702273467', 'GARCIA CUENCA', 'CARLOS ERICO', 'trabajador'),
('702273970', 'CORDOVA ZAPATA', 'PAQUITO VICENTE', 'trabajador'),
('702274671', 'ESPINOZA A?AZCO', 'FAUSTO GONZALO', 'trabajador'),
('702276759', 'CAPA MACAS', 'WILLIAN ALONSO', 'trabajador'),
('702279779', 'FAJARDO FAREZ', 'ROBERTO CARLOS', 'trabajador'),
('702288861', 'RUILOVA VELEPUCHA', 'HOLMES FERNANDO', 'trabajador'),
('702291410', 'TRUJILLO GALO', 'ROSELITO ', 'trabajador'),
('702292822', 'SERRANO ORDO?EZ', 'MANUEL APARICIO', 'trabajador'),
('702297979', 'OLMEDO ROMERO', 'SUSANA PRISCILA', 'trabajador'),
('702310624', 'GUAMAN BERMEO', 'LUIS JULIO', 'trabajador'),
('702311564', 'AGUIRRE ERAZO', 'GINA SHIRLEY', 'trabajador'),
('702315698', 'SALINAS MACAS', 'JOSE NEPTALI', 'trabajador'),
('702320938', 'FEIJOO AGUILAR', 'WILMER ANASTACIO', 'trabajador'),
('702320995', 'DOMINGUEZ PESANTES', 'LESLY DEL PILAR', 'trabajador'),
('702323031', 'AGUACONDO CRUZ', 'CLARA CARMEN', 'trabajador'),
('702323312', 'ALVAREZ DIAZ', 'AMPARO DE', 'trabajador'),
('702323411', 'AGUIRRE MORALES', 'DAYSI MARIA', 'trabajador'),
('702325176', 'ATARIGUANA LUNA', 'FLERIDO MARINO', 'trabajador'),
('702345539', 'LEON ARIAS', 'LUIS ALBERTO', 'trabajador'),
('702362542', 'AGILA LEON', 'ELIO OSWALDO', 'trabajador'),
('702369703', 'VERDAGUER FEIJOO', 'CARLOS ESTUARDO', 'trabajador'),
('702371618', 'FAJARDO VELEPUCHA', 'MIGUEL ENRIQUE', 'trabajador'),
('702374596', 'MORENO FAUBLA', 'JOHN MAYO', 'trabajador'),
('702380494', 'GUZMAN GUZMAN', 'CLEOPATRA BERNARDINA', 'trabajador'),
('702389222', 'ARMIJOS SUAREZ', 'MARTHA RAQUEL', 'trabajador'),
('702393653', 'PERERO LUNA', 'KERLY ROSSANA', 'trabajador'),
('702401290', 'SANCHEZ BRICE?O', 'GLADYS ROSA', 'trabajador'),
('702402538', 'ORELLANA HONORES', 'STALIN DANILO', 'trabajador'),
('702404310', 'VILLAVICENCIO MIRABA', 'MAXIMILIANO ', 'trabajador'),
('702406356', 'QUEZADA GUARNIZO', 'JIMMY HINDAR', 'trabajador'),
('702410168', 'ALBA RAMOS', 'JOSE MARIA', 'trabajador'),
('702410226', 'ALBA RAMOS', 'OSWALDO GUILLERMO', 'trabajador'),
('702415381', 'PE?ALOZA GUILLEN', 'HERNAN DE JESUS', 'trabajador'),
('702415548', 'ALMACHE CHANGO', 'JUANA JANNETH', 'trabajador'),
('702417924', 'CUENCA AGUIRRE', 'PABLO HEVER', 'trabajador'),
('702419672', 'MONSERRATE SARANGO', 'YOCONDA PATRICIA', 'trabajador'),
('702422528', 'CUEVA CARRION', 'CORNELIO ANTONIO', 'trabajador'),
('702430166', 'AGUILAR LOAYZA', 'DIEGO JAVIER', 'trabajador'),
('702431180', 'ARMIJOS ROMERO', 'WASHINGTON JORGE', 'trabajador'),
('702441668', 'ORTEGA MARCO', 'ANTONIO ', 'trabajador'),
('702446022', 'FEIJOO AGUILAR', 'EDGAR VINICIO', 'trabajador'),
('702446048', 'ROSALES VELEZ', 'LUIS ENRIQUE', 'trabajador'),
('702453002', 'CRUZ VELASCO', 'RICHARD MARLON', 'trabajador'),
('702461518', 'NAVARRETE ZAMBRANO', 'STALINA SVELANA', 'trabajador'),
('702464272', 'CASTRO ARMIJOS', 'MARIO ERWIN', 'trabajador'),
('702472721', 'AGUILAR AGUILAR', 'ZULAY LIZALOT', 'trabajador'),
('702472994', 'QUEZADA VALAREZO', 'PABLO GARY', 'trabajador'),
('702477027', 'SANCHEZ ZARI', 'GONZALO ENRIQUE', 'trabajador'),
('702501594', 'ALVAREZ DIAZ', 'ABDON STALIN', 'trabajador'),
('702503400', 'TORRES AGUILAR', 'NIXON EFRAIN', 'trabajador'),
('702511486', 'BURGOS DE LA ROSA', 'ALEX HENRY', 'trabajador'),
('702515404', 'MINGA CHUICO', 'JUAN IVAN', 'trabajador'),
('702523432', 'MENDOZA NAPA', 'CELIA MARIA', 'trabajador'),
('702524091', 'ILLESCAS BONILLA', 'GABRIELA MABEL', 'trabajador'),
('702528209', 'AGUIRRE CALDERON', 'JUANA LEOPOLDINA', 'trabajador'),
('702539172', 'ESPINOZA CALERO', 'LILIANA CAROLA', 'trabajador'),
('702539446', 'PACHUCHO HERNANDEZ', 'MARTHA ELIZABETH', 'trabajador'),
('702539891', 'MAGALLANES ITURRALDE', 'JOSE ABEL', 'trabajador'),
('702543661', 'REYES ESPINOZA', 'ELENA ALEXANDRA', 'trabajador'),
('702544750', 'PARRALES LIGUA', 'CARLOS ENRIQUE', 'trabajador'),
('702547068', 'YELA JORDAN', 'CARMEN LASTENIA', 'trabajador'),
('702548272', 'VILLACRES SEDAMANOS', 'ROSA ELVIRA', 'trabajador'),
('702549361', 'ALVEAR RAMON', 'MARITZA ALEXANDRA', 'trabajador'),
('702550526', 'MOROCHO ASANZA', 'JUDYTH MARIBEL', 'trabajador'),
('702552621', 'JARAMILLO GARCIA', 'FERNANDO VLADIMIR', 'trabajador'),
('702554262', 'RIOS RIOS', 'OSWALDO VICENTE', 'trabajador'),
('702564899', 'JACOME HOLGUIN', 'TAYRON ERNESTO', 'trabajador'),
('702567843', 'JERVEZ QUINTANILLA', 'ERWIN OSWALDO', 'trabajador'),
('702578105', 'CUENCA CORREA', 'HERRY GUALBERTO', 'trabajador'),
('702583774', 'CABRERA SOLANO', 'WINING ELOY', 'trabajador'),
('702584301', 'PATI?O CRESPO', 'ALEXANDER LIBORIO', 'trabajador'),
('702595059', 'ROMOLEROUX LOJA', 'EFRAIN JORGE', 'trabajador'),
('702598467', 'AGUIRRE CUEVA', 'JANNETH MARISOL', 'trabajador'),
('702606625', 'PE?A JORGE', 'ENRIQUE ', 'trabajador'),
('702631847', 'CHALEN CUSME', 'JOSE JOVANNY', 'trabajador'),
('702641432', 'ROMERO CARRERA', 'VICTOR HYGORTH', 'trabajador'),
('702642745', 'GARZON CORDOVA', 'LIDIA MIRELLA', 'trabajador'),
('702649104', 'SANDOVAL CORREA', 'ANGELA ISABEL', 'trabajador'),
('702651027', 'CARRE?O ASTUDILLO', 'PABLO ARMANDO', 'trabajador'),
('702654070', 'NIEVES MONTENEGRO', 'JUAN ANTONIO', 'trabajador'),
('702659905', 'CAIMINAGUA VASQUEZ', 'KARINA ELIZABETH', 'trabajador'),
('702662644', 'FRANK PARRAGA', 'BORIS ALFREDO', 'trabajador'),
('702665522', 'ALBAN CASTRO', 'RUTH MARGARITA', 'trabajador'),
('702666710', 'ROSALES VELIZ', 'CARLOS ALBERTO', 'trabajador'),
('702673609', 'NIEBLA ALVAREZ', 'DARWIN ESTEBAN', 'trabajador'),
('702714676', 'RODRIGUEZ MOGROVEJO', 'CARLOS ANGEL', 'trabajador'),
('702719832', 'FLORES JARAMILLO', 'MARCO VINICIO', 'trabajador'),
('702730136', 'PAZ VARGAS', 'VICTOR JAVIER', 'trabajador'),
('702730359', 'RIVERA PALADINES', 'MARITZA YOLANDA', 'trabajador'),
('702730813', 'ZAMBRANO AYALA', 'WILMER PAUL', 'trabajador'),
('702732694', 'CUENCA VASQUEZ', 'FREDDY ', 'trabajador'),
('702734708', 'CRUZ CHAVEZ', 'ESTEBAN OSWALDO', 'trabajador'),
('702738899', 'MACAS MACAS', 'JOSE LEONARDO', 'trabajador'),
('702750613', 'ORELLANA TERREROS', 'JULIO CESAR', 'trabajador'),
('702769761', 'GUERRERO CHAVEZ', 'INGRID MABEL', 'trabajador'),
('702772641', 'ULLOA PROCEL', 'JIMMY STALIN', 'trabajador'),
('702778648', 'RIZZO FERNANDEZ', 'NINO XAVIER', 'trabajador'),
('702785908', 'MACHUCA JAEN', 'ETHEL YESENNIA', 'trabajador'),
('702787839', 'ROGEL MEDINA', 'LAURA JUDITH', 'trabajador'),
('702790056', 'LUCAS CERNA', 'MARJORIE ALEXANDRA', 'trabajador'),
('702790155', 'PAREDES VALAREZO', 'KATTY ELENA', 'trabajador'),
('702792268', 'MACHARE MU?OZ', 'MAYIYA MARIBEL', 'trabajador'),
('702795907', 'GUZMAN PE?A', 'LEODAN ARNALDO', 'trabajador'),
('702802877', 'PAZ VIVANCO', 'CARLOS JIMMY', 'trabajador'),
('702809971', 'MEDINA HURTADO', 'MARCELO MANUEL', 'trabajador'),
('702820424', 'REQUELME ORELLANA', 'ANGEL RODRIGO', 'trabajador'),
('702821307', 'CHERREZ BUSTAMANTE', 'VICENTE JAVIER', 'trabajador'),
('702830233', 'QUI?ONEZ QUEZADA', 'CARLOS ALFREDO', 'trabajador'),
('702848284', 'APOLO GONZAGA', 'EDIN FAVIAN', 'trabajador'),
('702866872', 'LOJA FLORES', 'JORGE PATRICIO', 'trabajador'),
('702874298', 'GARCIA CUENCA', 'ENZO BYRON', 'trabajador'),
('702877796', 'FLORES JARAMILLO', 'LUIS ALBERTO', 'trabajador'),
('702881947', 'BRITO ARIAS', 'MERCY KARINA', 'trabajador'),
('702887571', 'ESPINOZA CORREA', 'WILSON PATRICIO', 'trabajador'),
('702894551', 'GUZMAN GUZMAN', 'GALO VICENTE', 'trabajador'),
('702897505', 'ZAPATA QUIROZ', 'FELIPE JAVIER', 'trabajador'),
('702901513', 'ESPINOZA QUEZADA', 'MERCY YADIRA', 'trabajador'),
('702905118', 'FRANCO VERI?AZ', 'JENNIFER DEL CARMEN', 'trabajador'),
('702905936', 'APOLO APOLO', 'CARMEN ILEANA', 'trabajador'),
('702911603', 'TORRES AGUILAR', 'LOURDES DEL CISNE', 'trabajador'),
('702923574', 'NAGUA DOMINGUEZ', 'MARIA ISABEL', 'trabajador'),
('702924325', 'SUAREZ HIDALGO', 'WELLINGTON TAYLOR', 'trabajador'),
('702924366', 'AGUILAR GONZALEZ', 'XAVIER VICENTE', 'trabajador'),
('702926817', 'CASTILLO ESPINOZA', 'ALVARO JESUS', 'trabajador'),
('702928607', 'GONZALEZ RUIZ', 'WELLINGTON ARMANDO', 'trabajador'),
('702930413', 'PE?ARRETA CARRION', 'GLENDA DEL CARMEN', 'trabajador'),
('702938978', 'BUENO FAJARDO', 'FREDDY ORLANDO', 'trabajador'),
('702949256', 'FEIJOO AGUILAR', 'ANGEL VINICIO', 'trabajador'),
('702951989', 'HERRERA CASTILLO', 'ALVARO SEGUNDO', 'trabajador'),
('702957200', 'REQUENA ALVARADO', 'JOHN FRANCISCO', 'trabajador'),
('702978628', 'ZAMBRANO PALACIOS', 'SEGUNDO WILFRIDO', 'trabajador'),
('702994047', 'LOPEZ ORTIZ', 'NATHALY NILDREE', 'trabajador'),
('702994633', 'GONZALEZ CEFERINO', 'JOFFRE FELIPE', 'trabajador'),
('703003798', 'VALAREZO ALONZO', 'LYNDON ANDRES', 'trabajador'),
('703009175', 'GONZALEZ PEREZ', 'KEVIN XAVIER', 'trabajador'),
('703011833', 'ESPINOZA MORA', 'NEY JAVIER', 'trabajador'),
('703021378', 'GONZALEZ MACAS', 'SEGUNDO EDMUNDO', 'trabajador'),
('703043729', 'DIAZ JIMENEZ', 'JIMMY AUGUSTO', 'trabajador'),
('703043950', 'GALLO ESPINOZA', 'WILLIAM ALBERTO', 'trabajador'),
('703048918', 'MONTALVO BLACIO', 'JOSE MAURICIO', 'trabajador'),
('703054486', 'CARAGUAY MOGROVEJO', 'ALEXIS ', 'trabajador'),
('703064816', 'ENCALADA HEREDIA', 'JEFFERSON ', 'trabajador'),
('703068767', 'MORALES ABRIL', 'MARCO ANTONIO', 'trabajador'),
('703071449', 'ENCALADA MALDONADO', 'EFREN RAMIRO', 'trabajador'),
('703074062', 'GOMEZ VINTIMILLA', 'JUAN CARLOS', 'trabajador'),
('703076596', 'VALAREZO MACIAS', 'MARY ELIZABETH', 'trabajador'),
('703079152', 'GUZMAN PE?A', 'CHRISTIAN PATRICIO', 'trabajador'),
('703079319', 'ROMERO PALACIOS', 'MARIA VIOLETA', 'trabajador'),
('703093492', 'MU?OZ SILVA', 'LILIANA DEL CISNE', 'trabajador'),
('703105007', 'ARMIJOS CAPA', 'PETER ALAIN', 'trabajador'),
('703117929', 'LAPO FAJARDO', 'GHIBRAN FABRICIO', 'trabajador'),
('703123968', 'CARRION OLMEDO', 'RAQUEL DEL CARMEN', 'trabajador'),
('703125559', 'CRUZ VALENCIA', 'ALEX JAVIER', 'trabajador'),
('703133470', 'LIMONES GONZALEZ', 'TRINER FRANCISCO', 'trabajador'),
('703135459', 'MARURI BODERO', 'JULIO ALBERTO', 'trabajador'),
('703144964', 'MASABANDA CUENCA', 'EDISON JAVIER', 'trabajador'),
('703154492', 'SANCHEZ CARRI?N', 'JIMMY VINICIO', 'trabajador'),
('703156091', 'BLACIO ROJAS', 'HUGO OSWALDO', 'trabajador'),
('703165530', 'BALTAN CORREA', 'WELLINGTON NICOLAS', 'trabajador'),
('703180125', 'MALDONADO VALENCIA', 'ARLEY GUNTHER', 'trabajador'),
('703181370', 'HERRERA NARVAEZ', 'BLANCA OFELIA', 'trabajador'),
('703213835', 'GALLARDO MATAMOROS', 'MARCO VINICIO', 'trabajador'),
('703234898', 'QUEZADA ROMERO', 'MARIA DEL CARMEN', 'trabajador'),
('703235564', 'SERRANO ORDO?EZ', 'MARLON JAVIER', 'trabajador'),
('703240671', 'VILLAVICENCIO AGUILAR', 'PABLO DAVID', 'trabajador'),
('703254490', 'ROSALES CORREA', 'MAURICIO JOHN', 'trabajador'),
('703257758', 'GARCES PE?A', 'SORAYA MARIUXI', 'trabajador'),
('703258723', 'CONZA ARMIJOS', 'LUIS ALCIDES', 'trabajador'),
('703265504', 'GUEVARA BARBERA', 'LUIS ALBERTO', 'trabajador'),
('703270801', 'MATAMOROS JAEN', 'JILL PAULETTE', 'trabajador'),
('703292375', 'SALAZAR CARRION', 'IVAN MAURICIO', 'trabajador'),
('703347674', 'VIDAL RIOFRIO', 'JACINTO EDUARDO', 'trabajador'),
('703360651', 'TITUANA ELIZALDE', 'LENIN WLADIMIR', 'trabajador'),
('703380469', 'AGUIRRE CUEVA', 'ANGEL LEONARDO', 'trabajador'),
('703391946', 'ATARIGUANA LUNA', 'NOE DARWIN', 'trabajador'),
('703397505', 'CRUZ CHAVEZ', 'SANTOS REINALDO', 'trabajador'),
('703403436', 'ORDO?EZ TITUANA', 'CRISTIAN AUGUSTO', 'trabajador'),
('703403931', 'AGUILAR FEIJOO', 'ANDERSON OSWALDO', 'trabajador'),
('703424820', 'RIOFRIO RUIZ', 'ALEX EDUARDO', 'trabajador'),
('703429860', 'APOLO APOLO', 'INES FABIOLA', 'trabajador'),
('703435453', 'HIDALGO SOLANO', 'WILMER ALBERTO', 'trabajador'),
('703457358', 'VALDIVIEZO CHAMBA', 'MAURICIO RAFAEL', 'trabajador'),
('703469551', 'MOREIRA MU?OZ', 'LENIN JASHMANY', 'trabajador'),
('703488981', 'RAMIREZ ZAMBRANO', 'JESSICA JOHANNA', 'trabajador'),
('703495705', 'PAREDES LEON', 'CESAR ULISES', 'trabajador'),
('703529610', 'PARRALES BARROS', 'JOSE LUIS', 'trabajador'),
('703533539', 'ROJAS LUNA', 'JORGE VICENTE', 'trabajador'),
('703569434', 'ORTIZ ARMIJOS', 'KENYA NATALI', 'trabajador'),
('703591354', 'QUEZADA VALAREZO', 'FREDDY FABIAN', 'trabajador'),
('703592626', 'ORELLANA SALCEDO', 'ROSA EMILIA', 'trabajador'),
('703594531', 'ITURRALDE BARZALLO', 'ANTOHNY FRANCISCO', 'trabajador'),
('703598714', 'SEDAMANOS RIOFRIO', 'JINSOP ', 'trabajador'),
('703600262', 'ZAMBRANO CARRION', 'KARINA LEONOR', 'trabajador'),
('703608299', 'YANCHAPAXI CELI', 'ANA YESSENIA', 'trabajador'),
('703639039', 'VALLEJO CARRION', 'TERESA ESTHER', 'trabajador'),
('703652974', 'LAM ARMIJOS', 'BORIS RICARDO', 'trabajador'),
('703659318', 'VALENCIA CARRION', 'BERNARDA DEL CARMEN', 'trabajador'),
('703673665', 'VALLE ALVARADO', 'JORGE LUIS', 'trabajador'),
('703674861', 'LAPO ARMIJOS', 'ULBIO KLINTHON', 'trabajador'),
('703682831', 'ZUMBA TINOCO', 'YESENIA MARIBEL', 'trabajador'),
('703687525', 'PALADINES DOMINGUEZ', 'ANGIE ', 'trabajador'),
('703708016', 'ENRIQUEZ CARRION', 'KELVYN DAVID', 'trabajador'),
('703715599', 'RODRIGUEZ TORRES', 'MARLON ARTURO', 'trabajador'),
('703722132', 'CALLE BUSTAMENTE', 'JORGE LUIS', 'trabajador'),
('703740324', 'PATI?O AMAYA', 'RUTH DEL CARMEN', 'trabajador'),
('703745430', 'PE?ALOZA ROSILLO', 'MILENA DEL ROCIO', 'trabajador'),
('703750133', 'SARAGURO CORDOVA', 'FRANCA YESENIA', 'trabajador'),
('703757088', 'CORONEL RAMIREZ', 'HUGO ENRIQUE', 'trabajador'),
('703763359', 'LIMA LEON', 'MARIUXI JEANNETH', 'trabajador'),
('703764795', 'RIOS ARMIJOS', 'ESTALIN MIGUEL', 'trabajador'),
('703776732', 'GONZALEZ MONTOYA', 'GALO ADRIAN', 'trabajador'),
('703782565', 'MINUCHE SERRAN0', 'GABRIELA DEL CISNE', 'trabajador'),
('703787200', 'ALVAREZ TOALONGO', 'JULIO CESAR', 'trabajador'),
('703823138', 'ASTUDILLO CAPA', 'CHRISTIAN RAFAEL', 'trabajador'),
('703846527', 'LOAYZA APOLO', 'FREDDY GUSTAVO', 'trabajador'),
('703847293', 'MACAS MACAS', 'FABIAN PATRICIO', 'trabajador'),
('703863324', 'ARICHABALA SOTO', 'JAVIER EGIDIO', 'trabajador'),
('703874776', 'PINCAY SANDOVAL', 'RICHARD ', 'trabajador'),
('703893156', 'BENENAULA GUTIERREZ', 'GERMAN WI', 'trabajador'),
('703913699', 'BENENAULA GUTIERREZ', 'NESTOR ANDRES', 'trabajador'),
('703915066', 'ARIAS OCHOA', 'TERESA KATIUSKA', 'trabajador'),
('703917682', 'AGUILAR PAULINI', 'GIOVANA VANESSA', 'trabajador'),
('703917740', 'CACAO MORAN', 'ELIO ORLANDO', 'trabajador'),
('703917989', 'MOROCHO FIGUEROA', 'DIANA CLARIBEL', 'trabajador'),
('703932418', 'MIRANDA CACAY', 'MARLON MISAEL', 'trabajador'),
('703938928', 'PE?A CHUNGA', 'JAVIER ANTONIO', 'trabajador'),
('703943951', 'OCHOA ANAZCO', 'EDGAR RAFAEL', 'trabajador'),
('703957316', 'ROMERO TORRES', 'GONZALO FABIAN', 'trabajador'),
('703968958', 'TORRES SANCHEZ', 'LENIN FERNANDO', 'trabajador'),
('703995712', 'MARIN BUELE', 'JORGE FABIAN', 'trabajador'),
('703996769', 'GUEVARA EDINSON', 'ARMANDO ', 'trabajador'),
('704001494', 'BENITEZ CABRERA', 'MARCO POLO', 'trabajador'),
('704011378', 'PONCE ESCALANTE', 'GINGER NOEMI', 'trabajador'),
('704026145', 'LAPO FAJARDO', 'TANNYA VANESSA', 'trabajador'),
('704041086', 'FEIJOO PERALTA', 'HECTOR ANTONIO', 'trabajador'),
('704043785', 'RAMON SOLORZANO', 'LUIS FERNANDO', 'trabajador'),
('704086495', 'LEON ORTEGA', 'JUAN CARLOS', 'trabajador'),
('704100551', 'LOAIZA CASTILLO', 'BYRON ALCIDES', 'trabajador'),
('704116805', 'LAM ARMIJOS', 'EDISON XAVIER', 'trabajador'),
('704120070', 'MOCHA SARMIENTO', 'RODOLFO XAVIER', 'trabajador'),
('704156918', 'CAPA SARANGO', 'MARLENE YUSABETH', 'trabajador'),
('704163989', 'ORTEGA JARA', 'JOSE LUIS', 'trabajador'),
('704186634', 'VERA MOSQUERA', 'CARLOS ANDRES', 'trabajador'),
('704200922', 'MALDONADO REYES', 'MARITZA EUFEMIA', 'trabajador'),
('704218981', 'PINEDA QUIZHPE', 'RICHARD WENCESL', 'trabajador'),
('704230937', 'GONZALEZ BLACIO', 'FAMMER ANTONIO', 'trabajador'),
('704235456', 'MIELES VALVERDE', 'JORGE LUIS', 'trabajador'),
('704260215', 'GRANDA MANRIQUE', 'CARLOS IVAN', 'trabajador'),
('704269307', 'APONTE GONZALEZ', 'DANNY RENAN', 'trabajador'),
('704316405', 'HERRERA MALDONADO', 'KATIUSKA ALEXANDRA', 'trabajador'),
('704326222', 'PALADINES BRAVO', 'GERARDO DANIEL', 'trabajador'),
('704357961', 'PIEDRA BERNITA', 'CARLOS ENRIQUE', 'trabajador'),
('704361849', 'GUERRERO PARDO', 'LISBETH GUADALUPE', 'trabajador'),
('704379031', 'PRECIADO GARRIDO', 'JOSEPH GABRIEL', 'trabajador'),
('704441179', 'CASTILLO ROJAS', 'KARLA LIZBETH', 'trabajador'),
('704448778', 'APOLO V?SQUEZ', 'FRANKLIN MANUEL', 'trabajador'),
('704455849', 'VALDIVIESO CUACES', 'EDGAR PATRICIO', 'trabajador'),
('704489889', 'LOPEZ SIGUENZA', 'NATALI ALEXANDRA', 'trabajador'),
('704495258', 'JIMENEZ RAMON', 'CARLOS ABEL', 'trabajador'),
('704507516', 'ALVERCA CLAVIJO', 'LUIS ALBERTO', 'trabajador'),
('704516475', 'BUSTAMANTE MALACATUS', 'FERNANDO ', 'trabajador'),
('704537836', 'LOAYZA AGUILAR', 'PETER FERNANDO', 'trabajador'),
('704589514', 'LIMA LEON', 'EDINSON SIXTO', 'trabajador'),
('704614965', 'ESTRADA SOSORANGA', 'BISMARK EFRAIN', 'trabajador'),
('704627868', 'PINEDA PINEDA', 'CESAR ALBERTO', 'trabajador'),
('704650159', 'BURGOS SARANGO', 'SEBASTIAN ANDRES', 'trabajador'),
('704659374', 'QUI?ONEZ CABRERA', 'LUIS FERNANDO', 'trabajador'),
('704669043', 'OCHOA HERMIDAS', 'ANA ANDREA', 'trabajador'),
('704677640', 'MANTUANO FIGUEROA', 'MOISES MIGUEL', 'trabajador'),
('704689686', 'OJEDA HERRERA', 'JENNY KATHERINE', 'trabajador'),
('704705854', 'SANCHEZ FRANK', 'RICARDO JORGE', 'trabajador'),
('704711845', 'PACHECO HIDALGO', 'HECTOR LUIS', 'trabajador'),
('704732239', 'LOAYZA JARAMILLO', 'KAREN LISSETH', 'trabajador'),
('704736172', 'ELIZALDE BUSTAMENTE', 'JHONY RENE', 'trabajador'),
('704741990', 'LANDACAY VASQUEZ', 'JUAN CARLOS', 'trabajador'),
('704742188', 'CABRERA VALAREZO', 'DANIEL MIGUEL', 'trabajador'),
('704809888', 'CASTILLO ABAD', 'EDWIN ROLANDO', 'trabajador'),
('704822865', 'CAMACHO SALVATIERRA', 'CRISTIAN ', 'trabajador'),
('704827310', 'JADAN AGUILAR', 'ROBERTO FABRICIO', 'trabajador'),
('704870856', 'CONDOY RIOFRIO', 'JOSELITO OMAR', 'trabajador'),
('704892546', 'LOAYZA SANCHEZ', 'MARIA TATIANA', 'trabajador'),
('704893825', 'A?AZCO PEREZ', 'CRISTIAN MAURICIO', 'trabajador'),
('704899830', 'REYES TROCONIS', 'LARRY DANIEL', 'trabajador'),
('704904481', 'PINO QUEZADA', 'JORGE WASHINGTON', 'trabajador'),
('704912427', 'AGUILAR MARQUEZ', 'EDGAR FABRICIO', 'trabajador'),
('704967389', 'BORJA VICENTE', 'CARLOS EFRAIN', 'trabajador'),
('704971647', 'CASTILLO SARI', 'JOHNNY JAVIER', 'trabajador'),
('704973429', 'MATUTE ARPI', 'GUSTAVO PATRICIO', 'trabajador'),
('705018802', 'BENENAULA GUTIERREZ', 'DANNY ', 'trabajador'),
('705049872', 'ESPINOZA ROMAN', 'JOSE FRANCISCO', 'trabajador'),
('705068930', 'LANDIN ROJAS', 'FELIX GUILLERMO', 'trabajador'),
('705097095', 'ALCIVAR MALDONADO', 'JUAN CARLOS', 'trabajador'),
('705118842', 'MI?AN MANRIQUE', 'WILLY IVAN', 'trabajador'),
('705179497', 'BARROS ASANZA', 'JENNER DARIO', 'trabajador'),
('705213783', 'PE?A OCHOA', 'GINA TATIANA', 'trabajador'),
('705229433', 'PONTON BENAVIDES', 'KAREN SUSANA', 'trabajador'),
('705267854', 'FREIRE LOAYZA', 'MARIA FERNANDA', 'trabajador'),
('705367068', 'TINOCO TINOCO', 'MISAEL PATRICIO', 'trabajador'),
('705368694', 'RODRIGUEZ TORO', 'DIONICIO ALEJANDRO', 'trabajador'),
('705431575', 'GONZALEZ BERECHE', 'WILSON STALIN', 'trabajador'),
('705671428', 'CORDOVA LEON', 'JAIR VICENTE', 'trabajador'),
('706024569', 'MONTERO FAJARDO', 'NELSON LEONARDO', 'trabajador'),
('706114949', 'INFANTE APONTE', 'FREDY RUBEN', 'trabajador'),
('706245792', 'SAENZ BARREZUETA', 'CESAR EDUARDO', 'trabajador'),
('706424850', 'CANDO SARANGO', '?NGEL STHONY', 'trabajador'),
('800758609', 'PATI?O PRECIADO', 'FREDY ELI', 'trabajador'),
('800801284', 'CASTILLO ANGULO', 'GIL ENRIQUE', 'trabajador'),
('801135625', 'PATI?O PRECIADO', 'FELIPE LUIS', 'trabajador'),
('9', 'SUBESTACION MACHALA ', ' ', 'trabajador'),
('902245117', 'PALADINES FAJARDO', 'VICTOR GERARDO', 'trabajador'),
('902262559', 'CARAGUAY AREVALO', 'EDUARDO VICENTE', 'trabajador'),
('904095007', 'BELTRAN SANCHEZ', 'NELSON MATURIN', 'trabajador'),
('907788582', 'NOE FERNANDEZ', 'ROBERTO SIXTO', 'trabajador'),
('908441520', 'PE?AFIEL INTRIAGO', 'NELLY MAGDA', 'trabajador'),
('911590537', 'LOPEZ MOROCHO', 'FERNANDO LUIS', 'trabajador'),
('915285803', 'SAMANIEGO ALEJANDRO', 'JORGE RODOLFO', 'trabajador'),
('918482035', 'FERNANDEZ DOMINGUEZ', 'NARCISO ', 'trabajador'),
('926282070', 'NAVARRETE ZAMBRANO', 'MANUEL ', 'trabajador'),
('968599020', 'CNEL UNIDAD DE NEGOCIO EL ORO ', ' ', 'trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_subtransmision`
--

CREATE TABLE IF NOT EXISTS `lineas_subtransmision` (
  `actv_id` int(11) NOT NULL,
  `clsub_id` int(11) DEFAULT NULL,
  `lsub_coorde_este` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_coorde_norte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_etapa_funcional` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_altura` decimal(10,2) DEFAULT NULL,
  `lsub_anio_fabricacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_voltaje` int(11) NOT NULL,
  `lsub_posteria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_nombre_estructura` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_estado_estructura` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_observ_estructura` longtext COLLATE utf8_unicode_ci NOT NULL,
  `lsub_tipo_estructura` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_descripcion_ptierra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_tipo_ptierra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_calibre_ptierra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_estado_ptierra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_observ_ptierra` longtext COLLATE utf8_unicode_ci NOT NULL,
  `lsub_calibre_tensor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_tipo_tensor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_cantidad_tensor` int(11) NOT NULL,
  `lsub_estado_tensor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_observ_tensor` longtext COLLATE utf8_unicode_ci NOT NULL,
  `lsub_longitud_cfase` int(11) NOT NULL,
  `lsub_tipo_cfase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_material_cfase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_calibre_cfase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_estado_cfase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_observ_cfase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `lsub_longitud_cguardia` int(11) NOT NULL,
  `lsub_material_cguardia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_tipo_cguardia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_calibre_cguardia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_estado_cguardia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsub_observ_cguardia` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`actv_id`),
  KEY `IDX_AA0BDB52C3FB6DDA` (`clsub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lineas_subtransmision`
--

INSERT INTO `lineas_subtransmision` (`actv_id`, `clsub_id`, `lsub_coorde_este`, `lsub_coorde_norte`, `lsub_etapa_funcional`, `lsub_altura`, `lsub_anio_fabricacion`, `lsub_voltaje`, `lsub_posteria`, `lsub_material`, `lsub_tipo`, `lsub_nombre_estructura`, `lsub_estado_estructura`, `lsub_observ_estructura`, `lsub_tipo_estructura`, `lsub_descripcion_ptierra`, `lsub_tipo_ptierra`, `lsub_calibre_ptierra`, `lsub_estado_ptierra`, `lsub_observ_ptierra`, `lsub_calibre_tensor`, `lsub_tipo_tensor`, `lsub_cantidad_tensor`, `lsub_estado_tensor`, `lsub_observ_tensor`, `lsub_longitud_cfase`, `lsub_tipo_cfase`, `lsub_material_cfase`, `lsub_calibre_cfase`, `lsub_estado_cfase`, `lsub_observ_cfase`, `lsub_longitud_cguardia`, `lsub_material_cguardia`, `lsub_tipo_cguardia`, `lsub_calibre_cguardia`, `lsub_estado_cguardia`, `lsub_observ_cguardia`) VALUES
(28391, 1, '5', '5', '5', '5.00', '5', 5, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 5, '5', '5', 5, '5', '5', '5', '5', '5', 5, '5', '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE IF NOT EXISTS `parroquia` (
  `prq_id` int(11) NOT NULL AUTO_INCREMENT,
  `prq_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`prq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`prq_id`, `prq_nombre`) VALUES
(1, 'Puerto Bolivar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `emp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`,`rol_id`),
  KEY `IDX_C440BE37A663008` (`emp_id`),
  KEY `IDX_C440BE34BAB96C` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`emp_id`, `rol_id`) VALUES
('0706225653', 1),
('0702548987', 2),
('0700123456', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `pln_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pln_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pln_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`pln_id`, `pln_descripcion`) VALUES
('0', 'PRESTAMO BANCO DE DESARROLLO DE CHINA'),
('1', 'PROYECTO POR DISMINUIR'),
('1900', 'SALDOS ANTERIORES 2013 MACEDEL'),
('1901', 'SIN PROGRAMA'),
('1902', 'FERUM AÑOS ANTERIORES'),
('1906', 'MANDATO 9'),
('1907', 'MANDATO 15'),
('1908', 'FERUM 2008'),
('1910', 'FONDO DE REPOSICION 2010'),
('3', 'SISTEMA DE ALUMBRADO PUBLICO - SAPG'),
('4', 'FERUM BID'),
('5', 'FERUM 2013'),
('6', 'PLAN REP 2013'),
('7', 'PMD 2013'),
('8', 'PMD 2013 PLAN DE INTERVENCION EN EL NORT'),
('9', 'PROPIOS NUEVOS'),
('A', 'RECURSOS PROPIOS'),
('B', 'RECURSOS MEER'),
('C', 'PGE - FERUM 2014'),
('D', 'PGE - PLANREP 2014'),
('E', 'PGE - PMD 2014'),
('F', 'PLAN DE REFORZAMIENTO'),
('G', 'PLAN REP 2010'),
('H', 'PED 2010'),
('I', 'PGE FERUM 2010'),
('J', 'PIEMSE 2010'),
('K', 'PLAN REP 2011'),
('L', 'FONDO REPOSICION 2011'),
('M', 'PGE PMD 2011'),
('N', 'OTRAS FUENTES FERUM 2011'),
('O', 'FERUM 2012'),
('P', 'PLAN REP 2012'),
('Q', 'PGE PMD 2012'),
('R', 'FONDO REPOSICION 2012'),
('S', 'OTRAS FUENTES PLAN REP 2012'),
('T', 'OTRAS FUENTES PMD 2012'),
('U', 'OTRAS FUENTES FERUM 2012'),
('V', 'OTRAS FUENTES PRESTAMO PLAN REP 2012'),
('W', 'OTROS'),
('X', 'PLAN ECUADOR 2011'),
('Y', 'PLAN RENOVA (MEER)'),
('Z', 'ESTRATEGICO PLAN ECUADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `prv_id` int(11) NOT NULL AUTO_INCREMENT,
  `prv_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`prv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`prv_id`, `prv_nombre`) VALUES
(1, 'El Oro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_nombre`) VALUES
(1, 'ROLE_ADMIN'),
(2, 'ROLE_ADMINAF'),
(3, 'ROLE_ASISTAF'),
(4, 'ROLE_JEFE'),
(5, 'ROLE_USER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subestaciones`
--

CREATE TABLE IF NOT EXISTS `subestaciones` (
  `actv_id` int(11) NOT NULL,
  `csubest_id` int(11) DEFAULT NULL,
  `lsubest_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_anio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_modelo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_productividad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_capacidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_unidades` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lsubest_cantidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`actv_id`),
  KEY `IDX_ADE8B11973FBC532` (`csubest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subestaciones`
--

INSERT INTO `subestaciones` (`actv_id`, `csubest_id`, `lsubest_descripcion`, `lsubest_tipo`, `lsubest_anio`, `lsubest_marca`, `lsubest_modelo`, `lsubest_serie`, `lsubest_color`, `lsubest_material`, `lsubest_productividad`, `lsubest_capacidad`, `lsubest_unidades`, `lsubest_cantidad`) VALUES
(28390, 2, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsistema`
--

CREATE TABLE IF NOT EXISTS `subsistema` (
  `ssist_id` int(11) NOT NULL AUTO_INCREMENT,
  `ssist_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ssist_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ssist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `subsistema`
--

INSERT INTO `subsistema` (`ssist_id`, `ssist_codigo`, `ssist_descripcion`) VALUES
(1, '160101', 'SUBTRANSMISION - LINEAS DE SUBTRANSMISION'),
(3, '160202', 'SUBESTACIONES DE DISTRIBUCION'),
(4, '160203', 'ALIMENTADORES PRIMARIOS'),
(5, '160204', 'TRANSFORMADORES DE DISTRIBUCION'),
(6, '160205', 'REDES BAJO VOLTAJE (SECUNDARIAS)'),
(7, '161201', 'ADMINISTRACION-GERENCIA GENERAL'),
(8, '161202', 'AUDITORIA INTERNA'),
(9, '161203', 'DIRECCION FINANZAS'),
(10, '161205', 'ADMINISTRACION-TALENTO HUMANO'),
(11, '161206', 'ADMINISTRACION-SISTEMAS'),
(12, '161207', 'ANALISTA JURIDICO (COACTIVAS)'),
(13, '161208', 'DIRECCION DE PLANIFICACION'),
(14, '161209', 'DIRECCION TECNICA'),
(15, '161210', 'DIRECCION COMERCIAL'),
(16, '161211', 'ADMINISTRACION-SISTEMA DE ALUMBRADO PUBLICO GENERAL'),
(17, '161212', 'ADMINISTRACION-CONTROL DE GESTION'),
(18, '161213', 'ADMINISTRACION-UNIDAD DE SOTERRAMIENTO'),
(19, '161214', 'PROYECTO MEJORAMINETO SECTOR ELECTRICO ( EMIG)'),
(20, '161215', 'PROYECTO EFICIENCIA ENERGETICA'),
(21, '161216', 'GERENCIA PROYECTO SIG'),
(22, '161217', 'PROYECTO SIGDE SISTEMA INTELIGENCIA DE NEGOCIOS (BI)'),
(23, '161218', 'PROYECTO RECUPERACION DE CARTERA'),
(25, '160102', 'SUBTRANSMISION - SUBESTACIONES'),
(47, '1', 'ADMINISTRACION DE UNIDAD DE NEGOCIO'),
(48, '2', 'CETEORO'),
(49, '3', 'DIRECCION DE RELACIONES INDUSTRIALES'),
(50, '4', 'PRESIDENCIA EJECUTIVA'),
(51, '5', 'SISTEMA DE INFORMACION GEOGRAFICA'),
(52, '6', 'TRANSELEC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `emp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dpto_id` int(11) DEFAULT NULL,
  `emp_codigo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `IDX_42157CDF1FA00731` (`dpto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`emp_id`, `dpto_id`, `emp_codigo`) VALUES
('1', 35, 'ND'),
('10', 46, 'ND'),
('100', 49, 'ND'),
('1000', 11, 'ND'),
('1001225117', 30, '2358'),
('1001682788', 35, '2366'),
('100220771', 2, '6167'),
('101290336', 35, '2364'),
('101638450', 13, '2303'),
('102660370', 30, '2499'),
('102740248', 28, '2495'),
('105732531', 46, '2740'),
('11', 46, 'ND'),
('1101193124', 30, '2501'),
('1101508164', 27, '2346'),
('1101868931', 13, '2294'),
('1102423736', 35, '2717'),
('1102637822', 33, '2214'),
('1102643242', 41, '2378'),
('1102896972', 33, '2665'),
('1102910849', 34, '2319'),
('1104347784', 13, '2746'),
('1104883911', 30, '2751'),
('12', 35, 'ND'),
('1205622812', 36, '2614'),
('1206363747', 36, '6195'),
('1212121212', 26, 'ND'),
('13', 46, 'ND'),
('1301491740', 30, '2465'),
('1302427198', 35, '2718'),
('1303154346', 34, '2325'),
('1303185639', 33, '2671'),
('1304263419', 34, '2562'),
('1304791328', 30, '2464'),
('1305680413', 30, '2569'),
('1308310232', 28, '2416'),
('1309797460', 36, '2668'),
('1310426133', 26, '2274'),
('1311490898', 34, '2747'),
('14', 35, 'ND'),
('15', 46, 'ND'),
('16', 46, 'ND'),
('17', 35, 'ND'),
('1712492451', 33, '2228'),
('18', 35, 'ND'),
('19', 35, 'ND'),
('1900332378', 35, '2687'),
('20', 35, 'ND'),
('2000', 11, 'ND'),
('200487437', 14, '2302'),
('21', 46, 'ND'),
('22', 35, 'ND'),
('23', 35, 'ND'),
('24', 46, 'ND'),
('25', 34, 'ND'),
('302303615', 32, '6190'),
('6', 9, 'ND'),
('603318395', 29, '6189'),
('603840943', 29, '2653'),
('700519945', 8, '2265'),
('700758113', 3, '2672'),
('700806557', 30, '2535'),
('700814106', 28, '2427'),
('700830896', 36, '2321'),
('700832249', 30, '2439'),
('700833965', 35, '2556'),
('700903503', 2, '2633'),
('700905185', 35, '2666'),
('700925746', 8, '2236'),
('700926355', 28, '2563'),
('700933914', 35, '2370'),
('700984123', 34, '2343'),
('701015315', 35, '2372'),
('701021586', 30, '2624'),
('701031809', 28, 'ND'),
('701046278', 8, '2598'),
('701078412', 29, '2377'),
('701078545', 36, '2314'),
('701078602', 12, '2213'),
('701089898', 30, '2493'),
('701093965', 30, '2438'),
('701113706', 34, '2331'),
('701114738', 28, '2413'),
('701116022', 36, '2324'),
('701133241', 30, '2458'),
('701137903', 35, '2726'),
('701154940', 26, '2272'),
('701173718', 30, '2450'),
('701185928', 47, '6188'),
('701211286', 35, '2359'),
('701233157', 29, '2255'),
('701236473', 39, '2232'),
('701240459', 8, '2263'),
('701240913', 30, '2460'),
('701243115', 8, '2257'),
('701250672', 35, '2361'),
('701264194', 30, '2461'),
('701264467', 34, '2333'),
('701270837', 30, '2590'),
('701285561', 30, '2443'),
('701313322', 29, '2383'),
('701325482', 35, '2510'),
('701327231', 8, '2258'),
('701343139', 12, '2404'),
('701379745', 30, '2482'),
('701381295', 30, '2520'),
('701390924', 2, '2528'),
('701405334', 35, '2691'),
('701417933', 34, '2335'),
('701434789', 30, '2418'),
('701462145', 34, '2330'),
('701474496', 36, '2320'),
('701489999', 34, '2336'),
('701490104', 34, '2669'),
('701499402', 30, '2483'),
('701539892', 8, '2648'),
('701545345', 36, '2342'),
('701549230', 43, 'ND'),
('701575722', 13, '2305'),
('701597494', 2, '2244'),
('701601726', 30, '2487'),
('701602708', 30, '2456'),
('701613556', 30, '2475'),
('701619983', 30, '2449'),
('701643918', 30, '2477'),
('701644692', 3, '2271'),
('701646267', 31, '2426'),
('701658387', 36, '2322'),
('701674723', 20, '2652'),
('701677742', 35, '2727'),
('701677866', 20, '2401'),
('701684318', 30, '2437'),
('701710857', 30, '2508'),
('701718330', 36, '2313'),
('701719833', 30, '2448'),
('701720682', 44, '2583'),
('701723421', 30, '2308'),
('701727471', 29, '2221'),
('701730152', 12, '2339'),
('701736217', 36, '2310'),
('701753295', 35, '2710'),
('701756900', 29, '2392'),
('701760696', 35, '2507'),
('701791485', 11, '2248'),
('701798696', 30, '2537'),
('701806002', 29, '2525'),
('701821555', 35, '2682'),
('701839672', 8, '2260'),
('701840936', 41, '2421'),
('701848715', 32, '2626'),
('701852592', 30, '2433'),
('701880130', 27, '2283'),
('701882946', 36, '2549'),
('701900292', 36, '2301'),
('701902611', 8, '2256'),
('701906687', 30, '2425'),
('701920886', 30, '2488'),
('701950818', 30, '2484'),
('701956351', 30, '2444'),
('701978389', 28, '2419'),
('701993420', 30, '2521'),
('702001447', 20, '2603'),
('702008368', 30, '2417'),
('702008566', 41, '2411'),
('702011529', 28, '2414'),
('702014911', 35, '2362'),
('702018243', 30, '2472'),
('702018581', 37, '2249'),
('702024043', 30, '2608'),
('702042342', 18, '2279'),
('702053778', 30, '2338'),
('702057100', 31, '2315'),
('702059791', 26, '2721'),
('702060229', 30, '2490'),
('702060237', 35, '2357'),
('702068461', 34, '2514'),
('702073289', 5, '2209'),
('702078577', 41, '2579'),
('702078718', 30, '2474'),
('702080995', 31, '2390'),
('702092909', 2, '2240'),
('702094756', 6, '2206'),
('702102203', 34, '2341'),
('702123233', 36, '2309'),
('702124199', 30, '2407'),
('702127994', 13, '2547'),
('702130618', 28, '2441'),
('702131855', 11, '2252'),
('702132275', 30, '2623'),
('702149634', 30, '2466'),
('702161142', 30, '2462'),
('702164476', 29, '2422'),
('702169616', 30, '2506'),
('702173980', 18, '2276'),
('702185125', 20, '2400'),
('702194358', 28, '2512'),
('702199258', 34, '2410'),
('702202565', 3, '2270'),
('702208471', 13, '2533'),
('702209313', 12, 'ND'),
('702211079', 31, '2379'),
('702211533', 29, '2393'),
('702214263', 31, '2409'),
('702219254', 30, '2420'),
('702224312', 30, '2522'),
('702224361', 12, '2295'),
('702226564', 35, '2707'),
('702234998', 33, '2529'),
('702240029', 31, '2264'),
('702245127', 30, '2492'),
('702257437', 29, '2381'),
('702262940', 25, '2223'),
('702273467', 13, '2323'),
('702273970', 30, '2491'),
('702274671', 31, '2423'),
('702276759', 35, '2224'),
('702279779', 30, '2519'),
('702288861', 30, '2636'),
('702291410', 35, '2267'),
('702292822', 35, '2690'),
('702297979', 30, '2594'),
('702310624', 30, '2478'),
('702311564', 2, '2246'),
('702315698', 30, '2445'),
('702320938', 5, '2208'),
('702320995', 42, '2722'),
('702323031', 28, '2399'),
('702323312', 18, '2215'),
('702323411', 30, '2403'),
('702325176', 35, '2699'),
('702345539', 34, '2340'),
('702362542', 30, '2479'),
('702369703', 11, '2251'),
('702371618', 30, '2489'),
('702374596', 32, '2300'),
('702380494', 2, '2237'),
('702389222', 30, '2290'),
('702393653', 30, '2517'),
('702401290', 27, '2280'),
('702402538', 36, '2312'),
('702404310', 31, '2262'),
('702406356', 36, '2306'),
('702410168', 29, '2394'),
('702410226', 12, '2284'),
('702415381', 30, '2570'),
('702415548', 19, '2253'),
('702417924', 34, '2286'),
('702419672', 30, '2205'),
('702422528', 35, '2288'),
('702430166', 36, '2311'),
('702431180', 30, '2432'),
('702441668', 34, '2516'),
('702446022', 30, '2435'),
('702446048', 34, '2344'),
('702453002', 34, '2627'),
('702461518', 29, '2291'),
('702464272', 34, '2536'),
('702472721', 30, '2481'),
('702472994', 30, '2480'),
('702477027', 30, '2471'),
('702501594', 13, '2307'),
('702503400', 28, '2542'),
('702511486', 30, '2434'),
('702515404', 30, '2667'),
('702523432', 28, '2424'),
('702524091', 27, '2281'),
('702528209', 2, '2239'),
('702539172', 42, '2235'),
('702539446', 33, '2233'),
('702539891', 34, '2451'),
('702543661', 31, '2298'),
('702544750', 34, '2345'),
('702547068', 30, '2468'),
('702548272', 30, '2289'),
('702549361', 37, '2639'),
('702550526', 28, '2408'),
('702552621', 12, '2211'),
('702554262', 30, '2296'),
('702564899', 31, '2225'),
('702567843', 30, '2645'),
('702578105', 35, '2363'),
('702583774', 35, '2285'),
('702584301', 44, 'ND'),
('702595059', 32, '2578'),
('702598467', 36, '2292'),
('702606625', 28, '2518'),
('702631847', 30, '2436'),
('702641432', 34, '2406'),
('702642745', 47, '2231'),
('702649104', 29, '2207'),
('702651027', 6, '2202'),
('702654070', 33, '2230'),
('702659905', 2, '2241'),
('702662644', 27, '2724'),
('702665522', 30, '2398'),
('702666710', 30, '2485'),
('702673609', 20, '2515'),
('702714676', 30, '2405'),
('702719832', 34, '2356'),
('702730136', 34, '2337'),
('702730359', 25, '2218'),
('702730813', 28, '2431'),
('702732694', 29, '2384'),
('702734708', 46, '2531'),
('702738899', 30, '2635'),
('702750613', 30, '2459'),
('702769761', 21, '2227'),
('702772641', 30, '2395'),
('702778648', 26, '2632'),
('702785908', 27, '2238'),
('702787839', 19, '2380'),
('702790056', 30, '2573'),
('702790155', 2, '2242'),
('702792268', 27, '2720'),
('702795907', 33, '2553'),
('702802877', 33, '2538'),
('702809971', 36, '2326'),
('702820424', 36, '2347'),
('702821307', 34, '2354'),
('702830233', 30, '2463'),
('702848284', 30, '2486'),
('702866872', 30, '2642'),
('702874298', 34, '2430'),
('702877796', 35, '2587'),
('702881947', 41, '2275'),
('702887571', 41, '2509'),
('702894551', 28, '2523'),
('702897505', 28, '2511'),
('702901513', 20, '2455'),
('702905118', 29, '2660'),
('702905936', 12, '2216'),
('702911603', 19, '2254'),
('702923574', 18, '2446'),
('702924325', 36, '2561'),
('702924366', 27, '2282'),
('702926817', 30, '2500'),
('702928607', 32, '2658'),
('702930413', 18, '2277'),
('702938978', 30, '2453'),
('702949256', 2, '2243'),
('702951989', 34, '2504'),
('702957200', 30, '2467'),
('702978628', 30, '2646'),
('702994047', 3, '2245'),
('702994633', 27, '2580'),
('703003798', 29, '2397'),
('703009175', 28, '2559'),
('703011833', 34, '2374'),
('703021378', 29, '2355'),
('703043729', 29, '2513'),
('703043950', 11, '2293'),
('703048918', 35, '2360'),
('703054486', 30, '2539'),
('703064816', 27, '2625'),
('703068767', 36, '2663'),
('703071449', 35, '2693'),
('703074062', 39, '2212'),
('703076596', 30, '2428'),
('703079152', 30, '2494'),
('703079319', 25, '2234'),
('703093492', 18, '2278'),
('703105007', 30, '2766'),
('703117929', 29, '2391'),
('703123968', 46, '2560'),
('703125559', 30, '2503'),
('703133470', 30, '2609'),
('703135459', 34, 'ND'),
('703144964', 34, '2365'),
('703154492', 13, '2677'),
('703156091', 30, '2497'),
('703165530', 30, '2527'),
('703180125', 20, '2719'),
('703181370', 30, '2604'),
('703213835', 34, '2541'),
('703234898', 29, '2382'),
('703235564', 35, '2686'),
('703240671', 37, '2203'),
('703254490', 34, '2595'),
('703257758', 29, '2640'),
('703258723', 30, '2643'),
('703265504', 37, '2269'),
('703270801', 18, '2602'),
('703292375', 30, '2760'),
('703347674', 30, '2524'),
('703360651', 13, '2679'),
('703380469', 29, '2386'),
('703391946', 35, '2700'),
('703397505', 46, '2545'),
('703403436', 34, '2375'),
('703403931', 34, '2576'),
('703424820', 29, '2396'),
('703429860', 41, '2304'),
('703435453', 30, '2728'),
('703457358', 30, '2566'),
('703469551', 29, '2599'),
('703488981', 12, '2297'),
('703495705', 30, '2577'),
('703529610', 34, '2637'),
('703533539', 32, '2656'),
('703569434', 32, '2505'),
('703591354', 36, '2619'),
('703592626', 36, '2555'),
('703594531', 32, '2592'),
('703598714', 30, '2618'),
('703600262', 15, '2606'),
('703608299', 6, '2204'),
('703639039', 2, '2247'),
('703652974', 30, '2502'),
('703659318', 34, '2273'),
('703673665', 34, '2470'),
('703674861', 30, '2496'),
('703682831', 30, '2605'),
('703687525', 13, '2725'),
('703708016', 14, '2738'),
('703715599', 13, '2678'),
('703722132', 34, '2548'),
('703740324', 37, '2268'),
('703745430', 11, '2250'),
('703750133', 5, '2588'),
('703757088', 30, '2557'),
('703763359', 2, '2554'),
('703764795', 30, '2631'),
('703776732', 30, '2613'),
('703782565', 13, '2649'),
('703787200', 30, '2532'),
('703823138', 30, '2662'),
('703846527', 21, '2226'),
('703847293', 30, '2476'),
('703863324', 46, '2376'),
('703874776', 34, '2616'),
('703893156', 35, '2701'),
('703913699', 20, '2543'),
('703915066', 30, '2621'),
('703917682', 30, '2584'),
('703917740', 30, '2641'),
('703917989', 30, '2659'),
('703932418', 30, '2544'),
('703938928', 28, '2558'),
('703943951', 36, '2589'),
('703957316', 34, '2352'),
('703968958', 36, '2564'),
('703995712', 30, '2664'),
('703996769', 30, '2546'),
('704001494', 30, '2748'),
('704011378', 25, '2217'),
('704026145', 32, '2551'),
('704041086', 20, '2601'),
('704043785', 36, '2735'),
('704086495', 28, '2540'),
('704100551', 35, '2705'),
('704116805', 28, '2615'),
('704120070', 34, '2565'),
('704156918', 3, '2596'),
('704163989', 35, '2650'),
('704186634', 19, '2568'),
('704200922', 30, '2612'),
('704218981', 35, '2593'),
('704230937', 34, '2582'),
('704235456', 31, '2628'),
('704260215', 29, '6196'),
('704269307', 35, '2694'),
('704316405', 34, '2629'),
('704326222', 34, '2550'),
('704357961', 34, '2581'),
('704361849', 31, '2299'),
('704379031', 35, '2574'),
('704441179', 30, '2638'),
('704448778', 30, '2730'),
('704455849', 30, '2763'),
('704489889', 30, '2600'),
('704495258', 4, '2675'),
('704507516', 35, '2684'),
('704516475', 35, '2689'),
('704537836', 30, '2756'),
('704589514', 32, '2657'),
('704614965', 17, '6192'),
('704627868', 30, '2620'),
('704650159', 34, '2752'),
('704659374', 20, '2572'),
('704669043', 14, '2647'),
('704677640', 30, '2729'),
('704689686', 29, '2607'),
('704705854', 35, '2670'),
('704711845', 13, '2676'),
('704732239', 29, '6184'),
('704736172', 34, '2585'),
('704741990', 32, '2586'),
('704742188', 28, '2571'),
('704809888', 36, '2739'),
('704822865', 32, '6191'),
('704827310', 35, '6194'),
('704870856', 30, '2755'),
('704892546', 30, '2644'),
('704893825', 29, '2591'),
('704899830', 28, '2674'),
('704904481', 12, '2758'),
('704912427', 34, '2654'),
('704967389', 30, '2731'),
('704971647', 35, '2709'),
('704973429', 35, '2715'),
('705018802', 30, '2762'),
('705049872', 35, '2683'),
('705068930', 36, '2754'),
('705097095', 30, '2617'),
('705118842', 12, '6197'),
('705179497', 29, '2634'),
('705213783', 32, '2745'),
('705229433', 30, '2622'),
('705267854', 32, '6185'),
('705367068', 36, '6193'),
('705368694', 32, '2655'),
('705431575', 34, '2750'),
('705671428', 30, '2761'),
('706024569', 36, '2753'),
('706114949', 35, '2697'),
('706245792', 36, '2749'),
('706424850', 30, '2764'),
('800758609', 28, '2552'),
('800801284', 36, '2318'),
('801135625', 34, '2373'),
('9', 35, 'ND'),
('902245117', 30, '2498'),
('902262559', 4, '2220'),
('904095007', 31, '2261'),
('907788582', 36, '2526'),
('908441520', 8, '2661'),
('911590537', 36, '2327'),
('915285803', 30, '2567'),
('918482035', 30, '2610'),
('926282070', 28, '2597'),
('968599020', 39, 'ND');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_propiedad`
--

CREATE TABLE IF NOT EXISTS `unidad_propiedad` (
  `udp_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `udp_cuenta_activo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `udp_cuenta_depreciacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `udp_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `udp_indice_depreciacion` int(11) NOT NULL,
  `udp_indice_residual` int(11) NOT NULL,
  `udp_vida_util_anios` int(11) NOT NULL,
  `udp_vida_util_meses` int(11) DEFAULT NULL,
  PRIMARY KEY (`udp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `unidad_propiedad`
--

INSERT INTO `unidad_propiedad` (`udp_id`, `udp_cuenta_activo`, `udp_cuenta_depreciacion`, `udp_descripcion`, `udp_indice_depreciacion`, `udp_indice_residual`, `udp_vida_util_anios`, `udp_vida_util_meses`) VALUES
('E04', '12102030100', '12103030100', 'EDIFICIOS COSTO H.', 3, 12, 33, 396),
('E18', '12102080100', '12103080100', 'EQ DE COMPUT C.H', 20, 3, 5, 60),
('E20', '12102110100', '12103110100', 'EQ DE COMUNICAC C.H', 10, 3, 10, 120),
('E32', '12102060100', '12103060100', 'MAQUINARIA Y EQ C.H.', 10, 3, 10, 120),
('E48', '12102100100', '12103100100', 'HERRAMIENTAS C.H', 10, 3, 10, 120),
('E56', '12102090100', '12103090100', 'VEHICULOS COSTO H.', 20, 10, 5, 60),
('E64', '12102120100', '12103120100', 'EQUIPOS DIVERSOS C.H', 10, 3, 10, 120),
('M44', '12102050100', '12103050100', 'M.ENSERES Y EQ COST H', 10, 3, 10, 120),
('M45', '521030377772', '00000000000', 'BIENES SUJETOS DE CONTROL', 0, 0, 0, 0);

--
-- Disparadores `unidad_propiedad`
--
DROP TRIGGER IF EXISTS `trigger_vida_util_meses`;
DELIMITER //
CREATE TRIGGER `trigger_vida_util_meses` BEFORE INSERT ON `unidad_propiedad`
 FOR EACH ROW SET NEW.udp_vida_util_meses = NEW.udp_vida_util_anios*12
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `emp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `us_nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `us_clave` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `us_salt` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`emp_id`, `us_nombre`, `us_clave`, `us_salt`) VALUES
('0700123456', '0700123456', '123', NULL),
('0702548987', '0702548987', '123', NULL),
('0706225653', '0706225653', '3210', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activos`
--
ALTER TABLE `activos`
  ADD CONSTRAINT `FK_FA458511FA00731` FOREIGN KEY (`dpto_id`) REFERENCES `departamento` (`dpto_id`),
  ADD CONSTRAINT `FK_FA458515D817A78` FOREIGN KEY (`ag_id`) REFERENCES `agencia` (`ag_id`),
  ADD CONSTRAINT `FK_FA458517109064A` FOREIGN KEY (`ctn_id`) REFERENCES `canton` (`ctn_id`),
  ADD CONSTRAINT `FK_FA4585174A050E2` FOREIGN KEY (`udp_id`) REFERENCES `unidad_propiedad` (`udp_id`),
  ADD CONSTRAINT `FK_FA458517A663008` FOREIGN KEY (`emp_id`) REFERENCES `trabajador` (`emp_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_FA45851904F155E` FOREIGN KEY (`ap_id`) REFERENCES `area_operativa` (`ap_id`),
  ADD CONSTRAINT `FK_FA45851A4DBAA3C` FOREIGN KEY (`pln_id`) REFERENCES `plan` (`pln_id`),
  ADD CONSTRAINT `FK_FA45851A823BE4F` FOREIGN KEY (`cc_id`) REFERENCES `cuenta_contable` (`cc_id`),
  ADD CONSTRAINT `FK_FA45851F6317056` FOREIGN KEY (`dpd_id`) REFERENCES `dependencia` (`dpd_id`);

--
-- Filtros para la tabla `bajas`
--
ALTER TABLE `bajas`
  ADD CONSTRAINT `FK_972158C4E5CB40B6` FOREIGN KEY (`actv_id`) REFERENCES `bienes_custodio` (`actv_id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `bienes_custodio`
--
ALTER TABLE `bienes_custodio`
  ADD CONSTRAINT `FK_783092DBE5CB40B6` FOREIGN KEY (`actv_id`) REFERENCES `activos` (`actv_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `FK_5C32FC17EEA6FCAF` FOREIGN KEY (`prv_id`) REFERENCES `provincia` (`prv_id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `categoria_lsubtransmision`
--
ALTER TABLE `categoria_lsubtransmision`
  ADD CONSTRAINT `FK_32224141C7FC29A7` FOREIGN KEY (`csubest_id_llegada`) REFERENCES `categoria_subestacion` (`csubest_id`),
  ADD CONSTRAINT `FK_3222414154707589` FOREIGN KEY (`csubest_id_salida`) REFERENCES `categoria_subestacion` (`csubest_id`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `FK_666965231FA00731` FOREIGN KEY (`dpto_id`) REFERENCES `departamento` (`dpto_id`),
  ADD CONSTRAINT `FK_666965237A663008` FOREIGN KEY (`emp_id`) REFERENCES `empleado` (`emp_id`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `FK_40E497EB76A96CC8` FOREIGN KEY (`ssist_id`) REFERENCES `subsistema` (`ssist_id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `detalle_depreciacion`
--
ALTER TABLE `detalle_depreciacion`
  ADD CONSTRAINT `FK_1F58917FE5CB40B6` FOREIGN KEY (`actv_id`) REFERENCES `bienes_custodio` (`actv_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `lineas_subtransmision`
--
ALTER TABLE `lineas_subtransmision`
  ADD CONSTRAINT `FK_AA0BDB52C3FB6DDA` FOREIGN KEY (`clsub_id`) REFERENCES `categoria_lsubtransmision` (`clsub_id`),
  ADD CONSTRAINT `FK_AA0BDB52E5CB40B6` FOREIGN KEY (`actv_id`) REFERENCES `activos` (`actv_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `FK_C440BE34BAB96C` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`),
  ADD CONSTRAINT `FK_C440BE37A663008` FOREIGN KEY (`emp_id`) REFERENCES `usuario` (`emp_id`);

--
-- Filtros para la tabla `subestaciones`
--
ALTER TABLE `subestaciones`
  ADD CONSTRAINT `FK_ADE8B119E5CB40B6` FOREIGN KEY (`actv_id`) REFERENCES `activos` (`actv_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ADE8B11973FBC532` FOREIGN KEY (`csubest_id`) REFERENCES `categoria_subestacion` (`csubest_id`);

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `FK_42157CDF1FA00731` FOREIGN KEY (`dpto_id`) REFERENCES `departamento` (`dpto_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_42157CDF7A663008` FOREIGN KEY (`emp_id`) REFERENCES `empleado` (`emp_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_2265B05D7A663008` FOREIGN KEY (`emp_id`) REFERENCES `empleado` (`emp_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
