<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\Arquivos as Arquivos;
use App\DAO\DAOArquivos as DAOArquivos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $IdTCC = '3';//$_POST[''];

 $LinkArquivos = '';//$_POST[''];

 $VersaoArquivos = '';//$_POST[''];

$meuArquivos = new Arquivos($LinkArquivos, $IdTCC, $VersaoArquivos);
$ArquivosControl = new mainController();
$Result =$ArquivosControl->inserirArquivo($meuArquivos,$IdTCC);

if ($Result){	
		echo '<script> alert("Atualizado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Atualizado Com Sucesso") </script>  ';



