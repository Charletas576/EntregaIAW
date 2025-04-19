-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2024 a las 12:42:41
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
-- Base de datos: `pagina2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `ID` int(11) NOT NULL,
  `TÍTULO` varchar(100) NOT NULL,
  `DESCRIPCIÓN` text NOT NULL,
  `ENLACE_IMAGEN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`ID`, `TÍTULO`, `DESCRIPCIÓN`, `ENLACE_IMAGEN`) VALUES
(1, 'Gestor de Horarios Avanzado', 'Este gestor de horarios permite al usuario seleccionar sus preferencias de horarios y actualizar automáticamente el contenido mediante cuadros combinados en Excel. Las macros optimizan el proceso, asegurando una gestión eficiente de los horarios. Este sistema es altamente flexible y permite ajustes rápidos y personalizados para cada usuario.', 'https://wp-int-blog.s3.eu-central-1.amazonaws.com/wp-content/uploads/2023/10/06145017/excel-podstawy-scaled.jpg'),
(2, 'Simulador de Menú de Secadora (Arduino)', 'Este proyecto utiliza una placa Arduino para simular el menú interactivo de una secadora casera. El sistema permite gestionar diferentes parámetros como el tiempo de funcionamiento, la temperatura, el control de la bomba de agua y los niveles de calor. El objetivo es crear una experiencia de simulación cercana a un dispositivo real, con una interfaz fácil de usar para el control de las diferentes opciones.', 'https://c8.alamy.com/comp/F774A0/arduino-uno-microcontroller-board-F774A0.jpg'),
(3, 'Script de Gestión de Usuarios y Redes en Linux', 'Este proyecto consiste en un script que permite gestionar usuarios, grupos y configuraciones de red en un entorno Linux. El script es capaz de detectar si el entorno tiene una interfaz gráfica disponible, utilizando Zenity para mostrar ventanas gráficas o Dialog en modo terminal para asegurar la flexibilidad en diferentes entornos. También incluye opciones avanzadas para gestionar servidores y redes.', 'https://db0dce98.rocketcdn.me/es/files/2024/08/bash_scripting_datascientest-1024x585.jpg'),
(4, 'Calculadora de Presupuestos', 'Esta herramienta web permite a los usuarios calcular presupuestos de proyectos en base a diferentes factores, como costos de materiales, mano de obra y duración del proyecto. Ideal para pequeñas empresas que buscan optimizar sus presupuestos de manera rápida y eficiente.', 'https://via.placeholder.com/150?text=Calculadora+de+Presupuestos'),
(5, 'Sistema de Gestión de Inventarios', 'Un sistema que facilita el control de inventario para pequeños comercios. Permite registrar, buscar y actualizar el stock de productos, además de generar reportes automáticos. Este sistema reduce el error humano y mejora la eficiencia en la gestión de inventarios.', 'https://via.placeholder.com/150?text=Gestión+de+Inventarios'),
(6, 'prueba1', 'aaaaaa', 'https://wp-int-blog.s3.eu-central-1.amazonaws.com/wp-content/uploads/2023/10/06145017/excel-podstawy-scaled.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
