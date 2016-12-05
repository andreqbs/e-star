<?php 

namespace App\Model;

class Eventos {
	private $idEventos;

	private $NomeEvento;

	private $DataEvento;

	private $LocalEvento;

	private $ProfessorFK;

	private $CursoFK;

	// NomeEvento data hora LocalEvento NomeProfessor NomeCurso
	function __construct($NomeEvento, $DataEvento, $LocalEvento, $ProfessorFK, $CursoFK) {
		$this->NomeEvento = $NomeEvento;
		$this->DataEvento = $DataEvento;
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