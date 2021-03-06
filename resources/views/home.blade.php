@extends('layouts.app')

@section('content')
<div class="container home">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-light float-right">Create Post</a>
                    <h3>Your Post</h3>
                    @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td><img src="/storage/cover_images/{{$post->cover_image}}" style="width:50px"></td>
                            <td>{{$post->title}}</td>
                            <!-- edit button -->
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td><form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <!-- delete button -->
                                <button type="submit" class="btn btn-default float-right">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <a>You have no post</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
