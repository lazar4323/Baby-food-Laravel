<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ShopController extends Controller
{
    public function index()
    {
        $cards = Post::all();
        return view('shop.shop',compact('cards'));
    }
}
