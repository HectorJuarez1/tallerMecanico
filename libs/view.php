<?php
class  View{

    function __construct()
    {
    }
    
    function render($nombre, $data = []){
        $this->d = $data;
        $this->handleMessages();
        require 'views/' . $nombre . '.php';
    }
    
    private function handleMessages(){
        if(isset($_GET['success']) && isset($_GET['error'])&& isset($_GET['warning'])){
            // no se muestra nada porque no puede haber un error y success al mismo tiempo
        }else if(isset($_GET['success'])){
            $this->handleSuccess();
        }else if(isset($_GET['error'])){
            $this->handleError();
        }
        else if(isset($_GET['warning'])){
            $this->handleWarning();
        }
    }

    private function handleError(){
        if(isset($_GET['error'])){
            $hash = $_GET['error'];
            $errors = new ErrorMessages();
            if($errors->existsKey($hash)){
                $this->d['error'] = $errors->get($hash);
            }else{
                $this->d['error'] = NULL;
            }
        }
    }


    private function handleSuccess(){
        if(isset($_GET['success'])){
            $hash = $_GET['success'];
            $success = new SuccessMessages();
            if($success->existsKey($hash)){
                $this->d['success'] = $success->get($hash);
            }else{
                $this->d['success'] = NULL;
            }
        }
    }
    private function handleWarning(){
        if(isset($_GET['warning'])){
            $hash = $_GET['warning'];
            $warning = new WarningMessages();
            if($warning->existsKey($hash)){
                $this->d['warning'] = $warning->get($hash);
            }else{
                $this->d['warning'] = NULL;
            }
        }
    }

    public function showMessages(){
        $this->showError();
        $this->showSuccess();
        $this->showWarning();
    }

    public function showError(){
        if(array_key_exists('error', $this->d)){
            echo '
            <div class="col-lg-10">
            <div class="alert alert-danger alert-dismissible">
             ' . ' <b> ' . $this->d['error']. ' </b> ' . '   
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div></div>
            ';
        }
    }

    public function showSuccess(){
        if(array_key_exists('success', $this->d)){
            echo '
            <div class="col-lg-10">
            <div class="alert alert-success alert-dismissible">
             ' . ' <b> ' . $this->d['success']. ' </b> ' . '   
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div></div>
            ';
        }
    }
    public function showWarning(){
        if(array_key_exists('warning', $this->d)){
            echo '
            <div class="col-lg-10">
            <div class="alert alert-warning alert-dismissible">
             ' . ' <b> ' . $this->d['warning']. ' </b> ' . '   
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div></div>
            ';
        }
    }

}

?>