@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome To Box-Off {{ Auth::user()->name }} </div>
                <div class="card-body">
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
