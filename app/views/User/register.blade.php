@extends('include.layout')

@section('title', 'Register Page')


@section('content')

    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2 style="text-align: center">Create Account</h2>
                <hr>
                <form action="{{ URLROOT }}users/register" method="post">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" name="fullname" required placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" name="username" required placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" required placeholder="Enter email">
                        @if(!empty($error))
                            <small style="color: red" class="form-text">{{ $error }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                        </div>
                        <div class="col">
                            <a class="link" href="{{ URLROOT }}users/login"> Already Have An Account? Login</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection