<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\SalaAula as SalaAula;
use App\DAO\DAOSalaAula as DAOSalaAula;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';
$idSalaAula = "seila";
$SalaAula = "1";
$Controller = new mainController();
$Result = $Controller->listarSalaAula($SalaAula,$idSalaAula);


if ($Result){
	echo '<script>alert("Sala listada!")</script>';
}
else
	echo '<script> alert(" Não foi Possivel listar as sala!") </script>  ';
