@extends('layouts.frontend')

@section('page_title')
    The Essence of Ceylon
@endsection

@section('content')
    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/common/images/sd_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content">
                        <h2 class="title al-text-primary al-fw-600">The Essence of Ceylon</h2>
                        <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a class="al-text-primary" href="{{ url('/') }}">Home</a>
                                </span>
                            <span class="breadcrumb-separator">|</span>
                            <span class="al-text-primary" property="itemListElement" typeof="ListItem">The Essence of Ceylon</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features__area section-pt-150">
        <div class="container mb-5">
            <div class="row justify-content-center">

                <div class="col-lg-9 mb-50">
                    <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <!-- <span class="sub-title al-text-primary">Our Story</span> -->
                        <h2 class="title al-theme-text-primary">Blind Tested<br>Expert Approved</h2>
                        <p>Evaluated through blind testing for flavour, aroma, and overall excellence.</p>
                    </div>
                </div>

                <div class="col-md-6 mb-5 popup-gallery" data-sal="slide-down" data-sal-duration="700" data-sal-delay="100">
                    <a href="{{ asset('assets/common/images/gal-01.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/common/images/gal-01.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-6 mb-5 popup-gallery" data-sal="slide-down" data-sal-duration="700" data-sal-delay="100">
                    <a href="{{ asset('assets/common/images/gal-02.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/common/images/gal-02.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-6 mb-5 popup-gallery" data-sal="slide-down" data-sal-duration="700" data-sal-delay="100">
                    <a href="{{ asset('assets/common/images/gal-03.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/common/images/gal-03.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-6 mb-5 popup-gallery" data-sal="slide-down" data-sal-duration="700" data-sal-delay="100">
                    <a href="{{ asset('assets/common/images/gal-04.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/common/images/gal-04.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-6 mb-5 popup-gallery" data-sal="slide-down" data-sal-duration="700" data-sal-delay="100">
                    <a href="{{ asset('assets/common/images/gal-05.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/common/images/gal-05.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-6 mb-5 popup-gallery" data-sal="slide-down" data-sal-duration="700" data-sal-delay="100">
                    <a href="{{ asset('assets/common/images/gal-06.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/common/images/gal-06.jpg') }}" alt="img">
                    </a>
                </div>
            </div>
        </div>
        <div class="features__shape">
            <img class="banner-swing-img-bottom-right" src="{{ asset('assets/common/images/plant-shape-1.png') }}" alt="shape" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="100">
        </div>
    </section>


@endsection


@section('script')
<script>
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            // type: 'inline',
            mainClass: 'mfp-fade', // Adds the 'mfp-fade' class to the wrapper
            removalDelay: 160, // Delay in milliseconds before popup is removed
            midClick: true, // Allow opening popup on middle mouse click
            gallery: {
                enabled: true, // enables the gallery functionality
                preload: [0, 1] // preload 0 - before current, and 1 after the current image
            },
            // Other options like callbacks or mainClass can be added here
        });


    });
</script>
@endsection
