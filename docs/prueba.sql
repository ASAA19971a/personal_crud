-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 07:52:23
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `cat_nombre` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `cat_nombre`, `estado`) VALUES
(1, 'electronica', 1),
(2, 'lacteos', 1),
(3, 'papeleria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombre`, `email`, `celular`) VALUES
(1, 'Abel Acosta', 'molr@mole.com', 984906571),
(2, 'dasd', 'ads@asd', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_crea` datetime NOT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `cat_id`, `nombre`, `descripcion`, `cantidad`, `fecha_crea`, `fecha_mod`, `fecha_elim`, `estado`) VALUES
(1, 3, 'auriculares', 'casio 2d', 25, '2022-10-24 16:58:14', '2022-10-25 00:46:23', '2022-10-24 22:47:41', 1),
(2, 3, 'celular', 'Xiami', 1, '2022-10-24 23:58:50', '2022-10-24 23:56:32', '2022-10-24 22:46:06', 1),
(3, 1, 'televisor', 'ninguna', 1, '2022-10-24 21:43:58', NULL, '2022-10-24 22:47:06', 1),
(4, 1, 'computador', 'dsadsad', 1, '2022-10-24 21:49:39', '2022-10-25 00:49:11', '2022-10-24 22:58:15', 1),
(5, 1, 'pc3', 'ninguna', 1, '2022-10-24 21:51:13', '2022-10-24 22:48:26', '2022-10-25 00:49:04', 0),
(6, 1, 'laptop', 'ninguna', 1, '2022-10-24 22:05:53', '2022-10-24 22:36:30', '2022-10-24 22:59:35', 1),
(7, 1, 'Lapiz', 'ninguna', 1, '2022-10-24 22:08:28', NULL, '2022-10-24 22:59:31', 1),
(8, 1, 'switch', 'ninguna', 1, '2022-10-24 22:30:25', '2022-10-24 22:33:05', '2022-10-24 22:48:13', 1),
(9, 1, 'smart TV', 'ninguna', 1, '2022-10-24 22:36:37', '2022-10-24 22:36:50', '2022-10-24 22:47:47', 1),
(10, 1, '88', 'ninguna', 1, '2022-10-24 22:36:57', NULL, '2022-10-25 00:48:51', 0),
(11, 1, 'test', 'zzzz', 1, '2022-10-24 22:58:00', NULL, '2022-10-25 00:49:00', 0),
(12, 2, 'ww2', 'www2', 1, '2022-10-24 23:55:54', '2022-10-25 00:37:18', '2022-10-25 00:48:54', 0),
(13, 2, 'sdfds', 'sdfsdfds', 34, '2022-10-25 00:46:52', NULL, '2022-10-25 00:48:39', 0),
(14, 3, 'dsaasdsad1', 'asdsadsadas1', 2312, '2022-10-25 00:48:16', '2022-10-25 00:48:29', '2022-10-25 00:48:34', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
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
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
