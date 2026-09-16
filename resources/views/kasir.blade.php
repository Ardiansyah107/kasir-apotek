<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kasir - Apotek Besok Sembuh</title>

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

        /* =========================================================
           HEADER KASIR
        ========================================================= */

        .kasir-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .kasir-header h2 {
            font-size: 18px;
            font-weight: 800;
            color: var(--text);
        }

        .kasir-header p {
            color: var(--muted);
            font-size: 13px;
            margin-top: 5px;
        }

        .status-kasir {
            background: rgba(16, 185, 129, .10);
            color: var(--primary-light);
            border: 1px solid var(--border-green);
            padding: 9px 13px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: bold;
        }

        /* =========================================================
           KASIR
        ========================================================= */

        .kasir-container {
            display: grid;
            grid-template-columns: minmax(0, 1.6fr) minmax(360px, 1fr);
            gap: 20px;
            align-items: start;
        }

        .produk-container,
        .keranjang {
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

        .box-header {
            padding: 20px;
            border-bottom: 1px solid var(--border);
            background: rgba(18, 51, 43, .25);
        }

        .box-header h2 {
            font-size: 17px;
            font-weight: 800;
            color: var(--text);
            margin-bottom: 5px;
        }

        .box-header p {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 14px;
        }

        /* =========================================================
           SEARCH
        ========================================================= */

        .search-wrapper {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--muted-2);
            font-size: 15px;
            pointer-events: none;
        }

        .search-input {
            width: 100%;
            padding: 12px 14px 12px 38px;
            border: 1px solid var(--border);
            border-radius: 10px;
            outline: none;
            font-size: 13px;
            background: rgba(6, 23, 19, .65);
            color: var(--text);
            transition: .2s;
        }

        .search-input::placeholder {
            color: var(--muted-2);
        }

        .search-input:focus {
            border-color: rgba(16, 185, 129, .55);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, .10);
        }

        /* =========================================================
           PRODUK
        ========================================================= */

        .produk-list {
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .produk-card {
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 16px;
            background: rgba(6, 23, 19, .38);
            transition:
                border .2s ease,
                box-shadow .2s ease,
                transform .2s ease,
                background .2s ease;
        }

        .produk-card:hover {
            border-color: rgba(52, 211, 153, .30);
            box-shadow: var(--shadow-hover);
            transform: translateY(-2px);
            background: rgba(14, 41, 35, .65);
        }

        .produk-kode {
            font-size: 11px;
            color: var(--muted-2);
            margin-bottom: 7px;
            font-weight: 700;
        }

        .produk-nama {
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--text);
            text-transform: capitalize;
        }

        .produk-kategori {
            display: inline-block;
            background: rgba(59, 130, 246, .10);
            color: #60a5fa;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 11px;
            margin-bottom: 12px;
            border: 1px solid rgba(59, 130, 246, .12);
        }

        .produk-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 13px;
            gap: 10px;
        }

        .produk-harga {
            font-size: 15px;
            font-weight: 800;
            color: var(--primary-light);
        }

        .produk-stok {
            font-size: 12px;
            color: var(--muted);
        }

        .stok-warning {
            color: var(--orange);
            font-weight: 800;
        }

        .btn-tambah {
            width: 100%;
            padding: 10px;
            border: 1px solid rgba(52, 211, 153, .18);
            border-radius: 10px;
            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .btn-tambah:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, .18);
        }

        /* =========================================================
           KERANJANG
        ========================================================= */

        .keranjang-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .cart-badge {
            background: rgba(16, 185, 129, .12);
            color: var(--primary-light);
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            border: 1px solid var(--border-green);
            white-space: nowrap;
        }

        .keranjang-list {
            padding: 20px;
            min-height: 150px;
            max-height: 390px;
            overflow-y: auto;
        }

        .keranjang-list::-webkit-scrollbar {
            width: 5px;
        }

        .keranjang-list::-webkit-scrollbar-track {
            background: transparent;
        }

        .keranjang-list::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, .20);
            border-radius: 20px;
        }

        .keranjang-kosong {
            text-align: center;
            color: var(--muted-2);
            padding: 50px 10px;
            font-size: 13px;
        }

        .keranjang-kosong-icon {
            font-size: 35px;
            margin-bottom: 10px;
            opacity: .7;
        }

        .cart-item {
            border-bottom: 1px solid var(--border);
            padding: 15px 0;
        }

        .cart-item:first-child {
            padding-top: 0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-name {
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 14px;
            color: var(--text);
        }

        .cart-item-price {
            font-size: 12px;
            color: var(--muted);
        }

        .cart-item-bottom {
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .qty-control {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .qty-btn {
            width: 28px;
            height: 28px;
            border: 1px solid var(--border);
            background: rgba(6, 23, 19, .65);
            color: var(--text-soft);
            border-radius: 7px;
            cursor: pointer;
            font-size: 16px;
            transition: .2s;
        }

        .qty-btn:hover {
            background: rgba(16, 185, 129, .10);
            border-color: rgba(16, 185, 129, .25);
            color: var(--primary-light);
        }

        .qty-number {
            min-width: 20px;
            text-align: center;
            font-weight: 700;
            color: var(--text);
        }

        .cart-subtotal {
            font-weight: 800;
            font-size: 14px;
            color: var(--primary-light);
        }

        /* =========================================================
           PEMBAYARAN
        ========================================================= */

        .payment-box {
            border-top: 1px solid var(--border);
            padding: 20px;
            background: rgba(6, 23, 19, .42);
        }

        .payment-title {
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--text);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 7px;
            color: var(--text-soft);
        }

        .form-input,
        .form-select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 9px;
            outline: none;
            font-size: 13px;
            background: rgba(6, 23, 19, .65);
            color: var(--text);
        }

        .form-input::placeholder {
            color: var(--muted-2);
        }

        .form-input:focus,
        .form-select:focus {
            border-color: rgba(16, 185, 129, .55);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, .10);
        }

        .form-select option {
            background: #0b211c;
            color: var(--text);
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            font-size: 13px;
            color: var(--muted);
        }

        .total-row span:last-child {
            color: var(--text-soft);
            font-weight: 700;
        }

        .total-row.grand-total {
            font-size: 21px;
            font-weight: 800;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid var(--border);
            color: var(--primary-light);
        }

        .total-row.grand-total span:last-child {
            color: var(--primary-light);
        }

        .kembalian {
            background: rgba(16, 185, 129, .08);
            border: 1px solid var(--border-green);
            color: var(--text-soft);
            border-radius: 9px;
            padding: 12px;
            margin-top: 12px;
            display: flex;
            justify-content: space-between;
            font-size: 13px;
        }

        .kembalian strong {
            color: var(--primary-light);
        }

        .btn-proses {
            width: 100%;
            margin-top: 15px;
            padding: 13px;
            border: 1px solid rgba(52, 211, 153, .18);
            border-radius: 9px;
            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );
            color: white;
            font-weight: 800;
            cursor: pointer;
            transition: .2s;
        }

        .btn-proses:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 22px rgba(16, 185, 129, .18);
        }

        .btn-proses:disabled {
            background: #21423a;
            color: #6f8c84;
            border-color: transparent;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1400px) {
            .content {
                padding-left: 28px;
                padding-right: 28px;
            }

            .produk-list {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 1150px) {
            .kasir-container {
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

            .produk-list {
                grid-template-columns: 1fr;
            }

            .kasir-header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .status-kasir {
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

                <small>
                    PHARMACY MANAGEMENT
                </small>
            </div>
        </div>

        <div class="menu-title">
            Menu Utama
        </div>

        <div class="menu">

            <a href="{{ url('/dashboard') }}">
                <span class="menu-icon">🏠</span>
                Dashboard
            </a>

            @if(auth()->user()->role === 'admin')

                <a href="{{ url('/obat') }}">
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

            <a href="{{ url('/kasir') }}" class="active">
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

        <div class="menu" style="margin-top: 20px;">

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
                    Kasir 👋
                </h1>

                <p>
                    Siap melayani transaksi hari ini 💊
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
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>

                        <div>

                            <strong>
                                {{ auth()->user()->name }}
                            </strong>

                            <span>
                                {{ ucfirst(auth()->user()->role) }}
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


        <!-- HEADER KASIR -->
        <div class="kasir-header">

            <div>

                <h2>
                    🛒 Buat Transaksi
                </h2>

                <p>
                    Pilih obat yang ingin dimasukkan ke keranjang.
                </p>

            </div>

            <div class="status-kasir">
                ● Kasir Aktif
            </div>

        </div>


        <!-- KASIR -->
        <div class="kasir-container">

            <!-- PRODUK -->
            <div class="produk-container">

                <div class="box-header">

                    <h2>
                        💊 Pilih Obat
                    </h2>

                    <p>
                        Cari obat berdasarkan nama atau kode.
                    </p>

                    <div class="search-wrapper">

                        <span class="search-icon">
                            🔎
                        </span>

                        <input
                            type="text"
                            class="search-input"
                            id="searchObat"
                            placeholder="Cari nama atau kode obat..."
                        >

                    </div>

                </div>


                <div class="produk-list">

                    @forelse ($obat as $item)

                        <div class="produk-card">

                            <div class="produk-kode">
                                {{ $item->kode_obat }}
                            </div>

                            <div class="produk-nama">
                                {{ $item->nama_obat }}
                            </div>

                            <span class="produk-kategori">
                                {{ $item->kategori }}
                            </span>

                            <div class="produk-info">

                                <div class="produk-harga">
                                    Rp {{ number_format($item->harga_jual, 0, ',', '.') }}
                                </div>

                                <div class="produk-stok {{ $item->stok < 20 ? 'stok-warning' : '' }}">
                                    Stok: {{ $item->stok }}
                                </div>

                            </div>

                            <button
                                type="button"
                                class="btn-tambah"
                                onclick='tambahKeKeranjang(
                                    {{ $item->id }},
                                    @json($item->nama_obat),
                                    {{ $item->harga_jual }},
                                    {{ $item->stok }}
                                )'
                            >
                                + Tambah ke keranjang
                            </button>

                        </div>

                    @empty

                        <p style="padding:20px; color:#8baea2;">
                            Belum ada obat yang tersedia.
                        </p>

                    @endforelse

                </div>

            </div>


            <!-- KERANJANG -->
            <div class="keranjang">

                <div class="box-header">

                    <div class="keranjang-header">

                        <div>

                            <h2>
                                🛒 Keranjang
                            </h2>

                            <p style="margin:0;">
                                Obat yang akan diproses.
                            </p>

                        </div>

                        <span class="cart-badge">
                            <span id="cartCount">0</span> item
                        </span>

                    </div>

                </div>


                <div class="keranjang-list" id="keranjangList">

                    <div class="keranjang-kosong">

                        <div class="keranjang-kosong-icon">
                            🛒
                        </div>

                        Belum ada obat yang dipilih.

                    </div>

                </div>


                <!-- PEMBAYARAN -->
                <div class="payment-box">

                    <div class="payment-title">
                        💳 Pembayaran
                    </div>

                    <div class="total-row">

                        <span>
                            Total Item
                        </span>

                        <span id="totalItem">
                            0
                        </span>

                    </div>


                    <div class="total-row">

                        <span>
                            Subtotal
                        </span>

                        <span id="subtotalHarga">
                            Rp 0
                        </span>

                    </div>


                    <div class="form-group">

                        <label class="form-label" for="diskon">
                            Diskon
                        </label>

                        <input
                            type="number"
                            id="diskon"
                            class="form-input"
                            value="0"
                            min="0"
                            step="100"
                            placeholder="Masukkan diskon"
                        >

                    </div>


                    <div class="total-row grand-total">

                        <span>
                            Total
                        </span>

                        <span id="totalHarga">
                            Rp 0
                        </span>

                    </div>


                    <div class="form-group" style="margin-top: 18px;">

                        <label class="form-label" for="metodePembayaran">
                            Metode Pembayaran
                        </label>

                        <select
                            id="metodePembayaran"
                            class="form-select"
                        >

                            <option value="Cash">
                                Cash
                            </option>

                            <option value="Transfer">
                                Transfer
                            </option>

                            <option value="QRIS">
                                QRIS
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label class="form-label" for="jumlahBayar">
                            Jumlah Bayar
                        </label>

                        <input
                            type="number"
                            id="jumlahBayar"
                            class="form-input"
                            value="0"
                            min="0"
                            step="500"
                            placeholder="Masukkan jumlah pembayaran"
                        >

                    </div>


                    <div class="kembalian">

                        <span>
                            Kembalian
                        </span>

                        <strong id="kembalian">
                            Rp 0
                        </strong>

                    </div>


                    <button
                        type="button"
                        class="btn-proses"
                        id="btnProses"
                        onclick="prosesTransaksi()"
                        disabled
                    >
                        Proses Transaksi
                    </button>

                </div>

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


    let keranjang = [];


    function tambahKeKeranjang(id, nama, harga, stok) {

        let item = keranjang.find(item => item.id === id);

        if (item) {

            if (item.qty < item.stok) {
                item.qty++;
            } else {
                alert('Jumlah melebihi stok yang tersedia.');
                return;
            }

        } else {

            keranjang.push({
                id: id,
                nama: nama,
                harga: Number(harga),
                stok: Number(stok),
                qty: 1
            });

        }

        tampilkanKeranjang();
    }


    function tampilkanKeranjang() {

        let container =
            document.getElementById('keranjangList');


        if (keranjang.length === 0) {

            container.innerHTML = `
                <div class="keranjang-kosong">

                    <div class="keranjang-kosong-icon">
                        🛒
                    </div>

                    Belum ada obat yang dipilih.

                </div>
            `;

            hitungTotal();

            return;
        }


        container.innerHTML = '';


        keranjang.forEach(item => {

            let subtotal =
                item.harga * item.qty;


            container.innerHTML += `

                <div class="cart-item">

                    <div class="cart-item-name">
                        ${escapeHtml(item.nama)}
                    </div>

                    <div class="cart-item-price">
                        Rp ${item.harga.toLocaleString('id-ID')}
                    </div>

                    <div class="cart-item-bottom">

                        <div class="qty-control">

                            <button
                                type="button"
                                class="qty-btn"
                                onclick="kurangiQty(${item.id})"
                            >
                                −
                            </button>

                            <span class="qty-number">
                                ${item.qty}
                            </span>

                            <button
                                type="button"
                                class="qty-btn"
                                onclick="tambahQty(${item.id})"
                            >
                                +
                            </button>

                        </div>

                        <div class="cart-subtotal">
                            Rp ${subtotal.toLocaleString('id-ID')}
                        </div>

                    </div>

                </div>

            `;
        });


        hitungTotal();
    }


    function tambahQty(id) {

        let item =
            keranjang.find(item => item.id === id);


        if (!item) {
            return;
        }


        if (item.qty < item.stok) {

            item.qty++;

        } else {

            alert('Jumlah melebihi stok yang tersedia.');
            return;

        }


        tampilkanKeranjang();
    }


    function kurangiQty(id) {

        let item =
            keranjang.find(item => item.id === id);


        if (!item) {
            return;
        }


        item.qty--;


        if (item.qty <= 0) {

            keranjang =
                keranjang.filter(item => item.id !== id);

        }


        tampilkanKeranjang();
    }


    function hitungTotal() {

        let totalItem = 0;
        let subtotal = 0;


        keranjang.forEach(item => {

            totalItem += item.qty;

            subtotal +=
                item.harga * item.qty;

        });


        let diskon =
            Number(document.getElementById('diskon').value) || 0;


        if (diskon > subtotal) {
            diskon = subtotal;
        }


        let total =
            subtotal - diskon;


        let jumlahBayar =
            Number(document.getElementById('jumlahBayar').value) || 0;


        let kembalian =
            jumlahBayar - total;


        if (kembalian < 0) {
            kembalian = 0;
        }


        document.getElementById('totalItem').innerText =
            totalItem;


        document.getElementById('cartCount').innerText =
            totalItem;


        document.getElementById('subtotalHarga').innerText =
            'Rp ' + subtotal.toLocaleString('id-ID');


        document.getElementById('totalHarga').innerText =
            'Rp ' + total.toLocaleString('id-ID');


        document.getElementById('kembalian').innerText =
            'Rp ' + kembalian.toLocaleString('id-ID');


        let btnProses =
            document.getElementById('btnProses');


        btnProses.disabled =
            keranjang.length === 0;
    }


    document
        .getElementById('diskon')
        .addEventListener('input', hitungTotal);


    document
        .getElementById('jumlahBayar')
        .addEventListener('input', hitungTotal);


    document
        .getElementById('metodePembayaran')
        .addEventListener('change', function () {

            let metode = this.value;

            let jumlahBayar =
                document.getElementById('jumlahBayar');


            if (
                metode === 'Transfer' ||
                metode === 'QRIS'
            ) {

                let subtotal = 0;

                keranjang.forEach(item => {

                    subtotal +=
                        item.harga * item.qty;

                });


                let diskon =
                    Number(document.getElementById('diskon').value) || 0;


                let total =
                    Math.max(0, subtotal - diskon);


                jumlahBayar.value = total;

            }


            hitungTotal();

        });


    function prosesTransaksi() {

        if (keranjang.length === 0) {

            alert('Keranjang masih kosong.');
            return;

        }


        let subtotal = 0;


        keranjang.forEach(item => {

            subtotal +=
                item.harga * item.qty;

        });


        let diskon =
            Number(document.getElementById('diskon').value) || 0;


        if (diskon < 0) {

            alert('Diskon tidak boleh kurang dari 0.');
            return;

        }


        if (diskon > subtotal) {

            alert('Diskon tidak boleh lebih besar dari subtotal.');
            return;

        }


        let total =
            subtotal - diskon;


        let metodePembayaran =
            document.getElementById('metodePembayaran').value;


        let jumlahBayar =
            Number(document.getElementById('jumlahBayar').value) || 0;


        if (jumlahBayar < total) {

            alert(
                'Pembayaran kurang.\n\n' +
                'Total: Rp ' +
                total.toLocaleString('id-ID') +
                '\n' +
                'Jumlah Bayar: Rp ' +
                jumlahBayar.toLocaleString('id-ID')
            );

            return;

        }


        let btnProses =
            document.getElementById('btnProses');


        btnProses.disabled = true;
        btnProses.innerText = 'Memproses...';


        fetch(
            '{{ route('transaksi.proses') }}',
            {

                method: 'POST',

                headers: {

                    'Content-Type':
                        'application/json',

                    'X-CSRF-TOKEN':
                        '{{ csrf_token() }}',

                    'Accept':
                        'application/json'

                },

                body: JSON.stringify({

                    keranjang: keranjang,

                    diskon: diskon,

                    metode_pembayaran:
                        metodePembayaran,

                    jumlah_bayar:
                        jumlahBayar

                })

            }
        )

        .then(async response => {

            let data;


            try {

                data =
                    await response.json();

            } catch (error) {

                throw new Error(
                    'Server mengembalikan response yang tidak valid.'
                );

            }


            if (!response.ok) {

                throw new Error(
                    data.message ||
                    'Terjadi kesalahan pada server.'
                );

            }


            return data;

        })


        .then(data => {

            if (data.success) {

                alert(
                    'Transaksi berhasil disimpan!\n\n' +
                    'Kode Transaksi: ' +
                    data.kode_transaksi
                );


                window.location.href =
                    '{{ route('transaksi.index') }}';


            } else {

                alert(
                    data.message ||
                    'Transaksi gagal diproses.'
                );


                btnProses.disabled = false;

                btnProses.innerText =
                    'Proses Transaksi';

            }

        })


        .catch(error => {

            console.error(error);


            alert(
                'Terjadi kesalahan saat memproses transaksi.\n\n' +
                error.message
            );


            btnProses.disabled = false;

            btnProses.innerText =
                'Proses Transaksi';

        });

    }


    document
        .getElementById('searchObat')
        .addEventListener('keyup', function () {

            let keyword =
                this.value.toLowerCase();


            let produk =
                document.querySelectorAll('.produk-card');


            produk.forEach(function (card) {

                let nama =
                    card
                        .querySelector('.produk-nama')
                        .innerText
                        .toLowerCase();


                let kode =
                    card
                        .querySelector('.produk-kode')
                        .innerText
                        .toLowerCase();


                if (
                    nama.includes(keyword) ||
                    kode.includes(keyword)
                ) {

                    card.style.display = '';

                } else {

                    card.style.display = 'none';

                }

            });

        });


    function escapeHtml(text) {

        let div =
            document.createElement('div');


        div.innerText = text;


        return div.innerHTML;

    }


    hitungTotal();

</script>

</body>
</html>