<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Obat - Apotek Sehat</title>

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
            margin-bottom: 30px;
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

        /* CARDS */
        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
        }

        .card-label {
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .card-number {
            font-size: 25px;
            font-weight: bold;
        }

        /* TABLE */
        .table-container {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
        }

        .table-header {
            padding: 20px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-header h2 {
            font-size: 17px;
        }

        .table-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* BUTTON TAMBAH */
        .btn-add {
            background: #16a34a;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-add:hover {
            background: #15803d;
        }

        /* SEARCH */
        .search-form {
            display: flex;
            gap: 8px;
        }

        .search-input {
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        .search-input:focus {
            border-color: #16a34a;
        }

        .btn-search {
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            background: #16a34a;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-search:hover {
            background: #15803d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            background: #f9fafb;
            color: #6b7280;
            font-size: 12px;
            padding: 14px 20px;
            text-transform: uppercase;
        }

        td {
            padding: 16px 20px;
            border-top: 1px solid #f0f0f0;
            font-size: 14px;
        }

        tr:hover {
            background: #fafafa;
        }

        .kode {
            font-weight: bold;
            color: #374151;
        }

        .kategori {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 12px;
        }

        .stok {
            font-weight: bold;
        }

        .stok-warning {
            color: #dc2626;
        }

        .harga {
            font-weight: bold;
        }

        /* ACTION */
        .aksi {
            display: flex;
            gap: 8px;
        }

        .btn-edit {
            text-decoration: none;
            background: #eff6ff;
            color: #2563eb;
            padding: 7px 11px;
            border-radius: 6px;
            font-size: 12px;
        }

        .btn-delete {
            background: #fef2f2;
            color: #dc2626;
            border: none;
            padding: 7px 11px;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background: #fee2e2;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .sidebar {
                width: 190px;
            }

            .content {
                margin-left: 190px;
                width: calc(100% - 190px);
                padding: 20px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .table-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .table-actions {
                width: 100%;
                flex-wrap: wrap;
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

            <!-- SUDAH DIUBAH KE /dashboard -->
            <a href="/dashboard">
                Dashboard
            </a>

            <a href="/obat" class="active">
                Data Obat
            </a>

            <a href="/kasir">
             Kasir
            </a>

            <a href="/transaksi">
            Transaksi
            </a>
            <a href="laporan">
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
                    Data Obat
                </h1>

                <p>
                    Kelola persediaan obat apotek
                </p>

            </div>

            <div class="admin">
                Admin
            </div>

        </div>


        <!-- CARDS -->
        <div class="cards">

            <div class="card">

                <div class="card-label">
                    Total Obat
                </div>

                <div class="card-number">
                    {{ $obat->count() }}
                </div>

            </div>


            <div class="card">

                <div class="card-label">
                    Stok Menipis
                </div>

                <div class="card-number">
                    {{ $obat->where('stok', '<=', 5)->count() }}
                </div>

            </div>


            <div class="card">

                <div class="card-label">
                    Total Stok
                </div>

                <div class="card-number">
                    {{ $obat->sum('stok') }}
                </div>

            </div>

        </div>


        <!-- TABLE -->
        <div class="table-container">

            <!-- HEADER TABLE -->
            <div class="table-header">

                <h2>
                    Daftar Obat
                </h2>


                <div class="table-actions">

                    <!-- TOMBOL TAMBAH OBAT -->
                    <a href="/obat/create" class="btn-add">
                        + Tambah Obat
                    </a>


                    <!-- SEARCH -->
                    <form
    action="/obat"
    method="GET"
    class="search-form"
    onsubmit="return false;"
>

    <input
        type="text"
        name="search"
        id="searchObat"
        value="{{ request('search') }}"
        placeholder="Cari nama atau kode obat..."
        class="search-input"
    >

</form>

                </div>

            </div>


            <!-- TABLE DATA -->
            <table>

                <thead>

                    <tr>

                        <th>
                            Kode
                        </th>

                        <th>
                            Nama Obat
                        </th>

                        <th>
                            Kategori
                        </th>

                        <th>
                            Harga Jual
                        </th>

                        <th>
                            Stok
                        </th>

                        <th>
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse ($obat as $item)

                        <tr>

                            <td class="kode">
                                {{ $item->kode_obat }}
                            </td>

                            <td>
                                {{ $item->nama_obat }}
                            </td>

                            <td>

                                <span class="kategori">
                                    {{ $item->kategori }}
                                </span>

                            </td>

                            <td class="harga">
                                Rp {{ number_format($item->harga_jual, 0, ',', '.') }}
                            </td>

                            <td>

                                <span class="stok {{ $item->stok <= 5 ? 'stok-warning' : '' }}">
                                    {{ $item->stok }}
                                </span>

                            </td>

                            <td>

                                <div class="aksi">

                                    <!-- EDIT -->
                                    <a
                                        href="/obat/{{ $item->id }}/edit"
                                        class="btn-edit"
                                    >
                                        Edit
                                    </a>


                                    <!-- HAPUS -->
                                    <form
                                        action="/obat/{{ $item->id }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus obat ini?')"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-delete"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                style="text-align:center; padding:30px; color:#6b7280;"
                            >
                                Belum ada data obat.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </main>

</div>
<script>

    document.getElementById('searchObat').addEventListener('keyup', function () {

        let keyword = this.value.toLowerCase();

        let rows = document.querySelectorAll('tbody tr');

        rows.forEach(function (row) {

            let nama = row.cells[1].innerText.toLowerCase();
            let kode = row.cells[0].innerText.toLowerCase();

            if (nama.includes(keyword) || kode.includes(keyword)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }

        });

    });

</script>
</body>

</html>