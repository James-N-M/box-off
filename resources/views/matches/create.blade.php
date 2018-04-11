@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Past Results Submission') }}</div>

                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                        <div class="form-group row">
                            <label for="event" class="col-md-4 col-form-label">{{ __('Event') }}</label>

                            <div class="col-md-6">
                            <select name="event" id="" class="form-control{{ $errors->has('event') ? ' is-invalid' : '' }}">
                                <option></option>
                                @foreach ($events as $event)
                                    <option value={{ $event->id }}>{{ $event->name }}</option>    
                                @endforeach
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Winner</label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Loser</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="match_one_winner">Match 1</label>
                            <select name="match_one_winner" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="match_one_loser">Match 1</label>
                            <select name="match_one_loser" id="" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="match_one_winner">Match 2</label>
                            <select name="match_two_winner" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="match_two_loser">Match 2</label>
                            <select name="match_two_loser" id="" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="match_one_winner">Match 3</label>
                            <select name="match_three_winner" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="match_three_loser">Match 3</label>
                            <select name="match_three_loser" id="" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="match_one_winner">Match 4</label>
                            <select name="match_four_winner" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="match_one_loser">Match 4</label>
                            <select name="match_four_loser" id="" class="form-control">
                                <option></option>
                                @foreach ($users as $user)
                                    <option value={{ $user->id }}>{{ $user->name }}</option>    
                                @endforeach
                            </select>
                        </div>

                    </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Publish Results
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