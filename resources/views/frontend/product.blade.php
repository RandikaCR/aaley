@extends('layouts.frontend')

@section('page_title')
    {{ $product->product }}
@endsection

@section('css')
    <style type="text/css">
        .product__details-img{
            height: auto !important;
        }

        .product__details-info{
            border-bottom: none;
        }
    </style>
@endsection

@section('content')
    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/frontend/img/bg/sd_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{ $product->product }}</h2>
                        <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                            <span class="breadcrumb-separator">|</span>
                            <span property="itemListElement" typeof="ListItem">Aaley Products</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>`

        <div class="section__bg-shape">
            <span class="bottom-shape" data-background="{{ asset('assets/frontend/img/bg/section_bg_shape02.svg') }}"></span>
        </div>
    </section>


    <section class="shop__details-area section-py-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="product__details-wrap">
                        <div class="tab-content" id="myTabContent">
                            @php
                            $no = 0;
                            @endphp
                            @foreach($product->images as $img)
                                <div class="tab-pane {{ $no == 0 ? 'show active' : '' }}" id="item{{$no}}-tab-pane" role="tabpanel" aria-labelledby="item{{$no}}-tab" tabindex="0">
                                    <div class="product__details-img">
                                        <img src="{{ asset('assets/common/images/' . $img) }}" alt="img">
                                    </div>
                                </div>

                                @php
                                    $no++;
                                @endphp
                            @endforeach

                        </div>
                        <div class="product__details-nav">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                @php
                                    $no = 0;
                                @endphp
                                @foreach($product->images as $img)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $no == 0 ? 'active' : '' }}" id="item{{$no}}-tab" data-bs-toggle="tab" data-bs-target="#item{{$no}}-tab-pane" type="button" role="tab" aria-controls="item{{$no}}-tab-pane" aria-selected="{{ $no == 0 ? 'true' : 'false' }}">
                                            <img src="{{ asset('assets/common/images/' . $img) }}" alt="img">
                                        </button>
                                    </li>

                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details-content">
                        <h4 class="title">{{ $product->product }}</h4>
                        <h2 class="product__details-price">{{ $product->price }}</h2>
                        <p>{{ $product->description }}</p>
                        <div class="product__details-info">
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
    </section>

@endsection


@section('script')
@endsection
