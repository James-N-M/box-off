@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Event') }}</div>

                <div class="card-body">
                    <form method="POST">
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
                            <label for="doctor" class="col-md-4 col-form-label text-md-right">{{ __('Doctor') }}</label>

                            <div class="col-md-6">
                            <select name="doctor" id="" class="form-control{{ $errors->has('doctor') ? ' is-invalid' : '' }}">
                                <option></option>
                                @foreach ($doctors as $doctor)
                                    <option value={{ $doctor->id }}>{{ $doctor->name }}</option>    
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="referee" class="col-md-4 col-form-label text-md-right">{{ __('Referee') }}</label>

                            <div class="col-md-6">
                            <select name="referee" id="" class="form-control{{ $errors->has('referee') ? ' is-invalid' : '' }}">
                                <option></option>
                                @foreach ($referees as $referee)
                                    <option value={{ $referee->id }}>{{ $referee->name }}</option>    
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input name="date" type="text" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"  value="{{ old('date') }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Event 
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
