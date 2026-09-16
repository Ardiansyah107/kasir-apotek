<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Obat - Apotek Besok Sembuh</title>

    <style>
        /* =========================================================
           MASTER DESIGN - APOTEK BESOK SEMBUH
        ========================================================= */

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

            padding:
                30px
                38px
                45px;
        }

        /* =========================================================
           CONTENT
        ========================================================= */

        .content {
            margin-left: 255px;

            width: calc(100% - 255px);

            max-width: 1750px;

            padding: 30px 38px 45px;
        }

        /* =========================================================
           TOPBAR
        ========================================================= */

        .topbar {
            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 27px;
        }

        .title-area {
            display: flex;

            align-items: center;

            gap: 15px;
        }

        .title-icon {
            width: 52px;
            height: 52px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    rgba(16, 185, 129, .18),
                    rgba(34, 211, 238, .06)
                );

            border: 1px solid rgba(52, 211, 153, .10);

            color: var(--primary-light);

            font-size: 23px;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, .13);
        }

        .page-title h1 {
            color: #f8fafc;

            font-size: 28px;

            line-height: 1.15;

            letter-spacing: -.8px;

            margin-bottom: 6px;
        }

        .page-title p {
            color: var(--muted);

            font-size: 12px;
        }

        /* =========================================================
           ADMIN
        ========================================================= */

        
        .admin-wrapper {
            position: relative;
        }

        .admin {
            display: flex;
            align-items: center;
            gap: 10px;

            padding: 7px 11px 7px 7px;

            background:
                rgba(14, 41, 35, .84);

            border:
                1px solid var(--border);

            border-radius: 15px;

            color: white;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, .14);

            cursor: pointer;

            transition: .2s ease;
        }

        .admin:hover {
            background: var(--surface-3);

            border-color:
                rgba(16, 185, 129, .30);

            transform: translateY(-1px);
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
        }

        /* =========================================================
           DROPDOWN
           ========================================================= */

        .admin-dropdown {
            display: none;

            position: absolute;

            top: calc(100% + 10px);
            right: 0;

            width: 240px;

            padding: 10px;

            background:
                linear-gradient(
                    145deg,
                    #102b26,
                    #0b211c
                );

            border:
                1px solid rgba(255, 255, 255, .09);

            border-radius: 16px;

            box-shadow:
                0 22px 50px rgba(0, 0, 0, .38);

            z-index: 1000;
        }

        .admin-dropdown.show {
            display: block;

            animation:
                dropdownIn .16s ease;
        }

        @keyframes dropdownIn {
            from {
                opacity: 0;
                transform: translateY(-6px);
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
        }

        .dropdown-header strong {
            display: block;

            color: var(--text);

            font-size: 13px;
        }

        .dropdown-header span {
            display: block;

            margin-top: 3px;

            color: #789b90;

            font-size: 10px;
        }

        .dropdown-line {
            height: 1px;

            margin: 7px 0;

            background:
                rgba(255, 255, 255, .065);
        }

        .admin-dropdown a,
        .admin-dropdown form button {
            display: flex;
            align-items: center;

            width: 100%;

            padding: 11px 10px;

            background: transparent;

            border: none;
            border-radius: 10px;

            color: #9ab8ae;

            font-size: 12px;

            text-align: left;
            text-decoration: none;

            cursor: pointer;

            transition: .18s ease;
        }

        .admin-dropdown a:hover,
        .admin-dropdown form button:hover {
            background:
                rgba(16, 185, 129, .085);

            color: #86efac;
        }
        /* =========================================================
           ALERT
        ========================================================= */

        .alert {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 13px 16px;

            margin-bottom: 20px;

            border-radius: 13px;

            font-size: 12px;

            font-weight: 600;
        }

        .alert-success {
            color: #6ee7b7;

            background:
                rgba(16, 185, 129, .08);

            border:
                1px solid rgba(16, 185, 129, .16);
        }

        .alert-icon {
            width: 25px;
            height: 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                rgba(16, 185, 129, .14);
        }

        /* =========================================================
           SUMMARY
        ========================================================= */

        .summary-grid {
            display: grid;

            grid-template-columns:
                repeat(5, minmax(0, 1fr));

            gap: 13px;

            margin-bottom: 25px;
        }

        .summary-card {
            position: relative;

            min-height: 126px;

            padding: 18px;

            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    rgba(16, 43, 38, .96),
                    rgba(11, 36, 30, .96)
                );

            border: 1px solid var(--border);

            border-radius: 18px;

            box-shadow:
                0 9px 30px rgba(0, 0, 0, .16);

            transition:
                transform .2s ease,
                border-color .2s ease,
                box-shadow .2s ease;
        }

        .summary-card:hover {
            transform: translateY(-3px);

            border-color:
                rgba(52, 211, 153, .18);

            box-shadow:
                0 15px 35px rgba(0, 0, 0, .23);
        }

        .summary-card::before {
            content: "";

            position: absolute;

            width: 105px;
            height: 105px;

            right: -40px;
            top: -40px;

            border-radius: 50%;

            background:
                rgba(16, 185, 129, .08);
        }

        .summary-card.blue::before {
            background: rgba(59, 130, 246, .08);
        }

        .summary-card.yellow::before {
            background: rgba(245, 158, 11, .08);
        }

        .summary-card.red::before {
            background: rgba(239, 68, 68, .08);
        }

        .summary-card.orange::before {
            background: rgba(249, 115, 22, .08);
        }

        .summary-icon {
            position: relative;
            z-index: 1;

            width: 37px;
            height: 37px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 13px;

            border-radius: 10px;

            background:
                rgba(16, 185, 129, .12);

            color: var(--primary-light);

            font-size: 17px;

            font-weight: 800;
        }

        .blue .summary-icon {
            background: rgba(59, 130, 246, .11);
            color: #60a5fa;
        }

        .yellow .summary-icon {
            background: rgba(245, 158, 11, .11);
            color: #fbbf24;
        }

        .red .summary-icon {
            background: rgba(239, 68, 68, .11);
            color: #f87171;
        }

        .orange .summary-icon {
            background: rgba(249, 115, 22, .11);
            color: #fb923c;
        }

        .summary-label {
            position: relative;

            color: var(--muted);

            font-size: 9px;

            font-weight: 800;

            margin-bottom: 5px;
        }

        .summary-number {
            position: relative;

            color: #f8fafc;

            font-size: 23px;

            font-weight: 800;

            letter-spacing: -.7px;
        }

        .summary-note {
            position: relative;

            margin-top: 4px;

            color: var(--muted-2);

            font-size: 8px;
        }

        /* =========================================================
           MAIN PANEL
        ========================================================= */

        .main-panel {
            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    rgba(11, 36, 30, .98),
                    rgba(8, 29, 24, .98)
                );

            border: 1px solid var(--border);

            border-radius: 20px;

            box-shadow:
                0 12px 40px rgba(0, 0, 0, .18);
        }

        .panel-header {
            padding: 22px 23px 19px;

            border-bottom:
                1px solid var(--border);
        }

        .panel-heading {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 20px;
        }

        .heading-left {
            display: flex;

            align-items: center;

            gap: 11px;
        }

        .heading-icon {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 10px;

            background:
                rgba(16, 185, 129, .11);

            color: var(--primary-light);

            font-size: 16px;
        }

        .panel-heading h2 {
            color: #f1f5f9;

            font-size: 17px;

            margin-bottom: 4px;
        }

        .panel-heading p {
            color: var(--muted-2);

            font-size: 10px;
        }

        /* =========================================================
           BUTTON TAMBAH
        ========================================================= */

        .btn-add {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 8px;

            height: 40px;

            padding: 0 16px;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--primary-dark)
                );

            color: #fff;

            font-size: 11px;

            font-weight: 800;

            box-shadow:
                0 8px 20px rgba(5, 150, 105, .20);

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }

        .btn-add:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(5, 150, 105, .28);
        }

        .btn-add span {
            font-size: 17px;
            line-height: 1;
        }

        /* =========================================================
           FILTER
        ========================================================= */

        .filter-toolbar {
            display: flex;

            align-items: center;

            gap: 9px;

            padding: 10px;

            background:
                rgba(6, 23, 19, .72);

            border: 1px solid var(--border);

            border-radius: 13px;
        }

        .search-box {
            position: relative;

            flex: 1.7;
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

        .search-input,
        .filter-select {
            width: 100%;

            height: 39px;

            padding: 0 12px;

            border:
                1px solid rgba(255, 255, 255, .07);

            border-radius: 9px;

            outline: none;

            background:
                #0d2923;

            color: #dff8ef;

            font-size: 10px;

            transition:
                border-color .2s ease,
                box-shadow .2s ease;
        }

        .search-input {
            padding-left: 35px;
        }

        .search-input::placeholder {
            color: #5f7c73;
        }

        .search-input:focus,
        .filter-select:focus {
            border-color:
                rgba(16, 185, 129, .55);

            box-shadow:
                0 0 0 3px rgba(16, 185, 129, .07);
        }

        .filter-select {
            flex: 1;
            cursor: pointer;
        }

        .filter-select option {
            background: #0d2923;
            color: #e5f7f0;
        }

        .btn-filter {
            height: 39px;

            padding: 0 18px;

            border:
                1px solid rgba(255, 255, 255, .06);

            border-radius: 9px;

            background:
                #12352d;

            color: #e7fff7;

            font-size: 10px;

            font-weight: 800;

            cursor: pointer;

            transition:
                background .2s ease,
                transform .2s ease;
        }

        .btn-filter:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        /* =========================================================
           TABLE
        ========================================================= */

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;

            min-width: 1250px;

            border-collapse: separate;

            border-spacing: 0;
        }

        th {
            padding: 13px 15px;

            background:
                rgba(6, 23, 19, .78);

            border-bottom:
                1px solid var(--border);

            color: #6f8c83;

            text-align: left;

            font-size: 9px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: .5px;

            white-space: nowrap;
        }

        td {
            padding: 14px 15px;

            border-bottom:
                1px solid rgba(255, 255, 255, .045);

            color: #91aaa2;

            font-size: 10px;

            vertical-align: middle;

            white-space: nowrap;
        }

        tbody tr {
            transition:
                background .15s ease;
        }

        tbody tr:hover {
            background:
                rgba(16, 185, 129, .035);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* =========================================================
           CELL
        ========================================================= */

        .kode {
            color: var(--primary-light);
            font-weight: 800;
        }

        .barcode {
            color: #69857d;

            font-family: Consolas, monospace;

            font-size: 9px;
        }

        .nama-wrapper {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .obat-icon {
            width: 33px;
            height: 33px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    rgba(16, 185, 129, .14),
                    rgba(5, 150, 105, .06)
                );

            color: var(--primary-light);

            font-size: 14px;

            font-weight: 800;
        }

        .nama {
            color: #dceee8;
            font-weight: 700;
        }

        .kategori {
            display: inline-flex;

            align-items: center;

            padding: 5px 9px;

            border-radius: 7px;

            background:
                rgba(255, 255, 255, .045);

            border:
                1px solid rgba(255, 255, 255, .045);

            color: #91aaa2;

            font-size: 9px;

            font-weight: 700;
        }

        .satuan,
        .minimum {
            color: #91aaa2;
            font-weight: 600;
        }

        .harga {
            color: #e9f7f2;
            font-weight: 800;
        }

        /* =========================================================
           STOCK
        ========================================================= */

        .stock-wrapper {
            display: flex;

            align-items: center;

            gap: 7px;
        }

        .jumlah-stok {
            color: #c6ddd5;

            font-size: 10px;

            font-weight: 800;
        }

        .status-stok,
        .status-obat,
        .status-expired {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 5px 8px;

            border-radius: 7px;

            font-size: 8px;

            font-weight: 800;

            letter-spacing: .2px;
        }

        .status-normal {
            background: rgba(34, 197, 94, .11);
            color: #4ade80;
        }

        .status-low {
            background: rgba(245, 158, 11, .11);
            color: #fbbf24;
        }

        .status-out {
            background: rgba(239, 68, 68, .11);
            color: #f87171;
        }

        /* =========================================================
           EXPIRED
        ========================================================= */

        .tanggal {
            margin-bottom: 4px;

            color: #91aaa2;

            font-size: 9px;

            font-weight: 700;
        }

        .expired-normal {
            background: rgba(16, 185, 129, .10);
            color: var(--primary-light);
        }

        .expired-warning {
            background: rgba(234, 88, 12, .11);
            color: #fb923c;
        }

        .expired-danger {
            background: rgba(239, 68, 68, .11);
            color: #f87171;
        }

        /* =========================================================
           STATUS
        ========================================================= */

        .aktif {
            background: rgba(34, 197, 94, .11);
            color: #4ade80;
        }

        .nonaktif {
            background: rgba(255, 255, 255, .045);
            color: #718b83;
        }

        /* =========================================================
           ACTION
        ========================================================= */

        .aksi {
            display: flex;

            align-items: center;

            gap: 6px;
        }

        .btn-edit,
        .btn-delete {
            height: 30px;

            padding: 0 10px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 7px;

            font-size: 9px;

            font-weight: 800;

            cursor: pointer;

            transition:
                background .2s ease,
                transform .2s ease;
        }

        .btn-edit {
            border:
                1px solid rgba(59, 130, 246, .18);

            background:
                rgba(59, 130, 246, .08);

            color: #60a5fa;
        }

        .btn-edit:hover {
            background:
                rgba(59, 130, 246, .16);

            transform: translateY(-1px);
        }

        .btn-delete {
            border:
                1px solid rgba(239, 68, 68, .18);

            background:
                rgba(239, 68, 68, .08);

            color: #f87171;
        }

        .btn-delete:hover {
            background:
                rgba(239, 68, 68, .16);

            transform: translateY(-1px);
        }

        /* =========================================================
           EMPTY
        ========================================================= */

        .empty {
            padding: 75px 20px !important;

            text-align: center;

            color: var(--muted-2);
        }

        .empty-icon {
            width: 60px;
            height: 60px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 13px;

            border-radius: 17px;

            background:
                rgba(255, 255, 255, .045);

            font-size: 27px;
        }

        /* =========================================================
           FOOTER
        ========================================================= */

        .table-footer {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 10px;

            padding: 13px 20px;

            background:
                rgba(6, 23, 19, .55);

            border-top:
                1px solid var(--border);

            color: #627e75;

            font-size: 9px;
        }

        .table-footer strong {
            color: #c6ddd5;
        }

        /* =========================================================
           TABLE SCROLLBAR
        ========================================================= */

        .table-wrapper::-webkit-scrollbar {
            height: 7px;
        }

        .table-wrapper::-webkit-scrollbar-track {
            background: #061713;
        }

        .table-wrapper::-webkit-scrollbar-thumb {
            background: #24463d;
            border-radius: 10px;
        }

        .table-wrapper::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1350px) {

            .content {
                padding-left: 25px;
                padding-right: 25px;
            }

            .summary-grid {
                grid-template-columns:
                    repeat(3, minmax(0, 1fr));
            }

            .filter-toolbar {
                display: grid;

                grid-template-columns:
                    1.6fr 1fr;
            }

            .btn-filter {
                width: 100%;
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

            .admin-info {
                display: none;
            }

            .summary-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .panel-heading {
                align-items: flex-start;
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

            .summary-grid {
                grid-template-columns: 1fr;
            }

            .title-icon {
                width: 44px;
                height: 44px;
            }

            .page-title h1 {
                font-size: 22px;
            }

            .admin {
                padding: 5px;
            }

            .panel-heading {
                flex-direction: column;
            }

            .btn-add {
                width: 100%;
            }

            .filter-toolbar {
                grid-template-columns: 1fr;
            }

            .table-footer {
                align-items: flex-start;

                flex-direction: column;
            }

            th,
            td {
                padding-left: 14px;
                padding-right: 14px;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                ✚
            </div>

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

            {{-- DASHBOARD --}}
            <a
                href="{{ route('dashboard') }}"
                class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"
            >
                <span class="menu-icon">
                    🏠
                </span>

                Dashboard
            </a>


            {{-- MENU ADMIN --}}
            @if(auth()->user()->role === 'admin')

                {{-- DATA OBAT --}}
                <a
                    href="{{ route('obat.index') }}"
                    class="{{ request()->routeIs('obat.*') ? 'active' : '' }}"
                >
                    <span class="menu-icon">
                        💊
                    </span>

                    Data Obat
                </a>


                {{-- ADMIN USER --}}
                <a
                    href="{{ route('users.index') }}"
                    class="{{ request()->routeIs('users.*') ? 'active' : '' }}"
                >
                    <span class="menu-icon">
                        👥
                    </span>

                    Admin User
                </a>


                {{-- KATEGORI --}}
                <a
                    href="{{ route('kategori.index') }}"
                    class="{{ request()->routeIs('kategori.*') ? 'active' : '' }}"
                >
                    <span class="menu-icon">
                        🗂️
                    </span>

                    Kategori
                </a>


                {{-- STOCK ADJUSTMENT --}}
                <a
                    href="{{ route('stock-adjustment.index') }}"
                    class="{{ request()->routeIs('stock-adjustment.*') ? 'active' : '' }}"
                >
                    <span class="menu-icon">
                        📦
                    </span>

                    Stock Adjustment
                </a>

            @endif


            {{-- KASIR --}}
            <a
                href="{{ route('kasir') }}"
                class="{{ request()->routeIs('kasir') ? 'active' : '' }}"
            >
                <span class="menu-icon">
                    🛒
                </span>

                Kasir
            </a>


            {{-- TRANSAKSI --}}
            <a
                href="{{ route('transaksi.index') }}"
                class="{{ request()->routeIs('transaksi.*') ? 'active' : '' }}"
            >
                <span class="menu-icon">
                    🧾
                </span>

                Transaksi
            </a>


            {{-- LAPORAN ADMIN --}}
            @if(auth()->user()->role === 'admin')

                {{-- LAPORAN PENJUALAN --}}
                <a
                    href="{{ route('laporan') }}"
                    class="{{ request()->routeIs('laporan') ? 'active' : '' }}"
                >
                    <span class="menu-icon">
                        📊
                    </span>

                    Laporan Penjualan
                </a>


                {{-- LAPORAN STOK --}}
                <a
                    href="{{ route('laporan.stok') }}"
                    class="{{ request()->routeIs('laporan.stok') ? 'active' : '' }}"
                >
                    <span class="menu-icon">
                        📦
                    </span>

                    Laporan Stok
                </a>

            @endif

        </div>


        {{-- PENGATURAN --}}
        @if(auth()->user()->role === 'admin')

            <div class="menu-title">
                Pengaturan
            </div>

            <div class="menu">

                <a
                    href="{{ route('pengaturan') }}"
                    class="{{ request()->routeIs('pengaturan') ? 'active' : '' }}"
                >
                    <span class="menu-icon">
                        ⚙️
                    </span>

                    Pengaturan
                </a>

            </div>

        @endif


        {{-- LOGOUT --}}
        <div class="menu">

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


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <main class="content">

        <!-- =================================================
             TOPBAR
        ================================================== -->

        <div class="topbar">

            <div class="title-area">

                <div class="title-icon">
                    💊
                </div>

                <div class="page-title">

                    <h1>
                        Data Obat
                    </h1>

                    <p>
                        Kelola persediaan dan informasi obat Apotek Besok Sembuh
                    </p>

                </div>

            </div>


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
                            {{ ucfirst(Auth::user()->role) }}
                        </span>

                    </div>


                    <span
                        class="admin-arrow"
                        id="adminArrow"
                    >
                        ▾
                    </span>

                </button>


                <!-- =================================================
                     USER DROPDOWN
                     ================================================= -->

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
                                {{ ucfirst(Auth::user()->role) }}
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


        <!-- =================================================
             ALERT
        ================================================== -->

        @if (session('success'))

            <div class="alert alert-success">

                <span class="alert-icon">
                    ✓
                </span>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        <!-- =================================================
             SUMMARY
        ================================================== -->

        <div class="summary-grid">

            <div class="summary-card">

                <div class="summary-icon">
                    +
                </div>

                <div class="summary-label">
                    TOTAL JENIS OBAT
                </div>

                <div class="summary-number">
                    {{ $totalObat }}
                </div>

                <div class="summary-note">
                    Obat terdaftar
                </div>

            </div>


            <div class="summary-card blue">

                <div class="summary-icon">
                    #
                </div>

                <div class="summary-label">
                    TOTAL STOK
                </div>

                <div class="summary-number">
                    {{ number_format($totalStok, 0, ',', '.') }}
                </div>

                <div class="summary-note">
                    Seluruh persediaan
                </div>

            </div>


            <div class="summary-card yellow">

                <div class="summary-icon">
                    !
                </div>

                <div class="summary-label">
                    STOK MENIPIS
                </div>

                <div class="summary-number">
                    {{ $stokMenipis }}
                </div>

                <div class="summary-note">
                    Di bawah minimum
                </div>

            </div>


            <div class="summary-card red">

                <div class="summary-icon">
                    ×
                </div>

                <div class="summary-label">
                    STOK HABIS
                </div>

                <div class="summary-number">
                    {{ $stokHabis }}
                </div>

                <div class="summary-note">
                    Perlu segera restock
                </div>

            </div>


            <div class="summary-card orange">

                <div class="summary-icon">
                    ⌛
                </div>

                <div class="summary-label">
                    AKAN EXPIRED
                </div>

                <div class="summary-number">
                    {{ $akanExpired }}
                </div>

                <div class="summary-note">
                    Dalam 30 hari
                </div>

            </div>

        </div>


        <!-- =================================================
             MAIN PANEL
        ================================================== -->

        <div class="main-panel">

            <div class="panel-header">

                <div class="panel-heading">

                    <div class="heading-left">

                        <div class="heading-icon">
                            💊
                        </div>

                        <div>

                            <h2>
                                Daftar Obat
                            </h2>

                            <p>
                                {{ $obat->count() }} data obat ditampilkan
                            </p>

                        </div>

                    </div>


                    <a
                        href="{{ route('obat.create') }}"
                        class="btn-add"
                    >

                        <span>
                            +
                        </span>

                        Tambah Obat

                    </a>

                </div>


                <!-- FILTER -->

                <form
                    action="{{ route('obat.index') }}"
                    method="GET"
                    class="filter-toolbar"
                >

                    <div class="search-box">

                        <span class="search-icon">
                            ⌕
                        </span>

                        <input
                            type="text"
                            name="search"
                            class="search-input"
                            value="{{ request('search') }}"
                            placeholder="Cari nama, kode, atau barcode..."
                            autocomplete="off"
                        >

                    </div>


                    <select
                        name="kategori_id"
                        class="filter-select"
                    >

                        <option value="">
                            Semua Kategori
                        </option>

                        @foreach ($kategori as $kat)

                            <option
                                value="{{ $kat->id }}"
                                {{ request('kategori_id') == $kat->id ? 'selected' : '' }}
                            >
                                {{ $kat->nama }}
                            </option>

                        @endforeach

                    </select>


                    <select
                        name="stok_status"
                        class="filter-select"
                    >

                        <option value="">
                            Semua Stok
                        </option>

                        <option
                            value="aman"
                            {{ request('stok_status') == 'aman' ? 'selected' : '' }}
                        >
                            Stok Aman
                        </option>

                        <option
                            value="menipis"
                            {{ request('stok_status') == 'menipis' ? 'selected' : '' }}
                        >
                            Stok Menipis
                        </option>

                        <option
                            value="habis"
                            {{ request('stok_status') == 'habis' ? 'selected' : '' }}
                        >
                            Stok Habis
                        </option>

                    </select>


                    <select
                        name="status"
                        class="filter-select"
                    >

                        <option value="">
                            Semua Status
                        </option>

                        <option
                            value="aktif"
                            {{ request('status') == 'aktif' ? 'selected' : '' }}
                        >
                            Aktif
                        </option>

                        <option
                            value="nonaktif"
                            {{ request('status') == 'nonaktif' ? 'selected' : '' }}
                        >
                            Nonaktif
                        </option>

                    </select>


                    <button
                        type="submit"
                        class="btn-filter"
                    >
                        Filter
                    </button>

                </form>

            </div>


            <!-- =================================================
                 TABLE
            ================================================== -->

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>Kode</th>
                            <th>Barcode</th>
                            <th>Nama Obat</th>
                            <th>Kategori</th>
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Minimum</th>
                            <th>Kadaluarsa</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($obat as $item)

                            <tr>

                                <td class="kode">
                                    {{ $item->kode_obat }}
                                </td>


                                <td class="barcode">
                                    {{ $item->barcode ?: '-' }}
                                </td>


                                <td>

                                    <div class="nama-wrapper">

                                        <div class="obat-icon">
                                            +
                                        </div>

                                        <div class="nama">
                                            {{ $item->nama_obat }}
                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="kategori">
                                        {{ $item->kategori }}
                                    </span>

                                </td>


                                <td class="satuan">
                                    {{ $item->satuan }}
                                </td>


                                <td class="harga">
                                    Rp {{ number_format($item->harga_jual, 0, ',', '.') }}
                                </td>


                                <td>

                                    <div class="stock-wrapper">

                                        @if ($item->stok == 0)

                                            <span class="status-stok status-out">
                                                HABIS
                                            </span>

                                        @elseif ($item->stok <= $item->minimum_stok)

                                            <span class="status-stok status-low">
                                                MENIPIS
                                            </span>

                                        @else

                                            <span class="status-stok status-normal">
                                                AMAN
                                            </span>

                                        @endif


                                        <span class="jumlah-stok">
                                            {{ $item->stok }}
                                        </span>

                                    </div>

                                </td>


                                <td class="minimum">
                                    {{ $item->minimum_stok }}
                                </td>


                                <td>

                                    @if (!$item->tanggal_kadaluarsa)

                                        <span class="status-expired expired-normal">
                                            TIDAK ADA
                                        </span>

                                    @else

                                        @php

                                            $tanggalExpired =
                                                \Carbon\Carbon::parse(
                                                    $item->tanggal_kadaluarsa
                                                )->startOfDay();

                                            $hariIni = today();

                                            $batas30Hari =
                                                today()->addDays(30);

                                        @endphp


                                        <div class="tanggal">
                                            {{ $tanggalExpired->format('d/m/Y') }}
                                        </div>


                                        @if ($tanggalExpired->lt($hariIni))

                                            <span class="status-expired expired-danger">
                                                EXPIRED
                                            </span>

                                        @elseif ($tanggalExpired->lte($batas30Hari))

                                            <span class="status-expired expired-warning">
                                                SEGERA
                                            </span>

                                        @else

                                            <span class="status-expired expired-normal">
                                                AMAN
                                            </span>

                                        @endif

                                    @endif

                                </td>


                                <td>

                                    @if ($item->status === 'aktif')

                                        <span class="status-obat aktif">
                                            AKTIF
                                        </span>

                                    @else

                                        <span class="status-obat nonaktif">
                                            NONAKTIF
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <div class="aksi">

                                        <a
                                            href="{{ route('obat.edit', $item->id) }}"
                                            class="btn-edit"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route('obat.destroy', $item->id) }}"
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
                                    colspan="11"
                                    class="empty"
                                >

                                    <div class="empty-icon">
                                        📦
                                    </div>

                                    <div>
                                        Belum ada data obat yang sesuai.
                                    </div>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- =================================================
                 FOOTER
            ================================================== -->

            <div class="table-footer">

                <div>

                    Menampilkan

                    <strong>
                        {{ $obat->count() }}
                    </strong>

                    data obat

                </div>


                <div>

                    @if (
                        request('search') ||
                        request('kategori_id') ||
                        request('stok_status') ||
                        request('status')
                    )

                        Filter sedang aktif

                    @else

                        Semua data obat

                    @endif

                </div>

            </div>

        </div>

    </main>

</div>


<!-- =========================================================
     ADMIN DROPDOWN JAVASCRIPT
     ========================================================= -->

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