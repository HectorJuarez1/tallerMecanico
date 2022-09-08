<?php
include_once 'models/varTodas.php';
class consultarRefaccionesmodel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM refaccion");
            while ($row = $query->fetch()) {
                $item = new varTodas();
                $item->refaccion_nombre = $row['refaccion_nombre'];
                $item->refaccion_descripcion = $row['refaccion_descripcion'];
                $item->refaccion_imagen = $row['refaccion_imagen'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM marca WHERE marca_id = :id");
        try {
            $query->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}
