<?php
include_once 'models/varTodas.php';

class MainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT sum(cantidad)as Rcotizadas,sum(totalParcial)as Tparcial  FROM vw_detalle_cotizaciones_ref");
            while ($row = $query->fetch()) {
                $item = new varTodas();
                $item->Rcotizadas = $row['Rcotizadas'];
                $item->Tparcial = $row['Tparcial'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

}
