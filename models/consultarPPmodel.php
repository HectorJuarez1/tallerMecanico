<?php
include_once 'models/varTodas.php';
class consultarPPmodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM vw_detalle_cotizaciones_ref");
            while ($row = $query->fetch()) {
                $item = new varTodas();

                $item->vw_refaccion_nombre = $row['refaccion_nombre'];
                $item->vw_cantidad = $row['cantidad'];
                $item->vw_precio = $row['precio'];
                $item->vw_mano_obra = $row['mano_obra'];
                $item->vw_totalParcial = $row['totalParcial'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }


    public function getCotizacionC()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM cotizacion");
            while ($row = $query->fetch()) {
                $item = new varTodas();

                $item->cotizacion_fecha = $row['cotizacion_fecha'];
                $item->nombre_cliente = $row['nombre_cliente'];
                $item->numero_telefono = $row['numero_telefono'];
                $item->correo_electronico = $row['correo_electronico'];
                $item->num_pedido = $row['num_pedido'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    

    

}
