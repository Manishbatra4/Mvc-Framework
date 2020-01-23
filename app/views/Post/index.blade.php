@extends('include.layout')

@section('title', 'My Posts Page')


@section('content')
    <div class="row mt-5">
        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto mt-5">
            <h1>All posts of {{ Auth::user()->fullname }}
                <a class="btn btn-info btn-lg float-right" href="{{ URLROOT }}posts/create"><i class="fas fa-plus"></i>
                </a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse ($posts as $post)
                <div class="post-preview">
                    <a style="float: right;" class="btn btn-danger text-light"
                       href="{{ URLROOT }}posts/delete/{{ $post->id }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a>

                    <a style="float: right;" class="btn btn-primary text-light mr-2"
                       href="{{ URLROOT }}posts/edit/{{ $post->id }}"><i class="fas fa-pencil-alt"></i></a>

                    <a href="{{ URLROOT }}posts/post/{{ $post->id }}">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <h3 class="post-body">{!!   substr($post->body, 0, 50) !!}</h3>
                    </a>
                    <p class="post-meta"> Posted By
                        <a href="{{ URLROOT }}users/info/{{ $post->user->id }}">{{ $post->user->fullname }}</a>
                        On
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                </div>
            @empty
                <h2 style="text-align: center"> No Post Found </h2>
            @endforelse
        </div>
    </div>


@endsection
