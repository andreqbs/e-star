<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;

require_once dirname(__FILE__).'/../../Model/Aluno.php';
require_once dirname(__FILE__).'/../../DAO/DAOAluno.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';


// $NomeAluno;

// $MatriculaAluno;

// $EmailAluno;

// $LoginAluno;

// $SenhaAluno;

// $SenhaAlunoConfirmacao;

// $idCursoFK;


//$Aluno = new Aluno($NomeAluno, $MatriculaAluno, $EmailAluno, $LoginAluno, $SenhaAluno;, $idCursoFK);
$Aluno = new Aluno("eu", "123456", "eu@tu.com", "eu", "123", "2");

$Controller = new mainController();
$Result = $Controller->cadastrarAluno($Aluno);

//echo($Result);

if ($Result){
	echo '<script>alert("Usuario Criado")</script>';
}
else 
	echo '<script> alert(" Não Cadastrado ") </script>  ';




