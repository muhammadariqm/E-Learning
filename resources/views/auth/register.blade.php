<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register - E Learning Grand Line</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:'Caesar Dressing', cursive;

background-image:url("/images/peta.png");
background-size:cover;
background-position:center;

height:100vh;

display:flex;
align-items:center;
justify-content:center;

position:relative;
}

/* overlay */

body::before{
content:"";
position:absolute;
inset:0;
background:rgba(0,0,0,0.45);
}

/* register box */

.register-box{

position:relative;
z-index:2;

background:rgba(255,255,255,0.95);

padding:45px;

width:380px;

border-radius:16px;

box-shadow:0 20px 50px rgba(0,0,0,0.4);

}

/* title */

.register-box h2{

font-family:'Caesar Dressing', cursive;

text-align:center;

margin-bottom:30px;

color:rgb(180,138,60);

font-size:32px;

}

/* input */

.input-group{
margin-bottom:18px;
}

.input-group label{
display:block;
margin-bottom:6px;
font-size:14px;
}

.input-group input{

width:100%;

padding:12px;

border:1px solid #ddd;

border-radius:8px;

outline:none;

font-size:14px;

transition:0.2s;

}

.input-group input:focus{

border-color:rgb(180,138,60);

box-shadow:0 0 5px rgba(180,138,60,0.4);

}

/* button */

.register-btn{

width:100%;

background:rgb(180,138,60);

color:rgb(210,197,173);

font-family:'Caesar Dressing', cursive;

font-size:22px;

padding:12px;

border:none;

border-radius:25px;

cursor:pointer;

transition:0.3s;

}

.register-btn:hover{

background:rgb(150,115,50);

transform:translateY(-2px);

box-shadow:0 10px 25px rgba(0,0,0,0.3);

}

/* arrows */

.register-btn::before{
content:"< ";
}

.register-btn::after{
content:" >";
}

/* extra link */

.extra{

text-align:center;

margin-top:18px;

font-size:14px;

}

.extra a{

text-decoration:none;

color:rgb(180,138,60);

font-weight:500;

}

.extra a:hover{
text-decoration:underline;
}

</style>

</head>

<body>

<div class="register-box">

<h2>Register</h2>

<form action="{{ route('register') }}" method="POST">
@csrf

<div class="input-group">
<label>NIM</label>
<input type="text" name="nim" placeholder="Masukkan NIM" required>
</div>

<div class="input-group">
<label>Nama Lengkap</label>
<input type="text" name="name" placeholder="Masukkan nama lengkap" required>
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password" placeholder="Masukkan password" required>
</div>

<div class="input-group">
<label>Konfirmasi Password</label>
<input type="password" name="password_confirmation" placeholder="Konfirmasi password" required>
</div>

<button type="submit" class="register-btn">
DAFTAR
</button>

</form>

<div class="extra">
Sudah punya akun? <a href="{{ route('login') }}">Login</a>
</div>

</div>

</body>
</html>