@php
    use App\Models\Post;
@endphp

@extends('layouts.app')

@section('title')
	Burgers page
@endsection

@section('content')
    @if (Post::where('foodname','Burgers')->exists())
    @foreach ($burgers as $burger)
        <div class="card" style="width: 18rem; margin-left: 25px;">
            @if (isset($burger->image1))
                <img src="/card_images/{{ $burger->image1 }}" alt="">
            @endif</a>
            <div class="card-body">
            <h5 class="card-title">{{ $burger->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">{{ $burger->price }} din</a>
            </div>
        </div><br>
        <a href="{{ route('categories') }}" class="btn btn-secondary" style="margin-left: 25px;">Back to categories</a>
    @endforeach
    @else
    Sorry no items right now.
    <a href="{{ route('categories') }}" class="btn btn-secondary" style="margin-left: 25px;">Back to categories</a>
    @endif
@endsection