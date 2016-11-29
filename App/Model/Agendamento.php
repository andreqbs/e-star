<?php

namespace App\Models;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Agendamento {
	private $idAgenda;

	private $DataHora;

	private $Motivo;

	private $idAlunoFK;

	private $idProfessorFK;

	private $idCursoFK;


	function __construct($DataHora, $Motivo, $idAlunoFK, $idProfessorFK, $idCursoFK) {
		$this->DataHora = $DataHora;
		$this->Motivo = $Motivo;
		$this->idAlunoFK = $idAlunoFK;
		$this->idProfessorFK = $idProfessorFK;
		$this->idCursoFK = $idCursoFK;

	}

		function getidAgenda ()
		{
			return $this->idAgenda;
		}

		function getDataHora ()
		{
			return $this->DataHora;
		}

		function getMotivo ()
		{
			return $this->Motivo;
		}

		function getidAlunoFK ()
		{
			return $this->idAlunoFK;
		}

		function getidProfessorFK ()
		{
			return $this->idProfessorFK;
		}



		function setDataHora ($DataHora)
		{
			$this->DataHora = $DataHora;
		}

		function setMotivo ($Motivo)
		{
			$this->Motivo = $Motivo;
		}

		function setidAlunoFK ($idAlunoFK)
		{
			$this->idAlunoFK = $idAlunoFK;
		}

		function setidProfessorFK ($idProfessorFK)
		{
			$this->idProfessorFK = $idProfessorFK;
		}





}
