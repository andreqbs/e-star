<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

$idTCC = $_POST[];


$Controller = new mainController();
$Result = $Controller->apagarTCC($idTCC);

echo($Result);





