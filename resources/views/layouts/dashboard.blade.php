{{-- resources/views/layouts/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">
    <style>
        /* ================= GLOBAL ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: #0f172a;
        }

        /* ================= SIDEBAR ================= */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #0f172a, #1e293b);
            color: white;
            display: flex;
            flex-direction: column;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.4);
        }

        /* title */
        .sidebar h2 {
            font-family: 'Caesar Dressing', cursive;
            text-align: center;
            padding: 25px 10px;
            font-size: 26px;
            color: #d4af37;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* menu */
        .sidebar a {
            font-family: 'Caesar Dressing', cursive;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px 25px;
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: 0.25s;
        }

        .icon {
            width: 20px;
            height: 20px;
        }

        .sidebar a:hover {
            background: #1e293b;
            padding-left: 32px;
            color: white;
        }

        /* ================= MAIN CONTENT ================= */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: #f1f5f9;
        }

        /* ================= TOPBAR ================= */
        .topbar {
            background: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }

        /* logo */
        .logo {
            font-family: 'Caesar Dressing', cursive;
            font-size: 22px;
            color: #1e293b;
        }

        .logo span {
            font-family: 'Caesar Dressing', cursive;
            color: #d4af37;
        }

        /* ================= USER INFO ================= */
        .user-menu {
            position: relative;
            display: inline-block;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
        }

        .dropdown-menu {
            position: absolute;
            right: 0;
            top: 45px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 160px;
            overflow: hidden;

            opacity: 0;
            transform: translateY(-10px);
            pointer-events: none;
            transition: all .3s ease;
        }

        .dropdown-menu.active {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .dropdown-menu a,
        .dropdown-menu button {
            display: block;
            width: 100%;
            padding: 10px 14px;
            text-align: left;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 14px;
        }

        .dropdown-menu a:hover,
        .dropdown-menu button:hover {
            background: #f3f3f3;
        }

        .user-info {
            position: relative;
            display: flex;
            align-items: center;
        }

        .user-info span {
            font-family: 'Caesar Dressing', cursive;
            color: #1e293b;
            font-weight: 500;
        }

        /* profile */
        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .profile:hover {
            background: #f1f5f9;
        }

        /* avatar */
        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
        }

        .profile span {
            font-family: 'Caesar Dressing', cursive;
            font-weight: 500;
            color: #1e293b;
        }

        /* ================= DROPDOWN ================= */
        .dropdown {
            position: absolute;
            right: 0;
            top: 50px;
            background: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            display: none;
            padding: 10px;
            min-width: 120px;
        }

        /* logout */
        .logout-btn {
            width: 100%;
            border: none;
            background: #ef4444;
            color: white;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.25s;
        }

        .logout-btn:hover {
            background: #dc2626;
        }

        /* ================= CONTENT ================= */
        .content {
            padding: 30px;
            overflow-y: auto;
            flex: 1;
        }

        /* ================= CARD ================= */
        .card {
            background: white;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:768px) {
            .sidebar {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">
        <h2>Grand Line</h2>
        <a href="#">
            <img src="/images/dashboard.png" class="icon">
            Dashboard
        </a>
        <a href="#">
            <img src="/images/topi.png" class="icon">
            Profil </a> <a href="#">
            <img src="/images/daging.png" class="icon">
            Kursus
        </a>
        <a href="#">
            <img src="/images/pengaturan.png" class="icon">
            Pengaturan
        </a>
    </div>

    <!-- MAIN -->

    <div class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">
            <div class="logo">
                Grand Line <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="user" onclick="toggleMenu()">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'Guest' }}" class="avatar">
                    <span>{{ auth()->user()->name ?? 'Crew Member' }}</span>
                </div>
                <div class="dropdown" id="menuLogout">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="logout-btn">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <div class="card">
                @yield('content')
            </div>
        </div>
    </div>
    <script>
        function toggleMenu() {
            const menu = document.getElementById("menuLogout");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }
    </script>
</body>

</html>
