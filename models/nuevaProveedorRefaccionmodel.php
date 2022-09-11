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
     public function getById($id){
        $item = new varTodas();

        $query = $this->db->connect()->prepare("SELECT RR.refaccion_id,PP.proveedor_id,PP.proveedor_nombre
                                          FROM refaccion RR inner join proveedor PP
                                             ON RR.refaccion_id =PP.proveedor_id where RR.refaccion_id=:refaccion_id");
        try{
            $query->execute(['refaccion_id' => $id]);

            while($row = $query->fetch()){
                $item->refaccion_id = $row['refaccion_id'];
                $item->refaccion_nombre = $row['refaccion_nombre'];
                $item->proveedor_id = $row['proveedor_id'];
                $item->proveedor_nombre = $row['proveedor_nombre'];
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
          echo $e->getMessage();
           return false;
       }
    }




}
