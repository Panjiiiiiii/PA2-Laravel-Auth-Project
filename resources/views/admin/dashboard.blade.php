<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard — Portal Berita</title>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
        }

        /* ── Sidebar ── */
        .sidebar {
            position: fixed;
            top: 0; left: 0;
            width: 240px;
            height: 100vh;
            background-color: #1c2434;
            z-index: 100;
            display: flex;
            flex-direction: column;
        }
        .sidebar-brand {
            padding: 20px 20px 16px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .sidebar-brand h5 {
            color: #fff;
            font-weight: 700;
            margin: 0;
            font-size: 16px;
        }
        .sidebar-brand span {
            font-size: 11px;
            color: #e94560;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .sidebar-nav {
            padding: 12px;
            flex: 1;
            overflow-y: auto;
        }
        .nav-section-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.25);
            padding: 10px 10px 4px;
        }
        .sidebar-nav .nav-link {
            color: #a8b2d8;
            font-size: 13.5px;
            font-weight: 500;
            padding: 9px 12px;
            border-radius: 6px;
            margin-bottom: 2px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar-nav .nav-link:hover {
            background: rgba(255,255,255,0.07);
            color: #fff;
        }
        .sidebar-nav .nav-link.active {
            background: rgba(233,69,96,0.15);
            color: #fff;
            font-weight: 600;
        }
        .sidebar-nav .nav-link.active i { color: #e94560; }
        .sidebar-footer {
            padding: 14px 20px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }
        .sidebar-footer .user-name {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            margin: 0;
        }
        .sidebar-footer .user-email {
            color: #a8b2d8;
            font-size: 11px;
        }

        /* ── Main Content ── */
        .main-content { margin-left: 240px; min-height: 100vh; }

        /* ── Topbar ── */
        .topbar {
            background: #fff;
            border-bottom: 1px solid #e5e9f0;
            padding: 14px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 99;
        }
        .topbar .page-title {
            font-size: 16px;
            font-weight: 700;
            color: #1c2434;
            margin: 0;
        }

        /* ── Stat Cards ── */
        .stat-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #e5e9f0;
            height: 100%;
        }
        .stat-icon {
            width: 46px; height: 46px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
        }
        .stat-value {
            font-size: 28px;
            font-weight: 800;
            color: #1c2434;
            line-height: 1;
            margin: 10px 0 2px;
        }
        .stat-label {
            font-size: 12px;
            color: #6c757d;
            font-weight: 500;
        }
        .stat-change { font-size: 12px; font-weight: 600; }

        /* ── Content Card ── */
        .content-card {
            background: #fff;
            border-radius: 10px;
            border: 1px solid #e5e9f0;
            overflow: hidden;
        }
        .card-header-custom {
            padding: 14px 20px;
            border-bottom: 1px solid #e5e9f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .card-header-custom h6 {
            font-weight: 700;
            color: #1c2434;
            margin: 0;
            font-size: 14px;
        }

        /* ── Badges ── */
        .badge-admin      { background: #fff3cd; color: #856404; }
        .badge-journalist { background: #e8d5ff; color: #5b21b6; }
        .badge-user       { background: #d1ecf1; color: #0c5460; }
        .badge-published  { background: #d1e7dd; color: #0f5132; }
        .badge-draft      { background: #f8d7da; color: #842029; }
    </style>
</head>
<body>

{{-- ══════════════ SIDEBAR ══════════════ --}}
<div class="sidebar">

    <div class="sidebar-brand">
        <span>Admin Panel</span>
        <h5 class="mt-1">📰 Portal Berita</h5>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section-label">Menu Utama</div>
        <a href="#" class="nav-link active">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <div class="nav-section-label mt-2">Konten</div>
        <a href="#" class="nav-link">
            <i class="bi bi-newspaper"></i> Kelola Berita
        </a>
        <a href="#" class="nav-link">
            <i class="bi bi-tags"></i> Kategori
        </a>
        <a href="#" class="nav-link">
            <i class="bi bi-chat-left-text"></i> Komentar
            <span class="badge bg-danger ms-auto" style="font-size:10px">5</span>
        </a>

        <div class="nav-section-label mt-2">Pengguna</div>
        <a href="#" class="nav-link">
            <i class="bi bi-person-badge"></i> Jurnalis
        </a>
        <a href="#" class="nav-link">
            <i class="bi bi-people"></i> User
        </a>
    </nav>

    <div class="sidebar-footer">
        <div class="d-flex align-items-center gap-2">
            <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center text-white fw-bold flex-shrink-0"
                 style="width:36px;height:36px;font-size:14px">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <div>
                <p class="user-name">{{ auth()->user()->name ?? 'Admin' }}</p>
                <div class="user-email">{{ auth()->user()->email ?? 'admin@portal.com' }}</div>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-sm w-100"
                style="background:rgba(233,69,96,0.12);color:#e94560;font-size:12px;font-weight:600;border:none;border-radius:6px;padding:7px 12px;text-align:left">
                <i class="bi bi-box-arrow-left me-1"></i> Logout
            </button>
        </form>
    </div>

</div>


{{-- ══════════════ MAIN CONTENT ══════════════ --}}
<div class="main-content">

    {{-- Topbar --}}
    <div class="topbar">
        <div>
            <p class="page-title">Dashboard</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size:12px">
                    <li class="breadcrumb-item text-muted">Admin</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="badge bg-danger px-3 py-2" style="font-size:12px;border-radius:6px">
                <i class="bi bi-shield-fill me-1"></i> Admin
            </span>
            <span class="text-muted" style="font-size:12px">
                {{ now()->format('d M Y') }}
            </span>
        </div>
    </div>

    <div class="p-4">

        {{-- Alert Login Berhasil --}}
        @if(session('success'))
            <div class="alert d-flex align-items-center gap-2 mb-4"
                 style="background:#d1e7dd;border:1px solid #badbcc;color:#0f5132;border-radius:8px;font-size:13px">
                <i class="bi bi-check-circle-fill"></i>
                {{ session('success') }}
            </div>
        @endif

        <div class="alert d-flex align-items-center gap-2 mb-4"
             style="background:#d1e7dd;border:1px solid #badbcc;color:#0f5132;border-radius:8px;font-size:13px">
            <i class="bi bi-check-circle-fill"></i>
            Login berhasil! Selamat datang, <strong class="ms-1">{{ auth()->user()->name ?? 'Admin' }}</strong>
        </div>

        {{-- ── Stat Cards ── --}}
        <div class="row g-3 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <p class="stat-label">Total Berita</p>
                            <p class="stat-value">128</p>
                            <span class="stat-change text-success"><i class="bi bi-arrow-up"></i> +12 minggu ini</span>
                        </div>
                        <div class="stat-icon" style="background:#fff0f3">
                            <i class="bi bi-newspaper text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <p class="stat-label">Jurnalis Aktif</p>
                            <p class="stat-value">8</p>
                            <span class="stat-change text-success"><i class="bi bi-arrow-up"></i> +2 bulan ini</span>
                        </div>
                        <div class="stat-icon" style="background:#f0ebff">
                            <i class="bi bi-person-badge" style="color:#7c3aed"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <p class="stat-label">Total User</p>
                            <p class="stat-value">1.4k</p>
                            <span class="stat-change text-success"><i class="bi bi-arrow-up"></i> +84 bulan ini</span>
                        </div>
                        <div class="stat-icon" style="background:#e8f4fd">
                            <i class="bi bi-people text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <p class="stat-label">Komentar Pending</p>
                            <p class="stat-value">5</p>
                            <span class="stat-change text-danger"><i class="bi bi-exclamation-circle"></i> Perlu ditinjau</span>
                        </div>
                        <div class="stat-icon" style="background:#fff8e1">
                            <i class="bi bi-chat-left-text text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── Tabel Berita + Daftar User ── --}}
        <div class="row g-3 mb-4">

            {{-- Berita Terbaru --}}
            <div class="col-lg-7">
                <div class="content-card">
                    <div class="card-header-custom">
                        <h6><i class="bi bi-newspaper me-2 text-danger"></i>Berita Terbaru</h6>
                        <a href="#" class="btn btn-sm btn-outline-secondary" style="font-size:12px">Lihat Semua</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" style="font-size:13px">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-0 text-muted" style="font-size:11px;font-weight:600">#</th>
                                    <th class="border-0 text-muted" style="font-size:11px;font-weight:600">JUDUL</th>
                                    <th class="border-0 text-muted" style="font-size:11px;font-weight:600">KATEGORI</th>
                                    <th class="border-0 text-muted" style="font-size:11px;font-weight:600">STATUS</th>
                                    <th class="border-0 text-muted" style="font-size:11px;font-weight:600">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-muted align-middle">1</td>
                                    <td class="align-middle">
                                        <p class="mb-0 fw-semibold">Ekonomi Digital Tumbuh Pesat</p>
                                        <small class="text-muted">Budi · 2 jam lalu</small>
                                    </td>
                                    <td class="align-middle"><span class="badge bg-light text-dark border">Ekonomi</span></td>
                                    <td class="align-middle"><span class="badge badge-published px-2 py-1" style="border-radius:4px">Published</span></td>
                                    <td class="align-middle">
                                        <button class="btn btn-sm btn-outline-danger py-0 px-2" style="font-size:11px"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-muted align-middle">2</td>
                                    <td class="align-middle">
                                        <p class="mb-0 fw-semibold">Pilkada 2025 Dimulai</p>
                                        <small class="text-muted">Sari · 4 jam lalu</small>
                                    </td>
                                    <td class="align-middle"><span class="badge bg-light text-dark border">Politik</span></td>
                                    <td class="align-middle"><span class="badge badge-draft px-2 py-1" style="border-radius:4px">Draft</span></td>
                                    <td class="align-middle">
                                        <button class="btn btn-sm btn-success py-0 px-2 me-1" style="font-size:11px"><i class="bi bi-send"></i></button>
                                        <button class="btn btn-sm btn-outline-danger py-0 px-2" style="font-size:11px"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-muted align-middle">3</td>
                                    <td class="align-middle">
                                        <p class="mb-0 fw-semibold">Timnas Menang 3-0</p>
                                        <small class="text-muted">Rizky · 6 jam lalu</small>
                                    </td>
                                    <td class="align-middle"><span class="badge bg-light text-dark border">Olahraga</span></td>
                                    <td class="align-middle"><span class="badge badge-published px-2 py-1" style="border-radius:4px">Published</span></td>
                                    <td class="align-middle">
                                        <button class="btn btn-sm btn-outline-danger py-0 px-2" style="font-size:11px"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-muted align-middle">4</td>
                                    <td class="align-middle">
                                        <p class="mb-0 fw-semibold">Teknologi AI di Dunia Medis</p>
                                        <small class="text-muted">Dewi · 1 hari lalu</small>
                                    </td>
                                    <td class="align-middle"><span class="badge bg-light text-dark border">Teknologi</span></td>
                                    <td class="align-middle"><span class="badge badge-draft px-2 py-1" style="border-radius:4px">Draft</span></td>
                                    <td class="align-middle">
                                        <button class="btn btn-sm btn-success py-0 px-2 me-1" style="font-size:11px"><i class="bi bi-send"></i></button>
                                        <button class="btn btn-sm btn-outline-danger py-0 px-2" style="font-size:11px"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Pengguna Terbaru --}}
            <div class="col-lg-5">
                <div class="content-card h-100">
                    <div class="card-header-custom">
                        <h6><i class="bi bi-people me-2 text-primary"></i>Pengguna Terbaru</h6>
                        <a href="#" class="btn btn-sm btn-outline-secondary" style="font-size:12px">Lihat Semua</a>
                    </div>
                    <div class="p-3">

                        @php
                            $users = [
                                ['initial'=>'A','color'=>'#e94560','name'=>'Admin Utama','email'=>'admin@portal.com','role'=>'admin'],
                                ['initial'=>'B','color'=>'#7c3aed','name'=>'Budi Santoso','email'=>'budi@portal.com','role'=>'journalist'],
                                ['initial'=>'S','color'=>'#2563eb','name'=>'Sari Wulandari','email'=>'sari@portal.com','role'=>'journalist'],
                                ['initial'=>'R','color'=>'#0891b2','name'=>'Rizky Pratama','email'=>'rizky@portal.com','role'=>'user'],
                                ['initial'=>'D','color'=>'#16a34a','name'=>'Dewi Anggraini','email'=>'dewi@portal.com','role'=>'user'],
                            ];
                            $roleLabel = ['admin'=>'Admin','journalist'=>'Jurnalis','user'=>'User'];
                            $roleBadge = ['admin'=>'badge-admin','journalist'=>'badge-journalist','user'=>'badge-user'];
                        @endphp

                        @foreach($users as $i => $u)
                            <div class="d-flex align-items-center gap-3 py-2 {{ $i < count($users)-1 ? 'border-bottom' : '' }}">
                                <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold flex-shrink-0"
                                     style="width:36px;height:36px;font-size:13px;background:{{ $u['color'] }}">
                                    {{ $u['initial'] }}
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-0 fw-semibold" style="font-size:13px">{{ $u['name'] }}</p>
                                    <small class="text-muted text-truncate d-block">{{ $u['email'] }}</small>
                                </div>
                                <span class="badge {{ $roleBadge[$u['role']] }} px-2 py-1 flex-shrink-0" style="border-radius:4px;font-size:11px">
                                    {{ $roleLabel[$u['role']] }}
                                </span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

        {{-- ── Quick Actions ── --}}
        <div class="content-card">
            <div class="card-header-custom">
                <h6><i class="bi bi-lightning me-2 text-warning"></i>Quick Actions</h6>
            </div>
            <div class="p-3 d-flex flex-wrap gap-2">
                <a href="#" class="btn btn-outline-danger btn-sm px-3">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Jurnalis
                </a>
                <a href="#" class="btn btn-outline-primary btn-sm px-3">
                    <i class="bi bi-tags me-1"></i> Tambah Kategori
                </a>
                <a href="#" class="btn btn-outline-warning btn-sm px-3">
                    <i class="bi bi-chat-left-text me-1"></i> Tinjau Komentar
                    <span class="badge bg-danger ms-1" style="font-size:10px">5</span>
                </a>
                <a href="#" class="btn btn-outline-success btn-sm px-3">
                    <i class="bi bi-send me-1"></i> Publish Draft
                    <span class="badge bg-secondary ms-1" style="font-size:10px">2</span>
                </a>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>