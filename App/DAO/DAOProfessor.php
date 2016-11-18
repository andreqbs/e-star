<?php

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Professor as Professor;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Professor.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOProfessor implements IDAO{

    public function create($Professor){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO Professor (idProfessor, nome, matricula, email, login, senha)
    			VALUES ('{$Professor->getidProfessor()}', '{$Professor->getnome()}', '{$Professor->getmatricula()}', '{$Professor->getemail()}',
    			'{$Professor->getlogin()}', '{$Professor->getsenha()}'; ";
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

    public function update($Professor, $idProfessor)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Professor SET idProfessor = '{$Professor->getidProfessor()}', nome = '{$Professor->getnome()}',
    			matricula = '{$Professor->getmatricula()}', email = '{$Professor->getemail()}',
    			login = '{$Professor->getlogin()}', senha = '{$Professor->getsenha()}' WHERE idProfessor = $idProfessor";

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

    public function delete($idProfessor){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Professor WHERE idProfessor = $idProfessor";

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

    public function find($idProfessor){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Professor WHERE idProfessor = $idProfessor";

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
        $sql = "SELECT * FROM Professor";

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
