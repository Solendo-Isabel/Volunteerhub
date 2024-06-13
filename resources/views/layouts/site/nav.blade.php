        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fa fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="#" class="text-light me-0"><i class="fa fa-envelope text-primary me-2"></i>volunteerhub@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>VolunteerHub</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="contact.html" class="nav-item nav-link">Contacte-nos</a>
                    </div>

                    </div>
                    @if(!Auth::check())
                        <span class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0" > <a href="{{ url('/register') }}">Registar</a> / <a href="{{ url('/login') }}">Entrar</a></span>
                    @endif
                    @if (Auth::check())
                        <a href="{{ url('/dash') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Painel</a>
                        <br>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                @if (isset(Auth::user()->imagem))
                                <img class="rounded-circle" src="{{ asset(Auth::user()->imagem) }}" alt="" style="width: 40px; height: 40px;">
                            @else
                                <img class="rounded-circle" src="{{ asset('assets/images/unknown.jpg') }}" alt="" style="width: 40px; height: 40px;">
                            @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                <span class="d-none d-lg-inline-flex">{{ Auth::user()->vc_pr_nome }} {{ Auth::user()->vc_ult_nome }}</span>
                                <a href="{{ url('/show') }}" class="dropdown-item">My Profile</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                <a href="#" class="dropdown-item">Log Out</a>
                            </div>
                        </div>

                    @endif
                </div>
            </nav>

<style>
    span{
        background: #fff !important;
    }

</style>
