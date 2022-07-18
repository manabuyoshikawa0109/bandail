@extends('user.layouts.app')

@push('links')
<link href="/assets/user/css/top.css?{{ now()->format('YmdHis') }}" rel="stylesheet">
@endpush

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='/assets/user/images/top-banner-1.png'>">
            <img class="img-fluid" src="/assets/user/images/top-banner-1.png" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='/assets/user/images/top-banner-2.jpeg'>">
            <img class="img-fluid" src="/assets/user/images/top-banner-2.jpeg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='/assets/user/images/top-banner-3.png'>">
            <img class="img-fluid" src="/assets/user/images/top-banner-3.png" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                </div>
                <h5 class="mb-3">Happy Customers</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                </div>
                <h5 class="mb-3">Project Done</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-award text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                </div>
                <h5 class="mb-3">Awards Win</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                </div>
                <h5 class="mb-3">Expert Workers</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->

<div class="container-fluid bg-light py-5">
    <div class="container px-1">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">NEWS</h6>
            <h1 class="mb-4">お知らせ</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-12 col-lg-8 offset-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item">
                        <div class="d-flex flex-wrap w-100">
                            <div class="d-flex w-100">
                                <div class="d-flex align-items-center flex-wrap w-100">
                                    <span class="me-3">2022.7.17</span>
                                    <span class="me-3 bg-primary text-white px-3 border-radius-5">お知らせ</span>
                                    <span class="flex-grow-1 d-block d-sm-inline-block mt-2 mt-sm-0">夏季休暇について</span>
                                </div>
                                <span class="my-auto"><i class="fas fa-chevron-right opacity-80"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <div class="d-flex flex-wrap w-100">
                            <div class="d-flex w-100">
                                <div class="d-flex align-items-center flex-wrap w-100">
                                    <span class="me-3">2022.7.17</span>
                                    <span class="me-3 bg-primary text-white px-3 border-radius-5">お知らせ</span>
                                    <span class="flex-grow-1 d-block d-sm-inline-block mt-2 mt-sm-0">夏季休暇について</span>
                                </div>
                                <span class="my-auto"><i class="fas fa-chevron-right opacity-80"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <div class="d-flex flex-wrap w-100">
                            <div class="d-flex w-100">
                                <div class="d-flex align-items-center flex-wrap w-100">
                                    <span class="me-3">2022.7.17</span>
                                    <span class="me-3 bg-primary text-white px-3 border-radius-5">お知らせ</span>
                                    <span class="flex-grow-1 d-block d-sm-inline-block mt-2 mt-sm-0">夏季休暇について</span>
                                </div>
                                <span class="my-auto"><i class="fas fa-chevron-right opacity-80"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5 faq">
    <div class="container px-1">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">FAQs</h6>
            <h1 class="mb-4">よくあるご質問</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-12 col-lg-10 offset-lg-1 wow fadeInUp" data-wow-delay="0.1s">
                <div class="accordion accordion-flush px-xl-5" id="faqlist">
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                <i class="bi bi-question-circle question-icon"></i>
                                キャンセル代はいつ頃からかかりますか？
                            </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                キャンセル代は試合当日3日前から発生します。前日まではダブルス3,300円・シングルス3,000円、当日キャンセルはダブルス5,000円・シングルス4,400円です。
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                <i class="bi bi-question-circle question-icon"></i>
                                1日の試合で最大何種目出場できますか？
                            </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                1日最大2種目出場できます。3種目以上の出場はできません。
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                <i class="bi bi-question-circle question-icon"></i>
                                雨が降った場合はどうなりますか？
                            </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                当日の朝7時までに試合の有無を登録していただいているLINE、もしくはメールアドレス宛てに連絡させていただきます。
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                <i class="bi bi-question-circle question-icon"></i>
                                コロナで政府より緊急事態宣言がでた場合はどうなりますか？
                            </button>
                        </h3>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <i class="bi bi-question-circle question-icon"></i>
                                当大会は市営コートを利用して運営しておりますので、緊急事態宣言により市営コートが使用できなくなった場合は大会を中止することがあります。
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                <i class="bi bi-question-circle question-icon"></i>
                                会場の近くにコンビニはありますか？
                            </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                会場によって近くにコンビニがないところもあります。また試合の進行状況によりコンビニに行く時間がないこともありますので、事前に買ってきていただくことをおすすめしております。
                            </div>
                        </div>
                    </div><!-- # Faq item-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="/assets/user/images/about.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">About Us</h6>
                    <h1 class="mb-4">25+ Years Experience In Solar & Renewable Energy Industry</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Diam dolor diam ipsum</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Services</h6>
            <h1 class="mb-4">We Are Pioneers In The World Of Renewable Energy</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-1.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Solar Panels</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-2.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Wind Turbines</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-3.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Hydropower Plants</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-4.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Solar Panels</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-5.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Wind Turbines</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-6.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Hydropower Plants</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Why Choose Us!</h6>
                    <h1 class="mb-4">Complete Commercial & Residential Solar Systems</h1>
                    <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Quality</p>
                                    <h5 class="mb-0">Services</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-user-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Expert</p>
                                    <h5 class="mb-0">Workers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-drafting-compass text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Free</p>
                                    <h5 class="mb-0">Consultation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-headphones text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Customer</p>
                                    <h5 class="mb-0">Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="/assets/user/images/feature.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Projects</h6>
            <h1 class="mb-4">Visit Our Latest Solar And Renewable Energy Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Solar Panels</li>
                    <li class="mx-2" data-filter=".second">Wind Turbines</li>
                    <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-6.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/assets/user/images/img-600x400-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Solar Panels</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-5.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/assets/user/images/img-600x400-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Wind Turbines</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item third">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-4.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/assets/user/images/img-600x400-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Hydropower Plants</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-3.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/assets/user/images/img-600x400-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Solar Panels</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-2.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/assets/user/images/img-600x400-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Wind Turbines</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item third">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/user/images/img-600x400-1.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/assets/user/images/img-600x400-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Hydropower Plants</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Quote Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="/assets/user/images/quote.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">Free Quote</h6>
                    <h1 class="mb-4">Get A Free Quote</h1>
                    <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 2</option>
                                    <option value="3">Service 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Team Member</h6>
            <h1 class="mb-4">Experienced Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/user/images/team-1.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/user/images/team-2.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/user/images/team-3.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Testimonial</h6>
            <h1 class="mb-4">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/user/images/testimonial-1.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/user/images/testimonial-2.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/user/images/testimonial-3.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection
