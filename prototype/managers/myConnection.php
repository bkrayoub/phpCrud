<?php 
    class Connection {
        private $host;
        private $user;
        private $pass;
        private $db;

        protected function conncet(){
            
            $this->host = 'localhost';
            $this->user = 'root';
            $this->pass = '';
            $this->db = 'promo1';

            $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            return $conn;
        }
    }
?>