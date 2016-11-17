<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Aluno as Aluno;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Aluno.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOAluno implements IDAO{
    
    public function create($Aluno){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO Aluno (NomeAluno, MatriculaAluno, EmailAluno, LoginAluno, SenhaAluno, idCursoFK) 
    			VALUES ('{$Aluno->getNomeAluno()}', '{$Aluno->getMatriculaAluno()}', '{$Aluno->getEmailAluno()}', '{$Aluno->getLoginAluno()}', 
    			'{$Aluno->getSenhaAluno()}', '{$Aluno->getidCursoFK()}'); ";
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

    public function update($Aluno, $idAluno)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Aluno SET NomeAluno = '{$Aluno->getNomeAluno()}', MatriculaAluno = '{$Aluno->getMatriculaAluno()}', 
    			EmailAluno = '{$Aluno->getEmailAluno()}', LoginAluno = '{$Aluno->getLoginAluno()}', 
    			SenhaAluno = '{$Aluno->getSenhaAluno()}', idCursoFK = '{$Aluno->getidCursoFK()}' WHERE idAluno = $idAluno";

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
    
    public function delete($idAluno){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Aluno WHERE idAluno = $idAluno";
    			
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
    
    public function find($idAluno){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Aluno WHERE idAluno = $idAluno";
    			
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
        $sql = "SELECT * FROM Aluno";
                
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