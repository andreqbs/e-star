<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\RelatorioTCC as RelatorioTCC;
use App\DAO\DAORelatorioTCC as DAORelatorioTCC;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$idRelatorioTCC = "11"; //$_POST['']

$RelatorioTCCControl = new mainController();
$Result =$RelatorioTCCControl->apagarRelatorioTCC($idRelatorioTCC);

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


