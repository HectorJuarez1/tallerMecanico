<?php
class Main extends Controller{

    function __construct(){
        parent::__construct();
    }
    function render(){
        $Rcotizadas =$this->model->get();
        $this->view->varTodas=$Rcotizadas;
        $this->view->render('main/index');
    }


}

?>