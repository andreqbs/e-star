<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

$NomeProfessor = "engenharia "; //$_POST['']

$IdProfessor = "1";

$meuProfessor = new Professor($NomeProfessor);

$ProfessorControl = new mainController();
$Result =$ProfessorControl->listarProfessor($meuProfessor,$IdProfessor);

if ($Result){	
		echo '<script> alert("Professor listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Professor Não listado Com Sucesso") </script>  ';


