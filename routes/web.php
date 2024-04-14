<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SitioWebController; //Le indicamos que usaremos SitioWebController

// Route::get('/', function () {  return view('welcome'); });

Route::get('/',  [SitioWebController::class, 'index'] );
