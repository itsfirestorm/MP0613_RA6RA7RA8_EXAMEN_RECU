<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login — {{ config('app.name', 'Cricket') }}</title>

    <!-- SB Admin 2 -->
    <link href="{{ url('Backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body { background: linear-gradient(135deg, #1cc88a 0%, #17a673 50%, #0f6848 100%); min-height: 100vh; }
        .login-card  { border: none; border-radius: 1rem; overflow: hidden; box-shadow: 0 1rem 3rem rgba(0,0,0,.25); }
        .login-brand { background: linear-gradient(135deg, #1cc88a, #17a673); padding: 2.5rem 2rem; color: #fff; }
        .login-brand .logo-icon  { font-size: 3.5rem; }
        .login-brand h4 { font-weight: 700; letter-spacing: .5px; margin-top: .5rem; }
        .login-brand p  { font-size: .875rem; opacity: .85; margin: 0; }
        .login-body  { padding: 2.5rem 2.5rem 2rem; }
        .login-body h5 { font-weight: 700; color: #5a5c69; margin-bottom: 1.5rem; }
        .input-group-text { background: #f8f9fc; border-right: none; color: #1cc88a; }
        .form-control  { border-left: none; }
        .form-control:focus { box-shadow: none; border-color: #1cc88a; }
        .input-group:focus-within .input-group-text { border-color: #1cc88a; }
        .btn-login { background: linear-gradient(135deg, #1cc88a, #17a673); border: none; letter-spacing: .5px; font-weight: 600; padding: .65rem 1.5rem; border-radius: .5rem; }
        .btn-login:hover { background: linear-gradient(135deg, #17a673, #0f6848); }
        .divider { display: flex; align-items: center; gap: .75rem; color: #b7b9cc; font-size: .8rem; margin: 1.25rem 0; }
        .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: #e3e6f0; }
        .alert-error { background: #fff5f5; border-left: 4px solid #e74a3b; color: #e74a3b; border-radius: .35rem; padding: .75rem 1rem; font-size: .875rem; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height:100vh;">
        <div class="col-xl-5 col-lg-6 col-md-8">

            <div class="card login-card">

                {{-- Brand header --}}
                <div class="login-brand text-center">
                    <div class="logo-icon"><i class="fas fa-cricket-bat-ball"></i></div>
                    <h4>{{ config('app.name', 'Cricket') }}</h4>
                    <p>Administration Panel</p>
                </div>

                {{-- Form body --}}
                <div class="card-body login-body">
                    <h5 class="text-center">Welcome back, Admin</h5>

                    @if (session()->has('error'))
                        <div class="alert-error mb-3">
                            <i class="fas fa-exclamation-circle me-1"></i>
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.auth') }}">
                        @csrf

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label small fw-semibold text-muted text-uppercase">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope fa-sm"></i></span>
                                <input id="email"
                                       type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="admin@example.com"
                                       class="form-control @error('email') is-invalid @enderror"
                                       required autocomplete="email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label small fw-semibold text-muted text-uppercase">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock fa-sm"></i></span>
                                <input id="password"
                                       type="password"
                                       name="password"
                                       placeholder="••••••••"
                                       class="form-control @error('password') is-invalid @enderror"
                                       required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Remember + Submit --}}
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label small" for="remember">Remember Me</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="small text-success">Forgot Password?</a>
                            @endif
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-login text-white">
                                <i class="fas fa-sign-in-alt me-1"></i> Sign In
                            </button>
                        </div>

                    </form>

                    <div class="divider">or</div>

                    <p class="text-center small text-muted mb-0">
                        <a href="{{ url('/') }}" class="text-success">
                            <i class="fas fa-arrow-left me-1"></i>Back to site
                        </a>
                    </p>
                </div>

            </div>

            <p class="text-center text-white-50 small mt-3">
                &copy; {{ date('Y') }} {{ config('app.name', 'Cricket') }} — All rights reserved.
            </p>

        </div>
    </div>
</div>

<!-- Bootstrap JS (bundled with SB Admin 2) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
