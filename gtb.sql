-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 12:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtb`
--
CREATE DATABASE IF NOT EXISTS `gtb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gtb`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idv` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `idprod` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idv`, `user_id`, `idprod`, `name`, `price`, `quantity`) VALUES
(1, 1, 1, 'Producto1', 10, 2),
(4, 4, 4, 'Producto4', 13, 4),
(5, 5, 5, 'Producto5', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_compra`
--

CREATE TABLE `cart_compra` (
  `idcarco` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `idprod` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_compra`
--

INSERT INTO `cart_compra` (`idcarco`, `user_id`, `idprod`, `name`, `price`, `quantity`) VALUES
(2, 3, 3, 'Producto3', 25, 2),
(3, 4, 4, 'Producto4', 13, 4),
(4, 5, 5, 'Producto5', 18, 1),
(7, 2, 5, 'creatina 1Kg', 18000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `idcate` int(11) NOT NULL,
  `nomca` text NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idcate`, `nomca`, `estado`, `fere`) VALUES
(1, 'FITNESS', 'Activo', '2024-03-15 08:27:45'),
(2, 'CROSSFIT', 'Activo', '2024-03-15 08:27:46'),
(3, 'BOXING', 'Activo', '2024-03-15 08:27:46'),
(4, 'ENDURANCE', 'Activo', '2024-03-15 08:27:46'),
(5, 'YOGA', 'Inactivo', '2024-03-20 02:47:23'),
(6, 'CARDIO', 'Inactivo', '2024-03-20 02:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `idclie` int(11) NOT NULL,
  `numid` char(8) NOT NULL,
  `nomcli` text NOT NULL,
  `apecli` text NOT NULL,
  `naci` date NOT NULL,
  `correo` varchar(30) NOT NULL,
  `celu` varchar(10) DEFAULT NULL,
  `estad` varchar(15) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`idclie`, `numid`, `nomcli`, `apecli`, `naci`, `correo`, `celu`, `estad`, `fere`) VALUES
