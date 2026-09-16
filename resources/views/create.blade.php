<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Obat - Apotek Besok Sembuh</title>

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
            min-height: 100vh;
            padding: 30px 38px 45px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-title h1 {
            color: var(--text);
            font-size: 27px;
            margin-bottom: 6px;
        }

        .page-title p {
            color: var(--muted);
            font-size: 14px;
        }

        .admin {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(14, 41, 35, .85);
            padding: 9px 14px;
            border-radius: 12px;
            border: 1px solid var(--border);
            font-size: 13px;
            box-shadow: var(--shadow);
        }

        .admin-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(16, 185, 129, .15);
            color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .admin-info strong {
            display: block;
            color: var(--text);
            font-size: 13px;
        }

        .admin-info span {
            color: var(--muted);
            font-size: 11px;
        }

        /* =========================
           BACK BUTTON
        ========================= */

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            text-decoration: none;
            color: var(--primary-light);
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 18px;
            transition: .2s;
        }

        .back-link:hover {
            color: #6ee7b7;
            transform: translateX(-2px);
        }

        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            background:
                linear-gradient(
                    145deg,
                    rgba(14, 41, 35, .96),
                    rgba(11, 33, 28, .96)
                );
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 30px;
            max-width: 1000px;
            box-shadow: var(--shadow);
        }

        .form-header {
            display: flex;
            align-items: center;
            gap: 13px;
            padding-bottom: 22px;
            margin-bottom: 25px;
            border-bottom: 1px solid var(--border);
        }

        .form-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: rgba(16, 185, 129, .13);
            color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
            border: 1px solid rgba(16, 185, 129, .14);
        }

        .form-header h2 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--text);
        }

        .form-header p {
            color: var(--muted);
            font-size: 13px;
        }

        /* =========================
           ERROR
        ========================= */

        .error-box {
            background: rgba(245, 158, 11, .08);
            border: 1px solid rgba(245, 158, 11, .20);
            color: #fbbf24;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 25px;
            font-size: 13px;
        }

        .error-box strong {
            display: block;
            margin-bottom: 7px;
        }

        .error-box ul {
            padding-left: 18px;
        }

        .error-box li {
            margin-bottom: 4px;
        }

        /* =========================
           SECTION
        ========================= */

        .section-title {
            font-size: 14px;
            font-weight: bold;
            color: var(--text-soft);
            margin: 25px 0 16px;
        }

        .section-title:first-of-type {
            margin-top: 0;
        }

        /* =========================
           FORM
        ========================= */

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: span 2;
        }

        label {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
            color: var(--text-soft);
        }

        .required {
            color: #f87171;
        }

        input,
        select {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid rgba(255, 255, 255, .10);
            border-radius: 9px;
            font-size: 14px;
            outline: none;
            background: #081d18;
            color: var(--text);
            transition: .2s;
        }

        input:focus,
        select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, .12);
        }

        input::placeholder {
            color: var(--muted-2);
        }

        select option {
            background: #0b211c;
            color: var(--text);
        }

        .helper {
            color: var(--muted-2);
            font-size: 11px;
            margin-top: 6px;
        }

        .input-error {
            border-color: #ef4444 !important;
        }

        .field-error {
            color: #f87171;
            font-size: 12px;
            margin-top: 5px;
        }

        /* =========================
           ACTION
        ========================= */

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 30px;
            padding-top: 22px;
            border-top: 1px solid var(--border);
        }

        .btn-cancel {
            text-decoration: none;
            color: var(--muted);
            background: rgba(255, 255, 255, .045);
            border: 1px solid var(--border);
            padding: 11px 18px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: bold;
            transition: .2s;
        }

        .btn-cancel:hover {
            background: rgba(255, 255, 255, .08);
            color: var(--text);
        }

        .btn-save {
            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );
            color: white;
            border: 1px solid rgba(255, 255, 255, .08);
            padding: 11px 20px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(16, 185, 129, .15);
            transition: .2s;
        }

        .btn-save:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 25px rgba(16, 185, 129, .22);
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
            .form-card {
                max-width: 100%;
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

            .admin-info {
                display: none;
            }
        }

        @media (max-width: 650px) {
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

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: span 1;
            }

            .form-card {
                padding: 20px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn-cancel,
            .btn-save {
                width: 100%;
                text-align: center;
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

            <a href="{{ route('obat.index') }}" class="active">
                <span class="menu-icon">💊</span>
                Data Obat
            </a>

            @if(auth()->user()->role === 'admin')

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

            @endif

            <a href="{{ route('kasir') }}">
                <span class="menu-icon">🛒</span>
                Kasir
            </a>

            <a href="{{ route('transaksi.index') }}">
                <span class="menu-icon">🧾</span>
                Transaksi
            </a>

            @if(auth()->user()->role === 'admin')

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

        @if(auth()->user()->role === 'admin')

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
    <main class="content">

        <div class="topbar">

            <div class="page-title">

                <h1>Tambah Obat</h1>

                <p>
                    Tambahkan obat baru ke dalam persediaan apotek
                </p>

            </div>

            <div class="admin">

                <div class="admin-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="admin-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        {{ ucfirst(auth()->user()->role) }}
                    </span>

                </div>

            </div>

        </div>


        <a href="{{ route('obat.index') }}" class="back-link">
            ← Kembali ke Data Obat
        </a>


        <!-- FORM CARD -->
        <div class="form-card">

            <div class="form-header">

                <div class="form-icon">
                    ➕
                </div>

                <div>

                    <h2>
                        Tambah Data Obat
                    </h2>

                    <p>
                        Lengkapi informasi obat dengan benar sebelum menyimpan.
                    </p>

                </div>

            </div>


            <!-- PESAN ERROR -->
            @if ($errors->any())

                <div class="error-box">

                    <strong>
                        ⚠ Gagal menambahkan obat
                    </strong>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form action="{{ route('obat.store') }}" method="POST">

                @csrf


                <div class="section-title">
                    Informasi Obat
                </div>


                <div class="form-grid">

                    <!-- KODE -->
                    <div class="form-group">

                        <label>
                            Kode Obat
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="kode_obat"
                            value="{{ old('kode_obat') }}"
                            placeholder="Contoh: OBT004"
                            class="{{ $errors->has('kode_obat') ? 'input-error' : '' }}"
                            required
                        >

                        @error('kode_obat')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- BARCODE -->
                    <div class="form-group">

                        <label>
                            Barcode

                            <span style="font-weight: normal; color: var(--muted-2);">
                                (opsional)
                            </span>
                        </label>

                        <input
                            type="text"
                            name="barcode"
                            value="{{ old('barcode') }}"
                            placeholder="Masukkan barcode jika ada"
                            class="{{ $errors->has('barcode') ? 'input-error' : '' }}"
                        >

                        <div class="helper">
                            Boleh dikosongkan jika obat tidak memiliki barcode.
                        </div>

                        @error('barcode')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- NAMA -->
                    <div class="form-group full">

                        <label>
                            Nama Obat
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="nama_obat"
                            value="{{ old('nama_obat') }}"
                            placeholder="Contoh: Paracetamol"
                            class="{{ $errors->has('nama_obat') ? 'input-error' : '' }}"
                            required
                        >

                        @error('nama_obat')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- KATEGORI -->
                    <div class="form-group">

                        <label>
                            Kategori
                            <span class="required">*</span>
                        </label>

                        <select
                            name="kategori_id"
                            class="{{ $errors->has('kategori_id') ? 'input-error' : '' }}"
                            required
                        >

                            <option value="">
                                -- Pilih Kategori --
                            </option>

                            @foreach ($kategori as $item)

                                <option
                                    value="{{ $item->id }}"
                                    {{ old('kategori_id') == $item->id ? 'selected' : '' }}
                                >
                                    {{ $item->nama }}
                                </option>

                            @endforeach

                        </select>

                        @error('kategori_id')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- SATUAN -->
                    <div class="form-group">

                        <label>
                            Satuan
                            <span class="required">*</span>
                        </label>

                        <select
                            name="satuan"
                            class="{{ $errors->has('satuan') ? 'input-error' : '' }}"
                            required
                        >

                            <option value="">
                                -- Pilih Satuan --
                            </option>

                            <option
                                value="Tablet"
                                {{ old('satuan') == 'Tablet' ? 'selected' : '' }}
                            >
                                Tablet
                            </option>

                            <option
                                value="Kapsul"
                                {{ old('satuan') == 'Kapsul' ? 'selected' : '' }}
                            >
                                Kapsul
                            </option>

                            <option
                                value="Botol"
                                {{ old('satuan') == 'Botol' ? 'selected' : '' }}
                            >
                                Botol
                            </option>

                            <option
                                value="Box"
                                {{ old('satuan') == 'Box' ? 'selected' : '' }}
                            >
                                Box
                            </option>

                            <option
                                value="Strip"
                                {{ old('satuan') == 'Strip' ? 'selected' : '' }}
                            >
                                Strip
                            </option>

                            <option
                                value="Pcs"
                                {{ old('satuan') == 'Pcs' ? 'selected' : '' }}
                            >
                                Pcs
                            </option>

                        </select>

                        @error('satuan')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>


                <div class="section-title">
                    Harga & Stok
                </div>


                <div class="form-grid">

                    <!-- HARGA BELI -->
                    <div class="form-group">

                        <label>
                            Harga Beli
                            <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            name="harga_beli"
                            value="{{ old('harga_beli') }}"
                            placeholder="Contoh: 5000"
                            min="0"
                            class="{{ $errors->has('harga_beli') ? 'input-error' : '' }}"
                            required
                        >

                        @error('harga_beli')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- HARGA JUAL -->
                    <div class="form-group">

                        <label>
                            Harga Jual
                            <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            name="harga_jual"
                            value="{{ old('harga_jual') }}"
                            placeholder="Contoh: 7000"
                            min="0"
                            class="{{ $errors->has('harga_jual') ? 'input-error' : '' }}"
                            required
                        >

                        @error('harga_jual')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- STOK -->
                    <div class="form-group">

                        <label>
                            Stok
                            <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            name="stok"
                            value="{{ old('stok', 0) }}"
                            placeholder="Contoh: 20"
                            min="0"
                            class="{{ $errors->has('stok') ? 'input-error' : '' }}"
                            required
                        >

                        @error('stok')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- MINIMUM STOK -->
                    <div class="form-group">

                        <label>
                            Minimum Stok
                            <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            name="minimum_stok"
                            value="{{ old('minimum_stok', 5) }}"
                            placeholder="Contoh: 5"
                            min="0"
                            class="{{ $errors->has('minimum_stok') ? 'input-error' : '' }}"
                            required
                        >

                        <div class="helper">
                            Batas stok sebelum obat dianggap menipis.
                        </div>

                        @error('minimum_stok')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- KADALUARSA -->
                    <div class="form-group">

                        <label>
                            Tanggal Kadaluarsa

                            <span style="font-weight: normal; color: var(--muted-2);">
                                (opsional)
                            </span>
                        </label>

                        <input
                            type="date"
                            name="tanggal_kadaluarsa"
                            value="{{ old('tanggal_kadaluarsa') }}"
                            class="{{ $errors->has('tanggal_kadaluarsa') ? 'input-error' : '' }}"
                        >

                        @error('tanggal_kadaluarsa')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- STATUS -->
                    <div class="form-group">

                        <label>
                            Status
                            <span class="required">*</span>
                        </label>

                        <select
                            name="status"
                            class="{{ $errors->has('status') ? 'input-error' : '' }}"
                            required
                        >

                            <option
                                value="aktif"
                                {{ old('status', 'aktif') == 'aktif' ? 'selected' : '' }}
                            >
                                Aktif
                            </option>

                            <option
                                value="nonaktif"
                                {{ old('status') == 'nonaktif' ? 'selected' : '' }}
                            >
                                Tidak Aktif
                            </option>

                        </select>

                        @error('status')
                            <div class="field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>


                <!-- ACTION -->
                <div class="form-actions">

                    <a
                        href="{{ route('obat.index') }}"
                        class="btn-cancel"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn-save"
                    >
                        💾 Simpan Obat
                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

</body>
</html>