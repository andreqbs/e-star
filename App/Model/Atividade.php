<?php 

namespace App\Models;

class Atividade {
	private $idAtividade;

	private $NomeAtividade;

	private $MesAtividade;

	private $DescricaoAtividade;

	private $idTCCFK;

	
	
	function __construct($NomeAtividade, $MesAtividade, $DescricaoAtividade, $idTCCFK) {
		$this->NomeAtividade = $NomeAtividade;
		$this->MesAtividade = $MesAtividade;
		$this->DescricaoAtividade = $DescricaoAtividade;
		$this->idTCCFK = $idTCCFK;
		
	}

		function getidAtividade () 
		{
			return $this->idAtividade;
		}
		
		function getNomeAtividade () 
		{
			return $this->NomeAtividade;
		}
		
		function getMesAtividade () 
		{
			return $this->MesAtividade;
		}
		
		function getDescricaoAtividade () 
		{
			return $this->DescricaoAtividade;
		}

		function getidTCCFK () 
		{
			return $this->idTCCFK;
		}

		
				
		function setNomeAtividade ($NomeAtividade) 
		{
			$this->NomeAtividade = $NomeAtividade;
		}
		
		function setMesAtividade ($MesAtividade) 
		{
			$this->MesAtividade = $MesAtividade;
		}
		
		function setDescricaoAtividade ($DescricaoAtividade) 
		{
			$this->DescricaoAtividade = $DescricaoAtividade;
		}

		function setidTCCFK ($idTCCFK) 
		{
			$this->idTCCFK = $idTCCFK;
		}

		
			

}