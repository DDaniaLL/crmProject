@extends('layouts.app')

@section('title', '- edit: ' . $comment->name)

@section('content')
<h3>editing the comment</h3>
<form action="{{route('posts.comments.update', [$post, $comment])}}" method="POST">

@method('PUT')
    @csrf
        Fullname: <input type="text" name="name">
        <br>
        email: <input type="text" name="email">
        <br>
        content: <input type="text" name="content">
        <br>
        <input type="submit" name="submit">


</form>
@endsection
