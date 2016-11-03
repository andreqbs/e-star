CREATE DATABASE TCC;
USE TCC;

CREATE TABLE IF NOT EXISTS Curso(
idCurso INT NOT NULL AUTO_INCREMENT,
Curso VARCHAR (45) NOT NULL,
CONSTRAINT PK_CURSO PRIMARY KEY (idCURSO)
);

CREATE TABLE IF NOT EXISTS LinhaPesquisa(
idLinhaPesquisa INT NOT NULL AUTO_INCREMENT,
LinhaPesquisa VARCHAR (250) NOT NULL,
idCursoFK INT,
CONSTRAINT PK_LinhaPesquisa PRIMARY KEY (idLinhaPesquisa),
CONSTRAINT FKCurso FOREIGN KEY (idCursoFK) REFERENCES Curso (idCurso)
);

CREATE TABLE IF NOT EXISTS Professor(
idProfessor INT NOT NULL AUTO_INCREMENT,
NomeProfessor VARCHAR (100) NOT NULL,
MatriculaProfessor CHAR (9) NOT NULL,
EmailProfessor VARCHAR (50) NOT NULL,
LoginProfessor VARCHAR (50) NOT NULL,
SenhaProfessor VARCHAR (20) NOT NULL,
CONSTRAINT ProfessorPK PRIMARY KEY (idProfessor)
);
 
CREATE TABLE IF NOT EXISTS Aluno(
idAluno INT NOT NULL AUTO_INCREMENT,
NomeAluno VARCHAR (100) NOT NULL,
MatriculaAluno CHAR (9) NOT NULL,
EmailAluno VARCHAR (50) NOT NULL,
LoginAluno VARCHAR (50) NOT NULL,
SenhaAluno VARCHAR (20) NOT NULL,
idCursoFK INT,
CONSTRAINT AlunoPK PRIMARY KEY (idAluno),
CONSTRAINT FKCurso2 FOREIGN KEY (idCursoFK) REFERENCES Curso (idCurso)
);

CREATE TABLE IF NOT EXISTS Eventos(
idEventos INT NOT NULL AUTO_INCREMENT,
NomeEventos VARCHAR (100) NOT NULL,
DataEvento DATETIME NOT NULL,
LocalEventos VARCHAR (100) NOT NULL,
idProfessorFK INT,
idCursoFK INT,
CONSTRAINT EventosPK PRIMARY KEY (idEventos),
CONSTRAINT FKProfessor FOREIGN KEY (idProfessorFK) REFERENCES Professor (idProfessor),
CONSTRAINT FKCurso3 FOREIGN KEY (idCursoFK) REFERENCES Curso (idCurso)
);

CREATE TABLE IF NOT EXISTS Agendamento(
idAgendamento INT NOT NULL AUTO_INCREMENT,
Motivo VARCHAR (100) NOT NULL,
DataHora DATETIME NOT NULL,
idProfessorFK INT,
idAlunoFK INT,
CONSTRAINT AgendamentoPK PRIMARY KEY (idAgendamento),
CONSTRAINT FKProfessor2 FOREIGN KEY (idProfessorFK) REFERENCES Professor (idProfessor),
CONSTRAINT FKAluno FOREIGN KEY (idAlunoFK) REFERENCES Aluno (idAluno)
);

CREATE TABLE IF NOT EXISTS TCC(
idTCC INT NOT NULL AUTO_INCREMENT,
Titutlo VARCHAR (100) NOT NULL,
Descricao VARCHAR (250) NOT NULL,
Status BOOLEAN,
Objetivo VARCHAR (100) NOT NULL,
Justificativa VARCHAR (100),
TCCTipo BOOLEAN NOT NULL,
idLinhaPesquisaFK INT,
CONSTRAINT TCCPK PRIMARY KEY (idTCC),
CONSTRAINT FKLinhaPesquisa FOREIGN KEY (idLinhaPesquisaFK) REFERENCES LinhaPesquisa (idLinhaPesquisa)
);

CREATE TABLE IF NOT EXISTS Componentes(
idComponentes INT NOT NULL AUTO_INCREMENT,
idProfessorFK INT,
idAlunoFK1 INT,
idAlunoFK2 INT,
idTCCFK INT,
CONSTRAINT ComponentesPK PRIMARY KEY (idComponentes),
CONSTRAINT FKProfessor3 FOREIGN KEY (idProfessorFK) REFERENCES Professor (idProfessor),
CONSTRAINT FKAluno1 FOREIGN KEY (idAlunoFK1) REFERENCES Aluno (idAluno),
CONSTRAINT FKAluno2 FOREIGN KEY (idAlunoFK2) REFERENCES Aluno (idAluno),
CONSTRAINT FKTCC FOREIGN KEY (idTCCFK) REFERENCES TCC (idTCC)
);

CREATE TABLE IF NOT EXISTS Relatorio(
idRelatorio INT NOT NULL AUTO_INCREMENT,
Apresetacao VARCHAR (250) NOT NULL,
Fundamentacao VARCHAR (250) NOT NULL,
Desenvolvimento VARCHAR (250) NOT NULL,
ModeloResultado VARCHAR (250) NOT NULL,
NotaTotal CHAR (4),
TipoRelatorio VARCHAR (50) NOT NULL,
ApresentacaoComentario VARCHAR (250) NOT NULL,
FundamentacaoComentario VARCHAR (250) NOT NULL,
DesenvolvimentoComentario VARCHAR (250) NOT NULL,
ModeloResultadoComentario VARCHAR (250) NOT NULL,
idTCCFK INT,
CONSTRAINT RelatorioPK PRIMARY KEY (idRelatorio),
CONSTRAINT FKTCC2 FOREIGN KEY (idTCCFK) REFERENCES TCC (idTCC)
);

