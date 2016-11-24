<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

use App\Models\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../DAO/DAOTCC.php';


class mainController
{



//CreateTCC
function cadastrarTCC($Tcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->create($Tcc);
}

//UpdateTcc
function alterarTCC($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->update($Tcc, $idTcc);
}

//DeleteTCC
function apagarTCC(idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->delete($idTcc);
}

//FindTCC
function buscarTCC($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->find($Tcc, $idTcc);
}

//ListTCC
function listarTCC($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->list($Tcc, $idTcc);
}

//ListTCC
function listarTCCPor($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->list($Tcc, $idTcc);
}




//CreateComponentes
function inserirComponentes($Componentes)
{
	$DAOComponentes = new DAOComponentes();
	$DAOComponentes->create($Componentes);
}

//UpdateComponentes
function alterarComponentes($Componentes,idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	$DAOComponentes->update($Componentes, $idComponentes);
}

//DeleteComponentes
function apagarComponentes(idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	$DAOComponentes->delete($idComponentes);
}

//FindComponentes
function buscarComponentes($Componentes,idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	$DAOComponentes->find($Componentes, $idComponentes);
}

//ListComponentes
function listarComponentes($Componentes,idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	$DAOComponentes->list($Componentes, $idComponentes);
}

//CreateArquivo
function inserirArquivo($Arquivo)
{
	$DAOArquivo = new DAOArquivo();
	$DAOArquivo->create($Arquivo);
}

//UpdateArquivo
function alterarArquivo($Arquivo,idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	$DAOArquivo->update($Arquivo, $idArquivo);
}

//DeleteArquivo
function apagarArquivo(idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	$DAOArquivo->delete($idArquivo);
}

//FindArquivo
function buscarArquivo($Arquivo,idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	$DAOArquivo->find($Arquivo, $idArquivo);
}

//ListArquivo
function listarArquivo($Arquivo,idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	$DAOArquivo->list($Arquivo, $idArquivo);
}

//CreateErro
function inserirErro($Erro)
{
	$DAOErro = new DAOErro();
	$DAOErro->create($Erro);
}

//UpdateErro
function alterarErro($Erro,idErro)
{
	$DAOErro = new DAOErro();
	$DAOErro->update($Erro, $idErro);
}

//DeleteErro
function apagarErro(idErro)
{
	$DAOErro = new DAOErro();
	$DAOErro->delete($idErro);
}

//FindErro
function buscarErro($Erro,idErro)
{
	$DAOErro = new DAOErro();
	$DAOErro->find($Erro, $idErro);
}

//ListErro
function listarErro($Erro,idErro)
{
	$DAOErro = new DAOErro();
	$DAOErro->list($Erro, $idErro);
}

//CreateErroTCC
function inserirErroTCC($ErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	$DAOErroTCC->create($ErroTCC);
}

//UpdateErroTCC
function alterarErroTCC($ErroTCC,idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	$DAOErroTCC->update($ErroTCC, $idErroTCC);
}

//DeleteErroTCC
function apagarErroTCC(idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	$DAOErroTCC->delete($idErroTCC);
}

//FindErroTCC
function buscarErroTCC($ErroTCC,idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	$DAOErroTCC->find($ErroTCC, $idErroTCC);
}

//ListErroTCC
function listarErroTCC($ErroTCC,idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	$DAOErroTCC->list($ErroTCC, $idErroTCC);
}

//CreateEvento
function inserirEvento($Evento)
{
	$DAOEvento = new DAOEvento();
	$DAOEvento->create($Evento);
}

//UpdateEvento
function alterarEvento($Evento,idEvento)
{
	$DAOEvento = new DAOEvento();
	$DAOEvento->update($Evento, $idEvento);
}

//DeleteEvento
function apagarEvento(idEvento)
{
	$DAOEvento = new DAOEvento();
	$DAOEvento->delete($idEvento);
}

//FindEvento
function buscarEvento($Evento,idEvento)
{
	$DAOEvento = new DAOEvento();
	$DAOEvento->find($Evento, $idEvento);
}

//ListEvento
function listarEvento($Evento,idEvento)
{
	$DAOEvento = new DAOEvento();
	$DAOEvento->list($Evento, $idEvento);
}

//CreateReservas
function inserirReservas($Reservas)
{
	$DAOReservas = new DAOReservas();
	$DAOReservas->create($Reservas);
}

//UpdateReservas
function alterarReservas($Reservas,idReservas)
{
	$DAOReservas = new DAOReservas();
	$DAOReservas->update($Reservas, $idReservas);
}

//DeleteReservas
function apagarReservas(idReservas)
{
	$DAOReservas = new DAOReservas();
	$DAOReservas->delete($idReservas);
}

//FindReservas
function buscarReservas($Reservas,idReservas)
{
	$DAOReservas = new DAOReservas();
	$DAOReservas->find($Reservas, $idReservas);
}

//ListReservas
function listarReservas($Reservas,idReservas)
{
	$DAOReservas = new DAOReservas();
	$DAOReservas->list($Reservas, $idReservas);
}

//CreateSalaAula
function inserirSalaAula($SalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	$DAOSalaAula->create($SalaAula);
}

//UpdateSalaAula
function alterarSalaAula($SalaAula,idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	$DAOSalaAula->update($SalaAula, $idSalaAula);
}

//DeleteSalaAula
function apagarSalaAula(idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	$DAOSalaAula->delete($idSalaAula);
}

//FindSalaAula
function buscarSalaAula($SalaAula,idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	$DAOSalaAula->find($SalaAula, $idSalaAula);
}

//ListSalaAula
function listarSalaAula($SalaAula,idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	$DAOSalaAula->list($SalaAula, $idSalaAula);
}

//CreateAluno
function cadastrarAluno($Aluno)
{
	$DAOAluno = new DAOAluno();
	$DAOAluno->create($Aluno);
}

//UpdateAluno
function alterarAluno($Aluno,idAluno)
{
	$DAOAluno = new DAOAluno();
	$DAOAluno->update($Aluno, $idAluno);
}

//DeleteAluno
function apagarAluno(idAluno)
{
	$DAOAluno = new DAOAluno();
	$DAOAluno->delete($idAluno);
}

//FindAluno
function buscarAluno($Aluno,idAluno)
{
	$DAOAluno = new DAOAluno();
	$DAOAluno->find($Aluno, $idAluno);
}

//ListAluno
function listarAluno($Aluno,idAluno)
{
	$DAOAluno = new DAOTCC();
	$DAOAluno->list($Aluno, $idAluno);
}

//CreateAtividade
function cadastrarAtividade($Atividade)
{
	$DAOAtividade = new DAOAtividade();
	$DAOAtividade->create($Atividade);
}

//UpdateAtividade
function alterarAtividade($Atividade,idAtividade)
{
	$DAOAtividade = new DAOAtividade();
	$DAOAtividade->update($Atividade, $idAtividade);
}

//DeleteAtividade
function apagarAtividade(idAtividade)
{
	$DAOAtividade = new DAOAtividade();
	$DAOAtividade->delete($idAtividade);
}

//FindAtividade
function buscarAtividade($Atividade,idAtividade)
{
	$DAOAtividade = new DAOAtividade();
	$DAOAtividade->find($Atividade, $idAtividade);
}

//ListAtividade
function listarAtividade($Atividade,idAtividade)
{
	$DAOAtividade = new DAOTCC();
	$DAOAtividade->list($Atividade, $idAtividade);
}

//CreateCurso
function cadastrarCurso($Curso)
{
	$DAOCurso = new DAOCurso();
	$DAOCurso->create($Curso);
}

//UpdateCurso
function alterarCurso($Curso,idCurso)
{
	$DAOCurso = new DAOCurso();
	$DAOCurso->update($Curso, $idCurso);
}

//DeleteCurso
function apagarCurso(idCurso)
{
	$DAOCurso = new DAOCurso();
	$DAOCurso->delete($idCurso);
}

//FindCurso
function buscarCurso($Curso,idCurso)
{
	$DAOCurso = new DAOCurso();
	$DAOCurso->find($Curso, $idCurso);
}

//ListCurso
function listarCurso($Curso,idCurso)
{
	$DAOCurso = new DAOTCC();
	$DAOCurso->list($Curso, $idCurso);
}


//CreateLinhaPesquisa
function cadastrarLinhaPesquisa($LinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	$DAOLinhaPesquisa->create($LinhaPesquisa);
}

//UpdateLinhaPesquisa
function alterarLinhaPesquisa($LinhaPesquisa,idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	$DAOLinhaPesquisa->update($LinhaPesquisa, $idLinhaPesquisa);
}

//DeleteLinhaPesquisa
function apagarLinhaPesquisa(idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	$DAOLinhaPesquisa->delete($idLinhaPesquisa);
}

//FindLinhaPesquisa
function buscarLinhaPesquisa($LinhaPesquisa,idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	$DAOLinhaPesquisa->find($LinhaPesquisa, $idLinhaPesquisa);
}

//ListLinhaPesquisa
function listarLinhaPesquisa($LinhaPesquisa,idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOTCC();
	$DAOLinhaPesquisa->list($LinhaPesquisa, $idLinhaPesquisa);
}



//CreateRelatorioTCC
function cadastrarRelatorioTCC($RelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	$DAORelatorioTCC->create($RelatorioTCC);
}

//UpdateRelatorioTCC
function alterarRelatorioTCC($RelatorioTCC,idRelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	$DAORelatorioTCC->update($RelatorioTCC, $idRelatorioTCC);
}

//DeleteRelatorioTCC
function apagarRelatorioTCC(idRelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	$DAORelatorioTCC->delete($idRelatorioTCC);
}

//FindRelatorioTCC
function buscarRelatorioTCC($RelatorioTCC,idRelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	$DAORelatorioTCC->find($RelatorioTCC, $idRelatorioTCC);
}

//ListRelatorioTCC
function listarRelatorioTCC($RelatorioTCC,idRelatorioTCC)
{
	$DAORelatorioTCC = new DAOTCC();
	$DAORelatorioTCC->list($RelatorioTCC, $idRelatorioTCC);
}


//CreateAgendamento
function cadastrarAgendamento($Agendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	$DAOAgendamento->create($Agendamento);
}

//UpdateAgendamento
function alterarAgendamento($Agendamento,$idAgendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	$DAOAgendamento->update($Agendamento, $idAgendamento);
}

//DeleteAgendamento
function apagarAgendamento($idAgendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	$DAOAgendamento->delete($idAgendamento);
}

//FindAgendamento
function buscarAgendamento($Agendamento,$idAgendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	$DAOAgendamento->find($Agendamento, $idAgendamento);
}

//ListAgendamento
function listarAgendamento($Agendamento,$idAgendamento)
{
	$DAOAgendamento = new DAOTCC();
	$DAOAgendamento->list($Agendamento, $idAgendamento);
}



//CreateProfessor
function cadastrarProfessor($Professor)
{
	$DAOProfessor = new DAOProfessor();
	$DAOProfessor->create($Professor);
}

//UpdateProfessor
function alterarProfessor($Professor,idProfessor)
{
	$DAOProfessor = new DAOProfessor();
	$DAOProfessor->update($Professor, $idProfessor);
}

//DeleteProfessor
function apagarProfessor(idProfessor)
{
	$DAOProfessor = new DAOProfessor();
	$DAOProfessor->delete($idAgendamento);
}

//FindAProfessor
function buscarProfessor($Professor,idProfessor)
{
	$DAOProfessor = new DAOProfessor();
	$DAOProfessor->find($Professor, $idProfessor);
}

//ListProfessor
function listarProfessor($Agendamento,idProfessor)
{
	$DAOProfessor = new Professor();
	$DAOProfessor->list($Professor, $idProfessor);
}


//CreateDefesa
function cadastrarDefesa($Defesa)
{
	$DAODefesa = new DAODefesa();
	$DAODefesa->create($Defesa);
}

//UpdateDefesa
function alterarDefesa($Defesa,idDefesa)
{
	$DAODefesa = new DAODefesa();
	$DAODefesa->update($Defesa, $idDefesa);
}

//DeleteDefesa
function apagarDefesa(idDefesa)
{
	$DAODefesa = new DAODefesa();
	$DAODefesa->delete($idAgendamento);
}

//FindADefesa
function buscarDefesa($Defesa,idDefesa)
{
	$DAODefesa = new DAODefesa();
	$DAODefesa->find($Defesa, $idAgendamento);
}

//ListDefesa
function listarDefesa($Agendamento,idDefesa)
{
	$DAODefesa = new Defesa();
	$DAODefesa->list($Defesa, $idDefesa);
}


//CreateCronograma
function cadastrarCronograma($Cronograma)
{
	$DAOCronograma = new DAOCronograma();
	$DAOACronograma->create($Cronograma);
}

//UpdateCronograma
function alterarCronograma($Cronograma,$idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	$DAOCronograma->update($Cronograma, $idCronograma);
}

//DeleteCronograma
function apagarCronograma($idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	$DAOCronograma->delete($idCronograma);
}

//FindCronograma
function buscarCronograma($Cronograma,$idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	$DAOCronograma->find($Cronograma, $idCronograma);
}

//ListCronograma
function listarAgendamento($Cronograma,$idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	$DAOCronograma->list($Cronograma, $idCronograma);
}
}
