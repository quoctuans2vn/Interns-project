<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/f74c750d0d.js"></script>
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <!-- Animate on Scroll -->
    <link href="./asset/css/aos.css" rel="stylesheet">
    <script src="./asset/js/aos.js"></script>
    <!---->
    <script src="./asset/js/bootstrap.js"></script>
    <script src="./asset/js/demo.js"></script>
    <title>Document</title>
</head>

<body class="">
    <!-- Header -->
    <header>
        <!-- Top header -->
        <div class="container-fluid py-3 px-5" style="font-size: 0.875rem">
            <div class="row align-items-center">
                <!-- Icon fb, twitter -->
                <div class="col-4">
                    <ul class="list-inline d-flex align-items-center mb-0">
                        <li class="list-inline-item ">
                            <a href="#">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-5">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <p id="fa-phone-custom" style="margin: 0">020-800-456-747</p>
                        </li>
                    </ul>
                </div>
                <!--Param Center top header -->
                <div class="col-4 text-center">
                    <p style="margin: 0;">Free in-store delivery</p>
                </div>
                <!-- Dropdown button -->
                <div class="col-4 d-flex justify-content-end">
                    <!-- Dropdown 1 -->
                    <div class="dropdown border-right px-3">
                        <a href="#" class="dropdown-custom topbar-link" role="button" id="languageDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</a>
                        <div class="dropdown-menu dropdown-menu-right mt-3 py-2" aria-labelledby="languageDropdown">
                            <a href="#" class="dropdown-item">German</a>
                            <a href="#" class="dropdown-item">French</a>
                        </div>
                    </div>
                    <!-- Dropdown 2 -->
                    <div class="dropdown pl-3">
                        <a href="#" class="dropdown-custom topbar-link" role="button" id="curencyDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD</a>
                        <div class="dropdown-menu dropdown-menu-right mt-3 py-2"
                            aria-labelledby="curencylanguageDropdown">
                            <a href="#" class="dropdown-item">EUR</a>
                            <a href="#" class="dropdown-item">GBP</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- End Top header -->
        <!-- Bottom header -->
        <nav class="navbar navbar-expand-sm navbar-light py-3 px-5" style="font-weight: 500;">
            <a class="navbar-brand" href="#" style="font-size: 1rem;">Varkala</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- List of dropdown -->
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <!-- Home dropdown -->
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-custom" href="#" id="Home" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu" aria-labelledby="Home">
                            <a class="dropdown-item" href="#">Home v.1</a>
                            <a class="dropdown-item" href="#">Home v.2</a>
                        </div>
                    </li>
                    <!-- Shop dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-custom" href="#" id="Shop" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu py-0" style="border: 0!important;" aria-labelledby="Shop">
                            <div class="container-fluid " style="height: 55vh; min-width: 700px;">
                                <div class="row h-100">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-6 py-5">
                                                <h6 class="dropdown-header text-dark" style="font-weight: 700;">
                                                    Shop pages
                                                </h6>
                                                <a href="" class="dropdown-item">Full width</a>
                                                <a href="" class="dropdown-item">Full width with category menu</a>
                                                <a href="" class="dropdown-item">Full width with big products</a>
                                                <a href="" class="dropdown-item">Boxed</a>
                                                <a href="" class="dropdown-item">Boxed & sidebar</a>
                                                <a href="" class="dropdown-item">Subcategories</a>
                                            </div>
                                            <div class="col-6 py-5">
                                                <h6 class="dropdown-header text-dark" style="font-weight: 700;">
                                                    Product pages
                                                </h6>
                                                <a href="" class="dropdown-item">Product with sticky-info</a>
                                                <a href="" class="dropdown-item">Product with background</a>
                                                <a href="" class="dropdown-item">Product standard</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 bg-cover"
                                        style="background-image: url(https://images.pexels.com/photos/794064/pexels-photo-794064.jpeg?cs=srgb&dl=beauty-casual-curly-794064.jpg&fm=jpg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Icons Menu dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-custom" href="#" id="IconsMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Icons Menu</a>
                        <div class="dropdown-menu" aria-labelledby="IconsMenu">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                    <!-- Template dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-custom" href="#" id="Template" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Template</a>
                        <div class="dropdown-menu" aria-labelledby="Template">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>

                <!-- Search Box -->
                <form class="form-inline form-underlined my-3 my-lg-0">
                    <input class="search-box-custom p-2" type="text" placeholder="Search">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </form>

                <!-- 3 Icons -->
                <ul class="list-inline ml-5 d-flex align-items-center mb-0"
                    style="font-size: 1.5rem; font-weight: 100;">
                    <li class="list-inline-item mr-3">
                        <button type="button" class="close" id="userBtn"><i class="far fa-user"></i></button>
                        <!--User Modal -->
                        <div class="modal" id="userModal" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content container">
                                    <button type="button" class="close close-absolute" data-dismiss="modal"
                                        aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <div class="modal-body py-5">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link nav-custom active" id="login-tab" data-toggle="tab"
                                                    href="#login" role="tab" aria-controls="login"
                                                    aria-selected="true">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-custom" id="register-tab" data-toggle="tab"
                                                    href="#register" role="tab" aria-controls="register"
                                                    aria-selected="false">Register</a>
                                            </li>
                                        </ul>
                                        <hr style="color: yellow;">
                                        <div class="tab-content" id="userTabContent">
                                            <!-- Login -->
                                            <div class="tab-pane fade show active" id="login" role="tabpanel"
                                                aria-labelledby="login-tab">
                                                <form action="#" method="post">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label-custom">Email</label>
                                                        <input type="text" class="form-control" id="email" />
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="password"
                                                                    class="form-label-custom">Password</label>
                                                            </div>
                                                            <div class="col text-right">
                                                                <span><a href="#" id="forgotPassword">Forgot
                                                                        password?</a></span>
                                                            </div>
                                                        </div>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Password" />

                                                    </div>
                                                    <div class="form-check pl-0">

                                                        <label class="form-check-label container px-4"
                                                            for="remembercheck">Remember me for 30 days
                                                            <input class="check-box-custom" type="checkbox"
                                                                id="remembercheck" name="remembercheck"
                                                                value="remembercheck" />
                                                            <span class="check-mark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="py-2">
                                                        <button type="submit"
                                                            class="btn w-100 btn-outline-dark btn-slide text-uppercase">
                                                            <i class="fas fa-sign-in-alt mr-2"></i>
                                                            Log in
                                                        </button>
                                                    </div>
                                                </form>
                                                <!-- HR with centered text -->

                                                <div class="hr-text" data-content="OR">
                                                </div>


                                                <div class="text-center py-4">
                                                    <button class="btn btn-outline-warning btn-slide px-3 py-2"
                                                        style="letter-spacing: 0!important;">
                                                        <i class="fab fa-facebook-f" style="color: yellow;"></i>
                                                    </button>
                                                    <button class="btn btn-outline-secondary btn-slide px-3 py-2"
                                                        style="letter-spacing: 0!important;">
                                                        <i class="fab fa-google"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Register -->
                                            <div class="tab-pane fade" id="register" role="tabpanel"
                                                aria-labelledby="register-tab">
                                                <p class="text-muted" style="font-size: 0.9rem; font-weight: 600;">The
                                                    bedding was hardly able to cover it and seemed
                                                    ready to slide off any moment. His many legs, pit.</p>
                                                <form action="#" method="post">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label-custom">Name</label>
                                                        <input type="text" class="form-control" id="name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="form-label-custom">Email</label>
                                                        <input type="text" class="form-control" id="email" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="form-label-custom">Password</label>
                                                        <input type="password" class="form-control" id="password" />
                                                    </div>
                                                    <div class="py-2">
                                                        <button type="submit"
                                                            class="btn w-100 btn-outline-dark btn-slide text-uppercase">
                                                            <i class="far fa-user"></i>
                                                            Register
                                                        </button>
                                                    </div>
                                                </form>
                                                <!-- HR with centered text -->

                                                <div class="hr-text" data-content="OR CONNECT WITH">
                                                </div>


                                                <div class="text-center py-4">
                                                    <button class="btn btn-outline-warning btn-slide px-3 py-2"
                                                        style="letter-spacing: 0!important;">
                                                        <i class="fab fa-facebook-f" style="color: yellow;"></i>
                                                    </button>
                                                    <button class="btn btn-outline-secondary btn-slide px-3 py-2"
                                                        style="letter-spacing: 0!important;">
                                                        <i class="fab fa-google"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item mr-3">

                        <button type="button" class="close">
                            <span class="badge badge-warning badge-icon">3</span>
                            <i class="far fa-heart"></i>
                        </button>

                    </li>
                    <li class="list-inline-item mr-3">
                        <button type="button" class="close" id="cartModalBtn">
                            <span class="badge badge-warning badge-icon">5</span>
                            <i class="fas fa-shopping-bag"></i></button>
                    </li>
                    <li class="list-inline-item mr-3">
                        <button type="button" class="close" id="modalRightBtn"><i class="fas fa-bars"></i></button>
                        <!-- Modal Right -->
                        <div class="modal modal-right" id="modalRight" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content h-100 container">
                                    <div class="modal-header">
                                        <button type="button" class="close close-rotate" style="font-size: 2.2rem;"
                                            data-dismiss="modal" aria-label="Close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3 class="mb-5" style="font-size: 1.2rem; font-weight: 800;">Varkala</h3>
                                        <ul class="nav flex-column nav-modal-custom mb-5">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#" tabindex="-1"
                                                    aria-disabled="true">Disabled</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-custom" id="#dropDownLink"
                                                    data-toggle="dropdown">Dropdown link</a>
                                                <div class="dropdown-menu dropdown-menu-custom"
                                                    aria-labelledby="dropDownLink">
                                                    <a href="#" class="dropdown-item">Action</a>
                                                    <a href="#" class="dropdown-item">Another action</a>
                                                    <a href="#" class="dropdown-item">Something else here</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-inline d-flex align-items-center mb-4"
                                            style="font-size: 1rem; font-weight: 500;">
                                            <li class="list-inline-item ">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <p id="fa-phone-custom" style="margin: 0">020-800-456-747</p>
                                            </li>
                                        </ul>
                                        <p class="text-muted" style="font-size: 0.875rem; font-weight: 600;">Samsa was a
                                            travelling salesman - and above it there hung a picture that he had recently
                                            cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- End 3 Icons -->
            </div>
        </nav>
        <!-- End Bottom header -->
    </header>

    <body>
        <!-- Slider main container -->
        <div class="swiper-container main-swiper-container" style="height: 95vh; width: 100%; min-height: 600px;">
            <div class="swiper-wrapper">
                <!-- Slide 1-->
                <div class="swiper-slide bg-cover" style="background-image: url(Image/img-slide1.jpg)">
                    <div class="container-fluid px-5 h-100">
                        <div class="row h-100 justify-content-center align-items-center" data-swiper-parallax="-500">
                            <div class="col col-lg-5 offset-lg-5">
                                <div class="subtitle subtitle-custom py-2">OUR ALL-TIME FAVOURITES</div>
                                <h1 class="h1-custom mb-3">Blouses & Tops</h1>
                                <p class="text-light mb-5" style="font-weight: 500;">The bedding was hardly able to
                                    cover it and seemed ready to slide off any moment. His many legs, pit</p>
                                <button class="btn btn-dark btn-slide test-uppercase py-2">DISCOVER MORE</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Slide 2-->
                <div class="swiper-slide bg-cover" style="background-image: url(Image/img-slide2.jpg)">
                    <!-- Each slide has parallax title -->
                    <div class="container-fluid px-5 h-100">
                        <div class="row h-100 justify-content-center align-items-center text-center"
                            data-swiper-parallax="-30%">
                            <div class="col col-lg-5">
                                <div class="subtitle subtitle-custom py-2 text-uppercase">BLUE & WHITE</div>
                                <h1 class="h1-custom mb-5">Linen and denim</h1>
                                <button class="btn btn-dark btn-slide text-uppercase py-2">START SHOPPING</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3-->
                <div class="swiper-slide bg-cover" style="background-image: url(Image/img-slide3.jpg)">
                    <!-- Each slide has parallax title -->
                    <div class="container-fluid px-5 h-100">
                        <div class="row h-100 justify-content-start align-items-center" data-swiper-parallax="-500">
                            <div class="col col-lg-5">
                                <div class="subtitle subtitle-custom py-2 text-uppercase">SNEAKERS</div>
                                <h1 class="h1-custom mb-5">For every occassion</h1>
                                <button class="btn btn-dark btn-slide text-uppercase py-2">START SHOPPING</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- Women or Men -->
        <div class="bg-light" style="padding-bottom: 6rem; padding-top: 6rem;">
            <div class="container" style="height: 95vh;">
                <div class="row justify-content-between h-100">
                    <div class="col-6 h-100">
                        <div class="img-hover">
                            <h1 class="img-text text-white">Men</h1>
                            <div class="bg-cover" style="background-image: url(Image/men.jpg)">
                            </div>
                        </div>

                    </div>
                    <div class="col-6 h-100">
                        <div class="img-hover">
                            <h1 class="img-text text-white">Women</h1>
                            <div class="bg-cover" style="background-image: url(Image/women.jpg">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- New Arrivals -->
        <div class="container py-5">
            <div class="row justify-content-center ">
                <div class="col-9 text-center">
                    <h1 class="my-5" style="font-size: 4.5rem">New Arrivals</h1>
                    <p class="text-param text-secondary">One morning, when Gregor Samsa woke from troubled dreams, he
                        found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                        if he lifted his head a little he could see his brown belly, slightly domed and divided by
                        arches into stiff sections</p>
                </div>
            </div>

        </div>
        <!-- Catalogies -->
        <div class="container pb-3 pt-5">
            <div class="row justify-content-between">
                <div class="col-5">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" style="color: black">All Products</a></li>
                        <li class="list-inline-item"><a href="#" class="link">Clothing</a></li>
                        <li class="list-inline-item"><a href="#" class="link">Bags</a></li>
                        <li class="list-inline-item"><a href="#" class="link">Shoes</a></li>
                        <li class="list-inline-item"><a href="#" class="link">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-2"><a href="#" id="products-word" class="text-uppercase">ALL PRODUCTS</a></div>
            </div>
        </div>
        <!-- 12 Item -->
        <div class="container pb-5">
            <div class="row">
                <!-- Item 1 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <span class="badge badge-info badge-product">Fresh</span>
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Item 2 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 3 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 4 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 5 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <span class="badge badge-warning badge-product">Sale</span>
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 6 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 7 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <span class="badge badge-dark badge-product">Sold out</span>
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 8 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 9 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 10 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 11 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Item 12 -->
                <div class="col-2">
                    <div class="product mb-3">
                        <div class="product-img-container">
                            <a href="#">
                                <div class="product-swap-img">
                                    <img class="img-fluid" src="Image/product1-head.jpg" alt="">
                                    <img class="img-fluid img-swap" src="Image/product1-tail.jpg" alt="">
                                </div>
                                <div class="bar-hover bg-light p-3 d-flex justify-content-between w-100 ">
                                    <a href="#" class="text-dark" style="font-size: 0.9rem;">Add to cart</a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-expand"></i></a>
                                </div>
                            </a>
                        </div>

                        <div class="product-detail py-3">
                            <h6>
                                <a href="#" class="text-dark" style="font-weight: 700">White Tee</a>
                            </h6>
                            <span class="text-muted" style="font-weight: 600; font-size: 0.9rem;">$40.00</span>
                            <div class="product-vote">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Deal of the week -->
        <div class="pt-4" style="height: 80vh; width: 100%; min-height: 500px;">
            <div class="bg-cover" style="background-image: url(Image/dealoftheweek.jpg); z-index: 1000;">
                <div class="container-fluid h-100 py-5">
                    <div class="row h-100">
                        <div class="col-5">
                            <div id="dealoftheweek" class="subtitle subtitle-custom text-uppercase mb-4">Deal of the
                                week
                            </div>
                            <h3 style="font-size:2.5rem; font-weight: 800;">Oversized denim jacket</h3>
                            <div class="text-muted my-4" style="font-weight: 500;">
                                <span class="mr-3" style="text-decoration: line-through;">$129.00</span>
                                <span>$79.00</span>
                            </div>
                            <div>
                                <span class="badge badge-danger p-3"
                                    style="font-size: 0.7rem; border-radius: 0; font-weight: 900;" disabled>$50
                                    off</span>
                            </div>
                            <div class="bg-white my-4" style="box-shadow: 0 0 1rem rgba(0,0,0,0.15);">
                                <div class="row p-4 justify-content-between" style="font-weight: 700">
                                    <div class="col text-center">
                                        <h5 class="font-weight-bold" id="days" style="font-size: 1.7rem;"></h5>
                                        <p class="text-muted mb-0">days</p>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-bold" id="hours" style="font-size: 1.7rem;"></h5>
                                        <p class="text-muted mb-0">hours</p>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-bold" id="minutes" style="font-size: 1.7rem;"></h5>
                                        <p class="text-muted mb-0">minutes</p>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-bold" id="seconds" style="font-size: 1.7rem;"></h5>
                                        <p class="text-muted mb-0">seconds</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-slide btn-outline-dark text-uppercase">
                                    Shop now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- History -->
        <div class="container py-5">

            <h5 class="my-3 text-uppercase font-weight-bold" style="color: #bcac76; letter-spacing: 0.3rem;">OUR HISTORY
            </h5>
            <p class="text-secondary text-param">One morning, when Gregor Samsa woke from troubled dreams, he found
                himself transformed
                in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he
                could see his brown belly, slightly domed and divided by arches into stiff sections
            </p>
            </br>
            <p class="text-secondary text-param">
                He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering
                legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.
            </p>

        </div>
        <!-- Logo -->
        <div class="container">
            <div class="swiper-container logos-swiper-container py-5 mb-5"
                style="height: 20vh; width: 100%; min-height: 200px;">
                <div class="swiper-wrapper">
                    <!-- Logo 0 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/fblogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 1 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/meslogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 2 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/twitterlogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 3 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/inslogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 4 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/meslogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 5 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/fblogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 6 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/inslogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 7 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/meslogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 8 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/inslogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                    <!-- Logo 9 -->
                    <div class="swiper-slide h-auto d-flex justify-content-center align-items-center">
                        <img src="./Image/logo/fblogo.png" class="img-fluid logo-swiper" alt="">
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </body>
    <footer>
        <!-- Top footer -->
        <div class="bg-light py-5 mb-5">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3 col-md-3 col-sm-6 py-4">
                        <div class="font-weight-bold mb-1">Free shipping & return</div>
                        <div class="font-weight-light">Free Shipping over $300</div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 py-4">
                        <div class="font-weight-bold mb-1">Free shipping & return</div>
                        <div class="font-weight-light">Free Shipping over $300</div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 py-4">
                        <div class="font-weight-bold mb-1">Free shipping & return</div>
                        <div class="font-weight-light">Free Shipping over $300</div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 py-4">
                        <div class="font-weight-bold mb-1">Free shipping & return</div>
                        <div class="font-weight-light">Free Shipping over $300</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Middle footer -->
        <div class="py-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-5 pr-5">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold">Be in touch</li>
                            <li class="text-muted my-3">
                                <small class="text-secondary" style="font-size: 0.9rem; font-weight: 600;">Lorem ipsum
                                    dolor sit amet, consectetur
                                    adipisicing elit. At itaque temporibus.</small>
                            </li>
                            <li>
                                <form class="form-inline form-underlined my-3 my-lg-0 justify-content-between">
                                    <input class="search-box-custom p-2" type="text" placeholder="Your Email Address">
                                    <a href="#">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <ul class="list-unstyled col">
                                <li class="font-weight-bold mb-3">Shop</li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">For Women</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">For Men</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Stores</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Our Blog</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Shop</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col">
                                <li class="font-weight-bold mb-3">Shop</li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">For Women</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">For Men</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Stores</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Our Blog</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Shop</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col">
                                <li class="font-weight-bold mb-3">Shop</li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">For Women</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">For Men</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Stores</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Our Blog</a>
                                </li>
                                <li class="text-muted my-2">
                                    <a href="#" class="link-footer">Shop</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Bottom footer -->
        <div class="py-4">
            <div class="container">
                <div style="font-size: 0.85rem; font-weight: 500;" class="row text-secondary">
                    <div class="col-4">
                        <p>© 2019 Your company. All rights reserved.</p>
                    </div>
                    <div class="col-8 ">
                        <ul class="list-inline text-right">
                            <li class="list-inline-item"><a href="#" class="text-muted">Terms & Conditions</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted">Privacy & cookies</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted">Accessibility</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted">Customer Data Promise</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./asset/js/swiper-slider.js"></script>
    <script src="./asset/js/aos-product.js"></script>
</body>

</html>