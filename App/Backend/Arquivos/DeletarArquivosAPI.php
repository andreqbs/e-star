<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Arquivos as Arquivos;
use App\DAO\DAOArquivos as DAOArquivos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$idArquivos = "11"; //$_POST['']

$ArquivosControl = new mainController();

$Result =$ArquivosControl->apagarEvento($idArquivos);

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


