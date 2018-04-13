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
                        <img src="/uploads/avatars/default.jpg" style="border-radius: 50%; margin-top:5px;">
                     </div>
                    <div class="col-md-6">
                        <p> Simple Description of user</p>
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
                        Record<br />
                        Wins {{ Auth::user()->record->wins }} 
                        Loses {{ Auth::user()->record->loses }}
                        <input type="hidden" id="wins" value="{{ Auth::user()->record->wins }} ">
                        <input type="hidden" id="loses" value="{{ Auth::user()->record->loses }} ">
                        <div id="piechart"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


