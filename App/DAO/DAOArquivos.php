<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Arquivos as Arquivos;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Arquivos.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOArquivos implements IDAO{
    
    public function create($Arquivos){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO Arquivos (Link, TCCFK) 
    			VALUES ('{$Arquivos->getLink()}', '{$Arquivos->getTCCFK()}'); ";
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

    public function update($Arquivos, $idArquivos)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Arquivos SET Link = '{$Arquivos->getLink()}', TCCFK = '{$Arquivos->getTCCFK()}' WHERE idArquivos = $idArquivos";

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
    
    public function delete($idArquivos){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Arquivos WHERE idArquivos = $idArquivos";
    			
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
    
    public function find($idArquivos){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Arquivos WHERE idArquivos = $idArquivos";
    			
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
        $sql = "SELECT * FROM Arquivos";
                
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