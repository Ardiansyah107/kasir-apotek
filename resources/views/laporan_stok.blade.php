<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Laporan Stok - Apotek Besok Sembuh</title>

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
            radial-gradient(circle at 85% 0%, rgba(16, 185, 129, .11), transparent 27%),
            radial-gradient(circle at 15% 100%, rgba(20, 184, 166, .07), transparent 30%),
            linear-gradient(135deg, var(--bg) 0%, var(--bg-soft) 50%, #061713 100%);
        color: var(--text);
    }

    .layout {
        display: flex;
        min-height: 100vh;
    }

    /* SIDEBAR */
    .sidebar {
        width: 255px;
        background:
            linear-gradient(180deg, var(--sidebar-2) 0%, var(--sidebar) 100%);
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

    /* CONTENT */
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
        background:
            linear-gradient(
                135deg,
                var(--primary-light),
                var(--primary-dark)
            );
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
        background:
            linear-gradient(
                145deg,
                rgba(14, 41, 35, .98),
                rgba(8, 29, 24, .98)
            );
        border: 1px solid var(--border);
        border-radius: 14px;
        box-shadow: 0 18px 45px rgba(0, 0, .30);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-6px) scale(.98);
        transform-origin: top right;
        transition:
            opacity .18s ease,
            visibility .18s ease,
            transform .18s ease;
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

    /* STATISTIK */
    .stats {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }

    .stat-card {
        background:
            linear-gradient(
                145deg,
                rgba(14, 41, 35, .96),
                rgba(11, 33, 28, .96)
            );
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        padding: 22px;
        box-shadow: var(--shadow);
        transition:
            transform .2s ease,
            box-shadow .2s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    .stat-card .label {
        font-size: 13px;
        color: var(--muted);
        margin-bottom: 10px;
    }

    .stat-card .value {
        font-size: 25px;
        font-weight: bold;
        color: var(--primary-light);
    }

    /* TABLE */
    .table-card {
        background:
            linear-gradient(
                145deg,
                rgba(14, 41, 35, .96),
                rgba(11, 33, 28, .96)
            );
        border-radius: var(--radius-lg);
        border: 1px solid var(--border);
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .table-header {
        padding: 22px 25px;
        border-bottom: 1px solid var(--border);
    }

    .table-header h3 {
        color: var(--text);
        font-size: 17px;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background: rgba(6, 23, 19, .65);
        color: var(--muted);
        font-size: 12px;
        padding: 13px 15px;
        text-align: left;
        border-bottom: 1px solid var(--border);
        white-space: nowrap;
        text-transform: uppercase;
        letter-spacing: .4px;
    }

    td {
        padding: 15px;
        border-bottom: 1px solid rgba(255, 255, 255, .045);
        font-size: 14px;
        white-space: nowrap;
        color: var(--text-soft);
    }

    tbody tr {
        transition: background .2s ease;
    }

    tbody tr:hover td {
        background: rgba(16, 185, 129, .035);
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    .status {
        display: inline-block;
        padding: 6px 10px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: bold;
    }

    .normal {
        background: rgba(16, 185, 129, .12);
        border: 1px solid rgba(16, 185, 129, .18);
        color: var(--primary-light);
    }

    .low {
        background: rgba(245, 158, 11, .12);
        border: 1px solid rgba(245, 158, 11, .18);
        color: #fbbf24;
    }

    .empty {
        background: rgba(239, 68, 68, .12);
        border: 1px solid rgba(239, 68, 68, .18);
        color: #f87171;
    }

    .total-row td {
        background: rgba(16, 185, 129, .075);
        color: var(--text);
        font-weight: bold;
        border-top: 1px solid rgba(16, 185, 129, .14);
    }

    .footer {
        padding: 25px 0;
        text-align: center;
        color: var(--muted-2);
        font-size: 13px;
    }

    /* RESPONSIVE */
    @media (max-width: 1400px) {
        .content {
            padding-left: 28px;
            padding-right: 28px;
        }
    }

    @media (max-width: 1150px) {
        .stats {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 900px) {
        .sidebar {
            width: 215px;
        }

        .content {
            margin-left: 215px;
            width: calc(100% - 215px);
        }

        .stats {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 800px) {
        .admin-info,
        .admin-arrow {
            display: none;
        }

        .admin {
            padding: 5px;
        }
    }

    @media (max-width: 700px) {
        .sidebar {
            display: none;
        }

        .content {
            margin-left: 0;
            width: 100%;
            padding: 20px;
        }

        .page-title h1 {
            font-size: 23px;
        }
    }

    @media (max-width: 600px) {
        .content {
            padding: 18px 12px 35px;
        }

        .page-title h1 {
            font-size: 20px;
        }

        .page-title p {
            display: none;
        }

        .stat-card {
            padding: 18px;
        }

        .table-header {
            padding: 16px;
        }

        th,
        td {
            padding-left: 14px;
            padding-right: 14px;
        }
    }

    /* PRINT */
    @media print {
        .sidebar,
        .topbar {
            display: none;
        }

        .content {
            margin-left: 0;
            width: 100%;
            padding: 10px;
        }

        body {
            background: white;
            color: #111827;
        }

        .table-card,
        .stat-card {
            border: none;
            box-shadow: none;
            background: white;
        }

        th {
            background: #f9fafb;
            color: #374151;
        }

        td {
            color: #111827;
            border-color: #e5e7eb;
        }

        .stat-card .value {
            color: #166534;
        }

        .total-row td {
            background: #f0fdf4;
            color: #111827;
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
            <span class="menu-icon">🏠</span>
            Dashboard
        </a>


        @if(auth()->user()->role === 'admin')

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


            <a href="{{ route('laporan.stok') }}" class="active">
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

    <!-- TOPBAR -->
    <div class="topbar">

        <div class="page-title">

            <h1>
                Laporan Stok
            </h1>

            <p>
                Informasi stok obat dan nilai persediaan apotek
            </p>

        </div>


        <!-- ADMIN PROFILE -->
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

                <span
                    class="admin-arrow"
                    id="adminArrow"
                >
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


    <!-- STATISTIK -->
    <div class="stats">

        <div class="stat-card">

            <div class="label">
                Total Jenis Obat
            </div>

            <div class="value">
                {{ number_format($totalObat, 0, ',', '.') }}
            </div>

        </div>


        <div class="stat-card">

            <div class="label">
                Total Stok
            </div>

            <div class="value">
                {{ number_format($totalStok, 0, ',', '.') }}
            </div>

        </div>


        <div class="stat-card">

            <div class="label">
                Total Nilai Stok
            </div>

            <div class="value">
                Rp {{ number_format($totalNilaiStok, 0, ',', '.') }}
            </div>

        </div>

    </div>


    <!-- TABLE -->
    <div class="table-card">

        <div class="table-header">

            <h3>
                Daftar Stok Obat
            </h3>

        </div>


        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Minimum Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Nilai Stok</th>
                        <th>Status</th>
                    </tr>

                </thead>


                <tbody>

                    @forelse ($obat as $index => $item)

                        @php

                            $nilaiStok =
                                $item->stok * $item->harga_beli;

                            if ($item->stok <= 0) {
                                $status = 'OUT OF STOCK';
                                $statusClass = 'empty';

                            } elseif ($item->stok <= $item->minimum_stok) {
                                $status = 'LOW STOCK';
                                $statusClass = 'low';

                            } else {
                                $status = 'NORMAL';
                                $statusClass = 'normal';
                            }

                        @endphp


                        <tr>

                            <td>
                                {{ $index + 1 }}
                            </td>


                            <td>
                                <strong>
                                    {{ $item->kode_obat }}
                                </strong>
                            </td>


                            <td>
                                {{ $item->nama_obat }}
                            </td>


                            <td>
                                {{ $item->satuan }}
                            </td>


                            <td>
                                <strong>
                                    {{ number_format($item->stok, 0, ',', '.') }}
                                </strong>
                            </td>


                            <td>
                                {{ number_format($item->minimum_stok, 0, ',', '.') }}
                            </td>


                            <td>
                                Rp {{ number_format($item->harga_beli, 0, ',', '.') }}
                            </td>


                            <td>
                                Rp {{ number_format($item->harga_jual, 0, ',', '.') }}
                            </td>


                            <td>
                                Rp {{ number_format($nilaiStok, 0, ',', '.') }}
                            </td>


                            <td>

                                <span class="status {{ $statusClass }}">
                                    {{ $status }}
                                </span>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="10"
                                style="text-align:center; padding:30px;"
                            >
                                Belum ada data obat.
                            </td>

                        </tr>

                    @endforelse


                    @if ($obat->count() > 0)

                        <tr class="total-row">

                            <td colspan="4">
                                TOTAL
                            </td>


                            <td>
                                {{ number_format($totalStok, 0, ',', '.') }}
                            </td>


                            <td></td>


                            <td></td>


                            <td></td>


                            <td>
                                Rp {{ number_format($totalNilaiStok, 0, ',', '.') }}
                            </td>


                            <td></td>

                        </tr>

                    @endif

                </tbody>

            </table>

        </div>

    </div>


    <div class="footer">
        Apotek Besok Sembuh &copy; {{ date('Y') }}
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