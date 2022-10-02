<?php
class nuevaCotizacion extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $marcas =$this->model->get();
        $this->view->varTodas=$marcas;
        $this->view->render('nuevaCotizacion/index');
    }


    function AgregarProducto(){
        $datos[0] = trim($_POST['Codigo']);
        $idRefaccion = $datos[0];
        $Ref = $this->model->getByIdR($idRefaccion);
        $this->view->varTodas=$Ref;
        $this->view->render('nuevaCotizacion/AgregarProductos');        
    }


    function registrarCotizacion()
    {

        session_start();
        $_SESSION["Num_Pedido"]=htmlentities($_POST['txt_NUM_cotizacion']);
        $datos[0] = trim($_POST['Fecha']);
        $datos[1]  = trim($_POST['txt_NombreCliente']);
        $datos[2]  = trim($_POST['txt_Telefono']);
        $datos[3] = trim($_POST['txt_Correo']);
        $datos[4] = trim($_POST['cbx_Marca']);
        $datos[5]  = trim($_POST['txt_Modelo']);
        $datos[6]  = trim($_POST['txt_Anio']);
        $datos[7]  = trim($_POST['txt_DescripcionAuto']);
        $datos[8]=$_SESSION['Num_Pedido'];

        if ($this->model->insert(['Fecha' => $datos[0], 
                                'txt_NombreCliente' => $datos[1], 
                                'txt_Telefono' => $datos[2], 
                                'txt_Correo' => $datos[3],
                                'cbx_Marca' => $datos[4],
                                'txt_Modelo' => $datos[5],
                                'txt_Anio' => $datos[6],
                                'txt_DescripcionAuto' => $datos[7],
                                'Num_Pedido'=>  $datos[8]
                                ])) {
                                  //  $this->view->render('nuevaCotizacion/Buscar');
                                       
                                                $this->redirect('AgregarRF');
            //$this->redirect('nuevaCotizacion', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
        } 
        else {
            $this->redirect('nuevaCotizacion', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
        }
    }




}
