<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


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

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';



