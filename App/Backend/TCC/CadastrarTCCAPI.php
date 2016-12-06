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




$Titulo = $_POST['TituloTCC'];

$Resumo = $_POST['ResumoTcc'];

$Status = 1;

$Objetivos = $_POST['ObjetivosTcc'];

$Justificativas = $_POST['justificativasTCC'];

$TCCTipo = 1;

$LinhaPesquisaFK = $_POST['idPesquisa'];

$matriculaProfessor = $_POST['MatriculaOrientador'];

$matriculaAluno1 = $_POST['MatriculaAluno1'];

$matriculaAluno2 = $_POST['MatriculaAluno2'];

$ControlAluno = new mainController();

$ControlProf = new mainController();

$aluno1 = $ControlAluno->listarAlunoPor("matricula", $matriculaAluno1);

$aluno2 = $ControlAluno->listarAlunoPor("matricula", $matriculaAluno2);

$prof = $ControlProf->listarProfPor("matricula", $matriculaProfessor);

$idAlunoFK1 = $aluno1["idAluno"];

$idAlunoFK2 = $aluno2["idAluno"];

$idProfessorFK = $prof["idProfessor"];



$TCC = new TCC($Titulo, $Resumo, $Status, $Objetivos, $Justificativas, $TCCTipo, $LinhaPesquisaFK, $idAlunoFK1, $idAlunoFK2, $idProfessorFK);


$Control = new mainController();
$TCC = $Control->cadastrarTCC($TCC);


	
echo ($TCC);





