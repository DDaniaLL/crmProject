@extends('layouts.app')

@section('title', '- Create new Post')

@section('content')
    <h2>Create New Category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label>
            Name
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Content
            <textarea name="content" cols="30" rows="10"></textarea>
        </label>

        <input type="submit" name="send">
    </form>
@endsection
