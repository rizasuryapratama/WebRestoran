<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Starbhak Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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



        .produk {
            background-color: #000;
            color: white;
            min-height: 100vh;
            padding: 40px 0;
            margin-top: 85px;
        }

        .menu-tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }

        .menu-tab {
            background-color: #ffffff;
            color: #000;
            padding: 12px 25px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .menu-tab:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255,255,255,0.2);
        }

        .menu-tab.active {
            background-color: #3474e6;
            color: white;
        }

        .menu-card {
            background-color: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(52,116,230,0.3);
        }

        .menu-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .menu-card:hover .menu-image {
            transform: scale(1.1);
        }

        .menu-content {
            padding: 20px;
            background: white;
            color: black;
        }

        .menu-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .menu-price {
            color: #3474e6;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-pesan {
            background-color: #3474e6;
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            border: none;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-pesan:hover {
            background-color: #2857b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52,116,230,0.3);
        }

        .menu-image-container {
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .menu-tabs {
                flex-wrap: wrap;
                justify-content: center;
            }
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
                            <a class="nav-link" href="{{ route('home') }}">
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
                                <span class="user-email">{{ Auth::user()->email }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <span class="dropdown-item">
                                        <i class="fas fa-user-tag"></i> Level: {{ Auth::user()->role }}
                                    </span>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <!-- Gunakan form untuk logout -->
                                    <form action="{{ route('actionlogout') }}" method="POST" style="margin: 0;">
                                        @csrf
                                        <button type="submit" class="dropdown-item logout-btn">
                                            <i class="fas fa-sign-out-alt"></i> Log Out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>                    
                </div>
            </div>
        </nav>
    </div>


    <div class="produk">
    <div class="container">
        <div class="menu-tabs animate__animated animate__fadeInDown">
            <a href="{{ route('produk.index') }}"><button class="menu-tab ">
                <i class="fas fa-utensils"></i>
                Semua
            </button>
            </a>
           <a href="{{ route('produk.makanan') }}"><button class="menu-tab">
                <i class="fas fa-hamburger">
                </i>
                Makanan
            </button>
        </a>
            <a><button class="menu-tab active">
                <i class="fas fa-glass-martini-alt"></i>
                Minuman
            </button></a>
        </div>

        <div class="row">

            <!-- Menu Item 5 -->
            <div class="col-md-4 animate__animated animate__fadeIn" style="animation-delay: 0.8s;">
                <div class="menu-card">
                    <div class="menu-image-container">
                        <img src="{{ asset('image/tehmanis.jpeg') }}" alt="Burger" class="menu-image">
                    </div>
                    <div class="menu-content">
                        <div class="menu-title">Teh Manis</div>
                        <div class="menu-price">Rp 5.000</div>
                        
                    </div>
                </div>
            </div>

            <!-- Menu Item 6 -->
            <div class="col-md-4 animate__animated animate__fadeIn" style="animation-delay: 1s;">
                <div class="menu-card">
                    <div class="menu-image-container">
                        <img src="{{ asset('image/jusmangga.jpeg') }}" alt="Burger" class="menu-image">
                    </div>
                    <div class="menu-content">
                        <div class="menu-title">Jus Mangga</div>
                        <div class="menu-price">Rp 8.000</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching functionality
            const tabs = document.querySelectorAll('.menu-tab');
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Hover animation for menu cards
            const menuCards = document.querySelectorAll('.menu-card');
            menuCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Button hover effect
            const buttons = document.querySelectorAll('.btn-pesan');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                });
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>