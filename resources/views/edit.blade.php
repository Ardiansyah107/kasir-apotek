<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Obat - Apotek Sehat</title>

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

        /* FORM CARD */
        .form-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 30px;
            max-width: 900px;
        }

        .form-header {
            margin-bottom: 25px;
        }

        .form-header h2 {
            font-size: 18px;
            margin-bottom: 6px;
        }

        .form-header p {
            color: #6b7280;
            font-size: 13px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: span 2;
        }

        label {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #374151;
        }

        input,
        select {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            background: white;
        }

        input:focus,
        select:focus {
            border-color: #16a34a;
            box-shadow: 0 0 0 3px #dcfce7;
        }

        /* ERROR */
        .error-box {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-size: 13px;
        }

        .error-box ul {
            padding-left: 18px;
            margin-top: 5px;
        }

        /* BUTTON */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }

        .btn-cancel {
            text-decoration: none;
            color: #6b7280;
            background: #f3f4f6;
            padding: 11px 18px;
            border-radius: 8px;
            font-size: 14px;
        }

        .btn-save {
            background: #16a34a;
            color: white;
            border: none;
            padding: 11px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-save:hover {
            background: #15803d;
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

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: span 1;
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

        <div class="menu-title">Menu Utama</div>

        <div class="menu">
            <a href="#">Dashboard</a>
            <a href="/obat" class="active">Data Obat</a>
            <a href="#">Kasir</a>
            <a href="#">Transaksi</a>
            <a href="#">Laporan</a>
        </div>

        <div class="menu-title">Pengaturan</div>

        <div class="menu">
            <a href="#">Pengaturan</a>
        </div>

    </aside>


    <!-- CONTENT -->
    <main class="content">

        <div class="topbar">

            <div class="page-title">
                <h1>Edit Obat</h1>
                <p>Perbarui informasi obat dalam persediaan apotek</p>
            </div>

            <div class="admin">
                Admin
            </div>

        </div>


        <!-- FORM -->
        <div class="form-card">

            <div class="form-header">
                <h2>Informasi Obat</h2>
                <p>Perbarui data obat dengan benar</p>
            </div>


            @if ($errors->any())

                <div class="error-box">

                    <strong>Datanya belum lolos seleksi alam:</strong>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif


            <form action="/obat/{{ $obat->id }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-grid">

                    <div class="form-group">
                        <label>Kode Obat</label>

                        <input
                            type="text"
                            name="kode_obat"
                            value="{{ old('kode_obat', $obat->kode_obat) }}"
                        >
                    </div>


                    <div class="form-group">
                        <label>Nama Obat</label>

                        <input
                            type="text"
                            name="nama_obat"
                            value="{{ old('nama_obat', $obat->nama_obat) }}"
                        >
                    </div>


                    <div class="form-group">
                        <label>Kategori</label>

                        <select name="kategori">

                            <option value="">-- Pilih Kategori --</option>

                            <option value="Antibiotik"
                                {{ old('kategori', $obat->kategori) == 'Antibiotik' ? 'selected' : '' }}>
                                Antibiotik
                            </option>

                            <option value="Pereda Nyeri"
                                {{ old('kategori', $obat->kategori) == 'Pereda Nyeri' ? 'selected' : '' }}>
                                Pereda Nyeri
                            </option>

                            <option value="Antihistamin"
                                {{ old('kategori', $obat->kategori) == 'Antihistamin' ? 'selected' : '' }}>
                                Antihistamin
                            </option>

                            <option value="Antasida"
                                {{ old('kategori', $obat->kategori) == 'Antasida' ? 'selected' : '' }}>
                                Antasida
                            </option>

                            <option value="Vitamin & Suplemen"
                                {{ old('kategori', $obat->kategori) == 'Vitamin & Suplemen' ? 'selected' : '' }}>
                                Vitamin & Suplemen
                            </option>

                            <option value="Obat Batuk & Flu"
                                {{ old('kategori', $obat->kategori) == 'Obat Batuk & Flu' ? 'selected' : '' }}>
                                Obat Batuk & Flu
                            </option>

                            <option value="Obat Hipertensi"
                                {{ old('kategori', $obat->kategori) == 'Obat Hipertensi' ? 'selected' : '' }}>
                                Obat Hipertensi
                            </option>

                            <option value="Obat Diabetes"
                                {{ old('kategori', $obat->kategori) == 'Obat Diabetes' ? 'selected' : '' }}>
                                Obat Diabetes
                            </option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label>Harga Beli</label>

                        <input
                            type="number"
                            name="harga_beli"
                            value="{{ old('harga_beli', $obat->harga_beli) }}"
                        >
                    </div>


                    <div class="form-group">
                        <label>Harga Jual</label>

                        <input
                            type="number"
                            name="harga_jual"
                            value="{{ old('harga_jual', $obat->harga_jual) }}"
                        >
                    </div>


                    <div class="form-group">
                        <label>Stok</label>

                        <input
                            type="number"
                            name="stok"
                            value="{{ old('stok', $obat->stok) }}"
                            min="0"
                        >
                    </div>


                    <div class="form-group full">
                        <label>Tanggal Kadaluarsa</label>

                        <input
                            type="date"
                            name="tanggal_kadaluarsa"
                            value="{{ old('tanggal_kadaluarsa', $obat->tanggal_kadaluarsa) }}"
                        >
                    </div>

                </div>


                <div class="form-actions">

                    <a href="/obat" class="btn-cancel">
                        Batal
                    </a>

                    <button type="submit" class="btn-save">
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

</body>
</html>