<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\SalaAula as SalaAula;
use App\DAO\DAOSalaAula as DAOSalaAula;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$DAOSalaAula = new DAOSalaAula();
$Result = $DAOSalaAula->listBy("idSala",2);


if ($Result){
	echo '<script>alert("Sala existe!")</script>';
}
else
	echo '<script> alert(" Sala não existe!") </script>  ';
