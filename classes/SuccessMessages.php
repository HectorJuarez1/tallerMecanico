<?php
class SuccessMessages
{
    const SUCCESS_CONFIRMATION = '8281e';

    private $successList = [];

    public function __construct()
    {
        $this->successList = [
            SuccessMessages::SUCCESS_CONFIRMATION => 'Registro Ingresado.',
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
