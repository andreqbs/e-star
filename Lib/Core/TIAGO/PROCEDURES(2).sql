CREATE PROCEDURE SP_ACCESS ( USUARIO VARCHAR (50), PASS VARCHAR(20) )
  BEGIN 
  SELECT * FROM USUARIOS WHERE USER = USUARIO AND SENHA = PASS;
  END

CALL SP_ACCESS ('SPENCER', '12345')
------------------------------------------------------------------------
------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_ALUNO (NOME VARCHAR(100), MATRICULA INTEGER(10), EMAIL VARCHAR(100), LOGIN VARCHR(45), SENHA VARCHAR(100), NOMECURSO_SP VARCHAR (45)) 
  BEGIN 

  
  DECLARE IDCURSO_FK INT;

  SELECT idCurso INTO IDCURSO_FK FROM Curso AS C WHERE C.Curso= NOMECURSO_SP

  INSERT INTO Aluno (NomeAluno, MatriculaAluno, EmailAluno, LoginAluno, SenhaAluno, idCurso)
             VALUES (NOME, MATRICULA, EMAIL, LOGIN, SENHA, IDCURSO_FK);
  END;
------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_ALUNO (ID INTEGER)
  BEGIN
  DELETE FROM Aluno WHERE idAluno = ID;*******************************
  END;
-------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_ALUNO (ID INTEGER, NOME VARCHAR(100), MATRICULA INTEGER(10), EMAIL VARCHAR(100), LOGIN VARCHR(45), SENHA VARCHAR(100), NOMECURSO_SP VARCHAR (45))
  BEGIN

  DECLARE IDCURSO_FK INT;

  SELECT idCurso INTO IDCURSO_FK FROM Curso AS C WHERE C.Curso= NOMECURSO_SP  

  UPDATE Aluno SET Aluno.NomeAluno = NOME, Aluno.MatriculaAluno = MATRICULA, Aluno.EmailAluno =  EMAIL, Aluno.LoginAluno = LOGIN, Aluno.SenhaAluno = SENHA, Aluno.idCurso = IDCURSO_FK WHERE idAluno = ID;
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_ALUNO ( NOME VARCHAR(100), MATRICULA INTEGER(10) )
  BEGIN 
  SELECT * FROM Aluno WHERE NomeAluno = NOME AND MatriculaAluno = MATRICULA;
  END;

--------------------------------------------------------------------------

CREATE PROCEDURE LISTAR_ALUNO (NOME VARCHAR(100))
  BEGIN 
  SELECT NomeAluno, MatriculaAluno, EmailAluno FROM Aluno ORDER BY NOME DESC;
  END;

-----------------------------------------------------------------------------
-----------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_PORFESSOR (NOME VARCHAR(100), MATRICULA INTEGER(10), EMAIL VARCHAR(45), LOGIN VARCHR(45), SENHA VARCHAR(45)) 
  BEGIN 
  INSERT INTO Professor (NomeProfessor, MatriculaProfessor, EmailProfessor, LoginProfessor, SenhaProfessor)
             VALUES (NOME, MATRICULA, EMAIL, LOGIN, SENHA);
  END;
---------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_PROFESSOR (MATRICULA INTEGER(10))
  BEGIN
  DELETE FROM Professor WHERE MatriculaProfessor = MATRICULA ;***************************
  END;
-------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_PROFESSOR (ID INTEGER, NOME VARCHAR(100), MATRICULA INTEGER(10), EMAIL VARCHAR(45), LOGIN VARCHR(45), SENHA VARCHAR(45))
  BEGIN
  UPDATE Professor AS P SET P.NomeProfessor = NOME, P.MatriculaProfessor = MATRICULA, P.EmailProfessor =  EMAIL, P.LoginProfessor = LOGIN, P.SenhaProfessor = SENHA WHERE P.idProfessor = ID;
  END;
---------------------------------------------------------------------------

CREATE PROCEDURE SELECT_PROFESSOR ( NOME VARCHAR(100), MATRICULA INTEGER(10) )
  BEGIN 
  SELECT * FROM Professor WHERE NomeProfessor = NOME AND MatriculaProfessor = MATRICULA;
  END;

--------------------------------------------------------------------------
--------------------------------------------------------------------------


