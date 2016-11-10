CREATE PROCEDURE SP_ACCESS ( USUARIO VARCHAR (50), PASS VARCHAR(20) )
  BEGIN 
	SELECT * FROM USUARIOS WHERE USER = USUARIO AND SENHA = PASS;
  END

CALL SP_ACCESS ('SPENCER', '12345')
------------------------------------------------------------------------
------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_ALUNO (NOME VARCHAR(100), MATRICULA INTEGER(10), EMAIL VARCHAR(100), LOGIN VARCHR(45), SENHA VARCHAR(100), IDCURSO_SP INTEGER) 
  BEGIN 
	INSERT INTO Aluno (NomeAluno, MatriculaAluno, EmailAluno, LoginAluno, SenhaAluno, idCurso)
	       	   VALUES (NOME, MATRICULA, EMAIL, LOGIN, SENHA, IDCURSO_SP);
  END;
------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_ALUNO (ID INTEGER)
  BEGIN
	DELETE FROM Aluno WHERE idAluno = ID;*******************************
  END;
-------------------------------------------------------------------------

CREATE PROCEDURE UPDATE_ALUNO (ID INTEGER, NOME VARCHAR(100), MATRICULA INTEGER(10), EMAIL VARCHAR(100), LOGIN VARCHR(45), SENHA VARCHAR(100), CURSO_SP INTEGER)
  BEGIN
	UPDATE Aluno SET NomeAluno = NOME, MatriculaAluno = MATRICULA, EmailAluno =  EMAIL, LoginAluno = LOGIN, SenhaAluno = SENHA, idCurso = IDCURSO_SP WHERE idAluno = ID;
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
	UPDATE Professor SET NomeProfessor = NOME, MatriculaProfessor = MATRICULA, EmailProfessor =  EMAIL, LoginProfessor = LOGIN, SenhaProfessor = SENHA WHERE idProfessor = ID;
  END;
---------------------------------------------------------------------------

CREATE PROCEDURE SELECT_PROFESSOR ( NOME VARCHAR(100), MATRICULA INTEGER(10) )
  BEGIN 
	SELECT * FROM Professor WHERE NomeProfessor = NOME AND MatriculaProfessor = MATRICULA;
  END;

--------------------------------------------------------------------------
--------------------------------------------------------------------------


CREATE PROCEDURE INSERIR_TCC (TITULO_SP VARCHAR(100), DESCRICAO_SP VARCHAR(300), STATUS_SP* INTEGER(1), OBJETIVOS_SP VARCHR(300), JUSTIFICATIVA_SP VARCHAR(300), TCC_SP_TIPO BOOLEAN, IDLINHAPESQUISA_SP INTEGER) 
  BEGIN 
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
	UPDATE TCC SET Titulo = TITULO_SP, Descricao = DESCRICAO_SP, Status = STATUS_SP, Objetivos = OBJETIVOS_SP, Justificativas = JUSTIFICATIVA_SP, idLinhaPesquisa = IDLINHAPESQUISA_SP WHERE idTCC = IDTCC;
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_PROFESSOR (IDTCC INTEGER, TITULO_SP VARCHAR(100))
  BEGIN 
	SELECT * FROM TCC WHERE idTCC = IDTCC AND Titulo = TITULO_SP;
  END;
--------------------------------------------------------------------------
--------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_RELATORIOTCC (APRESENTACAO_SP FLOAT(4), FUNDAMENTACAO_SP FLOAT(4), DESENVOLVIMENTO_SP FLOAT(4), MODELORESULTADO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), TIPORELATORIO_SP INTEGER(1), APRES_COMENT_SP VARCHAR(45), FUND_COMENT_SP VARCHAR(45), DESENV_COMENT_SP VARCHAR(45), MOD_RESUL_COMENT_SP VARCHAR(45), IDTCC_SP INTEGER) 
  BEGIN 
	INSERT INTO TCC (Apresentacao, Fundamentacao, Desenvolvimento, ModeloResultado, NotaTotal, TipoRelatorio, ApresentacaoComentario, FumdamentacaoComentario, DesenvolvimentoComentorio, ModeloResultadoComentario, idTCC)
	       	   VALUES (APRESENTACAO_SP, FUNDAMENTACAO_SP, DESENVOLVIMENTO_SP, MODELORESULTADO_SP, NOTATOTAL_SP, TIPORELATORIO_SP, APRES_COMENT_SP, FUND_COMENT_SP, DESENV_COMENT_SP, MOD_RESUL_COMENT_SP, IDTCC_SP);
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE ELIMINAR_RELATORIOTCC (IDRELATORIOTCC_SP INTEGER)
  BEGIN
	DELETE FROM RelatorioTCC WHERE idRelatorioTCC = idRELATORIOTCC_SP ;***************************
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_RELATORIOTCC (IDRELATORIO_SP INTEGER, APRESENTACAO_SP FLOAT(4), FUNDAMENTACAO_SP FLOAT(4), DESENVOLVIMENTO_SP FLOAT(4), MODELORESULTADO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), TIPORELATORIO_SP INTEGER(1), APRES_COMENT_SP VARCHAR(45), FUND_COMENT_SP VARCHAR(45), DESENV_COMENT_SP VARCHAR(45), MOD_RESUL_COMENT_SP VARCHAR(45), IDTCC_SP INTEGER) 
  BEGIN 
	UPDATE TCC SET (Apresentacao = APRESENTACAO_SP, Fundamentacao = FUNDAMENTACAO_SP, Desenvolvimento = DESENVOLVIMENTO_SP, ModeloResultado = MODELORESULTADO_SP, NotaTotal = NOTATOTAL_SP, TipoRelatorio = TIPORELATORIO_SP, ApresentacaoComentario = APRES_COMENT_SP, FumdamentacaoComentario = FUND_COMENT_SP, DesenvolvimentoComentorio = DESENV_COMENT_SP, ModeloResultadoComentario = MOD_RESUL_COMENT_SP, idTCC = IDTCC_SP WHERE idRelatorio = IDRELATORIO_SP);
  END;
