<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\Eventos as Eventos;
use App\DAO\DAOEventos as DAOEventos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

//ele tera que buscar o Eventos primeiro  para poder listar 


$ListarEventos = new Eventos($type, $searchfield);

$EventosControl = new mainController();
$Result =$EventosControl->listBy($ListarEventos);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



