<?php 

ini_set('display_errors', true);
error_reporting(E_ALL);

use App\Models\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../DAO/DAOTCC.php';


//Criar TCC
function criarTCC($Tcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->create($Tcc);	
}

//Alterar Tcc
function alterarTCC($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->update($Tcc, $idTcc);	
}

function apagarTCC($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->delete($idTcc);	
}

function buscarTCC($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->find($Tcc, $idTcc);	
}

function listarTCC($Tcc,idTcc)
{
	$DAOTCC = new DAOTCC();
	$DAOTCC->update($Tcc, $idTcc);	
}