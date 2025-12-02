@extends('layouts.frontend.app')
@section('title')
    Home
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('style/home/style.css') }}">
@endsection
@section('content')

    <!-- Hero section start -->
    @include('frontend.home.component.hero')



    <section class="popular-destination-section section-padding pt-0 mt-4">
        <div class="car-shape float-bob-x">
            <img src="assets/img/destination/car.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title-area justify-content-between">
                <div class="section-title">
                    <span class="sub-title wow fadeInUp">
                        Best Recommended Places
                    </span>
                    <h2 class="wow fadeInUp wow" data-wow-delay=".3s">
                        Kost Coliving
                    </h2>
                </div>
                <a href="tour-details.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".5s">View All Tour<i
                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
            </div>
            <div class="row">
                @foreach ($colivings as $index => $coliving)
                    @php
                        // Calculate delay based on index
                        $delay = ($index % 4) * 0.2 + 0.2;
                    @endphp

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp d-flex" data-wow-delay="{{ $delay }}s">
                        <div class="destination-card-items">
                            <div class="destination-image">
                                @if ($coliving->image)
                                    <img src="{{ asset('image/coliving/' . $coliving->image) }}"
                                        alt="{{ $coliving->name }}">
                                @else
                                    <img src="{{ asset('assets/img/destination/0' . (($index % 8) + 1) . '.jpg') }}"
                                        alt="{{ $coliving->name }}">
                                @endif
                                <div class="heart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <div class="destination-content">
                                <ul class="meta">
                                    <li>
                                        <i class="fa-thin fa-location-dot"></i>
                                        {{ $coliving->location }}
                                    </li>
                                    <li class="rating">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p>4.7</p>
                                    </li>
                                </ul>
                                <h5>
                                    <a href="{{ url('places/' . $coliving->id) }}">
                                        {{ $coliving->name }}
                                    </a>

                                </h5>
                                <ul class="info">
                                    <li>
                                        <i class="fa-regular fa-clock"></i>
                                        {{ $coliving->discount_type ?? 'Flexible' }}
                                    </li>
                                    <li>
                                        <i class="fa-thin fa-users"></i>
                                        {{ $coliving->voucher_count ?? 0 }}+ Voucher
                                    </li>
                                </ul>
                                <div class="price">
                                    <h6 style="font-size: 15px">
                                        Rp{{ number_format($coliving->current_price, 0, ',', '.') }}<span>/bulan</span>
                                    </h6>
                                    <a href="{{ url('places/' . $coliving->id) }}" class="theme-btn style-2">
                                        Book
                                        <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>




    <!-- Destination-category Section Start -->
    <section class="destination-category-section section-padding pt-0">
        <div class="plane-shape float-bob-y">
            <img src="assets/img/destination/shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">Wonderful Place For You</span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                    Browse By Destination Category
                </h2>
            </div>
        </div>
        <div class="container-fluid">

            <div class="swiper category-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="destination-category-item">
                            <div class="category-image">
                                <img src="{{asset('image/coliving/rooms/1a.webp')}}" alt="img">
                                <div class="category-content">
                                    <h5>
                                        <a href="destination-details.html">Adventure</a>
                                    </h5>
                                    <p>6 Tour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-category-item">
                            <div class="category-image">
                                <img src="{{asset('image/coliving/rooms/2a.webp')}}" alt="img">
                                <div class="category-content">
                                    <h5>
                                        <a href="destination-details.html">Adventure</a>
                                    </h5>
                                    <p>6 Tour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-category-item">
                            <div class="category-image">
                                <img src="{{asset('image/coliving/rooms/3a.webp')}}" alt="img">
                                <div class="category-content">
                                    <h5>
                                        <a href="destination-details.html">Adventure</a>
                                    </h5>
                                    <p>6 Tour</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-dot4 mt-5">
                <div class="dot"></div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section section-padding  fix bg-cover"
        style="background-image: url(assets/img/about/about-bg.jpg);">
        <div class="right-shape float-bob-x">
            <img src="assets/img/about/right-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/img/about/01.png" alt="img" class="wow img-custom-anim-left">
                            <div class="border-image">
                                <img src="assets/img/about/border.png" alt="">
                            </div>
                            <div class="vdeo-item">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                                    <i class="fa-duotone fa-play"></i>
                                </a>
                                <h5>WACTH VIDEO </h5>
                            </div>
                            <div class="about-image-2">
                                <img src="assets/img/about/02.png" alt="img" class="wow img-custom-anim-top"
                                    data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="plane-shape float-bob-y">
                                    <img src="assets/img/about/plane-shape.png" alt="">
                                </div>
                                <div class="about-tour">
                                    <div class="icon">
                                        <img src="assets/img/icon/10.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>Luxury Tour</h4>
                                        <span>25 years of Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp">Let’s Go Together</span>
                                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                    Great opportunity for <br>
                                    adventure & travels
                                </h2>
                            </div>
                            <div class="about-area mt-4 mt-md-0">
                                <div class="line-image">
                                    <img src="assets/img/about/Line-image.png" alt="img">
                                </div>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".3s">
                                    <div class="icon">
                                        <img src="assets/img/icon/05.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Exclusive Trip
                                        </h5>
                                        <p>
                                            There are many variations of passages <br> of available, but the majority
                                        </p>
                                    </div>
                                </div>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="assets/img/icon/06.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Safety first always
                                        </h5>
                                        <p>
                                            There are many variations of passages <br> of available, but the majority
                                        </p>
                                    </div>
                                </div>
                                <div class="about-items wow fadeInUp wow" data-wow-delay=".7s">
                                    <div class="icon">
                                        <img src="assets/img/icon/07.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Professional Guide
                                        </h5>
                                        <p>
                                            There are many variations of passages <br> of available, but the majority
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Section Start -->
    <section class="cta-section section-padding">
        <div class="mobile-shape">
            <img src="assets/img/mobile.png" alt="img">
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                    <div class="cta-items">
                        <div class="cta-text">
                            <h2>35% OFF</h2>
                            <p>
                                Explore The World tour <br>
                                Hotel Booking.
                            </p>
                        </div>
                        <a href="tour-details.html" class="theme-btn">BOOK NOW <i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        <div class="cta-image">
                            <img src="assets/img/bag-shape.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
                    <div class="cta-items style-2">
                        <div class="cta-text">
                            <h2>35% OFF</h2>
                            <p>
                                On Flight Ticket Grab <br>
                                This Now.
                            </p>
                        </div>
                        <a href="tour-details.html" class="theme-btn">BOOK NOW <i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        <div class="cta-image">
                            <img src="assets/img/plane-shape.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular-destination Section Start -->


    <!-- Deals-offer Section Start -->
    <section class="deals-offer-section section-padding fix bg-cover"
        style="background-image: url(assets/img/offer/bg.jpg);">
        <div class="deals-offer-wrapper">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="price-items">
                        <div class="price-image wow fadeInUp wow" data-wow-delay=".2s">
                            <img src="assets/img/offer/price.png" alt="img">
                        </div>
                        <div class="coming-soon-timer">
                            <div class="timer-content wow fadeInUp" data-wow-delay=".2s">
                                <h2 id="day">00</h2>
                                <p>Days</p>
                            </div>
                            <div class="timer-content wow fadeInUp" data-wow-delay=".4s">
                                <h2 id="hour">00</h2>
                                <p>Hours</p>
                            </div>
                            <div class="timer-content wow fadeInUp" data-wow-delay=".6s">
                                <h2 id="min">00</h2>
                                <p>Minutes</p>
                            </div>
                            <div class="timer-content wow fadeInUp" data-wow-delay=".8s">
                                <h2 id="sec">00</h2>
                                <p>Secound</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-title-area">
                        <div class="section-title">
                            <span class="sub-title text-white wow fadeInUp">
                                Deals & Offers
                            </span>
                            <h2 class="text-white wow fadeInUp wow" data-wow-delay=".3s">
                                Incredible Last-Minute Offers
                            </h2>
                        </div>
                        <div class="array-button justify-content-center wow fadeInUp wow" data-wow-delay=".5s">
                            <button class="array-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></button>
                            <button class="array-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="offer-slide-items">
                        <div class="swiper offer-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="offer-items">
                                        <div class="offer-image">
                                            <img src="assets/img/offer/01.jpg" alt="img">
                                            <div class="offer-content">
                                                <ul class="offer-btn">
                                                    <li>-50% Off</li>
                                                    <li class="bg-color">Featured</li>
                                                </ul>
                                                <div class="content">
                                                    <h3>
                                                        <a href="tour-details.html">
                                                            Nepal City
                                                        </a>
                                                    </h3>
                                                    <span>
                                                        $160
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="offer-items">
                                        <div class="offer-image">
                                            <img src="assets/img/offer/02.jpg" alt="img">
                                            <div class="offer-content">
                                                <ul class="offer-btn">
                                                    <li>-50% Off</li>
                                                </ul>
                                                <div class="content">
                                                    <h3>
                                                        <a href="tour-details.html">
                                                            Mishor
                                                        </a>
                                                    </h3>
                                                    <span>
                                                        $160
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="offer-items">
                                        <div class="offer-image">
                                            <img src="assets/img/offer/03.jpg" alt="img">
                                            <div class="offer-content">
                                                <ul class="offer-btn">
                                                    <li>-50% Off</li>
                                                    <li class="bg-color">Featured</li>
                                                </ul>
                                                <div class="content">
                                                    <h3>
                                                        <a href="tour-details.html">
                                                            China City
                                                        </a>
                                                    </h3>
                                                    <span>
                                                        $160
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="offer-items">
                                        <div class="offer-image">
                                            <img src="assets/img/offer/04.jpg" alt="img">
                                            <div class="offer-content">
                                                <ul class="offer-btn">
                                                    <li>-50% Off</li>
                                                </ul>
                                                <div class="content">
                                                    <h3>
                                                        <a href="tour-details.html">
                                                            New York City
                                                        </a>
                                                    </h3>
                                                    <span>
                                                        $160
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section section-padding fix bg-cover">
        <div class="bag-shape float-bob-x">
            <img src="assets/img/testimonial/bag-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">
                    Testimonial
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                    Our Clients Feedback
                </h2>
            </div>
            <div class="testimonial-wrapper">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>
                                    Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl
                                    at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.
                                </p>
                                <div class="client-info-items">
                                    <div class="client-info">
                                        <div class="client-image">
                                            <img src="assets/img/testimonial/client-1.png" alt="img">
                                        </div>
                                        <div class="text">
                                            <h4>Kristin Watson</h4>
                                            <p>Web Designer</p>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 45 45" fill="none">
                                            <path
                                                d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                                fill="#FFA31A" />
                                            <path
                                                d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                                fill="#FFA31A" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items style-2">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>
                                    Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl
                                    at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.
                                </p>
                                <div class="client-info-items">
                                    <div class="client-info">
                                        <div class="client-image">
                                            <img src="assets/img/testimonial/client-2.png" alt="img">
                                        </div>
                                        <div class="text">
                                            <h4>Wade Warren</h4>
                                            <p>President of Sales</p>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 45 45" fill="none">
                                            <path
                                                d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                                fill="#1CA8CB" />
                                            <path
                                                d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                                fill="#1CA8CB" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p>
                                    Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl
                                    at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.
                                </p>
                                <div class="client-info-items">
                                    <div class="client-info">
                                        <div class="client-image">
                                            <img src="assets/img/testimonial/client-3.png" alt="img">
                                        </div>
                                        <div class="text">
                                            <h4>Brooklyn Simmons</h4>
                                            <p>President of Sales</p>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                            viewBox="0 0 45 45" fill="none">
                                            <path
                                                d="M21.5998 15.1662C21.4359 21.2706 20.2326 27.1028 17.1618 32.4687C15.0391 36.1766 11.8636 38.7708 8.31789 40.9881C8.09312 41.1284 7.80413 41.3886 7.55907 41.1588C7.2836 40.9002 7.52189 40.5673 7.66216 40.3087C8.9449 37.9646 10.3121 35.6645 11.4292 33.2309C12.6528 30.564 13.6212 27.811 14.2567 24.9396C14.4257 24.1774 14.255 24.0929 13.535 24.2484C7.64188 25.526 2.16112 21.8976 1.00852 15.9858C-0.0849304 10.38 3.84608 4.78603 9.51275 3.88694C15.9196 2.86954 21.5491 7.65063 21.5998 14.1522C21.6015 14.4902 21.5998 14.8282 21.5998 15.1662Z"
                                                fill="#FFA31A" />
                                            <path
                                                d="M44.25 15.2202C44.0793 21.5916 42.7949 27.6571 39.3912 33.1581C37.3175 36.5077 34.3228 38.8501 31.0746 40.9288C30.816 41.0945 30.4729 41.4375 30.1856 41.1198C29.9253 40.8325 30.2346 40.4877 30.3884 40.1987C31.6559 37.8462 33.0401 35.5562 34.1403 33.1142C35.3351 30.4642 36.2917 27.7382 36.9153 24.8939C37.0775 24.1536 36.8967 24.0827 36.2224 24.2415C30.2836 25.6358 24.4277 21.6338 23.5556 15.4348C22.7985 10.0537 26.7751 4.68115 32.1359 3.89022C38.7118 2.92353 44.2162 7.65053 44.25 14.2923C44.25 14.6016 44.25 14.9109 44.25 15.2202Z"
                                                fill="#FFA31A" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="array-button">
                        <button class="array-prevs">Previews</button>
                        <button class="array-nexts">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Travel-Feature-Section Start -->
    <section class="travel-feature-section section-padding fix"
        style="background-image: url('assets/img/travel-bg.jpg');">
        <div class="shape-1 float-bob-y">
            <img src="assets/img/plane-shape1.png" alt="img">
        </div>
        <div class="shape-2 float-bob-x">
            <img src="assets/img/plane-shape2.png" alt="img">
        </div>
        <div class="container">
            <div class="feature-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="feature-content">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp">
                                    Are you ready to travel?
                                </span>
                                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                                    World Leading Online Tour Booking Platform
                                </h2>
                            </div>
                            <p class="wow fadeInUp wow" data-wow-delay=".3s">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable.
                            </p>
                            <div class="feature-area">
                                <div class="line-shape">
                                    <img src="assets/img/line-shape.png" alt="img">
                                </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".5s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img src="assets/img/icon/08.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Most Adventure <Br>
                                                Tour Ever
                                            </h5>
                                        </div>
                                    </div>
                                    <ul class="circle-icon">
                                        <li>
                                            <i class="fa-solid fa-badge-check"></i>
                                        </li>
                                        <li>
                                            <span>
                                                There are many variations of <br>
                                                passages of available,
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="feature-items wow fadeInUp wow" data-wow-delay=".7s">
                                    <div class="feature-icon-item">
                                        <div class="icon">
                                            <img src="assets/img/icon/09.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Real Tour Starts <br>
                                                from Here
                                            </h5>
                                        </div>
                                    </div>
                                    <ul class="circle-icon">
                                        <li>
                                            <i class="fa-solid fa-badge-check"></i>
                                        </li>
                                        <li>
                                            <span>
                                                There are many variations of <br>
                                                passages of available,
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="contact.html" class="theme-btn wow fadeInUp wow" data-wow-delay=".9s">Contact US<i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-image wow img-custom-anim-left">
                            <img src="assets/img/man-image.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="team-section fix section-padding">
        <div class="jip-shape float-bob-x">
            <img src="assets/img/team/jip.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">
                    Meet with Guide
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">Tour Guide</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".2s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="assets/img/team/01.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Darlene Robertson</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".4s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="assets/img/team/02.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Leslie Alexander</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".6s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="assets/img/team/03.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Ralph Edwards</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".8s">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="assets/img/team/04.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h4><a href="team-details.html">Kathryn Murphy</a></h4>
                            <p>Tourist Guide</p>
                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta-bg-Section Start -->
    <section class="cta-bg-section fix bg-cover" style="background-image: url({{ asset('image/bg2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="cta-wrapper">
                    <div class="section-title text-center">
                        <span class="sub-title text-white wow fadeInUp">
                            Watch Our Story
                        </span>
                        <h2 class="text-white wow fadeInUp wow" data-wow-delay=".3s">
                            We Provide the Best Tour <br>
                            Facilities
                        </h2>
                    </div>
                    <div class="cta-btn wow fadeInUp wow" data-wow-delay=".5s">
                        <a href="tour-details.html" class="theme-btn">Find Out More<i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        <div class="watch-btn">
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-delay=".7s"
                                class="video-btn video-popup">
                                <i class="fa-duotone fa-play"></i></a>
                            <h6>
                                Watch Video
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News-Section Start -->
    <section class="news-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">
                    News & Updates
                </span>
                <h2 class="wow fadeInUp wow" data-wow-delay=".2s">
                    Our Latest News & Articles
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/01.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
                    <div class="news-card-items">
                        <div class="news-content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa-regular fa-calendar-days"></i>
                                    December 02, 2024
                                </li>
                                <li>
                                    <i class="fa-solid fa-tag"></i>
                                    New york City
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">
                                    Including Animation In Your
                                    Design System
                                </a>
                            </h3>
                            <a href="news-details.html" class="link-btn">Read More <i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".7s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/02.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa-regular fa-calendar-days"></i>
                                    December 02, 2024
                                </li>
                                <li>
                                    <i class="fa-solid fa-tag"></i>
                                    New york City
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">
                                    Including Animation In Your
                                    Design System
                                </a>
                            </h3>
                            <a href="news-details.html" class="link-btn">Read More <i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".5s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/02.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp wow" data-wow-delay=".7s">
                    <div class="news-card-items">
                        <div class="news-content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa-regular fa-calendar-days"></i>
                                    December 02, 2024
                                </li>
                                <li>
                                    <i class="fa-solid fa-tag"></i>
                                    New york City
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">
                                    Including Animation In Your
                                    Design System
                                </a>
                            </h3>
                            <a href="news-details.html" class="link-btn">Read More <i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section section-padding pt-0">
        <div class="left-shape">
            <img src="assets/img/brand/shape.png" alt="">
        </div>
        <div class="container">
            <div class="brand-wrapper">
                <h4 class="brand-title wow fadeInUp" data-wow-delay=".3s">1k + Brands Trust Us</h4>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/01.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/01.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/01.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/01.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/01.png" alt="brand-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}

    <script>
        // Inisialisasi Swiper
        const swiper = new Swiper('.hero-slider', {
            // Optional parameters
            loop: true,
            speed: 1000,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },

            // Autoplay
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Efek parallax pada background

    </script>
@endsection
