@extends('include.layout')

@section('title', 'Login Page')

@section('content')
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2 style="text-align: center">Login</h2>
                @if(!empty($error))
                    <p style="color: red" class="form-text">{{ $error }}</p>
                @endif
                <hr>
                <form action="{{ URLROOT }}users/login" method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" required name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" required name="password" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="keep">
                        <label class="form-check-label" for="keep">Remember Me</label>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="col">
                            <a class="link" href="{{ URLROOT }}/users/register"> Don't Have An Account? Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection