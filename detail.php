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
    <!-- Bootstrap select -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <!-- NoUISlider -->
    <link rel="stylesheet" href="./asset/css/nouislider.min.css">
    <script src="./asset/js/nouislider.min.js"></script>
    <!--  -->
    <script src="./asset/js/bootstrap.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- Header -->
    <header>
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
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-5 navbar-boxShadow" id="navbar-changebg"
            style="font-weight: 500;">
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
    <section>
        <div class="container-fluid px-xl-7 pt-5 pb-3 pb-lg-6">
            <div id="addToCartAlert" class="d-block">
                <div class="mb-4 mb-lg-5 alert alert-success">
                    <div class="d-flex align-items-center pr-3">
                        <img class="d-none d-sm-block w-3rem h-3rem flex-shrink-0 mr-3"
                            src="https://img.icons8.com/dusk/64/000000/ok.png">
                        <p class="mb-0">Push-up jeans have been added to your cart. <br
                                class="d-inline-block d-lg-none"><a href="#"
                                class="text-reset text-underline ml-lg-3">View Cart</a></p>
                    </div>
                    <button type="button" data-dismiss="alert" aria-label="Close"
                        class="close close-absolute close-center">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Breadcrumb -->
            <ol class="breadcrumb-detail breadcrumb text-dark px-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="category-full.html">Jeans</a></li>
                <li class="breadcrumb-item active" aria-current="page">Push-up Jeans</li>
            </ol>
            <!-- Main content -->
            <div class="row">
                <div class="col-lg-6 col-xl-7 pt-4 order-2 order-lg-1">
                    <div data-toggle="zoom" data-image="https://images.pexels.com/photos/1831550/pexels-photo-1831550.jpeg?cs=srgb&dl=attractive-beautiful-beauty-1831550.jpg&fm=jpg" style="position: relative;">
                        <img src="https://d19m59y37dris4.cloudfront.net/varkala/1-0/img/product/detail-3-gray.21f669db.jpg"
                            alt="Push-up Jeans 1" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./asset/js/jquery.zoom.min.js"></script>
    <script src="./asset/js/myzoom-image.js"></script>
</body>