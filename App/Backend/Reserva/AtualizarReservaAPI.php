<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\Reservass as Reservass;
use App\DAO\DAOReservass as DAOReservass;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $IdReservas = $_POST[''];

 $dataReservas = $_POST['data'];

 $horaReservas = $_POST['hora'];

 $NomeProfessorReservas = $_POST['NomeProfessor'];

 $NomeSalaReservas = $_POST['NomeSala'];

echo '<script> alert($meuReservas) </script>  ';
$minhaReservas = new Reservas($NomeReservas,$dataReservas, $horaReservas, $NomeProfessorReservas, $NomeSalaReservas);

$ReservassControl = new mainController();
$Result =$ReservassControl->alterarReservas($minhaReservas,$IdReservas);

if ($Result){	
		echo '<script> alert("Atualizado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Atualizado Com Sucesso") </script>  ';



