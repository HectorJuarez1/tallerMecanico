<?php
include_once 'models/varTodas.php';

class ConsultarMarcaModel extends Model
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

    public function getById($id){
        $item = new varTodas();

        $query = $this->db->connect()->prepare("SELECT * FROM marca WHERE marca_id = :marca_id");
        try{
            $query->execute(['marca_id' => $id]);

            while($row = $query->fetch()){
                $item->marca_id = $row['marca_id'];
                $item->marca_nombre = $row['marca_nombre'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE marca SET marca_nombre = :nombre_marca WHERE marca_id = :id_marca");
        try{
            $query->execute([
                'id_marca'=> $item['codMarca'],
                'nombre_marca'=> $item['NomMarca']
            ]);
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
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
