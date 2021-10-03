-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2020 a las 01:15:04
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambulancia`
--

CREATE TABLE `ambulancia` (
  `id_amb` int(10) UNSIGNED NOT NULL,
  `placa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ambulancia`
--

INSERT INTO `ambulancia` (`id_amb`, `placa`, `tipo`, `modelo`, `marca`, `condicion`, `created_at`, `updated_at`) VALUES
(1, '472-ASS', 'Individual', 'ungar', 'toyota', 1, '2019-12-02 01:37:23', '2019-12-02 03:44:57'),
(2, '825-GTR', 'camioneta', 'land cruiser', 'nissan', 1, '2019-12-02 06:24:55', '2019-12-02 06:24:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencia`
--

CREATE TABLE `emergencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `latitude` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paciente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `emergencia`
--

INSERT INTO `emergencia` (`id`, `latitude`, `longitude`, `paciente_id`, `created_at`, `updated_at`) VALUES
(1, '-17', '-66', 1, '2020-01-26 03:22:51', '2020-01-26 03:22:51'),
(2, '-17.3751085', '-66.1224467', 1, '2020-01-26 03:24:37', '2020-01-26 03:24:37'),
(3, '-17.3751155', '-66.122478', 1, '2020-01-26 05:12:59', '2020-01-26 05:12:59'),
(4, '-17.3751155', '-66.122458', 1, '2020-01-26 05:15:18', '2020-01-26 05:15:18'),
(5, '-17.3751155', '-66.1224521', 1, '2020-01-26 05:17:45', '2020-01-26 05:17:45'),
(6, '-17.375100800000002', '-66.1224597', 1, '2020-01-26 05:21:37', '2020-01-26 05:21:37'),
(7, '-17.3750926', '-66.1224786', 1, '2020-01-26 05:24:40', '2020-01-26 05:24:40'),
(8, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 05:55:37', '2020-01-26 05:55:37'),
(9, '-17.3751086', '-66.1224517', 1, '2020-01-26 06:01:44', '2020-01-26 06:01:44'),
(10, '-17.375097099999998', '-66.1224692', 1, '2020-01-26 06:04:06', '2020-01-26 06:04:06'),
(11, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 07:31:03', '2020-01-26 07:31:03'),
(12, '-17.3750771', '-66.12244679999999', 1, '2020-01-26 08:06:31', '2020-01-26 08:06:31'),
(13, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 08:30:34', '2020-01-26 08:30:34'),
(14, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 08:34:51', '2020-01-26 08:34:51'),
(15, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 09:40:06', '2020-01-26 09:40:06'),
(16, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 09:41:10', '2020-01-26 09:41:10'),
(17, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 09:44:27', '2020-01-26 09:44:27'),
(18, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 09:46:11', '2020-01-26 09:46:11'),
(19, '-17.3750721', '-66.1224682', 1, '2020-01-26 09:46:47', '2020-01-26 09:46:47'),
(20, '-17.3750721', '-66.1224682', 1, '2020-01-26 09:46:56', '2020-01-26 09:46:56'),
(21, '-17.3750721', '-66.1224682', 1, '2020-01-26 09:48:03', '2020-01-26 09:48:03'),
(22, '-17.3817856', '-66.17661439999999', 1, '2020-01-26 23:05:41', '2020-01-26 23:05:41'),
(23, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 04:18:28', '2020-01-28 04:18:28'),
(24, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 04:29:31', '2020-01-28 04:29:31'),
(25, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 04:30:06', '2020-01-28 04:30:06'),
(26, '-17.376308299999998', '-66.12964029999999', 1, '2020-01-28 04:31:06', '2020-01-28 04:31:06'),
(27, '-17.3710745', '-66.1361714', 1, '2020-01-28 04:36:55', '2020-01-28 04:36:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

CREATE TABLE `familiar` (
  `id_fam` int(10) UNSIGNED NOT NULL,
  `paci_id` int(10) UNSIGNED NOT NULL,
  `nom_comp` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `oficina` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_paciente`
--

