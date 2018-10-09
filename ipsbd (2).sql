-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2018 a las 17:32:46
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ipsbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `area_nom` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `area_nom`) VALUES
(1, 'Medicina General'),
(2, 'Ginecología'),
(3, 'Pediatría'),
(4, 'Ortopedia'),
(5, 'Medicina Interna'),
(6, 'Psicología'),
(7, 'Nutrición'),
(8, 'Bacteriología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `paciente` varchar(350) COLLATE latin1_spanish_ci NOT NULL,
  `area` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `estado_pago` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `costo` bigint(20) NOT NULL,
  `usermedico` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `medico` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `paciente`, `area`, `fecha`, `hora`, `estado`, `estado_pago`, `costo`, `usermedico`, `medico`) VALUES
(1, '123', 'Medicina General - Eric Segundo Gonzalez Martinez', '2018-09-28', '16:30:00', 'Pendiente', 'Pagado', 30000, NULL, NULL),
(2, '4356', 'Ginecologia - Marta Patricia Fernandez Gomez', '2018-09-27', '16:30:00', 'Pendiente', 'Pagado', 60000, NULL, NULL),
(3, '234', 'Ortopedia - Alan JosÃ© Marquez Lopez', '2018-09-28', '08:00:00', 'Pendiente', 'Pagado', 30000, NULL, NULL),
(4, '4356 - Javier Fernando Marquez De Papel', 'Ortopedia - Alan JosÃ© Marquez Lopez', '2018-09-28', '09:30:00', 'Pendiente', 'Pagado', 60000, NULL, NULL),
(5, '1065798908 - Maria Andrea Soto Suarez', 'Ortopedia - Alan JosÃ© Marquez Lopez', '2018-10-11', '14:00:00', 'Pendiente', 'Pendiente', 50000, NULL, NULL),
(6, '345 - Amando ahora Casas De Papel', '', '2018-10-17', '17:00:00', 'Pendiente', 'Pagado', 60000, '', 'Eric Segundo Gonzalez Martinez'),
(7, '789 - Maria Lorena Torres Morales', 'Medicina General', '2018-10-17', '14:00:00', 'Pendiente', 'Pagado', 60000, '', 'Eric Segundo Gonzalez Martinez'),
(8, '1065000900 - Juan Manuel Gonzalez Perez', 'Medicina General', '2018-10-17', '14:00:00', 'Pendiente', 'Pagado', 60000, 'eric', 'Eric Segundo Gonzalez Martinez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `numdoc` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `nom1` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nom2` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido1` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido2` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `sexo` varchar(1) COLLATE latin1_spanish_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `e_mail` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `direc` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `estado` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `area` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_doc` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `user` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `numdoc`, `nom1`, `nom2`, `apellido1`, `apellido2`, `sexo`, `fec_nac`, `e_mail`, `direc`, `telefono`, `estado`, `area`, `tipo_doc`, `user`, `password`) VALUES
(2, '768', 'Eric', 'Segundo', 'Gonzalez', 'Martinez', 'm', '1967-06-05', 'eric@mail.com', 'calle 34', '3452387', 'Activo', 'Medicina General', '', 'eric', '1234'),
(3, '453', 'Marta', 'Luisa', 'Castro', 'Martinez', 'f', '1990-12-23', 'mluisa@mail.com', 'cra 4a', '65863245', 'Activo', 'Psicologia', '', 'mluisa', '1234'),
(4, '654', 'Alan', 'JosÃ©', 'Marquez', 'Lopez', 'm', '1989-06-12', 'marquez@gmail.com', 'calle 12', '3248790', 'Activo', 'Ortopedia', '', 'marquez', '1234'),
(5, '854939', 'Marta', 'Patricia', 'Fernandez', 'Gomez', 'm', '1981-09-13', 'marta@gmail.com', '56 street', '65863245', 'Activo', 'Ginecologia', '', 'marta', '1234'),
(6, '67548', 'Alvaro', 'David', 'Ortega', 'Gomez', 'm', '1978-09-06', 'alvaro@gmail.com', '56 street', '4357754', 'Activo', 'Ortopedia', '', 'alvaro', '1234'),
(7, '56775', 'Sebastian', 'Alvaro', 'Barros', 'Martinez', 'm', '1978-12-31', 'sebas@gmail.com', 'calle 1', '58483272', 'Activo', 'Bacteriologï¿½a', '', 'sebas', '1234'),
(8, '85994', 'Miguel', 'Angel', 'De las Casas', 'Gonzalez', 'm', '1967-12-31', 'miguel@gmail.com', 'cra 56', '8483922', 'Activo', 'Medicina Interna', 'C.C', 'miguel', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `numdoc` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `nom1` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `nom2` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellido1` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellido2` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `sexo` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `e_mail` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_doc` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `numdoc`, `nom1`, `nom2`, `apellido1`, `apellido2`, `sexo`, `fec_nac`, `e_mail`, `tipo_doc`) VALUES
(1, '123', 'Andres', 'Alfredo', 'Soto', 'Suarez', 'm', '2005-07-15', 'andres@mail.com', ''),
(2, '234', 'Tomas', 'Alfonso', 'Soto', 'Suarez', 'm', '1998-11-16', 'andres@mail.com', ''),
(3, '345', 'Amando', 'ahora', 'Casas', 'De Papel', 'm', '1998-03-12', 'ama@mail.com', ''),
(4, '789', 'Maria', 'Lorena', 'Torres', 'Morales', 'f', '1994-02-16', 'maria@mail.com', ''),
(5, '4356', 'Javier', 'Fernando', 'Marquez', 'De Papel', 'm', '1990-07-07', 'javi@gmail.com', ''),
(6, '1065000900', 'Juan', 'Manuel', 'Gonzalez', 'Perez', 'm', '2018-09-12', 'juan@gmail.com', ''),
(7, '1065798908', 'Maria', 'Andrea', 'Soto', 'Suarez', 'f', '1997-10-23', 'manua@gmail.com', ''),
(8, '8908098', 'iiyiuy', 'uyiuyi', 'yuy', 'yuiyiu', 'm', '2018-02-01', 'ddd@ddd.com', ''),
(9, '5483', 'Hannah', '', 'Montana', 'Cyrus', 'm', '1988-07-23', 'hmontana@gmail.com', 'C.C'),
(10, '4556', 'Indya', '', 'Moore', 'Rodriguez', 'f', '1990-06-15', 'indya@gmail.com', 'C.C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rol`
--

CREATE TABLE `tipo_rol` (
  `id` int(11) NOT NULL,
  `nom_rol` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_rol`
--

INSERT INTO `tipo_rol` (`id`, `nom_rol`) VALUES
(1, 'Gerente'),
(2, 'Sub-Gerente'),
(3, 'Contador'),
(4, 'Jefe Financiero'),
(5, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` varchar(10) NOT NULL,
  `USUARIO` varchar(15) NOT NULL,
  `CONTRASENA` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `USUARIO`, `CONTRASENA`) VALUES
('1', 'eduard', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo_doc` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `num_doc` varchar(12) COLLATE latin1_spanish_ci NOT NULL,
  `nom1` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nom2` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido1` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido2` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `sexo` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `e_mail` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `user` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `rol` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo_doc`, `num_doc`, `nom1`, `nom2`, `apellido1`, `apellido2`, `sexo`, `fec_nac`, `e_mail`, `user`, `rol`, `password`) VALUES
(1, 'C.C', '56474', 'Eric', 'Alfonso', 'Casas', 'Morales', 'm', '1987-08-07', 'ericccc@mail.com', 'eric', 'Sub-Gerente', '1234'),
(2, 'C.C', '435643', 'Carlos', 'Manuel', 'Hurtado', 'Soto', 'm', '1967-05-12', 'carlos@gmail.com', 'carlos', 'Secretaria', '1234'),
(3, 'C.C', '677564', 'Eric', 'Alfonso', 'Casas', 'Martinez', 'm', '1987-04-12', 'eric@mail.com', 'ecasas', 'Gerente', '1234'),
(4, 'C.C', '5465', 'retre', '', 'gfg', 'fgrh', 'm', '2018-10-02', 'tht@fr.vc', 'retre', 'Jefe Financiero', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