CREATE TABLE IF NOT EXISTS Atividades(
idAtividades INT NOT NULL AUTO_INCREMENT,
NomeAtividades VARCHAR (50) NOT NULL,
MesAtividade DATE NOT NULL,
DescricaoAtividade VARCHAR (250) NOT NULL,
idTCCFK INT,
CONSTRAINT AtividadePK PRIMARY KEY (idAtividades),
CONSTRAINT FKTCC3 FOREIGN KEY (idTCCFK) REFERENCES TCC (idTCC)
);
 
CREATE TABLE IF NOT EXISTS Arquivos(
idArquivos INT NOT NULL AUTO_INCREMENT,
Link VARCHAR (250) NOT NULL,
StatusArquivo BOOLEAN,
idTCCFK INT,
CONSTRAINT AequivosPK PRIMARY KEY (idArquivos),
CONSTRAINT FKTCC4 FOREIGN KEY (idTCCFK) REFERENCES TCC (idTCC)
);

CREATE TABLE IF NOT EXISTS Erros(
idErros INT NOT NULL AUTO_INCREMENT,
NomeErros VARCHAR (50) NOT NULL,
Categoria VARCHAR (100) NOT NULL,
CONSTRAINT ErrosPK PRIMARY KEY (idErros)
);

CREATE TABLE IF NOT EXISTS ErrosTCC(
idErrosTCC INT NOT NULL AUTO_INCREMENT,
idTCCFK INT,
idErrosFK INT,
CONSTRAINT ErrosTCC PRIMARY KEY (idErrosTCC),
CONSTRAINT FKTCC6 FOREIGN KEY (idTCCFK) REFERENCES TCC (idTCC),
CONSTRAINT FKErros1 FOREIGN KEY (idERROS) REFERENCES Erros (idERROS)
);

CREATE TABLE IF NOT EXISTS SalaAula(
idSalaAula INT NOT NULL AUTO_INCREMENT,
NomeSalaAula VARCHAR(45) NOT NULL,
Setor VARCHAR (45) NOT NULL,
Capacidade INT,
Unidade VARCHAR (45) NOT NULL,
CONSTRAINT SalaAulaPK PRIMARY KEY (idSalaAula)
);

CREATE TABLE IF NOT EXISTS Reserva(
idReserva INT NOT NULL AUTO_INCREMENT,
DataHora DATETIME NOT NULL,
idProfessorFK INT,
idSalaAulaFK INT,
CONSTRAINT ReservaPK PRIMARY KEY (idReserva),
CONSTRAINT FKProfessor4 FOREIGN KEY (idProfessorFK) REFERENCES Professor (idProfessor),
CONSTRAINT FKSalaAula FOREIGN KEY (idSalaAulaFK) REFERENCES SalaAula (idSalaAula)
);

CREATE TABLE IF NOT EXISTS Defesa(
idDefesa INT NOT NULL AUTO_INCREMENT,
PosturaPessoal VARCHAR (250) NOT NULL,
FluenciaComunicativa VARCHAR (250) NOT NULL,
Clareza VARCHAR (250) NOT NULL,
Dominio VARCHAR (250) NOT NULL,
NotaFinal CHAR (4) NOT NULL,
PosturaComentario VARCHAR (250) NOT NULL,
FluenciaComentario VARCHAR (250) NOT NULL,
ClarezaComentario VARCHAR (250) NOT NULL,
DominioComentario VARCHAR (250) NOT NULL,
DataBanca DATE NOT NULL,
idTCCFK INT,
idReservaFK INT,
CONSTRAINT DefesaPK PRIMARY KEY (idDefesa),
CONSTRAINT FKTCC5 FOREIGN KEY (idTCCFK) REFERENCES TCC (idTCC),
CONSTRAINT FKReserva FOREIGN KEY (idReservaFK) REFERENCES Reserva (idReserva)
);

CREATE TABLE IF NOT EXISTS Cronograma(
idCronograma INT NOT NULL AUTO_INCREMENT,
PorQue VARCHAR (100),
Onde VARCHAR (100),
Quando VARCHAR (100),
Quem VARCHAR (100),
Como VARCHAR (100),
Quanto VARCHAR (100),
CONSTRAINT CronogramaPK PRIMARY KEY (idCronograma)
);

CREATE TABLE IF NOT EXISTS AtividadesCronograma(
idAtividadesCronograma INT NOT NULL AUTO_INCREMENT,
NomeAtividades VARCHAR (100),
idCronogramaFK INT,
idTCCFK INT,
CONSTRAINT AtividadesCronogramaPK PRIMARY KEY (idAtividadesCronograma),
CONSTRAINT FKCronograma FOREIGN KEY (idCronogramaFK) REFERENCES Cronograma (idCronograma),
CONSTRAINT FKTCC7 FOREIGN KEY (idTCCFK) REFERENCES TCC (idTCC)
);

-----------------------------PROCEDURES--------------------------------
-----------------------------------------------------------------------

CREATE PROCEDURE SP_ACCESS ( USUARIO VARCHAR (50), PASS VARCHAR(20) )
  BEGIN 
  
    SELECT * FROM USUARIOS WHERE USER = USUARIO AND SENHA = PASS;
  
  END;

CALL SP_ACCESS ('SPENCER', '12345')

------------------------------------------------------------------------
--------------------------------------ALUNO----------------------------------

