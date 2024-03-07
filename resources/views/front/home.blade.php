@extends('front.include.master')

@section('title')
    ITTIHAD
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
                    <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">The Digital <img
                            src="{{ asset('assets/front/images/banner/banner-tittle-star.png') }}" alt="image"> <br>
                        Marketing Agency For <span>Higher ROI</span></h1>
                    <p class="mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Choose success
                        with
                        our digital marketing agency, dedicated to delivering higher
                        ROI that propels
                        your business to new
                        heights.</p>
                    <div class="d-flex align-items-center gap-4 mt-40">
                        <a href="{{ route('pricing') }}" class="btn-one wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1000ms">Try it Now<i class="fa-regular fa-circle-arrow-right ml-10"></i></a>
                        <a href="{{ route('about') }}" class="explore-btn wow fadeInDown" data-wow-delay="400ms"
                            data-wow-duration="1000ms"><span>Explore More</span> <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Brand area start here -->
        <div class="brand-area pt-70">
            <div class="container">
                <h5 class="brand__title mb-40">Used by World Leading Companies</h5>
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
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">About us
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Why <span
                                        class="primary-color">Marketi</span> Should Be Your Top Choice</h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Choose
                                    Marketi
                                    for unparalleled digital success – where expertise, <br> innovation,
                                    and
                                    strategic brilliance converge to
                                    elevate your <br> business to new heights. <a href="{{ route('about') }}"
                                        class="secondary-color fw-700 primary-hover">Read
                                        More</a></p>
                            </div>
                            <div class="about__counter mt-40">
                                <div class="coun-item wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">
                                    <h3><span class="count">12</span>+</h3>
                                    <p>Years of experience</p>
                                </div>
                                <div class="coun-item wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                                    <h3><span class="count">10</span>K</h3>
                                    <p>Completed Projects</p>
                                </div>
                                <div class="coun-item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                                    <h3><span class="count">5</span>K</h3>
                                    <p>Trusted Customers</p>
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
                        <h3>Data-Driven Decision</h3>
                        <p>Harness the power of data with our analytics-driven approach. We analyze, interpret,
                            and
                            apply insights to refine and
                            optimize your campaigns for maximum impact.</p>
                        <a href="{{ route('serviceDetails') }}" class="explore-btn mt-15"><span>Explore More</span> <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <div class="service__item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="service__icon mb-25">
                            <img src="{{ asset('assets/front/images/icon/service-icon2.png') }}" alt="icon">
                        </div>
                        <h3>Multi-Channel Expertise</h3>
                        <p>Our team is well-versed in diverse digital channels, from social media and to SEO and paid
                            advertising, providing you
                            with a comprehensive online presence.</p>
                        <a href="{{ route('serviceDetails') }}" class="explore-btn mt-15"><span>Explore More</span> <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <div class="service__item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="service__icon mb-25">
                            <img src="{{ asset('assets/front/images/icon/service-icon3.png') }}" alt="icon">
                        </div>
                        <h3>Social Media Mastery</h3>
                        <p>Leverage the full potential of social media. We develop and implement social media strategies
                            to enhance brand
                            visibility, and drive meaningful interactions.</p>
                        <a href="{{ route('serviceDetails') }}" class="explore-btn mt-15"><span>Explore More</span> <i
                                class="fa-regular fa-arrow-right"></i></a>
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
                        <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Our
                            Services</h5>
                        <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><span
                                class="light-underline">Services</span> we’re offering
                        </h2>
                    </div>
                    <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        Discover
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
                            <a class="offer-title" href="{{ route('serviceDetails') }}">Analytics and Data Insights</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image1.png') }}" alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i></div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">Content Marketing</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image2.png') }}" alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i></div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">Search Engine Marketing.</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image3.png') }}" alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i></div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">Social Media Marketing</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image4.png') }}" alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i></div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <a class="offer-title" href="{{ route('serviceDetails') }}">Pay-Per-Click Advertising</a>
                            <i class="fa-light offer-icon fa-arrow-right"></i>
                            <div class="offer__image-wrp">
                                <a class="offer__image d-block image" href="{{ route('serviceDetails') }}">
                                    <img src="{{ asset('assets/front/images/offer/offer-image5.png') }}" alt="image">
                                    <div class="btn-one">Choose Service<i
                                            class="fa-regular fa-circle-arrow-right ml-10"></i></div>
                                </a>
                            </div>
                            <p>Elevate your brand with impactful social media strategies.</p>
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

        <!-- Team area start here -->
        <section class="team-area pb-140">
            <div class="container">
                <div class="section-header mb-90 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Exceptional Team</h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Meet with our
                        <span>team</span>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Discover the driving
                        force
                        behind Marketi. Working collaboratively to deliver <br> innovative
                        digital
                        marketing solutions
                        that elevate your brand.</p>
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
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Kawser
                                        Ahmed</a></h5>
                                <span>Chief Executive Officer</span>
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
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Marcus
                                        Haven</a></h5>
                                <span>Creative Lead</span>
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
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Mises
                                        Falguni</a></h5>
                                <span>Digital Strategist</span>
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
                                <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Olivia
                                        Riday</a></h5>
                                <span>Client Relations Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__info mt-5">
                        <button class="team__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                        <div class="dot team__dot"></div>
                        <button class="team__arry-next active"><i class="fa-regular fa-arrow-right-long"></i></button>
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
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Clients
                                    Testimonial</h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Client’s
                                    <span>speeches</span> <br> about marketi
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Our clients
                                    share their experiences with Marketi, expressing how our digital
                                    marketing
                                    expertise has not only met but
                                    exceeded their expectations, fostering success and growth for their businesses.</p>
                            </div>
                            <a href="{{ route('pricing') }}" class="btn-one mt-30 wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1000ms">Try it Now<i
                                    class="fa-regular fa-circle-arrow-right ml-10"></i></a>
                            <div class="testimonial-user d-flex gap-2 flex-wrap pt-30 bor-top mt-30 wow fadeInDown"
                                data-wow-delay="300ms" data-wow-duration="1000ms">
                                <img src="{{ asset('assets/front/images/testimonial/user.png') }}" alt="">
                                <p>Satisfied clients of Marketi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="swiper testimonial__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__right-item">
                                        <p>"Working with Marketi has been a right and good investment for our business.
                                            And Their
                                            targeted campaigns and
                                            data-driven approach have not only increased our ROI but also provide
                                            valuable insights
                                            for future growth."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image1.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>Kawser Ahmed</h4>
                                                    <span>Chief Executive Officer</span>
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
                                        <p>"Working with Marketi has been a right and good investment for our business.
                                            And Their
                                            targeted campaigns and
                                            data-driven approach have not only increased our ROI but also provide
                                            valuable insights
                                            for future growth."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image2.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>Suborna Tarchera</h4>
                                                    <span>Web Designer</span>
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
                                        <p>"Working with Marketi has been a right and good investment for our business.
                                            And Their
                                            targeted campaigns and
                                            data-driven approach have not only increased our ROI but also provide
                                            valuable insights
                                            for future growth."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image3.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>Alex Pranto</h4>
                                                    <span>Software Engineer</span>
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
                                        <p>"Working with Marketi has been a right and good investment for our business.
                                            And Their
                                            targeted campaigns and
                                            data-driven approach have not only increased our ROI but also provide
                                            valuable insights
                                            for future growth."</p>
                                        <div class="testimonial-info">
                                            <div class="d-flex align-items-center gap-4">
                                                <img src="{{ asset('assets/front/images/testimonial/testimonial-image4.png') }}"
                                                    alt="image">
                                                <div class="testimonial-admin">
                                                    <h4>Mahmod Arif</h4>
                                                    <span>Product Manager</span>
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
                            <button class="testimonial__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                            <div class="dot testimonial__dot"></div>
                            <button class="testimonial__arry-next active"><i
                                    class="fa-regular fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end here -->

        <!-- Faq area start here -->
        <section class="faq-area pt-140 pb-140">
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
                                            class="fa-regular fa-arrow-right-long"></i></button>
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
                                            class="fa-regular fa-arrow-right-long"></i></button>
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
                                            class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq area end here -->

        <!-- Talk area start here -->
        <section class="talk-area pt-140 pb-140 primary-bg bg-image"
            data-background="{{ asset('assets/front/images/bg/talk-bg.png') }}">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="section-header">
                            <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Get
                                started with us</h5>
                            <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                                Start
                                Conversation to <span class="light-underline">Skyrocket</span>
                                Your Business</h2>
                            <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                                Schedule a free consultation with our experts. Uncover
                                opportunities <br>
                                and take the first
                                step towards digital success</p>
                            <div class="d-flex align-items-center gap-4 mt-40 wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms">
                                <a href="{{ route('contact') }}" class="btn-one">Let’s Talk<i
                                        class="fa-regular fa-circle-arrow-right ml-10"></i></a>
                                <span class="para-light-color">Or</span>
                                <a href="{{ route('book') }}" class="explore-btn-light"><span>Book A Demo</span> <i
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
@endsection

@section('js')
@endsection
