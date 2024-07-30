<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/front/assets/images/fav.png">
    <title>TechConnect</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="/front/assets/css/plugins/fontawesome-6.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="/front/assets/css/plugins/swiper.css">
    <!-- <link rel="stylesheet" href="/front/assets/css/plugins/aos.css"> -->
    <link rel="stylesheet" href="/front/assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/metismenu.css">
    <!-- <link rel="stylesheet" href="/front/assets/css/plugins/hover-revel.css"> -->
    <!-- <link rel="stylesheet" href="/front/assets/css/plugins/timepickers.min.css"> -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/front/assets/css/vendor/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="/front/assets/css/style.css">
</head>

<body class="handyman-h">

    <!-- header style two -->
    <header class="rts-header-area header-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header--one-main">
                        {{-- <div class="row align-items-center header-top-one">
                            <div class="col-lg-3">
                                <a href="index.html" class="logo-area">
                                    <img src="/front/assets/images/logo/logo-01.png" alt="logo-area">
                                </a>
                            </div>
                            <div class="col-lg-9">
                                <div class="header-right-area">
                                    <!-- single info wrapper -->
                                    <div class="single-info-contact">
                                        <i class="fa-light fa-clock"></i>
                                        <div class="inner-content">
                                            <span>24/7 Service Alltime</span>
                                            <a href="#">
                                                <h6 class="title">Mon (to) Sun: 9:00-5:00</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single info wrapper end -->
                                    <!-- single info wrapper -->
                                    <div class="single-info-contact map">
                                        <i class="fa-light fa-location-dot"></i>
                                        <div class="inner-content">
                                            <span>Company Location</span>
                                            <a href="https://www.google.com/maps" target="_blank">
                                                <h6 class="title">16 Berlin, Germany</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single info wrapper end -->
                                    <!-- button area start -->
                                    <div class="btn-area-header">
                                        <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request Quote <i class="fa-regular fa-arrow-up-right"></i></a>
                                    </div>
                                    <!-- button area end -->
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header-nav-area header--sticky">
                                    <div class="logo-md-sm-device">
                                        <a href="#" class="logo">
                                            <img src="/front/assets/images/logo/logo-01.png" alt="logo">
                                        </a>
                                    </div>

                                    <div class="header-nav main-nav-one">
                                        <nav>
                                            <ul>
                                                <li class="mega">
                                                    <a class="nav-link" href="{{ route('home-page') }}">HOME</a>
                                                    {{-- <ul class="submenu">
                                                        <div class="container flex-mega">
                                                            <li class="menu-item">
                                                                <a class="tag" href="#">Multipage</a>
                                                                <ul class="pages">
                                                                    <li><a class="current" href="index.html">Handyman</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/plumber/">Plumber</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/cleaning/">Cleaning</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/air-condition/">Air Condition</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/electric//">Electric</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="tag" href="#">Onepage</a>
                                                                <ul class="pages">
                                                                    <li><a href="onepage.html">Handyman Onepage</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/plumber/">Plumber Onepage</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/cleaning/">Cleaning Onepage</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/air-condition/">Air Condition Onepage</a></li>
                                                                    <li><a href="https://themewant.com/products/html/drill/electric//">Electric Onepage</a></li>
                                                                </ul>
                                                            </li>
                                                        </div>
                                                    </ul> --}}
                                                </li>
                                                <li><a class="nav-link" href="{{ route('about-page') }}">ABOUT</a></li>
                                                <li class="has-dropdown">
                                                    <a class="nav-link" href="#">REGISTER</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('client.register') }}">Client</a></li>
                                                        <li><a href="{{ route('seller.register') }}">Selelr</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a class="nav-link" href="#">LOGIN</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('admin.login') }}">Admin</a></li>
                                                        <li><a href="{{ route('client.login') }}">Client</a></li>
                                                        <li><a href="{{ route('seller.login') }}">Selller</a></li>
                                                    </ul>
                                                </li>

                                                <li><a class="nav-link" href="{{ route('contact-page') }}">CONTACT</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="actions-area">
                                        <div class="search-btn" id="search">

                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z" fill="#1F1F25" />
                                            </svg>

                                        </div>
                                        <div class="menu-btn" id="">

                                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect y="14" width="20" height="2" fill="#1F1F25" />
                                                <rect y="7" width="20" height="2" fill="#1F1F25" />
                                                <rect width="20" height="2" fill="#1F1F25" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style two End -->


    <!-- header style two -->
    <!-- rts breadcrumb area -->
    <div class="rts-bread-crumb-area ptb--65 bg_image bg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <div class="slug">
                                <a href="#index.html">HOME /</a>
                                <a class="active" href="#index.html">Contact</a>
                            </div>
                            <div class="title">
                                <a href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->
    <!-- header style two End -->

        <!-- rts footer contact info area start -->
        <div class="rts-contact-info-area rts-section-gap">
            <div class="container">
                <div class="row g-24">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-contact--info-wrapper">
                            <div class="thumbnail">
                                <img src="assets/images/footer/03.jpg" alt="img">
                                <div class="icon">
                                    <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.9688 12.5C31.3887 12.5 30.9375 13.0156 30.9375 13.5312V30.0312C30.9375 30.6113 30.4219 31.0625 29.9062 31.0625H3.09375C2.51367 31.0625 2.0625 30.6113 2.0625 30.0312V13.5312C2.0625 13.0156 1.54688 12.5 1.03125 12.5C0.451172 12.5 0 13.0156 0 13.5312V30.0312C0 31.7715 1.35352 33.125 3.09375 33.125H29.9062C31.582 33.125 33 31.7715 33 30.0957V13.5312C33 13.0156 32.4844 12.5 31.9688 12.5ZM4.125 17.9785C4.18945 18.043 4.18945 18.1074 4.18945 18.1719C4.25391 18.2363 4.25391 18.2363 4.31836 18.3008C4.38281 18.3652 4.38281 18.4297 4.44727 18.4941C4.51172 18.4941 4.51172 18.4941 4.51172 18.4941L13.084 24.8105C14.0508 25.5195 15.2109 25.9062 16.5 25.9062C17.7246 25.9062 18.8848 25.5195 19.8516 24.7461L28.4238 18.4297C28.4238 18.4297 28.4238 18.4297 28.4883 18.4297C28.5527 18.3652 28.5527 18.3008 28.6172 18.2363C28.6816 18.1719 28.6816 18.1719 28.7461 18.1074C28.7461 18.043 28.7461 17.9785 28.8105 17.9141C28.8105 17.8496 28.8105 17.7852 28.8105 17.7207C28.8105 17.7207 28.875 17.7207 28.875 17.6562V3.21875C28.875 1.54297 27.457 0.125 25.7812 0.125H7.21875C5.47852 0.125 4.125 1.54297 4.125 3.21875V17.6562C4.125 17.7207 4.125 17.7207 4.125 17.7852C4.125 17.8496 4.125 17.9141 4.125 17.9785ZM6.1875 3.21875C6.1875 2.70312 6.63867 2.1875 7.21875 2.1875H25.7812C26.2969 2.1875 26.8125 2.70312 26.8125 3.21875V17.1406L18.627 23.1348C17.3379 24.1016 15.5977 24.1016 14.3086 23.1348L6.1875 17.1406V3.21875ZM22.6875 15.5938C22.6875 15.0137 22.1719 14.5625 21.6562 14.5625H11.3438C10.7637 14.5625 10.3125 15.0137 10.3125 15.5938C10.3125 16.1094 10.7637 16.5605 11.3438 16.5605H21.6562C22.1719 16.625 22.6875 16.1738 22.6875 15.5938ZM11.3438 10.4375H21.6562C22.1719 10.4375 22.6875 9.92188 22.6875 9.40625C22.6875 8.89062 22.1719 8.43945 21.6562 8.43945H11.3438C10.7637 8.43945 10.3125 8.95508 10.3125 9.40625C10.3125 9.98633 10.7637 10.4375 11.3438 10.4375Z" fill="#FD8F14" />
                                    </svg>
                                </div>
                            </div>
                            <div class="content">
                                <span>Get an email</span>
                                <a href="mailto:webmaster@example.com">
                                    <h5 class="title under-line">info@techconnect.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-contact--info-wrapper">
                            <div class="thumbnail">
                                <img src="assets/images/footer/04.jpg" alt="img">
                                <div class="icon">

                                    <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.9062 12.5H11.3438C10.957 12.5 10.6348 12.6289 10.3125 12.6934V4.25C10.3125 3.1543 11.2148 2.1875 12.375 2.1875H26.3613L28.875 4.70117V9.40625C28.875 9.98633 29.3262 10.4375 29.9062 10.4375C30.4219 10.4375 30.9375 9.98633 30.9375 9.40625V4.70117C30.9375 4.18555 30.6797 3.60547 30.293 3.21875L27.8438 0.769531C27.3926 0.382812 26.877 0.125 26.3613 0.125H12.375C10.0547 0.125 8.25 1.99414 8.25 4.25V8.56836C7.86328 8.50391 7.54102 8.375 7.21875 8.375H3.09375C1.35352 8.375 0 9.79297 0 11.4688V30.0312C0 31.7715 1.35352 33.125 3.09375 33.125H7.21875C7.99219 33.125 8.70117 32.8672 9.28125 32.3516C9.79688 32.8672 10.5059 33.125 11.3438 33.125H29.9062C31.582 33.125 33 31.7715 33 30.0312V15.5938C33 13.918 31.582 12.5 29.9062 12.5ZM8.25 30.0312C8.25 30.6113 7.73438 31.0625 7.21875 31.0625H3.09375C2.51367 31.0625 2.0625 30.6113 2.0625 30.0312V11.4688C2.0625 10.9531 2.51367 10.4375 3.09375 10.4375H7.21875C7.73438 10.4375 8.25 10.9531 8.25 11.4688V30.0312ZM30.9375 30.0312C30.9375 30.6113 30.4219 31.0625 29.9062 31.0625H11.3438C10.7637 31.0625 10.3125 30.6113 10.3125 30.0312V15.5938C10.3125 15.0781 10.7637 14.5625 11.3438 14.5625H29.9062C30.4219 14.5625 30.9375 15.0781 30.9375 15.5938V30.0312ZM17.5312 18.1719C16.6289 18.1719 15.9844 18.8809 15.9844 19.7188C15.9844 20.6211 16.6289 21.2656 17.5312 21.2656C18.3691 21.2656 19.0781 20.6211 19.0781 19.7188C19.0781 18.8809 18.3691 18.1719 17.5312 18.1719ZM17.5312 24.3594C16.6289 24.3594 15.9844 25.0684 15.9844 25.9062C15.9844 26.8086 16.6289 27.4531 17.5312 27.4531C18.3691 27.4531 19.0781 26.8086 19.0781 25.9062C19.0781 25.0684 18.3691 24.3594 17.5312 24.3594ZM23.7188 18.1719C22.8164 18.1719 22.1719 18.8809 22.1719 19.7188C22.1719 20.6211 22.8164 21.2656 23.7188 21.2656C24.5566 21.2656 25.2656 20.6211 25.2656 19.7188C25.2656 18.8809 24.5566 18.1719 23.7188 18.1719ZM23.7188 24.3594C22.8164 24.3594 22.1719 25.0684 22.1719 25.9062C22.1719 26.8086 22.8164 27.4531 23.7188 27.4531C24.5566 27.4531 25.2656 26.8086 25.2656 25.9062C25.2656 25.0684 24.5566 24.3594 23.7188 24.3594Z" fill="#FD8F14" />
                                    </svg>

                                </div>
                            </div>
                            <div class="content">
                                <span>Make A Call</span>
                                <a href="tel:+4733378901">
                                    <h5 class="title">+94 76 77 85 941</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-contact--info-wrapper">
                            <div class="thumbnail">
                                <img src="assets/images/footer/05.jpg" alt="img">
                                <div class="icon">

                                    <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3105 15.5625C13.3105 14.4668 12.3438 13.5 11.248 13.5H9.18555C6.86523 13.5 5.06055 15.3691 5.06055 17.625V21.75C5.06055 24.0059 6.92969 25.875 9.18555 25.875H11.248C12.4082 25.875 13.3105 24.9727 13.3105 23.8125V15.5625ZM11.248 23.8125H9.18555C8.02539 23.8125 7.12305 22.9102 7.12305 21.75V17.625C7.12305 16.5293 8.02539 15.5625 9.18555 15.5625H11.248V23.8125ZM25.6855 25.875C27.9414 25.875 29.8105 24.0059 29.8105 21.75V17.625C29.8105 15.3691 27.9414 13.5645 25.6855 13.5645H23.6875C22.5273 13.5645 21.625 14.5312 21.625 15.627V23.877C21.625 25.0371 22.5273 25.9395 23.6875 25.9395H25.6855V25.875ZM23.623 15.5625H25.6211C26.7168 15.5625 27.6836 16.5293 27.6836 17.625V21.75C27.6836 22.9102 26.7168 23.8125 25.6211 23.8125H23.5586L23.623 15.5625ZM19.0469 1.25391C9.12109 0.287109 1.25781 8.21484 1 17.6895L0.935547 18.6562C0.935547 19.2363 1.45117 19.6875 2.03125 19.6875C2.54688 19.6875 2.99805 19.2363 3.0625 18.7207V17.625C3.25586 9.43945 10.1523 2.47852 18.7891 3.25195C26.3301 3.96094 31.9375 10.5352 31.9375 18.0762V28.9688C31.9375 30.6445 30.5195 32.0625 28.8438 32.0625H23.4297C23.752 31.3535 23.752 30.5156 23.3008 29.6777C22.7207 28.582 21.4961 27.9375 20.2715 27.9375H16.5332C15.0508 27.9375 13.6973 28.9688 13.375 30.4512C13.0527 32.4492 14.5352 34.125 16.4043 34.125H28.7148C31.5508 34.125 33.8711 31.8691 33.8711 29.0332V18.0762C34 9.50391 27.5547 2.02734 19.0469 1.25391ZM20.5293 32.0625H16.4043C15.8242 32.0625 15.373 31.6113 15.373 31.0312C15.373 30.5156 15.8242 30 16.4043 30H20.5293C21.0449 30 21.5605 30.5156 21.5605 31.0312C21.5605 31.6113 21.1094 32.0625 20.5293 32.0625Z" fill="#FD8F14" />
                                    </svg>

                                </div>
                            </div>
                            <div class="content">
                                <span>Make A Call</span>
                                <a href="tel:+4733378901">
                                    <h5 class="title">+94 75 713 7565</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-contact--info-wrapper">
                            <div class="thumbnail">
                                <img src="assets/images/footer/06.jpg" alt="img">
                                <div class="icon">

                                    <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.0156 7.34375C17.0156 6.50586 17.6602 5.79688 18.5625 5.79688C19.4004 5.79688 20.1094 6.50586 20.1094 7.34375C20.1094 8.24609 19.4004 8.89062 18.5625 8.89062C17.6602 8.89062 17.0156 8.24609 17.0156 7.34375ZM17.5957 20.2344C15.5332 17.6562 10.8281 11.4043 10.8281 7.85938C10.8281 3.60547 14.2441 0.125 18.5625 0.125C22.8164 0.125 26.2969 3.60547 26.2969 7.85938C26.2969 11.4043 21.5273 17.6562 19.4648 20.2344C19.0137 20.8789 18.0469 20.8789 17.5957 20.2344ZM23.5898 10.1152C24.041 9.08398 24.2344 8.375 24.2344 7.85938C24.2344 4.76562 21.6562 2.1875 18.5625 2.1875C15.4043 2.1875 12.8906 4.76562 12.8906 7.85938C12.8906 8.375 13.0195 9.08398 13.4707 10.1152C13.8574 11.1465 14.502 12.2422 15.1465 13.3379C16.2422 15.1426 17.5312 16.8828 18.5625 18.1719C19.5293 16.8828 20.8184 15.1426 21.9141 13.3379C22.5586 12.2422 23.2031 11.1465 23.5898 10.1152ZM26.1035 14.498C26.1035 14.5625 26.0391 14.5625 25.9746 14.5625C26.4902 13.6602 27.0059 12.6934 27.3926 11.791L34.998 8.76172C35.9648 8.375 37.125 9.08398 37.125 10.1797V27.6465C37.125 28.291 36.7383 28.8711 36.0938 29.0645L26.1035 33.0605C25.9102 33.1895 25.7168 33.1895 25.459 33.125L11.3438 29.0645L2.0625 32.8027C1.0957 33.1895 0 32.4805 0 31.3848V13.918C0 13.2734 0.322266 12.6934 0.966797 12.5L8.89453 9.27734C9.02344 9.98633 9.2168 10.6309 9.47461 11.2754L2.0625 14.2402V30.6113L10.3125 27.3242V19.7188C10.3125 19.2031 10.7637 18.6875 11.3438 18.6875C11.8594 18.6875 12.375 19.2031 12.375 19.7188V27.1953L24.75 30.7402V19.7188C24.75 19.2031 25.2012 18.6875 25.7812 18.6875C26.2969 18.6875 26.8125 19.2031 26.8125 19.7188V30.6113L35.0625 27.3242V10.9531L26.1035 14.498Z" fill="#FD8F14" />
                                    </svg>

                                </div>
                            </div>
                            <div class="content">
                                <span>Go for location</span>
                                <a href="https://www.google.com/maps" target="_blank">
                                    <h5 class="title">45/3 Kandy Road, Nittambuwa</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts footer contact info area end -->






    <!-- Footer style two -->
    <!-- rts footer area one start -->
    <div class="rts-footer-one footer-bg-one ">
        <div class="container">
            {{-- <div class="row g-0 bg-cta-footer-one">
                <div class="col-lg-12">
                    <div class="bg-cta-footer-one wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <a href="#" class="logo-area-footer">
                                    <img src="/front/assets/images/logo/logo-02.png" alt="logo">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <!-- single contact area start -->
                                <div class="single-cta-area">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>Phone Number</p>
                                        <a href="tel:+4733378901">(+202) 2156-2145</a>
                                    </div>
                                </div>
                                <!-- single contact area end -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <!-- single contact area start -->
                                <div class="single-cta-area">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>Email Us Here</p>
                                        <a href="mailto:yourmail@example.com">info@diyer.com</a>
                                    </div>
                                </div>
                                <!-- single contact area end -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <!-- single contact area start -->
                                <div class="single-cta-area last">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>Office Address</p>
                                        <a href="https://www.google.com/maps" target="_blank">251 Hilton, Berlin DE</a>
                                    </div>
                                </div>
                                <!-- single contact area end -->
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
            <div class="row pt--90">
                <div class="col-lg-12">
                    <div class="single-footer-one-wrapper">
                        <div class="single-footer-component first">
                            <div class="title-area">
                                <h5 class="title">About Company</h5>
                            </div>
                            <div class="body">
                                <p class="disc">
                                    Tech Connect Solution is an innovative web platform bridging the gap between customers needing device repairs and skilled freelance technicians. We simplify the process of finding and hiring qualified professionals.
                                </p>
                                <div class="rts-social-style-one">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-footer-component">
                            <div class="title-area">
                                <h5 class="title">Useful Links</h5>
                            </div>
                            <div class="body">
                                <div class="pages-footer">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-arrow-right"></i>
                                                <p>About Us</p>
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-arrow-right"></i>
                                                <p>Contact Us</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-footer-component">
                            <div class="title-area">
                                <h5 class="title">What We Do</h5>
                            </div>
                            <div class="body">
                                <div class="pages-footer">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-arrow-right"></i>
                                                <p>Our Service</p>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-footer-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <p>Copyright 2024. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer area one end -->
    <!-- Footer style two End -->

    <!-- header style two -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>

    <div id="anywhere-home" class="">
    </div>


    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->


    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->



    <!-- jquery js -->
    <script src="/front/assets/js/plugins/jquery.min.js"></script>
    <script src="/front/assets/js/vendor/jqueryui.js"></script>
    <script src="/front/assets/js/plugins/counter-up.js"></script>
    <script src="/front/assets/js/plugins/swiper.js"></script>


    <!-- <script src="/front/assets/js/vendor/twinmax.js"></script> -->
    <!-- <script src="/front/assets/js/vendor/split-text.js"></script> -->
    <!-- <script src="/front/assets/js/plugins/text-plugins.js"></script> -->
    <script src="/front/assets/js/plugins/metismenu.js"></script>


    <script src="/front/assets/js/vendor/waypoint.js"></script>
    <script src="/front/assets/js/vendor/waw.js"></script>


    <script src="/front/assets/js/plugins/gsap.min.js"></script>
    <script src="/front/assets/js/plugins/scrolltigger.js"></script>
    <!-- <script src="/front/assets/js/plugins/aos.js"></script> -->
    <!-- <script src="/front/assets/js/plugins/jquery-ui.js"></script> -->
    <script src="/front/assets/js/plugins/jquery-timepicker.js"></script>
    <!-- <script src="/front/assets/js/vendor/sal.min.js"></script> -->

    <script src="/front/assets/js/plugins/bootstrap.min.js"></script>
    <!-- <script src="/front/assets/js/plugins/jquery-slideNav.js"></script> -->
    <!-- <script src="/front/assets/js/plugins/hover-revel.js"></script> -->
    <!-- <script src="/front/assets/js/plugins/contact-form.js"></script> -->

    <script src="/front/assets/js/main.js"></script>

    <!-- <script src="/front/assets/js/plugins/swip-img.js"></script> -->
    <!-- header style two End -->
</body>

</html>
