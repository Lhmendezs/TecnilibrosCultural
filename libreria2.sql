-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2024 a las 02:43:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nombre_autor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre_autor`) VALUES
(1, 'Gabriel García Márquez'),
(2, 'Mario Vargas Llosa'),
(3, 'Isabel Allende'),
(4, 'Jorge Luis Borges'),
(5, 'Julio Cortázar'),
(6, 'Carlos Ruiz Zafón'),
(7, 'Laura Restrepo'),
(8, 'Juan Gabriel Vásquez'),
(9, 'Piedad Bonnett'),
(10, 'Héctor Abad Faciolince'),
(11, 'James Rodriguez'),
(12, 'James Rodriguez'),
(13, 'Botero'),
(14, 'Botero'),
(15, 'Santos'),
(16, 'Andrea Pirlo'),
(17, 'Juan Mecanico'),
(18, 'Duque'),
(19, 'Andres Carne de Res'),
(20, 'Linus Torvalds'),
(21, 'Luis Diaz'),
(22, 'Alejandro Dumas'),
(23, ' Auguste Maquet'),
(24, 'J. B. Fellens '),
(25, 'EL pibe'),
(26, 'Akira Toriyama'),
(27, 'pepito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Ficción'),
(2, 'No ficción'),
(3, 'Romance'),
(4, 'Misterio'),
(5, 'Ciencia ficción'),
(6, 'Fantasía'),
(7, 'Autoayuda'),
(8, 'Cocina'),
(9, 'Viajes'),
(10, 'Arte'),
(11, 'Deportes'),
(12, 'Tecnología'),
(13, 'Hogar y Jardín'),
(14, 'Moda'),
(15, 'Deportes'),
(16, 'Belleza'),
(17, 'Salud y Bienestar'),
(18, 'Libros'),
(19, 'Música'),
(20, 'Películas y TV'),
(21, 'Juguetes'),
(22, 'Papelería'),
(23, 'Alimentación'),
(24, 'Bebidas'),
(25, 'Mascotas'),
(26, 'Viajes'),
(27, 'Coches'),
(28, 'Coleccionismo'),
(29, 'Manualidades'),
(30, 'Hogar'),
(31, 'Oficina'),
(32, 'infantil'),
(34, 'Japones'),
(36, 'anime'),
(38, 'futbol'),
(40, 'Ingeniería de Sistemas'),
(41, 'hornos'),
(43, 'Mascotas'),
(44, 'Veterinaria'),
(45, 'Medicina'),
(46, 'Musica Electronica'),
(47, 'Mecanica'),
(48, 'Politica'),
(49, 'Construccion'),
(50, 'Matematica Aplicada'),
(51, 'informatica'),
(52, 'Ficción Histórica'),
(53, 'FIFA'),
(54, 'camaras'),
(55, 'pruebacat');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `id_titulo` int(11) NOT NULL,
  `cantidad_disponible` int(11) NOT NULL,
  `num_edicion` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `ISBN` int(13) NOT NULL,
  `librero` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `id_titulo`, `cantidad_disponible`, `num_edicion`, `precio`, `ISBN`, `librero`) VALUES
(1, 1, 1, 1, 19900, 12134156, '1'),
(2, 2, 1, 2, 35000, 121341562, 'b'),
(3, 3, 3, 12, 15000, 123, '2b'),
(4, 2, 1, 1, 30000, 1234, '1'),
(5, 2, 1, 2, 3000, 123456, '1'),
(6, 1, 3, 4, 5, 6, '7'),
(7, 4, 2, 12, 1000, 1234, '123'),
(8, 16, 1, 2, 50000, 125231, '12c'),
(9, 17, 1, 2, 123000, 1254, '12a'),
(10, 13, 1, 12, 1, 123545, '12'),
(11, 11, 12, 12, 12000, 678, '13a'),
(12, 12, 12, 1, 58000, 245555, '124'),
(13, 19, 200, 1, 52000, 57890, '14'),
(14, 1, 2, 3, 435, 1235, '12353'),
(15, 20, 1, 1, 220000, 9866256, '1'),
(16, 21, 5, 12, 5000, 124566, '124as'),
(17, 22, 1, 1, 12432, 1235, '12'),
(18, 23, 1, 1, 2000, 11343, '123a'),
(19, 1, 2, 3, 12345, 123465, '25a'),
(20, 1, 23, 2, 234555, 11111, '123aa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_autor`
--

