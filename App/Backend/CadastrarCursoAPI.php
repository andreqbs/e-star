<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Curso as Curso;
use App\DAO\DAOCurso as DAOCurso;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

$NomeCurso = "engenharia yy "; //$_POST['']

$meuCurso = new Curso($NomeCurso);

$CursoControl = new mainController();

$Result =$CursoControl->cadastrarCurso($meuCurso);

if ($Result){	
		echo '<script> alert("Curso Cadastrado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Curso Não Cadastrado Com Sucesso") </script>  ';


