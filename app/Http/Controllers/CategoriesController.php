<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoriesController extends Controller
{
    public function index()
    {
        $cards = Post::all();
        return view('pages.categories',compact('cards'));
    }

    public function showBurgers()
    {
        $burgers = Post::where('foodname','Burger')->get();
        return view('pages.showBurgers',compact('burgers'));
    }

    public function showPorridge()
    {
        $porridges = Post::where('foodname','Porridge')->get();
        return view('pages.showPorridges',compact('porridges'));
    }

    public function showMilk()
    {
        $all_milk = Post::where('foodname','Milk')->get();
        return view('pages.showMilk',compact('all_milk'));
    }

    public function showChocolate()
    {
        $chocolates = Post::where('foodname','Chocolate')->get();
        return view('pages.showChocolate',compact('chocolates'));
    }
}
