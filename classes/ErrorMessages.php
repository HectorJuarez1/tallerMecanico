<?php

class ErrorMessages{

    const ERROR_NOREGISTRADO    = "1fdce";
    const ERROR_ELIMINAR         = "1fd43";

    private $errorsList = [];

    public function __construct()
    {
        $this->errorsList = [
            ErrorMessages::ERROR_NOREGISTRADO => "Dato no registrado",
            ErrorMessages::ERROR_ELIMINAR => "Dato Eliminado",
        ];
    }

    function get($hash){
        return $this->errorsList[$hash];
    }

    function existsKey($key){
        if(array_key_exists($key, $this->errorsList)){
            return true;
        }else{
            return false;
        }
    }
}
