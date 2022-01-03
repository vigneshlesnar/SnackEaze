

<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll">

<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="{{asset('cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js')}}"></script>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/> -->
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="page">
        <div class="page-loader">
            <div class="page-loader-body">
                <div class="cssload-container">
                    <div class="cssload-speeding-wheel"></div>
                </div>
                <p>Loading...</p>
            </div>
        </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
        <!-- Page Header-->
        <header class="page-head">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-minimal">
                <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="100px" data-lg-stick-up-offset="100px"
                    class="rd-navbar">
                    <div class="shell shell-fluid">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <a href="{{url('/')}}" class="rd-navbar-brand brand">
                                    <div class="brand-logo">
                                        <svg x="0px" y="0px" width="157px" height="41px" viewbox="0 0 157 41">
                        <text transform="matrix(1 0 0 1 1.144409e-004 32)" fill="#2C2D2F" font-family="'Grand Hotel'" font-size="45.22">Snackeaze</text>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#EB5453" d="M43.743,2.954c2.606,0,4.719,2.091,4.719,4.672  c0,2.58-2.113,4.672-4.719,4.672c-2.606,0-4.719-2.091-4.719-4.672C39.024,5.045,41.137,2.954,43.743,2.954z"></path>
                      </svg>
                                    </div>
                                </a>
                            </div>
                            <!-- RD Navbar Nav-->
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                <span class="navbar-icon restaurant"></span>
                                    <li><a href="{{url('/')}}" > <i class="fa fa-birthday-cake" style="font-size:20px;padding-right:5px"></i>Menu</a>
                                        <!-- RD Navbar Dropdown-->
                                        <ul class="rd-navbar-dropdown menu-img-wrap">
                                            <li class="menu-img"><a href="{{url('pizza')}}"><img src="{{asset('images/menu-food-01.png')}}" alt="" width="88" height="60"><span>Pizzas</span></a></li>
                                            <li class="menu-img"><a href="{{url('desset')}}"><img src="{{asset('images/menu-food-02.png')}}" alt="" width="88" height="60"><span>Desserts</span></a></li>
                                            <li class="menu-img"><a href="{{url('hotsips')}}"><img src="{{asset('images/menu-food-03.png')}}" alt="" width="88" height="60"><span>Hot Sips</span></a></li>
                                            <li class="menu-img"><a href="{{url('sandwich')}}"><img src="{{asset('images/menu-food-04.png')}}" alt="" width="88" height="60"><span>Sandwich</span></a></li>
                                            <li class="menu-img"><a href="{{url('juice')}}"><img src="{{asset('images/menu-food-05.png')}}" alt="" width="88" height="60"><span>Fresh juice & Snacks</span></a></li>
                                            <li class="menu-img"><a href="{{url('munchies')}}"><img src="{{asset('images/menu-food-06.png')}}" alt="" width="88" height="60"><span>Munchies</span></a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="{{url('about-us')}}" class=" thin-icon-map-mark"><i class="fa fa-commenting-o" style="font-size:20px;padding-right:5px"></i>About</a></li>
                                    <li><a href="{{url('contact-us')}}" class="thin-icon-map-mark"><i class="fa fa-map-o" style="font-size:20px;padding-right:5px"></i>Contacts</a></li>
                                    <li><a href="{{url('order-online')}}" class=" btn btn-burnt-sienna  btn-shape-circle ">Order Online</a></li>
                                    
                                  
                                </ul>

                                <!-- RD Navbar Shop-->
                                <ul class="rd-navbar-shop list-inline">
                                    <li>
                                        <a href="callto:#" class="unit unit-horizontal unit-middle unit-spacing-xxs link-default">
                                            <div class="unit-left"><span class=""></span></div>
                                            <div class="unit-body">
                                                <address class="contact-info"><span class="text-bold big"><i class="fa fa-phone" style="font-size:20px;padding-right:5px"></i> 098866 25346</span></address>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('cart')}}" class="unit unit-horizontal unit-middle unit-spacing-xxs link-gray-light">
                                            <div class="unit-left"><span class=""></span></div>
                                            <div class="unit-body"><i class="fa fa-shopping-cart" style="font-size:20px;padding-right:5px"></i><span class="label-inline big">{{Cart::getTotalQuantity()}}</span></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- ///////////////////////////////////////////////////////////////// Page Content ////////////////////////////////////////////////////////// -->
        @yield('content')
        <!-- ///////////////////////////////////////////////////////////////// Page Content End ////////////////////////////////////////////////////////// -->
        <footer class="page-foot text-sm-left">
            <section class="bg-gray-darker section-top-55 section-bottom-60">
                <div class="shell">
                    <div class="range border-left-cell">
                        <div class="cell-sm-6 cell-md-3 cell-lg-4"><a href="{{url('/')}}" class="brand brand-inverse">
                  <svg x="0px" y="0px" width="157px" height="41px" viewbox="0 0 157 41">
                    <text transform="matrix(1 0 0 1 1.144409e-004 32)" fill="#2C2D2F" font-family="'Grand Hotel'" font-size="45.22">Snackeaze</text>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#EB5453" d="M43.743,2.954c2.606,0,4.719,2.091,4.719,4.672  c0,2.58-2.113,4.672-4.719,4.672c-2.606,0-4.719-2.091-4.719-4.672C39.024,5.045,41.137,2.954,43.743,2.954z"></path>
                  </svg></a>
                            <ul class="list-unstyled contact-info offset-top-5">
                                <li>
                                    <div class="unit unit-horizontal unit-top unit-spacing-xxs">
                                        <div class="unit-left"><span class="text-white">Address:</span></div>
                                        <div class="unit-body text-left text-gray-light">
                                            <p>SnackEaze Cafe,<br>
