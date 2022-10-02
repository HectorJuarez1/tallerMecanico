<?php
class consultarSucursales extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
       $varTodas =$this->model->get();
        $this->view->varTodas=$varTodas;
        $this->view->render('consultarSucursales/index');
    }


}
