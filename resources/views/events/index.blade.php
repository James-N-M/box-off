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
            <th>About</th>
            <th>Club</th>
            <th>Doctor</th>
            <th>Referee</th>
            <th>Date</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <!-- <td>Delete Event</td> -->
        </tr>
    </tbody>
</table>
</main>
@endsection