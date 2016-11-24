<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\RelatorioTCC as RelatorioTCC;
use App\DAO\DAORelatorioTCC as DAORelatorioTCC;
require_once dirname(__FILE__).'/../Model/RelatorioTCC.php';
require_once dirname(__FILE__).'/../DAO/DAORelatorioTCC.php';

//INSERT
//$meuRelatorioTCC = new RelatorioTCC("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$meuDAORelatorioTCC = new DAORelatorioTCC();
$Result =$meuDAORelatorioTCC->listBy($type, $searchfield);




