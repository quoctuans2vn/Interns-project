<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
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
    <!-- Leaflet map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
    <!--  -->
    <script src="./asset/js/bootstrap.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- Header -->
    <header class="header-absolute">
        <!-- Top header -->
        <div class="bg-gainsboro container-fluid py-3 px-lg-5" style="font-size: 0.875rem">
            <div class="row align-items-center">
                <!-- Icon fb, twitter -->
                <div class="d-none col-md-4 d-md-block">
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
                <div class="col-12 col-sm-6 col-md-4 text-md-center text-left">
                    <p style="margin: 0;">Free in-store delivery</p>
                </div>
                <!-- Dropdown button -->
                <div class="d-none col-sm-6 col-md-4 d-sm-flex justify-content-end">
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
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-5" id="navbar-changebg" style="font-weight: 500;">
            <a class="navbar-brand" href="#" style="font-size: 1rem;">Varkala</a>
            <!-- 3 Icons small viewport -->
            <ul class="d-lg-none list-inline ml-5 d-flex align-items-center mb-0"
                style="font-size: 1.5rem; font-weight: 100;">
                <li class="list-inline-item mr-3">
                    <button type="button" class="close" id="userBtn"><i class="far fa-user"></i></button>
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
            </ul>
            <!-- End 3 Icons small viewport -->
            <button class="button-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span>
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                        clip-rule="evenodd">
                        <path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2" />
                        <path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z" /></svg>
                </span>
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
                            <div class="container-fluid" style="min-width: 750px; display: block;">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 py-lg-5">
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
                                    <div class="col-lg-4 col-sm-6 py-lg-5">
                                        <h6 class="dropdown-header text-dark" style="font-weight: 700;">
                                            Product pages
                                        </h6>
                                        <a href="" class="dropdown-item">Product with sticky-info</a>
                                        <a href="" class="dropdown-item">Product with background</a>
                                        <a href="" class="dropdown-item">Product standard</a>
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <img class="bg-img"
                                            src="https://images.pexels.com/photos/794064/pexels-photo-794064.jpeg?cs=srgb&dl=beauty-casual-curly-794064.jpg&fm=jpg"
                                            alt="">
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
                            <div class="container-fluid icons-list px-5 px-sm-4 py-lg-5 px-lg-4"
                                style="min-width: auto; display: block;">
                                <div class="row">
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-2 text-center mb-lg-5 mb-2">
                                        <a href="#">
                                            <img class="mb-2" src="https://img.icons8.com/ios/50/000000/trousers.png">
                                            <h6 class="h6-icons">Trousers</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-none d-lg-block anounce">Don't miss our biggest sales this year. Use the
                                    code "SUMMER35" at checkout until Jun. 15!</div>
                            </div>
                        </div>
                    </li>
                    <!-- Template dropdown -->
                    <li class="nav-item dropdown" style="position: static;">
                        <a class="nav-link dropdown-custom" href="#" id="Template" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Template</a>
                        <div class="dropdown-menu menu-template" aria-labelledby="Template">
                            <div class="row p-lg-5 px-4">
                                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
                                    <!-- Menu inside dropdown -->
                                    <img src="https://images.pexels.com/photos/2832465/pexels-photo-2832465.jpeg?cs=srgb&dl=adult-alluring-attractive-2832465.jpg&fm=jpg"
                                        class="img-fluid mb-3 d-none d-lg-block" alt="">
                                    <h6 style="font-weight: 700;">Homepage</h6>
                                    <ul class="list-unstyled mb-lg-5 mb-3">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.1</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.2</a>
                                        </li>
                                    </ul>
                                    <h6 style="font-weight: 700;">Category</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with category menu</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with big products</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed & sidebar</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Subcategories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
                                    <!-- Menu inside dropdown -->
                                    <img src="https://images.pexels.com/photos/2832465/pexels-photo-2832465.jpeg?cs=srgb&dl=adult-alluring-attractive-2832465.jpg&fm=jpg"
                                        class="img-fluid mb-3 d-none d-lg-block" alt="">
                                    <h6 style="font-weight: 700;">Homepage</h6>
                                    <ul class="list-unstyled mb-lg-5 mb-3">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.1</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.2</a>
                                        </li>
                                    </ul>
                                    <h6 style="font-weight: 700;">Category</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with category menu</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with big products</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed & sidebar</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Subcategories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
                                    <!-- Menu inside dropdown -->
                                    <img src="https://images.pexels.com/photos/2832465/pexels-photo-2832465.jpeg?cs=srgb&dl=adult-alluring-attractive-2832465.jpg&fm=jpg"
                                        class="img-fluid mb-3 d-none d-lg-block" alt="">
                                    <h6 style="font-weight: 700;">Homepage</h6>
                                    <ul class="list-unstyled mb-lg-5 mb-3">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.1</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.2</a>
                                        </li>
                                    </ul>
                                    <h6 style="font-weight: 700;">Category</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with category menu</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with big products</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed & sidebar</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Subcategories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0">
                                    <!-- Menu inside dropdown -->
                                    <img src="https://images.pexels.com/photos/2832465/pexels-photo-2832465.jpeg?cs=srgb&dl=adult-alluring-attractive-2832465.jpg&fm=jpg"
                                        class="img-fluid mb-3 d-none d-lg-block" alt="">
                                    <h6 style="font-weight: 700;">Homepage</h6>
                                    <ul class="list-unstyled mb-lg-5 mb-3">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.1</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Home v.2</a>
                                        </li>
                                    </ul>
                                    <h6 style="font-weight: 700;">Category</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with category menu</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Full width with big products</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Boxed & sidebar</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="menu-template-link">Subcategories</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- Search Box -->
                <form class="input-group form-underlined my-3 my-lg-0 pr-3" style="width: auto;">
                    <input class="search-box-custom form-control pl-3" type="text" placeholder="Search" />
                    <div class="input-group-append">
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </form>

                <!-- 3 Icons large viewport -->
                <ul class="d-none list-inline ml-5 d-lg-flex align-items-center mb-0"
                    style="font-size: 1.5rem; font-weight: 100;">
                    <li class="list-inline-item mr-3">
                        <button type="button" class="close" id="userBtn" data-toggle="modal" data-target="#userModal"><i
                                class="far fa-user"></i></button>
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
                    </li>
                </ul>
                <!-- End 3 Icons large viewport -->
            </div>
        </nav>
        <!-- End Bottom header -->
    </header>

    <!-- Banner Parallax -->
    <section class="parallax" style="background-image: url(Image/img-slide2.jpg)">
        <div class="container">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb text-dark">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
            <!-- Hero content -->
            <div class="hero-content">
                <h1 class="hero-heading">Blog</h1>
                <p style="font-size: 1.25rem;">As am hastily invited settled at limited civilly fortune me. Really
                    spring in extent an by. Judge but built party world. Of so am he remember although required.
                    Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="py-6">
        <!-- Post -->
        <div class="container">
            <div class="row mx-lg-n5">
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-lg-4 col-sm-6 mb-5 px-lg-5">
                    <div class="post">
                        <a href="post.html" class="d-block mb-4">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg?cs=srgb&dl=beautiful-fashion-fashionable-1485781.jpg&fm=jpg"
                                alt="" />
                        </a>
                        <h6 class="mb-2"><a href="post.html" class="subject-post">Pellentesque habitant morbi</a></h6>

                        <p class="text-sm text-secondary"><a href="#" class="text-uppercase mr-2 word-gold"
                                style="letter-spacing: 0.15rem; font-size: 0.7rem;">Fashion and Style</a>
                            January 16, 2019
                        </p>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-between">
                    <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-left"></i>
                            Older posts
                        </a>
                    </li>
                    <li class="page-item  disabled"><a href="#" class="page-link">Newer posts
                            <i class="fas fa-chevron-right"></i>
                        </a>

                    </li>
                    </li>
                </ul>
            </nav>
        </div>

    </section>

    <!--User Modal -->
    <div class="modal" id="userModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content container">
                <button type="button" class="close close-absolute" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body py-5">
                    <ul class="nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link nav-custom active" id="login-tab" data-toggle="tab" href="#login"
                                role="tab" aria-controls="login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom" id="register-tab" data-toggle="tab" href="#register"
                                role="tab" aria-controls="register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <hr style="color: yellow;">
                    <div class="tab-content" id="userTabContent">
                        <!-- Login -->
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="email" class="form-label-custom">Email</label>
                                    <input type="text" class="form-control" id="email" />
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="password" class="form-label-custom">Password</label>
                                        </div>
                                        <div class="col text-right">
                                            <span><a href="#" id="forgotPassword">Forgot
                                                    password?</a></span>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control" id="password" placeholder="Password" />

                                </div>
                                <div class="form-check pl-0">

                                    <label class="form-check-label container px-4" for="remembercheck">Remember me
                                        for 30 days
                                        <input class="check-box-custom" type="checkbox" id="remembercheck"
                                            name="remembercheck" value="remembercheck" />
                                        <span class="check-mark"></span>
                                    </label>
                                </div>
                                <div class="py-2">
                                    <button type="submit" class="btn w-100 btn-outline-dark btn-slide text-uppercase">
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
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
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
                                    <button type="submit" class="btn w-100 btn-outline-dark btn-slide text-uppercase">
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
    <!-- Modal Right -->
    <div class="modal modal-right" id="modalRight" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content h-100 container">
                <div class="modal-header">
                    <button type="button" class="close close-rotate" style="font-size: 2.2rem;" data-dismiss="modal"
                        aria-label="Close">
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
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-custom" id="#dropDownLink" data-toggle="dropdown">Dropdown
                                link</a>
                            <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropDownLink">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline d-flex align-items-center mb-4" style="font-size: 1rem; font-weight: 500;">
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
    <footer>
        <!-- Top footer -->
        <div class="bg-light py-lg-6 py-5 mb-5 ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-3 col-sm-6 py-4">
                        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 24 24">
                            <path
                                d="M2 11.741c-1.221-1.009-2-2.535-2-4.241 0-3.036 2.464-5.5 5.5-5.5 1.706 0 3.232.779 4.241 2h4.259c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.156-.616 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-2c-.552 0-1-.448-1-1v-6.259zm6 6.059c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-7.207-11.8c.135.477.207.98.207 1.5 0 3.036-2.464 5.5-5.5 5.5-.52 0-1.023-.072-1.5-.207v4.207h1.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6h-2v-9h-2.207zm5.207 4v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-10.5-6c1.932 0 3.5 1.568 3.5 3.5s-1.568 3.5-3.5 3.5-3.5-1.568-3.5-3.5 1.568-3.5 3.5-3.5zm.5 3h2v1h-3v-3h1v2z" />
                        </svg>
                        <div class="service-text">
                            <div class="font-weight-bold mb-1">Free shipping & return</div>
                            <div class="font-weight-light text-muted">Free Shipping over $300</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 py-4">
                        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 24 24">
                            <path
                                d="M2 11.741c-1.221-1.009-2-2.535-2-4.241 0-3.036 2.464-5.5 5.5-5.5 1.706 0 3.232.779 4.241 2h4.259c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.156-.616 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-2c-.552 0-1-.448-1-1v-6.259zm6 6.059c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-7.207-11.8c.135.477.207.98.207 1.5 0 3.036-2.464 5.5-5.5 5.5-.52 0-1.023-.072-1.5-.207v4.207h1.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6h-2v-9h-2.207zm5.207 4v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-10.5-6c1.932 0 3.5 1.568 3.5 3.5s-1.568 3.5-3.5 3.5-3.5-1.568-3.5-3.5 1.568-3.5 3.5-3.5zm.5 3h2v1h-3v-3h1v2z" />
                        </svg>
                        <div class="service-text">
                            <div class="font-weight-bold mb-1">Free shipping & return</div>
                            <div class="font-weight-light text-muted">Free Shipping over $300</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 py-4">
                        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 24 24">
                            <path
                                d="M2 11.741c-1.221-1.009-2-2.535-2-4.241 0-3.036 2.464-5.5 5.5-5.5 1.706 0 3.232.779 4.241 2h4.259c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.156-.616 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-2c-.552 0-1-.448-1-1v-6.259zm6 6.059c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-7.207-11.8c.135.477.207.98.207 1.5 0 3.036-2.464 5.5-5.5 5.5-.52 0-1.023-.072-1.5-.207v4.207h1.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6h-2v-9h-2.207zm5.207 4v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-10.5-6c1.932 0 3.5 1.568 3.5 3.5s-1.568 3.5-3.5 3.5-3.5-1.568-3.5-3.5 1.568-3.5 3.5-3.5zm.5 3h2v1h-3v-3h1v2z" />
                        </svg>
                        <div class="service-text">
                            <div class="font-weight-bold mb-1">Free shipping & return</div>
                            <div class="font-weight-light text-muted">Free Shipping over $300</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 py-4">
                        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 24 24">
                            <path
                                d="M2 11.741c-1.221-1.009-2-2.535-2-4.241 0-3.036 2.464-5.5 5.5-5.5 1.706 0 3.232.779 4.241 2h4.259c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.156-.616 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-2c-.552 0-1-.448-1-1v-6.259zm6 6.059c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-7.207-11.8c.135.477.207.98.207 1.5 0 3.036-2.464 5.5-5.5 5.5-.52 0-1.023-.072-1.5-.207v4.207h1.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6h-2v-9h-2.207zm5.207 4v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-10.5-6c1.932 0 3.5 1.568 3.5 3.5s-1.568 3.5-3.5 3.5-3.5-1.568-3.5-3.5 1.568-3.5 3.5-3.5zm.5 3h2v1h-3v-3h1v2z" />
                        </svg>
                        <div class="service-text">
                            <div class="font-weight-bold mb-1">Free shipping & return</div>
                            <div class="font-weight-light text-muted">Free Shipping over $300</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Middle footer -->
        <div class="py-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 pr-lg-5 mb-5">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold">Be in touch</li>
                            <li class="text-muted my-3">
                                <small class="text-secondary" style="font-size: 0.9rem; font-weight: 600;">Lorem ipsum
                                    dolor sit amet, consectetur
                                    adipisicing elit. At itaque temporibus.</small>
                            </li>
                            <li>
                                <form class="input-group form-underlined my-3 my-lg-0 pr-3 justify-content-between">
                                    <input class="search-box-custom form-control pl-0" type="text"
                                        placeholder="Your Email Address" />
                                    <div class="input-group-append">
                                        <i class="far fa-envelope"></i>
                                    </div>

                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="#footerMenu0" class="d-lg-none h6-toggler my-3" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="footerMenu0">Shop
                                    <span class="footer-toggler-icon"></span>
                                </a>
                                <!--Footer Collapsible menu-->
                                <div id="footerMenu0" class="expand-lg collapse">
                                    <ul class="list-unstyled">
                                        <li class="font-weight-bold mb-3 d-none d-lg-block">
                                            <h6>Shop</h6>
                                        </li>
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
                            <div class="col-lg-4">
                                <a href="#footerMenu1" class="d-lg-none h6-toggler my-3" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="footerMenu1">Company
                                    <span class="footer-toggler-icon"></span>
                                </a>
                                <!--Footer Collapsible menu-->
                                <div id="footerMenu1" class="expand-lg collapse">
                                    <ul class="list-unstyled">
                                        <li class="font-weight-bold mb-3 d-none d-lg-block">
                                            <h6>Shop</h6>
                                        </li>
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
                            <div class="col-lg-4">
                                <a href="#footerMenu2" class="d-lg-none h6-toggler my-3" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="footerMenu2">Your
                                    account
                                    <span class="footer-toggler-icon"></span>
                                </a>
                                <!--Footer Collapsible menu-->
                                <div id="footerMenu2" class="expand-lg collapse">
                                    <ul class="list-unstyled">
                                        <li class="font-weight-bold mb-3 d-none d-lg-block">
                                            <h6>Shop</h6>
                                        </li>
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
            </div>
        </div>
        <!-- Bottom footer -->
        <div class="py-4">
            <div class="container">
                <div style="font-size: 0.85rem; font-weight: 500;" class="row text-secondary">
                    <div class="col-12 col-lg-4 text-center text-lg-left">
                        <p>© 2019 Your company. All rights reserved.</p>
                    </div>
                    <div class="col-12 col-lg-8 text-lg-right text-center">
                        <ul class="list-inline">
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
    <script src="./asset/js/modal-custom.js"></script>
    <script src="./asset/js/aos-product.js"></script>
    <script src="./asset/js/changeCSS.js"></script>
</body>