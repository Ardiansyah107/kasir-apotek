<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Apotek Besok Sembuh</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            background: #f5faf7;
            color: #1f2937;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 250px;
            background: #ffffff;
            border-right: 1px solid #e4eee8;

            padding: 25px 18px;

            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;

            box-shadow: 4px 0 20px rgba(22, 163, 74, 0.04);

            z-index: 100;
        }


        /* LOGO */

        .logo {
            display: flex;
            align-items: center;
            gap: 9px;

            font-size: 20px;
            font-weight: 800;

            margin-bottom: 38px;
            padding: 0 10px;

            color: #26352c;
        }

        .logo-icon {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #dcfce7;
            color: #16a34a;

            border-radius: 12px;

            font-size: 22px;
        }

        .logo span {
            color: #16a34a;
        }


        /* MENU */

        .menu-title {
            font-size: 10px;
            font-weight: 700;

            color: #9aaa9f;

            margin: 24px 10px 10px;

            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        .menu a,
        .menu button {

            display: flex;
            align-items: center;

            gap: 12px;

            width: 100%;

            text-decoration: none;

            color: #718078;

            padding: 12px 14px;

            margin-bottom: 6px;

            border-radius: 12px;

            font-size: 14px;
            font-weight: 500;

            border: none;
            background: none;

            cursor: pointer;

            transition: 0.2s;
        }

        .menu a:hover,
        .menu button:hover {

            background: #f0fdf4;

            color: #16a34a;

            transform: translateX(3px);
        }

        .menu a.active {

            background: #dcfce7;

            color: #15803d;

            font-weight: 700;
        }

        .menu-icon {
            width: 25px;
            text-align: center;
            font-size: 17px;
        }

        .menu form {
            margin: 0;
        }


        /* ================= CONTENT ================= */

        .content {

            margin-left: 250px;

            width: calc(100% - 250px);

            padding: 32px 38px;
        }


        /* ================= TOPBAR ================= */

        .topbar {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 28px;
        }

        .page-title h1 {

            font-size: 28px;

            font-weight: 750;

            color: #1f2d25;

            margin-bottom: 5px;
        }

        .page-title p {

            color: #829087;

            font-size: 14px;
        }


        /* ================= ADMIN ================= */

        .admin-wrapper {
            position: relative;
        }

        .admin {

            background: white;

            padding: 8px 12px 8px 8px;

            border-radius: 15px;

            border: 1px solid #e4eee8;

            display: flex;

            align-items: center;

            gap: 10px;

            box-shadow: 0 5px 18px rgba(0,0,0,0.03);

            cursor: pointer;

            transition: 0.2s;
        }

        .admin:hover {

            border-color: #bbf7d0;

            box-shadow:
                0 8px 22px rgba(22,163,74,0.10);

            transform: translateY(-1px);
        }

        .admin-avatar {

            width: 38px;
            height: 38px;

            background:
                linear-gradient(
                    135deg,
                    #bbf7d0,
                    #dcfce7
                );

            color: #15803d;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 800;
        }

        .admin-info {

            display: flex;

            flex-direction: column;

            gap: 2px;

            text-align: left;
        }

        .admin-info strong {

            font-size: 13px;

            color: #26352c;
        }

        .admin-info span {

            font-size: 11px;

            color: #9aaa9f;
        }

        .admin-arrow {

            color: #8a988f;

            margin-left: 5px;

            transition: 0.2s;
        }


        /* ================= ADMIN DROPDOWN ================= */

        .admin-dropdown {

            display: none;

            position: absolute;

            right: 0;

            top: calc(100% + 10px);

            width: 235px;

            background: white;

            border: 1px solid #e4eee8;

            border-radius: 16px;

            padding: 10px;

            box-shadow:
                0 15px 35px rgba(0,0,0,0.10);

            z-index: 1000;

            animation: dropdownShow 0.18s ease;
        }

        .admin-dropdown.show {
            display: block;
        }

        @keyframes dropdownShow {

            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .dropdown-header {

            display: flex;

            align-items: center;

            gap: 10px;

            padding: 10px;
        }

        .dropdown-avatar {

            width: 40px;
            height: 40px;

            border-radius: 12px;

            background: #dcfce7;

            color: #15803d;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 800;
        }

        .dropdown-header strong {

            display: block;

            font-size: 13px;

            color: #26352c;
        }

        .dropdown-header span {

            display: block;

            font-size: 11px;

            color: #9aaa9f;

            margin-top: 3px;
        }

        .dropdown-line {

            height: 1px;

            background: #edf2ee;

            margin: 7px 0;
        }

        .admin-dropdown a,
        .admin-dropdown form button {

            display: flex;

            align-items: center;

            width: 100%;

            padding: 11px 10px;

            border: none;

            background: transparent;

            border-radius: 10px;

            text-decoration: none;

            color: #526158;

            font-size: 13px;

            cursor: pointer;

            text-align: left;

            transition: 0.2s;
        }

        .admin-dropdown a:hover,
        .admin-dropdown form button:hover {

            background: #f0fdf4;

            color: #15803d;

            transform: translateX(2px);
        }


        /* ================= WELCOME ================= */

        .welcome {

            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    #22c55e,
                    #15803d
                );

            color: white;

            padding: 28px 32px;

            border-radius: 20px;

            margin-bottom: 24px;

            box-shadow:
                0 12px 30px rgba(22, 163, 74, 0.18);
        }

        .welcome::before {

            content: "💊";

            position: absolute;

            right: 80px;

            top: -18px;

            font-size: 85px;

            opacity: 0.12;

            transform: rotate(-15deg);
        }

        .welcome::after {

            content: "🌿";

            position: absolute;

            right: 20px;

            bottom: -20px;

            font-size: 75px;

            opacity: 0.12;

            transform: rotate(15deg);
        }

        .welcome h2 {

            font-size: 22px;

            margin-bottom: 8px;

            position: relative;

            z-index: 1;
        }

        .welcome p {

            font-size: 14px;

            opacity: 0.92;

            position: relative;

            z-index: 1;
        }


        /* ================= CARDS ================= */

        .cards {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 16px;

            margin-bottom: 24px;
        }

        .card {

            position: relative;

            background: white;

            border: 1px solid #e4eee8;

            border-radius: 18px;

            padding: 20px;

            overflow: hidden;

            transition: 0.25s;

            box-shadow:
                0 5px 18px rgba(0,0,0,0.025);
        }

        .card:hover {

            transform: translateY(-4px);

            box-shadow:
                0 12px 25px rgba(0,0,0,0.07);
        }

        .card-top {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 13px;
        }

        .card-icon {

            width: 42px;
            height: 42px;

            border-radius: 13px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;
        }

        .green {
            background: #dcfce7;
        }

        .blue {
            background: #dbeafe;
        }

        .orange {
            background: #ffedd5;
        }

        .red {
            background: #fee2e2;
        }

        .card-label {

            color: #718078;

            font-size: 13px;

            font-weight: 600;
        }

        .card-number {

            font-size: 27px;

            font-weight: 800;

            color: #26352c;
        }

        .card-info {

            margin-top: 5px;

            font-size: 12px;

            color: #9aaa9f;
        }


        /* ================= GRID ================= */

        .dashboard-grid {

            display: grid;

            grid-template-columns: 2fr 1fr;

            gap: 20px;
        }


        /* ================= PANEL ================= */

        .panel {

            background: white;

            border: 1px solid #e4eee8;

            border-radius: 18px;

            overflow: hidden;

            box-shadow:
                0 5px 18px rgba(0,0,0,0.025);
        }

        .panel-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 19px 20px;

            border-bottom:
                1px solid #edf2ee;
        }

        .panel-header h2 {

            font-size: 16px;

            color: #26352c;
        }

        .panel-header small {

            color: #9aaa9f;

            font-size: 11px;
        }


        /* ================= TABLE ================= */

        table {

            width: 100%;

            border-collapse: collapse;
        }

        th {

            text-align: left;

            background: #f8fbf9;

            color: #829087;

            font-size: 10px;

            padding: 12px 20px;

            text-transform: uppercase;

            letter-spacing: 0.5px;
        }

        td {

            padding: 14px 20px;

            border-top:
                1px solid #f0f3f1;

            font-size: 13px;

            color: #526158;
        }

        tbody tr {

            transition: 0.2s;
        }

        tbody tr:hover {

            background: #f8fdf9;
        }

        td:first-child {

            color: #16a34a;

            font-weight: 700;
        }


        /* ================= CATEGORY ================= */

        .category {

            display: inline-block;

            background: #f0fdf4;

            color: #15803d;

            padding: 5px 9px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 600;
        }


        /* ================= STOK ================= */

        .stok-warning {

            display: inline-block;

            color: #dc2626;

            background: #fee2e2;

            padding: 5px 9px;

            border-radius: 8px;

            font-weight: 700;

            font-size: 12px;
        }

        .stok-aman {

            display: inline-block;

            color: #15803d;

            background: #dcfce7;

            padding: 5px 9px;

            border-radius: 8px;

            font-weight: 700;

            font-size: 12px;
        }


        /* ================= STOCK LIST ================= */

        .stock-item {

            padding: 15px 20px;

            border-bottom:
                1px solid #f0f3f1;

            transition: 0.2s;
        }

        .stock-item:hover {

            background: #fffafa;
        }

        .stock-name {

            font-weight: 700;

            font-size: 14px;

            color: #37443c;
        }

        .stock-code {

            font-size: 11px;

            color: #a0aaa4;

            margin-top: 4px;
        }

        .stock-number {

            display: inline-block;

            margin-top: 7px;

            color: #dc2626;

            background: #fee2e2;

            padding: 4px 8px;

            border-radius: 7px;

            font-weight: 700;

            font-size: 11px;
        }


        /* ================= EMPTY ================= */

        .empty {

            padding: 38px 20px;

            text-align: center;

            color: #8c9991;

            font-size: 13px;
        }

        .empty-icon {

            font-size: 35px;

            margin-bottom: 8px;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 1100px) {

            .cards {

                grid-template-columns:
                    repeat(2, 1fr);
            }

            .dashboard-grid {

                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 750px) {

            .sidebar {

                width: 200px;
            }

            .content {

                margin-left: 200px;

                width:
                    calc(100% - 200px);

                padding: 20px;
            }

            .cards {

                grid-template-columns: 1fr;
            }

            .topbar {

                align-items: flex-start;

                gap: 15px;
            }

            .admin-info {

                display: none;
            }
        }

    </style>

</head>


<body>

<div class="layout">


    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                ✚
            </div>

            <div>
                <span>Apotek</span> Besok Sembuh
            </div>

        </div>


        <div class="menu-title">
            Menu Utama
        </div>


        <div class="menu">

            <a href="/dashboard" class="active">

                <span class="menu-icon">
                    🏠
                </span>

                Dashboard

            </a>


            <a href="/obat">

                <span class="menu-icon">
                    💊
                </span>

                Data Obat

            </a>


            <a href="/kasir">

                <span class="menu-icon">
                    🛒
                </span>

                Kasir

            </a>


            <a href="/transaksi">

                <span class="menu-icon">
                    🧾
                </span>

                Transaksi

            </a>


            <a href="/laporan">

                <span class="menu-icon">
                    📊
                </span>

                Laporan

            </a>

        </div>


        <div class="menu-title">
            Pengaturan
        </div>


        <div class="menu">

            <a href="/pengaturan">

                <span class="menu-icon">
                    ⚙️
                </span>

                Pengaturan

            </a>


            <form
                action="{{ route('logout') }}"
                method="POST"
            >

                @csrf

                <button type="submit">

                    <span class="menu-icon">
                        🚪
                    </span>

                    Logout

                </button>

            </form>

        </div>

    </aside>



    <!-- ================= CONTENT ================= -->

    <main class="content">


        <!-- ================= TOPBAR ================= -->

        <div class="topbar">


            <div class="page-title">

                <h1>
                    Dashboard 👋
                </h1>

                <p>
                    Kalo ga sembuh, balik lagi 😎
                </p>

            </div>



            <!-- ================= ADMIN ================= -->

            <div class="admin-wrapper">

                <button
                    class="admin"
                    onclick="toggleAdminMenu()"
                    type="button"
                >

                    <div class="admin-avatar">

                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

                    </div>


                    <div class="admin-info">

                        <strong>
                            {{ Auth::user()->name }}
                        </strong>

                        <span>
                            Administrator
                        </span>

                    </div>


                    <span
                        class="admin-arrow"
                        id="adminArrow"
                    >
                        ▾
                    </span>

                </button>



                <!-- DROPDOWN -->

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
                                Administrator
                            </span>

                        </div>

                    </div>


                    <div class="dropdown-line"></div>


                    <a href="/pengaturan">

                        👤 &nbsp; Profil & Pengaturan

                    </a>


                    <a href="/dashboard">

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



        <!-- ================= WELCOME ================= -->

        <div class="welcome">

            <h2>
                Selamat Datang di Apotek Besok Sembuh 💊
            </h2>

            <p>
                Kalo masih belum sembuh, balik lagi 😎
            </p>

        </div>



        <!-- ================= CARDS ================= -->

        <div class="cards">


            <!-- TOTAL OBAT -->

            <div class="card">

                <div class="card-top">

                    <div class="card-label">
                        Total Obat
                    </div>

                    <div class="card-icon green">
                        💊
                    </div>

                </div>


                <div class="card-number">
                    {{ $totalObat }}
                </div>


                <div class="card-info">
                    Jenis obat terdaftar
                </div>

            </div>



            <!-- TOTAL STOK -->

            <div class="card">

                <div class="card-top">

                    <div class="card-label">
                        Total Stok
                    </div>

                    <div class="card-icon blue">
                        📦
                    </div>

                </div>


                <div class="card-number">
                    {{ $totalStok }}
                </div>


                <div class="card-info">
                    Stok seluruh obat
                </div>

            </div>



            <!-- STOK MENIPIS -->

            <div class="card">

                <div class="card-top">

                    <div class="card-label">
                        Stok Menipis
                    </div>

                    <div class="card-icon orange">
                        ⚠️
                    </div>

                </div>


                <div class="card-number">
                    {{ $stokMenipis }}
                </div>


                <div class="card-info">
                    Stok &lt; 20
                </div>

            </div>



            <!-- STOK HABIS -->

            <div class="card">

                <div class="card-top">

                    <div class="card-label">
                        Stok Habis
                    </div>

                    <div class="card-icon red">
                        🚨
                    </div>

                </div>


                <div class="card-number">
                    {{ $stokHabis }}
                </div>


                <div class="card-info">
                    Perlu segera restock
                </div>

            </div>

        </div>



        <!-- ================= BOTTOM ================= -->

        <div class="dashboard-grid">


            <!-- ================= OBAT TERBARU ================= -->

            <div class="panel">


                <div class="panel-header">

                    <h2>
                        💊 Obat Terbaru
                    </h2>

                    <small>
                        Data terbaru
                    </small>

                </div>



                @if($obatTerbaru->count() > 0)


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
                                    Stok
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach($obatTerbaru as $item)


                                <tr>


                                    <td>
                                        {{ $item->kode_obat }}
                                    </td>


                                    <td>
                                        {{ $item->nama_obat }}
                                    </td>


                                    <td>

                                        <span class="category">

                                            {{ $item->kategori }}

                                        </span>

                                    </td>


                                    <td>


                                        @if($item->stok == 0)

                                            <span class="stok-warning">
                                                Habis
                                            </span>

                                        @elseif($item->stok < 20)

                                            <span class="stok-warning">
                                                {{ $item->stok }}
                                            </span>

                                        @else

                                            <span class="stok-aman">
                                                {{ $item->stok }}
                                            </span>

                                        @endif


                                    </td>


                                </tr>


                            @endforeach


                        </tbody>

                    </table>


                @else


                    <div class="empty">

                        <div class="empty-icon">
                            💊
                        </div>

                        Belum ada data obat.

                    </div>


                @endif


            </div>



            <!-- ================= STOK MENIPIS ================= -->

            <div class="panel">


                <div class="panel-header">

                    <h2>
                        ⚠️ Stok Menipis
                    </h2>

                    <small>
                        Di bawah 20
                    </small>

                </div>



                @if($obatMenipis->count() > 0)


                    @foreach($obatMenipis as $item)


                        <div class="stock-item">


                            <div class="stock-name">

                                {{ $item->nama_obat }}

                            </div>


                            <div class="stock-code">

                                {{ $item->kode_obat }}

                            </div>


                            <div class="stock-number">

                                Stok: {{ $item->stok }}

                            </div>


                        </div>


                    @endforeach


                @else


                    <div class="empty">

                        <div class="empty-icon">
                            🎉
                        </div>

                        Semua stok masih aman!

                        <br>

                        <span style="font-size: 11px;">

                            Tidak ada obat yang perlu direstock.

                        </span>

                    </div>


                @endif


            </div>


        </div>


    </main>

</div>



<!-- ================= JAVASCRIPT ================= -->

<script>

    function toggleAdminMenu() {

        const dropdown =
            document.getElementById('adminDropdown');

        const arrow =
            document.getElementById('adminArrow');


        dropdown.classList.toggle('show');


        if (dropdown.classList.contains('show')) {

            arrow.innerHTML = '▴';

        } else {

            arrow.innerHTML = '▾';

        }

    }


    /* Klik di luar dropdown */

    document.addEventListener('click', function(event) {

        const wrapper =
            document.querySelector('.admin-wrapper');

        const dropdown =
            document.getElementById('adminDropdown');

        const arrow =
            document.getElementById('adminArrow');


        if (!wrapper.contains(event.target)) {

            dropdown.classList.remove('show');

            arrow.innerHTML = '▾';

        }

    });

</script>


</body>
</html>

