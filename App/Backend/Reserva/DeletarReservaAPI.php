<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Reservas as Reservas;
use App\DAO\DAOReservas as DAOReservas;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$idReservas = "11"; //$_POST['']

$ReservasControl = new mainController();
$Result =$ReservasControl->apagarEvento($idReservas);

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


