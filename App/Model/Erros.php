<?php 

namespace App\Models;

class Erros {
	private $idErros;

	private $NomeErro;

	private $CategoriaErro;

	

	
	function __construct($NomeErro, $CategoriaErro) {
		$this->NomeErro = $NomeErro;
		$this->CategoriaErro = $CategoriaErro;
		
	}

		function getidErros () 
		{
			return $this->idErros;
		}
		
		function getNomeErro () 
		{
			return $this->NomeErro;
		}
		
		function getCategoriaErro () 
		{
			return $this->CategoriaErro;
		}
		
				
		function setNomeErro ($NomeErro) 
		{
			$this->NomeErro = $NomeErro;
		}
		
		function setCategoriaErro ($CategoriaErro) 
		{
			$this->CategoriaErro = $CategoriaErro;
		}
		
		

}