CREATE PROCEDURE sp_INSERIR_ALUNO (NOME_SP VARCHAR(100), MATRICULA_SP INTEGER(10), EMAIL_SP VARCHAR(100), 
                                   LOGIN_SP VARCHR(45), SENHA_SP VARCHAR(100), IDCURSO_SP INTEGER) 
  BEGIN 

    INSERT INTO Aluno (NomeAluno, MatriculaAluno, EmailAluno, LoginAluno, SenhaAluno, idCursoFK)
             VALUES (NOME_SP, MATRICULA_SP, EMAIL_SP, LOGIN_SP, SENHA_SP, IDCURSO_SP);
  END;
------------------------------------------------------------------------

CREATE PROCEDURE sp_ELIMINAR_ALUNO (MATRICULA_SP INTEGER(10))
  BEGIN

    DELETE FROM Aluno AS A WHERE A.MatriculaAluno = MATRICULA_SP;
  
  END;
-------------------------------------------------------------------------

CREATE PROCEDURE sp_UPDATE_ALUNO (MATRICULA_SP INTEGER(10), NOME_SP VARCHAR(100), MATRICULA1_SP INTEGER(10), 
                                  EMAIL_SP VARCHAR(100), LOGIN_SP VARCHAR(45), SENHA_SP VARCHAR(100), IDCURSO_SP INTEGER)
  BEGIN

    UPDATE Aluno SET Aluno.NomeAluno = NOME_SP, Aluno.MatriculaAluno = MATRICULA1_SP, 
                     Aluno.EmailAluno = EMAIL_SP, Aluno.LoginAluno = LOGIN_SP, Aluno.SenhaAluno = SENHA_SP, 
                     Aluno.idCursoFK = IDCURSO_SP WHERE Aluno.MatriculaAluno = MATRICULA_SP;
  
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_ALUNO ( MATRICULA_SP INTEGER(10) )
  BEGIN 
  
    SELECT * FROM Aluno AS A WHERE A.MatriculaAluno = MATRICULA_SP;
  
  END;

--------------------------------------------------------------------------********

CREATE PROCEDURE sp_LISTAR_ALUNO (NOME VARCHAR(100))
  BEGIN 
    
    SELECT NomeAluno, MatriculaAluno, EmailAluno FROM Aluno ORDER BY NOME DESC;
  
  END;
-----------------------------------------------------------------------------
------------------------------------PROFESSOR-----------------------------------------

CREATE PROCEDURE sp_INSERIR_PORFESSOR (NOME_SP VARCHAR(100), MATRICULA_SP INTEGER(10), EMAIL_SP VARCHAR(45), 
                                       LOGIN_SP VARCHAR(45), SENHA_SP VARCHAR(45)) 
  BEGIN 
  
    INSERT INTO Professor (NomeProfessor, MatriculaProfessor, EmailProfessor, LoginProfessor, SenhaProfessor)
     VALUES (NOME_SP, MATRICULA_SP, EMAIL_SP, LOGIN_SP, SENHA_SP);
  
  END;
---------------------------------------------------------------------

CREATE PROCEDURE sp_ELIMINAR_PROFESSOR (MATRICULA_SP INTEGER(10))
  BEGIN
  
    DELETE FROM Professor AS P WHERE P.MatriculaProfessor = MATRICULA_SP ;
 
  END;
-------------------------------------------------------------------------

CREATE PROCEDURE sp_UPDATE_PROFESSOR (MATRICULA_SP INTEGER(10), NOME_SP VARCHAR(100), MATRICULA1_SP INTEGER(10),
                                      EMAIL_SP VARCHAR(45), LOGIN_SP VARCHAR(45), SENHA_SP VARCHAR(45))
  BEGIN
  
    UPDATE Professor AS P SET P.NomeProfessor = NOME_SP, P.MatriculaProfessor = MATRICULA1_SP, P.EmailProfessor =  EMAIL_SP,
                              P.LoginProfessor = LOGIN_SP, P.SenhaProfessor = SENHA_SP 
                              WHERE P.MatriculaProfessor = MATRICULA_SP;
  
  END;
---------------------------------------------------------------------------

CREATE PROCEDURE sp_SELECT_PROFESSOR (MATRICULA_SP INTEGER(10) )
  BEGIN 
  
    SELECT * FROM Professor AS P WHERE P.MatriculaProfessor = MATRICULA_SP;
  
  END;

--------------------------------------------------------------------------
-------------------------------CURSO--------------------------------------
CREATE PROCEDURE INSERIR_CURSO(CURSO_SP VARCHAR(45)) 
  BEGIN

    INSERT INTO Curso (Curso)
      VALUES (CURSO_SP);
  
  END;
---------------------------------------------------------------------------
CREATE PROCEDURE ELIMINAR_CURSO (IDCURSO_SP INTEGER)
  BEGIN 

    DELETE FROM Curso AS C WHERE C.idCurso= IDCURSO_SP;
  
  END;
----------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_CURSO (IDCURSO_SP INTEGER, CURSO_SP)
  BEGIN 

    UPDATE Curso AS C SET C.Curso = CURSO_SP WHERE C.idCurso= IDCURSO_SP);
  
  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE SELECT_CURSO (IDCURSO_SP INTEGER)
  BEGIN 

    SELECT* FROM Curso AS C WHERE C.idCurso= IDCURSO_SP;
  
  END;

--------------------------------------------------------------------------
-----------------------------------TCC------------------------------------

