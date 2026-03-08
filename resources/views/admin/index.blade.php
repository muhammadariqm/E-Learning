@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <h2 class="mb-4">Dashboard Admin</h2>

        <div class="row g-4">

            <!-- Mahasiswa -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Total Mahasiswa</h6>
                        <h3></h3>
                    </div>
                </div>
            </div>

            <!-- Materi -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Total Materi</h6>
                        <h3></h3>
                    </div>
                </div>
            </div>

            <!-- Quiz -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Total Quiz</h6>
                        <h3></h3>
                    </div>
                </div>
            </div>

            <!-- Pengguna -->
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">User Aktif</h6>
                        <h3></h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- Aktivitas -->

        <div class="card mt-4 shadow-sm">

            <div class="card-header">
                Aktivitas Terbaru
            </div>

            <div class="card-body">

                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Aktivitas</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Andi</td>
                            <td>Mengerjakan Quiz</td>
                            <td>12 Juni 2025</td>
                        </tr>

                        <tr>
                            <td>Sari</td>
                            <td>Membuka Materi</td>
                            <td>11 Juni 2025</td>
                        </tr>

                        <tr>
                            <td>Budi</td>
                            <td>Login</td>
                            <td>10 Juni 2025</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <style>
        .dashboard-card {

            transition: 0.3s;

        }

        .dashboard-card:hover {

            transform: translateY(-6px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);

        }

        .dashboard-card h3 {

            color: #b48a3c;
            font-weight: 700;

        }
    </style>
@endsection
