<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('front.include.head')
</head>

<body >

    <!-- Preloader area start -->
    <div id="loading" class="preloader">
        <div class="loading-overlay"></div>
        <div class="custom-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader area end -->

    <!-- Top header area start here -->
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="header-top-wrp">
                <ul class="info">
                    <li><i class="fa-solid fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a></li>
                    <li class="bor-left ms-4 ps-4"><i class="fa-solid fa-location-dot"></i> <a href="#0">85 Ketch
                            Harbour RoadBensalem, PA 19020</a>
                    </li>
                </ul>
                <ul class="link-info">
                    <li class="bor-right"><a href="#0"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="bor-right"><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="bor-right"><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="#0"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top header area end here -->

    @yield('header')

    @yield('content')

    @include('front.include.footer')

    <!-- Back to top btn area start here -->
    <button class="btn-backToTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- Back to top btn area end here -->

    @include('front.include.footer-scripts')
</body>

</html>
