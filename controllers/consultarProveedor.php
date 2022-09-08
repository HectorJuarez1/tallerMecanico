<?php
class consultarProveedor extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->varTodas=[];
        $this->view->mensaje = "";
    }

    function render(){
       $varTodas =$this->model->get();
        $this->view->varTodas=$varTodas;
        $this->view->render('consultarProveedor/index');
    }


}
