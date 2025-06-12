-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2025 às 02:56
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_social_face`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` bigint(20) NOT NULL,
  `id_post` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `context` varchar(1024) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `date_update` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'public'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_follower`
--

CREATE TABLE `tb_follower` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_user_action` bigint(20) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_notification`
--

CREATE TABLE `tb_notification` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` varchar(512) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_post`
--

CREATE TABLE `tb_post` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `type_post` varchar(20) NOT NULL,
  `date_create` datetime NOT NULL,
  `type_of_access` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `date_of_birth` date NOT NULL,
  `n_notification` int(11) NOT NULL DEFAULT 0,
  `validated_email` varchar(10) NOT NULL,
  `validated_email_code` varchar(1024) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `telephone` varchar(128) NOT NULL,
  `country_of_origin` varchar(80) NOT NULL,
  `language_system` varchar(80) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `last_access` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_follower`
--
ALTER TABLE `tb_follower`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_notification`
--
ALTER TABLE `tb_notification`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_follower`
--
ALTER TABLE `tb_follower`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_notification`
--
ALTER TABLE `tb_notification`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
