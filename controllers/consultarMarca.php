<?php
class consultarMarca extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->varTodas=[];
        $this->view->mensaje = "";
    }

    function render(){
        $marcas =$this->model->get();
        $this->view->varTodas=$marcas;
        $this->view->render('consultarMarca/index');
    }

    function verMarca($param = null){
        $idMarca = $param[0];

        $marcaa = $this->model->getById($idMarca);

        $this->view->varTodas=$marcaa;

        $this->view->render('consultarMarca/ActMarca');


    }

    function actualizarMarca(){

                //modificar 

        $id_marca=$_POST['codMarca'];
        $nombre_m = $_POST['NomMarca'];
         if($this->model->update(['codMarca' => $id_marca, 'NomMarca' => $nombre_m] )){
             // actualizar alumno exito
             $marcaa = new varTodas();
             $marcaa->marca_id = $id_marca;
             $marcaa->marca_nombre = $nombre_m;

             $this->view->marcas = $marcaa;

             $this->view->mensaje = "Alumno actualizado correctamente";
         }else{
             // mensaje de error
             $this->view->mensaje = "No se pudo actualizar el alumno";
         }
         $this->view->render('consultarMarca/ActMarca');

    }

    function eliminarMarca($param = null){
        $marca = $param[0];
         if($this->model->delete($marca)){
             $mensaje = "Marca eliminada correctamente";
         }else{

             $mensaje = "No se pudo eliminar la marca";
         }
         $this->view->mensaje = $mensaje;
         header('Location: ' . $_SERVER['HTTP_REFERER']);
         //$this->render();
        // echo $mensaje;
     }
}
