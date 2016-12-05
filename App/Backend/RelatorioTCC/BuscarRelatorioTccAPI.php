<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\RelatorioTCC as RelatorioTCC;
use App\DAO\DAORelatorioTCC as DAORelatorioTCC;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

//ele tera que buscar o RelatorioTCC primeiro  para poder listar 


$ListarRelatorioTCC = new RelatorioTCC($type, $searchfield);

$RelatorioTCCControl = new mainController();
$Result =$RelatorioTCCControl->listBy($ListarRelatorioTCC);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



