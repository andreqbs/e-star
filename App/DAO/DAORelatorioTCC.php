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
    	$sql = "INSERT INTO RelatorioTCC (Apresentacao, Fundamentacao, Desenvolvimento, ModeloResultado, ApresentacaoComentario, FundamentacaoComentario, DesenvolvimentoComentario, ModeloResultadoComentario, NotaTotal, TipoRelatorio, idTCCFK) 
    			VALUES ('{$RelatorioTCC->getApresentacao()}', '{$RelatorioTCC->getFundamentacao()}', '{$RelatorioTCC->getDesenvolvimento()}', '{$RelatorioTCC->getModeloResultado()}', 
    			'{$RelatorioTCC->getApresentacaoComentario()}', '{$RelatorioTCC->getFundamentacaoComentario()}', '{$RelatorioTCC->DesenvolvimentoComentario()}','{$RelatorioTCC->ModeloResultadoComentario()}','{$RelatorioTCC->NotaTotal()}','{$RelatorioTCC->TipoRelatorio()}','{$RelatorioTCC->idTCCFK()}' ); ";
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

    public function update($RelatorioTCC, $idRelatorioTCC)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE RelatorioTCC SET Apresentacao = '{$RelatorioTCC->getApresentacao()}', Fundamentacao = '{$RelatorioTCC->getFundamentacao()}', 
    			Desenvolvimento = '{$RelatorioTCC->getDesenvolvimento()}', ModeloResultado = '{$RelatorioTCC->getModeloResultado()}', 
    			ApresentacaoComentario = '{$RelatorioTCC->getApresentacaoComentario()}', FundamentacaoComentario = '{$RelatorioTCC->getFundamentacaoComentario()}', FundamentacaoComentario = '{$RelatorioTCC->getFundamentacaoComentario()}', DesenvolvimentoComentario = '{$RelatorioTCC->getDesenvolvimentoComentario()}', ModeloResultadoComentario = '{$RelatorioTCC->getModeloResultadoComentario()}', NotaTotal = '{$RelatorioTCC->getNotaTotal()}', TipoRelatorio = '{$RelatorioTCC->getTipoRelatorio()}', idTCCFK = '{$RelatorioTCC->getidTCCFK()}',
    			 WHERE idRelatorioTCC = $idRelatorioTCC";

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
    	$sql = "DELETE FROM RelatorioTCC WHERE idRelatorioTCC = $idRelatorioTCC";
    			
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
        $sql = "SELECT * FROM RelatorioTCC";
                
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