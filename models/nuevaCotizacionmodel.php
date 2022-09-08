<?php

class nuevaCotizacionmodel extends Model{

    public function __construct(){
        parent::__construct();
    }
     public function insert($datos){
         try{
            $query = $this->db->connect()->prepare('INSERT INTO cotizacion(cotizacion_nombre_cliente,cotizacion_descripcion_coche,cotizacion_fecha,cotizacion_costo_total)
                                                    VALUES (:ctnom,:ctche,:ctfec,:ctcos)');
            $query->execute(['ctnom' => $datos['NomCliente'],'ctche' => $datos['Descripcion_coche'],'ctfec' => $datos['Fecha'],'ctcos' => $datos['CostoTotal']]);
            return true;
        }catch(PDOException $e){
           // echo $e->getMessage();
            return false;
        }
     }
}
