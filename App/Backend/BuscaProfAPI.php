<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
require_once dirname(__FILE__).'/../Model/Professor.php';
require_once dirname(__FILE__).'/../DAO/DAOProfessor.php';

//INSERT
//$meuProfessor = new Professor("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$meuDAOProfessor = new DAOProfessor();
$Result =$meuDAOProfessor->listBy($type, $searchfield);




