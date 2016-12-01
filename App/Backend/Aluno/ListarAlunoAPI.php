<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
require_once dirname(__FILE__).'/../Model/Aluno.php';
require_once dirname(__FILE__).'/../DAO/DAOAluno.php';



$NomeAluno = $_POST['nomealuno'];;

$MatriculaAluno;

$EmailAluno;

$LoginAluno;

$SenhaAluno;

$SenhaAlunoConfirmacao;

$idCursoFK;


$meuAluno = new Aluno($NomeAluno, $MatriculaAluno, $EmailAluno, $LoginAluno, $SenhaAluno;, $idCursoFK);

$meuDAOAluno = new DAOAluno();
$Result =$meuDAOAluno->listBy($type, $searchfield);




