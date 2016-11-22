<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Eventos as Eventos;
use App\DAO\DAOEventos as DAOEventos;
require_once dirname(__FILE__).'/../Model/Eventos.php';
require_once dirname(__FILE__).'/../DAO/DAOEventos.php';

//INSERT
//$meuEventos = new Eventos("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$meuDAOEventos = new DAOEventos();
$Result =$meuDAOEventos->listBy($type, $searchfield);




