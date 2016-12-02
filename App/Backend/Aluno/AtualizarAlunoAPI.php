<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';


// $NomeAluno;

// $MatriculaAluno;

// $EmailAluno;

// $LoginAluno;

// $SenhaAluno;

// $SenhaAlunoConfirmacao;

// $idCursoFK;


//$Aluno = new Aluno($NomeAluno, $MatriculaAluno, $EmailAluno, $LoginAluno, $SenhaAluno;, $idCursoFK);
$Aluno = new Aluno("tu", "54321", "noia@tu.com", "me", "123", "2");

$Controller = new mainController();
$Result = $Controller->alterarAluno($Aluno, 13);

//echo($Result);

if ($Result){
	echo '<script>alert("Usuario Atualizado")</script>';
}
else 
	echo '<script> alert(" Não Atualizado ") </script>  ';



