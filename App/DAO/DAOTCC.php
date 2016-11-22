<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\TCC as TCC;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOTCC implements IDAO{
    
    public function create($Tcc){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO TCC (Titulo, Descricao, TCCStatus, Objetivos, Justificativas, TCCTipo, LinhaPesquisa_idLinhaPesquisa) 
    			VALUES ('{$Tcc->getTitulo()}', '{$Tcc->getDescricao()}', '{$Tcc->getTCCStatus()}', '{$Tcc->getObjetivos()}', 
    			'{$Tcc->getJustificativas()}', '{$Tcc->getTCCTipo()}', '{$Tcc->getLinhaPesquisa()}'); ";
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

    public function update($Tcc, $idTcc)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE TCC SET Titulo = '{$Tcc->getTitulo()}', Descricao = '{$Tcc->getDescricao()}', 
    			TCCStatus = '{$Tcc->getTCCStatus()}', Objetivos = '{$Tcc->getObjetivos()}', 
    			Justificativas = '{$Tcc->getJustificativas()}', TCCTipo = '{$Tcc->getTCCTipo()}', 
    			LinhaPesquisa_idLinhaPesquisa = '{$Tcc->getLinhaPesquisa()}' WHERE idTCC = $idTcc";

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
    
    public function delete($idTcc){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM TCC WHERE idTCC = $idTcc";
    			
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
    
    public function find($idTcc){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM TCC WHERE idTCC = $idTcc";
    			
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
        $sql = "SELECT * FROM TCC";
                
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