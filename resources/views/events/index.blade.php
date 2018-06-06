@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-text text-capitalize">Your Account</h5>
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
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">      
                        </div>
                        <div class="form-group col-md-6">
                        <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                            <option value="{{ old('type', Auth::user()->type) }}">{{ old('type', Auth::user()->type) }}</option>
                                <option value="boxer">Boxer</option>
                                <option value="coach">Coach</option>
                                <option value="referee">Referee</option>
                                <option value="doctor">Doctor</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="location">Location</label>
                            <select name="location" id="location" class="form-control">
                            <option value="{{ old('location', Auth::user()->location) }}">{{ old('location', Auth::user()->location) }}</option>
                                <option value="Windsor">Windsor</option>
                                <option value="London">London</option>
                                <option value="Toronto">Toronto</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="location">Club</label>
                            <select name="club" id="club" class="form-control">
                            <option value="{{ old('club', Auth::user()->club) }}">{{ old('club', Auth::user()->club) }}</option>
                                <option value="Windsor Amateur">Windsor Amateur</option>
                                <option value="Rough Boxing">Rough Boxing</option>
                                <option value="Border City Boxing">Border City Boxing</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="location">About</label>
                            <textarea class="form-control" name="about" id="about" rows="10" 
                            value="{{ old('about', Auth::user()->about) }}"
                            >{{ old('club', Auth::user()->about) }}</textarea>
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