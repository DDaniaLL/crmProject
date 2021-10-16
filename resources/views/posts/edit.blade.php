@extends('layouts.app')

@section('title', '- edit: ' . $post->title)

@section('content')
    <h2>Create New post</h2>
    <form action="{{ route('posts.update', $post) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Title
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br>
        <label>
            Content
            <textarea name="content" cols="30" rows="10">{{ $post->content }}</textarea>
        </label>

        <input type="submit" name="edit">
    </form>
@endsection
