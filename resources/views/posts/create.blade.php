@extends('layouts.app')

@section('title', '- Create new Post')

@section('content')
    <h2>Create New post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
           <p>Title:</p>
            <input type="text" name="title">
        </label>
        <br>
        <label>
            <p>Content:</p>
            <textarea name="content" cols="30" rows="10"></textarea>
        </label>
        <br>

        <input type="submit" name="send">
    </form>
@endsection
