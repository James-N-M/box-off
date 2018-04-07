@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-text text-capitalize">{{ $user->name }}</h5>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    {{$user->avatar }}
                </div>
                <div class="col-md-6">
                    <ul>
                        <li> {{ $user->location->city }}</li>
                        <li> {{ $user->status->title }}</li>
                        <li> {{ $user->club->name }}</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </main>
@endsection