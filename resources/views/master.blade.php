<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World of Gin</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Favicon  -->
    <link rel="icon" href="_frontend/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="_frontend/css/style.css">

</head>




<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/"><img src="_frontend/img/core-img/logo.png" alt="Logo"></a>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tutorials">Tutoriais</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($allCategoriesList as $c)
                                        <a class="dropdown-item" href="/tutorialsByCategory/{{$c->id}}">{{$c->designacao}}</a>
                                    @endforeach

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contactos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Log In</a>
                                    <a class="dropdown-item" href="">Registar</a>
                                </div>
                            </li>
                        </ul>
                        <!-- Search Form  -->
                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->




<!-- ********** Hero Area Start ********** -->
<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(_frontend/img/home-banners/copperhead-banner.jpg);"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(_frontend/img/home-banners/geral-banner.jpg);"></div>
    </div>

</div>
<!-- ********** Hero Area End ********** -->

@yield('content')

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <div class="copywrite-text mt-30">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <p>Proudly distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <ul class="footer-menu d-flex justify-content-between">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <h5>Subscribe</h5>
                    <form action="#" method="post">
                        <input type="email" name="email" id="email" placeholder="Enter your mail">
                        <button type="button"><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="_frontend/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="_frontend/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="_frontend/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="_frontend/js/plugins.js"></script>
<!-- Active js -->
<script src="_frontend/js/active.js"></script>

</body>

</html>