CREATE TABLE `login_paciente` (
  `id` int(10) UNSIGNED NOT NULL,
  `idpac` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `login_paciente`
--

INSERT INTO `login_paciente` (`id`, `idpac`, `email`, `password`) VALUES
(1, 1, 'sergio123@gmail.com', '123'),
(2, 2, 'jose456@gmail.com', '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'ZqT7UYaTSUJGUMHzCe21B0AZi2rVgfRb0OWAscUc', 'http://localhost', 1, 0, 0, '2019-12-08 01:37:14', '2019-12-08 01:37:14'),
(2, NULL, 'Laravel Password Grant Client', 'R9Y6ncodj7RAO4Jxqd82x4LLY3tPCT8e3GKiRsCO', 'http://localhost', 0, 1, 0, '2019-12-08 01:37:14', '2019-12-08 01:37:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-12-08 01:37:14', '2019-12-08 01:37:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_pac` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidopat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidomat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `presion_arterial` int(11) NOT NULL,
  `frecuencia_respiratoria` int(11) NOT NULL,
  `pulso` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT 1,
  `alergias` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_pac`, `nombres`, `apellidopat`, `apellidomat`, `ci`, `sexo`, `edad`, `presion_arterial`, `frecuencia_respiratoria`, `pulso`, `temperatura`, `condicion`, `alergias`, `created_at`, `updated_at`) VALUES
(1, 'sergio', 'miranda', 'perez', '9332996', 'masculino', 23, 90, 15, 60, 36, 1, '', '2019-12-01 20:34:30', '2019-12-02 03:44:33'),
(2, 'Jose', 'Torrez', 'Villarroel', '6553723', 'masculino', 26, 90, 10, 60, 36, 1, '', '2019-12-02 05:48:27', '2019-12-02 23:22:45'),
(3, 'nataly', 'vergara', 'trujillo', '6553730', 'femenino', 16, 90, 65, 60, 36, 1, 'penicilina', '2019-12-09 08:38:35', '2020-01-26 01:57:38'),
(4, 'Raul', 'romero', 'parrilla', '4589875', 'masculino', 23, 60, 15, 60, 36, 1, 'no soporta las inyecciones', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paramedico`
--

CREATE TABLE `paramedico` (
  `id_par` int(10) UNSIGNED NOT NULL,
  `nombre_par` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_pat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_mat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo_par` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paramedico`
--

INSERT INTO `paramedico` (`id_par`, `nombre_par`, `ap_pat`, `ap_mat`, `sexo_par`, `condicion`, `created_at`, `updated_at`) VALUES
(1, 'Diana', 'Cabezas', 'Fernandez', 'femenino', 1, '2019-12-02 01:36:40', '2019-12-02 03:44:44'),
(2, 'Elizabeth', 'Villarroel', 'Coca', 'femenino', 1, '2019-12-02 06:22:37', '2019-12-02 06:22:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_paciente`
--

CREATE TABLE `seguimiento_paciente` (
  `id_seg` int(10) UNSIGNED NOT NULL,
  `idpaci` int(10) UNSIGNED NOT NULL,
  `descrip` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seguimiento_paciente`
--

INSERT INTO `seguimiento_paciente` (`id_seg`, `idpaci`, `descrip`, `created_at`, `updated_at`) VALUES
(1, 2, 'tiene un accidente en el cuello y el brazo torcido', NULL, '2019-12-11 10:04:59'),
(2, 3, 'tiene una fractura en el sistema guardado', NULL, '2019-12-11 09:57:52'),
(4, 1, 'tiene una fractura', NULL, NULL),
(5, 3, 'tiene una fractura en su pierna izquierda', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambulancia`
--
ALTER TABLE `ambulancia`
  ADD PRIMARY KEY (`id_amb`);

--
-- Indices de la tabla `emergencia`
--
ALTER TABLE `emergencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emergencia_paciente_id_foreign` (`paciente_id`);

--
-- Indices de la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_fam`),
  ADD KEY `familiar_paci_id_foreign` (`paci_id`);

--
-- Indices de la tabla `login_paciente`
--
ALTER TABLE `login_paciente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_paciente_email_unique` (`email`),
  ADD KEY `login_paciente_idpac_foreign` (`idpac`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_pac`);

--
-- Indices de la tabla `paramedico`
--
ALTER TABLE `paramedico`
  ADD PRIMARY KEY (`id_par`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `seguimiento_paciente`
--
ALTER TABLE `seguimiento_paciente`
  ADD PRIMARY KEY (`id_seg`),
  ADD KEY `seguimiento_paciente_idpaci_foreign` (`idpaci`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambulancia`
--
ALTER TABLE `ambulancia`
  MODIFY `id_amb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `emergencia`
--
ALTER TABLE `emergencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_fam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login_paciente`
--
ALTER TABLE `login_paciente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_pac` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paramedico`
--
ALTER TABLE `paramedico`
  MODIFY `id_par` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seguimiento_paciente`
--
ALTER TABLE `seguimiento_paciente`
  MODIFY `id_seg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `emergencia`
--
ALTER TABLE `emergencia`
  ADD CONSTRAINT `emergencia_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id_pac`);

--
-- Filtros para la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD CONSTRAINT `familiar_paci_id_foreign` FOREIGN KEY (`paci_id`) REFERENCES `paciente` (`id_pac`);

--
-- Filtros para la tabla `login_paciente`
--
ALTER TABLE `login_paciente`
  ADD CONSTRAINT `login_paciente_idpac_foreign` FOREIGN KEY (`idpac`) REFERENCES `paciente` (`id_pac`);

--
-- Filtros para la tabla `seguimiento_paciente`
--
ALTER TABLE `seguimiento_paciente`
  ADD CONSTRAINT `seguimiento_paciente_idpaci_foreign` FOREIGN KEY (`idpaci`) REFERENCES `paciente` (`id_pac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
