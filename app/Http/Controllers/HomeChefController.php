<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeChef;
use App\Models\Post;

class HomeChefController extends Controller
{
    public function index()
    {
        $chefs = HomeChef::all();
        return view('chefs.allChefs',compact('chefs'));
    }

    public function chefSingle()
    {
        return view('chefs.showChef');
    }

    public function showChef($id)
    {
        $chef = HomeChef::find($id);
        $cat = Post::all();
        $cards = Post::all();
        return view('chefs.showChef',compact('chef','cat','cards'));
    }

    public function contactChef(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'number'=>'required'
        ]);

        ContactChef::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number
        ]);

        return redirect(route('allChefs.contactChef'))->with('finished','Check email for 2 days.');

    }

}


