<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Edit User - Apotek Besok Sembuh</title>

<style>
    :root {
        --bg: #061713;
        --bg-soft: #081d18;
        --sidebar: #05120f;
        --sidebar-2: #071b17;
        --sidebar-border: rgba(255, 255, 255, .065);

        --surface: #0b211c;
        --surface-2: #0e2923;
        --surface-3: #12332b;

        --text: #ecfdf5;
        --text-soft: #c7e5d9;
        --muted: #8baea2;
        --muted-2: #63867b;

        --primary: #10b981;
        --primary-light: #34d399;
        --primary-dark: #047857;

        --teal: #14b8a6;
        --cyan: #22d3ee;
        --blue: #3b82f6;
        --orange: #f59e0b;
        --red: #ef4444;
        --purple: #a855f7;

        --border: rgba(255, 255, 255, .075);
        --border-green: rgba(16, 185, 129, .18);

        --shadow: 0 10px 35px rgba(0, 0, .18);
        --shadow-hover: 0 18px 40px rgba(0, 0, .28);

        --radius-sm: 10px;
        --radius-md: 14px;
        --radius-lg: 18px;
        --radius-xl: 22px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        min-height: 100vh;
        background:
            radial-gradient(
                circle at 85% 0%,
                rgba(16, 185, 129, .11),
                transparent 27%
            ),
            radial-gradient(
                circle at 15% 100%,
                rgba(20, 184, 166, .07),
                transparent 30%
            ),
            linear-gradient(
                135deg,
                var(--bg) 0%,
                var(--bg-soft) 50%,
                #061713 100%
            );
        color: var(--text);
    }

    /* =========================
       SIDEBAR
    ========================= */

    .sidebar {
        width: 255px;
        background:
            linear-gradient(
                180deg,
                var(--sidebar-2) 0%,
                var(--sidebar) 100%
            );
        border-right: 1px solid var(--sidebar-border);
        padding: 24px 16px;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        overflow: hidden;
        box-shadow: 8px 0 30px rgba(0, 0, .10);
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 4px 9px;
        margin-bottom: 34px;
        color: var(--text);
        font-size: 17px;
        font-weight: 800;
        letter-spacing: -.2px;
    }

    .logo-icon {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        background:
            linear-gradient(
                135deg,
                var(--primary-light),
                var(--primary-dark)
            );
        color: white;
        border-radius: 13px;
        font-size: 21px;
        box-shadow:
            0 8px 25px rgba(16, 185, 129, .20),
            inset 0 1px 0 rgba(255, 255, 255, .14);
    }

    .logo span {
        color: var(--primary-light);
    }

    .logo small {
        display: block;
        margin-top: 3px;
        color: #63867b;
        font-size: 8px;
        font-weight: 600;
        letter-spacing: 1.1px;
    }

    .menu-title {
        margin: 23px 10px 9px;
        color: #55786e;
        font-size: 9px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.6px;
    }

    .menu a,
    .menu button {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        padding: 11px 13px;
        margin-bottom: 5px;
        background: transparent;
        border: 1px solid transparent;
        border-radius: 12px;
        color: #83a399;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition:
            background .2s ease,
            color .2s ease,
            border .2s ease,
            transform .2s ease;
    }

    .menu a:hover,
    .menu button:hover {
        background: rgba(16, 185, 129, .065);
        border-color: rgba(16, 185, 129, .08);
        color: #d1fae5;
        transform: translateX(3px);
    }

    .menu a.active {
        background:
            linear-gradient(
                90deg,
                rgba(16, 185, 129, .19),
                rgba(20, 184, 166, .055)
            );
        border-color: rgba(16, 185, 129, .17);
        color: var(--primary-light);
        box-shadow:
            inset 3px 0 0 var(--primary),
            0 5px 18px rgba(0, 0, .08);
    }

    .menu-icon {
        width: 25px;
        min-width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .menu form {
        margin: 0;
    }

    /* =========================
       CONTENT
    ========================= */

    .main {
        margin-left: 255px;
        min-height: 100vh;
    }

    .topbar {
        min-height: 75px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 0 38px;
        border-bottom: 1px solid var(--border);
    }

    .admin-info {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--surface);
        padding: 8px 14px 8px 8px;
        border: 1px solid var(--border);
        border-radius: 12px;
        box-shadow: var(--shadow);
    }

    .admin-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background:
            linear-gradient(
                135deg,
                rgba(16, 185, 129, .25),
                rgba(20, 184, 166, .12)
            );
        color: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .admin-text {
        line-height: 1.3;
    }

    .admin-text strong {
        display: block;
        font-size: 13px;
        color: var(--text);
    }

    .admin-text span {
        font-size: 11px;
        color: var(--muted);
    }

    .content {
        padding: 30px 38px 45px;
        width: 100%;
    }

    /* =========================
       BREADCRUMB
    ========================= */

    .breadcrumb {
        font-size: 13px;
        color: var(--muted);
        margin-bottom: 18px;
    }

    .breadcrumb span {
        color: var(--primary-light);
        font-weight: 600;
    }

    /* =========================
       PAGE HEADER
    ========================= */

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 24px;
    }

    .page-header h1 {
        font-size: 27px;
        color: var(--text);
        margin-bottom: 6px;
    }

    .page-header p {
        color: var(--muted);
        font-size: 14px;
    }

    .header-icon {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        background:
            rgba(16, 185, 129, .10);
        border: 1px solid rgba(16, 185, 129, .15);
        color: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
    }

    /* =========================
       CARD
    ========================= */

    .card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow);
        overflow: hidden;
        max-width: 1100px;
    }

    .card-header {
        padding: 21px 25px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(255, 255, 255, .012);
    }

    .card-header-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(16, 185, 129, .10);
        color: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .card-header h3 {
        font-size: 16px;
        color: var(--text);
    }

    .card-header p {
        font-size: 12px;
        color: var(--muted);
        margin-top: 3px;
    }

    .form-body {
        padding: 28px 25px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 22px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    label {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-soft);
        margin-bottom: 8px;
    }

    label span {
        color: #f87171;
    }

    .input-wrap {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--muted);
        font-size: 16px;
        z-index: 2;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        height: 46px;
        border: 1px solid var(--border);
        border-radius: 10px;
        padding: 0 14px 0 42px;
        background: var(--surface-2);
        color: var(--text);
        font-size: 14px;
        outline: none;
        transition: .2s;
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: rgba(16, 185, 129, .45);
        box-shadow: 0 0 0 3px rgba(16, 185, 129, .10);
        background: var(--surface-3);
    }

    .form-group input::placeholder {
        color: var(--muted-2);
    }

    .form-group select option {
        background: var(--surface-2);
        color: var(--text);
    }

    .hint {
        font-size: 11px;
        color: var(--muted);
        margin-top: 7px;
    }

    .error {
        margin-top: 7px;
        color: #f87171;
        font-size: 11px;
    }

    /* =========================
       ROLE INFO
    ========================= */

    .role-box {
        margin-top: 24px;
        padding: 15px 17px;
        background: rgba(16, 185, 129, .065);
        border: 1px solid rgba(16, 185, 129, .16);
        border-radius: 11px;
        display: flex;
        gap: 11px;
        align-items: flex-start;
    }

    .role-box-icon {
        font-size: 18px;
    }

    .role-box strong {
        display: block;
        font-size: 12px;
        color: var(--primary-light);
        margin-bottom: 3px;
    }

    .role-box p {
        font-size: 11px;
        color: var(--text-soft);
        line-height: 1.5;
    }

    /* =========================
       FOOTER
    ========================= */

    .card-footer {
        padding: 18px 25px;
        background: rgba(255, 255, 255, .018);
        border-top: 1px solid var(--border);
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .btn {
        height: 42px;
        padding: 0 19px;
        border-radius: 9px;
        border: none;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        transition: .2s;
    }

    .btn-cancel {
        background: rgba(255, 255, 255, .045);
        border: 1px solid var(--border);
        color: var(--text-soft);
    }

    .btn-cancel:hover {
        background: rgba(255, 255, 255, .08);
        color: white;
    }

    .btn-save {
        background:
            linear-gradient(
                135deg,
                var(--primary),
                var(--primary-dark)
            );
        color: white;
        box-shadow: 0 5px 15px rgba(16, 185, 129, .18);
    }

    .btn-save:hover {
        transform: translateY(-1px);
        box-shadow: 0 8px 20px rgba(16, 185, 129, .25);
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1400px) {

        .content {
            padding-left: 28px;
            padding-right: 28px;
        }
    }

    @media (max-width: 800px) {

        .sidebar {
            width: 215px;
        }

        .main {
            margin-left: 215px;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .content {
            padding: 22px;
        }

        .page-header h1 {
            font-size: 23px;
        }

        .admin-info {
            display: none;
        }
    }

    @media (max-width: 600px) {

        .sidebar {
            width: 72px;
            padding: 20px 9px;
        }

        .logo {
            justify-content: center;
            padding: 0;
        }

        .logo > div:last-child,
        .menu-title {
            display: none;
        }

        .menu a,
        .menu button {
            justify-content: center;
            padding: 12px 5px;
        }

        .menu-icon {
            margin: 0;
        }

        .main {
            margin-left: 72px;
        }

        .content {
            padding: 18px 12px 35px;
        }

        .page-header p {
            display: none;
        }

        .page-header h1 {
            font-size: 20px;
        }

        .header-icon {
            width: 43px;
            height: 43px;
            font-size: 20px;
        }

        .form-body {
            padding: 20px;
        }

        .card-header {
            padding: 18px 20px;
        }

        .card-footer {
            padding: 16px 20px;
            flex-direction: column-reverse;
        }

        .btn {
            width: 100%;
        }
    }
</style>


</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar">


<div class="logo">

    <div class="logo-icon">
        ✚
    </div>

    <div>
        <div>
            <span>Apotek</span> Besok Sembuh
        </div>

        <small>
            PHARMACY MANAGEMENT
        </small>
    </div>

</div>


<div class="menu-title">
    Menu Utama
</div>

<div class="menu">

    <a href="{{ route('dashboard') }}">
        <span class="menu-icon">🏠</span>
        Dashboard
    </a>

    @if (auth()->user()->role === 'admin')

        <a href="{{ route('obat.index') }}">
            <span class="menu-icon">💊</span>
            Data Obat
        </a>

        <a href="{{ route('users.index') }}" class="active">
            <span class="menu-icon">👥</span>
            Admin User
        </a>

        <a href="{{ route('kategori.index') }}">
            <span class="menu-icon">🗂️</span>
            Kategori
        </a>

        <a href="{{ route('stock-adjustment.index') }}">
            <span class="menu-icon">📦</span>
            Stock Adjustment
        </a>

    @endif

    <a href="{{ route('kasir') }}">
        <span class="menu-icon">🛒</span>
        Kasir
    </a>

    <a href="{{ route('transaksi.index') }}">
        <span class="menu-icon">🧾</span>
        Transaksi
    </a>

    @if (auth()->user()->role === 'admin')

        <a href="{{ route('laporan') }}">
            <span class="menu-icon">📊</span>
            Laporan Penjualan
        </a>

        <a href="{{ route('laporan.stok') }}">
            <span class="menu-icon">📦</span>
            Laporan Stok
        </a>

    @endif

</div>


@if (auth()->user()->role === 'admin')

    <div class="menu-title">
        Pengaturan
    </div>

    <div class="menu">

        <a href="{{ route('pengaturan') }}">
            <span class="menu-icon">⚙️</span>
            Pengaturan
        </a>

    </div>

@endif


<div class="menu">

    <form action="{{ route('logout') }}" method="POST">

        @csrf

        <button type="submit">
            <span class="menu-icon">🚪</span>
            Logout
        </button>

    </form>

</div>


</aside>

<!-- MAIN -->

<main class="main">

<!-- TOPBAR -->
<div class="topbar">

    <div class="admin-info">

        <div class="admin-avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>

        <div class="admin-text">

            <strong>
                {{ auth()->user()->name }}
            </strong>

            <span>
                {{ ucfirst(auth()->user()->role) }}
            </span>

        </div>

    </div>

</div>


<!-- CONTENT -->
<div class="content">

    <div class="breadcrumb">
        Admin User &nbsp;/&nbsp;
        <span>Edit User</span>
    </div>


    <div class="page-header">

        <div>

            <h1>
                Edit User 👤
            </h1>

            <p>
                Perbarui informasi akun admin atau kasir.
            </p>

        </div>

        <div class="header-icon">
            👤
        </div>

    </div>


    <div class="card">

        <div class="card-header">

            <div class="card-header-icon">
                ✎
            </div>

            <div>

                <h3>
                    Informasi Akun
                </h3>

                <p>
                    Ubah data pengguna yang diperlukan.
                </p>

            </div>

        </div>


        <form
            action="{{ route('users.update', $user->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')


            <div class="form-body">

                <div class="form-grid">


                    <!-- NAMA -->
                    <div class="form-group">

                        <label for="name">
                            Nama <span>*</span>
                        </label>

                        <div class="input-wrap">

                            <span class="input-icon">
                                👤
                            </span>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', $user->name) }}"
                                placeholder="Masukkan nama"
                                required
                            >

                        </div>

                        @error('name')

                            <div class="error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <!-- EMAIL -->
                    <div class="form-group">

                        <label for="email">
                            Email <span>*</span>
                        </label>

                        <div class="input-wrap">

                            <span class="input-icon">
                                ✉
                            </span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email', $user->email) }}"
                                placeholder="Masukkan email"
                                required
                            >

                        </div>

                        @error('email')

                            <div class="error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <!-- PASSWORD -->
                    <div class="form-group">

                        <label for="password">
                            Password Baru
                        </label>

                        <div class="input-wrap">

                            <span class="input-icon">
                                🔒
                            </span>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Kosongkan jika tidak diubah"
                            >

                        </div>

                        <div class="hint">
                            Minimal 6 karakter jika ingin mengganti password.
                        </div>

                        @error('password')

                            <div class="error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <!-- ROLE -->
                    <div class="form-group">

                        <label for="role">
                            Role <span>*</span>
                        </label>

                        <div class="input-wrap">

                            <span class="input-icon">
                                🛡
                            </span>

                            <select
                                id="role"
                                name="role"
                                required
                            >

                                <option
                                    value="admin"
                                    {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}
                                >
                                    Admin
                                </option>

                                <option
                                    value="kasir"
                                    {{ old('role', $user->role) == 'kasir' ? 'selected' : '' }}
                                >
                                    Kasir
                                </option>

                            </select>

                        </div>

                        @error('role')

                            <div class="error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>

                </div>


                <!-- ROLE INFO -->
                <div class="role-box">

                    <div class="role-box-icon">
                        💡
                    </div>

                    <div>

                        <strong>
                            Informasi Role
                        </strong>

                        <p>
                            Admin memiliki akses penuh ke sistem,
                            sedangkan Kasir digunakan untuk proses transaksi penjualan.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOOTER -->
            <div class="card-footer">

                <a
                    href="{{ route('users.index') }}"
                    class="btn btn-cancel"
                >
                    ← Batal
                </a>

                <button
                    type="submit"
                    class="btn btn-save"
                >
                    ✓ Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>


</main>

</body>

</html>
