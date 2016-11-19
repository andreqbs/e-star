<?php  


namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Cronograma as Cronograma;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Cronograma.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOCronograma implements IDAO{


	    public function create($Cronograma){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO idCronograma (PorQue, Onde, Quando, Quem, Como, Quanto) 
    			VALUES ('{$Cronograma->getPorque()}', '{$Cronograma->getOnde()}','{$Cronograma->getQuando()}','{$Cronograma->getQuem()}','{$Cronograma->getComo()}''{$Cronograma->getQuanto()}',getidCronogramaFK); ";
		
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

    public function update($Cronograma, $idCronograma)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Cronograma SET PorQue = '{$Cronograma->getPorque()}', Onde = '{$Cronograma->getOnde()}', Quando = '{$Cronograma->getQuando()}', Quem = '{$Cronograma->getQuem()}', Como = '{$Cronograma->getComo()}', Quanto = '{$Cronograma->getQuanto()}' WHERE idCronograma = $idCronograma";

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
    	 
    public function delete($idCronograma){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Cronograma WHERE idCronograma = $idCronograma";
    			
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
    
    public function find($idCronograma){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM AtividadeCronograma WHERE idCronograma = $idCronograma";
    			
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
        $sql = "SELECT * FROM idCronograma";
                
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

}

?>