<!-- Header area start here -->
<header class="header-area">
    <div class="container">
        <div class="header__main">
            <a href="/" class="logo">
                <img src="{{ asset('assets/front/images/logo/Picture1.jpg') }}" alt="logo">
            </a>
            <a href="/" class="logo logo-light">
                <img src="{{ asset('assets/front/images/logo/Picture1.jpg') }}" alt="logo">
            </a>
            <div class="main-menu main-menu-light">
                <nav>
                    <ul>
                        <li>
                            <a href="/">الرئيسية</a>

                        </li>
                        <li><a href="{{ route('about') }}">من نحن</a></li>
                        <li>
                            <a href="{{ route('service') }}">الخدمات <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('service') }}">الخدمات</a>
                                </li>
                                <li>
                                    <a href="{{ route('serviceDetails') }}">تفاصيل الخدمات</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('team') }}">المركز الإعلامي <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('team') }}">البوم الصور</a>
                                </li>
                                <li>
                                    <a href="{{ route('teamDetails') }}">مكتبة الفيديو</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">الاخبار</a>
                                </li>
                            </ul>
                        </li>

                        <li> <a href="{{ route('pricing') }}">الاشتراكات</a> </li>
                        <li><a href="{{ route('book') }}">المسابقات</a></li>
                        <li><a href="{{ route('contact') }}">التواصل</a></li>
                    </ul>
                </nav>
            </div>
            <a href="{{ route('contact') }}" class="btn-two d-none d-lg-inline-block">ابقى على تواصل<i
                    class="fa-solid fa-arrow-left ms-1"></i></a>
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