CREATE PROCEDURE INSERIR_TCC (TITULO_SP VARCHAR(100), DESCRICAO_SP VARCHAR(300), STATUS_SP* INTEGER(1), OBJETIVOS_SP VARCHR(300), JUSTIFICATIVA_SP VARCHAR(300), TCC_SP_TIPO BOOLEAN, LINHAPESQUISA_SP VARCHAR(45)) 
  BEGIN 
  
  DECLARE IDLINHAPESQUISA_FK INT;

  SELECT idLinhaPesquisa INTO IDLINHAPESQUISA_FK FROM LinhaPesquisa AS LP WHERE LP.LinhaPesquisa= LINHAPESQUISA_SP  


  INSERT INTO TCC (Titulo, Descricao, Status*, Objetivos, Justificativas, TCCTipo, idLinhaPesquisa)
             VALUES (TITULO_SP, DESCRICAO_SP, STATUS_SP, OBJETIVOS_SP, JUSTIFICATIVA_SP, TCC_SP_TIPO, IDLINHAPESQUISA_SP);
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_TCC (idTCC_SP INTEGER)
  BEGIN
  DELETE FROM TCC WHERE idTCC = idTCC_SP ;***************************
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_TCC (ID INTEGER, TITULO_SP VARCHAR(100), DESCRICAO_SP VARCHAR(300), STATUS_SP* INTEGER(1), OBJETIVOS_SP VARCHR(300), JUSTIFICATIVA_SP VARCHAR(300), TCC_SP_TIPO BOOLEAN, IDLINHAPESQUISA_SP INTEGER)
  BEGIN
  
  DECLARE IDLINHAPESQUISA_FK INT;

  SELECT idLinhaPesquisa INTO IDLINHAPESQUISA_FK FROM LinhaPesquisa AS LP WHERE LP.LinhaPesquisa= LINHAPESQUISA_SP

  UPDATE TCC SET TCC.Titulo = TITULO_SP, TCC.Descricao = DESCRICAO_SP, TCC.Status = STATUS_SP, TCC.Objetivos = OBJETIVOS_SP, TCC.Justificativas = JUSTIFICATIVA_SP, TCC.idLinhaPesquisa = IDLINHAPESQUISA_SP WHERE TCC.idTCC = IDTCC;
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_PROFESSOR (IDTCC INTEGER, TITULO_SP VARCHAR(100))
  BEGIN 
  SELECT * FROM TCC WHERE idTCC = IDTCC AND Titulo = TITULO_SP;
  END;
--------------------------------------------------------------------------
--------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_RELATORIOTCC (APRESENTACAO_SP FLOAT(4), FUNDAMENTACAO_SP FLOAT(4), DESENVOLVIMENTO_SP FLOAT(4), MODELORESULTADO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), TIPORELATORIO_SP INTEGER(1), APRES_COMENT_SP VARCHAR(45), FUND_COMENT_SP VARCHAR(45), DESENV_COMENT_SP VARCHAR(45), MOD_RESUL_COMENT_SP VARCHAR(45), TITULO_SP VARCHAR(100)) 
  BEGIN 

  DECLARE IDTCC_FK INT;

  SELECT idTCC INTO IDTCC_FK FROM TCC AS T WHERE T.Titulo = TITULO_SP

  INSERT INTO Relatorio (Apresentacao, Fundamentacao, Desenvolvimento, ModeloResultado, NotaTotal, TipoRelatorio, ApresentacaoComentario, FumdamentacaoComentario, DesenvolvimentoComentorio, ModeloResultadoComentario, idTCC)
   VALUES (APRESENTACAO_SP, FUNDAMENTACAO_SP, DESENVOLVIMENTO_SP, MODELORESULTADO_SP, NOTATOTAL_SP, TIPORELATORIO_SP, APRES_COMENT_SP, FUND_COMENT_SP, DESENV_COMENT_SP, MOD_RESUL_COMENT_SP, IDTCC_SP);
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_RELATORIOTCC (IDRELATORIOTCC_SP INTEGER)
  BEGIN
  DELETE FROM RelatorioTCC WHERE idRelatorioTCC = idRELATORIOTCC_SP;*********************
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_RELATORIOTCC (IDRELATORIO_SP INTEGER, APRESENTACAO_SP FLOAT(4), FUNDAMENTACAO_SP FLOAT(4), DESENVOLVIMENTO_SP FLOAT(4), MODELORESULTADO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), TIPORELATORIO_SP INTEGER(1), APRES_COMENT_SP VARCHAR(45), FUND_COMENT_SP VARCHAR(45), DESENV_COMENT_SP VARCHAR(45), MOD_RESUL_COMENT_SP VARCHAR(45), TITULO_SP VARCHAR(100)) 
  BEGIN 

  DECLARE IDTCC_FK INT;

  SELECT idTCC INTO IDTCC_FK FROM TCC AS T WHERE T.Titulo = TITULO_SP

  UPDATE RELATORIO AS R SET (R.Apresentacao = APRESENTACAO_SP, R.Fundamentacao = FUNDAMENTACAO_SP, R.Desenvolvimento = DESENVOLVIMENTO_SP, R.ModeloResultado = MODELORESULTADO_SP, R.NotaTotal = NOTATOTAL_SP, R.TipoRelatorio = TIPORELATORIO_SP, R.ApresentacaoComentario = APRES_COMENT_SP, R.FumdamentacaoComentario = FUND_COMENT_SP, R.DesenvolvimentoComentorio = DESENV_COMENT_SP, R.ModeloResultadoComentario = MOD_RESUL_COMENT_SP, R.idTCC = IDTCC_FK WHERE R.idRelatorio = IDRELATORIO_SP);
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_RELATORIOTCC (IDRELATORIOTCC_SP INTEGER)
  BEGIN 
  SELECT * FROM TCC WHERE idRelatorioTCC = IDRELATORIOTCC_SP;
  END;
