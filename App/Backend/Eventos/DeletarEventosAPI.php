<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Eventos as Eventos;
use App\DAO\DAOEventos as DAOEventos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$idEventos = "11"; //$_POST['']

$EventosControl = new mainController();
$Result =$EventosControl->apagarEvento($idEventos);

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


