-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 08/10/2012 às 17h48min
-- Versão do Servidor: 5.5.24
-- Versão do PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `saudeaud_fcm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `genetica`
--

CREATE TABLE IF NOT EXISTS `genetica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genetica` varchar(250) NOT NULL,
  `hipotese_diagnostica` text NOT NULL,
  `conduta` text NOT NULL,
  `alteracoes_observadas` text NOT NULL,
  `homozigoto_normal` enum('true','false') NOT NULL DEFAULT 'false',
  `homozigoto_mutante` enum('true','false') NOT NULL DEFAULT 'false',
  `heterozigoto` enum('true','false') NOT NULL DEFAULT 'false',
  `del_gjb6_d13s1830` enum('true','false') NOT NULL DEFAULT 'false',
  `del_gjb6_d13s1854` enum('true','false') NOT NULL DEFAULT 'false',
  `del_3` enum('true','false') NOT NULL DEFAULT 'false',
  `del_4` enum('true','false') NOT NULL DEFAULT 'false',
  `del_5` enum('true','false') NOT NULL DEFAULT 'false',
  `a1555g` enum('true','false') NOT NULL DEFAULT 'false',
  `c1494t` enum('true','false') NOT NULL DEFAULT 'false',
  `a827g` enum('true','false') NOT NULL DEFAULT 'false',
  `a7445g` enum('true','false') NOT NULL DEFAULT 'false',
  `a7444g` enum('true','false') NOT NULL DEFAULT 'false',
  `a3243g` enum('true','false') NOT NULL DEFAULT 'false',
  `gjb2` enum('true','false') NOT NULL DEFAULT 'false',
  `gjb2_genotipo` varchar(250) NOT NULL,
  `gjb6` enum('true','false') NOT NULL DEFAULT 'false',
  `gjb6_genotipo` varchar(250) NOT NULL,
  `gjb3` enum('true','false') NOT NULL DEFAULT 'false',
  `gjb3_genotipo` varchar(250) NOT NULL DEFAULT '',
  `slc26a4` enum('true','false') NOT NULL DEFAULT 'false',
  `slc26a4_genotipo` varchar(250) NOT NULL,
  `otof` enum('true','false') NOT NULL DEFAULT 'false',
  `otof_genotipo` varchar(250) NOT NULL,
  `mtrnr1` enum('true','false') NOT NULL DEFAULT 'false',
  `mtrnr1_genotipo` varchar(250) NOT NULL,
  `outros_genes` varchar(250) NOT NULL,
  `outros_genes_genotipo` varchar(250) NOT NULL,
  `last_update` datetime NOT NULL,
  `paciente_r` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paciente_r` (`paciente_r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `genetica`
--

INSERT INTO `genetica` (`id`, `genetica`, `hipotese_diagnostica`, `conduta`, `alteracoes_observadas`, `homozigoto_normal`, `homozigoto_mutante`, `heterozigoto`, `del_gjb6_d13s1830`, `del_gjb6_d13s1854`, `del_3`, `del_4`, `del_5`, `a1555g`, `c1494t`, `a827g`, `a7445g`, `a7444g`, `a3243g`, `gjb2`, `gjb2_genotipo`, `gjb6`, `gjb6_genotipo`, `gjb3`, `gjb3_genotipo`, `slc26a4`, `slc26a4_genotipo`, `otof`, `otof_genotipo`, `mtrnr1`, `mtrnr1_genotipo`, `outros_genes`, `outros_genes_genotipo`, `last_update`, `paciente_r`) VALUES
(1, 'Teste', 'Teste', 'Teste', 'Teste', 'true', 'true', '', '', 'true', 'true', '', 'true', 'true', '', '', '', '', 'false', 'false', '', 'true', 'Teste', 'false', '', 'false', '', 'false', '', 'false', '', 'T3ST3', 'Teste', '0000-00-00 00:00:00', 1),
(2, '1', '1', '1', '1', '', 'true', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '1', '', '1', '', '1', '', '1', 'true', '1', 'Não', '1', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `hc` int(11) NOT NULL,
  `nome_mae` varchar(250) NOT NULL,
  `hc_mae` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` enum('masculino','feminino') NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `telefone_fixo` varchar(15) NOT NULL,
  `telefone_movel` varchar(15) NOT NULL,
  `telefone_trabalho` varchar(15) NOT NULL,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `hc`, `nome_mae`, `hc_mae`, `data_nascimento`, `sexo`, `endereco`, `cidade`, `telefone_fixo`, `telefone_movel`, `telefone_trabalho`, `last_update`) VALUES
