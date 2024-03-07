@extends('front.include.master')

@section('title')
    Teams
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
                        <span>Team</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Team</h2>
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

        <!-- Team area start here -->
        <section class="team-area pt-120">
            <div class="container">
                <div class="bor-bottom pb-60 border-bottom">
                    <div class="row g-4 justify-content-between">
                        <div class="col-lg-5">
                            <div class="section-header">
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Meet with our
                                    CEO
                                    and <span>Founders</span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">Discover the
                                    driving force behind Marketi. Working collaboratively to deliver innovative digital
                                    marketing solutions
                                    that elevate your brand.</p>
                                <p class="mt-10 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Marketi
                                    thrives on collaborative innovation, propelling brands forward with
                                    cutting-edge
                                    digital marketing solutions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <div class="team__item active">
                                        <div class="team__image image">
                                            <img src="{{ asset('assets/front/images/team/team-image2.png') }}"
                                                alt="image">
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
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="team__item active bg2">
                                        <div class="team__image image">
                                            <img src="{{ asset('assets/front/images/team/team-image3.png') }}"
                                                alt="image">
                                            <div class="team-info">
                                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                                <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                            </div>
                                        </div>
                                        <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Sumaya
                                                Suborna</a></h5>
                                        <span>Digital Strategist</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team area end here -->

        <!-- Team area start here -->
        <section class="team-area pb-120 pt-60">
            <div class="container">
                <div class="section-header-two mb-90 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Exceptional Team</h5>
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
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image5.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Fahmad Sami</a>
                            </h5>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image6.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Abu Rayhan</a>
                            </h5>
                            <span>Creative Lead</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image7.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Prince Sakib</a>
                            </h5>
                            <span>Digital Strategist</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image8.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Sarowar Sagor</a>
                            </h5>
                            <span>Client Relations Manager</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image9.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Alex Rony</a>
                            </h5>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image10.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Mahdi Hasan</a>
                            </h5>
                            <span>Creative Lead</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image11.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Main Shohag</a>
                            </h5>
                            <span>Digital Strategist</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item">
                            <div class="team__image image">
                                <img src="{{ asset('assets/front/images/team/team-image12.png') }}" alt="image">
                                <div class="team-info">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-15"><a href="{{ route('teamDetails') }}" class="primary-hover fw-700">Nishan
                                    Hossain</a></h5>
                            <span>Client Relations Manager</span>
                        </div>
                    </div>
                </div>
                <div class="pegi justify-content-center mt-80">
                    <a href="#0"><i class="fa-regular fa-arrow-left-long"></i></a>
                    <a class="dot-pegi active" href="#0"></a>
                    <a class="dot-pegi" href="#0"></a>
                    <a class="dot-pegi" href="#0"></a>
                    <a class="dot-pegi" href="#0"></a>
                    <a class="active" href="#0"><i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </section>
        <!-- Team area end here -->

        <!-- started area start here -->
        <section class="started-area">
            <div class="container">
                <div class="started__item bg-image"
                    data-background="{{ asset('assets/front/images/bg/started-bg.png') }}">
                    <div class="section-header-two text-center mb-40">
                        <h2 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Unlock Your
                            Digital Potential with <br> Marketi's SEO Solutions!</h2>
                        <p class="para-light-color wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            Elevate your online presence with Marketi's trusted SEO
                            solutions.
                        </p>
                    </div>
                    <div class="btn__group text-center wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <a href="{{ route('pricing') }}" class="btn-two">Get Started<i
                                class="fa-regular fa-arrow-right ml-10"></i></a>
                        <a href="{{ route('about') }}" class="btn-three ms-4">Learn More<i
                                class="fa-regular fa-arrow-right ml-10"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- started area end here -->
    </main>
@stop

@section('js')
@endsection
