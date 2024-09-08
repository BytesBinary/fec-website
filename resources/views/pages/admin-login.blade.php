@extends("pages.layouts.app")

@section('title','Admin Login | FEC')

@section('content')
    <div class="admin-login-page">
        <div class="sign-in-container page-top-section mb-5">
            <div class="card sign-in-card p-4" style="max-width: 400px;">
                <div class="img-container">
                    <img src="{{asset('static/logo.png')}}" class="card-img-top img-fluid rounded" alt="Beach">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form action="{{route('admin-login')}}" method="post">
                            @error('failed')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            <span class="text-danger">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                <span class="input-group-text" id="togglePassword">
                                <i class="bi bi-eye" id="eyeIcon"></i>
                            </span>
                            </div>
                            <span class="text-danger">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
