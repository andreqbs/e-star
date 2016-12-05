<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\RelatorioTCC as RelatorioTCC;
use App\DAO\DAORelatorioTCC as DAORelatorioTCC;
use App\Controllers\mainController as mainController;
date_default_timezone_set('America/Bahia');
require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

 $TipoRelatorio = $_POST['1'];
	
 $TituloTcc = 'projeto';//$_POST['TituloTcc'];

 $NomeAluno = $_POST['NomeAluno'];

 $date = date('Y-m-d H:i:s');
 $datesystem = '01-02-2012 ';
 $timesystem = '15:12';
 
 $Datasystem = date($date,($datesystem.$timesystem)) ; 
 
 $MatriculaAluno = '5456765';//$_POST['MatriculaAluno'];

 $ApresentacaoComentario = $_POST['ApresentacaoComentario'];

 $NotaApresentacao = $_POST['NotaApresentacao'];

 $FundamentacaoComentario = $_POST['FundamentacaoComentario'];

 $NotaFundamentacao = $_POST['NotaFundamentacao'];

 $DesenvolvimentoComentario = $_POST['DesenvolvimentoComentario'];

 $NotaDesenvolvimento = $_POST['NotaDesenvolvimento'];

 $ResultadosComentario = $_POST['ResultadosComentario'];

 $NotaResultados = $_POST['NotaResultados'];

 $NotaTotal = $_POST['NotaTotal'];

 $idTCCFK = $_POST['2'];
 
 // TituloTcc NomeAluno MatriculaAluno ApresentacaoComentario NotaApresentacao FundamentacaoComentario NotaFundamentacao DesenvolvimentoComentario NotaDesenvolvimento ResultadosComentario NotaResultados  NotaTotal

$meuRelatorio = new RelatorioTCC($TituloTcc, $NomeAluno, $Datasystem, $TipoRelatorio, $MatriculaAluno, $ApresentacaoComentario, $NotaApresentacao, $FundamentacaoComentario, $NotaFundamentacao, $DesenvolvimentoComentario, $NotaDesenvolvimento, $ResultadosComentario, $NotaResultados, $NotaTotal, $idTCCFK);

$RelatorioControl = new mainController();
$Result =$RelatorioControl->cadastrarRelatorioTCC($meuRelatorio);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';


