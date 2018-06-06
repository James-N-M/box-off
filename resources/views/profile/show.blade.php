@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-text text-capitalize">Profile</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-6" style="text-align:center;">
                        <img class="img-fluid" src="/uploads/avatars/{{$user->avatar}}" style="border-radius: 50%; margin-bottom: 20px; ">
                     </div>
                    <div class="col-md-12 col-lg-6">
                        <h3>About Me</h3>
                            <p class="alert alert-success">{{ $user->about }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <ul class="list-group">
                            <li class="list-group-item">Name: {{ $user->name }} </li>
                            <li class="list-group-item list-group-item-success">Email: {{ $user->email }} </li>
                            <li class="list-group-item list-group-item-info">Type: {{ $user->type }}</li>
                            <li class="list-group-item list-group-item-warning">Location {{ $user->location }}</li> 
                            <li class="list-group-item list-group-item-danger">Club {{ $user->club }}</li> 
                        </ul>
                     </div>
                    <div class="col-md-12 col-lg-6">
                        <ul class="list-group">
                            <li class="list-group-item">Record: Win \ Lose</li>
                            <li class="list-group-item list-group-item-success"></li>
                            <li class="list-group-item list-group-item-danger"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


