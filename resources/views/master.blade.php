<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Restoran</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        .hero-section {
            background-color: #121212;
            color: white;
            padding: 100px ;
            margin-top: 5rem;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text {
            font-size: 2.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 600px;
        }

        .book-button {
            background-color: #ffa500;
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .book-button:hover {
            background-color: #ff8c00;
            transform: translateY(-2px);
        }

        .hero-image {
            position: relative;
            text-align: right;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
            background-image: url('{{ asset('image/makanan.jpg') }}');
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-text {
                font-size: 1rem;
            }
            .hero-section {
                text-align: center;
                padding: 50px 0;
            }
            .hero-image {
                margin-top: 30px;
                text-align: center;
            }
        }

        .detail{
            background-color: #000;
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 50px 0;
        }

        .gambar {
            border-radius: 20px;
            transition: transform 0.5s ease;
            max-width: 100%;
            height: auto;
        }

        .gambar {
            transform: scale(1.05);
        }

        .hero-content {
            padding: 30px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 40px;
            line-height: 1.8;
            opacity: 0.9;
        }

        .cta-button {
            background-color: #3474e6;
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            background-color: #2857b3;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(52,116,230,0.3);
            color: white;
        }

        .cta-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s ease;
        }

        .cta-button:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .hero {
                padding: 30px 0;
                text-align: center;
            }

            .hero-image {
                margin-bottom: 30px;
            }
        }

        /* Floating animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Gradient background */
        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(0,0,0,0.9), rgba(0,0,0,0.7));
            z-index: -1;
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
                            <a class="nav-link">
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
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 hero-content">
                  <h1 class="hero-title">Selamat Datang</h1>
                  <h2 class="hero-text">Di Restoran Starbhak Food</h2>
                  
                  <button class="btn book-button">
                      BOOK A TABLE
                  </button>
              </div>
              <div class="col-lg-6 hero-image">
                  <img src="{{ asset('image/makanan.jpg') }}" alt="Grilled meats and vegetables" class="img-fluid">
              </div>
          </div>
      </div>
  </section>
  <div class="detail">
    <div class="hero">
        <div class="gradient-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <img src="{{ asset('image/makanan.jpg') }}" alt="Starbhak Food" class="gambar floating">
                </div>
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <div class="hero-content">
                        <h1 class="hero-title">Restoran Starbhak Food</h1>
                        <p class="hero-description">
                            Adalah Sebuah restoran menyediakan beberapa menu makanan dan minuman yang enak untuk di konsumsi.
                        </p>
                        <a href="{{ route('produk.index') }}" class="cta-button animate__animated animate__pulse animate__infinite">
                            Liat Produk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  <!-- Bootstrap 5 JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Add active class to current page link
    (function addActiveClassToCurrentLink() {
        const currentLocation = window.location.href;
        const menuItems = document.querySelectorAll('.nav-link');
        menuItems.forEach(item => {
            if (item.href === currentLocation) {
                item.classList.add('active-link');
            }
        });
    })();

    // Smooth scroll for anchor links
    (function enableSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    })();

    // Add scroll reveal animation
    (function addScrollRevealAnimation() {
        window.addEventListener('scroll', function() {
            const elements = document.querySelectorAll('.animate__animated');
            elements.forEach(element => {
                const position = element.getBoundingClientRect();
                if (position.top < window.innerHeight && position.bottom > 0) {
                    element.style.visibility = 'visible';
                    element.style.opacity = '1';
                }
            });
        });
    })();

    // Add hover effect for CTA button
    (function addCTAButtonHoverEffect() {
        const ctaButton = document.querySelector('.cta-button');
        if (ctaButton) {
            ctaButton.addEventListener('mouseenter', function() {
                this.classList.add('animate__headShake');
            });
            ctaButton.addEventListener('animationend', function() {
                this.classList.remove('animate__headShake');
            });
        }
    })();
});
    </script>
</body>
</html>