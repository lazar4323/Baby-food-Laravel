@extends('layouts.app')

@section('title')
    New chef
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Add chef</h1><br>
                <form action="{{ route('home.saveChef') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image1"><br><br>
                    <input type="file" name="image2"><br><br>
                    <input type="text" name="name" placeholder="name" class="form-control"><br>
                    <input type="text" name="position" placeholder="Position" class="form-control"><br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection 