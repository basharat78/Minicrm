@extends('layouts.app')
@section('content')
 <style>
        body {
            background: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
        }
        .card {
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
    </style>
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-4">
                   
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                     <div class="mb-3 text-center text-muted" style="font-size: 0.95rem;">
                        <strong>Default Credentials:</strong><br>
                        Email: <code>User@gmail.com</code><br>
                        Password: <code>User123</code>
                    </div>
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection