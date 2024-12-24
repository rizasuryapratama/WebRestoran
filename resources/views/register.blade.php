<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #6c63ff, #a29bfe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .register-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
        }
        .title {
            color: #6c63ff;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.8rem;
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
        .form-control {
            height: 45px;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .alert-success {
            border-radius: 10px;
        }
        .register-link {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }
        .register-link a {
            color: #6c63ff;
            font-weight: bold;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
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
    <div class="register-box">
        <h2 class="title">Register User</h2>
        <hr>
        @if(session('message'))
        <div class="alert alert-success">
            <b>Success!</b> {{ session('message') }}
        </div>
        @endif
        <form action="{{ route('actionregister') }}" method="post">
            @csrf
            <div class="form-group">
                <label><i class="fa fa-envelope"></i> Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label><i class="fa fa-user"></i> Username</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label><i class="fa fa-key"></i> Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <div class="form-group">
                <label><i class="fa fa-user-tag"></i> Role</label>
                <input type="text" name="role" class="form-control" value="Guest" readonly>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Register</button>
        </form>
        <hr>
        <p class="register-link">
            Sudah punya akun? <a href="login">Login Disini!</a>
        </p>
    </div>
    
</body>
</html>
