<input type="hidden" id="auth-user-id" value="{{ !empty(Auth::user()) ? Auth::user()->id : 0 }}">
<input type="hidden" id="_csrf_token" value="{{ csrf_token() }}">

<script src="{{ asset('assets/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/frontend/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/slick.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/frontend/js/sal.js') }}"></script>
<script src="{{ asset('assets/frontend/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>

<script src="{{ asset('assets/common/js/app.js') }}"></script>
<script src="{{ asset('assets/common/js/common.js') }}"></script>
