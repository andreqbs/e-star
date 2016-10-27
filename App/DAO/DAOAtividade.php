<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Atividade as Atividade;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Atividade.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOAtividade implements IDAO{
    
    public function create($Atividade){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO Atividade (NomeAtividade, MesAtividade, DescricaoAtividade, idTCCFK) 
    			VALUES ('{$Atividade->getNomeAtividade()}', '{$Atividade->getMesAtividade()}', '{$Atividade->getStatus()}', '{$Atividade->getidTCCFK()}'); ";
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

    public function update($Atividade, $idAtividade)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Atividade SET NomeAtividade = '{$Atividade->getNomeAtividade()}', MesAtividade = '{$Atividade->getMesAtividade()}', 
    			DescricaoAtividade = '{$Atividade->getStatus()}', idTCCFK = '{$Atividade->getidTCCFK()}' WHERE idAtividade = $idAtividade";

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
    
    public function delete($idAtividade){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Atividade WHERE idAtividade = $idAtividade";
    			
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
    
    public function find($idAtividade){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Atividade WHERE idAtividade = $idAtividade";
    			
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
        $sql = "SELECT * FROM Atividade";
                
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