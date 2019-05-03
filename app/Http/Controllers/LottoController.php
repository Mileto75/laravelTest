<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LottoController extends Controller
{
    //
    public function index()
    {
        $vars = array("title" => "Lotto");
        return view('lotto',$vars);
    }
}
