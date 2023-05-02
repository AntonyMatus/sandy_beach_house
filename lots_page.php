<?php

    require 'backend/connection.php';

    $sql = "SELECT * FROM lots_table"; 
    $query = $connection->prepare($sql); 
    $query->execute();
    $lots = $query->fetchAll(PDO::FETCH_OBJ);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Lots Page | Sandy Beach House</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="alipes HTML 5 Template " />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />

    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />

    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />

    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />

    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />

    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />

    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />

    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    

    <link rel="stylesheet" href="assets/vendors/alipes-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/alipes.css" />
    <link rel="stylesheet" href="assets/css/alipes-responsive.css" />

    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css" />

    <!-- Toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>

    <!-- Panzoom -->
    <script src='https://unpkg.com/panzoom@9.4.0/dist/panzoom.min.js'></script>
</head>

<body class="custom-cursor" x-data="handlerContact()">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header-two">
            <div class="main-header__top">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <div class="main-menu__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="main-header__top-time">Mon to Sat: 8.00 am - 7.00 pm</p>
                    </div>
                    <div class="main-header__top-right">
                        <ul class="list-unstyled main-header__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Playa Palmeras, Campeche, México.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:contact@sandybeach.com">contact@sandybeach.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.html"><img src="assets/images/resources/Sandy_Beach_Logo.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li>
                                    <a href="index.html">Home</a>
                                    
                                </li>
                                <li>
                                    <a href="about.html">our vision</a>
                                </li>
                                <li >
                                    <a href="#">partners</a>
                                    
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-cart-btn">
                                <div class="main-menu__search-cart-box">
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="contact.html" class="thm-btn main-menu__btn">Schedule a Visit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="services-one bg-blue-strong ">
            <div class="services-one__shape-2 float-bob-x">
                <img src="assets/images/shapes/services-one-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="services-one__left">
                            <div class="section-title text-center">
                                <h2 class="section-title__title text-white">
                                    Owning land in Mexico Is As Easy as 1 - 2 - 3
                                </h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cotizador" class="big-section2 border-color-medium-gray wow animate__fadeIn margin-four-top mt-5 mb-5">
            <div id="container_imagen" class="container-fluid" style="position: relative; z-index: 1; background-color: white;">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-md-6 text-center margin-2-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                        <h5 class="alt-font-teko font-weight-700 text-center text-uppercase text-dark letter-spacing-minus-1px m-0 mb-3">JOIN THE COMMUNITY</h5>
                        <h4 class="alt-font font-weight-500 text-center text-dark text-uppercase">Playa Palmeras</h4>
                    </div>
                    <div class="col-12 margin-four-bottom">
                        <div class="text-center alt-font-TK font-weight-500 text-dark">
                            <span class="color-option option-1 ml-3"></span>  AVAILABLE
                            <span class="color-option option-2 ml-3"></span> DEPOSIT MADE
                            <span class="color-option option-3"></span> PURCHASED
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="d-flex flex-column" style="position: absolute; bottom: -40%; left: 10%;">
                            <button type="button" onclick="zoomIn()" class="btn btn-primary">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button type="button" onclick="zoomOut()" class="btn btn-primary">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mb-5" style="position: relative;" >
                <div class="col-sm-12  col-md-12 mx-auto text-center img-svg mt-5" id="svg-container" >
                    <svg id="Capa_1 scene" class="cotizador-svg2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3902.74 2474.23">
                        <defs><style>.cls-1{fill:none;stroke:#1d1d1b;stroke-miterlimit:10;stroke-width:0.25px;}</style></defs>
                        <polygon points="3851.09 18.38 3851.03 18.29 3850.46 18.68 3850.48 18.72 3831.77 29.19 3831.76 29.18 3831.58 29.3 3718.17 92.76 3696.04 107.11 3696.03 107.1 3695.45 107.48 3695.45 107.49 3565.71 191.61 3476.54 242.03 3476.52 241.99 3476.1 242.28 3438.01 263.82 3437.98 263.77 3437.39 264.16 3437.4 264.16 3418.74 274.71 3418.71 274.67 3418.13 275.05 3418.13 275.06 3405.68 282.1 3388.81 307.69 3388.79 307.7 3388.79 307.71 3384.67 313.96 3249.82 377.62 3210.46 403.58 3092.33 471.45 2933.96 564.46 2778.99 663.31 2615.58 748.78 2462.27 848.49 2425.39 871.48 2425.26 871.54 2425.27 871.56 2306.44 945.66 2145.55 1033.64 2019.88 1114.92 2004.08 1125.3 2003.84 1125.42 2003.86 1125.45 1990.56 1134.19 1929.44 1173.93 1929.28 1174.02 1929.29 1174.03 1837.19 1233.92 1667.11 1385.57 1667.52 1386.13 1720.61 1353.96 1720.62 1354.03 1721.31 1353.95 1721.26 1353.56 1730.25 1348.12 1730.53 1348.07 1730.51 1347.96 1749.68 1336.34 1749.79 1336.31 1749.78 1336.28 1861.07 1268.83 2015.15 1169.18 2015.99 1169.18 2168.56 1069.42 2220.62 1035.47 2220.63 1035.47 2220.63 1035.46 2314.25 974.41 2314.47 974.31 2314.46 974.28 2322.71 968.89 2478.55 872.53 2552.61 828.81 2552.62 828.82 2553.25 828.52 2553.21 828.45 2636.06 779.54 2649.31 771.68 2649.6 771.54 2649.59 771.52 2952.76 591.87 2986.07 572.3 2986.41 572.14 2986.4 572.11 3024.45 549.76 3024.95 549.52 3024.93 549.48 3111.12 498.86 3264.42 399.17 3426.14 312.03 3584.49 219.03 3601.6 208.83 3601.62 208.87 3602.13 208.51 3649.37 180.37 3649.37 180.37 3649.39 180.36 3742 125.19 3784.23 100.74 3784.26 100.78 3784.85 100.4 3784.84 100.39 3794.31 94.91 3794.32 94.93 3794.57 94.75 3901.19 33.03 3901.52 32.84 3880.35 2.37 3880.18 2.11 3851.09 18.38"
                         />
                        <polygon class="cls-1" points="3870.8 8.15 3890.44 38.45 3881.98 43.35 3861.25 13.49 3870.8 8.15"/>
                        <polygon class="cls-1" points="3860.64 13.83 3881.38 43.7 3871.9 49.18 3851.48 18.96 3860.64 13.83"/>
                        <polygon class="cls-1" points="3871.3 49.53 3861.84 55.01 3841.92 24.31 3850.87 19.3 3871.3 49.53"/>
                        <polygon class="cls-1" points="3841.3 24.65 3861.23 55.36 3852.76 60.26 3832.16 29.77 3841.3 24.65"/>
                        <polygon class="cls-1" points="3783.34 57.09 3791.89 52.31 3813.46 83.01 3804 88.49 3783.34 57.09"/>
                        <polygon class="cls-1" points="3803.39 88.84 3794.52 93.98 3773.17 62.78 3782.73 57.43 3803.39 88.84"/>
                        <polygon class="cls-1" points="3792.5 51.96 3802.05 46.62 3822.54 77.76 3814.07 82.66 3792.5 51.96"/>
                        <polygon class="cls-1" points="3802.66 46.28 3811.82 41.15 3832.61 71.93 3823.14 77.41 3802.66 46.28"/>
                        <polygon class="cls-1" points="3812.43 40.81 3821.38 35.8 3842.08 66.44 3842.65 66.04 3821.99 35.46 3831.55 30.11 3852.16 60.61 3833.21 71.58 3812.43 40.81"/>
                        <polygon class="cls-1" points="3733.92 84.75 3743.48 79.4 3764.7 111.24 3755.82 116.38 3733.92 84.75"/>
                        <polygon class="cls-1" points="3755.22 116.73 3745.77 122.2 3724.76 89.87 3733.31 85.09 3755.22 116.73"/>
                        <polygon class="cls-1" points="3744.09 79.06 3753.72 73.67 3753.27 73.98 3774.77 105.41 3765.31 110.89 3744.09 79.06"/>
                        <polygon class="cls-1" points="3714.18 96.18 3736.12 127.88 3726.74 133.47 3705.59 101.75 3714.18 96.18"/>
                        <polygon class="cls-1" points="3705.01 102.13 3726.14 133.83 3717.34 139.06 3696.43 107.69 3705.01 102.13"/>
                        <polygon class="cls-1" points="3716.74 139.42 3707.35 145.02 3686.87 113.88 3695.84 108.07 3716.74 139.42"/>
                        <polygon class="cls-1" points="3640.07 144.23 3648.65 138.67 3668.37 168.24 3659.57 173.48 3640.07 144.23"/>
                        <polygon class="cls-1" points="3658.97 173.84 3649.58 179.43 3630.32 150.55 3639.48 144.61 3658.97 173.84"/>
                        <polygon class="cls-1" points="3649.24 138.28 3658.21 132.47 3678.36 162.29 3668.97 167.88 3649.24 138.28"/>
                        <polygon class="cls-1" points="3658.8 132.09 3667.38 126.53 3687.76 156.69 3678.96 161.93 3658.8 132.09"/>
                        <polygon class="cls-1" points="3667.96 126.15 3676.54 120.58 3697.35 150.98 3688.36 156.33 3667.96 126.15"/>
                        <polygon class="cls-1" points="3677.13 120.2 3686.29 114.27 3706.75 145.38 3697.94 150.62 3677.13 120.2"/>
                        <polygon class="cls-1" points="3593.27 174.57 3601.86 169 3620.59 196.7 3611.21 202.3 3593.27 174.57"/>
                        <polygon class="cls-1" points="3610.6 202.65 3601.8 207.9 3583.53 180.89 3592.68 174.95 3610.6 202.65"/>
                        <polygon class="cls-1" points="3602.44 168.63 3611.02 163.07 3629.99 191.1 3621.19 196.35 3602.44 168.63"/>
                        <polygon class="cls-1" points="3611.6 162.69 3620.58 156.86 3639.98 185.15 3630.59 190.75 3611.6 162.69"/>
                        <polygon class="cls-1" points="3496.81 231.37 3505.74 226.32 3524.21 253.62 3514.78 259.16 3496.81 231.37"/>
                        <polygon class="cls-1" points="3514.18 259.51 3505.75 264.46 3487.08 236.88 3496.2 231.72 3514.18 259.51"/>
                        <polygon class="cls-1" points="3506.35 225.98 3515.47 220.82 3533.64 248.08 3524.81 253.27 3506.35 225.98"/>
                        <polygon class="cls-1" points="3516.08 220.48 3525.02 215.42 3543.67 242.19 3534.25 247.72 3516.08 220.48"/>
                        <polygon class="cls-1" points="3525.63 215.08 3535.14 209.7 3553.11 236.65 3544.27 241.84 3525.63 215.08"/>
                        <polygon class="cls-1" points="3535.75 209.35 3544.88 204.19 3562.74 230.99 3553.71 236.29 3535.75 209.35"/>
                        <polygon class="cls-1" points="3545.49 203.85 3554.41 198.8 3572.17 225.45 3563.35 230.63 3545.49 203.85"/>
                        <polygon class="cls-1" points="3555.02 198.46 3564.15 193.29 3582.21 219.55 3572.78 225.09 3555.02 198.46"/>
                        <polygon class="cls-1" points="3486.47 237.22 3505.15 264.82 3495.71 270.36 3476.94 242.61 3486.47 237.22"/>
                        <polygon class="cls-1" points="3457.88 253.39 3467.19 248.12 3485.68 276.25 3476.25 281.79 3457.88 253.39"/>
                        <polygon class="cls-1" points="3475.65 282.14 3467.21 287.1 3448.14 258.9 3457.27 253.73 3475.65 282.14"/>
                        <polygon class="cls-1" points="3467.8 247.78 3476.33 242.95 3495.11 270.71 3486.28 275.9 3467.8 247.78"/>
                        <polygon class="cls-1" points="3447.53 259.24 3466.61 287.45 3457.18 292.99 3438.4 264.4 3447.53 259.24"/>
                        <polygon class="cls-1" points="3456.58 293.34 3447.74 298.53 3428.26 270.13 3437.79 264.75 3456.58 293.34"/>
                        <polygon class="cls-1" points="3427.66 270.48 3447.14 298.89 3437.72 304.42 3419.12 275.31 3427.66 270.48"/>
                        <polygon class="cls-1" points="3437.11 304.77 3428.28 309.96 3408.99 281.03 3418.51 275.65 3437.11 304.77"/>
                        <polygon class="cls-1" points="3395.57 298.66 3401.13 290.21 3417.86 315.7 3408.62 320.68 3395.57 298.66"/>
                        <polygon class="cls-1" points="3408 321.01 3399.04 325.84 3389.6 307.75 3395.15 299.31 3408 321.01"/>
                        <polygon class="cls-1" points="3385.15 314.51 3389.16 308.41 3398.43 326.17 3389.16 331.16 3381.98 316 3385.06 314.55 3385.15 314.51"/>
                        <polygon class="cls-1" points="3270.8 368.49 3280.7 363.81 3289.87 384.66 3280.57 389.67 3270.8 368.49"/>
                        <polygon class="cls-1" points="3279.96 390 3271.01 394.82 3260.64 373.28 3270.17 368.78 3279.96 390"/>
                        <polygon class="cls-1" points="3280.74 363.79 3290.85 359.02 3299.78 379.32 3290.49 384.33 3281.34 363.53 3280.74 363.79"/>
                        <polygon class="cls-1" points="3291.48 358.72 3301.01 354.22 3310 373.82 3300.4 378.99 3291.48 358.72"/>
                        <polygon class="cls-1" points="3301.65 353.92 3311.05 349.49 3310.86 349.58 3319.9 368.48 3310.62 373.48 3301.65 353.92"/>
                        <polygon class="cls-1" points="3311.49 349.28 3321.02 344.78 3329.15 363.49 3320.52 368.15 3311.49 349.28"/>
                        <polygon class="cls-1" points="3321.65 344.48 3331.18 339.98 3339.34 357.95 3339.96 357.67 3329.77 363.16 3321.65 344.48"/>
                        <polygon class="cls-1" points="3331.81 339.68 3341.03 335.34 3349.27 352.65 3339.98 357.66 3331.81 339.68"/>
                        <polygon class="cls-1" points="3341.65 335.04 3351.19 330.54 3359.18 347.32 3349.89 352.32 3341.65 335.04"/>
                        <polygon class="cls-1" points="3351.82 330.24 3361.34 325.75 3368.73 342.17 3359.79 346.99 3351.82 330.24"/>
                        <polygon class="cls-1" points="3361.97 325.45 3371.5 320.95 3378.64 336.83 3369.35 341.84 3361.97 325.45"/>
                        <polygon class="cls-1" points="3372.13 320.65 3381.35 316.3 3388.55 331.49 3379.26 336.49 3372.13 320.65"/>
                        <polygon class="cls-1" points="3222.74 396.32 3231.59 390.48 3242 412.91 3233.42 418.49 3222.74 396.32"/>
                        <polygon class="cls-1" points="3232.83 418.88 3223.6 424.88 3213.59 402.35 3222.15 396.71 3232.83 418.88"/>
                        <polygon class="cls-1" points="3232.18 390.09 3240.74 384.44 3251.47 406.75 3242.59 412.53 3232.18 390.09"/>
                        <polygon class="cls-1" points="3241.32 384.06 3249.87 378.42 3260.65 400.79 3252.06 406.37 3241.32 384.06"/>
                        <polygon class="cls-1" points="3213 402.75 3223.01 425.27 3214.44 430.84 3203.6 408.33 3210.83 404.18 3213 402.75"/>
                        <polygon class="cls-1" points="3106.96 463.85 3115.78 458.78 3129.14 486.31 3120.8 491.73 3106.96 463.85"/>
                        <polygon class="cls-1" points="3120.21 492.11 3111.39 497.85 3097.19 469.46 3106.35 464.2 3120.21 492.11"/>
                        <polygon class="cls-1" points="3116.39 458.43 3125.87 452.98 3138.94 479.93 3129.72 485.93 3116.39 458.43"/>
                        <polygon class="cls-1" points="3126.48 452.64 3135 447.74 3148.43 473.77 3139.53 479.55 3126.48 452.64"/>
                        <polygon class="cls-1" points="3135.59 447.4 3145.07 441.95 3157.59 467.81 3149.01 473.39 3135.59 447.4"/>
                        <polygon class="cls-1" points="3145.68 441.61 3155.15 436.16 3166.75 461.84 3166.81 461.81 3158.17 467.43 3145.68 441.61"/>
                        <polygon class="cls-1" points="3155.77 435.81 3164.27 430.92 3176.41 455.57 3167.35 461.46 3155.77 435.81"/>
                        <polygon class="cls-1" points="3164.88 430.57 3174.37 425.13 3186.02 449.28 3186.23 449.18 3177.01 455.18 3164.88 430.57"/>
                        <polygon class="cls-1" points="3174.97 424.78 3183.8 419.71 3195.21 443.34 3186.62 448.93 3174.97 424.78"/>
                        <polygon class="cls-1" points="3184.4 419.36 3193.57 414.09 3204.38 437.38 3195.79 442.96 3184.4 419.36"/>
                        <polygon class="cls-1" points="3193.61 414.07 3203 408.68 3213.85 431.22 3204.97 437 3194.19 413.79 3193.61 414.07"/>
                        <polygon class="cls-1" points="3029.82 508.97 3038.6 503.81 3052.81 532.23 3053.43 531.92 3039.2 503.46 3048.64 497.92 3062.86 526.37 3063.13 526.24 3044.05 537.44 3029.82 508.97"/>
                        <polygon class="cls-1" points="3043.45 537.8 3034.01 543.34 3019.77 514.87 3029.21 509.33 3043.45 537.8"/>
                        <polygon class="cls-1" points="3049.16 497.61 3058.03 492.4 3071.95 521.06 3063.48 526.03 3049.25 497.57 3049.16 497.61"/>
                        <polygon class="cls-1" points="3058.63 492.05 3067.74 486.7 3081.98 515.17 3072.55 520.7 3058.63 492.05"/>
                        <polygon class="cls-1" points="3068.35 486.34 3077.14 481.18 3091.37 509.65 3082.58 514.81 3068.35 486.34"/>
                        <polygon class="cls-1" points="3077.74 480.83 3087.17 475.29 3100.75 504.14 3091.97 509.29 3077.74 480.83"/>
                        <polygon class="cls-1" points="2991.28 531.6 3000.06 526.44 3014.3 554.91 3005.51 560.07 2991.28 531.6"/>
                        <polygon class="cls-1" points="3004.91 560.43 2995.48 565.97 2981.26 537.54 2980.66 537.84 2990.67 531.96 3004.91 560.43"/>
                        <polygon class="cls-1" points="3000.67 526.09 3010.11 520.55 3024.02 549.21 3014.91 554.56 3000.67 526.09"/>
                        <polygon class="cls-1" points="2952.74 554.23 2961.53 549.07 2975.45 577.73 2966.98 582.71 2952.74 554.23"/>
                        <polygon class="cls-1" points="2966.37 583.06 2956.94 588.6 2942.71 560.13 2952.14 554.59 2966.37 583.06"/>
                        <polygon class="cls-1" points="2962.13 548.72 2971.57 543.18 2985.49 571.84 2976.05 577.38 2962.13 548.72"/>
                        <polygon class="cls-1" points="2792 655.84 2800.61 650.34 2812.2 674.35 2802.79 679.92 2792 655.84"/>
                        <polygon class="cls-1" points="2802.18 680.29 2793.42 685.48 2782.14 662.12 2791.4 656.22 2802.18 680.29"/>
                        <polygon class="cls-1" points="2801.2 649.96 2809.82 644.47 2821.57 668.79 2821.64 668.76 2812.8 673.99 2801.2 649.96"/>
                        <polygon class="cls-1" points="2810.41 644.09 2819.34 638.39 2831.27 663.05 2822.17 668.44 2810.41 644.09"/>
                        <polygon class="cls-1" points="2819.93 638.02 2829.18 632.12 2840.65 657.49 2831.87 662.69 2819.93 638.02"/>
                        <polygon class="cls-1" points="2829.78 631.73 2838.4 626.23 2850.66 651.56 2841.26 657.13 2829.78 631.73"/>
                        <polygon class="cls-1" points="2838.99 625.86 2847.62 620.36 2860.03 646.01 2851.26 651.2 2838.99 625.86"/>
                        <polygon class="cls-1" points="2848.21 619.98 2857.47 614.07 2870.05 640.07 2860.63 645.65 2848.21 619.98"/>
                        <polygon class="cls-1" points="2858.06 613.7 2866.68 608.2 2879.11 634.7 2870.65 639.71 2858.06 613.7"/>
                        <polygon class="cls-1" points="2867.27 607.82 2875.89 602.33 2889.11 628.78 2879.71 634.35 2867.27 607.82"/>
                        <polygon class="cls-1" points="2876.48 601.95 2885.41 596.25 2898.48 623.22 2889.71 628.42 2876.48 601.95"/>
                        <polygon class="cls-1" points="2886 595.87 2895.26 589.97 2908.51 617.28 2899.08 622.86 2886 595.87"/>
                        <polygon class="cls-1" points="2895.85 589.59 2904.47 584.09 2917.87 611.73 2909.11 616.93 2895.85 589.59"/>
                        <polygon class="cls-1" points="2905.06 583.71 2913.68 578.22 2927.57 605.98 2918.48 611.37 2905.06 583.71"/>
                        <polygon class="cls-1" points="2914.27 577.84 2922.89 572.34 2936.94 600.43 2928.17 605.63 2914.27 577.84"/>
                        <polygon class="cls-1" points="2923.49 571.96 2932.74 566.06 2946.96 594.49 2937.54 600.07 2923.49 571.96"/>
                        <polygon class="cls-1" points="2781.55 662.5 2792.82 685.84 2783.42 691.41 2772.95 667.25 2779.34 663.91 2781.55 662.5"/>
                        <polygon class="cls-1" points="2653.76 729.6 2663.11 724.71 2677.44 754.21 2668.67 759.41 2653.76 729.6"/>
                        <polygon class="cls-1" points="2668.06 759.76 2658.65 765.34 2643.8 734.81 2653.14 729.92 2668.06 759.76"/>
                        <polygon class="cls-1" points="2663.72 724.39 2672.74 719.67 2687.13 748.46 2678.04 753.85 2663.72 724.39"/>
                        <polygon class="cls-1" points="2673.36 719.35 2682.69 714.46 2696.51 742.91 2687.74 748.11 2673.36 719.35"/>
                        <polygon class="cls-1" points="2683.31 714.14 2692.66 709.25 2706.52 736.97 2697.11 742.55 2683.31 714.14"/>
                        <polygon class="cls-1" points="2693.28 708.93 2702.63 704.04 2715.9 731.42 2707.12 736.62 2693.28 708.93"/>
                        <polygon class="cls-1" points="2703.24 703.71 2712.58 698.83 2725.91 725.48 2716.5 731.06 2703.24 703.71"/>
                        <polygon class="cls-1" points="2713.2 698.5 2722.86 693.45 2734.98 720.11 2726.51 725.13 2713.2 698.5"/>
                        <polygon class="cls-1" points="2723.49 693.13 2732.17 688.58 2744.98 714.18 2735.59 719.75 2723.49 693.13"/>
                        <polygon class="cls-1" points="2732.79 688.26 2742.14 683.37 2754.35 708.63 2745.58 713.83 2732.79 688.26"/>
                        <polygon class="cls-1" points="2742.75 683.05 2752.1 678.16 2763.72 703.08 2754.95 708.27 2742.75 683.05"/>
                        <polygon class="cls-1" points="2752.71 677.84 2762.07 672.95 2773.74 697.14 2764.33 702.72 2752.71 677.84"/>
                        <polygon class="cls-1" points="2762.68 672.62 2772.33 667.57 2782.81 691.76 2774.34 696.78 2762.68 672.62"/>
                        <polygon class="cls-1" points="2633.22 740.34 2648.67 771.25 2639.26 776.83 2623.87 745.23 2633.22 740.34"/>
                        <polygon class="cls-1" points="2557.74 787.23 2566.95 781.24 2581.09 811.18 2572.31 816.37 2557.74 787.23"/>
                        <polygon class="cls-1" points="2571.7 816.72 2562.29 822.28 2548.25 793.4 2557.15 787.61 2571.7 816.72"/>
                        <polygon class="cls-1" points="2567.54 780.86 2576.12 775.28 2591.11 805.26 2581.69 810.83 2567.54 780.86"/>
                        <polygon class="cls-1" points="2576.71 774.89 2585.29 769.31 2600.17 799.92 2591.72 804.91 2576.71 774.89"/>
                        <polygon class="cls-1" points="2585.88 768.93 2594.77 763.15 2610.2 794 2600.77 799.56 2585.88 768.93"/>
                        <polygon class="cls-1" points="2595.36 762.76 2603.94 757.19 2619.57 788.46 2610.8 793.64 2595.36 762.76"/>
                        <polygon class="cls-1" points="2604.53 756.8 2613.74 750.81 2629.6 782.54 2620.18 788.11 2604.53 756.8"/>
                        <polygon class="cls-1" points="2483.12 835.76 2491.7 830.17 2504.1 856.63 2495.33 861.81 2483.12 835.76"/>
                        <polygon class="cls-1" points="2494.73 862.17 2485.31 867.73 2473.66 841.93 2473.53 841.99 2482.53 836.14 2494.73 862.17"/>
                        <polygon class="cls-1" points="2492.29 829.79 2500.88 824.21 2513.82 850.9 2504.7 856.28 2492.29 829.79"/>
                        <polygon class="cls-1" points="2501.46 823.83 2510.05 818.24 2523.19 845.36 2514.42 850.54 2501.46 823.83"/>
                        <polygon class="cls-1" points="2510.63 817.86 2520.16 811.67 2533.23 839.44 2523.79 845.01 2510.63 817.86"/>
                        <polygon class="cls-1" points="2520.75 811.29 2529.32 805.71 2542.6 833.91 2533.83 839.09 2520.75 811.29"/>
                        <polygon class="cls-1" points="2463.26 848.67 2475.36 873.68 2466.04 879.45 2454.59 854.1 2462.64 849.07 2463.26 848.67"/>
                        <polygon class="cls-1" points="2436.07 865.64 2444.73 860.24 2456.16 885.55 2447.48 890.92 2436.07 865.64"/>
                        <polygon class="cls-1" points="2446.88 891.29 2437.56 897.06 2426.16 871.82 2435.47 866.02 2446.88 891.29"/>
                        <polygon class="cls-1" points="2445.33 859.87 2453.99 854.47 2465.44 879.82 2456.76 885.18 2445.33 859.87"/>
                        <polygon class="cls-1" points="2436.96 897.43 2428.28 902.79 2416.9 877.59 2425.56 872.2 2436.96 897.43"/>
                        <polygon class="cls-1" points="2322.07 936.74 2330.73 931.33 2342.24 955.99 2333.56 961.36 2322.07 936.74"/>
                        <polygon class="cls-1" points="2332.96 961.73 2323.63 967.5 2312.16 942.91 2321.47 937.11 2332.96 961.73"/>
                        <polygon class="cls-1" points="2331.33 930.96 2339.99 925.56 2351.52 950.26 2342.84 955.62 2331.33 930.96"/>
                        <polygon class="cls-1" points="2340.59 925.19 2349.9 919.38 2361.44 944.12 2352.12 949.89 2340.59 925.19"/>
                        <polygon class="cls-1" points="2350.49 919.01 2359.16 913.6 2370.72 938.38 2362.04 943.75 2350.49 919.01"/>
                        <polygon class="cls-1" points="2359.76 913.23 2368.42 907.83 2380 932.65 2371.32 938.01 2359.76 913.23"/>
                        <polygon class="cls-1" points="2369.01 907.46 2378.33 901.65 2389.92 926.51 2380.59 932.28 2369.01 907.46"/>
                        <polygon class="cls-1" points="2378.92 901.28 2387.59 895.88 2399.2 920.77 2390.52 926.14 2378.92 901.28"/>
                        <polygon class="cls-1" points="2387.85 895.71 2396.84 890.11 2408.48 915.04 2399.8 920.4 2388.2 895.55 2387.85 895.71"/>
                        <polygon class="cls-1" points="2397.43 889.74 2406.75 883.93 2418.4 908.9 2409.07 914.67 2397.43 889.74"/>
                        <polygon class="cls-1" points="2407.35 883.56 2416.3 877.97 2427.68 903.16 2419 908.53 2407.35 883.56"/>
                        <polygon class="cls-1" points="2224.18 991.45 2233.43 986.38 2248.17 1016.67 2239.59 1022.26 2224.18 991.45"/>
                        <polygon class="cls-1" points="2239 1022.65 2229.79 1028.65 2213.98 997.02 2223.56 991.78 2239 1022.65"/>
                        <polygon class="cls-1" points="2234.04 986.05 2243.62 980.81 2257.64 1010.49 2248.75 1016.29 2234.04 986.05"/>
                        <polygon class="cls-1" points="2244.23 980.48 2252.84 975.77 2266.8 1004.52 2258.22 1010.11 2244.23 980.48"/>
                        <polygon class="cls-1" points="2253.45 975.44 2262.71 970.37 2275.97 998.54 2267.39 1004.13 2253.45 975.44"/>
                        <polygon class="cls-1" points="2263.32 970.03 2272.89 964.8 2285.43 992.37 2276.56 998.16 2263.32 970.03"/>
                        <polygon class="cls-1" points="2273.51 964.46 2282.78 959.4 2295.24 985.97 2286.02 991.98 2273.51 964.46"/>
                        <polygon class="cls-1" points="2283.39 959.06 2291.99 954.36 2304.4 980 2295.83 985.59 2283.39 959.06"/>
                        <polygon class="cls-1" points="2292.6 954.02 2302.18 948.79 2313.57 974.02 2304.99 979.62 2292.6 954.02"/>
                        <polygon class="cls-1" points="2165.29 1023.65 2174.87 1018.41 2192.24 1053.14 2183.35 1058.94 2165.29 1023.65"/>
                        <polygon class="cls-1" points="2182.75 1059.33 2173.56 1065.32 2155.42 1029.05 2164.67 1023.99 2182.75 1059.33"/>
                        <polygon class="cls-1" points="2175.49 1018.07 2184.09 1013.37 2201.4 1047.17 2192.83 1052.76 2175.49 1018.07"/>
                        <polygon class="cls-1" points="2184.7 1013.03 2194.28 1007.8 2210.57 1041.19 2201.99 1046.78 2184.7 1013.03"/>
                        <polygon class="cls-1" points="2194.89 1007.46 2204.15 1002.4 2219.74 1035.21 2211.16 1040.8 2194.89 1007.46"/>
                        <polygon class="cls-1" points="2033.19 1107.14 2041.78 1101.59 2060.89 1138.99 2052.01 1144.79 2033.19 1107.14"/>
                        <polygon class="cls-1" points="2051.42 1145.18 2042.86 1150.78 2023.69 1113.29 2032.6 1107.53 2051.42 1145.18"/>
                        <polygon class="cls-1" points="2042.37 1101.21 2050.96 1095.65 2070.03 1132.96 2070.37 1132.79 2061.48 1138.6 2042.37 1101.21"/>
                        <polygon class="cls-1" points="2051.55 1095.27 2060.3 1089.61 2079.2 1127.01 2070.64 1132.61 2051.55 1095.27"/>
                        <polygon class="cls-1" points="2060.89 1089.23 2070.27 1083.16 2089.3 1120.4 2089.41 1120.34 2079.79 1126.63 2060.89 1089.23"/>
                        <polygon class="cls-1" points="2070.86 1082.78 2079.45 1077.23 2098.46 1114.42 2089.89 1120.02 2070.86 1082.78"/>
                        <polygon class="cls-1" points="2080.04 1076.84 2088.63 1071.29 2107.61 1108.44 2099.05 1114.03 2080.04 1076.84"/>
                        <polygon class="cls-1" points="2089.22 1070.91 2097.81 1065.36 2116.76 1102.45 2108.21 1108.05 2089.22 1070.91"/>
                        <polygon class="cls-1" points="2098.4 1064.97 2107.94 1058.81 2126.25 1096.25 2117.36 1102.06 2098.4 1064.97"/>
                        <polygon class="cls-1" points="2108.53 1058.42 2117.12 1052.87 2136.03 1089.86 2126.83 1095.87 2108.53 1058.42"/>
                        <polygon class="cls-1" points="2117.71 1052.48 2126.3 1046.93 2145.18 1083.87 2136.62 1089.47 2117.71 1052.48"/>
                        <polygon class="cls-1" points="2126.89 1046.55 2135.48 1040.99 2154.34 1077.88 2145.77 1083.49 2126.89 1046.55"/>
                        <polygon class="cls-1" points="2136.07 1040.61 2144.98 1034.85 2163.81 1071.69 2154.93 1077.5 2136.07 1040.61"/>
                        <polygon class="cls-1" points="2023.1 1113.67 2042.26 1151.17 2033.07 1157.18 2014.53 1119.27 2020.26 1115.5 2023.1 1113.67"/>
                        <polygon class="cls-1" points="2032.48 1157.57 2023.92 1163.16 2004.76 1125.69 2013.94 1119.66 2032.48 1157.57"/>
                        <polygon class="cls-1" points="1994.71 1132.29 2013.64 1169.33 2005.05 1174.88 1986.14 1137.89 1990.94 1134.77 1994.71 1132.29"/>
                        <polygon class="cls-1" points="1939.36 1168.32 1947.94 1162.74 1966.79 1199.62 1958.2 1205.18 1939.36 1168.32"/>
                        <polygon class="cls-1" points="1957.61 1205.56 1949.02 1211.12 1930.19 1174.28 1938.77 1168.7 1957.61 1205.56"/>
                        <polygon class="cls-1" points="1948.52 1162.35 1957.11 1156.77 1975.97 1193.69 1967.38 1199.24 1948.52 1162.35"/>
                        <polygon class="cls-1" points="1957.69 1156.39 1967.21 1150.2 1985.28 1187.67 1976.56 1193.31 1957.69 1156.39"/>
                        <polygon class="cls-1" points="1967.8 1149.82 1976.39 1144.24 1995.28 1181.2 1985.86 1187.29 1967.8 1149.82"/>
                        <polygon class="cls-1" points="1976.98 1143.85 1985.56 1138.27 2004.46 1175.26 1995.87 1180.82 1976.98 1143.85"/>
                        <polygon class="cls-1" points="1948.43 1211.5 1938.9 1217.66 1920.7 1180.45 1929.6 1174.66 1948.43 1211.5"/>
                        <polygon class="cls-1" points="1854.64 1223.41 1863.53 1217.62 1882.27 1254.28 1873.68 1259.84 1854.64 1223.41"/>
                        <polygon class="cls-1" points="1873.09 1260.22 1864.5 1265.78 1845.47 1229.37 1854.05 1223.79 1873.09 1260.22"/>
                        <polygon class="cls-1" points="1864.12 1217.24 1873.32 1211.26 1891.45 1248.35 1882.86 1253.9 1864.12 1217.24"/>
                        <polygon class="cls-1" points="1873.91 1210.87 1882.49 1205.29 1900.95 1242.2 1892.04 1247.96 1873.91 1210.87"/>
                        <polygon class="cls-1" points="1883.08 1204.91 1891.98 1199.12 1910.76 1235.86 1901.54 1241.82 1883.08 1204.91"/>
                        <polygon class="cls-1" points="1892.57 1198.74 1900.75 1193.42 1919.94 1229.92 1911.35 1235.48 1892.57 1198.74"/>
                        <polygon class="cls-1" points="1901.34 1193.04 1910.32 1187.2 1929.12 1223.98 1920.53 1229.54 1901.34 1193.04"/>
                        <polygon class="cls-1" points="1910.91 1186.82 1920.11 1180.83 1938.31 1218.05 1929.71 1223.6 1910.91 1186.82"/>
                        <polygon class="cls-1" points="1761.61 1302.24 1768.84 1295.8 1777.51 1318.66 1768.84 1323.91 1761.61 1302.24"/>
                        <polygon class="cls-1" points="1768.23 1324.28 1758.87 1329.95 1753.21 1309.74 1761.05 1302.75 1768.23 1324.28"/>
                        <polygon class="cls-1" points="1769.4 1295.3 1777.01 1288.52 1786.81 1313.02 1778.11 1318.29 1769.4 1295.3"/>
                        <polygon class="cls-1" points="1777.56 1288.02 1785.42 1281.01 1796.78 1306.97 1787.41 1312.65 1777.56 1288.02"/>
                        <polygon class="cls-1" points="1785.97 1280.52 1793.83 1273.52 1806.09 1301.33 1797.39 1306.61 1785.97 1280.52"/>
                        <polygon class="cls-1" points="1794.38 1273.03 1802.24 1266.02 1816.06 1295.29 1806.7 1300.96 1794.38 1273.03"/>
                        <polygon class="cls-1" points="1802.79 1265.53 1810.64 1258.53 1825.38 1289.63 1825.49 1289.58 1816.67 1294.92 1802.79 1265.53"/>
                        <polygon
                        @click="getLotById(<?php echo $lots[19]->id; ?>)"
                        data-available="<?php echo $lots[19]->available; ?>"
                        data-area="<?php echo $lots[19]->area; ?>"
                        data-number="<?php echo $lots[19]->number; ?>"
                        id="lot-<?php echo $lots[19]->id; ?>"
                        class="cls-1" 
                        points="1811.19 1258.04 1819.05 1251.03 1834.7 1283.99 1825.98 1289.27 1811.19 1258.04"/>
                        <polygon class="cls-1" points="1819.59 1250.55 1827.46 1243.53 1844.65 1277.9 1845.18 1277.64 1835.3 1283.63 1819.59 1250.55"/>
                        <polygon class="cls-1" points="1828 1243.05 1835.87 1236.03 1854.21 1272.16 1845.27 1277.58 1828 1243.05"/>
                        <polygon class="cls-1" points="1744.23 1317.75 1748.97 1335.95 1739.63 1341.61 1736.41 1324.72 1744.23 1317.75"/>
                        <polygon class="cls-1" points="1702.09 1364.37 1702.88 1354.86 1702.63 1354.84 1710.56 1347.76 1710.56 1359.23 1702.09 1364.37"/>
                        <polygon class="cls-1" points="1702.15 1355.27 1701.35 1364.81 1692.07 1370.44 1694.23 1362.32 1702.15 1355.27"/>
                        <polygon class="cls-1" points="1693.29 1363.17 1691.21 1370.96 1670.41 1383.56 1693.29 1363.17"/>
                        <polygon class="cls-1" points="1711.26 1358.81 1711.26 1347.14 1718.99 1340.25 1720.52 1353.2 1711.26 1358.81"/>
                        <polygon class="cls-1" points="1719.59 1339.71 1727.4 1332.75 1729.75 1347.6 1721.18 1352.8 1719.64 1339.71 1719.59 1339.71"/>
                        <polygon class="cls-1" points="1728.02 1332.2 1735.8 1325.26 1738.99 1342 1730.39 1347.21 1728.02 1332.2"/>
                        <polygon class="cls-1" points="1744.81 1317.23 1752.63 1310.26 1758.25 1330.33 1749.6 1335.57 1744.81 1317.23"/>
                        <polygon class="cls-1" points="1854.81 1271.8 1836.41 1235.55 1837.61 1234.48 1844.88 1229.75 1863.91 1266.16 1860.7 1268.23 1854.81 1271.8"/>
                        <polygon class="cls-1" points="2014.23 1168.95 1995.3 1131.91 2004.18 1126.08 2023.32 1163.55 2015.78 1168.48 2014.94 1168.48 2014.23 1168.95"/>
                        <polygon class="cls-1" points="2164.4 1071.3 2145.57 1034.47 2145.92 1034.24 2154.81 1029.38 2172.97 1065.71 2168.18 1068.83 2164.4 1071.3"/>
                        <polygon class="cls-1" points="2204.76 1002.06 2213.37 997.36 2229.2 1029.04 2220.33 1034.83 2204.76 1002.06"/>
                        <polygon class="cls-1" points="2314.16 973.63 2302.8 948.45 2306.79 946.26 2311.57 943.28 2323.04 967.87 2322.34 968.3 2314.16 973.63"/>
                        <polygon class="cls-1" points="2475.95 873.32 2463.84 848.29 2473.05 842.3 2484.7 868.09 2478.19 871.93 2475.95 873.32"/>
                        <polygon class="cls-1" points="2543.2 833.55 2529.91 805.33 2538.5 799.74 2552.31 828.18 2543.2 833.55"/>
                        <polygon class="cls-1" points="2539.08 799.36 2547.67 793.78 2561.69 822.64 2552.91 827.82 2539.08 799.36"/>
                        <polygon class="cls-1" points="2630.21 782.18 2614.33 750.43 2615.94 749.38 2623.25 745.56 2638.66 777.18 2635.7 778.94 2630.21 782.18"/>
                        <polygon class="cls-1" points="2633.84 740.02 2643.18 735.13 2658.05 765.7 2649.28 770.9 2633.84 740.02"/>
                        <polygon class="cls-1" points="2947.56 594.14 2933.33 565.68 2934.33 565.05 2942.1 560.48 2956.33 588.96 2952.41 591.27 2947.56 594.14"/>
                        <polygon class="cls-1" points="2972.17 542.82 2980.64 537.85 2994.87 566.32 2986.09 571.48 2972.17 542.82"/>
                        <polygon class="cls-1" points="3010.65 520.23 3019.17 515.22 3033.41 543.69 3024.62 548.85 3010.71 520.2 3010.65 520.23"/>
                        <polygon class="cls-1" points="3101.36 503.78 3087.79 474.95 3087.58 475.05 3092.68 472.05 3096.58 469.81 3110.8 498.23 3110.76 498.26 3101.36 503.78"/>
                        <polygon class="cls-1" points="3261.23 400.41 3250.48 378.08 3260.02 373.58 3270.4 395.15 3264.07 398.57 3261.23 400.41"/>
                        <polygon class="cls-1" points="3418.48 315.36 3401.55 289.58 3406.1 282.67 3408.38 281.38 3427.68 310.32 3425.8 311.42 3418.48 315.36"/>
                        <polygon class="cls-1" points="3582.81 219.2 3564.76 192.95 3566.07 192.21 3573.39 187.46 3591.62 213.97 3584.13 218.43 3582.81 219.2"/>
                        <polygon class="cls-1" points="3592.22 213.61 3573.98 187.08 3582.95 181.27 3601.21 208.25 3592.22 213.61"/>
                        <polygon class="cls-1" points="3640.58 184.8 3621.17 156.49 3629.74 150.93 3648.98 179.79 3640.58 184.8"/>
                        <polygon class="cls-1" points="3736.72 127.52 3714.76 95.8 3718.53 93.36 3724.15 90.22 3745.17 122.55 3741.65 124.58 3736.72 127.52"/>
                        <polygon class="cls-1" points="3775.38 105.06 3753.85 73.6 3762.8 68.59 3783.85 100.16 3775.38 105.06"/>
                        <polygon class="cls-1" points="3784.45 99.81 3763.41 68.24 3772.56 63.12 3793.91 94.33 3784.45 99.81"/>
                        <polygon class="cls-1" points="3900.51 32.62 3891.05 38.09 3871.41 7.81 3879.96 3.02 3900.51 32.62"/>
                        <polygon points="1534.78 1440.83 1436.8 1501.13 1379.41 1526.38 1379.41 1526.38 1379.41 1526.38 1373.98 1528.77 1285.59 1562.44 1285.59 1562.44 1285.56 1562.46 1232.81 1582.55 1232.81 1582.54 1232.75 1582.57 1198.03 1595.8 1115.84 1675.43 1053.91 1707.24 960.53 1749.31 960.53 1749.31 959.89 1749.59 959.89 1749.6 884.61 1783.52 851.17 1806.48 850.98 1806.58 850.99 1806.61 768.21 1863.47 768.03 1863.55 768.05 1863.58 732.07 1888.28 599.7 2018.98 539.36 2076.29 539.29 2076.32 539.3 2076.35 499.58 2114.08 499.52 2113.89 498.85 2114.08 499 2114.62 466.54 2145.45 447.31 2157.51 447.12 2157.56 447.13 2157.62 311.55 2242.63 179.33 2319.18 179.01 2319.28 179.04 2319.36 152.34 2334.81 113.72 2361.99 113.66 2362.01 113.67 2362.03 2.36 2440.38 2.1 2440.57 21.53 2472.68 21.72 2472.99 127.73 2405.38 127.74 2405.37 127.73 2405.37 177.02 2373.93 331.19 2275.06 465.29 2185.91 465.39 2185.89 465.38 2185.85 483.7 2173.67 501.31 2159.93 501.41 2159.9 501.4 2159.86 528.19 2138.95 528.22 2138.94 528.22 2138.93 628.65 2060.56 676.28 2020.87 676.5 2020.76 676.47 2020.7 736.62 1970.59 736.82 1970.49 736.8 1970.44 769.39 1943.27 770.91 1942.13 771.17 1942 771.15 1941.95 815.38 1908.58 815.58 1908.49 815.56 1908.45 915.99 1832.69 932.68 1822.28 932.88 1822.19 932.87 1822.17 1071.82 1735.51 1230.17 1641.67 1545.19 1455.68 1667.52 1386.14 1667.21 1385.51 1534.78 1440.83"/>
                        <polygon class="cls-1" points="1556.78 1432.39 1566.08 1428.51 1574.9 1437.99 1565.94 1443.08 1556.78 1432.39"/>
                        <polygon class="cls-1" points="1565.32 1443.43 1556.28 1448.57 1546.21 1436.81 1556.1 1432.68 1565.32 1443.43"/>
                        <polygon class="cls-1" points="1566.76 1428.22 1576.83 1424.02 1584.54 1432.5 1575.52 1437.63 1566.76 1428.22"/>
                        <polygon class="cls-1" points="1577.51 1423.73 1586.91 1419.81 1594.63 1426.77 1585.16 1432.15 1577.51 1423.73"/>
                        <polygon class="cls-1" points="1587.62 1419.51 1596.97 1415.6 1604.28 1421.28 1595.27 1426.4 1587.62 1419.51"/>
                        <polygon class="cls-1" points="1597.72 1415.29 1607.57 1411.18 1613.81 1415.87 1604.93 1420.91 1597.72 1415.29"/>
                        <polygon class="cls-1" points="1608.31 1410.87 1617.39 1407.08 1623.86 1410.15 1614.47 1415.49 1608.31 1410.87"/>
                        <polygon class="cls-1" points="1618.26 1406.72 1627.6 1402.81 1632.7 1405.13 1624.59 1409.73 1618.26 1406.72"/>
                        <polygon class="cls-1" points="1628.48 1402.45 1639.1 1398.01 1642.96 1399.3 1633.45 1404.7 1628.48 1402.45"/>
                        <polygon class="cls-1" points="1545.53 1437.09 1555.66 1448.92 1546.7 1454.01 1535.55 1441.26 1545.53 1437.09"/>
                        <polygon class="cls-1" points="1449.93 1493.87 1459.2 1488.16 1469.14 1499.77 1459.74 1505.32 1449.93 1493.87"/>
                        <polygon class="cls-1" points="1459.13 1505.68 1450.29 1510.9 1440.6 1499.61 1449.32 1494.24 1459.13 1505.68"/>
                        <polygon class="cls-1" points="1459.8 1487.79 1468.52 1482.42 1478.5 1494.24 1469.76 1499.4 1459.8 1487.79"/>
                        <polygon class="cls-1" points="1469.12 1482.05 1477.85 1476.68 1488.14 1488.55 1479.11 1493.88 1469.12 1482.05"/>
                        <polygon class="cls-1" points="1478.45 1476.31 1487.72 1470.61 1497.61 1482.96 1488.75 1488.19 1478.45 1476.31"/>
                        <polygon class="cls-1" points="1488.32 1470.24 1497.04 1464.87 1507.61 1477.06 1498.21 1482.6 1488.32 1470.24"/>
                        <polygon class="cls-1" points="1497.65 1464.5 1506.37 1459.13 1517.07 1471.47 1508.22 1476.7 1497.65 1464.5"/>
                        <polygon class="cls-1" points="1506.97 1458.76 1516.24 1453.05 1527.08 1465.56 1517.68 1471.11 1506.97 1458.76"/>
                        <polygon class="cls-1" points="1527.69 1465.2 1516.84 1452.68 1525.56 1447.32 1536.07 1460.25 1527.68 1465.21 1527.69 1465.2"/>
                        <polygon class="cls-1" points="1440 1499.98 1449.67 1511.26 1440.75 1516.53 1430.43 1504.69 1437.12 1501.75 1440 1499.98"/>
                        <polygon class="cls-1" points="1399.69 1518.22 1409.43 1513.93 1420.67 1528.39 1411.83 1533.6 1399.69 1518.22"/>
                        <polygon class="cls-1" points="1411.23 1533.96 1401.83 1539.51 1389.75 1522.59 1399.03 1518.51 1411.23 1533.96"/>
                        <polygon class="cls-1" points="1410.09 1513.64 1419.98 1509.29 1430.68 1522.47 1421.28 1528.03 1410.09 1513.64"/>
                        <polygon class="cls-1" points="1420.64 1509 1429.76 1504.99 1440.14 1516.89 1431.29 1522.11 1420.64 1509"/>
                        <polygon class="cls-1" points="1389.1 1522.88 1401.23 1539.86 1392.69 1544.91 1392.81 1544.81 1379.83 1526.96 1389.1 1522.88"/>
                        <polygon class="cls-1" points="1379.18 1527.25 1392.22 1545.18 1382.81 1550.74 1369.09 1531.38 1374.24 1529.42 1379.18 1527.25"/>
                        <polygon class="cls-1" points="1306.02 1555.41 1316.27 1551.5 1334.31 1579.37 1324.89 1584.94 1306.02 1555.41"/>
                        <polygon class="cls-1" points="1324.29 1585.29 1315.48 1590.49 1296.06 1559.2 1305.36 1555.66 1324.29 1585.29"/>
                        <polygon class="cls-1" points="1316.94 1551.25 1326.52 1547.6 1343.62 1573.88 1334.91 1579.02 1316.94 1551.25"/>
                        <polygon class="cls-1" points="1327.18 1547.34 1337.42 1543.44 1353.35 1568.13 1344.22 1573.52 1327.18 1547.34"/>
                        <polygon class="cls-1" points="1338.09 1543.19 1347.24 1539.71 1362.76 1562.58 1353.96 1567.77 1338.09 1543.19"/>
                        <polygon class="cls-1" points="1347.91 1539.45 1358.16 1535.55 1372.78 1556.66 1363.36 1562.22 1347.91 1539.45"/>
                        <polygon class="cls-1" points="1358.83 1535.29 1368.42 1531.64 1382.2 1551.1 1373.38 1556.31 1358.83 1535.29"/>
                        <polygon class="cls-1" points="1295.39 1559.46 1314.88 1590.84 1305.47 1596.4 1285.95 1563.05 1295.39 1559.46"/>
                        <polygon class="cls-1" points="1254.31 1575.11 1264.15 1571.36 1285.81 1608.01 1277.01 1613.2 1254.31 1575.11"/>
                        <polygon class="cls-1" points="1276.41 1613.56 1266.99 1619.12 1244.07 1579.01 1253.65 1575.36 1276.41 1613.56"/>
                        <polygon class="cls-1" points="1264.82 1571.1 1274.39 1567.46 1295.83 1602.09 1286.41 1607.65 1264.82 1571.1"/>
                        <polygon class="cls-1" points="1275.06 1567.2 1285.29 1563.3 1304.87 1596.76 1296.43 1601.74 1275.06 1567.2"/>
                        <polygon class="cls-1" points="1243.41 1579.26 1266.39 1619.48 1247.93 1630.37 1222.94 1587.06 1232.51 1583.41 1257.34 1624.79 1257.94 1624.43 1233.18 1583.16 1243.41 1579.26"/>
                        <polygon class="cls-1" points="1247.33 1630.73 1238.53 1635.92 1212.43 1591.06 1222.28 1587.31 1247.33 1630.73"/>
                        <polygon class="cls-1" points="1201.53 1595.21 1227.91 1642.2 1219.12 1647.41 1192.97 1601.64 1198.35 1596.43 1201.53 1595.21"/>
                        <polygon class="cls-1" points="1129.15 1663.49 1136.26 1656.6 1151.65 1687.39 1142.25 1692.96 1129.15 1663.49"/>
                        <polygon class="cls-1" points="1141.64 1693.32 1132.88 1698.51 1120.69 1671.69 1128.61 1664.01 1141.64 1693.32"/>
                        <polygon class="cls-1" points="1136.79 1656.09 1144.45 1648.66 1161.21 1681.72 1152.25 1687.03 1136.79 1656.09"/>
                        <polygon class="cls-1" points="1144.97 1648.16 1152.34 1641.01 1170.07 1676.47 1161.81 1681.37 1144.97 1648.16"/>
                        <polygon class="cls-1" points="1152.87 1640.5 1160.36 1633.24 1180.08 1670.54 1170.68 1676.11 1152.87 1640.5"/>
                        <polygon class="cls-1" points="1160.88 1632.74 1168.71 1625.14 1189.46 1664.98 1180.69 1670.18 1160.88 1632.74"/>
                        <polygon class="cls-1" points="1169.24 1624.64 1176.35 1617.75 1199.48 1659.05 1190.06 1664.62 1169.24 1624.64"/>
                        <polygon class="cls-1" points="1176.87 1617.24 1184.81 1609.54 1208.86 1653.49 1200.08 1658.69 1176.87 1617.24"/>
                        <polygon class="cls-1" points="1185.33 1609.04 1192.45 1602.14 1218.52 1647.76 1209.46 1653.13 1185.33 1609.04"/>
                        <polygon class="cls-1" points="1120.16 1672.2 1132.28 1698.87 1122.88 1704.44 1112.18 1678.1 1112.13 1678.12 1116.21 1676.03 1120.16 1672.2"/>
                        <polygon class="cls-1" points="1072.15 1698.65 1081.54 1693.83 1093.82 1721.66 1084.4 1727.24 1072.15 1698.65"/>
                        <polygon class="cls-1" points="1083.8 1727.6 1075.05 1732.78 1062.16 1703.79 1071.53 1698.97 1083.8 1727.6"/>
                        <polygon class="cls-1" points="1082.17 1693.51 1091.54 1688.7 1103.17 1716.11 1094.42 1721.3 1082.17 1693.51"/>
                        <polygon class="cls-1" points="1092.17 1688.38 1101.55 1683.56 1113.2 1710.18 1103.78 1715.76 1092.17 1688.38"/>
                        <polygon class="cls-1" points="1102.18 1683.24 1111.56 1678.42 1122.27 1704.8 1113.8 1709.82 1102.18 1683.24"/>
                        <polygon class="cls-1" points="980.99 1740.85 990.27 1736.67 1007.64 1774.71 998.98 1780.11 980.99 1740.85"/>
                        <polygon class="cls-1" points="998.38 1780.49 989.72 1785.89 970.75 1745.47 980.35 1741.14 998.38 1780.49"/>
                        <polygon class="cls-1" points="990.91 1736.38 1000.2 1732.2 1017.55 1768.53 1008.24 1774.34 990.91 1736.38"/>
                        <polygon class="cls-1" points="1000.84 1731.91 1011.13 1727.27 1026.81 1762.76 1018.14 1768.16 1000.84 1731.91"/>
                        <polygon class="cls-1" points="1011.77 1726.99 1021.06 1722.8 1036.07 1756.98 1027.41 1762.38 1011.77 1726.99"/>
                        <polygon class="cls-1" points="1021.7 1722.51 1031.3 1718.19 1045.98 1750.8 1036.67 1756.61 1021.7 1722.51"/>
                        <polygon class="cls-1" points="1031.94 1717.9 1041.23 1713.72 1055.24 1745.03 1046.58 1750.43 1031.94 1717.9"/>
                        <polygon class="cls-1" points="1041.86 1713.43 1051.46 1709.11 1064.49 1739.25 1055.83 1744.65 1041.86 1713.43"/>
                        <polygon class="cls-1" points="970.11 1745.76 989.12 1786.26 979.81 1792.07 960.81 1749.94 970.11 1745.76"/>
                        <polygon class="cls-1" points="979.21 1792.44 970.56 1797.84 950.58 1754.56 960.18 1750.23 979.21 1792.44"/>
                        <polygon class="cls-1" points="929.72 1763.95 939.33 1759.62 960.39 1804.18 951.72 1809.59 929.72 1763.95"/>
                        <polygon class="cls-1" points="951.13 1809.96 941.83 1815.76 919.79 1768.42 929.09 1764.24 951.13 1809.96"/>
                        <polygon class="cls-1" points="939.97 1759.33 949.94 1754.84 969.95 1798.19 970.12 1798.11 960.99 1803.81 939.97 1759.33"/>
                        <polygon class="cls-1" points="908.91 1773.33 931.97 1821.91 923.3 1827.31 899.63 1777.51 908.91 1773.33"/>
                        <polygon class="cls-1" points="888.38 1782.57 912.93 1834.13 904.98 1840.12 879.63 1787.77 884.95 1784.12 888.38 1782.57"/>
                        <polygon class="cls-1" points="861.22 1800.42 869.69 1794.6 895.29 1847.43 886.73 1853.89 861.22 1800.42"/>
                        <polygon class="cls-1" points="886.16 1854.32 878.21 1860.31 851.88 1806.83 860.64 1800.81 886.16 1854.32"/>
                        <polygon class="cls-1" points="870.28 1794.2 879.05 1788.17 904.42 1840.55 895.86 1847.01 870.28 1794.2"/>
                        <polygon class="cls-1" points="877.64 1860.74 869.08 1867.2 842.53 1813.26 851.3 1807.23 877.64 1860.74"/>
                        <polygon class="cls-1" points="805.74 1838.53 814.5 1832.51 841.45 1888.04 833.49 1894.04 805.74 1838.53"/>
                        <polygon class="cls-1" points="832.92 1894.47 824.37 1900.92 796.69 1844.74 805.15 1838.93 832.92 1894.47"/>
                        <polygon class="cls-1" points="815.08 1832.11 823.55 1826.29 850.57 1881.16 842.02 1887.61 815.08 1832.11"/>
                        <polygon class="cls-1" points="824.13 1825.89 832.9 1819.87 859.7 1874.28 851.14 1880.73 824.13 1825.89"/>
                        <polygon class="cls-1" points="833.49 1819.47 841.95 1813.66 868.51 1867.63 860.27 1873.85 833.49 1819.47"/>
                        <polygon class="cls-1" points="777.98 1857.59 786.75 1851.57 814.68 1908.24 806.72 1914.24 777.98 1857.59"/>
                        <polygon class="cls-1" points="806.15 1914.67 797.79 1920.97 768.94 1863.8 777.41 1857.99 806.15 1914.67"/>
                        <polygon class="cls-1" points="797.23 1921.4 788.47 1928 759.59 1870.23 768.36 1864.2 797.23 1921.4"/>
                        <polygon class="cls-1" points="787.9 1928.43 779.95 1934.43 750.54 1876.44 759 1870.63 787.9 1928.43"/>
                        <polygon class="cls-1" points="724.33 1896.91 731.38 1889.94 761.94 1948.57 753.33 1955.74 724.33 1896.91"/>
                        <polygon class="cls-1" points="752.78 1956.2 745.05 1962.65 715.91 1905.22 723.8 1897.42 752.78 1956.2"/>
                        <polygon class="cls-1" points="668.23 1952.29 676.12 1944.51 701.63 1998.83 693.61 2005.51 668.23 1952.29"/>
                        <polygon class="cls-1" points="693.06 2005.97 684.73 2012.91 660.66 1959.77 667.71 1952.81 693.06 2005.97"/>
                        <polygon class="cls-1" points="676.65 1943.99 683.69 1937.03 709.91 1991.93 702.19 1998.37 676.65 1943.99"/>
                        <polygon class="cls-1" points="684.22 1936.51 691.65 1929.18 718.48 1984.79 710.46 1991.47 684.22 1936.51"/>
                        <polygon class="cls-1" points="692.17 1928.66 699.86 1921.06 726.95 1977.72 719.03 1984.33 692.17 1928.66"/>
                        <polygon class="cls-1" points="700.39 1920.55 707.82 1913.21 735.92 1970.25 727.51 1977.27 700.39 1920.55"/>
                        <polygon class="cls-1" points="620.93 1999 628.16 1991.86 649.87 2041.96 641.88 2048.62 620.93 1999"/>
                        <polygon class="cls-1" points="641.32 2049.08 633.59 2055.53 612.72 2007.11 620.4 1999.53 641.32 2049.08"/>
                        <polygon class="cls-1" points="628.7 1991.33 636.58 1983.55 658.78 2034.54 650.43 2041.49 628.7 1991.33"/>
                        <polygon class="cls-1" points="637.02 1983.11 644.15 1976.08 667.33 2027.41 659.34 2034.07 637.13 1983.07 637.02 1983.11"/>
                        <polygon class="cls-1" points="644.68 1975.55 651.72 1968.6 675.61 2020.51 667.89 2026.95 644.68 1975.55"/>
                        <polygon class="cls-1" points="604.62 2015.11 623.79 2063.46 615.93 2069.59 596.95 2022.56 600.19 2019.48 604.62 2015.11"/>
                        <polygon class="cls-1" points="548.37 2068.69 555.47 2061.95 571.05 2104.61 563.21 2110.73 548.37 2068.69"/>
                        <polygon class="cls-1" points="562.63 2111.19 553.91 2117.99 540.1 2076.55 547.82 2069.22 562.63 2111.19"/>
                        <polygon class="cls-1" points="556.02 2061.43 563.74 2054.1 580.13 2097.54 571.63 2104.16 556.02 2061.43"/>
                        <polygon class="cls-1" points="564.29 2053.58 572 2046.25 588.55 2090.96 580.7 2097.09 564.29 2053.58"/>
                        <polygon class="cls-1" points="572.55 2045.73 580.26 2038.41 597.87 2083.69 589.13 2090.51 572.55 2045.73"/>
                        <polygon class="cls-1" points="580.8 2037.89 588.15 2030.92 606.3 2077.11 598.44 2083.24 580.8 2037.89"/>
                        <polygon class="cls-1" points="588.69 2030.4 596.41 2023.07 615.36 2070.04 606.87 2076.67 588.69 2030.4"/>
                        <polygon class="cls-1" points="553.33 2118.45 545.48 2124.57 531.62 2084.6 539.54 2077.08 553.33 2118.45"/>
                        <polygon class="cls-1" points="544.9 2125.03 536.42 2131.65 523.98 2091.86 531.06 2085.13 544.9 2125.03"/>
                        <polygon class="cls-1" points="515.14 2100.25 527.4 2138.68 518.9 2145.31 507.42 2107.58 515.14 2100.25"/>
                        <polygon class="cls-1" points="506.85 2108.12 518.31 2145.77 510.3 2152.03 499.79 2114.83 506.85 2108.12"/>
                        <polygon class="cls-1" points="483.03 2130.75 490.92 2123.25 500.61 2159.59 492.78 2165.7 483.03 2130.75"/>
                        <polygon class="cls-1" points="492.18 2166.16 483.69 2172.8 474.74 2138.62 482.45 2131.29 492.18 2166.16"/>
                        <polygon class="cls-1" points="457.25 2152.09 464.6 2185.53 456.04 2191.22 447.92 2157.94 457.25 2152.09"/>
                        <polygon class="cls-1" points="455.43 2191.63 446.71 2197.42 438.69 2163.73 447.3 2158.33 455.43 2191.63"/>
                        <polygon class="cls-1" points="334.37 2229.15 343.37 2223.5 352.51 2260.05 343.78 2265.86 334.37 2229.15"/>
                        <polygon class="cls-1" points="343.17 2266.26 334.62 2271.94 324.63 2235.3 324.5 2235.34 333.75 2229.54 343.17 2266.26"/>
                        <polygon class="cls-1" points="343.99 2223.11 352.61 2217.71 361.67 2253.96 353.13 2259.64 343.99 2223.11"/>
                        <polygon class="cls-1" points="353.23 2217.32 362.56 2211.47 370.83 2247.87 362.29 2253.55 353.23 2217.32"/>
                        <polygon class="cls-1" points="363.19 2211.08 371.8 2205.67 380.89 2241.19 371.45 2247.46 363.19 2211.08"/>
                        <polygon class="cls-1" points="372.42 2205.29 381.04 2199.88 390.05 2235.1 381.5 2240.78 372.42 2205.29"/>
                        <polygon class="cls-1" points="381.66 2199.5 390.27 2194.09 399.2 2229.01 390.66 2234.69 381.66 2199.5"/>
                        <polygon class="cls-1" points="390.89 2193.7 400.23 2187.85 408.55 2222.8 399.82 2228.6 390.89 2193.7"/>
                        <polygon class="cls-1" points="400.85 2187.46 409.46 2182.06 417.71 2216.71 409.17 2222.38 400.85 2187.46"/>
                        <polygon class="cls-1" points="410.02 2181.71 418.7 2176.27 427.05 2210.5 418.33 2216.29 410.09 2181.69 410.02 2181.71"/>
                        <polygon class="cls-1" points="419.32 2175.88 428.82 2169.92 436.21 2204.41 427.66 2210.09 419.32 2175.88"/>
                        <polygon class="cls-1" points="429.45 2169.53 438.06 2164.12 446.09 2197.84 436.83 2203.99 429.45 2169.53"/>
                        <polygon class="cls-1" points="314.76 2241.44 324.82 2278.32 315.51 2284.29 306.09 2246.6 311.91 2243.23 314.76 2241.44"/>
                        <polygon class="cls-1" points="189.43 2314.14 198.45 2308.92 211.62 2350.92 203.03 2356.43 189.73 2314.05 189.43 2314.14"/>
                        <polygon class="cls-1" points="202.42 2356.82 193.13 2362.78 179.87 2319.68 189.09 2314.34 202.42 2356.82"/>
                        <polygon class="cls-1" points="199.07 2308.56 208.51 2303.1 220.83 2345.01 212.24 2350.52 199.07 2308.56"/>
                        <polygon class="cls-1" points="209.13 2302.74 218.36 2297.39 230.24 2338.97 221.44 2344.62 209.13 2302.74"/>
                        <polygon class="cls-1" points="218.98 2297.03 227.71 2291.98 240.15 2332.62 230.85 2338.58 218.98 2297.03"/>
                        <polygon class="cls-1" points="228.33 2291.62 237.77 2286.16 249.36 2326.71 240.76 2332.23 228.33 2291.62"/>
                        <polygon class="cls-1" points="238.39 2285.8 246.92 2280.86 258.56 2320.81 249.97 2326.32 238.39 2285.8"/>
                        <polygon class="cls-1" points="247.39 2280.58 256.98 2275.04 267.77 2314.91 259.18 2320.42 247.55 2280.54 247.39 2280.58"/>
                        <polygon class="cls-1" points="257.57 2274.69 266.33 2269.62 277.88 2308.39 278 2308.35 268.39 2314.51 257.6 2274.68 257.57 2274.69"/>
                        <polygon class="cls-1" points="266.95 2269.26 276.18 2263.92 287.09 2302.52 287.09 2302.52 278.5 2308.03 266.95 2269.26"/>
                        <polygon class="cls-1" points="276.81 2263.56 286.25 2258.09 296.3 2296.61 287.71 2302.12 276.81 2263.56"/>
                        <polygon class="cls-1" points="286.87 2257.73 295.59 2252.68 305.5 2290.71 296.91 2296.22 286.87 2257.73"/>
                        <polygon class="cls-1" points="296.21 2252.32 305.46 2246.97 314.89 2284.69 306.12 2290.31 296.21 2252.32"/>
                        <polygon class="cls-1" points="192.52 2363.17 183.92 2368.68 170.51 2325.1 179.25 2320.04 192.52 2363.17"/>
                        <polygon class="cls-1" points="159.83 2331.28 173.89 2375.11 165.28 2380.59 151.19 2336.67 150.69 2336.83 152.71 2335.4 159.83 2331.28"/>
                        <polygon class="cls-1" points="132.82 2349.41 141.48 2343.31 154.76 2387.3 146.16 2392.79 132.82 2349.41"/>
                        <polygon class="cls-1" points="145.55 2393.18 136.95 2398.67 123.55 2355.94 123.53 2355.95 132.21 2349.83 145.55 2393.18"/>
                        <polygon class="cls-1" points="142.08 2342.88 150.54 2336.93 164.67 2380.98 155.37 2386.91 142.08 2342.88"/>
                        <polygon class="cls-1" points="33.06 2464.87 23.09 2426.64 31.56 2420.68 42.38 2458.98 23.68 2470.91 13.83 2433.16 22.48 2427.07 32.39 2465.05 33.06 2464.87"/>
                        <polygon class="cls-1" points="32.17 2420.26 40.83 2414.16 51.6 2453.1 43 2458.59 32.17 2420.26"/>
                        <polygon class="cls-1" points="41.36 2413.79 50.09 2407.64 60.81 2447.23 52.21 2452.71 41.44 2413.76 41.36 2413.79"/>
                        <polygon class="cls-1" points="50.7 2407.21 59.35 2401.12 70.03 2441.35 61.43 2446.83 50.7 2407.21"/>
                        <polygon class="cls-1" points="59.96 2400.69 68.43 2394.73 79.24 2435.47 70.64 2440.96 59.96 2400.69"/>
                        <polygon class="cls-1" points="69.04 2394.3 77.7 2388.2 89.36 2429.02 79.86 2435.08 69.04 2394.3"/>
                        <polygon class="cls-1" points="78.29 2387.79 86.28 2382.16 98.57 2423.14 89.97 2428.63 78.3 2387.78 78.29 2387.79"/>
                        <polygon class="cls-1" points="86.88 2381.74 95.34 2375.79 107.78 2417.27 99.18 2422.75 86.88 2381.74"/>
                        <polygon class="cls-1" points="95.94 2375.36 104.61 2369.26 117 2411.39 108.39 2416.88 95.94 2375.36"/>
                        <polygon class="cls-1" points="105.21 2368.84 113.88 2362.73 126.91 2405.07 117.61 2411 105.21 2368.84"/>
                        <polygon class="cls-1" points="3.03 2440.76 13.22 2433.59 23.06 2471.31 21.95 2472.01 3.03 2440.76"/>
                        <polygon class="cls-1" points="114.49 2362.31 122.94 2356.36 136.34 2399.06 127.52 2404.68 114.49 2362.31"/>
                        <polygon class="cls-1" points="174.5 2374.72 160.45 2330.92 169.89 2325.46 183.31 2369.07 176.65 2373.35 174.5 2374.72"/>
                        <polygon class="cls-1" points="325.44 2277.93 315.38 2241.05 324 2235.65 334.01 2272.35 330.81 2274.48 325.44 2277.93"/>
                        <polygon class="cls-1" points="457.88 2151.7 466.49 2146.3 473.87 2179.36 465.22 2185.12 457.88 2151.7"/>
                        <polygon class="cls-1" points="474.5 2178.95 467.11 2145.87 474.16 2139.17 483.08 2173.24 474.5 2178.95"/>
                        <polygon class="cls-1" points="491.5 2122.71 499.21 2115.38 509.7 2152.49 501.21 2159.12 491.5 2122.71"/>
                        <polygon class="cls-1" points="515.7 2099.72 523.41 2092.39 535.82 2132.11 527.99 2138.22 515.7 2099.72"/>
                        <polygon class="cls-1" points="624.37 2063.01 605.16 2014.58 612.18 2007.64 633.03 2056 628.21 2060.01 624.37 2063.01"/>
                        <polygon class="cls-1" points="652.25 1968.08 660.13 1960.3 684.18 2013.37 676.17 2020.04 652.25 1968.08"/>
                        <polygon class="cls-1" points="708.34 1912.69 715.39 1905.73 744.5 1963.1 736.48 1969.79 708.34 1912.69"/>
                        <polygon class="cls-1" points="762.49 1948.11 731.9 1889.43 732.52 1888.82 740.61 1883.26 770.26 1941.74 768.96 1942.72 762.49 1948.11"/>
                        <polygon class="cls-1" points="741.19 1882.87 749.97 1876.84 779.38 1934.86 770.82 1941.31 741.19 1882.87"/>
                        <polygon class="cls-1" points="787.33 1851.17 796.11 1845.14 823.8 1901.35 815.24 1907.81 787.33 1851.17"/>
                        <polygon class="cls-1" points="913.5 1833.7 889.02 1782.29 898.99 1777.79 922.71 1827.68 915.59 1832.12 913.5 1833.7"/>
                        <polygon class="cls-1" points="909.55 1773.04 919.16 1768.71 941.23 1816.13 932.57 1821.53 909.55 1773.04"/>
                        <polygon class="cls-1" points="1065.09 1738.88 1052.1 1708.82 1054.21 1707.87 1061.53 1704.11 1074.44 1733.14 1071.46 1734.91 1065.09 1738.88"/>
                        <polygon class="cls-1" points="1228.51 1641.84 1202.19 1594.96 1211.77 1591.31 1237.93 1636.28 1229.82 1641.07 1228.51 1641.84"/>
                        <polygon class="cls-1" points="1536.68 1459.89 1526.16 1446.95 1534.89 1441.58 1546.08 1454.37 1544.84 1455.07 1536.68 1459.89"/>
                        <polygon class="cls-1" points="1643.77 1398.83 1640.08 1397.6 1662.17 1388.37 1643.77 1398.83"/>
                        <g id="scene">
                        <text class="cls-3" transform="translate(1632.69 1402.9)"><tspan x="0" y="0">234</tspan></text>
                        <text class="cls-3" transform="translate(1611.74 1412.12)"><tspan x="0" y="0">236</tspan></text>
                        <text class="cls-3" transform="translate(1600.01 1417.98)"><tspan x="0" y="0">237</tspan></text>
                        <text class="cls-3" transform="translate(1589.96 1423.01)"><tspan x="0" y="0">238</tspan></text>
                        <text class="cls-3" transform="translate(1579.9 1428.04)"><tspan x="0" y="0">239</tspan></text>
                        <text class="cls-3" transform="translate(1569.85 1433.06)"><tspan x="0" y="0">240</tspan></text>
                        <text class="cls-3" transform="translate(1560.64 1438.09)"><tspan x="0" y="0">241</tspan></text>
                        <text class="cls-3" transform="translate(1551.42 1443.12)"><tspan x="0" y="0">242</tspan></text>
                        <text class="cls-3" transform="translate(1541.36 1448.98)"><tspan x="0" y="0">243</tspan></text>
                        <text class="cls-3" transform="translate(1531.31 1454.84)"><tspan x="0" y="0">244</tspan></text>
                        <text class="cls-3" transform="translate(1521.26 1459.87)"><tspan x="0" y="0">245</tspan></text>
                        <text class="cls-3" transform="translate(1512.04 1464.9)"><tspan x="0" y="0">246</tspan></text>
                        <text class="cls-3" transform="translate(1503.66 1471.6)"><tspan x="0" y="0">247</tspan></text>
                        <text class="cls-3" transform="translate(1494.44 1477.47)"><tspan x="0" y="0">248</tspan></text>
                        <text class="cls-3" transform="translate(1483.55 1482.49)"><tspan x="0" y="0">249</tspan></text>
                        <text class="cls-3" transform="translate(1475.17 1488.36)"><tspan x="0" y="0">250</tspan></text>
                        <text class="cls-3" transform="translate(1465.12 1494.22)"><tspan x="0" y="0">251</tspan></text>
                        <text class="cls-3" transform="translate(1454.23 1499.25)"><tspan x="0" y="0">252</tspan></text>
                        <text class="cls-3" transform="translate(1444.17 1505.95)"><tspan x="0" y="0">253</tspan></text>
                        <text class="cls-3" transform="translate(1435.8 1511.81)"><tspan x="0" y="0">254</tspan></text>
                        <text class="cls-3" transform="translate(1425.74 1516.84)"><tspan x="0" y="0">255</tspan></text>
                        <text class="cls-3" transform="translate(1415.69 1521.87)"><tspan x="0" y="0">256</tspan></text>
                        <text class="cls-3" transform="translate(1406.47 1527.74)"><tspan x="0" y="0">257</tspan></text>
                        <text class="cls-3" transform="translate(1396.42 1533.59)"><tspan x="0" y="0">258</tspan></text>
                        <text class="cls-3" transform="translate(1387.2 1538.63)"><tspan x="0" y="0">259</tspan></text>
                        <text class="cls-3" transform="translate(1377.15 1544.49)"><tspan x="0" y="0">260</tspan></text>
                        <text class="cls-3" transform="translate(1367.93 1549.52)"><tspan x="0" y="0">261</tspan></text>
                        <text class="cls-3" transform="translate(1357.87 1555.38)"><tspan x="0" y="0">262</tspan></text>
                        <text class="cls-3" transform="translate(1349.5 1561.25)"><tspan x="0" y="0">263</tspan></text>
                        <text class="cls-3" transform="translate(1338.61 1566.27)"><tspan x="0" y="0">264</tspan></text>
                        <text class="cls-3" transform="translate(1328.55 1571.3)"><tspan x="0" y="0">265</tspan></text>
                        <text class="cls-3" transform="translate(1318.49 1576.33)"><tspan x="0" y="0">266</tspan></text>
                        <text class="cls-3" transform="translate(1307.61 1581.36)"><tspan x="0" y="0">267</tspan></text>
                        <text class="cls-3" transform="translate(1299.23 1586.38)"><tspan x="0" y="0">268</tspan></text>
                        <text class="cls-3" transform="translate(1289.17 1593.09)"><tspan x="0" y="0">269</tspan></text>
                        <text class="cls-3" transform="translate(1279.96 1598.95)"><tspan x="0" y="0">270</tspan></text>
                        <text class="cls-3" transform="translate(1269.9 1603.14)"><tspan x="0" y="0">271</tspan></text>
                        <text class="cls-3" transform="translate(1259.85 1609.01)"><tspan x="0" y="0">272</tspan></text>
                        <text class="cls-3" transform="translate(1250.63 1614.87)"><tspan x="0" y="0">273</tspan></text>
                        <text class="cls-3" transform="translate(1241.42 1619.9)"><tspan x="0" y="0">274</tspan></text>
                        <text class="cls-3" transform="translate(1230.53 1624.09)"><tspan x="0" y="0">275</tspan></text>
                        <text class="cls-3" transform="translate(1220.47 1629.12)"><tspan x="0" y="0">276</tspan></text>
                        <text class="cls-3" transform="translate(1211.25 1636.65)"><tspan x="0" y="0">277</tspan></text>
                        <text class="cls-3" transform="translate(1202.87 1643.36)"><tspan x="0" y="0">278</tspan></text>
                        <text class="cls-3" transform="translate(1193.66 1649.22)"><tspan x="0" y="0">279</tspan></text>
                        <text class="cls-3" transform="translate(1184.44 1655.93)"><tspan x="0" y="0">280</tspan></text>
                        <text class="cls-3" transform="translate(1174.39 1660.12)"><tspan x="0" y="0">281</tspan></text>
                        <text class="cls-3" transform="translate(1164.34 1665.98)"><tspan x="0" y="0">282</tspan></text>
                        <text class="cls-3" transform="translate(1155.96 1672.68)"><tspan x="0" y="0">283</tspan></text>
                        <text class="cls-3" transform="translate(1145.91 1678.55)"><tspan x="0" y="0">284</tspan></text>
                        <text class="cls-3" transform="translate(1137.53 1685.25)"><tspan x="0" y="0">285</tspan></text>
                        <text class="cls-3" transform="translate(1128.31 1690.28)"><tspan x="0" y="0">286</tspan></text>
                        <text class="cls-3" transform="translate(1119.09 1696.14)"><tspan x="0" y="0">287</tspan></text>
                        <text class="cls-3" transform="translate(1109.04 1701.17)"><tspan x="0" y="0">288</tspan></text>
                        <text class="cls-3" transform="translate(1099.82 1707.87)"><tspan x="0" y="0">289</tspan></text>
                        <text class="cls-3" transform="translate(1089.77 1712.9)"><tspan x="0" y="0">290</tspan></text>
                        <text class="cls-3" transform="translate(1079.71 1718.76)"><tspan x="0" y="0">291</tspan></text>
                        <text class="cls-3" transform="translate(1070.5 1724.63)"><tspan x="0" y="0">292</tspan></text>
                        <text class="cls-3" transform="translate(1061.28 1730.49)"><tspan x="0" y="0">293</tspan></text>
                        <text class="cls-3" transform="translate(1051.23 1735.52)"><tspan x="0" y="0">294</tspan></text>
                        <text class="cls-3" transform="translate(1041.18 1741.38)"><tspan x="0" y="0">295</tspan></text>
                        <text class="cls-3" transform="translate(1031.96 1747.25)"><tspan x="0" y="0">296</tspan></text>
                        <text class="cls-3" transform="translate(1021.9 1752.27)"><tspan x="0" y="0">297</tspan></text>
                        <text class="cls-3" transform="translate(1011.85 1757.3)"><tspan x="0" y="0">298</tspan></text>
                        <text class="cls-3" transform="translate(1002.64 1762.33)"><tspan x="0" y="0">299</tspan></text>
                        <text class="cls-3" transform="translate(992.58 1768.19)"><tspan x="0" y="0">300</tspan></text>
                        <text class="cls-3" transform="translate(982.53 1774.06)"><tspan x="0" y="0">301</tspan></text>
                        <text class="cls-3" transform="translate(973.31 1779.93)"><tspan x="0" y="0">302</tspan></text>
                        <text class="cls-3" transform="translate(964.1 1786.62)"><tspan x="0" y="0">303</tspan></text>
                        <text class="cls-3" transform="translate(955.72 1793.33)"><tspan x="0" y="0">304</tspan></text>
                        <text class="cls-3" transform="translate(945.66 1800.04)"><tspan x="0" y="0">305</tspan></text>
                        <text class="cls-3" transform="translate(935.6 1805.06)"><tspan x="0" y="0">306</tspan></text>
                        <text class="cls-3" transform="translate(926.39 1811.76)"><tspan x="0" y="0">307</tspan></text>
                        <text class="cls-3" transform="translate(917.17 1817.63)"><tspan x="0" y="0">308</tspan></text>
                        <text class="cls-3" transform="translate(907.12 1823.49)"><tspan x="0" y="0">309</tspan></text>
                        <text class="cls-3" transform="translate(898.74 1831.04)"><tspan x="0" y="0">310</tspan></text>
                        <text class="cls-3" transform="translate(890.36 1837.73)"><tspan x="0" y="0">311</tspan></text>
                        <text class="cls-3" transform="translate(881.15 1844.43)"><tspan x="0" y="0">312</tspan></text>
                        <text class="cls-3" transform="translate(871.93 1851.14)"><tspan x="0" y="0">313</tspan></text>
                        <text class="cls-3" transform="translate(863.55 1858.68)"><tspan x="0" y="0">314</tspan></text>
                        <text class="cls-3" transform="translate(854.34 1864.54)"><tspan x="0" y="0">315</tspan></text>
                        <text class="cls-3" transform="translate(845.12 1870.41)"><tspan x="0" y="0">316</tspan></text>
                        <text class="cls-3" transform="translate(835.06 1877.11)"><tspan x="0" y="0">317</tspan></text>
                        <text class="cls-3" transform="translate(826.69 1882.98)"><tspan x="0" y="0">318</tspan></text>
                        <text class="cls-3" transform="translate(809.09 1897.22)"><tspan x="0" y="0">320</tspan></text>
                        <text class="cls-3" transform="translate(800.72 1905.6)"><tspan x="0" y="0">321</tspan></text>
                        <text class="cls-3" transform="translate(791.5 1911.47)"><tspan x="0" y="0">322</tspan></text>
                        <text class="cls-3" transform="translate(783.12 1918.17)"><tspan x="0" y="0">323</tspan></text>
                        <text class="cls-3" transform="translate(774.74 1925.7)"><tspan x="0" y="0">324</tspan></text>
                        <text class="cls-3" transform="translate(764.69 1932.41)"><tspan x="0" y="0">325</tspan></text>
                        <text class="cls-3" transform="translate(755.47 1937.44)"><tspan x="0" y="0">326</tspan></text>
                        <text class="cls-3" transform="translate(747.09 1945.81)"><tspan x="0" y="0">327</tspan></text>
                        <text class="cls-3" transform="translate(738.72 1952.52)"><tspan x="0" y="0">328</tspan></text>
                        <text class="cls-3" transform="translate(731.17 1960.9)"><tspan x="0" y="0">329</tspan></text>
                        <text class="cls-3" transform="translate(721.96 1968.44)"><tspan x="0" y="0">330</tspan></text>
                        <text class="cls-3" transform="translate(712.74 1973.47)"><tspan x="0" y="0">331</tspan></text>
                        <text class="cls-3" transform="translate(705.2 1981)"><tspan x="0" y="0">332</tspan></text>
                        <text class="cls-3" transform="translate(695.99 1988.54)"><tspan x="0" y="0">333</tspan></text>
                        <text class="cls-3" transform="translate(688.44 1996.93)"><tspan x="0" y="0">334</tspan></text>
                        <text class="cls-3" transform="translate(679.53 2003.32)"><tspan x="0" y="0">335</tspan></text>
                        <text class="cls-3" transform="translate(671.15 2009.18)"><tspan x="0" y="0">336</tspan></text>
                        <text class="cls-3" transform="translate(661.94 2016.73)"><tspan x="0" y="0">337</tspan></text>
                        <text class="cls-3" transform="translate(653.56 2023.43)"><tspan x="0" y="0">338</tspan></text>
                        <text class="cls-3" transform="translate(644.34 2030.97)"><tspan x="0" y="0">339</tspan></text>
                        <text class="cls-3" transform="translate(635.97 2038.51)"><tspan x="0" y="0">340</tspan></text>
                        <text class="cls-3" transform="translate(628.42 2046.05)"><tspan x="0" y="0">341</tspan></text>
                        <text class="cls-3" transform="translate(619.21 2052.76)"><tspan x="0" y="0">342</tspan></text>
                        <text class="cls-3" transform="translate(611.67 2060.3)"><tspan x="0" y="0">343</tspan></text>
                        <text class="cls-3" transform="translate(602.45 2067.83)"><tspan x="0" y="0">344</tspan></text>
                        <text class="cls-3" transform="translate(593.24 2074.54)"><tspan x="0" y="0">345</tspan></text>
                        <text class="cls-3" transform="translate(584.86 2081.24)"><tspan x="0" y="0">346</tspan></text>
                        <text class="cls-3" transform="translate(575.64 2087.94)"><tspan x="0" y="0">347</tspan></text>
                        <text class="cls-3" transform="translate(567.26 2093.81)"><tspan x="0" y="0">348</tspan></text>
                        <text class="cls-3" transform="translate(558.89 2099.67)"><tspan x="0" y="0">349</tspan></text>
                        <text class="cls-3" transform="translate(549.67 2107.21)"><tspan x="0" y="0">350</tspan></text>
                        <text class="cls-3" transform="translate(541.29 2114.76)"><tspan x="0" y="0">351</tspan></text>
                        <text class="cls-3" transform="translate(532.07 2121.45)"><tspan x="0" y="0">352</tspan></text>
                        <text class="cls-3" transform="translate(523.7 2128.16)"><tspan x="0" y="0">353</tspan></text>
                        <text class="cls-3" transform="translate(515.32 2136.54)"><tspan x="0" y="0">354</tspan></text>
                        <text class="cls-3" transform="translate(506.94 2143.24)"><tspan x="0" y="0">355</tspan></text>
                        <text class="cls-3" transform="translate(497.72 2149.1)"><tspan x="0" y="0">356</tspan></text>
                        <text class="cls-3" transform="translate(488.51 2155.81)"><tspan x="0" y="0">357</tspan></text>
                        <text class="cls-3" transform="translate(480.13 2163.35)"><tspan x="0" y="0">358</tspan></text>
                        <text class="cls-3" transform="translate(470.91 2170.06)"><tspan x="0" y="0">359</tspan></text>
                        <text class="cls-3" transform="translate(462.53 2177.59)"><tspan x="0" y="0">360</tspan></text>
                        <text class="cls-3" transform="translate(453.31 2183.45)"><tspan x="0" y="0">361</tspan></text>
                        <text class="cls-3" transform="translate(443.26 2190.16)"><tspan x="0" y="0">362</tspan></text>
                        <text class="cls-3" transform="translate(434.89 2196.02)"><tspan x="0" y="0">363</tspan></text>
                        <text class="cls-3" transform="translate(424.83 2201.89)"><tspan x="0" y="0">364</tspan></text>
                        <text class="cls-3" transform="translate(415.62 2208.59)"><tspan x="0" y="0">365</tspan></text>
                        <text class="cls-3" transform="translate(406.4 2213.62)"><tspan x="0" y="0">366</tspan></text>
                        <text class="cls-3" transform="translate(397.19 2221.16)"><tspan x="0" y="0">367</tspan></text>
                        <text class="cls-3" transform="translate(387.13 2226.19)"><tspan x="0" y="0">368</tspan></text>
                        <text class="cls-3" transform="translate(377.92 2232.88)"><tspan x="0" y="0">369</tspan></text>
                        <text class="cls-3" transform="translate(368.7 2238.75)"><tspan x="0" y="0">370</tspan></text>
                        <text class="cls-3" transform="translate(360.32 2245.45)"><tspan x="0" y="0">371</tspan></text>
                        <text class="cls-3" transform="translate(350.26 2251.32)"><tspan x="0" y="0">372</tspan></text>
                        <text class="cls-3" transform="translate(341.05 2257.19)"><tspan x="0" y="0">373</tspan></text>
                        <text class="cls-3" transform="translate(331.83 2264.72)"><tspan x="0" y="0">374</tspan></text>
                        <text class="cls-3" transform="translate(322.62 2271.43)"><tspan x="0" y="0">375</tspan></text>
                        <text class="cls-3" transform="translate(303.35 2283.16)"><tspan x="0" y="0">377</tspan></text>
                        <text class="cls-3" transform="translate(294.13 2288.18)"><tspan x="0" y="0">378</tspan></text>
                        <text class="cls-3" transform="translate(284.91 2294.05)"><tspan x="0" y="0">379</tspan></text>
                        <text class="cls-3" transform="translate(274.86 2299.92)"><tspan x="0" y="0">380</tspan></text>
                        <text class="cls-3" transform="translate(265.64 2304.94)"><tspan x="0" y="0">381</tspan></text>
                        <text class="cls-3" transform="translate(255.59 2311.65)"><tspan x="0" y="0">382</tspan></text>
                        <text class="cls-3" transform="translate(247.21 2318.34)"><tspan x="0" y="0">383</tspan></text>
                        <text class="cls-3" transform="translate(237.15 2323.38)"><tspan x="0" y="0">384</tspan></text>
                        <text class="cls-3" transform="translate(227.94 2330.92)"><tspan x="0" y="0">385</tspan></text>
                        <text class="cls-3" transform="translate(218.72 2335.95)"><tspan x="0" y="0">386</tspan></text>
                        <text class="cls-3" transform="translate(208.67 2340.97)"><tspan x="0" y="0">387</tspan></text>
                        <text class="cls-3" transform="translate(198.62 2345.99)"><tspan x="0" y="0">388</tspan></text>
                        <text class="cls-3" transform="translate(189.4 2354.38)"><tspan x="0" y="0">389</tspan></text>
                        <text class="cls-3" transform="translate(181.02 2361.08)"><tspan x="0" y="0">390</tspan></text>
                        <text class="cls-3" transform="translate(170.97 2366.11)"><tspan x="0" y="0">391</tspan></text>
                        <text class="cls-3" transform="translate(161.75 2371.97)"><tspan x="0" y="0">392</tspan></text>
                        <text class="cls-3" transform="translate(152.54 2377.83)"><tspan x="0" y="0">393</tspan></text>
                        <text class="cls-3" transform="translate(142.48 2384.54)"><tspan x="0" y="0">394</tspan></text>
                        <text class="cls-3" transform="translate(134.1 2389.56)"><tspan x="0" y="0">395</tspan></text>
                        <text class="cls-3" transform="translate(124.05 2395.43)"><tspan x="0" y="0">396</tspan></text>
                        <text class="cls-3" transform="translate(113.99 2401.29)"><tspan x="0" y="0">397</tspan></text>
                        <text class="cls-3" transform="translate(104.78 2407.15)"><tspan x="0" y="0">398</tspan></text>
                        <text class="cls-3" transform="translate(95.56 2414.7)"><tspan x="0" y="0">399</tspan></text>
                        <text class="cls-3" transform="translate(86.35 2419.73)"><tspan x="0" y="0">400</tspan></text>
                        <text class="cls-3" transform="translate(77.13 2426.43)"><tspan x="0" y="0">401</tspan></text>
                        <text class="cls-3" transform="translate(67.91 2431.45)"><tspan x="0" y="0">402</tspan></text>
                        <text class="cls-3" transform="translate(58.69 2438.16)"><tspan x="0" y="0">403</tspan></text>
                        <text class="cls-3" transform="translate(48.64 2444.86)"><tspan x="0" y="0">404</tspan></text>
                        <text class="cls-3" transform="translate(39.43 2450.73)"><tspan x="0" y="0">405</tspan></text>
                        <text class="cls-3" transform="translate(30.21 2455.76)"><tspan x="0" y="0">406</tspan></text>
                        <text class="cls-3" transform="translate(20.15 2462.45)"><tspan x="0" y="0">407</tspan></text>
                        <text class="cls-3" transform="translate(5.92 2446.54)"><tspan x="0" y="0">408</tspan></text>
                        <text class="cls-3" transform="translate(313.4 2277.3)"><tspan x="0" y="0">376</tspan></text>
                        <text class="cls-3" transform="translate(818.31 1890.52)"><tspan x="0" y="0">319</tspan></text>
                        <text class="cls-3" transform="translate(1620.96 1407.93)"><tspan x="0" y="0">235</tspan></text>
                        <text class="cls-3" transform="translate(1644.42 1396.2)"><tspan x="0" y="0">233</tspan></text>
                    </g>
                    <g>
                        <text class="cls-3" transform="translate(3881.74 37.76)"><tspan x="0" y="0">2</tspan></text>
                        <text class="cls-3" transform="translate(3890.96 32.72)"><tspan x="0" y="0">1</tspan></text>
                        <text class="cls-3" transform="translate(3871.69 43.62)"><tspan x="0" y="0">3</tspan></text>
                        <text class="cls-3" transform="translate(3862.47 49.49)"><tspan x="0" y="0">4</tspan></text>
                        <text class="cls-3" transform="translate(3852.42 55.35)"><tspan x="0" y="0">5</tspan></text>
                        <text class="cls-3" transform="translate(3843.2 60.38)"><tspan x="0" y="0">6</tspan></text>
                        <text class="cls-3" transform="translate(3833.15 66.25)"><tspan x="0" y="0">7</tspan></text>
                        <text class="cls-3" transform="translate(3823.93 72.11)"><tspan x="0" y="0">8</tspan></text>
                        <text class="cls-3" transform="translate(3813.88 77.13)"><tspan x="0" y="0">9</tspan></text>
                        <text class="cls-3" transform="translate(3802.15 83.84)"><tspan x="0" y="0">10</tspan></text>
                        <text class="cls-3" transform="translate(3792.93 89.7)"><tspan x="0" y="0">11</tspan></text>
                        <text class="cls-3" transform="translate(3782.88 94.73)"><tspan x="0" y="0">12</tspan></text>
                        <text class="cls-3" transform="translate(3772.82 100.6)"><tspan x="0" y="0">13</tspan></text>
                        <text class="cls-3" transform="translate(3763.61 106.46)"><tspan x="0" y="0">14</tspan></text>
                        <text class="cls-3" transform="translate(3753.55 112.33)"><tspan x="0" y="0">15</tspan></text>
                        <text class="cls-3" transform="translate(3744.33 118.19)"><tspan x="0" y="0">16</tspan></text>
                        <text class="cls-3" transform="translate(3734.28 123.22)"><tspan x="0" y="0">17</tspan></text>
                        <text class="cls-3" transform="translate(3725.06 129.08)"><tspan x="0" y="0">18</tspan></text>
                        <text class="cls-3" transform="translate(3715.01 134.95)"><tspan x="0" y="0">19</tspan></text>
                        <text class="cls-3" transform="translate(3706.64 139.97)"><tspan x="0" y="0">20</tspan></text>
                        <text class="cls-3" transform="translate(3697.42 145.84)"><tspan x="0" y="0">21</tspan></text>
                        <text class="cls-3" transform="translate(3687.37 151.7)"><tspan x="0" y="0">22</tspan></text>
                        <text class="cls-3" transform="translate(3676.47 156.73)"><tspan x="0" y="0">23</tspan></text>
                        <text class="cls-3" transform="translate(3667.25 163.43)"><tspan x="0" y="0">24</tspan></text>
                        <text class="cls-3" transform="translate(3658.04 168.46)"><tspan x="0" y="0">25</tspan></text>
                        <text class="cls-3" transform="translate(3648.82 174.33)"><tspan x="0" y="0">26</tspan></text>
                        <text class="cls-3" transform="translate(3638.77 180.19)"><tspan x="0" y="0">27</tspan></text>
                        <text class="cls-3" transform="translate(3628.72 186.06)"><tspan x="0" y="0">28</tspan></text>
                        <text class="cls-3" transform="translate(3618.66 191.08)"><tspan x="0" y="0">29</tspan></text>
                        <text class="cls-3" transform="translate(3609.45 196.95)"><tspan x="0" y="0">30</tspan></text>
                        <text class="cls-3" transform="translate(3600.23 202.82)"><tspan x="0" y="0">31</tspan></text>
                        <text class="cls-3" transform="translate(3589.34 207.84)"><tspan x="0" y="0">32</tspan></text>
                        <text class="cls-3" transform="translate(3580.96 213.7)"><tspan x="0" y="0">33</tspan></text>
                        <text class="cls-3" transform="translate(3570.9 219.57)"><tspan x="0" y="0">34</tspan></text>
                        <text class="cls-3" transform="translate(3560.85 225.43)"><tspan x="0" y="0">35</tspan></text>
                        <text class="cls-3" transform="translate(3554.14 230.46)"><tspan x="0" y="0">36</tspan></text>
                        <text class="cls-3" transform="translate(3541.58 237.16)"><tspan x="0" y="0">37</tspan></text>
                        <text class="cls-3" transform="translate(3533.21 243.02)"><tspan x="0" y="0">38</tspan></text>
                        <text class="cls-3" transform="translate(3522.31 248.9)"><tspan x="0" y="0">39</tspan></text>
                        <text class="cls-3" transform="translate(3512.26 253.92)"><tspan x="0" y="0">40</tspan></text>
                        <text class="cls-3" transform="translate(3504.71 258.95)"><tspan x="0" y="0">41</tspan></text>
                        <text class="cls-3" transform="translate(3493.82 264.82)"><tspan x="0" y="0">42</tspan></text>
                        <text class="cls-3" transform="translate(3483.77 270.67)"><tspan x="0" y="0">43</tspan></text>
                        <text class="cls-3" transform="translate(3475.39 276.54)"><tspan x="0" y="0">44</tspan></text>
                        <text class="cls-3" transform="translate(3465.33 281.57)"><tspan x="0" y="0">45</tspan></text>
                        <text class="cls-3" transform="translate(3456.12 287.43)"><tspan x="0" y="0">46</tspan></text>
                        <text class="cls-3" transform="translate(3446.06 293.31)"><tspan x="0" y="0">47</tspan></text>
                        <text class="cls-3" transform="translate(3436.02 299.16)"><tspan x="0" y="0">48</tspan></text>
                        <text class="cls-3" transform="translate(3426.8 305.02)"><tspan x="0" y="0">49</tspan></text>
                        <text class="cls-3" transform="translate(3416.74 310.06)"><tspan x="0" y="0">50</tspan></text>
                        <text class="cls-3" transform="translate(3406.69 315.08)"><tspan x="0" y="0">51</tspan></text>
                        <text class="cls-3" transform="translate(3397.47 320.95)"><tspan x="0" y="0">52</tspan></text>
                        <text class="cls-3" transform="translate(3387.42 325.97)"><tspan x="0" y="0">53</tspan></text>
                        <text class="cls-3" transform="translate(3378.21 331)"><tspan x="0" y="0">54</tspan></text>
                        <text class="cls-3" transform="translate(3368.15 336.03)"><tspan x="0" y="0">55</tspan></text>
                        <text class="cls-3" transform="translate(3358.1 341.89)"><tspan x="0" y="0">56</tspan></text>
                        <text class="cls-3" transform="translate(3348.88 346.92)"><tspan x="0" y="0">57</tspan></text>
                        <text class="cls-3" transform="translate(3338.82 351.95)"><tspan x="0" y="0">58</tspan></text>
                        <text class="cls-3" transform="translate(3328.77 357.81)"><tspan x="0" y="0">59</tspan></text>
                        <text class="cls-3" transform="translate(3318.71 362.84)"><tspan x="0" y="0">60</tspan></text>
                        <text class="cls-3" transform="translate(3309.5 367.86)"><tspan x="0" y="0">61</tspan></text>
                        <text class="cls-3" transform="translate(3297.77 373.73)"><tspan x="0" y="0">62</tspan></text>
                        <text class="cls-3" transform="translate(3288.56 378.76)"><tspan x="0" y="0">63</tspan></text>
                        <text class="cls-3" transform="translate(3278.5 383.79)"><tspan x="0" y="0">64</tspan></text>
                        <text class="cls-3" transform="translate(3268.45 389.65)"><tspan x="0" y="0">65</tspan></text>
                        <text class="cls-3" transform="translate(3259.23 394.67)"><tspan x="0" y="0">66</tspan></text>
                        <text class="cls-3" transform="translate(3249.17 400.54)"><tspan x="0" y="0">67</tspan></text>
                        <text class="cls-3" transform="translate(3239.12 407.24)"><tspan x="0" y="0">68</tspan></text>
                        <text class="cls-3" transform="translate(3229.9 413.11)"><tspan x="0" y="0">69</tspan></text>
                        <text class="cls-3" transform="translate(3220.69 418.97)"><tspan x="0" y="0">70</tspan></text>
                        <text class="cls-3" transform="translate(3211.47 424.84)"><tspan x="0" y="0">71</tspan></text>
                        <text class="cls-3" transform="translate(3202.26 431.54)"><tspan x="0" y="0">72</tspan></text>
                        <text class="cls-3" transform="translate(3193.05 437.41)"><tspan x="0" y="0">73</tspan></text>
                        <text class="cls-3" transform="translate(3183.83 443.27)"><tspan x="0" y="0">74</tspan></text>
                        <text class="cls-3" transform="translate(3174.61 449.97)"><tspan x="0" y="0">75</tspan></text>
                        <text class="cls-3" transform="translate(3164.55 455.84)"><tspan x="0" y="0">76</tspan></text>
                        <text class="cls-3" transform="translate(3155.34 461.7)"><tspan x="0" y="0">77</tspan></text>
                        <text class="cls-3" transform="translate(3146.12 467.58)"><tspan x="0" y="0">78</tspan></text>
                        <text class="cls-3" transform="translate(3136.9 474.27)"><tspan x="0" y="0">79</tspan></text>
                        <text class="cls-3" transform="translate(3127.69 480.13)"><tspan x="0" y="0">80</tspan></text>
                        <text class="cls-3" transform="translate(3118.47 486.01)"><tspan x="0" y="0">81</tspan></text>
                        <text class="cls-3" transform="translate(3109.26 492.7)"><tspan x="0" y="0">82</tspan></text>
                        <text class="cls-3" transform="translate(3100.04 497.73)"><tspan x="0" y="0">83</tspan></text>
                        <text class="cls-3" transform="translate(3089.99 503.59)"><tspan x="0" y="0">84</tspan></text>
                        <text class="cls-3" transform="translate(3080.77 509.46)"><tspan x="0" y="0">85</tspan></text>
                        <text class="cls-3" transform="translate(3070.72 515.32)"><tspan x="0" y="0">86</tspan></text>
                        <text class="cls-3" transform="translate(3060.66 520.35)"><tspan x="0" y="0">87</tspan></text>
                        <text class="cls-3" transform="translate(3051.45 526.22)"><tspan x="0" y="0">88</tspan></text>
                        <text class="cls-3" transform="translate(3041.39 532.08)"><tspan x="0" y="0">89</tspan></text>
                        <text class="cls-3" transform="translate(3032.17 537.95)"><tspan x="0" y="0">90</tspan></text>
                        <text class="cls-3" transform="translate(3022.12 543.81)"><tspan x="0" y="0">91</tspan></text>
                        <text class="cls-3" transform="translate(3012.9 548.84)"><tspan x="0" y="0">92</tspan></text>
                        <text class="cls-3" transform="translate(3002.85 554.7)"><tspan x="0" y="0">93</tspan></text>
                        <text class="cls-3" transform="translate(2993.64 560.57)"><tspan x="0" y="0">94</tspan></text>
                        <text class="cls-3" transform="translate(2984.42 566.43)"><tspan x="0" y="0">95</tspan></text>
                        <text class="cls-3" transform="translate(2974.37 572.3)"><tspan x="0" y="0">96</tspan></text>
                        <text class="cls-3" transform="translate(2965.15 577.33)"><tspan x="0" y="0">97</tspan></text>
                        <text class="cls-3" transform="translate(2955.09 583.19)"><tspan x="0" y="0">98</tspan></text>
                        <text class="cls-3" transform="translate(2947.55 589.06)"><tspan x="0" y="0">99</tspan></text>
                        <text class="cls-3" transform="translate(2934.15 594.92)"><tspan x="0" y="0">100</tspan></text>
                        <text class="cls-3" transform="translate(2924.94 600.78)"><tspan x="0" y="0">101</tspan></text>
                        <text class="cls-3" transform="translate(2914.88 605.81)"><tspan x="0" y="0">102</tspan></text>
                        <text class="cls-3" transform="translate(2905.67 611.68)"><tspan x="0" y="0">103</tspan></text>
                        <text class="cls-3" transform="translate(2895.61 617.54)"><tspan x="0" y="0">104</tspan></text>
                        <text class="cls-3" transform="translate(2885.55 623.41)"><tspan x="0" y="0">105</tspan></text>
                        <text class="cls-3" transform="translate(2876.33 629.27)"><tspan x="0" y="0">106</tspan></text>
                        <text class="cls-3" transform="translate(2866.28 634.3)"><tspan x="0" y="0">107</tspan></text>
                        <text class="cls-3" transform="translate(2857.07 640.17)"><tspan x="0" y="0">108</tspan></text>
                        <text class="cls-3" transform="translate(2847.01 646.02)"><tspan x="0" y="0">109</tspan></text>
                        <text class="cls-3" transform="translate(2837.8 651.89)"><tspan x="0" y="0">110</tspan></text>
                        <text class="cls-3" transform="translate(2828.58 657.76)"><tspan x="0" y="0">111</tspan></text>
                        <text class="cls-3" transform="translate(2818.53 662.79)"><tspan x="0" y="0">112</tspan></text>
                        <text class="cls-3" transform="translate(2809.31 668.65)"><tspan x="0" y="0">113</tspan></text>
                        <text class="cls-3" transform="translate(2800.09 674.51)"><tspan x="0" y="0">114</tspan></text>
                        <text class="cls-3" transform="translate(2790.04 680.38)"><tspan x="0" y="0">115</tspan></text>
                        <text class="cls-3" transform="translate(2780.82 686.24)"><tspan x="0" y="0">116</tspan></text>
                        <text class="cls-3" transform="translate(2770.77 691.27)"><tspan x="0" y="0">117</tspan></text>
                        <text class="cls-3" transform="translate(2760.72 697.14)"><tspan x="0" y="0">118</tspan></text>
                        <text class="cls-3" transform="translate(2751.5 703)"><tspan x="0" y="0">119</tspan></text>
                        <text class="cls-3" transform="translate(2741.45 708.87)"><tspan x="0" y="0">120</tspan></text>
                        <text class="cls-3" transform="translate(2732.23 714.73)"><tspan x="0" y="0">121</tspan></text>
                        <text class="cls-3" transform="translate(2722.18 719.76)"><tspan x="0" y="0">122</tspan></text>
                        <text class="cls-3" transform="translate(2712.96 725.63)"><tspan x="0" y="0">123</tspan></text>
                        <text class="cls-3" transform="translate(2702.91 731.49)"><tspan x="0" y="0">124</tspan></text>
                        <text class="cls-3" transform="translate(2693.69 737.35)"><tspan x="0" y="0">125</tspan></text>
                        <text class="cls-3" transform="translate(2684.47 743.22)"><tspan x="0" y="0">126</tspan></text>
                        <text class="cls-3" transform="translate(2674.42 748.24)"><tspan x="0" y="0">127</tspan></text>
                        <text class="cls-3" transform="translate(2665.21 754.11)"><tspan x="0" y="0">128</tspan></text>
                        <text class="cls-3" transform="translate(2655.15 759.97)"><tspan x="0" y="0">129</tspan></text>
                        <text class="cls-3" transform="translate(2645.94 765.83)"><tspan x="0" y="0">130</tspan></text>
                        <text class="cls-3" transform="translate(2635.88 771.7)"><tspan x="0" y="0">131</tspan></text>
                        <text class="cls-3" transform="translate(2626.67 776.73)"><tspan x="0" y="0">132</tspan></text>
                        <text class="cls-3" transform="translate(2616.61 782.59)"><tspan x="0" y="0">133</tspan></text>
                        <text class="cls-3" transform="translate(2607.39 788.47)"><tspan x="0" y="0">134</tspan></text>
                        <text class="cls-3" transform="translate(2597.34 794.32)"><tspan x="0" y="0">135</tspan></text>
                        <text class="cls-3" transform="translate(2588.12 799.35)"><tspan x="0" y="0">136</tspan></text>
                        <text class="cls-3" transform="translate(2578.06 805.22)"><tspan x="0" y="0">137</tspan></text>
                        <text class="cls-3" transform="translate(2568.85 811.08)"><tspan x="0" y="0">138</tspan></text>
                        <text class="cls-3" transform="translate(2558.8 816.95)"><tspan x="0" y="0">139</tspan></text>
                        <text class="cls-3" transform="translate(2549.59 822.81)"><tspan x="0" y="0">140</tspan></text>
                        <text class="cls-3" transform="translate(2539.53 827.84)"><tspan x="0" y="0">141</tspan></text>
                        <text class="cls-3" transform="translate(2530.31 833.7)"><tspan x="0" y="0">142</tspan></text>
                        <text class="cls-3" transform="translate(2520.26 839.57)"><tspan x="0" y="0">143</tspan></text>
                        <text class="cls-3" transform="translate(2510.21 845.43)"><tspan x="0" y="0">144</tspan></text>
                        <text class="cls-3" transform="translate(2500.99 850.46)"><tspan x="0" y="0">145</tspan></text>
                        <text class="cls-3" transform="translate(2490.94 856.32)"><tspan x="0" y="0">146</tspan></text>
                        <text class="cls-3" transform="translate(2481.72 862.19)"><tspan x="0" y="0">147</tspan></text>
                        <text class="cls-3" transform="translate(2471.67 868.06)"><tspan x="0" y="0">148</tspan></text>
                        <text class="cls-3" transform="translate(2462.45 873.93)"><tspan x="0" y="0">149</tspan></text>
                        <text class="cls-3" transform="translate(2453.23 879.78)"><tspan x="0" y="0">150</tspan></text>
                        <text class="cls-3" transform="translate(2444.02 885.65)"><tspan x="0" y="0">151</tspan></text>
                        <text class="cls-3" transform="translate(2433.96 891.52)"><tspan x="0" y="0">152</tspan></text>
                        <text class="cls-3" transform="translate(2424.74 897.38)"><tspan x="0" y="0">153</tspan></text>
                        <text class="cls-3" transform="translate(2415.53 903.24)"><tspan x="0" y="0">154</tspan></text>
                        <text class="cls-3" transform="translate(2405.47 909.11)"><tspan x="0" y="0">155</tspan></text>
                        <text class="cls-3" transform="translate(2396.26 914.97)"><tspan x="0" y="0">156</tspan></text>
                        <text class="cls-3" transform="translate(2387.05 920.84)"><tspan x="0" y="0">157</tspan></text>
                        <text class="cls-3" transform="translate(2376.99 926.7)"><tspan x="0" y="0">158</tspan></text>
                        <text class="cls-3" transform="translate(2367.77 932.57)"><tspan x="0" y="0">159</tspan></text>
                        <text class="cls-3" transform="translate(2357.72 938.43)"><tspan x="0" y="0">160</tspan></text>
                        <text class="cls-3" transform="translate(2348.5 944.3)"><tspan x="0" y="0">161</tspan></text>
                        <text class="cls-3" transform="translate(2339.28 950.16)"><tspan x="0" y="0">162</tspan></text>
                        <text class="cls-3" transform="translate(2329.23 956.03)"><tspan x="0" y="0">163</tspan></text>
                        <text class="cls-3" transform="translate(2320.01 961.9)"><tspan x="0" y="0">164</tspan></text>
                        <text class="cls-3" transform="translate(2310.8 968.59)"><tspan x="0" y="0">165</tspan></text>
                        <text class="cls-3" transform="translate(2301.58 974.46)"><tspan x="0" y="0">166</tspan></text>
                        <text class="cls-3" transform="translate(2291.53 980.33)"><tspan x="0" y="0">167</tspan></text>
                        <text class="cls-3" transform="translate(2282.31 987.03)"><tspan x="0" y="0">168</tspan></text>
                        <text class="cls-3" transform="translate(2263.89 998.76)"><tspan x="0" y="0">170</tspan></text>
                        <text class="cls-3" transform="translate(2253.83 1004.62)"><tspan x="0" y="0">171</tspan></text>
                        <text class="cls-3" transform="translate(2244.61 1011.33)"><tspan x="0" y="0">172</tspan></text>
                        <text class="cls-3" transform="translate(2235.4 1017.18)"><tspan x="0" y="0">173</tspan></text>
                        <text class="cls-3" transform="translate(2226.18 1023.05)"><tspan x="0" y="0">174</tspan></text>
                        <text class="cls-3" transform="translate(2216.12 1029.76)"><tspan x="0" y="0">175</tspan></text>
                        <text class="cls-3" transform="translate(2206.91 1035.62)"><tspan x="0" y="0">176</tspan></text>
                        <text class="cls-3" transform="translate(2197.69 1041.49)"><tspan x="0" y="0">177</tspan></text>
                        <text class="cls-3" transform="translate(2188.47 1047.35)"><tspan x="0" y="0">178</tspan></text>
                        <text class="cls-3" transform="translate(2179.26 1054.05)"><tspan x="0" y="0">179</tspan></text>
                        <text class="cls-3" transform="translate(2170.05 1059.92)"><tspan x="0" y="0">180</tspan></text>
                        <text class="cls-3" transform="translate(2159.99 1065.79)"><tspan x="0" y="0">181</tspan></text>
                        <text class="cls-3" transform="translate(2150.77 1072.48)"><tspan x="0" y="0">182</tspan></text>
                        <text class="cls-3" transform="translate(2140.72 1078.35)"><tspan x="0" y="0">183</tspan></text>
                        <text class="cls-3" transform="translate(2131.5 1084.22)"><tspan x="0" y="0">184</tspan></text>
                        <text class="cls-3" transform="translate(2122.28 1090.08)"><tspan x="0" y="0">185</tspan></text>
                        <text class="cls-3" transform="translate(2113.07 1096.79)"><tspan x="0" y="0">186</tspan></text>
                        <text class="cls-3" transform="translate(2103.85 1102.65)"><tspan x="0" y="0">187</tspan></text>
                        <text class="cls-3" transform="translate(2093.8 1108.51)"><tspan x="0" y="0">188</tspan></text>
                        <text class="cls-3" transform="translate(2084.58 1115.22)"><tspan x="0" y="0">189</tspan></text>
                        <text class="cls-3" transform="translate(2075.37 1121.08)"><tspan x="0" y="0">190</tspan></text>
                        <text class="cls-3" transform="translate(2066.15 1126.95)"><tspan x="0" y="0">191</tspan></text>
                        <text class="cls-3" transform="translate(2056.94 1132.81)"><tspan x="0" y="0">192</tspan></text>
                        <text class="cls-3" transform="translate(2047.72 1139.51)"><tspan x="0" y="0">193</tspan></text>
                        <text class="cls-3" transform="translate(2037.67 1145.38)"><tspan x="0" y="0">194</tspan></text>
                        <text class="cls-3" transform="translate(2019.23 1157.1)"><tspan x="0" y="0">196</tspan></text>
                        <text class="cls-3" transform="translate(2010.01 1163.81)"><tspan x="0" y="0">197</tspan></text>
                        <text class="cls-3" transform="translate(2000.8 1169.67)"><tspan x="0" y="0">198</tspan></text>
                        <text class="cls-3" transform="translate(1990.75 1175.54)"><tspan x="0" y="0">199</tspan></text>
                        <text class="cls-3" transform="translate(1981.53 1181.41)"><tspan x="0" y="0">200</tspan></text>
                        <text class="cls-3" transform="translate(1972.31 1188.11)"><tspan x="0" y="0">201</tspan></text>
                        <text class="cls-3" transform="translate(1963.1 1193.97)"><tspan x="0" y="0">202</tspan></text>
                        <text class="cls-3" transform="translate(1953.88 1199.84)"><tspan x="0" y="0">203</tspan></text>
                        <text class="cls-3" transform="translate(1943.83 1205.7)"><tspan x="0" y="0">204</tspan></text>
                        <text class="cls-3" transform="translate(1934.61 1212.4)"><tspan x="0" y="0">205</tspan></text>
                        <text class="cls-3" transform="translate(1925.4 1218.27)"><tspan x="0" y="0">206</tspan></text>
                        <text class="cls-3" transform="translate(1916.18 1224.13)"><tspan x="0" y="0">207</tspan></text>
                        <text class="cls-3" transform="translate(1906.12 1230)"><tspan x="0" y="0">208</tspan></text>
                        <text class="cls-3" transform="translate(1896.91 1236.7)"><tspan x="0" y="0">209</tspan></text>
                        <text class="cls-3" transform="translate(1889.37 1242.57)"><tspan x="0" y="0">210</tspan></text>
                        <text class="cls-3" transform="translate(1879.32 1248.43)"><tspan x="0" y="0">211</tspan></text>
                        <text class="cls-3" transform="translate(1870.1 1254.29)"><tspan x="0" y="0">212</tspan></text>
                        <text class="cls-3" transform="translate(1860.89 1260.16)"><tspan x="0" y="0">213</tspan></text>
                        <text class="cls-3" transform="translate(1851.67 1266.86)"><tspan x="0" y="0">214</tspan></text>
                        <text class="cls-3" transform="translate(1841.61 1271.9)"><tspan x="0" y="0">215</tspan></text>
                        <text class="cls-3" transform="translate(1832.4 1277.76)"><tspan x="0" y="0">216</tspan></text>
                        <text class="cls-3" transform="translate(1822.34 1283.62)"><tspan x="0" y="0">217</tspan></text>
                        <text class="cls-3" transform="translate(1812.29 1289.49)"><tspan x="0" y="0">218</tspan></text>
                        <text class="cls-3" transform="translate(1803.91 1295.35)"><tspan x="0" y="0">219</tspan></text>
                        <text class="cls-3" transform="translate(1794.69 1301.22)"><tspan x="0" y="0">220</tspan></text>
                        <text class="cls-3" transform="translate(1784.64 1307.08)"><tspan x="0" y="0">221</tspan></text>
                        <text class="cls-3" transform="translate(1775.42 1312.94)"><tspan x="0" y="0">222</tspan></text>
                        <text class="cls-3" transform="translate(1766.21 1318.81)"><tspan x="0" y="0">223</tspan></text>
                        <text class="cls-3" transform="translate(1756.15 1324.67)"><tspan x="0" y="0">224</tspan></text>
                        <text class="cls-3" transform="translate(1746.94 1330.54)"><tspan x="0" y="0">225</tspan></text>
                        <text class="cls-3" transform="translate(1737.72 1336.4)"><tspan x="0" y="0">226</tspan></text>
                        <text class="cls-3" transform="translate(1728.5 1342.27)"><tspan x="0" y="0">227</tspan></text>
                        <text class="cls-3" transform="translate(1719.29 1348.13)"><tspan x="0" y="0">228</tspan></text>
                        <text class="cls-3" transform="translate(1710.07 1354)"><tspan x="0" y="0">229</tspan></text>
                        <text class="cls-3" transform="translate(1701.69 1359.02)"><tspan x="0" y="0">230</tspan></text>
                        <text class="cls-3" transform="translate(1692.48 1364.89)"><tspan x="0" y="0">231</tspan></text>
                        <text class="cls-3" transform="translate(2273.1 992.89)"><tspan x="0" y="0">169</tspan></text>
                        <text class="cls-3" transform="translate(2028.45 1151.24)"><tspan x="0" y="0">195</tspan></text>
                        <text class="cls-3" transform="translate(1678.23 1374.11)"><tspan x="0" y="0">232</tspan></text>
                    </g>
                    <g>
                        <path class="cls-2" d="m3881.74,2.14c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3720.04,92.63c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3742.56,125.73c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3902.69,32.31c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3567.55,191.5c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3585.99,218.31c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3407.53,281.98c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3427.64,312.14c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3265.93,398.44c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3251.69,377.49c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3213.15,403.47c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3112.61,498.14c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m3094.18,472.17c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2698.72,742.79c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2891.42,628.01c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2756.53,708.44c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2737.26,719.33c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2717.99,731.06c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2268.91,1004.2c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2250.48,1015.93c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2212.77,1041.06c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2194.34,1052.79c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2936.66,565.17c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2953.42,591.98c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2780.83,663.2c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2795.91,684.98c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2638.39,778.82c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2617.45,749.49c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2464.13,848.36c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2480.04,871.82c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2324.21,968.17c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2308.29,946.39c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2147.42,1034.36c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2170.88,1068.71c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m2017.56,1168.41c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1992.42,1134.06c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1862.56,1268.11c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1839.1,1233.76c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                    </g>
                    <path class="cls-2" d="m1669.86,1385.41c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                    <g>
                        <path class="cls-2" d="m1345.61,1573.09c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1326.34,1584.82c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1191.45,1664.41c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1172.18,1675.3c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m23.51,2472.08c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1546.69,1454.95c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1536.64,1440.71c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1438.61,1501.87c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1390.02,1547.95c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1375.78,1528.68c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1199.83,1595.71c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1231.67,1640.95c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1117.72,1675.3c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1055.72,1707.98c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m1073.32,1734.79c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m917.48,1831.98c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m886.48,1783.38c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m771.7,1942.57c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m734.83,1888.11c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m630.1,2060.71c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m601.62,2018.82c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m468.4,2145.33c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m485.99,2172.98c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m332.67,2274.36c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m313.4,2243.36c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m178.51,2373.22c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m154.21,2334.68c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        <path class="cls-2" d="m4.24,2440.25c0-1.16-.94-2.09-2.09-2.09s-2.09.94-2.09,2.09.94,2.09,2.09,2.09,2.09-.94,2.09-2.09"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div id="container_imagen" class="container-fluid" style="position: relative; z-index: 1; background-color: white;">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-md-6 text-center margin-2-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                        <h4 class="alt-font font-weight-500 text-center text-dark text-uppercase">Playa IRVINE</h4>
                    </div>
                    <div class="col-12 margin-four-bottom">
                        <div class="text-center alt-font-TK font-weight-500 text-dark">
                            <span class="color-option option-1 ml-3"></span>  AVAILABLE
                            <span class="color-option option-2 ml-3"></span> DEPOSIT MADE
                            <span class="color-option option-3"></span> PURCHASED
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="d-flex flex-column" style="position: absolute; bottom: -40%; left: 10%;">
                            <button type="button" onclick="zoomIn2()" class="btn btn-primary">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button type="button" onclick="zoomOut2()" class="btn btn-primary">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="position: relative;" >
                <div class="col-sm-12  col-md-12 mx-auto text-center img-svg2 mt-5" id="svg-container2" >
                    <svg id="Capa_1 scene" class="cotizador-svg3" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3902.74 2474.23">
                        <defs><style>.cls-1{fill:none;stroke:#1d1d1b;stroke-miterlimit:10;stroke-width:0.25px;}</style></defs>
                        <g id="scene2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">
                        <g id="Capa_2-2" data-name="Capa 2">
                        <g id="Capa_1-2-2" data-name="Capa 1-2">
                        <polygon class="cls-1" points="0.17 2101.18 21.17 2126.18 564.17 1668.18 547.17 1636.18 154.17 1955.18 0.17 2101.18"/>
                        <polygon class="cls-1" points="578.17 1611.18 547.17 1636.18 564.17 1668.18 595.17 1642.18 578.17 1611.18"/>
                        <polygon class="cls-1" points="602.17 1591.18 578.17 1611.18 595.17 1642.18 619.17 1621.18 602.17 1591.18"/>
                        <polygon class="cls-1" points="627.17 1572.18 602.17 1591.18 619.17 1621.18 644.17 1602.18 627.17 1572.18"/>
                        <polygon class="cls-1" points="651.17 1552.18 627.17 1572.18 644.17 1602.18 669.17 1582.18 651.17 1552.18"/>
                        <polygon class="cls-1" points="677.17 1531.18 651.17 1552.18 669.17 1582.18 694.17 1563.18 677.17 1531.18"/>
                        <polygon class="cls-1" points="701.17 1510.18 677.17 1531.18 694.17 1563.18 720.17 1544.18 701.17 1510.18"/>
                        <polygon class="cls-1" points="725.17 1489.18 701.17 1510.18 720.17 1544.18 745.17 1525.18 725.17 1489.18"/>
                        <polygon class="cls-1" points="750.17 1468.18 725.17 1489.18 745.17 1525.18 771.17 1506.18 750.17 1468.18"/>
                        <polygon class="cls-1" points="776.17 1451.18 750.17 1468.18 771.17 1506.18 797.17 1489.18 776.17 1451.18"/>
                        <polygon class="cls-1" points="802.17 1433.18 776.17 1451.18 797.17 1489.18 824.17 1472.18 802.17 1433.18"/>
                        <polygon class="cls-1" points="829.17 1416.18 802.17 1433.18 824.17 1472.18 850.17 1455.18 829.17 1416.18"/>
                        <polygon class="cls-1" points="856.17 1399.18 829.17 1416.18 850.17 1455.18 876.17 1437.18 856.17 1399.18"/>
                        <polygon class="cls-1" points="882.17 1381.18 856.17 1399.18 877.17 1436.18 903.17 1419.18 882.17 1381.18"/>
                        <polygon class="cls-1" points="909.17 1364.18 882.17 1381.18 903.17 1420.18 930.17 1402.18 909.17 1364.18"/>
                        <polygon class="cls-1" points="935.17 1347.18 909.17 1364.18 930.17 1402.18 956.17 1385.18 935.17 1347.18"/>
                        <polygon class="cls-1" points="962.17 1330.18 935.17 1347.18 956.17 1385.18 983.17 1367.18 962.17 1330.18"/>
                        <polygon class="cls-1" points="987.17 1310.18 962.17 1330.18 983.17 1367.18 1009.17 1350.18 987.17 1310.18"/>
                        <polygon class="cls-1" points="1013.17 1293.18 987.17 1310.18 1009.17 1350.18 1036.17 1333.18 1013.17 1293.18"/>
                        <polygon class="cls-1" points="1040.17 1274.18 1013.17 1293.18 1036.17 1333.18 1063.17 1315.18 1040.17 1274.18"/>
                        <polygon class="cls-1" points="1065.17 1254.18 1040.17 1274.18 1063.17 1315.18 1089.17 1298.18 1065.17 1254.18"/>
                        <polygon class="cls-1" points="1091.17 1237.18 1065.62 1255 1089.17 1298.18 1115.17 1281.18 1091.17 1237.18"/>
                        <polygon class="cls-1" points="1117.17 1218.18 1090.17 1237.18 1115.17 1281.18 1142.17 1263.18 1117.17 1218.18"/>
                        <polygon class="cls-1" points="1143.17 1199.18 1117.17 1218.18 1142.17 1263.18 1168.17 1246.18 1143.17 1199.18"/>
                        <polygon class="cls-1" points="1168.17 1181.18 1143.64 1200.07 1168.17 1246.18 1195.17 1228.18 1168.17 1181.18"/>
                        <polygon class="cls-1" points="1168.17 1181.18 1194.17 1162.18 1222.17 1211.18 1195.17 1228.18 1168.17 1181.18"/>
                        <polygon class="cls-1" points="1220.17 1144.18 1194.17 1162.18 1222.17 1211.18 1248.17 1194.18 1220.17 1144.18"/>
                        <polygon class="cls-1" points="1246.17 1125.18 1220.17 1144.18 1248.17 1194.18 1274.17 1177.18 1246.17 1125.18"/>
                        <polygon class="cls-1" points="1271.17 1106.18 1246.17 1125.18 1274.17 1177.18 1301.17 1159.18 1271.17 1106.18"/>
                        <polygon class="cls-1" points="1297.17 1087.18 1271.17 1106.18 1301.17 1159.18 1327.17 1141.18 1297.17 1087.18"/>
                        <polygon class="cls-1" points="1323.17 1068.18 1297.17 1087.18 1327.17 1141.18 1354.17 1125.18 1323.17 1068.18"/>
                        <polygon class="cls-1" points="1349.17 1049.18 1323.17 1068.18 1354.17 1125.18 1381.17 1108.18 1349.17 1049.18"/>
                        <polygon class="cls-1" points="1374.17 1030.18 1349.17 1049.18 1381.17 1108.18 1407.17 1090.18 1374.17 1030.18"/>
                        <polygon class="cls-1" points="1400.17 1011.18 1374.17 1030.18 1407.17 1090.18 1434.17 1072.18 1400.17 1011.18"/>
                        <polygon class="cls-1" points="1426.17 993.18 1400.17 1011.18 1434.17 1072.18 1460.17 1055.18 1426.17 993.18"/>
                        <polygon class="cls-1" points="1451.17 974.18 1426.17 993.18 1460.17 1055.18 1487.17 1038.18 1451.17 974.18"/>
                        <polygon class="cls-1" points="1477.17 955.18 1451.17 974.18 1487.17 1038.18 1513.17 1021.18 1477.17 955.18"/>
                        <polygon class="cls-1" points="1502.17 936.18 1477.17 955.18 1513.17 1021.18 1540.17 1003.18 1502.17 936.18"/>
                        <polygon class="cls-1" points="1528.17 917.18 1502.17 936.18 1540.17 1003.18 1566.17 986.18 1528.17 917.18"/>
                        <polygon class="cls-1" points="1554.17 898.18 1528.17 917.18 1566.17 986.18 1593.17 969.18 1554.17 898.18"/>
                        <polygon class="cls-1" points="1580.17 878.18 1554.17 898.18 1593.17 969.18 1619.17 951.18 1580.17 878.18"/>
                        <polygon class="cls-1" points="1605.17 860.18 1580.17 878.18 1619.17 951.18 1645.17 933.18 1605.17 860.18"/>
                        <polygon class="cls-1" points="1631.17 840.18 1605.17 860.18 1645.17 933.18 1672.17 915.18 1631.17 840.18"/>
                        <polygon class="cls-1" points="1657.17 822.18 1631.17 840.18 1672.17 915.18 1698.17 897.18 1657.17 822.18"/>
                        <polygon class="cls-1" points="1682.17 803.18 1657.17 822.18 1698.17 897.18 1724.17 878.18 1682.17 803.18"/>
                        <polygon class="cls-1" points="1708.17 783.18 1682.17 803.18 1724.17 878.18 1750.17 860.18 1708.17 783.18"/>
                        <polygon class="cls-1" points="1734.17 764.18 1708.17 783.18 1750.17 860.18 1776.17 842.18 1734.17 764.18"/>
                        <polygon class="cls-1" points="1759.17 746.18 1734.17 764.18 1776.17 842.18 1802.17 825.18 1759.17 746.18"/>
                        <polygon class="cls-1" points="1785.17 727.18 1759.17 746.18 1802.17 825.18 1828.17 807.18 1785.17 727.18"/>
                        <polygon class="cls-1" points="1810.17 706.18 1785.17 727.18 1828.17 807.18 1854.17 787.18 1810.17 706.18"/>
                        <polygon class="cls-1" points="1834.17 685.18 1810.17 706.18 1854.17 787.18 1880.17 769.18 1834.17 685.18"/>
                        <polygon class="cls-1" points="1859.17 665.18 1834.17 685.18 1880.17 769.18 1905.17 750.18 1859.17 665.18"/>
                        <polygon class="cls-1" points="1883.17 643.18 1859.17 665.18 1905.17 750.18 1931.17 731.18 1883.17 643.18"/>
                        <polygon class="cls-1" points="1908.17 623.18 1883.17 643.18 1931.17 731.18 1956.17 712.18 1908.17 623.18"/>
                        <polygon class="cls-1" points="1933.17 602.18 1908.17 623.18 1956.17 712.18 1983.17 692.18 1933.17 602.18"/>
                        <polygon class="cls-1" points="1957.17 582.18 1933.17 602.18 1983.17 692.18 2009.17 674.18 1957.17 582.18"/>
                        <polygon class="cls-1" points="1983.17 562.18 1957.17 582.18 2009.17 674.18 2034.17 657.18 1983.17 562.18"/>
                        <polygon class="cls-1" points="2007.17 541.18 1983.17 562.18 2034.17 657.18 2060.17 637.18 2007.17 541.18"/>
                        <polygon class="cls-1" points="2033.17 521.18 2007.17 541.18 2060.17 637.18 2085.17 618.18 2033.17 521.18"/>
                        <polygon class="cls-1" points="2058.17 501.18 2033.17 521.18 2085.17 618.18 2111.17 598.18 2058.17 501.18"/>
                        <polygon class="cls-1" points="2082.17 480.18 2058.17 501.18 2111.17 598.18 2136.17 579.18 2082.17 480.18"/>
                        <polygon class="cls-1" points="2108.17 461.18 2082.17 480.18 2136.17 579.18 2162.17 559.18 2108.17 461.18"/>
                        <polygon class="cls-1" points="2132.17 440.18 2108.17 461.18 2162.17 559.18 2187.17 541.18 2132.17 440.18"/>
                        <polygon class="cls-1" points="2157.17 420.18 2132.17 440.18 2187.17 541.18 2213.17 521.18 2157.17 420.18"/>
                        <polygon class="cls-1" points="2181.17 398.18 2157.17 420.18 2213.17 521.18 2239.17 501.18 2181.17 398.18"/>
                        <polygon class="cls-1" points="2206.17 380.18 2181.17 398.18 2239.17 501.18 2264.17 483.18 2206.17 380.18"/>
                        <polygon class="cls-1" points="2232.17 359.18 2206.17 380.18 2264.17 483.18 2289.17 464.18 2232.17 359.18"/>
                        <polygon class="cls-1" points="2258.17 340.18 2232.17 359.18 2289.17 464.18 2315.17 445.18 2258.17 340.18"/>
                        <polygon class="cls-1" points="2282.17 320.18 2258.17 340.18 2315.17 445.18 2340.17 425.18 2282.17 320.18"/>
                        <polygon class="cls-1" points="2308.17 301.18 2282.17 320.18 2340.17 425.18 2366.17 406.18 2308.17 301.18"/>
                        <polygon class="cls-1" points="2332.17 281.18 2308.17 301.18 2366.17 406.18 2392.17 387.18 2332.17 281.18"/>
                        <polygon class="cls-1" points="2358.17 262.18 2332.17 281.18 2392.17 387.18 2418.17 369.18 2358.17 262.18"/>
                        <polygon class="cls-1" points="2384.17 242.18 2358.17 262.18 2418.17 369.18 2443.17 350.18 2384.17 242.18"/>
                        <polygon class="cls-1" points="2410.17 222.18 2384.17 242.18 2443.17 350.18 2469.17 331.18 2410.17 222.18"/>
                        <polygon class="cls-1" points="2435.17 204.18 2410.17 222.18 2469.17 331.18 2494.17 311.18 2435.17 204.18"/>
                        <polygon class="cls-1" points="2460.17 184.18 2435.17 204.18 2494.17 311.18 2519.17 293.18 2460.17 184.18"/>
                        <polygon class="cls-1" points="2486.17 166.18 2460.17 184.18 2519.17 293.18 2546.17 273.18 2486.17 166.18"/>
                        <polygon class="cls-1" points="2512.17 147.18 2486.17 166.18 2546.17 273.18 2571.17 254.18 2512.17 147.18"/>
                        <polygon class="cls-1" points="2537.17 128.18 2512.17 147.18 2571.17 254.18 2596.17 235.18 2537.17 128.18"/>
                        <polygon class="cls-1" points="2563.17 108.18 2537.17 128.18 2596.17 235.18 2623.17 216.18 2563.17 108.18"/>
                        <polygon class="cls-1" points="2588.17 89.18 2563.17 108.18 2623.17 216.18 2649.17 197.18 2588.17 89.18"/>
                        <polygon class="cls-1" points="2615.17 72.18 2588.17 89.18 2649.17 197.18 2673.17 178.18 2615.17 72.18"/>
                        <polygon class="cls-1" points="2641.17 53.18 2615.17 72.18 2673.17 178.18 2699.17 158.18 2641.17 53.18"/>
                        <polygon class="cls-1" points="2666.17 35.18 2641.17 53.18 2699.17 158.18 2724.17 140.18 2666.17 35.18"/>
                        <polygon class="cls-1" points="2693.17 17.18 2666.17 35.18 2724.17 140.18 2750.17 120.18 2693.17 17.18"/>
                        <polygon class="cls-1" points="2719.17 0.18 2693.17 17.18 2750.17 120.18 2776.17 100.18 2719.17 0.18"/>
                        </g></g><path d="M237.6,1906h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M242.08,1912.09a4.43,4.43,0,0,0,.85,0,2.9,2.9,0,0,0,1.63-.75,3.38,3.38,0,0,0,1-2.08h0a2.29,2.29,0,0,1-1.84.84,2.25,2.25,0,0,1-2.3-2.38,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.28a4.91,4.91,0,0,1-1.34,3.66,3.85,3.85,0,0,1-2.27,1,4.35,4.35,0,0,1-1,.06Zm.38-4.49a1.5,1.5,0,0,0,1.5,1.66,1.75,1.75,0,0,0,1.54-.82.67.67,0,0,0,.09-.38c0-1.33-.49-2.35-1.59-2.35C243.1,1905.71,242.46,1906.5,242.46,1907.6Z"/>
                        <path d="M252.07,1905.78a3.83,3.83,0,0,0-.79,0,3.17,3.17,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.33a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.3,4.5a1.58,1.58,0,0,0-1.6-1.79,1.73,1.73,0,0,0-1.51,1,.84.84,0,0,0-.12.47c0,1.28.61,2.23,1.71,2.23C251.16,1912.15,251.77,1911.39,251.77,1910.28Z"/>
                        <path d="M564,1637.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M568.46,1643.49a4.31,4.31,0,0,0,.85,0,3,3,0,0,0,1.63-.76,3.38,3.38,0,0,0,1-2.07h0a2.32,2.32,0,0,1-1.84.84,2.26,2.26,0,0,1-2.3-2.39,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.28a4.91,4.91,0,0,1-1.34,3.66,3.92,3.92,0,0,1-2.27,1,5,5,0,0,1-1,.06Zm.38-4.48a1.5,1.5,0,0,0,1.5,1.65,1.77,1.77,0,0,0,1.54-.81.73.73,0,0,0,.09-.39c0-1.33-.49-2.35-1.59-2.35C569.48,1637.11,568.84,1637.9,568.84,1639Z"/>
                        <path d="M578.66,1637.33h-3l-.3,2a4.75,4.75,0,0,1,.64,0,3.28,3.28,0,0,1,1.68.42,2.23,2.23,0,0,1,1.11,2,2.7,2.7,0,0,1-2.9,2.66,3.8,3.8,0,0,1-1.94-.48l.26-.81a3.42,3.42,0,0,0,1.67.44,1.73,1.73,0,0,0,1.85-1.7c0-1-.69-1.72-2.25-1.72a9.44,9.44,0,0,0-1.08.08l.51-3.74h3.73Z"/>
                        <path d="M591.67,1614.67h0l-1.35.73-.21-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M596.15,1620.74a5.25,5.25,0,0,0,.85,0,2.94,2.94,0,0,0,1.63-.76,3.44,3.44,0,0,0,1-2.08h0a2.34,2.34,0,0,1-4.14-1.54,2.67,2.67,0,0,1,2.67-2.77c1.59,0,2.57,1.29,2.57,3.28a4.91,4.91,0,0,1-1.34,3.66,3.85,3.85,0,0,1-2.27,1,4.35,4.35,0,0,1-1,.06Zm.39-4.48a1.49,1.49,0,0,0,1.5,1.65,1.76,1.76,0,0,0,1.53-.81.72.72,0,0,0,.1-.39c0-1.33-.5-2.35-1.6-2.35C597.17,1614.36,596.54,1615.15,596.54,1616.26Z"/>
                        <path d="M605,1621.48v-2.12h-3.62v-.69l3.48-5H606v4.84h1.1v.83H606v2.12Zm0-3v-2.6c0-.41,0-.81,0-1.22h0c-.24.45-.43.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M616.77,1595.68h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M621.25,1601.75a4.32,4.32,0,0,0,.85,0,3,3,0,0,0,1.63-.76,3.43,3.43,0,0,0,1-2.07h0a2.29,2.29,0,0,1-1.83.83,2.25,2.25,0,0,1-2.3-2.38,2.66,2.66,0,0,1,2.66-2.77c1.59,0,2.58,1.29,2.58,3.28a4.91,4.91,0,0,1-1.35,3.66,3.82,3.82,0,0,1-2.26,1,4.48,4.48,0,0,1-1,.07Zm.38-4.48a1.5,1.5,0,0,0,1.5,1.65,1.74,1.74,0,0,0,1.53-.81.72.72,0,0,0,.1-.39c0-1.33-.49-2.35-1.6-2.35C622.26,1595.37,621.63,1596.16,621.63,1597.27Z"/>
                        <path d="M627,1601.28a3.45,3.45,0,0,0,1.73.5c1.35,0,1.77-.87,1.76-1.52,0-1.09-1-1.55-2-1.55h-.59v-.8h.59c.76,0,1.74-.39,1.74-1.31,0-.63-.4-1.18-1.37-1.18a2.94,2.94,0,0,0-1.56.51l-.28-.76a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.25-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M640.07,1576.56h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M644.55,1582.63a5.25,5.25,0,0,0,.85,0,3,3,0,0,0,1.63-.76,3.38,3.38,0,0,0,1-2.08h0a2.3,2.3,0,0,1-1.84.84,2.25,2.25,0,0,1-2.3-2.38,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.28a5,5,0,0,1-1.34,3.66,3.85,3.85,0,0,1-2.27,1,4.35,4.35,0,0,1-1,.06Zm.38-4.49a1.5,1.5,0,0,0,1.5,1.66A1.75,1.75,0,0,0,648,1579a.67.67,0,0,0,.09-.38c0-1.33-.49-2.35-1.59-2.35C645.57,1576.25,644.93,1577,644.93,1578.14Z"/>
                        <path d="M650.09,1583.37v-.64l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.34-.74a3.41,3.41,0,0,1,2.21-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.57v0h3.5v.87Z"/>
                        <path d="M666.27,1555.73h0l-1.35.73-.21-.8,1.71-.92h.9v7.8h-1Z"/>
                        <path d="M670.75,1561.8a4.46,4.46,0,0,0,.85,0,2.94,2.94,0,0,0,1.63-.76,3.4,3.4,0,0,0,1-2.07h0a2.34,2.34,0,0,1-4.13-1.55,2.67,2.67,0,0,1,2.66-2.77c1.59,0,2.58,1.3,2.58,3.29a4.94,4.94,0,0,1-1.35,3.66,4,4,0,0,1-2.26,1,5.09,5.09,0,0,1-1,.06Zm.38-4.49a1.51,1.51,0,0,0,1.5,1.66,1.72,1.72,0,0,0,1.53-.82.71.71,0,0,0,.1-.38c0-1.34-.49-2.35-1.6-2.35C671.76,1555.42,671.13,1556.21,671.13,1557.31Z"/>
                        <path d="M678.58,1555.73h0l-1.36.73-.2-.8,1.7-.92h.9v7.8h-1Z"/>
                        <path d="M693.08,1535.81h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M697.56,1541.88a4.31,4.31,0,0,0,.85,0,3,3,0,0,0,1.63-.76,3.38,3.38,0,0,0,1-2.07h0a2.3,2.3,0,0,1-1.84.84,2.26,2.26,0,0,1-2.3-2.39,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.29a4.94,4.94,0,0,1-1.34,3.65,3.92,3.92,0,0,1-2.27,1,5,5,0,0,1-1,.06Zm.38-4.48a1.5,1.5,0,0,0,1.5,1.65,1.75,1.75,0,0,0,1.54-.81.73.73,0,0,0,.09-.39c0-1.33-.49-2.35-1.59-2.35C698.58,1535.5,697.94,1536.29,697.94,1537.4Z"/>
                        <path d="M708.28,1538.65c0,2.65-1,4.11-2.71,4.11-1.52,0-2.55-1.43-2.57-4s1.12-4,2.71-4S708.28,1536.16,708.28,1538.65Zm-4.23.11c0,2,.62,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.58-3.18C704.72,1535.51,704.05,1536.64,704.05,1538.76Z"/>
                        <path d="M717.32,1514.58h0l-1.35.74-.21-.81,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M721.09,1519.42a2.22,2.22,0,0,1,1.54-2.09v0a1.94,1.94,0,0,1-1.23-1.76,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.26,1.92,2,2,0,0,1-1.28,1.82v0a2.15,2.15,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C722.07,1521.53,721.09,1520.56,721.09,1519.42Zm4.19-.05c0-.95-.66-1.4-1.71-1.7a1.68,1.68,0,0,0-1.4,1.6,1.43,1.43,0,0,0,1.55,1.49A1.41,1.41,0,0,0,725.28,1519.37Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44a1.54,1.54,0,0,0,1.19-1.41,1.22,1.22,0,0,0-1.32-1.28A1.24,1.24,0,0,0,722.38,1515.47Z"/>
                        <path d="M728,1520.65a4.31,4.31,0,0,0,.85,0,3,3,0,0,0,1.63-.76,3.38,3.38,0,0,0,1-2.07h0a2.32,2.32,0,0,1-1.84.84,2.26,2.26,0,0,1-2.3-2.39,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.29a4.9,4.9,0,0,1-1.34,3.65,3.92,3.92,0,0,1-2.27,1,5,5,0,0,1-1,.06Zm.38-4.48a1.5,1.5,0,0,0,1.5,1.65,1.77,1.77,0,0,0,1.54-.81.73.73,0,0,0,.09-.39c0-1.33-.49-2.35-1.59-2.35C729,1514.27,728.33,1515.06,728.33,1516.17Z"/>
                        <path d="M741.77,1495.46h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M745.54,1500.3a2.23,2.23,0,0,1,1.55-2.09l0,0a1.91,1.91,0,0,1-1.23-1.75,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.26,1.92,2,2,0,0,1-1.28,1.82v0a2.15,2.15,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C746.52,1502.41,745.54,1501.44,745.54,1500.3Zm4.2,0c0-1-.66-1.4-1.72-1.7a1.68,1.68,0,0,0-1.4,1.6,1.44,1.44,0,0,0,1.56,1.49A1.42,1.42,0,0,0,749.74,1500.25Zm-2.91-3.9c0,.78.59,1.2,1.49,1.44a1.54,1.54,0,0,0,1.19-1.41,1.21,1.21,0,0,0-1.32-1.28A1.24,1.24,0,0,0,746.83,1496.35Z"/>
                        <path d="M751.69,1500.3a2.23,2.23,0,0,1,1.55-2.09v0a1.92,1.92,0,0,1-1.24-1.75,2.19,2.19,0,0,1,2.41-2.07,2,2,0,0,1,2.27,1.92,2,2,0,0,1-1.28,1.82v0a2.15,2.15,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C752.68,1502.41,751.69,1501.44,751.69,1500.3Zm4.2,0c0-1-.66-1.4-1.71-1.7a1.68,1.68,0,0,0-1.41,1.6,1.45,1.45,0,0,0,1.56,1.49A1.41,1.41,0,0,0,755.89,1500.25Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44a1.53,1.53,0,0,0,1.18-1.41,1.21,1.21,0,0,0-1.32-1.28A1.24,1.24,0,0,0,753,1496.35Z"/>
                        <path d="M769.77,1478h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M773.54,1482.8a2.23,2.23,0,0,1,1.55-2.09l0,0a1.93,1.93,0,0,1-1.23-1.75,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.26,1.91,2,2,0,0,1-1.28,1.83v0a2.17,2.17,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C774.52,1484.91,773.54,1483.93,773.54,1482.8Zm4.2,0c0-1-.66-1.41-1.72-1.71a1.7,1.7,0,0,0-1.4,1.61,1.44,1.44,0,0,0,1.56,1.49A1.42,1.42,0,0,0,777.74,1482.75Zm-2.91-3.9c0,.78.59,1.2,1.49,1.44a1.55,1.55,0,0,0,1.19-1.42,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,774.83,1478.85Z"/>
                        <path d="M784.85,1477v.69l-3.39,7.1h-1.09l3.38-6.89v0h-3.82V1477Z"/>
                        <path d="M795.15,1459.07h0l-1.35.73-.21-.8,1.71-.92h.9v7.8h-1Z"/>
                        <path d="M798.92,1463.9a2.23,2.23,0,0,1,1.54-2.09v0a1.93,1.93,0,0,1-1.23-1.75,2.18,2.18,0,0,1,2.41-2.08,2,2,0,0,1,2.26,1.92,2,2,0,0,1-1.28,1.82v0a2.16,2.16,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.26C799.9,1466,798.92,1465,798.92,1463.9Zm4.19-.05c0-.94-.66-1.4-1.71-1.7a1.69,1.69,0,0,0-1.4,1.61,1.43,1.43,0,0,0,1.55,1.48A1.41,1.41,0,0,0,803.11,1463.85Zm-2.9-3.89c0,.77.59,1.19,1.49,1.43a1.53,1.53,0,0,0,1.19-1.41,1.22,1.22,0,0,0-1.32-1.27A1.24,1.24,0,0,0,800.21,1460Z"/>
                        <path d="M809.62,1458.83a3.8,3.8,0,0,0-.79.05,3.15,3.15,0,0,0-2.71,2.77h0a2.38,2.38,0,0,1,4.24,1.62,2.61,2.61,0,0,1-2.6,2.74c-1.66,0-2.75-1.29-2.75-3.32a4.86,4.86,0,0,1,1.32-3.51,4.2,4.2,0,0,1,2.49-1.16,6.42,6.42,0,0,1,.77-.06Zm-.3,4.5a1.59,1.59,0,0,0-1.61-1.79,1.73,1.73,0,0,0-1.51,1,.9.9,0,0,0-.12.47c0,1.28.61,2.23,1.71,2.23C808.71,1465.2,809.32,1464.44,809.32,1463.33Z"/>
                        <path d="M822.31,1442.72h0l-1.36.73-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M826.08,1447.55a2.24,2.24,0,0,1,1.55-2.09v0a1.93,1.93,0,0,1-1.24-1.75,2.18,2.18,0,0,1,2.41-2.08,2,2,0,0,1,2.27,1.92,2,2,0,0,1-1.28,1.82v0a2.16,2.16,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C827.06,1449.66,826.08,1448.69,826.08,1447.55Zm4.2,0c0-1-.66-1.4-1.72-1.7a1.69,1.69,0,0,0-1.4,1.61,1.44,1.44,0,0,0,1.56,1.48A1.41,1.41,0,0,0,830.28,1447.5Zm-2.9-3.9c0,.78.58,1.2,1.48,1.44a1.52,1.52,0,0,0,1.19-1.41,1.21,1.21,0,0,0-1.32-1.27A1.23,1.23,0,0,0,827.38,1443.6Z"/>
                        <path d="M837,1442.62h-3l-.3,2a5,5,0,0,1,.64,0,3.28,3.28,0,0,1,1.68.42,2.2,2.2,0,0,1,1.11,2,2.7,2.7,0,0,1-2.9,2.66,3.8,3.8,0,0,1-1.94-.48l.26-.8a3.54,3.54,0,0,0,1.67.43,1.73,1.73,0,0,0,1.85-1.69c0-1-.69-1.73-2.25-1.73a9.44,9.44,0,0,0-1.08.08l.51-3.74H837Z"/>
                        <path d="M846.84,1425.57h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M850.61,1430.41a2.23,2.23,0,0,1,1.55-2.09l0,0a1.91,1.91,0,0,1-1.23-1.75,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.27,1.92,2,2,0,0,1-1.29,1.82v0a2.15,2.15,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C851.59,1432.52,850.61,1431.55,850.61,1430.41Zm4.2-.05c0-.95-.66-1.4-1.72-1.7a1.68,1.68,0,0,0-1.4,1.6,1.44,1.44,0,0,0,1.56,1.49A1.42,1.42,0,0,0,854.81,1430.36Zm-2.91-3.9c0,.78.59,1.2,1.49,1.44a1.54,1.54,0,0,0,1.19-1.41,1.21,1.21,0,0,0-1.32-1.28A1.24,1.24,0,0,0,851.9,1426.46Z"/>
                        <path d="M860.12,1432.39v-2.13H856.5v-.69l3.48-5h1.14v4.85h1.09v.82h-1.09v2.13Zm0-3v-2.61c0-.4,0-.81,0-1.22h0c-.24.46-.43.79-.64,1.15l-1.91,2.65v0Z"/>
                        <path d="M875.06,1409h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M878.83,1413.8a2.23,2.23,0,0,1,1.55-2.09l0,0a1.93,1.93,0,0,1-1.23-1.75,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.27,1.91,2,2,0,0,1-1.29,1.83v0a2.17,2.17,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C879.81,1415.91,878.83,1414.93,878.83,1413.8Zm4.2,0c0-1-.66-1.41-1.72-1.71a1.7,1.7,0,0,0-1.4,1.61,1.44,1.44,0,0,0,1.56,1.49A1.42,1.42,0,0,0,883,1413.75Zm-2.91-3.9c0,.78.59,1.2,1.49,1.44a1.55,1.55,0,0,0,1.19-1.42,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,880.12,1409.85Z"/>
                        <path d="M885.33,1414.56a3.57,3.57,0,0,0,1.73.49c1.36,0,1.78-.86,1.76-1.51,0-1.09-1-1.56-2-1.56h-.59v-.79h.59c.77,0,1.74-.39,1.74-1.32,0-.62-.4-1.17-1.37-1.17a2.89,2.89,0,0,0-1.56.51l-.28-.76a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.24-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M902.77,1391.55h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M906.54,1396.39a2.23,2.23,0,0,1,1.55-2.09l0,0a1.93,1.93,0,0,1-1.23-1.75,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.26,1.92,2,2,0,0,1-1.28,1.82v0a2.15,2.15,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C907.52,1398.5,906.54,1397.52,906.54,1396.39Zm4.2-.05c0-.95-.66-1.41-1.72-1.7a1.68,1.68,0,0,0-1.4,1.6,1.44,1.44,0,0,0,1.56,1.49A1.42,1.42,0,0,0,910.74,1396.34Zm-2.91-3.9c0,.78.59,1.2,1.49,1.44a1.55,1.55,0,0,0,1.19-1.42,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,907.83,1392.44Z"/>
                        <path d="M912.79,1398.36v-.64l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.55-1.53,2.63,2.63,0,0,0-1.65.66l-.34-.74a3.41,3.41,0,0,1,2.21-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1.05,2.61-2.69,4.19l-.63.58v0h3.51v.87Z"/>
                        <path d="M928.77,1374.14h0l-1.35.73-.21-.8,1.71-.91h.9V1381h-1Z"/>
                        <path d="M932.54,1379a2.23,2.23,0,0,1,1.55-2.09l0,0a1.93,1.93,0,0,1-1.23-1.75,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.26,1.92,2,2,0,0,1-1.28,1.82v0a2.17,2.17,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C933.52,1381.09,932.54,1380.11,932.54,1379Zm4.2,0c0-1-.66-1.41-1.72-1.71a1.7,1.7,0,0,0-1.4,1.61,1.44,1.44,0,0,0,1.56,1.49A1.42,1.42,0,0,0,936.74,1378.93Zm-2.91-3.9c0,.78.59,1.2,1.49,1.44a1.55,1.55,0,0,0,1.19-1.42,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,933.83,1375Z"/>
                        <path d="M941.08,1374.14h0l-1.36.73-.2-.8,1.7-.91h.9V1381h-1Z"/>
                        <path d="M955.23,1357.27h0l-1.35.73-.21-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M959,1362.1a2.24,2.24,0,0,1,1.55-2.09v0a1.94,1.94,0,0,1-1.24-1.75,2.19,2.19,0,0,1,2.41-2.08,2,2,0,0,1,2.27,1.92,2,2,0,0,1-1.28,1.82v0a2.16,2.16,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C960,1364.21,959,1363.24,959,1362.1Zm4.2,0c0-1-.66-1.4-1.71-1.7a1.7,1.7,0,0,0-1.41,1.61,1.44,1.44,0,0,0,1.56,1.48A1.41,1.41,0,0,0,963.2,1362.05Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44a1.52,1.52,0,0,0,1.18-1.41,1.2,1.2,0,0,0-1.31-1.27A1.24,1.24,0,0,0,960.3,1358.15Z"/>
                        <path d="M970.44,1360.1c0,2.65-1,4.11-2.71,4.11-1.53,0-2.56-1.43-2.58-4s1.13-4,2.71-4S970.44,1357.61,970.44,1360.1Zm-4.24.12c0,2,.63,3.17,1.59,3.17s1.59-1.25,1.59-3.25-.49-3.17-1.58-3.17C966.88,1357,966.2,1358.09,966.2,1360.22Z"/>
                        <path d="M980.77,1339h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M989.69,1338v.69l-3.39,7.1h-1.09l3.38-6.89v0h-3.81V1338Z"/>
                        <path d="M991.4,1345a4.43,4.43,0,0,0,.85,0,2.9,2.9,0,0,0,1.63-.75,3.44,3.44,0,0,0,1-2.08h0a2.29,2.29,0,0,1-1.84.84,2.25,2.25,0,0,1-2.3-2.38,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.28a4.91,4.91,0,0,1-1.34,3.66,3.85,3.85,0,0,1-2.27,1,4.35,4.35,0,0,1-1,.06Zm.39-4.49a1.49,1.49,0,0,0,1.49,1.66,1.75,1.75,0,0,0,1.54-.82.66.66,0,0,0,.1-.38c0-1.33-.5-2.35-1.6-2.35C992.42,1338.65,991.79,1339.44,991.79,1340.54Z"/>
                        <path d="M1007.59,1320.66h0l-1.35.73-.21-.8,1.71-.92h.9v7.8h-1Z"/>
                        <path d="M1016.51,1319.67v.7l-3.39,7.1H1012l3.38-6.9v0h-3.81v-.88Z"/>
                        <path d="M1017.51,1325.49a2.24,2.24,0,0,1,1.55-2.09v0a1.93,1.93,0,0,1-1.24-1.75,2.19,2.19,0,0,1,2.41-2.08,2,2,0,0,1,2.27,1.92,2,2,0,0,1-1.28,1.82v0a2.16,2.16,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.26C1018.5,1327.6,1017.51,1326.63,1017.51,1325.49Zm4.2,0c0-.94-.66-1.4-1.71-1.7a1.69,1.69,0,0,0-1.41,1.61,1.44,1.44,0,0,0,1.56,1.48A1.41,1.41,0,0,0,1021.71,1325.44Zm-2.9-3.89c0,.77.59,1.19,1.48,1.43a1.51,1.51,0,0,0,1.19-1.41,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,1018.81,1321.55Z"/>
                        <path d="M1032.51,1301.69h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1041.44,1300.71v.7l-3.4,7.1H1037l3.38-6.9v0h-3.81v-.88Z"/>
                        <path d="M1047.59,1300.71v.7l-3.39,7.1h-1.09l3.38-6.9v0h-3.82v-.88Z"/>
                        <path d="M1060.07,1285.66h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1069,1284.68v.69l-3.4,7.1h-1.09l3.38-6.89v0h-3.81v-.87Z"/>
                        <path d="M1074.54,1285.42a3.83,3.83,0,0,0-.79,0,3.17,3.17,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.33a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.49-1.15,4.93,4.93,0,0,1,.77-.06Zm-.3,4.5a1.58,1.58,0,0,0-1.61-1.79,1.75,1.75,0,0,0-1.51,1,.93.93,0,0,0-.12.47c0,1.28.61,2.23,1.72,2.23C1073.63,1291.79,1074.24,1291,1074.24,1289.92Z"/>
                        <path d="M1086.18,1269.63h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1095.11,1268.65v.69l-3.4,7.1h-1.09l3.38-6.89v0h-3.81v-.87Z"/>
                        <path d="M1100.85,1269.53h-3l-.3,2a3.52,3.52,0,0,1,.64,0,3.22,3.22,0,0,1,1.67.42,2.21,2.21,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.66,3.92,3.92,0,0,1-1.94-.47l.26-.81a3.51,3.51,0,0,0,1.67.43,1.71,1.71,0,0,0,1.84-1.69c0-1-.68-1.73-2.24-1.73a7.42,7.42,0,0,0-1.08.09l.5-3.74h3.73Z"/>
                        <path d="M1110.77,1249.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M1119.69,1248.44v.7l-3.39,7.1h-1.09l3.38-6.9v0h-3.81v-.88Z"/>
                        <path d="M1124.05,1256.24v-2.13h-3.62v-.69l3.48-5h1.14v4.85h1.09v.82h-1.09v2.13Zm0-3v-2.61c0-.41,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.9,2.65v0Z"/>
                        <path d="M1137.24,1232.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M1146.16,1231.44v.7l-3.39,7.1h-1.09l3.38-6.9v0h-3.81v-.88Z"/>
                        <path d="M1147.51,1238a3.45,3.45,0,0,0,1.73.5c1.35,0,1.77-.87,1.76-1.51,0-1.1-1-1.56-2-1.56h-.59v-.8h.59c.76,0,1.74-.39,1.74-1.31,0-.63-.4-1.18-1.37-1.18a2.83,2.83,0,0,0-1.56.52l-.28-.77a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.25-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M1163,1213.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1171.93,1212.44v.7l-3.39,7.1h-1.1l3.39-6.9v0H1167v-.88Z"/>
                        <path d="M1173,1220.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M1190.08,1195.89h0l-1.35.73-.21-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1199,1194.9v.7l-3.39,7.1h-1.09l3.38-6.9v0h-3.82v-.88Z"/>
                        <path d="M1202.4,1195.89h0l-1.35.73-.21-.81,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M1215.77,1178.35h0l-1.35.73-.21-.81,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M1224.69,1177.36v.7l-3.39,7.1h-1.09l3.38-6.9v0h-3.81v-.88Z"/>
                        <path d="M1231,1181.18c0,2.65-1,4.11-2.71,4.11-1.52,0-2.55-1.43-2.58-4s1.13-4,2.71-4S1231,1178.69,1231,1181.18Zm-4.23.12c0,2,.62,3.17,1.58,3.17s1.6-1.25,1.6-3.25-.5-3.17-1.59-3.17C1227.41,1178.05,1226.74,1179.17,1226.74,1181.3Z"/>
                        <path d="M1241.77,1159.2h0l-1.35.73-.21-.8,1.71-.91h.9V1166h-1Z"/>
                        <path d="M1250.08,1159a3.83,3.83,0,0,0-.79,0,3.17,3.17,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.6,2.6,0,0,1-2.59,2.74c-1.67,0-2.76-1.29-2.76-3.32a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.3,4.5a1.58,1.58,0,0,0-1.6-1.79,1.73,1.73,0,0,0-1.51,1,.84.84,0,0,0-.13.47c0,1.28.62,2.23,1.72,2.23C1249.17,1165.33,1249.78,1164.57,1249.78,1163.46Z"/>
                        <path d="M1252.4,1165.27a4.43,4.43,0,0,0,.85,0,2.9,2.9,0,0,0,1.63-.75,3.44,3.44,0,0,0,1-2.08h0a2.29,2.29,0,0,1-1.84.84,2.25,2.25,0,0,1-2.3-2.38,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.28a4.91,4.91,0,0,1-1.34,3.66,3.85,3.85,0,0,1-2.27,1,5,5,0,0,1-1,.06Zm.39-4.49a1.49,1.49,0,0,0,1.49,1.66,1.75,1.75,0,0,0,1.54-.82.66.66,0,0,0,.1-.38c0-1.33-.5-2.35-1.6-2.35C1253.42,1158.89,1252.79,1159.68,1252.79,1160.78Z"/>
                        <path d="M1269.08,1140.05h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1277.4,1139.82a3.81,3.81,0,0,0-.8,0,3.18,3.18,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.66,0-2.76-1.3-2.76-3.32a4.9,4.9,0,0,1,1.32-3.52,4.28,4.28,0,0,1,2.5-1.15,4.76,4.76,0,0,1,.77-.06Zm-.31,4.49a1.58,1.58,0,0,0-1.6-1.78,1.71,1.71,0,0,0-1.51,1,.87.87,0,0,0-.12.46c0,1.29.61,2.23,1.71,2.23C1276.48,1146.18,1277.09,1145.43,1277.09,1144.31Z"/>
                        <path d="M1279,1144.89a2.24,2.24,0,0,1,1.55-2.09v0a1.94,1.94,0,0,1-1.23-1.76,2.18,2.18,0,0,1,2.41-2.07,2,2,0,0,1,2.26,1.92,2,2,0,0,1-1.28,1.82v0a2.16,2.16,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C1280,1147,1279,1146,1279,1144.89Zm4.2-.05c0-.95-.66-1.4-1.71-1.7a1.68,1.68,0,0,0-1.4,1.6,1.43,1.43,0,0,0,1.55,1.49A1.41,1.41,0,0,0,1283.2,1144.84Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44A1.54,1.54,0,0,0,1283,1141a1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,1280.3,1140.94Z"/>
                        <path d="M1294.77,1124h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1303.08,1123.75a3.83,3.83,0,0,0-.79,0,3.18,3.18,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.33a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.3,4.5a1.58,1.58,0,0,0-1.6-1.79,1.73,1.73,0,0,0-1.51,1,.84.84,0,0,0-.13.47c0,1.28.62,2.23,1.72,2.23C1302.17,1130.12,1302.78,1129.36,1302.78,1128.25Z"/>
                        <path d="M1309.85,1123v.69l-3.39,7.1h-1.09l3.38-6.89v0h-3.82V1123Z"/>
                        <path d="M1320.77,1105.53h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1329.08,1105.29a3.83,3.83,0,0,0-.79,0,3.17,3.17,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.6,2.6,0,0,1-2.59,2.74c-1.67,0-2.76-1.29-2.76-3.32a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.3,4.5a1.58,1.58,0,0,0-1.6-1.79,1.73,1.73,0,0,0-1.51,1,.84.84,0,0,0-.13.47c0,1.28.62,2.23,1.72,2.23C1328.17,1111.66,1328.78,1110.9,1328.78,1109.79Z"/>
                        <path d="M1335.24,1105.29a3.8,3.8,0,0,0-.79,0,3.16,3.16,0,0,0-2.71,2.77h0a2.38,2.38,0,0,1,4.24,1.62,2.6,2.6,0,0,1-2.59,2.74c-1.67,0-2.76-1.29-2.76-3.32a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.49-1.15,4.84,4.84,0,0,1,.77-.06Zm-.3,4.5a1.59,1.59,0,0,0-1.61-1.79,1.75,1.75,0,0,0-1.51,1,.93.93,0,0,0-.12.47c0,1.28.61,2.23,1.72,2.23C1334.33,1111.66,1334.94,1110.9,1334.94,1109.79Z"/>
                        <path d="M1349.31,1088.89h0l-1.35.73-.21-.81,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M1357.62,1088.65a3.75,3.75,0,0,0-.79,0,3.17,3.17,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.32a4.9,4.9,0,0,1,1.32-3.52,4.28,4.28,0,0,1,2.49-1.15,4.93,4.93,0,0,1,.77-.06Zm-.3,4.49a1.58,1.58,0,0,0-1.61-1.78,1.73,1.73,0,0,0-1.51,1,.87.87,0,0,0-.12.46c0,1.29.61,2.23,1.72,2.23C1356.71,1095,1357.32,1094.26,1357.32,1093.14Z"/>
                        <path d="M1364,1088.79h-3l-.3,2a4.58,4.58,0,0,1,.63,0,3.38,3.38,0,0,1,1.68.42,2.24,2.24,0,0,1,1.12,2,2.71,2.71,0,0,1-2.91,2.66,3.8,3.8,0,0,1-1.94-.48l.27-.8a3.46,3.46,0,0,0,1.66.43,1.72,1.72,0,0,0,1.85-1.69c0-1-.68-1.73-2.24-1.73a9.26,9.26,0,0,0-1.08.08l.5-3.74H1364Z"/>
                        <path d="M1373.91,1069.89h0l-1.35.73-.21-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1382.23,1069.65a3.72,3.72,0,0,0-.79,0,3.17,3.17,0,0,0-2.71,2.77h0a2.38,2.38,0,0,1,4.24,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.32A4.9,4.9,0,0,1,1379,1070a4.28,4.28,0,0,1,2.49-1.15,4.84,4.84,0,0,1,.77-.06Zm-.3,4.49a1.58,1.58,0,0,0-1.61-1.78,1.73,1.73,0,0,0-1.51,1,.87.87,0,0,0-.12.46c0,1.29.61,2.23,1.72,2.23C1381.32,1076,1381.93,1075.26,1381.93,1074.14Z"/>
                        <path d="M1387.2,1076.7v-2.13h-3.62v-.69l3.47-5h1.14v4.85h1.1v.82h-1.1v2.13Zm0-3v-2.61c0-.4,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1400.77,1052.39h0l-1.35.73-.21-.81,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M1409.08,1052.15a3.75,3.75,0,0,0-.79,0,3.18,3.18,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.32a4.9,4.9,0,0,1,1.32-3.52,4.28,4.28,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.3,4.49a1.58,1.58,0,0,0-1.6-1.78,1.71,1.71,0,0,0-1.51,1,.78.78,0,0,0-.13.46c0,1.29.62,2.23,1.72,2.23C1408.17,1058.51,1408.78,1057.76,1408.78,1056.64Z"/>
                        <path d="M1411,1058a3.57,3.57,0,0,0,1.73.49c1.35,0,1.77-.87,1.76-1.51,0-1.09-1-1.56-2-1.56h-.59v-.79h.59c.76,0,1.74-.4,1.74-1.32,0-.63-.4-1.18-1.37-1.18a2.86,2.86,0,0,0-1.56.52l-.28-.77a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.93,1.93,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.25-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M1427.19,1033.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1435.5,1033.18a3.83,3.83,0,0,0-.79,0A3.18,3.18,0,0,0,1432,1036h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.32a4.9,4.9,0,0,1,1.32-3.52,4.28,4.28,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.29,4.5a1.59,1.59,0,0,0-1.61-1.79,1.74,1.74,0,0,0-1.51,1,.84.84,0,0,0-.12.47c0,1.28.61,2.23,1.71,2.23C1434.59,1039.55,1435.21,1038.8,1435.21,1037.68Z"/>
                        <path d="M1437.21,1040.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.4,1.4,0,0,0-1.55-1.53,2.66,2.66,0,0,0-1.65.66l-.34-.74a3.41,3.41,0,0,1,2.21-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M1451.19,1014.46h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1459.5,1014.22a3.83,3.83,0,0,0-.79,0A3.18,3.18,0,0,0,1456,1017h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.33a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.29,4.5a1.59,1.59,0,0,0-1.61-1.79,1.74,1.74,0,0,0-1.51,1,.84.84,0,0,0-.12.47c0,1.28.61,2.23,1.71,2.23C1458.59,1020.59,1459.21,1019.83,1459.21,1018.72Z"/>
                        <path d="M1463.5,1014.46h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1480.77,1000.3h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1489.08,1000.06a3.83,3.83,0,0,0-.79.05,3.17,3.17,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.6,2.6,0,0,1-2.59,2.74c-1.67,0-2.76-1.29-2.76-3.32a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.3,4.5a1.58,1.58,0,0,0-1.6-1.79,1.73,1.73,0,0,0-1.51,1,.84.84,0,0,0-.13.47c0,1.28.62,2.23,1.72,2.23C1488.17,1006.43,1488.78,1005.67,1488.78,1004.56Z"/>
                        <path d="M1496,1003.13c0,2.65-1,4.11-2.71,4.11-1.52,0-2.55-1.42-2.58-4s1.13-4.06,2.71-4.06S1496,1000.65,1496,1003.13Zm-4.23.12c0,2,.62,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.5-3.18-1.59-3.18C1492.41,1000,1491.74,1001.13,1491.74,1003.25Z"/>
                        <path d="M1504.46,979.46h0l-1.35.74-.21-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1513,979.37h-3l-.3,2a4.72,4.72,0,0,1,.63,0,3.38,3.38,0,0,1,1.68.42,2.22,2.22,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.66,3.84,3.84,0,0,1-2-.48l.27-.8a3.5,3.5,0,0,0,1.66.43,1.72,1.72,0,0,0,1.85-1.69c0-1-.68-1.73-2.24-1.73a9.26,9.26,0,0,0-1.08.08l.5-3.74H1513Z"/>
                        <path d="M1515.1,985.53a4.31,4.31,0,0,0,.85,0,3,3,0,0,0,1.63-.76,3.38,3.38,0,0,0,1-2.07h0a2.33,2.33,0,0,1-1.84.84,2.26,2.26,0,0,1-2.3-2.39,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.29a4.94,4.94,0,0,1-1.34,3.65,3.92,3.92,0,0,1-2.27,1.05,5,5,0,0,1-1,.06Zm.38-4.48a1.5,1.5,0,0,0,1.5,1.65,1.77,1.77,0,0,0,1.54-.81.73.73,0,0,0,.09-.39c0-1.33-.49-2.35-1.59-2.35C1516.12,979.15,1515.48,979.94,1515.48,981.05Z"/>
                        <path d="M1530.84,963.64h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1539.36,963.54h-3l-.3,2a3.52,3.52,0,0,1,.64,0,3.28,3.28,0,0,1,1.68.42,2.22,2.22,0,0,1,1.11,2,2.7,2.7,0,0,1-2.9,2.66,3.8,3.8,0,0,1-1.94-.48l.26-.8a3.51,3.51,0,0,0,1.67.43,1.71,1.71,0,0,0,1.84-1.69c0-1-.68-1.72-2.24-1.72a7.6,7.6,0,0,0-1.08.08l.51-3.74h3.73Z"/>
                        <path d="M1540.76,968.47a2.22,2.22,0,0,1,1.55-2.08v0a1.93,1.93,0,0,1-1.24-1.75,2.19,2.19,0,0,1,2.41-2.07,2,2,0,0,1,2.27,1.91,2,2,0,0,1-1.28,1.83v0a2.17,2.17,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.26C1541.75,970.58,1540.76,969.61,1540.76,968.47Zm4.2,0c0-.95-.66-1.41-1.71-1.71a1.7,1.7,0,0,0-1.41,1.61,1.45,1.45,0,0,0,1.56,1.49A1.41,1.41,0,0,0,1545,968.43Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44a1.54,1.54,0,0,0,1.18-1.42,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,1542.06,964.53Z"/>
                        <path d="M1557.47,944.78h0l-1.35.73-.21-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1566,944.69h-3l-.3,2a4.75,4.75,0,0,1,.64-.05,3.24,3.24,0,0,1,1.67.42,2.22,2.22,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.66,3.87,3.87,0,0,1-2-.48l.27-.81a3.38,3.38,0,0,0,1.67.44,1.72,1.72,0,0,0,1.84-1.7c0-1-.68-1.72-2.24-1.72a9.44,9.44,0,0,0-1.08.08l.5-3.74H1566Z"/>
                        <path d="M1572.56,943.8v.7l-3.4,7.1h-1.09l3.38-6.9v0h-3.81v-.88Z"/>
                        <path d="M1581.44,927.16h0l-1.36.73-.2-.8,1.7-.91h.9V934h-1Z"/>
                        <path d="M1590,927.07h-3l-.3,2a4.58,4.58,0,0,1,.63-.05,3.28,3.28,0,0,1,1.68.42,2.23,2.23,0,0,1,1.12,2,2.71,2.71,0,0,1-2.91,2.67,3.8,3.8,0,0,1-1.94-.48l.27-.81a3.45,3.45,0,0,0,1.66.44,1.72,1.72,0,0,0,1.85-1.7c0-1-.68-1.72-2.24-1.72a9.09,9.09,0,0,0-1.08.08l.5-3.74H1590Z"/>
                        <path d="M1595.91,926.92a3.83,3.83,0,0,0-.79.05,3.18,3.18,0,0,0-2.71,2.77h0a2.37,2.37,0,0,1,4.23,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.33a4.89,4.89,0,0,1,1.32-3.51,4.28,4.28,0,0,1,2.5-1.15,4.73,4.73,0,0,1,.76-.06Zm-.3,4.5a1.58,1.58,0,0,0-1.6-1.79,1.73,1.73,0,0,0-1.51,1,.84.84,0,0,0-.12.47c0,1.28.61,2.23,1.71,2.23C1595,933.29,1595.61,932.54,1595.61,931.42Z"/>
                        <path d="M1609.33,908.87h0l-1.36.73-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1617.85,908.77h-3l-.3,2a4.58,4.58,0,0,1,.63,0,3.38,3.38,0,0,1,1.68.42,2.24,2.24,0,0,1,1.12,2,2.71,2.71,0,0,1-2.91,2.66,3.8,3.8,0,0,1-1.94-.48l.26-.8a3.54,3.54,0,0,0,1.67.43,1.72,1.72,0,0,0,1.85-1.69c0-1-.69-1.73-2.24-1.73a9.26,9.26,0,0,0-1.08.08l.5-3.74h3.73Z"/>
                        <path d="M1624,908.77h-3l-.3,2a4.75,4.75,0,0,1,.64,0,3.38,3.38,0,0,1,1.68.42,2.23,2.23,0,0,1,1.11,2,2.7,2.7,0,0,1-2.9,2.66,3.8,3.8,0,0,1-1.94-.48l.26-.8a3.54,3.54,0,0,0,1.67.43,1.72,1.72,0,0,0,1.84-1.69c0-1-.68-1.73-2.24-1.73a9.44,9.44,0,0,0-1.08.08l.51-3.74H1624Z"/>
                        <path d="M1636,888.38h0l-1.35.74-.21-.81,1.71-.91h.89v7.8h-1Z"/>
                        <path d="M1644.55,888.29h-3l-.3,2a4.75,4.75,0,0,1,.64,0,3.31,3.31,0,0,1,1.67.42,2.22,2.22,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.66,3.8,3.8,0,0,1-1.94-.48l.26-.8a3.51,3.51,0,0,0,1.67.43,1.72,1.72,0,0,0,1.84-1.69c0-1-.68-1.73-2.24-1.73a9.44,9.44,0,0,0-1.08.08l.5-3.74h3.73Z"/>
                        <path d="M1649.32,895.2v-2.13h-3.62v-.69l3.48-5h1.13v4.85h1.1v.82h-1.1v2.13Zm0-3v-2.61c0-.4,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1662.05,872.47h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1670.57,872.37h-3l-.3,2a3.52,3.52,0,0,1,.64,0,3.28,3.28,0,0,1,1.68.42,2.22,2.22,0,0,1,1.11,2,2.7,2.7,0,0,1-2.9,2.66,3.8,3.8,0,0,1-1.94-.48l.26-.8a3.51,3.51,0,0,0,1.67.43,1.71,1.71,0,0,0,1.84-1.69c0-1-.68-1.73-2.24-1.73a7.42,7.42,0,0,0-1.08.09l.51-3.74h3.73Z"/>
                        <path d="M1672.32,878.07a3.57,3.57,0,0,0,1.73.49c1.35,0,1.77-.86,1.76-1.51,0-1.09-1-1.56-2-1.56h-.58v-.79h.58c.77,0,1.74-.4,1.74-1.32,0-.62-.39-1.17-1.36-1.17a2.83,2.83,0,0,0-1.56.51l-.28-.77a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.92,2.23,1.86a1.94,1.94,0,0,1-1.44,1.84v0a2,2,0,0,1,1.74,2c0,1.24-1,2.33-2.84,2.33a4,4,0,0,1-2-.52Z"/>
                        <path d="M1684.27,852.69h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1692.79,852.59h-3l-.3,2a3.52,3.52,0,0,1,.64-.05,3.28,3.28,0,0,1,1.68.42,2.22,2.22,0,0,1,1.11,2,2.7,2.7,0,0,1-2.9,2.66,3.92,3.92,0,0,1-1.94-.47l.26-.81a3.54,3.54,0,0,0,1.67.43,1.72,1.72,0,0,0,1.85-1.69c0-1-.69-1.72-2.25-1.72a7.6,7.6,0,0,0-1.08.08l.51-3.74h3.73Z"/>
                        <path d="M1694.29,859.5v-.64l.83-.81c2-1.89,2.89-2.9,2.9-4.08a1.39,1.39,0,0,0-1.55-1.52,2.63,2.63,0,0,0-1.65.66l-.34-.74a3.41,3.41,0,0,1,2.21-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.6-2.69,4.19l-.63.57v0h3.51v.87Z"/>
                        <path d="M1710.9,832.91h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1719.42,832.81h-3l-.3,2a3.48,3.48,0,0,1,.63-.05,3.28,3.28,0,0,1,1.68.42,2.21,2.21,0,0,1,1.12,2,2.71,2.71,0,0,1-2.91,2.66,3.8,3.8,0,0,1-1.94-.48l.27-.8a3.5,3.5,0,0,0,1.66.43,1.72,1.72,0,0,0,1.85-1.69c0-1-.68-1.73-2.24-1.73a7.29,7.29,0,0,0-1.08.09l.5-3.74h3.73Z"/>
                        <path d="M1723.22,832.91h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1742.35,816.2h0l-1.36.73-.2-.81,1.7-.91h.9V823h-1Z"/>
                        <path d="M1750.87,816.1h-3l-.3,2a4.72,4.72,0,0,1,.63-.05,3.38,3.38,0,0,1,1.68.42,2.22,2.22,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.66,3.84,3.84,0,0,1-2-.48l.27-.8a3.5,3.5,0,0,0,1.66.43,1.72,1.72,0,0,0,1.85-1.69c0-1-.68-1.73-2.24-1.73a9.26,9.26,0,0,0-1.08.08l.5-3.74h3.73Z"/>
                        <path d="M1757.56,819c0,2.65-1,4.11-2.71,4.11-1.53,0-2.56-1.43-2.58-4s1.13-4,2.71-4S1757.56,816.54,1757.56,819Zm-4.24.12c0,2,.63,3.17,1.59,3.17s1.59-1.26,1.59-3.25-.49-3.17-1.58-3.17C1754,815.9,1753.32,817,1753.32,819.15Z"/>
                        <path d="M1765.43,798.67h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1772.56,805.49v-2.13h-3.62v-.69l3.48-5h1.13v4.85h1.1v.82h-1.1v2.13Zm0-3v-2.61c0-.4,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1776.06,804.74a4.4,4.4,0,0,0,.86,0,3,3,0,0,0,1.63-.76,3.49,3.49,0,0,0,1-2.07h0a2.3,2.3,0,0,1-1.83.84,2.26,2.26,0,0,1-2.3-2.39,2.66,2.66,0,0,1,2.66-2.77c1.59,0,2.58,1.29,2.58,3.28a4.91,4.91,0,0,1-1.35,3.66,3.93,3.93,0,0,1-2.26,1,5.15,5.15,0,0,1-1,.06Zm.39-4.48a1.5,1.5,0,0,0,1.5,1.65,1.74,1.74,0,0,0,1.53-.81.72.72,0,0,0,.1-.39c0-1.33-.49-2.35-1.6-2.35C1777.08,798.36,1776.45,799.15,1776.45,800.26Z"/>
                        <path d="M1792.2,781.79h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1799.33,788.61v-2.13h-3.62v-.69l3.47-5h1.14v4.85h1.09v.82h-1.09v2.13Zm0-3v-2.61c0-.4,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1802.13,786.63a2.23,2.23,0,0,1,1.54-2.09v0a2,2,0,0,1-1.24-1.76,2.19,2.19,0,0,1,2.42-2.07,2,2,0,0,1,2.26,1.92,2,2,0,0,1-1.28,1.82v0a2.16,2.16,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C1803.11,788.74,1802.13,787.77,1802.13,786.63Zm4.19,0c0-1-.66-1.4-1.71-1.7a1.68,1.68,0,0,0-1.4,1.6,1.43,1.43,0,0,0,1.55,1.49A1.41,1.41,0,0,0,1806.32,786.58Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44a1.54,1.54,0,0,0,1.19-1.41,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,1803.42,782.68Z"/>
                        <path d="M1821.74,764.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M1828.87,771.24v-2.13h-3.63v-.69l3.48-5h1.14v4.85H1831v.82h-1.09v2.13Zm0-3v-2.61c0-.41,0-.81,0-1.22h0c-.24.46-.44.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1836.82,763.44v.7l-3.39,7.1h-1.09l3.38-6.9v0h-3.82v-.88Z"/>
                        <path d="M1843,740.78h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M1850.1,747.6v-2.13h-3.63v-.69l3.48-5h1.14v4.85h1.09v.82h-1.09v2.13Zm0-3V742c0-.4,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1857.44,740.54a3.8,3.8,0,0,0-.79.05,3.17,3.17,0,0,0-2.71,2.77h0a2.35,2.35,0,0,1,1.89-.9,2.32,2.32,0,0,1,2.35,2.52,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.32a4.9,4.9,0,0,1,1.32-3.52,4.28,4.28,0,0,1,2.49-1.15,4.84,4.84,0,0,1,.77-.06Zm-.3,4.5a1.59,1.59,0,0,0-1.61-1.79,1.75,1.75,0,0,0-1.51,1,.93.93,0,0,0-.12.47c0,1.29.61,2.23,1.72,2.23C1856.53,746.91,1857.14,746.16,1857.14,745Z"/>
                        <path d="M1869.74,725h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1876.87,731.77v-2.12h-3.63V729l3.48-5h1.14v4.84H1879v.83h-1.09v2.12Zm0-2.95v-2.6c0-.41,0-.81,0-1.22h0c-.24.45-.44.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1884.41,724.87h-3l-.3,2a3.48,3.48,0,0,1,.63,0,3.28,3.28,0,0,1,1.68.42,2.21,2.21,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.67,3.84,3.84,0,0,1-2-.48l.27-.81a3.5,3.5,0,0,0,1.66.43,1.72,1.72,0,0,0,1.85-1.69c0-1-.68-1.72-2.24-1.72a7.48,7.48,0,0,0-1.08.08l.5-3.74h3.73Z"/>
                        <path d="M1894,702.28h0l-1.36.73-.2-.8,1.7-.92h.9v7.8h-1Z"/>
                        <path d="M1901.13,709.09V707h-3.62v-.7l3.48-5h1.13v4.85h1.1V707h-1.1v2.12Zm0-3v-2.6c0-.41,0-.82,0-1.23h0c-.24.46-.43.8-.65,1.16l-1.91,2.65v0Z"/>
                        <path d="M1907.29,709.09V707h-3.63v-.7l3.48-5h1.14v4.85h1.09V707h-1.09v2.12Zm0-3v-2.6q0-.62,0-1.23h0c-.24.46-.44.8-.65,1.16l-1.91,2.65v0Z"/>
                        <path d="M1920.23,685.46h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1927.36,692.27v-2.12h-3.63v-.69l3.48-5h1.14v4.84h1.09v.83h-1.09v2.12Zm0-2.95v-2.6c0-.41,0-.81,0-1.22h0c-.24.45-.44.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1930.5,691.06a3.57,3.57,0,0,0,1.73.49c1.36,0,1.77-.86,1.76-1.51,0-1.09-1-1.56-2-1.56h-.59v-.79h.59c.77,0,1.74-.39,1.74-1.32,0-.62-.4-1.17-1.37-1.17a2.89,2.89,0,0,0-1.56.51l-.28-.76a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.24-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M1945.23,664.3h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1952.36,671.11V669h-3.62v-.7l3.47-5h1.14v4.84h1.09V669h-1.09v2.12Zm0-3v-2.6c0-.41,0-.82,0-1.22h0c-.24.45-.44.79-.65,1.15l-1.91,2.65v0Z"/>
                        <path d="M1955.25,671.11v-.64l.83-.81c2-1.89,2.89-2.9,2.9-4.08a1.39,1.39,0,0,0-1.55-1.52,2.66,2.66,0,0,0-1.65.66l-.34-.74a3.41,3.41,0,0,1,2.21-.8,2.2,2.2,0,0,1,2.39,2.27c0,1.44-1,2.6-2.69,4.19l-.62.57v0h3.5v.87Z"/>
                        <path d="M1970.81,648.87h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M1977.93,655.68v-2.12h-3.62v-.69l3.48-5h1.14v4.84H1980v.83h-1.09v2.12Zm0-2.95v-2.6c0-.41,0-.81,0-1.22h0c-.24.45-.43.79-.64,1.15l-1.91,2.65v0Z"/>
                        <path d="M1983.12,648.87h0l-1.35.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M1997.52,626h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M2001.64,631.56a3.52,3.52,0,0,0,1.72.49c1.36,0,1.78-.86,1.77-1.51,0-1.09-1-1.56-2-1.56h-.59v-.79h.59c.77,0,1.74-.39,1.74-1.32,0-.62-.4-1.17-1.37-1.17a2.89,2.89,0,0,0-1.56.51l-.27-.76a3.69,3.69,0,0,1,2-.6c1.53,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.24-1,2.34-2.85,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M2012.72,628.79c0,2.65-1,4.12-2.71,4.12-1.52,0-2.55-1.43-2.58-4s1.13-4,2.71-4S2012.72,626.31,2012.72,628.79Zm-4.23.12c0,2,.62,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.5-3.18-1.59-3.18C2009.16,625.66,2008.49,626.79,2008.49,628.91Z"/>
                        <path d="M2021.23,607h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M2025.09,613.77v-.64l.83-.81c2-1.89,2.89-2.9,2.9-4.08a1.39,1.39,0,0,0-1.54-1.52,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.57v0h3.5v.87Z"/>
                        <path d="M2031.86,613a4.43,4.43,0,0,0,.85,0,2.87,2.87,0,0,0,1.63-.75,3.44,3.44,0,0,0,1-2.08h0a2.34,2.34,0,0,1-4.14-1.54,2.67,2.67,0,0,1,2.67-2.77c1.59,0,2.57,1.29,2.57,3.28a4.91,4.91,0,0,1-1.34,3.66,3.85,3.85,0,0,1-2.27,1,4.35,4.35,0,0,1-1,.06Zm.39-4.49a1.5,1.5,0,0,0,1.5,1.66,1.75,1.75,0,0,0,1.53-.82.66.66,0,0,0,.1-.38c0-1.33-.5-2.35-1.6-2.35C2032.88,606.65,2032.25,607.44,2032.25,608.54Z"/>
                        <path d="M2045.23,588h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M2049.09,594.77v-.64l.83-.81c2-1.89,2.89-2.9,2.9-4.08a1.39,1.39,0,0,0-1.54-1.52,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.57v0h3.5v.87Z"/>
                        <path d="M2055.15,592.8a2.23,2.23,0,0,1,1.55-2.09v0a1.94,1.94,0,0,1-1.24-1.75,2.19,2.19,0,0,1,2.42-2.07,2,2,0,0,1,2.26,1.91,2,2,0,0,1-1.28,1.83v0a2.17,2.17,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C2056.14,594.91,2055.15,593.93,2055.15,592.8Zm4.2,0c0-1-.66-1.41-1.71-1.71a1.71,1.71,0,0,0-1.41,1.61,1.45,1.45,0,0,0,1.56,1.49A1.41,1.41,0,0,0,2059.35,592.75Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44a1.55,1.55,0,0,0,1.19-1.42,1.22,1.22,0,0,0-1.32-1.27A1.24,1.24,0,0,0,2056.45,588.85Z"/>
                        <path d="M2070.23,571h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M2074.09,577.77v-.64l.83-.81c2-1.89,2.89-2.9,2.9-4.08a1.39,1.39,0,0,0-1.54-1.52,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.57v0h3.5v.87Z"/>
                        <path d="M2085.31,570v.69l-3.39,7.1h-1.09l3.38-6.89v0h-3.82V570Z"/>
                        <path d="M2097.23,554.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2101.09,561.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M2111.7,554.18a3.8,3.8,0,0,0-.79.05,3.17,3.17,0,0,0-2.71,2.77h0a2.35,2.35,0,0,1,1.89-.9,2.32,2.32,0,0,1,2.35,2.52,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.32a4.9,4.9,0,0,1,1.32-3.52,4.28,4.28,0,0,1,2.49-1.15,4.84,4.84,0,0,1,.77-.06Zm-.3,4.5a1.59,1.59,0,0,0-1.61-1.79,1.75,1.75,0,0,0-1.51,1,.93.93,0,0,0-.12.47c0,1.28.61,2.23,1.72,2.23C2110.79,560.55,2111.4,559.8,2111.4,558.68Z"/>
                        <path d="M2125.77,534.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2129.63,541.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M2140.44,534.33h-3l-.3,2a4.72,4.72,0,0,1,.63-.05,3.28,3.28,0,0,1,1.68.42,2.22,2.22,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.66,3.84,3.84,0,0,1-1.95-.48l.27-.81a3.37,3.37,0,0,0,1.66.44,1.72,1.72,0,0,0,1.85-1.7c0-1-.68-1.72-2.24-1.72a9.26,9.26,0,0,0-1.08.08l.5-3.74h3.73Z"/>
                        <path d="M2150.77,514.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2154.63,521.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M2164.05,521.24v-2.13h-3.62v-.69l3.48-5h1.14v4.85h1.09v.82h-1.09v2.13Zm0-3v-2.61c0-.41,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.9,2.65v0Z"/>
                        <path d="M2174.77,494.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2178.63,501.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M2185,500a3.45,3.45,0,0,0,1.73.5c1.35,0,1.77-.87,1.76-1.51,0-1.1-1-1.56-2-1.56h-.59v-.8h.59c.76,0,1.74-.39,1.74-1.31,0-.63-.4-1.18-1.37-1.18a2.86,2.86,0,0,0-1.56.52l-.28-.77a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.25-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M2199.77,474.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2203.63,481.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M2209.79,481.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.4,1.4,0,0,0-1.55-1.53,2.63,2.63,0,0,0-1.65.66l-.34-.74a3.41,3.41,0,0,1,2.21-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.63.58v0h3.51v.88Z"/>
                        <path d="M2225.77,454.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2229.63,461.24v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M2238.08,454.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2251.77,435.92h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2255.63,442.74v-.65l.83-.81c2-1.89,2.89-2.9,2.9-4.07a1.39,1.39,0,0,0-1.54-1.53,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.38,3.38,0,0,1,2.2-.79,2.19,2.19,0,0,1,2.39,2.26c0,1.44-1,2.61-2.69,4.19l-.62.58v0h3.5v.88Z"/>
                        <path d="M2267,438.75c0,2.65-1,4.12-2.71,4.12-1.52,0-2.55-1.43-2.58-4s1.13-4.05,2.71-4.05S2267,436.27,2267,438.75Zm-4.23.12c0,2,.62,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.5-3.18-1.59-3.18C2263.41,435.62,2262.74,436.75,2262.74,438.87Z"/>
                        <path d="M2275.77,416.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2281.92,416.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2286.4,422.49a4.31,4.31,0,0,0,.85,0,3,3,0,0,0,1.63-.76,3.44,3.44,0,0,0,1-2.07h0a2.32,2.32,0,0,1-1.84.84,2.26,2.26,0,0,1-2.3-2.39,2.67,2.67,0,0,1,2.66-2.77c1.6,0,2.58,1.29,2.58,3.28a4.91,4.91,0,0,1-1.34,3.66,3.92,3.92,0,0,1-2.27,1.05,5,5,0,0,1-1,.06Zm.39-4.48a1.49,1.49,0,0,0,1.49,1.65,1.77,1.77,0,0,0,1.54-.81.72.72,0,0,0,.1-.39c0-1.33-.5-2.35-1.6-2.35C2287.42,416.11,2286.79,416.9,2286.79,418Z"/>
                        <path d="M2301.77,395h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M2307.92,395h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M2311.69,399.8a2.23,2.23,0,0,1,1.55-2.09v0a1.94,1.94,0,0,1-1.24-1.75,2.19,2.19,0,0,1,2.41-2.07,2,2,0,0,1,2.27,1.91,2,2,0,0,1-1.28,1.83v0a2.17,2.17,0,0,1,1.57,2,2.4,2.4,0,0,1-2.65,2.27C2312.68,401.91,2311.69,400.93,2311.69,399.8Zm4.2-.05c0-.95-.66-1.41-1.71-1.71a1.7,1.7,0,0,0-1.41,1.61,1.45,1.45,0,0,0,1.56,1.49A1.41,1.41,0,0,0,2315.89,399.75Zm-2.9-3.9c0,.78.59,1.2,1.49,1.44a1.54,1.54,0,0,0,1.18-1.42,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,2313,395.85Z"/>
                        <path d="M2325.77,373.5h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M2331.92,373.5h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M2340.85,372.52v.69l-3.39,7.1h-1.09l3.38-6.89v0h-3.82v-.87Z"/>
                        <path d="M2351.77,358h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M2357.92,358h0l-1.36.73-.2-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M2366.24,357.72a3.8,3.8,0,0,0-.79,0,3.17,3.17,0,0,0-2.71,2.77h0a2.38,2.38,0,0,1,4.24,1.62,2.61,2.61,0,0,1-2.59,2.75c-1.67,0-2.76-1.3-2.76-3.33a4.89,4.89,0,0,1,1.32-3.51,4.22,4.22,0,0,1,2.49-1.15,4.84,4.84,0,0,1,.77-.06Zm-.3,4.5a1.59,1.59,0,0,0-1.61-1.79,1.75,1.75,0,0,0-1.51,1,.93.93,0,0,0-.12.47c0,1.28.61,2.23,1.72,2.23C2365.33,364.09,2365.94,363.33,2365.94,362.22Z"/>
                        <path d="M2375.81,335.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2382,335.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2390.48,335.33h-3l-.3,2a4.58,4.58,0,0,1,.63-.05,3.28,3.28,0,0,1,1.68.42,2.24,2.24,0,0,1,1.12,2,2.71,2.71,0,0,1-2.91,2.66,3.8,3.8,0,0,1-1.94-.48l.27-.81a3.34,3.34,0,0,0,1.66.44,1.72,1.72,0,0,0,1.85-1.7c0-1-.68-1.72-2.24-1.72a9.26,9.26,0,0,0-1.08.08l.5-3.74h3.73Z"/>
                        <path d="M2403.77,319.92h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2409.92,319.92h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2417.05,326.74v-2.13h-3.62v-.69l3.48-5h1.14v4.85h1.09v.82h-1.09v2.13Zm0-2.95v-2.61c0-.41,0-.81,0-1.22h0c-.24.46-.43.79-.65,1.15l-1.9,2.65v0Z"/>
                        <path d="M2428.77,300.92h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2434.92,300.92h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2439,306.52a3.45,3.45,0,0,0,1.73.5c1.35,0,1.77-.87,1.76-1.51,0-1.1-1-1.56-2-1.56h-.59v-.8h.59c.76,0,1.74-.39,1.74-1.31,0-.63-.4-1.18-1.37-1.18a2.86,2.86,0,0,0-1.56.52l-.28-.77a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.25-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M2455.23,285.11h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2461.38,285.11h0l-1.35.74-.21-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2465.25,291.93v-.65l.83-.8c2-1.9,2.89-2.91,2.9-4.08a1.39,1.39,0,0,0-1.55-1.52,2.65,2.65,0,0,0-1.65.65l-.34-.74a3.46,3.46,0,0,1,2.21-.79,2.2,2.2,0,0,1,2.39,2.27c0,1.44-1.05,2.6-2.69,4.18l-.62.58v0h3.5v.88Z"/>
                        <path d="M2481.23,263.88h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2487.38,263.88h0l-1.35.74-.21-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2493.54,263.88h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2505.77,249.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2511.92,249.42h0l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1Z"/>
                        <path d="M2521,252.25c0,2.65-1,4.12-2.71,4.12-1.52,0-2.55-1.43-2.58-4s1.13-4.05,2.71-4.05S2521,249.77,2521,252.25Zm-4.23.12c0,2,.62,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.5-3.18-1.59-3.18C2517.41,249.12,2516.74,250.25,2516.74,252.37Z"/>
                        <path d="M2534.88,229h0l-1.36.73-.2-.8,1.7-.92h.9v7.8h-1Z"/>
                        <path d="M2543.93,231.86c0,2.65-1,4.11-2.71,4.11-1.53,0-2.56-1.43-2.58-4s1.12-4.06,2.71-4.06S2543.93,229.37,2543.93,231.86Zm-4.24.12c0,2,.63,3.18,1.59,3.18s1.59-1.26,1.59-3.25-.49-3.18-1.58-3.18C2540.36,228.73,2539.69,229.86,2539.69,232Z"/>
                        <path d="M2545.51,235.1a4.43,4.43,0,0,0,.85,0,2.94,2.94,0,0,0,1.64-.76,3.46,3.46,0,0,0,1-2.07h0a2.34,2.34,0,0,1-4.14-1.55,2.68,2.68,0,0,1,2.67-2.77c1.59,0,2.57,1.3,2.57,3.29a4.94,4.94,0,0,1-1.34,3.66,4,4,0,0,1-2.27,1,5,5,0,0,1-1,.06Zm.39-4.49a1.5,1.5,0,0,0,1.5,1.66,1.74,1.74,0,0,0,1.53-.82.71.71,0,0,0,.1-.38c0-1.33-.49-2.35-1.6-2.35C2546.53,228.72,2545.9,229.51,2545.9,230.61Z"/>
                        <path d="M2560.73,208.63h0l-1.35.73-.21-.8,1.7-.91h.91v7.79h-1Z"/>
                        <path d="M2569.77,211.46c0,2.65-1,4.12-2.71,4.12-1.52,0-2.55-1.43-2.58-4s1.13-4,2.71-4S2569.77,209,2569.77,211.46Zm-4.23.12c0,2,.62,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.59-3.18C2566.21,208.33,2565.54,209.46,2565.54,211.58Z"/>
                        <path d="M2570.65,213.47a2.23,2.23,0,0,1,1.55-2.09v0a1.93,1.93,0,0,1-1.24-1.75,2.19,2.19,0,0,1,2.41-2.07,2,2,0,0,1,2.27,1.91,2,2,0,0,1-1.29,1.83v0a2.17,2.17,0,0,1,1.58,2,2.41,2.41,0,0,1-2.65,2.27C2571.63,215.58,2570.65,214.6,2570.65,213.47Zm4.2-.05c0-.95-.66-1.41-1.72-1.71a1.7,1.7,0,0,0-1.4,1.61,1.44,1.44,0,0,0,1.56,1.49A1.41,1.41,0,0,0,2574.85,213.42Zm-2.9-3.9c0,.78.58,1.2,1.48,1.44a1.55,1.55,0,0,0,1.19-1.42,1.21,1.21,0,0,0-1.32-1.27A1.24,1.24,0,0,0,2572,209.52Z"/>
                        <path d="M2581.77,188.23h0l-1.35.74-.21-.81,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2590.81,191.07c0,2.65-1,4.11-2.71,4.11-1.52,0-2.55-1.43-2.57-4s1.12-4,2.71-4S2590.81,188.58,2590.81,191.07Zm-4.23.11c0,2,.63,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.58-3.18C2587.25,187.93,2586.58,189.06,2586.58,191.18Z"/>
                        <path d="M2596.85,187.25v.7l-3.39,7.1h-1.09l3.38-6.9v0h-3.82v-.88Z"/>
                        <path d="M2608.77,167.84h0l-1.35.73-.21-.8,1.71-.91h.9v7.79h-1Z"/>
                        <path d="M2617.81,170.67c0,2.65-1,4.11-2.71,4.11-1.52,0-2.55-1.42-2.57-4s1.12-4.06,2.71-4.06S2617.81,168.19,2617.81,170.67Zm-4.23.12c0,2,.63,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.58-3.18C2614.25,167.54,2613.58,168.67,2613.58,170.79Z"/>
                        <path d="M2623.24,167.6a3.8,3.8,0,0,0-.79.05,3.15,3.15,0,0,0-2.71,2.77h0A2.38,2.38,0,0,1,2624,172a2.6,2.6,0,0,1-2.59,2.74c-1.67,0-2.76-1.29-2.76-3.32A4.88,4.88,0,0,1,2620,168a4.22,4.22,0,0,1,2.49-1.15,4.84,4.84,0,0,1,.77-.06Zm-.3,4.5a1.59,1.59,0,0,0-1.61-1.79,1.73,1.73,0,0,0-1.51,1,.9.9,0,0,0-.12.47c0,1.28.61,2.23,1.72,2.23C2622.33,174,2622.94,173.21,2622.94,172.1Z"/>
                        <path d="M2634.77,153.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2643.81,156.25c0,2.65-1,4.12-2.71,4.12-1.52,0-2.55-1.43-2.57-4s1.12-4.05,2.71-4.05S2643.81,153.77,2643.81,156.25Zm-4.23.12c0,2,.63,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.58-3.18C2640.25,153.12,2639.58,154.25,2639.58,156.37Z"/>
                        <path d="M2649.44,153.33h-3l-.3,2a4.72,4.72,0,0,1,.63-.05,3.28,3.28,0,0,1,1.68.42,2.22,2.22,0,0,1,1.12,2,2.7,2.7,0,0,1-2.9,2.66,3.84,3.84,0,0,1-1.95-.48l.27-.81a3.37,3.37,0,0,0,1.66.44,1.72,1.72,0,0,0,1.85-1.7c0-1-.68-1.72-2.24-1.72a9.26,9.26,0,0,0-1.08.08l.5-3.74h3.73Z"/>
                        <path d="M2659.77,132.15h0l-1.35.73-.21-.8,1.71-.92h.9V139h-1Z"/>
                        <path d="M2668.81,135c0,2.65-1,4.11-2.71,4.11-1.52,0-2.55-1.42-2.57-4s1.12-4.06,2.71-4.06S2668.81,132.5,2668.81,135Zm-4.23.12c0,2,.63,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.58-3.18C2665.25,131.85,2664.58,133,2664.58,135.1Z"/>
                        <path d="M2673.05,139v-2.12h-3.62v-.7l3.48-5h1.14V136h1.09v.83h-1.09V139Zm0-3v-2.6c0-.41,0-.82,0-1.23h0c-.24.46-.43.8-.65,1.16l-1.9,2.65v0Z"/>
                        <path d="M2686.77,115.42h0l-1.35.73-.21-.8,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2695.81,118.25c0,2.65-1,4.12-2.71,4.12-1.52,0-2.55-1.43-2.57-4s1.12-4,2.71-4S2695.81,115.77,2695.81,118.25Zm-4.23.12c0,2,.63,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.58-3.18C2692.25,115.12,2691.58,116.25,2691.58,118.37Z"/>
                        <path d="M2697,121a3.45,3.45,0,0,0,1.73.5c1.35,0,1.77-.87,1.76-1.51,0-1.1-1-1.56-2-1.56h-.59v-.8h.59c.76,0,1.74-.39,1.74-1.31,0-.63-.4-1.18-1.37-1.18a2.86,2.86,0,0,0-1.56.52l-.28-.77a3.71,3.71,0,0,1,2-.6c1.54,0,2.23.91,2.23,1.86a1.94,1.94,0,0,1-1.44,1.83v0a2,2,0,0,1,1.74,2c0,1.25-1,2.34-2.84,2.34a4,4,0,0,1-2-.53Z"/>
                        <path d="M2715.27,98.7h0l-1.35.73-.21-.8,1.7-.91h.9v7.79h-1Z"/>
                        <path d="M2724.32,101.53c0,2.65-1,4.11-2.71,4.11-1.52,0-2.55-1.42-2.58-4s1.13-4.06,2.71-4.06S2724.32,99.05,2724.32,101.53Zm-4.23.12c0,2,.62,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.5-3.18-1.59-3.18C2720.76,98.4,2720.09,99.53,2720.09,101.65Z"/>
                        <path d="M2725.3,105.51v-.65l.82-.8c2-1.89,2.89-2.9,2.91-4.08a1.39,1.39,0,0,0-1.55-1.52,2.66,2.66,0,0,0-1.66.66l-.33-.74a3.41,3.41,0,0,1,2.21-.8,2.19,2.19,0,0,1,2.38,2.27c0,1.44-1,2.6-2.68,4.19l-.63.57v0h3.5v.87Z"/>
                        <path d="M2739.77,82h0l-1.35.74-.21-.81,1.71-.91h.9v7.8h-1Z"/>
                        <path d="M2748.81,84.8c0,2.66-1,4.12-2.71,4.12-1.52,0-2.55-1.43-2.57-4s1.12-4,2.71-4S2748.81,82.32,2748.81,84.8Zm-4.23.12c0,2,.63,3.18,1.58,3.18s1.6-1.26,1.6-3.25-.49-3.18-1.58-3.18C2745.25,81.67,2744.58,82.8,2744.58,84.92Z"/>
                        <path d="M2752.08,82h0l-1.36.74-.2-.81,1.7-.91h.9v7.8h-1Z"/>
                        </g></g>
                    </svg>
                </div>
            </div>
        </section>

        <div class="modal fade" id="modal-lots" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class=" col-6">
                                <img 
                                    loading="lazy"
                                    src="assets/images/resources/Sandy_Beach_Logo.svg"
                                    class="img-fluid mb-3 w-200px" 
                                    alt="Logo Boreana" 
                                    width="180" 
                                />

                            </div>
                            <div class="col-6" style="text-align: right;">
                                <a @click="closeModal()">
                                    <i class="icon-close"></i>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-center responsive">
                            <div class="col-md-6 col-sm-12 custom-border-right mb-responsive">
                                <p class="custom-font-size mb-3">
                                    Status: <span x-show="lot.available === 1">AVAILABLE</span> <span x-show="lot.available === 2">DEPOSIT MADE</span> <span x-show="lot.available === 3">PURCHASED</span>  <br>
                                </p>
                                <p class="custom-font-size mb-3">
                                    Lot number: <span x-text="lot.number"></span> <br>
                                </p>
                                <p class="custom-font-size mb-3">
                                    Total surface area: <span x-text="lot.area"></span> <br>
                                </p>
                                <p class="custom-font-size mb-3">
                                    Dimensions (m<sup>2</sup>): <span x-text="lot.dimension"></span> <br>
                                </p>
                                <p class="custom-font-size mb-3">
                                    Total price: <span x-text="lot.price"></span> <br>
                                </p>
                                <p class="custom-font-size mb-3">
                                    Deposit (30%): <span x-text="lot.deposit"></span> <br>
                                </p>
                                <div class="col text-start sm-margin-30px-bottom check-privacidad mb-3">
                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right error">
                                    <label for="terms_condition" class="text-small d-inline-block align-top w-85">
                                                I confirm Have a <a href="Owning.html" class="owning">Fideicomiso</a> or <a href="#!" class="owning">Mexican Corporation</a> in order to buy this property.
                                    </label>
                                </div>
                                <a href="lost_page.html" class="about-one__btn thm-btn text-center">Buy now</a>
                            </div>
                            <div class="col-md-6 col-sm-12 d-grid justify-content-center">
                                <img loading="lazy" src="assets/images/resources/logo_lots.png" alt="logo" height="300px">
                                <a href="lost_page.html" class="about-one__btn thm-btn2 text-center">download pdf</a>
                            </div>
                        </div>
                        <!-- <p x-show="lot.available === 1" class="custom-font-size text-center">
                        Este lote se encuentra <strong>Disponible</strong>, para mayor información acerca de nuestros lotes, favor de comunicarse vía Whatsapp con uno de nuestros asesores. ¡Gracias!
                        </p>
                        <p x-show="lot.available === 2" class="custom-font-size text-center">
                        Este lote se encuentra <strong>Apartado</strong>, sin embargo, para mayor información acerca de nuestros lotes, favor de comunicarse vía Whatsapp con uno de nuestros asesores. ¡Gracias!
                        </p>
                        <p x-show="lot.available === 3" class="custom-font-size text-center">
                            Lo sentimos! Este lote ya fue <strong>Vendido</strong> , sin embargo, para mayor información acerca de nuestros lotes, favor de comunicarse vía Whatsapp con uno de nuestros asesores. ¡Gracias!
                        </p> -->
                        <!-- <div class="d-grid justify-content-center">
                            <a href="https://wa.link/0x9ty3" class="btn btn-client" target="_blank"><i class="fab fa-instagram"></i> Whatssap</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__shape-1 float-bob-x">
                <img src="assets/images/shapes/site-footer-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="site-footer__inner">
                    <div class="site-footer__top">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__logo">
                                        <h2 class="text-white text-footer text-center">Where dreams come true</h2>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__bottom-left">
                                <p class="site-footer__bottom-text text-white">© Sandy Beach House - Powered by  <a href="https://www.buho-solutions.com/">Búho Solutions</a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->
    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/Sandy_Beach_Logo.svg" width="80"
                        alt="" />
                    </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@sandybeachcoastal.com">info@sandybeachcoastal.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">+52 999 366 4326</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
    
    <script src="assets/js/contact.js"></script>

    <!-- Popover -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <!-- Toast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <!-- template js -->
    <script src="assets/js/alipes.js"></script>
    <script src="assets/js/app.js"></script>
    
</body>

</html>