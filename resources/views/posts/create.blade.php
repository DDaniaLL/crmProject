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

        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <select name="tags[]" multiple>
            @foreach ($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>

        <br>
        <label>
            <p>Content:</p>
            <textarea name="content" cols="30" rows="10"></textarea>
        </label>
        <br>

        <input type="submit" name="send">
    </form>





@endsection
