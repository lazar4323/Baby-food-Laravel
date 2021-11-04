<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\HomeChef;
use App\Models\Blog;
use Auth; 
use DB;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $blogs = Blog::all();
        $search = $request->get('search');
        $all_cards = Post::all();
        $all_cards = DB::table('posts')->where('name','like','%'.$search.'%')->paginate(5);
        $chefs = HomeChef::all();
        return view('home.home',compact('all_cards','chefs','blogs'));
    }

    public function addDeposit()
    {
        return view('home.addDeposit');
    }

    public function updateDeposit(Request $request)
    {
        $request->validate([
            'deposit'=>'required'
        ]);
        $user = Auth::user();
        $user->deposit = $user->deposit + $request->deposit;
        $user->save();

        return redirect(route('home'));

    }

    public function deleteCard($id)
    {
        $card = Post::find($id);
        $card->delete();

        return redirect(route('home'));
    }

    public function buyFood($id)
    {
        $user = Auth::user();
        $deposit = $user->deposit;
        
        if($deposit < 0){
            return redirect(route('home'))->with('failed','Dont have enough money');
        }else{
            $user = Auth::user();
            $card = Post::find($id);
            $price = $card->price;
    
            $user->deposit = $user->deposit - $price;
            $user->save();
    
            return redirect(route('home'))->with('completed','Item sold');
        }
    }

}

