@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <small>Written on <strong>{{$post->created_at}}</strong> by <strong>{{$post->user->name}}</strong></small>
    <hr>
    @auth
        @if (Auth::user()->id == $post->user_id)
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <!-- edit button -->
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                <!-- delete button -->
                <button type="submit" class="btn btn-default float-right">Delete</button>
            </form>
        @endif
    @endauth
</div>
@endsection