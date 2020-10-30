<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function contact()
    {
        $people = [

        ];
        return view('contactf', compact('people'));
    }

}
