<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Web\FunctionsController;

class SitioWebController 
{
    // public function index(Request $request)
    // {
    //     //Aquí irá las conexiones a APIS para que la web sea dinamica

    //     $url = "http://ergast.com/api/f1/2024/drivers";
    //     $xml = file_get_contents($url); // Obtener el contenido del XML
    //     $xmlObject = simplexml_load_string($xml);
    //     $array = json_decode(json_encode($xmlObject), true); // Convertir el objeto SimpleXMLElement a un array asociativo
    //     $json = json_encode($array, JSON_PRETTY_PRINT);

    //     $Drivers = $array['DriverTable']['Driver'];

    //     return view("web.index", compact(
    //         'Drivers',
    //     ));
    // }

    public $fn;

    public function index(Request $request)
    {   

        $apiKey = env('NEWS_API_KEY');

        $url = "https://newsapi.org/v2/everything?q=formula1&language=es&apiKey=$apiKey";

        $curl = curl_init($url);

        // Establecer el encabezado User-Agent
        $userAgent = 'F1-Hackaton/1.0';
        curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($curl);
        
        $data = json_decode($response, true);

        $articulos = $data['articles'];
        $countArticulos = count($articulos);

        return view("web.index", compact(
           'articulos', 
           'countArticulos',

        ));
    }
}

