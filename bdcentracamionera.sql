-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 23:57:12
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcentracamionera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletos`
--

CREATE TABLE `boletos` (
  `id` int(50) NOT NULL,
  `iddestino` varchar(50) NOT NULL,
  `idpasajero` varchar(50) NOT NULL,
  `idcamion` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `noasiento` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `boletos`
--

INSERT INTO `boletos` (`id`, `iddestino`, `idpasajero`, `idcamion`, `precio`, `noasiento`, `fecha`) VALUES
(0, '', '', '', '', '', ''),
(789, '987', '8', '64', '135', '8', '9/11/01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `id` int(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `tipodemotor` varchar(50) NOT NULL,
  `tipodecombustible` varchar(50) NOT NULL,
  `cantidaddeasientos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`id`, `modelo`, `matricula`, `tipodemotor`, `tipodecombustible`, `cantidaddeasientos`) VALUES
(9, 'Kia', '564asf', 'V9', 'Gasolina Premium', '100'),
(64, 'Toyota', '564asf', 'V9', 'Gasolina Premium', '100'),
(312, '654ji9', '456fdsaa', 'V8', 'Aceite', '80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `id` int(50) NOT NULL,
  `fechasalida` tinyint(50) NOT NULL,
  `horasalida` tinyint(50) NOT NULL,
  `lugardestino` varchar(50) NOT NULL,
  `idcamion` int(50) NOT NULL,
  `idchofer` int(50) NOT NULL,
  `idpasajero` int(50) NOT NULL,
  `fechallegada` varchar(50) NOT NULL,
  `horallegada` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`id`, `fechasalida`, `horasalida`, `lugardestino`, `idcamion`, `idchofer`, `idpasajero`, `fechallegada`, `horallegada`) VALUES
(64, 12, 14, 'Chihuahua', 64, 456879, 0, '13/12/12', '14:50'),
(456, 12, 14, 'Chihuahua', 456, 456879, 0, '13/12/12', '14:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajeros`
--

CREATE TABLE `pasajeros` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correoelectronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pasajeros`
--

INSERT INTO `pasajeros` (`id`, `nombre`, `apellido`, `correoelectronico`, `direccion`, `telefono`) VALUES
(0, '', '', '', '', 0),
(15264, 'Edwyn', 'Uriel', 'edwynuriel.urbinamendoza15@gmail.com', 'Fortin de la soledad 1230', 978),
(45689, 'JOselito', 'Martinez', 'master@gmail.com', 'cotejo123', 963);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletos`
--
ALTER TABLE `boletos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pasajeros`
--
ALTER TABLE `pasajeros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
