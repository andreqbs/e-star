<?php 

namespace App\Model;

class TCC {
	private $Titulo;

	private $Resumo;

	private $TCCStatus;

	private $Objetivos;

	private $Justificativas;

	private $TCCTipo;

	private $idLinhaPesquisaFK;

	private $idAluno1FK;

	private $idAluno2FK;

	private $idProfessorFK;

	function __construct($titulo, $Resumo, $TCCStatus, $objetivos, $justificativas, $tCCTipo, $idLinhaPesquisaFK, $idAluno1FK, $idAluno2FK, $idProfessorFK) 
	{
		$this->Titulo = $titulo;	
		$this->Resumo = $Resumo;
		$this->TCCStatus = $TCCStatus;
		$this->Objetivos = $objetivos;
		$this->Justificativas = $justificativas;
		$this->TCCTipo = $tCCTipo;
		$this->idLinhaPesquisaFK = $idLinhaPesquisaFK;
		$this->idAluno1FK = $idAluno1FK;
		$this->idAluno2FK = $idAluno2FK;
		$this->idProfessorFK = $idProfessorFK;
	}

		function getTitulo () 
		{
			return $this->Titulo;
		}
		
		function getResumo () 
		{
			return $this->Resumo;
		}
		
		function getTCCStatus () 
		{
			return $this->TCCStatus;
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

		function getidLinhaPesquisaFK () 
		{
			return $this->idLinhaPesquisaFK;
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




		function setTitulo($Titulo) 
		{
   			$this->Titulo = $Titulo;
  		}

		function setResumo ($Resumo) 
		{
			$this->Resumo = $Resumo;
		}
		
		function setTCCStatus ($TCCStatus) 
		{
			$this->TCCStatus = $TCCStatus;
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

		function setidLinhaPesquisaFK ($idLinhaPesquisaFK) 
		{
			$this->idLinhaPesquisaFK = $idLinhaPesquisaFK;
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