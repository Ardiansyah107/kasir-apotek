<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kasir - Apotek Sehat</title>

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

        /* KASIR */
        .kasir-container {
            display: grid;
            grid-template-columns: 1.6fr 1fr;
            gap: 20px;
            align-items: start;
        }

        .produk-container,
        .keranjang {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
        }

        .box-header {
            padding: 20px;
            border-bottom: 1px solid #e5e7eb;
        }

        .box-header h2 {
            font-size: 17px;
            margin-bottom: 12px;
        }

        /* SEARCH */
        .search-input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        .search-input:focus {
            border-color: #16a34a;
        }

        /* PRODUK */
        .produk-list {
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .produk-card {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 16px;
        }

        .produk-card:hover {
            border-color: #86efac;
        }

        .produk-kode {
            font-size: 12px;
            color: #9ca3af;
            margin-bottom: 7px;
        }

        .produk-nama {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .produk-kategori {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 4px 8px;
            border-radius: 5px;
            font-size: 11px;
            margin-bottom: 12px;
        }

        .produk-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 13px;
        }

        .produk-harga {
            font-size: 15px;
            font-weight: bold;
        }

        .produk-stok {
            font-size: 12px;
            color: #6b7280;
        }

        .btn-tambah {
            width: 100%;
            padding: 9px;
            border: none;
            border-radius: 7px;
            background: #16a34a;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-tambah:hover {
            background: #15803d;
        }

        /* KERANJANG */
        .keranjang-list {
            padding: 20px;
            min-height: 200px;
        }

        .keranjang-kosong {
            text-align: center;
            color: #9ca3af;
            padding: 50px 10px;
            font-size: 14px;
        }

        .cart-item {
            border-bottom: 1px solid #e5e7eb;
            padding: 15px 0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .cart-item-price {
            font-size: 13px;
            color: #6b7280;
        }

        .cart-item-bottom {
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .qty-control {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .qty-btn {
            width: 28px;
            height: 28px;
            border: 1px solid #d1d5db;
            background: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        .qty-btn:hover {
            background: #f3f4f6;
        }

        .qty-number {
            min-width: 20px;
            text-align: center;
            font-weight: bold;
        }

        .cart-subtotal {
            font-weight: bold;
        }

        /* TOTAL */
        .total-box {
            border-top: 1px solid #e5e7eb;
            padding: 20px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .total-row.grand-total {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e5e7eb;
        }

        .btn-proses {
            width: 100%;
            margin-top: 15px;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #16a34a;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-proses:hover {
            background: #15803d;
        }

        .btn-proses:disabled {
            background: #9ca3af;
            cursor: not-allowed;
        }

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            .kasir-container {
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

            .produk-list {
                grid-template-columns: 1fr;
            }

            .topbar {
                align-items: flex-start;
                gap: 15px;
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

            <a href="{{ url('/kasir') }}" class="active">
                Kasir
            </a>

            <a href="{{ route('transaksi.index') }}">
                Transaksi
            </a>

            <a href="{{ route('laporan') }}">
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
                    Kasir
                </h1>

                <p>
                    Kelola transaksi penjualan obat
                </p>

            </div>

            <div class="admin">
                Admin
            </div>

        </div>


        <!-- KASIR -->
        <div class="kasir-container">

            <!-- PRODUK -->
            <div class="produk-container">

                <div class="box-header">

                    <h2>
                        Pilih Obat
                    </h2>

                    <input
                        type="text"
                        class="search-input"
                        id="searchObat"
                        placeholder="Cari nama atau kode obat..."
                    >

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

                                <div class="produk-stok">
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

                        <p>
                            Belum ada obat yang tersedia.
                        </p>

                    @endforelse

                </div>

            </div>


            <!-- KERANJANG -->
            <div class="keranjang">

                <div class="box-header">

                    <h2>
                        Keranjang
                    </h2>

                </div>


                <div class="keranjang-list" id="keranjangList">

                    <div class="keranjang-kosong">
                        Belum ada obat yang dipilih.
                    </div>

                </div>


                <div class="total-box">

                    <div class="total-row">

                        <span>
                            Total Item
                        </span>

                        <span id="totalItem">
                            0
                        </span>

                    </div>


                    <div class="total-row grand-total">

                        <span>
                            Total
                        </span>

                        <span id="totalHarga">
                            Rp 0
                        </span>

                    </div>


                    <button
                        type="button"
                        class="btn-proses"
                        id="btnProses"
                        onclick="prosesTransaksi()"
                    >
                        Proses Transaksi
                    </button>

                </div>

            </div>

        </div>

    </main>

</div>


<script>

    let keranjang = [];


    /*
    |--------------------------------------------------------------------------
    | TAMBAH KE KERANJANG
    |--------------------------------------------------------------------------
    */

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


    /*
    |--------------------------------------------------------------------------
    | TAMPILKAN KERANJANG
    |--------------------------------------------------------------------------
    */

    function tampilkanKeranjang() {

        let container = document.getElementById('keranjangList');

        if (keranjang.length === 0) {

            container.innerHTML = `
                <div class="keranjang-kosong">
                    Belum ada obat yang dipilih.
                </div>
            `;

            hitungTotal();
            return;
        }


        container.innerHTML = '';


        keranjang.forEach(item => {

            let subtotal = item.harga * item.qty;

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


    /*
    |--------------------------------------------------------------------------
    | TAMBAH QTY
    |--------------------------------------------------------------------------
    */

    function tambahQty(id) {

        let item = keranjang.find(item => item.id === id);

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


    /*
    |--------------------------------------------------------------------------
    | KURANGI QTY
    |--------------------------------------------------------------------------
    */

    function kurangiQty(id) {

        let item = keranjang.find(item => item.id === id);

        if (!item) {
            return;
        }

        item.qty--;

        if (item.qty <= 0) {

            keranjang = keranjang.filter(item => item.id !== id);

        }

        tampilkanKeranjang();
    }


    /*
    |--------------------------------------------------------------------------
    | HITUNG TOTAL
    |--------------------------------------------------------------------------
    */

    function hitungTotal() {

        let totalItem = 0;
        let totalHarga = 0;


        keranjang.forEach(item => {

            totalItem += item.qty;

            totalHarga += item.harga * item.qty;

        });


        document.getElementById('totalItem').innerText =
            totalItem;


        document.getElementById('totalHarga').innerText =
            'Rp ' + totalHarga.toLocaleString('id-ID');


        let btnProses = document.getElementById('btnProses');

        btnProses.disabled = keranjang.length === 0;
    }


    /*
    |--------------------------------------------------------------------------
    | PROSES TRANSAKSI
    |--------------------------------------------------------------------------
    */

    function prosesTransaksi() {

        if (keranjang.length === 0) {

            alert('Keranjang masih kosong.');
            return;

        }


        let btnProses = document.getElementById('btnProses');

        btnProses.disabled = true;
        btnProses.innerText = 'Memproses...';


        fetch('{{ route('transaksi.proses') }}', {

            method: 'POST',

            headers: {

                'Content-Type': 'application/json',

                'X-CSRF-TOKEN': '{{ csrf_token() }}',

                'Accept': 'application/json'

            },

            body: JSON.stringify({

                keranjang: keranjang

            })

        })

        .then(async response => {

            let data;

            try {

                data = await response.json();

            } catch (error) {

                throw new Error(
                    'Server mengembalikan response yang tidak valid.'
                );

            }


            if (!response.ok) {

                throw new Error(
                    data.message || 'Terjadi kesalahan pada server.'
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


                /*
                |--------------------------------------------------------------------------
                | SETELAH TRANSAKSI BERHASIL
                | MASUK KE RIWAYAT TRANSAKSI
                |--------------------------------------------------------------------------
                */

                window.location.href = '{{ route('transaksi.index') }}';


            } else {

                alert(
                    data.message ||
                    'Transaksi gagal diproses.'
                );

                btnProses.disabled = false;
                btnProses.innerText = 'Proses Transaksi';

            }

        })

        .catch(error => {

            console.error(error);

            alert(
                'Terjadi kesalahan saat memproses transaksi.\n\n' +
                error.message
            );


            btnProses.disabled = false;
            btnProses.innerText = 'Proses Transaksi';

        });

    }


    /*
    |--------------------------------------------------------------------------
    | SEARCH OBAT
    |--------------------------------------------------------------------------
    */

    document
        .getElementById('searchObat')
        .addEventListener('keyup', function () {

            let keyword = this.value.toLowerCase();

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


    /*
    |--------------------------------------------------------------------------
    | ESCAPE HTML
    |--------------------------------------------------------------------------
    */

    function escapeHtml(text) {

        let div = document.createElement('div');

        div.innerText = text;

        return div.innerHTML;

    }


    /*
    |--------------------------------------------------------------------------
    | INIT
    |--------------------------------------------------------------------------
    */

    hitungTotal();

</script>

</body>

</html>

