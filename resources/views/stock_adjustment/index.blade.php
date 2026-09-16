<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stock Adjustment - Apotek Besok Sembuh</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
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

            --blue: #3b82f6;
            --orange: #f59e0b;
            --red: #ef4444;
            --purple: #a855f7;

            --border: rgba(255, 255, 255, .075);
            --border-green: rgba(16, 185, 129, .18);

            --shadow: 0 10px 35px rgba(0, 0, 0, .18);
            --shadow-hover: 0 18px 40px rgba(0, 0, 0, .28);

            --radius-sm: 10px;
            --radius-md: 14px;
            --radius-lg: 18px;
            --radius-xl: 22px;
        }


        /* =====================================================
           BODY
        ===================================================== */

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

        button,
        a {
            -webkit-tap-highlight-color: transparent;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

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

            box-shadow:
                8px 0 30px rgba(0, 0, .10);
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


        /* =====================================================
           MENU
        ===================================================== */

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
                0 5px 18px rgba(0, 0, 0, .08);
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


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            margin-left: 255px;

            width: calc(100% - 255px);

            padding: 30px 38px 45px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 25px;
        }

        .header-left h1 {
            font-size: 27px;

            margin-bottom: 7px;

            color: var(--text);
        }

        .header-left p {
            color: var(--muted);

            font-size: 14px;
        }


        /* =====================================================
           ADMIN PROFILE
           SAMA DENGAN DASHBOARD
        ===================================================== */

        .admin-wrapper {
            position: relative;
        }

        .admin {
            display: flex;
            align-items: center;
            gap: 10px;

            padding: 7px 11px 7px 7px;

            background:
                rgba(14, 41, 35, .84);

            border:
                1px solid var(--border);

            border-radius: 15px;

            color: white;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, .14);

            cursor: pointer;

            transition: .2s ease;
        }

        .admin:hover {
            background: var(--surface-3);

            border-color:
                rgba(16, 185, 129, .30);

            transform: translateY(-1px);
        }

        .admin-avatar,
        .dropdown-avatar {
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

            font-weight: 800;

            box-shadow:
                0 5px 15px rgba(16, 185, 129, .18);
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
        }


        /* =====================================================
           ADMIN DROPDOWN
        ===================================================== */

        .admin-dropdown {
            display: none;

            position: absolute;

            top: calc(100% + 10px);
            right: 0;

            width: 240px;

            padding: 10px;

            background:
                linear-gradient(
                    145deg,
                    #102b26,
                    #0b211c
                );

            border:
                1px solid rgba(255, 255, 255, .09);

            border-radius: 16px;

            box-shadow:
                0 22px 50px rgba(0, 0, 0, .38);

            z-index: 1000;
        }

        .admin-dropdown.show {
            display: block;

            animation:
                dropdownIn .16s ease;
        }

        @keyframes dropdownIn {

            from {
                opacity: 0;
                transform: translateY(-6px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .dropdown-header {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 10px;
        }

        .dropdown-avatar {
            width: 40px;
            height: 40px;

            border-radius: 12px;
        }

        .dropdown-header strong {
            display: block;

            color: var(--text);

            font-size: 13px;
        }

        .dropdown-header span {
            display: block;

            margin-top: 3px;

            color: #789b90;

            font-size: 10px;
        }

        .dropdown-line {
            height: 1px;

            margin: 7px 0;

            background:
                rgba(255, 255, 255, .065);
        }

        .admin-dropdown a,
        .admin-dropdown form button {
            display: flex;
            align-items: center;

            width: 100%;

            padding: 11px 10px;

            background: transparent;

            border: none;

            border-radius: 10px;

            color: #9ab8ae;

            font-size: 12px;

            text-align: left;

            text-decoration: none;

            cursor: pointer;

            transition: .18s ease;
        }

        .admin-dropdown a:hover,
        .admin-dropdown form button:hover {
            background:
                rgba(16, 185, 129, .085);

            color: #86efac;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .card {
            background:
                linear-gradient(
                    180deg,
                    rgba(14, 41, 35, .96),
                    rgba(11, 33, 28, .96)
                );

            border:
                1px solid var(--border);

            border-radius:
                var(--radius-lg);

            padding: 25px;

            margin-bottom: 25px;

            box-shadow:
                var(--shadow);
        }

        .card h2 {
            font-size: 18px;

            margin-bottom: 20px;

            color: var(--text);
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-grid {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 20px;
        }

        .form-group {
            margin-bottom: 5px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            display: block;

            font-size: 13px;

            font-weight: 700;

            color: var(--text-soft);

            margin-bottom: 8px;
        }

        select,
        input,
        textarea {
            width: 100%;

            padding: 11px 12px;

            border:
                1px solid rgba(255, 255, 255, .10);

            border-radius: 9px;

            font-size: 14px;

            background:
                var(--surface-2);

            color: var(--text);
        }

        select option {
            background: #0b211c;

            color: var(--text);
        }

        textarea {
            resize: vertical;

            min-height: 90px;
        }

        select:focus,
        input:focus,
        textarea:focus {
            outline: none;

            border-color:
                var(--primary);

            box-shadow:
                0 0 0 3px
                rgba(16, 185, 129, .08);
        }

        .stock-info {
            margin-top: 8px;

            font-size: 13px;

            color: var(--muted);
        }

        .stock-info strong {
            color: var(--primary-light);
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .button-area {
            margin-top: 20px;
        }

        .btn {
            border: none;

            padding: 11px 18px;

            border-radius: 10px;

            cursor: pointer;

            font-size: 13px;

            font-weight: 700;
        }

        .btn-green {
            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: white;

            box-shadow:
                0 8px 20px
                rgba(16, 185, 129, .15);

            transition: .2s ease;
        }

        .btn-green:hover {
            transform: translateY(-1px);

            box-shadow:
                0 12px 25px
                rgba(16, 185, 129, .22);
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {
            padding: 13px 15px;

            border-radius: 10px;

            margin-bottom: 20px;

            font-size: 13px;
        }

        .alert-success {
            background:
                rgba(16, 185, 129, .10);

            color: #6ee7b7;

            border:
                1px solid
                rgba(16, 185, 129, .18);
        }

        .alert-error {
            background:
                rgba(239, 68, 68, .10);

            color: #fca5a5;

            border:
                1px solid
                rgba(239, 68, 68, .18);
        }

        .error-list {
            background:
                rgba(239, 68, 68, .10);

            color: #fca5a5;

            border:
                1px solid
                rgba(239, 68, 68, .18);

            border-radius: 10px;

            padding: 13px 20px;

            margin-bottom: 20px;

            font-size: 13px;
        }

        .error-list ul {
            margin-left: 18px;

            margin-top: 5px;
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;
        }

        th {
            background:
                rgba(255, 255, 255, .025);

            text-align: left;

            padding: 13px;

            font-size: 12px;

            color: var(--muted);

            border-bottom:
                1px solid var(--border);

            text-transform: uppercase;

            letter-spacing: .4px;
        }

        td {
            padding: 14px 13px;

            border-bottom:
                1px solid
                rgba(255, 255, 255, .045);

            font-size: 14px;

            color: var(--text-soft);
        }

        tbody tr {
            transition:
                background .2s ease;
        }

        tbody tr:hover {
            background:
                rgba(16, 185, 129, .035);
        }

        td strong {
            color: var(--text);
        }

        td small {
            color: var(--muted);
        }


        /* =====================================================
           BADGE
        ===================================================== */

        .badge {
            display: inline-block;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 700;
        }

        .badge-in {
            background:
                rgba(16, 185, 129, .12);

            color:
                var(--primary-light);

            border:
                1px solid
                rgba(16, 185, 129, .18);
        }

        .badge-out {
            background:
                rgba(239, 68, 68, .10);

            color: #f87171;

            border:
                1px solid
                rgba(239, 68, 68, .18);
        }

        .empty {
            text-align: center;

            color: var(--muted);

            padding: 25px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

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

                width:
                    calc(100% - 215px);

                padding: 22px;
            }

            .form-grid {
                grid-template-columns: 1fr;
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

            .content {
                margin-left: 72px;

                width:
                    calc(100% - 72px);

                padding:
                    18px 12px 35px;
            }

            .header {
                align-items: center;
            }

            .header-left h1 {
                font-size: 20px;
            }

            .header-left p {
                display: none;
            }

            .admin {
                padding:
                    5px 7px 5px 5px;
            }

            .admin-avatar {
                width: 34px;
                height: 34px;
            }

            .admin-arrow {
                display: none;
            }

            .admin-dropdown {
                width: 220px;
            }

        }

    </style>

</head>


<body>

<div class="layout">


    <!-- =====================================================
         SIDEBAR
    ===================================================== -->

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

            <a href="/dashboard">

                <span class="menu-icon">
                    🏠
                </span>

                Dashboard

            </a>


            <a href="/obat">

                <span class="menu-icon">
                    💊
                </span>

                Data Obat

            </a>


            <a href="/users">

                <span class="menu-icon">
                    👥
                </span>

                Admin User

            </a>


            <a href="/kategori">

                <span class="menu-icon">
                    🗂️
                </span>

                Kategori

            </a>


            <a
                href="/stock-adjustment"
                class="active"
            >

                <span class="menu-icon">
                    📦
                </span>

                Stock Adjustment

            </a>


            <a href="/kasir">

                <span class="menu-icon">
                    🛒
                </span>

                Kasir

            </a>


            <a href="/transaksi">

                <span class="menu-icon">
                    🧾
                </span>

                Transaksi

            </a>


            <a href="/laporan">

                <span class="menu-icon">
                    📊
                </span>

                Laporan Penjualan

            </a>


            <a href="/laporan-stok">

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

            <a href="/pengaturan">

                <span class="menu-icon">
                    ⚙️
                </span>

                Pengaturan

            </a>

        </div>


        <div class="menu">

            <form
                action="{{ route('logout') }}"
                method="POST"
            >

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


    <!-- =====================================================
         CONTENT
    ===================================================== -->

    <main class="content">


        <!-- =================================================
             HEADER
        ================================================= -->

        <div class="header">


            <!-- JUDUL -->

            <div class="header-left">

                <h1>
                    Stock Adjustment
                </h1>

                <p>
                    Tambah atau kurangi stok obat secara manual
                </p>

            </div>


            <!-- ADMIN PROFILE -->

            <div class="admin-wrapper">

                <button
                    class="admin"
                    onclick="toggleAdminMenu()"
                    type="button"
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


                    <span
                        class="admin-arrow"
                        id="adminArrow"
                    >
                        ▾
                    </span>

                </button>


                <!-- DROPDOWN -->

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

                        <a href="/pengaturan">

                            👤 &nbsp; Profil & Pengaturan

                        </a>

                    @endif


                    <a href="/dashboard">

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


        <!-- =================================================
             ALERT SUCCESS
        ================================================= -->

        @if (session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        <!-- =================================================
             ALERT ERROR
        ================================================= -->

        @if (session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif


        <!-- =================================================
             VALIDATION ERROR
        ================================================= -->

        @if ($errors->any())

            <div class="error-list">

                <strong>
                    Data belum bisa disimpan:
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


        <!-- =================================================
             FORM ADJUSTMENT
        ================================================= -->

        <div class="card">

            <h2>
                Adjustment Stok
            </h2>


            <form
                action="{{ route('stock-adjustment.store') }}"
                method="POST"
            >

                @csrf


                <div class="form-grid">


                    <!-- OBAT -->

                    <div class="form-group">

                        <label for="obat_id">
                            Obat
                        </label>


                        <select
                            name="obat_id"
                            id="obat_id"
                            required
                        >

                            <option value="">
                                -- Pilih Obat --
                            </option>


                            @foreach ($obat as $item)

                                <option
                                    value="{{ $item->id }}"
                                    data-stok="{{ $item->stok }}"
                                    {{ old('obat_id') == $item->id ? 'selected' : '' }}
                                >

                                    {{ $item->kode_obat }}
                                    -
                                    {{ $item->nama_obat }}

                                </option>

                            @endforeach

                        </select>


                        <div class="stock-info">

                            Stok saat ini:

                            <strong id="current-stock">
                                -
                            </strong>

                        </div>

                    </div>


                    <!-- TIPE -->

                    <div class="form-group">

                        <label for="tipe">
                            Tipe Adjustment
                        </label>


                        <select
                            name="tipe"
                            id="tipe"
                            required
                        >

                            <option value="">
                                -- Pilih Tipe --
                            </option>


                            <option
                                value="IN"
                                {{ old('tipe') == 'IN' ? 'selected' : '' }}
                            >
                                IN - Tambah Stok
                            </option>


                            <option
                                value="OUT"
                                {{ old('tipe') == 'OUT' ? 'selected' : '' }}
                            >
                                OUT - Kurangi Stok
                            </option>

                        </select>

                    </div>


                    <!-- JUMLAH -->

                    <div class="form-group">

                        <label for="jumlah">
                            Jumlah
                        </label>


                        <input
                            type="number"
                            name="jumlah"
                            id="jumlah"
                            min="1"
                            value="{{ old('jumlah') }}"
                            placeholder="Masukkan jumlah"
                            required
                        >

                    </div>


                    <!-- ALASAN -->

                    <div class="form-group">

                        <label for="alasan">
                            Alasan
                        </label>


                        <input
                            type="text"
                            name="alasan"
                            id="alasan"
                            value="{{ old('alasan') }}"
                            placeholder="Contoh: Stok masuk dari supplier"
                            required
                        >

                    </div>


                </div>


                <div class="button-area">

                    <button
                        type="submit"
                        class="btn btn-green"
                    >
                        Simpan Adjustment
                    </button>

                </div>


            </form>

        </div>


        <!-- =================================================
             RIWAYAT
        ================================================= -->

        <div class="card">

            <h2>
                Riwayat Stock Adjustment
            </h2>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>
                                No
                            </th>

                            <th>
                                Tanggal
                            </th>

                            <th>
                                Obat
                            </th>

                            <th>
                                Tipe
                            </th>

                            <th>
                                Jumlah
                            </th>

                            <th>
                                Alasan
                            </th>

                            <th>
                                Oleh
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($adjustments as $index => $adjustment)

                            <tr>


                                <td>
                                    {{ $index + 1 }}
                                </td>


                                <td>
                                    {{ $adjustment->created_at->format('d/m/Y H:i') }}
                                </td>


                                <td>

                                    <strong>
                                        {{ $adjustment->obat->nama_obat }}
                                    </strong>

                                    <br>

                                    <small>
                                        {{ $adjustment->obat->kode_obat }}
                                    </small>

                                </td>


                                <td>

                                    @if ($adjustment->tipe === 'IN')

                                        <span class="badge badge-in">
                                            IN
                                        </span>

                                    @else

                                        <span class="badge badge-out">
                                            OUT
                                        </span>

                                    @endif

                                </td>


                                <td>
                                    {{ $adjustment->jumlah }}
                                </td>


                                <td>
                                    {{ $adjustment->alasan }}
                                </td>


                                <td>
                                    {{ $adjustment->user->name ?? '-' }}
                                </td>


                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="empty"
                                >
                                    Belum ada riwayat stock adjustment.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


    </main>

</div>


<script>


    /* =====================================================
       ADMIN DROPDOWN
    ===================================================== */

    function toggleAdminMenu() {

        const dropdown =
            document.getElementById('adminDropdown');

        const arrow =
            document.getElementById('adminArrow');


        dropdown.classList.toggle('show');


        if (dropdown.classList.contains('show')) {

            arrow.innerHTML = '▴';

        } else {

            arrow.innerHTML = '▾';

        }

    }


    /* TUTUP DROPDOWN KETIKA KLIK DI LUAR */

    document.addEventListener(
        'click',
        function(event) {

            const wrapper =
                document.querySelector('.admin-wrapper');

            const dropdown =
                document.getElementById('adminDropdown');

            const arrow =
                document.getElementById('adminArrow');


            if (!wrapper.contains(event.target)) {

                dropdown.classList.remove('show');

                arrow.innerHTML = '▾';

            }

        }
    );


    /* =====================================================
       STOCK INFO
    ===================================================== */

    const obatSelect =
        document.getElementById('obat_id');

    const currentStock =
        document.getElementById('current-stock');


    function updateStock() {

        const selectedOption =
            obatSelect.options[
                obatSelect.selectedIndex
            ];


        if (
            selectedOption &&
            selectedOption.dataset.stok !== undefined
        ) {

            currentStock.textContent =
                selectedOption.dataset.stok;

        } else {

            currentStock.textContent = '-';

        }

    }


    obatSelect.addEventListener(
        'change',
        updateStock
    );


    updateStock();


</script>

</body>

</html>