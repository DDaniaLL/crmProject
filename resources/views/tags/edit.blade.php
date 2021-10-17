@extends('layouts.app')

@section('title', '- edit: ' . $tag->name)

@section('content')
    <h2>Changing the tag</h2>
    <form action="{{ route('tags.update', $tag) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Name
            <input type="text" name="name" value="{{ $tag->name }}">
        </label>
        <br>
        <label>
            Content
            <textarea name="content" cols="30" rows="10">{{ $tag->content }}</textarea>
        </label>

        <input type="submit" name="edit">
    </form>
@endsection
