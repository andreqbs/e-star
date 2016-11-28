<?php  

ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Model\Arquivos as Arquivos;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Arquivos.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOArquivos implements IDAO{
    
    public function create($Arquivos){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	
        $sql = "call sp_inserirArquivo('{$Arquivos->getLink()}','{$Arquivos->getidTCCFK()}','{$Arquivos->getVersao()}}')"
		echo "<br>".$sql."<br>";

    //  CREATE PROCEDURE `sp_inserirArquivo`(link varchar(250), idTCCFK integer(11), versao varchar(45))

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

    public function update($Arquivos, $idArquivos)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_alterarArquivo('{$idArquivos}','{$Arquivos->getLink()}','{$Arquivos->getidTCCFK}','{$Arquivos->getVersao()}')"

		echo "<br>".$sql."<br>";
    // CREATE PROCEDURE `sp_alterarArquivo` (idArquivo integer(11), link varchar(250), idTCCFK integer(11), versao varchar(45))

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
    
    public function delete($idArquivos){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_deletarArquivo('{$idArquivos}')";
    			
		echo "<br>".$sql."<br>";
    //  CREATE PROCEDURE `sp_deletarArquivo`(idArquivo integer(11))
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
    
    public function find($idArquivos){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Arquivos WHERE idArquivos = $idArquivos";
    			
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
        $sql = "call `sp_listarArquivo`()";
                
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