<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    
<!-- Mirrored from demo.devitems.com/dilima-preview/dilima/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 14:34:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dilima Ecommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}"> 

        <!-- Fonts  -->
        <link href='https://fonts.googleapis.com/css?family=Khula:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('style.css')}}">
        

        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body class="home-1">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start main area -->
        <div class="main-area">
            <!-- Start header -->
            <header>
                <!-- Start top call-to acction -->
                <div class="top-bar-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="top-call-to-acction">
                                    <p>
                                        <a href="tel:0123-456-789"><i class="fa fa-phone"></i> Call us now: 0123-456-789</a>
                                        <a href="mailto:admin@bootexperts.com"><i class="fa fa-envelope-o"></i> E-mail: admin@bootexperts.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 pull-right">
                                <div class="social-and-menu">
                                    
                                    <div class="top-social">
                                        <p>
                                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                                            <a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            <a href="www.vimeo.com/%c3%a2%c2%80%c2%8e"><i class="fa fa-vimeo-square"></i></a>
                                            <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End top call-to acction -->
                <!-- Start logo and search area -->
                <div class="logo-and-search-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="logo">
                                    <a href="/"><img src="{{asset('img/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9">
                                <!-- Start user info adn search -->
                                <div class="user-info-adn-search">
                                    <div class="user-info">
                                        <p>
                                            
                                            @guest {{-- si il n'est pas connecter afficher:--}}
                                            <a href="{{route('login')}}"><i class="fa fa-key"></i> Sign in</a>
                                            <a href="{{route('register')}}"><i class="fa fa-plus"></i> Create new account</a>
                                            @else {{-- si il est connecter afficher:--}}
                                            <a href="/my-account"><i class="fa fa-user"></i> My Account</a>
                                            <a href="/saveForLater"><i class="fa fa-heart-o"></i> Wishlist</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="fa fa-key"></i> {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            
                                            @endguest

                                        </p>
                                    </div>
                                    <div class="aa-input-container" id="aa-input-container">
                                        <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search for players or teams..." name="search" autocomplete="off" />
                                        <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                                            <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                                        </svg>
                                    </div>
                                    <div class="shoping-cart">
                                        <a href="{{route('cart-page')}}"><span>My Cart ({{Cart::instance('default')->count()}})</span></a>
                                    </div>
                                   
                                </div>
                                <!-- End user info adn search -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End logo and search area -->
                <!-- Start mainmenu-area -->
                <div class="mainmenu-area">
                    <div class="container">
                        <div class="row">
                            <div class="mainmenu">
                                <nav>
                                    <ul>
                                        <li>
                                            <a class="home" href="/">Home</a>
                                        </li>
                                        <li><a href="/about">About us</a></li>
                                        <li><a href="{{route('shop.index')}}">shop</a></li>
                                        <li>
                                            <a href="/blog">Blog</a>
                                        </li>
                                       
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End mainmenu-area -->
                <!-- Start mobile menu -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 np">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="nav">
                                            <li>
                                                <a class="home" href="/">Home</a>
                                            </li>
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="shop-grid.html">shop</a></li>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-non-sidebar.html">Blog non sidebar</a></li>
                                                    <li><a href="single-blog.html">Single blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about-us.html"><span>About us</span></a></li>
                                                    <li><a href="blog.html"><span>Blog</span></a></li>
                                                    <li><a href="blog-non-sidebar.html"><span>blog non sidebar</span></a></li>
                                                    <li><a href="single-blog.html"><span>single blog</span></a></li>
                                                    <li><a href="shop-grid.html"><span>shop grid</span></a></li>
                                                    <li><a href="shop-list.html"><span>shop list</span></a></li>
                                                    <li><a href="single-product.html"><span>single product</span></a></li>
                                                <li><a href="{{route('cart-page')}}"><span>cart</span></a></li>
                                                    <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                                    <li><a href="checkout.html"><span>checkout</span></a></li>
                                                    <li><a href="contact-us.html"><span>contact us</span></a></li>
                                                    <li><a href="404.html"><span>404</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End mobile menu -->
            </header>
            <!-- End header -->








            @yield('content')








            <footer>
                <!-- Start footer top -->
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start footer top box -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="footer-top-box">
                                    <i class="fa fa-phone-square"></i>
                                    <a href="tel:+-0123-456-789">+ 0(123) 456 789</a>
                                    <p>Order by phone</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                            <!-- Start footer top box -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="footer-top-box">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Working time</span>
                                    <p>Mon - sun: 8.00 - 18.00</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                            <!-- Start footer top box -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="footer-top-box">
                                    <i class="fa fa-paper-plane"></i>
                                    <span>Free shipping</span>
                                    <p>on order over $199</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                            <!-- Start footer top box -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="footer-top-box last">
                                    <i class="fa fa-history"></i>
                                    <span>Money back 100%</span>
                                    <p>Within 30 days affter delivery</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                        </div>
                    </div>
                </div>
                <!-- End footer top -->
                <!-- Start footer medil -->
                <div class="footer-medil">
                    <div class="container">
                        <div class="row">
                            <!-- Start footer categori -->
                            <div class="col-xs-12 col-sm-8">
                                <div class="footer-categori">
                                    <h4>Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i> Automotive & Motorcycle</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Electronics</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Sports & Outdoors</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Smartphone & Tablets</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Health & Beauty</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Bags, Shoes & Accessories</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Computers & Networking</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Laptops & Accessories</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Entertainment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End footer categori -->
                            <!-- Start footer search area -->
                            <div class="col-xs-12 col-sm-4">
                                <div class="footer-search-area">
                                    <h4>Newsletter</h4>
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <button class="submitNew" name="submitNewsletter" type="submit">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <input type="text" value="Enter your e-mail" size="18" name="email" id="newsletter-input" class="inputNew form-control grey newsletter-input">
                                        </div>
                                    </form>
                                    <div class="hiring">
                                        <div class="img_in"><img alt="icon" src="{{asset('img/hire_logo.jpg')}}"></div>
                                        <div class="info">
                                            <h4>we’re hiring!</h4>
                                            <p>Click <a href="#">here</a> for more information</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End footer search area -->
                        </div>
                        <!-- Start footer medil information -->
                        <div class="footer-medil-information">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="info-box">
                                        <h4>Store Information</h4>
                                        <ul>
                                            <li>My Company</li>
                                            <li>Paris - France</li>
                                            <li>0123-456-789</li>
                                            <li><a href="mailto:admin@bootexperts.com">admin@bootexperts.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="info-box">
                                        <h4>Information</h4>
                                        <ul>
                                            <li class="item"><a title="Specials" href="#">Specials</a></li>
                                            <li class="item"><a title="New products" href="#"> New products</a></li>
                                            <li class="item"><a title="Best sellers" href="#"> Best sellers</a></li>
                                            <li class="item"><a title="Contact us" href="contact-us.html">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="info-box">
                                        <h4><a href="#">My account</a></h4>
                                        <ul>
                                            <li class="item"><a title="Specials" href="#">My orders</a></li>
                                            <li class="item"><a title="New products" href="#"> My credit slips</a></li>
                                            <li class="item"><a title="Best sellers" href="#"> My addresses</a></li>
                                            <li class="item"><a title="Contact us" href="#">My personal info</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="info-box">
                                        <h4>extra link</h4>
                                        <ul>
                                            <li class="item"><a title="Specials" href="#">gift cards</a></li>
                                            <li class="item"><a title="New products" href="#">e- gift cards</a></li>
                                            <li class="item"><a title="Best sellers" href="#">corporate gift cards</a></li>
                                            <li class="item"><a title="Contact us" href="#">check balance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End footer medil information -->
                    </div>
                </div>
                <!-- End footer medil -->
                <!-- Start footer copyright -->
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2015 <a href="http://bootexperts.com/">BootExperts</a>. All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="footer-card pull-right">
                                    <img src="{{asset('img/payment.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End footer copyright -->
            </footer>
            <!-- End footer -->
        </div>
          <!-- End main area -->
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
        
 		<!-- bootstrap js
		============================================ -->         
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        
        <!-- jquery.nivo.slider.pack js
        ============================================ -->       
        <script src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>

        <!-- jqueryui js
        ============================================ -->       
        <script src="{{asset('js/jquery.fancybox.js')}}"></script>

        <!-- jquery.scrollUp.min js
        ============================================ -->       
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>

   		<!-- wow js
		============================================ -->       
        <script src="{{asset('js/wow.js')}}"></script>

        <!-- jquery.meanmenu js
        ============================================ -->       
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="{{asset('js/plugins.js')}}"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="{{asset('js/main.js')}}"></script>

        {{-- js pour angolia (bar de recherche) --}}
        <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{asset('js/algolia.js')}}"></script>

    </body>

<!-- Mirrored from demo.devitems.com/dilima-preview/dilima/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 14:35:37 GMT -->
</html>
