<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\RelatorioTCC as RelatorioTCC;
use App\DAO\DAORelatorioTCC as DAORelatorioTCC;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';
	
 $IdRelatorioTCC = $_POST[''];

 $TituloTcc = $_POST['TituloTcc'];

 $NomeAluno = $_POST['NomeAluno'];

 $MatriculaAluno = $_POST['MatriculaAluno'];

 $ApresentacaoComentario = $_POST['ApresentacaoComentario'];

 $NotaApresentacao = $_POST['NotaApresentacao'];

 $FundamentacaoComentario = $_POST['FundamentacaoComentario'];

 $NotaFundamentacao = $_POST['NotaFundamentacao'];

 $DesenvolvimentoComentario = $_POST['DesenvolvimentoComentario'];

 $NotaDesenvolvimento = $_POST['NotaDesenvolvimento'];

 $ResultadosComentario = $_POST['ResultadosComentario'];

 $NotaResultados = $_POST['NotaResultados'];

 $NotaTotal = $_POST['NotaTotal'];
 
 // TituloTcc NomeAluno MatriculaAluno ApresentacaoComentario NotaApresentacao FundamentacaoComentario NotaFundamentacao DesenvolvimentoComentario NotaDesenvolvimento ResultadosComentario NotaResultados  NotaTotal

$meuRelatorio = new RelatorioTCC($TituloTcc, $NomeAluno, $MatriculaAluno, $ApresentacaoComentario, $NotaApresentacao, $FundamentacaoComentario, $NotaFundamentacao, $DesenvolvimentoComentario, $NotaDesenvolvimento, $ResultadosComentario, $NotaResultados, $NotaTotal);

$RelatorioTCCControl = new mainController();
$Result =$RelatorioTCCControl->alterarRelatorioTCC($meuRelatorioTCC,$IdRelatorioTCC);

if ($Result){	
		echo '<script> alert("Atualizado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Atualizado Com Sucesso") </script>  ';



