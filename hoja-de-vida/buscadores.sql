-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 01:42:09
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buscadores`
--

CREATE TABLE `buscadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `mensaje` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `buscadores`
--

INSERT INTO `buscadores` (`id`, `nombre`, `telefono`, `correo`, `mensaje`) VALUES
(1, 'dsfsdf', 'dfasdf', 'sadfasd', 'adsfasdf'),
(2, 'dsfsdf', 'dfasdf', 'sadfasd', 'adsfasdf'),
(3, 'dsfsdf', 'dfasdf', 'sadfasd', 'adsfasdf'),
(4, 'fgsfg', 'dfgsdfg', 'sdfgsdf', 'Su mensajegdfsgsdf'),
(5, 'fgsfg', 'dfgsdfg', 'sdfgsdf', 'Su mensajegdfsgsdf'),
(6, 'fgsfg', 'dfgsdfg', 'sdfgsdf', 'Su mensajegdfsgsdf'),
(7, '', '', '', 'Su mensaje'),
(8, 'zfzf', 'sdfsdf', 'dsfsd', 'Su mensajesdfsd'),
(9, 'pinturas.com', '3132451023', '', 'hola me interesa pero quiero que has una prueba antes, vale?'),
(10, 'tomates', 'tototomates', '', 'daghdahdggggggggggggggggggggggggggggggggggfsssadffffffffffffffffffffffffffffffffffffffffffffffcdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
(11, 'fgdf', 'ssfs', 'sdfasd', 'Su mensajesdfasdf'),
(12, 'dfsdf', 'yoyoyoeeeeeee', '', 'Su mensajedfsasdffasdf'),
(13, 'ya viene la primera empresa', 'espera', 'ya viene', 'hay viene');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buscadores`
--
ALTER TABLE `buscadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buscadores`
--
ALTER TABLE `buscadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
