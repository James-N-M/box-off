<hr />
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post->title }} </div>

                <div class="card-body">
                    {{ $post->body }}
                </div>
                <div class="card-footer text-muted">
                <small class="text-muted">
                    {{ $post->created_at->diffForHumans() }}<cite title="username">- {{$post->user->name}}</cite>
                </small>
                </div>
            </div>
        </div>
    </div>