(1, 'Teste', 1561, 'Teste Mae', 5564, '1989-02-24', 'masculino', 'R Teste dos Teste', 'Teste', '156467', '4654', '64654', '0000-00-00 00:00:00'),
(2, 'Teste', 123123, '123123', 123123, '2009-09-19', 'masculino', 'R teste', 'Teste', '23123123', '12312312', '312321', '0000-00-00 00:00:00'),
(3, 'João Teste 1', 1, 'Mae do Teste 1', 2, '1989-02-24', 'masculino', 'Rua dos Teste, nº1 - Vila Teste', 'Teste', '(19)1111-2222', '(19)1111-3333', '(19)1111-2222', '2012-10-08 10:22:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `triagem`
--

CREATE TABLE IF NOT EXISTS `triagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peso` int(11) NOT NULL,
  `apgar_1` int(11) NOT NULL,
  `apgar_5` int(11) NOT NULL,
  `apgar_10` int(11) DEFAULT NULL,
  `apgar_15` int(11) DEFAULT NULL,
  `idade_semanas` int(11) NOT NULL,
  `idade_dias` int(11) NOT NULL,
  `metodo_avaliacao` enum('capurro','new_ballard','ecografia','amenorréia') NOT NULL,
  `avaliacao_score` int(11) DEFAULT NULL,
  `termo` enum('termo','pre_termo') NOT NULL,
  `crescimento` enum('aig','pig','gig') NOT NULL,
  `tipo_exame` enum('peate-a','eoat','eoa-pd') NOT NULL,
  `resultado_esquerdo` enum('passou','falhou') NOT NULL,
  `resultado_direito` enum('passou','falhou') NOT NULL,
  `indicadores_risco` text NOT NULL,
  `last_update` datetime NOT NULL,
  `data_triagem` date NOT NULL,
  `paciente_r` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paciente_r` (`paciente_r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `triagem`
--

INSERT INTO `triagem` (`id`, `peso`, `apgar_1`, `apgar_5`, `apgar_10`, `apgar_15`, `idade_semanas`, `idade_dias`, `metodo_avaliacao`, `avaliacao_score`, `termo`, `crescimento`, `tipo_exame`, `resultado_esquerdo`, `resultado_direito`, `indicadores_risco`, `last_update`, `data_triagem`, `paciente_r`) VALUES
(1, 500, 1, 2, 2, NULL, 5, 45, 'capurro', 60, 'termo', 'aig', 'peate-a', 'passou', 'passou', 'Algum indicador', '0000-00-00 00:00:00', '0000-00-00', 1),
(4, 1, 1, 1, 1, NULL, 1, 1, 'capurro', 1, 'pre_termo', 'aig', 'peate-a', 'passou', 'passou', '1', '0000-00-00 00:00:00', '0000-00-00', 2),
(5, 2, 2, 2, 2, NULL, 2, 2, 'capurro', 2, 'pre_termo', 'aig', '', 'falhou', 'passou', '2', '0000-00-00 00:00:00', '0000-00-00', 1),
(6, 3, 3, 3, 3, NULL, 3, 3, 'capurro', 3, 'termo', 'aig', 'peate-a', 'passou', 'passou', '3', '0000-00-00 00:00:00', '0000-00-00', 2),
(7, 50, 1, 1, 1, 1, 1, 1, 'amenorréia', NULL, 'termo', 'pig', 'peate-a', 'passou', 'falhou', 'Teste', '2012-10-08 17:19:20', '0000-00-00', 3);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `genetica`
--
ALTER TABLE `genetica`
  ADD CONSTRAINT `genetica_ibfk_1` FOREIGN KEY (`paciente_r`) REFERENCES `paciente` (`id`);

--
-- Restrições para a tabela `triagem`
--
ALTER TABLE `triagem`
  ADD CONSTRAINT `triagem_ibfk_1` FOREIGN KEY (`paciente_r`) REFERENCES `paciente` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
