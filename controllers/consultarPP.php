<?php
class consultarPP extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $varTodas = $this->model->get();
        $this->view->varTodas = $varTodas;
        $this->view->render('consultarPP/index');
    }

    
    function verMarca($param = null){
        $idMarca = $param[0];
        $varTodas = $this->model->getById($idMarca);
        $this->view->varTodas = $varTodas;
        $this->view->render('consultarPP/index');
    }

    function DescargaPdf()
    {
        session_start();
        $datos[0] = $_SESSION['Num_Pedido'];
        require_once 'public/fpdf/fpdf.php';
        $marcas = $this->model->getById($datos[0]);
        $CotizacionC = $this->model->getCotizacionC();
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetTitle('Reporte');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Image('public/img/logo2.jpg', 10, 8, 38);
        foreach ($CotizacionC as $row) {
            $marca = new varTodas();
            $marca = $row;
            $dats[0] = $marca->cotizacion_fecha;
            $dats[1] = $marca->nombre_cliente;
            $dats[2] = $marca->numero_telefono;
            $dats[3] = $marca->correo_electronico;
            $dats[4] = $marca->num_pedido;
        }

        $pdf->SetXY(30, 15);
        $pdf->Cell(0, 0, utf8_decode('TALLER MOTOR KING'), 0, 0, 'C');
        $pdf->SetXY(28, 25);
        $pdf->Cell(0, 0, utf8_decode('COTIZACION DE REFACCIONES'), 0, 0, 'C');
        $pdf->Ln(10);
        $pdf->SetXY(10, 31);
        $pdf->Cell(0, 0, utf8_decode('Folio :'), 0, 0, 'C');
        $pdf->SetXY(113, 31);
        $pdf->Cell(10, 0, utf8_decode($dats[4]), 0, 0, 'C');
        $pdf->SetXY(50, 35);
        $pdf->Cell(30, 8, utf8_decode('Fecha :'), 0, 0, 'C');
        $pdf->Cell(10, 8, utf8_decode($dats[0]), 0, 0, 'C', 0);
        $pdf->Cell(60, 8, utf8_decode('Nombre Cliente :'), 0, 0, 'C');
        $pdf->Cell(5, 8, utf8_decode($dats[1]), 0, 0, 'C');
        $pdf->SetXY(50, 45);
        $pdf->Cell(45, 7, utf8_decode('Num Telefono :'), 0, 0, 'C');
        $pdf->Cell(10, 7, utf8_decode($dats[2]), 0, 1, 'C');
        $pdf->SetXY(110, 45);
        $pdf->Cell(40, 7, utf8_decode('Correo :'), 0, 0, 'C');
        $pdf->Cell(45, 7, utf8_decode($dats[3]), 0, 1, 'C');
        $pdf->Ln(8);
        $pdf->Cell(188, 6, utf8_decode('Detalle'), 1, 1, 'C');
        $pdf->Ln(3);
        $pdf->Cell(70, 7, utf8_decode('Refaccion'), 1, 0, 'C');
        $pdf->Cell(30, 7, utf8_decode('Cantidad'), 1, 0, 'C');
        $pdf->Cell(28, 7, utf8_decode('Precio'), 1, 0, 'C');
        $pdf->Cell(30, 7, utf8_decode('Mano de Obra'), 1, 0, 'C');
        $pdf->Cell(30, 7, utf8_decode('Total'), 1, 1, 'C');

        foreach ($marcas as $row) {
            $marca = new varTodas();
            $marca = $row;
            $pdf->Cell(70, 7, utf8_decode($marca->vw_refaccion_nombre), 1, 0, 'C');
            $pdf->Cell(30, 7, utf8_decode($marca->vw_cantidad), 1, 0, 'C');
            $pdf->Cell(28, 7, utf8_decode($marca->vw_precio), 1, 0, 'C');
            $pdf->Cell(30, 7, utf8_decode($marca->vw_mano_obra), 1, 0, 'C');
            $pdf->Cell(30, 7, utf8_decode($marca->vw_totalParcial), 1, 1, 'C');
        }
        $pdf->Close();
        $pdf->Output('I','Cotizacion');
    }
}
