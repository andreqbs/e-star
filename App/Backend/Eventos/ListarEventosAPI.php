<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Eventos as Eventos;
use App\DAO\DAOEventos as DAOEventos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

$NomeEventos = "engenharia "; //$_POST['']

$IdEventos = "1";

$meuEventos = new Eventos($NomeEventos);

$EventosControl = new mainController();
$Result =$EventosControl->listarEvento($meuEventos,$IdEventos);

if ($Result){	
		echo '<script> alert("Eventos listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Eventos Não listado Com Sucesso") </script>  ';


