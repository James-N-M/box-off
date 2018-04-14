<hr />
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{ $comment->body }}
                </div>
                <div class="card-footer text-muted">
                <small class="text-muted">
                    {{ $comment->created_at->diffForHumans() }}<cite title="username"> - {{$comment->user->name}}</cite>
                </small>
                </div>
            </div>
        </div>
    </div>