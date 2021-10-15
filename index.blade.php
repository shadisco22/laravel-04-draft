@extends('layouts.app')

@section('Title', '- index page')

@section('content')
    <h3>My Tags</h3>
    <h6><a href="{{ route('tags.create') }}">Add new tag</a></h6>
    @each('partials.tag', $tags, 'tag')
@endsection
