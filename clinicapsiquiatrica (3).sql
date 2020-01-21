-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jan-2020 às 06:12
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(2) NOT NULL,
  `especialidades` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`id`, `especialidades`) VALUES
(1, 'psiquiatria Infantil'),
(2, 'Psiquiatria'),
(3, 'Psiquiatria Geriátrica');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(5) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `quantidadedisponivel` int(5) DEFAULT NULL,
  `quantidadesolicitada` int(5) DEFAULT NULL,
  `status` enum('entregue','solicitado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `Nome`, `quantidadedisponivel`, `quantidadesolicitada`, `status`) VALUES
(3, 'fluoxetina 20 mg', 300, 2, 'solicitado'),
(4, 'fluoxetina 40 mg', 100, 2, 'solicitado'),
(5, 'fluoxetina 10 mg', 50, 5, 'solicitado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `médicos`
--

CREATE TABLE `médicos` (
  `id` int(2) NOT NULL,
  `crm` varchar(20) DEFAULT NULL,
  `Nome` varchar(80) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `id_especialidade` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `médicos`
--

INSERT INTO `médicos` (`id`, `crm`, `Nome`, `cpf`, `telefone`, `email`, `id_especialidade`) VALUES
(11, '100100100', 'teste1', 2147483647, '11-94848-9898', 'teste1@email.com', 3),
(12, '100200300', 'teste2', 2147483647, '1140563729', 'teste2@email.com', 1),
(13, '20920920920', 'teste3', 2147483647, '11 4056-3722', 'teste3@email.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(5) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `email`) VALUES
(1, 'Veronica Bentos', 2147483647, '1965-12-11', '2147483647', 'veronicabentos@globo.com'),
(2, 'Luiza Goumieri', 2147483647, '2009-06-25', '1123605211', 'luizagoumieri@hotmail.com'),
(3, 'Norma Gladys Bentos Castro', 2147483647, '1935-06-15', '115', 'normabentos@gmail.com'),
(4, 'teste paciente', 2147483647, '1988-03-16', '11', 'testepaciente@gmail.com'),
(5, 'teste paciente segundo', 2147483647, '1990-04-02', '11', 'testesegundo@email.com'),
(6, 'testeterceiro', 1248010100, '1938-06-15', '1143228888', 'teste3@email.com'),
(7, 'testepaciente1', 2147483647, '1974-03-18', '11 98722-4000', 'testepaciente1@email.com'),
(8, 'testepaciente 2', 2147483647, '1975-11-12', '11-3882-0912', 'testepaciente2@email.com');

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
-- Índices para tabela `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_especialidade` (`id_especialidade`);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `médicos`
--
ALTER TABLE `médicos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

--
-- Limitadores para a tabela `médicos`
--
ALTER TABLE `médicos`
  ADD CONSTRAINT `médicos_ibfk_1` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `médicos_ibfk_2` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `médicos_ibfk_3` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `médicos_ibfk_4` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `médicos_ibfk_5` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `médicos_ibfk_6` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidades` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
