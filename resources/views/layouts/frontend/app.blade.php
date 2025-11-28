<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    @include('layouts.frontend.component.style')
    @yield('style')
    <body>

        <!-- Preloader Start -->
       <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                </div>
                {{-- <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                </div> --}}
                <p class="text-center">Loading</p>
            </div>

        </div>

        <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!--<< Mouse Cursor Start >>-->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="contact.html" class="theme-btn"> Request A Quote <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header top section start -->


        <!-- Header Section Start -->
        @include('layouts.frontend.component.header')

        <!-- Search Area Start -->


        @yield('content')

        <!-- Footer Section Start -->
        <footer class="footer-section fix bg-cover" style="background-image: url(assets/img/footer/footer-bg.jpg);">
            <div class="container">
                <div class="footer-widget-wrapper-new">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-6 wow fadeInUp wow" data-wow-delay=".2s">
                            <div class="single-widget-items text-center">
                                <div class="widget-head">
                                    <a href="index.html">
                                        <img src="assets/img/logo/white-log.svg" alt="img">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <h3>Subscribe Newsletter</h3>
                                    <p>Get Our Latest Deals and Update</p>
                                    <div class="footer-input">
                                        <input type="email" id="email2" placeholder="Your email address">
                                        <button class="newsletter-btn theme-btn" type="submit">
                                            Subscribe <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </button>
                                    </div>
                                    <div class="social-icon d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 ps-lg-5 wow fadeInUp wow" data-wow-delay=".4s">
                            <div class="single-widget-items">
                                <div class="widget-head">
                                   <h4>Quick Links</h4>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="index.html">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news.html">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tour-details.html">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tour-details.html">
                                            Tour
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-lg-5 wow fadeInUp wow" data-wow-delay=".6s">
                            <div class="single-widget-items">
                                <div class="widget-head">
                                   <h4>Services</h4>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="tour-details.html">
                                            Wanderlust Adventures
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tour-details.html">
                                            Globe Trotters Travel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tour-details.html">
                                            Odyssey Travel Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tour-details.html">
                                            Jet Set Journeys
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tour-details.html">
                                            Dream Destinations Travel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-xl-5 wow fadeInUp wow" data-wow-delay=".6s">
                            <div class="single-widget-items">
                                <div class="widget-head">
                                   <h4>Contact Us</h4>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-items">
                                        <div class="icon">
                                            <i class="fa-regular fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h6>9550 Bolsa Ave #126, <br>
                                                United States
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="contact-items">
                                        <div class="icon">
                                         <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                         <h6>
                                             <a href="mailto:info@touron.com">info@touron.com</a>
                                         </h6>
                                      </div>
                                    </div>
                                    <div class="contact-items">
                                       <div class="icon">
                                          <i class="fa-solid fa-phone"></i>
                                       </div>
                                       <div class="content">
                                           <h6>
                                               <a href="tel:+256214203215">+256 214 203 215</a> <br>
                                               <a href="tel:+10987654321">+1 098 765 4321</a>
                                           </h6>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-wrapper">
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            Copyright © <span>Turmet,</span> All Rights Reserved.
                        </p>
                        <ul class="bottom-list wow fadeInUp" data-wow-delay=".5s">
                            <li>Terms of use</li>
                            <li>Privacy Environmental Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        @include('layouts.frontend.component.script')
        @yield('script')
    </body>
</html>
