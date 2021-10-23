@extends('layouts.app')

@section('title')
    Edit card
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Edit card</h1><br>
                <form action="{{ route('home.updateCard',['id'=>$card->id])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="number" name="price" value="{{ $card->price }}" class="form-control"><br>
                    <input type="file" name="image1"><br><br>
                    <img src="/card_images/{{ $card->image1 }}"><br>
                    <input type="file" name="image2" class="mt-4"><br><br>
                    <img src="/card_images/{{ $card->image2 }}"><br><br>
                    <input type="text" name="name" value="{{ $card->name }}" class="form-control"><br>
                    <input type="text" name="foodname" value="{{ $card->foodname }}" class="form-control"><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection 

