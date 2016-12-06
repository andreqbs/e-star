<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Aluno as Aluno;
use App\DAO\DAOAluno as DAOAluno;
require_once dirname(__FILE__).'/../Model/Aluno.php';
require_once dirname(__FILE__).'/../DAO/DAOAluno.php';













