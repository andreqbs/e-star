<?php 

namespace App\Models;

class ErroTCC {
	private $ErrosFK;

	private $TCCFK;

	
	function __construct($ErrosFK, $TCCFK, $ErrosFK) {
		$this->ErrosFK = $ErrosFK;	
		$this->TCCFK = $TCCFK;
		
		
	}

		function getErrosFK () 
		{
			return $this->ErrosFK;
		}
		
		function getTCCFK () 
		{
			return $this->TCCFK;
		}
		
		
		function setErrosFK ($ErrosFK) 
		{
			$this->ErrosFK = $ErrosFK;
		}
				
		function setTCCFK ($TCCFK) 
		{
			$this->TCCFK = $TCCFK;
		}
		
		
		
		

}