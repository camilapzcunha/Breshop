-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2023 às 14:28
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `breshop`
--
CREATE DATABASE IF NOT EXISTS `breshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `breshop`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `brechos`
--

DROP TABLE IF EXISTS `brechos`;
CREATE TABLE IF NOT EXISTS `brechos` (
  `idbrecho` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `nome_brecho` varchar(45) NOT NULL,
  `fone_vendedor` char(16) NOT NULL DEFAULT '(00) 0-0000-0000',
  `nome_vendedor` varchar(45) NOT NULL,
  `cpf_vendedor` char(14) NOT NULL DEFAULT '000.000.000-00',
  `dta_cadastro_vendedor` date NOT NULL,
  `foto_perfil` varchar(40) NOT NULL,
  `foto_header` varchar(40) NOT NULL,
  `biografia` varchar(100) NOT NULL,
  PRIMARY KEY (`idbrecho`),
  UNIQUE KEY `cpf_vendedor_UNIQUE` (`cpf_vendedor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `brechos`
--

INSERT INTO `brechos` (`idbrecho`, `idusuario`, `nome_brecho`, `fone_vendedor`, `nome_vendedor`, `cpf_vendedor`, `dta_cadastro_vendedor`, `foto_perfil`, `foto_header`, `biografia`) VALUES
(3, 0, 'Brechozeira', '11912703147', 'Laura Fernandes', '45517463800', '2023-06-12', 'foto.jpg', 'capa.jpg', 'lindo gostoso e cheiroso'),
(4, 5, 'Brechó da Rosa', '912345678', 'Rosa', '222.222.222-22', '2023-06-12', 'foto.jpg', 'capa.jpg', 'muito top'),
(5, 15, 'Brecho JUJU', '11258741258', 'Juliana', '45525814599', '2023-11-12', 'fotoperf', 'header', 'blablablabla');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `desc_categoria` varchar(40) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `desc_categoria`) VALUES
(1, 'Feminino'),
(2, 'Masculino'),
(3, 'Kids'),
(4, 'Acessórios'),
(5, 'Calçados'),
(6, 'Brinquedos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `nome_cliente` varchar(60) NOT NULL,
  `cpf_cliente` char(14) NOT NULL,
  `fone_cliente` char(16) NOT NULL,
  `dta_cadastro_cliente` datetime NOT NULL,
  `foto_perfil` varchar(40) NOT NULL,
  `foto_header` varchar(40) NOT NULL,
  `biografia` varchar(100) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `idusuario`, `nome_cliente`, `cpf_cliente`, `fone_cliente`, `dta_cadastro_cliente`, `foto_perfil`, `foto_header`, `biografia`) VALUES
