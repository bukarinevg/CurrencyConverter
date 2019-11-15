
<?php

require_once './vendor/autoload.php';

class App{

}

$RequestData = new api\getData\InfoUserClass();

$CurrencyData =  new api\getData\InfoValute();

//получаем данные
$UserData=$RequestData->getData();
//обрабатываем запрос пользователя
$RequestData->setData($UserData);
$RequestData->Show();
//получаем информацию о курсе на сегодня
$data=$CurrencyData->CBR_XML_Daily_Ru();

//объект для конвертации валюты
$api=new api\change\ChangeClass($data, $RequestData);
//умножние колличества на

$Rubles=$api->ChangeToRubles();
$result=$api->getResult($Rubles);
$val=$RequestData->CurrencySecond;
$DollarPrice=($data->Valute->$val->Value);
$ValuteName=$RequestData->CurrencySecond;

echo "<br />"."Обменный курс ".$ValuteName." по ЦБ РФ на сегодня:$DollarPrice"."<br />";

echo "<br />"."Обменный курс ".$ValuteName." по ЦБ РФ на сегодня:$DollarPrice"."<br />";

//"{]"
