@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome To Box-Off {{ Auth::user()->name }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Publish a Post</h1>
                        <hr />
                        <form method="POST" action="/posts">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" >
                            </div>
                            <div class="form-group">
                                <label for="body">Body:</label>
                                <textarea name="body" id="body" class="form-control" ></textarea>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Publish</button>        
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    @foreach($posts as $post)
        @include('partials.post')
    @endforeach
</div>
@endsection
