<?php

namespace App\Controllers;

ini_set('display_errors', true);
error_reporting(E_ALL);

use App\DAO\DAOAgendamento as DAOAgendamento;
use App\DAO\DAOAluno as DAOAluno;
use App\DAO\DAOArquivos as DAOArquivos;
use App\DAO\DAOAtividade as DAOAtividade;
use App\DAO\DAOCronograma as DAOCronograma;
use App\DAO\DAOCurso as DAOCurso;
use App\DAO\DAODefesa as DAODefesa;
use App\DAO\DAOErro as DAOErro;
use App\DAO\DAOEvento as DAOEvento;
use App\DAO\DAOLinhaPesquisa as DAOLinhaPesquisa;
use App\DAO\DAOProfessor as DAOProfessor;
use App\DAO\DAORelatorioTCC as DAORelatorioTCC;
use App\DAO\DAOReservas as DAOReservas;
use App\DAO\DAOSalaAula as DAOSalaAula;
use App\DAO\DAOTCC as DAOTCC;


require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';


class mainController
{



//CreateTCC
function cadastrarTCC($Tcc)
{
	$DAOTCC = new DAOTCC();
	return $DAOTCC->create($Tcc);
}

//UpdateTcc
function alterarTCC($Tcc,$idTcc)
{
	$DAOTCC = new DAOTCC();
	return $DAOTCC->update($Tcc, $idTcc);
}

//DeleteTCC
function apagarTCC($idTcc)
{
	$DAOTCC = new DAOTCC();
	return $DAOTCC->delete($idTcc);
}

//FindTCC
function buscarTCC($Tcc,$idTcc)
{
	$DAOTCC = new DAOTCC();
	return $DAOTCC->find($Tcc, $idTcc);
}

//ListTCC
function listarTCC($Tcc,$idTcc)
{
	$DAOTCC = new DAOTCC();
	return $DAOTCC->list($Tcc, $idTcc);
}

//ListTCC
function listarTCCPor($Tcc,$idTcc)
{
	$DAOTCC = new DAOTCC();
	return $DAOTCC->list($Tcc, $idTcc);
}




//CreateComponentes
function inserirComponentes($Componentes)
{
	$DAOComponentes = new DAOComponentes();
	return $DAOComponentes->create($Componentes);
}

//UpdateComponentes
function alterarComponentes($Componentes,$idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	return $DAOComponentes->update($Componentes, $idComponentes);
}

//DeleteComponentes
function apagarComponentes($idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	return $DAOComponentes->delete($idComponentes);
}

//FindComponentes
function buscarComponentes($Componentes,$idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	return $DAOComponentes->find($Componentes, $idComponentes);
}

//ListComponentes
function listarComponentes($Componentes,$idComponentes)
{
	$DAOComponentes = new DAOComponentes();
	return $DAOComponentes->list($Componentes, $idComponentes);
}

//CreateArquivo
function inserirArquivo($Arquivo)
{
	$DAOArquivo = new DAOArquivo();
	return $DAOArquivo->create($Arquivo);
}

//UpdateArquivo
function alterarArquivo($Arquivo,$idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	return $DAOArquivo->update($Arquivo, $idArquivo);
}

//DeleteArquivo
function apagarArquivo($idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	return $DAOArquivo->delete($idArquivo);
}

//FindArquivo
function buscarArquivo($Arquivo,$idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	return $DAOArquivo->find($Arquivo, $idArquivo);
}

//ListArquivo
function listarArquivo($Arquivo,$idArquivo)
{
	$DAOArquivo = new DAOArquivo();
	return $DAOArquivo->list($Arquivo, $idArquivo);
}

//CreateErro
function inserirErro($Erro)
{
	$DAOErro = new DAOErro();
	return $DAOErro->create($Erro);
}

//UpdateErro
function alterarErro($Erro,$idErro)
{
	$DAOErro = new DAOErro();
	return $DAOErro->update($Erro, $idErro);
}

//DeleteErro
function apagarErro($idErro)
{
	$DAOErro = new DAOErro();
	return $DAOErro->delete($idErro);
}

//FindErro
function buscarErro($Erro,$idErro)
{
	$DAOErro = new DAOErro();
	return $DAOErro->find($Erro, $idErro);
}

//ListErro
function listarErro($Erro,$idErro)
{
	$DAOErro = new DAOErro();
	return $DAOErro->list($Erro, $idErro);
}

//CreateErroTCC
function inserirErroTCC($ErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	return $DAOErroTCC->create($ErroTCC);
}

//UpdateErroTCC
function alterarErroTCC($ErroTCC,$idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	return $DAOErroTCC->update($ErroTCC, $idErroTCC);
}

//DeleteErroTCC
function apagarErroTCC($idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	return $DAOErroTCC->delete($idErroTCC);
}

//FindErroTCC
function buscarErroTCC($ErroTCC,$idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	return $DAOErroTCC->find($ErroTCC, $idErroTCC);
}

//ListErroTCC
function listarErroTCC($ErroTCC,$idErroTCC)
{
	$DAOErroTCC = new DAOErroTCC();
	return $DAOErroTCC->list($ErroTCC, $idErroTCC);
}

//CreateEvento
function inserirEvento($Evento)
{
	$DAOEvento = new DAOEvento();
	return $DAOEvento->create($Evento);
}

//UpdateEvento
function alterarEvento($Evento,$idEvento)
{
	$DAOEvento = new DAOEvento();
	return $DAOEvento->update($Evento, $idEvento);
}

//DeleteEvento
function apagarEvento($idEvento)
{
	$DAOEvento = new DAOEvento();
	return $DAOEvento->delete($idEvento);
}

//FindEvento
function buscarEvento($Evento,$idEvento)
{
	$DAOEvento = new DAOEvento();
	return $DAOEvento->find($Evento, $idEvento);
}

//ListEvento
function listarEvento($Evento,$idEvento)
{
	$DAOEvento = new DAOEvento();
	return $DAOEvento->list($Evento, $idEvento);
}

//CreateReservas
function inserirReservas($Reservas)
{
	$DAOReservas = new DAOReservas();
	return $DAOReservas->create($Reservas);
}

//UpdateReservas
function alterarReservas($Reservas,$idReservas)
{
	$DAOReservas = new DAOReservas();
	return $DAOReservas->update($Reservas, $idReservas);
}

//DeleteReservas
function apagarReservas($idReservas)
{
	$DAOReservas = new DAOReservas();
	return $DAOReservas->delete($idReservas);
}

//FindReservas
function buscarReservas($Reservas,$idReservas)
{
	$DAOReservas = new DAOReservas();
	return $DAOReservas->find($Reservas, $idReservas);
}

//ListReservas
function listarReservas($Reservas,$idReservas)
{
	$DAOReservas = new DAOReservas();
	return $DAOReservas->list($Reservas, $idReservas);
}

//CreateSalaAula
function inserirSalaAula($SalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	return $DAOSalaAula->create($SalaAula);
}

//UpdateSalaAula
function alterarSalaAula($SalaAula,$idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	return $DAOSalaAula->update($SalaAula, $idSalaAula);
}

//DeleteSalaAula
function apagarSalaAula($idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	return $DAOSalaAula->delete($idSalaAula);
}

//FindSalaAula
function buscarSalaAula($SalaAula,$idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	return $DAOSalaAula->find($SalaAula, $idSalaAula);
}

//ListSalaAula
function listarSalaAula($SalaAula,$idSalaAula)
{
	$DAOSalaAula = new DAOSalaAula();
	return $DAOSalaAula->list($SalaAula, $idSalaAula);
}

//CreateAluno
function cadastrarAluno($Aluno)
{
	$DAOAluno = new DAOAluno();
	return $DAOAluno->create($Aluno);
}

//UpdateAluno
function alterarAluno($Aluno,$idAluno)
{
	$DAOAluno = new DAOAluno();
	return $DAOAluno->update($Aluno, $idAluno);
}

//DeleteAluno
function apagarAluno($idAluno)
{
	$DAOAluno = new DAOAluno();
	return $DAOAluno->delete($idAluno);
}

//FindAluno
function buscarAluno($Aluno,$idAluno)
{
	$DAOAluno = new DAOAluno();
	return $DAOAluno->find($Aluno, $idAluno);
}

//ListAluno
function listarAluno($Aluno,$idAluno)
{
	$DAOAluno = new DAOTCC();
	return $DAOAluno->list($Aluno, $idAluno);
}

//CreateAtividade
function cadastrarAtividade($Atividade)
{
	$DAOAtividade = new DAOAtividade();
	return $DAOAtividade->create($Atividade);
}

//UpdateAtividade
function alterarAtividade($Atividade,$idAtividade)
{
	$DAOAtividade = new DAOAtividade();
	return $DAOAtividade->update($Atividade, $idAtividade);
}

//DeleteAtividade
function apagarAtividade($idAtividade)
{
	$DAOAtividade = new DAOAtividade();
	return $DAOAtividade->delete($idAtividade);
}

//FindAtividade
function buscarAtividade($Atividade,$idAtividade)
{
	$DAOAtividade = new DAOAtividade();
	return $DAOAtividade->find($Atividade, $idAtividade);
}

//ListAtividade
function listarAtividade($Atividade,$idAtividade)
{
	$DAOAtividade = new DAOTCC();
	return $DAOAtividade->list($Atividade, $idAtividade);
}

//CreateCurso
function cadastrarCurso($Curso)
{
	$DAOCurso = new DAOCurso();
	return $DAOCurso->create($Curso);
}

//UpdateCurso
function alterarCurso($Curso,$idCurso)
{
	$DAOCurso = new DAOCurso();
	return $DAOCurso->update($Curso, $idCurso);
}

//DeleteCurso
function apagarCurso($idCurso)
{
	$DAOCurso = new DAOCurso();
	return $DAOCurso->delete($idCurso);
}

//FindCurso
function buscarCurso($Curso,$idCurso)
{
	$DAOCurso = new DAOCurso();
	return $DAOCurso->find($Curso, $idCurso);
}

//ListCurso
function listarCurso($Curso,$idCurso)
{
	$DAOCurso = new DAOTCC();
	return $DAOCurso->list($Curso, $idCurso);
}


//CreateLinhaPesquisa
function cadastrarLinhaPesquisa($LinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	return $DAOLinhaPesquisa->create($LinhaPesquisa);
}

//UpdateLinhaPesquisa
function alterarLinhaPesquisa($LinhaPesquisa,$idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	return $DAOLinhaPesquisa->update($LinhaPesquisa, $idLinhaPesquisa);
}

//DeleteLinhaPesquisa
function apagarLinhaPesquisa($idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	return $DAOLinhaPesquisa->delete($idLinhaPesquisa);
}

//FindLinhaPesquisa
function buscarLinhaPesquisa($LinhaPesquisa,$idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOLinhaPesquisa();
	return $DAOLinhaPesquisa->find($LinhaPesquisa, $idLinhaPesquisa);
}

//ListLinhaPesquisa
function listarLinhaPesquisa($LinhaPesquisa,$idLinhaPesquisa)
{
	$DAOLinhaPesquisa = new DAOTCC();
	return $DAOLinhaPesquisa->list($LinhaPesquisa, $idLinhaPesquisa);
}



//CreateRelatorioTCC
function cadastrarRelatorioTCC($RelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	return $DAORelatorioTCC->create($RelatorioTCC);
}

//UpdateRelatorioTCC
function alterarRelatorioTCC($RelatorioTCC,$idRelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	return $DAORelatorioTCC->update($RelatorioTCC, $idRelatorioTCC);
}

//DeleteRelatorioTCC
function apagarRelatorioTCC($idRelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	return $DAORelatorioTCC->delete($idRelatorioTCC);
}

//FindRelatorioTCC
function buscarRelatorioTCC($RelatorioTCC,$idRelatorioTCC)
{
	$DAORelatorioTCC = new DAORelatorioTCC();
	return $DAORelatorioTCC->find($RelatorioTCC, $idRelatorioTCC);
}

//ListRelatorioTCC
function listarRelatorioTCC($RelatorioTCC,$idRelatorioTCC)
{
	$DAORelatorioTCC = new DAOTCC();
	return $DAORelatorioTCC->list($RelatorioTCC, $idRelatorioTCC);
}


//CreateAgendamento
function cadastrarAgendamento($Agendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	return $DAOAgendamento->create($Agendamento);
}

//UpdateAgendamento
function alterarAgendamento($Agendamento,$idAgendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	return $DAOAgendamento->update($Agendamento, $idAgendamento);
}

//DeleteAgendamento
function apagarAgendamento($idAgendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	return $DAOAgendamento->delete($idAgendamento);
}

//FindAgendamento
function buscarAgendamento($Agendamento,$idAgendamento)
{
	$DAOAgendamento = new DAOAgendamento();
	return $DAOAgendamento->find($Agendamento, $idAgendamento);
}

//ListAgendamento
function listarAgendamento($Agendamento,$idAgendamento)
{
	$DAOAgendamento = new DAOTCC();
	return $DAOAgendamento->list($Agendamento, $idAgendamento);
}



//CreateProfessor
function cadastrarProfessor($Professor)
{
	$DAOProfessor = new DAOProfessor();
	return $DAOProfessor->create($Professor);
}

//UpdateProfessor
function alterarProfessor($Professor,$idProfessor)
{
	$DAOProfessor = new DAOProfessor();
	return $DAOProfessor->update($Professor, $idProfessor);
}

//DeleteProfessor
function apagarProfessor($idProfessor)
{
	$DAOProfessor = new DAOProfessor();
	return $DAOProfessor->delete($idProfessor);
}

//FindAProfessor
function buscarProfessor($Professor,$idProfessor)
{
	$DAOProfessor = new DAOProfessor();
	return $DAOProfessor->find($Professor, $idProfessor);
}

//ListProfessor
function listarProfessor($Agendamento,$idProfessor)
{
	$DAOProfessor = new Professor();
	return $DAOProfessor->list($Professor, $idProfessor);
}


//CreateDefesa
function cadastrarDefesa($Defesa)
{
	$DAODefesa = new DAODefesa();
	return $DAODefesa->create($Defesa);
}

//UpdateDefesa
function alterarDefesa($Defesa,$idDefesa)
{
	$DAODefesa = new DAODefesa();
	return $DAODefesa->update($Defesa, $idDefesa);
}

//DeleteDefesa
function apagarDefesa($idDefesa)
{
	$DAODefesa = new DAODefesa();
	return $DAODefesa->delete($idAgendamento);
}

//FindADefesa
function buscarDefesa($Defesa,$idDefesa)
{
	$DAODefesa = new DAODefesa();
	return $DAODefesa->find($Defesa, $idAgendamento);
}

//ListDefesa
function listarDefesa($Agendamento,$idDefesa)
{
	$DAODefesa = new Defesa();
	return $DAODefesa->list($Defesa, $idDefesa);
}


//CreateCronograma
function cadastrarCronograma($Cronograma)
{
	$DAOCronograma = new DAOCronograma();
	return $DAOACronograma->create($Cronograma);
}

//UpdateCronograma
function alterarCronograma($Cronograma,$idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	return $DAOCronograma->update($Cronograma, $idCronograma);
}

//DeleteCronograma
function apagarCronograma($idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	return $DAOCronograma->delete($idCronograma);
}

//FindCronograma
function buscarCronograma($Cronograma,$idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	return $DAOCronograma->find($Cronograma, $idCronograma);
}

//ListCronograma
function listarCronograma($Cronograma,$idCronograma)
{
	$DAOCronograma = new DAOCronograma();
	return $DAOCronograma->list($Cronograma, $idCronograma);
}

}
