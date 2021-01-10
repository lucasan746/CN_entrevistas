-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2021 a las 00:04:57
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cn_entrevistas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistas`
--

DROP TABLE IF EXISTS `entrevistas`;
CREATE TABLE IF NOT EXISTS `entrevistas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dni` bigint(20) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `id_prospecto` int(11) NOT NULL,
  `estado_civil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` bigint(20) NOT NULL,
  `celular_alt` bigint(20) DEFAULT NULL,
  `telefono` bigint(20) NOT NULL,
  `telefono_alt` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_postal` int(11) NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acomp_dni` bigint(20) DEFAULT NULL,
  `acomp_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_apellido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_fecha_nacimiento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_edad` int(11) DEFAULT NULL,
  `acomp_id_prospecto` int(11) DEFAULT NULL,
  `acomp_estado_civil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_profesion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_celular` bigint(20) DEFAULT NULL,
  `acomp_celular_alt` bigint(20) DEFAULT NULL,
  `acomp_telefono` bigint(20) DEFAULT NULL,
  `acomp_telefono_alt` bigint(20) DEFAULT NULL,
  `acomp_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_email_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_localidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_cod_postal` int(11) DEFAULT NULL,
  `acomp_pais` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acomp_provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `es_cliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_cliente` int(11) DEFAULT NULL,
  `referente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liner` int(11) DEFAULT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comentarios` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entrevistas`
--

INSERT INTO `entrevistas` (`id`, `created_at`, `updated_at`, `dni`, `nombre`, `apellido`, `fecha_nacimiento`, `edad`, `id_prospecto`, `estado_civil`, `profesion`, `celular`, `celular_alt`, `telefono`, `telefono_alt`, `email`, `email_alt`, `direccion`, `localidad`, `cod_postal`, `pais`, `provincia`, `acomp_dni`, `acomp_nombre`, `acomp_apellido`, `acomp_fecha_nacimiento`, `acomp_edad`, `acomp_id_prospecto`, `acomp_estado_civil`, `acomp_profesion`, `acomp_celular`, `acomp_celular_alt`, `acomp_telefono`, `acomp_telefono_alt`, `acomp_email`, `acomp_email_alt`, `acomp_direccion`, `acomp_localidad`, `acomp_cod_postal`, `acomp_pais`, `acomp_provincia`, `es_cliente`, `nro_cliente`, `referente`, `procedencia`, `opc`, `liner`, `fecha`, `comentarios`) VALUES
(1, '2021-01-11 01:46:23', '2021-01-11 01:46:23', 41005578, 'LUCAS ARIEL', 'SANCHEZ', '1998-04-02', 22, 12, 'casado', 'test', 11000000, 0, 11000000, 0, 'test@gmail.com', NULL, 'CUZCO 1947', 'VILLA MADERO', 1768, 'Argentina', 'Buenos Aires', 0, 'Javier', 'Filippis', '', 40, 12, 'casado', NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 'Argentina', NULL, 'No', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2021-01-11 01:50:38', '2021-01-11 01:50:38', 41005578, 'LUCAS ARIEL', 'SANCHEZ', '1998-04-02', 22, 12, 'casado', 'test', 11000000, 0, 11000000, 0, 'test@gmail.com', NULL, 'CUZCO 1947', 'VILLA MADERO', 1768, 'Argentina', 'Buenos Aires', 0, 'Javier', 'Filippis', '', 40, 12, 'casado', NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'No', 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2021_01_07_000217_create_entrevistas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@entrevistas.com', '2021-01-11 01:40:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RSikUdI4kOZRcTEBy2h0TlZH92OMIQje9wfjjujsqQxYbeWDm53TP2l8pkA5', '2021-01-11 01:40:40', '2021-01-11 01:40:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
