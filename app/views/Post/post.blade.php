@extends('include.layout')

@section('title', 'Single Post Page')

@include('include.header')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h4 class="post-body">{!!   $post->body !!}</h4>
                <hr>
                <p class="post-meta" style="float: right"> Posted By
                    <a href="{{ URLROOT }}users/info/{{ $post->user->id }}">{{ $post->user->fullname }}</a>
                    On
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
        </div>
    </div>


@endsection
