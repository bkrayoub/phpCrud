<?php
class Connection {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'promo1';

    public function connect() {
        $conn = new mysqli($this->host, $this->user,$this->pass, $this->db);
        return $conn;
    }
}
?>