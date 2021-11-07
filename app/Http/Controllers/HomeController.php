<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\HomeChef;
use App\Models\Blog;
use Auth; 
use DB;

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

    public function showCardForm()
    {   
        return view('home.showCardForm');
    }

    public function saveCard(Request $request)
    {
        $request->validate([
            'price'=>'required',
            'image1'=>'mimes:png,jpg,jpeg',
            'image2'=>'mimes:png,jpg,jpeg',
            'name'=>'required',
            'foodname'=>'required'
        ]);

        if($request->hasFile('image1')){
            $image1 = $request->file('image1');
            $image1_name = time().'1.'.$image1->extension();
            $image1->move(public_path('card_images'),$image1_name);
        }

        if($request->hasFile('image2')){
            $image2 = $request->file('image2');
            $image2_name = time().'2.'.$image2->extension();
            $image2->move(public_path('card_images'),$image2_name);
        }

        Post::create([
            'price'=>$request->price,
            'image1'=> (isset($image1_name)) ? $image1_name : null,
            'image2'=> (isset($image2_name)) ? $image2_name : null,
            'name'=> $request->name,
            'foodname'=>$request->foodname
        ]);

        return redirect(route('home'));
    
    }

    public function deleteCard($id)
    {
        $card = Post::find($id);
        $card->delete();

        return redirect(route('home'));
    }

    public function editCardView($id)
    {
        $card = Post::find($id);
        return view('home.editCardView',compact('card'));
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
    public function chefForm()
    {
        return view('home.chefForm');
    }
    
    public function saveChef(Request $request)
    {
        $request->validate([
            'image1'=>'mimes:png,jpg,jpeg',
            'image2'=>'mimes:png,jpg,jpeg',
            'name'=>'required',
            'position'=>'required'
        ]);

        if($request->hasFile('image1')){
            $image1 = $request->file('image1');
            $image1_name = time().'1.'.$image1->extension();
            $image1->move(public_path('chef_images'),$image1_name);
        }

        if($request->hasFile('image2')){
            $image2 = $request->file('image2');
            $image2_name = time().'2.'.$image2->extension();
            $image2->move(public_path('chef_images'),$image2_name);
        }

        HomeChef::create([
            'image1'=> (isset($image1_name)) ? $image1_name : null,
            'image2'=> (isset($image2_name)) ? $image2_name : null,
            'name'=> $request->name,
            'position'=>$request->position
        ]);

        return redirect(route('home'));
    }

}

