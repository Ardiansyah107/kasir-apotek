<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Obat - Apotek Besok Sembuh</title>

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
        }

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 30px 38px 0;

            margin-bottom: 28px;
        }

        .topbar-left h1 {
            font-size: 28px;

            color: var(--text);

            margin-bottom: 7px;
        }

        .topbar-left p {
            color: var(--muted);

            font-size: 14px;
        }

        .user-badge {
            display: flex;
            align-items: center;

            gap: 10px;

            background: rgba(11, 33, 28, .90);

            padding: 9px 13px;

            border-radius: 12px;

            border: 1px solid var(--border);

            box-shadow: var(--shadow);
        }

        .avatar {
            width: 34px;
            height: 34px;

            background:
                linear-gradient(
                    135deg,
                    rgba(52, 211, 153, .22),
                    rgba(16, 185, 129, .08)
                );

            color: var(--primary-light);

            border: 1px solid rgba(16, 185, 129, .18);

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
        }

        .user-info strong {
            display: block;

            font-size: 13px;

            color: var(--text);
        }

        .user-info span {
            font-size: 11px;

            color: var(--muted);
        }

        /* =========================
           MAIN
        ========================= */

        .main {
            padding: 0 38px 45px;

            max-width: 1250px;
        }

        /* =========================
           BACK
        ========================= */

        .back-link {
            display: inline-flex;
            align-items: center;

            gap: 7px;

            color: var(--primary-light);

            text-decoration: none;

            font-size: 13px;
            font-weight: 600;

            margin-bottom: 20px;
        }

        .back-link:hover {
            color: #6ee7b7;
        }

        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            background:
                linear-gradient(
                    180deg,
                    rgba(14, 41, 35, .97),
                    rgba(11, 33, 28, .97)
                );

            border: 1px solid var(--border);

            border-radius: 18px;

            box-shadow: var(--shadow);

            overflow: hidden;
        }

        .card-header {
            padding: 23px 26px;

            border-bottom: 1px solid var(--border);

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-title {
            display: flex;
            align-items: center;

            gap: 13px;
        }

        .title-icon {
            width: 43px;
            height: 43px;

            background:
                linear-gradient(
                    135deg,
                    rgba(52, 211, 153, .18),
                    rgba(16, 185, 129, .07)
                );

            border: 1px solid rgba(16, 185, 129, .14);

            color: var(--primary-light);

            border-radius: 11px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
        }

        .card-title h2 {
            font-size: 18px;

            color: var(--text);

            margin-bottom: 4px;
        }

        .card-title p {
            color: var(--muted);

            font-size: 12px;
        }

        .badge-edit {
            background: rgba(16, 185, 129, .09);

            color: var(--primary-light);

            border: 1px solid rgba(16, 185, 129, .14);

            padding: 7px 11px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: bold;
        }

        .form-body {
            padding: 28px 26px;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 13px 15px;

            border-radius: 9px;

            margin-bottom: 23px;

            font-size: 13px;
        }

        .alert-error {
            background: rgba(239, 68, 68, .08);

            border: 1px solid rgba(239, 68, 68, .20);

            color: #fca5a5;
        }

        .alert-error ul {
            margin: 6px 0 0 18px;
        }

        /* =========================
           SECTION
        ========================= */

        .section-title {
            font-size: 13px;
            font-weight: bold;

            color: var(--text-soft);

            margin-bottom: 15px;

            padding-bottom: 9px;

            border-bottom: 1px solid var(--border);
        }

        .form-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 19px 22px;

            margin-bottom: 28px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 12px;
            font-weight: bold;

            color: var(--text-soft);

            margin-bottom: 7px;
        }

        label span {
            color: #f87171;
        }

        .optional {
            color: var(--muted);

            font-weight: normal;
        }

        input,
        select {
            width: 100%;

            height: 43px;

            padding: 0 13px;

            border: 1px solid rgba(255, 255, 255, .09);

            border-radius: 8px;

            outline: none;

            background: #071b17;

            color: var(--text);

            font-size: 13px;

            transition: .2s;
        }

        input:focus,
        select:focus {
            border-color: var(--primary);

            box-shadow:
                0 0 0 3px rgba(16, 185, 129, .08);
        }

        input::placeholder {
            color: var(--muted-2);
        }

        select option {
            background: #0b211c;
            color: var(--text);
        }

        .input-help {
            margin-top: 5px;

            font-size: 11px;

            color: var(--muted);
        }

        /* =========================
           ACTION
        ========================= */

        .form-actions {
            border-top: 1px solid var(--border);

            padding: 20px 26px;

            display: flex;

            justify-content: flex-end;

            gap: 10px;

            background: rgba(7, 27, 23, .55);
        }

        .btn {
            height: 42px;

            padding: 0 18px;

            border-radius: 8px;

            font-size: 13px;
            font-weight: bold;

            text-decoration: none;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;
        }

        .btn-cancel {
            border: 1px solid rgba(255, 255, 255, .10);

            color: var(--text-soft);

            background: #071b17;
        }

        .btn-cancel:hover {
            background: #0e2923;

            border-color: rgba(255, 255, 255, .15);
        }

        .btn-save {
            border: 1px solid rgba(52, 211, 153, .16);

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: white;

            box-shadow:
                0 6px 18px rgba(16, 185, 129, .13);
        }

        .btn-save:hover {
            box-shadow:
                0 10px 24px rgba(16, 185, 129, .20);

            transform: translateY(-1px);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1400px) {
            .topbar {
                padding-left: 28px;
                padding-right: 28px;
            }

            .main {
                padding-left: 28px;
                padding-right: 28px;
            }
        }

        @media (max-width: 1150px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 215px;
            }

            .content {
                margin-left: 215px;

                width: calc(100% - 215px);
            }

            .topbar {
                padding: 22px 22px 0;
            }

            .main {
                padding: 0 22px 35px;
            }

            .topbar-left h1 {
                font-size: 23px;
            }

            .user-info {
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
            }

            .topbar {
                padding: 18px 12px 0;
            }

            .main {
                padding: 0 12px 35px;
            }

            .topbar-left h1 {
                font-size: 20px;
            }

            .topbar-left p {
                display: none;
            }

            .card-header {
                padding: 18px;
            }

            .form-body {
                padding: 20px 18px;
            }

            .form-actions {
                padding: 18px;

                flex-direction: column-reverse;
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

                <span class="menu-icon">
                    🏠
                </span>

                Dashboard

            </a>


            <a href="{{ route('obat.index') }}" class="active">

                <span class="menu-icon">
                    💊
                </span>

                Data Obat

            </a>


            <a href="{{ route('users.index') }}">

                <span class="menu-icon">
                    👥
                </span>

                Admin User

            </a>


            <a href="{{ route('kategori.index') }}">

                <span class="menu-icon">
                    🗂️
                </span>

                Kategori

            </a>


            <a href="{{ route('stock-adjustment.index') }}">

                <span class="menu-icon">
                    📦
                </span>

                Stock Adjustment

            </a>


            <a href="{{ route('kasir') }}">

                <span class="menu-icon">
                    🛒
                </span>

                Kasir

            </a>


            <a href="{{ route('transaksi.index') }}">

                <span class="menu-icon">
                    🧾
                </span>

                Transaksi

            </a>


            <a href="{{ route('laporan') }}">

                <span class="menu-icon">
                    📊
                </span>

                Laporan Penjualan

            </a>


            <a href="{{ route('laporan.stok') }}">

                <span class="menu-icon">
                    📦
                </span>

                Laporan Stok

            </a>

        </div>


        <div class="menu-title">
            Pengaturan
        </div>


        <div class="menu">

            <a href="{{ route('pengaturan') }}">

                <span class="menu-icon">
                    ⚙️
                </span>

                Pengaturan

            </a>

        </div>


        <div class="menu">

            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button type="submit">

                    <span class="menu-icon">
                        🚪
                    </span>

                    Logout

                </button>

            </form>

        </div>

    </aside>


    <!-- CONTENT -->

    <div class="content">

        <!-- TOPBAR -->

        <header class="topbar">

            <div class="topbar-left">

                <h1>
                    Edit Obat
                </h1>

                <p>
                    Perbarui informasi data obat
                </p>

            </div>


            <div class="user-badge">

                <div class="avatar">
                    A
                </div>

                <div class="user-info">

                    <strong>
                        Admin
                    </strong>

                    <span>
                        Administrator
                    </span>

                </div>

            </div>

        </header>


        <!-- MAIN -->

        <main class="main">

            <a
                href="{{ route('obat.index') }}"
                class="back-link"
            >
                ← Kembali ke Data Obat
            </a>


            <div class="form-card">

                <!-- CARD HEADER -->

                <div class="card-header">

                    <div class="card-title">

                        <div class="title-icon">
                            ✏️
                        </div>

                        <div>

                            <h2>
                                Edit Data Obat
                            </h2>

                            <p>
                                Silakan perbarui informasi obat di bawah ini.
                            </p>

                        </div>

                    </div>


                    <div class="badge-edit">

                        ID #{{ $obat->id }}

                    </div>

                </div>


                <!-- FORM BODY -->

                <div class="form-body">

                    @if ($errors->any())

                        <div class="alert alert-error">

                            <strong>
                                Data belum bisa disimpan.
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


                    <form
                        action="{{ route('obat.update', $obat->id) }}"
                        method="POST"
                    >

                        @csrf

                        @method('PUT')


                        <div class="section-title">
                            Informasi Obat
                        </div>


                        <div class="form-grid">

                            <!-- KODE -->

                            <div class="form-group">

                                <label>
                                    Kode Obat <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    name="kode_obat"
                                    value="{{ old('kode_obat', $obat->kode_obat) }}"
                                    placeholder="Contoh: OBT001"
                                    required
                                >

                            </div>


                            <!-- BARCODE -->

                            <div class="form-group">

                                <label>
                                    Barcode
                                    <span class="optional">
                                        (opsional)
                                    </span>
                                </label>

                                <input
                                    type="text"
                                    name="barcode"
                                    value="{{ old('barcode', $obat->barcode) }}"
                                    placeholder="Masukkan barcode obat"
                                >

                                <div class="input-help">
                                    Boleh dikosongkan jika obat tidak memiliki barcode.
                                </div>

                            </div>


                            <!-- NAMA -->

                            <div class="form-group full">

                                <label>
                                    Nama Obat <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    name="nama_obat"
                                    value="{{ old('nama_obat', $obat->nama_obat) }}"
                                    placeholder="Contoh: Paracetamol 500mg"
                                    required
                                >

                            </div>


                            <!-- KATEGORI -->

                            <div class="form-group">

                                <label>
                                    Kategori <span>*</span>
                                </label>

                                <select
                                    name="kategori_id"
                                    required
                                >

                                    <option value="">
                                        -- Pilih Kategori --
                                    </option>

                                    @foreach ($kategori as $item)

                                        <option
                                            value="{{ $item->id }}"
                                            {{ old('kategori_id', $obat->kategori_id) == $item->id ? 'selected' : '' }}
                                        >
                                            {{ $item->nama }}
                                        </option>

                                    @endforeach

                                </select>

                            </div>


                            <!-- SATUAN -->

                            <div class="form-group">

                                <label>
                                    Satuan <span>*</span>
                                </label>

                                <select
                                    name="satuan"
                                    required
                                >

                                    <option value="">
                                        -- Pilih Satuan --
                                    </option>

                                    <option
                                        value="tablet"
                                        {{ old('satuan', $obat->satuan) == 'tablet' ? 'selected' : '' }}
                                    >
                                        Tablet
                                    </option>

                                    <option
                                        value="kapsul"
                                        {{ old('satuan', $obat->satuan) == 'kapsul' ? 'selected' : '' }}
                                    >
                                        Kapsul
                                    </option>

                                    <option
                                        value="botol"
                                        {{ old('satuan', $obat->satuan) == 'botol' ? 'selected' : '' }}
                                    >
                                        Botol
                                    </option>

                                    <option
                                        value="box"
                                        {{ old('satuan', $obat->satuan) == 'box' ? 'selected' : '' }}
                                    >
                                        Box
                                    </option>

                                    <option
                                        value="strip"
                                        {{ old('satuan', $obat->satuan) == 'strip' ? 'selected' : '' }}
                                    >
                                        Strip
                                    </option>

                                    <option
                                        value="pcs"
                                        {{ old('satuan', $obat->satuan) == 'pcs' ? 'selected' : '' }}
                                    >
                                        Pcs
                                    </option>

                                </select>

                            </div>

                        </div>


                        <div class="section-title">
                            Harga & Stok
                        </div>


                        <div class="form-grid">

                            <!-- HARGA BELI -->

                            <div class="form-group">

                                <label>
                                    Harga Beli <span>*</span>
                                </label>

                                <input
                                    type="number"
                                    name="harga_beli"
                                    value="{{ old('harga_beli', $obat->harga_beli) }}"
                                    min="0"
                                    required
                                >

                            </div>


                            <!-- HARGA JUAL -->

                            <div class="form-group">

                                <label>
                                    Harga Jual <span>*</span>
                                </label>

                                <input
                                    type="number"
                                    name="harga_jual"
                                    value="{{ old('harga_jual', $obat->harga_jual) }}"
                                    min="0"
                                    required
                                >

                            </div>


                            <!-- STOK -->

                            <div class="form-group">

                                <label>
                                    Stok <span>*</span>
                                </label>

                                <input
                                    type="number"
                                    name="stok"
                                    value="{{ old('stok', $obat->stok) }}"
                                    min="0"
                                    required
                                >

                            </div>


                            <!-- MINIMUM STOK -->

                            <div class="form-group">

                                <label>
                                    Minimum Stok <span>*</span>
                                </label>

                                <input
                                    type="number"
                                    name="minimum_stok"
                                    value="{{ old('minimum_stok', $obat->minimum_stok) }}"
                                    min="0"
                                    required
                                >

                                <div class="input-help">
                                    Batas stok sebelum obat dianggap menipis.
                                </div>

                            </div>


                            <!-- EXPIRED -->

                            <div class="form-group">

                                <label>
                                    Tanggal Kadaluarsa

                                    <span class="optional">
                                        (opsional)
                                    </span>
                                </label>

                                <input
                                    type="date"
                                    name="tanggal_kadaluarsa"
                                    value="{{ old('tanggal_kadaluarsa', $obat->tanggal_kadaluarsa ? \Carbon\Carbon::parse($obat->tanggal_kadaluarsa)->format('Y-m-d') : '') }}"
                                >

                            </div>


                            <!-- STATUS -->

                            <div class="form-group">

                                <label>
                                    Status <span>*</span>
                                </label>

                                <select
                                    name="status"
                                    required
                                >

                                    <option
                                        value="aktif"
                                        {{ old('status', $obat->status) == 'aktif' ? 'selected' : '' }}
                                    >
                                        Aktif
                                    </option>

                                    <option
                                        value="nonaktif"
                                        {{ old('status', $obat->status) == 'nonaktif' ? 'selected' : '' }}
                                    >
                                        Tidak Aktif
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- ACTION -->

                        <div class="form-actions">

                            <a
                                href="{{ route('obat.index') }}"
                                class="btn btn-cancel"
                            >
                                Batal
                            </a>

                            <button
                                type="submit"
                                class="btn btn-save"
                            >
                                💾 Simpan Perubahan
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </main>

    </div>

</div>

</body>
</html>