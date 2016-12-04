<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

// session_start();

use App\Model\Eventos as Eventos;
use App\DAO\DAOEventos as DAOEventos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $NomeEventos = $_POST['NomeEvento'];

 $dataEventos = $_POST['data'];

 $horaEventos = $_POST['hora'];

 $LocalEventos = $_POST['LocalEvento'];

 $NomeProfessorEventos = $_POST['NomeProfessor'];

 $NomeCursoEventos = $_POST['NomeCurso'];


echo '<script> alert($meuEventos) </script>  ';
$meuEventos = new Eventos($NomeEventos,$dataEventos, $horaEventos, $LocalEventos, $NomeProfessorEventos, $NomeCursoEventos);

$EventosControl = new mainController();
$Result =$EventosControl->inserirEvento($meuEventos);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';
	// $_SESSION['NomeEventos'] = $Result['NomeEventos'];
	// $_SESSION['dataEventos'] = $Result['dataEventos'];
	// $_SESSION['horaEventos'] = $Result['horaEventos'];
	// $_SESSION['LocalEventos'] = $Result['LocalEventos'];
	// $_SESSION['NomeProfessorEventos'] = $Result['NomeProfessorEventos'];
	// $_SESSION['NomeCursoEventos'] = $Result['NomeCursoEventos'];

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';



