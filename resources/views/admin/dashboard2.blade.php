<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard — Portal Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">

{{-- NAVBAR --}}
<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand fw-bold">📰 Portal Berita — Admin</span>
    <div class="d-flex align-items-center gap-3">
        <span class="text-white-50" style="font-size:13px">
            <i class="bi bi-person-circle me-1"></i>
            {{ auth()->user()->name }}
        </span>
        <span class="badge bg-danger">Admin</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-light">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </button>
        </form>
    </div>
</nav>

{{-- CONTENT --}}
<div class="container py-4">

    {{-- Alert Login Berhasil --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        Login berhasil! Selamat datang, <strong>{{ auth()->user()->name }}</strong>.
        Anda masuk sebagai <strong>Admin</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    {{-- Page Title --}}
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Dashboard</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size:13px">
                <li class="breadcrumb-item text-muted">Admin</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    {{-- STAT CARDS --}}
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1" style="font-size:12px">Total Berita</p>
                            <h4 class="fw-bold mb-0">128</h4>
                        </div>
                        <div class="bg-danger bg-opacity-10 rounded p-2">
                            <i class="bi bi-newspaper text-danger fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1" style="font-size:12px">Jurnalis</p>
                            <h4 class="fw-bold mb-0">8</h4>
                        </div>
                        <div class="bg-primary bg-opacity-10 rounded p-2">
                            <i class="bi bi-person-badge text-primary fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1" style="font-size:12px">Total User</p>
                            <h4 class="fw-bold mb-0">1.4k</h4>
                        </div>
                        <div class="bg-success bg-opacity-10 rounded p-2">
                            <i class="bi bi-people text-success fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1" style="font-size:12px">Komentar Pending</p>
                            <h4 class="fw-bold mb-0">5</h4>
                        </div>
                        <div class="bg-warning bg-opacity-10 rounded p-2">
                            <i class="bi bi-chat-left-text text-warning fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>