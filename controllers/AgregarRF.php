<?php
class AgregarRF extends Controller
{
    function __construct()
    {
        parent::__construct();
       
    }

    function render()
    {
       $this->view->render('AgregarRF/index');
    }

    function Buscar()
    {                
                $datos[0] = trim($_POST['Codigo']);
                $idRefaccion = $datos[0];
                $Ref = $this->model->getByIdR($idRefaccion);
                $this->view->varTodas = $Ref;
                $this->view->render('AgregarRF/index');

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
           
            $this->redirect('AgregarRF',['success' => SuccessMessages::SUCCESS_CONFIRMATION_REGISTRADO]);
        } else {
            $this->redirect('nuevaCotizacion', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
        }
    }


}
