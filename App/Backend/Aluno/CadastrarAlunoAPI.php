<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';


$NomeAluno;

$MatriculaAluno;

$EmailAluno;

$LoginAluno;

$SenhaAluno;

$SenhaAlunoConfirmacao;

$idCursoFK;

if($SenhaAluno == $SenhaAlunoConfirmacao)
{
	$Aluno = new Aluno($NomeAluno, $MatriculaAluno, $EmailAluno, $LoginAluno, $SenhaAluno;, $idCursoFK);

	$Controller = new mainController();
	$Result = $Controller->cadastrarAluno($Aluno);

	echo $Result);

}