(1, 5, 'Lau', '45517463800', '912345678', '2023-06-12 00:00:00', 'foto.jpg', 'capa.jpg', 'sou gostosa'),
(2, 16, 'Camila Pedroza', '45517463800', '11912703147', '2023-11-12 00:00:00', 'fotoperf', 'header', 'sou gostosa'),
(3, 16, 'Camila Pedroza', '45517463800', '11912703147', '2023-11-12 00:00:00', 'fotoperf', 'header', 'sou gostosa'),
(4, 16, 'Camila Pedroza', '45517463800', '11912703147', '2023-11-12 00:00:00', 'fotoperf', 'header', 'sou gostosa'),
(5, 10, 'Rosinha ', '55589887455', '11369852474', '2023-08-11 18:32:55', '', '', 'sou muito gataaaaaaaaaaa ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios_brechos`
--

DROP TABLE IF EXISTS `comentarios_brechos`;
CREATE TABLE IF NOT EXISTS `comentarios_brechos` (
  `idcoment` int(11) NOT NULL AUTO_INCREMENT,
  `idbrecho` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `mensagem` varchar(240) NOT NULL,
  PRIMARY KEY (`idcoment`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios_brechos`
--

INSERT INTO `comentarios_brechos` (`idcoment`, `idbrecho`, `idcliente`, `mensagem`) VALUES
(9, 3, 10, 'TOP'),
(8, 3, 10, 'A vendedora é muito simpática!'),
(7, 5, 10, 'A vendedora é muito simpática!'),
(10, 3, 10, 'Amei comprar com ela!'),
(11, 5, 10, 'Amei comprar com ela!'),
(12, 5, 10, 'Amei comprar com ela!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle`
--

DROP TABLE IF EXISTS `controle`;
CREATE TABLE IF NOT EXISTS `controle` (
  `codpedido` int(11) NOT NULL AUTO_INCREMENT,
  `codcliente` int(11) NOT NULL,
  `idbrecho` int(11) NOT NULL,
  `frete` varchar(40) NOT NULL,
  PRIMARY KEY (`codpedido`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `controle`
--

INSERT INTO `controle` (`codpedido`, `codcliente`, `idbrecho`, `frete`) VALUES
(6, 6, 1, 'xxx'),
(5, 6, 1, 'xxx'),
(7, 5, 1, 'xxx'),
(8, 5, 1, 'xxx'),
(9, 9, 3, 'xxx'),
(10, 0, 3, 'xxx'),
(11, 0, 3, 'xxx'),
(12, 9, 3, 'xxx'),
(13, 9, 3, 'xxx'),
(14, 4, 3, 'xxx'),
(15, 10, 3, 'xxx'),
(16, 10, 3, 'xxx'),
(17, 0, 3, 'xxx'),
(18, 10, 3, 'xxx'),
(19, 10, 3, 'xxx'),
(20, 16, 3, 'xxx'),
(21, 10, 4, 'xxx'),
(22, 10, 3, 'xxx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_usuario`
--

DROP TABLE IF EXISTS `endereco_usuario`;
CREATE TABLE IF NOT EXISTS `endereco_usuario` (
  `idendereco` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `rua_endereco` varchar(80) NOT NULL,
  `num_endereco` int(11) NOT NULL,
  `comp_endereco` varchar(30) NOT NULL,
  `bairro_endereco` varchar(40) NOT NULL,
  `cidade_endereco` varchar(40) NOT NULL,
  `uf_endereco` char(2) NOT NULL,
  `cep_endereco` char(9) NOT NULL,
  PRIMARY KEY (`idendereco`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco_usuario`
--

INSERT INTO `endereco_usuario` (`idendereco`, `idusuario`, `rua_endereco`, `num_endereco`, `comp_endereco`, `bairro_endereco`, `cidade_endereco`, `uf_endereco`, `cep_endereco`) VALUES
(1, 10, 'Rua do Sorriso ', 12, '', 'Vila Felicidade', 'Santa Alegria', 'SP', '09791060'),
(2, 15, 'Rua Alberto José', 577, '', 'Jardim Petrolina', 'Santo André', 'SP', '09592372');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_produto`
--

DROP TABLE IF EXISTS `imagem_produto`;
CREATE TABLE IF NOT EXISTS `imagem_produto` (
  `id_imagem_produto` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) NOT NULL,
  `imagem_produto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_imagem_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marca` int(11) NOT NULL,
  `desc_marca` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id_marca`, `desc_marca`) VALUES
(1, 'Renner');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `codpedido` int(11) NOT NULL,
  `codcliente` int(11) NOT NULL,
  `codprod` int(11) NOT NULL,
  `preco` double NOT NULL,
  `coditem` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`coditem`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`codpedido`, `codcliente`, `codprod`, `preco`, `coditem`) VALUES
(7, 5, 3, 8, 3),
(6, 6, 2, 25, 2),
(7, 5, 2, 25, 4),
(8, 5, 1, 20, 5),
(9, 9, 1, 20, 6),
(12, 9, 3, 8, 7),
(12, 9, 6, 20, 8),
(13, 9, 1, 20, 9),
(13, 9, 1, 20, 10),
(14, 4, 1, 20, 11),
(14, 4, 2, 25, 12),
(15, 10, 1, 20, 13),
(15, 10, 6, 20, 14),
(16, 10, 1, 20, 15),
(18, 10, 1, 20, 16),
(19, 10, 1, 20, 17),
(20, 16, 1, 20, 18),
(21, 10, 8, 15, 19),
(22, 10, 2, 25, 20),
(23, 10, 1, 20, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `idbrecho` int(11) NOT NULL,
  `nome_produto` varchar(45) NOT NULL,
  `desc_produto` text NOT NULL,
  `valor_prod` decimal(7,2) NOT NULL,
  `status_produto` varchar(40) NOT NULL,
  `sub_categoria` varchar(40) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `img_prod` varchar(40) NOT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `idproduto_UNIQUE` (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `idcategoria`, `idbrecho`, `nome_produto`, `desc_produto`, `valor_prod`, `status_produto`, `sub_categoria`, `id_marca`, `img_prod`) VALUES
(1, 1, 3, 'Vestido Preto Básico', 'Vestido super versátil na cor preta, novo em folha e super confortável.', '20.00', 'Á venda', 'Vestido', 1, 'vest.jpg'),
(2, 1, 3, 'Moletom Lilás Espaço', 'blablablablabla', '25.00', 'Á venda', 'Moletom', 2, 'mol_lilas.jpg'),
(3, 1, 3, 'Cropped Listrado Colorido', 'blablablablabla', '8.00', 'Á venda', 'Blusa', 1, 'cropped_listrado.jpg'),
(4, 2, 4, 'Camiseta Masculina', 'xxxxxx', '20.00', 'Á venda', 'Camisas', 2, 'camiseta.jpg'),
(6, 2, 5, 'Camiseta Masculina', 'xxxxxx', '20.00', 'Á venda', 'Camisas', 2, 'camiseta3.jpg'),
(8, 1, 5, 'Vestido Colorido', 'suuuper lindo', '15.00', 'Ã€ Venda', 'Vestidos', 1, 'vestidofloral.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(80) NOT NULL,
  `senha_usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `email_usuario`, `senha_usuario`) VALUES
(5, 'mariaheloiza@gmail.com', 'ma123'),
(8, 'brechozeira@gmail.com', 'bre123'),
(10, 'rosalalala@gmail.com', '123'),
(13, 'camille@gmail.com', 'ca123'),
(15, 'juliana@gmail.com', 'ju123'),
(16, 'camilalindissima@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
