<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\Eventos as Eventos;
use App\DAO\DAOEventos as DAOEventos;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 // $NomeEventos = $_POST['NomeEvento'];

 // $dataEventos = $_POST['data'];

 // $horaEventos = $_POST['hora'];

 // $LocalEventos = $_POST['LocalEvento'];

 // $NomeProfessorEventos = $_POST['NomeProfessor'];

 // $NomeCursoEventos = $_POST['NomeCurso'];
 date_default_timezone_set('America/Sao_Paulo');

 $NomeEventos = 'rock';

 $dataEventos = '2027-12-07 ';

 $horaEventos = '21:15:12';

 $LocalEventos = 'unproberto';

 $NomeProfessorEventos = '2';

 $NomeCursoEventos = '2';
 // $date = date('Y-m-d H:i:s');
 // $date = date('d/m/Y H:i:s');
 $DataEventos = date($dataEventos . $horaEventos); 


$meuEventos = new Eventos($NomeEventos,$DataEventos, $LocalEventos, $NomeProfessorEventos, $NomeCursoEventos);
// echo '<script> alert($meuEventos) </script>  ';
$EventosControl = new mainController();
$Result =$EventosControl->inserirEvento($meuEventos);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';



