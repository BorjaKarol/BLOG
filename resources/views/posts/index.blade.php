@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card p-3 mt-3 mb-3">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Postted By <strong>{{$post->user->name}}</strong> on <strong>{{$post->created_at}}</strong></small>
            </div>
        @endforeach
        {{-- {{$posts->links()}} --}}
    @else
        <p>No Available Post</p>
    @endif
</div>
@endsection