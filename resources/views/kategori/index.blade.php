<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kategori - Apotek Besok Sembuh</title>

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


        /* LOGO */

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


        /* MENU */

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
           TOPBAR
        ===================================================== */

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


        /* =====================================================
           ADMIN PROFILE - SAMA DENGAN DASHBOARD
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
           BUTTON TAMBAH
        ===================================================== */

        .btn-tambah {
            display: inline-block;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: white;

            padding: 10px 16px;

            border-radius: 10px;

            text-decoration: none;

            font-size: 13px;
            font-weight: 700;

            border:
                1px solid rgba(255, 255, 255, .08);

            box-shadow:
                0 8px 20px rgba(16, 185, 129, .15);

            transition: .2s ease;
        }

        .btn-tambah:hover {
            transform: translateY(-1px);

            box-shadow:
                0 12px 25px rgba(16, 185, 129, .22);
        }


        /* =====================================================
           TABLE CARD
        ===================================================== */

        .table-card {
            background:
                linear-gradient(
                    180deg,
                    rgba(14, 41, 35, .96),
                    rgba(11, 33, 28, .96)
                );

            border:
                1px solid var(--border);

            border-radius: var(--radius-lg);

            overflow: hidden;

            box-shadow: var(--shadow);
        }

        .table-header {
            padding: 20px;

            border-bottom:
                1px solid var(--border);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-header h2 {
            font-size: 17px;

            margin-bottom: 5px;

            color: var(--text);
        }

        .table-header p {
            color: var(--muted);

            font-size: 13px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;
        }

        th {
            text-align: left;

            background:
                rgba(255, 255, 255, .025);

            color: var(--muted);

            padding: 14px 20px;

            font-size: 12px;

            text-transform: uppercase;

            letter-spacing: .4px;

            border-bottom:
                1px solid var(--border);
        }

        td {
            padding: 16px 20px;

            border-bottom:
                1px solid rgba(255, 255, 255, .045);

            font-size: 14px;

            color: var(--text-soft);
        }

        tbody tr {
            transition: background .2s ease;
        }

        tbody tr:hover {
            background:
                rgba(16, 185, 129, .035);
        }

        .nama {
            color: var(--primary-light);

            font-weight: 700;
        }


        /* STATUS */

        .status {
            display: inline-block;

            padding: 5px 9px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 700;
        }

        .status-aktif {
            background:
                rgba(16, 185, 129, .12);

            color: var(--primary-light);

            border:
                1px solid rgba(16, 185, 129, .18);
        }

        .status-nonaktif {
            background:
                rgba(156, 163, 175, .10);

            color: #9ca3af;

            border:
                1px solid rgba(156, 163, 175, .12);
        }


        /* BUTTON EDIT */

        .btn-edit {
            display: inline-block;

            padding: 7px 12px;

            background:
                rgba(16, 185, 129, .08);

            color: var(--primary-light);

            border:
                1px solid rgba(16, 185, 129, .18);

            border-radius: 7px;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            transition: .2s ease;
        }

        .btn-edit:hover {
            background:
                rgba(16, 185, 129, .15);
        }


        /* BUTTON HAPUS */

        .btn-hapus {
            display: inline-block;

            padding: 7px 12px;

            background:
                rgba(239, 68, 68, .08);

            color: #f87171;

            border:
                1px solid rgba(239, 68, 68, .18);

            border-radius: 7px;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }

        .btn-hapus:hover {
            background:
                rgba(239, 68, 68, .14);
        }


        /* ALERT */

        .alert {
            padding: 12px 16px;

            border-radius: 10px;

            margin-bottom: 20px;

            font-size: 13px;
        }

        .alert-success {
            background:
                rgba(16, 185, 129, .10);

            color: #6ee7b7;

            border:
                1px solid rgba(16, 185, 129, .18);
        }

        .alert-error {
            background:
                rgba(239, 68, 68, .10);

            color: #fca5a5;

            border:
                1px solid rgba(239, 68, 68, .18);
        }


        /* EMPTY */

        .empty {
            text-align: center;

            padding: 55px 20px;

            color: var(--muted);

            font-size: 14px;
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

            .table-header {
                padding: 16px;
            }

            th,
            td {
                padding-left: 14px;
                padding-right: 14px;
            }

            .admin {
                padding-right: 7px;
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


                <a href="{{ route('kategori.index') }}" class="active">

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


            <a href="{{ route('transaksi.index') }}">

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


    <!-- =====================================================
         CONTENT
    ===================================================== -->

    <main class="content">


        <!-- TOPBAR -->

        <div class="topbar">


            <div class="page-title">

                <h1>
                    Kategori
                </h1>

                <p>
                    Kelola kategori obat
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


        <!-- ALERT -->

        @if (session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        @if (session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif


        <!-- TABLE -->

        <div class="table-card">


            <div class="table-header">

                <div>

                    <h2>
                        Data Kategori
                    </h2>

                    <p>
                        Daftar kategori obat yang tersedia
                    </p>

                </div>


                <a
                    href="{{ route('kategori.create') }}"
                    class="btn-tambah"
                >
                    + Tambah Kategori
                </a>

            </div>


            <div class="table-wrapper">


                @if ($kategori->count() > 0)


                    <table>

                        <thead>

                            <tr>

                                <th>
                                    No
                                </th>

                                <th>
                                    Nama Kategori
                                </th>

                                <th>
                                    Deskripsi
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


                            @foreach ($kategori as $index => $item)

                                <tr>


                                    <td>
                                        {{ $index + 1 }}
                                    </td>


                                    <td class="nama">
                                        {{ $item->nama }}
                                    </td>


                                    <td>
                                        {{ $item->deskripsi ?: '-' }}
                                    </td>


                                    <td>

                                        @if ($item->status === 'aktif')

                                            <span class="status status-aktif">
                                                AKTIF
                                            </span>

                                        @else

                                            <span class="status status-nonaktif">
                                                NONAKTIF
                                            </span>

                                        @endif

                                    </td>


                                    <td>


                                        <a
                                            href="{{ route('kategori.edit', $item->id) }}"
                                            class="btn-edit"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route('kategori.destroy', $item->id) }}"
                                            method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Yakin ingin menghapus kategori {{ $item->nama }}?');"
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


                                    </td>


                                </tr>

                            @endforeach


                        </tbody>

                    </table>


                @else


                    <div class="empty">

                        Belum ada kategori obat.

                    </div>


                @endif


            </div>

        </div>


    </main>

</div>


<!-- =====================================================
     ADMIN DROPDOWN JAVASCRIPT
===================================================== -->

<script>

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


    document.addEventListener('click', function(event) {

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

    });

</script>


</body>

</html>