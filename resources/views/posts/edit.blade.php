@extends('layouts.app')

@section('title', '| Edit Post')

@section('content')
    <div class="content-wrapper" style="min-height: 700px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Post</h1>
            <hr>


            <form action="{{ route('posts.update',$posts->id) }}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" class="form-control" id="title" name="title"  value="{{ $posts->title }}">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" >{{ $posts->body }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>


@endsection