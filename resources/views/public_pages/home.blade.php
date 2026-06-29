<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROMARTUA Collection - Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root { --gradient: linear-gradient(135deg, #0f0c29, #302b63, #24243e); --navy: #0d1b4b; --navy2: #1a237e; }
        body { font-family: 'Segoe UI', sans-serif; scroll-behavior: smooth; }
        .navbar { background: var(--navy); box-shadow: 0 2px 20px rgba(0,0,0,0.3); }
        .navbar-brand { font-weight: 800; font-size: 1.2rem; color: #fff !important; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-weight: 500; }
        .nav-link:hover { color: #fff !important; }
        .btn-login-nav {
            background: #fff;
            border: none; color: var(--navy) !important;
            border-radius: 2rem; padding: 0.4rem 1.2rem;
            font-weight: 700; font-size: 0.85rem;
        }
        .hero {
            background: var(--gradient);
            min-height: 100vh;
            display: flex; align-items: center;
            position: relative; overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(ellipse at 70% 50%, rgba(99,102,241,0.3) 0%, transparent 70%);
        }
        .hero h1 { font-size: 3.5rem; font-weight: 900; color: #fff; line-height: 1.1; }
        .hero p { color: rgba(255,255,255,0.75); font-size: 1.1rem; }
        .hero-badge {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: #fff; border-radius: 2rem;
            padding: 0.4rem 1rem; font-size: 0.85rem;
            display: inline-block; margin-bottom: 1.5rem;
        }
        .fashion-card {
            border: none; border-radius: 1rem; overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background: #fff;
        }
        .fashion-card:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(0,0,0,0.15); }
        .fashion-card img { height: auto; object-fit: contain; width: 100%; background: #f8f9ff; }
        .section-title { font-weight: 900; font-size: 2rem; color: var(--navy); }
        .section-bg { background: #f0f4ff; }
        .about-section { background: var(--navy); }
        .about-section h2 { color: #fff; font-weight: 900; }
        .about-section p { color: rgba(255,255,255,0.7); }
        .about-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 1rem; padding: 1.5rem; text-align: center;
        }
        .about-card i { font-size: 2.5rem; color: #a5b4fc; margin-bottom: 1rem; }
        .about-card h5 { color: #fff; font-weight: 700; }
        .about-card p { color: rgba(255,255,255,0.6); font-size: 0.85rem; margin: 0; }
        .contact-section { background: #f0f4ff; }
        .contact-card { background: #fff; border-radius: 1rem; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .form-control:focus { border-color: var(--navy2); box-shadow: 0 0 0 0.25rem rgba(26,35,126,0.15); }
        .btn-navy { background: var(--navy); color: #fff; border: none; font-weight: 700; padding: 0.75rem 2rem; border-radius: 0.5rem; }
        .btn-navy:hover { background: var(--navy2); color: #fff; }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <div style="width:42px;height:42px;background:linear-gradient(135deg,#a5b4fc,#6366f1);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-right:10px;box-shadow:0 4px 10px rgba(99,102,241,0.4);">
                    <i class="bi bi-bag-heart-fill" style="color:#fff;font-size:1.2rem"></i>
                </div>
                <div>
                    <div style="color:#fff;font-weight:900;font-size:1rem;line-height:1">ROMARTUA</div>
                    <div style="color:#a5b4fc;font-size:0.65rem;font-weight:600;letter-spacing:2px">COLLECTION</div>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <i class="bi bi-list text-white fs-4"></i>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav me-auto ms-4">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#koleksi">Koleksi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
                <a href="{{ route('login') }}" class="btn btn-login-nav">
                    <i class="bi bi-box-arrow-in-right me-1"></i>Login Admin
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="hero-badge"><i class="bi bi-stars me-1"></i>Koleksi Fashion Pria Terbaik</span>
                    <h1 class="mb-3">Temukan Gaya<br><span style="color:#a5b4fc">Fashion</span> Terbaik<br>Anda</h1>
                    <p class="mb-4">Platform manajemen koleksi fashion pria modern dari berbagai brand ternama dunia. Temukan pilihan outfit terbaik untuk setiap kesempatan.</p>
                    <a href="#koleksi" class="btn btn-light btn-lg rounded-pill px-4 fw-bold" style="color:#0d1b4b">
                        <i class="bi bi-grid me-1"></i>Lihat Koleksi
                    </a>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <img src="{{ asset('LOGO.png') }}" alt="ROMARTUA Collection"
                         style="max-width:100%;filter:drop-shadow(0 20px 40px rgba(0,0,0,0.5));animation: float 3s ease-in-out infinite;">
                </div>
            </div>
        </div>
    </section>

    <!-- Koleksi -->
    <section id="koleksi" class="py-5 section-bg">
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
                            <div class="d-flex align-items-center justify-content-center" style="height:220px;background:#f0f4ff">
                                <i class="bi bi-bag-heart text-muted" style="font-size:4rem"></i>
                            </div>
                        @endif
                        <div class="card-body">
                            <span class="badge mb-2 px-3" style="background:#0d1b4b;color:#fff">{{ $item->brand }}</span>
                            <h5 class="fw-bold mb-1">{{ $item->nama_item }}</h5>
                            <p class="text-muted small mb-1"><i class="bi bi-rulers me-1"></i>Ukuran: {{ $item->ukuran }}</p>
                            <p class="text-muted small mb-0"><i class="bi bi-palette me-1"></i>Warna: {{ $item->warna }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-5 text-muted">
                <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                <p>Belum ada koleksi yang tersedia.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Tentang ROMARTUA Collection</h2>
                <p class="mt-2">Platform fashion pria terpercaya dengan koleksi terbaik</p>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="about-card">
                        <i class="bi bi-bag-heart"></i>
                        <h5>Koleksi Terkurasi</h5>
                        <p>Setiap item dipilih dengan cermat dari brand-brand ternama dunia untuk memastikan kualitas terbaik.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-card">
                        <i class="bi bi-shield-check"></i>
                        <h5>Kualitas Terjamin</h5>
                        <p>Semua produk telah melalui seleksi ketat untuk memastikan standar kualitas tertinggi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-card">
                        <i class="bi bi-people"></i>
                        <h5>Untuk Pria Modern</h5>
                        <p>Dirancang khusus untuk pria modern yang menghargai gaya dan kenyamanan dalam berpakaian.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 style="color:#fff;font-weight:800">Mengapa Memilih Kami?</h3>
                    <p style="color:rgba(255,255,255,0.7)" class="mt-3">ROMARTUA Collection hadir sebagai solusi fashion pria modern yang mengutamakan kualitas, gaya, dan kenyamanan.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2" style="color:rgba(255,255,255,0.8)"><i class="bi bi-check-circle-fill me-2" style="color:#a5b4fc"></i>Koleksi dari brand internasional</li>
                        <li class="mb-2" style="color:rgba(255,255,255,0.8)"><i class="bi bi-check-circle-fill me-2" style="color:#a5b4fc"></i>Update koleksi setiap minggu</li>
                        <li class="mb-2" style="color:rgba(255,255,255,0.8)"><i class="bi bi-check-circle-fill me-2" style="color:#a5b4fc"></i>Berbagai pilihan ukuran tersedia</li>
                        <li class="mb-2" style="color:rgba(255,255,255,0.8)"><i class="bi bi-check-circle-fill me-2" style="color:#a5b4fc"></i>Dikelola secara profesional</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="about-card">
                                <h3 style="color:#a5b4fc;font-weight:900">{{ \App\Models\Fashion::count() }}+</h3>
                                <p>Total Koleksi</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-card">
                                <h3 style="color:#a5b4fc;font-weight:900">{{ \App\Models\Fashion::distinct('brand')->count('brand') }}+</h3>
                                <p>Brand Ternama</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-card">
                                <h3 style="color:#a5b4fc;font-weight:900">7</h3>
                                <p>Pilihan Ukuran</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-card">
                                <h3 style="color:#a5b4fc;font-weight:900">100%</h3>
                                <p>Kualitas Terjamin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="contact-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="text-muted">Ada pertanyaan? Kami siap membantu Anda</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-5">
                    <div class="contact-card h-100">
                        <h5 class="fw-bold mb-4" style="color:#0d1b4b">Info Kontak</h5>
                        <div class="d-flex align-items-start mb-3">
                            <div class="rounded-3 p-2 me-3" style="background:#e8eaf6">
                                <i class="bi bi-geo-alt" style="color:#0d1b4b;font-size:1.2rem"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Alamat</div>
                                <div class="text-muted small">Jl. Puspitek Raya No 10, Serpong, Tangerang Selatan</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <div class="rounded-3 p-2 me-3" style="background:#e8eaf6">
                                <i class="bi bi-envelope" style="color:#0d1b4b;font-size:1.2rem"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Email</div>
                                <div class="text-muted small">romartua@unpam.ac.id</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <div class="rounded-3 p-2 me-3" style="background:#e8eaf6">
                                <i class="bi bi-telephone" style="color:#0d1b4b;font-size:1.2rem"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Telepon</div>
                                <div class="text-muted small">(021) 742 7010</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="rounded-3 p-2 me-3" style="background:#e8eaf6">
                                <i class="bi bi-clock" style="color:#0d1b4b;font-size:1.2rem"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">Jam Operasional</div>
                                <div class="text-muted small">Senin - Jumat: 08.00 - 17.00 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-card">
                        <h5 class="fw-bold mb-4" style="color:#0d1b4b">Kirim Pesan</h5>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama</label>
                            <input type="text" id="inputNama" class="form-control" placeholder="Nama lengkap Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Pesan</label>
                            <textarea id="inputPesan" class="form-control" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                        </div>
                        <button class="btn btn-navy w-100" onclick="kirimPesan()">
                            <i class="bi bi-send me-2"></i>Kirim Pesan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: #0d1b4b; padding: 1rem 0;">
        <div class="container text-center">
            <p class="mb-0" style="color:rgba(255,255,255,0.4);font-size:0.8rem">
                &copy; 2026 ROMARTUA Collection &bull; Rekayasa Web &bull; NIM: 241011750145
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function kirimPesan() {
        const nama = document.getElementById('inputNama').value;
        const email = document.getElementById('inputEmail').value;
        const pesan = document.getElementById('inputPesan').value;

        if (!nama || !email || !pesan) {
            alert('⚠️ Mohon isi semua field terlebih dahulu!');
            return;
        }

        alert('✅ Pesan berhasil terkirim!\n\nTerima kasih ' + nama + ', kami akan segera menghubungi Anda di ' + email);

        document.getElementById('inputNama').value = '';
        document.getElementById('inputEmail').value = '';
        document.getElementById('inputPesan').value = '';
    }
    </script>
</body>
</html>