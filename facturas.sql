-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2020 a las 00:37:32
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(50) NOT NULL,
  `titulo` varchar(1000) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `costo` longtext COLLATE utf8_bin NOT NULL,
  `resultado` mediumtext COLLATE utf8_bin NOT NULL,
  `factura` mediumtext COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `imagen` longtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `titulo`, `descripcion`, `costo`, `resultado`, `factura`, `fecha`, `imagen`) VALUES
(2, 'pruebva', 'sdkajfsjkdgfjkasghdj', '5432350', '0.00', '', '0000-00-00', ''),
(3, 'prueba', 'sdafgfjkasgfkgjasdkgfjkasdgfjkgasjgfjasdgk', '5625453213454', '530,080,625.00', '2454562', '0000-00-00', ''),
(4, '0', '0', '0', '0', '0', '0000-00-00', ''),
(5, 'pruebanumero 2', 'sdfgsdjkghjksdfhgklhsdfk', '25456254', '0.00', '', '0000-00-00', ''),
(6, 'pruebanumero 2', 'sdfkjskdghbgkjlsbajkgbjasbdg', '25454850', '548,643,425.00', '22546548', '0000-00-00', ''),
(7, 'PRUEBA NUMERO 3', 'LOREMOPmsdfklgnsdfghksdfnkghsdfihg', '245232', '0.00', '2248523', '0000-00-00', ''),
(8, 'PRUEBA NUMERO 3', 'LOREMOPmsdfklgnsdfghksdfnkghsdfihg', '245232', '0.00', '2248523', '0000-00-00', ''),
(9, 'PRUEBA NUMERO 3', 'LOREMOPmsdfklgnsdfghksdfnkghsdfihg', '245232', '0.00', '2248523', '0000-00-00', ''),
(10, 'PRUEBA 4', 'PRUEBA PARA VER SI CARGA LA FECHA', '50', '0.00', '', '0000-00-00', ''),
(11, 'PRYUEBASN FHECHAH', 'PRUEBA FECHA sdjklfhklsadhfjklasdhkldjghskadjghjk', '0', '60,000,000.00', '54864513', '2020-12-19', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
