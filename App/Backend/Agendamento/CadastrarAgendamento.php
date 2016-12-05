<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\Agendamento as Agendamento;
use App\DAO\DAOAgendamento as DAOAgendamento;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i:s');

$Agendamento = new Agendamento("{$date}","Saber de QBS","1","1");

$Controller = new mainController();
$Result = $Controller->cadastrarAgendamento($Agendamento);


if ($Result){
	echo '<script>alert("Agendamento Criado!")</script>';
}
else
	echo '<script> alert(" Não foi Possivel Realizar o Agendamento!") </script>  ';
