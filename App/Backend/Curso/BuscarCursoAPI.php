<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();


use App\Model\Curso as Curso;
use App\DAO\DAOCurso as DAOCurso;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

//INSERT


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

//ele tera que buscar o Curso primeiro  para poder listar 


$ListarCurso = new Curso($type, $searchfield);

$CursoControl = new mainController();
$Result =$CursoControl->listBy($ListarCurso);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



