@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Event Results') }}</div>
                <input type="hidden" value="{{ $i = 0 }}">
                <div class="card-body">
                <table class="table">
                <tr>
                    <th>Bout #</th>
                    <th>Winner</th>
                    <th>Loser</th>
                </tr>
                <tbody>
                @foreach( $matches as $match)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $match->winner->name }}</td>
                    <td>{{ $match->loser->name }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection