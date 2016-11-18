<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../DAO/DAOTCC.php';

//INSERT
//$meuTCC = new TCC("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$meuDAOTCC = new DAOTCC();
$Result =$meuDAOTCC->listBy($type, $searchfield);




