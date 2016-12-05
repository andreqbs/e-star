<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Reservas as Reservas;
use App\DAO\DAOReservas as DAOReservas;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

$NomeReservas = "engenharia "; //$_POST['']

$IdReservas = "1";

$meuReservas = new Reservas($NomeReservas);

$ReservasControl = new mainController();
$Result =$ReservasControl->listarEvento($meuReservas,$IdReservas);

if ($Result){	
		echo '<script> alert("Reservas listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Reservas Não listado Com Sucesso") </script>  ';


