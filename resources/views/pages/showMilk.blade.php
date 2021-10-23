@php
    use App\Models\Post;
@endphp
@extends('layouts.app')

@section('title')
	Milk page
@endsection

@section('content')
    @if (Post::where('foodname','Milk')->exists())
    @foreach ($all_milk as $milk)
        <div class="card" style="width: 18rem; margin-left: 25px;">
            @if (isset($milk->image1))
                <img src="/card_images/{{ $milk->image1 }}" alt="">
            @endif</a>
            <div class="card-body">
            <h5 class="card-title">{{ $milk->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">{{ $milk->price }} din</a>
            </div>
        </div><br>
        <a href="{{ route('categories') }}" class="btn btn-secondary" style="margin-left: 25px;">Back to categories</a>
    @endforeach
    @else
    Sorry no items right now.
    <a href="{{ route('categories') }}" class="btn btn-secondary" style="margin-left: 25px;">Back to categories</a>
    @endif
@endsection