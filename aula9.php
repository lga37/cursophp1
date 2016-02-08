<?php

/*
-- nestas 2 linhas estamos criando um banco e 'usando' ele.
-- create database loja;
-- use loja;

-- Comentario em mysql
-- Tambem finalizamos instrucoes com ;
-- informaçõe sobre `caracter`
-- para caracteres tipo string usar aspas '
-- o mysql tambem aceita numeros com aspas '
-- diferença entre varchar e char 
-- varchar(80) o string vai de 0 a 80 
-- char(2) : aceita strings de tamanho fixo no case 2, exemplo campo UF : SP, MG, ES ...
-- charset=utf8
-- unsigned : nao admite valores negativos


CREATE TABLE IF NOT EXISTS `categorias` (
		`id` int(4) unsigned NOT NULL AUTO_INCREMENT,
		`nome` varchar(20) NOT NULL,
		PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;




-- Inserindo 1 registro
INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'eletrÃ´nicos');


-- Inserindo varios registros
INSERT INTO `categorias` (`id`, `nome`) VALUES
(2, 'InformÃ¡tica'),
(3, 'VestuÃ¡rio'),
(4, 'Diversos');

-- Uma tipica instrucao update:
UPDATE `categorias` SET `nome` = 'Vestuario' WHERE `id` = 3;

-- Uma tipica instrucao delete:
-- DELETE FROM `categorias` WHERE `id` = 3;

-- selecionando todas as categorias, percebam que o * me traz todos os campos :
SELECT * from categorias;

-- neste select retorno somente o campo nome :
SELECT nome from categorias;

-- estou selecionando somente o segundo registro :
SELECT * from categorias where id=2;



-- Tab produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `preco` float NOT NULL,
  `peso` float NOT NULL DEFAULT '0',
  `prazo` varchar(12) NOT NULL DEFAULT 'E',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `img` varchar(50) DEFAULT NULL,
  `desc` text,
  `estoque` int(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categ_id`, `preco`, `peso`, `prazo`, `status`, `img`, `desc`, `estoque`) VALUES
(1, 'Calculadora Cientifica', 1, 300, 0.5, 'E', 1, 'calculadora.jpg', 'Desc', 3);


INSERT INTO `produtos` (`id`, `nome`, `categ_id`, `preco`, `peso`, `prazo`, `status`, `img`, `desc`, `estoque`) VALUES
(2, 'Aparelho GPS Geolocalizacao', 1, 1300.5, 1, '3', 1, 'gps.jpg', 'Desc', 2),
(3, 'Relogio de parede', 1, 110.5, 2, 'E', 1, 'relogio.jpg', 'Desc', 3);


-- selecionando todas as produtos, percebam que o * me traz todos os campos :
SELECT * from produtos;

-- neste select retorno somente campos que eu especificar :
SELECT nome,preco,peso from produtos;

-- estou selecionando somente o segundo registro :
SELECT * from produtos where id=2;

-- estou selecionando somente o nome do segundo registro :
SELECT nome from produtos where id=2;


# aqui estou criando um usuario de nome lga com senha 123 e permissao de somente select as tabelas do banco loja.
GRANT select ON loja.* TO lga@localhost IDENTIFIED BY '123' WITH GRANT OPTION;

*/