CREATE PROCEDURE sp_INSERIR_TCC (TITULO_SP VARCHAR(100), DESCRICAO_SP VARCHAR(300), STATUS_SP* INTEGER(1), 
  OBJETIVOS_SP VARCHR(300), JUSTIFICATIVA_SP VARCHAR(300), TCC_SP_TIPO BOOLEAN, IDLINHAPESQUISA_SP INTEGER, 
  IDALUNO1_SP INTEGER, IDALUNO2_SP INTEGER, IDPROFESSOR_SP INTEGER) 
  BEGIN 
    

    INSERT INTO TCC (Titulo, Descricao, Status*, Objetivos, Justificativas, TCCTipo, idLinhaPesquisaFK)
       VALUES (TITULO_SP, DESCRICAO_SP, STATUS_SP, OBJETIVOS_SP, JUSTIFICATIVA_SP, TCC_SP_TIPO, IDLINHAPESQUISA_SP);

    INSERT INTO Componentes (idAluno1SP, idAluno2SP, idTCCSP, idProfessorSP) 
      VALUES (IDALUNO1_SP, IDALUNO2_SP, LAST_INSERT_ID(), IDPROFESSOR_SP;


  END;
--------------------------------------------------------------------------

CREATE PROCEDURE sp_ELIMINAR_TCC (IDTCC_SP INTEGER)
  BEGIN
  
    DELETE FROM TCC AS T WHERE T.idTCC = IDTCC_SP ;
  
  END;
-------------------------------------------------------------------------- 

CREATE PROCEDURE sp_UPDATE_TCC (IDTCC_SP INTEGER, TITULO_SP VARCHAR(100), DESCRICAO_SP VARCHAR(300), STATUS_SP* INTEGER(1),
 OBJETIVOS_SP VARCHR(300), JUSTIFICATIVA_SP VARCHAR(300), TCC_SP_TIPO BOOLEAN, IDLINHAPESQUISA_SP INTEGER, 
 IDALUNO1_SP INTEGER, IDALUNO2_SP INTEGER, IDPROFESSOR_SP INTEGER)
  BEGIN
    
    UPDATE TCC SET TCC.Titulo = TITULO_SP, TCC.Descricao = DESCRICAO_SP, TCC.Status = STATUS_SP, 
                   TCC.Objetivos = OBJETIVOS_SP, TCC.Justificativas = JUSTIFICATIVA_SP,
                   TCC.idLinhaPesquisa = IDLINHAPESQUISA_SP WHERE TCC.idTCC = IDTCC_SP;
  
  


     UPDATE Componentes AS C SET C.idAluno1 = IDALUNO1_SP, C.idAluno2 = IDALUNO2_SP, C.idTCCFK = IDTCC_SP,
                                 C.idProfessor = IDPROFESSOR_SP WHERE C.idTCCFK = IDTCC_SP; 

  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_TCC (IDTCC INTEGER)
  BEGIN 
    
    SELECT * FROM TCC AS T WHERE T.idTCC = IDTCC ;
  
  END;
--------------------------------------------------------------------------
-----------------------------------RELATORIOTCC---------------------------

CREATE PROCEDURE INSERIR_RELATORIOTCC (APRESENTACAO_SP FLOAT(4), FUNDAMENTACAO_SP FLOAT(4), DESENVOLVIMENTO_SP FLOAT(4), 
                                       MODELORESULTADO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), TIPORELATORIO_SP INTEGER(1),
                                       APRES_COMENT_SP VARCHAR(45), FUND_COMENT_SP VARCHAR(45), DESENV_COMENT_SP VARCHAR(45), 
                                       MOD_RESUL_COMENT_SP VARCHAR(45), IDTCC_SP INTEGER) 
  BEGIN 

  DECLARE IDTCC_FK INT;

    SELECT idTCCFK INTO IDTCC_FK FROM TCC AS T WHERE T.Titulo = TITULO_SP

    INSERT INTO Relatorio (Apresentacao, Fundamentacao, Desenvolvimento, ModeloResultado, NotaTotal, TipoRelatorio, 
                           ApresentacaoComentario, FumdamentacaoComentario, DesenvolvimentoComentorio, 
                           ModeloResultadoComentario, idTCCFK)
      VALUES (APRESENTACAO_SP, FUNDAMENTACAO_SP, DESENVOLVIMENTO_SP, MODELORESULTADO_SP, NOTATOTAL_SP, TIPORELATORIO_SP, 
              APRES_COMENT_SP, FUND_COMENT_SP, DESENV_COMENT_SP, MOD_RESUL_COMENT_SP, IDTCC_SP);
  
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_RELATORIOTCC (IDRELATORIOTCC_SP INTEGER)
  BEGIN
  
    DELETE FROM RelatorioTCC WHERE idRelatorioTCC = idRELATORIOTCC_SP;-----TEM Q TER DELETEC EM CASCATA COM TCC AJEITAR NO BANCO
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_RELATORIOTCC (IDRELATORIO_SP INTEGER, APRESENTACAO_SP FLOAT(4), FUNDAMENTACAO_SP FLOAT(4), 
                                      DESENVOLVIMENTO_SP FLOAT(4), MODELORESULTADO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), 
                                      TIPORELATORIO_SP INTEGER(1), APRES_COMENT_SP VARCHAR(45), FUND_COMENT_SP VARCHAR(45), 
                                      DESENV_COMENT_SP VARCHAR(45), MOD_RESUL_COMENT_SP VARCHAR(45), IDTCC_SP INTEGER) 
  BEGIN 

    UPDATE RELATORIO AS R SET R.Apresentacao = APRESENTACAO_SP, R.Fundamentacao = FUNDAMENTACAO_SP, 
                              R.Desenvolvimento = DESENVOLVIMENTO_SP, R.ModeloResultado = MODELORESULTADO_SP, 
                              R.NotaTotal = NOTATOTAL_SP, R.TipoRelatorio = TIPORELATORIO_SP, 
                              R.ApresentacaoComentario = APRES_COMENT_SP, R.FumdamentacaoComentario = FUND_COMENT_SP, 
                              R.DesenvolvimentoComentorio = DESENV_COMENT_SP, R.ModeloResultadoComentario = MOD_RESUL_COMENT_SP, 
                              R.idTCCFK = IDTCC_SP WHERE R.idRelatorio = IDRELATORIO_SP);
  
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_RELATORIOTCC (IDRELATORIOTCC_SP INTEGER)
  BEGIN 
  
    SELECT * FROM TCC WHERE idRelatorioTCC = IDRELATORIOTCC_SP;
  
  END;

  -----------------------------------------------------------------------------
