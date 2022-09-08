<?php
include_once 'models/varTodas.php';
class nuevaRefaccionmodel extends Model{

    public function __construct(){
        parent::__construct();
    }

     public function get()
     {
         $items = [];
         try {
            $query = $this->db->connect()->query("SELECT * FROM marca order by marca_id");
            while ($row = $query->fetch()) {
                $item = new varTodas();
                $item->marca_id = $row['marca_id'];
                $item->marca_nombre = $row['marca_nombre'];
                array_push($items, $item);
             }
             return $items;
         } catch (PDOException $e) {
             return [];
         }
     }

     public function getById($id){
        $item = new varTodas();

        $query = $this->db->connect()->prepare("SELECT * FROM marca WHERE marca_id = :marca_id");
        try{
            $query->execute(['marca_id' => $id]);

            while($row = $query->fetch()){
                $item->marca_id = $row['marca_id'];
                $item->marca_nombre = $row['marca_nombre'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function insertRefaccion($datos){
        try{
           $query = $this->db->connect()->prepare('INSERT INTO refaccion(marca_id,refaccion_nombre, refaccion_descripcion, refaccion_imagen)
                                                   VALUES(:mid,:rnom,:rdes,:rnimg)');
           $query->execute(['mid' => $datos['id_marca'],'rnom' => $datos['NomRefaccion'],'rdes' => $datos['Descripcion'],'rnimg' => $datos['NomImg']]);
           return true;
       }catch(PDOException $e){
          // echo $e->getMessage();
           return false;
       }
    }

}
