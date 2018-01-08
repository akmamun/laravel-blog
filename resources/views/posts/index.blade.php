@extends('layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 700px;">
        <div class="row">
            @if(auth()->check())
            <div class="col-md-10 col-md-offset-1">
                    <div class="panel-heading"><h3>Posts</h3></div>
                    @foreach ($posts as $post)
                          <a href="{{ route('posts.show', $post->id ) }}"><h1> {{ $post->title }}</h1></a>
                    @endforeach
            @else
                <div class="panel-body col-md-10 col-md-offset-1">
                    <h2>You Need to Administration Login to See Post</h2>
                </div>
            @endif
            </div>
            </div>
        </div>
    </div>
@endsection