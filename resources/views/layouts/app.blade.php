<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Dashboard') - ROMARTUA Collection</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 250px;
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --sidebar-bg: #1e1b4b;
            --sidebar-text: #c7d2fe;
            --sidebar-hover: #312e81;
        }
        body { background: #f8fafc; font-family: 'Segoe UI', sans-serif; }
        #sidebar {
            width: var(--sidebar-width);
            min-height: 100vh;
            background: var(--sidebar-bg);
            position: fixed;
            top: 0; left: 0;
            z-index: 100;
        }
        #sidebar .sidebar-brand {
            padding: 1.5rem 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        #sidebar .sidebar-brand h5 { color: #fff; font-weight: 700; margin: 0; }
        #sidebar .sidebar-brand small { color: var(--sidebar-text); font-size: 0.75rem; }
        #sidebar .nav-link {
            color: var(--sidebar-text);
            padding: 0.75rem 1.25rem;
            border-radius: 0.5rem;
            margin: 0.15rem 0.75rem;
            transition: all 0.2s;
        }
        #sidebar .nav-link:hover,
        #sidebar .nav-link.active {
            background: var(--sidebar-hover);
            color: #fff;
        }
        #sidebar .nav-link i { margin-right: 0.6rem; }
        #content { margin-left: var(--sidebar-width); min-height: 100vh; }
        .topbar {
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 99;
        }
        .topbar .breadcrumb { margin: 0; font-size: 0.85rem; }
        .page-content { padding: 1.5rem; }
        .card { border: none; box-shadow: 0 1px 3px rgba(0,0,0,0.08); border-radius: 0.75rem; }
        .card-header { background: #fff; border-bottom: 1px solid #f1f5f9; padding: 1rem 1.25rem; }
        .btn-primary { background: var(--primary); border-color: var(--primary); }
        .btn-primary:hover { background: var(--primary-dark); border-color: var(--primary-dark); }
        .table thead th { background: #f8fafc; font-weight: 600; font-size: 0.85rem; color: #475569; border: none; }
        .table tbody td { vertical-align: middle; font-size: 0.9rem; }
        img.thumb { width: 55px; height: 55px; object-fit: cover; border-radius: 0.5rem; }
    </style>
    @stack('styles')
</head>
<body>

<nav id="sidebar">
    <div class="sidebar-brand text-center">
        <i class="bi bi-bag-heart-fill fs-2" style="color:#a5b4fc"></i>
        <h5 class="mt-2">ROMARTUA Collection</h5>
        <small>Admin Panel</small>
    </div>
    <ul class="nav flex-column mt-3">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link" target="_blank">
                <i class="bi bi-house-door"></i> Halaman Publik
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('fashion.index') }}" class="nav-link {{ request()->routeIs('fashion.*') ? 'active' : '' }}">
                <i class="bi bi-grid-3x3-gap"></i> Koleksi Fashion
            </a>
        </li>
    </ul>
    <div class="position-absolute bottom-0 w-100 p-3" style="border-top:1px solid rgba(255,255,255,0.1)">
        <div class="d-flex align-items-center mb-2">
            <i class="bi bi-person-circle text-white fs-4 me-2"></i>
            <div>
                <div style="color:#fff;font-size:0.85rem;font-weight:600">{{ Auth::user()->name }}</div>
                <div style="color:var(--sidebar-text);font-size:0.75rem">Administrator</div>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-light w-100">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </button>
        </form>
    </div>
</nav>

<div id="content">
    <div class="topbar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('fashion.index') }}" class="text-decoration-none">Dashboard</a></li>
                @yield('breadcrumb')
            </ol>
        </nav>
        <span class="text-muted small">NIM: 241011750145</span>
    </div>

    <div class="page-content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
@stack('scripts')
</body>
</html>