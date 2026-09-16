<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaturan - Apotek Besok Sembuh</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

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

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-bottom: 28px;
        }

        .page-title h1 {
            font-size: 28px;

            margin-bottom: 7px;

            color: var(--text);
        }

        .page-title p {
            color: var(--muted);

            font-size: 14px;
        }

        /* =========================================================
           ADMIN PROFILE
           ========================================================= */

        .admin-wrapper {
            position: relative;
        }

        .admin {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 7px 10px 7px 7px;
            background: rgba(11, 33, 28, .78);
            border: 1px solid var(--border);
            border-radius: 13px;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: background .2s ease, border-color .2s ease;
        }

        .admin:hover {
            background: rgba(14, 41, 35, .95);
            border-color: rgba(52, 211, 153, .18);
        }

        .admin-avatar,
        .dropdown-avatar {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-light), var(--primary-dark));
            color: white;
            font-weight: 800;
            box-shadow: 0 5px 15px rgba(16, 185, 129, .18);
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            border-radius: 11px;
        }

        .admin-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
            text-align: left;
        }

        .admin-info strong {
            color: var(--text);
            font-size: 12px;
        }

        .admin-info span {
            color: #73978c;
            font-size: 10px;
        }

        .admin-arrow {
            margin-left: 5px;
            color: #75988d;
            font-size: 12px;
            transition: transform .2s ease;
        }

        .admin-wrapper.show .admin-arrow {
            transform: rotate(180deg);
        }

        .admin-dropdown {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 220px;
            padding: 8px;
            background: linear-gradient(145deg, rgba(14, 41, 35, .98), rgba(8, 29, 24, .98));
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 18px 45px rgba(0, 0, .30);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-6px) scale(.98);
            transform-origin: top right;
            transition: opacity .18s ease, visibility .18s ease, transform .18s ease;
            z-index: 999;
        }

        .admin-wrapper.show .admin-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        .dropdown-header {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px;
        }

        .dropdown-avatar {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            font-size: 13px;
        }

        .dropdown-header strong {
            display: block;
            color: var(--text);
            font-size: 12px;
        }

        .dropdown-header span {
            display: block;
            margin-top: 2px;
            color: var(--muted);
            font-size: 10px;
        }

        .dropdown-line {
            height: 1px;
            margin: 6px 0;
            background: rgba(255, 255, 255, .06);
        }

        .admin-dropdown a,
        .admin-dropdown form button {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            border-radius: 9px;
            color: var(--text-soft);
            font-size: 11px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: background .18s ease, color .18s ease;
        }

        .admin-dropdown a:hover,
        .admin-dropdown form button:hover {
            background: rgba(16, 185, 129, .08);
            color: var(--primary-light);
        }

        .admin-dropdown form {
            margin: 0;
        }

        /* =========================
           WELCOME
        ========================= */

        .welcome {
            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    #0d4f3c,
                    #047857
                );

            color: white;

            padding: 28px;

            border-radius: 18px;

            margin-bottom: 25px;

            border: 1px solid rgba(52, 211, 153, .16);

            box-shadow: var(--shadow);
        }

        .welcome::after {
            content: "⚙️";

            position: absolute;

            right: 35px;
            top: 50%;

            transform: translateY(-50%);

            font-size: 80px;

            opacity: .08;
        }

        .welcome h2 {
            font-size: 22px;

            margin-bottom: 8px;
        }

        .welcome p {
            font-size: 14px;

            opacity: .9;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 13px 16px;

            border-radius: 11px;

            margin-bottom: 20px;

            font-size: 13px;

            font-weight: 600;
        }

        .alert-success {
            background: rgba(16, 185, 129, .10);

            border: 1px solid rgba(16, 185, 129, .20);

            color: var(--primary-light);
        }

        .alert-error {
            background: rgba(239, 68, 68, .10);

            border: 1px solid rgba(239, 68, 68, .20);

            color: #fca5a5;
        }

        .error-text {
            display: block;

            margin-top: 6px;

            color: #fca5a5;

            font-size: 11px;
        }

        /* =========================
           SETTINGS GRID
        ========================= */

        .settings-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 20px;
        }

        .setting-card {
            background:
                linear-gradient(
                    180deg,
                    rgba(14, 41, 35, .96),
                    rgba(11, 33, 28, .96)
                );

            border: 1px solid var(--border);

            border-radius: 18px;

            padding: 24px;

            box-shadow: var(--shadow);

            transition:
                transform .2s ease,
                border-color .2s ease,
                box-shadow .2s ease;
        }

        .setting-card:hover {
            transform: translateY(-2px);

            border-color: var(--border-green);

            box-shadow: var(--shadow-hover);
        }

        .setting-header {
            display: flex;
            align-items: center;

            gap: 12px;

            margin-bottom: 20px;
        }

        .setting-icon {
            width: 42px;
            height: 42px;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    rgba(52, 211, 153, .18),
                    rgba(16, 185, 129, .07)
                );

            border: 1px solid rgba(16, 185, 129, .14);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
        }

        .setting-header h2 {
            font-size: 17px;

            color: var(--text);
        }

        .setting-header p {
            font-size: 12px;

            color: var(--muted);

            margin-top: 3px;
        }

        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;

            font-size: 13px;
            font-weight: bold;

            color: var(--text-soft);

            margin-bottom: 7px;
        }

        .form-group input {
            width: 100%;

            padding: 11px 12px;

            background: #071b17;

            border: 1px solid rgba(255, 255, 255, .09);

            border-radius: 9px;

            outline: none;

            color: var(--text);

            font-size: 13px;
        }

        .form-group input::placeholder {
            color: var(--muted-2);
        }

        .form-group input:focus {
            border-color: var(--primary);

            box-shadow:
                0 0 0 3px rgba(16, 185, 129, .08);
        }

        .form-group input[readonly] {
            color: var(--muted);

            cursor: default;
        }

        /* =========================
           INFO BOX
        ========================= */

        .info-box {
            background:
                rgba(16, 185, 129, .055);

            border: 1px solid rgba(16, 185, 129, .14);

            border-radius: 11px;

            padding: 14px;

            font-size: 13px;

            color: var(--text-soft);

            line-height: 1.5;
        }

        .info-box strong {
            color: var(--primary-light);
        }

        .stock-number {
            font-size: 30px;

            font-weight: bold;

            color: var(--primary-light);

            margin: 10px 0;
        }

        /* =========================
           BUTTON
        ========================= */

        .save-button {
            margin-top: 15px;

            padding: 11px 18px;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: white;

            border: 1px solid rgba(52, 211, 153, .16);

            border-radius: 9px;

            cursor: pointer;

            font-weight: bold;

            box-shadow:
                0 6px 18px rgba(16, 185, 129, .13);

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }

        .save-button:hover {
            transform: translateY(-1px);

            box-shadow:
                0 10px 24px rgba(16, 185, 129, .20);
        }

        /* =========================
           FUNNY BOX
        ========================= */

        .funny {
            margin-top: 20px;

            padding: 18px;

            border-radius: 14px;

            background:
                rgba(245, 158, 11, .055);

            border: 1px solid rgba(245, 158, 11, .16);

            color: #fcd34d;

            font-size: 13px;

            line-height: 1.5;
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

        @media (max-width: 1150px) {

            .settings-grid {
                grid-template-columns: 1fr;
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

            .admin-info,
            .admin-arrow {
                display: none;
            }

            .admin {
                padding: 5px;
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

            .welcome {
                padding: 24px;
            }

            .welcome h2 {
                font-size: 19px;
            }

            .welcome::after {
                right: 5px;

                font-size: 70px;
            }

            .setting-card {
                padding: 20px;
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

            <a href="{{ route('obat.index') }}">
                <span class="menu-icon">💊</span>
                Data Obat
            </a>

            <a href="{{ route('users.index') }}">
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

            <a href="{{ route('kasir') }}">
                <span class="menu-icon">🛒</span>
                Kasir
            </a>

            <a href="{{ route('transaksi.index') }}">
                <span class="menu-icon">🧾</span>
                Transaksi
            </a>

            <a href="{{ route('laporan') }}">
                <span class="menu-icon">📊</span>
                Laporan Penjualan
            </a>

            <a href="{{ route('laporan.stok') }}">
                <span class="menu-icon">📦</span>
                Laporan Stok
            </a>

        </div>


        <div class="menu-title">
            Pengaturan
        </div>


        <div class="menu">

            <a href="{{ route('pengaturan') }}" class="active">
                <span class="menu-icon">⚙️</span>
                Pengaturan
            </a>

        </div>


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

    <main class="content">

        <!-- TOPBAR -->

        <div class="topbar">

            <div class="page-title">

                <h1>
                    ⚙️ Pengaturan
                </h1>

                <p>
                    Atur sistem Apotek Besok Sembuh sesuka hati.
                </p>

            </div>


            <div class="admin-wrapper" id="adminWrapper">

                <button
                    type="button"
                    class="admin"
                    onclick="toggleAdminMenu()"
                >

                    <div class="admin-avatar">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <div class="admin-info">

                        <strong>
                            {{ Auth::user()->name }}
                        </strong>

                        <span>
                            {{ ucfirst(Auth::user()->role) }}
                        </span>

                    </div>

                    <span class="admin-arrow" id="adminArrow">
                        ▾
                    </span>

                </button>


                <div
                    class="admin-dropdown"
                    id="adminDropdown"
                >

                    <div class="dropdown-header">

                        <div class="dropdown-avatar">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>

                        <div>

                            <strong>
                                {{ Auth::user()->name }}
                            </strong>

                            <span>
                                {{ ucfirst(Auth::user()->role) }}
                            </span>

                        </div>

                    </div>


                    <div class="dropdown-line"></div>


                    @if(auth()->user()->role === 'admin')

                        <a href="{{ route('pengaturan') }}">
                            👤 &nbsp; Profil & Pengaturan
                        </a>

                    @endif


                    <a href="{{ route('dashboard') }}">
                        🏠 &nbsp; Dashboard
                    </a>


                    <div class="dropdown-line"></div>


                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                    >

                        @csrf

                        <button type="submit">
                            🚪 &nbsp; Logout
                        </button>

                    </form>

                </div>

            </div>

        </div>


        <!-- WELCOME -->

        <div class="welcome">

            <h2>
                Santai, yang diatur cuma aplikasinya 😎
            </h2>

            <p>
                Kelola informasi apotek dan pengaturan sistem dari halaman ini.
            </p>

        </div>


        <!-- ALERT SUCCESS -->

        @if(session('success_profil'))
            <div class="alert alert-success">
                ✓ {{ session('success_profil') }}
            </div>
        @endif

        @if(session('success_apotek'))
            <div class="alert alert-success">
                ✓ {{ session('success_apotek') }}
            </div>
        @endif

        @if(session('success_stok'))
            <div class="alert alert-success">
                ✓ {{ session('success_stok') }}
            </div>
        @endif

        @if(session('success_password'))
            <div class="alert alert-success">
                ✓ {{ session('success_password') }}
            </div>
        @endif


        @if($errors->any())
            <div class="alert alert-error">

                Ada data yang belum benar.

                @foreach($errors->all() as $error)
                    <span class="error-text">
                        • {{ $error }}
                    </span>
                @endforeach

            </div>
        @endif


        <!-- SETTINGS -->

        <div class="settings-grid">


            <!-- PROFIL ADMIN -->

            <div class="setting-card">

                <div class="setting-header">

                    <div class="setting-icon">
                        👤
                    </div>

                    <div>

                        <h2>
                            Profil Admin
                        </h2>

                        <p>
                            Informasi pengguna aplikasi
                        </p>

                    </div>

                </div>


                <form
                    action="{{ route('pengaturan.profil') }}"
                    method="POST"
                >

                    @csrf


                    <div class="form-group">

                        <label>
                            Nama
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', auth()->user()->name) }}"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Status
                        </label>

                        <input
                            type="text"
                            value="{{ ucfirst(auth()->user()->role) }}"
                            readonly
                        >

                    </div>


                    <button
                        type="submit"
                        class="save-button"
                    >
                        Simpan Perubahan
                    </button>

                </form>

            </div>


            <!-- INFORMASI APOTEK -->

            <div class="setting-card">

                <div class="setting-header">

                    <div class="setting-icon">
                        🏪
                    </div>

                    <div>

                        <h2>
                            Informasi Apotek
                        </h2>

                        <p>
                            Informasi dasar apotek
                        </p>

                    </div>

                </div>


                <form
                    action="{{ route('pengaturan.apotek') }}"
                    method="POST"
                >

                    @csrf


                    <div class="form-group">

                        <label>
                            Nama Apotek
                        </label>

                        <input
                            type="text"
                            name="nama_apotek"
                            value="{{ old('nama_apotek', $namaApotek) }}"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Nomor Telepon
                        </label>

                        <input
                            type="text"
                            name="nomor_telepon"
                            value="{{ old('nomor_telepon', $nomorTelepon) }}"
                            placeholder="Masukkan nomor telepon"
                        >

                    </div>


                    <button
                        type="submit"
                        class="save-button"
                    >
                        Simpan Informasi
                    </button>

                </form>

            </div>


            <!-- BATAS STOK -->

            <div class="setting-card">

                <div class="setting-header">

                    <div class="setting-icon">
                        ⚠️
                    </div>

                    <div>

                        <h2>
                            Batas Stok Menipis
                        </h2>

                        <p>
                            Penanda stok yang perlu diperhatikan
                        </p>

                    </div>

                </div>


                <form
                    action="{{ route('pengaturan.stok') }}"
                    method="POST"
                >

                    @csrf


                    <div class="form-group">

                        <label>
                            Batas Stok
                        </label>

                        <input
                            type="number"
                            name="batas_stok"
                            value="{{ old('batas_stok', $batasStok) }}"
                            min="1"
                            required
                        >

                    </div>


                    <div class="info-box">

                        Obat dengan stok di bawah atau sama dengan

                        <strong>
                            {{ $batasStok }}
                        </strong>

                        akan dianggap sebagai stok menipis.

                    </div>


                    <button
                        type="submit"
                        class="save-button"
                    >
                        Pengaturan Aktif ✓
                    </button>

                </form>

            </div>


            <!-- PASSWORD -->

            <div class="setting-card">

                <div class="setting-header">

                    <div class="setting-icon">
                        🔐
                    </div>

                    <div>

                        <h2>
                            Keamanan
                        </h2>

                        <p>
                            Pengaturan keamanan akun
                        </p>

                    </div>

                </div>


                <form
                    action="{{ route('pengaturan.password') }}"
                    method="POST"
                >

                    @csrf


                    <div class="form-group">

                        <label>
                            Password Lama
                        </label>

                        <input
                            type="password"
                            name="current_password"
                            placeholder="Masukkan password lama"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Password Baru
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Minimal 8 karakter"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Konfirmasi Password Baru
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi password baru"
                            required
                        >

                    </div>


                    <div class="info-box">

                        🔒 Akun administrator dilindungi oleh sistem login.

                        <br><br>

                        Untuk keamanan, jangan berikan password kepada orang lain.

                    </div>


                    <button
                        type="submit"
                        class="save-button"
                    >
                        Ubah Password
                    </button>

                </form>

            </div>


        </div>


        <div class="funny">

            💊 <strong>Apotek Besok Sembuh:</strong>

            kalau obatnya belum menyembuhkan hari ini,

            setidaknya dashboard-nya harus tetap kelihatan bagus. 😂

        </div>


    </main>

</div>

<script>
    function toggleAdminMenu() {

        const wrapper =
            document.getElementById('adminWrapper');

        wrapper.classList.toggle('show');

    }

    document.addEventListener('click', function(event) {

        const wrapper =
            document.getElementById('adminWrapper');

        if (!wrapper.contains(event.target)) {

            wrapper.classList.remove('show');

        }

    });
</script>

</body>

</html>