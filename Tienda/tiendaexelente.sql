-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 15:30:38
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
-- Base de datos: `tiendaexelente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `administrador` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`administrador`, `clave`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `marca` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `urlimg` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` int(10) DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `deposito` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `descripcion`, `marca`, `urlimg`, `precio`, `categoria`, `deposito`) VALUES
(1, 'reloj1', '', '', 'reloj.jpg', 1000, 1, 10),
(2, 'reloj2', '', '', 'reloj.jpg', 1000, 1, 5),
(4, 'billetera2', '', '', 'billetera.jpg', 200, 2, 20),
(5, 'gorra1', '', '', 'gorra.jpg', 400, 3, 30),
(6, 'gorra5', ' ', '', 'gorra.jpg', 499, 3, 3),
(7, 'zapato1', '', '', 'zapato.jpg', 1590, 4, 5),
(8, 'zapato2', '', '', 'zapato.jpg', 1560, 4, 3),
(10, 'lente2', '', '', 'lente.jpg', 4000, 5, 7),
(61, 'Reloj ejemplo 1', 'Descripción del el articulo', 'Marcas', 'relojes/reloj1.jpg', 200000, 1, 12),
(62, 'Reloj ejemplo 2', 'Descripción del el articulo', 'Marcas', 'relojes/reloj2.jpg', 100000, 1, 7),
(63, 'Reloj ejemplo 3', 'Descripción del el articulo', 'Marcas', 'relojes/reloj3.jpg', 150000, 1, 17),
(64, 'Reloj ejemplo 4', 'Descripción del el articulo', 'Marcas', 'relojes/reloj4.jpg', 120000, 1, 8),
(65, 'Reloj ejemplo 5', 'Descripción del el articulo', 'Marcas', 'relojes/reloj5.jpg', 80000, 1, 9),
(66, 'Reloj ejemplo 6', 'Descripción del el articulo', 'Marcas', 'relojes/reloj6.jpg', 700000, 1, 12),
(67, 'Reloj ejemplo 7', 'Descripción del el articulo', 'Marcas', 'relojes/reloj7.jpg', 100000, 1, 60),
(68, 'Reloj ejemplo 8', 'Descripción del el articulo', 'Marcas', 'relojes/reloj8.jpg', 77000, 1, 15),
(69, 'Reloj ejemplo 9', 'Descripción del el articulo', 'Marcas', 'relojes/reloj9.jpg', 67000, 1, 30),
(70, 'Reloj ejemplo 10', 'Descripción del el articulo', 'Marcas', 'relojes/reloj10.jpg', 90000, 1, 80),
(71, 'Reloj ejemplo 11', 'Descripción del el articulo', 'Marcas', 'relojes/reloj11.jpg', 130000, 1, 2),
(72, 'Reloj ejemplo 12', 'Descripción del el articulo', 'Marcas', 'relojes/reloj12.jpg', 190000, 1, 9),
(73, 'Reloj ejemplo 13', 'Descripción del el articulo', 'Marcas', 'relojes/reloj13.jpg', 320000, 1, 22),
(74, 'Reloj ejemplo 14', 'Descripción del el articulo', 'Marcas', 'relojes/reloj14.jpg', 180000, 1, 15),
(75, 'lentes ejemplo 1', 'Descripción del el articulo', 'Marcas', 'lentes/lentes1.jpg', 80000, 5, 7),
(76, 'lentes ejemplo 2', 'Descripción del el articulo', 'Marcas', 'lentes/lentes2.jpg', 80000, 5, 8),
(77, 'lentes ejemplo 3', 'Descripción del el articulo', 'Marcas', 'lentes/lentes3.jpg', 80000, 5, 9),
(78, 'lentes ejemplo 4', 'Descripción del el articulo', 'Marcas', 'lentes/lentes4.jpg', 80000, 5, 1),
(79, 'lentes ejemplo 5', 'Descripción del el articulo', 'Marcas', 'lentes/lentes5.jpg', 80000, 5, 2),
(80, 'lentes ejemplo 6', 'Descripción del el articulo', 'Marcas', 'lentes/lentes6.jpg', 80000, 5, 3),
(81, 'lentes ejemplo 7', 'Descripción del el articulo', 'Marcas', 'lentes/lentes7.jpg', 80000, 5, 4),
(82, 'lentes ejemplo 8', 'Descripción del el articulo', 'Marcas', 'lentes/lentes8.jpg', 80000, 5, 5),
(83, 'lentes ejemplo 9', 'Descripción del el articulo', 'Marcas', 'lentes/lentes9.jpg', 80000, 5, 6),
(84, 'lentes ejemplo 10', 'Descripción del el articulo', 'Marcas', 'lentes/lentes10.jpg', 80000, 5, 7),
(85, 'lentes ejemplo 11', 'Descripción del el articulo', 'Marcas', 'lentes/lentes11.jpg', 80000, 5, 8),
(86, 'lentes ejemplo 12', 'Descripción del el articulo', 'Marcas', 'lentes/lentes12.jpg', 80000, 5, 12),
(87, 'lentes ejemplo 13', 'Descripción del el articulo', 'Marcas', 'lentes/lentes13.jpg', 80000, 5, 13),
(88, 'lentes ejemplo 14', 'Descripción del el articulo', 'Marcas', 'lentes/lentes14.jpg', 80000, 5, 10),
(89, 'billeteras ejemplo 1', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera1.jpg', 80000, 2, 9),
(90, 'billeteras ejemplo 2', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera2.jpg', 80000, 2, 8),
(91, 'billeteras ejemplo 3', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera3.jpg', 80000, 2, 5),
(92, 'billeteras ejemplo 4', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera4.jpg', 80000, 2, 5),
(93, 'billeteras ejemplo 5', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera5.jpg', 80000, 2, 6),
(94, 'billeteras ejemplo 6', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera6.jpg', 80000, 2, 7),
(95, 'billeteras ejemplo 7', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera7.jpg', 80000, 2, 12),
(96, 'billeteras ejemplo 8', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera8.jpg', 80000, 2, 8),
(97, 'billeteras ejemplo 9', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera9.jpg', 80000, 2, 6),
(98, 'billeteras ejemplo 10', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera10.jpg', 80000, 2, 7),
(99, 'billeteras ejemplo 11', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera11.jpg', 80000, 2, 9),
(100, 'billeteras ejemplo 12', 'Descripción del el articulo', 'Marcas', 'billeteras/billetera12.jpg', 80000, 2, 1),
(104, 'zapato ejemplo 1', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato1.jpg', 80000, 4, 9),
(105, 'zapato ejemplo 2', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato2.jpg', 80000, 4, 9),
(106, 'zapato ejemplo 3', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato3.jpg', 80000, 4, 9),
(107, 'zapato ejemplo 4', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato4.jpg', 80000, 4, 9),
(108, 'zapato ejemplo 5', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato5.jpg', 80000, 4, 9),
(109, 'zapato ejemplo 6', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato6.jpg', 80000, 4, 9),
(110, 'zapato ejemplo 7', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato7.jpg', 80000, 4, 9),
(111, 'zapato ejemplo 8', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato8.jpg', 80000, 4, 9),
(112, 'zapato ejemplo 9', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato9.jpg', 80000, 4, 9),
(113, 'zapato ejemplo 10', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato10.jpg', 80000, 4, 9),
(114, 'zapato ejemplo 11', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato11.jpg', 80000, 4, 9),
(115, 'zapato ejemplo 12', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato12.jpg', 80000, 4, 9),
(116, 'zapato ejemplo 13', 'Descripción del el articulo', 'Marcas', 'zapatos/zapato13.jpg', 80000, 4, 9),
(117, 'gorras ejemplo 1', 'Descripción del el articulo', 'Marcas', 'gorras/gorra1.jpg', 80000, 3, 9),
(118, 'gorras ejemplo 2', 'Descripción del el articulo', 'Marcas', 'gorras/gorra2.jpg', 80000, 3, 9),
(119, 'gorras ejemplo 3', 'Descripción del el articulo', 'Marcas', 'gorras/gorra3.jpg', 80000, 3, 9),
(120, 'gorras ejemplo 4', 'Descripción del el articulo', 'Marcas', 'gorras/gorra4.jpg', 80000, 3, 9),
(121, 'gorras ejemplo 5', 'Descripción del el articulo', 'Marcas', 'gorras/gorra5.jpg', 80000, 3, 9),
(122, 'gorras ejemplo 6', 'Descripción del el articulo', 'Marcas', 'gorras/gorra6.jpg', 80000, 3, 9),
(123, 'gorras ejemplo 7', 'Descripción del el articulo', 'Marcas', 'gorras/gorra7.jpg', 80000, 3, 9),
(124, 'gorras ejemplo 8', 'Descripción del el articulo', 'Marcas', 'gorras/gorra8.jpg', 80000, 3, 9),
(125, 'gorras ejemplo 9', 'Descripción del el articulo', 'Marcas', 'gorras/gorra9.jpg', 80000, 3, 9),
(126, 'gorras ejemplo 10', 'Descripción del el articulo', 'Marcas', 'gorras/gorra10.jpg', 80000, 3, 9),
(127, 'gorras ejemplo 11', 'Descripción del el articulo', 'Marcas', 'gorras/gorra11.jpg', 80000, 3, 9),
(128, 'gorras ejemplo 12', 'Descripción del el articulo', 'Marcas', 'gorras/gorra12.jpg', 80000, 3, 9),
(129, 'gorras ejemplo 13', 'Descripción del el articulo   ', 'Marcas', 'gorras/gorra13.jpg', 80000, 3, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'relojes'),
(2, 'billeteras'),
(3, 'gorras'),
(4, 'zapatos'),
(5, 'lentes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cc` int(20) DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `envio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pago` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subtotal` int(10) NOT NULL,
  `precioenvio` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `idcliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `fecha`, `nombre`, `apellido`, `cc`, `direccion`, `ciudad`, `pais`, `email`, `telefono`, `envio`, `pago`, `subtotal`, `precioenvio`, `total`, `idcliente`) VALUES
(354, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 130000, 600, 130600, 25),
(355, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 90000, 600, 90600, 25),
(358, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Davivienda', 320000, 600, 320600, 25),
(359, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Banco De Bogotá', 160000, 600, 160600, 25),
(360, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Interrapidisimo', 'Transferencia Electronica Bancolombia', 80000, 600, 80600, 25),
(361, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Interrapidisimo', 'Giro Por Efecty Servientrega', 80000, 600, 80600, 25),
(362, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 80000, 600, 80600, 25),
(363, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Interrapidisimo', 'Transferencia Electronica Bancolombia', 80000, 600, 80600, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosrealizados`
--

CREATE TABLE `pedidosrealizados` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cc` int(20) DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `envio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pago` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subtotal` int(10) NOT NULL,
  `precioenvio` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `idcliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidosrealizados`
--

INSERT INTO `pedidosrealizados` (`id`, `fecha`, `nombre`, `apellido`, `cc`, `direccion`, `ciudad`, `pais`, `email`, `telefono`, `envio`, `pago`, `subtotal`, `precioenvio`, `total`, `idcliente`) VALUES
(341, '2018-11-26', 'usuario uno', 'apellidos', 123456789, 'calle #1', 'Bogotá', 'Colombia', 'usuario@gamil.com', '123456789', 'Servientrega', 'Transferencia Electronica Davivienda', 360000, 600, 360600, 20),
(342, '2018-11-26', 'usuario uno', 'apellidos', 123456789, 'calle #1', 'Bogotá', 'Colombia', 'usuario@gamil.com', '123456789', 'Servientrega', 'Transferencia Electronica Davivienda', 80000, 600, 80600, 20),
(343, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Davivienda', 80000, 600, 80600, 25),
(344, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Davivienda', 80000, 600, 80600, 25),
(345, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Interrapidisimo', 'Transferencia Electronica Bancolombia', 320000, 600, 320600, 25),
(346, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Interrapidisimo', 'Giro Por Efecty Servientrega', 80000, 600, 80600, 25),
(347, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Banco De Bogotá', 80000, 600, 80600, 25),
(348, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 80000, 600, 80600, 25),
(349, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Davivienda', 80000, 600, 80600, 25),
(350, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 160000, 600, 160600, 25),
(351, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Davivienda', 80000, 600, 80600, 25),
(352, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 320000, 600, 320600, 25),
(353, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 67000, 600, 67600, 25),
(356, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 67000, 600, 67600, 25),
(357, '2018-11-26', 'Javier', 'Goitía Arcán', 123456789, 'calle # 2', 'Santiago', 'chile', 'javier@gmail.com', '123456789', 'Servientrega', 'Transferencia Electronica Bancolombia', 190000, 600, 190600, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cc` int(20) DEFAULT NULL,
  `telefono` int(12) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pedidos` int(10) DEFAULT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `cc`, `telefono`, `email`, `pais`, `ciudad`, `direccion`, `pedidos`, `clave`) VALUES
(20, 'usuario', 'usuario uno', 'apellidos', 123456789, 123456789, 'usuario@gamil.com', 'Colombia', 'Bogotá', 'calle #1', 1, '123456'),
(25, 'Javier', 'Javier', 'Goitía Arcán', 123456789, 123456789, 'javier@gmail.com', 'chile', 'Santiago', 'calle # 2', 2, '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidosrealizados`
--
ALTER TABLE `pedidosrealizados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
