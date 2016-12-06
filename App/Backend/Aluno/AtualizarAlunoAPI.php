<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$idAluno = $_POST[];

$NomeAluno = $_POST[];

$MatriculaAluno = $_POST[];

$EmailAluno = $_POST[];

$LoginAluno = $_POST[];

$SenhaAluno = $_POST[];

$SenhaAlunoConfirmacao = $_POST[];

$idCursoFK = $_POST[];


$Aluno = new Aluno($NomeAluno, $MatriculaAluno, $EmailAluno, $LoginAluno, $SenhaAluno;, $idCursoFK);


$Controller = new mainController();
$Result = $Controller->alterarAluno($Aluno, $idAluno);

//echo($Result);

if ($Result){
	echo '<script>alert("Usuario Atualizado")</script>';
}
else 
	echo '<script> alert(" Não Atualizado ") </script>  ';



