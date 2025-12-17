@extends('layouts.frontend')

@section('page_title')
    Contact Us
@endsection

@section('content')
    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/common/images/sd_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content">
                        <h2 class="title al-text-primary al-fw-600">Connect with Aaley Ceylon.</h2>
                        <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a class="al-text-primary" href="{{ url('/') }}">Home</a>
                                </span>
                            <span class="breadcrumb-separator">|</span>
                            <span class="al-text-primary" property="itemListElement" typeof="ListItem">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="features" class="features__area section-pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h5 class="al-theme-text-primary">We’d love to share more about our craft, collaborations, and the journey of true cinnamon.</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="features__shape">
            <img class="banner-swing-img-bottom-right" src="{{ asset('assets/common/images/plant-shape-1.png') }}" alt="shape" data-sal="zoom-in" data-sal-duration="700" data-sal-delay="100">
        </div>
    </section>
    <section class="contact__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact__info-wrap">
                        <div class="contact__info-item">
                            <h4 class="title al-theme-text-primary">Colombo</h4>
                            <p>3/8, Koshena Road, Malabe, Colombo 10115, Sri Lanka</p>
                            <ul class="list-wrap">
                                <li>
                                    <a href="tel:+94761392267">+94 76 139 2267</a>
                                </li>
                                <li>
                                    <a href="mailto:hello@aaleyceylon.com">hello@aaleyceylon.com</a>
                                </li>
                            </ul>
                            <div class="shape">
                                <svg xmlns="http://www.w3.org/2000/svg" width="174" height="210" viewBox="0 0 174 210" fill="none">
                                    <path d="M168.636 86.8182C168.636 150.455 86.8182 205 86.8182 205C86.8182 205 5 150.455 5 86.8182C5 65.1187 13.6201 44.3079 28.964 28.964C44.3079 13.6201 65.1187 5 86.8182 5C108.518 5 129.328 13.6201 144.672 28.964C160.016 44.3079 168.636 65.1187 168.636 86.8182Z" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M86.8182 114.091C101.88 114.091 114.091 101.88 114.091 86.8182C114.091 71.7559 101.88 59.5455 86.8182 59.5455C71.7559 59.5455 59.5455 71.7559 59.5455 86.8182C59.5455 101.88 71.7559 114.091 86.8182 114.091Z" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__form-wrap">
                        <h2 class="title al-theme-text-primary">Leave Us A Message</h2>
                        <form id="contact-form" action="" class="contact__form" method="POST">
                            <div class="form-grp">
                                <label class="al-text-primary" for="name">Name *</label>
                                <input id="name" name="name" type="text">
                            </div>
                            <div class="form-grp">
                                <label class="al-text-primary" for="email">Email *</label>
                                <input id="email" name="email" type="email">
                            </div>
                            <div class="form-grp">
                                <label class="al-text-primary" for="subject">Subject *</label>
                                <input id="subject" name="subject" type="text">
                            </div>
                            <div class="form-grp">
                                <label class="al-text-primary" for="message">Message *</label>
                                <textarea name="message" id="message"></textarea>
                            </div>
                            <a href="javascript:void(0);" class="tg-btn tg-btn-three black-btn send-message">Submit Message</a>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('script')
    <script>

        function validateEmail($email) {
            // Regular expression for email validation
            var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            // Return true if email matches regex, false otherwise
            return regex.test($email);
        }

        $(document).ready(function (){
            $('.send-message').on('click', function ($e){
                $e.preventDefault();

                $name = $('#name').val().trim();
                $email = $('#email').val().trim();
                $subject = $('#subject').val().trim();
                $message = $('#message').val().trim();

                $isInvalid = 0;

                if($name == ''){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Name is required!', 'error');
                }else if($email == ''){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Email is required!', 'error');
                }else if(!validateEmail($email)){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Invalid Email address!', 'error');
                }else if($subject == ''){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Subject is required!', 'error');
                }else if($message == ''){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Message is required!', 'error');
                }

                if($isInvalid == 0){
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You want to send this message!",
                        icon: "warning",
                        showCancelButton: !0,
                        showLoaderOnConfirm: true,
                        confirmButtonText: "Yes, Send it!",
                        cancelButtonText: "No, cancel!",
                        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                        cancelButtonClass: "btn btn-secondary w-xs mt-2",
                        buttonsStyling: !1,
                        showCloseButton: !0,
                    }).then((result) => {
                        if (result.isConfirmed) {

                            setTimeout(function() {
                                $.ajax({
                                    url: "{{ route('frontend.contacts.sendMessage') }}",
                                    type: 'POST',
                                    data: {
                                        name: $name,
                                        email: $email,
                                        subject: $subject,
                                        message: $message,
                                        _token: csrf_token()
                                    },
                                    dataType: 'json',
                                    beforeSend: function ($jqXHR, $obj) {
                                        Swal.fire({
                                            title: "Processing...",
                                            text: "Please wait",
                                            imageUrl: "{{ asset('assets/common/images/ajax-loader.gif') }}",
                                            showConfirmButton: false,
                                            allowOutsideClick: false
                                        });
                                    },
                                    success: function ($response, $textStatus, $jqXHR) {
                                        Swal.fire('Thank You!', 'Message has been sent successfully!. You will be contacted as soon as possible', 'success');
                                        setTimeout(function(){
                                            location.reload();
                                        },2000);
                                    },
                                    error: function ($jqXHR, $textStatus, $errorThrown) {
                                        Swal.fire('Oops...', 'Something went wrong with the System!', 'error');
                                    }
                                });

                            }, 50);
                        }
                    });
                }


            });
        });

    </script>
@endsection
