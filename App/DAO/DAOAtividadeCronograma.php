<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\AtividadeCronograma as AtividadeCronograma;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/AtividadeCronograma.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';

/*
private $idAtividadeCronograma;
private $NomeAtividade;
private $idCronogramaFK;
private $idTCCFK;
*/
class DAOAtividadeCronograma implements IDAO{


    public function create($AtividadeCronograma){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO idAtividadeCronograma (NomeAtividade, idCronogramaFK,idTCCFK) 
    			VALUES ('{$LinhaPesquisa->getNomeAtividade()}', '{$LinhaPesquisa->getidTCCFK()}','{$LinhaPesquisa->getidTCCFK()}'getidCronogramaFK); ";
		
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
    public function update($AtividadeCronograma, $idAtividadeCronograma)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE AtividadeCronograma SET AtividadeCronograma = '{$AtividadeCronograma->getNomeAtividade()}', idTCCFK = '{$AtividadeCronograma->getidTCCFK()}', idCronogramaFK = '{$idCronogramaFK->getidCronogramaFK()}' WHERE idAtividadeCronograma = $idAtividadeCronograma";

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
    
    public function delete($idAtividadeCronograma){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM AtividadeCronograma WHERE idAtividadeCronograma = $idAtividadeCronograma";
    			
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
    	$sql = "SELECT * FROM Cronograma WHERE idAtividadeCronograma = $idAtividadeCronograma";
    			
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
        $sql = "SELECT * FROM AtividadeCronograma";
                
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
?>