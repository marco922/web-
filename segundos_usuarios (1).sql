-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2023 a las 08:04:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `segundos_usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idarticulo` int(11) NOT NULL,
  `Seccion` varchar(20) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Titulo` varchar(500) NOT NULL,
  `Contenido` varchar(500) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idarticulo`, `Seccion`, `Autor`, `Titulo`, `Contenido`, `Fecha`) VALUES
(22, '1', 'Sara Gomez ', 'Nuevo intento de Articulo', 'La intención es demostrar que puede almacenar la fecha', '2023-11-22'),
(23, '3', 'Julian Pinzon', 'Prueba 2', 'se supone que debe funcionar bien el buscar', '2023-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_usuarios`
--

CREATE TABLE `cargo_usuarios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo_usuarios`
--

INSERT INTO `cargo_usuarios` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Lector'),
(3, 'Editor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `articulo_id` int(11) DEFAULT NULL,
  `autor` varchar(255) NOT NULL,
  `contenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `articulo_id`, `autor`, `contenido`) VALUES
(2, 22, 'Sara Gomez ', 'OHH que genial'),
(3, 22, 'Sara Gomez ', 'FANTASTICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuraios`
--

CREATE TABLE `usuraios` (
  `IDusuarios` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contra` varchar(20) NOT NULL,
  `Cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuraios`
--

INSERT INTO `usuraios` (`IDusuarios`, `Nombre`, `Correo`, `Contra`, `Cargo`) VALUES
(1, 'Santiago Camargo', 'santiagocg2908@gmail.com', 'hola123', 1),
(2, 'Sara Gomez', 'hazzaxd@gmail.com', '12345', 3),
(3, 'Gian Marco Cortes', 'gianmc@gmail.com', 'jurado123', 2),
(4, 'Julian Pinzon', 'julianwuapo@gmail.com', '12345', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idarticulo`);

--
-- Indices de la tabla `cargo_usuarios`
--
ALTER TABLE `cargo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulo_id` (`articulo_id`);

--
-- Indices de la tabla `usuraios`
--
ALTER TABLE `usuraios`
  ADD PRIMARY KEY (`IDusuarios`),
  ADD KEY `Cargo` (`Cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `cargo_usuarios`
--
ALTER TABLE `cargo_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuraios`
--
ALTER TABLE `usuraios`
  MODIFY `IDusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`idarticulo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
