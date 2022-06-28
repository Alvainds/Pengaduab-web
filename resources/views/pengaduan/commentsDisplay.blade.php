@foreach($comments as $comment)
<div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <div class="chat-content d-inline-block">
        <h5 class="text-muted"><i class="bi bi-circle-fill text-info mx-1"></i> {{ $comment->user->name }}</h5>
        <div class="box mb-2 d-inline-block text-dark rounded p-2 bg-light-info">{{ $comment->comment }}</div>
        <div class="row">
            <div class="col">
                <h6><span></span>  {{ $comment->created_at->diffForHumans();
                    }}</h6>

            </div>
        </div>


    </div>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('comment') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" class="form-control" />
            <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}" />
            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </form>
    @include('pengaduan.commentsDisplay', ['comments' => $comment->replies])
</div>
@endforeach
