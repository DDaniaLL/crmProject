@extends('layouts.app')

@section('title', '- edit: ' . $category->name)

@section('content')
    <h2>Changing the category</h2>
    <form action="{{ route('categories.update', $category) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Name
            <input type="text" name="name" value="{{ $category->name }}">
        </label>
        <br>
        <label>
            Content
            <textarea name="content" cols="30" rows="10">{{ $category->content }}</textarea>
        </label>

        <input type="submit" name="edit">
    </form>
@endsection
