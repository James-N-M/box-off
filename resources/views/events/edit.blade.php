@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
    <h2 class="mb-4">Edit Your Event</h2>

    <div class="alert alert-warning">
        <b>Note: </b>
        " Note: All edited submissions must be manually approved before they appear on the site. This can take a few days, please have patience. "
    </div>
    <hr >

    <div class="card">
            <div class="card-header">
                <h5 class="card-text text-capitalize">Event Edit</h5>
            </div>
            <div class="card-body">

               <form action="/events/{{$event->id}}/" method="PUT">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">* Title</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"  rows="5" class="form-control">{{$event->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">* Event Date</label>
                            <input type="text" class="form-control" id="date" name="date" value="{{ $event->date }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}">
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-sm btn-danger" type="submit"><strong>Update</strong></button>
                    @include('partials.errors')
                </form>

            </div>
        </div>
</main>
@endsection