<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

// session_start();

use App\Model\Reservas as Reservas;
use App\DAO\DAOReservas as DAOReservas;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $dataReservas = $_POST['data'];

 $horaReservas = $_POST['hora'];

 $NomeProfessorReservas = $_POST['NomeProfessor'];

 $NomeSalaReservas = $_POST['NomeSala'];

echo '<script> alert($meuReservas) </script>  ';
$minhaReservas = new Reservas($NomeReservas,$dataReservas, $horaReservas, $NomeProfessorReservas, $NomeSalaReservas);

$ReservasControl = new mainController();
$Result =$ReservasControl->inserirEvento($minhaReservas);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';
	// $_SESSION['NomeReservas'] = $Result['NomeReservas'];
	// $_SESSION['dataReservas'] = $Result['dataReservas'];
	// $_SESSION['horaReservas'] = $Result['horaReservas'];
	// $_SESSION['LocalReservas'] = $Result['LocalReservas'];
	// $_SESSION['NomeProfessorReservas'] = $Result['NomeProfessorReservas'];
	// $_SESSION['NomeSalaReservas'] = $Result['NomeSalaReservas'];

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';



