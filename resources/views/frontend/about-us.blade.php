@extends('layouts.frontend')

@section('page_title')
    About Us
@endsection

@section('content')
    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/common/images/sd_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content">
                        <h2 class="title al-text-primary al-fw-600">Our Story</h2>
                        <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a class="al-text-primary" href="{{ url('/') }}">Home</a>
                                </span>
                            <span class="breadcrumb-separator">|</span>
                            <span class="al-text-primary" property="itemListElement" typeof="ListItem">Our Story</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features__area section-pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <!-- <span class="sub-title al-text-primary">Our Story</span> -->
                        <h2 class="title al-theme-text-primary">Love Ceylon<br>Love Cinnamon</h2>
                        <p>Aaley Ceylon is inspired by a simple truth — the best things in life are crafted with care. From hand-rolled cinnamon quills to the gentle fragrance that fills the air, our products embody the love and labour of Sri Lankan artisans. Rooted in tradition and guided by authenticity, we ensure every stick of cinnamon reflects the soul of our island —<br>pure, delicate, and filled with warmth.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="" data-sal="slide-down" data-sal-duration="700" data-sal-delay="100" style="padding-bottom: 100px;">
                        <img class="img-fluid" src="{{ asset('assets/common/images/banner-img-main.png') }}" alt="img">
                    </div>
                </div>

                <div class="col-lg-9 mb-150">
                    <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h5 class="mt-4 mb-50 fst-italic al-theme-text-primary"> “Aaley is where love for the land and the art of cinnamon become one.”</h5>
                        <p>Aaley Ceylon maintains complete control of our supply chain, ensuring unmatched quality from the moment our cinnamon is grown to the final product. We make premium cinnamon powder accessible to culinary artists—both professionals and home cooks—who value exceptional flavour.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="features__shape">
            <img class="banner-swing-img-bottom-right" src="{{ asset('assets/common/images/plant-shape-1.png') }}" alt="shape" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="100">
        </div>
    </section>


@endsection


@section('script')
@endsection
