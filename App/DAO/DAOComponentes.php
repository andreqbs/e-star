<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Models\Componentes as Componentes;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Componentes.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOComponentes implements IDAO{
    
    public function create($Componentes){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "INSERT INTO Componentes (Titulo, Descricao, ComponentesStatus, Objetivos, Justificativas, ComponentesTipo, LinhaPesquisa_idLinhaPesquisa) VALUES ('{$Componentes->getTitulo()}', '{$Componentes->getDescricao()}', '{$Componentes->getStatus()}', '{$Componentes->getObjetivos()}', '{$Componentes->getJustificativas()}', '{$Componentes->getComponentesTipo()}', '{$Componentes->getLinhaPesquisa()}'); ";
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

    public function update($Componentes, $idComponentes)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "UPDATE Componentes SET Titulo = '{$Componentes->getTitulo()}', Descricao = '{$Componentes->getDescricao()}', ComponentesStatus = '{$Componentes->getStatus()}', Objetivos = '{$Componentes->getObjetivos()}', Justificativas = '{$Componentes->getJustificativas()}', ComponentesTipo = '{$Componentes->getComponentesTipo()}', LinhaPesquisa_idLinhaPesquisa = '{$Componentes->getLinhaPesquisa()}' WHERE idComponentes = $idComponentes";

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
    
    public function delete($idComponentes){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "DELETE FROM Componentes WHERE idComponentes = $idComponentes";
    			
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
    
    public function find($idComponentes)
    {

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Componentes WHERE idComponentes = $idComponentes";
    			
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
        $sql = "SELECT * FROM Componentes";
                
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