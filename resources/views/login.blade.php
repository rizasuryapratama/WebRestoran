<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6c63ff, #a29bfe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .title {
            color: #6c63ff;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .btn-primary {
            background: #6c63ff;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background: #483d8b;
        }
        .register-link {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            height: 45px;
            border-radius: 10px;
        }
        .alert-danger {
            border-radius: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: white;
        }
        .footer a {
            color: #f4f4f4;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2 class="title">
            LOGIN<br>
            <small>Aplikasi Restoran</small>
        </h2>
        <hr>
       @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
        <hr>
        <p class="register-link">
            Belum punya akun? <a href="register">Register</a> sekarang!
        </p>
    </div>
    
</body>
</html>
