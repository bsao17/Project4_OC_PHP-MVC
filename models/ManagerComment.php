<?php 
require_once("DatabaseClass.php");

class ManagerComment{

    private $db;
    private $connection;

    public function __construct(){
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function postComment(){
        $comment = $this->connection->prepare("INSERT INTO comments(ID_billet, ID_user, contentsDb) VALUES(?, ?, ?)");
    }

    public function deleteComment(){
        
    }

    public function displayComment(){

    }

    public function updateComment(){

    }
}