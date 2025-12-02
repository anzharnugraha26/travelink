@extends('layouts.frontend.app')
@section('title')
    Home
@endsection
@section('style')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('style/home/style.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
@endsection
@section('content')
    <section class="breadcrumb-wrapper fix bg-cover"
        style="background-image: url({{ asset('image/coliving/' . $coliving->image) }});">
        <div class="container">
            <div class="row">
                <div class="page-heading">
                    <h2>{{ $coliving->name }}</h2>
                    <ul class="breadcrumb-list">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><i class="fa-solid fa-chevrons-right"></i></li>
                        <li>{{ $coliving->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="destination-details-section fix section-padding">
        <div class="container">
            <div class="destination-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="destination-details-items">
                            <div class="row g-4 mt-4 mb-4">
                                @if ($detail->images && count($detail->images) > 0)
                                    @php
                                        // Urutkan images berdasarkan order
                                        $sortedImages = collect($detail->images)->sortBy('order');
                                        // Ambil maksimal 6 gambar untuk ditampilkan
                                        $displayImages = $sortedImages->take(6);
                                        // Hitung jumlah gambar
                                        $imageCount = $displayImages->count();
                                    @endphp

                                    @if ($imageCount == 1)
                                        <!-- Jika hanya 1 gambar -->
                                        <div class="col-12">
                                            <div class="details-image">
                                                <a href="{{ asset($displayImages->first()['url']) }}" class="glightbox"
                                                    data-gallery="room-gallery"
                                                    data-title="{{ $displayImages->first()['alt'] ?? 'Room Image' }}">
                                                    <img src="{{ asset($displayImages->first()['url']) }}"
                                                        alt="{{ $displayImages->first()['alt'] ?? 'Room Image' }}"
                                                        class="w-100 rounded-3" style="height: 400px; object-fit: cover;">
                                                </a>
                                            </div>
                                        </div>
                                    @elseif($imageCount == 2)
                                        <!-- Jika 2 gambar - layout 2 kolom -->
                                        @foreach ($displayImages as $image)
                                            <div class="col-md-6">
                                                <div class="details-image">
                                                    <a href="{{ asset($displayImages->first()['url']) }}" class="glightbox"
                                                        data-gallery="room-gallery"
                                                        data-title="{{ $displayImages->first()['alt'] ?? 'Room Image' }}">
                                                        <img src="{{ asset($image['url']) }}"
                                                            alt="{{ $image['alt'] ?? 'Room Image' }}"
                                                            class="w-100 rounded-3"
                                                            style="height: 300px; object-fit: cover;">
                                                    </a>

                                                </div>
                                            </div>ß
                                        @endforeach
                                    @elseif($imageCount == 3)
                                        <!-- Jika 3 gambar - layout khusus -->
                                        <div class="col-md-8">
                                            <div class="details-image h-100">
                                                <a href="{{ asset($displayImages->first()['url']) }}" class="glightbox"
                                                    data-gallery="room-gallery"
                                                    data-title="{{ $displayImages->first()['alt'] ?? 'Room Image' }}">
                                                    <img src="{{ asset($displayImages->first()['url']) }}"
                                                        alt="{{ $displayImages->first()['alt'] ?? 'Room Image' }}"
                                                        class="w-100 h-100 rounded-3"
                                                        style="height: 400px; object-fit: cover;"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row g-3 h-100">
                                                @foreach ($displayImages->skip(1) as $image)
                                                    <div class="col-12">
                                                        <div class="details-image">
                                                            <a href="{{ asset($displayImages->first()['url']) }}"
                                                                class="glightbox" data-gallery="room-gallery"
                                                                data-title="{{ $displayImages->first()['alt'] ?? 'Room Image' }}">
                                                                <img src="{{ asset($image['url']) }}"
                                                                    alt="{{ $image['alt'] ?? 'Room Image' }}"
                                                                    class="w-100 rounded-3"
                                                                    style="height: 190px; object-fit: cover;">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <!-- Jika 4 gambar atau lebih - layout grid -->
                                        @foreach ($displayImages as $index => $image)
                                            @if ($imageCount == 4)
                                                <div class="col-md-6">
                                                @else
                                                    <div class="col-md-4">
                                            @endif
                                            <div class="details-image">
                                                <a href="{{ asset($displayImages->first()['url']) }}" class="glightbox"
                                                    data-gallery="room-gallery"
                                                    data-title="{{ $displayImages->first()['alt'] ?? 'Room Image' }}">
                                                    <img src="{{ asset($image['url']) }}"
                                                        alt="{{ $image['alt'] ?? 'Room Image' }}" class="w-100 rounded-3"
                                                        style="height: 250px; object-fit: cover;"
                                                        onclick="openImageModal('{{ asset($image['url']) }}')">
                                                </a>
                                            </div>
                            </div>
                            @endforeach
                            @endif

                            <!-- Tombol lihat semua gambar jika lebih dari 6 -->
                            @if (count($detail->images) > 6)
                                <div class="col-12 text-center mt-3">
                                    <button type="button" class="btn btn-outline-primary" onclick="openGalleryModal()">
                                        Lihat Semua {{ count($detail->images) }} Gambar
                                    </button>
                                </div>
                            @endif
                        @else
                            <!-- Placeholder jika tidak ada gambar -->
                            <div class="col-12">
                                <div class="details-image text-center bg-light rounded-3 p-5">
                                    <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                    <p class="text-muted">Tidak ada gambar tersedia</p>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="details-content">
                            <h2>{{ $coliving->name }}</h2>
                            <p class="mt-3">
                                {{ $detail->description }}
                            </p>

                        </div>
                        <div class="map-area">
                            <h3>View in Map</h3>
                            <div class="google-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="map-area">
                            <h3>client review</h3>
                            <ul class="review-items">
                                <li>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/destails/client-1.jpg') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h5>Shikhon Islam</h5>
                                        <p>Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                            Ipsum is simply dummy</p>
                                        <span class="reply-icon">
                                            <i class="fa-solid fa-reply"></i> Reply
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/destails/client-2.jpg') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h5>Ralph Edwards</h5>
                                        <p>
                                            Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed sit amet finibus eros.
                                        </p>
                                        <span class="reply-icon">
                                            <i class="fa-solid fa-reply"></i> Reply
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/destails/client-3.jpg') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h5>Sohel Islam</h5>
                                        <p>
                                            Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                            Ipsum is simply dummy
                                        </p>
                                        <span class="reply-icon">
                                            <i class="fa-solid fa-reply"></i> Reply
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="map-area ratting-items">
                            <h3>Add Your Reviews</h3>
                            <ul>
                                <li>
                                    Services
                                    <div class="star">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </li>
                                <li>
                                    Hotel
                                    <div class="star">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </li>
                                <li>
                                    Places
                                    <div class="star">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </li>
                            </ul>
                            <ul class="mb-4">
                                <li>
                                    Safety
                                    <div class="star">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </li>
                                <li>
                                    Foods
                                    <div class="star">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </li>
                                <li>
                                    Guides
                                    <div class="star">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </li>
                            </ul>
                            <form action="#" id="contact-form1" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="phone" id="phone"
                                                placeholder="Your phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" name="email2" id="email21"
                                                placeholder="Your email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Your comments..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="theme-btn text-center">
                                            Submit Reviews <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sideber">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Search Here</h4>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Contact for Booking</h4>
                            </div>
                            <div class="desti-booking-form">
                                <form action="#" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name11"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email212"
                                                    placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message11" placeholder="Type Comment Here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="theme-btn text-center">
                                                Send Now <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Recent Tours</h4>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/img/destails/pp1.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h6>
                                            <a href="news-details.html">
                                                Enrich Your Mind Envision Your Future Education for Success
                                            </a>
                                        </h6>
                                        <span class="price-text">
                                            From: <b>$171</b>
                                        </span>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/img/destails/pp2.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h6>
                                            <a href="news-details.html">
                                                Meet Skeleton Svelte Taile Sindey For Reactive UIs
                                            </a>
                                        </h6>
                                        <span class="price-text">
                                            From: <b>$171</b>
                                        </span>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/img/destails/pp3.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h6>
                                            <a href="news-details.html">
                                                Meet Skeleton Svelte Taile Sindey For Reactive UIs
                                            </a>
                                        </h6>
                                        <span class="price-text">
                                            From: <b>$171</b>
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
    </section>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
    });
    </script>
@endsection
