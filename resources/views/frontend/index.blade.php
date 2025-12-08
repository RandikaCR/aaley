@extends('layouts.frontend')

@section('page_title')
    Welcome
@endsection

@section('content')

    <!-- slider-area -->
    <section class="slider__area">
        <div class="tg__slider-active swiper-container" id="bannerSlider" data-swiper-options='{
                "loop": true,
                "effect": "fade",
                "autoplay": { "delay": 8000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "768": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "992": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "1400": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    }
                }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider__bg" data-background="{{ asset('assets/common/images/banner_bg.jpg') }}">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider__content">
                                        <h2 class="title al-text-primary anek-tamil-600">True Love for true Cinnamon</h2>
                                        <p class="sub-title al-text-secondary">From the lush landscapes of Sri Lanka comes Aaley Ceylon — <br>a celebration of purity, craft, and devotion to the world’s finest cinnamon.</p>
                                        <a href="{{ url('/products') }}" class="tg-btn red-btn">Explore Our Collection
                                            <span>
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                                        <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner__images position-relative">
                                        <div class="element-to-zoom">
                                            <img src="{{ asset('assets/common/images/banner-img-1.png') }}" alt="img" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                        </div>

                                        <div class="banner-swing-img-top-left" style="position: absolute; top: 0; left: -60px; width: 60%; z-index: -1;" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="700">
                                            <img src="{{ asset('assets/common/images/plant.png') }}" alt="img">
                                        </div>
                                        <div class="banner-swing-img-bottom-right" style="position: absolute; bottom: 0; right: -180px; width: 60%; z-index: -1;" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="1000">
                                            <img src="{{ asset('assets/common/images/plant-3.png') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider__bg" data-background="{{ asset('assets/common/images/banner_bg.jpg') }}">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider__content">
                                        <h2 class="title al-text-primary anek-tamil-600">True Love for true Cinnamon</h2>
                                        <p class="sub-title al-text-secondary">From the lush landscapes of Sri Lanka comes Aaley Ceylon — <br>a celebration of purity, craft, and devotion to the world’s finest cinnamon.</p>
                                        <a href="{{ url('/products') }}" class="tg-btn red-btn">Explore Our Collection
                                            <span>
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                                        <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner__images position-relative">
                                        <div class="element-to-zoom">
                                            <img src="{{ asset('assets/common/images/banner-img-2.png') }}" alt="img" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                        </div>

                                        <div class="banner-swing-img-top-left" style="position: absolute; top: 0; left: -60px; width: 60%; z-index: -1;" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="700">
                                            <img src="{{ asset('assets/common/images/plant.png') }}" alt="img">
                                        </div>
                                        <div class="banner-swing-img-bottom-right" style="position: absolute; bottom: 0; right: -180px; width: 60%; z-index: -1;" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="1000">
                                            <img src="{{ asset('assets/common/images/plant-3.png') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider__social-wrap">
            <h6 class="title al-text-primary">Follow</h6>
            <ul class="list-wrap slider__social">
                <li>
                    <a href="https://www.facebook.com/" class="al-text-primary" target="_blank">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0C4.02948 0 0 4.02948 0 9C0 13.2206 2.90592 16.7623 6.82596 17.735V11.7504H4.97016V9H6.82596V7.81488C6.82596 4.75164 8.21232 3.3318 11.2198 3.3318C11.79 3.3318 12.7739 3.44376 13.1764 3.55536V6.04836C12.964 6.02604 12.595 6.01488 12.1367 6.01488C10.661 6.01488 10.0908 6.57396 10.0908 8.02728V9H13.0306L12.5255 11.7504H10.0908V17.9341C14.5472 17.3959 18.0004 13.6015 18.0004 9C18 4.02948 13.9705 0 9 0Z" fill="currentColor" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" class="al-text-primary" target="_blank">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1.6207C11.4047 1.6207 11.6895 1.63125 12.6352 1.67344C13.5141 1.71211 13.9887 1.85977 14.3051 1.98281C14.7234 2.14453 15.0258 2.34141 15.3387 2.6543C15.6551 2.9707 15.8484 3.26953 16.0102 3.68789C16.1332 4.0043 16.2809 4.48242 16.3195 5.35781C16.3617 6.30703 16.3723 6.5918 16.3723 8.99297C16.3723 11.3977 16.3617 11.6824 16.3195 12.6281C16.2809 13.507 16.1332 13.9816 16.0102 14.298C15.8484 14.7164 15.6516 15.0187 15.3387 15.3316C15.0223 15.648 14.7234 15.8414 14.3051 16.0031C13.9887 16.1262 13.5105 16.2738 12.6352 16.3125C11.6859 16.3547 11.4012 16.3652 9 16.3652C6.59531 16.3652 6.31055 16.3547 5.36484 16.3125C4.48594 16.2738 4.01133 16.1262 3.69492 16.0031C3.27656 15.8414 2.97422 15.6445 2.66133 15.3316C2.34492 15.0152 2.15156 14.7164 1.98984 14.298C1.8668 13.9816 1.71914 13.5035 1.68047 12.6281C1.63828 11.6789 1.62773 11.3941 1.62773 8.99297C1.62773 6.58828 1.63828 6.30351 1.68047 5.35781C1.71914 4.47891 1.8668 4.0043 1.98984 3.68789C2.15156 3.26953 2.34844 2.96719 2.66133 2.6543C2.97773 2.33789 3.27656 2.14453 3.69492 1.98281C4.01133 1.85977 4.48945 1.71211 5.36484 1.67344C6.31055 1.63125 6.59531 1.6207 9 1.6207ZM9 0C6.55664 0 6.25078 0.0105469 5.29102 0.0527344C4.33477 0.0949219 3.67734 0.249609 3.10781 0.471094C2.51367 0.703125 2.01094 1.00898 1.51172 1.51172C1.00898 2.01094 0.703125 2.51367 0.471094 3.1043C0.249609 3.67734 0.0949219 4.33125 0.0527344 5.2875C0.0105469 6.25078 0 6.55664 0 9C0 11.4434 0.0105469 11.7492 0.0527344 12.709C0.0949219 13.6652 0.249609 14.3227 0.471094 14.8922C0.703125 15.4863 1.00898 15.9891 1.51172 16.4883C2.01094 16.9875 2.51367 17.2969 3.1043 17.5254C3.67734 17.7469 4.33125 17.9016 5.2875 17.9437C6.24727 17.9859 6.55312 17.9965 8.99648 17.9965C11.4398 17.9965 11.7457 17.9859 12.7055 17.9437C13.6617 17.9016 14.3191 17.7469 14.8887 17.5254C15.4793 17.2969 15.982 16.9875 16.4813 16.4883C16.9805 15.9891 17.2898 15.4863 17.5184 14.8957C17.7398 14.3227 17.8945 13.6687 17.9367 12.7125C17.9789 11.7527 17.9895 11.4469 17.9895 9.00352C17.9895 6.56016 17.9789 6.2543 17.9367 5.29453C17.8945 4.33828 17.7398 3.68086 17.5184 3.11133C17.2969 2.51367 16.991 2.01094 16.4883 1.51172C15.9891 1.0125 15.4863 0.703125 14.8957 0.474609C14.3227 0.253125 13.6688 0.0984375 12.7125 0.05625C11.7492 0.0105469 11.4434 0 9 0Z" fill="currentColor" />
                            <path  d="M9 4.37695C6.44766 4.37695 4.37695 6.44766 4.37695 9C4.37695 11.5523 6.44766 13.623 9 13.623C11.5523 13.623 13.623 11.5523 13.623 9C13.623 6.44766 11.5523 4.37695 9 4.37695ZM9 11.9988C7.34414 11.9988 6.00117 10.6559 6.00117 9C6.00117 7.34414 7.34414 6.00117 9 6.00117C10.6559 6.00117 11.9988 7.34414 11.9988 9C11.9988 10.6559 10.6559 11.9988 9 11.9988Z" fill="currentColor" />
                            <path d="M14.8852 4.19411C14.8852 4.79176 14.4 5.2734 13.8059 5.2734C13.2082 5.2734 12.7266 4.78825 12.7266 4.19411C12.7266 3.59645 13.2117 3.11481 13.8059 3.11481C14.4 3.11481 14.8852 3.59996 14.8852 4.19411Z" fill="currentColor" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- feature-area -->
    <section id="features" class="features__area section-pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <span class="sub-title al-text-primary">Our Story</span>
                        <h2 class="title al-theme-text-primary">Born in Ceylon. Made with Love.</h2>
                        <p>Aaley Ceylon is inspired by a simple truth — the best things in life are crafted with care. From hand-rolled cinnamon quills to the gentle fragrance that fills the air, our products embody the love and labour of Sri Lankan artisans. Rooted in tradition and guided by authenticity, we ensure every stick of cinnamon reflects the soul of our island — pure, delicate, and filled with warmth.</p>
                        <h5 class="mt-4 fst-italic al-theme-text-primary"> “Aaley is where love for the land and the art of cinnamon become one.”</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="features__shape">
            <img class="banner-swing-img-bottom-right" src="{{ asset('assets/common/images/plant-shape-1.png') }}" alt="shape" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="100">
        </div>
    </section>
    <!-- feature-area-end -->

    <section class="about__area-two section-py-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-4">
                    <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <span class="sub-title al-text-primary">Our Collection</span>
                        <h2 class="title al-theme-text-primary">Crafted with Purity. Perfected by Nature.</h2>
                        <p>Each Aaley creation captures the true essence of Ceylon cinnamon — elegant, aromatic, and unmistakably pure.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="about__img-two" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                        <img src="{{ asset('assets/common/images/product-quills.jpg') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-two">
                        <div class="section__title mb-30">
                            <h2 class="title al-theme-text-primary a-fw-600">Ceylon Cinnamon Quills</h2>
                        </div>
                        <p>Hand-rolled with precision, preserving the signature aroma and golden hue of true Ceylon cinnamon.</p>
                        <h2 class="price mb-5 al-theme-text-primary">{{ 'LKR. ' . number_format(5000, 2) }}</h2>
                        {{--<div class="about__list-two">
                            <div class="about__list-item">
                                <div class="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.8319 12.9032H18.2745L15.1777 20.6452H19.1345L17.821 25.0226C17.6732 25.5155 17.7648 26.0342 18.0719 26.4471C18.3784 26.86 18.85 27.0968 19.3642 27.0968C20.01 27.0968 20.5906 26.7136 20.8448 26.12L24.8506 16.7742H21.5416L22.8319 12.9032ZM22.8932 18.0645L19.659 25.6123C19.6087 25.7303 19.4925 25.8064 19.3641 25.8064C19.2235 25.8064 19.1422 25.7251 19.1067 25.6774C19.0706 25.629 19.0164 25.5278 19.0571 25.3935L20.868 19.3548H17.0829L19.1474 14.1935H21.0416L19.7513 18.0645H22.8932Z" fill="currentColor" />
                                        <path d="M38.0645 29.6774H37.4194V29.0323C37.4194 27.9652 36.551 27.0968 35.4839 27.0968H33.5485V26.4517C33.5485 25.6117 33.0072 24.902 32.2582 24.6349V13.7071C32.2582 10.7768 30.5581 8.18263 27.9885 6.96972C28.2349 6.64521 28.3872 6.24456 28.3872 5.80651V1.93546C28.3871 0.868404 27.5187 0 26.4516 0H13.5484C12.4813 0 11.613 0.868404 11.613 1.93546V5.80645C11.613 6.2445 11.7652 6.64514 12.0117 6.96965C9.44198 8.18257 7.74197 10.7774 7.74197 13.7071V24.6348C6.99293 24.9019 6.45165 25.6116 6.45165 26.4516V27.0967H4.51612C3.449 27.0967 2.58066 27.9651 2.58066 29.0322V29.6773H1.93553C0.868404 29.6774 0 30.5458 0 31.6129V32.9032C0 33.9703 0.868404 34.8387 1.93546 34.8387H2.58059V35.4838C2.58059 36.5509 3.449 37.4193 4.51605 37.4193H6.45151V38.0644C6.45151 39.1315 7.31992 39.9999 8.38697 39.9999H10.9676C12.0348 39.9999 12.9031 39.1315 12.9031 38.0644V34.8386H27.0966V38.0644C27.0966 39.1315 27.965 39.9999 29.0321 39.9999H31.6128C32.6799 39.9999 33.5482 39.1315 33.5482 38.0644V37.4193H35.4837C36.5508 37.4193 37.4191 36.5509 37.4191 35.4838V34.8387H38.0643C39.1314 34.8387 39.9997 33.9703 39.9997 32.9032V31.6129C40 30.5458 39.1317 29.6774 38.0645 29.6774ZM13.5484 6.45165C13.1923 6.45165 12.9033 6.1626 12.9033 5.80651V3.87099H14.1936V6.45165H13.5484ZM15.4839 3.87099H16.7742V6.45165H15.4839V3.87099ZM18.0645 3.87099H19.3549V6.45165H18.0645V3.87099ZM20.6452 3.87099H21.9355V6.45165H20.6452V3.87099ZM23.2258 3.87099H24.5161V6.45165H23.2258V3.87099ZM25.8064 3.87099H27.0968V5.80645C27.0968 6.1626 26.8077 6.45158 26.4516 6.45158H25.8065V3.87099H25.8064ZM13.5484 1.29033H26.4516C26.8078 1.29033 27.0968 1.57937 27.0968 1.93546V2.58059H12.9032V1.93546C12.9032 1.57937 13.1923 1.29033 13.5484 1.29033ZM13.6387 7.74191H26.3613C29.0761 8.45355 30.9678 10.8942 30.9678 13.7071V24.5161H29.6774V13.7071C29.6774 11.5793 28.3175 9.7135 26.2929 9.06322L13.9046 9.03224L13.7071 9.06322C11.6826 9.71356 10.3226 11.5794 10.3226 13.7071V24.5161H9.0323V13.7071C9.03224 10.8942 10.9239 8.45355 13.6387 7.74191ZM27.0968 26.4516V29.6774H12.9032V26.4516C12.9032 25.6116 12.3619 24.902 11.6129 24.6349V13.7071C11.6129 12.1749 12.5716 10.8265 14.0097 10.3226H25.9903C27.4284 10.8265 28.3871 12.1749 28.3871 13.7071V24.6349C27.6381 24.902 27.0968 25.6116 27.0968 26.4516ZM1.93546 33.5484C1.57931 33.5484 1.29033 33.2594 1.29033 32.9033V31.6129C1.29033 31.2567 1.57937 30.9678 1.93546 30.9678H2.58059V33.5484H1.93546ZM4.51612 36.1291C4.15996 36.1291 3.87099 35.84 3.87099 35.4839V29.0323C3.87099 28.6761 4.16003 28.3872 4.51612 28.3872H6.45158V36.1291H4.51612ZM11.6129 38.0645C11.6129 38.4207 11.3238 38.7097 10.9678 38.7097H8.3871C8.03095 38.7097 7.74197 38.4206 7.74197 38.0645V26.4516C7.74197 26.0955 8.03102 25.8065 8.3871 25.8065H10.9678C11.3239 25.8065 11.6129 26.0956 11.6129 26.4516V38.0645ZM12.9032 33.5484V30.9678H27.0968V33.5484H12.9032ZM32.2581 38.0645C32.2581 38.4207 31.969 38.7097 31.613 38.7097H29.0323C28.6761 38.7097 28.3872 38.4206 28.3872 38.0645V26.4516C28.3872 26.0955 28.6762 25.8065 29.0323 25.8065H31.613C31.9691 25.8065 32.2581 26.0956 32.2581 26.4516V38.0645ZM36.1291 35.4839C36.1291 35.84 35.84 36.129 35.4839 36.129H33.5485V28.3871H35.4839C35.8401 28.3871 36.1291 28.6761 36.1291 29.0322V35.4839ZM38.7097 32.9032C38.7097 33.2594 38.4206 33.5484 38.0645 33.5484H37.4194V30.9677H38.0645C38.4207 30.9677 38.7097 31.2567 38.7097 31.6128V32.9032Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h2 class="title">natural ingredients</h2>
                                    <p>A thing added to something else in order to <br> complete or enhance it.</p>
                                </div>
                            </div>
                            <div class="about__list-item">
                                <div class="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9997 19.9419C18.6257 19.9419 17.5078 21.0598 17.5078 22.4338C17.5078 23.8078 18.6257 24.9256 19.9997 24.9256C21.3737 24.9256 22.4916 23.8078 22.4916 22.4338C22.4916 21.0598 21.3737 19.9419 19.9997 19.9419ZM19.9997 23.363C19.4874 23.363 19.0706 22.9463 19.0706 22.4339C19.0706 21.9216 19.4874 21.5049 19.9997 21.5049C20.512 21.5049 20.9287 21.9216 20.9287 22.4339C20.9287 22.9463 20.512 23.363 19.9997 23.363Z" fill="currentColor" />
                                        <path d="M16.4235 25.3929C15.0495 25.3929 13.9316 26.5108 13.9316 27.8848C13.9316 29.2588 15.0495 30.3767 16.4235 30.3767C17.7975 30.3767 18.9154 29.2588 18.9154 27.8848C18.9154 26.5108 17.7975 25.3929 16.4235 25.3929ZM16.4236 28.8139C15.9113 28.8139 15.4945 28.3971 15.4945 27.8848C15.4945 27.3726 15.9113 26.9558 16.4236 26.9558C16.9359 26.9558 17.3527 27.3725 17.3527 27.8848C17.3527 28.3972 16.9358 28.8139 16.4236 28.8139Z" fill="currentColor" />
                                        <path d="M23.5759 25.3929C22.2019 25.3929 21.084 26.5108 21.084 27.8848C21.084 29.2588 22.2019 30.3767 23.5759 30.3767C24.9498 30.3767 26.0677 29.2588 26.0677 27.8848C26.0677 26.5108 24.9498 25.3929 23.5759 25.3929ZM23.5759 28.8139C23.0637 28.8139 22.6469 28.3971 22.6469 27.8848C22.6469 27.3726 23.0637 26.9558 23.5759 26.9558C24.0882 26.9558 24.505 27.3725 24.505 27.8848C24.505 28.3972 24.0881 28.8139 23.5759 28.8139Z" fill="currentColor" />
                                        <path d="M12.8434 30.8439C11.4695 30.8439 10.3516 31.9618 10.3516 33.3357C10.3516 34.7097 11.4695 35.8276 12.8434 35.8276C14.2174 35.8276 15.3353 34.7097 15.3353 33.3357C15.3353 31.9617 14.2175 30.8439 12.8434 30.8439ZM12.8434 34.2648C12.3312 34.2648 11.9144 33.848 11.9144 33.3357C11.9144 32.8235 12.3312 32.4067 12.8434 32.4067C13.3557 32.4067 13.7725 32.8234 13.7725 33.3357C13.7726 33.8481 13.3558 34.2648 12.8434 34.2648Z" fill="currentColor" />
                                        <path d="M19.9997 30.8439C18.6257 30.8439 17.5078 31.9618 17.5078 33.3357C17.5078 34.7097 18.6257 35.8276 19.9997 35.8276C21.3737 35.8276 22.4916 34.7097 22.4916 33.3357C22.4916 31.9617 21.3737 30.8439 19.9997 30.8439ZM19.9997 34.2648C19.4874 34.2648 19.0706 33.848 19.0706 33.3357C19.0706 32.8235 19.4874 32.4067 19.9997 32.4067C20.512 32.4067 20.9287 32.8234 20.9287 33.3357C20.9288 33.8481 20.512 34.2648 19.9997 34.2648Z" fill="currentColor" />
                                        <path d="M27.1559 30.8439C25.782 30.8439 24.6641 31.9618 24.6641 33.3357C24.6641 34.7097 25.782 35.8276 27.1559 35.8276C28.5299 35.8276 29.6478 34.7097 29.6478 33.3357C29.6478 31.9617 28.5299 30.8439 27.1559 30.8439ZM27.1559 34.2648C26.6437 34.2648 26.2269 33.848 26.2269 33.3357C26.2269 32.8235 26.6437 32.4067 27.1559 32.4067C27.6682 32.4067 28.085 32.8234 28.085 33.3357C28.085 33.8481 27.6682 34.2648 27.1559 34.2648Z" fill="currentColor" />
                                        <path d="M37.6601 6.51251C34.5404 3.39274 29.464 3.39274 26.3458 6.51094L20.0097 12.8109L13.6558 6.51251C10.5358 3.39258 5.45943 3.39282 2.33982 6.51251C-0.779941 9.63227 -0.779941 14.7087 2.33982 17.8284L9.1867 24.6753C9.3392 24.8278 9.53928 24.9042 9.7392 24.9042C9.93842 24.9042 10.1377 24.8285 10.2901 24.677L20.0098 15.0143L29.7091 24.6764C29.8615 24.8283 30.0612 24.9043 30.2606 24.9043C30.4606 24.9043 30.6606 24.828 30.8131 24.6754L37.66 17.8285C40.7799 14.7087 40.7799 9.63235 37.6601 6.51251ZM9.74084 23.0195L8.47709 21.7557L13.9118 16.321C14.2169 16.0159 14.2169 15.5211 13.9118 15.2159C13.6065 14.9108 13.1119 14.9109 12.8066 15.2159L7.37201 20.6506L3.4449 16.7234C0.934434 14.213 0.934434 10.1281 3.4449 7.61758C4.69998 6.3625 6.34795 5.735 7.99693 5.735C9.64623 5.735 11.2966 6.36344 12.5532 7.62001L18.9014 13.9127L9.74084 23.0195ZM36.555 16.7234L30.2596 23.0188L21.1182 13.9124L22.4026 12.6354L27.8516 18.0845C28.0042 18.237 28.2042 18.3134 28.4041 18.3134C28.604 18.3134 28.8041 18.237 28.9566 18.0845C29.2618 17.7793 29.2618 17.2845 28.9566 16.9794L23.5108 11.5334L27.4491 7.61758C29.9594 5.10719 34.0444 5.10704 36.5549 7.61758C39.0655 10.1281 39.0655 14.2129 36.555 16.7234Z" fill="currentColor" />
                                        <path d="M30.9827 19.0055C30.9462 18.9696 30.9063 18.9367 30.8634 18.9086C30.8212 18.8805 30.7759 18.8563 30.7289 18.8367C30.682 18.8172 30.6329 18.8024 30.5828 18.7922C30.482 18.7719 30.3781 18.7719 30.2773 18.7922C30.2273 18.8024 30.178 18.8172 30.1312 18.8367C30.0843 18.8563 30.039 18.8805 29.9961 18.9086C29.9539 18.9367 29.9133 18.9696 29.8773 19.0055C29.8414 19.0414 29.8086 19.0813 29.7805 19.1242C29.7523 19.1664 29.7281 19.2117 29.7086 19.2594C29.6891 19.3063 29.6742 19.3555 29.6641 19.4055C29.6539 19.4555 29.6484 19.5071 29.6484 19.5578C29.6484 19.6086 29.6539 19.6602 29.6641 19.711C29.6742 19.7602 29.6891 19.8094 29.7086 19.8571C29.7281 19.9039 29.7523 19.9492 29.7805 19.9914C29.8086 20.0344 29.8414 20.0742 29.8773 20.1102C29.9133 20.1461 29.9538 20.1789 29.9961 20.2078C30.0391 20.236 30.0844 20.2602 30.1312 20.2797C30.1781 20.2992 30.2273 20.3141 30.2773 20.3242C30.328 20.3344 30.3789 20.3391 30.4296 20.3391C30.4812 20.3391 30.532 20.3344 30.5827 20.3242C30.6328 20.3141 30.682 20.2992 30.7288 20.2797C30.7758 20.2602 30.8211 20.236 30.8633 20.2078C30.9062 20.1789 30.9461 20.1461 30.9827 20.1102C31.0187 20.0742 31.0507 20.0344 31.0796 19.9914C31.1077 19.9492 31.132 19.9039 31.1515 19.8571C31.171 19.8094 31.1859 19.7602 31.196 19.711C31.2062 19.6602 31.2116 19.6086 31.2116 19.5578C31.2117 19.3524 31.1281 19.1509 30.9827 19.0055Z" fill="currentColor" />
                                        <path d="M16.1512 13.5897C16.141 13.5397 16.1262 13.4905 16.1066 13.4436C16.0871 13.3959 16.0629 13.3506 16.0348 13.3084C16.0066 13.2655 15.9738 13.2256 15.9379 13.1897C15.902 13.1538 15.8614 13.1209 15.8191 13.0928C15.7762 13.0647 15.7309 13.0405 15.684 13.0209C15.6371 13.0014 15.588 12.9866 15.5379 12.9764C15.4371 12.9561 15.3332 12.9561 15.2324 12.9764C15.1823 12.9866 15.1331 13.0014 15.0863 13.0209C15.0394 13.0405 14.9941 13.0647 14.9512 13.0928C14.909 13.1209 14.8691 13.1538 14.8324 13.1897C14.7965 13.2256 14.7637 13.2655 14.7355 13.3084C14.7074 13.3506 14.6832 13.3959 14.6637 13.4436C14.6441 13.4905 14.6293 13.5397 14.6191 13.5897C14.609 13.6397 14.6035 13.6913 14.6035 13.742C14.6035 13.7928 14.609 13.8444 14.6191 13.8952C14.6293 13.9444 14.6441 13.9936 14.6637 14.0413C14.6832 14.0881 14.7074 14.1334 14.7355 14.1756C14.7637 14.2186 14.7965 14.2584 14.8324 14.2944C14.8691 14.3303 14.9089 14.3631 14.9512 14.392C14.9941 14.4202 15.0395 14.4444 15.0863 14.4639C15.1332 14.4834 15.1823 14.4983 15.2324 14.5084C15.2831 14.5186 15.334 14.5233 15.3855 14.5233C15.591 14.5233 15.7918 14.4397 15.9379 14.2943C15.9738 14.2584 16.0066 14.2185 16.0348 14.1756C16.0629 14.1334 16.0871 14.0881 16.1066 14.0412C16.1262 13.9935 16.141 13.9443 16.1512 13.8951C16.1613 13.8443 16.1659 13.7927 16.1659 13.742C16.1659 13.6913 16.1612 13.6397 16.1512 13.5897Z" fill="currentColor" />
                                        <path d="M11.4542 14.4494L9.7837 9.96568C9.74878 9.87857 9.72073 9.83451 9.66323 9.77701C9.34862 9.4624 8.49346 9.8374 8.24229 10.0887C8.06135 10.2696 8.01151 10.4696 8.09839 10.6666L9.32198 13.4856L6.50323 12.2621C6.30878 12.1765 6.10057 12.2304 5.91714 12.4139C5.57503 12.756 5.29565 13.5251 5.59745 13.8269C5.64175 13.8712 5.7351 13.9301 5.80495 13.9483L10.2855 15.6175C10.5328 15.7126 10.8796 15.4872 11.1017 15.2652C11.3411 15.0258 11.543 14.6805 11.4542 14.4494Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h2 class="title">multi color flavour</h2>
                                    <p>A thing added to something else in order to <br> complete or enhance it.</p>
                                </div>
                            </div>
                        </div>--}}
                        <div class="about__btn">
                            <a href="{{ url('/product/ceylon-cinnamon-quills') }}" class="tg-btn red-btn">Explore Now
                                <span>
                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                        </svg>
                                    </span>
                            </a>
                            <a href="{{ url('/contact-us') }}" class="tg-btn border-btn">Contact Now
                                <span>
                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                        </svg>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__shape-two">
            <img class="banner-swing-img-bottom-right" src="{{ asset('assets/common/images/plant-shape-1.png') }}" alt="shape" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
        </div>
    </section>

    <section class="about__area section-pt-60 section-pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 order-0 order-lg-2">
                    <div class="about__img-two" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                        <img src="{{ asset('assets/common/images/product-powder.jpg') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title mb-30">
                            <h2 class="title al-theme-text-primary a-fw-600">Ceylon Cinnamon Powder</h2>
                        </div>
                        <p>Finely ground to perfection — ideal for both gourmet creations and everyday wellness.</p>
                        <h2 class="price mb-5 al-theme-text-primary">{{ 'LKR. ' . number_format(5000, 2) }}</h2>
                        <div class="about__btn">
                            <a href="{{ url('/product/ceylon-cinnamon-powder') }}" class="tg-btn red-btn">Explore Now
                                <span>
                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                        </svg>
                                    </span>
                            </a>
                            <a href="{{ url('/contact-us') }}" class="tg-btn border-btn">Contact Now
                                <span>
                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                            <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                        </svg>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__shape">
            <img class="banner-swing-img-bottom-right" src="{{ asset('assets/common/images/plant-shape-2.png') }}" alt="shape" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
        </div>
    </section>

    <section id="features" class="features__area section-pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <span class="sub-title al-text-primary">The Essence of Ceylon</span>
                        <h2 class="title al-theme-text-primary">Love Ceylon. Love Cinnamon.</h2>
                        <p>From the southern fields of Sri Lanka, where cinnamon grows under tropical sun and sea breeze, to your hands — Aaley carries a story of connection. Each quill is a whisper of Ceylon’s spirit: fragrant, pure, and made with love.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="features__shape">
            <img class="banner-swing-img-bottom-right" src="{{ asset('assets/common/images/plant-shape-1.png') }}" alt="shape" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="100">
        </div>
    </section>


    <!-- cta-area -->
    <section class="cta__area cta__bg" data-background="{{ asset('assets/frontend/img/bg/cta_bg.svg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta__content">
                        <h2 class="title">Connect with Aaley Ceylon.</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta__btn">
                        <a href="{{ url('/contact-us') }}" class="tg-btn">Contact Now
                            <span>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                        <path d="M14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM0 6V6.75H14V6V5.25H0V6Z" fill="currentColor" />
                                    </svg>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->

@endsection


@section('script')
@endsection
