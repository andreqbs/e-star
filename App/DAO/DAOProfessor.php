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

    	$sql = "call sp_inserirProfessor({$Professor->setNomeProfessor()},{$Professor->setMatriculaProfessor()},{$Professor->setEmailProfessor()},{$Professor->setLoginProfessor()},{$Professor->setSenhaProfessor()} )";

        // `sp_inserirProfessor`(nome varchar(100), matricula char(6), email varchar(50), login varchar(50), senha varchar(20))
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
    	
        $sql "call sp_inserirProfessor({$idProfessor->setidProfessor()},{$Professor->setNomeProfessor()},{$Professor->setMatriculaProfessor()},{$Professor->setEmailProfessor()},{$Professor->setLoginProfessor()},{$Professor->setSenhaProfessor()})"
        
        // `sp_alterarProfessor` (idProfessor integer(11), nome varchar(100), matricula integer(6), email varchar(50), login varchar(50), senha varchar(20))
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
    	$sql = "call sp_deletarProfessor({$idProfessor->setidProfessor()})";

        // `sp_deletarProfessor`(idProfessor integer(11))
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
        $sql = "call sp_listarProfessor()";

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
        $sql = "SELECT * FROM $type WHERE ".$type." = ".$value;

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
