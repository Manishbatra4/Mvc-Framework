@extends('include.layout')

@section('title', 'Create Post Page')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12 mx-auto">
            <div class="card card-body bg-dark text-light mt-5">
                <h2 style="text-align: center">Create New Post</h2>
                @if(!empty($error))
                    <p style="color: red" class="form-text">{{ $error }}</p>
                @endif
                <hr>
                <form action="{{ URLROOT }}posts/create" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" required id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="password">Body</label>
                        <textarea class="form-control" required id="body" name="body" placeholder="Body"></textarea>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Publish Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection