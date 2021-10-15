@extends('layouts.app')

@section('Tagname', '- Create new Tag')

@section('content')
    <h2>Create New tag</h2>
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <label>
            Enter tag
            <input type="text" name="Tagname">
        </label>
        <br>
        <input type="submit" value="tag" name="submit"/>
    </form>
@endsection
