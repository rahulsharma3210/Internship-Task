@extends('layouts.app')
@section('main-section')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card border-primary border-5 mt-3 p-3">
            <form action="/{{$userId}}/storeprojects" method="post">
                @csrf
                <div class="form-group">
                    <h1>New Project</h1>
                    <label>Name </label>
                    <input type="text" name="name" class="form-control" value="{{ old('name')}}">
                    @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                
               
                <div class="form-group">
                    <label>Description </label>
                    <input type="text" name="description" class="form-control" value="{{ old('description')}}">
                    @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
         
                <div class="text-center">
                <button class="btn btn-primary text-mid" type="submit">Submit</button>
                </div>

            </form>
            </div>
        </div>
    </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection