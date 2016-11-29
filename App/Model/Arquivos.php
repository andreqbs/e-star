<?php 

namespace App\Models;

ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();

class Arquivo {
	private $idArquivo;

	private $Link;

	private $idTCCFK;

	private $Versao;

	//seguindo o banco criei uma variavel versão

	
	function __construct($Link, $idTCCFK,$Versao) {
		$this->Link = $Link;
		$this->idTCCFK = $idTCCFK;
		$this->Versao = $Versao;
		
	}

		function getidArquivo () 
		{
			return $this->idArquivo;
		}

		function getVersao () 
		{
			return $this->Versao;
		}

		function getLink () 
		{
			return $this->Link;
		}
		
		function getidTCCFK () 
		{
			return $this->idTCCFK;
		}
		
		function setVersao () 
		{
			return $this->Versao;
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