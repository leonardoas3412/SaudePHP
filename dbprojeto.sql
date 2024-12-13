-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2019 às 18:09
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbatendimento`
--

CREATE TABLE `tbatendimento` (
  `cod_atendimento` int(30) UNSIGNED NOT NULL,
  `cod_pac` int(30) UNSIGNED NOT NULL,
  `cod_prof` int(30) UNSIGNED NOT NULL,
  `cod_proce` int(30) UNSIGNED NOT NULL,
  `cod_usu` int(30) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `local` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `cod_pac` int(30) UNSIGNED NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` int(15) UNSIGNED NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `fone` varchar(11) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(80) NOT NULL,
  `cns` int(15) UNSIGNED NOT NULL,
  `sexo` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`cod_pac`, `nome`, `cpf`, `endereco`, `fone`, `nascimento`, `email`, `cns`, `sexo`) VALUES
(2, 'Herbao', 123454, 'rua mata cavalos', '203948', '2023-12-19', 'maonegra@sander.com', 2345, 'm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprocedimento`
--

CREATE TABLE `tbprocedimento` (
  `cod_proced` int(30) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprocedimento`
--

INSERT INTO `tbprocedimento` (`cod_proced`, `nome`) VALUES
(1, 'Jaquin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprofissional`
--

CREATE TABLE `tbprofissional` (
  `cod_prof` int(30) UNSIGNED NOT NULL,
  `nome` varchar(80) NOT NULL,
  `crm` int(15) UNSIGNED NOT NULL,
  `area` varchar(80) NOT NULL,
  `fone` varchar(11) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprofissional`
--

INSERT INTO `tbprofissional` (`cod_prof`, `nome`, `crm`, `area`, `fone`, `email`) VALUES
(1, 'leonida', 123578, '124677', '12453699', 'paulista24@arriba.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusu`
--

CREATE TABLE `tbusu` (
  `cod_usu` int(30) UNSIGNED NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusu`
--

INSERT INTO `tbusu` (`cod_usu`, `nome`, `email`, `senha`) VALUES
(1, 'Bayer', '1@1', '1'),
(2, 'LeoFunkeiro', 'leozinhodofunk@gmail.com', '123aa123aaa'),
(3, 'Ricardo', 'Ricardo@gmail.com', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbatendimento`
--
ALTER TABLE `tbatendimento`
  ADD PRIMARY KEY (`cod_atendimento`);

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`cod_pac`);

--
-- Indexes for table `tbprocedimento`
--
ALTER TABLE `tbprocedimento`
  ADD PRIMARY KEY (`cod_proced`);

--
-- Indexes for table `tbprofissional`
--
ALTER TABLE `tbprofissional`
  ADD PRIMARY KEY (`cod_prof`);

--
-- Indexes for table `tbusu`
--
ALTER TABLE `tbusu`
  ADD PRIMARY KEY (`cod_usu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbatendimento`
--
ALTER TABLE `tbatendimento`
  MODIFY `cod_atendimento` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `cod_pac` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbprocedimento`
--
ALTER TABLE `tbprocedimento`
  MODIFY `cod_proced` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbprofissional`
--
ALTER TABLE `tbprofissional`
  MODIFY `cod_prof` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbusu`
--
ALTER TABLE `tbusu`
  MODIFY `cod_usu` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
