@extends('include.layout')

@section('title', 'Home Page')

@include('include.header')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse ($posts as $post)
                <div class="post-preview">
                    <a href="{{ URLROOT }}posts/post/{{ $post->id }}">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <h3 class="post-body">{!! substr($post->body, 0, 50) !!}</h3>
                    </a>
                    <p class="post-meta"> Posted By
                        <a href="{{ URLROOT }}users/info/{{ $post->user->id }}">{{ $post->user->fullname }}</a>
                        On
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                    <hr>
                </div>
            @empty
                <h2 style="text-align: center"> No Post Found </h2>
            @endforelse
        </div>
    </div>


@endsection
