-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2020 às 02:50
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinicapsiquiatrica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(5) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL,
  `idmedicos` int(2) DEFAULT NULL,
  `idpacientes` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `data`, `horario`, `idmedicos`, `idpacientes`) VALUES
(4, '2019-02-06', '23:20:00', 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(5) NOT NULL,
  `comentário` text NOT NULL,
  `idmedicos` int(2) DEFAULT NULL,
  `idpacientes` int(5) DEFAULT NULL,
  `idmedicamentos` int(5) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `comentário`, `idmedicos`, `idpacientes`, `idmedicamentos`, `data`) VALUES
(1, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL),
(2, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL),
(3, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL),
(4, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL),
(5, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL),
(6, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL),
(7, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL),
(8, 'testando a inclusão de muitos textos para verificar se a criação do campo comentário está correta. uma vez que deixei ele com 5000 caracteres. Mas não vou escrever muito, porque tenho medo de esquecer a ordem dos campos seguintes. Espero que dê certo. Amém!', 4, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(5) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `dosagem` varchar(15) DEFAULT NULL,
  `quantidadedisponivel` int(5) DEFAULT NULL,
  `quantidadesolicitada` int(5) DEFAULT NULL,
  `status` enum('entregue','solicitado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `Nome`, `dosagem`, `quantidadedisponivel`, `quantidadesolicitada`, `status`) VALUES
(1, 'gardenal', '200mg', 20, 5, NULL),
(2, 'fluoxetina', '20mg', 10, 10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `médicos`
--

CREATE TABLE `médicos` (
  `id` int(2) NOT NULL,
  `crm` int(12) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `especialidade` varchar(40) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `telefone` int(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `médicos`
--

INSERT INTO `médicos` (`id`, `crm`, `Nome`, `especialidade`, `cpf`, `telefone`, `email`) VALUES
(4, 1333333332, 'josé da Silva', 'Psiquiatria', 2147483647, 1150882234, 'josesilva@gmail.com'),
(5, 103244444, 'madalena Oliveira', 'psiquiatria Infantil', 2147483647, 1130300087, 'madalena.oliveira@gmail.com'),
(6, 300588222, 'Paulo Rogério Gomes', 'psiquiatria Geriatrica', 2147483647, 2147483647, 'paulorgomes@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(5) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` int(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `email`) VALUES
(1, 'Veronica Bentos', 2147483647, '1965-12-11', 2147483647, 'veronicabentos@globo.com'),
(2, 'Luiza Goumieri', 2147483647, '2009-06-25', 1123605211, 'luizagoumieri@hotmail.com'),
(3, 'Norma Gladys Bentos Castro', 2147483647, '1935-06-15', 115, 'normabentos@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmedicos` (`idmedicos`),
  ADD KEY `idpacientes` (`idpacientes`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmedicos` (`idmedicos`),
  ADD KEY `idpacientes` (`idpacientes`),
  ADD KEY `idmedicamentos` (`idmedicamentos`);

--
-- Índices para tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `médicos`
--
ALTER TABLE `médicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `médicos`
--
ALTER TABLE `médicos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`idmedicos`) REFERENCES `médicos` (`id`),
  ADD CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`idpacientes`) REFERENCES `pacientes` (`id`);

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`idmedicos`) REFERENCES `médicos` (`id`),
  ADD CONSTRAINT `historico_ibfk_2` FOREIGN KEY (`idpacientes`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `historico_ibfk_3` FOREIGN KEY (`idmedicamentos`) REFERENCES `medicamentos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
