 <!-- Sidebar Start -->
 <div class="sidebar pb-3">
    <nav class="navbar bg-secondary navbar-dark" style="background: transparent !important">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary" style="color: #fff !important"><i class="fa fa-user-edit me-2"></i>Volunteer <span style="color:#000000">Hub</span></h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Organização</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.organizacao.create.index') }}" class="dropdown-item">Criar</a>
                    <a href="{{ route('admin.organizacao.index') }}" class="dropdown-item">Listar</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Membros</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.membro.create.index') }}" class="dropdown-item">Criar</a>
                    <a href="{{ route('admin.membro.index') }}" class="dropdown-item">Listar</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
