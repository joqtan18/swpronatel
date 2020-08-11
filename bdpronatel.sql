-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2020 a las 06:51:55
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `swpronatel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE `revision` (
  `id_revision` int(11) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `n_serie` varchar(11) NOT NULL,
  `n_palet` varchar(150) NOT NULL,
  `embalaje` varchar(150) NOT NULL,
  `case_revision` varchar(150) NOT NULL,
  `cargador_cable` varchar(150) NOT NULL,
  `tablet_enciende` varchar(150) NOT NULL,
  `bateria` varchar(150) NOT NULL,
  `puerto_micro_usb` varchar(150) NOT NULL,
  `microsd` varchar(150) NOT NULL,
  `pantalla` varchar(150) NOT NULL,
  `resolucion` varchar(150) NOT NULL,
  `nucleos` varchar(150) NOT NULL,
  `velocidad_cpu` varchar(150) NOT NULL,
  `memoria_ram` varchar(150) NOT NULL,
  `memoria_almace` varchar(150) NOT NULL,
  `camara_frontal` varchar(150) NOT NULL,
  `camara_trasera` varchar(150) NOT NULL,
  `flash` varchar(150) NOT NULL,
  `wifi` varchar(150) NOT NULL,
  `bluetooth` varchar(150) NOT NULL,
  `parlantes_auriculares` varchar(150) NOT NULL,
  `microfono` varchar(150) NOT NULL,
  `funda` varchar(150) NOT NULL,
  `teclado` varchar(150) NOT NULL,
  `version` varchar(150) NOT NULL,
  `configuracion` varchar(150) NOT NULL,
  `veri_apk` varchar(150) NOT NULL,
  `lista_apk` text NOT NULL,
  `comyob_hardware` varchar(150) DEFAULT NULL,
  `comyob_software` varchar(150) DEFAULT NULL,
  `usuario` varchar(8) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `revision`
--

INSERT INTO `revision` (`id_revision`, `marca`, `modelo`, `n_serie`, `n_palet`, `embalaje`, `case_revision`, `cargador_cable`, `tablet_enciende`, `bateria`, `puerto_micro_usb`, `microsd`, `pantalla`, `resolucion`, `nucleos`, `velocidad_cpu`, `memoria_ram`, `memoria_almace`, `camara_frontal`, `camara_trasera`, `flash`, `wifi`, `bluetooth`, `parlantes_auriculares`, `microfono`, `funda`, `teclado`, `version`, `configuracion`, `veri_apk`, `lista_apk`, `comyob_hardware`, `comyob_software`, `usuario`, `hora`, `estado`) VALUES
(1, 'advance', 'SP5730', '19548658754', '4', 'Si', 'Si', 'Si', '', 'Si', 'Si', 'Si', 'Si', '800 x 1280', 'Si', 'Si', '2 GB', '32 GB', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '9', 'Si', 'Si', '01- Sugarizer.apk\r\n02- Geogebra/Graficadora.apk\r\n03- Microsoft Word Write.apk\r\n04- Microsoft Excel View Edit.apk\r\n05- Microsoft OneNote.apk\r\n06- Microsoft PowerPoint.apk\r\n07- Mindomo.apk\r\n08- XMind.apk\r\n09- Mekorama.apk\r\n10- Pintura de Bolsillo/Pocket paint.apk\r\n11- Pocket Code.apk\r\n12- ScratchJr.apk\r\n13- Files by Google Clean up space.apk\r\n14- FilmoraGo.apk\r\n15- Galería de fotos - QuickPic.apk\r\n16- Google Earth.apk\r\n17- TeamViewer for Remote Control.apk\r\n18- TeamViewer QuickSupport.apk\r\n19- VLC.apk\r\n20- Lazarillo GPS.apk\r\n21- ASDRA Buscador de entidades.apk\r\n22- Leo con Grin.apk\r\n23- TapTapSee.apk\r\n24- Dictapicto.apk\r\n25- Día a Día.apk\r\n26- TEAyudo a JUGAR.apk\r\n27- Aipoly Vision.apk\r\n28- Araword.apk\r\n29- Eye games Dyslexia.apk\r\n30- PictoDroid Lite.apk\r\n31- PictogramAgenda.apk', NULL, NULL, '70327395', '2020-08-11 02:10:17', 0),
(2, 'advance', 'SP5730', '19548658760', '4', 'Si', 'Si', 'Si', '', 'Si', 'Si', 'Si', 'Si', '800 x 1280', 'Si', 'Si', '2 GB', '32 GB', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '9', 'Si', 'Si', '01- Sugarizer.apk\r\n02- Geogebra/Graficadora.apk\r\n03- Microsoft Word Write.apk\r\n04- Microsoft Excel View Edit.apk\r\n05- Microsoft OneNote.apk\r\n06- Microsoft PowerPoint.apk\r\n07- Mindomo.apk\r\n08- XMind.apk\r\n09- Mekorama.apk\r\n10- Pintura de Bolsillo/Pocket paint.apk\r\n11- Pocket Code.apk\r\n12- ScratchJr.apk\r\n13- Files by Google Clean up space.apk\r\n14- FilmoraGo.apk\r\n15- Galería de fotos - QuickPic.apk\r\n16- Google Earth.apk\r\n17- TeamViewer for Remote Control.apk\r\n18- TeamViewer QuickSupport.apk\r\n19- VLC.apk\r\n20- Lazarillo GPS.apk\r\n21- ASDRA Buscador de entidades.apk\r\n22- Leo con Grin.apk\r\n23- TapTapSee.apk\r\n24- Dictapicto.apk\r\n25- Día a Día.apk\r\n26- TEAyudo a JUGAR.apk\r\n27- Aipoly Vision.apk\r\n28- Araword.apk\r\n29- Eye games Dyslexia.apk\r\n30- PictoDroid Lite.apk\r\n31- PictogramAgenda.apk', NULL, NULL, '70327395', '2020-08-11 02:29:33', 0),
(3, 'advance', 'SP5730', '19548658769', '4', 'Si', 'Si', 'Si', '', 'Si', 'Si', 'Si', 'Si', '800 x 1280', 'Si', 'Si', '2 GB', '32 GB', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '9', 'Si', 'Si', '01- Sugarizer.apk\r\n02- Geogebra/Graficadora.apk\r\n03- Microsoft Word Write.apk\r\n04- Microsoft Excel View Edit.apk\r\n05- Microsoft OneNote.apk\r\n06- Microsoft PowerPoint.apk\r\n07- Mindomo.apk\r\n08- XMind.apk\r\n09- Mekorama.apk\r\n10- Pintura de Bolsillo/Pocket paint.apk\r\n11- Pocket Code.apk\r\n12- ScratchJr.apk\r\n13- Files by Google Clean up space.apk\r\n14- FilmoraGo.apk\r\n15- Galería de fotos - QuickPic.apk\r\n16- Google Earth.apk\r\n17- TeamViewer for Remote Control.apk\r\n18- TeamViewer QuickSupport.apk\r\n19- VLC.apk\r\n20- Lazarillo GPS.apk\r\n21- ASDRA Buscador de entidades.apk\r\n22- Leo con Grin.apk\r\n23- TapTapSee.apk\r\n24- Dictapicto.apk\r\n25- Día a Día.apk\r\n26- TEAyudo a JUGAR.apk\r\n27- Aipoly Vision.apk\r\n28- Araword.apk\r\n29- Eye games Dyslexia.apk\r\n30- PictoDroid Lite.apk\r\n31- PictogramAgenda.apk', NULL, NULL, '75200120', '2020-08-11 02:10:17', 0),
(4, 'ADVANCE', 'SP5730', '19584582456', '6', 'SI', 'SI', 'OMITIR', 'NO', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', '01- Sugarizer.apk', NULL, NULL, '70327395', '2020-08-11 04:27:43', 1),
(5, 'ADVANCE', 'SP5730', '19584582488', '10', 'SI', 'SI', 'OMITIR', 'NO', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', '31- PictogramAgenda.apk', 'pantalla rayada', 'pantalla rayada', '70327395', '2020-08-11 04:28:18', 1),
(6, 'ADVANCE', 'SP5730', '12345678954', '85', 'SI', 'SI', 'OMITIR', 'NO', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', '14- FilmoraGo.apk, ', NULL, NULL, '70327395', '2020-08-11 04:42:43', 1),
(7, 'ADVANCE', 'SP5730', '12345678985', '82', 'SI', 'SI', 'OMITIR', 'NO', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', '01- Sugarizer.apk02- Geogebra/Graficadora.apk03- Microsoft Word Write.apk04- Microsoft Excel View Edit.apk05- Microsoft OneNote.apk', NULL, NULL, '70327395', '2020-08-11 04:47:11', 1),
(8, 'ADVANCE', 'SP5730', '74185296373', '61', 'SI', 'SI', 'OMITIR', 'NO', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', 'OMITIR', ',01- Sugarizer.apk,02- Geogebra/Graficadora.apk,03- Microsoft Word Write.apk,04- Microsoft Excel View Edit.apk,05- Microsoft OneNote.apk,06- Microsoft PowerPoint.apk,07- Mindomo.apk,08- XMind.apk,09- Mekorama.apk,10- Pintura de Bolsillo/Pocket paint.apk,11- Pocket Code.apk,12- ScratchJr.apk,13- Files by Google Clean up space.apk,14- FilmoraGo.apk,15- Galería de fotos - QuickPic.apk,16- Google Earth.apk<,17- TeamViewer for Remote Control.apk,18- TeamViewer QuickSupport.apk,19- VLC.apk,20- Lazarillo GPS.apk,21- ASDRA Buscador de entidades.apk,22- Leo con Grin.apk,23- TapTapSee.apk,24- Dictapicto.apk,25- Día a Día.apk,26- TEAyudo a JUGAR.apk,27- Aipoly Vision.apk,28- Araword.apk,29- Eye games Dyslexia.apk,30- PictoDroid Lite.apk,31- PictogramAgenda.apk,', NULL, NULL, '70327395', '2020-08-11 04:48:20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', NULL, NULL),
(2, 'ing', 'Ingeniero', NULL, NULL),
(3, 'espe', 'Espectador', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 75200120, 2, NULL, NULL),
(2, 70327395, 1, NULL, NULL),
(3, 25835104, 1, NULL, NULL),
(4, 70327396, 2, NULL, NULL),
(5, 70328569, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `trab_id` int(10) UNSIGNED NOT NULL,
  `trab_dni` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trab_ape` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trab_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trab_sexo` int(11) NOT NULL,
  `trab_fnac` date NOT NULL,
  `trab_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trab_tel` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trab_est` int(11) NOT NULL DEFAULT 1,
  `trab_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`trab_id`, `trab_dni`, `trab_ape`, `trab_nom`, `trab_sexo`, `trab_fnac`, `trab_email`, `trab_tel`, `trab_est`, `trab_user`) VALUES
(1, '75200120', 'RAMIREZ RODRIGUEZ', 'JORGE LUIS', 1, '1999-10-14', 'jorge14.jlrr@gmail.com', NULL, 1, 75200120),
(2, '70327395', 'RODRIGUEZ RICHARTE', 'JOSEPH JOQTAN', 1, '1999-03-20', 'joqtan.jr@gmail.com', NULL, 1, 70327395),
(19, '25835104', 'Sandoval Castro', 'Milagros Rubi', 0, '2002-12-23', 'mila@gmail.com', '941160254', 1, 25835104),
(20, '70327396', 'Rodriguez Richarte', 'Zaleth Yarel', 0, '2002-12-17', 'zaleth@gmail.com', '941160145', 1, 70327396),
(21, '70328569', 'Apellidos Pronatel', 'Nombres Pronatel', 1, '2002-12-12', 'pronatel@gmail.com', '945875845', 1, 70328569);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwrd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `password`, `pwrd`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(25835104, '25835104', '$2y$10$/5rqKc3SeiARLRRjispTS.pYSSE52IEWSS75qUY.fQKseY7vHX0se', NULL, NULL, NULL, '2020-08-10 08:12:54', '2020-08-10 08:12:54'),
(70327395, '70327395', '$2y$10$AS9QD69jt/Zre5WZKx1UGu/yq7FeWGFDLT.FOhMgAHz6W0/vW6xn.', '69LB.Pesteling', '2020-07-22 23:42:02', NULL, NULL, '2020-07-23 04:42:02'),
(70327396, '70327396', '$2y$10$9VUPLuEIRJuxNdU4Z1Eh7uJyv0siBGeW1mEe5YAoh1ISykdXRgXHO', NULL, NULL, NULL, '2020-08-10 10:20:51', '2020-08-10 10:20:51'),
(70328569, '70328569', '$2y$10$S3dfsCQcQWhapCdDVy85DOMChg27BfPKNdUkvMgg.WdSNqJVGGyY6', NULL, NULL, NULL, '2020-08-10 10:28:17', '2020-08-10 10:28:17'),
(75200120, '75200120', '$2y$10$lEDXk5MnlYFKRmmJPfWYm.x/ni32QiNz5lILHws1MpuFaNlJ1aT92', NULL, '2020-07-20 11:21:00', NULL, NULL, '2020-07-20 18:21:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`id_revision`),
  ADD UNIQUE KEY `n_serie` (`n_serie`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`trab_id`),
  ADD UNIQUE KEY `trabajador_trab_dni_unique` (`trab_dni`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `revision`
--
ALTER TABLE `revision`
  MODIFY `id_revision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `trab_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81225824;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
