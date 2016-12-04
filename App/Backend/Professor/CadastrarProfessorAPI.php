<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $NomeProfessor = $_POST['nomeCompleto'];

 $MatriculaProfessor = $_POST['matricula'];

 $EmailProfessor = $_POST['email'];

 $LoginProfessor = $_POST['usuario'];

 $SenhaProfessor = $_POST['repetirSenha'];

 $SenhaProfessorConfirmacao = $_POST['SenhaProfessor'];

$meuProfessor = new Professor($NomeProfessor,$MatriculaProfessor,$EmailProfessor, $LoginProfessor, $SenhaProfessor);

$ProfessorControl = new mainController();
$Result =$ProfessorControl->cadastrarProfessor($meuProfessor);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';
	$_SESSION['NomeProfessor'] = $Result['NomeProfessor'];
	$_SESSION['MatriculaProfessor'] = $Result['MatriculaProfessor'];
	$_SESSION['EmailProfessor'] = $Result['EmailProfessor'];
	$_SESSION['LoginProfessor'] = $Result['LoginProfessor'];
}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';


