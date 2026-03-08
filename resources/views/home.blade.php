<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>E-Learning Grand Line</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:'Poppins', sans-serif;
}

/* ================= NAVBAR ================= */

.custom-navbar-wrapper{
position:absolute;
top:20px;
width:100%;
display:flex;
justify-content:center;
z-index:1000;
}

.custom-navbar{

width:92%;
max-width:1100px;

background-image:url('/images/banner.png');
background-size:cover;
background-position:center;

padding:12px 30px;

box-shadow:0 10px 30px rgba(0,0,0,0.2);

position:relative;
overflow:hidden;
}

/* overlay navbar */

.custom-navbar::before{
content:"";
position:absolute;
inset:0;
/* background:rgba(0,0,0,0.5); */
z-index:0;
pointer-events:none;
}

.hero::before{
content:"";
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.45);
pointer-events:none;
}

.container{
    font-family:'Caesar Dressing', cursive;
}

.custom-navbar .container{
position:relative;
z-index:2;
}

.logo{
font-family: 'Caesar Dressing', cursive;
font-size:28px;
color:rgb(255, 255, 255);
text-decoration: none;
}

.menu .nav-link{
color:#d0d0d0;
margin-right:15px;
transition:0.3s;
font-size:15px;
}

.menu .nav-link:hover{
color:white;
}

.btn-login{
display:inline-block; /* penting */

/* background:rgb(180,138,60); */
/* box-shadow:0 10px 30px rgba(0,0,0,0.2); */

color:rgb(255, 255, 255);

font-family:'Caesar Dressing', cursive;
font-size:28px;

padding:7px 20px;
/* border-radius:20px; */

text-decoration:none;

transition:all 0.3s ease;
}

/* hover */

.btn-login:hover{

background:rgb(150,115,50);

box-shadow:0 15px 40px rgba(0,0,0,0.3);

color:rgb(255, 255, 255);

transform:translateY(-2px);

cursor:pointer;

}

/* tanda < */

.btn-login::before{

content:"<";

margin-right:8px;

display:inline-block;

}

/* tanda > */

.btn-login::after{

content:">";

margin-left:8px;

display:inline-block;

}

/* ================= HERO ================= */

.hero{

background-image:url("/images/peta.png");
background-size:cover;
background-position:center;

min-height:100vh;

display:flex;
align-items:center;

position:relative;
padding:120px 0 80px;
}

.hero::before{

content:"";
position:absolute;
top:0;
left:0;

width:100%;
height:100%;

background:rgba(0,0,0,0.45);

}

.hero .container{
position:relative;
z-index:2;
color:white;
}

.hero h1{
font-size:52px;
font-weight:700;
}

.hero p{
font-size:18px;
margin:20px 0 30px;
color:#e8e8e8;
}

.btn-start{

padding:14px 30px;
font-size:18px;
border-radius:12px;
transition:0.3s;

}

.btn-start:hover{

transform:translateY(-3px);
box-shadow:0 10px 25px rgba(0,0,0,0.3);

}

/* ================= FITUR ================= */

.fitur{

padding:90px 0;
background:#f4f6fb;

}

.fitur-title{

text-align:center;
font-size:34px;
font-weight:600;
margin-bottom:60px;

}

.fitur-card{

background:white;
padding:40px 30px;

border-radius:16px;

box-shadow:0 10px 25px rgba(0,0,0,0.08);

text-align:center;

transition:0.3s;

height:100%;

}

.fitur-card:hover{

transform:translateY(-10px);
box-shadow:0 18px 40px rgba(0,0,0,0.15);

}

.fitur-icon{

width:70px;
margin-bottom:20px;

}

.fitur-card h3{

font-size:20px;
font-weight:600;
margin-bottom:10px;

}

.fitur-card p{

font-size:14px;
color:#555;

}

.btn{
    display:inline-block;
    background:linear-gradient(135deg,#2563eb,#1e3a8a);
    color:white;
    padding:12px 22px;
    border-radius:8px;
    text-decoration:none;
    font-weight:500;
    transition:0.3s;
    box-shadow:0 6px 15px rgba(0,0,0,0.15);
}

.btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 20px rgba(0,0,0,0.2);
    background:linear-gradient(135deg,#1d4ed8,#1e40af);
}

/* ================= FOOTER ================= */

.footer{

background:#111;
color:#aaa;
text-align:center;
padding:25px;
font-size:14px;

}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

.hero h1{
font-size:38px;
}

.hero p{
font-size:16px;
}

}

@media(max-width:768px){

.hero{
text-align:center;
}

.hero h1{
font-size:32px;
}

.hero p{
font-size:15px;
}

.custom-navbar{
padding:10px 20px;
}


}

</style>

</head>

<body>

<!-- ================= NAVBAR ================= -->

<div class="custom-navbar-wrapper">

<nav class="navbar navbar-expand-lg custom-navbar">

<div class="container-fluid">

<a class="logo" href="#">E-Learning Grand Line</a>

<button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse justify-content-end" id="navbarNav">

<ul class="navbar-nav menu align-items-center">

{{-- <li class="nav-item">
<a class="nav-link" href="#">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#fitur">Fitur</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Kursus</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Kontak</a>
</li> --}}

<li class="nav-item">
<a class="btn-login ms-2" href="{{ route('login') }}">Login</a>
</li>

</ul>

</div>

</div>

</nav>

</div>

<!-- ================= HERO ================= -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1>Belajar Online Lebih Mudah</h1>

<p>
Platform e-learning untuk membantu kamu belajar kapan saja dan dimana saja dengan materi berkualitas.
</p>

<a href="#" class="btn">
Mulai Belajar
</a>

</div>

<div class="col-lg-6 text-center"></div>

</div>

</div>

</section>

<!-- ================= FITUR ================= -->

<section class="fitur" id="fitur">

<div class="container">

<h2 class="fitur-title">Fitur Platform</h2>

<div class="row g-4">

<div class="col-lg-4 col-md-6">

<div class="fitur-card">

<img src="{{ asset('images/book.png') }}" class="fitur-icon">

<h3>Materi Lengkap</h3>

<p>
Belajar dengan materi yang lengkap dan mudah dipahami untuk meningkatkan skill kamu.
</p>

</div>

</div>

<div class="col-lg-4 col-md-6">

<div class="fitur-card">

<img src="{{ asset('images/film.png') }}" class="fitur-icon">

<h3>Video Pembelajaran</h3>

<p>
Tersedia video pembelajaran interaktif yang membantu kamu memahami materi lebih cepat.
</p>

</div>

</div>

<div class="col-lg-4 col-md-6">

<div class="fitur-card">

<img src="{{ asset('images/q&a.png') }}" class="fitur-icon">

<h3>Quiz & Test</h3>

<p>
Uji kemampuanmu melalui quiz dan test untuk mengetahui progress belajar kamu.
</p>

</div>

</div>

</div>

</div>

</section>

<!-- ================= FOOTER ================= -->

<div class="footer">

© 2026 E-Learning Grand Line. All Rights Reserved.

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>