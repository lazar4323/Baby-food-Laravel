<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeChef;

class HomeChefController extends Controller
{
    public function index()
    {
        $chefs = HomeChef::all();
        return view('chefs.allChefs',compact('chefs'));
    }

    public function chefSingle()
    {
        return view('chefs.chefSingle');
    }
}
