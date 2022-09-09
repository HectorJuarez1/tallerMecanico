<?php

class nuevaRefaccion extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->varTodas=[];
        $this->view->mensaje = "";
    }

    function render(){
        $varTodas =$this->model->get();
        $this->view->varTodas=$varTodas;
        $this->view->render('nuevaRefaccion/index');
    }

    function verRefaccion($param = null){
        $idMarca = $param[0];
        $marcaa = $this->model->getById($idMarca);
        $this->view->varTodas=$marcaa;
        $this->view->render('nuevaRefaccion/nueva');

    }

    function registraRefaccion()
    {
        $datos[0] = trim($_POST['id_marca']);
        $datos[1] = trim($_POST['NomRefaccion']);
        $datos[2]  = trim($_POST['Descripcion']);
        $datos[3]=$_FILES['filename']['name']; // obtiene el nombre
        $archivotm=$_FILES['filename']['tmp_name']; // obtiene el archiv
        $ruta ='public/img/';
        move_uploaded_file($archivotm,$ruta.$datos[3]);
        $mensaje = "";
        if ($this->model->insertRefaccion([
            'id_marca' => $datos[0], 'NomRefaccion' => $datos[1], 'Descripcion' => $datos[2],'filename' => $datos[3]
        ])) {
            $mensaje = "Nueva refaccion registrado";
        } else {
            $mensaje = "Esta refaccion ya existente";
        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }


}
