<?php 

namespace App\Models;

class Reservas {
	private $idReserva;

	private $DataHora;

	private $ProfessorFK;

	private $SalaFK;

	

	
	function __construct($DataHora, $ProfessorFK, $SalaFK) {
		$this->DataHora = $DataHora;
		$this->ProfessorFK = $ProfessorFK;
		$this->SalaFK = $SalaFK;
		
		
	}

		function getidReserva () 
		{
			return $this->idReserva;
		}
		
		function getDataHora () 
		{
			return $this->DataHora;
		}
		
		function getProfessorFK () 
		{
			return $this->ProfessorFK;
		}
		
		function getSalaFK () 
		{
			return $this->SalaFK;
		}

		

				
		function setDataHora ($DataHora) 
		{
			$this->DataHora = $DataHora;
		}
		
		function setProfessorFK ($ProfessorFK) 
		{
			$this->ProfessorFK = $ProfessorFK;
		}
		
		function setSalaFK ($SalaFK) 
		{
			$this->SalaFK = $SalaFK;
		}

		
		

}