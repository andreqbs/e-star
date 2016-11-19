<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Defesa as Defesa;
use App\DAO\DAODefesa as DAODefesa;
require_once dirname(__FILE__).'/../Model/Defesa.php';
require_once dirname(__FILE__).'/../DAO/DAODefesa.php';

//INSERT
//$meuDefesa = new Defesa("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$meuDAODefesa = new DAODefesa();
$Result =$meuDAODefesa->listBy($type, $searchfield);




