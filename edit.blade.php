@extends('layouts.app')

@section('Tagname', '- edit: ' . $tag->name)

@section('content')
    <h2>Create New tag</h2>
    <form action="{{ route('tags.update', $tag) }}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Enter Tag
            <input type="text" name="Tagname" value="{{ $tag->name }}">
        </label>
    </form>
@endsection
