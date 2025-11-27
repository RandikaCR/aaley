@extends('layouts.frontend')

@section('page_title')
    Contact Us
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


@endsection


@section('script')
@endsection
