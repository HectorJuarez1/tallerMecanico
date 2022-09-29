<?php
class AgregarRefacciones extends Controller{
    function __construct(){
        parent::__construct();

    }
    

    
    function render(){
 
        $this->view->render('AgregarRefacciones/index');
    }


    function Buscar(){
        $datos[0] = trim($_POST['Codigo']);
        $idRefaccion = $datos[0];
        $Ref = $this->model->getByIdR($idRefaccion);
        $this->view->varTodas=$Ref;
        $this->view->render('AgregarRefacciones/index');        
    }


    function registrarRefacciones(){
        echo "insertando";
        session_start();
        $datos[0]=$_SESSION['Num_Pedido'];
        $datos[1] = trim($_POST['txt_cantidad_R']);
        $datos[2]  = trim($_POST['txt_mano_obra']);



        if ($this->model->insert(['Num_Pedido' => $datos[0], 
        'txt_cantidad_R' => $datos[1], 
        'txt_mano_obra' => $datos[2]

        ])) {
            $this->redirect('AgregarRefacciones/Buscar');
//$this->redirect('nuevaCotizacion', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
} 
else {
$this->redirect('nuevaCotizacion', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
}




    }


}

