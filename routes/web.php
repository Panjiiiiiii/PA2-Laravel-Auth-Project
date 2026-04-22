<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// ── PUBLIC ──
Route::get('/', fn() => view('home'))->name('home');

// ── GUEST ONLY ──
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// ── LOGOUT ──
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')->name('logout');

// ── USER ──
Route::middleware('auth')->group(function () {
    Route::get('/profile', fn() => view('user.profile'))->name('profile');
});

// ── JOURNALIST ──
Route::middleware(['auth', 'role:journalist,admin'])
    ->prefix('journalist')->name('journalist.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('journalist.dashboard'))->name('dashboard');
        // tambah route CRUD berita di sini
    });

// ── ADMIN ──
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
        // tambah route kelola user, berita, kategori di sini
    });