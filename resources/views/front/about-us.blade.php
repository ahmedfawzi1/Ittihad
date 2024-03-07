@extends('front.include.master')

@section('title')
About Us
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
                    <span>About us</span>
                </h5>
                <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">About Us</h2>
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
    <section class="about-two-area pt-120">
        <div class="container">
            <div class="section-header-two mb-40">
                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">About us</h5>
                <p class="about-two__text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">At
                    Marketi, we understand the critical role that search engine
                    optimization plays in driving
                    online success for
                    businesses of all sizes.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <div class="about-two__item">
                        <h3 class="mb-10">Our Mission</h3>
                        <p>Our goal is to boost your online visibility and engagement, drive organic <br> traffic,
                            and
                            ultimately, maximize your digital
                            success.</p>
                        <a href="#0" class="explore-btn mt-20"><span>Learn More</span> <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <div class="about-two__item">
                        <h3 class="mb-10">Our Story</h3>
                        <p>Marketi was founded on the principle that every business, regardless of size or industry,
                            deserves a tailored approach
                            to marketing.</p>
                        <a href="about.html" class="explore-btn mt-20"><span>Learn More</span> <i
                                class="fa-regular fa-arrow-right"></i></a>
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
    <section class="about-area paralax__animation pt-120 pb-120 inner-sub-bg">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-xl-6 wow fadeInRight" data-depth="0.03" data-wow-delay="200ms"
                    data-wow-duration="1000ms">
                    <div class="image">
                        <img src="{{ asset('assets/front/images/about/about-image.png') }}" alt="image">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about__right-item">
                        <div class="section-header">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">About us</h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Why <span
                                    class="primary-color">Marketi</span> Should Be Your Top Choice</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Choose Marketi
                                for unparalleled digital success – where expertise, <br> innovation,
                                and
                                strategic brilliance converge to
                                elevate your <br> business to new heights. <a href="#0"
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
    <section class="service-area pb-120 inner-sub-bg">
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
                    <a href="service.html" class="explore-btn mt-15"><span>Explore More</span> <i
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
                    <a href="service.html" class="explore-btn mt-15"><span>Explore More</span> <i
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
                    <a href="service.html" class="explore-btn mt-15"><span>Explore More</span> <i
                            class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end here -->

    <!-- Team area start here -->
    <section class="team-area pt-120 pb-120">
        <div class="container">
            <div class="section-header mb-90 text-center">
                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Exceptional Team</h5>
                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Meet with our
                    <span>team</span>
                </h2>
                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Discover the driving force
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
                            <h5 class="mt-15"><a href="team-details.html" class="primary-hover fw-700">Kawser
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
                            <h5 class="mt-15"><a href="team-details.html" class="primary-hover fw-700">Marcus
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
                            <h5 class="mt-15"><a href="team-details.html" class="primary-hover fw-700">Mises
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
                            <h5 class="mt-15"><a href="team-details.html" class="primary-hover fw-700">Olivia
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
    <section class="testimonial-area pb-120">
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
                        <a href="pricing.html" class="btn-one mt-30 wow fadeInUp" data-wow-delay="600ms"
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
