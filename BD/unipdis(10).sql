-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2024 a las 21:39:10
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
(1, 'Contaduría Pública'),
(2, 'Ing. Sistemas'),
(3, 'Administración'),
(4, 'Gerencia de Recursos Humanos'),
(5, 'Ing. Computación'),
(6, 'Educación Preescolar'),
(7, 'Educación Integral');

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

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_citas`, `id_estudiante`, `fecha_cita`, `motivo_cita`) VALUES
(5, 3, '2024-11-05', 'Rutina'),
(6, 5, '2024-08-10', 'Rutina');

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
(2, 'Fisico-motor'),
(4, 'Dislexia');

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
  `nombre_contacto` varchar(50) NOT NULL,
  `telefono_contacto` varchar(15) DEFAULT NULL,
  `discapacidad_id` int(11) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `seguimiento` text DEFAULT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `nombre_contacto`, `telefono_contacto`, `discapacidad_id`, `edad`, `observaciones`, `seguimiento`, `fecha_registro`) VALUES
(1, 'Eric', 'Chaparro', '30474879', '0412-8792562', 'ericchaparro879@ujgh.edu.ve', 'Jose Miguel', '0424-6598123', 2, 22, 'normal', 'normal', '2023-05-22'),
(2, 'Antonio', 'Lopez', '29356879', '0412-5687912', 'antoniolopez879@ujgh.edu.ve', 'Juliana vargas', '0414-7894532', 1, 25, 'anormal', 'anormal', '2024-06-13'),
(3, 'Jose', 'Peréz', '26497516', '0424-6547823', 'joseperéz823@ujgh.edu.ve', 'Juan Peréz', '0416-7531937', 1, 26, 'casi normal', 'casi normal', '2022-03-05'),
(5, 'Victor', 'Chacin', '30456173', '0412-8794596', 'victor@gmail.com', 'Ofelia Barboza', '0412-8722654', 2, 20, 'normal', 'normal', '2024-02-21'),
(8, 'Juan', 'Melendez', '27456182', '0412-2223333', 'juanmelendez182@ujgh.edu.ve', 'Maria Melendez', '0112-3332222', 1, 20, 'nada ', 'nada', '2024-02-25'),
(9, 'Larry', 'Gimenez', '24879156', '0412-5612389', 'larrygimenez156@ujgh.edu', 'aea aea', '0416-7531937', 4, 26, 'afefaf', 'aefefa', '2024-03-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `facultades` varchar(50) NOT NULL,
  `Siglas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id_facultad`, `facultades`, `Siglas`) VALUES
(1, 'Humanidades, Arte y Educación', 'FHAE'),
(2, 'Ingeniería ', 'FING'),
(3, 'Ciencias Económicas y Sociales', 'FACES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_medico`
--

CREATE TABLE `historial_medico` (
  `id_historialmedico` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `certificado_conapdis` varchar(2) NOT NULL,
  `informe_medico` text NOT NULL,
  `tratamiento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historial_medico`
--

INSERT INTO `historial_medico` (`id_historialmedico`, `id_estudiante`, `certificado_conapdis`, `informe_medico`, `tratamiento`) VALUES
(2, 1, 'si', 'ejemplo', 'ejemplo'),
(3, 5, 'no', 'ejemplo 2', 'ejemplo 2');

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
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id_incidencia`, `id_estudiante`, `hora_incidente`, `fecha_incidente`, `donde_incidente`, `descripcion_incidente`, `acuerdos`, `observaciones`) VALUES
(2, 2, '04:00:00', '2023-08-21', 'Laboratorio de fisica', 'Desmayo ', 'ninguno', 'anormal'),
(3, 1, '02:00:00', '2023-05-11', 'Laboratorio de computacion', 'descripcion ejemplo', 'ejemplo', 'ejemplo'),
(4, 8, '02:00:00', '2023-05-05', 'Laboratorio de computacion 2', 'ejemplo de incidente', 'ejemplo de acuerdo', 'ejejmplo de observaciones');

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

--
-- Volcado de datos para la tabla `otros_parientes`
--

INSERT INTO `otros_parientes` (`id_pariente`, `id_estudiante`, `nombre_pariente`, `apellido_pariente`, `fecha_nacimiento`, `ocupacion`, `parentesco`) VALUES
(5, 1, 'Jhonatan', ' Guzman', '1992-05-03', 'Programador', 'Tio politico'),
(6, 3, 'Angel ', ' Blanco', '1990-01-08', 'Oficinista', 'Tio por parte madre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_padres` int(11) NOT NULL,
  `tipo_familiar` varchar(20) NOT NULL,
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

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id_padres`, `tipo_familiar`, `cedula_padre`, `lugar_nacimiento`, `fecha_nacimiento`, `direccion_habitacion`, `telefono_contacto`, `lugar_trabajo`, `estado`, `municipio`, `departamento`, `estadodo_civil`, `id_estudiante`) VALUES
(1, 'padre', 154678945, 'Caracas, Hospital 1', '1995-06-22', 'Direccion de Ejemplo 1', '0412-8794397', 'Alimentos Polar', 'Zulia', 'San Francisco', 'Departamento de ejemplo', 'Casado', 3),
(2, 'Madre', 14568791, 'Carabobo', '1995-02-15', 'Direccion de Ejemplo', '0416-3574612', 'Gran Bazar', 'Zulia', 'Maracaibo', 'Departamento de ejemplo', 'Soltera', 2),
(4, 'afawdfa', 0, 'fawfafa', '1995-02-15', 'afafwafa', 'afawefafa', 'fwafeafa', 'afwaef', 'faefaef', 'faefa', 'aefaefa', 9);

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
(1, 'PAR-I-2024'),
(2, 'PAR-III-2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidad`
--

CREATE TABLE `universidad` (
  `id_estudiante` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `facultad_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`id_estudiante`, `carrera_id`, `facultad_id`, `periodo_id`) VALUES
(1, 2, 2, 1),
(2, 3, 3, 1),
(3, 6, 1, 1),
(8, 1, 3, 1),
(9, 7, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `cedula_usuario` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `cedula_usuario`, `password`) VALUES
(12, 'Johan', 'Hance', '30843558', 'johan123');

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
  ADD KEY `discapacidad_id` (`discapacidad_id`);

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
-- Indices de la tabla `universidad`
--
ALTER TABLE `universidad`
  ADD KEY `carrera_id` (`carrera_id`),
  ADD KEY `facultad_id` (`facultad_id`),
  ADD KEY `periodo_id` (`periodo_id`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_citas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  MODIFY `id_discapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  MODIFY `id_historialmedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `otros_parientes`
--
ALTER TABLE `otros_parientes`
  MODIFY `id_pariente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_padres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `estudiantes_ibfk_3` FOREIGN KEY (`discapacidad_id`) REFERENCES `discapacidad` (`id_discapacidad`);

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

--
-- Filtros para la tabla `universidad`
--
ALTER TABLE `universidad`
  ADD CONSTRAINT `universidad_ibfk_1` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id_carrera`),
  ADD CONSTRAINT `universidad_ibfk_2` FOREIGN KEY (`facultad_id`) REFERENCES `facultad` (`id_facultad`),
  ADD CONSTRAINT `universidad_ibfk_3` FOREIGN KEY (`periodo_id`) REFERENCES `periodo` (`id_periodo`),
  ADD CONSTRAINT `universidad_ibfk_4` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
