<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - E Learning Grand Line</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* BODY */

        body {
            font-family: 'Poppins', sans-serif;
            background-image: url("/images/peta.png");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* overlay */

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
        }

        /* LOGIN BOX */

        .login-box {

            position: relative;
            z-index: 2;

            background: rgba(255, 255, 255, 0.95);

            padding: 45px 40px;

            width: 90%;
            max-width: 380px;

            border-radius: 16px;

            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.45);

            animation: fadeUp 1s ease;

            backdrop-filter: blur(6px);

        }

        /* TITLE */

        .login-box h2 {

            font-family: 'Caesar Dressing', cursive;

            text-align: center;

            margin-bottom: 30px;

            color: rgb(180, 138, 60);

            font-size: 32px;

            letter-spacing: 2px;

        }

        /* INPUT GROUP */

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 500;
        }

        /* INPUT */

        .input-group input {

            width: 100%;

            padding: 12px 14px;

            border: 1px solid #ddd;

            border-radius: 8px;

            outline: none;

            font-size: 14px;

            transition: all .3s ease;

        }

        /* INPUT FOCUS */

        .input-group input:focus {

            border-color: rgb(180, 138, 60);

            box-shadow: 0 0 8px rgba(180, 138, 60, 0.4);

            transform: scale(1.02);

        }

        /* BUTTON */

        .login-btn {

            width: 100%;

            background: rgb(180, 138, 60);

            color: rgb(255, 255, 255);

            font-family: 'Caesar Dressing', cursive;

            font-size: 20px;

            padding: 12px;

            border: none;

            border-radius: 30px;

            cursor: pointer;

            transition: all .3s ease;

            position: relative;

            overflow: hidden;

        }

        /* HOVER BUTTON */

        .login-btn:hover {

            background: rgb(150, 115, 50);

            transform: translateY(-3px);

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);

        }

        /* BUTTON ARROW */

        .login-btn::before {
            content: "< ";
        }

        .login-btn::after {
            content: " >";
        }

        /* PLACEHOLDER */

        input::placeholder {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
        }

        /* EXTRA */

        .extra {

            text-align: center;

            margin-top: 18px;

            font-size: 14px;

        }

        .extra a {

            text-decoration: none;

            color: rgb(180, 138, 60);

            font-weight: 500;

            transition: .3s;

        }

        .extra a:hover {

            text-decoration: underline;

            color: rgb(150, 115, 50);

        }

        /* ANIMATION */

        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        /* FLOATING MAP ANIMATION */

        body::after {

            content: "";

            position: absolute;

            inset: 0;

            background: url("/images/peta.png");

            background-size: cover;

            opacity: 0.08;

            animation: mapMove 60s linear infinite;

        }

        @keyframes mapMove {

            0% {
                transform: scale(1) translateX(0);
            }

            50% {
                transform: scale(1.05) translateX(-40px);
            }

            100% {
                transform: scale(1) translateX(0);
            }

        }

        /* RESPONSIVE */

        @media (max-width:768px) {

            .login-box {

                padding: 35px 28px;

                border-radius: 14px;

            }

            .login-box h2 {

                font-size: 26px;

            }

            .login-btn {

                font-size: 18px;

            }

        }

        @media (max-width:480px) {

            .login-box {

                padding: 30px 22px;

            }

            .login-box h2 {

                font-size: 24px;

            }

        }
    </style>

</head>

<body>

    <div class="login-box">

        <h2>Login</h2>

        <form action="{{ route('login.submit') }}" method="POST">

            @csrf

            <div class="input-group">
                <label>NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="login-btn">
                LOGIN
            </button>

        </form>

        <div class="extra">
            Belum punya akun? <a href="#">Daftar</a>
        </div>

    </div>

</body>

</html>
