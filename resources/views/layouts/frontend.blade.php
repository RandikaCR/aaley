<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials.frontend.head')
</head>

<body>

<!--Preloader-->
<div id="preloader">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="{{ asset('assets/common/images/preloader.png') }}" alt="Preloader"></div>
        </div>
    </div>
</div>
<!--Preloader-end -->

<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 6L1 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M6 11L1 6L6 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
@include('partials.frontend.header')
<!-- header-area-end -->



<!-- main-area -->
<main class="main-area fix">

    @yield('content')

</main>
<!-- main-area-end -->

<!-- footer-area -->
@include('partials.frontend.footer')
<!-- footer-area-end -->



<!-- JS here -->
@include('partials.frontend.script')
</body>

</html>
