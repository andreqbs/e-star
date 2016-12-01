<?php

namespace Lib\Database;
ini_set('display_errors', 'On');
error_reporting(E_ALL);
use PDO;
use Exception;

/**
 * Class Connection
 * @package Lib\Database
 * @author Domingos Neto
 */
class Connection
{
    private $ini;
    private $conn;

    /**
     * Connection constructor.
     * @param $database
     */
    public function __construct()
    {
        if (file_exists(dirname(__FILE__)."/../Core/database/sample.ini")) {
            $this->ini = parse_ini_file(dirname(__FILE__)."/../Core/database/sample.ini");
            $this->openConnection();
        } else {
            throw new Exception("Arquivo '$database' não encontrado");
        }
    }

    function __destruct() {
        $this->conn = null;
    }


    /**
     * @return PDO
     */
    public function openConnection()
    {
        $user = isset($this->ini['user']) ? $this->ini['user'] : null;
        $pass = isset($this->ini['pass']) ? $this->ini['pass'] : null;
        $name = isset($this->ini['name']) ? $this->ini['name'] : null;
        $host = isset($this->ini['host']) ? $this->ini['host'] : null;

        if (!isset($this->conn)) {
            $this->conn = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->conn;
    }

    /**
     * reset connection prorerty
     */
    public function close()
    {
        $this->conn = null;
    }

    function getData($sql, $verboseMode = FALSE) {

        try {

            $stmt = $this->conn->query($sql);
            $this->data = $stmt->fetch();
            
            if($verboseMode === TRUE)
                echo "<script>alert('Returned Value: " . $this->data[0] . "');</script>";
        }
        catch(PDOException $e) {
            if($verboseMode === TRUE)
                echo "Error: " . $e->getMessage();
        }

        return $this->data;
    }

    function getNumRows($sql, $verboseMode = TRUE) {

        try {

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();   
            $rows = $stmt->rowCount();
            
            if($verboseMode === TRUE)
                echo "<script>alert('Query executada com sucesso!');</script>";
        }
        catch(PDOException $e) {
            if($verboseMode === TRUE)
                echo "Error: " . $e->getMessage();
        }

        return $rows;
    }

    function makeQuery($sql, $verboseMode = FALSE) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();   
            
            if($verboseMode === TRUE)
                echo "<script>alert('Query executada com sucesso!');</script>";

            return TRUE;
        }
        catch(PDOException $e) {
            if($verboseMode === TRUE)
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    }
}
