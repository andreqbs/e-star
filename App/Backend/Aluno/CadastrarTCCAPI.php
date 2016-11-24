<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../DAO/DAOTCC.php';




$Titulo = $_POST['nomeTCC'];

$Resumo = $_POST['nomeTCC'];

$Status = $_POST['nomeTCC'];

$Objetivos = $_POST['nomeTCC'];

$Justificativas = $_POST['nomeTCC'];

$TCCTipo = $_POST['nomeTCC'];

$LinhaPesquisa = $_POST['nomeTCC'];


$meuTCC = new TCC($Titulo, $Resumo, $Status, $Objetivos, $Justificativas;, $TCCTipo, $LinhaPesquisa);

$meuDAOTCC = new DAOTCC();
$TCC = $meuDAOTCC->create($meuTCC);

if($TCC){
	
}




