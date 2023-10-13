<?php
    class StoreModel {

        private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=tienda computacion;charset=utf8', 'root', '');
        }

        public function getByUsername($username) {
            $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
            $query->execute(array($username));

            return $query->fetch(PDO::FETCH_OBJ);
        }

        

    }