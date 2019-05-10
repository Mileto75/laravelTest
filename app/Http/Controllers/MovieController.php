<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MovieController extends Controller
{
    //deze methode laadt de view
    public function newMovie()
    {
        //roept de view op voor ons formulier
        $vars = array('pageTitle' => 'New Movie');

        return view('newMovie',$vars);

    }

    //deze methode handelt de POST af
    public function addMovie(Request $request)
    {
        $filmTitel  = $request->input('title');
        $filmJaar   = $request->input('jaar');
        $this->checkFilms("The godfather");
        //voeg de titel van de film aan de sessie
        Session::put('title',$filmTitel);

        $vars = array('pageTitle' => 'New Movie');

        return view('newMovie',$vars);
    }

    private function checkFilms($titel)
    {
        echo "chek in DB";
        $this->checkJaar("2005");
    }

    private function checkJaar($jaar)
    {
        echo "chek jaar in DB";
    }
}
