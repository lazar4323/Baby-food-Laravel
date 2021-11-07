<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;


class FoodMenuController extends Controller
{
    public function index()
    {
        $cards = Post::all();
        return view('pages.category',compact('cards'));
    }

    public function buyFood($id)
    {
        if(Auth::user()->deposit < 0){
            return redirect(route('category'))->with('failed','Dont have enough money');
        }else{
            $user = Auth::user();
            $card = Post::find($id);
            $price = $card->price;
    
            $user->deposit = $user->deposit - $price;
            $user->save();
    
            return redirect(route('category'))->with('completed','Item sold');
        }
    }
}
