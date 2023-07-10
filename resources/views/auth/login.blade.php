<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminstrasi Notaris</title>

    {{-- bootstrap --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('assets/login/style.css')}}">

</head>

<body class="bg-primary">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <h3 class="mt-3">Login Pengguna</h3>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" >
                @csrf

                <input type="email" id="login" class="fadeIn second" name="email" autocomplete="off" placeholder="Masukkan Email Anda">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Masukkan password Anda">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
        </div>
    </div>
</body>

</html>
