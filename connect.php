<?php 

class DBConnect {
    private $host;
    private $user;
    private $password;
    private $database;
    private $connectionDataBase;

    function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    public function execute_querry($sql) {
        $this->connectionDataBase = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->connectionDataBase->connect_error) {
            echo "Failed to connect " . $this->host . ", " . $this->connectionDataBase->connect_error;
        }

        $result = $this->connectionDataBase->query($sql);
        
        $this->connectionDataBase->close();

        return $result;
    }
}


?>