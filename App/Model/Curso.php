<?php 

namespace App\Models;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Curso {
	private $idCurso;

	private $Curso;

	
	function __construct($Curso) {
		$this->idCurso = $idCurso;	
		$this->Curso = $Curso;
				
	}

		function getidCurso () 
		{
			return $this->idCurso;
		}
		
		function getCurso () 
		{
			return $this->Curso;
		}
		
				
		function setCurso ($Curso) 
		{
			$this->Curso = $Curso;
		}
		
					

}