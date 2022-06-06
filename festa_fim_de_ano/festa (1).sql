-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/06/2022 às 00:32
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `festa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_comentarios`
--

CREATE TABLE `tb_comentarios` (
  `autor` varchar(50) NOT NULL,
  `opniao` varchar(255) NOT NULL,
  `data` varchar(30) NOT NULL,
  `id` int(20) NOT NULL,
  `id_festa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_comentarios`
--

INSERT INTO `tb_comentarios` (`autor`, `opniao`, `data`, `id`, `id_festa`) VALUES
('marcos', 'gostei da festa ANOS 80', '2022-05-21 11:51:02', 181, 1),
('LUCAS', 'RAPAZ ESSA SEI NÃO HEIM', '2022-05-21 11:51:28', 182, 2),
('tereza', 'fantasia é tudo de bom', '2022-05-21 11:52:44', 183, 3),
('jerffson', 'cara anos 80 é tudo de bom ', '2022-05-21 16:07:39', 195, 1),
('Rafael Erthal', 'cara vamos de havai, havai é show papai', '2022-05-21 16:13:19', 196, 2),
('Leonardo Aiello', 'voto por baile do havaii', '2022-05-21 16:14:07', 197, 2),
('Guilherme Martins', 'por mim é festa fantasia...', '2022-05-21 16:14:36', 198, 3),
('Woody', 'É o seguinte, vamos de festa Fantasia e ponto!', '2022-05-21 16:15:26', 199, 3),
('jonata', 'ssss', '2022-05-24 22:02:17', 200, 1),
('terza', 'alvez', '2022-05-24 22:02:32', 201, 1),
('matheus', 'tendeu ai\r\n', '2022-05-24 22:02:47', 202, 2),
('sindó', 'ai siii', '2022-05-24 22:03:00', 203, 3),
('opa', 'sss', '2022-06-06 19:31:45', 204, 1),
('', '', '2022-06-06 19:31:48', 205, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
