@extends('front.include.master')

@section('title')
    المسابقات
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
                        <span>الإستراكات</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">الإستراكات
                    </h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">سنساعد
                        مشاكل العميل على تطوير رياضته بجودة عالية.</p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Book demo area start here -->
        <section class="book-demo-area pt-120 pb-120">
            <div class="container">
                <div class="row g-5 justify-content-between">
                    <div class="col-lg-5">
                        <div class="book-demo__left-item">
                            <div class="section-header-two mb-30 pb-30 bor-bottom">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">اشترك معنا اليوم
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">خبرة
                                    <br>
                                    الاتحاد في العمل!
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">لوريم ايبسوم دولار
                                    سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت <br> سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
                            </div>
                            <h6 class="mb-1">01. اكتشف الميزات الرئيسية</h6>
                            <p class="mb-20">احصل على نظرة متعمقة على ميزات الاتحاد القوية.</p>
                            <h6 class="mb-1">02. مظاهرة حية</h6>
                            <p>شاهد الاتحاد أثناء العمل من خلال عرض حي <br> بتوجيه من فريق الخبراء لدينا.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="book-demo__right-item">
                            <div class="contact__form">
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
            </div>
        </section>
        <!-- Book demo area end here -->

        <!-- Brand area start here -->
        <div class="brand-area pt-120">
            <div class="container">
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
    </main>
@stop

@section('js')
@endsection
