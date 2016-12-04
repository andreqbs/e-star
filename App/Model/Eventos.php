<?php 

namespace App\Model;

class Eventos {
	private $idEventos;

	private $NomeEvento;

	private $DataEvento;

	private $horaEventos;

	private $LocalEvento;

	private $ProfessorFK;

	private $CursoFK;

	// NomeEvento data hora LocalEvento NomeProfessor NomeCurso
	function __construct($NomeEvento, $DataEvento, $horaEventos, $LocalEvento, $ProfessorFK, $CursoFK) {
		$this->NomeEvento = $NomeEvento;
		$this->DataEvento = $DataEvento;
		$this->horaEventos = $horaEventos;
		$this->LocalEvento = $LocalEvento;
		$this->ProfessorFK = $ProfessorFK;
		$this->CursoFK = $CursoFK;
		
	}

		function getidEventos () 
		{
			return $this->idEventos;
		}
		
		function getNomeEvento () 
		{
			return $this->NomeEvento;
		}
		
		function getDataEvento () 
		{
			return $this->DataEvento;
		}
		function gethoraEventos () 
		{
			return $this->horaEventos;
		}
		
		function getLocalEvento () 
		{
			return $this->LocalEvento;
		}

		function getProfessorFK () 
		{
			return $this->ProfessorFK;
		}

		function getCursoFK () 
		{
			return $this->CursoFK;
		}

				
		function setNomeEvento ($NomeEvento) 
		{
			$this->NomeEvento = $NomeEvento;
		}
		
		function setDataEvento ($DataEvento) 
		{
			$this->DataEvento = $DataEvento;
		}
		function sethoraEventos ($horaEventos) 
		{
			return $this->horaEventos;
		}
		function setLocalEvento ($LocalEvento) 
		{
			$this->LocalEvento = $LocalEvento;
		}

		function setProfessorFK ($ProfessorFK) 
		{
			$this->ProfessorFK = $ProfessorFK;
		}

		function setCursoFK ($CursoFK) 
		{
			$this->CursoFK = $CursoFK;
		}

		

}