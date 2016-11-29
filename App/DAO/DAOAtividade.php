<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Atividade as Atividade;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Atividade.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOAtividade implements IDAO{
    
    public function create($Atividade){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql =  "call sp_inserirAtividade('{$Atividade->getNomeAtividade()}', '{$Atividade->getMesAtividade()}', '{$Atividade->getDescricaoAtividade()}', '{$Atividade->getidTCCFK()}');"
		echo "<br>".$sql."<br>";
         // `sp_inserirAtividade` (nome varchar(50), mes date, descricao varchar(250), idTCCFK integer(11))


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

    public function update($Atividade, $idAtividade)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_alterarAtividade('{$Atividade->getNomeAtividade()}','{$Atividade->getMesAtividade()}', 
    			'{$Atividade->getDescricaoAtividade()}', '{$Atividade->getidTCCFK()}', $idAtividade = '{$idAtividade->getidTCCFK()}')";
             // `sp_alterarAtividade` (idAtividade integer(11), nome varchar(50), mes date, descricao varchar(250), idTCCFK integer(11))

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
    
    public function delete($idAtividade){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_deletarAtividade(idAtividade = '{$Atividade->getidAtividade()}')";
    
        // `sp_deletarAtividade`(idAtividade integer(11))			
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
    
    public function find($idAtividade){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Atividade WHERE idAtividade = $idAtividade";
    			
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
        $sql = "call sp_listarAtividade()";
                
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