<?php
include_once 'models/varTodas.php';
class consultarProveedormodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM proveedor");
            while ($row = $query->fetch()) {
                $item = new varTodas();
                $item->proveedor_nombre = $row['proveedor_nombre'];
                $item->proveedor_direccion = $row['proveedor_direccion'];
                $item->proveedor_telefono = $row['proveedor_telefono'];
                $item->proveedor_telefono2 = $row['proveedor_telefono2'];
                $item->proveedor_correo_e = $row['proveedor_correo_e'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

}
