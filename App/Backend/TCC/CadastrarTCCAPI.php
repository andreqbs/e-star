<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
use App\Model\Componentes as Componentes;
use App\DAO\DAOComponentes as DAOComponentes;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';




//$Titulo = $_POST['nomeTCC'];

//$Resumo = $_POST['nomeTCC'];

//$Status = $_POST['nomeTCC'];

//$Objetivos = $_POST['nomeTCC'];

//$Justificativas = $_POST['nomeTCC'];

//$TCCTipo = $_POST['nomeTCC'];

//$LinhaPesquisaFK = $_POST['nomeTCC'];

$Titulo = "talking";

$Resumo = "luva foda";

$Status = "1";

$Objetivos = "fazer uma luva foda";

$Justificativas = "pq eh foda";

$TCCTipo = "1";

$LinhaPesquisaFK = "1";

$idProfessorFK = "1";

$idAlunoFK1 = "36";

$idAlunoFK2 = "37";



$TCC = new TCC($Titulo, $Resumo, $Status, $Objetivos, $Justificativas, $TCCTipo, $LinhaPesquisaFK, $idAlunoFK1, $idAlunoFK2, $idProfessorFK);


$Control = new mainController();
$TCC = $Control->cadastrarTCC($TCC);

if ($TCC){
	echo '<script>alert("TCC Criado")</script>';
}
else {
	echo '<script> alert(" TCC Não Criado ") </script>  ';
}
	






