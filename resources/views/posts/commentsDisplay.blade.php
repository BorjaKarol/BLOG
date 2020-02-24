@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <img id="commentAvatar" src="/uploads/avatars/{{$comment->user->avatar}}">
        <strong>{{ $comment->user->name }}</strong>
        <strong><small>{{$comment->created_at}}</small></strong>
        <p class="ml-4">{{ $comment->body }}</p>
        {{-- <button id="replyBtn">Reply</button> --}}
        @auth
            <form id="replyForm" method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="body" class="form-control" />
                    <input type="hidden" name="post_id" value="{{ $post_id }}"  />
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}"  />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning pull-right" value="Submit" />
                </div>
            </form>
        @endauth
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach