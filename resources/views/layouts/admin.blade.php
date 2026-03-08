<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - Grand Line</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* BODY */

        body {
            display: flex;
            background: #f5f6fa;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            font-family: 'Caesar Dressing', cursive;
            width: 250px;
            background: #1e272e;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
            transition: 0.3s;
        }

        .sidebar span {
            font-family: 'Caesar Dressing', cursive;
        }

        .sidebar h2 {
            font-family: 'Caesar Dressing', cursive;
            text-align: center;
            margin-bottom: 30px;
            color: rgb(180, 138, 60);
        }

        /* MENU */

        .sidebar ul {
            font-family: 'Caesar Dressing', cursive;
            list-style: none;
        }

        .sidebar ul li {
            font-family: 'Caesar Dressing', cursive;
            margin: 15px 0;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            font-family: 'Caesar Dressing', cursive;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: rgb(180, 138, 60);
            transform: translateX(5px);
        }

        /* ICON MENU */

        .menu-icon {
            width: 22px;
            height: 22px;
            object-fit: contain;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* TOPBAR */

        .topbar {
            background: white;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .topbar h3 {
            font-weight: 600;
            font-family: 'Caesar Dressing', cursive;
            color: rgb(180, 138, 60);
        }

        /* USER MENU */

        .user-menu {
            position: relative;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 6px 10px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .user:hover {
            background: #f1f5f9;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
        }

        .user span {
            font-family: 'Caesar Dressing', cursive;
            color: #1e293b;
        }

        /* DROPDOWN */

        .dropdown {
            position: absolute;
            right: 0;
            top: 50px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 160px;
            padding: 8px 0;
            display: none;
        }

        .dropdown.show {
            display: block;
        }

        .dropdown a,
        .dropdown button {
            display: block;
            width: 100%;
            padding: 10px 15px;
            border: none;
            background: none;
            text-decoration: none;
            color: #1e293b;
            font-size: 14px;
            cursor: pointer;
        }

        .dropdown a:hover,
        .dropdown button:hover {
            background: #f3f4f6;
        }

        /* CONTENT */

        .content {
            padding: 25px;
        }

        /* CARDS */

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .card h4 {
            margin-bottom: 10px;
            font-family: 'Caesar Dressing', cursive;
        }

        .card p {
            font-size: 22px;
            font-weight: bold;
            color: rgb(180, 138, 60);
        }

        /* TABLE */

        .table-box {
            margin-top: 30px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        table th {
            background: #f1f2f6;
        }

        /* RESPONSIVE */

        @media(max-width:768px) {

            .sidebar {
                width: 70px;
            }

            .sidebar h2 {
                font-size: 18px;
            }

            .sidebar ul li a span {
                display: none;
            }

            .main {
                margin-left: 70px;
            }

        }
    </style>

</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <h2>Grand Line</h2>

        <ul>

            <li>
                <a href="#">
                    <img src="/images/dashboard.png" class="menu-icon">
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="/images/mahasiswa.png" class="menu-icon">
                    <span>Mahasiswa</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="/images/materi.png" class="menu-icon">
                    <span>Materi</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="/images/q&a.png" class="menu-icon">
                    <span>Quiz</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="/images/nilai.png" class="menu-icon">
                    <span>Nilai</span>
                </a>
            </li>

        </ul>

    </div>

    <!-- MAIN -->

    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h3>Selamat Datang, {{ auth()->user()->name ?? 'Crew Member' }}</h3>

            <div class="user-menu">

                <div class="user" onclick="toggleMenu()">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="avatar">
                    <span>{{ auth()->user()->name ?? 'Crew Member' }}</span>
                </div>

                <div id="dropdownMenu" class="dropdown">

                    <a href="/profile">👤 Profile</a>

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">🚪 Logout</button>
                    </form>

                </div>

            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="cards">

                <div class="card">
                    <h4>Total Mahasiswa</h4>
                    <p>120</p>
                </div>

                <div class="card">
                    <h4>Total Materi</h4>
                    <p>35</p>
                </div>

                <div class="card">
                    <h4>Total Quiz</h4>
                    <p>12</p>
                </div>

                <div class="card">
                    <h4>Pengguna Aktif</h4>
                    <p>87</p>
                </div>

            </div>

            <!-- TABLE -->

            <div class="table-box">

                <h4>Aktivitas Terbaru</h4>

                <table>

                    <tr>
                        <th>Nama</th>
                        <th>Aktivitas</th>
                        <th>Tanggal</th>
                    </tr>

                    <tr>
                        <td>Andi</td>
                        <td>Mengerjakan Quiz</td>
                        <td>12 Juni 2025</td>
                    </tr>

                    <tr>
                        <td>Budi</td>
                        <td>Melihat Materi</td>
                        <td>11 Juni 2025</td>
                    </tr>

                    <tr>
                        <td>Sari</td>
                        <td>Login</td>
                        <td>10 Juni 2025</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

    <script>
        function toggleMenu() {
            document.getElementById("dropdownMenu").classList.toggle("show");
        }

        window.onclick = function(e) {
            if (!e.target.closest('.user-menu')) {
                document.getElementById("dropdownMenu").classList.remove("show");
            }
        }
    </script>

</body>

</html>
