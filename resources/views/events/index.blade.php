@extends('layouts.app')



@section('content')
    @include('events.crud')
    
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Event Name</th>
                    <th>Event Location</th>
                    <th>Event Referee</th>
                    <th>Event Doctor</th>
                    <th>Event Date</th>
                </tr>
                <tbody>
                @foreach( $events as $event)
                <tr>
                    <td> {{ $event->id }} </td>
                    <td> {{ $event->name }} </td>
                    <td> {{ $event->location->city }} </td>
                    <td> {{ $event->referee->name }} </td>
                    <td> {{ $event->doctor->name }} </td>
                    <td> {{ $event->date }} </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection