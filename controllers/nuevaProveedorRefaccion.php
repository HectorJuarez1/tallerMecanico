<?php

class nuevaProveedorRefaccion extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->varTodas=[];
        $this->view->mensaje = "";
    }

    function render(){
        $varTodas =$this->model->get();
        $this->view->varTodas=$varTodas;
        $this->view->render('nuevaProveedorRefaccion/index');
    }

    function verIdRefaccion($param = null){
        $idMarca = $param[0];
        $marcaa = $this->model->getById($idMarca);
        $this->view->varTodas=$marcaa;
        $this->view->render('nuevaProveedorRefaccion/nueva');

    }
    

    function registraProveedorRefaccion()
    {
        //echo "registraRefaccion";
         //$this->model->insertRefaccion();
        $datos[0] = trim($_POST['refaccion_id']);
        $datos[1] = trim($_POST['id_proveedor']);
        $datos[2]  = trim($_POST['Fecha']);
        $datos[3]  = trim($_POST['Precio']);
        $mensaje = "";
        if ($this->model->insertProveedorRefaccion([
            'id_provedor' => $datos[0], 'id_proveedor' => $datos[1], 'Fecha' => $datos[2],'Precio' => $datos[3]
        ])) {
            $mensaje = "";
        } else {
            $mensaje = "Esta refaccion ya existente";
        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }


}
