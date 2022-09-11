<?php

class nuevaCotizacion extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";

    }
    function render(){
                $this->view->render('nuevaCotizacion/index');
    }
    function registrarCotizacion(){
        $datos[0] = trim($_POST['NomCliente']);
        $datos[1]  = trim($_POST['Descripcion_coche']);
        $datos[2]  = trim($_POST['Fecha']);
        $datos[3] = trim($_POST['CostoTotal']);

         if($this->model->insert(['NomCliente' => $datos[0],'Descripcion_coche' => $datos[1],'Fecha' => $datos[2],'CostoTotal' => $datos[3]])){
            $mensaje = 'Registrado';
         }else{
            $mensaje = "No registrado";
         }
        $this->view->mensaje = $mensaje;
        $this->render();

    }


}
