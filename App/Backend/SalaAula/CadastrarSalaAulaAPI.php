<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\SalaAula as SalaAula;
use App\DAO\DAOSalaAula as DAOSalaAula;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';


$SalaAula = new SalaAula('1',"CBEX2","30","1");

$Controller = new mainController();
$Result = $Controller->inserirSalaAula($SalaAula);


if ($Result){
	echo '<script>alert("Sala Criada!")</script>';
}
else
	echo '<script> alert(" Não foi Possivel criar a sala!") </script>  ';
