@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Looking for a job?</h1>
            <h3>Please create an account.</h3>
            <img style="height: 100px" width="300px" src="{{asset('image/click.png')}}" alt="">
        </div>



        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register</div>
                <form action="{{route('store.seeker')}}" method="POST">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="name" id="" class="form-control">
                        @if ($errors -> has('name'))
                        <span class="text-danger">{{$errors -> first('name')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                        @if ($errors -> has('email'))
                        <span class="text-danger">  {{$errors -> first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" id="" class="form-control">
                        @if ($errors -> has('password'))
                        <span class="text-danger">{{$errors -> first('password')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button class="btn  btn-primary" type="submit">Register</button>
                    </div>
                </div>
                </form>
            </div>
        </div>


    </div>
</div>

@endsection