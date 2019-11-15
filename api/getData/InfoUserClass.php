<?php

namespace api\getData;

class InfoUserClass
{
    public $CurrencyFirst;
    public $CurrencySecond;
    public $Quantity;


    public function getData()
    {
       return (json_decode(file_get_contents('php://input'), true));

    }

    public function setData($data)
    {
        $this->CurrencyFirst=$data['from'];
        $this->CurrencySecond=$data['to'];
        $this->Quantity=$data["quantity"];
    }

    public function Show()
    {
        echo $this->Quantity;

    }
}