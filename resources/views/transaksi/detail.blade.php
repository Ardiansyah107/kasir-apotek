<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi - Apotek Besok Sembuh</title>

    <style>
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
            --border: rgba(255, 255, 255, .075);
            --shadow: 0 10px 35px rgba(0, 0, 0, .18);
            --radius-lg: 18px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
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
            font-size: 27px;
            margin-bottom: 7px;
            color: var(--text);
        }

        .page-title p {
            color: var(--muted);
            font-size: 14px;
        }

        .user-card {
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--surface);
            padding: 8px 14px 8px 8px;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background:
                linear-gradient(
                    135deg,
                    rgba(16, 185, 129, .25),
                    rgba(20, 184, 166, .12)
                );
            color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .user-name {
            font-size: 13px;
            font-weight: bold;
            color: var(--text);
        }

        .user-role {
            font-size: 11px;
            color: var(--muted);
        }

        /* TRANSACTION CARD */

        .transaction-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .transaction-status {
            padding: 25px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .success-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(16, 185, 129, .14);
            color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            border: 1px solid rgba(16, 185, 129, .18);
        }

        .status-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            color: var(--text);
        }

        .status-description {
            color: var(--muted);
            font-size: 13px;
        }

        .status-badge {
            background: rgba(16, 185, 129, .13);
            color: var(--primary-light);
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            border: 1px solid rgba(16, 185, 129, .18);
        }

        .transaction-info {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 22px 25px;
            background: rgba(255, 255, 255, .018);
            border-bottom: 1px solid var(--border);
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .info-label {
            color: var(--muted-2);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .8px;
            font-weight: bold;
        }

        .info-value {
            font-size: 14px;
            font-weight: bold;
            color: var(--text-soft);
        }

        .kode {
            color: var(--primary-light);
        }

        .detail-section {
            padding: 25px;
        }

        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 18px;
            color: var(--text);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            background: rgba(255, 255, 255, .025);
            color: var(--muted);
            padding: 12px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .4px;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 16px 12px;
            border-bottom: 1px solid rgba(255, 255, 255, .045);
            font-size: 14px;
            color: var(--text-soft);
        }

        tbody tr:hover {
            background: rgba(16, 185, 129, .025);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .obat-nama {
            font-weight: bold;
            color: var(--text);
        }

        .jumlah {
            display: inline-block;
            min-width: 30px;
            text-align: center;
            background: rgba(255, 255, 255, .06);
            color: var(--text-soft);
            padding: 5px 9px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
            border: 1px solid rgba(255, 255, 255, .06);
        }

        .text-right {
            text-align: right;
        }

        .total-section {
            margin: 0 25px;
            padding: 20px 0;
            border-top: 1px solid var(--border);
        }

        .summary-row {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 50px;
            margin-bottom: 10px;
        }

        .summary-label {
            color: var(--muted);
            font-size: 14px;
        }

        .summary-value {
            min-width: 120px;
            text-align: right;
            font-size: 14px;
            font-weight: bold;
            color: var(--text-soft);
        }

        .discount {
            color: #f87171;
        }

        .total-row {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 50px;
            padding-top: 12px;
            border-top: 1px dashed rgba(255, 255, 255, .14);
        }

        .total-label {
            color: var(--muted);
            font-size: 14px;
            font-weight: bold;
        }

        .total-price {
            min-width: 120px;
            text-align: right;
            color: var(--primary-light);
            font-size: 23px;
            font-weight: bold;
        }

        .payment-info {
            margin: 0 25px 20px;
            padding: 18px;
            background: rgba(255, 255, 255, .025);
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .payment-title {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 12px;
            color: var(--text);
        }

        .payment-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .payment-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .payment-label {
            color: var(--muted-2);
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .payment-value {
            font-size: 14px;
            font-weight: bold;
            color: var(--text-soft);
        }

        .transaction-footer {
            padding: 20px 25px;
            background: rgba(255, 255, 255, .018);
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-note {
            color: var(--muted-2);
            font-size: 12px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            border: 1px solid transparent;
            transition: .2s ease;
        }

        .btn-back {
            background: rgba(255, 255, 255, .045);
            color: var(--text-soft);
            border-color: var(--border);
        }

        .btn-back:hover {
            background: rgba(255, 255, 255, .08);
            color: white;
        }

        .btn-print {
            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );
            color: white;
            box-shadow: 0 8px 20px rgba(16, 185, 129, .18);
        }

        .btn-print:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 25px rgba(16, 185, 129, .25);
        }

        /* STRUK PRINT */

        .receipt {
            display: none;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 12px;
        }

        .receipt-header h1 {
            font-size: 18px;
            margin-bottom: 3px;
        }

        .receipt-header p {
            font-size: 10px;
            margin: 2px 0;
        }

        .receipt-line {
            border-top: 1px dashed #111;
            margin: 9px 0;
        }

        .receipt-info {
            font-size: 10px;
            line-height: 1.6;
        }

        .receipt-info-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .receipt-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
        }

        .receipt-table th,
        .receipt-table td {
            padding: 4px 0;
            border: none;
            background: none;
            color: #111;
        }

        .receipt-table th {
            font-weight: bold;
            text-transform: none;
            letter-spacing: 0;
        }

        .receipt-table .right {
            text-align: right;
        }

        .receipt-summary {
            font-size: 10px;
        }

        .receipt-summary-row {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }

        .receipt-total {
            font-size: 12px;
            font-weight: bold;
            padding-top: 6px;
            border-top: 1px solid #111;
        }

        .receipt-footer {
            text-align: center;
            margin-top: 14px;
            font-size: 10px;
            line-height: 1.5;
        }

        /* PRINT */

        @media print {

            @page {
                size: 80mm auto;
                margin: 5mm;
            }

            body {
                background: white !important;
                color: #111 !important;
            }

            .layout {
                display: none !important;
            }

            .receipt {
                display: block !important;
                width: 70mm;
                margin: 0 auto;
                color: #111 !important;
                background: white !important;
            }
        }

        /* RESPONSIVE */

        @media (max-width: 1400px) {
            .content {
                padding-left: 28px;
                padding-right: 28px;
            }
        }

        @media (max-width: 1150px) {
            .transaction-info {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 1000px) {
            .payment-grid {
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

            .user-card {
                display: none;
            }

            .transaction-status {
                align-items: flex-start;
                gap: 15px;
            }

            .status-badge {
                white-space: nowrap;
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

            .transaction-status {
                padding: 20px;
                flex-direction: column;
            }

            .transaction-info {
                grid-template-columns: 1fr;
                padding: 20px;
                gap: 15px;
            }

            .detail-section {
                padding: 20px 15px;
                overflow-x: auto;
            }

            table {
                min-width: 600px;
            }

            .total-section {
                margin: 0 15px;
            }

            .summary-row,
            .total-row {
                justify-content: space-between;
                gap: 15px;
            }

            .payment-info {
                margin: 0 15px 20px;
            }

            .transaction-footer {
                padding: 18px 15px;
                flex-direction: column;
                gap: 15px;
                align-items: stretch;
            }

            .footer-note {
                text-align: center;
            }

            .actions {
                width: 100%;
            }

            .btn {
                flex: 1;
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

            <a href="/dashboard">
                <span class="menu-icon">🏠</span>
                Dashboard
            </a>

            @if (auth()->user()->role === 'admin')

                <a href="/obat">
                    <span class="menu-icon">💊</span>
                    Data Obat
                </a>

                <a href="/users">
                    <span class="menu-icon">👥</span>
                    Admin User
                </a>

                <a href="/kategori">
                    <span class="menu-icon">🗂️</span>
                    Kategori
                </a>

                <a href="/stock-adjustment">
                    <span class="menu-icon">📦</span>
                    Stock Adjustment
                </a>

            @endif

            <a href="/kasir">
                <span class="menu-icon">🛒</span>
                Kasir
            </a>

            <a href="/transaksi" class="active">
                <span class="menu-icon">🧾</span>
                Transaksi
            </a>

            @if (auth()->user()->role === 'admin')

                <a href="/laporan">
                    <span class="menu-icon">📊</span>
                    Laporan Penjualan
                </a>

                <a href="/laporan-stok">
                    <span class="menu-icon">📦</span>
                    Laporan Stok
                </a>

            @endif

        </div>

        @if (auth()->user()->role === 'admin')

            <div class="menu-title">
                Pengaturan
            </div>

            <div class="menu">

                <a href="/pengaturan">
                    <span class="menu-icon">⚙️</span>
                    Pengaturan
                </a>

            </div>

        @endif

        <div class="menu">

            <form action="/logout" method="POST">

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
                    Detail Transaksi 👋
                </h1>

                <p>

                    @if (auth()->user()->role === 'admin')
                        Informasi lengkap transaksi penjualan obat.
                    @else
                        Detail transaksi penjualan yang diproses.
                    @endif

                </p>

            </div>

            <div class="user-card">

                <div class="avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="user-info">

                    <div class="user-name">
                        {{ auth()->user()->name }}
                    </div>

                    <div class="user-role">
                        {{ ucfirst(auth()->user()->role) }}
                    </div>

                </div>

            </div>

        </div>

        <!-- TRANSACTION -->
        <div class="transaction-card">

            <!-- STATUS -->
            <div class="transaction-status">

                <div class="status-left">

                    <div class="success-icon">
                        ✓
                    </div>

                    <div>

                        <div class="status-title">
                            Transaksi Berhasil
                        </div>

                        <div class="status-description">
                            Transaksi penjualan obat telah berhasil disimpan.
                        </div>

                    </div>

                </div>

                <div class="status-badge">
                    BERHASIL
                </div>

            </div>

            <!-- INFO TRANSAKSI -->
            <div class="transaction-info">

                <div class="info-item">

                    <span class="info-label">
                        Kode Transaksi
                    </span>

                    <span class="info-value kode">
                        {{ $transaksi->kode_transaksi }}
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        Tanggal Transaksi
                    </span>

                    <span class="info-value">

                        {{ $transaksi->tanggal_transaksi
                            ? $transaksi->tanggal_transaksi->format('d/m/Y H:i')
                            : $transaksi->created_at->format('d/m/Y H:i') }}

                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        Total Item
                    </span>

                    <span class="info-value">
                        {{ $transaksi->detail->sum('jumlah') }} item
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        Kasir
                    </span>

                    <span class="info-value">
                        {{ $transaksi->user->name ?? '-' }}
                    </span>

                </div>

            </div>

            <!-- DETAIL OBAT -->
            <div class="detail-section">

                <div class="section-title">
                    Detail Obat
                </div>

                <table>

                    <thead>

                        <tr>
                            <th>Obat</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th class="text-right">Subtotal</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($transaksi->detail as $item)

                            <tr>

                                <td>
                                    <span class="obat-nama">
                                        {{ $item->obat->nama_obat }}
                                    </span>
                                </td>

                                <td>
                                    <span class="jumlah">
                                        {{ $item->jumlah }}
                                    </span>
                                </td>

                                <td>
                                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                                </td>

                                <td class="text-right">

                                    <strong>
                                        Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                                    </strong>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

            <!-- TOTAL -->
            <div class="total-section">

                <div class="summary-row">

                    <span class="summary-label">
                        Subtotal
                    </span>

                    <span class="summary-value">
                        Rp {{ number_format($transaksi->subtotal, 0, ',', '.') }}
                    </span>

                </div>

                <div class="summary-row">

                    <span class="summary-label">
                        Diskon
                    </span>

                    <span class="summary-value discount">
                        - Rp {{ number_format($transaksi->diskon, 0, ',', '.') }}
                    </span>

                </div>

                <div class="total-row">

                    <span class="total-label">
                        Total Pembayaran
                    </span>

                    <span class="total-price">
                        Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                    </span>

                </div>

            </div>

            <!-- PAYMENT -->
            <div class="payment-info">

                <div class="payment-title">
                    Informasi Pembayaran
                </div>

                <div class="payment-grid">

                    <div class="payment-item">

                        <span class="payment-label">
                            Metode Pembayaran
                        </span>

                        <span class="payment-value">
                            {{ $transaksi->metode_pembayaran }}
                        </span>

                    </div>

                    <div class="payment-item">

                        <span class="payment-label">
                            Jumlah Bayar
                        </span>

                        <span class="payment-value">
                            Rp {{ number_format($transaksi->jumlah_bayar, 0, ',', '.') }}
                        </span>

                    </div>

                    <div class="payment-item">

                        <span class="payment-label">
                            Kembalian
                        </span>

                        <span class="payment-value">
                            Rp {{ number_format($transaksi->kembalian, 0, ',', '.') }}
                        </span>

                    </div>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="transaction-footer">

                <div class="footer-note">
                    Terima kasih telah melakukan transaksi di Apotek Besok Sembuh.
                </div>

                <div class="actions">

                    @if (auth()->user()->role === 'admin')

                        <a href="/transaksi" class="btn btn-back">
                            ← Kembali ke Transaksi
                        </a>

                    @else

                        <a href="/kasir" class="btn btn-back">
                            ← Kembali ke Kasir
                        </a>

                    @endif

                    <button
                        type="button"
                        onclick="window.print()"
                        class="btn btn-print"
                    >
                        🖨 Cetak
                    </button>

                </div>

            </div>

        </div>

    </main>

</div>

<!-- STRUK KHUSUS PRINT -->
<div class="receipt">

    <div class="receipt-header">

        <h1>APOTEK BESOK SEMBUH</h1>

        <p>PHARMACY MANAGEMENT</p>

        <p>Struk Transaksi Penjualan</p>

    </div>

    <div class="receipt-line"></div>

    <div class="receipt-info">

        <div class="receipt-info-row">
            <span>Invoice</span>
            <strong>{{ $transaksi->kode_transaksi }}</strong>
        </div>

        <div class="receipt-info-row">
            <span>Tanggal</span>
            <span>
                {{ $transaksi->tanggal_transaksi
                    ? $transaksi->tanggal_transaksi->format('d/m/Y H:i')
                    : $transaksi->created_at->format('d/m/Y H:i') }}
            </span>
        </div>

        <div class="receipt-info-row">
            <span>Kasir</span>
            <span>{{ $transaksi->user->name ?? '-' }}</span>
        </div>

    </div>

    <div class="receipt-line"></div>

    <table class="receipt-table">

        <thead>

            <tr>
                <th>Obat</th>
                <th>Qty</th>
                <th class="right">Harga</th>
                <th class="right">Total</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($transaksi->detail as $item)

                <tr>

                    <td>
                        {{ $item->obat->nama_obat }}
                    </td>

                    <td>
                        {{ $item->jumlah }}
                    </td>

                    <td class="right">
                        {{ number_format($item->harga, 0, ',', '.') }}
                    </td>

                    <td class="right">
                        {{ number_format($item->subtotal, 0, ',', '.') }}
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

    <div class="receipt-line"></div>

    <div class="receipt-summary">

        <div class="receipt-summary-row">
            <span>Subtotal</span>
            <span>
                Rp {{ number_format($transaksi->subtotal, 0, ',', '.') }}
            </span>
        </div>

        <div class="receipt-summary-row">
            <span>Diskon</span>
            <span>
                Rp {{ number_format($transaksi->diskon, 0, ',', '.') }}
            </span>
        </div>

        <div class="receipt-summary-row receipt-total">
            <span>TOTAL</span>
            <span>
                Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
            </span>
        </div>

        <div class="receipt-summary-row">
            <span>Pembayaran</span>
            <span>
                {{ $transaksi->metode_pembayaran }}
            </span>
        </div>

        <div class="receipt-summary-row">
            <span>Bayar</span>
            <span>
                Rp {{ number_format($transaksi->jumlah_bayar, 0, ',', '.') }}
            </span>
        </div>

        <div class="receipt-summary-row">
            <span>Kembalian</span>
            <span>
                Rp {{ number_format($transaksi->kembalian, 0, ',', '.') }}
            </span>
        </div>

    </div>

    <div class="receipt-footer">

        <strong>TRANSAKSI BERHASIL</strong>

        <br>

        Terima kasih telah berbelanja.

        <br>

        Apotek Besok Sembuh

    </div>

</div>

</body>
</html>

