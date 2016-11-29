<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $NomeProfessor = "andre "; //$_POST['']

 $MatriculaProfessor = "123356";

 $EmailProfessor = "teste@test.com";

 $LoginProfessor = "andree";

 $SenhaProfessor = "1234";

 $SenhaProfessorConfirmacao = "egy321gg";


$meuProfessor = new Professor($NomeProfessor,$MatriculaProfessor,$EmailProfessor, $LoginProfessor, $SenhaProfessor);
//`sp_inserirProfessor`(nome varchar(100), matricula char(6), email varchar(50), login varchar(50), senha varchar(20))


$ProfessorControl = new mainController();
$Result =$ProfessorControl->cadastrarProfessor($meuProfessor);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';


