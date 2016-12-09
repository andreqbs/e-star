<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\Arquivos as Arquivos;
use App\DAO\DAOArquivos as DAOArquivos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

//ele tera que buscar o Arquivos primeiro  para poder listar 


$ListarArquivos = new Arquivos($type, $searchfield);

$ArquivosControl = new mainController();
$Result =$ArquivosControl->listBy($ListarArquivos);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



