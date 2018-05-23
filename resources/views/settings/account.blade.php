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
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="avatar">Avatar</label>
                            <input id="avatar" type="file" class="form-control" name="avatar">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="about">Profile Photo</label>
                            <input id="hi" type="textfield" class="form-control" name="hey">
                        </div>
                        
                        <about-settings></about-settings>

                        <status-dropdown></status-dropdown>

                        <win-input></win-input>

                        <lose-input></lose-input>

                        <location-dropdown></location-dropdown>

                        <club-dropdown></club-dropdown>
                    </div>

                    <hr>
                    <button class="btn btn-sm btn-danger" type="submit"><strong>UPDATE</strong></button>
                    @include('partials.errors')
                </form>

            </div>
        </div>
    </main>
@endsection