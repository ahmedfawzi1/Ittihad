@extends('front.include.master')

@section('title')
    الاتحاد السعودي للرياضات الذهنية
@endsection

@section('style')
@endsection

@section('header')
    @include('front.include.header0')
@stop

@section('content')
    <main>
        <!-- Banner area start here -->
        <section class="banner-area bg-image paralax__animation"
            data-background="{{ asset('assets/front/images/banner/banner-bg.png') }}">
            <div class="banner__hero">
                <img class="sway__animation" src="{{ asset('assets/front/images/banner/hero-image.png') }}" alt="image">
            </div>
            <div class="banner__hero-info">
                <img data-depth="0.03" src="{{ asset('assets/front/images/banner/banner-info.png') }}" alt="image">
            </div>
            <div class="container">
                <div class="banner__content">
                    <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">الاتحاد <img
                            src="{{ asset('assets/front/images/banner/banner-tittle-star.png') }}" alt="image"> <br>
                        السعودي للرياضات <span>الذهنية</span></h1>
                    <p class="mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">تحت مظلة اللجنة
                        الأولمبية السعودية يهتم بنشر هذه الرياضات في المجتمع لما لها من أهمية في تنمية المهارات الذهنية
                        ولتطوير
                        وصقل المواهب.</p>
                    <div class="d-flex align-items-center gap-4 mt-40">
                        <a href="{{ route('pricing') }}" class="btn-one wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1000ms">معرفة اسعار الاشتراكات<i
                                class="fa-regular fa-circle-arrow-left ml-10"></i></a>
                        <a href="{{ route('about') }}" class="explore-btn wow fadeInDown" data-wow-delay="400ms"
                            data-wow-duration="1000ms"><span>من نحن </span> <i class="fa-regular fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Brand area start here -->
        <div class="brand-area pt-70">
            <div class="container">
                <h5 class="brand__title mb-40">شركاء العمل</h5>
                <div class="swiper brand__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/front/images/brand/brand-image1.png') }}" alt="image">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/front/images/brand/brand-image2.png') }}" alt="image">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/front/images/brand/brand-image3.png') }}" alt="image">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/front/images/brand/brand-image4.png') }}" alt="image">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/front/images/brand/brand-image5.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end here -->

        <!-- About area start here -->
        <section class="about-area pt-140 pb-140">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="image about__image">
                            <img src="{{ asset('assets/front/images/about/about-image.png') }}" alt="image">
                            <div class="about__shape1">
                                <img src="{{ asset('assets/front/images/shape/about-shape1.png') }}" alt="shape">
                            </div>
                            <div class="about__shape2">
                                <img src="{{ asset('assets/front/images/shape/about-shape2.png') }}" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about__right-item">
                            <div class="section-header">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">من نحن
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">لماذا <span
                                        class="primary-color">يجب</span> أن نكون خيارك الأفضل</h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                                    تحت مظلة اللجنة الأولمبية السعودية يهتم بنشر هذه الرياضات في المجتمع لما لها من أهمية في
                                    تنمية المهارات الذهنية ولتطوير
                                    وصقل المواهب. ولتحقيق هذه الأهداف سيقوم الإتحاد ببذل الجهد لتحقيق البيئة المناسبة لإجادة
                                    وكذلك الاستمتاع بممارسة هذه الرياضات وتشمل ألعاب ورقية مثل اليريدج البلوت الكونكان
                                    والتركس وألعاب لوحية مثل جو سودوكو . ت س ج . الدامه وكذلك ام ت ج .
                                    <a href="{{ route('about') }}" class="secondary-color fw-700 primary-hover">قراءة
                                        المزيد</a>
                                </p>
                            </div>
                            <div class="about__counter mt-40">
                                <div class="coun-item wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">
                                    <h3><span class="count">12</span>+</h3>
                                    <p>سنة من الخبرة</p>
                                </div>
                                <div class="coun-item wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                                    <h3><span class="count">10</span>K</h3>
                                    <p>مشتركين</p>
                                </div>
                                <div class="coun-item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                                    <h3><span class="count">8</span></h3>
                                    <p>العاب ذهنية</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Service area start here -->
        <section class="service-area pb-140">
            <div class="container">
                <div class="custom-row service__wrp">
                    <div class="service__item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <div class="service__icon mb-25">
                            <img src="{{ asset('assets/front/images/icon/service-icon1.png') }}" alt="icon">
                        </div>
                        <h3>خدمة 1</h3>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . </p>
                        <a href="{{ route('serviceDetails') }}" class="explore-btn mt-15"><span>استكشاف المزيد</span> <i
                                class="fa-regular fa-arrow-left"></i></a>
                    </div>
                    <div class="service__item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="service__icon mb-25">
                            <img src="{{ asset('assets/front/images/icon/service-icon2.png') }}" alt="icon">
                        </div>
                        <h3>خدمة 2</h3>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . </p>
                        <a href="{{ route('serviceDetails') }}" class="explore-btn mt-15"><span>استكشاف المزيد</span> <i
                                class="fa-regular fa-arrow-left"></i></a>
                    </div>
                    <div class="service__item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="service__icon mb-25">
                            <img src="{{ asset('assets/front/images/icon/service-icon3.png') }}" alt="icon">
                        </div>
                        <h3>خدمة 3</h3>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . </p>
                        <a href="{{ route('serviceDetails') }}" class="explore-btn mt-15"><span>استكشاف المزيد</span> <i
                                class="fa-regular fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->

        <!-- Offer area start here -->
        <section class="offer-area pt-140 pb-140 primary-bg">
            <div class="container">
                <div class="section-header__wrp mb-60">
                    <div class="section-header">
                        <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">خدماتنا</h5>
                        <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><span
                                class="light-underline"> الخدمات</span> التي نقدمها</h2>
                    </div>
                    <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا <br>
                        يوت انيم أد مينيم فينايم,كيواس نوستريد
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . </p>
                </div>
                <div class="offer__item">
                    <ul>
                        <li class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">خدمة 1</a>
                            <i class="fa-light offer-icon fa-arrow-left"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image1.png') }}" alt="image">
                                    <div class="btn-one">اختر الخدمة<i class="fa-regular fa-circle-arrow-left ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                دولاريمكيو لايودانتيوم .</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">خدمة 2</a>
                            <i class="fa-light offer-icon fa-arrow-left"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image2.png') }}" alt="image">
                                    <div class="btn-one">اختر الخدمة<i class="fa-regular fa-circle-arrow-left ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                دولاريمكيو لايودانتيوم .</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">خدمة 3</a>
                            <i class="fa-light offer-icon fa-arrow-left"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image3.png') }}" alt="image">
                                    <div class="btn-one">اختر الخدمة<i class="fa-regular fa-circle-arrow-left ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                دولاريمكيو لايودانتيوم .</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">خدمة 4</a>
                            <i class="fa-light offer-icon fa-arrow-left"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image4.png') }}" alt="image">
                                    <div class="btn-one">اختر الخدمة<i class="fa-regular fa-circle-arrow-left ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                دولاريمكيو لايودانتيوم .</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">خدمة 5</a>
                            <i class="fa-light offer-icon fa-arrow-left"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image5.png') }}" alt="image">
                                    <div class="btn-one">اختر الخدمة<i class="fa-regular fa-circle-arrow-left ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                دولاريمكيو لايودانتيوم .</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Offer area end here -->

        <!-- Process area start here -->
        <section class="process-area pt-140 pb-140">
            <div class="container">
                <div class="section-header__wrp mb-90">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">كيف نعمل</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">عملنا
                            <span>عملية</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">لوريم ايبسوم دولار سيت أميت
                        ,كونسيكتيتور أدايبا يسكينج أليايت <br> أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت
                        ان كيولبا
                        كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.</p>
                </div>
                <div class="custom-row process__wrp">
                    <div class="process__line">
                        <img src="{{ asset('assets/front/images/shape/process-line.png') }}" alt="line">
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon1.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20">توجيهات</h3>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت.</p>
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon2.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20">توليد الفكرة</h3>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت.</p>
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon3.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20">معالجة</h3>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت.</p>
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon4.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20"> الإنهاء</h3>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process area end here -->

        <!-- Team area start here -->
        <section class="team-area pb-140">
            <div class="container">
                <div class="section-header mb-90 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">فريق استثنائي</h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">اجتمع مع
                        <span>فريقنا</span>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">لوريم ايبسوم دولار سيت أميت
                        ,كونسيكتيتور أدايبا يسكينج أليايت <br> سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
                </div>
                <div class="swiper team__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team__item">
                                <div class="team__image image">
                                    <img src="{{ asset('assets/front/images/team/team-image1.png') }}" alt="image">
                                    <div class="team-info">
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}"
                                        class="primary-hover fw-700">فريق العمل 1</a></h5>
                                <span>وظيفة 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team__item">
                                <div class="team__image image">
                                    <img src="{{ asset('assets/front/images/team/team-image2.png') }}" alt="image">
                                    <div class="team-info">
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}"
                                        class="primary-hover fw-700">فريق العمل 2</a></h5>
                                <span>وظيفة 2</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team__item">
                                <div class="team__image image">
                                    <img src="{{ asset('assets/front/images/team/team-image3.png') }}" alt="image">
                                    <div class="team-info">
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}"
                                        class="primary-hover fw-700">فريق العمل 3</a></h5>
                                <span>وظيفة 3</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team__item">
                                <div class="team__image image">
                                    <img src="{{ asset('assets/front/images/team/team-image4.png') }}" alt="image">
                                    <div class="team-info">
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}"
                                        class="primary-hover fw-700">فريق العمل 4</a></h5>
                                <span>وظيفة 4</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__info mt-5">
                        <button class="team__arry-prev"><i class="fa-regular fa-arrow-right-long"></i></button>
                        <div class="dot team__dot"></div>
                        <button class="team__arry-next active"><i class="fa-regular fa-arrow-left-long"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team area end here -->

        <!-- Testimonial area start here -->
        <section class="testimonial-area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="testimonial__left-item">
                            <div class="section-header">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">شهادة المشتركين
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">كلمات
                                    <span>المشتركين</span> <br> عن الاتحاد
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">"سيت
                                    يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                    دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري فيرأتاتيس ايت
                                    كياسي أرشيتيكتو بيتاي فيتاي ديكاتا سيونت أكسبليكابو."</p>
                            </div>
                            <a href="{{ route('pricing') }}" class="btn-one mt-30 wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1000ms">اشترك الآن<i
                                    class="fa-regular fa-circle-arrow-left ml-10"></i></a>
                            <div class="testimonial-user d-flex gap-2 flex-wrap pt-30 bor-top mt-30 wow fadeInDown"
                                data-wow-delay="300ms" data-wow-duration="1000ms">
                                <img src="{{ asset('assets/front/images/testimonial/user.png') }}" alt="">
                                <p>عملاء راضون</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="swiper testimonial__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__right-item">
                                        <p>"سيت
                                            يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                            دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري
                                            فيرأتاتيس ايت
                                            كياسي أرشيتيكتو بيتاي فيتاي ديكاتا سيونت أكسبليكابو."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image1.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>مشترك 1</h4>
                                                    <span>رياضة 1</span>
                                                </div>
                                            </div>
                                            <div class="star d-flex gap-2">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__right-item">
                                        <p>"سيت
                                            يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                            دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري
                                            فيرأتاتيس ايت
                                            كياسي أرشيتيكتو بيتاي فيتاي ديكاتا سيونت أكسبليكابو."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image2.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>مشترك 2</h4>
                                                    <span>رياضة 2</span>
                                                </div>
                                            </div>
                                            <div class="star d-flex gap-2">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__right-item">
                                        <p>"سيت
                                            يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                            دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري
                                            فيرأتاتيس ايت
                                            كياسي أرشيتيكتو بيتاي فيتاي ديكاتا سيونت أكسبليكابو."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image3.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>مشترك 3</h4>
                                                    <span>رياضة 3</span>
                                                </div>
                                            </div>
                                            <div class="star d-flex gap-2">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__right-item">
                                        <p>"سيت
                                            يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                                            دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري
                                            فيرأتاتيس ايت
                                            كياسي أرشيتيكتو بيتاي فيتاي ديكاتا سيونت أكسبليكابو."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image4.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>مشترك 4</h4>
                                                    <span>رياضة 4</span>
                                                </div>
                                            </div>
                                            <div class="star d-flex gap-2">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper__info mt-4">
                            <button class="testimonial__arry-prev"><i class="fa-regular fa-arrow-right-long"></i></button>
                            <div class="dot testimonial__dot"></div>
                            <button class="testimonial__arry-next active"><i
                                    class="fa-regular fa-arrow-left-long"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end here -->

        <!-- Faq area start here -->
        {{-- <section class="faq-area pt-140 pb-140">
            <div class="container">
                <div class="section-header__wrp mb-90">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Frequently a&q</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Find
                            <span>answer</span> you needs
                        </h2>
                    </div>
                    <ul class="faq__tab nav nav-tabs border-0 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="1000ms">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-item1" data-bs-toggle="tab"
                                data-bs-target="#tab-content1" href="tab-content1.html">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-item2" data-bs-toggle="tab" data-bs-target="#tab-content2"
                                href="tab-content2.html">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-item3" data-bs-toggle="tab" data-bs-target="#tab-content3"
                                href="tab-content3.html">Payment</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-content1">
                        <div class="swiper faq__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">What sets Marketi apart from other digital marketing
                                            agencies?
                                        </h3>
                                        <p>We prioritize a personalized approach, combining strategic insights with
                                            creativity.
                                            Our
                                            dedicated team is committed to
                                            understanding your business and delivering customized solutions that drive
                                            tangible
                                            results.</p>
                                    </div>
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">What services does Marketi offer?</h3>
                                        <p>We prioritize a personalized approach, combining strategic insights with
                                            creativity.
                                            Our
                                            dedicated team is committed to
                                            understanding your business and delivering customized solutions that drive
                                            tangible
                                            results.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">How long does it take to see results from digital marketing
                                            efforts?
                                        </h3>
                                        <p>The timeline for seeing results varies based on factors like your industry,
                                            goals,
                                            and chosen strategies. While some
                                            changes can be immediate, significant improvements typically become more
                                            noticeable.
                                        </p>
                                    </div>
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">How can digital marketing benefit my business?</h3>
                                        <p>Digital marketing enhance your online presence, increase brand visibility,
                                            drives
                                            targeted traffic, . It's a
                                            cost-effective way to reach potential customers and build long-term
                                            relationships.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__slider-info">
                                <span class="line-text">General Questions</span>
                                <div class="line"></div>
                                <div class="swiper__info m-0">
                                    <button class="faq__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                    <button class="faq__arry-next active"><i
                                            class="fa-regular fa-arrow-left-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-content2">
                        <div class="swiper faq__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">What sets Marketi apart from other digital marketing
                                            agencies?
                                        </h3>
                                        <p>We prioritize a personalized approach, combining strategic insights with
                                            creativity.
                                            Our
                                            dedicated team is committed to
                                            understanding your business and delivering customized solutions that drive
                                            tangible
                                            results.</p>
                                    </div>
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">What services does Marketi offer?</h3>
                                        <p>We prioritize a personalized approach, combining strategic insights with
                                            creativity.
                                            Our
                                            dedicated team is committed to
                                            understanding your business and delivering customized solutions that drive
                                            tangible
                                            results.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">How long does it take to see results from digital marketing
                                            efforts?
                                        </h3>
                                        <p>The timeline for seeing results varies based on factors like your industry,
                                            goals,
                                            and chosen strategies. While some
                                            changes can be immediate, significant improvements typically become more
                                            noticeable.
                                        </p>
                                    </div>
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">How can digital marketing benefit my business?</h3>
                                        <p>Digital marketing enhance your online presence, increase brand visibility,
                                            drives
                                            targeted traffic, . It's a
                                            cost-effective way to reach potential customers and build long-term
                                            relationships.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__slider-info">
                                <span class="line-text">General Questions</span>
                                <div class="line"></div>
                                <div class="swiper__info m-0">
                                    <button class="faq__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                    <button class="faq__arry-next active"><i
                                            class="fa-regular fa-arrow-left-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-content3">
                        <div class="swiper faq__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">What sets Marketi apart from other digital marketing
                                            agencies?
                                        </h3>
                                        <p>We prioritize a personalized approach, combining strategic insights with
                                            creativity.
                                            Our
                                            dedicated team is committed to
                                            understanding your business and delivering customized solutions that drive
                                            tangible
                                            results.</p>
                                    </div>
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">What services does Marketi offer?</h3>
                                        <p>We prioritize a personalized approach, combining strategic insights with
                                            creativity.
                                            Our
                                            dedicated team is committed to
                                            understanding your business and delivering customized solutions that drive
                                            tangible
                                            results.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">How long does it take to see results from digital marketing
                                            efforts?
                                        </h3>
                                        <p>The timeline for seeing results varies based on factors like your industry,
                                            goals,
                                            and chosen strategies. While some
                                            changes can be immediate, significant improvements typically become more
                                            noticeable.
                                        </p>
                                    </div>
                                    <div class="faq__item mb-40">
                                        <h3 class="mb-20">How can digital marketing benefit my business?</h3>
                                        <p>Digital marketing enhance your online presence, increase brand visibility,
                                            drives
                                            targeted traffic, . It's a
                                            cost-effective way to reach potential customers and build long-term
                                            relationships.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__slider-info">
                                <span class="line-text">General Questions</span>
                                <div class="line"></div>
                                <div class="swiper__info m-0">
                                    <button class="faq__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                    <button class="faq__arry-next active"><i
                                            class="fa-regular fa-arrow-left-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Faq area end here -->

        <!-- Talk area start here -->
        <section class="talk-area pt-140 pb-140 primary-bg bg-image"
            data-background="{{ asset('assets/front/images/bg/talk-bg.png') }}">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="section-header">
                            <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">ابدأ
                                معنا</h5>
                            <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                                ابدأ المحادثة مع <span class="light-underline">خدمة عملائنا</span></h2>
                            <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                                لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت <br>
                                سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
                            <div class="d-flex align-items-center gap-4 mt-40 wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms">
                                <a href="{{ route('contact') }}" class="btn-one">لنتواصل<i
                                        class="fa-regular fa-circle-arrow-left ml-10"></i></a>
                                <span class="para-light-color">أو</span>
                                <a href="{{ route('book') }}" class="explore-btn-light"><span>احجز معنا</span> <i
                                        class="fa-regular fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="contact__form">
                            <h3 class="text-capitalize mb-30 text-center">احصل على استشارة مجانية مع خبرائنا</h3>
                            <form action="#">
                                <input type="text" placeholder="اسم الرياضة">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <input type="text" placeholder="الاسم الاول*">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" placeholder="الاسم الاخير*">
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <input type="text" placeholder="البريد الإلكتروني*">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" placeholder="رقم الهاتف*">
                                    </div>
                                </div>
                                <textarea name="#" id="#" placeholder="الرسالة*"></textarea>
                                <button class="btn-one transition">تأكيد<i
                                        class="fa-regular fa-circle-arrow-left ml-10"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Talk area end here -->
    </main>
@endsection

@section('js')
@endsection
