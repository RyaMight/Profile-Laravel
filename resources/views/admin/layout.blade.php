<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title') - Admin</title>
</head>
<body>
    <header>
        <a href="{{ route('admin.certificates.index') }}" class="logo"><i class="fas fa-shield-halved"></i> Admin</a>
        <nav class="navbar">
            <a href="{{ route('admin.certificates.index') }}" class="{{ request()->routeIs('admin.certificates.index') ? 'active' : '' }}">Daftar Sertifikat</a>
            <a href="{{ route('admin.certificates.create') }}" class="{{ request()->routeIs('admin.certificates.create') ? 'active' : '' }}">Tambah Sertifikat</a>
            <a href="{{ route('profile') }}">Lihat Portofolio</a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn-logout"><i class="fas fa-right-from-bracket"></i> Logout</button>
            </form>
        </nav>
    </header>

    <section class="Admin-panel">
        <h2 class="Certification-title">@yield('title')</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </section>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Admin Panel - Rayasa</p>
    </footer>
</body>
</html>
