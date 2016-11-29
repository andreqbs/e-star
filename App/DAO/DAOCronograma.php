<?php  


namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Cronograma as Cronograma;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Cronograma.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOCronograma implements IDAO{

//acho que não existe nomecronograma pq ele e fk de atividadecronograma eu acho
	    public function create($Cronograma){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql =  "sp_inserirCronograma('{$Cronograma->getnomeCronograma()}', '{$Cronograma->getPorque()}', '{$Cronograma->getOnde()}','{$Cronograma->getQuando()}','{$Cronograma->getQuem()}','{$Cronograma->getComo()}''{$Cronograma->getQuanto()}',getidCronogramaFK)";
		 
         `sp_inserirCronograma`( porque varchar(100), onde varchar(100), quando varchar(100), quem varchar(100), como varchar(100), quanto varchar(45))

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
    	$sql = "call sp_alterarCronograma ('{$Cronograma->getPorque()}', '{$Cronograma->getOnde()}', '{$Cronograma->getQuando()}', '{$Cronograma->getQuem()}','{$Cronograma->getComo()}',  '{$Cronograma->getQuanto()}', idCronograma = '{$Cronograma->getidCronograma()}')";

        // `sp_alterarCronograma` (idCronograma integer(11), nomeatividade varchar(100), porque varchar(100), onde varchar(100), quando varchar(100), quem varchar(100), como varchar(100), quanto varchar(45))

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
