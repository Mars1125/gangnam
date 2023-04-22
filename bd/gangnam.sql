-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2023 a las 21:17:27
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
-- Base de datos: `gangnam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idCarrito` int(1) NOT NULL,
  `idCliente` int(3) NOT NULL,
  `idProducto` int(3) NOT NULL,
  `cantidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`idCarrito`, `idCliente`, `idProducto`, `cantidad`) VALUES
(1, 2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apPaterno` varchar(20) NOT NULL,
  `apMaterno` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `id_rol` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apPaterno`, `apMaterno`, `fechaNacimiento`, `correo`, `contraseña`, `telefono`, `id_rol`) VALUES
(1, 'daniel', 'villanueva ', 'juarez', '1998-04-24', 'daniel@gmail.com', '654321', '5511223344', 0),
(2, 'marina', 'sanchez', 'campos', '2000-12-12', 'mar@gmail.com', '123456', '5512121212', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `idDetalleOrden` int(3) NOT NULL,
  `idOrden` int(3) NOT NULL,
  `idProducto` int(3) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `idDomicilio` int(3) NOT NULL,
  `idCliente` int(3) NOT NULL,
  `calle` varchar(20) NOT NULL,
  `numero` int(4) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `idOrden` int(3) NOT NULL,
  `idCliente` int(3) NOT NULL,
  `idMetodoPago` int(3) NOT NULL,
  `total` float NOT NULL,
  `idDomicilio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`idOrden`, `idCliente`, `idMetodoPago`, `total`, `idDomicilio`) VALUES
