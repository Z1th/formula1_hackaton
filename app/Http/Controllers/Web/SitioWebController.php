<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SitioWebController 
{
    public function index(Request $request)
    {
        //Aquí irá las conexiones a APIS para que la web sea dinamica

        $url = "http://ergast.com/api/f1/2024/drivers";
        $xml = file_get_contents($url); // Obtener el contenido del XML
        $xmlObject = simplexml_load_string($xml);
        $array = json_decode(json_encode($xmlObject), true); // Convertir el objeto SimpleXMLElement a un array asociativo
        $json = json_encode($array, JSON_PRETTY_PRINT);

        $Drivers = $array['DriverTable']['Driver'];

        return view("web.index", compact(
            'Drivers',
        ));
    }
}

