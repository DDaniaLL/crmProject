@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>{{ $post->title }}</h3>
    <h4>Category: {{ $post->category->name }}</h4>
    <br>

    {{-- <h4>Tags: {{ $post->tags()->get()}}</h4> --}}
    <h6><a href="{{ route('posts.edit', $post) }}">edit</a></h6>
    <h6>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </h6>
    <p>
        posts content: {{ $post->content }}
    </p>

    <p>
        post comments:
        <ul>
        @foreach ($post->comments as $comment)

            <li>{{$comment->name}}</li>
            <li>{{$comment->email}}</li>
            <li>{{$comment->content}}</li>


            <a href="{{ route('posts.comments.edit', [$post,$comment])}}">edit the comment</a>



            <form action="{{route('posts.comments.destroy', [$post,$comment])}}", method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
            </form>
            <hr>

        @endforeach
    </ul>
    </p>

    <form action="{{ route('posts.comments.store', $post) }}" method="POST">
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
