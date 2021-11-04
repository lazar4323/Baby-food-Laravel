<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class RecipeController extends Controller
{
    public function index($id)
    {
        $card = Post::find($id);
        $cat = Post::all();
        return view('recipes.singleRecipe',compact('card','cat'));
    }
}
