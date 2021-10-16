@extends('layouts.app')

@section('title', '- Create new Tag')

@section('content')
    <h2>Create New tag</h2>
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <label>
            Name
            <input type="text" name="name">
        </label>
        <br>


        <input type="submit" name="send">
    </form>
@endsection
