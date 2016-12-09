<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Arquivos as Arquivos;
use App\DAO\DAOArquivos as DAOArquivos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

$IdTCC = '3';//$_POST[''];

$LinkArquivos = '';//$_POST[''];

$VersaoArquivos = '';//$_POST[''];

$meuArquivos = new Arquivos($LinkArquivos, $IdTCC, $VersaoArquivos);

$ArquivosControl = new mainController();
$Result =$ArquivosControl->listarArquivo($meuArquivos,$IdArquivos);

if ($Result){	
		echo '<script> alert("Arquivos listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Arquivos Não listado Com Sucesso") </script>  ';


