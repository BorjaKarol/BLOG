@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container hl mb-4">
    </div>
    <div class="container" id="latest" data-aos="fade-left" data-aos-delay="300">
        <div class="card bg-dark text-white latest">
            <img class="card-img-cover" src="/storage/cover_images/{{$posts->first()->cover_image}}" alt="Card image">
            <div class="card-img-overlay">
              <h5 class="card-title" id="titleIndex"><a href="/posts/{{$posts->first()->id}}">{{$posts->first()->title}}</a></h5>
              <p class="card-text"><small><img id="showAvatar" src="/uploads/avatars/{{$posts->first()->user->avatar}}"> <strong>{{$posts->first()->user->name}}</strong> / on <strong>{{$posts->first()->created_at->format('m-d-Y')}}</strong></small></p>
            </div>
        </div>
    </div>

    <div class="row d-flex post-index">
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="col-md-1 vl-show" data-aos="fade-up">
            </div>
            <div class="card mb-3 col-md-5" data-aos="fade-up" data-aos-delay="300">
                <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    <p class="card-text"><small><img id="showAvatar" src="/uploads/avatars/{{$post->user->avatar}}"> <strong>{{$post->user->name}}</strong> / on <strong>{{$post->created_at->format('m-d-Y')}}</strong></small></p>
                </div>
            </div>
           <hr>
        @endforeach
        <div class="container d-flex justify-content-center page">
        {{$posts->links()}}
        </div>
    @else
        <p>No Available Post</p>
    @endif
    </div>
</div>
@endsection