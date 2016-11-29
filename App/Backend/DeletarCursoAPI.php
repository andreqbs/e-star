<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Curso as Curso;
use App\DAO\DAOCurso as DAOCurso;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

$IdCurso = "1 "; //$_POST['']

$meuCurso = new Curso($IdCurso);

$CursoControl = new mainController();
$Result =$CursoControl->apagarCurso($meuCurso);

if ($Result){	
		echo '<script> alert("Curso Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Curso Não Deletado Com Sucesso") </script>  ';


