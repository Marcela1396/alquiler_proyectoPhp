-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2020 a las 02:59:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rent`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `idAlquiler` int(100) NOT NULL,
  `fechaPrestamo` date NOT NULL,
  `fechaDevolución` date NOT NULL,
  `estadoAlquiler` tinyint(1) NOT NULL,
  `cliente` varchar(20) COLLATE utf8_bin NOT NULL,
  `auto` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `placa` varchar(10) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(20) COLLATE utf8_bin NOT NULL,
  `mark` int(3) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`placa`, `modelo`, `mark`, `estado`) VALUES
('0909', '2', 2, 1),
('0990', '2022', 2, 1),
('09992', '2000', 3, 1),
('0999999', '2', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cedula` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cedula`, `nombre`, `telefono`) VALUES
('0009', 'Jesus Martinez', '123'),
('09009', 'Lolita Gomez', '729912');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(3) NOT NULL,
  `nombreMarca` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `nombreMarca`) VALUES
(2, 'Chevrolet'),
(1, 'Ford'),
(3, 'Hyundai');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`idAlquiler`),
  ADD KEY `fk_cliente` (`cliente`),
  ADD KEY `fk_auto` (`auto`);

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `fk_marca` (`mark`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`),
  ADD UNIQUE KEY `nombreMarca` (`nombreMarca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `idAlquiler` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `fk_auto` FOREIGN KEY (`auto`) REFERENCES `autos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`mark`) REFERENCES `marca` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
