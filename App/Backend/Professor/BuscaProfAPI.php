<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();


use App\Models\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;

require_once dirname(__FILE__).'/../../Model/Professor.php';
require_once dirname(__FILE__).'/../../DAO/DAOProfessor.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

//INSERT


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];


 $buscarByProfessor = new Professor($type, $searchfield);
// não tem PROCEDURE



$ProfessorControl = new mainController();
$Result =$ProfessorControl->buscarProfessor($buscarByProfessor);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



