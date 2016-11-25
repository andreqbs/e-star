<?php

namespace App\Models;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Professor {

    private $idProfessor;

	private $NomeProfessor;

	private $MatriculaProfessor;

	private $EmailProfessor;

	private $LoginProfessor;

	private $SenhaProfessor;


	function __construct($NomeProfessor, $MatriculaProfessor, $EmailProfessor, $LoginProfessor, $SenhaProfessor) {
		// $this->idProfessor = $idProfessor;
		$this->NomeProfessor = $NomeProfessor;
		$this->MatriculaProfessor = $MatriculaProfessor;
		$this->EmailProfessor = $EmailProfessor;
		$this->LoginProfessor = $LoginProfessor;
		$this->SenhaProfessor = $SenhaProfessor;

	}

		function getidProfessor ()
		{
			return $this->idProfessor;
		}

		function getNomeProfessor ()
		{
			return $this->NomeProfessor;
		}

		function getMatriculaProfessor ()
		{
			return $this->MatriculaProfessor;
		}

		function getEmailProfessor ()
		{
			return $this->EmailProfessor;
		}

		function getLoginProfessor ()
		{
			return $this->LoginProfessor;
		}

		function getSenhaProfessor ()
		{
			return $this->SenhaProfessor;
		}


		function setidProfessor($idProfessor)
		{
   			$this->idProfessor = $idProfessor;
  		}

		function setNomeProfessor ($NomeProfessor)
		{
			$this->NomeProfessor = $NomeProfessor;
		}

		function setMatriculaProfessor ($MatriculaProfessor)
		{
			$this->MatriculaProfessor = $MatriculaProfessor;
		}

		function setEmailProfessor ($EmailProfessor)
		{
			$this->EmailProfessor = $EmailProfessor;
		}

		function setLoginProfessor ($LoginProfessor)
		{
			$this->LoginProfessor = $LoginProfessor;
		}

		function setSenhaProfessor ($SenhaProfessor)
		{
			$this->SenhaProfessor = $SenhaProfessor;
		}

}