-----------------------------------LINHAPESQUISA-------------------------------
CREATE PROCEDURE INSERIR_LINHAPESQUISA(LINHAPESQUISA_SP VARCHAR(45), IDCURSO_SP INTEGER) 
  BEGIN

    INSERT INTO LinhaPesquisa (LinhaPesquisa, idCursoFK)
      VALUES (LINHAPESQUISA_SP, IDCURSO_SP);
  
  END;
------------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_LINHAPESQUISA (IDLINHAPESQUISA_SP INTEGER)
  BEGIN 

    DELETE FROM LinhaPesquisa AS LP WHERE LP.idLinhaPesquisa = IDLINHAPESQUISA_SP;
  
  END;
-------------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_LINHAPESQUISA (IDLINHAPESQUISA_SP INTEGER, LINHAPESQUISA_SP, IDCURSO_SP INTEGER)
  BEGIN 

    UPDATE LinhaPesquisa AS LP SET LP.LinhaPesquisa = LINHAPESQUISA_SP , LP.idCursoFK = IDCURSO_SP 
                               WHERE LP.idLinhaPesquisa = IDLINHAPESQUISA_SP;

  END;
--------------------------------------------------------------------------------

CREATE PROCEDURE SELECT_LINHAPESQUISA (IDLINHAPESQUISA_SP INTEGER)
  BEGIN 

    SELECT * FROM LinhaPesquisa as LP WHERE LP.idLinhaPesquisa = IDLINHAPESQUISA_SP;
  
  END;


-----------------------------------------------------------------------------
------------------------------------ATIVIDADE--------------------------------***************
CREATE PROCEDURE sp_INSERIR_ATIVIDADE(NOMEATIVIDADE_SP VARCHAR(45), MES_ATIVIDADE_SP VARCHAR (45),
                                      DESCRICAO_ATIVIDADE_SP VARCHAR (45), IDTCC_SP INTEGER) 
  BEGIN

    DECLARE idTCC_FK;

    SELECT idTCC INTO IDTCC_FK FROM TCC AS T WHERE T.Titulo = TITULO_TCC_SP

    INSERT INTO Curso (NomeAtividade, MesAtividade, DescricaoAtividade, idTCCFK)
      VALUES (NOMEATIVIDADE_SP, MES_ATIVIDADE_SP, DESCRICAO_ATIVIDADE_SP, IDTCC_SP);
  
  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE sp_ELIMINAR_ATIVIDADE (IDATIVIDADE_SP INTEGER)
  BEGIN 

    DELETE FROM Atividade AS A WHERE A.idAtividade = IDATIVIDADE_SP;
  
  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE sp_UPDATE_ATIVIDADE (IDATIVIDADE_SP INTEGER, NOMEATIVIDADE_SP VARCHAR(45), MES_ATIVIDADE_SP VARCHAR (45),
                                      DESCRICAO_ATIVIDADE_SP VARCHAR (45), IDTCC_SP INTEGER)
  BEGIN 

    UPDATE Atividade AS A SET A.NomeAtividade = NOMEATIVIDADE_SP, A.MesAtividade = MES_ATIVIDADE_SP, 
                              A.DescricaoAtividade = DESCRICAO_ATIVIDADE_SP, A.idTCCFK = IDTCC_SP 
                              WHERE A.idAtividade = IDATIVIDADE_SP;

  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE sp_SELECT_ATIVIDADE (IDATIVIDADE_SP INTEGER)
  BEGIN 

    SELECT * FROM Atividade as A WHERE A.idAtividade = IDATIVIDADE_SP;
  
  END;
--------------------------------------------------------------------------
---------------------------------AGENDAMENTO-------------------------------**********alterar**********
CREATE PROCEDURE sp_INSERIR_AGENDAMENTO (MOTIVO_SP VARCHAR(45), IDALUNO_SP INTEGER, IDPROFESSOR_SP INTEGER)
  BEGIN
  
    INSERT INTO Agendamento (Motivo, idAlunoFK, idProfessorFK)
      VALUES (MOTIVO_SP, IDALUNO_SP, IDPROFESSOR_SP);
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_AGENDA (IDAGENDA_SP INTEGER)
  BEGIN
  
    DELETE FROM Agendamento WHERE idAgenda = IDAGENDA_SP ;
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_AGENDAMENTO (IDAGENDA_SP INTEGER, MOTIVO_SP VARCHAR(45), IDALUNO_SP INTEGER, 
                                        IDPROFESSOR_SP INTEGER)
  BEGIN
  
    UPDATE Agendamento AS A SET A.Motivo = MOTIVO_SP, A.idAlunoFK = IDALUNO_SP, A.idProfessorFK = IDPROFESSOR_SP 
                            WHERE A.idAgenda = IDAGENDA_SP;
  
  END; 
