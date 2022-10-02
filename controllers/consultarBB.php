<?php
class consultarBB extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->varTodas=[];
    }

    function render()
    {
        $varTodas = $this->model->get();
        $this->view->varTodas = $varTodas;
        $this->view->render('consultarBB/index');
    }

    function Buscar()
    {                
                $datos[0] = trim($_POST['Codigo']);
                $idRefaccion = $datos[0];
                $Ref = $this->model->getByIdR($idRefaccion);
                $this->view->varTodas = $Ref;
                $this->view->render('consultarBB/index');

    }

    function registrarRefacciones()
    {

        session_start();
        $datos[0] = $_SESSION['Num_Pedido'];
        $datos[1] = trim($_POST['txt_cantidad_R']);
        $datos[2]  = trim($_POST['txt_mano_obra']);
        $datos[3]  = trim($_POST['txt_id_marca']);

        if ($this->model->insert([
            'Num_Pedido' => $datos[0],
            'txt_cantidad_R' => $datos[1],
            'txt_mano_obra' => $datos[2],
            'txt_id_marca' => $datos[3]

        ])) {
           
            $this->redirect('consultarBB',['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
            //$this->redirect('nuevaCotizacion', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
        } else {
            $this->redirect('nuevaCotizacion', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
        }
    }


}
