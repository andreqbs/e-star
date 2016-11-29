<?php 

namespace App\Model;

class Componentes {
	private $idComponentes;

	private $idAluno1FK;

	private $idAluno2FK;

	private $idTCCFK;

	private $idProfessorFK;

	

	function __construct($idAluno1FK, $idAluno2FK, $idProfessorFK) 
	{
		$this->idAluno1FK = $idAluno1FK;
		$this->idAluno2FK = $idAluno2FK;
		$this->idProfessorFK = $idProfessorFK;
	}

		function getidComponentes () 
		{
			return $this->idComponentes;
		}
		
		function getidAluno1FK () 
		{
			return $this->idAluno1FK;
		}
		
		function getidAluno2FK () 
		{
			return $this->idAluno2FK;
		}
		
		
		function getidProfessorFK () 
		{
			return $this->idProfessorFK;
		}

	
		
		function setidAluno1FK ($idAluno1FK) 
		{
			$this->idAluno1FK = $idAluno1FK;
		}
		
		function setidAluno2FK ($idAluno2FK) 
		{
			$this->idAluno2FK = $idAluno2FK;
		}
		
		function setidProfessorFK ($idProfessorFK) 
		{
			$this->idProfessorFK = $idProfessorFK;
		}

	

}