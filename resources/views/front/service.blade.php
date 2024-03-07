@extends('front.include.master')

@section('title')
    Service
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
                        <span>Services</span></h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Services</h2>
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

        <!-- About area start here -->
        <section class="about-area paralax__animation pt-120 pb-120 inner-sub-bg">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6">
                        <div class="about__right-item float-start">
                            <div class="section-header">
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Our
                                    <span>Commitment</span> to Exceptional Services
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Embark on a
                                    journey of unparalleled service excellence as we pledge <br> our unwavering
                                    commitment to
                                    delivering exceptional
                                    solutions <br> tailored just for you.</p>
                            </div>
                            <div class="about__author pt-40 bor-top mt-45 wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms">
                                <div class="sinature">
                                    <img src="{{ asset('assets/front/images/icon/signature1.png') }}" alt="signature">
                                    <p class="mt-10">CEO and Founder of Marketi</p>
                                </div>
                                <div class="line"></div>
                                <div class="sinature">
                                    <img src="{{ asset('assets/front/images/icon/signature2.png') }}" alt="signature">
                                    <p class="mt-10">Managing Director of Marketi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-depth="0.03" data-wow-delay="200ms"
                        data-wow-duration="1000ms">
                        <div class="image">
                            <img src="{{ asset('assets/front/images/service/service-image.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Process area start here -->
        <section class="process-area pb-120">
            <div class="container">
                <div class="section-header__wrp mb-90">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">how do we work</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Our work
                            <span>process</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Discover a spectrum of
                        cutting-edge digital marketing services <br> tailored to elevate your
                        online
                        presence, drive
                        engagement.</p>
                </div>
                <div class="custom-row process__wrp">
                    <div class="process__line">
                        <img src="{{ asset('assets/front/images/shape/process-line.png') }}" alt="line">
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon1.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20">Briefing</h3>
                        <p>Harness the power of data with our analytics-driven approach.</p>
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon2.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20">Idea Generating</h3>
                        <p>Harness the power of data with our analytics-driven approach.</p>
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon3.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20">Processing</h3>
                        <p>Harness the power of data with our analytics-driven approach.</p>
                    </div>
                    <div class="process__item">
                        <div class="process__icon">
                            <img src="{{ asset('assets/front/images/icon/process-icon4.png') }}" alt="icon">
                        </div>
                        <h3 class="mt-20">Finishing</h3>
                        <p>Harness the power of data with our analytics-driven approach.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process area end here -->

        <!-- Offer area start here -->
        <section class="offer-area pt-120 pb-120 primary-bg">
            <div class="container">
                <div class="section-header__wrp mb-60">
                    <div class="section-header">
                        <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Our
                            Services</h5>
                        <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><span
                                class="light-underline">Services</span> we’re offering
                        </h2>
                    </div>
                    <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Discover
                        a spectrum of
                        cutting-edge digital marketing
                        services <br>
                        tailored
                        to elevate your online
                        presence, drive
                        engagement.p>
                </div>
                <div class="offer__item">
                    <ul>
                        <li class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="service-details.html">Analytics and Data Insights</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="service-details.html">
                                    <img src="{{ asset('assets/front/images/offer/offer-image1.png') }}"
                                        alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="service-details.html">Content Marketing</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="service-details.html">
                                    <img src="{{ asset('assets/front/images/offer/offer-image2.png') }}"
                                        alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="service-details.html">Search Engine Marketing.</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="service-details.html">
                                    <img src="{{ asset('assets/front/images/offer/offer-image3.png') }}"
                                        alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="service-details.html">Social Media Marketing</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="service-details.html">
                                    <img src="{{ asset('assets/front/images/offer/offer-image4.png') }}"
                                        alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="service-details.html">Pay-Per-Click Advertising</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="service-details.html">
                                    <img src="{{ asset('assets/front/images/offer/offer-image5.png') }}"
                                        alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i>
                                    </div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Offer area end here -->

        <!-- Pricing area start here -->
        <section class="pricing-area pt-120 pb-120">
            <div class="container">
                <div class="section-header-two text-center mb-40">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Pricing Plan</h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Choose Your best plan
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Discover tailored SEO
                        plans
                        to effortlessly boost your online <br> presence and achieve digital
                        success.</p>
                </div>
                <div class="pricing__tab wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <img class="pricing-save" src="{{ asset('assets/front/images/icon/save.png') }}" alt="icon">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" id="tab-item1" data-bs-toggle="tab"
                                data-bs-target="#tab-content1" href="tab-content1.html">Billed Annually</a></li>
                        <li class="nav-item"><a class="nav-link active" id="tab-item2" data-bs-target="#tab-content2"
                                data-bs-toggle="tab" href="tab-content2.html">Billed
                                Monthly</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="tab-content1">
                        <div class="row g-5">
                            <div class="col-xl-4">
                                <div class="pricing__item">
                                    <div class="pricing__head">
                                        <h5 class="pricing-name">Free</h5>
                                        <h2>$0 <span>Per user/year</span></h2>
                                        <p>Great for individuals and small projects.</p>
                                    </div>
                                    <h6>Core Features</h6>
                                    <ul>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Basic on-page optimization
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Monthly performance summary
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Limited keyword analysis
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-two active w-100 text-center mt-30">Choose Package<i
                                            class="fa-regular fa-arrow-right ml-10"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="pricing__item">
                                    <div class="pricing__head">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="pricing-name">Premium</h5>
                                            <img src="{{ asset('assets/front/images/icon/popular.png') }}"
                                                alt="icon">
                                        </div>
                                        <h2>$999 <span>/ Year</span></h2>
                                        <p>Perfect for growing businesses.</p>
                                    </div>
                                    <h6>Core Features</h6>
                                    <ul>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            In-depth keyword research
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Bi-weekly performance reports
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Comprehensive page optimization
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Email support Only
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-two w-100 text-center mt-30">Choose Package<i
                                            class="fa-regular fa-arrow-right ml-10"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="pricing__item">
                                    <div class="pricing__head">
                                        <h5 class="pricing-name">Enterprise</h5>
                                        <h2>$9999 <span>/ Year</span></h2>
                                        <p>Tailored solutions for large enterprises.</p>
                                    </div>
                                    <h6>Core Features</h6>
                                    <ul>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Extensive keyword research
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Customized SEO strategy
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Comprehensive competitor analysis
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Advanced page optimization
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Priority email and phone support
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-two active w-100 text-center mt-30">Choose Package<i
                                            class="fa-regular fa-arrow-right ml-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="tab-content2">
                        <div class="row g-5">
                            <div class="col-xl-4">
                                <div class="pricing__item">
                                    <div class="pricing__head">
                                        <h5 class="pricing-name">Free</h5>
                                        <h2>$0 <span>Per user/month</span></h2>
                                        <p>Great for individuals and small projects.</p>
                                    </div>
                                    <h6>Core Features</h6>
                                    <ul>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Basic on-page optimization
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Monthly performance summary
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Limited keyword analysis
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-two w-100 active text-center mt-30">Choose Package<i
                                            class="fa-regular fa-arrow-right ml-10"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="pricing__item">
                                    <div class="pricing__head">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="pricing-name">Premium</h5>
                                            <img src="{{ asset('assets/front/images/icon/popular.png') }}"
                                                alt="icon">
                                        </div>
                                        <h2>$99 <span>Per user/month</span></h2>
                                        <p>Perfect for growing businesses.</p>
                                    </div>
                                    <h6>Core Features</h6>
                                    <ul>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            In-depth keyword research
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Bi-weekly performance reports
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Comprehensive page optimization
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Email support Only
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-two w-100 text-center mt-30">Choose Package<i
                                            class="fa-regular fa-arrow-right ml-10"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="pricing__item">
                                    <div class="pricing__head">
                                        <h5 class="pricing-name">Enterprise</h5>
                                        <h2>$999 <span>/ Month</span></h2>
                                        <p>Tailored solutions for large enterprises.</p>
                                    </div>
                                    <h6>Core Features</h6>
                                    <ul>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Extensive keyword research
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Customized SEO strategy
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Comprehensive competitor analysis
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Advanced page optimization
                                        </li>
                                        <li>
                                            <svg class="mr-10" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 8.20001L9.35999 12.86C9.21999 13.01 9.02999 13.08 8.82999 13.08C8.63999 13.08 8.44999 13.01 8.29999 12.86L5.97 10.53C5.68 10.24 5.68 9.75997 5.97 9.46997C6.26 9.17997 6.74 9.17997 7.03 9.46997L8.82999 11.27L12.97 7.14001C13.26 6.84001 13.74 6.84001 14.03 7.14001C14.32 7.43001 14.32 7.90001 14.03 8.20001Z"
                                                    fill="#B8CACB" />
                                            </svg>
                                            Priority email and phone support
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-two active w-100 text-center mt-30">Choose Package<i
                                            class="fa-regular fa-arrow-right ml-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing area end here -->

        <!-- FAQ area start here -->
        <section class="faq-two-area pt-120 pb-120 inner-sub-bg">
            <div class="container">
                <div class="section-header-two text-center mb-80">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">FAQ</h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Top question Answered
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Visit out <a
                            href="contact.html" class="primary-color fw-500 text-decoration-underline">Help Center</a>
                        for
                        more informations</p>
                </div>
                <div class="faq-two__wrp">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item wow fadeInDown sub-bg mb-4 border-none" data-wow-delay="00ms"
                            data-wow-duration="1000ms">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can Marketi benefit my business?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>At Marketi, we take pride in delivering tailored SEO services meticulously
                                        crafted to
                                        not only elevate your online
                                        presence but also to substantially increase brand awareness. Our strategic
                                        initiatives are carefully designed to not
                                        just improve search engine rankings but to provide your business with a
                                        distinctive
                                        competitive edge within your
                                        industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInDown sub-bg mb-4 border-none" data-wow-delay="200ms"
                            data-wow-duration="1000ms">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Is Marketi suitable for all business sizes?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>At Marketi, we take pride in delivering tailored SEO services meticulously
                                        crafted to
                                        not only elevate your online
                                        presence but also to substantially increase brand awareness. Our strategic
                                        initiatives are carefully designed to not
                                        just improve search engine rankings but to provide your business with a
                                        distinctive
                                        competitive edge within your
                                        industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInDown sub-bg mb-4 border-none" data-wow-delay="400ms"
                            data-wow-duration="1000ms">
                            <h2 class="accordion-header" id="headingthree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                    Is Marketi only focused on SEO, or do you offer additional services?
                                </button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>At Marketi, we take pride in delivering tailored SEO services meticulously
                                        crafted to
                                        not only elevate your online
                                        presence but also to substantially increase brand awareness. Our strategic
                                        initiatives are carefully designed to not
                                        just improve search engine rankings but to provide your business with a
                                        distinctive
                                        competitive edge within your
                                        industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInDown sub-bg border-none" data-wow-delay="600ms"
                            data-wow-duration="1000ms">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I track the progress of my SEO efforts on Marketi?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>At Marketi, we take pride in delivering tailored SEO services meticulously
                                        crafted to
                                        not only elevate your online
                                        presence but also to substantially increase brand awareness. Our strategic
                                        initiatives are carefully designed to not
                                        just improve search engine rankings but to provide your business with a
                                        distinctive
                                        competitive edge within your
                                        industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ area end here -->

        <!-- Talk area start here -->
        <section class="talk-area pt-120 pb-120 primary-two-bg bg-image"
            data-background="{{ asset('assets/front/images/bg/talk-bg.png') }}">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="section-header">
                            <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Get
                                started with us</h5>
                            <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Start
                                Conversation to <span class="light-underline">Skyrocket</span>
                                Your Business</h2>
                            <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                                Schedule a free consultation with our experts. Uncover
                                opportunities <br>
                                and take the first
                                step towards digital success</p>
                            <div class="d-flex align-items-center gap-4 mt-40 wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms">
                                <a href="#0" class="btn-one">Let’s Talk<i
                                        class="fa-regular fa-circle-arrow-right ml-10"></i></a>
                                <span class="para-light-color">Or</span>
                                <a href="#0" class="explore-btn-light"><span>Book A Demo</span> <i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="contact__form">
                            <h3 class="text-capitalize mb-30 text-center">get a free consultation with marketing our
                                Expert</h3>
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
        </section>
        <!-- Talk area end here -->
    </main>
@stop

@section('js')
@endsection