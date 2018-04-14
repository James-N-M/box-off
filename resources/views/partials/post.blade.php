<hr />
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post->title }} </div>

                <div class="card-body">
                    {{ $post->body }}
                    <br />
                    <a href="/post/{{$post->id}}" style="text-decoration: none; color:red; "><i class="far fa-comments"></i> {{ $post->comments->count() }} </a>
                </div>
                <div class="card-footer text-muted">
                <small class="text-muted">
                    {{ $post->created_at->diffForHumans() }}<cite title="username">- {{$post->user->name}}</cite>
                </small>
                </div>
            </div>
        </div>
    </div>