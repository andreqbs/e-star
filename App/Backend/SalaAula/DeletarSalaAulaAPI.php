<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\SalaAula as SalaAula;
use App\DAO\DAOSalaAula as DAOSalaAula;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$Controller = new mainController();
$Result = $Controller->apagarSalaAula(1);


if ($Result){
	echo '<script>alert("Sala Deletada!")</script>';
}
else
	echo '<script> alert(" Não foi Possivel deletar a sala!") </script>  ';
