<?php 

namespace App\Models;

class RelatorioTCC {

	private $idRelatorioTCC;

	private $Apresentacao;

	private $Fundamentacao;

	private $Desenvolvimento;

	private $ModeloResultado;

	private $ApresentacaoComentario;

	private $FundamentacaoComentario;

	private $DesenvolvimentoComentario;

	private $ModeloResultadoComentario;

	private $NotaTotal;

	private $TipoRelatorio;

	private $idTCCFK;	



	function __construct($Apresentacao, $Fundamentacao, $Desenvolvimento, $ModeloResultado, $ApresentacaoComentario, $FundamentacaoComentario, $DesenvolvimentoComentario, $ModeloResultadoComentario, $NotaTotal, $TipoRelatorio, $idTCCFK) {
		$this->Apresentacao = $Apresentacao;
		$this->Fundamentacao = $Fundamentacao;
		$this->Desenvolvimento = $Desenvolvimento;
		$this->ModeloResultado = $ModeloResultado;
		$this->NotaTotal = $NotaTotal;
		$this->TipoRelatorio = $TipoRelatorio;
		$this->idTCCFK = $idTCCFK;

	}

		function getidRelatorioTCC () 
		{
			return $this->idRelatorioTCC;
		}
		
		function getApresentacao () 
		{
			return $this->Apresentacao;
		}
		
		function getFundamentacao () 
		{
			return $this->Fundamentacao;
		}
		
		function getDesenvolvimento () 
		{
			return $this->Desenvolvimento;
		}

		function getModeloResultado () 
		{
			return $this->ModeloResultado;
		}

		function getApresentacaoComentario () 
		{
			return $this->ApresentacaoComentario;
		}
		
		function getFundamentacaoComentario () 
		{
			return $this->FundamentacaoComentario;
		}
		
		function getDesenvolvimentoComentario () 
		{
			return $this->DesenvolvimentoComentario;
		}

		function getModeloResultadoComentario () 
		{
			return $this->ModeloResultadoComentario;
		}

		function getNotaTotal () 
		{
			return $this->NotaTotal;
		}

		function getTipoRelatorio () 
		{
			return $this->TipoRelatorio;
		}

		function getidTCCFK () 
		{
			return $this->TipoidTCCFK;
		}



		function setApresentacao ($Apresentacao) 
		{
			$this->Apresentacao = $Apresentacao;
		}
		
		function setFundamentacao ($Fundamentacao) 
		{
			$this->Fundamentacao = $Fundamentacao;
		}
		
		function setDesenvolvimento ($Desenvolvimento) 
		{
			$this->Desenvolvimento = $Desenvolvimento;
		}

		function setModeloResultado ($ModeloResultado) 
		{
			$this->ModeloResultado = $ModeloResultado;
		}

		function setApresentacaoComentario ($ApresentacaoComentario) 
		{
			$this->ApresentacaoComentario = $ApresentacaoComentario;
		}
		
		function setFundamentacaoComentario ($FundamentacaoComentario) 
		{
			$this->FundamentacaoComentario = $FundamentacaoComentario;
		}
		
		function setDesenvolvimentoComentario ($DesenvolvimentoComentario) 
		{
			$this->DesenvolvimentoComentario = $DesenvolvimentoComentario;
		}

		function setModeloResultadoComentario ($ModeloResultadoComentario) 
		{
			$this->ModeloResultadoComentario = $ModeloResultadoComentario;
		}

		function setNotaTotal ($NotaTotal) 
		{
			$this->NotaTotal = $NotaTotal;
		}

		function setTipoRelatorio ($TipoRelatorio) 
		{
			$this->TipoRelatorio = $TipoRelatorio;
		}

		function setidTCCFK ($idTCCFK) 
		{
			$this->idTCCFK = $idTCCFK;
		}

}