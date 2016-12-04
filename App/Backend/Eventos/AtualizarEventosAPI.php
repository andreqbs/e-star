<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\Eventos as Eventos;
use App\DAO\DAOEventos as DAOEventos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $IdEventos = $_POST[''];

 $NomeEventos = $_POST['NomeEvento'];

 $dataEventos = $_POST['data'];

 $horaEventos = $_POST['hora'];

 $LocalEventos = $_POST['LocalEvento'];

 $NomeProfessorEventos = $_POST['NomeProfessor'];

 $NomeCursoEventos = $_POST['NomeCurso'];


$meuEventos = new Eventos($NomeEventos,$dataEventos, $horaEventos, $LocalEventos, $NomeProfessorEventos, $NomeCursoEventos);

$EventosControl = new mainController();
$Result =$EventosControl->alterarEvento($meuEventos,$IdEventos);

if ($Result){	
		echo '<script> alert("Atualizado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Atualizado Com Sucesso") </script>  ';



