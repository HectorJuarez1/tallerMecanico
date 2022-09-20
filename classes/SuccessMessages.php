<?php
class SuccessMessages
{
    const SUCCESS_CONFIRMATION = '8281e';
    const SUCCESS_CONFIRMATION_ACT= '82c41';

    private $successList = [];

    public function __construct()
    {
        $this->successList = [
            SuccessMessages::SUCCESS_CONFIRMATION => 'Registro Ingresado.',
            SuccessMessages::SUCCESS_CONFIRMATION_ACT => 'Datos Actualizados Correcta Mente.',
        ];
    }

    function get($hash)
    {
        return $this->successList[$hash];
    }

    function existsKey($key)
    {
        if (array_key_exists($key, $this->successList)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
