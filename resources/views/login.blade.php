<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <body>
        <div class="kotak">
          <h1 style="color: white">Login</h1>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button>Log in</button>
                <p> Belum punya akun?
                  <a href="/register">Register di sini</a>
                </p>
            </form>
        </div>
    </body>
</body>
</html>