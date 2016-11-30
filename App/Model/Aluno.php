<?php 

namespace App\Model;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Aluno {
	private $idAluno;

	private $NomeAluno;

	private $MatriculaAluno;

	private $EmailAluno;

	private $LoginAluno;

	private $SenhaAluno;

	private $idCursoFK;

	
	function __construct($NomeAluno, $MatriculaAluno, $EmailAluno, $LoginAluno, $SenhaAluno, $idCursoFK) {
		$this->NomeAluno = $NomeAluno;
		$this->MatriculaAluno = $MatriculaAluno;
		$this->EmailAluno = $EmailAluno;
		$this->LoginAluno = $LoginAluno;
		$this->SenhaAluno = $SenhaAluno;
		$this->idCursoFK = $idCursoFK;
		
	}

		function getidAluno () 
		{
			return $this->idAluno;
		}
		
		function getNomeAluno () 
		{
			return $this->NomeAluno;
		}
		
		function getMatriculaAluno () 
		{
			return $this->MatriculaAluno;
		}
		
		function getEmailAluno () 
		{
			return $this->EmailAluno;
		}

		function getLoginAluno () 
		{
			return $this->LoginAluno;
		}

		function getSenhaAluno () 
		{
			return $this->SenhaAluno;
		}

		function getidCursoFK () 
		{
			return $this->idCursoFK;
		}

				
		function setNomeAluno ($NomeAluno) 
		{
			$this->NomeAluno = $NomeAluno;
		}
		
		function setMatriculaAluno ($MatriculaAluno) 
		{
			$this->MatriculaAluno = $MatriculaAluno;
		}
		
		function setEmailAluno ($EmailAluno) 
		{
			$this->EmailAluno = $EmailAluno;
		}

		function setLoginAluno ($LoginAluno) 
		{
			$this->LoginAluno = $LoginAluno;
		}

		function setSenhaAluno ($SenhaAluno) 
		{
			$this->SenhaAluno = $SenhaAluno;
		}

		function setidCursoFK ($idCursoFK) 
		{
			$this->idCursoFK = $idCursoFK;
		}

			

}