<?php

    class Services{
        private $id;
        private $name;

        function get_name(){
            return $this->name;
        }

        function set_name($name){
            $this->name = $name;
        }

        function getId(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }
        
    }