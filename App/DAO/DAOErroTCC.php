<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\ErroTCC as ErroTCC;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/ErroTCC.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOErroTCC implements IDAO{
    
    public function create($ErroTCC){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO ErroTCC (ErrosFK, TCCFK) 
    			VALUES ('{$ErroTCC->getErrosFK()}', '{$ErroTCC->getTCCFK()}'); ";
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

    public function update($ErroTCC, $idErroTCC)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE ErroTCC SET ErrosFK = '{$ErroTCC->getErrosFK()}', TCCFK = '{$ErroTCC->getTCCFK()}' WHERE idErroTCC = $idErroTCC";

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
    
    public function delete($idErroTCC){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM ErroTCC WHERE idErroTCC = $idErroTCC";
    			
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
    
    public function find($idErroTCC){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM ErroTCC WHERE idErroTCC = $idErroTCC";
    			
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
        $sql = "SELECT * FROM ErroTCC";
                
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