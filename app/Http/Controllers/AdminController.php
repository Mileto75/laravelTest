<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        //bouw de variabelen op
        $som = 45+55;
        $naam = "MiKe";
        $vars = array("name" => $naam,"totaal" => $som);
        //toon de admin pagina
        return view("admin",$vars);
    }
    public function createAdmin()
    {

    }
}
