<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $NomeProfessor = "lucas "; //$_POST['']

 $MatriculaProfessor = "1246";

 $EmailProfessor = "teste@test.com";

 $LoginProfessor = "lucas";

 $SenhaProfessor = "1234";

 $SenhaProfessorConfirmacao = "egy321gg";

 $idProfessor = '11';

$meuProfessor = new Professor($NomeProfessor,$MatriculaProfessor,$EmailProfessor, $LoginProfessor, $SenhaProfessor);

$ProfessorControl = new mainController();
$Result =$ProfessorControl->alterarProfessor($meuProfessor,$idProfessor);

if ($Result){	
		echo '<script> alert("atualizado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não atualizado Com Sucesso") </script>  ';


