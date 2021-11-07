<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeChef;
use App\Models\BookTable;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = HomeChef::all();
        return view('about.about',compact('chefs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookTable (Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'time'=>'required',
            'size'=>'required',
            'date'=>'required',
            'message'=>'required'
        ]);

        BookTable::create([
            'name'=>$request->name,
            'email'=> $request->email,
            'number'=> $request->number,
            'time'=> $request->time,
            'size'=> $request->size,
            'date'=> $request->date,
            'message'=>$request->message
        ]);

        return redirect(route('about.bookTable'))->with('');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
