<header class="transparent-header">
    <div id="header-fixed-height"></div>
    <div id="sticky-header" class="tg-header__area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/common/images/logo.png') }}" alt="Logo"></a>
                            </div>
                            <div class="logo d-none">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/common/images/logo.png') }}" alt="Logo"></a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex justify-content-end">
                                <ul class="navigation">
                                    <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="{{ (request()->segment(1) == 'products' || request()->segment(1) == 'product') ? 'active' : '' }}"><a href="{{ url('/products') }}">Products</a></li>
                                    <li class="{{ (request()->segment(1) == 'about-us') ? 'active' : '' }}"><a href="{{ url('/about-us') }}">About Us</a></li>
                                    <li class="{{ (request()->segment(1) == 'contact-us') ? 'active' : '' }}"><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="mobile-nav-toggler">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.5 12.5254C10.5518 12.5254 11.4713 13.381 11.4746 14.5V21.375C11.4746 22.4262 10.63 23.3496 9.5 23.3496H2.625C1.57313 23.3496 0.653744 22.4934 0.650391 21.375V14.5C0.650391 13.4487 1.49745 12.5254 2.625 12.5254H9.5ZM21.375 12.5254C22.4268 12.5254 23.3463 13.381 23.3496 14.5V21.375C23.3496 22.4262 22.505 23.3496 21.375 23.3496H14.5C13.4481 23.3496 12.5287 22.4934 12.5254 21.375V14.5C12.5254 13.4487 13.3724 12.5254 14.5 12.5254H21.375ZM2.625 13.9746C2.35506 13.9746 2.09961 14.195 2.09961 14.5V21.375C2.09961 21.6459 2.31237 21.9004 2.625 21.9004H9.5C9.77088 21.9004 10.0254 21.6876 10.0254 21.375V14.5C10.0254 14.2285 9.81793 13.9746 9.5 13.9746H2.625ZM14.5 13.9746C14.2301 13.9746 13.9746 14.195 13.9746 14.5V21.375C13.9746 21.6459 14.1874 21.9004 14.5 21.9004H21.375C21.6459 21.9004 21.9004 21.6876 21.9004 21.375V14.5C21.9004 14.2285 21.6929 13.9746 21.375 13.9746H14.5ZM9.5 0.650391C10.5518 0.650391 11.4713 1.506 11.4746 2.625V9.5C11.4746 10.5512 10.63 11.4746 9.5 11.4746H2.625C1.57313 11.4746 0.653744 10.6184 0.650391 9.5V2.625C0.650391 1.57371 1.49745 0.650391 2.625 0.650391H9.5ZM21.375 0.650391C22.4268 0.650391 23.3463 1.506 23.3496 2.625V9.5C23.3496 10.5512 22.505 11.4746 21.375 11.4746H14.5C13.4481 11.4746 12.5287 10.6184 12.5254 9.5V2.625C12.5254 1.57371 13.3724 0.650391 14.5 0.650391H21.375ZM2.625 2.09961C2.35506 2.09961 2.09961 2.32001 2.09961 2.625V9.5C2.09961 9.77088 2.31237 10.0254 2.625 10.0254H9.5C9.77088 10.0254 10.0254 9.81263 10.0254 9.5V2.625C10.0254 2.35346 9.81793 2.09961 9.5 2.09961H2.625ZM14.5 2.09961C14.2301 2.09961 13.9746 2.32001 13.9746 2.625V9.5C13.9746 9.77088 14.1874 10.0254 14.5 10.0254H21.375C21.6459 10.0254 21.9004 9.81263 21.9004 9.5V2.625C21.9004 2.35346 21.6929 2.09961 21.375 2.09961H14.5Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                </svg>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="tgmobile__menu">
        <nav class="tgmobile__menu-box">
            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
            <div class="nav-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/common/images/logo.png') }}" alt="Logo"></a>
            </div>
            <div class="tgmobile__search">
                <form action="#">
                    <input type="text" placeholder="Search here...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="tgmobile__menu-outer">

            </div>
            <div class="social-links">
                <ul class="list-wrap">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0C4.02948 0 0 4.02948 0 9C0 13.2206 2.90592 16.7623 6.82596 17.735V11.7504H4.97016V9H6.82596V7.81488C6.82596 4.75164 8.21232 3.3318 11.2198 3.3318C11.79 3.3318 12.7739 3.44376 13.1764 3.55536V6.04836C12.964 6.02604 12.595 6.01488 12.1367 6.01488C10.661 6.01488 10.0908 6.57396 10.0908 8.02728V9H13.0306L12.5255 11.7504H10.0908V17.9341C14.5472 17.3959 18.0004 13.6015 18.0004 9C18 4.02948 13.9705 0 9 0Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1.6207C11.4047 1.6207 11.6895 1.63125 12.6352 1.67344C13.5141 1.71211 13.9887 1.85977 14.3051 1.98281C14.7234 2.14453 15.0258 2.34141 15.3387 2.6543C15.6551 2.9707 15.8484 3.26953 16.0102 3.68789C16.1332 4.0043 16.2809 4.48242 16.3195 5.35781C16.3617 6.30703 16.3723 6.5918 16.3723 8.99297C16.3723 11.3977 16.3617 11.6824 16.3195 12.6281C16.2809 13.507 16.1332 13.9816 16.0102 14.298C15.8484 14.7164 15.6516 15.0187 15.3387 15.3316C15.0223 15.648 14.7234 15.8414 14.3051 16.0031C13.9887 16.1262 13.5105 16.2738 12.6352 16.3125C11.6859 16.3547 11.4012 16.3652 9 16.3652C6.59531 16.3652 6.31055 16.3547 5.36484 16.3125C4.48594 16.2738 4.01133 16.1262 3.69492 16.0031C3.27656 15.8414 2.97422 15.6445 2.66133 15.3316C2.34492 15.0152 2.15156 14.7164 1.98984 14.298C1.8668 13.9816 1.71914 13.5035 1.68047 12.6281C1.63828 11.6789 1.62773 11.3941 1.62773 8.99297C1.62773 6.58828 1.63828 6.30351 1.68047 5.35781C1.71914 4.47891 1.8668 4.0043 1.98984 3.68789C2.15156 3.26953 2.34844 2.96719 2.66133 2.6543C2.97773 2.33789 3.27656 2.14453 3.69492 1.98281C4.01133 1.85977 4.48945 1.71211 5.36484 1.67344C6.31055 1.63125 6.59531 1.6207 9 1.6207ZM9 0C6.55664 0 6.25078 0.0105469 5.29102 0.0527344C4.33477 0.0949219 3.67734 0.249609 3.10781 0.471094C2.51367 0.703125 2.01094 1.00898 1.51172 1.51172C1.00898 2.01094 0.703125 2.51367 0.471094 3.1043C0.249609 3.67734 0.0949219 4.33125 0.0527344 5.2875C0.0105469 6.25078 0 6.55664 0 9C0 11.4434 0.0105469 11.7492 0.0527344 12.709C0.0949219 13.6652 0.249609 14.3227 0.471094 14.8922C0.703125 15.4863 1.00898 15.9891 1.51172 16.4883C2.01094 16.9875 2.51367 17.2969 3.1043 17.5254C3.67734 17.7469 4.33125 17.9016 5.2875 17.9437C6.24727 17.9859 6.55312 17.9965 8.99648 17.9965C11.4398 17.9965 11.7457 17.9859 12.7055 17.9437C13.6617 17.9016 14.3191 17.7469 14.8887 17.5254C15.4793 17.2969 15.982 16.9875 16.4813 16.4883C16.9805 15.9891 17.2898 15.4863 17.5184 14.8957C17.7398 14.3227 17.8945 13.6687 17.9367 12.7125C17.9789 11.7527 17.9895 11.4469 17.9895 9.00352C17.9895 6.56016 17.9789 6.2543 17.9367 5.29453C17.8945 4.33828 17.7398 3.68086 17.5184 3.11133C17.2969 2.51367 16.991 2.01094 16.4883 1.51172C15.9891 1.0125 15.4863 0.703125 14.8957 0.474609C14.3227 0.253125 13.6688 0.0984375 12.7125 0.05625C11.7492 0.0105469 11.4434 0 9 0Z" fill="currentColor" />
                                <path  d="M9 4.37695C6.44766 4.37695 4.37695 6.44766 4.37695 9C4.37695 11.5523 6.44766 13.623 9 13.623C11.5523 13.623 13.623 11.5523 13.623 9C13.623 6.44766 11.5523 4.37695 9 4.37695ZM9 11.9988C7.34414 11.9988 6.00117 10.6559 6.00117 9C6.00117 7.34414 7.34414 6.00117 9 6.00117C10.6559 6.00117 11.9988 7.34414 11.9988 9C11.9988 10.6559 10.6559 11.9988 9 11.9988Z" fill="currentColor" />
                                <path d="M14.8852 4.19411C14.8852 4.79176 14.4 5.2734 13.8059 5.2734C13.2082 5.2734 12.7266 4.78825 12.7266 4.19411C12.7266 3.59645 13.2117 3.11481 13.8059 3.11481C14.4 3.11481 14.8852 3.59996 14.8852 4.19411Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="tgmobile__menu-backdrop"></div>
    <!-- End Mobile Menu -->

    <!-- header-search -->
    <div class="search__popup">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search__wrapper">
                        <div class="search__close">
                            <button type="button" class="search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="search__form">
                            <form action="#">
                                <div class="search__input">
                                    <input class="search-input-field" type="text" placeholder="Type keywords here">
                                    <span class="search-focus-border"></span>
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!-- header-search-end -->


</header>
