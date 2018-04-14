@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                <form method="POST" action="/comment">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <p>{{ $post->body }}</p>
                            </div>
                        </div>
                        
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">    
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="comment" placeholder="add comment"required autofocus>
                                <br />
                                <button type="submit" class="btn btn-primary">
                                    Comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr/>
            <h1>Comments</h1>
                @foreach($comments as $comment)
                    @include('partials.comment')
                @endforeach
        </div>
    </div>
</div>
@endsection
