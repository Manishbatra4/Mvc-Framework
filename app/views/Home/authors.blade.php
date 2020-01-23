@extends('include.layout')

@section('title', 'Authors Page')

@include('include.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <h1 style="text-align: center">Our Authors</h1>
                <ul class="list-group list-group-flush">
                    @forelse ($users as $user)
                        <li class="list-group-item user-list">
                            <a href="/users/info/{{ $user->id }}">{{ $user->fullname }}</a>
                            <span style="float: right">{{ "User Joined ". $user->created_at->diffForHumans() }}</span>
                        </li>
                    @empty
                        <li> No User Found</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

@endsection
