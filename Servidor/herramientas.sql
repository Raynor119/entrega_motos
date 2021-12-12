-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 11-12-2021 a las 22:26:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contabilidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE `herramientas` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`codigo`, `nombre`, `estado`) VALUES
(5, 'Alicate', 'Buen Estado'),
(6, 'Destornillador punta Estria', 'Buen Estado'),
(7, 'Destornillador punta plana', 'Buen Estado'),
(8, 'Martillo de Uña', 'Buen Estado'),
(9, 'Compresor de Aire', 'Buen Estado'),
(10, 'Gato de elevación', 'Mal Estado'),
(11, 'Llave 11', 'Buen Estado'),
(13, 'Llave Inglesa', 'Buen Estado'),
(14, 'Taladro', 'Buen Estado'),
(16, 'Llave 14', 'Mal Estado'),
(17, 'Soldador', 'Mal Estado'),
(22, 'Maso', 'Buen Estado'),
(23, 'Remachadora', 'Buen Estado'),
(24, 'Sierra manual.', 'Buen Estado'),
(25, 'Arrancador de baterías.', 'Buen Estado'),
(26, 'Multímetro', 'Buen Estado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
