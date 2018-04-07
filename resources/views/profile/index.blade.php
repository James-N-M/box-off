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
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="border-radius: 50%; margin-top:5px;">
                     </div>
                    <div class="col-md-6">
                        <p>hello </p>
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <ul>
                            <li>Name: </li>
                            <li>Age: </li>
                            <li>Club: </li>
                            <li>Record: </li>
                        </ul>
                     </div>
                    <div class="col-md-6">
                        <p>simple write up </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection