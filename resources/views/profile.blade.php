@extends('layouts.app')

@section('content')
<div class="container profile">
    <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; border-radius:50%; float:left; margin-right:25px;">
    <h1>{{$user->name}}'s Profile</h1>
    <form action="/profile" method="POST" enctype="multipart/form-data">
    <strong>Update Profile Image</strong> <br>
    <input type="file" name="avatar">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" class="pull-right btn btn-sm btn-primary">
    </form>
</div>
@endsection