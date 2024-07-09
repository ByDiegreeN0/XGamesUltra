<?php 

require('Connection.php');

class Users extends Connection{
    private $id;
    private $userName;
    private $password;
    private $role;
    private $connect;

    public function __construct(){
        parent::__construct();
        $this->connect = $this->connectDatabase();
    }

    public function logIn(){

    }

    public function logOut(){
        
    }
}


?>