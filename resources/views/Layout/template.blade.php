<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 90px;
        }
        .navbar {
          position: fixed;
          top: 0;
          width: 100%; /* Pastikan navbar meluas penuh */
          z-index: 1030; /* Agar tetap di atas elemen lain */
          background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
          padding: 1rem 0;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: 700;
            font-size: 1.6rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 8px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .navbar-brand:hover {
            background: rgba(255,255,255,0.1);
        }
        .navbar-brand i {
            color: #ffd700;
        }
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: #fff !important;
            transform: translateY(-2px);
        }
        .main-menu .nav-link {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .main-menu .nav-link i {
            font-size: 1.1rem;
        }
        .dropdown-menu {
            border: none;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            border-radius: 12px;
            overflow: hidden;
            animation: dropdownFade 0.3s ease;
        }
        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .dropdown-item {
            padding: 0.8rem 1.5rem;
            transition: all 0.3s ease;
            position: relative;
        }
        .dropdown-item i {
            width: 20px;
            text-align: center;
            margin-right: 8px;
        }
        .dropdown-item:hover {
            background-color: #f8f9fa;
            padding-left: 2rem;
            color: #1e3c72;
        }
        .user-email {
            color: #fff;
            font-weight: 500;
        }
        .logout-btn {
            color: #dc3545 !important;
            font-weight: 500;
        }
        .logout-btn:hover {
            background-color: #dc3545 !important;
            color: #fff !important;
        }
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            border-radius: 8px;
            background: rgba(255,255,255,0.1);
        }
        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.85)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        .active-link {
            background: rgba(255,255,255,0.1);
            color: #fff !important;
        }




        .content-wrapper {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin: 20px auto;
            position: relative; /* Add this */
            z-index: 1; /* Add this to ensure content stays below navbar */
        }
        /* Optional: Add some responsive padding adjustments */
        @media (max-width: 768px) {
            body {
                padding-top: 80px;
            }
        }
        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }
        .table-title {
            color: #2c3e50;
            margin: 0;
        }
        .btn-add {
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: 500;
        }
        .table {
            margin: 0;
        }
        .table thead {
            background-color: #f8f9fa;
        }
        .table th {
            font-weight: 700;
            color: #2c3e50;
            border-bottom: 2px solid #dee2e6;
        }
        .table td {
            vertical-align: middle;
        }
        .action-buttons .btn {
            padding: 5px 10px;
            margin: 0 2px;
        }
        .btn-warning {
            color: white;
            background-color: #f39c12;
            border-color: #f39c12;
        }
        .btn-warning:hover {
            background-color: #e67e22;
            border-color: #e67e22;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg mb-0">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center">
                    <i class="fas fa-utensils me-2"></i>Restoran
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav main-menu me-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('home') }}">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kategori.index') }}" >
                                <i class="fas fa-tags"></i>
                                Kategori
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.index') }}">
                                <i class="fas fa-utensils"></i>
                                Menu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fas fa-shopping-cart" ></i>
                                Pesanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('produk.index') }}">
                                <i class="fas fa-box"></i>
                                Produk
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle me-2"></i>
                                <span class="user-email">{{Auth::user()->email}}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <span class="dropdown-item">
                                        <i class="fas fa-user-tag"></i>Level: {{Auth::user()->role}}
                                    </span>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item logout-btn" href="{{route('actionlogout')}}">
                                        <i class="fas fa-sign-out-alt"></i>Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container">
      <div class="content-wrapper">
        @yield('konten')
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>