<!DOCTYPE html>
<html lang="en">
    @include('layouts.site.head')

    <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    @include('layouts.site.nav')
    @yield('conteudo')
    @include('layouts.site.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="{{ asset('site/js/jquery.min.js') }}"></script>
        <script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('site/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>


        <!-- Template Javascript -->
        <script src="{{ asset('site/js/main.js') }}"></script>

    </body>

</html>

