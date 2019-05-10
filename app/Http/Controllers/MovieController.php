<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        echo $filmTitel  = $request->input('title');
        echo $filmJaar   = $request->input('jaar');
        $this->checkFilms("The godfather");
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
