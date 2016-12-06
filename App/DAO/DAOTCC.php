<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Model\TCC as TCC;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOTCC implements IDAO{
    
    public function create($Tcc)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
        $sql = "call sp_inserirTCC('{$Tcc->getTitulo()}', '{$Tcc->getResumo()}', '{$Tcc->getTCCStatus()}', '{$Tcc->getObjetivos()}',
                '{$Tcc->getJustificativas()}', '{$Tcc->getTCCTipo()}', '{$Tcc->getidLinhaPesquisaFK()}', '{$Tcc->getidProfessorFK()}',
                '{$Tcc->getidAluno1FK()}', '{$Tcc->getidAluno2FK()}')";
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

    public function update($Tcc, $idTcc)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
        $sql = "call sp_alterarTCC('{$Tcc->getidTCC()}', '{$Tcc->getTitulo()}', '{$Tcc->getResumo()}', '{$Tcc->getTCCStatus()}', '{$Tcc->getObjetivos()}',
                '{$Tcc->getJustificativas()}', '{$Tcc->getTCCTipo()}', '{$Tcc->getLinhaPesquisa()}', '{$Componentes->getidProfessorFK()}',
                '{$Componentes->getidAlunoFK1()}', '{$Componentes->getidAlunoFK2()}', '{$Componentes->getidTCCFK()}')";
    	

		echo "<br>".$sql."<br>";

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
    
    public function delete($idTcc){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
        $sql = "sp_deletarTCC({$idTcc})";
    	
    			
		

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
    
    public function find($idTcc){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM TCC WHERE idTCC = $idTcc";
    			
		

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
        $sql = "call sp_listarTCC()";
                
        

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