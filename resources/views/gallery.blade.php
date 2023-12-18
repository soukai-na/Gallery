<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Galerie | Maborne</title>
    <meta charset="UTF-8">
    <meta name="description" content="Boto Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/fresco.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

    <style>
        .gallery__page {
            padding: 40px 15px 65px;
        }
    </style>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3 order-2 order-sm-1">
                    <div class="header__social">

                    </div>
                </div>
                <div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
                    <a href="{{ route('index') }}" class="site-logo">
                        <img src="img/maborne/logo_black.png" width="210px" alt="">
                    </a>
                </div>
                <div class="col-sm-4 col-md-3 order-3 order-sm-3">
                    <div class="header__switches">
                        <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
            <nav class="main__menu">
                <ul class="nav__menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('images.index') }}">Upload</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header Section end -->

    <div class="row" style="display:flex; justify-content: center; margin-top: 115px;">
        <button class="btn btn-outline-danger mr-3 filter-button" data-filter="all">All</button>
        <button class="btn btn-outline-danger mr-3 filter-button" data-filter="Chocolate-Cake">Chocolate Cake</button>
        <button class="btn btn-outline-danger mr-3 filter-button" data-filter="Vanilla-Cake">Vanilla Cake</button>
        <button class="btn btn-outline-danger mr-3 filter-button" data-filter="Strawberry-Cake">Strawberry Cake</button>
        <button class="btn btn-outline-danger mr-3 filter-button" data-filter="Lemon-Cake">Lemon Cake</button>
    </div>


    <!-- About Page -->
    <div class="gallery__page">
        <div class="gallery__warp">
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-lg-3 col-md-4 col-sm-6 filter {{ $image->category }}">
                        <a class="gallery__item fresco" href="{{ url('files/images/' . $image->image) }}"
                            data-fresco-group="gallery">
                            <img src="{{ url('files/images/' . $image->image) }}" alt="">
                        </a>
                    </div>
                @endforeach
                @foreach ($videos as $video)
                    <div class="col-lg-3 col-md-4 col-sm-6 filter {{ $video->category }}">
                        <a class="gallery__item fresco" href="{{ url('files/images/' . $video->image) }}"
                            data-fresco-group="gallery">
                            <video controls style="width:100%;">
                                <source src="{{ url('files/images/' . $video->image) }}" type="video/mp4">
                            </video>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Page end -->

    <!-- Footer Section -->
    <footer class="footer__section">
        <div class="container">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Maborne
                </p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section end -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/fresco.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {

            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                } else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });
    </script>

</body>

</html>
