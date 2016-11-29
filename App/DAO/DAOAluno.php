<?php
namespace App\DAO;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use Lib\Database\Connection as Connection;
use App\Model\Aluno as Aluno;
use App\Iface\IDAO as IDAO;
require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Aluno.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';
class DAOAluno implements IDAO{

    public function create($Aluno){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
        $sql = "call sp_inserirAluno( '{$Aluno->getNomeAluno()}', '{$Aluno->getMatriculaAluno()}', '{$Aluno->getEmailAluno()}', '{$Aluno->getLoginAluno()}', '{$Aluno->getSenhaAluno()}', '{$Aluno->getidCursoFK()}')";

        try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();

            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                
            return FALSE;
        }
    	//$conn->makeQuery($sql);
    }
    public function update($Aluno, $idAluno)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
        $sql = " call sp_alterarAluno('{$idAluno}','{$Aluno->getNomeAluno()}','{$Aluno->getMatriculaAluno()}','{$Aluno->getEmailAluno()}','{$Aluno->getLoginAluno()}','{$Aluno->getSenhaAluno()}','{$Aluno->getidCursoFK()}')";
        // `sp_alterarAluno`(idAluno integer(11) ,nome varchar(100), matricula char(9), email varchar(50), login varchar(50), senha varchar(20), idCursoFK integer(11))
		
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

        $sql = "call sp_deletarAluno({$idAluno})";
        // `sp_deletarAluno`(idAluno integer(11))
		
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
        $sql = "call  sp_listarProfessor({$idAluno})";

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


    public function findBy($login, $senha){
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "SELECT idAluno FROM Aluno WHERE Login = '{$login}' and Senha = '{$senha}'";

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
