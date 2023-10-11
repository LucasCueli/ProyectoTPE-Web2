-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2023 a las 21:46:01
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda computacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ID_compra` int(11) NOT NULL,
  `ID_gabinete` int(11) NOT NULL,
  `ID_graficas` int(11) NOT NULL,
  `ID_procesadores` int(11) NOT NULL,
  `ID_ram` int(11) NOT NULL,
  `Valor` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gabinetes`
--

CREATE TABLE `gabinetes` (
  `ID_gabinete` int(11) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Modelo` varchar(45) NOT NULL,
  `Tamaño` varchar(45) NOT NULL,
  `Valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graficas`
--

CREATE TABLE `graficas` (
  `ID_graficas` int(11) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Modelo` varchar(45) NOT NULL,
  `Vram` varchar(45) NOT NULL,
  `Valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `graficas`
--

INSERT INTO `graficas` (`ID_graficas`, `Marca`, `Modelo`, `Vram`, `Valor`) VALUES
(10001, 'MSI', 'RTX 3080 Ventus', '10 GB', 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesadores`
--

CREATE TABLE `procesadores` (
  `ID_procesadores` int(11) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Modelo` varchar(45) NOT NULL,
  `Socket` varchar(45) NOT NULL,
  `Valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procesadores`
--

INSERT INTO `procesadores` (`ID_procesadores`, `Marca`, `Modelo`, `Socket`, `Valor`) VALUES
(10001, 'Intel', 'i7 12700', 'FCLGA1700', 360),
(10002, 'Intel', 'i5 12600', 'FCLGA1700', 250),
(10003, 'AMD', 'Ryzen 7 2700', 'am4', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rams`
--

CREATE TABLE `rams` (
  `ID_RAM` int(11) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Tamaño` varchar(45) NOT NULL,
  `Velocidad` varchar(45) NOT NULL,
  `Generacion` varchar(45) NOT NULL,
  `Valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(225) NOT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`, `username`) VALUES
(1, 'webadmin', '$2y$10$NLFFfBx0gkF3nuNLD/B1BuaTkVJ8wIr..WVphVctrv1f2R16dNSiu', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ID_compra`),
  ADD KEY `fk_compras_gabinetes` (`ID_gabinete`),
  ADD KEY `fk_compras_procesadores` (`ID_procesadores`),
  ADD KEY `fk_compras_graficas` (`ID_graficas`),
  ADD KEY `fk_compras_rams` (`ID_ram`);

--
-- Indices de la tabla `gabinetes`
--
ALTER TABLE `gabinetes`
  ADD PRIMARY KEY (`ID_gabinete`);

--
-- Indices de la tabla `graficas`
--
ALTER TABLE `graficas`
  ADD PRIMARY KEY (`ID_graficas`);

--
-- Indices de la tabla `procesadores`
--
ALTER TABLE `procesadores`
  ADD PRIMARY KEY (`ID_procesadores`);

--
-- Indices de la tabla `rams`
--
ALTER TABLE `rams`
  ADD PRIMARY KEY (`ID_RAM`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_gabinetes` FOREIGN KEY (`ID_gabinete`) REFERENCES `gabinetes` (`ID_gabinete`),
  ADD CONSTRAINT `fk_compras_graficas` FOREIGN KEY (`ID_graficas`) REFERENCES `graficas` (`ID_graficas`),
  ADD CONSTRAINT `fk_compras_procesadores` FOREIGN KEY (`ID_procesadores`) REFERENCES `procesadores` (`ID_procesadores`),
  ADD CONSTRAINT `fk_compras_rams` FOREIGN KEY (`ID_ram`) REFERENCES `rams` (`ID_RAM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
