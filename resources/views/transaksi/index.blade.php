<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transaksi - Apotek Sehat</title>

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

        /* CARD */

        .table-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
        }

        .table-header {
            padding: 20px;
            border-bottom: 1px solid #e5e7eb;
        }

        .table-header h2 {
            font-size: 17px;
            margin-bottom: 5px;
        }

        .table-header p {
            color: #9ca3af;
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
            background: #f9fafb;
            color: #6b7280;
            padding: 14px 20px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .4px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 16px 20px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 14px;
        }

        tbody tr:hover {
            background: #fafafa;
        }

        .kode {
            color: #15803d;
            font-weight: bold;
        }

        .total {
            font-weight: bold;
        }

        .status {
            display: inline-block;
            background: #dcfce7;
            color: #15803d;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .btn-detail {
            display: inline-block;
            padding: 7px 12px;
            background: #f0fdf4;
            color: #15803d;
            border: 1px solid #bbf7d0;
            border-radius: 7px;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
        }

        .btn-detail:hover {
            background: #dcfce7;
        }
        .btn-hapus {
            display: inline-block;
            padding: 7px 12px;
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
            border-radius: 7px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-hapus:hover {
            background: #fee2e2;
        }

        .empty {
            text-align: center;
            padding: 55px 20px;
            color: #9ca3af;
            font-size: 14px;
        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0;
                width: 100%;
                padding: 20px 14px;
            }

            .page-title h1 {
                font-size: 23px;
            }

            .admin {
                display: none;
            }

            th,
            td {
                padding: 13px 14px;
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

            <a href="/dashboard">
                Dashboard
            </a>

            <a href="/obat">
                Data Obat
            </a>

            <a href="/kasir">
                Kasir
            </a>

            <a href="/transaksi" class="active">
                Transaksi
            </a>

            <a href="/laporan">
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
                    Transaksi
                </h1>

                <p>
                    Riwayat transaksi penjualan obat
                </p>

            </div>

            <div class="admin">
                Admin
            </div>

        </div>


        <!-- TABLE -->

        <div class="table-card">

            <div class="table-header">

                <h2>
                    Riwayat Transaksi
                </h2>

                <p>
                    Daftar seluruh transaksi penjualan obat
                </p>

            </div>


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
                                        {{ $item->detail->sum('jumlah') }} item
                                    </td>

                                    <td class="total">
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

</td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <div class="empty">

                        Belum ada transaksi penjualan.

                    </div>

                @endif

            </div>

        </div>

    </main>

</div>

</body>

</html>
