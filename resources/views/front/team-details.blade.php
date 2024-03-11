@extends('front.include.master')

@section('title')
مكتبة الفيديو
@stop

@section('style')
@stop

@section('header')
    @include('front.include.header1')
@stop

@section('content')

    <main>

        <!-- Banner area start here -->
        <section class="banner-inner-area pt-160 pb-80 bg-image"
            data-background="{{ asset('assets/front/front/images/bg/banner-inner.png') }}">
            <div class="container">
                <div class="banner-inner__content">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms"><a href="/">الرئيسية</a> /
                        <span>مكتبة الفيديو</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">مكتبة الفيديو</h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">سنساعد
                        مشاكل العميل على تطوير رياضته بجودة عالية.</p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->


        <!-- Blog area start here -->
        {{-- <div class="blog-area">
        <div class="container">
            <div class="pt-120 pb-120 bor-bottom">
                <div class="blog-two__item list-item p-0 border-none">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <a href="blog-details.html" class="image d-block">
                                <img src="{{ asset('assets/front/images/blog/blog-image9.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <h3><a class="primary-hover" href="blog-details.html">
                                    How to Do Keyword Research for SEO: A Beginner's Guide
                                </a></h3>
                            <p class="mt-10">To keep your reader interested, you should think about the structure of
                                your content
                                and keep it enjoyable.</p>
                            <ul class="d-flex align-items-center gap-4 flex-wrap mt-20 mb-30">
                                <li><svg class="me-1" width="14" height="18" viewBox="0 0 14 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.00753 7.95833C5.05419 7.95833 3.46586 6.36917 3.46586 4.41667C3.46586 2.46417 5.05419 0.875 7.00753 0.875C8.96086 0.875 10.5492 2.46417 10.5492 4.41667C10.5492 6.36917 8.96086 7.95833 7.00753 7.95833ZM7.00753 2.125C5.74336 2.125 4.71586 3.1525 4.71586 4.41667C4.71586 5.68083 5.74336 6.70833 7.00753 6.70833C8.27169 6.70833 9.29919 5.68083 9.29919 4.41667C9.29919 3.1525 8.27086 2.125 7.00753 2.125ZM10.3308 17.125H3.66921C1.65254 17.125 0.541664 16.0209 0.541664 14.0159C0.541664 11.7984 1.79666 9.20833 5.33333 9.20833H8.66666C12.2033 9.20833 13.4583 11.7975 13.4583 14.0159C13.4583 16.0209 12.3475 17.125 10.3308 17.125ZM5.33333 10.4583C2.0475 10.4583 1.79166 13.1809 1.79166 14.0159C1.79166 15.3192 2.35337 15.875 3.66921 15.875H10.3308C11.6466 15.875 12.2083 15.3192 12.2083 14.0159C12.2083 13.1817 11.9525 10.4583 8.66666 10.4583H5.33333Z"
                                            fill="#25314C" />
                                    </svg>
                                    <a href="#" class="primary-hover para-color">John Smith</a>
                                </li>
                                <li><svg class="me-1" width="18" height="16" viewBox="0 0 18 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6708 6.86635L8.33747 1.52715C7.81746 1.00632 7.09749 0.708008 6.36166 0.708008H2.11168C0.970009 0.708008 0.0416679 1.63719 0.0416679 2.77969V7.03384C0.0416679 7.77968 0.332465 8.48218 0.859132 9.01052L6.1933 14.3497C6.81747 14.9747 7.48163 15.2913 8.1683 15.2913C8.85413 15.2913 9.51915 14.9747 10.1425 14.3497L13.67 10.8188C14.9442 9.54467 14.9442 8.14052 13.6708 6.86635ZM12.7875 9.93551L9.26001 13.4663C8.49501 14.2305 7.83998 14.2288 7.07831 13.4663L1.74496 8.12719C1.45246 7.83469 1.29248 7.44634 1.29248 7.03384V2.77969C1.29248 2.32636 1.65999 1.95801 2.11249 1.95801H6.36247C6.76914 1.95801 7.16668 2.12303 7.45418 2.41053L12.7875 7.74968C13.5725 8.53635 13.5725 9.14884 12.7875 9.93551ZM17.9583 8.84883C17.9575 9.52549 17.6342 10.188 16.9992 10.8188L13.4758 14.3497C12.8625 14.9738 12.1967 15.2913 11.5 15.2913C11.155 15.2913 10.875 15.0113 10.875 14.6663C10.875 14.3213 11.155 14.0413 11.5 14.0413C11.8492 14.0413 12.2142 13.8489 12.5875 13.4697L16.1158 9.93301C16.5091 9.54301 16.7075 9.178 16.7083 8.84633C16.7092 8.51217 16.51 8.14302 16.1167 7.74968L10.7833 2.40799C10.525 2.14549 10.1784 1.98965 9.8017 1.96548C9.4567 1.94298 9.19497 1.64549 9.2183 1.30132C9.23997 0.95632 9.56832 0.699694 9.88165 0.718028C10.5675 0.762194 11.2034 1.05053 11.6717 1.52969L17.0008 6.86717C17.6375 7.503 17.96 8.17049 17.9583 8.84883ZM4.41667 4.24967C4.41667 4.70967 4.04496 5.08301 3.58496 5.08301C3.12663 5.08301 2.75 4.70967 2.75 4.24967C2.75 3.78967 3.11837 3.41634 3.57754 3.41634H3.58588C4.04504 3.41634 4.41667 3.78967 4.41667 4.24967Z"
                                            fill="#25314C" />
                                    </svg>

                                    <a href="#" class="primary-hover para-color">Business</a>
                                </li>
                                <li><svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 2.125H12.9583V1.5C12.9583 1.155 12.6783 0.875 12.3333 0.875C11.9883 0.875 11.7083 1.155 11.7083 1.5V2.125H6.29167V1.5C6.29167 1.155 6.01167 0.875 5.66667 0.875C5.32167 0.875 5.04167 1.155 5.04167 1.5V2.125H4C1.985 2.125 0.875 3.235 0.875 5.25V14C0.875 16.015 1.985 17.125 4 17.125H14C16.015 17.125 17.125 16.015 17.125 14V5.25C17.125 3.235 16.015 2.125 14 2.125ZM4 3.375H5.04167V4C5.04167 4.345 5.32167 4.625 5.66667 4.625C6.01167 4.625 6.29167 4.345 6.29167 4V3.375H11.7083V4C11.7083 4.345 11.9883 4.625 12.3333 4.625C12.6783 4.625 12.9583 4.345 12.9583 4V3.375H14C15.3142 3.375 15.875 3.93583 15.875 5.25V5.875H2.125V5.25C2.125 3.93583 2.68583 3.375 4 3.375ZM14 15.875H4C2.68583 15.875 2.125 15.3142 2.125 14V7.125H15.875V14C15.875 15.3142 15.3142 15.875 14 15.875ZM6.51668 9.83333C6.51668 10.2933 6.14418 10.6667 5.68335 10.6667C5.22335 10.6667 4.84574 10.2933 4.84574 9.83333C4.84574 9.37333 5.21501 9 5.67501 9H5.68335C6.14335 9 6.51668 9.37333 6.51668 9.83333ZM9.85002 9.83333C9.85002 10.2933 9.47752 10.6667 9.01668 10.6667C8.55668 10.6667 8.17908 10.2933 8.17908 9.83333C8.17908 9.37333 8.54834 9 9.00834 9H9.01668C9.47668 9 9.85002 9.37333 9.85002 9.83333ZM13.1833 9.83333C13.1833 10.2933 12.8108 10.6667 12.35 10.6667C11.89 10.6667 11.5124 10.2933 11.5124 9.83333C11.5124 9.37333 11.8817 9 12.3417 9H12.35C12.81 9 13.1833 9.37333 13.1833 9.83333ZM6.51668 13.1667C6.51668 13.6267 6.14418 14 5.68335 14C5.22335 14 4.84574 13.6267 4.84574 13.1667C4.84574 12.7067 5.21501 12.3333 5.67501 12.3333H5.68335C6.14335 12.3333 6.51668 12.7067 6.51668 13.1667ZM9.85002 13.1667C9.85002 13.6267 9.47752 14 9.01668 14C8.55668 14 8.17908 13.6267 8.17908 13.1667C8.17908 12.7067 8.54834 12.3333 9.00834 12.3333H9.01668C9.47668 12.3333 9.85002 12.7067 9.85002 13.1667ZM13.1833 13.1667C13.1833 13.6267 12.8108 14 12.35 14C11.89 14 11.5124 13.6267 11.5124 13.1667C11.5124 12.7067 11.8817 12.3333 12.3417 12.3333H12.35C12.81 12.3333 13.1833 12.7067 13.1833 13.1667Z"
                                            fill="#25314C" />
                                    </svg>

                                    <a href="#" class="primary-hover para-color">January 25, 2024</a>
                                </li>
                                <li><svg class="me-1" width="18" height="17" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.2141 16.1247C2.09327 16.1247 1.97591 16.123 1.86091 16.1189C1.44424 16.1089 1.07914 15.8422 0.936635 15.4397C0.793302 15.0347 0.911725 14.5939 1.23672 14.3172C2.01339 13.6906 2.32409 12.9972 2.44909 12.5214C1.41825 11.2889 0.874176 9.73299 0.874176 8.00049C0.874176 3.70632 4.21584 0.708008 8.99918 0.708008C13.7825 0.708008 17.1242 3.70716 17.1242 8.00049C17.1242 12.2938 13.7825 15.293 8.99918 15.293C8.01001 15.293 7.06164 15.1588 6.17081 14.8938C5.03497 15.883 3.46993 16.1247 2.2141 16.1247ZM1.89835 14.8689C1.90001 14.8689 1.90156 14.8689 1.90323 14.8689C1.90073 14.8697 1.89918 14.8697 1.89835 14.8689ZM8.99999 1.95801C4.95249 1.95801 2.12499 4.44299 2.12499 8.00049C2.12499 9.53049 2.62914 10.8855 3.58414 11.9188C3.7133 12.0588 3.77242 12.2505 3.74242 12.4397C3.60242 13.3322 3.16258 14.1764 2.48591 14.8689C3.45258 14.8339 4.75252 14.6114 5.55252 13.758C5.72002 13.578 5.98001 13.5138 6.21251 13.5947C7.07501 13.893 8.01249 14.0439 8.99999 14.0439C13.0475 14.0439 15.875 11.5588 15.875 8.0013C15.875 4.4438 13.0475 1.95801 8.99999 1.95801ZM9.85001 7.99967C9.85001 7.53967 9.47751 7.16634 9.01667 7.16634H9.00833C8.54833 7.16634 8.17907 7.53967 8.17907 7.99967C8.17907 8.45967 8.55667 8.83301 9.01667 8.83301C9.47667 8.83301 9.85001 8.45967 9.85001 7.99967ZM13.1833 7.99967C13.1833 7.53967 12.8108 7.16634 12.35 7.16634H12.3417C11.8817 7.16634 11.5124 7.53967 11.5124 7.99967C11.5124 8.45967 11.89 8.83301 12.35 8.83301C12.81 8.83301 13.1833 8.45967 13.1833 7.99967ZM6.51667 7.99967C6.51667 7.53967 6.14417 7.16634 5.68334 7.16634H5.675C5.215 7.16634 4.84573 7.53967 4.84573 7.99967C4.84573 8.45967 5.22334 8.83301 5.68334 8.83301C6.14334 8.83301 6.51667 8.45967 6.51667 7.99967Z"
                                            fill="#25314C" />
                                    </svg>

                                    <a href="#" class="primary-hover para-color">No Comments</a>
                                </li>
                            </ul>
                            <p class="mt-10 mb-20">For some, writing for SEO purposes and writing to attract and
                                captivate your audience seem like two conflicting goals. I
                                totally disagree. Sure, the words you want to be found for should be in a prominent
                                place.</p>
                            <a href="blog-details.html" class="explore-btn"><span>Learn More</span> <i
                                    class="fa-regular fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           </div> --}}
        <!-- Blog area start here -->

        <!-- Blog area start here -->
        <section class="blog-area pb-120 pt-60">
            <div class="container">
                <div class="section-header__wrp mb-80">
                    <div class="section-header-two">
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">اخر فيديوهاتنا
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">لوريم ايبسوم دولار سيت أميت
                        ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                        أنكايديديونتيوت لابوري ات <br> دولار ماجنا أليكيوا .</p>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="blog__item">
                            <a href="blog-details.html" class="image d-block">
                                <img src="{{ asset('assets/front/images/blog/blog-image3.jpg') }}" alt="image">
                            </a>
                            <h3 class="mb-10 mt-30"><a href="blog-details.html" class="primary-hover">كيو
                                    فوليوبتاس نيولا باراياتيور؟</a></h3>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا... <a href="blog-details.html"
                                    class="fw-500 primary-color">المزيد</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog__item">
                            <a href="blog-details.html" class="image d-block">
                                <img src="{{ asset('assets/front/images/blog/blog-image4.jpg') }}" alt="image">
                            </a>
                            <h3 class="mb-10 mt-30"><a href="blog-details.html" class="primary-hover">كيو
                                    فوليوبتاس نيولا باراياتيور؟</a></h3>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا... <a href="blog-details.html"
                                    class="fw-500 primary-color">المزيد</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog__item">
                            <a href="blog-details.html" class="image d-block">
                                <img src="{{ asset('assets/front/images/blog/blog-image5.jpg') }}" alt="image">
                            </a>
                            <h3 class="mb-10 mt-30"><a href="blog-details.html" class="primary-hover">كيو
                                    فوليوبتاس نيولا باراياتيور؟</a></h3>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا... <a href="blog-details.html"
                                    class="fw-500 primary-color">المزيد</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog__item">
                            <a href="blog-details.html" class="image d-block">
                                <img src="{{ asset('assets/front/images/blog/blog-image6.jpg') }}" alt="image">
                            </a>
                            <h3 class="mb-10 mt-30"><a href="blog-details.html" class="primary-hover">كيو
                                    فوليوبتاس نيولا باراياتيور؟</a></h3>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا... <a href="blog-details.html"
                                    class="fw-500 primary-color">المزيد</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog__item">
                            <a href="blog-details.html" class="image d-block">
                                <img src="{{ asset('assets/front/images/blog/blog-image7.jpg') }}" alt="image">
                            </a>
                            <h3 class="mb-10 mt-30"><a href="blog-details.html" class="primary-hover">كيو
                                    فوليوبتاس نيولا باراياتيور؟</a></h3>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا... <a href="blog-details.html"
                                    class="fw-500 primary-color">المزيد</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog__item">
                            <a href="blog-details.html" class="image d-block">
                                <img src="{{ asset('assets/front/images/blog/blog-image8.jpg') }}" alt="image">
                            </a>
                            <h3 class="mb-10 mt-30"><a href="blog-details.html" class="primary-hover">كيو
                                    فوليوبتاس نيولا باراياتيور؟</a></h3>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا... <a href="blog-details.html"
                                    class="fw-500 primary-color">المزيد</a></p>
                        </div>
                    </div>
                </div>
                <div class="pegi justify-content-center mt-80">
                    <a href="#0"><i class="fa-regular fa-arrow-right-long"></i></a>
                    <a class="dot-pegi active" href="#0"></a>
                    <a class="dot-pegi" href="#0"></a>
                    <a class="dot-pegi" href="#0"></a>
                    <a class="dot-pegi" href="#0"></a>
                    <a class="active" href="#0"><i class="fa-regular fa-arrow-left-long"></i></a>
                </div>
            </div>
        </section>
        <!-- Blog area end here -->

        <!-- Started area start here -->
        <section class="started-area">
            <div class="container">
                <div class="started__item bg-image"
                    data-background="{{ asset('assets/front/images/bg/started-bg.png') }}">
                    <div class="section-header-two text-center mb-40">
                        <h2 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">أطلق العنان
                            لإمكانياتك الرياضية مع <br> حلول تحسين محركات البحث الخاصة بالاتحاد!</h2>
                        <p class="para-light-color wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            سنساعد مشاكل العميل على تطوير رياضته بجودة عالية.
                        </p>
                    </div>
                    <div class="btn__group text-center wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <a href="{{ route('pricing') }}" class="btn-two">اشترك معنا<i
                                class="fa-regular fa-arrow-left ml-10"></i></a>
                        <a href="{{ route('about') }}" class="btn-three ms-4">اقرأ المزيد<i
                                class="fa-regular fa-arrow-left ml-10"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Started area end here -->
    </main>

@stop

@section('js')
@endsection