CREATE TABLE `libro_autor` (
  `id_libro_autor` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro_autor`
--

INSERT INTO `libro_autor` (`id_libro_autor`, `id_libro`, `id_autor`) VALUES
(1, 1, 1),
(2, 4, 2),
(3, 5, 3),
(4, 5, 6),
(5, 6, 5),
(6, 7, 3),
(7, 8, 20),
(8, 9, 20),
(9, 10, 20),
(14, 13, 11),
(15, 13, 21),
(16, 13, 21),
(17, 14, 2),
(18, 14, 2),
(19, 15, 22),
(20, 15, 23),
(21, 15, 24),
(22, 15, 24),
(23, 1, 1),
(24, 1, 1),
(31, 3, 17),
(32, 3, 7),
(33, 3, 7),
(34, 11, 3),
(35, 11, 13),
(36, 11, 13),
(37, 12, 11),
(38, 12, 16),
(39, 12, 18),
(40, 12, 18),
(64, 16, 11),
(65, 16, 16),
(66, 16, 16),
(67, 17, 11),
(68, 17, 16),
(69, 17, 21),
(70, 17, 21),
(71, 18, 26),
(72, 18, 26),
(73, 2, 5),
(74, 2, 6),
(75, 2, 6),
(76, 19, 1),
(77, 19, 13),
(78, 19, 13),
(79, 20, 1),
(80, 20, 11),
(81, 20, 27),
(82, 20, 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_categoria`
--

CREATE TABLE `libro_categoria` (
  `id_libro_categoria` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro_categoria`
--

INSERT INTO `libro_categoria` (`id_libro_categoria`, `id_libro`, `id_categoria`) VALUES
(7, 4, 10),
(8, 4, 8),
(9, 5, 1),
(10, 5, 10),
(11, 5, 6),
(12, 6, 8),
(13, 7, 6),
(14, 8, 51),
(15, 9, 51),
(16, 10, 51),
(19, 13, 15),
(20, 13, 38),
(21, 13, 38),
(22, 14, 1),
(23, 14, 1),
(24, 15, 52),
(25, 15, 52),
(26, 1, 3),
(27, 1, 4),
(28, 1, 4),
(35, 3, 4),
(36, 3, 7),
(37, 3, 7),
(38, 11, 17),
(39, 11, 4),
(40, 11, 4),
(41, 12, 38),
(42, 12, 38),
(66, 16, 11),
(67, 16, 17),
(68, 16, 17),
(69, 17, 11),
(70, 17, 38),
(71, 17, 53),
(72, 17, 53),
(73, 18, 1),
(74, 18, 5),
(75, 18, 6),
(76, 18, 6),
(77, 2, 1),
(78, 2, 10),
(79, 2, 10),
(80, 19, 1),
(81, 19, 3),
(82, 19, 54),
(83, 19, 54),
(84, 20, 13),
(85, 20, 3),
(86, 20, 55),
(87, 20, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `direccion_proveedor` varchar(50) NOT NULL,
  `correo_proveedor` varchar(255) NOT NULL,
  `telefono_proveedor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_proveedor`, `direccion_proveedor`, `correo_proveedor`, `telefono_proveedor`) VALUES
(1, 'John Doe Company edita', '123 Main Street', 'john.doe@example.com', '123-456-7890'),
(2, 'Smith & Sons Supplies', '456 Elm Avenue', 'smith.sons@example.com', '234-567-8901'),
(3, 'Johnson Enterprises', '789 Oak Lane', 'johnson@example.com', '345-678-9012'),
(4, 'Miller Manufacturing', '321 Maple Drive', 'miller@example.com', '456-789-0123'),
(5, 'Wilson Wholesale', '654 Pine Road', 'wilson@example.com', '567-890-1234'),
(6, 'Brown Brothers Co.', '987 Cedar Street', 'brown@example.com', '678-901-2345'),
(7, 'Davis Distribution', '246 Birch Boulevard', 'davis@example.com', '789-012-3456'),
(8, 'Garcia Group', '135 Cherry Lane', 'garcia@example.com', '890-123-4567'),
(9, 'Martinez Merchants', '864 Apple Court', 'martinez@example.com', '901-234-5678'),
(10, 'Lopez Logistics', '579 Peach Avenue', 'lopez@example.com', '012-345-6789'),
(11, 'Lee Enterprises', '798 Lemon Street', 'lee@example.com', '210-987-6543'),
(12, 'Gonzalez Goods', '357 Lime Lane', 'gonzalez@example.com', '321-876-5432'),
(13, 'Andres Carne de Res', 'bogotaaaa', 'adf@andres.com', '7895462'),
(14, 'John Doe Company', 'calle 13 residente', 'adfasdfr34ee@jmdkslajf.cs', '344425'),
(17, 'yin yan', 'poh 12 calle 56', 'adfasdfr34ee@jmdkslajf.cs', '13245555'),
(20, 'camilo', 'simon y juan 13', 'asdfasdf@o.com', '12345'),
(22, 'Post Malone', 'Calle 12 n  1 Tunja', 'postMalone@gmail.com', '34434666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo_libro`
--

CREATE TABLE `titulo_libro` (
  `id_titulo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `titulo_libro`
--

INSERT INTO `titulo_libro` (`id_titulo`, `nombre`) VALUES
(9, '1984'),
(21, 'c++'),
(19, 'Campeones de América y del Mundo'),
(1, 'Cien años de soledad'),
(16, 'Cobol'),
(22, 'Copa America'),
(6, 'Crimen y castigo'),
(5, 'Don Quijote de la Mancha'),
(23, 'Dragon Ball'),
(8, 'El alquimista'),
(2, 'El principito'),
(3, 'El señor de los anillos'),
(10, 'Fahrenheit 451'),
(4, 'Harry Potter y la piedra filosofal'),
(11, 'Ingenieria de Software Orientada a Objetos'),
(13, 'Instructivo de como reparar maquinas de coser'),
(12, 'La Biblia'),
(7, 'La casa de los espíritus'),
(24, 'linux 2'),
(18, 'Los mejores 10\'s'),
(20, 'Los tres mosqueteros'),
(17, 'Metodos numericos para ingenieros'),
(25, 'motorola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(3) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `telefono_usuario` varchar(18) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `rol`, `telefono_usuario`, `email_usuario`, `password`) VALUES
(1, 'Luis', 'Administrador', '456123', 'luis@gmail.com', '123'),
(2, 'Camilo', 'Administrador', '', 'camilo@gmail.com', '123'),
(3, 'es', 'Administrador', '', 'e@e.com', '123'),
(10, 'Andrea', 'Administrador', '', 'andre@gmail.com', '123'),
(11, 'sk', 'Administrador', '', 'sk@dogo.com', '123'),
(13, 'gin', 'Administrador', '', 'gin@gmail.com', '123'),
(14, '1', 'Empleado', '', '1@.com', '123'),
(15, 'invento1', 'Administrador', '', 'inv@hot.com', '123'),
(16, 'oli', 'Administrador', '', 'oliq@s.com', '123'),
(17, 'Luis Mendez', 'Administrador', '', 'luis789@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `titulo` (`id_titulo`);

--
-- Indices de la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  ADD PRIMARY KEY (`id_libro_autor`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_autor` (`id_autor`);

--
-- Indices de la tabla `libro_categoria`
--
ALTER TABLE `libro_categoria`
  ADD PRIMARY KEY (`id_libro_categoria`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `titulo_libro`
--
ALTER TABLE `titulo_libro`
  ADD PRIMARY KEY (`id_titulo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_usuario` (`email_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  MODIFY `id_libro_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `libro_categoria`
--
ALTER TABLE `libro_categoria`
  MODIFY `id_libro_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `titulo_libro`
--
ALTER TABLE `titulo_libro`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_titulo`) REFERENCES `titulo_libro` (`id_titulo`);

--
-- Filtros para la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  ADD CONSTRAINT `libro_autor_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `libro_autor_ibfk_2` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`);

--
-- Filtros para la tabla `libro_categoria`
--
ALTER TABLE `libro_categoria`
  ADD CONSTRAINT `libro_categoria_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `libro_categoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
