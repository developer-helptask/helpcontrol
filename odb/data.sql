-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Set-2018 às 02:42
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contaazul`
--

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`) VALUES
(1, 'helptask');

--
-- Extraindo dados da tabela `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `name`, `params`, `id_company`) VALUES
(1, 'ficticio', '1,2', 1);

--
-- Extraindo dados da tabela `permission_params`
--

INSERT INTO `permission_params` (`id`, `name`, `id_company`) VALUES
(1, 'logout', 1),
(2, 'permissions_view', 1),
(5, 'teste', 1);

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `group`, `id_company`) VALUES
(1, 'admin@helptask.com.br', '202cb962ac59075b964b07152d234b70', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
