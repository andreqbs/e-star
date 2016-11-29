<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

//INSERT
//$meuAluno = new Aluno("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$login = "erick";

$senha = "1234";

$Control = new mainController();
$Result = $Control->loginAluno($login, $senha);

if ($Result){
	echo '<script>alert("Login Com sucesso")</script>';
}
else {
	echo '<script> alert("erro") </script>  ';
}


