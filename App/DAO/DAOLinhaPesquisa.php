<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\LinhaPesquisa as LinhaPesquisa;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/LinhaPesquisa.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOLinhaPesquisa implements IDAO{
    
    public function create($LinhaPesquisa){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO LinhaPesquisa (LinhaPesquisa, idTCCFK) 
    			VALUES ('{$LinhaPesquisa->getLinhaPesquisa()}', '{$LinhaPesquisa->getidTCCFK()}'); ";
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

    public function update($LinhaPesquisa, $idLinhaPesquisa)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE LinhaPesquisa SET LinhaPesquisa = '{$LinhaPesquisa->getLinhaPesquisa()}', idTCCFK = '{$LinhaPesquisa->getidTCCFK()}' WHERE idLinhaPesquisa = $idLinhaPesquisa";

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
    
    public function delete($idLinhaPesquisa){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM LinhaPesquisa WHERE idLinhaPesquisa = $idLinhaPesquisa";
    			
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
    
    public function find($idLinhaPesquisa){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM LinhaPesquisa WHERE idLinhaPesquisa = $idLinhaPesquisa";
    			
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
        $sql = "SELECT * FROM LinhaPesquisa";
                
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