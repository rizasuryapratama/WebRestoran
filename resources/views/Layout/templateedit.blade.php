<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .edit-form {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .form-title {
            color: #2c3e50;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #eee;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: 500;
            color: #34495e;
        }
        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 15px;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52,152,219,0.25);
        }
        .btn-submit {
            width: 100%;
            padding: 12px;
            background: #3498db;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        .btn-submit:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="edit-form">
            @yield('konten')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>