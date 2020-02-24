@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>
    <form method="post" action="{{ route('posts.store') }}">
        <div class="form-group">
            @csrf            
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="article-ckeditor" class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection