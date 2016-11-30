<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $NomeProfessor = $_POST['NomeProfessor'];

 $MatriculaProfessor = $_POST['MatriculaProfessor'];

 $EmailProfessor = $_POST['EmailProfessor'];

 $LoginProfessor = $_POST['LoginProfessor'];

 $SenhaProfessor = $_POST['SenhaProfessor'];

 $SenhaProfessorConfirmacao = $_POST['SenhaProfessor'];

 // $NomeProfessor = "andre "; //$_POST['']

 // $MatriculaProfessor = "123356";

 // $EmailProfessor = "teste@test.com";

 // $LoginProfessor = "andree";

 // $SenhaProfessor = "123456789";

 // $SenhaProfessorConfirmacao = "egy321gg";

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


