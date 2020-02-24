@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a class="fa fa-arrow-left"></a><a href="/posts" class="btn btn-default">Go Back</a>
        <h1 id="showTitle">{{$post->title}}</h1>
            <div class="text-center">
                <div class="showInfo">
                    Posted at {{$post->created_at->format('m-d-Y')}}
                </div><hr>
                <div>
                    <img id="showImg" class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
            </div>
    <div id="showBody" class="container-fluid d-flex">
        <div class="col-md-3">
            <div id="box" class="d-flex row">
                <div class="mr-2">
                    <img id="showAvatar" src="/uploads/avatars/{{$post->user->avatar}}">
                </div>
                <div >
                    Posted By <strong>{{$post->user->name}}</strong> <br> on <strong>{{$post->created_at->format('m-d-Y')}}</strong>
                </div>
            </div><br>
            <div class="row d-flex justify-content-around" id="box">
                <i class="fa fa-facebook-official" style="font-size:48px;color:blue"></i>
                <i class="fa fa-twitter" style="font-size:48px;color:skyblue"></i>
                <i class="fa fa-google-plus" style="font-size:48px;color:red"></i>
            </div><br>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-8">
            {!!$post->body!!}
            <h4>Share</h4>
            <div class="d-flex justify-content-around" id="box">
                <i class="fa fa-facebook-official" style="font-size:48px;color:blue"></i>
                <i class="fa fa-twitter" style="font-size:48px;color:skyblue"></i>
                <i class="fa fa-google-plus" style="font-size:48px;color:red"></i>
            </div><br>
            <h4>Comments</h4>
            <div id="box">
                <div class="mb-5">
                    @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                </div><br>
                @auth<hr/>
                <h4>Add comment</h4>
                <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="body"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit" />
                    </div>
                </form>
                @endauth
            </div>
        </div>
    </div>
    
    @auth
        @if (Auth::user()->id == $post->user_id)
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <!-- edit button -->
                <a class="fa fa-edit"></a><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                <!-- delete button -->
               <a><button type="submit" class="btn btn-default float-right fa fa-trash">Delete</button></a>
            </form>
        @endif
    @endauth
</div>


@endsection