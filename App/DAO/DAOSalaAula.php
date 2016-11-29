<?php

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\SalaAula as SalaAula;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/SalaAula.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOSalaAula implements IDAO{

    public function create($SalaAula){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    			$sql = "call  ('{$SalaAula->getNomeSala()}', '{$SalaAula->getSetor()}', '{$SalaAula->getCapacidade()}', '{$SalaAula->getUnidade()}')"
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

    public function update($SalaAula, $idSalaAula)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call = ('{$SalaAula->getNomeSala()}','{$SalaAula->getSetor()}','{$SalaAula->getCapacidade()}','{$SalaAula->getUnidade()}')"

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

    public function delete($idSalaAula){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call = ({$idSalaAula->getidSalaAula()})";

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

    public function find($idSalaAula){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call = ({$idSalaAula->getidSalaAula()})";

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
        $sql = "SELECT * FROM SalaAula";

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
