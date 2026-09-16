<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Apotek Besok Sembuh</title>

    <style>
        /* =========================================================
           APOTEK BESOK SEMBUH
           MASTER DASHBOARD DESIGN
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
           TOPBAR
           ========================================================= */

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 24px;
        }

        .page-title h1 {
            margin-bottom: 5px;

            color: #f0fdf4;

            font-size: 27px;
            font-weight: 800;

            letter-spacing: -.6px;
        }

        .page-title p {
            color: var(--muted);

            font-size: 13px;
        }

        /* =========================================================
           USER PROFILE
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
           WELCOME BANNER
           ========================================================= */

        .welcome {
            position: relative;

            overflow: hidden;

            padding: 32px 34px;

            margin-bottom: 21px;

            background:
                radial-gradient(
                    circle at 86% 20%,
                    rgba(255, 255, 255, .15),
                    transparent 22%
                ),
                linear-gradient(
                    135deg,
                    #159447 0%,
                    #087d5a 48%,
                    #075985 100%
                );

            border:
                1px solid rgba(255, 255, 255, .10);

            border-radius: var(--radius-xl);

            box-shadow:
                0 16px 40px rgba(0, 0, 0, .21),
                0 12px 30px rgba(16, 185, 129, .10);
        }

        .welcome::before {
            content: "";

            position: absolute;

            width: 210px;
            height: 210px;

            top: -125px;
            right: 20px;

            border-radius: 50%;

            background:
                rgba(255, 255, 255, .065);

            border:
                1px solid rgba(255, 255, 255, .05);
        }

        .welcome::after {
            content: "💊";

            position: absolute;

            right: 38px;
            bottom: -14px;

            font-size: 88px;

            opacity: .13;

            transform:
                rotate(-12deg);
        }

        .welcome h2 {
            position: relative;
            z-index: 1;

            margin-bottom: 7px;

            font-size: 23px;
            font-weight: 800;

            letter-spacing: -.3px;
        }

        .welcome p {
            position: relative;
            z-index: 1;

            font-size: 13px;

            opacity: .88;
        }

        .welcome-badge {
            position: relative;
            z-index: 1;

            display: inline-flex;
            align-items: center;
            gap: 7px;

            margin-top: 16px;
            padding: 7px 11px;

            background:
                rgba(255, 255, 255, .12);

            border:
                1px solid rgba(255, 255, 255, .13);

            border-radius: 20px;

            font-size: 10px;
            font-weight: 700;

            backdrop-filter: blur(5px);
        }

        /* =========================================================
           STATISTIC CARDS
           ========================================================= */

        .cards {
            display: grid;

            grid-template-columns:
                repeat(5, minmax(0, 1fr));

            gap: 14px;

            margin-bottom: 20px;
        }

        .card {
            position: relative;

            overflow: hidden;

            padding: 18px;

            min-height: 139px;

            background:
                linear-gradient(
                    145deg,
                    #112f29,
                    #0b211c
                );

            border:
                1px solid var(--border);

            border-radius: var(--radius-lg);

            box-shadow:
                0 8px 25px rgba(0, 0, 0, .13);

            transition:
                transform .25s ease,
                border .25s ease,
                box-shadow .25s ease;
        }

        .card::before {
            content: "";

            position: absolute;

            width: 90px;
            height: 90px;

            right: -42px;
            top: -42px;

            border-radius: 50%;

            background:
                var(--accent, var(--primary));

            opacity: .045;
        }

        .card::after {
            content: "";

            position: absolute;

            width: 75px;
            height: 75px;

            right: -27px;
            bottom: -33px;

            border-radius: 50%;

            background:
                var(--accent, var(--primary));

            opacity: .07;
        }

        .card:hover {
            transform: translateY(-5px);

            border-color:
                rgba(255, 255, 255, .13);

            box-shadow:
                var(--shadow-hover);
        }

        .card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 13px;
        }

        .card-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border:
                1px solid rgba(255, 255, 255, .07);

            border-radius: 13px;

            font-size: 19px;
        }

        .green {
            --accent: #22c55e;

            background:
                rgba(34, 197, 94, .13);

            color: #4ade80;
        }

        .blue {
            --accent: #3b82f6;

            background:
                rgba(59, 130, 246, .13);

            color: #60a5fa;
        }

        .orange {
            --accent: #f59e0b;

            background:
                rgba(245, 158, 11, .13);

            color: #fbbf24;
        }

        .red {
            --accent: #ef4444;

            background:
                rgba(239, 68, 68, .13);

            color: #f87171;
        }

        .purple {
            --accent: #a855f7;

            background:
                rgba(168, 85, 247, .13);

            color: #c084fc;
        }

        .card-label {
            color: #8caea3;

            font-size: 11px;
            font-weight: 700;
        }

        .card-number {
            color: #f0fdf4;

            font-size: 26px;
            font-weight: 850;

            line-height: 1.15;

            letter-spacing: -.7px;
        }

        .card-info {
            margin-top: 6px;

            color: #63877c;

            font-size: 10px;
            line-height: 1.45;
        }

        /* =========================================================
           DASHBOARD CONTENT GRID
           ========================================================= */

        .dashboard-grid {
            display: grid;

            grid-template-columns:
                minmax(0, 2fr)
                minmax(300px, 1fr);

            gap: 17px;
        }

        /* =========================================================
           PANEL
           ========================================================= */

        .panel {
            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    #102b26,
                    #0b211c
                );

            border:
                1px solid var(--border);

            border-radius: var(--radius-lg);

            box-shadow:
                var(--shadow);
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 18px 20px;

            border-bottom:
                1px solid rgba(255, 255, 255, .065);
        }

        .panel-header h2 {
            color: #e8fff2;

            font-size: 15px;
            font-weight: 750;
        }

        .panel-header small {
            padding: 5px 8px;

            background:
                rgba(255, 255, 255, .035);

            border:
                1px solid rgba(255, 255, 255, .045);

            border-radius: 7px;

            color: #688b80;

            font-size: 9px;
            font-weight: 600;
        }

        /* =========================================================
           TABLE
           ========================================================= */

        .table-wrapper {
            overflow-x: auto;
        }

        .table-wrapper::-webkit-scrollbar {
            height: 5px;
        }

        .table-wrapper::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, .025);
        }

        .table-wrapper::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, .22);
            border-radius: 20px;
        }

        table {
            width: 100%;

            min-width: 850px;

            border-collapse: collapse;
        }

        th {
            padding: 11px 15px;

            background:
                rgba(255, 255, 255, .022);

            color: #6e9187;

            font-size: 9px;
            font-weight: 800;

            text-align: left;
            text-transform: uppercase;

            letter-spacing: .8px;

            white-space: nowrap;
        }

        td {
            padding: 13px 15px;

            border-top:
                1px solid rgba(255, 255, 255, .043);

            color: #a5beb5;

            font-size: 12px;

            white-space: nowrap;
        }

        tbody tr {
            transition: .18s ease;
        }

        tbody tr:hover {
            background:
                rgba(16, 185, 129, .043);
        }

        td:first-child {
            color: var(--primary-light);

            font-weight: 750;
        }

        .medicine-name {
            color: #dff8eb;

            font-weight: 700;
        }

        .barcode {
            display: block;

            margin-top: 4px;

            color: #62857b;

            font-size: 9px;
        }

        /* =========================================================
           CATEGORY
           ========================================================= */

        .category {
            display: inline-block;

            padding: 5px 9px;

            background:
                rgba(20, 184, 166, .10);

            border:
                1px solid rgba(20, 184, 166, .13);

            border-radius: 8px;

            color: #5eead4;

            font-size: 10px;
            font-weight: 700;
        }

        .unit {
            color: #b7d1c8;

            font-size: 11px;
            font-weight: 600;
        }

        /* =========================================================
           STOCK BADGES
           ========================================================= */

        .stok-warning,
        .stok-menipis,
        .stok-aman {
            display: inline-block;

            padding: 5px 9px;

            border-radius: 8px;

            font-size: 10px;
            font-weight: 750;
        }

        .stok-warning {
            background:
                rgba(239, 68, 68, .11);

            border:
                1px solid rgba(239, 68, 68, .13);

            color: #fca5a5;
        }

        .stok-menipis {
            background:
                rgba(245, 158, 11, .11);

            border:
                1px solid rgba(245, 158, 11, .13);

            color: #fcd34d;
        }

        .stok-aman {
            background:
                rgba(34, 197, 94, .10);

            border:
                1px solid rgba(34, 197, 94, .13);

            color: #86efac;
        }

        /* =========================================================
           EXPIRY
           ========================================================= */

        .tanggal {
            margin-bottom: 5px;

            color: #b7d1c8;

            font-size: 11px;
        }

        .status-expired {
            display: inline-block;

            padding: 4px 8px;

            border-radius: 7px;

            font-size: 9px;
            font-weight: 800;
        }

        .expired-danger {
            background:
                rgba(239, 68, 68, .11);

            border:
                1px solid rgba(239, 68, 68, .13);

            color: #fca5a5;
        }

        .expired-warning {
            background:
                rgba(245, 158, 11, .11);

            border:
                1px solid rgba(245, 158, 11, .13);

            color: #fcd34d;
        }

        .expired-normal {
            background:
                rgba(34, 197, 94, .10);

            border:
                1px solid rgba(34, 197, 94, .13);

            color: #86efac;
        }

        /* =========================================================
           STATUS
           ========================================================= */

        .status-active,
        .status-inactive {
            display: inline-block;

            padding: 5px 9px;

            border-radius: 8px;

            font-size: 9px;
            font-weight: 800;
        }

        .status-active {
            background:
                rgba(34, 197, 94, .10);

            border:
                1px solid rgba(34, 197, 94, .13);

            color: #86efac;
        }

        .status-inactive {
            background:
                rgba(239, 68, 68, .10);

            border:
                1px solid rgba(239, 68, 68, .13);

            color: #fca5a5;
        }

        /* =========================================================
           LOW STOCK LIST
           ========================================================= */

        .stock-item {
            padding: 15px 20px;

            border-bottom:
                1px solid rgba(255, 255, 255, .043);

            transition: .18s ease;
        }

        .stock-item:hover {
            background:
                rgba(245, 158, 11, .035);
        }

        .stock-item:last-child {
            border-bottom: none;
        }

        .stock-name {
            color: #dff8eb;

            font-size: 13px;
            font-weight: 700;
        }

        .stock-code {
            margin-top: 4px;

            color: #678b80;

            font-size: 10px;
        }

        .stock-number,
        .stock-minimum {
            display: inline-block;

            margin-top: 7px;

            padding: 4px 8px;

            border-radius: 7px;

            font-size: 10px;
            font-weight: 700;
        }

        .stock-number {
            background:
                rgba(245, 158, 11, .10);

            border:
                1px solid rgba(245, 158, 11, .12);

            color: #fcd34d;
        }

        .stock-minimum {
            margin-left: 4px;

            background:
                rgba(255, 255, 255, .035);

            border:
                1px solid rgba(255, 255, 255, .055);

            color: #8fb3a8;
        }

        /* =========================================================
           EMPTY STATE
           ========================================================= */

        .empty {
            padding: 40px 20px;

            color: #6f9187;

            font-size: 12px;

            text-align: center;
        }

        .empty-icon {
            margin-bottom: 9px;

            font-size: 34px;
        }

        /* =========================================================
           RESPONSIVE
           ========================================================= */

        @media (max-width: 1400px) {

            .content {
                padding-left: 28px;
                padding-right: 28px;
            }

            .cards {
                grid-template-columns:
                    repeat(3, minmax(0, 1fr));
            }

        }

        @media (max-width: 1150px) {

            .cards {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .dashboard-grid {
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

            .admin-info {
                display: none;
            }

        }

        @media (max-width: 600px) {

            .sidebar {
                width: 72px;

                padding:
                    20px 9px;
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

                padding:
                    12px 5px;
            }

            .menu-icon {
                margin: 0;
            }

            .content {
                margin-left: 72px;

                width: calc(100% - 72px);

                padding:
                    18px 12px 35px;
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

            .cards {
                grid-template-columns: 1fr;
            }

            .welcome {
                padding: 24px;
            }

            .welcome h2 {
                font-size: 19px;
            }

            .welcome::after {
                right: 5px;

                font-size: 70px;
            }

            .panel-header {
                padding: 16px;
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

    <!-- =========================================================
         SIDEBAR
         ========================================================= -->

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

            <!-- DASHBOARD -->

            <a
                href="{{ route('dashboard') }}"
                class="active"
            >
                <span class="menu-icon">🏠</span>
                Dashboard
            </a>


            @if(auth()->user()->role === 'admin')

                <!-- DATA OBAT -->

                <a href="{{ route('obat.index') }}">
                    <span class="menu-icon">💊</span>
                    Data Obat
                </a>


                <!-- ADMIN USER -->

                <a href="{{ route('users.index') }}">
                    <span class="menu-icon">👥</span>
                    Admin User
                </a>


                <!-- KATEGORI -->

                <a href="{{ route('kategori.index') }}">
                    <span class="menu-icon">🗂️</span>
                    Kategori
                </a>


                <!-- STOCK ADJUSTMENT -->

                <a href="{{ route('stock-adjustment.index') }}">
                    <span class="menu-icon">📦</span>
                    Stock Adjustment
                </a>

            @endif


            <!-- KASIR -->

            <a href="{{ route('kasir') }}">
                <span class="menu-icon">🛒</span>
                Kasir
            </a>


            <!-- TRANSAKSI -->

            <a href="{{ route('transaksi.index') }}">
                <span class="menu-icon">🧾</span>
                Transaksi
            </a>


            @if(auth()->user()->role === 'admin')

                <!-- LAPORAN PENJUALAN -->

                <a href="{{ route('laporan') }}">
                    <span class="menu-icon">📊</span>
                    Laporan Penjualan
                </a>


                <!-- LAPORAN STOK -->

                <a href="{{ route('laporan.stok') }}">
                    <span class="menu-icon">📦</span>
                    Laporan Stok
                </a>

            @endif

        </div>


        @if(auth()->user()->role === 'admin')

            <!-- =================================================
                 PENGATURAN
                 ================================================= -->

            <div class="menu-title">
                Pengaturan
            </div>


            <div class="menu">

                <a href="{{ route('pengaturan') }}">
                    <span class="menu-icon">⚙️</span>
                    Pengaturan
                </a>

            </div>

        @endif


        <!-- =====================================================
             LOGOUT
             ===================================================== -->

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


    <!-- =========================================================
         MAIN CONTENT
         ========================================================= -->

    <main class="content">


        <!-- =====================================================
             TOPBAR
             ===================================================== -->

        <div class="topbar">

            <div class="page-title">

                <h1>
                    Dashboard 👋
                </h1>


                @if(auth()->user()->role === 'admin')

                    <p>
                        Kelola apotek dengan lebih cepat dan mudah.
                    </p>

                @else

                    <p>
                        Siap melayani transaksi hari ini 💊
                    </p>

                @endif

            </div>


            <!-- =================================================
                 USER PROFILE
                 ================================================= -->

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


        <!-- =====================================================
             WELCOME BANNER
             ===================================================== -->

        <div class="welcome">

            @if(auth()->user()->role === 'admin')

                <h2>
                    Selamat Datang, Admin 👋
                </h2>

                <p>
                    Semua aktivitas apotek bisa kamu pantau dari sini.
                </p>

                <div class="welcome-badge">
                    🟢 Sistem Apotek Aktif
                </div>

            @else

                <h2>
                    Selamat Datang, {{ auth()->user()->name }} 👋
                </h2>

                <p>
                    Siap melayani transaksi pelanggan hari ini?
                </p>

                <div class="welcome-badge">
                    🟢 Kasir Siap Melayani
                </div>

            @endif

        </div>


        <!-- =====================================================
             STATISTIC CARDS
             ===================================================== -->

        <div class="cards">

            @if(auth()->user()->role === 'admin')


                <!-- =================================================
                     TOTAL OBAT
                     ================================================= -->

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


                <!-- =================================================
                     TOTAL STOK
                     ================================================= -->

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
                        {{ number_format($totalStok, 0, ',', '.') }}
                    </div>

                    <div class="card-info">
                        Stok seluruh obat
                    </div>

                </div>


                <!-- =================================================
                     STOK MENIPIS
                     ================================================= -->

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
                        Berdasarkan batas minimum obat
                    </div>

                </div>


                <!-- =================================================
                     STOK HABIS
                     ================================================= -->

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


                <!-- =================================================
                     AKAN EXPIRED
                     ================================================= -->

                <div class="card">

                    <div class="card-top">

                        <div class="card-label">
                            Akan Expired
                        </div>

                        <div class="card-icon purple">
                            ⏳
                        </div>

                    </div>

                    <div class="card-number">
                        {{ $akanExpired }}
                    </div>

                    <div class="card-info">
                        Expired dalam 30 hari
                    </div>

                </div>


            @else


                <!-- =================================================
                     TRANSAKSI HARI INI
                     ================================================= -->

                <div class="card">

                    <div class="card-top">

                        <div class="card-label">
                            Transaksi Hari Ini
                        </div>

                        <div class="card-icon green">
                            🧾
                        </div>

                    </div>

                    <div class="card-number">
                        {{ $totalTransaksiHariIni }}
                    </div>

                    <div class="card-info">
                        Transaksi yang diproses hari ini
                    </div>

                </div>


                <!-- =================================================
                     PENDAPATAN
                     ================================================= -->

                <div class="card">

                    <div class="card-top">

                        <div class="card-label">
                            Pendapatan Hari Ini
                        </div>

                        <div class="card-icon blue">
                            💰
                        </div>

                    </div>

                    <div
                        class="card-number"
                        style="font-size: 20px;"
                    >
                        Rp {{ number_format($pendapatanHariIni, 0, ',', '.') }}
                    </div>

                    <div class="card-info">
                        Total penjualan hari ini
                    </div>

                </div>


                <!-- =================================================
                     OBAT TERSEDIA
                     ================================================= -->

                <div class="card">

                    <div class="card-top">

                        <div class="card-label">
                            Obat Tersedia
                        </div>

                        <div class="card-icon orange">
                            💊
                        </div>

                    </div>

                    <div class="card-number">
                        {{ $totalObat }}
                    </div>

                    <div class="card-info">
                        Jenis obat tersedia
                    </div>

                </div>


                <!-- =================================================
                     STOK MENIPIS
                     ================================================= -->

                <div class="card">

                    <div class="card-top">

                        <div class="card-label">
                            Stok Menipis
                        </div>

                        <div class="card-icon red">
                            ⚠️
                        </div>

                    </div>

                    <div class="card-number">
                        {{ $stokMenipis }}
                    </div>

                    <div class="card-info">
                        Berdasarkan batas minimum
                    </div>

                </div>

            @endif

        </div>


        <!-- =====================================================
             BOTTOM CONTENT
             ===================================================== -->

        <div class="dashboard-grid">


            <!-- =================================================
                 OBAT TERBARU / DAFTAR OBAT
                 ================================================= -->

            <div class="panel">

                <div class="panel-header">

                    <h2>

                        @if(auth()->user()->role === 'admin')

                            💊 Obat Terbaru

                        @else

                            💊 Daftar Obat

                        @endif

                    </h2>


                    <small>

                        @if(auth()->user()->role === 'admin')

                            Data terbaru

                        @else

                            Informasi stok

                        @endif

                    </small>

                </div>


                @if($obatTerbaru->count() > 0)

                    <div class="table-wrapper">

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
                                        Satuan
                                    </th>

                                    <th>
                                        Stok
                                    </th>

                                    <th>
                                        Minimum
                                    </th>

                                    <th>
                                        Kadaluarsa
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach($obatTerbaru as $item)

                                    <tr>

                                        <!-- KODE -->

                                        <td>
                                            {{ $item->kode_obat }}
                                        </td>


                                        <!-- NAMA + BARCODE -->

                                        <td>

                                            <div class="medicine-name">
                                                {{ $item->nama_obat }}
                                            </div>


                                            @if($item->barcode)

                                                <span class="barcode">
                                                    Barcode: {{ $item->barcode }}
                                                </span>

                                            @endif

                                        </td>


                                        <!-- KATEGORI -->

                                        <td>

                                            <span class="category">
                                                {{ $item->kategori }}
                                            </span>

                                        </td>


                                        <!-- SATUAN -->

                                        <td>

                                            <span class="unit">
                                                {{ $item->satuan }}
                                            </span>

                                        </td>


                                        <!-- STOK -->

                                        <td>

                                            @if($item->stok == 0)

                                                <span class="stok-warning">
                                                    Habis
                                                </span>

                                            @elseif($item->stok < $item->minimum_stok)

                                                <span class="stok-menipis">
                                                    {{ $item->stok }}
                                                </span>

                                            @else

                                                <span class="stok-aman">
                                                    {{ $item->stok }}
                                                </span>

                                            @endif

                                        </td>


                                        <!-- MINIMUM -->

                                        <td>
                                            {{ $item->minimum_stok }}
                                        </td>


                                        <!-- KADALUARSA -->

                                        <td>

                                            @if(!$item->tanggal_kadaluarsa)

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


                                                @if($tanggalExpired->lt($hariIni))

                                                    <span class="status-expired expired-danger">
                                                        EXPIRED
                                                    </span>

                                                @elseif($tanggalExpired->lte($batas30Hari))

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


                                        <!-- STATUS -->

                                        <td>

                                            @if($item->status === 'aktif')

                                                <span class="status-active">
                                                    AKTIF
                                                </span>

                                            @else

                                                <span class="status-inactive">
                                                    NONAKTIF
                                                </span>

                                            @endif

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            💊
                        </div>

                        Belum ada data obat.

                    </div>

                @endif

            </div>


            <!-- =================================================
                 STOK MENIPIS
                 ================================================= -->

            <div class="panel">

                <div class="panel-header">

                    <h2>

                        @if(auth()->user()->role === 'admin')

                            ⚠️ Stok Menipis

                        @else

                            ⚠️ Perhatian Stok

                        @endif

                    </h2>


                    <small>
                        Perlu perhatian
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


                            <span class="stock-number">
                                Stok: {{ $item->stok }}
                            </span>


                            <span class="stock-minimum">
                                Minimum: {{ $item->minimum_stok }}
                            </span>

                        </div>

                    @endforeach

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            🎉
                        </div>

                        Semua stok masih aman!

                        <br>

                        <span style="font-size: 10px;">
                            Tidak ada obat yang perlu diperhatikan.
                        </span>

                    </div>

                @endif

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