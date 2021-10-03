-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para sistema
CREATE DATABASE IF NOT EXISTS `sistema` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sistema`;

-- Volcando estructura para tabla sistema.ambulancia
CREATE TABLE IF NOT EXISTS `ambulancia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `placa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.ambulancia: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `ambulancia` DISABLE KEYS */;
INSERT INTO `ambulancia` (`id`, `placa`, `tipo`, `modelo`, `marca`, `condicion`, `created_at`, `updated_at`) VALUES
	(1, '472-ASS', 'Individual', 'ungar', 'toyota', 1, '2019-12-01 21:37:23', '2019-12-01 23:44:57'),
	(2, '825-GTR', 'camioneta', 'land cruiser', 'nissan', 1, '2019-12-02 02:24:55', '2020-10-21 16:31:17');
/*!40000 ALTER TABLE `ambulancia` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.emergencia
CREATE TABLE IF NOT EXISTS `emergencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `latitude` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paciente_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emergencia_paciente_id_foreign` (`paciente_id`),
  CONSTRAINT `emergencia_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.emergencia: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `emergencia` DISABLE KEYS */;
INSERT INTO `emergencia` (`id`, `latitude`, `longitude`, `paciente_id`, `created_at`, `updated_at`) VALUES
	(1, '-17', '-66', 1, '2020-01-25 23:22:51', '2020-01-25 23:22:51'),
	(2, '-17.3751085', '-66.1224467', 1, '2020-01-25 23:24:37', '2020-01-25 23:24:37'),
	(3, '-17.3751155', '-66.122478', 1, '2020-01-26 01:12:59', '2020-01-26 01:12:59'),
	(4, '-17.3751155', '-66.122458', 1, '2020-01-26 01:15:18', '2020-01-26 01:15:18'),
	(5, '-17.3751155', '-66.1224521', 1, '2020-01-26 01:17:45', '2020-01-26 01:17:45'),
	(6, '-17.375100800000002', '-66.1224597', 1, '2020-01-26 01:21:37', '2020-01-26 01:21:37'),
	(7, '-17.3750926', '-66.1224786', 1, '2020-01-26 01:24:40', '2020-01-26 01:24:40'),
	(8, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 01:55:37', '2020-01-26 01:55:37'),
	(9, '-17.3751086', '-66.1224517', 1, '2020-01-26 02:01:44', '2020-01-26 02:01:44'),
	(10, '-17.375097099999998', '-66.1224692', 1, '2020-01-26 02:04:06', '2020-01-26 02:04:06'),
	(11, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 03:31:03', '2020-01-26 03:31:03'),
	(12, '-17.3750771', '-66.12244679999999', 1, '2020-01-26 04:06:31', '2020-01-26 04:06:31'),
	(13, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 04:30:34', '2020-01-26 04:30:34'),
	(14, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 04:34:51', '2020-01-26 04:34:51'),
	(15, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 05:40:06', '2020-01-26 05:40:06'),
	(16, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 05:41:10', '2020-01-26 05:41:10'),
	(17, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 05:44:27', '2020-01-26 05:44:27'),
	(18, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 05:46:11', '2020-01-26 05:46:11'),
	(19, '-17.3750721', '-66.1224682', 1, '2020-01-26 05:46:47', '2020-01-26 05:46:47'),
	(20, '-17.3750721', '-66.1224682', 1, '2020-01-26 05:46:56', '2020-01-26 05:46:56'),
	(21, '-17.3750721', '-66.1224682', 1, '2020-01-26 05:48:03', '2020-01-26 05:48:03'),
	(22, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 19:05:41', '2020-01-26 19:05:41'),
	(23, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 00:18:28', '2020-01-28 00:18:28'),
	(24, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 00:29:31', '2020-01-28 00:29:31'),
	(25, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 00:30:06', '2020-01-28 00:30:06'),
	(26, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 00:31:06', '2020-01-28 00:31:06'),
	(27, '-17.3710745', '-66.1361714', 1, '2020-01-28 00:36:55', '2020-01-28 00:36:55'),
	(28, '-17.393698', '-66.1631063', 4, '2020-10-24 00:03:59', '2020-10-24 00:03:59'),
	(29, '-17.393698', '-66.1631063', 4, '2020-10-24 00:04:22', '2020-10-24 00:04:22');
/*!40000 ALTER TABLE `emergencia` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.familiar
CREATE TABLE IF NOT EXISTS `familiar` (
  `id_fam` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paci_id` int(10) unsigned NOT NULL,
  `nom_comp` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `oficina` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_fam`),
  KEY `familiar_paci_id_foreign` (`paci_id`),
  CONSTRAINT `familiar_paci_id_foreign` FOREIGN KEY (`paci_id`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sistema.familiar: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `familiar` DISABLE KEYS */;
/*!40000 ALTER TABLE `familiar` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.migrations: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_11_30_194351_create_ambulancia_table', 1),
	(4, '2019_12_01_000624_create_paramedico_table', 1),
	(5, '2019_12_01_160633_create_paciente_table', 1),
	(6, '2019_12_02_135710_create_seguimiento_paciente_table', 2),
	(7, '2019_12_04_162555_create_login_table', 3),
	(8, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
	(9, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
	(10, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
	(11, '2016_06_01_000004_create_oauth_clients_table', 4),
	(12, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4),
	(13, '2019_12_11_035756_create_seguimiento_paciente_table', 5),
	(15, '2020_01_25_192846_create_emergencia_table', 6),
	(16, '2020_03_03_213649_create_familiar_table', 7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.oauth_access_tokens
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.oauth_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.oauth_auth_codes
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.oauth_auth_codes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.oauth_clients
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.oauth_clients: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Laravel Personal Access Client', 'ZqT7UYaTSUJGUMHzCe21B0AZi2rVgfRb0OWAscUc', 'http://localhost', 1, 0, 0, '2019-12-07 21:37:14', '2019-12-07 21:37:14'),
	(2, NULL, 'Laravel Password Grant Client', 'R9Y6ncodj7RAO4Jxqd82x4LLY3tPCT8e3GKiRsCO', 'http://localhost', 0, 1, 0, '2019-12-07 21:37:14', '2019-12-07 21:37:14');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.oauth_personal_access_clients
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.oauth_personal_access_clients: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2019-12-07 21:37:14', '2019-12-07 21:37:14');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.oauth_refresh_tokens
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.oauth_refresh_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.paciente
CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paterno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presion_arterial` int(11) NOT NULL,
  `frecuencia_respiratoria` int(11) NOT NULL,
  `pulso` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `alergias` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.paciente: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` (`id`, `nombres`, `paterno`, `materno`, `ci`, `sexo`, `edad`, `email`, `password`, `presion_arterial`, `frecuencia_respiratoria`, `pulso`, `temperatura`, `alergias`, `condicion`, `created_at`, `updated_at`) VALUES
	(1, 'sergio', 'miranda', 'perez', '9332996', 'masculino', 23, 'sergio@gmail.com', '12345678', 90, 15, 60, 36, '', 1, '2019-12-01 16:34:30', '2020-10-21 17:41:55'),
	(2, 'Jose', 'Torrez', 'Villarroel', '6553723', 'masculino', 2, 'jose@gmail.com', '12345678', 90, 10, 60, 36, 'alergico a las picaduras', 1, '2019-12-02 01:48:27', '2020-10-22 08:53:53'),
	(3, 'nataly', 'vergara', 'trujillo', '6553730', 'femenino', 16, 'nataly@gmail.com', '12345678', 90, 65, 60, 36, 'penicilina', 1, '2019-12-09 04:38:35', '2020-01-25 21:57:38'),
	(4, 'Raul', 'romero', 'parrilla', '4589875', 'masculino', 4, 'raul@gmail.com', '12345678', 60, 15, 60, 36, 'no soporta las inyecciones', 1, '2019-12-09 04:38:35', '2020-10-21 17:38:55');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.paramedico
CREATE TABLE IF NOT EXISTS `paramedico` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paterno` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materno` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condicion` tinyint(1) DEFAULT '1',
  `rol` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.paramedico: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `paramedico` DISABLE KEYS */;
INSERT INTO `paramedico` (`id`, `nombre`, `paterno`, `materno`, `sexo`, `email`, `password`, `condicion`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Diana', 'Cabezas', 'Fernandez', 'femenino', 'diana@gmail.com', '$2y$10$dxFcaC9dSDviRYwX2nENIO.f2qevgj9rbQLbDATwThRTlBpUVxMD.', 1, 1, 'oxH9tEAG1tbgt3rTYzjPOmiHQNj9x2XvBBenWwBmDZRiGmLKlJ35xRuxA0zD', '2019-12-01 21:36:40', '2020-10-22 22:06:03'),
	(2, 'Elizabeth', 'Villarroel', 'Coca', 'femenino', 'elizabeth@gmail.com', '$2y$10$dxFcaC9dSDviRYwX2nENIO.f2qevgj9rbQLbDATwThRTlBpUVxMD.', 1, 0, '1', '2019-12-02 02:22:37', '2019-12-02 02:22:37'),
	(3, 'Denzel', 'Dorado', 'Dorado', 'Masculino', 'denzel@gmail.com', '$2y$10$dxFcaC9dSDviRYwX2nENIO.f2qevgj9rbQLbDATwThRTlBpUVxMD.', 1, 0, NULL, NULL, '2020-10-22 20:05:06');
/*!40000 ALTER TABLE `paramedico` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.seguimiento_paciente
CREATE TABLE IF NOT EXISTS `seguimiento_paciente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paciente_id` int(10) unsigned NOT NULL,
  `descripcion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seguimiento_paciente_idpaci_foreign` (`paciente_id`),
  CONSTRAINT `seguimiento_paciente_idpaci_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.seguimiento_paciente: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `seguimiento_paciente` DISABLE KEYS */;
INSERT INTO `seguimiento_paciente` (`id`, `paciente_id`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 2, 'tiene un accidente en el cuello y el brazo torcido', NULL, '2019-12-11 06:04:59'),
	(2, 3, 'tiene una fractura en el sistema guardado', NULL, '2019-12-11 05:57:52'),
	(4, 1, 'tiene una fractura', NULL, NULL),
	(5, 3, 'tiene una fractura en su pierna izquierda', NULL, NULL);
/*!40000 ALTER TABLE `seguimiento_paciente` ENABLE KEYS */;

-- Volcando estructura para tabla sistema.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistema.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Denzel Dorado', 'denzel@gmail.com', '$2y$10$dxFcaC9dSDviRYwX2nENIO.f2qevgj9rbQLbDATwThRTlBpUVxMD.', NULL, '2020-10-21 16:25:26', '2020-10-21 16:25:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
usersusers