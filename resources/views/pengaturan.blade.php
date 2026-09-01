<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pengaturan - Apotek Besok Sembuh</title>

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
        background: white;
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

    .menu a,
    .menu button {
        display: block;
        width: 100%;
        text-decoration: none;
        color: #6b7280;
        padding: 12px 14px;
        margin-bottom: 5px;
        border-radius: 9px;
        font-size: 14px;
        text-align: left;
        border: none;
        background: none;
        cursor: pointer;
    }

    .menu a:hover,
    .menu button:hover {
        background: #f0fdf4;
        color: #16a34a;
    }

    .menu a.active {
        background: #dcfce7;
        color: #15803d;
        font-weight: bold;
    }

    .menu form {
        margin: 0;
    }

    /* CONTENT */

    .content {
        margin-left: 240px;
        width: calc(100% - 240px);
        padding: 35px;
    }

    /* TOPBAR */

    .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .page-title h1 {
        font-size: 28px;
        margin-bottom: 7px;
    }

    .page-title p {
        color: #6b7280;
        font-size: 14px;
    }

    .admin {
        background: white;
        padding: 9px 13px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;

        display: flex;
        align-items: center;
        gap: 10px;
    }

    .admin-avatar {
        width: 34px;
        height: 34px;
        background: #dcfce7;
        color: #15803d;
        border-radius: 50%;

        display: flex;
        align-items: center;
        justify-content: center;

        font-weight: bold;
    }

    .admin-info {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .admin-info strong {
        font-size: 13px;
    }

    .admin-info span {
        font-size: 11px;
        color: #9ca3af;
    }

    .admin-arrow {
        color: #6b7280;
    }

    /* WELCOME */

    .welcome {
        background: linear-gradient(135deg, #16a34a, #15803d);
        color: white;
        padding: 28px;
        border-radius: 15px;
        margin-bottom: 25px;
    }

    .welcome h2 {
        font-size: 22px;
        margin-bottom: 8px;
    }

    .welcome p {
        font-size: 14px;
        opacity: 0.9;
    }

    /* SETTINGS GRID */

    .settings-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .setting-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 24px;
    }

    .setting-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
    }

    .setting-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: #dcfce7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .setting-header h2 {
        font-size: 17px;
    }

    .setting-header p {
        font-size: 12px;
        color: #9ca3af;
        margin-top: 3px;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-group label {
        display: block;
        font-size: 13px;
        font-weight: bold;
        margin-bottom: 7px;
    }

    .form-group input {
        width: 100%;
        padding: 11px 12px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        outline: none;
        font-size: 13px;
    }

    .form-group input:focus {
        border-color: #16a34a;
    }

    .info-box {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 10px;
        padding: 14px;
        font-size: 13px;
        color: #166534;
        line-height: 1.5;
    }

    .stock-number {
        font-size: 30px;
        font-weight: bold;
        color: #16a34a;
        margin: 10px 0;
    }

    .save-button {
        margin-top: 5px;
        padding: 11px 18px;
        background: #16a34a;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
    }

    .save-button:hover {
        background: #15803d;
    }

    .funny {
        margin-top: 20px;
        padding: 18px;
        border-radius: 12px;
        background: #fff7ed;
        border: 1px solid #fed7aa;
        color: #9a3412;
        font-size: 13px;
        line-height: 1.5;
    }

    /* RESPONSIVE */

    @media (max-width: 900px) {
        .settings-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 700px) {
        .sidebar {
            width: 190px;
        }

        .content {
            margin-left: 190px;
            width: calc(100% - 190px);
            padding: 20px;
        }
    }
</style>

</head>

<body>

<div class="layout">

<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="logo">
        ✚ <span>Apotek</span> Besok Sembuh
    </div>

    <div class="menu-title">
        Menu Utama
    </div>

    <div class="menu">

        <a href="/dashboard">
            🏠 Dashboard
        </a>

        <a href="/obat">
            💊 Data Obat
        </a>

        <a href="/kasir">
            🛒 Kasir
        </a>

        <a href="/transaksi">
            🧾 Transaksi
        </a>

        <a href="/laporan">
            📊 Laporan
        </a>

    </div>

    <div class="menu-title">
        Pengaturan
    </div>

    <div class="menu">

        <a href="/pengaturan" class="active">
            ⚙️ Pengaturan
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit">
                🚪 Logout
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
                ⚙️ Pengaturan
            </h1>

            <p>
                Atur sistem Apotek Besok Sembuh sesuka hati.
            </p>

        </div>

        <div class="admin">

            <div class="admin-avatar">
                A
            </div>

            <div class="admin-info">

                <strong>
                    Admin
                </strong>

                <span>
                    Administrator
                </span>

            </div>

            <span class="admin-arrow">
                ⌄
            </span>

        </div>

    </div>


    <!-- WELCOME -->

    <div class="welcome">

        <h2>
            Santai, yang diatur cuma aplikasinya 😎
        </h2>

        <p>
            Kelola informasi apotek dan pengaturan sistem dari halaman ini.
        </p>

    </div>


    <!-- SETTINGS -->

    <div class="settings-grid">

        <!-- PROFIL ADMIN -->

        <div class="setting-card">

            <div class="setting-header">

                <div class="setting-icon">
                    👤
                </div>

                <div>
                    <h2>Profil Admin</h2>

                    <p>
                        Informasi pengguna aplikasi
                    </p>
                </div>

            </div>

            <div class="form-group">

                <label>
                    Nama
                </label>

                <input
                    type="text"
                    value="Admin"
                >

            </div>

            <div class="form-group">

                <label>
                    Status
                </label>

                <input
                    type="text"
                    value="Administrator"
                    readonly
                >

            </div>

            <button class="save-button">
                Simpan Perubahan
            </button>

        </div>


        <!-- INFORMASI APOTEK -->

        <div class="setting-card">

            <div class="setting-header">

                <div class="setting-icon">
                    🏪
                </div>

                <div>
                    <h2>Informasi Apotek</h2>

                    <p>
                        Informasi dasar apotek
                    </p>
                </div>

            </div>

            <div class="form-group">

                <label>
                    Nama Apotek
                </label>

                <input
                    type="text"
                    value="Apotek Besok Sembuh"
                >

            </div>

            <div class="form-group">

                <label>
                    Nomor Telepon
                </label>

                <input
                    type="text"
                    placeholder="Masukkan nomor telepon"
                >

            </div>

            <button class="save-button">
                Simpan Informasi
            </button>

        </div>


        <!-- BATAS STOK -->

        <div class="setting-card">

            <div class="setting-header">

                <div class="setting-icon">
                    ⚠️
                </div>

                <div>
                    <h2>Batas Stok Menipis</h2>

                    <p>
                        Penanda stok yang perlu diperhatikan
                    </p>
                </div>

            </div>

            <div class="stock-number">
                20
            </div>

            <div class="info-box">

                Obat dengan stok di bawah <strong>20</strong>
                akan dianggap sebagai stok menipis.

            </div>

            <button class="save-button">
                Pengaturan Aktif ✓
            </button>

        </div>


        <!-- PASSWORD -->

        <div class="setting-card">

            <div class="setting-header">

                <div class="setting-icon">
                    🔐
                </div>

                <div>
                    <h2>Keamanan</h2>

                    <p>
                        Pengaturan keamanan akun
                    </p>
                </div>

            </div>

            <div class="info-box">

                🔒 Akun administrator dilindungi oleh sistem login.

                <br><br>

                Untuk keamanan, jangan berikan password kepada orang lain.

            </div>

            <button class="save-button">
                Ubah Password
            </button>

        </div>

    </div>


    <div class="funny">

        💊 <strong>Apotek Besok Sembuh:</strong>
        kalau obatnya belum menyembuhkan hari ini,
        setidaknya dashboard-nya harus tetap kelihatan bagus. 😂

    </div>

</main>


</div>

</body>
</html>
