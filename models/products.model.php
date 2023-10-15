<?php 

class ProductsModel {

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tienda computacion;charset=utf8', 'root', '');
    }

    public function getAllProcesadores(){
        $query = $this->db->prepare('SELECT * FROM procesadores ORDER BY Marca ASC');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function saveProcesador($marca, $modelo, $socket, $valor) {
        $query = $this->db->prepare('INSERT INTO procesadores(ID_procesadores, Marca, Modelo, Socket, Valor) VALUES(NULL,?,?,?,?)');
        $query->execute([$marca, $modelo, $socket, $valor]); 
    }

    public function deleteProcesador($idProcesador){
        $query = $this->db->prepare('DELETE FROM procesadores WHERE ID_procesadores = ?');
        $query->execute([$idProcesador]); 
    }
}