(1, 2, 1, 99.85, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(3) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `cantidadProducto` int(5) NOT NULL,
  `precio` float NOT NULL,
  `cantidadAlm` int(7) NOT NULL,
  `calificacion` int(1) NOT NULL,
  `imagen` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombre`, `marca`, `descripcion`, `presentacion`, `cantidadProducto`, `precio`, `cantidadAlm`, `calificacion`, `imagen`) VALUES
(1, 'Curl Fix Mascara', 'Vegan', '', 'solido', 2, 50, 10, 5, 'prod1'),
(2, 'BT21 Makeup Duo', 'BT21', 'Paleta Duo BT21', 'solido', 2, 600, 30, 4, 'prod2'),
(3, 'Barrier Intensive Cream', 'Soon Jung', 'Moisturizing cream to strengthen skin resistance with protein barrier.', 'solido', 60, 400, 25, 4, 'prod3'),
(4, 'Dr.Mascara Fixer', 'ETUDE', 'Mascara Fixer that keeps eyelashes curling with a powerful coating.\r\n', 'solido', 6, 100, 40, 4, 'prod4'),
(5, 'Contour Powder', 'ETUDE', 'A contour palette to effortlessly define the face like a selfie.\r\n', 'solido', 5, 200, 30, 4, 'prod5'),
(6, 'Play Color Eyes', 'Nudifull', 'Color Eye Palette in nudie mute tone provides the mood of espresso bar and color in natural shade.', 'solido', 10, 800, 15, 4, 'prod6'),
(7, 'Play Tone Eye Palette', 'KAZUHA', 'Color Eye Palette in diferent tone', 'solid', 10, 700, 10, 5, 'prod7'),
(8, 'Dear Darling Water Tint', 'ETUDE', 'A moist-fruity water tint with the feeling of refreshing fruits bursting\r\n', 'liquido', 9, 80, 20, 4, 'prod8'),
(9, 'Glass Rouge Tint', 'ETUDE', 'A glossy lip tint that glides across the lips leaving a lustrous glassy glow\r\n', 'liquido', 3, 60, 25, 5, 'prod9'),
(10, 'Dear Darling Water Gel Tint_Ice cream', 'ETUDE', 'Dear Darling Water Gel Tint_Ice cream #RD306', 'liquido', 5, 50, 60, 4, 'prod10'),
(11, 'SoonJung 10 Free Moist Emulsion ', 'Soon Jung', 'Low-irritant moisturizing, relaxing emulsion delivers moisture fast to skin.\r\n', 'liquido', 130, 350, 20, 4, 'prod11'),
(12, 'My Lash Serum (Jumbo) ', 'ETUDE', 'Easy and comfortable daily eyelash serum with biotin.\r\n', 'liquido', 18, 120, 10, 4, 'prod12'),
(13, 'Double Lasting Vegan Cover Foundation', 'Vegan', '24 HR long lasting foundation with vegan ingredients\r\n', 'liquido', 150, 200, 10, 5, 'prod13'),
(14, 'Panthensoside Cica Balm', 'Soon Jung', 'Cica Balm for the improvement of damaged skin with 5% Pantenocide.', 'liquido', 20, 250, 15, 4, 'prod14'),
(15, 'Moistfull Collagen Sheet Mask', 'Moistfull', 'This Moistfull Sheet Mask with Super CollagenTM water(HYDROLYZED COLLAGEN) firmly wraps skin and keeps skin deeply moisturized\r\n', 'liquido', 25, 50, 50, 5, 'prod15'),
(16, 'Moistfull Collagen Intense Sheet Mask', 'Moistfull', 'Inner moisture mask made of thin soft micro fiber sheet containing small molecular Super Collagen™ water and peptide provides abundant moisture and nourishment through close adherence to skin.', 'liquido', 25, 50, 50, 5, 'prod16'),
(17, 'Glow On Base Hydra', 'ETUDE', 'The moisture-glow base make skin look brightens with the natural glowing eﬀect, and feel moisturizing.\r\n', 'liquido', 30, 300, 20, 4, 'prod17'),
(18, 'CAREddict All-in-One Base', 'ETUDE', 'Multi-function all-in-one makeup base that can soothe your skin.\r\n', 'liquido', 30, 200, 10, 5, 'prod18'),
(19, 'Sebum Soak Duo (Pore Primer+Powder)', 'ETUDE', 'Sebum Soak Pore Primer + Powder. Lock your skin with the sebum soak and don\'t let the oil come out!', 'liquido', 30, 200, 10, 4, 'prod19'),
(20, 'Sebum Soak Pore Primer', 'ETUDE', 'A pore primer that applies easily and smoothly and absorbs excess sebum\r\n', 'liquido', 30, 250, 7, 4, 'prod20'),
(21, 'Heart Cookie Blusher', 'ETUDE', 'A pure pigment blush that gives your cheeks a lovely pop of color\r\n', 'solido', 3, 100, 10, 4, 'prod21'),
(22, 'Lovely Cookie Blusher', 'ETUDE', 'A soft powder blush that colors your cheeks with lovely shades\r\n', 'solid', 5, 75, 15, 4, 'prod22'),
(23, 'Healthy Tone Up Calamine Cushion', 'ETUDE', 'Natural Tone Up Glow with Calamine that soothes the skin without white cast.\r\n', 'solido', 15, 150, 15, 4, 'prod23'),
(24, 'Double Lasting Cushion Matte', 'ETUDE', 'A matte cushion that lightly covers your face and creates clean, soft skin.\r\n', 'solid', 15, 150, 15, 4, 'prod24'),
(25, 'Contour Powder Brush 3pcs', 'ETUDE', 'Contour brush 3pcs set with synthetic fibers designed for perfect contour.\r\n', 'solido', 3, 170, 5, 4, 'prod25'),
(26, 'Contour Powder Brush', 'ETUDE', 'A contour brush with synthetic fibers designed for perfect contour.\r\n', 'solid', 1, 80, 6, 4, 'prod26'),
(27, 'My Beauty Tool Body Brush', 'ETUDE', 'Fresh body cleansing with a cool body brush!\r\n', 'solid', 1, 150, 8, 5, 'prod27'),
(28, 'My Beauty Tool Jellyfish Silicone Brush', 'ETUDE', 'For exfoliating, massage and cleansing! A silicone brush to help gently and deeply cleanse pores with a fine, thick textured lather\r\n', 'solido', 1, 80, 10, 4, 'prod28'),
(29, 'My Beauty Tool Brush 140 Powder', 'ETUDE', 'Uniquely shaped Powder Brush that evenly applies powders and mineral foundation for smooth, high definition results', 'solid', 1, 100, 8, 4, 'prod29'),
(30, 'My Beauty Tool Cotton Swabs (800ea)', 'ETUDE', 'Cleanse softly with the cotton swabs\r\n\r\n', 'solido', 1, 40, 5, 4, 'prod30'),
(31, 'My Beauty Tool Eyebrow Razor', 'ETUDE', 'Eyebrow Razor for shaving and styling the eyebrows.\r\n', 'solid', 1, 50, 10, 4, 'prod31'),
(32, 'Lash Perm Curl Fix Curler', 'ETUDE', 'Lash Firm Curl Fix It\'s a fantasy that maximizes the curling power of mascara!\r\n', 'solid', 1, 80, 50, 4, 'prod32'),
(33, 'Moistfull Collagen Intense Serum ', 'ETUDE', 'Super Collagen™ Water 51% Intense Glow Care Serum\r\n', 'liquido', 50, 400, 5, 5, 'prod33'),
(34, 'Real Propolis Ampoule', 'ETUDE', 'Contains 80% Propolis Extract\r\nThe elasticity ampoule strengthens the skin barrier function.', 'liquido', 50, 300, 3, 4, 'prod34'),
(35, 'Real Art Cleansing Oil Moisture ', 'ETUDE', 'This is a moist type cleansing oil effective for removing dead skin cells and cleansing away makeup residue.\r\n', 'liquido', 185, 400, 10, 4, 'prod35'),
(36, 'Real Art Cleansing Oil Moisture(Refill)', 'ETUDE', 'This is a moist type cleansing oil effective for removing dead skin cells and cleansing away makeup residue.', 'liquido', 185, 380, 2, 4, 'prod36'),
(37, 'Real Art Cleansing Oil Perfect ', 'ETUDE', 'This is a highly effective cleansing oil for removing dead skin cells and cleansing away any last trace of makeup residue.', 'liquido', 185, 400, 5, 4, 'prod37'),
(38, 'PPOYAN Cleansing Foam ', 'ETUDE', 'Moist and resilient micro-bubble cleansing foam without skin tightness.\r\n', 'liquido', 150, 200, 8, 4, 'prod38'),
(39, 'PPOYAN pH Balancing Bubble Cleanser ', 'ETUDE', 'Soft pH balanced bubble cleanser that moisturizes and soothes the skin.\r\n', 'liquido', 150, 250, 8, 4, 'prod39'),
(40, 'Moistfull Collagen Intense Cleansing Foam ', 'ETUDE', 'Moisturizing and nourishing cleansing foam that contains the small particles of the Super Collagen™ Water(HYDROLYZED COLLAGEN) and Peptide effectively cleanses accumulated dead skin cells and impuriti', 'liquido', 150, 200, 5, 4, 'prod40'),
(41, 'Wonder Pore Deep Foaming Cleanser', 'ETUDE', 'The cleansing foam effectively cleanses accumulated dead skin cells and impurities from pores.\r\n', 'liquido', 150, 250, 8, 4, 'prod41'),
(42, 'AC Clean Up Cleansing Foam ', 'ETUDE', 'Weakly acidic cleansing foam for skin balance can cleanse sebum and impurities on the face.\r\n', 'liquido', 150, 250, 8, 4, 'prod42'),
(43, 'Baking Powder Pore Cleansing Foam', 'ETUDE', 'The multi-deep cleansing foam removes impurities and dead skin cells from pores with fine baking powder and effectively cleanses away makeup residue with its abundant viscous foam.', 'liquido', 300, 200, 10, 4, 'prod43'),
(44, 'Baking Powder B.B Deep Cleansing Foam', 'ETUDE', 'The BB cream deep cleansing foam removes small dead skin cells and impurities from pores with fine baking powder as primary cleansing and cleanses away stubborn dead skin cells and adhering BB cream w', 'liquido', 160, 280, 10, 4, 'prod44'),
(45, 'PPOYAN Cleansing Tissue 40EA', 'ETUDE', 'Moist Cleansing Tissue - One Shot One Kill with just one tissue.\r\n', 'solido', 40, 100, 8, 4, 'prod45'),
(46, 'Lip & Eye Remover ', 'ETUDE', 'The mild lip and eye remover effectively removes heavy eye and lip makeup.\r\n', 'liquido', 100, 200, 7, 4, 'prod46'),
(47, 'Lip & Eye Remover', 'ETUDE', 'A gentle makeup remover\r\n', 'liquido', 250, 250, 5, 4, 'prod47'),
(48, 'Mascara Remover', 'ETUDE', 'The mascara remover easily removes even waterproof mascara.\r\n', 'liquido', 80, 180, 10, 3, 'prod48'),
(49, 'AWARE Clean Lip & Eye Remover', 'Vegan', 'The mascara remover easily removes even waterproof mascara.\r\n', 'liquido', 250, 380, 3, 4, 'prod49'),
(50, 'AWARE PH Micellar Cleansing Water', 'Vegan', 'The mascara remover easily removes even waterproof mascara.', 'liquido', 500, 300, 5, 4, 'prod50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(3) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `idProducto` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(12) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idCarrito`),
  ADD UNIQUE KEY `idProducto` (`idProducto`),
  ADD UNIQUE KEY `idCliente_2` (`idCliente`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD PRIMARY KEY (`idDetalleOrden`),
  ADD UNIQUE KEY `idOrden` (`idOrden`),
  ADD UNIQUE KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`idDomicilio`),
  ADD UNIQUE KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idOrden`),
  ADD UNIQUE KEY `idCliente` (`idCliente`),
  ADD UNIQUE KEY `idDomicilio` (`idDomicilio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD CONSTRAINT `detalle_orden_ibfk_1` FOREIGN KEY (`idOrden`) REFERENCES `orden` (`idOrden`),
  ADD CONSTRAINT `detalle_orden_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `domicilio_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
