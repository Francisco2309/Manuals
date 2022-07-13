-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 04:31:58
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novam`
--

CREATE TABLE `novam` (
  `Id` int(100) NOT NULL,
  `Imagen` varchar(1000) COLLATE utf32_spanish_ci NOT NULL,
  `Marca` varchar(1000) COLLATE utf32_spanish_ci NOT NULL,
  `Modelo` varchar(1000) COLLATE utf32_spanish_ci NOT NULL,
  `Linea` varchar(1000) COLLATE utf32_spanish_ci NOT NULL,
  `Url` varchar(10000) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `novam`
--

INSERT INTO `novam` (`Id`, `Imagen`, `Marca`, `Modelo`, `Linea`, `Url`) VALUES
(21, 'invitacion pepe.jpg', 'Chevrolet', '2021', 'Aveo', 'minis.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `novam`
--
ALTER TABLE `novam`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `novam`
--
ALTER TABLE `novam`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
