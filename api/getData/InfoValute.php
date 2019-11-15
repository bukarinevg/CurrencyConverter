<?php
namespace api\getData;

class InfoValute
{
    public $Array;

    public function CBR_XML_Daily_Ru()
    {
        $json_daily_file = __DIR__.'/daily.json';
        if (!is_file($json_daily_file)) {
            if (filemtime($json_daily_file) < time() - 3600) {
                if ($json_daily = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js')) {
                    file_put_contents($json_daily_file, $json_daily);
                }
            }
        }
        $data=json_decode(file_get_contents($json_daily_file));
        return $data;
    }



}