<?php

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Componentes as Defesa;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Defesa.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAODefesa implements IDAO{

    public function create($Defesa){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO Defesa (PosturaPesoal, FluenciaComunicativa, Clareza, Dominio, NotaTotal, PosturaComentario, FluenciaComentario, ClarezaComentario, DominioComentario, DataBanca, idTCCFK, idReservasFK) VALUES ('{$Defesa->getPosturaPesoal()}', '{$Defesa->getFluenciaComunicativa()}', '{$Defesa->getClareza()}', '{$Defesa->getDominio()}', '{$Defesa->getNotaTotal()}', '{$Defesa->getPosturaComentario()}', '{$Defesa->getFluenciaComentario()}', '{$Defesa->getClarezaComentario()}', '{$Defesa->getDominioComentario()}', '{$Defesa->getDataBanca()}', '{$Defesa->getidTCCFK()}', '{$Defesa->getidReservasFK()}'); ";
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

    public function update($Defesa, $idDefesa)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Defesa SET PosturaPesoal = '{$Defesa->getPosturaPesoal()}', FluenciaComunicativa = '{$Defesa->getFluenciaComunicativa()}', Clareza = '{$Defesa->getClareza()}', Dominio = '{$Defesa->getDominio()}', NotaTotal = '{$Defesa->getNotaTotal()}', PosturaComentario = '{$Defesa->getPosturaComentario()}', FluenciaComentario = '{$Defesa->getFluenciaComentario()}', ClarezaComentario = '{$Defesa->getClarezaComentario()}', DominioComentario = '{$Defesa->getDominioComentario()}', idTCCFK = '{$Defesa->getidTCCFK()}', idReservasFK = '{$Defesa->getidReservasFK()}' WHERE idDefesa = $idDefesa";

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

    public function delete($idDefesa){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Defesa WHERE idDefesa = $idDefesa";

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

    public function find($idDefesa)
    {

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Defesa WHERE idDefesa = $idDefesa";

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
        $sql = "SELECT * FROM Defesa";

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
