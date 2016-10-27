<?php 

namespace App\Models;

class Componentes {
	private $idComponentes;

	private $idAluno1FK;

	private $idAluno2FK;

	private $idTCCFK;

	private $idProfessorFK;

	

	function __construct($idAluno1FK, $idAluno2FK, $idTCCFK, $idProfessorFK) 
	{
		$this->idAluno1FK = $idAluno1FK;
		$this->idAluno2FK = $idAluno2FK;
		$this->idTCCFK = $idTCCFK;
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
		
		function getidTCCFK () 
		{
			return $this->idTCCFK;
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
		
		function setidTCCFK ($idTCCFK) 
		{
			$this->idTCCFK = $idTCCFK;
		}

		function setidProfessorFK ($idProfessorFK) 
		{
			$this->idProfessorFK = $idProfessorFK;
		}

	

}