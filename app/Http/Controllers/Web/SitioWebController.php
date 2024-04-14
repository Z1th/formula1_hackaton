<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SitioWebController 
{
    public function index(Request $request)
    {
        //Aquí irá las conexiones a APIS para que la web sea dinamica
        return view("web.index");
    }
}

