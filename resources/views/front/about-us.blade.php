@extends('front.include.master')

@section('title')
   من نحن
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
            data-background="{{ asset('assets/front/images/bg/banner-inner.png') }}">
            <div class="container">
                <div class="banner-inner__content">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms"><a href="/">الرئيسية</a> /
                        <span>من نحن </span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">من نحن</h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">سنساعد
                        مشاكل العميل على تطوير رياضته بجودة عالية.</p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- About area start here -->
        <section class="about-two-area pt-120">
            <div class="container">
                <div class="section-header-two mb-40">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">من نحن</h5>
                    <p class="about-two__text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">تحت مظلة
                        اللجنة
                        الأولمبية السعودية يهتم بنشر هذه الرياضات في المجتمع لما لها من أهمية في تنمية المهارات
                        الذهنية
                        ولتطوير
                        وصقل المواهب.</p>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <div class="about-two__item">
                            <h3 class="mb-10">أهدافنا</h3>
                            <p>
                            <ol type="1">
                                <li> النشر والتعريف بالألعاب الذهنية وأهميتها في تعزيز الثقة بالنفس، وتنمية روح التعاون
                                    والعمل الجماعي، التركيز وتحسين الذاكرة.
                                </li>
                                <li>نشر ثقافة الألعاب الذهنية في المجتمع.</li>
                                <li>وضع الأسس والقوانين لتنظيم ممارسة هذه الألعاب.</li>
                                <li>إيجاد البيئة المناسبة لتعليم وتدريب المهتمين بالرياضات الذهنية.</li>
                                <li>تنظيم المسابقات المحلية والعالمية والإشراف عليها.</li>
                                <li>الإشراف على الأندية الخاصة.</li>
                                <li>اختيار الكوادر الوطنية وتأهيلهم للتدريب.</li>
                                <li>الإشراف على الأندية وتهيئة المنتخبات من كبار السن والشباب من الجنسين وتدريبهم لتمثيل
                                    المملكة في المسابقات العالمية.</li>
                            </ol>
                            </p>
                            <a href="{{ route('book') }}" class="explore-btn mt-20"><span>اشترك معنا</span> <i
                                    class="fa-regular fa-arrow-left"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="about-two__item">
                            <h3 class="mb-10">قصتنا</h3>
                            <p>تأسس الاتحاد على مبدأ مفاده أن كل رياضة، بغض النظر عن حجمها أو مجالها، تستحق نهجًا مخصصًا
                                لتحقيق النجاح.</p>
                            <a href="{{ route('book') }}" class="explore-btn mt-20"><span>اشترك معنا</span> <i
                                    class="fa-regular fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Brand area start here -->
        <div class="brand-area pb-120">
            <div class="container">
                <div class="swiper brand__slider pt-60 mt-60 bor-top">
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
        <section class="service-area pb-120 inner-sub-bg">
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

        <!-- Team area start here -->
        <section class="team-area pt-120 pb-120">
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
        <section class="testimonial-area pb-120">
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

        <!-- Talk area start here -->
        <section class="talk-area pt-120 pb-120 primary-two-bg bg-image"
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
@stop

@section('js')
@endsection
