<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLean | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
    <!-- Start coding here -->

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                    </div>
    
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                    </div>
                </div>
    
                <div class="ht-right">
                    <a href="login.blade.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:380px;">
                            <option value="yt" data-image="front/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                        </select>
                    </div>

                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.blade.php">
                                <img src="front/img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon-heart-alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_all"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"> <img src="front/img/select-product-1.jpg"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>123213213</p>
                                                            <h6>acscaccc</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"> <img src="front/img/select-product-2.jpg"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>123213213</p>
                                                            <h6>acscaccc</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>123</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.blade.php" class="primary-btn view-card">View Card</a>
                                        <a href="check-out.blade.php" class="primary-btn check-out-btn">Check Out</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">150</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn"> All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All Department</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
                            <li><a href="#">D</a></li>
                            <li><a href="#">E</a></li>
                            <li><a href="#">F</a></li>
                            <li><a href="#">G</a></li>
                            <li><a href="#">H</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.blade.php">Home</a></li>
                        <li><a href="shop.blade.php">Shop</a></li>
                        <li><a href=""></a></li>
                        <li><a href="blog.blade.php">Blog</a></li>
                        <li><a href="contact.blade.php">Contact</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.blade.php">Blog Details</a></li>
                                <li><a href="shopping-cart.blade.php">Shopping Cart</a></li>
                                <li><a href="check-out.blade.php">Checkout</a></li>
                                <li><a href="faq.blade.php">Faq</a></li>
                                <li><a href="register.blade.php">Register</a></li>
                                <li><a href="login.blade.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-item owl-carousel">
            <div class="single-hero-items set-bg" data-setgb="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Thanh Long</span>
                            <h1>Thanh Long dep trai</h1>
                            <p>Thanh Long dep trai qua</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale<span>100%</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-item owl-carousel">
            <div class="single-hero-items set-bg" data-setgb="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Thanh Long</span>
                            <h1>Thanh Long dep trai</h1>
                            <p>Thanh Long dep trai qua</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale<span>100%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg">
                        <div class="inner-text">
                            <h4>Thanh Long</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg">
                        <div class="inner-text">
                            <h4>Thanh Long dep</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg">
                        <div class="inner-text">
                            <h4>Thanh Long trai</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Thanh Long Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setgb="front/img/products/women-large.jpg">
                        <h2>Long</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">BoardGame chien thuat</li>
                            <li>BoardGame doi khang</li>
                            <li>BoardGame nau an</li>
                            <li>BoardGame tinh yeu</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/women-1.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/women-2.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/women-3.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/women-4.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Thanh Long Banner Section End -->

    <!-- Thanh Long 1 Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-large set-bg" data-setgb="front/img/products/man-large.jpg">
                        <h2>Long</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">BoardGame chien thuat</li>
                            <li>BoardGame doi khang</li>
                            <li>BoardGame nau an</li>
                            <li>BoardGame tinh yeu</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/man-1.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/man-2.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/man-3.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/man-4.jpg" alt="">
                                <div class="sale"> Sale </div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.blade.php">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Thanh Long</h5>
                            </a>
                                <div class="product-price">
                                    150VND
                                    <span>150$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Thanh Long 1 Banner Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tabelcell-inner">
                        <img src="front/img/logo-carousel/logo1.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tabelcell-inner">
                        <img src="front/img/logo-carousel/logo2.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tabelcell-inner">
                        <img src="front/img/logo-carousel/logo3.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tabelcell-inner">
                        <img src="front/img/logo-carousel/logo4.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tabelcell-inner">
                        <img src="front/img/logo-carousel/logo5.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.blade.php">
                                <img src="front/img/footer-logo.png" height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Pham Van Bach</li>
                            <li>Phone: 123456789</li>
                            <li>Nguyen Thanh Long dep trai</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Check Out</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Mua hang di</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Shopping Cart</a></li>
                            <li><a href="">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Thanh Long dep trai</h5>
                        <p>Thanh Long dep trai ae nhi</p>
                        <form action="#" class="subcribe-form">
                        <input type="text" placeholder="Thanh Long dep trai khong?">
                        <button type="button">Thanh Long xinh gai</button>
                    </form>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="copyright-reserved">
            <div class="conatiner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <p>Thanh Long day, ban tim ai?</p>
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>