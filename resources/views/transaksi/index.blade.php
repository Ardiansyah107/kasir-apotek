<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transaksi - Apotek Besok Sembuh</title>

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


        /* =========================================================
           SIDEBAR
        ========================================================= */

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


        /* =========================================================
           CONTENT
        ========================================================= */

        .content {
            margin-left: 255px;

            width: calc(100% - 255px);

            padding: 30px 38px 45px;
        }


        .topbar {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 30px;
        }


        .page-title h1 {
            font-size: 27px;

            font-weight: 800;

            color: var(--text);

            margin-bottom: 7px;
        }


        .page-title p {
            color: var(--muted);

            font-size: 13px;
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

            transition:
                background .2s ease,
                border-color .2s ease;
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

            box-shadow:
                0 18px 45px rgba(0, 0, .30);

            opacity: 0;

            visibility: hidden;

            transform:
                translateY(-6px)
                scale(.98);

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

            transform:
                translateY(0)
                scale(1);
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

            background:
                rgba(255, 255, 255, .06);
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

            transition:
                background .18s ease,
                color .18s ease;
        }


        .admin-dropdown a:hover,
        .admin-dropdown form button:hover {
            background:
                rgba(16, 185, 129, .08);

            color: var(--primary-light);
        }


        .admin-dropdown form {
            margin: 0;
        }


        /* =========================================================
           SUMMARY
        ========================================================= */

        .summary {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 18px;

            margin-bottom: 22px;
        }


        .summary-card {
            background:
                linear-gradient(
                    145deg,
                    rgba(14, 41, 35, .94),
                    rgba(11, 33, 28, .94)
                );

            border: 1px solid var(--border);

            border-radius: var(--radius-md);

            padding: 20px;

            box-shadow: var(--shadow);

            transition: .2s ease;
        }


        .summary-card:hover {
            transform: translateY(-2px);

            border-color: var(--border-green);

            box-shadow: var(--shadow-hover);
        }


        .summary-card .label {
            color: var(--muted);

            font-size: 13px;

            margin-bottom: 8px;
        }


        .summary-card .value {
            font-size: 23px;

            font-weight: 800;

            color: var(--text);
        }


        .summary-card .sub {
            margin-top: 5px;

            color: var(--muted-2);

            font-size: 12px;
        }


        /* =========================================================
           TABLE
        ========================================================= */

        .table-card {
            background:
                linear-gradient(
                    145deg,
                    rgba(14, 41, 35, .94),
                    rgba(11, 33, 28, .94)
                );

            border: 1px solid var(--border);

            border-radius: var(--radius-lg);

            overflow: hidden;

            box-shadow: var(--shadow);
        }


        .table-header {
            padding: 20px;

            border-bottom: 1px solid var(--border);

            background: rgba(18, 51, 43, .25);
        }


        .table-header h2 {
            font-size: 17px;

            font-weight: 800;

            color: var(--text);

            margin-bottom: 5px;
        }


        .table-header p {
            color: var(--muted);

            font-size: 13px;
        }


        /* =========================================================
           SEARCH + FILTER
        ========================================================= */

        .search-filter-form {
            display: flex;

            align-items: flex-end;

            gap: 10px;

            margin-top: 18px;

            flex-wrap: wrap;
        }


        .search-box {
            display: flex;

            align-items: center;

            width: 260px;

            height: 43px;

            background: rgba(6, 23, 19, .65);

            border: 1px solid var(--border);

            border-radius: 10px;

            overflow: hidden;

            flex-shrink: 0;
        }


        .search-icon {
            padding-left: 13px;

            font-size: 14px;
        }


        .search-box input {
            flex: 1;

            min-width: 0;

            height: 100%;

            padding: 0 10px;

            background: transparent;

            border: none;

            outline: none;

            color: var(--text);

            font-size: 13px;
        }


        .search-box input::placeholder {
            color: var(--muted-2);
        }


        .btn-search {
            height: 100%;

            padding: 0 14px;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: white;

            border: none;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;
        }


        .btn-search:hover {
            background: var(--primary-dark);
        }


        /* =========================================================
           TANGGAL
        ========================================================= */

        .date-field {
            display: flex;

            align-items: center;

            gap: 7px;
        }


        .date-field:first-of-type {
            margin-left: auto;
        }


        .date-field label {
            color: var(--muted);

            font-size: 11px;

            font-weight: 700;

            white-space: nowrap;
        }


        .date-field input {
            width: 150px;

            height: 43px;

            padding: 0 10px;

            background: rgba(6, 23, 19, .65);

            border: 1px solid var(--border);

            border-radius: 10px;

            color: var(--text);

            font-size: 12px;

            outline: none;
        }


        .date-field input:focus {
            border-color: rgba(16, 185, 129, .40);

            box-shadow:
                0 0 0 3px rgba(16, 185, 129, .07);
        }


        .date-field input::-webkit-calendar-picker-indicator {
            filter: invert(1);

            opacity: .7;

            cursor: pointer;
        }


        /* =========================================================
           BUTTON FILTER
        ========================================================= */

        .btn-filter {
            height: 43px;

            padding: 0 17px;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: white;

            border: none;

            border-radius: 10px;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .btn-filter:hover {
            transform: translateY(-1px);

            box-shadow:
                0 7px 18px rgba(16, 185, 129, .18);
        }


        /* =========================================================
           BUTTON RESET
        ========================================================= */

        .btn-reset {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            height: 43px;

            padding: 0 15px;

            background: rgba(239, 68, 68, .08);

            color: #f87171;

            border: 1px solid rgba(239, 68, 68, .18);

            border-radius: 10px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            transition: .2s ease;
        }


        .btn-reset:hover {
            background: rgba(239, 68, 68, .15);

            border-color: rgba(239, 68, 68, .30);

            transform: translateY(-1px);
        }


        /* =========================================================
           TABLE
        ========================================================= */

        .table-wrapper {
            overflow-x: auto;
        }


        .table-wrapper::-webkit-scrollbar {
            height: 5px;
        }


        .table-wrapper::-webkit-scrollbar-track {
            background: transparent;
        }


        .table-wrapper::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, .20);

            border-radius: 20px;
        }


        table {
            width: 100%;

            border-collapse: collapse;
        }


        th {
            text-align: left;

            background: rgba(6, 23, 19, .65);

            color: var(--muted);

            padding: 14px 20px;

            font-size: 12px;

            text-transform: uppercase;

            letter-spacing: .4px;

            border-bottom: 1px solid var(--border);
        }


        td {
            padding: 16px 20px;

            border-bottom: 1px solid var(--border);

            font-size: 14px;

            color: var(--text-soft);
        }


        tbody tr {
            transition: .2s ease;
        }


        tbody tr:hover {
            background: rgba(16, 185, 129, .035);
        }


        tbody tr:last-child td {
            border-bottom: none;
        }


        .kode {
            color: var(--primary-light);

            font-weight: 800;
        }


        .total {
            font-weight: 800;

            color: var(--text);
        }


        .status {
            display: inline-block;

            background: rgba(16, 185, 129, .10);

            color: var(--primary-light);

            padding: 5px 9px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 800;

            border: 1px solid var(--border-green);
        }


        /* =========================================================
           BUTTON DETAIL
        ========================================================= */

        .btn-detail {
            display: inline-block;

            padding: 7px 12px;

            background: rgba(16, 185, 129, .08);

            color: var(--primary-light);

            border: 1px solid rgba(16, 185, 129, .18);

            border-radius: 8px;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            margin-right: 5px;

            transition: .2s ease;
        }


        .btn-detail:hover {
            background: rgba(16, 185, 129, .15);

            border-color: rgba(16, 185, 129, .30);

            transform: translateY(-1px);
        }


        /* =========================================================
           BUTTON HAPUS
        ========================================================= */

        .btn-hapus {
            display: inline-block;

            padding: 7px 12px;

            background: rgba(239, 68, 68, .08);

            color: #f87171;

            border: 1px solid rgba(239, 68, 68, .18);

            border-radius: 8px;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .btn-hapus:hover {
            background: rgba(239, 68, 68, .15);

            border-color: rgba(239, 68, 68, .30);

            transform: translateY(-1px);
        }


        .empty {
            text-align: center;

            padding: 55px 20px;

            color: var(--muted-2);

            font-size: 14px;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1400px) {

            .content {
                padding-left: 28px;

                padding-right: 28px;
            }

        }


        @media (max-width: 1150px) {

            .summary {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

        }


        @media (max-width: 900px) {

            .search-filter-form {
                align-items: stretch;
            }


            .search-box {
                width: 220px;

                min-width: 220px;
            }


            .date-field {
                flex: 1;
            }


            .date-field:first-of-type {
                margin-left: 0;
            }


            .date-field input {
                width: 100%;
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


            .summary {
                grid-template-columns: 1fr;
            }


            .table-header {
                padding: 16px;
            }


            .search-filter-form {
                flex-direction: column;

                align-items: stretch;
            }


            .search-box {
                width: 100%;

                min-width: 0;
            }


            .date-field {
                width: 100%;

                justify-content: space-between;
            }


            .date-field:first-of-type {
                margin-left: 0;
            }


            .date-field input {
                flex: 1;
            }


            .btn-filter,
            .btn-reset {
                width: 100%;
            }


            th,
            td {
                padding-left: 14px;

                padding-right: 14px;
            }

        }

    </style>

</head>


<body>

<div class="layout">


    <!-- =========================================================
         SIDEBAR
    ========================================================= -->

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


            @if(auth()->user()->role === 'admin')

                <a href="{{ route('obat.index') }}">

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

            @endif


            <a href="{{ route('kasir') }}">

                <span class="menu-icon">
                    🛒
                </span>

                Kasir

            </a>


            <a
                href="{{ route('transaksi.index') }}"
                class="active"
            >

                <span class="menu-icon">
                    🧾
                </span>

                Transaksi

            </a>


            @if(auth()->user()->role === 'admin')

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

            @endif

        </div>


        @if(auth()->user()->role === 'admin')

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

        @endif


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



    <!-- =========================================================
         CONTENT
    ========================================================= -->

    <main class="content">


        <!-- TOPBAR -->

        <div class="topbar">

            <div class="page-title">

                <h1>
                    Transaksi 👋
                </h1>

                <p>

                    @if(auth()->user()->role === 'admin')

                        Kelola dan pantau seluruh transaksi penjualan.

                    @else

                        Lihat riwayat transaksi penjualan obat.

                    @endif

                </p>

            </div>


            <!-- =====================================================
                 ADMIN PROFILE
            ===================================================== -->

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



        <!-- =========================================================
             SUMMARY
        ========================================================= -->

        <div class="summary">


            <div class="summary-card">

                <div class="label">
                    Total Transaksi
                </div>

                <div class="value">
                    {{ $transaksi->count() }}
                </div>

                <div class="sub">
                    Transaksi yang ditampilkan
                </div>

            </div>


            <div class="summary-card">

                <div class="label">
                    Total Item Terjual
                </div>

                <div class="value">

                    {{ $transaksi->sum(function ($item) {
                        return $item->detail->sum('jumlah');
                    }) }}

                </div>

                <div class="sub">
                    Dari transaksi yang ditampilkan
                </div>

            </div>


            <div class="summary-card">

                <div class="label">
                    Total Pendapatan
                </div>

                <div class="value">

                    Rp {{ number_format(
                        $transaksi->sum('total_harga'),
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

                <div class="sub">
                    Dari transaksi yang ditampilkan
                </div>

            </div>


        </div>



        <!-- =========================================================
             TABLE
        ========================================================= -->

        <div class="table-card">


            <div class="table-header">

                <h2>
                    Riwayat Transaksi
                </h2>

                <p>
                    Daftar seluruh transaksi penjualan obat
                </p>


                <!-- SEARCH + FILTER -->

                <form
                    action="{{ route('transaksi.index') }}"
                    method="GET"
                    class="search-filter-form"
                >


                    <!-- SEARCH -->

                    <div class="search-box">

                        <span class="search-icon">
                            🔍
                        </span>

                        <input
                            type="text"
                            name="search"
                            value="{{ $search ?? '' }}"
                            placeholder="Cari kode..."
                        >

                        <button
                            type="submit"
                            class="btn-search"
                        >
                            Cari
                        </button>

                    </div>


                    <!-- TANGGAL MULAI -->

                    <div class="date-field">

                        <label for="tanggal_mulai">
                            Dari
                        </label>

                        <input
                            type="date"
                            id="tanggal_mulai"
                            name="tanggal_mulai"
                            value="{{ $tanggal_mulai ?? '' }}"
                        >

                    </div>


                    <!-- TANGGAL SELESAI -->

                    <div class="date-field">

                        <label for="tanggal_selesai">
                            Sampai
                        </label>

                        <input
                            type="date"
                            id="tanggal_selesai"
                            name="tanggal_selesai"
                            value="{{ $tanggal_selesai ?? '' }}"
                        >

                    </div>


                    <!-- FILTER -->

                    <button
                        type="submit"
                        class="btn-filter"
                    >
                        Filter
                    </button>


                    <!-- RESET -->

                    <a
                        href="{{ route('transaksi.index') }}"
                        class="btn-reset"
                    >
                        Reset
                    </a>


                </form>

            </div>



            <!-- =====================================================
                 TABLE DATA
            ===================================================== -->

            <div class="table-wrapper">


                @if ($transaksi->count() > 0)


                    <table>

                        <thead>

                            <tr>

                                <th>
                                    No
                                </th>

                                <th>
                                    Kode Transaksi
                                </th>

                                <th>
                                    Tanggal
                                </th>

                                <th>
                                    Total Item
                                </th>

                                <th>
                                    Total Pembayaran
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach ($transaksi as $index => $item)


                                <tr>


                                    <td>
                                        {{ $index + 1 }}
                                    </td>


                                    <td class="kode">
                                        {{ $item->kode_transaksi }}
                                    </td>


                                    <td>

                                        {{ $item->created_at->format('d/m/Y H:i') }}

                                    </td>


                                    <td>

                                        {{ $item->detail->sum('jumlah') }}

                                        item

                                    </td>


                                    <td class="total">

                                        Rp {{ number_format(
                                            $item->total_harga,
                                            0,
                                            ',',
                                            '.'
                                        ) }}

                                    </td>


                                    <td>

                                        <span class="status">
                                            BERHASIL
                                        </span>

                                    </td>


                                    <td>


                                        <a
                                            href="{{ route('transaksi.detail', $item->id) }}"
                                            class="btn-detail"
                                        >
                                            Lihat Detail
                                        </a>


                                        @if(auth()->user()->role === 'admin')


                                            <form
                                                action="{{ route('transaksi.destroy', $item->id) }}"
                                                method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Yakin ingin menghapus transaksi {{ $item->kode_transaksi }}? Stok obat akan dikembalikan.');"
                                            >

                                                @csrf

                                                @method('DELETE')


                                                <button
                                                    type="submit"
                                                    class="btn-hapus"
                                                >
                                                    Hapus
                                                </button>

                                            </form>


                                        @endif


                                    </td>


                                </tr>


                            @endforeach


                        </tbody>

                    </table>


                @else


                    <div class="empty">


                        @if(!empty($search))

                            Transaksi dengan kode
                            <strong>{{ $search }}</strong>
                            tidak ditemukan.


                        @elseif(
                            !empty($tanggal_mulai) ||
                            !empty($tanggal_selesai)
                        )

                            Tidak ada transaksi pada tanggal yang dipilih.


                        @else

                            Belum ada transaksi penjualan.

                        @endif


                    </div>


                @endif


            </div>

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