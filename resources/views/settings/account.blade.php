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
                            <select name="" id="" class="form-control">
                            <option value="">Windsor</option>
                            <option value="">Toronto</option>
                            <option value="">OrangeVille</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="club">Club</label>
                            <input id="club" class="form-control" name="club">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="about">About</label>
                            <input id="about" class="form-control" name="avatar">
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