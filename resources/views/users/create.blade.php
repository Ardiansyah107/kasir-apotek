<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Tambah User - Apotek Besok Sembuh</title>

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

    .layout {
        display: flex;
        min-height: 100vh;
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

    .content {
        margin-left: 255px;
        width: calc(100% - 255px);
        padding: 30px 38px 45px;
    }

    .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .page-title h1 {
        font-size: 27px;
        margin-bottom: 7px;
        color: var(--text);
    }

    .page-title p {
        color: var(--muted);
        font-size: 14px;
    }

    .user-card {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--surface);
        padding: 8px 14px 8px 8px;
        border-radius: 12px;
        border: 1px solid var(--border);
        box-shadow: var(--shadow);
    }

    .avatar {
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

    .user-info {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .user-name {
        font-size: 13px;
        font-weight: bold;
        color: var(--text);
    }

    .user-role {
        font-size: 11px;
        color: var(--muted);
    }

    /* =========================
       MAIN
    ========================= */

    .main {
        width: 100%;
    }

    .page-header {
        margin-bottom: 25px;
    }

    .page-header h1 {
        font-size: 27px;
        margin-bottom: 7px;
        color: var(--text);
    }

    .page-header p {
        color: var(--muted);
        font-size: 14px;
    }

    /* =========================
       ALERT
    ========================= */

    .alert {
        background: rgba(239, 68, 68, .09);
        color: #fca5a5;
        border: 1px solid rgba(239, 68, 68, .20);
        padding: 12px 15px;
        border-radius: 12px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .alert strong {
        color: #f87171;
    }

    /* =========================
       FORM CARD
    ========================= */

    .card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: var(--shadow);
        max-width: 850px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--text-soft);
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid var(--border);
        border-radius: 10px;
        font-size: 14px;
        outline: none;
        background: var(--surface-2);
        color: var(--text);
        transition: .2s ease;
    }

    .form-group input::placeholder {
        color: var(--muted-2);
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: rgba(16, 185, 129, .45);
        box-shadow: 0 0 0 3px rgba(16, 185, 129, .10);
        background: var(--surface-3);
    }

    .form-group select option {
        background: var(--surface-2);
        color: var(--text);
    }

    .error {
        margin-top: 6px;
        color: #f87171;
        font-size: 12px;
    }

    /* =========================
       BUTTON
    ========================= */

    .button-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid var(--border);
    }

    .btn {
        border: 1px solid transparent;
        border-radius: 10px;
        padding: 11px 18px;
        font-size: 13px;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        transition: .2s ease;
    }

    .btn-back {
        background: rgba(255, 255, 255, .045);
        color: var(--text-soft);
        border-color: var(--border);
    }

    .btn-back:hover {
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
        box-shadow: 0 8px 20px rgba(16, 185, 129, .16);
    }

    .btn-save:hover {
        transform: translateY(-1px);
        box-shadow: 0 12px 25px rgba(16, 185, 129, .24);
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

        .content {
            margin-left: 215px;
            width: calc(100% - 215px);
            padding: 22px;
        }

        .page-title h1 {
            font-size: 23px;
        }

        .user-card {
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

        .content {
            margin-left: 72px;
            width: calc(100% - 72px);
            padding: 18px 12px 35px;
        }

        .topbar {
            align-items: center;
        }

        .page-title p {
            display: none;
        }

        .page-title h1 {
            font-size: 20px;
        }

        .main {
            width: 100%;
        }

        .page-header h1 {
            font-size: 22px;
        }

        .card {
            padding: 20px;
        }

        .button-area {
            flex-direction: column-reverse;
            gap: 10px;
            align-items: stretch;
        }

        .btn {
            width: 100%;
        }
    }
</style>


</head>

<body>

<div class="layout">


<!-- SIDEBAR -->
<aside class="sidebar">

    <div class="logo">
        <div class="logo-icon">✚</div>

        <div>
            <div>
                <span>Apotek</span> Besok Sembuh
            </div>

            <small>PHARMACY MANAGEMENT</small>
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


<!-- CONTENT -->
<div class="content">

    <!-- TOPBAR -->
    <div class="topbar">

        <div class="page-title">

            <h1>
                Tambah User 👥
            </h1>

            <p>
                Tambahkan akun admin atau kasir baru.
            </p>

        </div>

        <div class="user-card">

            <div class="avatar">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <div class="user-info">

                <div class="user-name">
                    {{ auth()->user()->name }}
                </div>

                <div class="user-role">
                    {{ ucfirst(auth()->user()->role) }}
                </div>

            </div>

        </div>

    </div>


    <!-- MAIN -->
    <main class="main">

        <div class="page-header">

            <h1>
                Tambah User
            </h1>

            <p>
                Buat akun baru untuk digunakan sebagai Admin atau Kasir.
            </p>

        </div>


        @if ($errors->any())

            <div class="alert">

                <strong>
                    Data belum bisa disimpan.
                </strong>

                <ul style="margin: 8px 0 0 18px;">

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <div class="card">

            <form action="{{ route('users.store') }}" method="POST">

                @csrf


                <!-- NAMA -->
                <div class="form-group">

                    <label for="name">
                        Nama
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama user"
                        required
                    >

                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- EMAIL -->
                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email"
                        required
                    >

                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- PASSWORD -->
                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Minimal 6 karakter"
                        required
                    >

                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- ROLE -->
                <div class="form-group">

                    <label for="role">
                        Role
                    </label>

                    <select id="role" name="role" required>

                        <option value="">
                            -- Pilih Role --
                        </option>

                        <option
                            value="admin"
                            {{ old('role') == 'admin' ? 'selected' : '' }}
                        >
                            Admin
                        </option>

                        <option
                            value="kasir"
                            {{ old('role') == 'kasir' ? 'selected' : '' }}
                        >
                            Kasir
                        </option>

                    </select>

                    @error('role')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- BUTTON -->
                <div class="button-area">

                    <a
                        href="{{ route('users.index') }}"
                        class="btn btn-back"
                    >
                        ← Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-save"
                    >
                        💾 Simpan User
                    </button>

                </div>

            </form>

        </div>

    </main>

</div>


</div>

</body>

</html>
