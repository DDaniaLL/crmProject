@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>All tags</h3>
    <h6><a href="{{ route('tags.create') }}">Add new tag</a></h6>
    @each('partials.tag ', $tags, 'tag')
@endsection
