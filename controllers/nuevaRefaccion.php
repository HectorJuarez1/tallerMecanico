<?php

class nuevaRefaccion extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->varTodas=[];
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
        $ruta ='public/img/Refacciones/';
        move_uploaded_file($archivotm,$ruta.$datos[3]);

        if ($this->model->insertRefaccion([
            'id_marca' => $datos[0], 'NomRefaccion' => $datos[1], 'Descripcion' => $datos[2],'filename' => $datos[3]
        ])) {
            $this->redirect('nuevaRefaccion', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
        } else {
            $this->redirect('nuevaRefaccion', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
        }

    }


}
