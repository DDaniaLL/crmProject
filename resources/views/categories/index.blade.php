@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>All categories</h3>
    <h6><a href="{{ route('categories.create') }}">Add new category</a></h6>
    @each('partials.category', $categories, 'category')
@endsection
