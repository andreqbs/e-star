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
$meuProfessor = new Professor("andre", "123456", "teste@teste.com.br", "foda", "Pq eh massa!!!");
//`sp_inserirProfessor`(nome varchar(100), matricula char(6), email varchar(50), login varchar(50), senha varchar(20))


$ProfessorControl = new mainController();
$Result =$ProfessorControl->cadastrarProfessor($meuProfessor);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';



