<?php
include_once 'models/varTodas.php';

class AgregarRefaccionesmodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }



    public function getByIdR($id){
        $item = new varTodas();

        $query = $this->db->connect()->prepare("SELECT * FROM refaccion WHERE marca_id = :marid");
        try{
            $query->execute(['marid' => $id]);

            while($row = $query->fetch()){
                $item->marca_id = $row['marca_id'];
                $item->refaccion_nombre = $row['refaccion_nombre'];
                $item->refaccion_descripcion = $row['refaccion_descripcion'];
                $item->precio = $row['precio'];
                $item->refaccion_imagen = $row['refaccion_imagen'];
            }
            return $item;
        }catch(PDOException $e){
            echo $e;
            return null;
        }
    }



    public function insert($datos)
    {
        try {
            $query = $this->db->connect()->prepare('INSERT INTO cotizacion_detalle_general(num_pedido_c,codigo_refaccion, cantidad, mano_obra)
                                                                         VALUES (:np,:cr,:can,:mo);');
            $query->execute([
                'np' => $datos['Num_Pedido'],
                'cr' => $datos['txt_NombreCliente'],
                'can' => $datos['txt_cantidad_R'],
                'mo' => $datos['txt_mano_obra'],

            ]);

            return true;
        } catch (PDOException $e) {
             echo $e->getMessage();
            return false;
        }
    }
   
}
