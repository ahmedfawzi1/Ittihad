<!-- Header area start here -->
<header class="header-area">
    <div class="container">
        <div class="header__main">
            <a href="/" class="logo">
                <img src="{{ asset('assets/front/images/logo/logo.svg') }}" alt="logo">
            </a>
            <a href="/" class="logo logo-light">
                <img src="{{ asset('assets/front/images/logo/logo-light.svg') }}" alt="logo">
            </a>
            <div class="main-menu main-menu-light">
                <nav>
                    <ul>
                        <li>
                            <a href="/">Home</a>

                        </li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li>
                            <a href="{{ route('service') }}">Services <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('service') }}">Service</a>
                                </li>
                                <li>
                                    <a href="{{ route('serviceDetails') }}">Service Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('team') }}">Team <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('team') }}">Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('teamDetails') }}">Team Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">Blog <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('blog') }}">Blog & Articles</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogDetails') }}">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="{{ route('pricing') }}">Pricing Plan</a> </li>
                        <li><a href="{{ route('book') }}">Book a Demo</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <a href="{{ route('pricing') }}" class="btn-two d-none d-lg-inline-block">Get Started <i
                    class="fa-solid fa-arrow-right ms-1"></i></a>
            <div class="bars d-block d-lg-none">
                <i id="openButton" class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>
</header>
<!-- Header area end here -->

<!-- Sidebar area start here -->
<div id="targetElement" class="sidebar-area sidebar__hide">
    <div class="sidebar__overlay"></div>
    <a href="/" class="logo mb-40">
        <img src="{{ asset('assets/front/images/logo/logo-light.svg') }}" alt="logo">
    </a>
    <div class="mobile-menu overflow-hidden"></div>
    <ul class="info pt-40">
        <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
        </li>
        <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:+912659302003">+91 2659
                302 003</a>
        </li>
        <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a></li>
    </ul>
    <div class="social-icon mt-20">
        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#0"><i class="fa-brands fa-youtube"></i></a>
    </div>
    <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
</div>
<!-- Sidebar area end here -->
