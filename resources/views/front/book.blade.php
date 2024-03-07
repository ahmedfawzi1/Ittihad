@extends('front.include.master')

@section('title')
    Book
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
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms"><a href="/">Home</a> /
                        <span>Book a Demo</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Book a Demo
                    </h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">We
                        will help a client's problems to develop the
                        products they have
                        with
                        high quality Change the
                        appearance.</p>
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
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Book a Demo
                                    Today
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Experience
                                    <br>
                                    Marketi in Action!
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Ready to
                                    revolutionize your digital marketing efforts? <br> Schedule a personalized
                                    demo
                                    of
                                    Marketi.</p>
                            </div>
                            <h6 class="mb-1">01. Explore Key Features</h6>
                            <p class="mb-20">Get an in-depth look at Marketi's powerful features.</p>
                            <h6 class="mb-1">03. Live Demonstration</h6>
                            <p>See Marketi in action with a live demonstration <br> guided by our expert team.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="book-demo__right-item">
                            <div class="contact__form">
                                <form action="#">
                                    <input type="text" placeholder="Company Name">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <input type="text" placeholder="First Name*">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" placeholder="Last Name*">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <input type="text" placeholder="Email Address*">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" placeholder="Phone Number*">
                                        </div>
                                    </div>
                                    <textarea name="#" id="#" placeholder="Message"></textarea>
                                    <button class="btn-one transition">Submit<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i></button>
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
