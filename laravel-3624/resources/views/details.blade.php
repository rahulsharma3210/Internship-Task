@extends('layouts.app')
@section('main-section')

<div class="container" >
    <div class="row  justify-content-center" >
        <div class="col-sm-8 mt-4 ">
            <div class="card p-4 bg-blue-100" style= "border: solid black 5px;">
                <p>Name : <b>{{ $product->name }} </b></p>
                <p>User ID : <b>{{ $product->id }}</b></p>
                <p>Email : <b>{{ $product->email }}</b></p>
                <p>Gender : <b>{{ $product->gender }}</b></p>
                <a class="navbar-brand font-weight-bold" href="/" style="font-size: 38px; margin-left:270px; background-color:blue:"> <button class="btn btn-dark  fs-large" style="width:100px;" >Back</button> </a>
             </div>
        </div>
    </div>
</div>

@endsection