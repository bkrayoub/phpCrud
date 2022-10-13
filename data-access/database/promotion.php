<?php
class Promotion
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'brief1';
    private $conn;

    private $id;
    private $nom;

    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->db);
    }
    
    function select(){
        $select_pro = 'SELECT * FROM promotion';
        return $this->conn->query($select_pro);
    }

    function insert(){
        $insert_pro = "INSERT INTO promotion(name) VALUES ('$this->name')";
        $this->conn->query($insert_pro);
    }
}