--------------------------------------------------------------------------

CREATE PROCEDURE SELECT_RELATORIOTCC (IDRELATORIOTCC_SP INTEGER)
  BEGIN 
	SELECT * FROM TCC WHERE idRelatorioTCC = IDRELATORIOTCC_SP;
  END;
--------------------------------------------------------------------------
--------------------------------------------------------------------------

CREATE PROCEDURE INSERIR_AVALIACAO (POSTURA_PESSOAL_SP FLOAT(4), FLUENCIACOMUNICATIVA_SP FLOAT(4), CLAREZA_SP FLOAT(4), DOMINIO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), POSTURACOMENTARIO_SP VARCHAR(45), FLUENCIACOMENTARIO_SP VARCHAR(45), CLAREZACOMENTARIO_SP VARCHAR(45), DOMINIOCOMENTARIO_SP VARCHAR(45), RELATORIOTCC_IDRELATORIOTCC_SP INT, IDPROFESSOR_SP INT, DATABASE_SP DATE) 
  BEGIN 
	INSERT INTO TCC (PosturaPessoal, FluenciaComunicativa, Clareza, Dominio, NotaTotal, PosturaComentario, FluenciaComentario, ClarezaComentario, DominioComentario, idRelatorioTCC, idProfessor, DataBanca)
	       	   VALUES (POSTURA_PESSOAL_SP, FLUENCIACOMUNICATIVA_SP, CLAREZA_SP, DOMINIO_SP, NOTATOTAL_SP, POSTURACOMENTARIO_SP, FLUENCIACOMENTARIO_SP, CLAREZACOMENTARIO_SP, DOMINIOCOMENTARIO_SP, RELATORIOTCC_IDRELATORIOTCC_SP, IDPROFESSOR_SP, DATABASE_SP);
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE ELIMINAR_AVALIACAO (IDAVALIACAO_SP INTEGER)
  BEGIN
	DELETE FROM Avaliacao WHERE idAvaliacao = IDAVALIACAO_SP ;***************************
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE UPDATE_AVALIACAO (POSTURA_PESSOAL_SP FLOAT(4), FLUENCIACOMUNICATIVA_SP FLOAT(4), CLAREZA_SP FLOAT(4), DOMINIO_SP FLOAT(4), NOTATOTAL_SP FLOAT(4), POSTURACOMENTARIO_SP VARCHAR(45), FLUENCIACOMENTARIO_SP VARCHAR(45), CLAREZACOMENTARIO_SP VARCHAR(45), DOMINIOCOMENTARIO_SP VARCHAR(45), RELATORIOTCC_IDRELATORIOTCC_SP INT, IDPROFESSOR_SP INT, DATABASE_SP DATE)
  BEGIN
	UPDATE Avaliacao SET (PosturaPessoal = POSTURA_PESSOAL_SP, FluenciaComunicativa = FLUENCIACOMUNICATIVA_SP, Clareza = CLAREZA_SP, Dominio = DOMINIO_SP, NotaTotal = NOTATOTAL_SP, PosturaComentario = POSTURACOMENTARIO_SP, FluenciaComentario = FLUENCIACOMENTARIO_SP, ClarezaComentario = CLAREZACOMENTARIO_SP, DominioComentario = DOMINIOCOMENTARIO_SP, idRelatorioTCC = RELATORIOTCC_IDRELATORIOTCC_SP, idProfessor = IDPROFESSOR_SP, DataBanca = DATABASE_SP, idAvaliacao = IDAVALIACAO_SP WHERE idAvaliacao = IDAVALIACAO);
  END;
--------------------------------------------------------------------------
CREATE PROCEDURE SELECT_AVALIACAO (IDAVALIACAO_SP INTEGER)
  BEGIN
	SELECT * FROM Avaliacao WHERE idAvaliacao = IDAVALIACAO_SP;
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
//AGENDAMENTO(TIAGO), ATIVIDADE(DERIK), COMPONENTES(MATHEUS), CURSO(MATHEUS), LINHA DE PESQUISA (GALVAO OU DERIK)//

