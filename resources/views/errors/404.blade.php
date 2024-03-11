@extends('front.include.master')

@section('title')
    Page Not Found
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
                        <span>Error</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">404 Error</h2>
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

        <!-- Error area start here -->
        <section class="error-area pt-120">
            <div class="container">
                <div class="error__item text-center">
                    <div class="section-header-two mb-40">
                        <h2>Oops! Something go wrong</h2>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/front/images/error/error-image.png') }}" alt="image">
                    </div>
                    <h4>Error! Page Not Found</h4>
                    <a href="/" class="btn-one mt-30">Go Back Homepage<i
                            class="fa-regular fa-arrow-left ml-10"></i></a>
                </div>
            </div>
        </section>
        <!-- Error area end here -->
    </main>
@stop

@section('js')
@endsection
