<?php 

namespace App\Model;

class RelatorioTCC {

	private $idRelatorioTCC;

	private $TituloTcc;

	private $NomeAluno;

	private $MatriculaAluno;

	private $ApresentacaoComentario;

	private $NotaApresentacao;

	private $FundamentacaoComentario;

	private $NotaFundamentacao;

	private $DesenvolvimentoComentario;

	private $NotaDesenvolvimento;

	private $ResultadosComentario;

	private $NotaResultados;

	private $NotaTotal;

	private $idTCCFK;	

 // TituloTcc NomeAluno MatriculaAluno ApresentacaoComentario NotaApresentacao FundamentacaoComentario NotaFundamentacao DesenvolvimentoComentario NotaDesenvolvimento ResultadosComentario NotaResultados  NotaTotal

	function __construct($TituloTcc, $NomeAluno, $Datasystem, $TipoRela, $MatriculaAluno, $ApresentacaoComentario, $NotaApresentacao, $FundamentacaoComentario, $NotaFundamentacao, $DesenvolvimentoComentario, $NotaDesenvolvimento, $ResultadosComentario, $NotaResultados, $NotaTotal, $idTCCFK) {
		$this->TituloTcc = $TituloTcc;
		$this->NomeAluno = $NomeAluno;
		$this->Datasystem = $Datasystem;
		$this->TipoRela = $TipoRela;
		$this->MatriculaAluno = $MatriculaAluno;
		$this->ApresentacaoComentario = $ApresentacaoComentario;
		$this->NotaApresentacao = $NotaApresentacao;
		$this->FundamentacaoComentario = $FundamentacaoComentario;
		$this->NotaFundamentacao = $NotaFundamentacao;
		$this->DesenvolvimentoComentario = $DesenvolvimentoComentario;
		$this->NotaDesenvolvimento = $NotaDesenvolvimento;
		$this->ResultadosComentario = $ResultadosComentario;
		$this->NotaResultados = $NotaResultados;
		$this->NotaTotal = $NotaTotal;
		$this->idTCCFK = $idTCCFK;

	}

		function getidRelatorioTCC () 
		{
			return $this->idRelatorioTCC;
		}
		
		function getTituloTcc () 
		{
			return $this->TituloTcc;
		}
		
		function getNomeAluno () 
		{
			return $this->NomeAluno;
		}
		
		function getDatasystem () 
		{
			return $this->Datasystem;
		}

		function getTipoRela() 
		{
			return $this->TipoRela;
		}

		function getMatriculaAluno () 
		{
			return $this->MatriculaAluno;
		}

		function getApresentacaoComentario () 
		{
			return $this->ApresentacaoComentario;
		}

		function getNotaApresentacao () 
		{
			return $this->NotaApresentacao;
		}

		function getFundamentacaoComentario () 
		{
			return $this->FundamentacaoComentario;
		}
		
		function getNotaFundamentacao () 
		{
			return $this->NotaFundamentacao;
		}

		function getDesenvolvimentoComentario () 
		{
			return $this->DesenvolvimentoComentario;
		}

		function getNotaDesenvolvimento () 
		{
			return $this->NotaDesenvolvimento;
		}

		function getResultadosComentario () 
		{
			return $this->ResultadosComentario;
		}

		function getNotaResultados () 
		{
			return $this->NotaResultados;
		}

		function getNotaTotal () 
		{
			return $this->NotaTotal;
		}

		function getidTCCFK () 
		{
			return $this->idTCCFK;
		}



		function setTituloTcc ($TituloTcc) 
		{
			$this->TituloTcc = $TituloTcc;
		}
		
		function SetNomeAluno ($NomeAluno) 
		{
			return $this->NomeAluno;
		}
		
		function SetMatriculaAluno ($MatriculaAluno) 
		{
			return $this->MatriculaAluno;
		}

		function SetApresentacaoComentario ($ApresentacaoComentario) 
		{
			return $this->ApresentacaoComentario;
		}

		function SetNotaApresentacao ($NotaApresentacao) 
		{
			return $this->NotaApresentacao;
		}

		function SetFundamentacaoComentario ($FundamentacaoComentario) 
		{
			return $this->FundamentacaoComentario;
		}
		
		function SetNotaFundamentacao ($NotaFundamentacao) 
		{
			return $this->NotaFundamentacao;
		}

		function SetDesenvolvimentoComentario ($DesenvolvimentoComentario) 
		{
			return $this->DesenvolvimentoComentario;
		}

		function SetNotaDesenvolvimento ($NotaDesenvolvimento) 
		{
			return $this->NotaDesenvolvimento;
		}

		function SetResultadosComentario ($ResultadosComentario) 
		{
			return $this->ResultadosComentario;
		}

		function SetNotaResultados ($NotaResultados) 
		{
			return $this->NotaResultados;
		}

		function SetNotaTotal ($NotaTotal) 
		{
			return $this->NotaTotal;
		}

		function setidTCCFK ($idTCCFK) 
		{
			$this->idTCCFK = $idTCCFK;
		}

}