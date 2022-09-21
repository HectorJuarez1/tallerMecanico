<?php
class consultarMarca extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->varTodas=[];
    }
    
    function render(){
        $marcas =$this->model->get();
        $this->view->varTodas=$marcas;
        $this->view->render('consultarMarca/index');
    }

    function verMarca($param = null){
        $idMarca = $param[0];
        $marcaa = $this->model->getById($idMarca);
        $this->view->varTodas=$marcaa;
        $this->view->render('consultarMarca/ActMarca');
    }

    function actualizarMarca(){
        //modificar
        $id_marca=$_POST['codMarca'];
        $nombre_m = $_POST['NomMarca'];
         if($this->model->update(['codMarca' => $id_marca, 'NomMarca' => $nombre_m] )){
             // actualizar alumno exito
             $marcaa = new varTodas();
             $marcaa->marca_id = $id_marca;
             $marcaa->marca_nombre = $nombre_m;
             $this->view->varTodas = $marcaa;
             $this->redirect('consultarMarca', ['success' => SuccessMessages::SUCCESS_CONFIRMATION_ACT]);
         }else{
             $this->redirect('consultarMarca', ['warning' => WarningMessages::ADVERTENCIA_NOREGISTRADO]);
         }


    }

    function eliminarMarca($param = null){
        $marca = $param[0];
         if($this->model->delete($marca)){
            $this->redirect('consultarMarca', ['error' => ErrorMessages::ERROR_ELIMINAR]);
         }else{
             $this->redirect('consultarMarca', ['warning' => WarningMessages::ADVERTENCIA_NOREGISTRADO]);
         }

     }
     function DescargaPdf(){


        require_once 'public/fpdf/fpdf.php';


        



 $marcas =$this->model->get();



        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetTitle('Reporte');
        $pdf->SetFont('Courier','',10);
        $pdf->Cell(188,6,utf8_decode('Listado'),1,1,'C');
        $pdf->Ln(3);
        $pdf->Cell(10,5,utf8_decode('No'),1,0,'C');
        $pdf->Cell(35,5,utf8_decode('Descripcion'),1,0,'C');
        $pdf->Cell(35,5,utf8_decode('Descripcion'),1,0,'C');
        $pdf->Cell(35,5,utf8_decode('Descripcion'),1,1,'C');
 
        foreach ($marcas as $row) {
            $marca = new varTodas();
            $marca = $row;
            $pdf->Cell(10,5,utf8_decode($marca->marca_id),1,0,'C');
            $pdf->Cell(35,5,utf8_decode($marca->marca_nombre),1,0,'C');
            $pdf->Cell(35,5,utf8_decode($marca->marca_nombre),1,0,'C');
            $pdf->Cell(35,5,utf8_decode($marca->marca_nombre),1,1,'C');


       
           }


      


        $pdf->Output();

    }
}
