<?php

class NuevaMarcaModel extends Model{

    public function __construct(){
        parent::__construct();
    }
     public function insert($datos){
         try{
            $query = $this->db->connect()->prepare('INSERT INTO marca(marca_nombre)VALUES(:mn)');
            $query->execute(['mn' => $datos['NomMarca']]);
            return true;
        }catch(PDOException $e){
            return false;
        }
     }
}
