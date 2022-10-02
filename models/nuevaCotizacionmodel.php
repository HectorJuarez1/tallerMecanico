<?php
include_once 'models/varTodas.php';
class nuevaCotizacionmodel extends Model
{

    public function __construct()
    {
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
            return null;
        }
    }


    public function insert($datos)
    {
        try {
            $query = $this->db->connect()->prepare('INSERT INTO cotizacion(cotizacion_fecha, nombre_cliente, numero_telefono, correo_electronico, marca_id, modelo_auto, anio_auto, descripcion,num_pedido) VALUES 
                                                    (:Fecha,:Nombre,:Numtelefono,:Correo,:Marca,:Modelo,:annio_a,:Descripcion_a,:nump)');
            $query->execute([
                'Fecha' => $datos['Fecha'],
                'Nombre' => $datos['txt_NombreCliente'],
                'Numtelefono' => $datos['txt_Telefono'],
                'Correo' => $datos['txt_Correo'],
                'Marca' => $datos['cbx_Marca'],
                'Modelo' => $datos['txt_Modelo'],
                'annio_a' => $datos['txt_Anio'],
                'Descripcion_a' => $datos['txt_DescripcionAuto'],
                'nump' => $datos['Num_Pedido'],
            ]);

            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }
    }

  
}
