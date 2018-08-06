DROP SCHEMA IF EXISTS `controle_acesso` ;

CREATE SCHEMA IF NOT EXISTS `controle_acesso` DEFAULT CHARACTER SET utf8 ;
USE `controle_acesso` ;

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` INT NOT NULL auto_increment unique,
  `nome` VARCHAR(160) NOT NULL,
  `matricula` varchar(45) NOT NULL unique,
  `cargo` varchar(45) Not Null,
  `observacoes` text,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

DROP TABLE IF EXISTS `tb_naj` ;

CREATE TABLE IF NOT EXISTS `tb_naj` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `naj` VARCHAR(160) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

DROP TABLE IF EXISTS `tb_senha` ;

CREATE TABLE IF NOT EXISTS `tb_senha` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `senha` VARCHAR(45) NOT NULL,
  `tipo_senha` varchar(45) NOT null,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

DROP TABLE IF EXISTS `tb_login` ;

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` INT NOT NULL auto_increment unique,
  `nome` VARCHAR(160) NOT NULL,
  `matricula` varchar(45) NOT NULL,
  `login` varchar(45) Not Null,
  `senha` varchar(45) Not Null,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;