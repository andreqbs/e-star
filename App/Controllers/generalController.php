<?php 

ini_set('display_errors', true);
error_reporting(E_ALL);

use App\Models\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../DAO/DAOTCC.php';


//CreateTCC
function criarTCC($Tcc)
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
function criarComponentes($Componentes)
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

