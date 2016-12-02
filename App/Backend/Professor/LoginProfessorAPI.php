<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';


$login = $_POST['usuarioLogin'];

$senha = $_POST['senhaLogin'];

// $login = "andree";

// $senha = "123456789";

$ProfessorControl = new mainController();
$Result = $ProfessorControl->loginProfessor($login, $senha);



print_r($Result);
if ($Result){
	echo '<script>alert("Login Com sucesso")</script>';
	$_SESSION['idProfessor'] = $Result['idProfessor'];
	$_SESSION['nome'] = $Result['nome'];
	$_SESSION['matricula'] = $Result['matricula'];
	$_SESSION['login'] = $Result['login'];

}
else {
	echo '<script> alert("erro") </script>  ';
}