--------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_AGENDAMENTO (IDAGENDA_SP INTEGER)
  BEGIN
  
    SELECT * FROM Agendamento WHERE idAgenda = IDAGENDA_SP;
  
  END; 
 
 -----------------------------------------------------------------------------
 -------------------------------ARQUIVO---------------------------------------

CREATE PROCEDURE sp_INSERIR_ARQUIVOS (LINK_SP VARCHAR(100), STATUSARQUIVO_SP BOOLEAN, IDTCC_SP INTEGER)
  BEGIN
  
    INSERT INTO Arquivos (Link, StatusArquivo, idTCCFK)
      VALUES (LINK_SP, STATUSARQUIVO_SP, IDTCC_SP);
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_ARQUIVOS (IDARQUIVOS_SP INTEGER)
  BEGIN
  
    DELETE FROM Arquivos AS A WHERE A.idArquivos = IDARQUIVOS_SP ;
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_ARQUIVOS (IDARQUIVOS_SP INTEGER, LINK_SP VARCHAR(100), STATUSARQUIVO_SP BOOLEAN, 
                                     IDTCC_SP INTEGER)
  BEGIN

    UPDATE Arquivos AS A SET A.Link = LINK_SP, A.StatusArquivos = STATUSARQUIVO_SP, A.idTCCFK = IDTCC_SP
                         WHERE A.idArquivos = IDARQUIVOS_SP;
  
  END; 
--------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_ARQUIVOS (IDARQUIVOS_SP INTEGER)
  BEGIN
  
    SELECT * FROM Arquivos WHERE idArquivos = IDARQUIVOS_SP;
  
  END; 
--------------------------------------------------------------------------
---------------------------CRONOGRAMA-------------------------------------

CREATE PROCEDURE sp_INSERIR_CRONOGRAMA (PORQUE_SP VARCHAR(45), ONDE_SP VARCHAR(45), QUANDO_SP VARCHAR(45), 
                                        QUEM_SP VARCHAR(45), COMO_SP VARCHAR(45), QUANTO_SP VARCHAR(45))
  BEGIN

    INSERT INTO Cronograma (PorQue, Onde, Quando, Quem, Como, Quanto)
      VALUES (PORQUE_SP, ONDE_SP, QUANDO_SP, QUEM_SP, COMO_SP, QUANTO_SP);
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_CRONOGRAMA(IDCRONOGRAMA_SP INTEGER)
  BEGIN
  
    DELETE FROM Cronograma AS Cr WHERE Cr.idCronograma = IDCRONOGRAMA_SP ;
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_CRONOGRAMA (PORQUE_SP VARCHAR(45), ONDE_SP VARCHAR(45), QUANDO_SP VARCHAR(45), QUEM_SP VARCHAR(45), COMO_SP VARCHAR(45), QUANTO_SP VARCHAR(45))
  BEGIN

    UPDATE Cronograma AS Cr SET Cr.PorQue = PORQUE_SP, Cr.Onde = ONDE_SP, Cr.Quando = QUANDO_SP, Cr.Quem = QUEM_SP, Cr.Como = COMO_SP, Cr.Quanto = QUANTO_SP);
  
  END; 
--------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_CRONOGRAMA (IDCRONOGRAMA_SP INTEGER)
  BEGIN
  
    SELECT * FROM Cronograma WHERE idCronograma = IDCRONOGRAMA_SP;
  
  END;
--------------------------------------------------------------------------
------------------------ATIVIDADE CRONOGRAMA------------------------------

CREATE PROCEDURE sp_INSERIR_ATIVIDADE_CRONOGRAMA (NOMEATIVIDADE_C_SP VARCHAR(45), IDCRONOGRAMA_SP INTEGER, 
                                                  TITULOTCC_SP INTEGER)
  BEGIN
  
    INSERT INTO AtividadeCronograma (NomeAtividade, idCronogramaFK, idTCCFK)
      VALUES (NOMEATIVIDADE_C_SP, IDCRONOGRAMA_SP, IDTCC_SP);
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_ATIVIDADE_CRONOGRAMA (IDATIVIDADECRONOGRAMA_SP INTEGER)
  BEGIN
  
    DELETE FROM AtividadeCronograma AS Ac WHERE Ac.idAtividadeCronograma = IDATIVIDADECRONOGRAMA_SP;
  
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_ATIVIDADE_CRONOGRAMA (IDATIVIDADECRONOGRAMA_SP INTEGER, NOMEATIVIDADE_C_SP VARCHAR(45),
,                                                IDCRONOGRAMA_SP INTEGER, TITULOTCC_SP INTEGER)
  BEGIN
  
    UPDATE AtividadeCronograma AS Ac SET Ac.NomeAtividade = NOMEATIVIDADE_SP, Ac.idCronogramaFK = IDCRONOGRAMA_SP, 
                                         Ac.idTCCFK = IDTCC_SP WHERE Ac.idAtividadeCronograma = IDATIVIDADECRONOGRAMA_SP;
  
  END; 
--------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_ATIVIDADE_CRONOGRAMA (IDAGENDA_SP INTEGER)
  BEGIN
  
    SELECT * FROM AtividadeCronograma AS Ac WHERE Ac.idAtividadeCronograma = IDATIVIDADECRONOGRAMA_SP;
  
  END; 
--------------------------------------------------------------------------
----------------------------------ERRO_TCC--------------------------------

