@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="jumbotron" style="text-align: center; border: solid .5px #0000FF;">
            <h1>Box-Off Ontario</h1> 
            <p>Please sign up with your credentials</p> 
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                            <select name="status" id="" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                <option></option>
                                @foreach ($statuses as $status)
                                    <option value={{ $status->id }}>{{ $status->title }}</option>    
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                            <select name="location" id="" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}">
                                <option></option>
                                @foreach ($locations as $location)
                                    <option value={{ $location->id }}>{{ $location->city }}</option>    
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="club" class="col-md-4 col-form-label text-md-right">{{ __('Club') }}</label>

                            <div class="col-md-6">
                            <select name="club" id="" class="form-control{{ $errors->has('club') ? ' is-invalid' : '' }}">
                                <option></option>
                                @foreach ($clubs as $club)
                                    <option value={{ $club->id }}>{{ $club->name }}</option>    
                                @endforeach
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
