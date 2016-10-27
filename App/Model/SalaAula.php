<?php 

namespace App\Models;

class SalaAula {
	private $idSalaAula;

	private $NomeSala;

	private $Setor;

	private $Capacidade;

	private $Unidade;



	
	function __construct($idSalaAula, $NomeSala, $Setor, $Capacidade, $Unidade) {
		$this->idSalaAula = $idSalaAula;	
		$this->NomeSala = $NomeSala;
		$this->Setor = $Setor;
		$this->Capacidade = $Capacidade;
		$this->Unidade = $Unidade;
		
		
	}

		function getidSalaAula () 
		{
			return $this->idSalaAula;
		}
		
		function getNomeSala () 
		{
			return $this->NomeSala;
		}
		
		function getSetor () 
		{
			return $this->Setor;
		}
		
		function getCapacidade () 
		{
			return $this->Capacidade;
		}

		function getUnidade () 
		{
			return $this->Unidade;
		}

		

				
		function setNomeSala ($NomeSala) 
		{
			$this->NomeSala = $NomeSala;
		}
		
		function setSetor ($Setor) 
		{
			$this->Setor = $Setor;
		}
		
		function setCapacidade ($Capacidade) 
		{
			$this->Capacidade = $Capacidade;
		}

		function setUnidade ($Unidade) 
		{
			$this->Unidade = $Unidade;
		}



		

}