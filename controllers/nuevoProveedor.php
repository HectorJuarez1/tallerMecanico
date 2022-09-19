<?php

class nuevoProveedor extends Controller{

    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->render('nuevoProveedor/index');
    }
    function registrarProveedor(){
        $datos[0]  = strtoupper(trim($_POST['Nomproveedor']));
        $datos[1]    = trim($_POST['Direccion']);
        $datos[2]  = trim($_POST['Telefono1']);
        $datos[3] = trim($_POST['Telefono2']);
        $datos[4]    = trim($_POST['CorreoE']);
        $mensaje = "";
        if($this->model->insertproveedor(['Nomproveedor' => $datos[0], 'Direccion' => $datos[1], 'Telefono1' => $datos[2], 'Telefono2' => $datos[3], 'CorreoE' => $datos[4]])){
            $this->redirect('nuevoProveedor', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
        }else{
            $this->redirect('nuevoProveedor', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
        }

    }
}