9/10, Gurumurthy swamy temple road,<br>
HSR Layout Extension 2 Bengaluru,<br>
Karnataka 560102<br>
India.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-horizontal unit-top unit-spacing-xxs">
                                        <div class="unit-left"><span class="text-white">Email:</span></div>
                                        <div class="unit-body"><a href="mailto:#" class="link-gray-light">snackeaze.blr@gmail.com</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-sm-top-0">
                            <h4 class="text-uppercase">Our menu</h4>
                            <ul class="list-tags offset-top-15">
                                <li class="text-gray-light"><a href="{{url('pizza')}}" class="link-gray-light">Pizzas</a></li>
                                <li class="text-gray-light"><a href="{{url('desset')}}" class="link-gray-light">Desserts</a></li>
                                <li class="text-gray-light"><a href="{{url('hotsips')}}" class="link-gray-light">Hot Sips</a></li>
                                <li class="text-gray-light"><a href="{{url('pizza')}}" class="link-gray-light">Sandwich</a></li>
                                <li class="text-gray-light"><a href="{{url('pizza')}}" class="link-gray-light">Fresh juice & Snacks</a></li>
                                <li class="text-gray-light"><a href="{{url('pizza')}}" class="link-gray-light">Munchies</a></li>
                            </ul>
                        </div>
                        <!-- <div class="cell-sm-10 cell-lg-5 offset-top-50 offset-md-top-0 cell-md-6">
                            <h4 class="text-uppercase">newsletter</h4>
                            <div class="offset-top-20">
                                <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-subscribe form-inline-flex-xs">
                                    <div class="form-group">
                                        <input placeholder="Your Email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-burnt-sienna btn-shape-circle">Subscribe</button>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <section class="section-20 bg-gray-darker">
                <div class="shell">
                    <div class="range range-xs-center range-sm-justify">
                        <div class="cell-sm-5 offset-top-26 text-md-left">
                            <p class="copyright">
                            Snackeaze &nbsp;&#169;&nbsp;
                                <span id="copyright-year"></span>&nbsp;<br class="veil-sm"><a href="privacy.html">Privacy Policy</a>
                                <!-- {%FOOTER_LINK}-->
                            </p>
                        </div>
                        <div class="cell-sm-4 offset-top-30 offset-sm-top-0 text-md-right">
                            <ul class="list-inline list-inline-sizing-1">
                                <li><a href="#" class="link-silver-light"><span class="icon icon-xs fa-instagram"></span></a></li>
                                <li><a href="#" class="link-silver-light"><span class="icon icon-xs fa-facebook"></span></a></li>
                                <li><a href="#" class="link-silver-light"><span class="icon icon-xs fa-twitter"></span></a></li>
                                <li><a href="#" class="link-silver-light"><span class="icon icon-xs fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                    <button title="Share" class="pswp__button pswp__button--share"></button>
                    <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                    <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
                <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__cent"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Java script-->
    <script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <!-- Google Tag Manager --><noscript><iframe src="www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script>
    <!-- End Google Tag Manager -->
</body>

</html>