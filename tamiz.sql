-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2014 at 10:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tamiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `enfermedades`
--

CREATE TABLE IF NOT EXISTS `enfermedades` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `enfermedades`
--

INSERT INTO `enfermedades` (`id`, `nombre`) VALUES
(1, 'Enfermedad A'),
(2, 'Enfermedad B');

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id`, `nombre`) VALUES
(1, 'Puebla---'),
(2, 'Aguascalientes---'),
(3, 'Baja California Sur6tttttttt'),
(4, 'Durango***'),
(5, 'Texas'),
(6, 'Merida'),
(7, 'Zacatecas'),
(8, 'Juris 3'),
(9, '787878');

-- --------------------------------------------------------

--
-- Table structure for table `jurisdictions`
--

CREATE TABLE IF NOT EXISTS `jurisdictions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `jurisdictions`
--

INSERT INTO `jurisdictions` (`id`, `nombre`) VALUES
(1, 'Uno'),
(2, 'Dos'),
(3, 'Jurisdiccion4'),
(4, 'Jurisdiccion5'),
(5, 'J6'),
(6, 'j7'),
(7, 'Juris 8'),
(8, 'Jurisdiccion 5'),
(9, 'My Jurisdiction');

-- --------------------------------------------------------

--
-- Table structure for table `malformaciones`
--

CREATE TABLE IF NOT EXISTS `malformaciones` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `malformaciones`
--

INSERT INTO `malformaciones` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2');

-- --------------------------------------------------------

--
-- Table structure for table `tamiz`
--

CREATE TABLE IF NOT EXISTS `tamiz` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `folio` int(255) unsigned DEFAULT NULL,
  `fechadenacimiento` datetime DEFAULT NULL,
  `horanacimiento` varchar(40) DEFAULT NULL,
  `sexo` varchar(40) DEFAULT NULL,
  `edadgestacional` varchar(40) DEFAULT NULL,
  `producto` varchar(40) DEFAULT NULL,
  `peso` int(2) DEFAULT NULL,
  `talla` int(2) DEFAULT NULL,
  `fechademuestra` datetime DEFAULT NULL,
  `horamuestra` varchar(40) DEFAULT NULL,
  `malformacion_id` int(2) DEFAULT NULL,
  `condicion` varchar(40) DEFAULT NULL,
  `alimentacion` varchar(40) DEFAULT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `edadmadre` int(20) DEFAULT NULL,
  `gesta` int(5) DEFAULT NULL,
  `enfermedad_id` int(5) DEFAULT NULL,
  `enfermedad` varchar(5) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `colonia` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `tecnica` varchar(50) DEFAULT NULL,
  `responsable_id` int(20) DEFAULT NULL,
  `responsable_lab_id` int(20) DEFAULT NULL,
  `estatus` enum('pendiente','completo') DEFAULT NULL,
  `malformacion` varchar(50) DEFAULT NULL,
  `ths` varchar(255) DEFAULT NULL,
  `ths_valor` varchar(255) DEFAULT NULL,
  `pku` varchar(255) DEFAULT NULL,
  `pku_valor` varchar(255) DEFAULT NULL,
  `oh17` varchar(255) DEFAULT NULL,
  `oh17_valor` varchar(255) DEFAULT NULL,
  `gal` varchar(255) DEFAULT NULL,
  `gal_valor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tamiz`
--

INSERT INTO `tamiz` (`id`, `folio`, `fechadenacimiento`, `horanacimiento`, `sexo`, `edadgestacional`, `producto`, `peso`, `talla`, `fechademuestra`, `horamuestra`, `malformacion_id`, `condicion`, `alimentacion`, `apellido_paterno`, `apellido_materno`, `nombre`, `edadmadre`, `gesta`, `enfermedad_id`, `enfermedad`, `domicilio`, `colonia`, `municipio`, `estado_id`, `cp`, `telefono`, `tecnica`, `responsable_id`, `responsable_lab_id`, `estatus`, `malformacion`, `ths`, `ths_valor`, `pku`, `pku_valor`, `oh17`, `oh17_valor`, `gal`, `gal_valor`) VALUES
(1, 787987, '1970-01-01 00:00:00', '15:60', 'Masculino', 'termino', 'unico', 3000, 350, '1970-01-01 00:00:00', '18:22', 2, 'sano', 'formulalactea', 'Ramirez', 'Lozada', 'Berenice', 35, 5, NULL, 'si', 'Rio sabinas 6126', 'San Manuel', 'Puebla', 1, '72570', '2336283', 'Talon', 2, 1, 'pendiente', 'no', 'normal', '966', 'sospechoso', '777', 'sospechoso', '56', 'normal', '456'),
(2, 5200, '2014-04-16 00:00:00', '', 'Femenino', 'pretermino', 'unico', 0, 0, '2014-04-16 00:00:00', '', 1, 'sano', 'lechematerna', 'Lopez', 'Ramirez', 'Adriana', 0, 1, NULL, NULL, '', '', '', 1, '', '', NULL, 1, 1, 'pendiente', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `nombre`) VALUES
(1, 'Units '),
(2, 'Dos'),
(3, 'Jurisdiccion4'),
(4, 'Jurisdiccion5'),
(5, 'J6'),
(6, 'j7'),
(7, 'Juris 8'),
(8, 'Jurisdiccion 5'),
(9, 'My Jurisdiction');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre`, `paterno`, `materno`) VALUES
(1, NULL, 'Alberto', 'Perez', 'Santos'),
(2, NULL, 'Juan Manuel', 'Rodriguez', 'Santibañez');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
