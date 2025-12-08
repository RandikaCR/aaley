<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('page_title') :: Aaley Official Website</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/common/images/favicon.png') }}">

<!-- CSS here -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/default-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/sal.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/tg-cursor.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

<link href="{{ asset('assets/common/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@yield('css')

<style type="text/css">

    .al-theme-text-primary{
        color: var(--tg-theme-primary) !important;
    }

    .al-text-primary{
        color: var(--tg-text-primary) !important;
    }

    .al-text-secondary{
        color: var(--tg-text-secondary) !important;
    }

    .title, .al-heading-font{
        font-family: "Anek Tamil", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }



    .al-fw-600{
        font-weight: 600;
    }



    .banner-swing-img-top-left{
        -webkit-animation: moverTopLeft 2s infinite  alternate;
        animation: moverTopLeft 2s infinite  alternate;
    }

    @-webkit-keyframes moverTopLeft {
        0% { transform: translateY(0); }
        50% { transform: rotate(2deg); }
        100% { transform: translateY(-4px); }
    }
    @keyframes moverTopLeft {
        0% { transform: translateY(0); }
        50% { transform: rotate(2deg); }
        100% { transform: translateY(-4px); }
    }

    .banner-swing-img-bottom-right{
        -webkit-animation: moverBottomRight 2s infinite  alternate;
        animation: moverBottomRight 2s infinite  alternate;
    }

    @-webkit-keyframes moverBottomRight {
        /*0% { transform: translateY(-5px); }
        25% { transform: rotate(2deg); }
        50% { transform: rotate(4deg); }
        75% { transform: rotate(6deg); }
        100% { transform: translateY(0); }*/
        0% { transform: translateY(0); }
        50% { transform: rotate(2deg); }
        100% { transform: translateY(-4px); }
    }
    @keyframes moverBottomRight {
        /*0% { transform: translateY(-5px); }
        25% { transform: rotate(2deg); }
        50% { transform: rotate(4deg); }
        75% { transform: rotate(6deg); }
        100% { transform: translateY(0); }*/
        0% { transform: translateY(0); }
        50% { transform: rotate(2deg); }
        100% { transform: translateY(-4px); }
    }

    .element-to-zoom {
        transition: transform 0.3s ease-in-out; /* Optional: for smooth animation */
    }

    .element-to-zoom:hover {
        transform: scale(1.05);
        transform-origin: center center;
    }

    .slider__bg{
        background-image: linear-gradient(to left, #E7BD90 , #F7EBD3) !important;
    }

</style>
