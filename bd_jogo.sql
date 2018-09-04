-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/09/2018 às 02:16
-- Versão do servidor: 5.7.11-log
-- Versão do PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_jogo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogadores`
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
-- Fazendo dump de dados para tabela `jogadores`
--

INSERT INTO `jogadores` (`id`, `nome`, `sobrenome`, `usuario`, `avatar`, `data_cadastro`, `email`, `senha`, `data_nasci`) VALUES
(1, 'pedro', 'mainak', 'nuel', '0', '2018-08-24 03:19:03', 'predo@g', '123', '2018-08-08'),
(2, 'nuel', 'mainpinador', 'pinero', '0', '2018-08-24 03:19:49', 'pina@pracaralho', '123', '2018-08-08');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogadores_has_questoes`
--

CREATE TABLE `jogadores_has_questoes` (
  `jogadores_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela jogadores',
  `questoes_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela questões',
  `resposta` varchar(45) NOT NULL COMMENT 'atributo onde guardará a resposta selecionada pelos jogadores'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela associatiova de jogadores e questões';

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'identificação da tabela logs',
  `data` datetime NOT NULL COMMENT 'data dos logins dos jogadores',
  `jogadores_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela jogadores'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de logins';

-- --------------------------------------------------------

--
-- Estrutura para tabela `niveis`
--

CREATE TABLE `niveis` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificação dos níveis',
  `nome` varchar(45) NOT NULL COMMENT 'nome dos níveis'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de níveis';

--
-- Fazendo dump de dados para tabela `niveis`
--

INSERT INTO `niveis` (`id`, `nome`) VALUES
(1, 'Fácil');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
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
-- Estrutura para tabela `provas`
--

CREATE TABLE `provas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identicação das provas',
  `temas_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela temas',
  `niveis_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela níveis',
  `nome` varchar(45) NOT NULL COMMENT 'nome das provas '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de provas';

--
-- Fazendo dump de dados para tabela `provas`
--

INSERT INTO `provas` (`id`, `temas_id`, `niveis_id`, `nome`) VALUES
(1, 1, 1, 'Introdução HTML'),
(2, 2, 1, 'Introdução PHP'),
(3, 3, 1, 'Introdução CSS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `questoes`
--

CREATE TABLE `questoes` (
  `enunciado` varchar(200) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificação dos níveis',
  `alternativa_a` varchar(200) NOT NULL COMMENT 'questão A',
  `alternativa_b` varchar(200) NOT NULL COMMENT 'questão B',
  `alternativa_c` varchar(200) NOT NULL COMMENT 'questão C',
  `alternativa_d` varchar(200) NOT NULL COMMENT 'questão D',
  `correta` varchar(200) NOT NULL COMMENT 'atributo que guardará a questão correta',
  `peso` int(11) NOT NULL COMMENT 'atributo onde vamos definir o valor que valerá as questões',
  `provas_id` int(10) UNSIGNED NOT NULL COMMENT 'atributo identificador da tabela provas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela das questões';

--
-- Fazendo dump de dados para tabela `questoes`
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
('Como você pode fazer uma lista numerada?', 10, '<ul>', '<list>', '<ol>', '<dl>', 'C', 1, 1),
('O que significa o PHP?', 11, 'Hypertext Preprocessor', 'Personal Hypertext Processor', 'Private Home Page', 'Prototype hypertext page', 'A', 1, 2),
('Quais os delimitadores que cercam os scripts do PHP?', 12, '<?php>...</?>', '<?php...?>', '<script>...</script>', '<&>...</&>', 'B', 1, 2),
('Como você escreve "Hello World" em PHP?', 13, '"Hello World";', 'Document.Write("Hello World");', 'echo "Hello World";', '<"Hello World">;', 'C', 1, 2),
('Todas as variáveis no PHP começam com qual símbolo?', 14, '&', '!', '$', '#', 'C', 1, 2),
('Qual é a maneira correta de terminar uma instrução PHP?', 15, '.', 'New line', ';', '</php>', 'C', 1, 2),
('Como você obtém informações de um formulário que é enviado usando o método "get"?', 16, 'Request.Form;', 'Request.QueryString;', '$_GET[];', '<$_GET>', 'C', 1, 2),
('Qual é a maneira correta de se conectar a um banco de dados MySQL?', 17, 'mysql_select_db();', 'mysql_connect();', 'connect();', 'connect_db();', 'B', 1, 2),
('Qual é a maneira correta de criar uma função em PHP?', 18, 'Function_Myfunction();', 'Myfunction()', 'Create_function();', 'Function Myfunction();', 'D', 1, 2),
('A sintaxe do PHP é mais semelhante a:', 19, 'Java Script', 'C & perl', 'ASP', 'Asp.net', 'B', 1, 2),
('Qual é a maneira correta de abrir o arquivo "time.txt" como legível?', 20, 'open("time.txt");', 'open_file(“time.txt”);', 'fopen(“time.txt”,”r”);', 'fopen(“time.txt”);', 'C', 1, 2),
('O que significa o CSS?', 21, 'Creative Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 'Computer Style Sheets', 'B', 1, 3),
('Qual é o HTML correto para se referir a uma folha de estilos externa?', 22, '<stylesheet>mystyle.css</stylesheet>', '<link rel="stylesheet"type="text/css" href="mystyle.css">', '<style src="mystyle.css">', '<link src="mystyle.css">', 'B', 1, 3),
('Qual tag HTML é usada para definir uma folha de estilo interna?', 23, '<css>', '<script>', '<style>', '<stylesheet>', 'C', 1, 3),
('Qual atributo HTML é usado para definir estilos embutidos?', 24, 'font', 'styles', 'style', 'class', 'C', 1, 3),
('Qual é a sintaxe CSS correta?', 25, 'body {color: black}', 'body:color=black;', '{body;color:black;}', '{body:color=black;}', 'A', 1, 3),
('Como você insere um comentário em um arquivo CSS?', 26, '// this is a comment', '''this is a comment', '/*this is a comment*/', '//this is a comment//', 'C', 1, 3),
('Qual propriedade é usada para alterar a cor do plano de fundo?', 27, 'color', 'background-color', 'bgcolor', 'background-collor', 'B', 1, 3),
('Como você adiciona uma cor de fundo para todos os elementos <h1>?', 28, 'h1 {background-color:#FFFFFF;}', 'all.h1 {background-color:#FFFFFF;}', 'h1.all {background-color:#FFFFFF;}', 'h1({background-color:#FFFFFF;})', 'B', 1, 3),
('Qual propriedade CSS é usada para alterar a cor do texto de um elemento?', 29, 'text-color', 'color', 'fgcolor', 'color_text', 'B', 1, 3),
('Qual propriedade CSS controla o tamanho do texto?', 30, 'text-size', 'font-size', 'text-style', 'font-style', 'B', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `temas`
--

CREATE TABLE `temas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificação do tema',
  `nome` varchar(45) NOT NULL COMMENT 'nome do tema'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela onde conterá os temas das provas ';

--
-- Fazendo dump de dados para tabela `temas`
--

INSERT INTO `temas` (`id`, `nome`) VALUES
(1, 'HTML'),
(2, 'PHP'),
(3, 'CSS');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `jogadores_has_questoes`
--
ALTER TABLE `jogadores_has_questoes`
  ADD PRIMARY KEY (`jogadores_id`,`questoes_id`),
  ADD KEY `fk_jogadores_has_questoes_questoes1_idx` (`questoes_id`),
  ADD KEY `fk_jogadores_has_questoes_jogadores_idx` (`jogadores_id`);

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_logs_jogadores1_idx` (`jogadores_id`);

--
-- Índices de tabela `niveis`
--
ALTER TABLE `niveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provas_temas1_idx` (`temas_id`),
  ADD KEY `fk_provas_niveis1_idx` (`niveis_id`);

--
-- Índices de tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questoes_provas1_idx` (`provas_id`);

--
-- Índices de tabela `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'indetificação da tabela jogadores', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `niveis`
--
ALTER TABLE `niveis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação dos níveis', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação da tabela professores';
--
-- AUTO_INCREMENT de tabela `provas`
--
ALTER TABLE `provas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identicação das provas', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação dos níveis', AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de tabela `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificação do tema', AUTO_INCREMENT=4;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `jogadores_has_questoes`
--
ALTER TABLE `jogadores_has_questoes`
  ADD CONSTRAINT `fk_jogadores_has_questoes_jogadores` FOREIGN KEY (`jogadores_id`) REFERENCES `jogadores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jogadores_has_questoes_questoes1` FOREIGN KEY (`questoes_id`) REFERENCES `questoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_jogadores1` FOREIGN KEY (`jogadores_id`) REFERENCES `jogadores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `provas`
--
ALTER TABLE `provas`
  ADD CONSTRAINT `fk_provas_niveis1` FOREIGN KEY (`niveis_id`) REFERENCES `niveis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_provas_temas1` FOREIGN KEY (`temas_id`) REFERENCES `temas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `questoes`
--
ALTER TABLE `questoes`
  ADD CONSTRAINT `fk_questoes_provas1` FOREIGN KEY (`provas_id`) REFERENCES `provas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
