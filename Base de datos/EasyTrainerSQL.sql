-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2024 a las 21:17:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `easytrainer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`ID`, `NOMBRE`) VALUES
(1, 'EasyTrainerComunity'),
(2, 'dudasP'),
(3, 'casosC'),
(4, 'entrenosA'),
(5, 'nutricion');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `datos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `datos` (
`id_gpm` int(11)
,`grupo_muscular` varchar(25)
,`id_ejer` int(11)
,`ejercicio` varchar(50)
,`descripcion` text
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Press de banca', 'Pectorales mayores - Trabaja principalmente los músculos pectorales mayores y los tríceps braquiales.'),
(2, 'Dominadas', 'Dorsales - Ejercicio compuesto que se centra en los músculos de la espalda y los bíceps braquiales.'),
(3, 'Press militar', 'Deltoides - Ejercicio para desarrollar los deltoides (hombros) y los tríceps braquiales.'),
(4, 'Curl de bíceps', 'Bíceps braquial - Concentra la carga en los músculos del bíceps.'),
(5, 'Extensiones de tríceps', 'Tríceps braquial - Ejercicio para aislar y fortalecer los tríceps.'),
(6, 'Plancha', 'Abdominales - Ejercicio estático que fortalece el core, incluyendo los abdominales.'),
(7, 'Sentadillas', 'Cuádriceps femorales, Isquiotibiales, Glúteos - Ejercicio compuesto que trabaja los músculos de las piernas y glúteos.'),
(8, 'Peso muerto', 'Dorsales, Isquiotibiales, Erectores espinales - Excelente ejercicio para la parte baja de la espalda y los músculos de las piernas.'),
(9, 'Elevaciones de pantorrillas', 'Gemelos, Sóleo, Tibial posterior - Trabaja los músculos de la pantorrilla.'),
(10, 'Fondos en paralelas', 'Pectorales mayores, Tríceps braquial - Ejercicio para trabajar el pecho y los tríceps.'),
(11, 'Remo con barra', 'Dorsales, Bíceps braquial - Ejercicio de espalda que también activa los bíceps.'),
(12, 'Elevaciones laterales', 'Deltoides - Ejercicio para desarrollar los hombros laterales.'),
(13, 'Press de hombros', 'Deltoides, Tríceps braquial - Trabaja los hombros y los tríceps.'),
(14, 'Pull-ups', 'Dorsales, Bíceps braquial - Excelente ejercicio para la espalda y los bíceps.'),
(15, 'Prensa de piernas', 'Cuádriceps femorales, Isquiotibiales, Glúteos - Ejercicio para las piernas y glúteos.'),
(16, 'Zancadas', 'Cuádriceps femorales, Isquiotibiales, Glúteos - Fortalece las piernas y glúteos.'),
(17, 'Crunches', 'Abdominales - Ejercicio básico para fortalecer los abdominales.'),
(18, 'Peso muerto rumano', 'Isquiotibiales, Erectores espinales - Ejercicio para la parte posterior del cuerpo.'),
(19, 'Hip Thrust', 'Glúteos, Isquiotibiales - Excelente para el desarrollo de los glúteos y los isquiotibiales.'),
(20, 'Flexiones', 'Pectorales mayores, Deltoides, Tríceps braquial - Trabaja el pecho, hombros y tríceps.'),
(21, 'Curl de piernas acostado', 'Isquiotibiales - Ejercicio para aislar y fortalecer los músculos isquiotibiales.'),
(22, 'Elevaciones de gemelos sentado', 'Gemelos, Sóleo, Tibial posterior - Ejercicio para los músculos de la pantorrilla.'),
(23, 'Encogimientos de hombros', 'Trapecio - Fortalece los músculos del trapecio superior.'),
(24, 'Encogimientos abdominales con peso', 'Abdominales, Oblicuos - Ejercicio para los abdominales y oblicuos.'),
(25, 'Press de piernas', 'Cuádriceps femorales, Isquiotibiales, Glúteos - Fortalece las piernas y glúteos.'),
(26, 'Pájaros', 'Deltoides - Desarrolla los hombros.'),
(27, 'Pullover', 'Dorsales, Pectorales mayores - Trabaja los músculos de la espalda y el pecho.'),
(28, 'Abdominales oblicuos', 'Abdominales, Oblicuos - Fortalece los abdominales y oblicuos.'),
(29, 'Pulldown con polea alta', 'Dorsales, Bíceps braquial - Trabaja la espalda y los bíceps.'),
(30, 'Elevaciones frontales', 'Deltoides - Ejercicio para desarrollar los hombros frontales.'),
(31, 'Patada de glúteo', 'Glúteos - Fortalece los glúteos.'),
(32, 'Prensa militar sentado', 'Deltoides, Tríceps braquial - Trabaja los hombros y tríceps.'),
(33, 'Elevaciones de talones de pie', 'Gemelos, Sóleo, Tibial posterior - Ejercicio para los músculos de la pantorrilla.'),
(34, 'Remo con mancuerna', 'Dorsales, Bíceps braquial - Ejercicio de espalda que también activa los bíceps.'),
(35, 'Pájaros en polea baja', 'Deltoides - Trabaja los hombros.'),
(36, 'Abdominales inversos', 'Abdominales - Fortalece los abdominales inferiores.'),
(37, 'Femoral en máquina', 'Isquiotibiales - Aísla y fortalece los músculos isquiotibiales.'),
(38, 'Flexiones diamante', 'Tríceps braquial, Pectorales mayores - Ejercicio para tríceps y pectorales.'),
(39, 'Elevaciones laterales con mancuerna', 'Deltoides - Desarrolla los hombros laterales.'),
(40, 'Encogimientos con polea alta', 'Trapecio - Fortalece el trapecio superior.'),
(41, 'Desplantes laterales', 'Glúteos, Cuádriceps femorales - Ejercicio para los glúteos y piernas.'),
(42, 'Hiperextensiones', 'Erectores espinales, Isquiotibiales - Fortalece la espalda baja y los isquiotibiales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejr_gpm`
--

CREATE TABLE `ejr_gpm` (
  `ID` int(11) NOT NULL,
  `ID_EJERCICIO` int(11) DEFAULT NULL,
  `ID_GPM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ejr_gpm`
--

INSERT INTO `ejr_gpm` (`ID`, `ID_EJERCICIO`, `ID_GPM`) VALUES
(1, 1, 15),
(2, 2, 5),
(3, 3, 4),
(4, 4, 2),
(5, 5, 20),
(6, 6, 1),
(7, 7, 3),
(8, 7, 9),
(9, 7, 8),
(10, 8, 5),
(11, 8, 9),
(12, 8, 6),
(13, 9, 7),
(14, 9, 16),
(15, 9, 17),
(16, 10, 15),
(17, 10, 20),
(18, 11, 5),
(19, 11, 2),
(20, 12, 4),
(21, 13, 4),
(22, 13, 20),
(23, 14, 5),
(24, 14, 2),
(25, 15, 3),
(26, 15, 9),
(27, 15, 8),
(28, 16, 3),
(29, 16, 9),
(30, 16, 8),
(31, 17, 1),
(32, 18, 9),
(33, 18, 6),
(34, 19, 8),
(35, 19, 9),
(36, 20, 15),
(37, 20, 4),
(38, 20, 20),
(39, 21, 9),
(40, 22, 7),
(41, 22, 16),
(42, 22, 17),
(43, 23, 19),
(44, 24, 1),
(45, 24, 14),
(46, 25, 3),
(47, 25, 9),
(48, 25, 8),
(49, 26, 4),
(50, 27, 5),
(51, 27, 15),
(52, 28, 1),
(53, 28, 14),
(54, 29, 5),
(55, 29, 2),
(56, 30, 4),
(57, 31, 8),
(58, 32, 4),
(59, 32, 20),
(60, 33, 7),
(61, 33, 16),
(62, 33, 17),
(63, 34, 5),
(64, 34, 2),
(65, 35, 4),
(66, 36, 1),
(67, 37, 9),
(68, 38, 20),
(69, 38, 15),
(70, 39, 4),
(71, 40, 19),
(72, 41, 8),
(73, 41, 3),
(74, 42, 6),
(75, 42, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamiento`
--

CREATE TABLE `entrenamiento` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `ID_EJERCICIO` int(11) DEFAULT NULL,
  `SERIE` int(11) DEFAULT NULL,
  `REPETICIONES` int(11) DEFAULT NULL,
  `KG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrenamiento`
--

INSERT INTO `entrenamiento` (`ID`, `NOMBRE`, `ID_EJERCICIO`, `SERIE`, `REPETICIONES`, `KG`) VALUES
(4, 'Ent1', 10, 3, 15, 80),
(5, 'Ent1', 28, 4, 15, 60),
(6, 'Ent2', 10, 3, 10, 100),
(7, 'Ent2', 8, 8, 5, 200),
(8, 'Ent2', 8, 8, 5, 200),
(10, 'Entrenamiento2', 7, 2, 200, 200),
(11, 'test', 6, 1, 2, 3),
(12, 'test2', 14, 4, 2, 100),
(13, 'Test3', 16, 4, 20, 20),
(14, 'Test3', 16, 4, 20, 20),
(15, 'Test3', 16, 4, 20, 20),
(16, 'testf', 9, 2, 2, 2),
(17, 'hola', 6, 27, 87, 97);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `entrenamientos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `entrenamientos` (
`ID` int(11)
,`NombreEntrenamiento` varchar(50)
,`NombreEjercicio` varchar(50)
,`Serie` int(11)
,`Repeticiones` int(11)
,`Peso` int(11)
,`ID_USUARIO` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ent_ejr`
--

CREATE TABLE `ent_ejr` (
  `ID` int(11) NOT NULL,
  `ID_ENTRENAMIENTO` int(11) DEFAULT NULL,
  `ID_EJERCICIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_muscular`
--

CREATE TABLE `grupo_muscular` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo_muscular`
--

INSERT INTO `grupo_muscular` (`id`, `nombre`) VALUES
(1, 'Abdominales'),
(2, 'Bíceps braquial'),
(3, 'Cuádriceps femoral'),
(4, 'Deltoides'),
(5, 'Dorsales'),
(6, 'Erectores espinales'),
(7, 'Gemelos'),
(8, 'Glúteos'),
(9, 'Isquiotibiales'),
(10, 'Músculos de la cara'),
(11, 'Músculos de la mano'),
(12, 'Músculos del cuello'),
(13, 'Músculos del pie'),
(14, 'Oblicuos'),
(15, 'Pectorales mayores'),
(16, 'Sóleo'),
(17, 'Tibial posterior'),
(18, 'Tibiales anteriores'),
(19, 'Trapecio'),
(20, 'Tríceps braquial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `contenido` text DEFAULT NULL,
  `likes` int(11) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_comunidad` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `contenido`, `likes`, `creado`, `id_comunidad`, `id_usuario`) VALUES
(1, 'hola', 0, '2024-05-08 08:22:18', 3, 1),
(2, 'holaa', 0, '2024-05-09 13:23:14', 3, 1),
(3, 'Yo he empezado la dieta de la manzana', 0, '2024-05-09 13:33:37', 5, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `publicaciones_ref`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `publicaciones_ref` (
`nombre` varchar(20)
,`id` int(11)
,`contenido` text
,`likes` int(11)
,`creado` timestamp
,`id_comunidad` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `id_comunidad` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `contraseña`, `id_comunidad`) VALUES
(1, 'Anonimo', '', '', 1),
(2, 'Malykiki', 'malyk@gmail.com', 'Lepanto', 1),
(3, 'usuario2', 'usu2@gmail.com', 'Lepanto', 1),
(4, 'malyk2', 'malyk2@gmail.com', 'Lepanto', 1),
(5, 'malyk1@gmail.com', 'malyk1@gmail.com', 'Lepanto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_ent`
--

CREATE TABLE `usu_ent` (
  `ID` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `ID_ENTRENAMIENTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usu_ent`
--

INSERT INTO `usu_ent` (`ID`, `ID_USUARIO`, `ID_ENTRENAMIENTO`) VALUES
(2, 2, 4),
(3, 2, 5),
(4, 3, 6),
(5, 3, 7),
(6, 3, 8),
(13, 3, 13),
(14, 3, 16),
(15, 5, 17);

-- --------------------------------------------------------

--
-- Estructura para la vista `datos`
--
DROP TABLE IF EXISTS `datos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datos`  AS SELECT `gm`.`id` AS `id_gpm`, `gm`.`nombre` AS `grupo_muscular`, `e`.`id` AS `id_ejer`, `e`.`nombre` AS `ejercicio`, `e`.`descripcion` AS `descripcion` FROM ((`grupo_muscular` `gm` join `ejr_gpm` `em` on(`gm`.`id` = `em`.`ID_GPM`)) join `ejercicio` `e` on(`em`.`ID_EJERCICIO` = `e`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `entrenamientos`
--
DROP TABLE IF EXISTS `entrenamientos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `entrenamientos`  AS SELECT `e`.`ID` AS `ID`, `e`.`NOMBRE` AS `NombreEntrenamiento`, `ej`.`nombre` AS `NombreEjercicio`, `e`.`SERIE` AS `Serie`, `e`.`REPETICIONES` AS `Repeticiones`, `e`.`KG` AS `Peso`, `u`.`ID_USUARIO` AS `ID_USUARIO` FROM ((`entrenamiento` `e` join `ejercicio` `ej` on(`e`.`ID_EJERCICIO` = `ej`.`id`)) join `usu_ent` `u` on(`e`.`ID` = `u`.`ID_ENTRENAMIENTO`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `publicaciones_ref`
--
DROP TABLE IF EXISTS `publicaciones_ref`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `publicaciones_ref`  AS SELECT `u`.`nombre` AS `nombre`, `p`.`id` AS `id`, `p`.`contenido` AS `contenido`, `p`.`likes` AS `likes`, `p`.`creado` AS `creado`, `p`.`id_comunidad` AS `id_comunidad` FROM (`usuario` `u` join `publicaciones` `p` on(`u`.`id` = `p`.`id_usuario`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ejr_gpm`
--
ALTER TABLE `ejr_gpm`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_EJERCICIO` (`ID_EJERCICIO`),
  ADD KEY `ID_GPM` (`ID_GPM`);

--
-- Indices de la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_EJERCICIO` (`ID_EJERCICIO`);

--
-- Indices de la tabla `ent_ejr`
--
ALTER TABLE `ent_ejr`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_ENTRENAMIENTO` (`ID_ENTRENAMIENTO`),
  ADD KEY `ID_EJERCICIO` (`ID_EJERCICIO`);

--
-- Indices de la tabla `grupo_muscular`
--
ALTER TABLE `grupo_muscular`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comunidad` (`id_comunidad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comunidad` (`id_comunidad`);

--
-- Indices de la tabla `usu_ent`
--
ALTER TABLE `usu_ent`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ID_ENTRENAMIENTO` (`ID_ENTRENAMIENTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `ejr_gpm`
--
ALTER TABLE `ejr_gpm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `ent_ejr`
--
ALTER TABLE `ent_ejr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo_muscular`
--
ALTER TABLE `grupo_muscular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usu_ent`
--
ALTER TABLE `usu_ent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejr_gpm`
--
ALTER TABLE `ejr_gpm`
  ADD CONSTRAINT `ejr_gpm_ibfk_1` FOREIGN KEY (`ID_EJERCICIO`) REFERENCES `ejercicio` (`id`),
  ADD CONSTRAINT `ejr_gpm_ibfk_2` FOREIGN KEY (`ID_GPM`) REFERENCES `grupo_muscular` (`id`);

--
-- Filtros para la tabla `ent_ejr`
--
ALTER TABLE `ent_ejr`
  ADD CONSTRAINT `ent_ejr_ibfk_1` FOREIGN KEY (`ID_ENTRENAMIENTO`) REFERENCES `entrenamiento` (`ID`),
  ADD CONSTRAINT `ent_ejr_ibfk_2` FOREIGN KEY (`ID_EJERCICIO`) REFERENCES `ejercicio` (`id`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`ID`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`ID`);

--
-- Filtros para la tabla `usu_ent`
--
ALTER TABLE `usu_ent`
  ADD CONSTRAINT `usu_ent_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usu_ent_ibfk_2` FOREIGN KEY (`ID_ENTRENAMIENTO`) REFERENCES `entrenamiento` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
