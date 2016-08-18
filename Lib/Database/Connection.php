<?php

namespace Lib\Database;

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
    private $connection;

    /**
     * Connection constructor.
     * @param $database
     */
    public function __construct($database)
    {
        if (file_exists(dirname(__FILE__)."/../Core/database/{$database}.ini")) {
            $this->ini = parse_ini_file(dirname(__FILE__)."/../Core/database/{$database}.ini");
        } else {
            throw new Exception("Arquivo '$database' não encontrado");
        }
    }


    /**
     * @return PDO
     */
    public function connection()
    {
        $user = isset($this->ini['user']) ? $this->ini['user'] : null;
        $pass = isset($this->ini['pass']) ? $this->ini['pass'] : null;
        $name = isset($this->ini['name']) ? $this->ini['name'] : null;
        $host = isset($this->ini['host']) ? $this->ini['host'] : null;

        if (!isset($this->connection)) {
            $this->connection = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->connection;
    }

    /**
     * reset connection prorerty
     */
    public function close()
    {
        $this->connection = null;
    }
}
