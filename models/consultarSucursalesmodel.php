<?php
include_once 'models/varTodas.php';
class consultarSucursalesmodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM sucursal_prov");
            while ($row = $query->fetch()) {
                $item = new varTodas();
                $item->proveedor_id = $row['proveedor_id'];
                $item->sucursal_nombre = $row['sucursal_nombre'];
                $item->sucursal_direccion = $row['sucursal_direccion'];
                $item->sucursal_telefono = $row['sucursal_telefono'];
                $item->sucursal_telefono_2 = $row['sucursal_telefono_2'];
                $item->sucursal_correo = $row['sucursal_correo'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

}
