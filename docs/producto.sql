-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 06:00:11
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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha_crea` datetime NOT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `fecha_crea`, `fecha_mod`, `fecha_elim`, `estado`) VALUES
(1, 'auriculares', 'ninguna', '2022-10-24 16:58:14', NULL, '2022-10-24 22:47:41', 0),
(2, 'celular', 'Xiami', '2022-10-24 23:58:50', '2022-10-24 22:59:50', '2022-10-24 22:46:06', 1),
(3, 'televisor', 'ninguna', '2022-10-24 21:43:58', NULL, '2022-10-24 22:47:06', 0),
(4, 'computador1', 'dsadsad', '2022-10-24 21:49:39', '2022-10-24 22:58:11', '2022-10-24 22:58:15', 0),
(5, 'pc3', 'ninguna', '2022-10-24 21:51:13', '2022-10-24 22:48:26', '2022-10-24 22:48:33', 0),
(6, 'laptop', 'ninguna', '2022-10-24 22:05:53', '2022-10-24 22:36:30', '2022-10-24 22:59:35', 0),
(7, 'Lapiz', 'ninguna', '2022-10-24 22:08:28', NULL, '2022-10-24 22:59:31', 0),
(8, 'switch', 'ninguna', '2022-10-24 22:30:25', '2022-10-24 22:33:05', '2022-10-24 22:48:13', 0),
(9, 'smart TV', 'ninguna', '2022-10-24 22:36:37', '2022-10-24 22:36:50', '2022-10-24 22:47:47', 0),
(10, '88', 'ninguna', '2022-10-24 22:36:57', NULL, '2022-10-24 22:47:38', 0),
(11, 'test', 'zzzz', '2022-10-24 22:58:00', NULL, '2022-10-24 22:58:24', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