CREATE PROCEDURE sp_INSERIR_ERRO_TCC (IDTCC_SP INTEGER, IDERRO_SP INTEGER)
  BEGIN

      INSERT INTO ErroTCC (idErrosFK, idTCCFK)
      VALUES  (IDERRO_SP, IDTCC_SP)


  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_ERRO_TCC(IDERROTCC_SP INTEGER)
  BEGIN

    DELETE FROM ErroTCC AS Et WHERE Et.idErroTCC = IDERROTCC_SP ;

  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_ERRO_TCC (IDERRO_SP INTEGER, IDTCC_SP INTEGER, IDERRO_SP INTEGER)
  BEGIN


      UPDATE ErroTCC AS Et SET Et.idErrosFK = IDERROS_SP, Et.idTCCFK = IDTCC_SP WHERE Et.idErro = IDERRO_SP;

  END; 
--------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_ERRO_TCC()
  BEGIN 

    SELECT * FROM ErroTCC AS Et WHERE Et.idErroTCC= IDERRO_SP;

  END; 

  --------------------------------------------------------------------------
  ------------------------------------EVENTOS-------------------------------

  CREATE PROCEDURE sp_INSERIR_EVENTO (NOME_EVENTO_SP VARCHAR(45), DATA_EVENTO_SP DATE, LOCAL_EVENTO_SP VARCHAR(45), 
                                      IDPROFESSOR_SP INTEGER, IDCURSO_SP INTEGER)
  BEGIN


    INSERT INTO Eventos (NomeEvento, DataEvento, LocalEvento, idProfessorFK, idCursoFK)
      VALUES (NOME_EVENTO_SP, DATA_EVENTO_SP, LOCAL_EVENTO_SP, IDPROFESSOR_SP, IDCURSO_SP);  

  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_EVENTOS (IDEVENTOS_SP INTEGER)
  BEGIN

  DELETE FROM Eventos AS E WHERE E.idEventos = IDEVENTOS_SP


  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_EVENTOS (IDEVENTOS_SP INTEGER, NOME_EVENTO_SP VARCHAR(45), DATA_EVENTO_SP DATE,
                                    LOCAL_EVENTO_SP VARCHAR(45), IDPROFESSOR_SP INTEGER, IDCURSO_SP INTEGER)
  BEGIN

    UPDATE Eventos AS E SET E.NomeEvento = NOME_EVENTO_SP, E.DataEvento = DATA_EVENTO_SP, E.LocalEvento = LOCAL_EVENTO_SP, 
                            E.idProfessorFK = IDPROFESSOR_SP, E.idCursoFK = IDCURSO_SP WHERE E.idEventos = IDEVENTOS_SP;
  
  END; 
--------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_EVENTOS (IDEVENTOS_SP INTEGER)
  BEGIN 

    SELECT * FROM Eventos AS E WHERE E.idEventos = IDEVENTOS_SP

  END;

   --------------------------------------------------------------------------
  ------------------------------------DEFESA---------------------------------

  CREATE PROCEDURE sp_INSERIR_DEFESA (POSTURA_PESSOAL_SP FLOAT(4), FLUENCIA_COMUN_SP FLOAT(4), CLAREZA_SP FLOAT(4),
                                      DOMINIO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), POSTURA_COMENT_SP VARCHAR(45), 
                                      FLUENCIA_COMENT_SP VARCHAR(45), CLAREZA_COMENT_SP VARCHAR(45), 
                                      DOMINO_COMENT_SP VARCHAR(45), DATA_BANCA_SP DATE, IDTCC_SP INTEGER,IDRESERVA_SP INTEGER)
  BEGIN

      INSERT INTO Defesa (PosturaPessoal, FluenciaComunicativa, Clareza, Dominio, NotaTotal, PosturaComentario, 
                          FluenciaComentario, ClarezaComentario, DominoComentario,DataBanca, idTCCFK, idReservaFK)
      VALUES (POSTURA_PESSOAL_SP, FLUENCIA_COMUN_SP, CLAREZA_SP, DOMINIO_SP, NOTATOTAL_SP, POSTURA_COMENT_SP, 
              FLUENCIA_COMENT_SP, CLAREZA_COMENT_SP, DOMINO_COMENT_SP, DATA_BANCA_SP, IDTCC_SP, IDRESERVA_SP)

  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_DEFESA (IDDEFESA_SP INTEGER)
  BEGIN

    DELETE FROM Defesa AS D WHERE D.idDefesa = IDDEFESA_SP;

  END;
--------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_DEFESA (IDDEFESA_SP INTEGER, POSTURA_PESSOAL_SP FLOAT(4), FLUENCIA_COMUN_SP FLOAT(4), 
                                   CLAREZA_SP FLOAT(4), DOMINIO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), 
                                   POSTURA_COMENT_SP VARCHAR(45), FLUENCIA_COMENT_SP VARCHAR(45), 
                                   CLAREZA_COMENT_SP VARCHAR(45), DOMINO_COMENT_SP VARCHAR(45), DATA_BANCA_SP DATE, 
                                   IDTCC_SP INTEGER, IDRESERVA_SP INTEGER)
  BEGIN

      DECLARE IDTCC_FK INTEGER

      SELECT idTCC INTO IDTCC_FK FROM TCC AS T WHERE T.Titulo = TITULOTCC_SP;

      UPDATE Defesa AS D SET D.PosturaPessoal = POSTURA_PESSOAL_SP, D.FluenciaComunicativa = LUENCIA_COMUN_SP, 
                             D.Clareza = CLAREZA_SP, D.Dominio = DOMINIO_SP, D.NotaTotal = NOTATOTAL_SP, 
                             D.PosturaComentario = POSTURA_COMENT_SP, D.FluenciaComentario = FLUENCIA_COMENT_SP, 
                             D.ClarezaComentario = CLAREZA_COMENT_SP, D.DominoComentario = DOMINO_COMENT_SP, 
                             D.DataBanca = DATA_BANCA_SP, D.idTCCFK = IDTCC_SP, D.idReservaFK = IDRESERVA_SP 
                             WHERE D.idDefesa = IDDEFESA_SP;
  
  END; 
