<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Reset some default styles */
        body, header, nav, article, aside, footer {
            margin: 0;
            padding: 0;
        }

        /* General styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Header */
        header {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        header .login-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }
        header .login-btn:hover {
            background-color: #0056b3;
        }

        /* Banner */
        .banner {
            width: 100%;
            max-height: 400px;
            overflow: hidden;
            text-align: center;
            margin-bottom: 20px;
        }
        .banner img {
            width: 100%;
            height: auto;
        }

        /* Navigator */
        nav {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: #343a40;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            color: #007bff;
        }

        /* Article */
        article {
            padding: 20px;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
        footer a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
        }
        footer a:hover {
            text-decoration: underline;
        }
        footer .footer-content {
            max-width: 1000px;
            margin: 0 auto;
        }
        footer .footer-content p {
            margin: 10px 0;
        }

        /* Book Card */
        .book-card {
            transition: transform 0.2s ease-in-out;
        }
        .book-card:hover {
            transform: scale(1.05);
        }
        .book-card .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #343a40;
        }
        .book-card .card-text {
            font-size: 16px;
            color: #007bff;
        }
        .book-card .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .book-card .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav a {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        Tiệm Sách 
        <a href="/login" class="login-btn">Login</a>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1200/400?image=1" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?image=2" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?image=3" class="d-block w-100" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <nav>
        <nav>
            <a href="{{ url('/') }}">Trang chủ</a>
            <a href="{{ url('/products') }}">Danh sách sản phẩm</a>
            <a href="{{ url('/about') }}">Giới thiệu</a>
            <a href="{{ url('/contact') }}">Liên hệ</a>
            <a href="{{ url('/faq') }}">Hỏi đáp</a>
           
        </nav>
    </nav>
    <article>
        @yield('content')
    </article>
    
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Tiệm Sách. All Rights Reserved.</p>
            <p>
                <a href="#">Trang chủ</a> | 
                <a href="#">Giới thiệu</a> | 
                <a href="#">Liên hệ</a> | 
                <a href="#">Hỏi đáp</a>
            </p>
            <p>
                Địa chỉ: 123 Đường Sách, Quận 1, TP. HCM<br>
                Điện thoại: (012) 345-6789 | Email: info@tiemsach.com
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
