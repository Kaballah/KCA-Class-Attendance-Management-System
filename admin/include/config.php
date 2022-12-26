<?php
class dbConfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName = 'kca';
    function dbConfig() {
        $this -> serverName = 'localhost';
        $this -> userName = 'root';
        $this -> password = '';
        // $this -> dbName = 'test';
    }
}
?>