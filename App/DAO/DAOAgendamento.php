<?php

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Agendamento as Agendamento;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Agendamento.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOAgendamento implements IDAO{

    public function create($Agendamento){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_inserirAgendamento ('{$Agendamento -> getDataHora()}', '{$Agendamento -> getMotivo()}', '{$Agendamento -> getidAlunoFK()}', '{$Agendamento-> getidProfessorFK()}', '{$Agendamento -> getidCursoFK()}')";

          //CREATE PROCEDURE `sp_inserirAgendamento`(motivo varchar(100), dataHora DATETIME, idProfessorFK integer(11), idAlunoFK integer(11))

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

    public function update($Agendamento, $idAgenda)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_alterarAgendamento ('{$Agendamento->getDataHora()}', Motivo = '{$Agendamento->getMotivo()}',
    			idAlunoFK = '{$Agendamento->getidAlunoFK()}', idProfessorFK = '{$Agendamento->getidProfessorFK()}',
    			idCursoFK = '{$Agendamento->getidCursoFK()}')";

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

    public function delete($idAgenda){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_deletarAgendamento ('{$idAgenda = getidAgendamento()}')";

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

    public function find($idAgenda){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Agendamento WHERE idAgenda = $idAgenda";

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
        $sql = "SELECT * FROM Agendamento";

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
