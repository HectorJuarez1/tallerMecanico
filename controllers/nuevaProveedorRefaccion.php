<?php

class nuevaProveedorRefaccion extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $varTodas = $this->model->get();
        $this->view->varTodas = $varTodas;
        $this->view->render('nuevaProveedorRefaccion/index');
    }

    function verIdRefaccion($param = null)
    {
        $idMarca = $param[0];
        $marcaa = $this->model->getById($idMarca);
        $this->view->varTodas = $marcaa;

        $Proveedor = $this->model->getProveedor();
        $this->view->provvedorCom = $Proveedor;

        $this->view->render('nuevaProveedorRefaccion/nueva');
    }

    function registraProveedorRefaccion()
    {
        $datos[0] = trim($_POST['refaccion_id']);
        $datos[1] = trim($_POST['id_proveedor']);
        $datos[2]  = trim($_POST['Fecha']);
        $datos[3]  = trim($_POST['Precio']);
        $mensaje = "";
        if ($this->model->insertProveedorRefaccion([
            'id_provedor' => $datos[0], 'id_proveedor' => $datos[1], 'Fecha' => $datos[2], 'Precio' => $datos[3]
        ])) {
            $this->redirect('nuevaProveedorRefaccion', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
        } else {
            $this->redirect('nuevaProveedorRefaccion', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
        }
    }
}
