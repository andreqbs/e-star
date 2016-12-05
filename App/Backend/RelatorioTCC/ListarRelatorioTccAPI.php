<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\RelatorioTCC as RelatorioTCC;
use App\DAO\DAORelatorioTCC as DAORelatorioTCC;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

$NomeRelatorioTCC = "engenharia "; //$_POST['']

$IdRelatorioTCC = "1";

$meuRelatorioTCC = new RelatorioTCC($NomeRelatorioTCC);

$RelatorioTCCControl = new mainController();
$Result =$RelatorioTCCControl->listarRelatorioTCC($meuRelatorioTCC,$IdRelatorioTCC);

if ($Result){	
		echo '<script> alert("RelatorioTCC listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("RelatorioTCC Não listado Com Sucesso") </script>  ';


