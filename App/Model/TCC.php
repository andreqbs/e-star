<?php 

namespace App\Models;

class TCC {
	private $Titulo;

	private $Descricao;

	private $Status;

	private $Objetivos;

	private $Justificativas;

	private $TCCTipo;

	private $LinhaPesquisa;

	function __construct($titulo, $descricao, $status, $objetivos, $justificativas, $tCCTipo, $linhaPesquisa) {
		$this->Titulo = $titulo;	
		$this->Descricao = $descricao;
		$this->Status = $status;
		$this->Objetivos = $objetivos;
		$this->Justificativas = $justificativas;
		$this->TCCTipo = $tCCTipo;
		$this->LinhaPesquisa = $linhaPesquisa;
	}

		function getTitulo () 
		{
			return $this->Titulo;
		}
		
		function getDescricao () 
		{
			return $this->Descricao;
		}
		
		function getStatus () 
		{
			return $this->Status;
		}
		
		function getObjetivos () 
		{
			return $this->Objetivos;
		}

		function getJustificativas () 
		{
			return $this->Justificativas;
		}

		function getTCCTipo () 
		{
			return $this->TCCTipo;
		}

		function getLinhaPesquisa () 
		{
			return $this->LinhaPesquisa;
		}


		function setTitulo($Titulo) 
		{
   			$this->Titulo = $Titulo;
  		}

		function setDescricao ($Descricao) 
		{
			$this->Descricao = $Descricao;
		}
		
		function setStatus ($Status) 
		{
			$this->Status = $Status;
		}
		
		function setObjetivos ($Objetivos) 
		{
			$this->Objetivos = $Objetivos;
		}

		function setJustificativas ($Justificativas) 
		{
			$this->Justificativas = $Justificativas;
		}

		function setTCCTipo ($TCCTipo) 
		{
			$this->TCCTipo = $TCCTipo;
		}

		function setLinhaPesquisa ($LinhaPesquisa) 
		{
			$this->LinhaPesquisa = $LinhaPesquisa;
		}

}