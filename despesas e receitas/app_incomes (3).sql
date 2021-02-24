-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Fev-2021 às 14:25
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `memoriam`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_incomes`
--

CREATE TABLE `app_incomes` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `due_at` timestamp NULL DEFAULT NULL,
  `value` decimal(10,2) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `app_incomes`
--

INSERT INTO `app_incomes` (`id`, `description`, `provider`, `due_at`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-08-15 03:00:00', '543.72', 1, NULL, '2021-02-01 19:29:03'),
(2, 'Recebimento de cobrança', 'Ilmacc Comercio e Servicos Postumos LTDA', '2020-08-18 03:00:00', '499.00', 1, NULL, '2021-02-01 19:29:02'),
(3, 'Recebimento de cobrança', 'ALEXANDRE BARROS PEREIRA', '2020-08-18 03:00:00', '471.00', 1, NULL, '2021-02-01 19:29:02'),
(4, 'Recebimento de cobrança', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-08-19 03:00:00', '441.00', 1, NULL, '2021-02-01 19:29:01'),
(5, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-08-22 03:00:00', '150.00', 1, NULL, '2021-02-01 19:29:00'),
(6, 'Recebimento de cobrança', 'FUNERARIA GARCIA E LOPES LTDA', '2020-08-25 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:59'),
(7, 'Recebimento de cobrança', 'Funerária Garcia e Lopes Ltda', '2020-08-25 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:58'),
(8, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-08-27 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:55'),
(9, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-08-29 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:57'),
(10, 'Recebimento de cobrança', 'Anderson Batista Moreira', '2020-09-09 03:00:00', '294.00', 1, NULL, '2021-02-01 19:28:53'),
(11, 'Recebimento de cobrança', 'Funerária Nossa Senhora Aparecida', '2020-09-10 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:53'),
(12, 'Transferência', 'Entrada de capital', '2020-09-10 03:00:00', '911.02', 1, NULL, '2021-02-01 19:28:52'),
(13, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-09-15 03:00:00', '147.00', 1, NULL, '2021-01-23 13:34:11'),
(14, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-09-16 03:00:00', '543.72', 1, NULL, '2021-01-23 13:34:10'),
(15, 'Recebimento de cobrança', 'FUNERARIA SANTAMARIENSE LTDA', '2020-09-18 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:51'),
(16, 'Recebimento de cobrança', 'ANGELUS SANTANA DO LIVRAMENTO', '2020-09-18 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:50'),
(17, 'Recebimento de cobrança', 'Angelus Uruguaiana', '2020-09-18 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:50'),
(18, 'Recebimento de cobrança', 'FUNERÁRIA GUAPORENSE', '2020-09-22 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:49'),
(19, 'Recebimento de cobrança', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-09-25 03:00:00', '441.00', 1, NULL, '2021-02-01 19:28:48'),
(20, 'Recebimento de cobrança', 'Angelus Alegrete', '2020-09-26 03:00:00', '70.00', 1, NULL, '2021-02-01 19:28:47'),
(21, 'Recebimento de cobrança', 'Funerária Aerplan', '2020-09-29 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:45'),
(22, 'Transferência', 'Entrada de capital', '2020-10-02 03:00:00', '911.02', 1, NULL, '2021-02-01 19:28:45'),
(23, 'Recebimento de cobrança', 'FUNERARIA UNIÃO LTDA', '2020-10-08 03:00:00', '294.00', 1, NULL, '2021-02-01 19:28:44'),
(24, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-10-08 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:42'),
(25, 'Recebimento de cobrança', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-10-14 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:42'),
(26, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-10-16 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:40'),
(27, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-10-16 03:00:00', '543.72', 1, NULL, '2021-02-01 19:28:39'),
(28, 'Recebimento de cobrança', 'Funeraria Pratense', '2020-10-20 03:00:00', '314.00', 1, NULL, '2021-02-01 19:28:39'),
(29, 'Recebimento de cobrança', 'FUNERARIA SANTAMARIENSE LTDA', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:38'),
(30, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:38'),
(31, 'Recebimento de cobrança', 'FUNERARIA GARCIA E LOPES LTDA', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:36'),
(32, 'Recebimento de cobrança', 'Centro Oeste de serviços Funebres', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:35'),
(33, 'Recebimento de cobrança', 'FUNERARIA VENOLO', '2020-10-28 03:00:00', '441.00', 1, NULL, '2021-02-01 19:28:34'),
(34, 'Recebimento de cobrança', 'ADAM & CIA LTDA', '2020-11-06 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:33'),
(35, 'Recebimento de cobrança', 'WANDER SERVICOS FUNERARIOS EIRELI', '2020-11-06 03:00:00', '360.00', 1, NULL, '2021-02-01 19:28:32'),
(36, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-11-10 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:30'),
(37, 'Recebimento de cobrança', 'Anderson Batista Moreira', '2020-11-10 03:00:00', '294.00', 1, NULL, '2021-02-01 19:28:30'),
(38, 'Recebimento de cobrança', 'Funerária Zapelin', '2020-11-11 03:00:00', '942.00', 1, NULL, '2021-02-01 19:28:29'),
(39, 'Recebimento de cobrança', 'Funeraria Fonseca', '2020-11-16 03:00:00', '471.00', 1, NULL, '2021-02-01 19:28:28'),
(40, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-11-17 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:28'),
(41, 'Recebimento de cobrança', 'Grupo Fonseca', '2020-11-17 03:00:00', '471.00', 1, NULL, '2021-02-01 19:28:27'),
(42, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-11-17 03:00:00', '543.72', 1, NULL, '2021-02-01 19:28:25'),
(43, 'Recebimento de cobrança', 'Angelus urugaiana', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:24'),
(44, 'Recebimento de cobrança', 'Angelus Alegrete', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:23'),
(45, 'Recebimento de cobrança', 'Angelus Livramento', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:22'),
(46, 'Recebimento de cobrança', 'Angelus Santa Maria', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:21'),
(47, 'Recebimento de cobrança', 'Funeraria Pratense', '2020-11-18 03:00:00', '314.00', 1, NULL, '2021-02-01 19:28:21'),
(48, 'Recebimento de cobrança', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-11-20 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:19'),
(49, 'Recebimento de cobrança', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-11-27 03:00:00', '441.00', 1, NULL, '2021-02-01 19:28:19'),
(50, 'Rsarcimento despesas e % COD', '', '2020-12-03 03:00:00', '1.04', 1, NULL, '2021-02-01 19:28:18'),
(51, 'Recebimento de cobrança', 'Funerária Canaã', '2020-12-04 03:00:00', '499.00', 1, NULL, '2021-02-01 19:28:17'),
(52, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-12-08 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:16'),
(53, 'Recebimento de cobrança', 'Funeraria Luto Santa Rita', '2020-12-08 03:00:00', '471.00', 1, NULL, '2021-01-23 13:34:33'),
(54, 'Recebimento de cobrança', 'ADAM E CIA LTDA', '2020-12-08 03:00:00', '197.00', 1, NULL, '2021-01-23 13:34:32'),
(55, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-08 03:00:00', '45.96', 1, NULL, '2021-01-23 13:34:31'),
(56, 'Recebimento de cobrança', 'Funerária Garcia e Lopes Ltda ', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:30'),
(57, 'Recebimento de cobrança', 'CENTRO OESTE SERVIÇOS FÚNEBRES LTDA ', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:29'),
(58, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA - ROSÁRIO', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:28'),
(59, 'Recebimento de cobrança', 'Funerária Santamariense Ltda', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:27'),
(60, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:24'),
(61, 'Recebimento de cobrança', 'FUNERARIA GARCIA E LOPES LTDA', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:22'),
(62, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA ', '2020-12-16 03:00:00', '543.72', 1, NULL, '2021-01-23 13:34:21'),
(63, 'Recebimento de cobrança', 'Funeraria Pratense', '2020-12-17 03:00:00', '314.00', 1, NULL, '2021-01-23 13:34:20'),
(64, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-12-19 03:00:00', '147.00', 1, NULL, '2021-01-23 13:34:19'),
(72, 'teste', 'teste', '2021-02-01 03:00:00', '451.00', 1, '2021-02-01 19:50:46', '2021-02-01 19:50:46');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `app_incomes`
--
ALTER TABLE `app_incomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `app_incomes`
--
ALTER TABLE `app_incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