(1, '1231213', 'holman', 'grimaldo', '2019-03-20', 'grimaldox@gmail', '3026169292', 'Activo', '2024-03-14 04:02:53'),
(2, '78901234', 'Ana', 'Perez', '1990-05-25', 'ana@example.com', '3026169292', 'Inactivo', '2024-03-14 04:30:20'),
(3, '56789012', 'Pedro', 'Gomez', '1985-10-12', 'pedro@example.com', '3138678601', 'Inactivo', '2023-08-18 12:45:10'),
(4, '34567890', 'Laura', 'Lopez', '2000-03-08', 'laura@example.com', '3002097407', 'Activo', '2024-09-12 15:20:30'),
(5, '90123456', 'Carlos', 'Martinez', '1978-12-03', 'carlos@example.com', '3058250638', 'Activo', '2023-10-25 18:10:15'),
(6, '10226032', 'Francisco Franco', 'Pacheco Diaz', '2002-12-03', 'mr.qnns008@gmail.com', '3222024365', 'Activo', '2024-03-20 06:56:47'),
(7, '12312131', 'Juan Rodrigo', 'Martinez Garcia', '2024-03-24', 'juan112@gmail.com', '3053622667', 'Activo', '2024-03-20 11:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `idcomp` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `method` text NOT NULL,
  `total_products` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `placed_on` text NOT NULL,
  `payment_status` text NOT NULL,
  `tipc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `compra`
--

INSERT INTO `compra` (`idcomp`, `user_id`, `method`, `total_products`, `total_price`, `placed_on`, `payment_status`, `tipc`) VALUES
(1, 1, 'Tarjeta', 'Producto1', 20.00, '2024-03-15', 'Pagado', 'Tipc'),
(2, 2, 'Efectivo', 'Producto2, Producto3', 70.00, '2024-03-14', 'Pendiente', 'Tipc'),
(3, 3, 'Transferencia', 'Producto4, Producto5', 60.50, '2023-08-18', 'Pagado', 'Tipc'),
(4, 4, 'Tarjeta', 'Producto2, Producto3, Producto5', 58.50, '2023-09-22', 'Pagado', 'Tipc'),
(5, 5, 'Efectivo', 'Producto4', 12.50, '2023-10-25', 'Pagado', 'Tipc'),
(6, 2, 'Transferencia', ', Producto2 ( 3 ), Producto4 ( 1 ), creatina 1Kg ( 1 )', 75500.00, '2024-03-19', 'Aceptado', 'Ticket');

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `idga` int(11) NOT NULL,
  `detall` text NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gastos`
--

INSERT INTO `gastos` (`idga`, `detall`, `total`, `fec`) VALUES
(1, 'Gasto1', 10000.00, '2024-03-15'),
(2, 'Gasto2', 20000.00, '2024-03-15'),
(3, 'Gasto3', 15000.00, '2023-08-18'),
(4, 'Gasto4', 18500.00, '2023-09-22'),
(5, 'Gasto5', 22000.00, '2023-10-25'),
(6, 'COMPRA DE PRODUCTOS', 75500.00, '2024-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `ingresos`
--

CREATE TABLE `ingresos` (
  `iding` int(11) NOT NULL,
  `detalle` text NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingresos`
--

INSERT INTO `ingresos` (`iding`, `detalle`, `total`, `fec`) VALUES
(1, 'Ingreso1', 30000.00, '2024-03-15'),
(2, 'Ingreso2', 35000.00, '2024-03-15'),
(3, 'Ingreso3', 28000.00, '2023-08-18'),
(4, 'Ingreso4', 455000.00, '2023-09-22'),
(5, 'Ingreso5', 50000.00, '2023-10-25'),
(6, 'VENTA DE PRODUCTOS', 95000.00, '2024-03-15'),
(7, 'VENTA DE PRODUCTOS', 50000.00, '2024-03-19'),
(8, 'VENTA DE PRODUCTOS', 108500.00, '2024-03-19'),
(9, 'VENTA DE PRODUCTOS', 5000000.00, '2024-03-19'),
(10, 'VENTA DE PRODUCTOS', 372400.00, '2024-03-20'),
(11, 'VENTA DE MEMBRESIAS', 89500.00, '2024-03-20'),
(12, 'VENTA DE MEMBRESIAS', 99500.00, '2024-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idord` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_cli` int(11) NOT NULL,
  `method` text NOT NULL,
  `total_products` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `placed_on` text NOT NULL,
  `payment_status` text NOT NULL,
  `tipc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idord`, `user_id`, `user_cli`, `method`, `total_products`, `total_price`, `placed_on`, `payment_status`, `tipc`) VALUES
(1, 1, 1, 'Tarjeta', 'Producto1', 20000.00, '2024-03-15', 'Pagado', 'Tipc'),
(2, 2, 2, 'Efectivo', 'Producto2, Producto3', 70000.00, '2024-03-14', 'Pendiente', 'Tipc'),
(3, 3, 3, 'Transferencia', 'Producto4, Producto5', 65000.00, '2023-08-18', 'Pagado', 'Tipc'),
(4, 4, 4, 'Tarjeta', 'Producto2, Producto3, Producto5', 58500.00, '2023-09-22', 'Pagado', 'Tipc'),
(5, 5, 5, 'Efectivo', 'Producto4', 125000.00, '2023-10-25', 'Pagado', 'Tipc'),
(6, 2, 2, 'Efectivo', ', Producto2 ( 3 )', 450000.00, '2024-03-15', 'Aceptado', 'Ticket'),
(7, 3, 5, 'Transferencia', ', Producto3 ( 2 )', 50000.00, '2024-03-19', 'Aceptado', 'Ticket'),
(8, 3, 5, 'Transferencia', ', creatina 1Kg ( 2 ), Producto1 ( 1 ), Producto4 ( 1 ), Producto3 ( 2 )', 108500.00, '2024-03-19', 'Aceptado', 'Ticket'),
(9, 3, 5, 'Efectivo', ', Producto1 ( 500 )', 5000000.00, '2024-03-19', 'Aceptado', 'Ticket'),
(10, 2, 6, 'Efectivo', ', Banda elastica ( 1 ), Rodilleras Deportivas ( 1 ), FIGHTR Envolturas de mano 160 pulgadas ( 1 ), creatina 1Kg ( 1 ), JOTA PRO 1.500g ( 1 )', 372400.00, '2024-03-20', 'Aceptado', 'Ticket');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `idplan` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nompla` text NOT NULL,
  `estp` varchar(15) NOT NULL,
  `prec` decimal(10,2) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`idplan`, `foto`, `nompla`, `estp`, `prec`, `fere`) VALUES
(1, 'plan1.jpg', 'Plan1', 'Activo', 89500.00, '2024-03-15 08:27:45'),
(2, 'plan2.jpg', 'Plan2', 'Inactivo', 49500.00, '2024-03-15 08:27:46'),
(3, 'plan2.jpg', 'Plan3', 'Activo', 99500.00, '2024-03-15 08:27:46'),
(4, 'plan1.jpg', 'Plan4', 'Activo', 129000.00, '2024-03-31 08:27:46'),
(5, 'plan3.jpg', 'Plan5 Plus', 'Inactivo', 89500.00, '2024-03-15 08:27:46'),
(6, 'plan3.jpg', 'Plan 6 Un dia', 'Activo', 6000.00, '2024-03-19 20:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `idprod` int(11) NOT NULL,
  `codba` char(14) NOT NULL,
  `nomprd` text NOT NULL,
  `idcate` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` text NOT NULL,
  `venci` date NOT NULL,
  `esta` varchar(15) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`idprod`, `codba`, `nomprd`, `idcate`, `precio`, `stock`, `foto`, `venci`, `esta`, `fere`) VALUES
(1, '12345678901234', 'JOTA PRO 1.500g', 1, 139900.00, 999, '928925.jpg', '2024-12-31', 'Activo', '2024-03-15 08:27:45'),
(2, '56789012340123', 'Rodilleras Deportivas', 2, 15000.00, 119, '116356.jpg', '2025-06-30', 'Activo', '2024-03-15 08:27:46'),
(3, '67890123451234', 'FIGHTR Envolturas de mano 160 pulgadas', 3, 25000.00, 79, '889780.jpg', '2025-12-31', 'Activo', '2024-03-15 08:27:46'),
(4, '78901234562345', 'Banda elastica', 1, 12500.00, 79, '31475.jpg', '2024-10-31', 'Activo', '2024-03-15 08:27:46'),
(5, '89012345673456', 'creatina 1Kg', 4, 180000.00, 58, '832790.jpg', '2024-08-31', 'Activo', '2024-03-15 08:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `servicio`
--

CREATE TABLE `servicio` (
  `idservc` int(11) NOT NULL,
  `idplan` int(11) NOT NULL,
  `ini` date NOT NULL,
  `fin` date NOT NULL,
  `idclie` int(11) NOT NULL,
  `estod` varchar(15) NOT NULL,
  `meto` text NOT NULL,
  `canc` decimal(10,2) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicio`
--

INSERT INTO `servicio` (`idservc`, `idplan`, `ini`, `fin`, `idclie`, `estod`, `meto`, `canc`, `fere`) VALUES
(1, 1, '2024-03-15', '2024-12-16', 1, 'Activo', 'Metodo', 20000.00, '2024-03-15 08:27:46'),
(2, 2, '2024-03-15', '2024-03-16', 2, 'Inactivo', 'Metodo2', 30000.00, '2024-03-15 08:27:46'),
(3, 3, '2023-08-18', '2024-08-19', 3, 'Activo', 'Metodo3', 40000.00, '2024-03-15 08:27:46'),
(4, 4, '2023-09-22', '2024-09-24', 4, 'Activo', 'Metodo4', 35000.00, '2024-03-15 08:27:46'),
(5, 1, '2023-10-25', '2024-10-26', 5, 'Activo', 'Nequi', 25000.00, '2024-03-15 08:27:46'),
(6, 1, '2024-03-20', '2025-02-20', 6, 'Activo', 'Nequi_Daviplata', 250000.00, '2024-03-20 07:07:25'),
(7, 3, '2024-03-20', '2025-10-20', 7, 'Activo', 'Transferencia', 800585.00, '2024-03-20 11:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `idsett` int(11) NOT NULL,
  `nomem` text NOT NULL,
  `ruc` char(14) NOT NULL,
  `decrp` text NOT NULL,
  `corr` varchar(35) NOT NULL,
  `direc1` text NOT NULL,
  `direc2` text NOT NULL,
  `celu` varchar(10) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`idsett`, `nomem`, `ruc`, `decrp`, `corr`, `direc1`, `direc2`, `celu`, `foto`) VALUES
(1, 'GetTheBest', '14356464564564', 'Get The Best', 'infogtb2@gmail.com', 'Cl. 152 #53A-05 Bogotá', 'Cl. 152 #53A-05 Bogotá', '302616929', '318116.jpg'),
(2, 'gtb', '142134323436', 'Get The Best', 'infogtb2@gmail.com', 'Av. Evergreen Terrace #64-32', 'Av. Evergreen Terrace #64-32 p2', '302616929', '297618.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `clave` text NOT NULL,
  `rol` char(1) NOT NULL,
  `foto` text NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `clave`, `rol`, `foto`, `estado`, `fere`) VALUES
(1, 'administrador', 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1', '1', '1', '2024-03-15 05:44:42'),
(2, 'frank', 'frank', 'frank@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '2023-06-15 07:23:20'),
(3, 'holman', 'holman', 'holman@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '2023-06-15 07:23:20'),
(4, 'maria', 'maria', 'maria@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2', '2', '1', '2024-03-15 06:12:30'),
(5, 'Juan Rodrigo García Martínez', 'juan', 'juan@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '2023-07-20 09:15:45'),
(7, 'Juan Jose Martínez Lee', 'juan3', 'juanM@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '2023-07-20 09:15:45'),
(8, 'leidy', 'leidy', 'leidy@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '2024-03-19 08:01:23'),
(12, 'isabel', 'isabel', 'isabel@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '2024-03-19 08:24:43'),
(13, 'Nataly Martinez Garcia', 'nataly01', 'natalyMartinezGarcia@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '2024-03-19 20:18:16'),
(14, 'Juan Sebastian Lopez', 'jslopez', 'jslopez@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '2024-03-20 00:40:43'),
(15, 'Valentina Toscano', 'valent', 'valentinat1@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '2024-03-20 03:12:55'),
(16, 'Carolina Bustamante Quintana', 'carol', 'carolbq@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '2024-03-20 05:24:16'),
(17, 'Alexandra Patricia Morgan', 'alexmorgan', 'alexmorgan@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '2024-03-20 05:33:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idv`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `idprod` (`idprod`);

--
-- Indexes for table `cart_compra`
--
ALTER TABLE `cart_compra`
  ADD PRIMARY KEY (`idcarco`),
  ADD KEY `fk_cart_compra_usuario` (`user_id`),
  ADD KEY `fk_cart_compra_producto` (`idprod`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcate`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idclie`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idcomp`),
  ADD KEY `fk_compra_usuario` (`user_id`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`idga`);

--
-- Indexes for table `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`iding`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idord`),
  ADD KEY `user_cli` (`user_cli`),
  ADD KEY `fk_orders_usuario` (`user_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`idplan`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idprod`),
  ADD KEY `idcate` (`idcate`);

--
-- Indexes for table `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idservc`),
  ADD KEY `idplan` (`idplan`),
  ADD KEY `idclie` (`idclie`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`idsett`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart_compra`
--
ALTER TABLE `cart_compra`
  MODIFY `idcarco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idclie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `idcomp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `idga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `iding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `idplan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `idprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idservc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `idsett` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_producto` FOREIGN KEY (`idprod`) REFERENCES `producto` (`idprod`),
  ADD CONSTRAINT `fk_cart_usuario` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `cart_compra`
--
ALTER TABLE `cart_compra`
  ADD CONSTRAINT `fk_cart_compra_producto` FOREIGN KEY (`idprod`) REFERENCES `producto` (`idprod`),
  ADD CONSTRAINT `fk_cart_compra_usuario` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_usuario` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_usuario` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`idcate`) REFERENCES `categoria` (`idcate`);

--
-- Constraints for table `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_servicio_cliente` FOREIGN KEY (`idclie`) REFERENCES `clientes` (`idclie`),
  ADD CONSTRAINT `fk_servicio_plan` FOREIGN KEY (`idplan`) REFERENCES `plan` (`idplan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
