-- MySQL Workbench Synchronization
-- Generated: 2016-11-27 22:04
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Soares

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS ` estartho_bdunp` DEFAULT CHARACTER SET latin1 ;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Unidade` (
  `idUnidade` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUnidade`),
  UNIQUE INDEX `idUnidade_UNIQUE` (`idUnidade` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Sala` (
  `idSala` INT(11) NOT NULL AUTO_INCREMENT,
  `setor` VARCHAR(10) CHARACTER SET 'latin1' NOT NULL,
  `nome` VARCHAR(20) CHARACTER SET 'latin1' NOT NULL,
  `capacidade` INT(11) NOT NULL,
  `idUnidadeFK` INT(11) NOT NULL,
  PRIMARY KEY (`idSala`),
  UNIQUE INDEX `idSala_UNIQUE` (`idSala` ASC),
  INDEX `fk_Sala_Unidade1_idx` (`idUnidadeFK` ASC),
  CONSTRAINT `fk_Sala_Unidade`
    FOREIGN KEY (`idUnidadeFK`)
    REFERENCES ` estartho_bdunp`.`Unidade` (`idUnidade`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Curso` (
  `idCurso` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeCurso` VARCHAR(45) CHARACTER SET 'latin1' NOT NULL,
  PRIMARY KEY (`idCurso`),
  UNIQUE INDEX `nomeCurso_UNIQUE` (`nomeCurso` ASC),
  UNIQUE INDEX `idCurso_UNIQUE` (`idCurso` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`LinhaPesquisa` (
  `idLinhaPesquisa` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) CHARACTER SET 'latin1' NOT NULL,
  `idCursoFK` INT(11) NOT NULL,
  PRIMARY KEY (`idLinhaPesquisa`),
  UNIQUE INDEX `idLinhaPesquisa_UNIQUE` (`idLinhaPesquisa` ASC),
  UNIQUE INDEX `LinhaPesquisa_UNIQUE` (`nome` ASC),
  INDEX `FKCursoLinhaPesquisa` (`idCursoFK` ASC),
  CONSTRAINT `FKCurso_LinhaPesquisa`
    FOREIGN KEY (`idCursoFK`)
    REFERENCES ` estartho_bdunp`.`Curso` (`idCurso`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Professor` (
  `idProfessor` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `matricula` VARCHAR(6) CHARACTER SET 'latin1' NOT NULL,
  `email` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `login` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `senha` VARCHAR(20) CHARACTER SET 'latin1' NOT NULL,
  PRIMARY KEY (`idProfessor`),
  UNIQUE INDEX `idProfessor_UNIQUE` (`idProfessor` ASC),
  UNIQUE INDEX `matricula_UNIQUE` (`matricula` ASC),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Aluno` (
  `idAluno` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `matricula` CHAR(9) CHARACTER SET 'latin1' NOT NULL,
  `email` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `login` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `senha` VARCHAR(20) CHARACTER SET 'latin1' NOT NULL,
  `idCursoFK` INT(11) NOT NULL,
  PRIMARY KEY (`idAluno`),
  UNIQUE INDEX `idAluno_UNIQUE` (`idAluno` ASC),
  UNIQUE INDEX `matricula_UNIQUE` (`matricula` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  INDEX `FKCursoAluno` (`idCursoFK` ASC),
  CONSTRAINT `FKCurso_Aluno`
    FOREIGN KEY (`idCursoFK`)
    REFERENCES ` estartho_bdunp`.`Curso` (`idCurso`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`TCC` (
  `idTCC` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `resumo` VARCHAR(250) CHARACTER SET 'latin1' NOT NULL,
  `statusTCC` TINYINT(1) NOT NULL COMMENT '1 - Finalizado\n2 - Pendente\n3 - Negado\n4 - Aceite',
  `objetivo` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `justificativa` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `TCCTipo` TINYINT(1) NOT NULL,
  `idLinhaPesquisaFK` INT(11) NOT NULL,
  PRIMARY KEY (`idTCC`),
  UNIQUE INDEX `idTCC_UNIQUE` (`idTCC` ASC),
  UNIQUE INDEX `titulo_UNIQUE` (`titulo` ASC),
  INDEX `FKLinha_Pesquisa_TCC` (`idLinhaPesquisaFK` ASC),
  CONSTRAINT `FKLinhaPesquisa_TCC`
    FOREIGN KEY (`idLinhaPesquisaFK`)
    REFERENCES ` estartho_bdunp`.`LinhaPesquisa` (`idLinhaPesquisa`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Agendamento` (
  `idAgendamento` INT(11) NOT NULL AUTO_INCREMENT,
  `motivo` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `dataHora` DATETIME NOT NULL,
  `idProfessorFK` INT(11) NULL DEFAULT NULL,
  `idAlunoFK` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idAgendamento`),
  UNIQUE INDEX `idAgendamento_UNIQUE` (`idAgendamento` ASC),
  INDEX `FKProfessorAgendamento` (`idProfessorFK` ASC),
  INDEX `FKAlunoAgendamento` (`idAlunoFK` ASC),
  CONSTRAINT `FKAluno_Agendamento`
    FOREIGN KEY (`idAlunoFK`)
    REFERENCES ` estartho_bdunp`.`Aluno` (`idAluno`),
  CONSTRAINT `FKProfessor_Agendamento`
    FOREIGN KEY (`idProfessorFK`)
    REFERENCES ` estartho_bdunp`.`Professor` (`idProfessor`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Arquivo` (
  `idArquivo` INT(11) NOT NULL AUTO_INCREMENT,
  `link` VARCHAR(250) CHARACTER SET 'latin1' NOT NULL,
  `idTCCFK` INT(11) NOT NULL,
  `versao` VARCHAR(45) CHARACTER SET 'latin1' NOT NULL COMMENT 'TCC 1\nTCC 2\nBanca\nFinal com correções\n',
  PRIMARY KEY (`idArquivo`),
  UNIQUE INDEX `idArquivo_UNIQUE` (`idArquivo` ASC),
  INDEX `FKTCCArquivo` (`idTCCFK` ASC),
  CONSTRAINT `FKTCC_Arquivo`
    FOREIGN KEY (`idTCCFK`)
    REFERENCES ` estartho_bdunp`.`TCC` (`idTCC`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Atividade` (
  `idAtividade` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `mes` DATE NOT NULL,
  `descricao` VARCHAR(250) CHARACTER SET 'latin1' NOT NULL,
  `idTCCFK` INT(11) NOT NULL,
  PRIMARY KEY (`idAtividade`),
  UNIQUE INDEX `idAtividade_UNIQUE` (`idAtividade` ASC),
  INDEX `FKTCCAtividade` (`idTCCFK` ASC),
  CONSTRAINT `FKTCC_Atividade`
    FOREIGN KEY (`idTCCFK`)
    REFERENCES ` estartho_bdunp`.`TCC` (`idTCC`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Componentes` (
  `idProfessorFK` INT(11) NOT NULL,
  `idAlunoFK1` INT(11) NOT NULL,
  `idAlunoFK2` INT(11) NULL DEFAULT NULL,
  `idTCCFK` INT(11) NOT NULL,
  INDEX `FKProfessorComponente` (`idProfessorFK` ASC),
  INDEX `FKAlunoComponente` (`idAlunoFK1` ASC),
  INDEX `FKAlunoComponente_2` (`idAlunoFK2` ASC),
  INDEX `FKTCCComponente` (`idTCCFK` ASC),
  UNIQUE INDEX `idAlunoFK1_UNIQUE` (`idAlunoFK1` ASC),
  UNIQUE INDEX `idAlunoFK2_UNIQUE` (`idAlunoFK2` ASC),
  UNIQUE INDEX `idTCCFK_UNIQUE` (`idTCCFK` ASC),
  CONSTRAINT `FKAluno_Componente`
    FOREIGN KEY (`idAlunoFK1`)
    REFERENCES ` estartho_bdunp`.`Aluno` (`idAluno`)
    ON DELETE RESTRICT,
  CONSTRAINT `FKAluno_Componente_2`
    FOREIGN KEY (`idAlunoFK2`)
    REFERENCES ` estartho_bdunp`.`Aluno` (`idAluno`),
  CONSTRAINT `FKProfessor_Componente`
    FOREIGN KEY (`idProfessorFK`)
    REFERENCES ` estartho_bdunp`.`Professor` (`idProfessor`),
  CONSTRAINT `FKTCC_Componente`
    FOREIGN KEY (`idTCCFK`)
    REFERENCES ` estartho_bdunp`.`TCC` (`idTCC`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Cronograma` (
  `idCronograma` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeatividade` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `porque` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `onde` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `quando` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `quem` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `como` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `quanto` VARCHAR(45) CHARACTER SET 'latin1' NOT NULL,
  PRIMARY KEY (`idCronograma`),
  UNIQUE INDEX `idCronograma_UNIQUE` (`idCronograma` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Reserva` (
  `idReserva` INT(11) NOT NULL AUTO_INCREMENT,
  `dataHora` DATETIME NOT NULL,
  `idProfessorFK` INT(11) NOT NULL,
  `idSalaFK` INT(11) NOT NULL,
  PRIMARY KEY (`idReserva`),
  UNIQUE INDEX `idReserva_UNIQUE` (`idReserva` ASC),
  INDEX `FKProfessorReserva` (`idProfessorFK` ASC),
  INDEX `FKSalaAulaReserva` (`idSalaFK` ASC),
  CONSTRAINT `FKProfessor_Reserva`
    FOREIGN KEY (`idProfessorFK`)
    REFERENCES ` estartho_bdunp`.`Professor` (`idProfessor`),
  CONSTRAINT `FKSalaAula_Reserva`
    FOREIGN KEY (`idSalaFK`)
    REFERENCES ` estartho_bdunp`.`Sala` (`idSala`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Defesa` (
  `idDefesa` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL,
  `idTCCFK` INT(11) NOT NULL,
  `idReservaFK` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idDefesa`),
  UNIQUE INDEX `idDefesa_UNIQUE` (`idDefesa` ASC),
  INDEX `FKTCCDefesa` (`idTCCFK` ASC),
  INDEX `FKReservaDefesa` (`idReservaFK` ASC),
  CONSTRAINT `FKReserva_Defesa`
    FOREIGN KEY (`idReservaFK`)
    REFERENCES ` estartho_bdunp`.`Reserva` (`idReserva`),
  CONSTRAINT `FKTCC_Defesa`
    FOREIGN KEY (`idTCCFK`)
    REFERENCES ` estartho_bdunp`.`TCC` (`idTCC`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Erros` (
  `idErros` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeErro` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `categoria` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  PRIMARY KEY (`idErros`),
  UNIQUE INDEX `idErros_UNIQUE` (`idErros` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`ErrosTCC` (
  `idErrosTCC` INT(11) NOT NULL AUTO_INCREMENT,
  `idTCCFK` INT(11) NOT NULL,
  `idErrosFK` INT(11) NOT NULL,
  PRIMARY KEY (`idErrosTCC`),
  UNIQUE INDEX `idErrosTCC_UNIQUE` (`idErrosTCC` ASC),
  INDEX `FKTCCErrosTCC` (`idTCCFK` ASC),
  INDEX `FKErrosErrosTCC` (`idErrosFK` ASC),
  CONSTRAINT `FKErros_ErrosTCC`
    FOREIGN KEY (`idErrosFK`)
    REFERENCES ` estartho_bdunp`.`Erros` (`idErros`)
    ON UPDATE CASCADE,
  CONSTRAINT `FKTCC_ErrosTCC`
    FOREIGN KEY (`idTCCFK`)
    REFERENCES ` estartho_bdunp`.`TCC` (`idTCC`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Evento` (
  `idEvento` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `dataHora` DATETIME NOT NULL,
  `local` VARCHAR(100) CHARACTER SET 'latin1' NOT NULL,
  `idProfessorFK` INT(11) NOT NULL,
  `idCursoFK` INT(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  UNIQUE INDEX `idEvento_UNIQUE` (`idEvento` ASC),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  INDEX `FKProfessorEvento` (`idProfessorFK` ASC),
  INDEX `FKCursoEvento` (`idCursoFK` ASC),
  CONSTRAINT `FKCurso_Evento`
    FOREIGN KEY (`idCursoFK`)
    REFERENCES ` estartho_bdunp`.`Curso` (`idCurso`),
  CONSTRAINT `FKProfessor_Evento`
    FOREIGN KEY (`idProfessorFK`)
    REFERENCES ` estartho_bdunp`.`Professor` (`idProfessor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`Relatorio` (
  `idRelatorio` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL,
  `apresentacaoNota` FLOAT(11) NOT NULL,
  `fundamentacaoNota` FLOAT(11) NOT NULL,
  `desenvolvimentoNota` FLOAT(11) NOT NULL,
  `resultadosNota` FLOAT(11) NOT NULL,
  `notaFinal` FLOAT(11) NOT NULL,
  `TipoRelatorio` VARCHAR(50) CHARACTER SET 'latin1' NOT NULL,
  `apresentacaoComentario` VARCHAR(250) CHARACTER SET 'latin1' NULL DEFAULT NULL,
  `fundamentacaoComentario` VARCHAR(250) CHARACTER SET 'latin1' NULL DEFAULT NULL,
  `desenvolvimentoComentario` VARCHAR(250) CHARACTER SET 'latin1' NULL DEFAULT NULL,
  `resultadosComentario` VARCHAR(250) CHARACTER SET 'latin1' NULL DEFAULT NULL,
  `idTCCFK` INT(11) NOT NULL,
  PRIMARY KEY (`idRelatorio`),
  UNIQUE INDEX `idRelatorio_UNIQUE` (`idRelatorio` ASC),
  INDEX `FKTCCRelatorio` (`idTCCFK` ASC),
  CONSTRAINT `FKTCC_Relatorio`
    FOREIGN KEY (`idTCCFK`)
    REFERENCES ` estartho_bdunp`.`TCC` (`idTCC`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;

CREATE TABLE IF NOT EXISTS ` estartho_bdunp`.`AlunoDefesa` (
  `notaPostura` FLOAT(11) NOT NULL,
  `notaComunicacao` FLOAT(11) NOT NULL,
  `notaClareza` FLOAT(11) NOT NULL,
  `notaDominio` FLOAT(11) NOT NULL,
  `idAluno` INT(11) NOT NULL,
  `notaFinal` FLOAT(11) NOT NULL,
  `posturaComentario` VARCHAR(200) NULL DEFAULT NULL,
  `comunicacaoComentario` VARCHAR(45) NULL DEFAULT NULL,
  `clarezaComentario` VARCHAR(45) NULL DEFAULT NULL,
  `dominioComentario` VARCHAR(45) NULL DEFAULT NULL,
  `idDefesa` INT(11) NOT NULL,
  INDEX `fk_AlunoDefesaAluno1_idx` (`idAluno` ASC),
  INDEX `fk_AlunoDefesa_Defesa1idx` (`idDefesa` ASC),
  CONSTRAINT `fk_AlunoDefesa_Aluno`
    FOREIGN KEY (`idAluno`)
    REFERENCES ` estartho_bdunp`.`Aluno` (`idAluno`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_AlunoDefesa_Defesa`
    FOREIGN KEY (`idDefesa`)
    REFERENCES ` estartho_bdunp`.`Defesa` (`idDefesa`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarAgendamento`(idAgendamento integer(11), motivo varchar(100), dataHora DATETIME, idProfessorFK integer(11), idAlunoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
 
  UPDATE ` estartho_bdunp`.`Agendamento`
    SET 
`motivo`= motivo, 
`dataHora`= dataHora,
`idProfessorFK`= idProfessorFK,
`idAlunoFK`= idAlunoFK

WHERE ` estartho_bdunp`.`Agendamento`.`idAgendamento`=idAgendamento;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarAluno`(idAluno integer(11) ,nome varchar(100), matricula char(9), email varchar(50), login varchar(50), senha varchar(20), idCursoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
 
  UPDATE ` estartho_bdunp`.`Aluno`
SET
`nome` =nome,
`matricula` = matricula,
`email` = email,
`login` = login,
`senha` = senha,
`idCursoFK` = idCursoFK
WHERE ` estartho_bdunp`.`Aluno`.`idAluno` = idAluno;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarAlunoDefesa`(notaPostura FLOAT, notaComunicacao FLOAT, notaClareza FLOAT, notaDominio FLOAT, idAluno integer(11), notaFinal FLOAT, 
 posturaComentario varchar(200), comunicacaoComentario varchar(45), clarezaComentario varchar(45), dominioComentario varchar(45), idDefesa integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
 
  UPDATE ` estartho_bdunp`.`AlunoDefesa`
    SET 
`notaPostura`= notaPostura,
`notaComunicacao`= notaComunicacao,
`notaClareza`= notaClareza,
`notaDominio`= notaDominio,
`idAluno`= idAluno,
`notaFinal`= notaFinal,
`posturaComentario`= posturaComentario,
`comunicacaoComentario`= comunicacaoComentario,
`clarezaComentario`= clarezaComentario,
`dominioComentario`= dominioComentario,
`idDefesa`= idDefesa
WHERE ` estartho_bdunp`.`AlunoDefesa`.`idTCC`=idTCC;

IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarArquivo`(idArquivo integer(11), link varchar(250), idTCCFK integer(11), versao varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
  UPDATE ` estartho_bdunp`.`Arquivo`
    SET 
`link`= link,
`idTCCFK`= idTCCFK,
`versao`= versao
WHERE ` estartho_bdunp`.`Arquivo`.`idArquivo`=idArquivo;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarAtividade`(idAtividade integer(11), nome varchar(50), mes date, descricao varchar(250), idTCCFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
  UPDATE ` estartho_bdunp`.`Atividade`
    SET 
`nome`= nome,
`mes`= mes,
`descricao`= descricao,
`idTCCFK`= idTCCFK 
WHERE ` estartho_bdunp`.`Atividade`.`idAtividade`=idAtividade;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarCronograma`(idCronograma integer(11), nomeatividade varchar(100), porque varchar(100), onde varchar(100), quando varchar(100), quem varchar(100), como varchar(100), quanto varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
 
  UPDATE ` estartho_bdunp`.`Cronograma`
    SET 
`nomeatividade`= nomeatividade,
`porque`= porque,
`onde`= onde,
`quando`= quando,
`quem`= quem,
`como`= como,
`quanto`= quanto
WHERE ` estartho_bdunp`.`Cronograma`.`idCronograma`=idCronograma;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarCurso`(idCurso varchar(11), nomeCurso varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
 
  UPDATE ` estartho_bdunp`.`Curso`
    SET 
`nomeCurso`= nomeCurso 
WHERE ` estartho_bdunp`.`Curso`.`idCurso`=idCurso;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarDefesa`(idDefesa integer(11), DataDef DATETIME, idTCCFK integer(11), idReservaFK INT(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;


  UPDATE ` estartho_bdunp`.`Defesa`
    SET 
`data`= DataDef,
`idTCCFK`= idTCCFK,
`idReservaFK`= idReservaFK
WHERE ` estartho_bdunp`.`Defesa`.`idDefesa`=idDefesa;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarErros`(idErros integer(11), nomeErro varchar(50), categoria varchar(100))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`Erros`
    SET 
`nomeErro`= nomeErro,
`categoria`= categoria
WHERE ` estartho_bdunp`.`Erros`.`idErros`=idErros;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarErrosTCC`(idErrosTCC integer(11), idTCCFK integer(11), idErrosFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`ErrosTCC`
    SET 
`idTCCFK`= idTCCFK,
`idErrosFK`= idErrosFK
WHERE ` estartho_bdunp`.`ErrosTCC`.`idErrosTCC`=idErrosTCC;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarEvento`(idEvento integer(11), nome varchar(50), dataHora datetime, Localizacao varchar(100), idProfessorFK integer(11), idCursoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`Evento`
    SET 
`nome`= nome,
`dataHora`= dataHora,
`local`= Localizacao,
`idProfessorFK`= idProfessorFK,
`idCursoFK`= idCursoFK 
WHERE ` estartho_bdunp`.`Evento`.`idEvento`=idEvento;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarLinhaPesquisa`(idLinhaPesquisa integer(11), nome varchar(250), idCursoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`LinhaPesquisa`
    SET 
`nome`= nome,
`idCursoFK`= idCursoFK

WHERE ` estartho_bdunp`.`LinhaPesquisa`.`idLinhaPesquisa`= idLinhaPesquisa;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarProfessor`(idProfessor integer(11), nome varchar(100), matricula integer(6), email varchar(50), login varchar(50), senha varchar(20))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`Professor`
    SET 
`nome`= nome,
`matricula`= matricula,
`email`= email,
`login`=login,
`senha`= senha 
WHERE ` estartho_bdunp`.`Professor`.`idProfessor`=idProfessor;
 
 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarRelatorio`(idRelatorio integer(11), dataH DATETIME, apresentacaoNota FLOAT, fundamentacaoNota FLOAT, desenvolvimentoNota FLOAT, resultadosNota FLOAT, notaFinal FLOAT, 
  TipoRelatorio varchar(50), apresentacaoComentario varchar(250), fundamentacaoComentario varchar(250), desenvolvimentoComentario varchar(250), 
  resultadosComentario varchar(250), idTCCFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`Relatorio`
    SET 
`apresentacaoNota`= apresentacaoNota,
`data`= dataH,
`fundamentacaoNota`= fundamentacaoNota,
`desenvolvimentoNota`= desenvolvimentoNota,
`resultadosNota`= resultadosNota,
`notaFinal`= notaFinal,
`TipoRelatorio`= TipoRelatorio, 
`apresentacaoComentario`= apresentacaoComentario,
`fundamentacaoComentario`= fundamentacaoComentario,
`desenvolvimentoComentario`= desenvolvimentoComentario,
`resultadosComentario`= resultadosComentario,
`idTCCFK`= idTCCFK
WHERE ` estartho_bdunp`.`Relatorio`.`idRelatorio`=idRelatorio;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarReserva`(idReserva integer(11), dataHora DATETIME, idProfessorFK integer(11), idSalaFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`Reserva`
    SET 
`dataHora`= dataHora,
`idProfessorFK`= idProfessorFK,
`idSalaFK`= idSalaFK
WHERE ` estartho_bdunp`.`Reserva`.`idReserva`=idReserva;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarSala`(idSala integer(11), setor varchar(10), nome varchar (20), capacidade integer, idUnidadeFK integer)
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`Sala`
    SET 
`setor`= setor,
`nome` = nome,
`capacidade`= capacidade,
`idUnidadeFK`= idUnidadeFK
WHERE ` estartho_bdunp`.`Sala`.`idSala`=idSala;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarTCC`(idTCC integer(11), titulo varchar(100), resumo varchar(250), statusTCC tinyint(1), objetivo varchar(100), justificativa varchar(100), TCCTipo tinyint(1), idLinhaPesquisaFK integer(11), idProfessorFK INTEGER (11), idAlunoFK1 INTEGER (11), idAlunoFK2 INTEGER (11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`TCC`
    SET 
`titulo` = titulo,
`resumo`= resumo,
`statusTCC`= statusTCC,
`objetivo`= objetivo,
`justificativa`= justificativa, 
`TCCTipo`= TCCTipo,
`idLinhaPesquisaFK`= idLinhaPesquisaFK
WHERE ` estartho_bdunp`.`TCC`.`idTCC`=idTCC;

 UPDATE ` estartho_bdunp`.`Componentes`
    SET
`idProfessorFK` = idProfessorFK , `idAlunoFK1` = idAlunoFK1, `idAlunoFK2` = idAlunoFK2 
WHERE ` estartho_bdunp`.`Componentes`.`idTCCFK`= idTCC;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_alterarUnidade`(idUnidade integer(11), nome varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  UPDATE ` estartho_bdunp`.`Unidade`
    SET 
`nome`= nome
WHERE ` estartho_bdunp`.`Unidade`.`idUnidade`=idUnidade;

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_buscarAlunoID`(idAluno integer(11))
BEGIN
SELECT * FROM ` estartho_bdunp`.`Aluno` where ` estartho_bdunp`.`Aluno`.`idAluno` = idAluno;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_buscarAlunoMatricula`(matricula char(9))
BEGIN
SELECT A.`idAluno`, A.`nome`, A.`matricula`, C.`nomeCurso`, A.`email`, A.`login`, A.`senha` FROM ` estartho_bdunp`.`Aluno` as A INNER JOIN ` estartho_bdunp`.`Curso` as C On A.`idCursoFK` = C.`idCurso` where A.`matricula` = matricula;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarAgendamento`(idAgendamento integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Agendamento`
WHERE ` estartho_bdunp`.`Agendamento`.`idAgendamento` = idAgendamento;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarAluno`(idAluno integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Aluno`
WHERE ` estartho_bdunp`.`Aluno`.`idAluno` = idAluno;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarArquivo`(idArquivo integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Arquivo`
WHERE ` estartho_bdunp`.`Arquivo`.`idArquivo` = idArquivo;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarAtividade`(idAtividade integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Atividade`
WHERE ` estartho_bdunp`.`Atividade`.`idAtividade` = idAtividade;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarCurso`(idCurso integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Curso`
WHERE ` estartho_bdunp`.`Curso`.`idCurso` = idCurso;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarDefesa`(idDefesa integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Defesa`
WHERE ` estartho_bdunp`.`Defesa`.`idDefesa` = idDefesa;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarErros`(idErros integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Erros`
WHERE ` estartho_bdunp`.`Erros`.`idErros` = idErros;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarErrosTCC`(idErrosTCC integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`ErrosTCC`
WHERE ` estartho_bdunp`.`ErrosTCC`.`idErrosTCC` = idErrosTCC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarEvento`(idEvento integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Evento`
WHERE ` estartho_bdunp`.`Evento`.`idEvento` = idEvento;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarLinhaPesquisa`(idLinhaPesquisa integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`LinhaPesquisa`
WHERE ` estartho_bdunp`.`LinhaPesquisa`.`idLinhaPesquisa` = idLinhaPesquisa;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarProfessor`(idProfessor integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Professor`
WHERE ` estartho_bdunp`.`Professor`.`idProfessor` = idProfessor;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarRelatorio`(idRelatorio integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Relatorio`
WHERE ` estartho_bdunp`.`Relatorio`.`idRelatorio` = idRelatorio;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarReserva`(idReserva integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Reserva`
WHERE ` estartho_bdunp`.`Reserva`.`idReserva` = idReserva;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarSala`(idSala integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Sala`
WHERE ` estartho_bdunp`.`Sala`.`idSala` = idSala;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarTCC`(idTCC integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`TCC`
WHERE ` estartho_bdunp`.`TCC`.`idTCC` = idTCC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_deletarUnidade`(idUnidade integer(11))
BEGIN
DELETE FROM ` estartho_bdunp`.`Unidade`
WHERE ` estartho_bdunp`.`Unidade`.`idUnidade` = idUnidade;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirAgendamento`(motivo varchar(100), dataHora DATETIME, idProfessorFK integer(11), idAlunoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Agendamento`
(`motivo`,
`dataHora`,
`idProfessorFK`,
`idAlunoFK`
)
VALUES
(motivo, dataHora, idProfessorFK, idAlunoFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirAluno`(nome varchar(100), matricula char(9), email varchar(50), login varchar(50), senha varchar(20), idCursoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Aluno`
(`nome`,
`matricula`,
`email`,
`login`,
`senha`,
`idCursoFK`)
VALUES
(nome, matricula, email, login, senha, idCursoFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirAlunoDefesa`(notaPostura FLOAT, notaComunicacao FLOAT, notaClareza FLOAT, notaDominio FLOAT, idAluno integer(11), notaFinal FLOAT, 
 posturaComentario varchar(200), comunicacaoComentario varchar(45), clarezaComentario varchar(45), dominioComentario varchar(45), idDefesa integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`AlunoDefesa`
(`notaPostura`,
`notaComunicacao`,
`notaClareza`,
`notaDominio`,
`idAluno`,
`notaFinal`,
`posturaComentario`,
`comunicacaoComentario`,
`clarezaComentario`,
`dominioComentario`,
`idDefesa`
)
VALUES
(notaPostura, notaComunicacao, notaClareza, notaDominio, idAluno, notaFinal, posturaComentario, comunicacaoComentario, clarezaComentario, dominioComentario, idDefesa);
 
 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirArquivo`(link varchar(250), idTCCFK integer(11), versao varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Arquivo`
(`link`,
`idTCCFK`,
`versao`
)
VALUES
(link, idTCCFK, versao);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirAtividade`(nome varchar(50), mes date, descricao varchar(250), idTCCFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Atividade`
(`nome`,
`mes`,
`descricao`,
`idTCCFK`
)
VALUES
(nome, mes, descricao, idTCCFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirCronograma`(nomeatividade varchar(100), porque varchar(100), onde varchar(100), quando varchar(100), quem varchar(100), como varchar(100), quanto varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Cronograma`
(`nomeatividade`,
`porque`,
`onde`,
`quando`,
`quem`,
`como`,
`quanto`
)
VALUES
(nomeatividade, porque, onde, quando, quem, como, quanto);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirCurso`(nomeCurso varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Curso`
(`nomeCurso`)
VALUES
(nomeCurso);
 
 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirDefesa`(DataDef DATETIME, idTCCFK integer(11), idReservaFK INT(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
 
  INSERT INTO ` estartho_bdunp`.`Defesa`
(`data`,
`idTCCFK`,
`idReservaFK`
)
VALUES
(DataDef, idTCCFK, idReservaFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirErros`(nomeErro varchar(50), categoria varchar(100))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
 
  INSERT INTO ` estartho_bdunp`.`Erros`
(`nomeErro`,
`categoria`
)
VALUES
(nomeErro, categoria);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirErrosTCC`(idTCCFK integer(11), idErrosFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`ErrosTCC`
(`idTCCFK`,
`idErrosFK`
)
VALUES
(idTCCFK, idErrosFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirEvento`(nome varchar(50), dataHora datetime, Localizacao varchar(100), idProfessorFK integer(11), idCursoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Evento`
(`nome`,
`dataHora`,
`local`,
`idProfessorFK`,
`idCursoFK`
)
VALUES
(nome, dataHora, Localizacao, idProfessorFK, idCursoFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirLinhaPesquisa`(nome varchar(250), idCursoFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`LinhaPesquisa`
(`nome`,
`idCursoFK`
)
VALUES
(nome, ìdCursoFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirProfessor`(nome varchar(100), matricula char(6), email varchar(50), login varchar(50), senha varchar(20))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Professor`
(`nome`,
`matricula`,
`email`,
`login`,
`senha`
)
VALUES
(nome, matricula, email, login, senha);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirRelatorio`(apresentacaoNota FLOAT, dataH DATETIME, fundamentacaoNota FLOAT, desenvolvimentoNota FLOAT, resultadosNota FLOAT, notaFinal FLOAT, 
  TipoRelatorio varchar(50), apresentacaoComentario varchar(250), fundamentacaoComentario varchar(250), desenvolvimentoComentario varchar(250), 
  resultadosComentario varchar(250), idTCCFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Relatorio`
(`apresentacaoNota`,
`data`,
`fundamentacaoNota`,
`desenvolvimentoNota`,
`resultadosNota`,
`notaFinal`,
`TipoRelatorio`, 
`apresentacaoComentario`,
`fundamentacaoComentario`,
`desenvolvimentoComentario`,
`resultadosComentario`,
`idTCCFK`
)
VALUES
(apresentacaoNota, dataH, fundamentacaoNota, desenvolvimentoNota, resultadosNota, notaFinal, TipoRelatorio, apresentacaoComentario, fundamentacaoComentario, desenvolvimentoComentario, resultadosComentario, idTCCFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirReserva`(dataHora DATETIME, idProfessorFK integer(11), idSalaFK integer(11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Reserva`
(`dataHora`,
`idProfessorFK`,
`idSalaFK`
)
VALUES
(dataHora, idProfessorFK, idSalaFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirSala`(setor varchar(10), nome varchar (20), capacidade integer, idUnidadeFK integer)
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Sala`
(`setor`,
`nome`,
`capacidade`,
`idUnidadeFK`
)
VALUES
(setor, nome,capacidade, idUnidadeFK);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirTCC`(titulo varchar(100), resumo varchar(250), statusTCC tinyint(1), objetivo varchar(100), justificativa varchar(100), TCCTipo tinyint(1), idLinhaPesquisaFK integer(11), idProfessorFK INTEGER (11), idAlunoFK1 INTEGER (11), idAlunoFK2 INTEGER (11))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;
    
  INSERT INTO ` estartho_bdunp`.`TCC`
(`titulo`,
`resumo`,
`statusTCC`,
`objetivo`,
`justificativa`,
`TCCTipo`,
`idLinhaPesquisaFK`
)
VALUES
(titulo, resumo, statusTCC, objetivo, justificativa, TCCTipo, idLinhaPesquisaFK);

 INSERT INTO ` estartho_bdunp`.`Componentes`
(`idTCCFK`,
 `idProfessorFK`,
 `idAlunoFK1`, 
 `idAlunoFK2` 
)

VALUES
(LAST_INSERT_ID(), idProfessorFK, idAlunoFK1, idAlunoFK2);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_inserirUnidade`(nome varchar(45))
BEGIN 

 DECLARE `_rollback` BOOL DEFAULT 0;
 DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
 START TRANSACTION;

  INSERT INTO ` estartho_bdunp`.`Unidade`
(`nome`
)
VALUES
(nome);

 IF `_rollback` THEN
        ROLLBACK;
    ELSE
        COMMIT;
    END IF;

END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarAgendamento`()
BEGIN
SELECT * FROM` estartho_bdunp`.`Agendamento`;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarAluno`()
BEGIN
SELECT * FROM ` estartho_bdunp`.`Aluno`;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarAlunoDefesa_Geral`()
BEGIN
SELECT A.`nome` AS Aluno, AD.`notaPostura` AS `Nota Da Postura`, AD.`notaComunicacao` AS `Nota da Comunicacao`, AD.`notaClareza` AS `Nota da Clareza`, AD.`notaDominio` AS `Nota do Dominio`, AD.`notaFinal` AS `Nota Final`, AD.`posturaComentario` AS `Comentario da Postura`, 
AD.`comunicacaoComentario` AS `Comentario da Comunicaçao`, AD.`clarezaComentario` AS `Comentario da Clareza`, AD.`dominioComentario` AS `Comentario do Dominio`, AD.`idDefesa` AS ID
 FROM ` estartho_bdunp`.`AlunoDefesa` AS AD 
 INNER JOIN ` estartho_bdunp`.`Aluno` AS A ON A.`idAluno` = AD.`idAluno` 
 order by A.`nome` ASC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarAlunoDefesa_idAluno`()
BEGIN
SELECT * FROM ` estartho_bdunp`.`AlunoDefesa`
order by idAluno ASC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarArquivo`()
BEGIN
SELECT  A.`link`, T.`titulo` AS `TCC`, A.`versao` FROM ` estartho_bdunp`.`Arquivo` AS A INNER JOIN ` estartho_bdunp`.`TCC` AS T ON A.`idTCCFK` = T.`idTCC` WHERE A.`versao` = 'Final';
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarAtividade`()
BEGIN
SELECT A.`nome`, A.`mes`, A.`descricao`, T.`titulo` AS `TCC` FROM ` estartho_bdunp`.`Atividade` AS A INNER JOIN ` estartho_bdunp`.`TCC` AS T ON A.`idTCCFK` = T.`idTCC` ORDER BY A.`MES` DESC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarCronograma`()
BEGIN
 SELECT C.`idCronograma` AS ID, C.`nomeatividade` AS NomeAtividade, C.`porque` AS Porque, 
 C.`onde` AS Onde, C.`quando` AS Quando, C.`quem` AS Quem, C.`como` AS Como, C.`quanto` AS Quanto
 FROM ` estartho_bdunp`.`Cronograma` AS C;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarCurso`()
BEGIN
SELECT C.`idCurso` AS ID, C.`Curso` FROM ` estartho_bdunp`.`Curso` AS C;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarDefesa`()
BEGIN
SELECT D.`idDefesa`,D.`data`,T.`titulo` AS TCC, D.`idReservaFK` FROM ` estartho_bdunp`.`Defesa` as D
INNER JOIN ` estartho_bdunp`.`TCC` as T on T.`idTCC` = D.`idTCCFK`;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarErros`()
BEGIN
SELECT E.`idErros` AS ID, E.`nomeErro` AS `Nome do Erro`, E.`categoria` AS `Categoria do Erro` FROM ` estartho_bdunp`.`Erros` AS E ORDER BY nomeErro ASC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarErrosTCC`()
BEGIN
SELECT * FROM ` estartho_bdunp`.`ErrosTCC`;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarEvento`()
BEGIN
SELECT E.`idEvento` AS ID, E.`nome` AS `Nome do Evento`, E.`dataHora` AS `Data e Hora`, E.`local` AS Localizaçao, P.`nome` AS Professor, C.`nomeCurso` AS Curso FROM ` estartho_bdunp`.`Evento` AS E
INNER JOIN ` estartho_bdunp`.`Professor` AS P ON P.`idProfessor` = E.`idProfessorFK`
INNER JOIN ` estartho_bdunp`.`Curso` AS C ON C.`idCurso` = E.`idCursoFK`
ORDER BY E.`dataHora` DESC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarLinhaPesquisa`()
BEGIN
SELECT LA.`idLinhaPesquisa`, LA.`nome`, C.`nomeCurso` FROM ` estartho_bdunp`.`LinhaPesquisa` AS LA INNER JOIN ` estartho_bdunp`.`Curso` AS C on LA.`idCursoFK` = C.`idCurso` ORDER BY LA.`nome` ASC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarProfessor`()
BEGIN
SELECT * FROM` estartho_bdunp`.`Professor`;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarRelatorio`()
BEGIN
SELECT T.`titulo` AS TCC , R.`data` AS `Data e Hora`, R.`apresentacaoNota` AS `Nota da Apresentacao`, R.`fundamentacaoNota` AS `Nota da Fundamentacao`, R.`desenvolvimentoNota` AS `Nota da Desenvolvimento`, R.`resultadosNota` AS `Resultados da Nota`, R.`notaFinal` AS `Nota Final`, 
R.`TipoRelatorio` AS `Tipo de Relatorio`, R.`apresentacaoComentario` AS `Comentario da Apresentacao`, R.`fundamentacaoComentario` AS `Comentario da Fundamentaçao`, R.`desenvolvimentoComentario` AS `Comentario da Desenvolvimento`, R.`resultadosComentario` AS `Comentario dos Resultados`
 FROM ` estartho_bdunp`.`Relatorio` AS R
 INNER JOIN ` estartho_bdunp`.`TCC` AS T ON T.`idTCC` = R.`idTCCFK` 
 ORDER BY R.`data` ASC, T.`titulo` ASC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarReserva`()
BEGIN
SELECT R.`dataHora` AS `Data`, P.`nome` AS Professor, S.`nome` AS Sala, S.`setor` AS Setor, R.`idReserva` AS ID FROM ` estartho_bdunp`.`Reserva` AS R
INNER JOIN ` estartho_bdunp`.`Professor` AS P ON P.`idProfessor` = R.`idProfessorFK`
INNER JOIN ` estartho_bdunp`.`Sala` AS S ON S.`idSala` = R.`idSalaFK`
ORDER BY dataHora DESC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarSala`()
BEGIN
SELECT U.`nome` AS `Unidade`, S.`setor` AS Setor, S.`nome` AS Sala, S.`capacidade`AS Capacidade , S.`idSala` AS ID FROM ` estartho_bdunp`.`Sala` AS S
 INNER JOIN ` estartho_bdunp`.`Unidade` AS U ON S.`idUnidadeFK` = U.`idUnidade` ORDER BY U.`nome` ASC, S.`nome` ASC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarTCC`()
BEGIN
SELECT T.`idTCC`, T.`titulo`, T.`resumo`, T.`statusTCC`, T.`objetivo`, T.`justificativa`, T.`TCCTipo`, LP.`nome` AS `LinhaPesquisa`, P.`nome` AS `Professor`, A.`nome` AS `Aluno1`, A1.`nome` AS `Aluno2` FROM ` estartho_bdunp`.`TCC` AS T 
INNER JOIN ` estartho_bdunp`.`LinhaPesquisa` AS LP ON LP.`idLinhaPesquisa`= T.`idLinhaPesquisaFK` 
INNER JOIN ` estartho_bdunp`.`Componentes` AS C ON T.`idTCC` = C.`idTCCFK` 
INNER JOIN ` estartho_bdunp`.`Professor` AS P ON P.`idProfessor` = C.`idProfessorFK` 
INNER JOIN ` estartho_bdunp`.`Aluno` AS A ON  A.`idAluno` = C.`idAlunoFK1`
INNER JOIN ` estartho_bdunp`.`Aluno` AS A1 ON  A1.`idAluno` = C.`idAlunoFK2`
ORDER BY T.`titulo` ASC;
END$$

DELIMITER ;

DELIMITER $$
USE ` estartho_bdunp`$$
CREATE PROCEDURE `sp_listarUnidade`()
BEGIN
SELECT * FROM ` estartho_bdunp`.`Unidade` ORDER BY nome ASC;
END$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
