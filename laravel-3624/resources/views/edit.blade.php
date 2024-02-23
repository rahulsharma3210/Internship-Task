@extends('layouts.app')
@section('main-section')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 ">
            <div class="card border-success border-5 mt-3 p-3">
                <h3> Edit Details Of {{ $user->name }} </h3>
                <form action="/{{ $user->id}}/update" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label> <b> Name</b> </label>
                        <input type="text" name="name" class="form-control" value="{{ old('name',$user->name)}}">
                        @if($errors->has('firstname'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label><b> Email </b></label>
                        <input type="text" name="email" class="form-control" value="{{ old('email',$user->email)}}">
                        @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>
                            <b> Gender </b> </label>
                        <input type="text" name="gender" class="form-control" value="{{ old('gender',$user->gender)}}">
                        @if($errors->has('gender'))
                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                        @endif
                    </div>

                    <!-- <div class="text-center">
                        <button class="btn btn-success btn-sm" style="width:70px;" type="submit">Save</button>
                        <a class="navbar-brand font-weight-bold" href="/">
                            <button class="btn btn-danger btn-sm fs-large">Back</button>
                        </a>
                    </div> -->
                    <div class="container mt-3">
                        <div class="row d-flex">
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm" style="width:70px;" type="submit">Save</button>

                            </div>

                            <div class="col-sm-6 text-left">
                                <a class="navbar-brand font-weight-bold" href="/">
                                    <button class="btn btn-danger btn-sm fs-large">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection