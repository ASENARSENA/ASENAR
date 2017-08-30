-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2017 a las 16:10:10
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbasenar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `CatNombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `CatNombre`) VALUES
(3, 'PRINCIPIO'),
(6, 'PROTEINA'),
(7, 'ACOMPAÑANTE'),
(8, 'BEBIDA'),
(10, 'POSTRES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `idDetalleMenu` int(11) NOT NULL,
  `idMenuPedido` int(11) DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `jornada` enum('DESAYUNO','ALMUERZO','CENA') COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menupedido`
--

CREATE TABLE `menupedido` (
  `idMenuPedido` int(11) NOT NULL,
  `idProductos` int(11) DEFAULT NULL,
  `idMenu` int(11) DEFAULT NULL,
  `cantidad` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `precioTotal` int(5) DEFAULT NULL,
  `detalle` char(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idPersona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `fecha`, `precioTotal`, `detalle`, `idPersona`) VALUES
(0, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idPersona` int(11) NOT NULL,
  `PerNombres` varchar(30) NOT NULL,
  `PerApellidos` varchar(40) NOT NULL,
  `PerIdentificacion` int(11) NOT NULL,
  `PerEmail` varchar(60) NOT NULL,
  `PerDireccion` varchar(120) NOT NULL,
  `PerTelefono` int(11) NOT NULL,
  `PerContrasena` varchar(100) NOT NULL,
  `PerTipoUsuario` int(11) NOT NULL,
  `PerFoto` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPersona`, `PerNombres`, `PerApellidos`, `PerIdentificacion`, `PerEmail`, `PerDireccion`, `PerTelefono`, `PerContrasena`, `PerTipoUsuario`, `PerFoto`) VALUES
(1, 'PEPITO', 'PEREZ', 112233444, 'PEPITO@misena.edu.co', 'cafeteria', 333333333, 'admin', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `ProdNombre` varchar(50) NOT NULL,
  `ProdImagen` varchar(500) NOT NULL,
  `ProdCategoria` int(11) NOT NULL,
  `ProdDescripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `ProdNombre`, `ProdImagen`, `ProdCategoria`, `ProdDescripcion`) VALUES
(50, 'das', '4174bbbdd0719e862fdc30bf2ee03f9d.jpg', 3, 'dfs'),
(52, 'sdf', '89469e392203571dc513e1bb24263289.jpg', 10, 'sdfd'),
(53, 'dfghjklñ', 'fee35735999010054a78527a87647fb0.jpg', 3, 'dfghjklñ{}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarios`
--

CREATE TABLE `tipousuarios` (
  `idTipoUsuario` int(11) NOT NULL,
  `TipUsuRol` enum('ADMINISTRADOR','USUARIO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuarios`
--

INSERT INTO `tipousuarios` (`idTipoUsuario`, `TipUsuRol`) VALUES
(1, 'ADMINISTRADOR'),
(2, ''),
(3, ''),
(4, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`idDetalleMenu`),
  ADD KEY `idMenuPedido` (`idMenuPedido`),
  ADD KEY `idPedido` (`idPedido`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indices de la tabla `menupedido`
--
ALTER TABLE `menupedido`
  ADD PRIMARY KEY (`idMenuPedido`),
  ADD KEY `idProductos` (`idProductos`),
  ADD KEY `idMenu` (`idMenu`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idPersona` (`idPersona`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `PerTipoUsuario` (`PerTipoUsuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`),
  ADD KEY `ProdCategoria` (`ProdCategoria`);

--
-- Indices de la tabla `tipousuarios`
--
ALTER TABLE `tipousuarios`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `idDetalleMenu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `menupedido`
--
ALTER TABLE `menupedido`
  MODIFY `idMenuPedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `tipousuarios`
--
ALTER TABLE `tipousuarios`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`idMenuPedido`) REFERENCES `menupedido` (`idMenuPedido`),
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`);

--
-- Filtros para la tabla `menupedido`
--
ALTER TABLE `menupedido`
  ADD CONSTRAINT `menupedido_ibfk_1` FOREIGN KEY (`idProductos`) REFERENCES `productos` (`idProductos`),
  ADD CONSTRAINT `menupedido_ibfk_2` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`idMenu`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `personas` (`idPersona`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`PerTipoUsuario`) REFERENCES `tipousuarios` (`idTipoUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ProdCategoria`) REFERENCES `categorias` (`idCategoria`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