--------------------------------------------------------------------------
--------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_AVALIACAO (POSTURA_PESSOAL_SP FLOAT(4), FLUENCIACOMUNICATIVA_SP FLOAT(4), CLAREZA_SP FLOAT(4), DOMINIO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), POSTURACOMENTARIO_SP VARCHAR(45), FLUENCIACOMENTARIO_SP VARCHAR(45), CLAREZACOMENTARIO_SP VARCHAR(45), DOMINIOCOMENTARIO_SP VARCHAR(45), IDRELATORIOTCC_SP INT, NOMEPROFESSOR_SP VARCHAR(100), DATABASE_SP DATE) 
  BEGIN 

  DECLARE IDPROFESSOR_FK INT;

  SELECT idProfessor INTO IDPROFESSOR_FK FROM Professor AS P WHERE P.NomeProfessor = NOMEPROFESSOR_SP

  INSERT INTO TCC (PosturaPessoal, FluenciaComunicativa, Clareza, Dominio, NotaTotal, PosturaComentario, FluenciaComentario, ClarezaComentario, DominioComentario, idRelatorioTCC, idProfessor, DataBanca)
   VALUES (POSTURA_PESSOAL_SP, FLUENCIACOMUNICATIVA_SP, CLAREZA_SP, DOMINIO_SP, NOTATOTAL_SP, POSTURACOMENTARIO_SP, FLUENCIACOMENTARIO_SP, CLAREZACOMENTARIO_SP, DOMINIOCOMENTARIO_SP, RELATORIOTCC_IDRELATORIOTCC_SP, IDPROFESSOR_FK, DATABASE_SP);
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE ELIMINAR_AVALIACAO (IDAVALIACAO_SP INTEGER)
  BEGIN
  DELETE FROM Avaliacao AS AV WHERE AV.idAvaliacao = IDAVALIACAO_SP;***************************
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_AVALIACAO (IDAVALIACAO_SP INTEGER, POSTURA_PESSOAL_SP FLOAT(4), FLUENCIACOMUNICATIVA_SP FLOAT(4), CLAREZA_SP FLOAT(4), DOMINIO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), POSTURACOMENTARIO_SP VARCHAR(45), FLUENCIACOMENTARIO_SP VARCHAR(45), CLAREZACOMENTARIO_SP VARCHAR(45), DOMINIOCOMENTARIO_SP VARCHAR(45), IDRELATORIOTCC_SP INTEGER, NOMEPROFESSOR_SP VARCHAR(100), DATABASE_SP DATE)
  BEGIN

  DECLARE IDPROFESSOR_FK INT;

  SELECT idProfessor INTO IDPROFESSOR_FK FROM Professor AS P WHERE P.NomeProfessor = NOMEPROFESSOR_SP

  UPDATE Avaliacao AS AV SET AV.PosturaPessoal = POSTURA_PESSOAL_SP, AV.FluenciaComunicativa = FLUENCIACOMUNICATIVA_SP, AV.Clareza = CLAREZA_SP, AV.Dominio = DOMINIO_SP, AV.NotaTotal = NOTATOTAL_SP, AV.PosturaComentario = POSTURACOMENTARIO_SP, AV.FluenciaComentario = FLUENCIACOMENTARIO_SP, AV.ClarezaComentario = CLAREZACOMENTARIO_SP, AV.DominioComentario = DOMINIOCOMENTARIO_SP, AV.idRelatorioTCC = IDRELATORIOTCC_SP, AV.idProfessor = IDPROFESSOR_FK, AV.DataBanca = DATABASE_SP, WHERE AV.idAvaliacao = IDAVALIACAO;
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE SELECT_AVALIACAO (IDAVALIACAO_SP INTEGER)
  BEGIN
  SELECT * FROM Avaliacao WHERE idAvaliacao = IDAVALIACAO_SP;
  END;