----------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_DEFESA (IDDEFESA_SP INTEGER)
  BEGIN 

    SELECT * FROM Defesa AS D WHERE D.idDefesa = IDDEFESA_SP;

  END;
----------------------------------------------------------------------------
-----------------------------------ERROS-------------------------------------
CREATE PROCEDURE sp_INSERIR_ERROS (NOMEERROS_SP VARCHAR(45), CATEGORIA_SP VARCHAR(45))
  BEGIN 
      
    INSERT INTO Erros (NomeErros, Categoria)
      VALUES (NOMEERROS_SP, CATEGORIA_SP);
   
  END;
-----------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_ERROS (IDERROS_SP INTEGER)
  BEGIN

    DELETE FROM Erros AS Er WHERE Er.idErros = IDERROS_SP;

  END;
------------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_ERROS (IDERROS_SP INTEGER, NOMEERROS_SP VARCHAR(45), CATEGORIA_SP VARCHAR(45))
  BEGIN

      UPDATE Erros AS Er SET Er.NomeErros = NOMEERROS_SP, Er.Categoria = CATEGORIA_SP WHERE Er.idErros = IDERROS_SP;
  
  END;
---------------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_ERROS (IDERROS_SP INTEGER)
  BEGIN

    SELECT * FROM Erros AS Er WHERE Er.idErros = IDERROS_SP;

  END;           
---------------------------------------------------------------------------------
----------------------------------RESERVA----------------------------------------

CREATE PROCEDURE sp_INSERIR_RESERVAS (DATAHORA_SP VARCHAR(45), DIA VARCHAR(45),IDPROFESSOR_SP INTEGER,
                                      IDSALADEAULA_SP INTEGER)
BEGIN

      INSERT INTO SALADEAULA(datahora, dia, idProfessorFK, idsaladeaulaFK)
      VALUES (DATAHORA_SP, DIA_SP, IDPROFESSOR_SP, IDSALADEAULA_SP);

  END;
----------------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_RESERVAS (IDRESERVA_SP INTEGER)
  BEGIN

     DELETE FROM RESERVAS AS R WHERE R.idReserva = IDRESERVA_SP;

  END;
----------------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_RESERVAS (IDRESERVA_SP INTEGER, DATAHORA_SP VARCHAR(45), DIA VARCHAR(45), 
                                     IDPROFESSOR_SP INTEGER, IDSALADEAULA_SP INTEGER)    
  BEGIN


      UPDATE Reservas AS R SET R.DataHora = DATAHORA_SP, R.Dia = DIA_SP, R.idProfessorFK = IDPROFESSOR_SP,
                               R.idSalaAula = IDSALADEAULA_SP WHERE R.idReservas = IDRESERVA_SP;

  END;
----------------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_RESERVAS (IDRESERVA_SP INTEGER)
  BEGIN

    SELECT * FROM Defesa AS D WHERE R.idReserva = IDRESERVA_SP;
  END;    

----------------------------------------------------------------------------------
----------------------------------------SALA_DE_AULA------------------------------
CREATE PROCEDURE sp_INSERIR_SALA_AULA (NOMESALAAULA_SP VARCHAR(45), SETOR_SP VARCHAR(45), CAPACIDADE_SP INTEGER, 
                                       UNIDADE_SP VARCHAR(45));
BEGIN
       
      INSERT INTO SalaAula (NomeSalaAula, Setor, Capacidade, Unidade)
      VALUES (NOMESALAAULA_SP, SETOR_SP, CAPACIDADE_SP, UNIDADE_SP);

  END;
----------------------------------------------------------------------------------
CREATE PROCEDURE sp_ELIMINAR_SALA_AULA (IDSALAAULA INTEGER)
BEGIN

  DELETE FROM SalaAula AS S WHERE S.idSalaAula = IDSALAAULA_SP;

END;
----------------------------------------------------------------------------------
CREATE PROCEDURE sp_UPDATE_AGENDAMENTO (IDSALAAULA_SP INTEGER, NOMESALAAULA_SP VARCHAR(45), SETOR_SP VARCHAR(45), 
                                        CAPACIDADE_SP INTEGER, UNIDADE_SP VARCHAR(45))
  BEGIN

    UPDATE SalaAula AS S SET S.NomeSalaAula = NOMESALAAULA_SP, S.Setor = SETOR_SP, S.Capacidade = CAPACIDADE_SP, 
                             S.Unidade = UNIDADE_SP WHERE S.idSalaAula = IDSALAAULA_SP;
  
  END;
----------------------------------------------------------------------------------
CREATE PROCEDURE sp_SELECT_SALA_AULA (IDSALAAULA INTEGER)
  BEGIN

    SELECT * FROM SalaAula AS S WHERE S.idSalaAula = IDSALAAULA_SP;
----------------------------------------------------------------------------------
//RELATORIOTCC(DERIK), DEFESA(DERIK), EVENTOS(DERIK), ERROS(JOAO), RESERVA(JOAO), SALADEAULA(JOAO),
 ATIVIDADES(MATHEUS), CRONOGRAMA(MATHEUS), EROOTCC(MATHEUS), AGENDAMENTO(TIAGO), ATIVIDADE(TIAGO), ARQUIVOS(TIAGO)//
