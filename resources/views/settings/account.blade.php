@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-text text-capitalize">Your account</h5>
            </div>
            <div class="card-body">

               <form action="/settings" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">New Password: </label>
                            <input type="password" class="form-control" id="password" name="password" >      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password_confirmation">Password Confirmation: </label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="avatar">Avatar</label>
                            <input id="avatar" type="file" class="form-control" name="avatar">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="about">Something Me</label>
                            <input id="hi" type="textfield" class="form-control" name="hey">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="about">About Me</label>
                            <textarea class="form-control" placeholder="{{Auth::user()->about->body}}" id="about" name="about" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option></option>
                                <option value="1">Boxer</option>
                                <option value="2">Coach</option>
                                <option value="3">Doctor</option>
                                <option value="4">Referee</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="wins">Wins</label>
                            <input class="form-control"type="number" name="wins">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="loss">Loses</label>
                            <input class="form-control"type="number" name="loses">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location">Location</label>
                            <select class="form-control" id="location" name="location">
                                <option value=""></option>
                                @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="club">Club</label>
                            <select class="form-control" id="club" name="club">
                                <option value=""></option>
                                @foreach($clubs as $club)
                                <option value="{{$club->id}}">{{$club->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <hr>
                    <button class="btn btn-sm btn-danger" type="submit"><strong>UPDATE</strong></button>

                    @include('partials.errors')
                </form>

            </div>
        </div>
    </main>
@endsection