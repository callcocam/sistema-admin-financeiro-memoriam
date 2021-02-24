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
-- Estrutura da tabela `app_expenses`
--

CREATE TABLE `app_expenses` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `due_at` varchar(100) DEFAULT NULL,
  `value` decimal(10,2) NOT NULL,
  `status` bit(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `app_expenses`
--

INSERT INTO `app_expenses` (`id`, `provider_id`, `description`, `provider`, `due_at`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Tarifa boleto', 'Ilmacc Comercio e Servicos Postumos LTDA', '2020-08-29', '2.99', b'1', NULL, '2021-01-21 12:14:29'),
(2, NULL, 'Tarifa boleto', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-08-27', '2.99', b'1', NULL, '2021-01-21 12:14:28'),
(3, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-08-25', '2.99', b'1', NULL, '2021-01-21 12:14:26'),
(4, NULL, 'Tarifa boleto', 'FUNERARIA GARCIA E LOPES LTDA', '2020-08-25', '2.99', b'1', NULL, '2021-01-21 12:14:25'),
(5, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-08-22', '2.99', b'1', NULL, '2021-01-21 12:14:23'),
(6, NULL, 'Transferência', '', '2020-08-21', '508.82', b'1', NULL, '2021-01-21 12:14:22'),
(7, NULL, 'Tarifa boleto', 'ALEXANDRE BARROS PEREIRA', '2020-08-19', '2.99', b'1', NULL, '2021-01-21 12:14:19'),
(8, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-08-18', '2.99', b'1', NULL, '2021-01-21 12:14:17'),
(9, NULL, 'Tarifa boleto', 'Funerária Garcia e Lopes Ltda', '2020-08-18', '2.99', b'1', NULL, '2021-01-21 12:14:16'),
(10, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-08-15', '2.99', b'1', NULL, '2021-01-21 12:14:15'),
(11, NULL, 'Pagamento Contabilidade', 'Contabilidade Invoice', '2020-09-03', '250.00', b'1', NULL, '2021-01-21 12:14:14'),
(12, NULL, 'Pagamento Salário', 'Dionantan', '2020-09-08', '1.78', b'1', NULL, '2021-01-21 12:14:12'),
(13, NULL, 'Tarifa boleto', 'Anderson Batista Moreira', '2020-09-09', '2.99', b'1', NULL, '2021-01-21 12:14:11'),
(14, NULL, 'Tarifa boleto', 'Funerária Nossa Senhora Aparecida', '2020-09-10', '2.99', b'1', NULL, '2021-01-21 12:14:10'),
(15, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-09-15', '2.99', b'1', NULL, '2021-01-21 12:14:09'),
(16, NULL, 'Guia Simples ', 'Tributos', '2020-09-16', '161.92', b'1', NULL, '2021-01-21 12:14:08'),
(17, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-09-16', '2.99', b'1', NULL, '2021-01-21 12:14:07'),
(18, NULL, 'Tarifa boleto', 'FUNERARIA SANTAMARIENSE LTDA', '2020-09-18', '2.99', b'1', NULL, '2021-01-21 12:14:05'),
(19, NULL, 'Tarifa boleto', 'ANGELUS SANTANA DO LIVRAMENTO', '2020-09-18', '2.99', b'1', NULL, '2021-01-21 12:14:04'),
(20, NULL, 'Tarifa boleto', 'Angelus Uruguaiana', '2020-09-18', '2.99', b'1', NULL, '2021-01-21 12:14:03'),
(21, NULL, 'Tarifa boleto', 'FUNERÁRIA GUAPORENSE', '2020-09-22', '2.99', b'1', NULL, '2021-01-21 12:14:01'),
(22, NULL, 'Tarifa boleto', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-09-25', '2.99', b'1', NULL, '2021-01-21 12:14:00'),
(23, NULL, 'Conta Telefone', 'Operadora', '2020-09-25', '56.33', b'1', NULL, '2021-01-21 12:13:59'),
(24, NULL, 'Tarifa boleto', 'Angelus Alegrete', '2020-09-26', '2.99', b'1', NULL, '2021-01-21 12:13:58'),
(25, NULL, 'Hospedagem', 'Hostoo', '2020-09-29', '60.00', b'1', NULL, '2021-01-21 12:13:57'),
(26, NULL, 'Pagamento Contabilidade', 'Contabilidade Invoice', '2020-09-29', '346.00', b'1', NULL, '2021-01-21 12:13:56'),
(27, NULL, 'Tarifa boleto', 'Funerária Aerplan', '2020-09-29', '2.99', b'1', NULL, '2021-01-21 12:13:54'),
(28, NULL, 'Hospedagem', 'Hostoo', '2020-09-30', '40.00', b'1', NULL, '2021-01-21 12:13:53'),
(29, NULL, 'Designer', 'RENATA TONIN', '2020-09-30', '220.00', b'1', NULL, '2021-01-21 12:13:51'),
(30, NULL, 'Tarifa Transferência', 'RENATA TONIN', '2020-09-30', '5.00', b'1', NULL, '2021-01-21 12:13:50'),
(31, NULL, 'Pagamento Salário', 'Dionantan', '2020-10-02', '1.78', b'1', NULL, '2021-01-21 12:13:49'),
(32, NULL, 'Pagamento Salário', 'Edemarcos', '2020-10-02', '460.00', b'1', NULL, '2021-01-21 12:13:47'),
(33, NULL, 'Tarifa Transferência', 'transferencia salário', '2020-10-02', '5.00', b'1', NULL, '2021-01-21 12:13:45'),
(34, NULL, 'Tarifa boleto', 'FUNERARIA UNIÃO LTDA', '2020-10-08', '2.99', b'1', NULL, '2021-01-21 12:13:44'),
(35, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-10-08', '2.99', b'1', NULL, '2021-01-21 12:13:43'),
(36, NULL, 'Tarifa boleto', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-10-14', '2.99', b'1', NULL, '2021-01-21 12:13:41'),
(37, NULL, 'Guia GPS', 'INSS Salário', '2020-10-14', '220.00', b'1', NULL, '2021-01-21 12:13:40'),
(38, NULL, 'Guia Simples', 'Tributos', '2020-10-15', '146.20', b'1', NULL, '2021-01-21 12:13:39'),
(39, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-10-16', '2.99', b'1', NULL, '2021-01-21 12:13:38'),
(40, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-10-16', '2.99', b'1', NULL, '2021-01-21 12:13:37'),
(41, NULL, 'Hospedagem', 'Hostoo', '2020-10-19', '50.00', b'1', NULL, '2021-01-21 12:13:36'),
(42, NULL, 'Tarifa boleto', 'Funeraria Pratense', '2020-10-20', '2.99', b'1', NULL, '2021-01-21 12:13:34'),
(43, NULL, 'Tarifa boleto', 'FUNERARIA SANTAMARIENSE LTDA', '2020-10-20', '2.99', b'1', NULL, '2021-01-21 12:13:33'),
(44, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-10-20', '2.99', b'1', NULL, '2021-01-21 12:13:31'),
(45, NULL, 'Tarifa boleto', 'FUNERARIA GARCIA E LOPES LTDA', '2020-10-20', '2.99', b'1', NULL, '2021-01-21 12:13:30'),
(46, NULL, 'Tarifa boleto', 'Centro Oeste de serviços Funebres', '2020-10-20', '2.99', b'1', NULL, '2021-01-21 12:13:29'),
(47, NULL, 'Registro dominio', 'Registro', '2020-10-20', '69.90', b'1', NULL, '2021-01-21 12:13:27'),
(48, NULL, 'Hospedagem', 'Cloud Weis', '2020-10-26', '145.00', b'1', NULL, '2021-01-21 12:13:26'),
(49, NULL, 'Tarifa Transferência', '', '2020-10-26', '5.00', b'1', NULL, '2021-01-21 12:13:25'),
(50, NULL, 'Hospedagem', 'hostoo', '2020-10-26', '60.00', b'1', NULL, '2021-01-21 12:13:24'),
(51, NULL, 'Tarifa Transferência', '', '2020-10-26', '5.00', b'1', NULL, '2021-01-21 12:13:23'),
(52, NULL, 'Conta Telefone', 'operadora', '2020-10-26', '42.00', b'1', NULL, '2021-01-21 12:13:21'),
(53, NULL, 'Tarifa Transferência', '', '2020-10-26', '5.00', b'1', NULL, '2021-01-21 12:13:20'),
(54, NULL, 'Tarifa boleto', 'FUNERARIA VENOLO', '2020-10-28', '2.99', b'1', NULL, '2021-01-21 12:13:19'),
(55, NULL, 'Pagamento Contabilidade', 'Invoice', '2020-10-29', '260.75', b'1', NULL, '2021-01-21 12:13:18'),
(56, NULL, 'Pagamento GPS', 'INSS Salário', '2020-11-04', '220.00', b'1', NULL, '2021-01-21 12:13:16'),
(57, NULL, 'Pagamento DARE', '', '2020-11-04', '109.23', b'1', NULL, '2021-01-21 12:13:15'),
(58, NULL, 'Pagamento Salário', 'Dionatan', '2020-11-04', '1.78', b'1', NULL, '2021-01-21 12:13:14'),
(59, NULL, 'Pagamento Salário', 'Edemarcos', '2020-11-04', '600.00', b'1', NULL, '2021-01-21 12:13:13'),
(60, NULL, 'Tarifa Transferência', '', '2020-11-04', '5.00', b'1', NULL, '2021-01-21 12:13:12'),
(61, NULL, 'Tarifa boleto', 'ADAM & CIA LTDA', '2020-11-06', '2.99', b'1', NULL, '2021-01-21 12:13:11'),
(62, NULL, 'Tarifa boleto', 'WANDER SERVICOS FUNERARIOS EIRELI', '2020-11-06', '2.99', b'1', NULL, '2021-01-21 12:13:10'),
(63, NULL, 'Guia DAS', 'Simples Nacional', '2020-11-10', '158.11', b'1', NULL, '2021-01-21 12:13:08'),
(64, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-11-10', '2.99', b'1', NULL, '2021-01-21 12:13:07'),
(65, NULL, 'Tarifa boleto', 'Anderson Batista Moreira', '2020-11-10', '2.99', b'1', NULL, '2021-01-21 12:13:06'),
(66, NULL, 'Tarifa boleto', 'Funerária Zapelin', '2020-11-11', '2.99', b'1', NULL, '2021-01-21 12:13:05'),
(67, NULL, 'Hospedagem', 'Hostoo', '2020-11-12', '50.00', b'1', NULL, '2021-01-21 12:12:46'),
(68, NULL, 'Transferência', 'Banco linker', '2020-11-12', '50.00', b'1', NULL, '2021-01-21 12:12:45'),
(69, NULL, 'Tarifa Transferência', '', '2020-11-12', '5.00', b'1', NULL, '2021-01-21 12:12:44'),
(70, NULL, 'Tarifa boleto', 'Funeraria Fonseca', '2020-11-16', '2.99', b'1', NULL, '2021-01-21 12:12:42'),
(71, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-11-17', '2.99', b'1', NULL, '2021-01-21 12:12:41'),
(72, NULL, 'Tarifa boleto', 'Grupo Fonseca', '2020-11-17', '2.99', b'1', NULL, '2021-01-21 12:12:40'),
(73, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-11-17', '2.99', b'1', NULL, '2021-01-21 12:12:38'),
(74, NULL, 'Tarifa boleto', 'Angelus urugaiana', '2020-11-18', '2.99', b'1', NULL, '2021-01-21 12:12:37'),
(75, NULL, 'Tarifa boleto', 'Angelus Alegrete', '2020-11-18', '2.99', b'1', NULL, '2021-01-21 12:12:36'),
(76, NULL, 'Tarifa boleto', 'Angelus Livramento', '2020-11-18', '2.99', b'1', NULL, '2021-01-21 12:12:35'),
(77, NULL, 'Tarifa boleto', 'Angelus Santa Maria', '2020-11-18', '2.99', b'1', NULL, '2021-01-21 12:12:31'),
(78, NULL, 'Tarifa boleto', 'funeraria pratense', '2020-11-18', '2.99', b'1', NULL, '2021-01-21 12:12:30'),
(79, NULL, 'Tarifa boleto', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-11-20', '2.99', b'1', NULL, '2021-01-21 12:12:28'),
(80, NULL, 'Tarifa boleto', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-11-27', '2.99', b'1', NULL, '2021-01-21 12:12:27'),
(81, NULL, 'Transferência', 'Pagamento de adiantamento Dionatan', '2020-11-30', '572.00', b'1', NULL, '2021-01-21 12:12:26'),
(82, NULL, 'Transferência', 'Banco linker', '2020-11-30', '180.00', b'1', NULL, '2021-01-21 12:12:25'),
(83, NULL, 'Tarifa Transferência', 'Banco linker', '2020-11-30', '5.00', b'1', NULL, '2021-01-21 12:12:22'),
(84, NULL, 'Pagamento Contabilidade', 'Invoice', '2020-12-01', '312.49', b'1', NULL, '2021-01-21 12:12:21'),
(85, NULL, 'Pagamento Salário', 'Dionatan', '2020-12-02', '1.78', b'1', NULL, '2021-01-21 12:12:20'),
(86, NULL, 'Pagamento Salário', 'Edemarcos', '2020-12-02', '600.00', b'1', NULL, '2021-01-21 12:12:19'),
(87, NULL, 'Tarifa Transferência', 'Pagamento Edemarcos', '2020-12-02', '5.00', b'1', NULL, '2021-01-21 12:12:14'),
(88, NULL, 'Pagamento GPS', 'INSS Salário', '2020-12-02', '220.00', b'1', NULL, '2021-01-21 12:12:06'),
(89, NULL, 'Pagamento comissão leandro', '', '2020-12-15', '240.49', b'0', NULL, '2021-01-21 12:12:04'),
(90, NULL, 'Tarifa boleto', 'Funerária Canaã', '2020-12-04', '2.99', b'1', NULL, '2021-01-21 12:12:01'),
(91, NULL, 'Guia Simples', 'Tributos', '2020-12-08', '367.52', b'1', NULL, '2021-01-21 12:12:00'),
(92, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-12-08', '2.99', b'1', NULL, '2021-01-21 12:11:59'),
(93, NULL, 'Tarifa boleto', 'Funeraria Luto Santa Rita', '2020-12-08', '2.99', b'1', NULL, '2021-01-21 12:11:58'),
(94, NULL, 'Tarifa boleto', 'ADAM E CIA LTDA', '2020-12-08', '2.99', b'1', NULL, '2021-01-21 12:11:56'),
(95, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-08', '2.99', b'1', NULL, '2021-01-21 12:11:55'),
(96, NULL, 'Tarifa boleto', 'Funerária Garcia e Lopes Ltda ', '2020-12-16', '2.99', b'1', NULL, '2021-01-21 12:11:53'),
(97, NULL, 'Tarifa boleto', 'CENTRO OESTE SERVIÇOS FÚNEBRES LTDA ', '2020-12-16', '2.99', b'1', NULL, '2021-01-21 12:11:47'),
(98, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA   ROSÁRIO', '2020-12-16', '2.99', b'1', NULL, '2021-01-21 12:11:46'),
(99, NULL, 'Tarifa boleto', 'Funerária Santamariense Ltda', '2020-12-16', '2.99', b'1', NULL, '2021-01-21 12:11:44'),
(100, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-16', '2.99', b'1', NULL, '2021-01-21 12:11:43'),
(101, NULL, 'Tarifa boleto', 'FUNERARIA GARCIA E LOPES LTDA', '2020-12-16', '2.99', b'1', NULL, '2021-01-21 12:11:42'),
(102, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA ', '2020-12-16', '2.99', b'1', NULL, '2021-01-21 12:11:41'),
(103, NULL, 'Tarifa boleto', 'Funeraria Pratense', '2020-12-17', '2.99', b'1', NULL, '2021-01-21 12:11:39'),
(104, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-12-19', '2.99', b'1', NULL, '2021-01-21 12:11:38'),
(105, 0, 'Conta Telefone', 'Pagamento conta telefone Novembro e Dezembro Memoriam', '2020-12-29', '102.20', b'1', NULL, '2021-02-08 21:03:08'),
(106, NULL, 'Tarifa Transferência', 'Pagamento conta telefone Novembro e Dezembro Memoriam', '2020-12-29', '5.00', b'1', NULL, '2021-01-21 12:11:33'),
(110, 3, 'testando', 'sss', '2021-02-10 00:00:00', '35.45', b'1', '2021-02-01 19:52:33', '2021-02-08 21:05:22');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `app_expenses`
--
ALTER TABLE `app_expenses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `app_expenses`
--
ALTER TABLE `app_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
