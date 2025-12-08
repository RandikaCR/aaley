@extends('layouts.frontend')

@section('page_title')
    Products
@endsection

@section('css')
    <style type="text/css">
        .product__thumb,
        .product__thumb img{
            height: auto !important;
        }
    </style>
@endsection

@section('content')

    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/common/images/sd_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content">
                        <h2 class="title al-theme-text-primary">Aaley Products for</h2>
                        <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a class="al-text-primary" href="{{ url('/') }}">Home</a>
                                </span>
                            <span class="breadcrumb-separator">|</span>
                            <span class="al-text-primary" property="itemListElement" typeof="ListItem">Aaley Products</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="product__area section-py-150 section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-60">
                        <span class="sub-title al-text-primary">Our Collection</span>
                        <h2 class="title al-theme-text-primary">Crafted with Purity. Perfected by Nature.</h2>
                    </div>
                </div>
            </div>
            <div class="row gutter-y-30 gutter-20 justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="product__item">
                        <div class="product__thumb">
                            <a href="{{ url('/product/ceylon-cinnamon-quills') }}"><img src="{{ asset('assets/common/images/product-quills.jpg') }}" alt="img"></a>
                        </div>
                        <div class="product__content">
                            <h2 class="title al-theme-text-primary"><a href="{{ url('/product/ceylon-cinnamon-quills') }}">Ceylon Cinnamon Quills</a></h2>
                            <h2 class="price al-text-primary">{{ 'LKR. ' . number_format(5000, 2) }}</h2>
                            <div class="product__content-bottom">
                                <a href="{{ url('/product/ceylon-cinnamon-quills') }}" class="tg-btn red-btn">Explore Now
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="product__item">
                        <div class="product__thumb">
                            <a href="{{ url('/product/ceylon-cinnamon-powder') }}"><img src="{{ asset('assets/common/images/product-powder.jpg') }}" alt="img"></a>
                        </div>
                        <div class="product__content">
                            <h2 class="title al-theme-text-primary"><a href="{{ url('/product/ceylon-cinnamon-powder') }}">Ceylon Cinnamon Powder</a></h2>
                            <h2 class="price al-text-primary">{{ 'LKR. ' . number_format(5000, 2) }}</h2>
                            <div class="product__content-bottom">
                                <a href="{{ url('/product/ceylon-cinnamon-powder') }}" class="tg-btn red-btn">Explore Now
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
        </div>
    </section>

@endsection


@section('script')
@endsection
