-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-08-2022 a las 17:23:09
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_cp`
--

CREATE TABLE `articulos_cp` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos_cp`
--

INSERT INTO `articulos_cp` (`id`, `titulo`, `precio`, `cantidad`, `ref`, `descripcion`) VALUES
(1, 'asdasd', 33, 33, 'asdasd', 'ssds fesesf'),
(2, 'ssds fesesf', 43, 55, 'ssds fesesf', 'ssds fesesf'),
(3, 'ssds fesesf', 44, 44, 'ssds fesesf', 'ssds fesesf'),
(4, 'asdasas', 4, 44, 'sadas', 'asdasd'),
(5, 'asdasd', 33, 33, 'asdasd', 'ssds fesesfwadaw'),
(6, 'ssds fesesfaddadw', 43, 55, 'ssds fesesf', 'ssds fesesf'),
(7, 'asdasdadwawa', 33, 33, 'asdasd', 'ssds fesesf'),
(8, 'ssds fesesfaddadwfae', 43, 55, 'ssds fesesf', 'ssds fesesf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoproducts`
--

CREATE TABLE `fotoproducts` (
  `id` int(10) NOT NULL,
  `products_id` int(10) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotoproducts`
--

INSERT INTO `fotoproducts` (`id`, `products_id`, `foto1`, `foto2`, `foto3`) VALUES
(10, 9, 'fotosProductos/1/1.jpg', 'fotosProductos/1/2.jpg', 'fotosProductos/1/3.jpg'),
(11, 10, 'fotosProductos/2/1.jpg', 'fotosProductos/2/2.png', 'fotosProductos/2/3.png'),
(12, 11, 'fotosProductos/3/1.jpg', 'fotosProductos/3/2.png', 'fotosProductos/3/3.jpeg'),
(13, 12, 'fotosProductos/4/1.jpg', 'fotosProductos/4/2.png', 'fotosProductos/4/3.jpg'),
(14, 13, 'fotosProductos/5/1.jpg', 'fotosProductos/5/2.png', 'fotosProductos/5/3.jpg'),
(15, 14, 'fotosProductos/6/1.jpg', 'fotosProductos/6/2.jpg', 'fotosProductos/6/3.png'),
(17, 16, 'fotosProductos/7/1.jpg', 'fotosProductos/7/2.jpg', 'fotosProductos/7/3.jpg'),
(18, 17, 'fotosProductos/8/1.jpg', 'fotosProductos/8/2.jpg', 'fotosProductos/8/3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidostemporales`
--

CREATE TABLE `pedidostemporales` (
  `id` int(11) NOT NULL,
  `producto_id` int(10) DEFAULT NULL,
  `cantidad` int(20) DEFAULT NULL,
  `nuevoPrecioTotal` int(50) DEFAULT NULL,
  `tokenCliente` varchar(100) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `hours` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidostemporales`
--

INSERT INTO `pedidostemporales` (`id`, `producto_id`, `cantidad`, `nuevoPrecioTotal`, `tokenCliente`, `fecha`, `hours`) VALUES
(73, 10, 1, 340, 'jz2HTiatmm7wqJRr6w7gTcvQAFytUt', '07/08/2022', '06:01:40 pm'),
(74, 11, 2, 140, 'jz2HTiatmm7wqJRr6w7gTcvQAFytUt', '07/08/2022', '06:04:16 pm'),
(75, 16, 1, 85, 'jz2HTiatmm7wqJRr6w7gTcvQAFytUt', '07/08/2022', '06:10:16 pm'),
(76, 17, 1, 340, 'jz2HTiatmm7wqJRr6w7gTcvQAFytUt', '07/08/2022', '06:10:18 pm'),
(77, 12, 1, 140, 'jz2HTiatmm7wqJRr6w7gTcvQAFytUt', '07/08/2022', '06:17:37 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `nameProd` varchar(250) DEFAULT NULL,
  `precio` varchar(250) DEFAULT NULL,
  `cantidadDisponible` varchar(250) DEFAULT NULL,
  `descrip_Prod` text DEFAULT NULL,
  `fechaRegistro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nameProd`, `precio`, `cantidadDisponible`, `descrip_Prod`, `fechaRegistro`) VALUES
(9, 'Donka', '250', '10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-05'),
(10, 'Alimento nutricional', '340', '34', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\"\"\"', '2021-08-05'),
(11, 'Pedigree', '70', '82', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-05'),
(12, 'Chunky', '140', '14', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-05'),
(13, 'Purina Cat', '50', '63', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-05'),
(14, 'Felix', '25', '18', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-05'),
(16, 'Ringo', '85', '12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-06'),
(17, 'Gatsy', '340', '34', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-08-06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos_cp`
--
ALTER TABLE `articulos_cp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotoproducts`
--
ALTER TABLE `fotoproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidostemporales`
--
ALTER TABLE `pedidostemporales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos_cp`
--
ALTER TABLE `articulos_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `fotoproducts`
--
ALTER TABLE `fotoproducts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pedidostemporales`
--
ALTER TABLE `pedidostemporales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
