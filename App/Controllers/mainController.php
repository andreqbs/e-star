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




}