 <!-- Sidebar Start -->
 <div class="sidebar pb-3">
    <nav class="navbar bg-secondary navbar-dark" style="background: transparent !important">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
        <img src="{{ asset('assets/logo/logo1.jpg') }}" style="width: 140px; border-radius:50%;" alt="">
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px; margin-left:50px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>

            <div class="">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-building me-2"></i>Organização</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.organizacao.create.index') }}" class="dropdown-item">Criar</a>
                    <a href="{{ route('admin.organizacao.index') }}" class="dropdown-item">Listar</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Membros</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.membro.create.index') }}" class="dropdown-item">Criar</a>
                    <a href="{{ route('admin.membro.index') }}" class="dropdown-item">Listar</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-circle me-2"></i>Associado</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('admin.associado.create.index') }}" class="dropdown-item">Criar</a>
                            <a href="{{ route('admin.associado.index') }}" class="dropdown-item">Listar</a>
                        </div>
                   </div>
                   <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-heart me-2"></i>Voluntário</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('admin.voluntario.create.index') }}" class="dropdown-item">Criar</a>
                        <a href="{{ route('admin.voluntario.index') }}" class="dropdown-item">Listar</a>
                    </div>
               </div>


            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-calendar me-2"></i>Actividades</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.atividade.create.index') }}" class="dropdown-item">Criar</a>
                    <a href="{{ route('admin.atividade.index') }}" class="dropdown-item">Listar</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-handshake me-2"></i>Actividades & <em> </em> <br> Voluntários</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.act_vol.create.index') }}" class="dropdown-item">Criar</a>
                    <a href="{{ route('admin.act_vol.index') }}" class="dropdown-item">Listar</a>
                </div>
            </div>
        </div>
        <li class="nav-item dropdown mt-3">
            <form action="/logout" method="POST">
                          @csrf
                          <a href="/logout"  class="btn btn-primary
                          "  style="width:80%;margin-left:5px;" onclick="event.preventDefault();
                          this.closest('form').submit();">LogOut</a>
                      </form>
        </li>
    </nav>
</div>
<!-- Sidebar End -->
