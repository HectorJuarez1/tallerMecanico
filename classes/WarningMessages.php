<?php
class WarningMessages
{
    const ADVERTENCIA_NOREGISTRADO = '82c41';

    private $WarningList = [];

    public function __construct()
    {
        $this->WarningList = [
            
            WarningMessages::ADVERTENCIA_NOREGISTRADO => 'Dato No Registro Ingresado.',
        ];
    }

    function get($hash)
    {
        return $this->WarningList[$hash];
    }

    function existsKey($key)
    {
        if (array_key_exists($key, $this->WarningList)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
