@extends('layouts.app')
@section('title', '| View Post')
@section('content')
<div class="container" style="min-height: 700px;">
    <h1>{{ $posts->title }}</h1>
    <hr>
    <p>{{ $posts->body }} </p>
    <button><a href="{{ route('posts.edit', $posts->id) }}">Edit</a></button>
    <button><a href="{{ route('posts.destroy', $posts->id) }}">Delete</a></button>
</div>
@endsection