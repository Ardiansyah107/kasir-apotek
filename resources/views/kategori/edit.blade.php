<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kategori - Apotek Besok Sembuh</title>

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

            --red: #ef4444;

            --border: rgba(255, 255, 255, .075);

            --shadow: 0 10px 35px rgba(0, 0, .18);

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

        /* SIDEBAR */

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
            color: var(--text);
            font-size: 27px;
            margin-bottom: 7px;
        }

        .page-title p {
            color: var(--muted);
            font-size: 14px;
        }

        .admin {
            background: var(--surface);
            color: var(--text-soft);
            padding: 10px 16px;
            border-radius: 10px;
            border: 1px solid var(--border);
            font-size: 14px;
        }

        /* FORM CARD */

        .form-card {
            background:
                linear-gradient(
                    145deg,
                    rgba(14, 41, 35, .96),
                    rgba(11, 33, 28, .96)
                );
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 25px;
            max-width: 800px;
            box-shadow: var(--shadow);
        }

        .form-card h2 {
            color: var(--text);
            font-size: 18px;
            margin-bottom: 6px;
        }

        .form-card > p {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 25px;
        }

        /* ERROR */

        .error-box {
            background: rgba(239, 68, 68, .08);
            color: #fca5a5;
            border: 1px solid rgba(239, 68, 68, .20);
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .error-box strong {
            color: #f87171;
        }

        .error-box ul {
            margin: 8px 0 0 18px;
        }

        /* FORM */

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: var(--text-soft);
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 11px 13px;
            background: var(--surface-2);
            color: var(--text);
            border: 1px solid rgba(255, 255, 255, .09);
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            transition:
                border-color .2s ease,
                box-shadow .2s ease;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--muted-2);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, .08);
        }

        .form-group textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-group select option {
            background: var(--surface-2);
            color: var(--text);
        }

        .error {
            color: #f87171;
            font-size: 12px;
            margin-top: 6px;
        }

        /* BUTTON */

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn-simpan {
            border: none;
            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );
            color: white;
            padding: 11px 18px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            box-shadow:
                0 7px 20px rgba(16, 185, 129, .16);
            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }

        .btn-simpan:hover {
            transform: translateY(-1px);
            box-shadow:
                0 10px 25px rgba(16, 185, 129, .22);
        }

        .btn-kembali {
            display: inline-block;
            background: rgba(255, 255, 255, .045);
            color: var(--text-soft);
            padding: 11px 18px;
            border-radius: 10px;
            border: 1px solid var(--border);
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            transition:
                background .2s ease,
                border-color .2s ease;
        }

        .btn-kembali:hover {
            background: rgba(255, 255, 255, .08);
            border-color: rgba(255, 255, 255, .12);
        }

        /* RESPONSIVE */

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

            .admin {
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

            .form-card {
                padding: 18px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn-simpan,
            .btn-kembali {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

<div class="layout">

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

                <a href="{{ route('kategori.index') }}" class="active">
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


    <main class="content">

        <div class="topbar">

            <div class="page-title">

                <h1>
                    Edit Kategori
                </h1>

                <p>
                    Ubah data kategori obat
                </p>

            </div>


            <div class="admin">
                Admin
            </div>

        </div>


        <div class="form-card">

            <h2>
                Form Edit Kategori
            </h2>

            <p>
                Perbarui data kategori sesuai kebutuhan.
            </p>


            @if ($errors->any())

                <div class="error-box">

                    <strong>
                        Data belum bisa diperbarui:
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
                action="{{ route('kategori.update', $kategori->id) }}"
                method="POST"
            >

                @csrf
                @method('PUT')


                <div class="form-group">

                    <label for="nama">
                        Nama Kategori
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama', $kategori->nama) }}"
                        placeholder="Contoh: Antibiotik"
                        required
                    >

                    @error('nama')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="form-group">

                    <label for="deskripsi">
                        Deskripsi
                    </label>

                    <textarea
                        id="deskripsi"
                        name="deskripsi"
                        placeholder="Contoh: Kategori obat antibiotik"
                    >{{ old('deskripsi', $kategori->deskripsi) }}</textarea>

                    @error('deskripsi')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="form-group">

                    <label for="status">
                        Status
                    </label>

                    <select
                        id="status"
                        name="status"
                        required
                    >

                        <option
                            value="aktif"
                            {{ old('status', $kategori->status) === 'aktif' ? 'selected' : '' }}
                        >
                            Aktif
                        </option>

                        <option
                            value="nonaktif"
                            {{ old('status', $kategori->status) === 'nonaktif' ? 'selected' : '' }}
                        >
                            Nonaktif
                        </option>

                    </select>

                    @error('status')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="form-actions">

                    <button
                        type="submit"
                        class="btn-simpan"
                    >
                        Simpan Perubahan
                    </button>

                    <a
                        href="{{ route('kategori.index') }}"
                        class="btn-kembali"
                    >
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </main>

</div>

</body>

</html>

