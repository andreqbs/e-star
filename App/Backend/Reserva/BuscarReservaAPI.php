<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Reservas as Reservas;
use App\DAO\DAOReservas as DAOReservas;
require_once dirname(__FILE__).'/../../Lib/Core/Loader.php';

//INSERT
//$meuReservas = new Reservas("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$meuDAOReservas = new DAOReservas();
$Result =$meuDAOReservas->listBy($type, $searchfield);




