<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('99Sellers') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/admin_panel/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>


        <div class="nav-logo-right">
            <nav class="main-menu">
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./property.html">Property</a></li>
                    <li><a href="./about-us.html">Agets</a></li>
                    <li><a href="./blog.html">News</a></li>
                    <li><a href="./property-details.html">Pages</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">

        <div class="nav-logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!--<div class="logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>-->
                    </div>
                    <div class="col-lg-9">
                        <div class="top-nav">
                            <div class="container">
                                        <nav class="main-menu">
                                            <ul>
                                                <li><a href="./index.html">Home</a></li>
                                                <li class="active"><a href="./property.html">Property</a></li>
                                                <li><a href="./about-us.html">Agets</a></li>
                                                <li><a href="./blog.html">News</a></li>
                                                <li><a href="./property-details.html">Pages</a></li>
                                                <li><a href="./contact.html">Contact</a></li>
                                                <li class="notification"><span>25</span></li>
                                            </ul>
                                        </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Map Section Begin -->
    <div class="in-banner">
        <h1>Properties</h1>

    </div>
    <!-- Map Section End -->

    <!-- Property Section Begin -->
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="property-sidebar">
                        <h4>Search Property</h4>
                        <form action="#" class="sidebar-search">
                            <!--<div class="sidebar-btn">
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-buy" checked>
                                    <label for="st-buy">Buy</label>
                                </div>
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-rent">
                                    <label for="st-rent">Rent</label>
                                </div>
                            </div>-->
                            <select>
                                <option value="">Locations</option>
                            </select>
                            <select>
                                <option value="">Status</option>
                            </select>
                            <select>
                                <option value="">No of Bedroom</option>
                            </select>
                            <select>
                                <option value="">No of Bathrooms</option>
                            </select>
                            <select>
                                <option value="">No of Guest</option>
                            </select>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRangeP">Size:</label>
                                    <input type="text" id="roomsizeRangeP" readonly>
                                </div>
                                <div id="roomsize-range-P" class="slider"></div>
                            </div>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRangeP">Price:</label>
                                    <input type="text" id="priceRangeP" readonly>
                                </div>
                                <div id="price-range-P" class="slider"></div>
                            </div>
                            <button type="submit" class="search-btn">Search Property</button>
                        </form>
                        <div class="best-agents">
                            <h4>Best Agents</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img class="full-width" src="{{ asset('material') }}/img/admin_panel/properties/best-agent-1.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Lester Bradley</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img class="full-width" src="{{ asset('material') }}/img/admin_panel/properties/best-agent-2.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Janie Blair</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img class="full-width" src="{{ asset('material') }}/img/admin_panel/properties/best-agent-3.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Sophia Cole</h5>
                                    <span>Marketing & Ceo</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h4 class="property-title">Property</h4>
                    <div class="property-list">
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="{{ asset('material') }}/img/admin_panel/properties/property-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">For Sale</div>
                                        <h5 class="r-title">Villa 9721 Glen Creek</h5>
                                        <div class="room-price">
                                            <span>Start From:</span>
                                            <h5>$3.000.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave.
                                            Ballston Spa, NY</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Bed Room</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Baths Bed</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Garage</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="{{ asset('material') }}/img/admin_panel/properties/property-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">For Sale</div>
                                        <h5 class="r-title">Villa 9721 Glen Creek</h5>
                                        <div class="room-price">
                                            <span>Start From:</span>
                                            <h5>$3.000.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave.
                                            Ballston Spa, NY</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Bed Room</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Baths Bed</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Garage</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="{{ asset('material') }}/img/admin_panel/properties/property-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">For Sale</div>
                                        <h5 class="r-title">Villa 9721 Glen Creek</h5>
                                        <div class="room-price">
                                            <span>Start From:</span>
                                            <h5>$3.000.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave.
                                            Ballston Spa, NY</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Bed Room</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Baths Bed</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Garage</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="{{ asset('material') }}/img/admin_panel/properties/property-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">For Sale</div>
                                        <h5 class="r-title">Villa 9721 Glen Creek</h5>
                                        <div class="room-price">
                                            <span>Start From:</span>
                                            <h5>$3.000.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave.
                                            Ballston Spa, NY</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Bed Room</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Baths Bed</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Garage</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="{{ asset('material') }}/img/admin_panel/footer-bg.jpg">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('material') }}/img/admin_panel/footer_logo.png" alt=""></a>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates.</p>
                            <form action="#" class="newslatter-form">
                                <input type="text" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-location-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="footer-widget">
                            <h4>Property City</h4>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Florida</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">New York</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Washington</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Los Angeles</a></li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">St Louis</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Jacksonville</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">San Jose</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">San Diego</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h4>Social</h4>
                            <ul class="social">
                                <li><i class="ti-facebook"></i> <a href="#">Facebook</a></li>
                                <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                                <li><i class="ti-twitter-alt"></i> <a href="#">Twitter</a></li>
                                <li><i class="ti-google"></i> <a href="#">Google+</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contact Us</h4>
                            <ul class="contact-option">
                                <li><i class="fa fa-map-marker"></i> 16 Creek Ave. Farming, NY</li>
                                <li><i class="fa fa-phone"></i> (+88) 666 121 4321</li>
                                <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
                                <li><i class="fa fa-clock-o"></i> Mon - Sat, 08 AM - 06 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p>Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, <a href="https://www.99sellers.com" target="_blank">99Sellers</a>, All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('material') }}/js/admin_panel/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('material') }}/js/admin_panel/bootstrap.min.js"></script>
    <script src="{{ asset('material') }}/js/admin_panel/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('material') }}/js/admin_panel/jquery.nice-select.min.js"></script>
    <script src="{{ asset('material') }}/js/admin_panel/jquery.slicknav.js"></script>
    <script src="{{ asset('material') }}/js/admin_panel/jquery-ui.min.js"></script>
    <script src="{{ asset('material') }}/js/admin_panel/owl.carousel.min.js"></script>
    <script src="{{ asset('material') }}/js/admin_panel/main.js"></script>
</body>

</html>
