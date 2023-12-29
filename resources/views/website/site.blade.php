<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Realshed/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jul 2023 23:24:02 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Realshed - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('frontend/assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/owl.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/nice-select.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
<link href="{{asset('frontend/assets/css/switcher-style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="r" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                e
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <!-- end switcher menu -->


        <!-- main header -->
            @include('website.body.header')
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

            @yield('content')

        <!-- main-footer -->
            @include('website.body.footer')
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
    <script src="{{asset('frontend/assets/js/validation.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/assets/js/appear.js')}}"></script>
    <script src="{{asset('frontend/assets/js/scrollbar.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/assets/js/nav-tool.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Realshed/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jul 2023 23:25:51 GMT -->
</html>
