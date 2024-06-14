-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2024 às 11:54
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `corretora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ativo`
--

CREATE TABLE `ativo` (
  `CodigoAtivo` int(11) NOT NULL,
  `Designacao` varchar(300) NOT NULL,
  `TipoAtivo` varchar(300) NOT NULL,
  `DataEmissao` date NOT NULL,
  `ValorFacial` decimal(10,0) NOT NULL,
  `QuantidadeDisponivel` int(11) NOT NULL,
  `NomeEmpresa` varchar(300) NOT NULL,
  `QuantidadeInicial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ativo`
--

INSERT INTO `ativo` (`CodigoAtivo`, `Designacao`, `TipoAtivo`, `DataEmissao`, `ValorFacial`, `QuantidadeDisponivel`, `NomeEmpresa`, `QuantidadeInicial`) VALUES
(1, 'BAIAAAA1243', 'Títulos de participação', '2024-04-09', 300, 7000, 'Banco BAI', 14500),
(17, 'OTRYU234', 'Obrigações do tesouro', '2024-04-12', 10000, 12000, 'Banco Yetu', 13500),
(19, 'OTRYU2345', 'Títulos de participação', '2024-04-08', 10000, 10, 'Banco Yetu', 12000),
(20, 'BAIAAAA1243', 'Títulos de participação', '2024-04-08', 10000, 10000, 'Banco Bai', 15000),
(21, 'Participação', 'Títulos', '2024-04-09', 150000, 7500000, 'Banco BIC', 8000000),
(22, 'OBTNDIEI', 'Obrigações do tesouro', '2024-04-20', 10000, 10, 'Banco BAI', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carteira`
--

CREATE TABLE `carteira` (
  `CodigoCarteira` int(11) NOT NULL,
  `CodigoCliente` int(11) NOT NULL,
  `ValorTotal` decimal(10,0) NOT NULL,
  `Rentabilidade` decimal(10,0) NOT NULL,
  `Composicao` varchar(300) NOT NULL,
  `JurosEmAtraso` decimal(10,0) NOT NULL,
  `TotalAtivos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carteira`
--

INSERT INTO `carteira` (`CodigoCarteira`, `CodigoCliente`, `ValorTotal`, `Rentabilidade`, `Composicao`, `JurosEmAtraso`, `TotalAtivos`) VALUES
(1, 1, 5000000, 20, 'AcçõesTitulos de participação', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carteira_ativo`
--

CREATE TABLE `carteira_ativo` (
  `CodigoCarteira` int(11) NOT NULL,
  `CodigoAtivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CodigoCliente` int(11) NOT NULL,
  `NomeCompleto` varchar(300) NOT NULL,
  `Nif` varchar(300) NOT NULL,
  `Endereco` varchar(300) NOT NULL,
  `Telefone` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CodigoCliente`, `NomeCompleto`, `Nif`, `Endereco`, `Telefone`) VALUES
(1, 'Marcelina Zua', '02346655477LA345', 'Luanda, Cazenga', '932678794'),
(2, 'Joana Zua', '00564399LA048', 'Luanda, Morro Bento', '934015875'),
(5, 'User Test', '111222333LA098', 'Malanje, Kalandula', '943228765'),
(6, 'Oliveira', '2340949', 'Luanda', '9584848584');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretor`
--

CREATE TABLE `corretor` (
  `CodigoCorretor` int(11) NOT NULL,
  `CodigoUsuario` int(11) NOT NULL,
  `NomeCompleto` varchar(300) NOT NULL,
  `NumeroMecanografico` int(11) NOT NULL,
  `DataAdmissao` date NOT NULL,
  `DataRescisao` date NOT NULL,
  `Telefone` varchar(300) NOT NULL,
  `SalarioBase` decimal(10,0) NOT NULL,
  `ComissaoMensal` decimal(10,0) NOT NULL,
  `CodigoFirma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `corretor`
--

INSERT INTO `corretor` (`CodigoCorretor`, `CodigoUsuario`, `NomeCompleto`, `NumeroMecanografico`, `DataAdmissao`, `DataRescisao`, `Telefone`, `SalarioBase`, `ComissaoMensal`, `CodigoFirma`) VALUES
(1, 1, 'Patrício Manuel', 12136, '2024-04-18', '2024-12-31', '934015876', 1200000, 17, 2),
(2, 1, 'Márcio Carvalho', 13124, '2024-04-06', '2024-06-30', '9432287621', 700000, 15, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `firma`
--

CREATE TABLE `firma` (
  `CodigoFirma` int(11) NOT NULL,
  `Nome` varchar(300) NOT NULL,
  `Endereco` varchar(300) NOT NULL,
  `TaxaJurosDiaria` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `firma`
--

INSERT INTO `firma` (`CodigoFirma`, `Nome`, `Endereco`, `TaxaJurosDiaria`) VALUES
(1, 'Firma Central', 'Luanda, Morro Bento', 2),
(2, 'Firma Talatona', 'Luanda, Talatona', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacao`
--

CREATE TABLE `operacao` (
  `CodigoOperacao` int(11) NOT NULL,
  `DataOperacao` datetime NOT NULL DEFAULT current_timestamp(),
  `TipoOperacao` varchar(300) NOT NULL,
  `CodigoAtivo` int(11) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `DepositoFeito` tinyint(1) NOT NULL,
  `LevantamentoFeito` tinyint(1) NOT NULL,
  `ComprovativoPagamento` varchar(500) NOT NULL,
  `ValorTotal` decimal(10,0) NOT NULL,
  `CodigoCarteira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `operacao`
--

INSERT INTO `operacao` (`CodigoOperacao`, `DataOperacao`, `TipoOperacao`, `CodigoAtivo`, `Quantidade`, `DepositoFeito`, `LevantamentoFeito`, `ComprovativoPagamento`, `ValorTotal`, `CodigoCarteira`) VALUES
(1, '2024-04-06 13:13:22', 'Compra', 1, 12333, 0, 0, '[01] budget.xlsx', 23475, 1),
(2, '2024-04-06 13:20:36', 'Venda', 1, 12, 0, 0, '[01] budget.xlsx', 797845985, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CodigoUsuario` int(11) NOT NULL,
  `NomeCompleto` varchar(300) NOT NULL,
  `NomeUsuario` varchar(300) NOT NULL,
  `PalavraPasse` varchar(300) NOT NULL,
  `TipoAcesso` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`CodigoUsuario`, `NomeCompleto`, `NomeUsuario`, `PalavraPasse`, `TipoAcesso`) VALUES
(1, 'Juclénio António', 'juclenio', 'qwertyu', 'Admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ativo`
--
ALTER TABLE `ativo`
  ADD PRIMARY KEY (`CodigoAtivo`);

--
-- Índices para tabela `carteira`
--
ALTER TABLE `carteira`
  ADD PRIMARY KEY (`CodigoCarteira`),
  ADD KEY `fk_codigo_cliente` (`CodigoCliente`);

--
-- Índices para tabela `carteira_ativo`
--
ALTER TABLE `carteira_ativo`
  ADD PRIMARY KEY (`CodigoCarteira`,`CodigoAtivo`),
  ADD KEY `fk_codigo_ativo` (`CodigoAtivo`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodigoCliente`);

--
-- Índices para tabela `corretor`
--
ALTER TABLE `corretor`
  ADD PRIMARY KEY (`CodigoCorretor`),
  ADD KEY `fk_codigo_firma` (`CodigoFirma`),
  ADD KEY `fk_codigo_usuario_corretor` (`CodigoUsuario`);

--
-- Índices para tabela `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`CodigoFirma`);

--
-- Índices para tabela `operacao`
--
ALTER TABLE `operacao`
  ADD PRIMARY KEY (`CodigoOperacao`),
  ADD KEY `fk_codigo_carteira_operacao` (`CodigoCarteira`),
  ADD KEY `fk_codigo_ativo_operacao` (`CodigoAtivo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CodigoUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ativo`
--
ALTER TABLE `ativo`
  MODIFY `CodigoAtivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `carteira`
--
ALTER TABLE `carteira`
  MODIFY `CodigoCarteira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodigoCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `corretor`
--
ALTER TABLE `corretor`
  MODIFY `CodigoCorretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=900001;

--
-- AUTO_INCREMENT de tabela `firma`
--
ALTER TABLE `firma`
  MODIFY `CodigoFirma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `operacao`
--
ALTER TABLE `operacao`
  MODIFY `CodigoOperacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `CodigoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carteira`
--
ALTER TABLE `carteira`
  ADD CONSTRAINT `fk_codigo_cliente` FOREIGN KEY (`CodigoCliente`) REFERENCES `cliente` (`CodigoCliente`);

--
-- Limitadores para a tabela `carteira_ativo`
--
ALTER TABLE `carteira_ativo`
  ADD CONSTRAINT `fk_codigo_ativo` FOREIGN KEY (`CodigoAtivo`) REFERENCES `ativo` (`CodigoAtivo`),
  ADD CONSTRAINT `fk_codigo_carteira_ativo1` FOREIGN KEY (`CodigoCarteira`) REFERENCES `carteira` (`CodigoCarteira`);

--
-- Limitadores para a tabela `corretor`
--
ALTER TABLE `corretor`
  ADD CONSTRAINT `fk_codigo_firma` FOREIGN KEY (`CodigoFirma`) REFERENCES `firma` (`CodigoFirma`),
  ADD CONSTRAINT `fk_codigo_usuario_corretor` FOREIGN KEY (`CodigoUsuario`) REFERENCES `usuario` (`CodigoUsuario`);

--
-- Limitadores para a tabela `operacao`
--
ALTER TABLE `operacao`
  ADD CONSTRAINT `fk_codigo_ativo_operacao` FOREIGN KEY (`CodigoAtivo`) REFERENCES `ativo` (`CodigoAtivo`),
  ADD CONSTRAINT `fk_codigo_carteira_operacao` FOREIGN KEY (`CodigoCarteira`) REFERENCES `carteira` (`CodigoCarteira`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
