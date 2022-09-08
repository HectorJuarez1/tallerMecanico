<?php

class nuevaMarca extends Controller{

    function __construct(){
        parent::__construct();
       $this->view->mensaje = "";
    }
    function render(){
                $this->view->render('nuevaMarca/index');
    }
    function registrarMarca(){
       $Marca = strtoupper(trim($_POST['NomMarca']));
         $mensaje = "";
         if($this->model->insert(['NomMarca' => $Marca])){
            $mensaje = "Marca Ingresada";
         }else{
            $mensaje = "Esta marca ya existe";
         }
        $this->view->mensaje = $mensaje;
        $this->render();
     }

}
