@extends('layouts.app')

@section('title')
    Add deposit
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Add deposit</h1><br>
                <form action="{{ route('home.addDeposit') }}" method="POST">
                    @csrf
                    <input type="number" name="deposit" placeholder="Add deposit" class="form-control"><br>
                    <button type="submit" class="btn btn-primary">Add deposit</button>
                </form>
            </div>
        </div>
    </div>
@endsection 