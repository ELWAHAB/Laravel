<?php
namespace app\MyModels;

class Admin
{
    private $massuv;

    public function createArray()
    {
        for ($i = 0; $i<5; $i++)
        {
            $this->massuv[$i] =  $i;
        }
    }

    public function addToBD()
    {
        $this->createArray();
        return $this->massuv;
    }

}

?>