--------------------------------------------------------------------------
--------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_CURSO(CURSO_SP VARCHAR(45)) 
  BEGIN

  INSERT INTO Curso (Curso)
  VALUES (CURSO_SP);
  END;
---------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_CURSO (IDCURSO_SP INTEGER)
  BEGIN 

  DELETE FROM Curso WHERE Curso.idCurso= IDCURSO_SP;
  END;
----------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_CURSO (IDCURSO_SP INTEGER, CURSO_SP)
  BEGIN 

  UPDATE Curso SET Curso.Curso = CURSO_SP WHERE Curso.idCurso= IDCURSO_SP);
  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE SELECT_CURSO (IDCURSO_SP INTEGER)
  BEGIN 

  SELECT* FROM Curso WHERE Curso.idCurso= IDCURSO_SP;
  END;
-----------------------------------------------------------------------------
-----------------------------------------------------------------------------***************

CREATE PROCEDURE INSERIR_ATIVIDADE(NOMEATIVIDADE_SP VARCHAR(45), MES_ATIVIDADE_SP VARCHAR (45),DESCRICAO_ATIVIDADE_SP VARCHAR (45), IDRELATORIOTCC_SP INTEGER ) 
  BEGIN

  INSERT INTO Curso (NomeAtividade, MesAtividade, DescricaoAtividade, idRelatorioTCC)
  VALUES (NOMEATIVIDADE_SP, MES_ATIVIDADE_SP, DESCRICAO_ATIVIDADE_SP, IDRELATORIO_SP INTEGER);
  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_ATIVIDADE (IDATIVIDADE_SP INTEGER)
  BEGIN 

  DELETE FROM Atividade AS A WHERE A.idAtividade = IDATIVIDADE_SP;
  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_ATIVIDADE (IDCURSO_SP INTEGER, CURSO_SP)*********************
  BEGIN 

  END;
-----------------------------------------------------------------------------

CREATE PROCEDURE SELECT_ATIVIDADE (IDATIVIDADE_SP INTEGER)
  BEGIN 

  SELECT * FROM Atividade as A WHERE A.idAtividade = IDATIVIDADE_SP;
  END;
-----------------------------------------------------------------------------
-----------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_LINHAPESQUISA(LINHAPESQUISA_SP VARCHAR(45), NOMECURSO_SP VARCHAR (45)) 
  BEGIN

  DECLARE IDCURSO_FK INT;

  SELECT idcurso INTO IDCURSO_FK FROM Curso AS C WHERE C.Curso = NOMECURSO_SP

  INSERT INTO LinhaPesquisa (LinhaPesquisa, idCurso)
  VALUES (LINHAPESQUISA_SP, IDCURSO_FK);
  END;
------------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_LINHAPESQUISA (IDLINHAPESQUISA_SP INTEGER)
  BEGIN 

  DELETE FROM LinhaPesquisa AS LP WHERE LP.idLinhaPesquisa = IDLINHAPESQUISA_SP;
  END;
-------------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_ATIVIDADE (IDLINHAPESQUISA_SP INTEGER, LINHAPESQUISA_SP, CURSO_SP VARCHAR (45))
  BEGIN 

  DECLARE IDCURSO_FK INT;

  SELECT idcurso INTO IDCURSO_FK FROM Curso AS C WHERE C.Curso = NOMECURSO_SP
  
  UPDATE LinhaPesquisa AS LP SET LP.LinhaPesquisa = LINHAPESQUISA_SP , LP.idCurso = IDCURSO_SP WHERE LP.idLinhaPesquisa = IDLINHAPESQUISA_SP;

  END;
