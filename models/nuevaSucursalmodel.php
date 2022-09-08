<?php
include_once 'models/varTodas.php';
class nuevaSucursalmodel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insertSucursal($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO sucursal_prov(proveedor_id,sucursal_nombre, sucursal_direccion, sucursal_telefono,sucursal_telefono_2,sucursal_correo)
                                                VALUES(:pid, :snom, :sdir,:stel1,:stel2,:scorreo)');
            $query->execute(['pid' => $datos['id_proS'], 'snom' => $datos['NomSucursalS'], 'sdir' => $datos['DireccionsS'], 'stel1' => $datos['Telefono1S'], 'stel2' => $datos['Telefono2S'], 'scorreo' => $datos['CorreoEs']]);
            return true;
        }catch(PDOException $e){
           // echo $e->getMessage();
            // echo $e->getMessage();
            return false;
        }
     }
     public function get(){
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

}
