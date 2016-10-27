<?php 

namespace App\Models;

class Arquivo {
	private $idArquivo;

	private $Link;

	private $TCCFK;

	

	
	function __construct($idArquivo, $Link, $TCCFK) {
		$this->idArquivo = $idArquivo;	
		$this->Link = $Link;
		$this->TCCFK = $TCCFK;
		
	}

		function getidArquivo () 
		{
			return $this->idArquivo;
		}
		
		function getLink () 
		{
			return $this->Link;
		}
		
		function getTCCFK () 
		{
			return $this->TCCFK;
		}
		
				
		function setLink ($Link) 
		{
			$this->Link = $Link;
		}
		
		function setTCCFK ($TCCFK) 
		{
			$this->TCCFK = $TCCFK;
		}
		
		

}