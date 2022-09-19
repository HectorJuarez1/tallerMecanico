<?php

class nuevaSucursal extends Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function render()
    {
        $marcas = $this->model->get();
        $this->view->marcas = $marcas;
        $this->view->render('nuevaSucursal/index');
    }
    function registrarSucursal()
    {
        $datos[0] = trim($_POST['id_proS']);
        $datos[1] = trim($_POST['NomSucursalS']);
        $datos[2]  = trim($_POST['DireccionsS']);
        $datos[3]  = trim($_POST['Telefono1S']);
        $datos[4]  = trim($_POST['Telefono2S']);
        $datos[5]   = trim($_POST['CorreoEs']);

        if ($this->model->insertSucursal([
            'id_proS' => $datos[0], 'NomSucursalS' => $datos[1], 'DireccionsS' => $datos[2],
            'Telefono1S' => $datos[3], 'Telefono2S' => $datos[4], 'CorreoEs' => $datos[5]
        ])) {
            $this->redirect('nuevaSucursal', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
            
        } else {
            $this->redirect('nuevaSucursal', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
        }

    }
}
