@extends('front.include.master')

@section('title')
    Blog Details
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
                <div class="banner-inner__content mw-100">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms"><a href="index.html">Home</a> /
                        <span>Blog & Article Details</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Blog & Article
                        Details</h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">We
                        will help a client's problems to develop the
                        products they have <br>
                        with
                        high quality Change the
                        appearance.</p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Blog Details area start here -->
        <section class="blog-details-area pt-120 pb-120">
            <div class="container">
                <div class="blog-details__item">
                    <div class="section-header-two mb-4">
                        <h2>How to Do Keyword Research for SEO: A Beginner's Guide</h2>
                    </div>
                    <p>While Google keeps us on our toes with all the algorithm updates they keep rollin' out, one thing
                        has stayed pretty
                        consistent for inbound marketers looking to optimize their websites for search: keyword
                        research.</p>
                    <ul class="d-flex align-items-center gap-4 flex-wrap mt-20">
                        <li><svg class="me-1" width="14" height="18" viewBox="0 0 14 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.00753 7.95833C5.05419 7.95833 3.46586 6.36917 3.46586 4.41667C3.46586 2.46417 5.05419 0.875 7.00753 0.875C8.96086 0.875 10.5492 2.46417 10.5492 4.41667C10.5492 6.36917 8.96086 7.95833 7.00753 7.95833ZM7.00753 2.125C5.74336 2.125 4.71586 3.1525 4.71586 4.41667C4.71586 5.68083 5.74336 6.70833 7.00753 6.70833C8.27169 6.70833 9.29919 5.68083 9.29919 4.41667C9.29919 3.1525 8.27086 2.125 7.00753 2.125ZM10.3308 17.125H3.66921C1.65254 17.125 0.541664 16.0209 0.541664 14.0159C0.541664 11.7984 1.79666 9.20833 5.33333 9.20833H8.66666C12.2033 9.20833 13.4583 11.7975 13.4583 14.0159C13.4583 16.0209 12.3475 17.125 10.3308 17.125ZM5.33333 10.4583C2.0475 10.4583 1.79166 13.1809 1.79166 14.0159C1.79166 15.3192 2.35337 15.875 3.66921 15.875H10.3308C11.6466 15.875 12.2083 15.3192 12.2083 14.0159C12.2083 13.1817 11.9525 10.4583 8.66666 10.4583H5.33333Z"
                                    fill="#25314C" />
                            </svg>
                            <a href="#" class="primary-hover para-color">John Smith</a>
                        </li>
                        <li><svg class="me-1" width="18" height="16" viewBox="0 0 18 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.6708 6.86635L8.33747 1.52715C7.81746 1.00632 7.09749 0.708008 6.36166 0.708008H2.11168C0.970009 0.708008 0.0416679 1.63719 0.0416679 2.77969V7.03384C0.0416679 7.77968 0.332465 8.48218 0.859132 9.01052L6.1933 14.3497C6.81747 14.9747 7.48163 15.2913 8.1683 15.2913C8.85413 15.2913 9.51915 14.9747 10.1425 14.3497L13.67 10.8188C14.9442 9.54467 14.9442 8.14052 13.6708 6.86635ZM12.7875 9.93551L9.26001 13.4663C8.49501 14.2305 7.83998 14.2288 7.07831 13.4663L1.74496 8.12719C1.45246 7.83469 1.29248 7.44634 1.29248 7.03384V2.77969C1.29248 2.32636 1.65999 1.95801 2.11249 1.95801H6.36247C6.76914 1.95801 7.16668 2.12303 7.45418 2.41053L12.7875 7.74968C13.5725 8.53635 13.5725 9.14884 12.7875 9.93551ZM17.9583 8.84883C17.9575 9.52549 17.6342 10.188 16.9992 10.8188L13.4758 14.3497C12.8625 14.9738 12.1967 15.2913 11.5 15.2913C11.155 15.2913 10.875 15.0113 10.875 14.6663C10.875 14.3213 11.155 14.0413 11.5 14.0413C11.8492 14.0413 12.2142 13.8489 12.5875 13.4697L16.1158 9.93301C16.5091 9.54301 16.7075 9.178 16.7083 8.84633C16.7092 8.51217 16.51 8.14302 16.1167 7.74968L10.7833 2.40799C10.525 2.14549 10.1784 1.98965 9.8017 1.96548C9.4567 1.94298 9.19497 1.64549 9.2183 1.30132C9.23997 0.95632 9.56832 0.699694 9.88165 0.718028C10.5675 0.762194 11.2034 1.05053 11.6717 1.52969L17.0008 6.86717C17.6375 7.503 17.96 8.17049 17.9583 8.84883ZM4.41667 4.24967C4.41667 4.70967 4.04496 5.08301 3.58496 5.08301C3.12663 5.08301 2.75 4.70967 2.75 4.24967C2.75 3.78967 3.11837 3.41634 3.57754 3.41634H3.58588C4.04504 3.41634 4.41667 3.78967 4.41667 4.24967Z"
                                    fill="#25314C" />
                            </svg>

                            <a href="#" class="primary-hover para-color">Business</a>
                        </li>
                        <li><svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 2.125H12.9583V1.5C12.9583 1.155 12.6783 0.875 12.3333 0.875C11.9883 0.875 11.7083 1.155 11.7083 1.5V2.125H6.29167V1.5C6.29167 1.155 6.01167 0.875 5.66667 0.875C5.32167 0.875 5.04167 1.155 5.04167 1.5V2.125H4C1.985 2.125 0.875 3.235 0.875 5.25V14C0.875 16.015 1.985 17.125 4 17.125H14C16.015 17.125 17.125 16.015 17.125 14V5.25C17.125 3.235 16.015 2.125 14 2.125ZM4 3.375H5.04167V4C5.04167 4.345 5.32167 4.625 5.66667 4.625C6.01167 4.625 6.29167 4.345 6.29167 4V3.375H11.7083V4C11.7083 4.345 11.9883 4.625 12.3333 4.625C12.6783 4.625 12.9583 4.345 12.9583 4V3.375H14C15.3142 3.375 15.875 3.93583 15.875 5.25V5.875H2.125V5.25C2.125 3.93583 2.68583 3.375 4 3.375ZM14 15.875H4C2.68583 15.875 2.125 15.3142 2.125 14V7.125H15.875V14C15.875 15.3142 15.3142 15.875 14 15.875ZM6.51668 9.83333C6.51668 10.2933 6.14418 10.6667 5.68335 10.6667C5.22335 10.6667 4.84574 10.2933 4.84574 9.83333C4.84574 9.37333 5.21501 9 5.67501 9H5.68335C6.14335 9 6.51668 9.37333 6.51668 9.83333ZM9.85002 9.83333C9.85002 10.2933 9.47752 10.6667 9.01668 10.6667C8.55668 10.6667 8.17908 10.2933 8.17908 9.83333C8.17908 9.37333 8.54834 9 9.00834 9H9.01668C9.47668 9 9.85002 9.37333 9.85002 9.83333ZM13.1833 9.83333C13.1833 10.2933 12.8108 10.6667 12.35 10.6667C11.89 10.6667 11.5124 10.2933 11.5124 9.83333C11.5124 9.37333 11.8817 9 12.3417 9H12.35C12.81 9 13.1833 9.37333 13.1833 9.83333ZM6.51668 13.1667C6.51668 13.6267 6.14418 14 5.68335 14C5.22335 14 4.84574 13.6267 4.84574 13.1667C4.84574 12.7067 5.21501 12.3333 5.67501 12.3333H5.68335C6.14335 12.3333 6.51668 12.7067 6.51668 13.1667ZM9.85002 13.1667C9.85002 13.6267 9.47752 14 9.01668 14C8.55668 14 8.17908 13.6267 8.17908 13.1667C8.17908 12.7067 8.54834 12.3333 9.00834 12.3333H9.01668C9.47668 12.3333 9.85002 12.7067 9.85002 13.1667ZM13.1833 13.1667C13.1833 13.6267 12.8108 14 12.35 14C11.89 14 11.5124 13.6267 11.5124 13.1667C11.5124 12.7067 11.8817 12.3333 12.3417 12.3333H12.35C12.81 12.3333 13.1833 12.7067 13.1833 13.1667Z"
                                    fill="#25314C" />
                            </svg>

                            <a href="#" class="primary-hover para-color">January 25, 2024</a>
                        </li>
                        <li><svg class="me-1" width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.2141 16.1247C2.09327 16.1247 1.97591 16.123 1.86091 16.1189C1.44424 16.1089 1.07914 15.8422 0.936635 15.4397C0.793302 15.0347 0.911725 14.5939 1.23672 14.3172C2.01339 13.6906 2.32409 12.9972 2.44909 12.5214C1.41825 11.2889 0.874176 9.73299 0.874176 8.00049C0.874176 3.70632 4.21584 0.708008 8.99918 0.708008C13.7825 0.708008 17.1242 3.70716 17.1242 8.00049C17.1242 12.2938 13.7825 15.293 8.99918 15.293C8.01001 15.293 7.06164 15.1588 6.17081 14.8938C5.03497 15.883 3.46993 16.1247 2.2141 16.1247ZM1.89835 14.8689C1.90001 14.8689 1.90156 14.8689 1.90323 14.8689C1.90073 14.8697 1.89918 14.8697 1.89835 14.8689ZM8.99999 1.95801C4.95249 1.95801 2.12499 4.44299 2.12499 8.00049C2.12499 9.53049 2.62914 10.8855 3.58414 11.9188C3.7133 12.0588 3.77242 12.2505 3.74242 12.4397C3.60242 13.3322 3.16258 14.1764 2.48591 14.8689C3.45258 14.8339 4.75252 14.6114 5.55252 13.758C5.72002 13.578 5.98001 13.5138 6.21251 13.5947C7.07501 13.893 8.01249 14.0439 8.99999 14.0439C13.0475 14.0439 15.875 11.5588 15.875 8.0013C15.875 4.4438 13.0475 1.95801 8.99999 1.95801ZM9.85001 7.99967C9.85001 7.53967 9.47751 7.16634 9.01667 7.16634H9.00833C8.54833 7.16634 8.17907 7.53967 8.17907 7.99967C8.17907 8.45967 8.55667 8.83301 9.01667 8.83301C9.47667 8.83301 9.85001 8.45967 9.85001 7.99967ZM13.1833 7.99967C13.1833 7.53967 12.8108 7.16634 12.35 7.16634H12.3417C11.8817 7.16634 11.5124 7.53967 11.5124 7.99967C11.5124 8.45967 11.89 8.83301 12.35 8.83301C12.81 8.83301 13.1833 8.45967 13.1833 7.99967ZM6.51667 7.99967C6.51667 7.53967 6.14417 7.16634 5.68334 7.16634H5.675C5.215 7.16634 4.84573 7.53967 4.84573 7.99967C4.84573 8.45967 5.22334 8.83301 5.68334 8.83301C6.14334 8.83301 6.51667 8.45967 6.51667 7.99967Z"
                                    fill="#25314C" />
                            </svg>

                            <a href="#" class="primary-hover para-color">No Comments</a>
                        </li>
                    </ul>
                </div>
                <div class="image mt-60 mb-60">
                    <img src="{{ asset('assets/front/images/blog/blog-details-image-main1.jpg') }}" alt="image">
                </div>
                <div class="blog-details__item">
                    <p class="mb-30">In this post, we’ll define what keyword research is, why it’s important, how to
                        conduct your
                        research for your SEO
                        strategy, and choose the right keywords for your website.</p>
                    <h3 class="mb-4">What is keyword research?</h3>
                    <p class="mb-30">Keyword research is the process of finding and analyzing search terms that people
                        enter into
                        search engines with the
                        goal of using that data for a specific purpose, often for search engine optimization (SEO) or
                        general marketing. Keyword
                        research can uncover queries to target, the popularity of these queries, their ranking
                        difficulty, and more.</p>
                    <h3 class="mb-4">Why is keyword research important?</h3>
                    <p class="mb-10">Keyword research helps you find which keywords are best to target and provides
                        valuable insight
                        into the queries that
                        your target audience is actually searching on Google.</p>
                    <p class="mb-40">The insight that you can get into these actual search terms can help inform content
                        strategy as
                        well as your larger
                        marketing strategy.</p>
                    <div class="row g-4 mb-40">
                        <div class="col-sm-6">
                            <div class="image">
                                <img src="{{ asset('assets/front/images/blog/blog-details-image-main2.jpg') }}"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="image">
                                <img src="{{ asset('assets/front/images/blog/blog-details-image-main3.jpg') }}"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                    <p>People use keywords to find solutions when conducting research online. So if your content is
                        successful in getting in
                        front of our audience as they conduct searches, you stand to gain more traffic. Therefore, you
                        should be targeting those
                        searches.</p>
                    <p class="mb-30">People use keywords to find solutions when conducting research online. So if your
                        content is
                        successful in getting in
                        front of our audience as they conduct searches, you stand to gain more traffic. Therefore, you
                        should be targeting those
                        searches.
                        In addition, in the inbound methodology, we don't create content around what we want to tell
                        people; we should be
                        creating content around what people want to discover. In other words, our audience is coming to
                        us.
                        This all starts with keyword research.
                        Conducting keyword research has many benefits, the most popular reasons being:</p>
                    <h3 class="mb-4">Marketing Trend Insight</h3>
                    <p class="mb-30">Conducting effective keyword research can provide you with insights into current
                        marketing
                        trends, and help you center
                        your content on relevant topics and keywords your audience is in search of.</p>
                    <h3 class="mb-4">Traffic Growth</h3>
                    <p class="mb-40">When you identify the best fitting keywords for the content you publish, the higher
                        you'll rank in search engine results
                        — the more traffic you’ll attract to your website.</p>
                    <div class="image mb-40">
                        <img src="{{ asset('assets/front/images/blog/blog-details-image-main4.jpg') }}" alt="image">
                    </div>
                    <h3 class="mb-4">Customer Acquisition</h3>
                    <p>If your business has content that other business professionals are looking for, you can meet
                        their needs and provide
                        them with a call to action that will lead them into the buyer journey from the awareness stage
                        to the point of purchase.</p>
                    <p class="mb-30">By researching keywords for their popularity, search volume, and general intent,
                        you can tackle
                        the questions that most
                        people in your audience want answers to.</p>
                    <h3 class="mb-4">How to Research Keywords for Your SEO Strategy</h3>
                    <p class="mb-30">I'm going to lay out a keyword research process you can follow to help you come up
                        with a list of
                        terms you should be
                        targeting. That way, you'll be able to establish and execute a strong keyword strategy that
                        helps you get found for the
                        search terms you actually care about.</p>
                    <h3 class="mb-4">Fill in those topic buckets with keywords</h3>
                    <p class="mb-4">Now that you have a few topic buckets you want to focus on, it's time to identify
                        some keywords that fall into those
                        buckets. These are keyword phrases you think are important to rank for in the SERPs (search
                        engine results pages)
                        because your target customer is probably conducting searches for those specific terms.</p>
                    <p>For instance, if I took that last topic bucket for an inbound marketing software
                        company —
                        "marketing automation" — I'd
                        brainstorm some keyword phrases that I think people would type in related to that topic. Those
                        might include:</p>
                    <ul class="list-text mt-40 mb-40">
                        <li>
                            marketing automation tools
                        </li>
                        <li>how to use marketing automation software</li>
                        <li>what is marketing automation?</li>
                        <li>how to tell if I need marketing automation software</li>
                        <li>lead nurturing</li>
                        <li>email marketing automation</li>
                        <li>top automation tools</li>
                    </ul>
                    <p class="mb-40">And so on and so on. The point of this step isn't to come up with your final list
                        of keyword
                        phrases. You just want to
                        end up with a brain dump of phrases you think potential customers might use to search for
                        content related to that
                        particular topic bucket. We'll narrow the lists down later in the process so you don't have
                        something too unwieldy.</p>
                    <div class="social-icon">
                        <h3>Share:</h3>
                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#0"><i class="fa-brands fa-skype"></i></a>
                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="border-bottom mt-60 mb-60"></div>
                <div class="blog-details__item">
                    <h3 class="mb-20">03 Comments</h3>
                    <div class="blog-details__comment d-flex gap-4 mb-4">
                        <div class="image">
                            <img src="{{ asset('assets/front/images/blog/blog-user1.png') }}" alt="image">
                        </div>
                        <div>
                            <h5 class="mb-1">Judy Treutel</h5>
                            <p>Dictum erat aliquam sit turpis rutrum nulla feugiat sodales ullamcorper. Vulputate
                                consequat nunc nunc condimentum
                                egestas orci.</p>
                            <h6 class="mt-10">
                                <a href="#0">
                                    <svg class="me-1" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.1368 1.85208C5.42363 1.6924 5.79961 1.72357 6.06074 1.92099C6.28141 2.08204 6.41484 2.35029 6.41512 2.62318C6.4184 3.30486 6.41512 3.98654 6.41676 4.66822C7.75441 4.71552 9.08305 5.07865 10.2457 5.74474C11.3777 6.38978 12.3536 7.31837 13.0214 8.43974C13.6462 9.47908 13.9885 10.6849 14 11.8976V11.9641C13.9871 12.0486 13.9538 12.1355 13.8808 12.1858C13.7629 12.278 13.5764 12.255 13.4843 12.1372C13.3965 12.0319 13.4255 11.8842 13.3924 11.7598C13.3254 11.4774 13.1329 11.2463 12.9292 11.0483C12.5267 10.6833 12.0378 10.4315 11.5402 10.2223C10.7486 9.90318 9.91539 9.69619 9.07402 9.56029C8.19602 9.41372 7.30598 9.35056 6.41648 9.33251C6.41621 9.9308 6.41648 10.5288 6.41648 11.1271C6.42004 11.3529 6.42469 11.5941 6.30437 11.7948C6.11762 12.1454 5.67273 12.3297 5.29348 12.2069C5.03891 12.135 4.86555 11.9239 4.67441 11.7554C3.23695 10.4142 1.78336 9.0897 0.381719 7.71076C0.28082 7.60986 0.166797 7.51744 0.0973438 7.39029C0.0369141 7.28365 0.0128516 7.16142 0 7.04111V6.97767C0.00765625 6.78244 0.0738281 6.58447 0.215742 6.44583C1.68355 4.99525 3.20906 3.60509 4.71816 2.19798C4.85324 2.07794 4.97629 1.93958 5.1368 1.85208ZM5.28719 2.46568C3.72613 3.92119 2.1473 5.35837 0.628633 6.85845C0.567383 6.93173 0.567656 7.06079 0.627813 7.13462C2.14676 8.63443 3.72559 10.0719 5.28664 11.5274C5.36293 11.6004 5.45863 11.6822 5.57293 11.6576C5.7277 11.6447 5.84281 11.4946 5.83324 11.3426C5.83434 10.5868 5.83297 9.83072 5.83379 9.07494C5.8327 8.97732 5.86332 8.87396 5.94508 8.8138C6.04133 8.73341 6.1734 8.74736 6.28988 8.749C7.5477 8.76021 8.8077 8.87997 10.0357 9.15806C10.631 9.29669 11.22 9.46923 11.7846 9.70494C12.3121 9.92669 12.8231 10.2015 13.2601 10.5747C13.1936 10.2775 13.1029 9.98603 12.9877 9.70384C12.8983 9.44298 12.7646 9.20072 12.644 8.95353C12.5062 8.72794 12.381 8.49306 12.2183 8.28388C11.0261 6.60224 9.06855 5.5249 7.03008 5.30451C6.72191 5.25474 6.40883 5.26814 6.09875 5.24189C5.95027 5.23122 5.83105 5.09423 5.83488 4.9463C5.8316 4.24439 5.83461 3.54193 5.83352 2.84001C5.8316 2.73912 5.84254 2.63658 5.81738 2.53787C5.78457 2.42083 5.67027 2.33744 5.54996 2.33306C5.44332 2.3213 5.35938 2.39896 5.28719 2.46568Z"
                                            fill="#020D0A" />
                                    </svg> Reply
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="blog-details__comment sm-comment d-flex gap-4 mb-4">
                        <div class="image">
                            <img src="{{ asset('assets/front/images/blog/blog-user2.png') }}" alt="image">
                        </div>
                        <div>
                            <h5 class="mb-1">Alex Rony</h5>
                            <p>Faucibus orci cras a pulvinar eget pharetra elit vel. Proin enim nunc sagittis velit.
                                Malesuada in pharetra pulvinar
                                tristique amet.</p>
                            <h6 class="mt-10">
                                <a href="#0">
                                    <svg class="me-1" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.1368 1.85208C5.42363 1.6924 5.79961 1.72357 6.06074 1.92099C6.28141 2.08204 6.41484 2.35029 6.41512 2.62318C6.4184 3.30486 6.41512 3.98654 6.41676 4.66822C7.75441 4.71552 9.08305 5.07865 10.2457 5.74474C11.3777 6.38978 12.3536 7.31837 13.0214 8.43974C13.6462 9.47908 13.9885 10.6849 14 11.8976V11.9641C13.9871 12.0486 13.9538 12.1355 13.8808 12.1858C13.7629 12.278 13.5764 12.255 13.4843 12.1372C13.3965 12.0319 13.4255 11.8842 13.3924 11.7598C13.3254 11.4774 13.1329 11.2463 12.9292 11.0483C12.5267 10.6833 12.0378 10.4315 11.5402 10.2223C10.7486 9.90318 9.91539 9.69619 9.07402 9.56029C8.19602 9.41372 7.30598 9.35056 6.41648 9.33251C6.41621 9.9308 6.41648 10.5288 6.41648 11.1271C6.42004 11.3529 6.42469 11.5941 6.30437 11.7948C6.11762 12.1454 5.67273 12.3297 5.29348 12.2069C5.03891 12.135 4.86555 11.9239 4.67441 11.7554C3.23695 10.4142 1.78336 9.0897 0.381719 7.71076C0.28082 7.60986 0.166797 7.51744 0.0973438 7.39029C0.0369141 7.28365 0.0128516 7.16142 0 7.04111V6.97767C0.00765625 6.78244 0.0738281 6.58447 0.215742 6.44583C1.68355 4.99525 3.20906 3.60509 4.71816 2.19798C4.85324 2.07794 4.97629 1.93958 5.1368 1.85208ZM5.28719 2.46568C3.72613 3.92119 2.1473 5.35837 0.628633 6.85845C0.567383 6.93173 0.567656 7.06079 0.627813 7.13462C2.14676 8.63443 3.72559 10.0719 5.28664 11.5274C5.36293 11.6004 5.45863 11.6822 5.57293 11.6576C5.7277 11.6447 5.84281 11.4946 5.83324 11.3426C5.83434 10.5868 5.83297 9.83072 5.83379 9.07494C5.8327 8.97732 5.86332 8.87396 5.94508 8.8138C6.04133 8.73341 6.1734 8.74736 6.28988 8.749C7.5477 8.76021 8.8077 8.87997 10.0357 9.15806C10.631 9.29669 11.22 9.46923 11.7846 9.70494C12.3121 9.92669 12.8231 10.2015 13.2601 10.5747C13.1936 10.2775 13.1029 9.98603 12.9877 9.70384C12.8983 9.44298 12.7646 9.20072 12.644 8.95353C12.5062 8.72794 12.381 8.49306 12.2183 8.28388C11.0261 6.60224 9.06855 5.5249 7.03008 5.30451C6.72191 5.25474 6.40883 5.26814 6.09875 5.24189C5.95027 5.23122 5.83105 5.09423 5.83488 4.9463C5.8316 4.24439 5.83461 3.54193 5.83352 2.84001C5.8316 2.73912 5.84254 2.63658 5.81738 2.53787C5.78457 2.42083 5.67027 2.33744 5.54996 2.33306C5.44332 2.3213 5.35938 2.39896 5.28719 2.46568Z"
                                            fill="#020D0A" />
                                    </svg> Reply
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="blog-details__comment d-flex gap-4">
                        <div class="image">
                            <img src="{{ asset('assets/front/images/blog/blog-user3.png') }}" alt="image">
                        </div>
                        <div>
                            <h5 class="mb-1">Kawser Ahmed</h5>
                            <p>Sed pharetra egestas pellentesque felis egestas ac. Eget ac dignissim leo habitant odio
                                vulputate. Mattis orci ac
                                pellentesque tellus.</p>
                            <h6 class="mt-10">
                                <a href="#0">
                                    <svg class="me-1" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.1368 1.85208C5.42363 1.6924 5.79961 1.72357 6.06074 1.92099C6.28141 2.08204 6.41484 2.35029 6.41512 2.62318C6.4184 3.30486 6.41512 3.98654 6.41676 4.66822C7.75441 4.71552 9.08305 5.07865 10.2457 5.74474C11.3777 6.38978 12.3536 7.31837 13.0214 8.43974C13.6462 9.47908 13.9885 10.6849 14 11.8976V11.9641C13.9871 12.0486 13.9538 12.1355 13.8808 12.1858C13.7629 12.278 13.5764 12.255 13.4843 12.1372C13.3965 12.0319 13.4255 11.8842 13.3924 11.7598C13.3254 11.4774 13.1329 11.2463 12.9292 11.0483C12.5267 10.6833 12.0378 10.4315 11.5402 10.2223C10.7486 9.90318 9.91539 9.69619 9.07402 9.56029C8.19602 9.41372 7.30598 9.35056 6.41648 9.33251C6.41621 9.9308 6.41648 10.5288 6.41648 11.1271C6.42004 11.3529 6.42469 11.5941 6.30437 11.7948C6.11762 12.1454 5.67273 12.3297 5.29348 12.2069C5.03891 12.135 4.86555 11.9239 4.67441 11.7554C3.23695 10.4142 1.78336 9.0897 0.381719 7.71076C0.28082 7.60986 0.166797 7.51744 0.0973438 7.39029C0.0369141 7.28365 0.0128516 7.16142 0 7.04111V6.97767C0.00765625 6.78244 0.0738281 6.58447 0.215742 6.44583C1.68355 4.99525 3.20906 3.60509 4.71816 2.19798C4.85324 2.07794 4.97629 1.93958 5.1368 1.85208ZM5.28719 2.46568C3.72613 3.92119 2.1473 5.35837 0.628633 6.85845C0.567383 6.93173 0.567656 7.06079 0.627813 7.13462C2.14676 8.63443 3.72559 10.0719 5.28664 11.5274C5.36293 11.6004 5.45863 11.6822 5.57293 11.6576C5.7277 11.6447 5.84281 11.4946 5.83324 11.3426C5.83434 10.5868 5.83297 9.83072 5.83379 9.07494C5.8327 8.97732 5.86332 8.87396 5.94508 8.8138C6.04133 8.73341 6.1734 8.74736 6.28988 8.749C7.5477 8.76021 8.8077 8.87997 10.0357 9.15806C10.631 9.29669 11.22 9.46923 11.7846 9.70494C12.3121 9.92669 12.8231 10.2015 13.2601 10.5747C13.1936 10.2775 13.1029 9.98603 12.9877 9.70384C12.8983 9.44298 12.7646 9.20072 12.644 8.95353C12.5062 8.72794 12.381 8.49306 12.2183 8.28388C11.0261 6.60224 9.06855 5.5249 7.03008 5.30451C6.72191 5.25474 6.40883 5.26814 6.09875 5.24189C5.95027 5.23122 5.83105 5.09423 5.83488 4.9463C5.8316 4.24439 5.83461 3.54193 5.83352 2.84001C5.8316 2.73912 5.84254 2.63658 5.81738 2.53787C5.78457 2.42083 5.67027 2.33744 5.54996 2.33306C5.44332 2.3213 5.35938 2.39896 5.28719 2.46568Z"
                                            fill="#020D0A" />
                                    </svg> Reply
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="blog-details__contact">
                    <div class="contact__form">
                        <h3 class="text-capitalize mb-10">Post a comment</h3>
                        <h6 class="mb-20">Your email address will not be published. Required fields are marked*</h6>
                        <form action="#">
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
                            <textarea name="#" id="#" placeholder="Write your comment"></textarea>
                            <button class="btn-one transition">Submit Now<i
                                    class="fa-regular fa-arrow-right ml-10"></i></button>
                        </form>
                    </div>
                </div>
                <div class="bor-bottom"></div>
                <!-- Blog area start here -->
                <section class="blog-area pt-60">
                    <div class="container">
                        <div class="section-header__wrp mb-80">
                            <div class="section-header-two">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Our Blog</h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">read our
                                    latest blogs
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Explore our latest
                                blogs
                                for expert insights on navigating the <br> dynamic world of SEO.</p>
                        </div>
                        <div class="swiper blog__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog__item">
                                        <a href="{{ route('blogDetails') }}" class="image d-block">
                                            <img src="{{ asset('assets/front/images/blog/blog-image3.jpg') }}"
                                                alt="image">
                                        </a>
                                        <h3 class="mb-10 mt-30"><a href="{{ route('blogDetails') }}" class="primary-hover">Why Is
                                                Blog
                                                SEO
                                                Important?</a></h3>
                                        <p>Search engines are a super important traffic source for blogs. Our own blog
                                            is living
                                            proof
                                            of the power of SEO. Sure,
                                            we get a fair... <a href="{{ route('blogDetails') }}" class="fw-500 primary-color">Read
                                                More</a></p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog__item">
                                        <a href="{{ route('blogDetails') }}" class="image d-block">
                                            <img src="{{ asset('assets/front/images/blog/blog-image6.jpg') }}"
                                                alt="image">
                                        </a>
                                        <h3 class="mb-10 mt-30"><a href="{{ route('blogDetails') }}" class="primary-hover">How to
                                                write
                                                blog posts for SEO?</a></h3>
                                        <p>It’s important to understand that you can’t just create any old blog post and
                                            expect
                                            your post to attract thousands of
                                            visits from... <a href="{{ route('blogDetails') }}" class="fw-500 primary-color">Read
                                                More</a></p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog__item">
                                        <a href="{{ route('blogDetails') }}" class="image d-block">
                                            <img src="{{ asset('assets/front/images/blog/blog-image5.jpg') }}"
                                                alt="image">
                                        </a>
                                        <h3 class="mb-10 mt-30"><a href="{{ route('blogDetails') }}" class="primary-hover">Why Is
                                                Blog
                                                SEO
                                                Important?</a></h3>
                                        <p>Search engines are a super important traffic source for blogs. Our own blog
                                            is living
                                            proof
                                            of the power of SEO. Sure,
                                            we get a fair... <a href="{{ route('blogDetails') }}" class="fw-500 primary-color">Read
                                                More</a></p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog__item">
                                        <a href="{{ route('blogDetails') }}" class="image d-block">
                                            <img src="{{ asset('assets/front/images/blog/blog-image8.jpg') }}"
                                                alt="image">
                                        </a>
                                        <h3 class="mb-10 mt-30"><a href="{{ route('blogDetails') }}" class="primary-hover">How to
                                                write
                                                blog posts for SEO?</a></h3>
                                        <p>It’s important to understand that you can’t just create any old blog post and
                                            expect
                                            your post to attract thousands of
                                            visits from... <a href="{{ route('blogDetails') }}" class="fw-500 primary-color">Read
                                                More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper__info mt-5">
                                <button class="blog__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                <div class="dot blog__dot"></div>
                                <button class="blog__arry-next active"><i
                                        class="fa-regular fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blog area end here -->
            </div>
        </section>
        <!-- Blog Details area end here -->

        <!-- Started area start here -->
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
                        <a href="pricing.html" class="btn-two">Get Started<i
                                class="fa-regular fa-arrow-right ml-10"></i></a>
                        <a href="about.html" class="btn-three ms-4">Learn More<i
                                class="fa-regular fa-arrow-right ml-10"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Started area end here -->
    </main>
@stop

@section('js')
@endsection