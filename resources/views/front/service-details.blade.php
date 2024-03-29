@extends('front.include.master')

@section('title')
    تفاصيل الخدمة
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
                        <span>تفاصيل الخدمة</span></h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">تفاصيل الخدمة</h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms"></p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Service details area start here -->
        <section class="service-details-area pt-120 pb-120">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="service-details__left-item">
                            <div class="item mb-40">
                                <ul>
                                    <li>
                                        <img src="{{ asset('assets/front/images/icon/service-details-icon1.png') }}"
                                            alt="icon">
                                        <h6><a href="service-details.html" class="primary-two-color">خدمة 1</a></h6>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/front/images/icon/service-details-icon2.png') }}"
                                            alt="icon">
                                        <h6><a href="service-details.html" class="primary-two-color">خدمة 2</a></h6>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/front/images/icon/service-details-icon3.png') }}"
                                            alt="icon">
                                        <h6><a href="service-details.html" class="primary-two-color">خدمة 3</a></h6>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/front/images/icon/service-details-icon4.png') }}"
                                            alt="icon">
                                        <h6><a href="service-details.html" class="primary-two-color">خدمة 4</a></h6>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/front/images/icon/service-details-icon5.png') }}"
                                            alt="icon">
                                        <h6><a href="service-details.html" class="primary-two-color">خدمة 5</a></h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-image service-book-now text-center pb-4 pt-40 ps-4 pe-4"
                                data-background="{{ asset('assets/front/images/service/service-details-image2.jpg') }}">
                                <h4 class="text-white">هل تحتاج إلى أي <br> خدمة استشارية؟</h4>
                                <a href="index.html" class="btn-one w-100 text-center mt-60">العودة إلى الصفحة الرئيسية<i
                                        class="fa-regular fa-arrow-left ml-10"></i></a>
                            </div>
                            <button class="download-brochure mt-40">
                                تحميل الكتيب
                                <svg width="23" height="26" viewBox="0 0 23 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.3727 8.29333L14.3727 0.293335C14.1847 0.105335 13.9313 0 13.666 0H5.66602C2.44202 0 0.666016 1.776 0.666016 5V21C0.666016 24.224 2.44202 26 5.66602 26H17.666C20.89 26 22.666 24.224 22.666 21V9C22.666 8.73467 22.5607 8.48 22.3727 8.29333ZM14.666 3.41467L19.2513 8H17.666C15.5633 8 14.666 7.10267 14.666 5V3.41467ZM17.666 24H5.66602C3.56335 24 2.66602 23.1027 2.66602 21V5C2.66602 2.89733 3.56335 2 5.66602 2H12.666V5C12.666 8.224 14.442 10 17.666 10H20.666V21C20.666 23.1027 19.7687 24 17.666 24ZM13.0394 16.2933C13.4301 16.684 13.4301 17.3173 13.0394 17.708L10.3727 20.3747C10.2807 20.4667 10.1699 20.54 10.0472 20.5907C9.92453 20.6413 9.79538 20.668 9.66471 20.668C9.53405 20.668 9.40457 20.6413 9.2819 20.5907C9.15924 20.54 9.04871 20.4667 8.95671 20.3747L6.29004 17.708C5.89937 17.3173 5.89937 16.684 6.29004 16.2933C6.68071 15.9027 7.31409 15.9027 7.70475 16.2933L8.66471 17.2533V13C8.66471 12.448 9.11271 12 9.66471 12C10.2167 12 10.6647 12.448 10.6647 13V17.252L11.6247 16.292C12.0167 15.9027 12.6487 15.9027 13.0394 16.2933Z"
                                        fill="#68DC80" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="service-details__right-item">
                            <h2 class="mb-30 text-capitalize">اكتشف مصير بياناتك</h2>
                            <p class="mb-20">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

                                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس

                                أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت

                                نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا

                                كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.</p>
                            <p class="mb-60">سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم

                                دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينتوري فيرأتاتيس ايت

                                كياسي أرشيتيكتو بيتاي فيتاي ديكاتا سيونت أكسبليكابو.
                            </p>
                            <div class="image mb-60">
                                <img src="{{ asset('assets/front/images/service/service-details-image1.jpg') }}"
                                    alt="image">
                            </div>
                            <h3 class="mb-20">ابدأ في تشكيل العملية</h3>
                            <p class="mb-25">ما لدينا في البداية:</p>
                            <ul class="list-text">
                                <li class="mb-20">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</li>
                                <li class="mb-20">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</li>
                                <li class="mb-20">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</li>
                                <li class="mb-25">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</li>
                            </ul>
                            <p class="mb-30">يوت انيم أد مينيم فينايم,كيواس نوستريد

                                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس

                                أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت

                                نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا

                                كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.</p>
                            <h3 class="mb-20">خريطة الطريق البسيطة الخاصة بنا</h3>
                            <p>أوففايكايس ديبايتايس أيوت ريريوم نيسيسسايتاتايبيوس سايبي ايفينايت يوت ايت فوليبتاتيس

                                ريبيودايايانداي ساينت ايت موليسفاياي نون ريكيوسانداي.اتاكيوي ايريوم ريريوم هايس تينيتور

                                أ ساباينتي ديليكتيوس, يوت أيوت رياسايندايس فوليوبتاتايبص مايوريس ألايس

                                كونسيكيواتور أيوت بيرفيريندايس دولورايبيوس أسبيرايوريس ريبيللات .</p>
                            <div class="service-details__icon pt-40 pb-40 bor-top bor-bottom mt-60 mb-60">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="icon icon-one">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.25 10C12.25 10.414 11.914 10.75 11.5 10.75H5.5C5.086 10.75 4.75 10.414 4.75 10C4.75 9.586 5.086 9.25 5.5 9.25H11.5C11.914 9.25 12.25 9.586 12.25 10ZM5.5 6.75H8.5C8.914 6.75 9.25 6.414 9.25 6C9.25 5.586 8.914 5.25 8.5 5.25H5.5C5.086 5.25 4.75 5.586 4.75 6C4.75 6.414 5.086 6.75 5.5 6.75ZM11.5 13.25H5.5C5.086 13.25 4.75 13.586 4.75 14C4.75 14.414 5.086 14.75 5.5 14.75H11.5C11.914 14.75 12.25 14.414 12.25 14C12.25 13.586 11.914 13.25 11.5 13.25ZM20.25 9.5V17C20.25 18.517 19.017 19.75 17.5 19.75H4.5C2.082 19.75 0.75 18.418 0.75 16V4C0.75 1.582 2.082 0.25 4.5 0.25H12.5C14.918 0.25 16.25 1.582 16.25 4V7.25H18C19.24 7.25 20.25 8.259 20.25 9.5ZM15.051 18.25C14.859 17.875 14.75 17.45 14.75 17V4C14.75 2.423 14.077 1.75 12.5 1.75H4.5C2.923 1.75 2.25 2.423 2.25 4V16C2.25 17.577 2.923 18.25 4.5 18.25H15.051ZM18.75 9.5C18.75 9.086 18.413 8.75 18 8.75H16.25V17C16.25 17.689 16.811 18.25 17.5 18.25C18.189 18.25 18.75 17.689 18.75 17V9.5Z"
                                                        fill="#0A83EC" />
                                                </svg>
                                            </div>
                                            <h5 class="mb-1 mt-20"> جمع الوثيقة</h5>
                                            <p>نقوم بجمع المستندات المطلوبة <br> وإرسالها للتحقق</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="icon icon-two">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.4261 1.07245C18.7241 0.370445 17.73 0.094446 16.764 0.335446L3.65123 3.61346C1.90323 4.05046 0.737108 5.55444 0.750108 7.35644C0.763108 9.15844 1.94923 10.6454 3.70323 11.0584L8.34923 12.1515L9.44225 16.7964C9.85525 18.5504 11.3422 19.7364 13.1442 19.7494C13.1532 19.7494 13.1632 19.7494 13.1722 19.7494C14.9612 19.7494 16.4511 18.5864 16.8861 16.8484L20.1642 3.73544C20.4042 2.77044 20.1291 1.77545 19.4261 1.07245ZM18.7081 3.37146L15.43 16.4844C15.101 17.7974 14.0402 18.2574 13.1532 18.2494C12.3082 18.2434 11.2122 17.7695 10.9022 16.4535L9.7982 11.7624L14.0292 7.53045C14.3222 7.23745 14.3222 6.76245 14.0292 6.46945C13.7362 6.17645 13.2611 6.17645 12.9681 6.46945L8.73619 10.7014L4.04503 9.59744C2.72803 9.28744 2.25415 8.19046 2.24815 7.34546C2.24215 6.50046 2.70105 5.39645 4.01305 5.06845L17.1261 1.79043C17.2331 1.76343 17.3411 1.75045 17.4471 1.75045C17.7871 1.75045 18.1151 1.88445 18.3641 2.13345C18.6911 2.45945 18.8201 2.92246 18.7081 3.37146Z"
                                                        fill="#433EED" />
                                                </svg>
                                            </div>
                                            <h5 class="mb-1 mt-20">تحقق ووضع اللمسات النهائية</h5>
                                            <p>نحن نتحقق من الوثيقة و <br> إرسال للموافقة النهائية</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="icon icon-three">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.8789 19.75H7.12109C6.52909 19.75 5.94903 19.5101 5.53003 19.0911L1.40894 14.97C0.989936 14.551 0.75 13.9709 0.75 13.3789V6.62109C0.75 6.02909 0.989936 5.44903 1.40894 5.03003L5.53003 0.908936C5.94903 0.489936 6.52909 0.25 7.12109 0.25H13.8789C14.4709 0.25 15.051 0.489936 15.47 0.908936L19.5911 5.03003C20.0101 5.44903 20.25 6.02909 20.25 6.62109V13.3789C20.25 13.9709 20.0101 14.551 19.5911 14.97L15.47 19.0911C15.051 19.5101 14.4709 19.75 13.8789 19.75ZM7.12109 1.75C6.92409 1.75 6.73006 1.82997 6.59106 1.96997L2.46997 6.09106C2.32997 6.23106 2.25 6.42409 2.25 6.62109V13.3789C2.25 13.5759 2.32997 13.7699 2.46997 13.9089L6.59106 18.03C6.73106 18.17 6.92409 18.25 7.12109 18.25H13.8789C14.0759 18.25 14.2699 18.17 14.4089 18.03L18.53 13.9089C18.67 13.7689 18.75 13.5759 18.75 13.3789V6.62109C18.75 6.42409 18.67 6.23006 18.53 6.09106L14.4089 1.96997C14.2689 1.82997 14.0759 1.75 13.8789 1.75H7.12109ZM10.03 12.53L14.03 8.53003C14.323 8.23703 14.323 7.76199 14.03 7.46899C13.737 7.17599 13.262 7.17599 12.969 7.46899L9.49902 10.939L8.02905 9.46899C7.73605 9.17599 7.26102 9.17599 6.96802 9.46899C6.67502 9.76199 6.67502 10.237 6.96802 10.53L8.96802 12.53C9.11402 12.676 9.30605 12.75 9.49805 12.75C9.69005 12.75 9.88403 12.677 10.03 12.53Z"
                                                        fill="#00C881" />
                                                </svg>
                                            </div>
                                            <h5 class="mb-1 mt-20">يعتمد</h5>
                                            <p>بعد الموافقة ستكون جاهزًا للاستخدام <br> البرامج الخاصة بك</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-details__testimonial bg-image mb-60"
                                data-background="{{ asset('assets/front/images/service/service-details-bg.jpg') }}">
                                <p>“لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ,سيونت ان كيولبا

                                    كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.”</p>
                                <div class="d-flex align-items-center justify-content-between mt-30">
                                    <div class="info d-flex align-items-center gap-3">
                                        <img src="{{ asset('assets/front/images/service/service-details-user.png') }}"
                                            alt="image">
                                        <div>
                                            <h6 class="text-white">اسم الشخص</h6>
                                            <span class="para-light-color">الرياضة</span>
                                        </div>
                                    </div>
                                    <svg width="72" height="62" viewBox="0 0 72 62" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M54.862 60.8645C52.6964 61.4059 50.452 61.4846 48.2287 61.4635C47.5453 61.4495 46.838 61.531 46.177 61.3046C45.1153 60.9207 44.3011 59.8618 44.3152 58.7157C44.3067 56.8342 44.3025 54.954 44.318 53.0725C44.3278 51.6789 45.5681 50.4259 46.9617 50.3964C48.8461 50.3345 50.767 50.53 52.6134 50.0504C55.1827 49.4289 57.4228 47.7639 58.9486 45.6306C60.1608 43.9585 60.8245 41.9195 60.9033 39.8607C60.9258 39.0114 60.9652 38.1578 60.8695 37.3112C60.6375 35.3987 58.8769 33.804 56.9461 33.7829C53.5528 33.7407 50.1581 33.7956 46.7662 33.7562C44.5992 33.7281 42.4884 32.7564 41.0259 31.1645C39.5578 29.6739 38.7619 27.5912 38.7731 25.5057C38.7619 20.3532 38.7717 15.2007 38.7689 10.0482C38.7492 8.7151 38.7633 7.35104 39.2189 6.07979C40.0978 3.55276 42.2817 1.49541 44.8748 0.817602C46.3373 0.422445 47.8631 0.564474 49.358 0.536352C54.1814 0.540572 59.0048 0.527919 63.8283 0.543388C66.022 0.54198 68.1848 1.47573 69.6825 3.07745C71.1295 4.52307 71.948 6.5326 72 8.57167L72 39.5106C71.9241 40.4935 71.9395 41.4864 71.7511 42.4581C71.2758 45.9456 69.8695 49.2798 67.8586 52.1556C64.7944 56.5318 60.0441 59.634 54.862 60.8645Z"
                                            fill="white" fill-opacity="0.75" />
                                        <path
                                            d="M16.1742 60.8439C13.972 61.4106 11.6826 61.4837 9.41854 61.464C8.73511 61.45 8.02495 61.5315 7.36823 61.2925C6.31495 60.8945 5.52885 59.8356 5.54151 58.6951C5.53448 56.829 5.52885 54.9629 5.54432 53.0968C5.54854 51.7047 6.76917 50.4418 8.16136 50.3982C9.70964 50.3392 11.2692 50.4742 12.8076 50.2534C17.6423 49.5868 21.7246 45.2922 22.0931 40.4181C22.1564 39.3423 22.214 38.2553 22.0748 37.1851C21.7907 35.3064 20.0273 33.7848 18.126 33.7806C14.7356 33.744 11.3423 33.7961 7.95182 33.7553C5.72432 33.7187 3.57276 32.6725 2.10745 31.0061C0.78276 29.5815 0.0458861 27.6662 -0.000519489 25.7256L-0.000517989 8.57356C0.045888 6.46418 0.930421 4.397 2.4562 2.93731C3.97214 1.382 6.12933 0.517156 8.29777 0.541063C13.9382 0.539656 19.5801 0.524188 25.222 0.549503C28.5773 0.569191 31.6921 2.93591 32.7806 6.07888C33.1293 7.08154 33.2404 8.15028 33.232 9.20778C33.2278 19.2358 33.2376 29.2637 33.2264 39.2931C33.2151 43.3093 32.0971 47.3115 30.0018 50.7386C27.0332 55.8137 21.8709 59.4784 16.1742 60.8439Z"
                                            fill="white" fill-opacity="0.75" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-capitalize mb-20">كيف وصلنا إلى هنا؟</h3>
                            <p class="mb-20">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
                            <p class="mb-20">يوت انيم أد مينيم فينايم,كيواس نوستريد

                                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس

                                أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت

                                نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا

                                كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.</p>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service details area end here -->

        <!-- Brand area start here -->
        <div class="brand-area">
            <div class="container">
                <div class="pt-120 pb-120 bor-top">
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
        </div>
        <!-- Brand area end here -->

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
