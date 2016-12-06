<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';




$login = $_POST['usuarioLogin'];

$senha = $_POST['senhaLogin'];



$Control = new mainController();
$Result = $Control->loginAluno($login, $senha);



print_r($Result);
if ($Result){
	echo '<script>alert("Login Com sucesso")</script>';
	$_SESSION['idAluno'] = $Result['idAluno'];
	$_SESSION['nome'] = $Result['nome'];
	$_SESSION['matricula'] = $Result['matricula'];
	$_SESSION['login'] = $Result['login'];

}
else {
	echo '<script> alert("erro") </script>  ';
}


