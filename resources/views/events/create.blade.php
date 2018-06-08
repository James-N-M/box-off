@extends('layouts.app')

@section('content')
<main class="col-md-8 offset-md-2 my-3 p-3">
    <h2 class="mb-4">Add Your Event</h2>

    <div class="alert alert-warning">
        <b>Note: </b>
        " Note: All submissions must be manually approved before they appear on the site. This can take a few days, please have patience. "
    </div>
    <hr >

    <div class="card">
            <div class="card-header">
                <h5 class="card-text text-capitalize">Event Creation</h5>
            </div>
            <div class="card-body">

               <form action="/events/store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">* Title</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter a name for your event">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"  rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">* Event Date</label>
                            <input type="text" class="form-control" id="date" name="date" placeholder="{{ now()->toDateString() }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Kronk Boxing Community Center, 9520 Mettetal St, Detroit, MI 48227, USA">
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-sm btn-danger" type="submit"><strong>Create</strong></button>
                    @include('partials.errors')
                </form>

            </div>
        </div>
</main>
@endsection