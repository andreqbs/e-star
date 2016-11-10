<?php 

namespace App\Models;

class LinhaPesquisa {
	private $idLinhaPesquisa;

	private $LinhaPesquisa;

	private $idTCCFK;



	
	function __construct($LinhaPesquisa, $idTCCFK) {
		$this->LinhaPesquisa = $LinhaPesquisa;
		$this->idTCCFK = $idTCCFK;
		
		
	}

		function getidLinhaPesquisa () 
		{
			return $this->idLinhaPesquisa;
		}
		
		function getLinhaPesquisa () 
		{
			return $this->LinhaPesquisa;
		}
		
		function getidTCCFK () 
		{
			return $this->idTCCFK;
		}
		
				
		function setLinhaPesquisa ($LinhaPesquisa) 
		{
			$this->LinhaPesquisa = $LinhaPesquisa;
		}
		
		function setidTCCFK ($idTCCFK) 
		{
			$this->idTCCFK = $idTCCFK;
		}
		
		
			

}