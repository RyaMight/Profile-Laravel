<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Login</title>
</head>
<body>
    <section class="Login-section">
        <form class="Login-card" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="login-icon"><i class="fas fa-shield-halved"></i></div>
            <h2>Admin Login</h2>
            <p class="login-sub">Masuk untuk mengelola sertifikat</p>

            @if($errors->any())
                <div class="alert alert-error">{{ $errors->first() }}</div>
            @endif

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Username admin" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password admin" required>
            </div>
            <button type="submit" class="btn btn-submit">Masuk <i class="fas fa-right-to-bracket"></i></button>
            <a href="{{ route('profile') }}" class="login-back">&larr; Kembali ke portofolio</a>
        </form>
    </section>
</body>
</html>
