<?php 

namespace App\Models;

class Arquivo {
	private $idArquivo;

	private $Link;

	private $idTCCFK;

	

	
	function __construct($Link, $idTCCFK) {
		$this->Link = $Link;
		$this->idTCCFK = $idTCCFK;
		
	}

		function getidArquivo () 
		{
			return $this->idArquivo;
		}
		
		function getLink () 
		{
			return $this->Link;
		}
		
		function getidTCCFK () 
		{
			return $this->idTCCFK;
		}
		
				
		function setLink ($Link) 
		{
			$this->Link = $Link;
		}
		
		function setidTCCFK ($idTCCFK) 
		{
			$this->idTCCFK = $idTCCFK;
		}
		
		

}