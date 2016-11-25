<?php 

namespace App\Models;

private $idCronograma;
private $nomeCronograma;
private $PorQue;
private $Onde;
private $Quando;
private $Quem;
private $Como;
private $Quanto;

class Cronograma {

 function __construct($nomeCronograma,$PorQue,$Onde,$Quando,$Quem,$Como,$Quando){
 	$this->nomeCronograma = $nomeCronograma
 	$this->PorQue  		  = $PorQue;
 	$this->Onde           = $Onde;
 	$this->Quando         = $Quando;
 	$this->Quem           = $Quem;
 	$this->Como           = $Como;
 	$this->Quando         = $Quando;

 }

function getidCronograma()
 	{
 		return $this->idCronograma;
 	}
function getnomeCronograma()
 	{
 		return $this->nomeCronograma;
 	} 	
function getPorQue()
 	{
 		return $this->PorQue;
 	}
function getOnde()
 	{
 		return $this->Onde;
 	}
function getQuando()
 	{
 		return $this->Quando;
 	}
function getQuem()
 	{
 		return $this->Quem;
 	}
function getComo()
 	{
 		return $this->Como;
 	}
function getQuando()
 	{
 		return $this->Quando;
 	}

function setnomeCronograma()
 	{
 		return $this->nomeCronograma;
 	} 
function setPorQue()
 	{
 		return $this->PorQue;
 	}
function setOnde()
 	{
 		return $this->Onde;
 	}
function setQuando()
 	{
 		return $this->Quando;
 	}
function setQuem()
 	{
 		return $this->Quem;
 	}
function setComo()
 	{
 		return $this->Como;
 	}
function setQuando()
 	{
 		return $this->Quando;
 	}

}
