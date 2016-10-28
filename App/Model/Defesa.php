<?php

namespace App\Models;

class Defesa {

  private $idDefesa;

	private $PosturaPessoal;

	private $FluenciaComunicativa;

	private $Clareza;

	private $Dominio;

	private $NotaTotal;

	private $PosturaComentario;

  private $FluenciaComentario;

  private $ClarezaComentario;

  private $DominioComentario;

  Private $DataBanca;

  private $idTCCFK;

  Private $idReservasFK;

	function __construct($idDefesa, $PosturaPessoal, $FluenciaComunicativa, $Clareza, $Dominio, $NotaTotal, $PosturaComentario, $FluenciaComentario, $ClarezaComentario, $DominioComentario, $DataBanca, $idTCCFK) {
		$this->idDefesa = $idDefesa;
		$this->PosturaPessoal = $PosturaPessoal;
		$this->FluenciaComunicativa = $FluenciaComunicativa;
		$this->Clareza = $Clareza;
		$this->Dominio = $Dominio;
		$this->NotaTotal = $NotaTotal;
		$this->PosturaComentario = $PosturaComentario;
    $this->FluenciaComentario = $FluenciaComentario;
    $this->ClarezaComentario = $ClarezaComentario;
    $this->DominioComentario = $DominioComentario;
    $this->DataBanca = $DataBanca;
    $this->idTCCFK = $idTCCFK;
    $this->idReservasFK = $idReservasFK;

	}

		function getidDefesa ()
		{
			return $this->idDefesa;
		}

		function getPosturaPessoal ()
		{
			return $this->PosturaPessoal;
		}

		function getFluenciaComunicativa ()
		{
			return $this->FluenciaComunicativa;
		}

		function getClareza ()
		{
			return $this->Clareza;
		}

		function getDominio ()
		{
			return $this->Dominio;
		}

		function getNotaTotal ()
		{
			return $this->NotaTotal;
		}

		function getPosturaComentario ()
		{
			return $this->PosturaComentario;
		}

    function getFluenciaComentario ()
		{
			return $this->FluenciaComentario;
		}

    function getClarezaComentario ()
    {
      return $this->ClarezaComentario;
    }

    function getDominioComentario ()
    {
      return $this->DominioComentario;
    }

    function getDataBanca ()
    {
      return $this->DataBanca;
    }

    function getidTCCFK ()
    {
      return $this->idTCCFK;
    }

    function getidReservasFK ()
    {
      return $this->idReservasFK;
    }



		function setidDefesa($idDefesa)
		{
   			$this->idDefesa = $idDefesa;
  	}

		function setPosturaPessoal ($PosturaPessoal)
		{
			$this->PosturaPessoal = $PosturaPessoal;
		}

		function setFluenciaComunicativa ($FluenciaComunicativa)
		{
			$this->FluenciaComunicativa = $FluenciaComunicativa;
		}

		function setClareza ($Clareza)
		{
			$this->Clareza = $Clareza;
		}

		function setDominio ($Dominio)
		{
			$this->Dominio = $Dominio;
		}

		function setNotaTotal ($NotaTotal)
		{
			$this->NotaTotal = $NotaTotal;
		}

		function setPosturaComentario ($PosturaComentario)
		{
			$this->PosturaComentario = $PosturaComentario;
		}

    function setFluenciaComentario ($FluenciaComentario)
		{
			return $this->FluenciaComentario;
		}

    function setClarezaComentario ($ClarezaComentario)
    {
      return $this->ClarezaComentario;
    }

    function setDominioComentario ($DominioComentario)
    {
      return $this->DominioComentario;
    }

    function setDataBanca ($DataBanca)
    {
      return $this->DataBanca;
    }

    function setidTCCFK ($idTCCFK)
    {
      return $this->idTCCFK;
    }

    function setidReservasFK ($idReservasFK)
    {
      return $this->idReservasFK;
    }

}
