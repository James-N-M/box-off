@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-text text-capitalize">Profile</h5>
            </div>
            <div class="card-body">
                <div class="row col-md-12">
                    <div class="col-md-6">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="border-radius: 50%; margin-bottom: 20px;">
                     </div>
                    <div class="col-md-6">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 
                        1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item" >Name: {{ $user->name }} </li>
                            <li class="list-group-item list-group-item-success">Email: {{ $user->email }} </li>
                            <li class="list-group-item list-group-item-info">Status: {{ $user->status->title }} </li>
                            <li class="list-group-item list-group-item-warning">Location: {{ $user->location->city }} </li>
                            <li class="list-group-item list-group-item-danger">Club: {{ $user->club->name }} </li>
                        </ul>
                     </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item" >Record: Win \ Lose</li>
                            <li class="list-group-item list-group-item-success">Wins: {{ Auth::user()->record->wins }}  </li>
                            <li class="list-group-item list-group-item-danger">Loses: {{ Auth::user()->record->loses }} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
@endsection




