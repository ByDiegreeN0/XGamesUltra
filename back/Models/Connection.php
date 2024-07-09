<?php 


class Connection{

    private $host;
    private $user;
    private $password;
    private $db;
    private $connect;

    public function __construct(){
        $this->connect = new mysqli($this->host, $this->user, $this->password, $this->db);

        if($this->connect->connect_error){
            die("Unable to connect to database");
        }

        if($this->connect){
            echo "<script>
            console.log('Database Connected');
            </script>";
        }
    }

    public function connectDatabase(){
        return $this->connect;
    }

    public function closeConnection(){
        if($this->connect){
            $this->connect->close();
        }
    }
    

}


?>