<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan - Apotek Sehat</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f7fb;
            color: #1f2937;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
            padding: 25px 18px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
        }

        .logo {
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 35px;
            padding-left: 10px;
        }

        .logo span {
            color: #16a34a;
        }

        .menu-title {
            font-size: 11px;
            color: #9ca3af;
            margin: 20px 10px 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .menu a {
            display: block;
            text-decoration: none;
            color: #6b7280;
            padding: 12px 14px;
            margin-bottom: 5px;
            border-radius: 9px;
            font-size: 14px;
        }

        .menu a:hover {
            background: #f0fdf4;
            color: #16a34a;
        }

        .menu a.active {
            background: #dcfce7;
            color: #15803d;
            font-weight: bold;
        }

        /* CONTENT */
        .content {
            margin-left: 240px;
            width: calc(100% - 240px);
            padding: 35px;
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
        }

        .page-title p {
            color: #6b7280;
            font-size: 14px;
        }

        .admin {
            background: white;
            padding: 10px 16px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            font-size: 14px;
        }

        /* FILTER */
        .filter-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .filter-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .filter-form {
            display: flex;
            align-items: flex-end;
            gap: 15px;
            flex-wrap: wrap;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .filter-group label {
            font-size: 12px;
            color: #6b7280;
            font-weight: bold;
        }

        .filter-group input {
            width: 190px;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            outline: none;
            font-size: 13px;
        }

        .filter-group input:focus {
            border-color: #16a34a;
        }

        .btn-filter {
            padding: 10px 18px;
            border: none;
            border-radius: 7px;
            background: #16a34a;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 13px;
        }

        .btn-filter:hover {
            background: #15803d;
        }

        .btn-reset {
            padding: 10px 18px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            background: white;
            color: #374151;
            text-decoration: none;
            font-weight: bold;
            font-size: 13px;
        }

        .btn-reset:hover {
            background: #f9fafb;
        }

        /* STATISTIK */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 22px;
        }

        .stat-label {
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .stat-value {
            font-size: 25px;
            font-weight: bold;
            color: #15803d;
        }

        /* TABLE */
        .table-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
        }

        .table-header {
            padding: 22px 25px;
            border-bottom: 1px solid #e5e7eb;
        }

        .table-header h2 {
            font-size: 17px;
            margin-bottom: 6px;
        }

        .table-header p {
            font-size: 13px;
            color: #6b7280;
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
            background: #f9fafb;
            color: #6b7280;
            padding: 13px 15px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 14px;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .kode {
            color: #15803d;
            font-weight: bold;
        }

        .jumlah {
            display: inline-block;
            background: #f3f4f6;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
        }

        .harga {
            font-weight: bold;
        }

        .status {
            display: inline-block;
            background: #dcfce7;
            color: #15803d;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .btn-detail {
            display: inline-block;
            text-decoration: none;
            background: #f0fdf4;
            color: #15803d;
            border: 1px solid #bbf7d0;
            padding: 7px 11px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: bold;
        }

        .btn-detail:hover {
            background: #dcfce7;
        }

        .empty {
            text-align: center;
            color: #9ca3af;
            padding: 40px;
        }

        /* FOOTER */
        .report-footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 30px;
            padding: 20px 25px;
            background: #fafafa;
            border-top: 1px solid #e5e7eb;
        }

        .footer-label {
            color: #6b7280;
            font-size: 14px;
        }

        .footer-value {
            font-size: 20px;
            font-weight: bold;
            color: #15803d;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .stat-grid {
                grid-template-columns: 1fr;
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

            .topbar {
                align-items: flex-start;
                gap: 15px;
            }

            .page-title h1 {
                font-size: 23px;
            }

            .filter-form {
                flex-direction: column;
                align-items: stretch;
            }

            .filter-group input {
                width: 100%;
            }

            .btn-filter,
            .btn-reset {
                text-align: center;
            }

            .report-footer {
                justify-content: space-between;
            }

        }

        /* PRINT */
        @media print {

            .sidebar,
            .topbar,
            .filter-card {
                display: none;
            }

            .content {
                margin-left: 0;
                width: 100%;
                padding: 0;
            }

            body {
                background: white;
            }

            .table-card,
            .stat-card {
                border: none;
            }

            .btn-detail {
                display: none;
            }

        }
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            ✚ <span>Apotek</span> Sehat
        </div>

        <div class="menu-title">
            Menu Utama
        </div>

        <div class="menu">

            <a href="{{ url('/dashboard') }}">
                Dashboard
            </a>

            <a href="{{ url('/obat') }}">
                Data Obat
            </a>

            <a href="{{ url('/kasir') }}">
                Kasir
            </a>

            <a href="{{ route('transaksi.index') }}">
                Transaksi
            </a>

            <a href="{{ route('laporan') }}" class="active">
                Laporan
            </a>

        </div>

        <div class="menu-title">
            Pengaturan
        </div>

        <div class="menu">

            <a href="#">
                Pengaturan
            </a>

        </div>

    </aside>


    <!-- CONTENT -->
    <main class="content">

        <!-- TOPBAR -->
        <div class="topbar">

            <div class="page-title">

                <h1>
                    Laporan
                </h1>

                <p>
                    Laporan penjualan obat
                </p>

            </div>

            <div class="admin">
                Admin
            </div>

        </div>


        <!-- FILTER -->
        <div class="filter-card">

            <div class="filter-title">
                Filter Laporan
            </div>

            <form
                action="{{ route('laporan') }}"
                method="GET"
                class="filter-form"
            >

                <div class="filter-group">

                    <label for="tanggal_mulai">
                        Tanggal Mulai
                    </label>

                    <input
                        type="date"
                        id="tanggal_mulai"
                        name="tanggal_mulai"
                        value="{{ $tanggalMulai ?? '' }}"
                    >

                </div>


                <div class="filter-group">

                    <label for="tanggal_selesai">
                        Tanggal Selesai
                    </label>

                    <input
                        type="date"
                        id="tanggal_selesai"
                        name="tanggal_selesai"
                        value="{{ $tanggalSelesai ?? '' }}"
                    >

                </div>


                <button
                    type="submit"
                    class="btn-filter"
                >
                    🔍 Filter
                </button>


                <a
                    href="{{ route('laporan') }}"
                    class="btn-reset"
                >
                    Reset
                </a>

            </form>

        </div>


        <!-- STATISTIK -->
        <div class="stat-grid">

            <div class="stat-card">

                <div class="stat-label">
                    Total Transaksi
                </div>

                <div class="stat-value">
                    {{ $totalTransaksi }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-label">
                    Total Item Terjual
                </div>

                <div class="stat-value">
                    {{ $totalItem }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-label">
                    Total Pendapatan
                </div>

                <div class="stat-value">
                    Rp {{ number_format($totalPendapatan, 0, ',', '.') }}
                </div>

            </div>

        </div>


        <!-- TABLE -->
        <div class="table-card">

            <div class="table-header">

                <h2>
                    Laporan Penjualan
                </h2>

                <p>

                    @if ($tanggalMulai || $tanggalSelesai)

                        Menampilkan transaksi berdasarkan periode yang dipilih

                    @else

                        Daftar seluruh transaksi penjualan obat

                    @endif

                </p>

            </div>


            <div class="table-wrapper">

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

                        @forelse ($transaksi as $index => $item)

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

                                    <span class="jumlah">
                                        {{ $item->detail->sum('jumlah') }} item
                                    </span>

                                </td>

                                <td class="harga">
                                    Rp {{ number_format($item->total_harga, 0, ',', '.') }}
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

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="empty"
                                >
                                    Tidak ada transaksi pada periode yang dipilih.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- FOOTER -->
            <div class="report-footer">

                <span class="footer-label">
                    Total Pendapatan
                </span>

                <span class="footer-value">
                    Rp {{ number_format($totalPendapatan, 0, ',', '.') }}
                </span>

            </div>

        </div>

    </main>

</div>

</body>

</html>