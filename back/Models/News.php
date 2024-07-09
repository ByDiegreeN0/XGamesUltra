<?php
require('Connection.php');

class News extends Connection{
    private $id;
    private $tittle;
    private $newsContent;
    private $date;
    private $connect;

    public function __construct(){
        parent::__construct();
        $this->connect = $this->connectDatabase();
    }

    public function indexNews(){

    }

    public function showNews(){
        
    }

    public function createNews(){

    }

    public function editNews(){

    }

    public function deleteNews(){

    }
}


?>