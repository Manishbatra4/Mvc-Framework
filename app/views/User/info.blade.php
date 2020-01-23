@extends('include.layout')

@section('title', 'Authors Page')

@include('include.header')

@section('content')
    <div class="row">
        <div class="col"><h3>{{ $info->fullname }}</h3></div>
        <div class="col"><h3>{{ $info->username }}</h3></div>
        <div class="col"><h3>{{ $info->email }}</h3></div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse ($info->posts as $post)
                <div class="post-preview">
                    <a href="{{ URLROOT }}posts/post/{{ $post->id }}">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <h3 class="post-body">{!!   substr($post->body, 0, 50) !!}</h3>
                    </a>
                    <p class="post-meta"> Posted By
                        {{ $post->user->fullname }}
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
