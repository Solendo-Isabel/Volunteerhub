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
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

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

