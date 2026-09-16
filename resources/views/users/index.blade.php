<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin User - Apotek Besok Sembuh</title>

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
            --cyan: #22d3ee;
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

        /* =========================================================
           LAYOUT
           ========================================================= */

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

            overflow-y: auto;

            box-shadow:
                8px 0 30px rgba(0, 0, 0, .10);
        }

        .sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, .22);
            border-radius: 20px;
        }

        /* =========================================================
           LOGO
           ========================================================= */

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

        /* =========================================================
           MENU
           ========================================================= */

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

            border-color:
                rgba(16, 185, 129, .08);

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

            border-color:
                rgba(16, 185, 129, .17);

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

        /* =========================================================
           CONTENT
           ========================================================= */

        .content {
            margin-left: 255px;

            width: calc(100% - 255px);

            padding:
                30px
                38px
                45px;
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

        /* TOPBAR */

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 28px;

            gap: 20px;
        }

        .page-title h1 {
            font-size: 28px;

            color: var(--text);

            margin-bottom: 6px;
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

            border-color:
                rgba(52, 211, 153, .18);
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

            transition:
                transform .2s ease;
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
                0 18px 45px rgba(0, 0, 0, .30);

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

            color:
                var(--primary-light);
        }

        .admin-dropdown form {
            margin: 0;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 13px 16px;

            border-radius: 11px;

            margin-bottom: 18px;

            font-size: 13px;

            border: 1px solid;
        }

        .alert-success {
            background: rgba(16, 185, 129, .10);

            color: #6ee7b7;

            border-color: rgba(16, 185, 129, .20);
        }

        .alert-error {
            background: rgba(239, 68, 68, .10);

            color: #fca5a5;

            border-color: rgba(239, 68, 68, .20);
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 20px;

            margin-bottom: 20px;

            padding: 22px;

            background:
                linear-gradient(
                    135deg,
                    rgba(14, 41, 35, .95),
                    rgba(11, 33, 28, .95)
                );

            border: 1px solid var(--border);

            border-radius: var(--radius-lg);

            box-shadow: var(--shadow);
        }

        .page-header h2 {
            margin-bottom: 6px;

            color: var(--text);

            font-size: 18px;
        }

        .page-header p {
            color: var(--muted);

            font-size: 12px;
        }

        .btn-add {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 11px 17px;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: white;

            border: 1px solid rgba(52, 211, 153, .18);

            border-radius: 10px;

            font-size: 13px;
            font-weight: 700;

            text-decoration: none;

            white-space: nowrap;

            box-shadow:
                0 8px 20px rgba(16, 185, 129, .14);

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }

        .btn-add:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(16, 185, 129, .22);
        }

        /* =========================
           TABLE
        ========================= */

        .table-card {
            background:
                linear-gradient(
                    135deg,
                    rgba(11, 33, 28, .98),
                    rgba(8, 29, 24, .98)
                );

            border: 1px solid var(--border);

            border-radius: var(--radius-lg);

            box-shadow: var(--shadow);

            overflow: hidden;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 18px 20px;

            border-bottom: 1px solid var(--border);
        }

        .table-header h3 {
            color: var(--text);

            font-size: 15px;

            margin-bottom: 4px;
        }

        .table-header p {
            color: var(--muted);

            font-size: 11px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 700px;
        }

        th {
            background: rgba(18, 51, 43, .62);

            color: #789d91;

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: .8px;

            text-align: left;

            padding: 14px 18px;

            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 15px 18px;

            border-bottom: 1px solid rgba(255, 255, 255, .045);

            color: var(--text-soft);

            font-size: 13px;

            vertical-align: middle;
        }

        tbody tr {
            transition: background .15s ease;
        }

        tbody tr:hover {
            background: rgba(16, 185, 129, .035);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .number {
            width: 55px;

            color: var(--muted-2);

            font-weight: 700;
        }

        .name-cell {
            color: var(--text);

            font-weight: 700;
        }

        .email-cell {
            color: var(--muted);
        }

        /* =========================
           ROLE
        ========================= */

        .role {
            display: inline-flex;
            align-items: center;

            gap: 5px;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;
        }

        .role-admin {
            background: rgba(16, 185, 129, .12);

            color: #6ee7b7;

            border: 1px solid rgba(16, 185, 129, .15);
        }

        .role-kasir {
            background: rgba(34, 211, 238, .10);

            color: #67e8f9;

            border: 1px solid rgba(34, 211, 238, .14);
        }

        /* CURRENT USER */

        .current-user {
            display: inline-block;

            margin-left: 7px;

            padding: 3px 7px;

            border-radius: 10px;

            background: rgba(255, 255, 255, .07);

            color: var(--muted);

            font-size: 9px;

            font-weight: 700;
        }

        /* =========================
           ACTIONS
        ========================= */

        .actions {
            display: flex;
            align-items: center;

            gap: 7px;
        }

        .actions form {
            margin: 0;
        }

        .btn-edit {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 7px 11px;

            background: rgba(245, 158, 11, .12);

            color: #fbbf24;

            border: 1px solid rgba(245, 158, 11, .16);

            border-radius: 7px;

            font-size: 11px;
            font-weight: 700;

            text-decoration: none;

            transition: .2s ease;
        }

        .btn-delete {
            padding: 7px 11px;

            background: rgba(239, 68, 68, .10);

            color: #f87171;

            border: 1px solid rgba(239, 68, 68, .15);

            border-radius: 7px;

            font-size: 11px;
            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }

        .btn-edit:hover {
            background: rgba(245, 158, 11, .18);

            transform: translateY(-1px);
        }

        .btn-delete:hover {
            background: rgba(239, 68, 68, .18);

            transform: translateY(-1px);
        }

        /* EMPTY */

        .empty {
            text-align: center;

            padding: 55px 20px;

            color: var(--muted);
        }

        .empty-icon {
            font-size: 35px;

            margin-bottom: 10px;

            opacity: .65;
        }

        .empty p {
            font-size: 13px;
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

            .page-header {
                align-items: flex-start;

                flex-direction: column;
            }

            .btn-add {
                width: 100%;
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

            @if(auth()->user()->role === 'admin')

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

        <!-- TOPBAR -->
        <div class="topbar">

            <div class="page-title">

                <h1>
                    Admin User 👥
                </h1>

                <p>
                    Kelola akun admin dan kasir.
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


        <!-- ALERT -->
        @if(session('success'))

            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-error">
                ⚠ {{ session('error') }}
            </div>

        @endif


        <!-- PAGE HEADER -->
        <div class="page-header">

            <div>

                <h2>
                    👥 Daftar User
                </h2>

                <p>
                    Kelola akun yang memiliki akses ke sistem apotek.
                </p>

            </div>


            <a href="{{ route('users.create') }}" class="btn-add">
                + Tambah User
            </a>

        </div>


        <!-- TABLE -->
        <div class="table-card">

            <div class="table-header">

                <div>

                    <h3>
                        Data Pengguna
                    </h3>

                    <p>
                        Total {{ $users->count() }} user terdaftar
                    </p>

                </div>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>


                    <tbody>

                        @forelse($users as $user)

                            <tr>

                                <td class="number">
                                    {{ $loop->iteration }}
                                </td>


                                <td class="name-cell">

                                    {{ $user->name }}

                                    @if($user->id === Auth::id())

                                        <span class="current-user">
                                            Anda
                                        </span>

                                    @endif

                                </td>


                                <td class="email-cell">
                                    {{ $user->email }}
                                </td>


                                <td>

                                    @if($user->role === 'admin')

                                        <span class="role role-admin">
                                            🛡️ Admin
                                        </span>

                                    @else

                                        <span class="role role-kasir">
                                            🧾 Kasir
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <div class="actions">

                                        <a
                                            href="{{ route('users.edit', $user->id) }}"
                                            class="btn-edit"
                                        >
                                            ✏ Edit
                                        </a>


                                        @if($user->id !== Auth::id())

                                            <form
                                                action="{{ route('users.destroy', $user->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus user ini?');"
                                            >

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn-delete"
                                                >
                                                    🗑 Hapus
                                                </button>

                                            </form>

                                        @endif

                                    </div>

                                </td>

                            </tr>


                        @empty

                            <tr>

                                <td colspan="5" class="empty">

                                    <div class="empty-icon">
                                        👥
                                    </div>

                                    <p>
                                        Belum ada user yang terdaftar.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </main>


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