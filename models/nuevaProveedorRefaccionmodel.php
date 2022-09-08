<?php
include_once 'models/varTodas.php';
class nuevaProveedorRefaccionmodel extends Model{

    public function __construct(){
        parent::__construct();
    }

     public function get()
     {
         $items = [];
         try {
            $query = $this->db->connect()->query("SELECT refaccion_id,refaccion_nombre from refaccion order by refaccion_nombre");
            while ($row = $query->fetch()) {
                $item = new varTodas();
                $item->refaccion_id = $row['refaccion_id'];
                $item->refaccion_nombre = $row['refaccion_nombre'];
                array_push($items, $item);
             }
             return $items;
         } catch (PDOException $e) {
             return [];
         }
     }
// muestra proveddor
     public function getById($id){
        $item = new varTodas();

        $query = $this->db->connect()->prepare("SELECT * FROM proveedor WHERE proveedor_id = :proveedor_id");
        try{
            $query->execute(['marca_id' => $id]);

            while($row = $query->fetch()){
                $item->proveedor_id = $row['proveedor_id'];
                $item->refaccion_nombre = $row['refaccion_nombre'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }
//modificar
    public function insertProveedorRefaccion($datos){
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
