
@extends('layouts.site.body')
@section('titulo','Home')


@section('conteudo')


            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="{{ asset('site/img/imagem1.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">VolunteerHub</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Encontre aqui atividades solidárias</h1>
                            <p class="mb-5 fs-5"> Se inscreva, participe e mude vidas daqueles que realmente precisam. Encontre aqui atividades de todo o tipo onde qualquer um pode dar o seu contributo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="{{ asset('site/img/imagem2.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">VolunteerHub</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Encontre aqui atividades solidárias</h1>
                            <p class="mb-5 fs-5"> Se inscreva, participe e mude vidas daqueles que realmente precisam. Encontre aqui atividades de todo o tipo onde qualquer um pode dar o seu contributo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">O que nós fazemos</h4>
                    </div>
                    <h1 class="display-3 mb-4">Oferecemos meios de publicação de actividades voluntárias.</h1>
                    <p class="mb-0">Nossa plataforma se dedica a ajudar as organizações gerir o número de pessoas que se inscreve em suas atividades, assim como permite visualizar dados estatísticos para medir o nível de adesão às mesmas.</p>
                </div>
                <div class="row g-4 justify-content-center">

                    @foreach ($atividades as $act)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" style="height: 500px; overflow: hidden;" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/images/login.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light">
                            <div class="service-content-inner">
                                <h5 class="mb-4">{{ $act->titulo }}</h5>
                                <p class="mb-4">{!! substr(strip_tags($act->descricao), 0, 100) . (strlen(strip_tags($act->descricao)) > 100 ? '...' : '') !!}</p>
                                <button type="button" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" data-bs-toggle="modal" data-bs-target="#ModalView{{ $act->id }}">
                                    Ler mais
                                  </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade text-left" id="ModalView{{ $act->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="margin-left: 2rem">{{ $act->titulo }}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{!! $act->descricao !!}</p>
                            </div>
                            <div class="buttomb mt-5" style="position: relative">
                                <p style="position: absolute; bottom:0; left:30px;">Estado da atividade:
                                    @if ($act->estado == "NR")
                                    <span class="" style="">Não Realizado</span>
                                    @endif
                                    @if ($act->estado == "P")
                                    <span class="" style="">No Processo</span>
                                    @endif
                                    @if ($act->estado == "R")
                                    <span class="" style="">Realizado</span>
                                    @endif

                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
              </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="{{ asset('assets/images/help.jpg') }}" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            <div class="about-img-inner">
                            <img src="{{ asset('assets/logo/logo.jpg') }}" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                            </div>
                            <div class="about-experience">15 anos de atividades</div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0">Sobre nós</h4>
                            <h1 class="display-3 mb-4">Estamos prontos para ajudar a melhorar o mundo.</h1>
                            <div class="mb-4">
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Saber exatamente quantas pessoas estão participando.</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Encontrar uma actividade que é exatamente aquela que procura.</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> A ajuda irá chegar a quem precisa e você saberá o quanto sua participação valeu a pena.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Porquê nos escolher</h4>
                    </div>
                    <h1 class="display-3 mb-4">Porquê nos escolher? Mude sua vida mudando vidas</h1>
                    <p class="mb-0">Sabemos o quão frustrante é procurar por algum meio de fazer a diferença, mas, não encontrar onde e como começar, a nossa existência permite que você encontre um conjunto diversas de atividades que poderá escolher</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-users fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Controle de voluntários</h5>
                                    <p class="mb-0">Dependendo da natureza da atividade, é importante efetuar o controle de quantos voluntários se prontificam para as mesmas, com o VolunteerHub já é possível saber!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-spinner fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Acompanhamento das atividades</h5>
                                    <p class="mb-0">Agora já pode saber, de forma automática, se a atividade já decorreu e se foi ou não realizada. Além disso pode-se verificar uma descrição que justifica o estado da atividade</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-question-circle fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Informações detalhadas</h5>
                                    <p class="mb-0">O processo de publicação de uma atividade em nosso site obriga as organizações a fornecer um número de informações que permita o fácil entendimento e completividade de informação</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-check-square fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Controle pessoal de desempenho</h5>
                                    <p class="mb-0">Fornecemos dados individuais que possibilitam cada voluntário saber ao certo em quantas atividade participou e entre elas quais se realizaram</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testemunhos</h4>
                    </div>
                    <h1 class="display-3 mb-4">O Que Nossos Voluntários Dizem</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="{{ asset('assets/images/unknown.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7"> Faço sempre o que puder para poder me juntar a uma boa causa, mas antes não me sentia muito seguro para tentar vinsto que não conhecia assim tantas organizações de confiança, mas tudo mudou quando conheci o VolunteerHub, com ele me sinto seguro e consigo encontrar ainda mais atividades! É muito gratificante.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Madalena Velhote</h5>
                                <p class="mb-2 text-white-50">Cacuaco,Luanda, Angola</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="{{ asset('assets/images/unknown.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Organizar uma atividade e fazer a mesma acontecer era uma tremenda confusão, tinhamos muitas espectativas sobre o número de voluntários a receber mas nunca contávamos com o número de pessoas, ou era maior ou menor. Quando nos inscrevemos neste site conseguimos ter 90% de controle sobre nossos voluntários e este fator ajuda no preparo de recursos
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Bráulio Cândido</h5>
                                <p class="mb-2 text-white-50">Cazenga, Launda, Angola</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="{{ asset('assets/images/unknown.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">A primeira vez que uma atividade em que participei foi somada ao meu perfil, foi uma alegria, cada vez que vejo a descrição de uma atividade como realizada, sinto que cumprimos nosso objetivo de dar o nosso melhor contribuindo para dar vida a iniciativas tão boas quanto essas
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Benvindo Marimba</h5>
                                <p class="mb-2 text-white-50">Cazenga, Launda, Angola</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Todas as Actividades</h4>
                    </div>
                    <h1 class="display-3 mb-4">Veja Aqui Tudo O Que Temos Para si</h1>
                </div>




                <div class="row g-4 justify-content-center">
                    @foreach ($atividades as $geral)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{ asset('assets/images/menu.png') }}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> Início {{ $geral->data_inicio }}</p>
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> Término {{ $geral->data_fim}}</p>
                                </div>
                                <a href="#" class="h4">{{ $geral->titulo }}</a>
                                <p class="my-4">{!! substr (strip_tags($geral->descricao),0,100) . (strlen(strip_tags($geral->descricao)) > 100 ? '...' : '') !!}</p>
                                <button type="button" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" data-bs-toggle="modal" data-bs-target="#ModalView{{ $geral->id }}">
                                    Ler mais
                                  </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade text-justify" id="ModalView{{ $geral->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="margin-left: 2rem">{{ $geral->titulo }}</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>{!! $geral->descricao !!}</p>
                                </div>
                                <div class="buttomb mt-5" style="position: relative">
                                    <p style="position: absolute; bottom:0; left:30px;">Estado da atividade:
                                        @if ($geral->estado == "NR")
                                        <span class="" style="">Não Realizado</span>
                                        @endif
                                        @if ($geral->estado == "P")
                                        <span class="" style="">No processo</span>
                                        @endif
                                        @if ($geral->estado == "R")
                                            <span class="" style="">Realizado</span>
                                        @endif

                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <style>
            .modal-header{
                background: linear-gradient(to left,#15B9D9,#35ffeb 40%,#06849e);
            }
            .modal-title{
                color: #fff !important;
            }
            .modal-content{
                width: 80%;
                margin-left: 5%;
            }
            .modal-body{
                padding:4rem;
            }

        </style>



  @endsection
