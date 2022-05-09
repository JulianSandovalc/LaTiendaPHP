<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Paises', function(){
    $paises =[
        "Rusia"=>[
            "cap" => "Moscu",
            "mon" => "Rublo",
            "pob" => "144,1",
            "pre" => "Vladímir Putin",
            "ciu" => [
                "San Petersburgo",
                "Nizhni Nóvgorod",
                "Novosibirsk"
            ]
        ],
        "Canada"=>[
            "cap" => "Otawa",
            "mon" => "Dólar canadiense",
            "pob" => "38,01",
            "pre" => "Justin Trudeau",
            "ciu" => [
                "Toronto",
                "Vancouver",
                "Montreal"
            ]
        ]
    ];
    return view('Paises')
    ->with('paises' , $paises);

    
});


