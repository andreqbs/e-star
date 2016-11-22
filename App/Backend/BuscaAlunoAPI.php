<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
require_once dirname(__FILE__).'/../Model/Aluno.php';
require_once dirname(__FILE__).'/../DAO/DAOAluno.php';

//INSERT
//$meuAluno = new Aluno("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$meuDAOAluno = new DAOAluno();
$Result =$meuDAOAluno->listBy($type, $searchfield);




