@extends('layouts.app')
@section('title', '| Create New Post')
@section('content')
        <section class="content">
            <div class="col-lg-6 col-lg-offset-2">
                <h1>Create New Post</h1>
                <form action="{{route('posts.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="title" class="form-control" id="title" name="title" placeholder="Title here">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" placeholder="Description Post" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Post Published</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
