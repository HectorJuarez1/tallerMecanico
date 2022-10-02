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

     
    
    public function getProveedor()
    { 
        $items = [];
        try{
             $query = $this->db->connect()->query("SELECT proveedor_id,proveedor_nombre FROM proveedor ORDER BY proveedor_id;");
             while($row = $query->fetch()){
                 $item = new varTodas();
                 $item->proveedor_id = $row['proveedor_id'];
                 $item->proveedor_nombre = $row['proveedor_nombre'];
                 array_push($items, $item);
             }
             return $items;
         }catch(PDOException $e){
             return [];
         }
    }

     public function getById($id){
        $item = new varTodas();

        $query = $this->db->connect()->prepare("SELECT * from refaccion where refaccion_id=:refa_id");
        try{
            $query->execute(['refa_id' => $id]);
            while($row = $query->fetch()){
                $item->refaccion_id = $row['refaccion_id'];
                $item->refaccion_nombre = $row['refaccion_nombre'];
        
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }


    public function insertProveedorRefaccion($datos){
        try{
           $query = $this->db->connect()->prepare('INSERT INTO refaccion_proveedor(id_refaccion,id_proveedor, fecha_solicitud, precio)
                                                   VALUES(:idf,:idp,:fecha,:precio)');
           $query->execute(['idf' => $datos['id_provedor'],'idp' => $datos['id_proveedor'],'fecha' => $datos['Fecha'],'precio' => $datos['Precio']]);
           return true;
       }catch(PDOException $e){
       //   echo $e->getMessage();
           return false;
       }
    }




}
