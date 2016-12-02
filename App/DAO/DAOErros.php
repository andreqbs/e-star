<?php

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Erros as Erros;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Erros.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOErros implements IDAO{

    public function create($Erros){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call	sp_inserirErros('{$Erros->getNomeErro()}', '{$Erros->getCategoriaErro()}')"

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

    public function update($Erros, $idErros)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "sp_alterarErros('{$Erros->getNomeErro()}','{$Erros->getCategoriaErro()}','{$idErros->idErros()}')"

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

    public function delete($idErros){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "sp_deletarErros('{$idErros->idErros()}')"

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

    public function find($idErros){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Erros WHERE idErros = $idErros";

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
        $sql = "sp_listarErros()";

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
