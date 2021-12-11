-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 11-12-2021 a las 22:14:23
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
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codigo`, `nombre`, `estado`, `fecha`) VALUES
(1, 'Manuel Mendoza', 'Presente', '2021-12-10'),
(2, 'Daniel Barros', 'Presente', '2021-12-10'),
(3, 'Eliecer Montaño', 'Ausente', '2021-12-10'),
(4, 'Jesús Merchan', 'Presente', '2021-12-10'),
(13, 'Manuel Mendoza', 'Presente', '2021-12-11'),
(14, 'Daniel Barros', 'Ausente', '2021-12-11'),
(15, 'Eliecer Montaño	', 'Presente', '2021-12-11'),
(16, 'Jesús Merchan', 'Presente', '2021-12-11');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE `transacciones` (
  `id` int(11) NOT NULL,
  `descipción` varchar(50) NOT NULL,
  `ganancia` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id`, `descipción`, `ganancia`, `fecha`) VALUES
(1, 'Bujía', 80000, '2021-12-01'),
(2, 'Pistón', 100000, '2021-12-01'),
(3, 'Llanta', 55000, '2021-12-01'),
(4, 'Freno de disco', 100000, '2021-12-02'),
(5, 'Neumático', 23500, '2021-12-02'),
(6, 'Llanta + cadena', 135000, '2021-12-03'),
(7, 'Espejo + Balinera', 45700, '2021-12-05'),
(8, 'manubrios', 15000, '2021-12-03'),
(9, 'Piñones + Banda', 36000, '2021-11-30'),
(10, 'Bujía + Pistón', 230000, '2021-11-27'),
(11, 'Neumático X4', 250000, '2021-11-28'),
(12, 'Llanta', 35000, '2021-12-03'),
(13, 'Manubrios + cadena + piñon', 98500, '2021-12-08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
