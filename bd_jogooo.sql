-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2018 às 03:19
-- Versão do servidor: 5.7.11-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_jogo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'indetificação da tabela jogadores',
  `nome` varchar(45) NOT NULL COMMENT 'nome dos jogadores',
  `sobrenome` varchar(45) NOT NULL COMMENT 'sobrenome dos jogadores',
  `usuario` varchar(18) NOT NULL COMMENT 'nome de usuario dos jogadores',
  `avatar` varchar(45) NOT NULL COMMENT 'atributo onde será guardado o nome da imagem do avatar do jogador',
  `data_cadastro` datetime NOT NULL COMMENT 'data do cadastro do jogador',
  `email` varchar(45) NOT NULL COMMENT 'email do jogador',
  `senha` varchar(60) NOT NULL COMMENT 'senha do jogador',
  `data_nasci` date NOT NULL COMMENT 'data de nascimento do jogador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela dos jogadores';

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`id`, `nome`, `sobrenome`, `usuario`, `avatar`, `data_cadastro`, `email`, `senha`, `data_nasci`) VALUES
(1, 'pedro', 'mainak', 'nuel', '0', '2018-08-24 03:19:03', 'predo@g', '123', '2018-08-08'),
(2, 'nuel', 'mainpinador', 'pinero', '0', '2018-08-24 03:19:49', 'pina@pracaralho', '123', '2018-08-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores_has_questoes`
--

CREATE TABLE `jogadores_has_questoes` (
  `jogadores_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela jogadores',
  `questoes_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela questões',
  `resposta` varchar(45) NOT NULL COMMENT 'atributo onde guardará a resposta selecionada pelos jogadores'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela associatiova de jogadores e questões';

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'identificação da tabela logs',
  `data` datetime NOT NULL COMMENT 'data dos logins dos jogadores',
  `jogadores_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela jogadores'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de logins';

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis`
--

CREATE TABLE `niveis` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificação dos níveis',
  `nome` varchar(45) NOT NULL COMMENT 'nome dos níveis'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de níveis';

--
-- Extraindo dados da tabela `niveis`
--

INSERT INTO `niveis` (`id`, `nome`) VALUES
(1, 'Fácil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificação da tabela professores',
  `nome` varchar(45) NOT NULL COMMENT 'nome dos professores',
  `sobrenome` varchar(45) NOT NULL COMMENT 'sobrenome dos professores',
  `usuario` varchar(45) NOT NULL COMMENT 'nome de usuário dos professores',
  `email` varchar(45) NOT NULL COMMENT 'email dos professores',
  `senha` varchar(60) NOT NULL COMMENT 'senha dos professores',
  `data_cadastro` datetime NOT NULL COMMENT 'data do cadastro dos professores'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela dos professores';

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas`
--

CREATE TABLE `provas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identicação das provas',
  `temas_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela temas',
  `niveis_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela níveis',
  `nome` varchar(45) NOT NULL COMMENT 'nome das provas '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de provas';

--
-- Extraindo dados da tabela `provas`
--

INSERT INTO `provas` (`id`, `temas_id`, `niveis_id`, `nome`) VALUES
(1, 1, 1, 'Introdução HTML');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `enunciado` varchar(200) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificação dos níveis',
  `alternativa_a` varchar(45) NOT NULL COMMENT 'questão A',
  `alternativa_b` varchar(45) NOT NULL COMMENT 'questão B',
  `alternativa_c` varchar(45) NOT NULL COMMENT 'questão C',
  `alternativa_d` varchar(45) NOT NULL COMMENT 'questão D',
  `correta` varchar(45) NOT NULL COMMENT 'atributo que guardará a questão correta',
  `peso` int(11) NOT NULL COMMENT 'atributo onde vamos definir o valor que valerá as questões',
  `provas_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela provas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela das questões';

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`enunciado`, `id`, `alternativa_a`, `alternativa_b`, `alternativa_c`, `alternativa_d`, `correta`, `peso`, `provas_id`) VALUES
('O que significa HTML?', 1, 'Home Tool Markup Language', 'Hyperlinks and Text Markup Language', 'Hyper Text Markup Language', 'hyper Tool and Text Markup Language', 'C', 1, 1),
('Escolha o elemento HTML correto para o maior cabeçalho?', 2, '<head>', '<heading>', '<h1>', '<h6>', 'C', 1, 1),
('Qual é o elemento HTML correto para inserir uma quebra de linha??', 3, '<br>', '<break>', '<lb>', '<div>', 'A', 1, 1),
('Qual é o HTML correto para adicionar uma cor de plano de fundo?', 4, '<body style="background-color:yellow;">', '<body bg="yellow">', '<background>yellow</background>', '<background color="yellow">', 'A', 1, 1),
('Escolha o elemento HTML correto para definir o texto importante:', 5, '<important>', '<i>', '<b>', '<strong>', 'D', 1, 1),
('Escolha o elemento HTML correto para definir o texto enfatizado:', 6, '<italic>', '<i>', '<em>', '<br>', 'C', 1, 1),
('Qual caractere é usado para indicar uma tag final?', 7, '<', '*', '^', '/', 'D', 1, 1),
('Como você pode abrir um link em uma nova aba / janela do navegador?', 8, '<a href="url" new>', '<a href="url" target="_blank">', '<a href="url" target="new">', '<a href="url" new ="url">', 'B', 1, 1),
('Quais desses elementos são todos os elementos <table>?', 9, '<table><tr><td>', '<table><head><tfoot>', '<thead><body><tr>', '<table><tr><tt>', 'D', 1, 1),
('Como você pode fazer uma lista numerada?', 10, '<ul>', '<list>', '<ol>', '<dl>', 'C', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `temas`
--

CREATE TABLE `temas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificação do tema',
  `nome` varchar(45) NOT NULL COMMENT 'nome do tema'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela onde conterá os temas das provas ';

--
-- Extraindo dados da tabela `temas`
--

INSERT INTO `temas` (`id`, `nome`) VALUES
(1, 'HTML');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogadores_has_questoes`
--
ALTER TABLE `jogadores_has_questoes`
  ADD PRIMARY KEY (`jogadores_id`,`questoes_id`),
  ADD KEY `fk_jogadores_has_questoes_questoes1_idx` (`questoes_id`),
  ADD KEY `fk_jogadores_has_questoes_jogadores_idx` (`jogadores_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_logs_jogadores1_idx` (`jogadores_id`);

--
-- Indexes for table `niveis`
--
ALTER TABLE `niveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provas_temas1_idx` (`temas_id`),
  ADD KEY `fk_provas_niveis1_idx` (`niveis_id`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questoes_provas1_idx` (`provas_id`);

--
-- Indexes for table `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'indetificação da tabela jogadores', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `niveis`
--
ALTER TABLE `niveis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação dos níveis', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação da tabela professores';
--
-- AUTO_INCREMENT for table `provas`
--
ALTER TABLE `provas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identicação das provas', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação dos níveis', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação do tema', AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `jogadores_has_questoes`
--
ALTER TABLE `jogadores_has_questoes`
  ADD CONSTRAINT `fk_jogadores_has_questoes_jogadores` FOREIGN KEY (`jogadores_id`) REFERENCES `jogadores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jogadores_has_questoes_questoes1` FOREIGN KEY (`questoes_id`) REFERENCES `questoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_jogadores1` FOREIGN KEY (`jogadores_id`) REFERENCES `jogadores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `provas`
--
ALTER TABLE `provas`
  ADD CONSTRAINT `fk_provas_niveis1` FOREIGN KEY (`niveis_id`) REFERENCES `niveis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_provas_temas1` FOREIGN KEY (`temas_id`) REFERENCES `temas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `questoes`
--
ALTER TABLE `questoes`
  ADD CONSTRAINT `fk_questoes_provas1` FOREIGN KEY (`provas_id`) REFERENCES `provas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
