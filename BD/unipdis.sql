-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2024 a las 22:49:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unipdis`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_estudiante` (IN `p_nombres` VARCHAR(50), IN `p_apellidos` VARCHAR(50), IN `p_cedula` VARCHAR(10), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(50), IN `p_periodo` INT, IN `p_facultad` INT, IN `p_carrera` INT, IN `p_nomb_contacto` VARCHAR(50), IN `p_tlf_contacto` VARCHAR(15), IN `p_discapacidad` INT, IN `p_edad` INT, IN `p_observaciones` TEXT, IN `p_seguimiento` TEXT, IN `p_fecha_registro` DATE)   BEGIN
  INSERT INTO estudiantes(nombres, apellidos, cedula, telefono, correo, periodo_id, facultad_id, carrera_id, nombre_contacto, telefono_contacto, discapacidad_id, edad, observaciones, seguimiento, fecha_registro)
  VALUES(p_nombres, p_apellidos, p_cedula, p_telefono, p_correo, p_periodo, p_facultad, p_carrera, p_nomb_contacto, p_tlf_contacto, p_discapacidad, p_edad,  p_observaciones, p_seguimiento, p_fecha_registro);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `carreras` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `carreras`) VALUES
(1, 'Contaduria'),
(2, 'Ing. Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_citas` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha_cita` date NOT NULL,
  `motivo_cita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

CREATE TABLE `discapacidad` (
  `id_discapacidad` int(11) NOT NULL,
  `discapacidades` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `discapacidad`
--

INSERT INTO `discapacidad` (`id_discapacidad`, `discapacidades`) VALUES
(1, 'autismo/asperger'),
(2, 'Fisico-motor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `periodo_id` int(11) NOT NULL,
  `facultad_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `telefono_contacto` varchar(15) DEFAULT NULL,
  `discapacidad_id` int(11) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `seguimiento` text DEFAULT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `facultades` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id_facultad`, `facultades`) VALUES
(1, 'Humanidades'),
(2, 'ingenieria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_medico`
--

CREATE TABLE `historial_medico` (
  `id_historialmedico` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `certificado_conapdis` varchar(2) NOT NULL,
  `informe_medico` varchar(2) NOT NULL,
  `tratamiento` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id_incidencia` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `hora_incidente` time NOT NULL,
  `fecha_incidente` date NOT NULL,
  `donde_incidente` text NOT NULL,
  `descripcion_incidente` text NOT NULL,
  `acuerdos` text NOT NULL,
  `observaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_parientes`
--

CREATE TABLE `otros_parientes` (
  `id_pariente` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `nombre_pariente` varchar(30) NOT NULL,
  `apellido_pariente` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `parentesco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_padres` int(11) NOT NULL,
  `tipo_padre` enum('M','P') NOT NULL,
  `nombre_padre` varchar(30) NOT NULL,
  `apellido_padre` varchar(40) NOT NULL,
  `cedula_padre` int(11) NOT NULL,
  `lugar_nacimiento` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion_habitacion` varchar(100) NOT NULL,
  `telefono_contacto` varchar(15) NOT NULL,
  `lugar_trabajo` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `estadodo_civil` varchar(20) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `periodos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `periodos`) VALUES
(1, 'PAR-I-2024');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_citas`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  ADD PRIMARY KEY (`id_discapacidad`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `periodo_id` (`periodo_id`),
  ADD KEY `carrera_id` (`carrera_id`),
  ADD KEY `discapacidad_id` (`discapacidad_id`),
  ADD KEY `facultad_id` (`facultad_id`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`);

--
-- Indices de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD PRIMARY KEY (`id_historialmedico`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id_incidencia`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `otros_parientes`
--
ALTER TABLE `otros_parientes`
  ADD PRIMARY KEY (`id_pariente`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id_padres`),
  ADD UNIQUE KEY `cedula` (`cedula_padre`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_citas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  MODIFY `id_discapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  MODIFY `id_historialmedico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `otros_parientes`
--
ALTER TABLE `otros_parientes`
  MODIFY `id_pariente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_padres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`periodo_id`) REFERENCES `periodo` (`id_periodo`),
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id_carrera`),
  ADD CONSTRAINT `estudiantes_ibfk_3` FOREIGN KEY (`discapacidad_id`) REFERENCES `discapacidad` (`id_discapacidad`),
  ADD CONSTRAINT `estudiantes_ibfk_4` FOREIGN KEY (`facultad_id`) REFERENCES `facultad` (`id_facultad`);

--
-- Filtros para la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD CONSTRAINT `historial_medico_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);

--
-- Filtros para la tabla `otros_parientes`
--
ALTER TABLE `otros_parientes`
  ADD CONSTRAINT `otros_parientes_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
