<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Model\Componentes as Componentes;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Componentes.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOComponentes implements IDAO{
    
    public function create($Componentes){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO Componentes (idProfessorFK, idAlunoFK1, idAlunoFK2, idTCCFK) VALUES ('{$Componentes->getidProfessorFK()}', '{$Componentes->getidAlunoFK1()}', '{$Componentes->getidAlunoFK2()}', '{$Componentes->getidTCCFK()}'); ";
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

    public function update($Componentes, $idComponentes)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Componentes SET idProfessorFK = '{$Componentes->getidProfessorFK()}', idAlunoFK1 = '{$Componentes->getidAlunoFK1()}', idAlunoFK2 = '{$Componentes->getidAlunoFK2()}', idTCCFK = '{$Componentes->getidTCCFK()}' WHERE idComponentes = $idComponentes";

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
    
    public function delete($idComponentes){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Componentes WHERE idComponentes = $idComponentes";
    			
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
    
    public function find($idComponentes)
    {

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Componentes WHERE idComponentes = $idComponentes";
    			
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
        $sql = "SELECT * FROM Componentes";
                
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