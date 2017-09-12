-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-09-2017 a las 19:23:17
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anamnesis`
--

CREATE TABLE `anamnesis` (
  `id` bigint(20) NOT NULL,
  `identidad` varchar(20) NOT NULL,
  `apetito` varchar(200) NOT NULL,
  `miccion` varchar(200) NOT NULL,
  `defecacion` varchar(200) NOT NULL,
  `sueno` varchar(200) NOT NULL,
  `enfe_cronicas` varchar(200) NOT NULL,
  `medicamentos` varchar(200) NOT NULL,
  `ante_alergicos` varchar(200) NOT NULL,
  `habitos_toxicos` varchar(200) NOT NULL,
  `ant_hospitalarios` varchar(200) NOT NULL,
  `historial_enfermedades` varchar(200) NOT NULL,
  `antecedentes_familiares` varchar(200) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos`
--

CREATE TABLE `diagnosticos` (
  `id` bigint(11) NOT NULL,
  `identidad` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `patologico` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nutricional` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `socieconomico` varchar(201) COLLATE utf8_spanish2_ci NOT NULL,
  `inmunologico` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `etario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` bigint(20) NOT NULL,
  `identidad` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `estrabismo` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `perdida_auditiva` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `transtorno_fonacion` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `pediculosis` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `sarna` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `anemia` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `violencia` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `problemas_personalidad` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `problemas_aprendizaje` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `uso_drogas` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id` bigint(20) NOT NULL,
  `identidad` varchar(20) NOT NULL,
  `pa` varchar(10) NOT NULL,
  `fr` varchar(10) NOT NULL,
  `temperatura` varchar(10) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `talla` varchar(10) NOT NULL,
  `imc` varchar(10) NOT NULL,
  `cabeza` varchar(200) NOT NULL,
  `oidos` varchar(200) NOT NULL,
  `nariz` varchar(200) NOT NULL,
  `coello` varchar(200) NOT NULL,
  `torax` varchar(200) NOT NULL,
  `corazon` varchar(200) NOT NULL,
  `abdomen` varchar(200) NOT NULL,
  `genitales` varchar(200) NOT NULL,
  `extremidades` varchar(200) NOT NULL,
  `piel` varchar(200) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `faringe` varchar(200) NOT NULL,
  `escoliosis` varchar(200) NOT NULL,
  `dental` varchar(200) NOT NULL,
  `ojo_izquierdo` varchar(20) NOT NULL,
  `ojo_derecho` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `identidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(39) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `responsable` varchar(39) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_responsable` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` int(11) NOT NULL,
  `escuela` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `identidad` bigint(20) NOT NULL,
  `usuario` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(8) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identidad`, `usuario`, `contrasena`) VALUES
(80119905615, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `id` bigint(20) NOT NULL,
  `identidad` varchar(20) NOT NULL,
  `hepatitisB` tinyint(1) NOT NULL DEFAULT '0',
  `poliomielitis` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anamnesis`
--
ALTER TABLE `anamnesis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anamnesis`
--
ALTER TABLE `anamnesis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
