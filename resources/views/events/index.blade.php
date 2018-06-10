@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
    <h1>Events</h1>
    <a href="/events/create"><button class="btn btn-success">Create Event</button></a>
    <hr >
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Club</th>
            <th>Doctor</th>
            <th>Referee</th>
            <th>Date</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($events as $event)
                <td>{{ $event->name }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->description }}</td>
                <td>unset</td>
                <td>unset</td>
                <td>unset</td>
                <td>{{ $event-> date }}</td>
                <td>
                    <a href="events/edit/{{$event->id}}"><span class="fa fa-edit"></span></a>
                    <a href=""><span class="fa fa-trash"></span></a>
                    <a href="/events/{{$event->id}}/matches"><span class="fa fa-hand-rock"></span></a>
                </td>
            @endforeach
            
        </tr>
    </tbody>
</table>
</main>
@endsection