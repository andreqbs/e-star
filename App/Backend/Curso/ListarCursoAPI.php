<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Curso as Curso;
use App\DAO\DAOCurso as DAOCurso;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$NomeCurso = "engenharia "; //$_POST['']

$IdCurso = "1";

$meuCurso = new Curso($NomeCurso);

$CursoControl = new mainController();
$Result =$CursoControl->listarCurso($meuCurso,$IdCurso);

if ($Result){	
		echo '<script> alert("Curso listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Curso Não listado Com Sucesso") </script>  ';


