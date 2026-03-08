@extends('layouts.dashboard')

@section('title', 'Dashboard E-Learning')

@section('content')
    <h1>Selamat Datang, {{ auth()->user()->name ?? 'User' }}!</h1>
    <p>Pilih kursus yang ingin kamu pelajari:</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/course1.jpg') }}" class="card-img-top" alt="Course 1">
                <div class="card-body">
                    <h5 class="card-title">Kursus Pemrograman Web</h5>
                    <p class="card-text">Belajar HTML, CSS, dan JavaScript untuk membuat website yang menarik.</p>
                    <a href="#" class="btn btn-primary">Mulai Belajar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/course2.jpg') }}" class="card-img-top" alt="Course 2">
                <div class="card-body">
                    <h5 class="card-title">Kursus Data Science</h5>
                    <p class="card-text">Pelajari analisis data, machine learning, dan visualisasi data dengan Python.</p>
                    <a href="#" class="btn btn-primary">Mulai Belajar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/course3.jpg') }}" class="card-img-top" alt="Course 3">
                <div class="card-body">
                    <h5 class="card-title">Kursus Desain Grafis</h5>
                    <p class="card-text">Belajar menggunakan Adobe Photoshop dan Illustrator untuk desain grafis yang
                        kreatif.</p>
                    <a href="#" class="btn btn-primary">Mulai Belajar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
