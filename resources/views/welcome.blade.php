<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROMARTUA Collection - Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root { --gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #ec4899 100%); }
        body { font-family: 'Segoe UI', sans-serif; }
        .navbar { background: #fff; box-shadow: 0 1px 10px rgba(0,0,0,0.08); }
        .navbar-brand { font-weight: 800; font-size: 1.2rem; }
        .btn-login-nav {
            background: var(--gradient);
            border: none; color: #fff !important;
            border-radius: 2rem; padding: 0.4rem 1.2rem;
            font-weight: 600; font-size: 0.85rem;
        }
        .hero {
            background: var(--gradient);
            min-height: 500px;
            display: flex; align-items: center;
        }
        .hero h1 { font-size: 3rem; font-weight: 800; color: #fff; }
        .hero p { color: rgba(255,255,255,0.85); font-size: 1.1rem; }
        .fashion-card {
            border: none; border-radius: 1rem; overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        .fashion-card:hover { transform: translateY(-6px); }
        .fashion-card img { height: auto; object-fit: contain; width: 100%; background: #f8f8f8; }
        .section-title { font-weight: 800; font-size: 1.8rem; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-bag-heart-fill me-1" style="color:#6366f1"></i>
                ROMARTUA Collection
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#koleksi">Koleksi</a></li>
                </ul>
                <a href="{{ route('login') }}" class="btn btn-login-nav">
                    <i class="bi bi-box-arrow-in-right me-1"></i>Login Admin
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="col-lg-7">
                <h1 class="mb-3">Temukan Gaya Fashion Terbaik Anda</h1>
                <p class="mb-4">Platform manajemen koleksi fashion pria modern dari berbagai brand ternama dunia.</p>
                <a href="#koleksi" class="btn btn-light btn-lg rounded-pill px-4 fw-bold me-2" style="color:#6366f1">
                    <i class="bi bi-grid me-1"></i>Lihat Koleksi
                </a>
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg rounded-pill px-4">
                    <i class="bi bi-shield-lock me-1"></i>Login Admin
                </a>
            </div>
        </div>
    </section>

    <!-- Koleksi -->
    <section id="koleksi" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Koleksi Fashion Terbaru</h2>
                <p class="text-muted">Item fashion pilihan dari berbagai brand terbaik</p>
            </div>

            @if($fashion->count() > 0)
            <div class="row g-4">
                @foreach($fashion as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="fashion-card card h-100">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_item }}">
                        @else
                            <div class="d-flex align-items-center justify-content-center bg-light" style="height:220px">
                                <i class="bi bi-bag-heart text-muted" style="font-size:4rem"></i>
                            </div>
                        @endif
                        <div class="card-body">
                            <span class="badge mb-2 px-3" style="background:var(--gradient);color:#fff">{{ $item->brand }}</span>
                            <h5 class="fw-bold mb-1">{{ $item->nama_item }}</h5>
                            <p class="text-muted small mb-1">Ukuran: {{ $item->ukuran }}</p>
                            <p class="text-muted small mb-0">Warna: {{ $item->warna }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-5 text-muted">
                <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                <p>Belum ada koleksi yang tersedia.</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Login untuk menambah data</a>
            </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #1e1b4b, #312e81); padding: 3rem 0 2rem;">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <h5 style="color:#fff;font-weight:800">
                        <i class="bi bi-bag-heart-fill me-2" style="color:#a5b4fc"></i>ROMARTUA Collection
                    </h5>
                    <p style="color:rgba(255,255,255,0.6);font-size:0.85rem">Platform manajemen koleksi fashion pria modern dari berbagai brand ternama dunia.</p>
                </div>
                <div class="col-md-4">
                    <h6 style="color:#fff;font-weight:700">Menu</h6>
                    <ul class="list-unstyled" style="color:rgba(255,255,255,0.6);font-size:0.85rem">
                        <li class="mb-1"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.6);text-decoration:none">🏠 Beranda</a></li>
                        <li class="mb-1"><a href="#koleksi" style="color:rgba(255,255,255,0.6);text-decoration:none">👕 Koleksi</a></li>
                        <li class="mb-1"><a href="{{ route('login') }}" style="color:rgba(255,255,255,0.6);text-decoration:none">🔐 Login Admin</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 style="color:#fff;font-weight:700">Info</h6>
                    <ul class="list-unstyled" style="color:rgba(255,255,255,0.6);font-size:0.85rem">
                        <li class="mb-1">🎓 Universitas Pamulang</li>
                        <li class="mb-1">💻 Prodi Sistem Informasi S-1</li>
                        <li class="mb-1">📚 Rekayasa Web</li>
                        <li class="mb-1">🪪 NIM: 241011750145</li>
                    </ul>
                </div>
            </div>
            <hr style="border-color:rgba(255,255,255,0.1)">
            <div class="text-center" style="color:rgba(255,255,255,0.4);font-size:0.8rem">
                &copy; 2024 ROMARTUA Collection. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>