--------------------------------------------------------------------------------

CREATE PROCEDURE SELECT_LINHAPESQUISA (IDLINHAPESQUISA_SP INTEGER)
  BEGIN 

  SELECT * FROM LinhaPesquisa as LP WHERE LP.idLinhaPesquisa = IDLINHAPESQUISA_SP;
  END;
--------------------------------------------------------------------------
--------------------------------------------------------------------------
CREATE PROCEDURE INCERIR_AGENDAMENTO (MOTIVO_SP VARCHAR(45), IDALUNO_SP INT, PROFESSOR_IDPROFESSOR_SP INT)
  BEGIN
  INSERT INTO (Motivo VARCHAR(45), idAluno INT, Professor_idProfessor INT)
            VALUES (MOTIVO_SP, IDALUNO_SP, PROFESSOR_IDPROFESSOR_SP)
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE ELIMINAR_AGENDAMENTO (IDAGENDA_SP INTEGER)
  BEGIN
  DELETE FROM Agendamento WHERE idAgenda = IDAGENDA_SP ;
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_AGENDAMENTO (MOTIVO_SP VARCHAR(45), IDALUNO_SP INT, PROFESSOR_IDPROFESSOR_SP INT)
  BEGIN
  UPDATE Agendamento SET (Motivo = MOTIVO_SP, idAluno = IDALUNO_SP, Professor_idProfessor = PROFESSOR_IDPROFESSOR_SP)
  END; 
--------------------------------------------------------------------------
CREATE PROCEDURE SELECT_AGENDAMENTO (IDAGENDA_SP INTEGER)
  BEGIN
  SELECT * FROM Agendamento WHERE idAgenda = IDAGENDA_SP;
  END; 
-------------------------------------------------------------------------- 
--------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_COMPONENTES (IDALUNO1_SP INT, IDALUNO2_SP INT, ID_TCC INT, IDPROFESSOR_SP INT)
  BEGIN
  INSERT INTO COMPONENTES (idAluno1, idAluno2, TCC_idTCC, idProfessor) 
              VALUES (IDALUNO1_SP INT, IDALUNO2_SP INT, ID_TCC INT, IDPROFESSOR_SP INT);
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE ELIMINAR_COMPONENTES (IDCOMPONENTES_SP INTEGER)
  BEGIN
  DELETE FOM Componentes WHERE idComponentes = IDCOMPONENTES_SP;
  END;
---------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_COMPONENTES (IDALUNO1_SP INT, IDALUNO2_SP INT, ID_TCC INT, IDPROFESSOR_SP INT)
  BEGIN
  UPDATE Componentes SET (IDALUNO1_SP = idAluno1, IDALUNO2_SP = idAluno2, ID_TCC = TCC_idTCC, IDPROFESSOR_SP = idProfessor);
  END;
---------------------------------------------------------------------------
CREATE PPROCEDURE SELECT_COMPONENTES (IDCOMPONENTES_SP INTEGER)
  BEGIN
  SELECT * FROM Componentes WHERE idComponentes = IDCOMPONENTES_SP;
  END;  
---------------------------------------------------------------------------
---------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_CURSO (CURSO_SP VACHAR(45))
  BEGIN
  INSERT INTO CURSO (Curso) VALUES (IDCURSO_SP INT);
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE ELIMINAR_CURSO (IDCURSO_SP INTEGER)
  BEGIN
  DELETE FROM Curso WHERE idCurso = IDCURSO_SP;
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_CURSO (IDCURSO_SP INT)
  BEGIN
  UPDATE Curso SET (IDCURSO_SP = idCurso);
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE SELECT_CURSO (IDCURSO INTEGER)
  BEGIN
  SELECT * FROM Curso WHERE idCurso = IDCURSO_SP;
  END;
--------------------------------------------------------------------------
--------------------------------------------------------------------------      



//AGENDAMENTO(THIAGO), COMPONENTES(MATHEUS), CURSO(MATHEUS), LINHA DE PESQUISA (GALVAO OU DERIK)//

