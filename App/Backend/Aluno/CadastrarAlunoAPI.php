<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
require_once dirname(__FILE__).'/../Model/Aluno.php';
require_once dirname(__FILE__).'/../DAO/DAOAluno.php';



$NomeAluno = $_POST['nomealuno'];;

$MatriculaAluno;

$EmailAluno;

$LoginAluno;

$SenhaAluno;

$SenhaAlunoConfirmacao;

$idCursoFK;


$Aluno = new Aluno($NomeAluno, $MatriculaAluno, $EmailAluno, $LoginAluno, $SenhaAluno;, $idCursoFK);

$Controller = new mainController();
$Result = $Controller->cadastrarAluno($Aluno);

if (!$Result){
<<<<<<< 07e3ac038ea81e1bd3a82883d90d6fa3ae064c46
	echo '<script>alert("Usuario não cadastrado ")</script>';
=======
	echo '<script>alert("Usuario não cadastrado")</script>';

>>>>>>> teste1
}




