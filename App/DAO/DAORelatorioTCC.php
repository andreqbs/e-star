<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Model\RelatorioTCC as RelatorioTCC;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/RelatorioTCC.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAORelatorioTCC implements IDAO{
    
    public function create($RelatorioTCC){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_inserirRelatorio('{$RelatorioTCC->getNotaApresentacao()}','{$RelatorioTCC->getDatasystem()}','{$RelatorioTCC->getNotaFundamentacao()}','{$RelatorioTCC->getNotaDesenvolvimento()}','{$RelatorioTCC->getNotaResultados()}','{$RelatorioTCC->getNotaTotal()}','{$RelatorioTCC->getTipoRela()}','{$RelatorioTCC->getApresentacaoComentario()}','{$RelatorioTCC->getFundamentacaoComentario()}','{$RelatorioTCC->getDesenvolvimentoComentario()}','{$RelatorioTCC->getResultadosComentario()}','{$RelatorioTCC->getidTCCFK()}')";
		
        echo "<br>".$sql."<br>";

 // CREATE PROCEDURE `sp_inserirRelatorio`(apresentacaoNota FLOAT, dataH DATETIME, fundamentacaoNota FLOAT, desenvolvimentoNota FLOAT, resultadosNota FLOAT, notaFinal FLOAT, 
 //  TipoRelatorio varchar(50), apresentacaoComentario varchar(250), fundamentacaoComentario varchar(250), desenvolvimentoComentario varchar(250), 
 //  resultadosComentario varchar(250), idTCCFK integer(11))

		try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    	//$conn->makeQuery($sql);
    }

    public function update($RelatorioTCC, $idRelatorioTCC)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$$sql = "call sp_alterarRelatorio ('{$idRelatorioTCC}','{$RelatorioTCC->getDatasystem()}','{$RelatorioTCC->getNotaApresentacao()}','{$RelatorioTCC->getNotaFundamentacao()}','{$RelatorioTCC->getNotaDesenvolvimento()}','{$RelatorioTCC->getNotaResultados()}','{$RelatorioTCC->getNotaTotal()}','{$RelatorioTCC->getTipoRela()}','{$RelatorioTCC->getApresentacaoComentario()}','{$RelatorioTCC->getFundamentacaoComentario()}','{$RelatorioTCC->getDesenvolvimentoComentario()}','{$RelatorioTCC->getResultadosComentario()}','{$RelatorioTCC->getidTCCFK()}')";
// CREATE PROCEDURE `sp_alterarRelatorio`(idRelatorio integer(11), dataH DATETIME, apresentacaoNota FLOAT, fundamentacaoNota FLOAT, desenvolvimentoNota FLOAT, resultadosNota FLOAT, notaFinal FLOAT, 
//   TipoRelatorio varchar(50), apresentacaoComentario varchar(250), fundamentacaoComentario varchar(250), desenvolvimentoComentario varchar(250), 
//   resultadosComentario varchar(250), idTCCFK integer(11))

		echo "<br>".$sql."<br>";

		try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    	//$conn->makeQuery($sql);
    }
    
    public function delete($idRelatorioTCC){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = " call sp_deletarRelatorio`('{$idRelatorioTCC}')";
		
		echo "<br>".$sql."<br>";

		try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    	//$conn->makeQuery($sql);
    }
    
    public function find($idRelatorioTCC){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM RelatorioTCC WHERE idRelatorioTCC = $idRelatorioTCC";
    			
		echo "<br>".$sql."<br>";

    	try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;
    }

    public function list()
    {
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "call sp_listarRelatorio()";
                
        echo "<br>".$sql."<br>";

        try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;   
    }
        public function listBy($type, $value)
    {
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "SELECT * FROM Aluno WHERE ".$type." = ".$value;
                
        echo "<br>".$sql."<br>";

        try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;   
    }
}