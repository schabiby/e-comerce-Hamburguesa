-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 15:46:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `ID_Producto` int(11) NOT NULL,
  `Costo` float NOT NULL,
  `Descripción` varchar(120) NOT NULL,
  `RutaImagen` varchar(120) NOT NULL,
  `hasBeenSold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`ID_Producto`, `Costo`, `Descripción`, `RutaImagen`, `hasBeenSold`) VALUES
(1, 1.99, 'Hamburguesa con queso', 'images/product-6.png', 150),
(2, 3.5, 'Hamburguesa doble con queso', 'images/product-4.png', 280),
(3, 1.99, 'Hamburguesa de pollo', 'images/product-3.png', 100),
(4, 5.99, 'Cuarto de libra doble con queso', 'images/product-1.png', 140),
(5, 1.5, 'Desayuno huevo con tocino', 'images/product-2.png', 80),
(6, 2.15, 'Hamburguesa de pollo con queso', 'images/product-5.png', 115);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `Nombre` varchar(120) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contraseña` varchar(60) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Direccion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_Cliente`, `Nombre`, `Email`, `Contraseña`, `Telefono`, `Direccion`) VALUES
(2, 'Abraham Flores', 'amflores@gmail.com', 'tkd1', '7224711187', 'Av de los maistros'),
(3, 'Arely Mejia', 'aremejia@mgmail.com', 'tkd1', '1234567890', 'Por capu ajsjs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `ID_Orden` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `Total` float NOT NULL,
  `MetodoPago` char(1) NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`ID_Orden`, `ID_Cliente`, `Fecha`, `Total`, `MetodoPago`) VALUES
(1, 2, '2023-05-17 08:18:39', 11.98, 'E'),
(2, 2, '2023-05-19 20:30:28', 19.94, 'T'),
(3, 3, '2023-05-21 08:21:40', 3.98, 'T'),
(4, 2, '2023-05-22 12:50:29', 14, 'T'),
(5, 2, '2023-05-22 13:09:05', 8.6, 'T');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`ID_Producto`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`ID_Orden`),
  ADD KEY `fk_cliente` (`ID_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `ID_Orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`ID_Cliente`) REFERENCES `clientes` (`ID_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
