<?php
class nuevoProveedormodel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insertproveedor($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO proveedor(proveedor_nombre, proveedor_direccion, proveedor_telefono,proveedor_telefono2,proveedor_correo_e) 
                                                VALUES(:pnom, :pdir, :ptel1,:ptel2,:correo)');
            $query->execute(['pnom' => $datos['Nomproveedor'], 'pdir' => $datos['Direccion'], 'ptel1' => $datos['Telefono1'], 'ptel2' => $datos['Telefono2'], 'correo' => $datos['CorreoE']]);
            return true;
        }catch(PDOException $e){
           // echo $e->getMessage();
            return false;
        }
     }
}
