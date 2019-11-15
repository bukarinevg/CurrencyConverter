<?php

namespace api\change;

class ChangeClass
{
    public $valute;
    public $info;
    public $price;
    public $name;

    public function __construct($valute, $info)

    {

        $this->valute=$valute;
        $this->info=$info;

    }

    public function ChangeToRubles()

    {
        $val=$this->info->CurrencyFirst;

        echo 'sda'.$val;
        $Quantity=$this->info->Quantity;
        echo $Quantity."s";
        $ValRuble=$this->valute->Valute->$val->Value;
        echo $ValRuble;
        $PriceInRuble=$Quantity*$ValRuble;
        echo '__'.$PriceInRuble."!";
        return $PriceInRuble;


    }

    public function getResult($Rubles)
    {
        $val=$this->info->CurrencySecond;
        $ValChangeTo=$this->valute->Valute->$val->Value;
        echo 'sda'.$val;
        $Result=$Rubles/$ValChangeTo;
        echo "=".$Result;
    }

}