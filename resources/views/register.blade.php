<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="kotak">
        <h1 style="color: white">Register</h1>
          <form>
            <label>Username</label>\
            <br>
            <input type="text">
            <br>
            <label>Email</label>
            <br>
            <input type="text">
            <br>
            <label>Password</label>
            <br>
            <input type="password">
            <br>
            <button>Register</button>
            <p> Sudah punya akun?
              <a href="/login">Login di sini</a>
            </p>
          </form>
      </div>
</body>
</html>