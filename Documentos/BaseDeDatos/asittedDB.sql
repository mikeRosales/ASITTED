-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-08-2015 a las 20:14:05
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `asitted_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_06_27_211244_create_niveles_acceso_table', 1),
('2015_06_27_211928_create_usuarios_table', 1),
('2015_06_27_212024_create_personal_table', 1),
('2015_06_27_212102_create_entrada_mat_prima_table', 1),
('2015_06_27_212247_create_talleres_table', 1),
('2015_06_27_212315_create_productos_terminados_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_acceso`
--

CREATE TABLE IF NOT EXISTS `niveles_acceso` (
  `id` int(10) unsigned NOT NULL,
  `nombre_nivel` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `niveles_acceso`
--

TRUNCATE TABLE `niveles_acceso`;
--
-- Volcado de datos para la tabla `niveles_acceso`
--

INSERT INTO `niveles_acceso` (`id`, `nombre_nivel`) VALUES
(1, 'gerente'),
(2, 'almacenista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(10) unsigned NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_materno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `personal`
--

TRUNCATE TABLE `personal`;
--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'Miguel Angel', 'Rosales', 'Morales', 'Colonia masie calle jose ramon #101', '6182249330', '2015-08-02 05:00:00', '2015-08-02 05:00:00'),
(2, 'Vanessa ', 'Del Angel', 'Gallegos', 'Calle Madreselva #415', '1280402', '2015-08-02 05:00:00', '2015-08-02 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_entregado`
--

CREATE TABLE IF NOT EXISTS `producto_entregado` (
  `id` int(11) NOT NULL,
  `corte` text COLLATE utf8_unicode_ci NOT NULL,
  `talla` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paquetes` int(11) NOT NULL,
  `id_taller` int(11) NOT NULL,
  `cajas` int(11) NOT NULL,
  `color` text COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `producto_entregado`
--

TRUNCATE TABLE `producto_entregado`;
--
-- Volcado de datos para la tabla `producto_entregado`
--

INSERT INTO `producto_entregado` (`id`, `corte`, `talla`, `paquetes`, `id_taller`, `cajas`, `color`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 'polo', 'G', 12, 2, 12, 'Guinda', 'muy buen producto', '2015-08-03 22:55:07', '2015-08-03 22:55:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_terminados`
--

CREATE TABLE IF NOT EXISTS `productos_terminados` (
  `id` int(10) unsigned NOT NULL,
  `num_bolsa` int(11) NOT NULL,
  `num_bulto` int(11) NOT NULL,
  `tipo` enum('chamarra','pantalon','camisa') COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `talla` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_taller` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `productos_terminados`
--

TRUNCATE TABLE `productos_terminados`;
--
-- Volcado de datos para la tabla `productos_terminados`
--

INSERT INTO `productos_terminados` (`id`, `num_bolsa`, `num_bulto`, `tipo`, `nombre`, `talla`, `cantidad`, `id_taller`, `created_at`, `updated_at`) VALUES
(2, 1, 12, 'chamarra', 'chamarras polo', 'm', 34, 1, '2015-07-08 05:00:00', '2015-07-08 05:00:00'),
(3, 2, 13, 'pantalon', 'pantalones juanito', 'l', 100, 2, '2015-07-08 05:00:00', '2015-07-08 05:00:00'),
(4, 1, 1, 'chamarra', 'mi producto terminado', 'CH', 12, 1, '2015-08-03 22:19:36', '2015-08-03 22:19:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion_mat_prima`
--

CREATE TABLE IF NOT EXISTS `recepcion_mat_prima` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `recepcion_mat_prima`
--

TRUNCATE TABLE `recepcion_mat_prima`;
--
-- Volcado de datos para la tabla `recepcion_mat_prima`
--

INSERT INTO `recepcion_mat_prima` (`id`, `nombre`, `unidad`, `cantidad`, `descripcion`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 'tela1', 1, 24, 'tela para uniformes de primaria', 'llego en buen estado', '2015-07-08 05:00:00', '2015-07-08 05:00:00'),
(2, 'tela2', 2, 10, 'tela para uniformes de secundaria', 'llegaron algunos con fallas ', '2015-07-08 05:00:00', '2015-07-08 05:00:00'),
(3, 'materia de prueba', 12, 34, 'mi materia', 'buen estado', '2015-08-03 21:57:27', '2015-08-03 21:57:27'),
(4, 'materia prima 2', 12, 52, 'nueva', 'nueva en buen estado', '2015-08-03 21:58:17', '2015-08-03 21:58:17'),
(5, 'mi materia prueba', 1, 23, 'prueba rol almacen', 'pruebas', '2015-08-03 23:11:48', '2015-08-03 23:11:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidaMateriaPrima`
--

CREATE TABLE IF NOT EXISTS `salidaMateriaPrima` (
  `id` int(11) NOT NULL,
  `id_taller` int(11) NOT NULL,
  `via_envio` text COLLATE utf8_unicode_ci NOT NULL,
  `producto` text COLLATE utf8_unicode_ci NOT NULL,
  `cajas` int(11) NOT NULL,
  `unidad` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `corte` text COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `salidaMateriaPrima`
--

TRUNCATE TABLE `salidaMateriaPrima`;
--
-- Volcado de datos para la tabla `salidaMateriaPrima`
--

INSERT INTO `salidaMateriaPrima` (`id`, `id_taller`, `via_envio`, `producto`, `cajas`, `unidad`, `cantidad`, `descripcion`, `corte`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 2, 'Tren', 'camisas polo', 4, 3, 3, 'van 4 cajas', 'polo', 'aqui se envia la merca', '2015-08-03 22:41:09', '2015-08-03 22:41:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE IF NOT EXISTS `talleres` (
  `id` int(10) unsigned NOT NULL,
  `nombre_taller` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `encargado` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `talleres`
--

TRUNCATE TABLE `talleres`;
--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id`, `nombre_taller`, `direccion`, `encargado`, `created_at`, `updated_at`) VALUES
(1, 'taller conchitas', '', '', '2015-08-03 17:56:48', '0000-00-00 00:00:00'),
(2, 'taller juanas', '', '', '2015-08-03 17:56:48', '0000-00-00 00:00:00'),
(3, 'taller mike', 'colonia masie', 'mike', '2015-08-03 23:01:59', '2015-08-03 23:01:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `id_nivel_acceso` int(10) unsigned NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_personal` int(11) unsigned NOT NULL,
  `remember_token` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `id_nivel_acceso`, `username`, `password`, `id_personal`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'mikeRosales', '$2y$10$C/ISea/X41tz8MZ9VdFmvuhZxYYt9f4YwTl5cIR6OGU04.7BbBQvK', 1, 5, '2015-08-02 05:00:00', '2015-08-03 23:07:20'),
(2, 2, 'vaneDelAngel', '$2y$10$9D0kN3H2WJpPVcPV.hHc7edVzQdnACZoyyhUFkHtbnA9eoTvOMJA2', 2, 0, '2015-08-02 05:00:00', '2015-08-03 23:13:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `niveles_acceso`
--
ALTER TABLE `niveles_acceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_entregado`
--
ALTER TABLE `producto_entregado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_terminados`
--
ALTER TABLE `productos_terminados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_terminados_id_taller_foreign` (`id_taller`);

--
-- Indices de la tabla `recepcion_mat_prima`
--
ALTER TABLE `recepcion_mat_prima`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salidaMateriaPrima`
--
ALTER TABLE `salidaMateriaPrima`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_id_nivel_acceso_foreign` (`id_nivel_acceso`),
  ADD KEY `id_personal` (`id_personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `niveles_acceso`
--
ALTER TABLE `niveles_acceso`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `producto_entregado`
--
ALTER TABLE `producto_entregado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos_terminados`
--
ALTER TABLE `productos_terminados`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `recepcion_mat_prima`
--
ALTER TABLE `recepcion_mat_prima`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `salidaMateriaPrima`
--
ALTER TABLE `salidaMateriaPrima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_terminados`
--
ALTER TABLE `productos_terminados`
  ADD CONSTRAINT `productos_terminados_id_taller_foreign` FOREIGN KEY (`id_taller`) REFERENCES `talleres` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `usuarios_id_nivel_acceso_foreign` FOREIGN KEY (`id_nivel_acceso`) REFERENCES `niveles_acceso` (`id`),
  ADD CONSTRAINT `usuarios_id_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
