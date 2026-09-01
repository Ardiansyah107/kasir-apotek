<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Transaksi - Apotek Sehat</title>

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

        /* TRANSAKSI */
        .transaction-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
        }

        /* STATUS */
        .transaction-status {
            padding: 25px;
            border-bottom: 1px solid #e5e7eb;
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
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
        }

        .status-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .status-description {
            color: #6b7280;
            font-size: 13px;
        }

        .status-badge {
            background: #dcfce7;
            color: #15803d;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        /* INFO */
        .transaction-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 22px 25px;
            background: #fafafa;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .info-label {
            color: #9ca3af;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: bold;
        }

        .info-value {
            font-size: 14px;
            font-weight: bold;
            color: #1f2937;
        }

        .kode {
            color: #15803d;
        }

        /* DETAIL */
        .detail-section {
            padding: 25px;
        }

        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            background: #f9fafb;
            color: #6b7280;
            padding: 12px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 16px 12px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 14px;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .obat-nama {
            font-weight: bold;
            color: #1f2937;
        }

        .jumlah {
            display: inline-block;
            min-width: 30px;
            text-align: center;
            background: #f3f4f6;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: bold;
        }

        .text-right {
            text-align: right;
        }

        /* TOTAL */
        .total-section {
            margin: 0 25px;
            padding: 20px 0;
            border-top: 1px solid #e5e7eb;
        }

        .total-row {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 50px;
        }

        .total-label {
            color: #6b7280;
            font-size: 14px;
        }

        .total-price {
            color: #15803d;
            font-size: 23px;
            font-weight: bold;
        }

        /* FOOTER */
        .transaction-footer {
            padding: 20px 25px;
            background: #fafafa;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-note {
            color: #9ca3af;
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
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        .btn-back {
            background: white;
            color: #374151;
            border: 1px solid #d1d5db;
        }

        .btn-back:hover {
            background: #f3f4f6;
        }

        .btn-print {
            background: #16a34a;
            color: white;
        }

        .btn-print:hover {
            background: #15803d;
        }

        /* PRINT */
        @media print {

            .sidebar,
            .topbar,
            .transaction-footer {
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

            .transaction-card {
                border: none;
                box-shadow: none;
            }
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {

            .sidebar {
                width: 200px;
            }

            .content {
                margin-left: 200px;
                width: calc(100% - 200px);
                padding: 25px;
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
                display: none;
            }

            .content {
                margin-left: 0;
                width: 100%;
                padding: 20px 14px;
            }

            .topbar {
                margin-bottom: 20px;
            }

            .page-title h1 {
                font-size: 23px;
            }

            .transaction-status {
                padding: 20px;
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

            .total-row {
                justify-content: space-between;
                gap: 15px;
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

            <a href="#" class="active">
                Transaksi
            </a>

            <a href="#">
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
                    Detail Transaksi
                </h1>

                <p>
                    Informasi lengkap transaksi penjualan obat
                </p>

            </div>

            <div class="admin">
                Admin
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
                            Transaksi penjualan obat telah berhasil disimpan
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
                        Total Item
                    </span>

                    <span class="info-value">
                        {{ $transaksi->detail->sum('jumlah') }} item
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

                <div class="total-row">

                    <span class="total-label">
                        Total Pembayaran
                    </span>

                    <span class="total-price">
                        Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                    </span>

                </div>

            </div>


            <!-- FOOTER -->
            <div class="transaction-footer">

                <div class="footer-note">
                    Terima kasih telah melakukan transaksi di Apotek Sehat
                </div>

                <div class="actions">

                    <a href="/kasir" class="btn btn-back">
                        ← Kembali ke Kasir
                    </a>

                    <button
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

</body>

</html>

