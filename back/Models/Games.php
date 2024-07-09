<?php 

require('Connection.php');

class Games extends Connection{
    private $id;
    private $img;
    private $name;
    private $link;
    private $category;
    private $platfrom;
    private $isRecomended;
    private $connect;

    public function __construct(){
        parent::__construct();
        $this->connect = $this->connectDatabase();
    }

    public function indexGame(){

    }

    public function showGame(){

    }

    public function createGame(){

    }

    public function editGame(){

    }

    public function deleteGame(){
        
    }
}


?>