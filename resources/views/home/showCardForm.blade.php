@extends('layouts.app')

@section('title')
    Add new card
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Add new card</h1><br>
                <form action="{{ route('home.saveCard') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="number" name="price" placeholder="Food price" class="form-control"><br>
                    <span>Food image</span>
                    <input type="file" name="image1"><br><br><span>Logo-restaurant image</span>
                    <input type="file" name="image2"><br><br>
                    <input type="text" name="name" placeholder="Restaurant name" class="form-control"><br>
                    <input type="text" name="foodname" placeholder="Food category" class="form-control"><br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection 