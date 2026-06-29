<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fashion Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #ec4899 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border-radius: 1.25rem;
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
            padding: 2.5rem;
            width: 100%;
            max-width: 420px;
        }
        .login-icon {
            width: 70px; height: 70px;
            background: linear-gradient(135deg, #6366f1, #ec4899);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 1.5rem;
        }
        .btn-login {
            background: linear-gradient(135deg, #6366f1, #ec4899);
            border: none; color: #fff; font-weight: 600;
            padding: 0.75rem;
            transition: opacity 0.2s;
        }
        .btn-login:hover { opacity: 0.9; color: #fff; }
        .form-control:focus { border-color: #6366f1; box-shadow: 0 0 0 0.25rem rgba(99,102,241,0.15); }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-icon">
            <i class="bi bi-bag-heart-fill text-white fs-3"></i>
        </div>
        <h4 class="text-center fw-bold mb-1">Fashion Collection</h4>
        <p class="text-center text-muted small mb-4">Silakan login untuk mengakses dashboard</p>

        @if($errors->any())
            <div class="alert alert-danger py-2">
                <i class="bi bi-exclamation-triangle me-1"></i>
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                           placeholder="Masukkan username" value="{{ old('username') }}" required autofocus>
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" class="form-control"
                           placeholder="Masukkan password" required>
                </div>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label small" for="remember">Ingat saya</label>
            </div>
            <button type="submit" class="btn btn-login w-100 rounded-3">
                <i class="bi bi-box-arrow-in-right me-2"></i>Login
            </button>
        </form>
        <p class="text-center text-muted small mt-4 mb-0">
            Rekayasa Web | SI UNPAM &mdash; NIM: 241011750145
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>