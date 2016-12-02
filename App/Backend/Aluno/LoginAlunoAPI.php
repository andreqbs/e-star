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


$login = $_POST['usuarioLogin'];

$senha = $_POST['senhaLogin'];

//$login = "erick";

//$senha = "123123123";

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


