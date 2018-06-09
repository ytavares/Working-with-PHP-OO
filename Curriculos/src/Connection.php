<?php

namespace YuriTavares;

class Connection
{
    private $connection;
    private $user;
    private $password;
    private $host;
    private $dbname;
    
    public function __construct() 
    {
       $dbFile = realpath(dirname(__FILE__) . "/../config/databases.php");
       $config = include($dbFile);
       $this->user = $config['user'];
       $this->password = $config['password'];
       $this->host = $config['host'];
       $this->dbname = $config['dbname'];
       $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
       $this->connection = new PDO($dsn, $this->user, $this->password);
    }
    
    public function getConnection()
    {
        return $this->connection;
    }
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getHost()
    {
        return $this->host;
    }        
    
    public function getDbname()
    {
        return $this->dbname;
    }
    
    public function __destruct() 
    {
        unset($this->connection);
    }
}      
        
