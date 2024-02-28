@extends('layouts.admin.body')
@section('titulo', 'Cadastrar Membros')

@section('conteudo')

    <h3 class="p-4 pb-0" style="color:#312f2f">Cadastrar Membro</h3>

    <form action="{{ route('admin.membro.store') }}" method="post" enctype="multipart/form-data" class="mt-3 mb-5">
        @csrf
        <div class="card-body">
            @include('_forms.UserForm.index')
                <button class="btn btn-outline-primary w-100 m-2" style="width: 82% !important; margin-left: 9% !important; color: #fff; background:linear-gradient(to left,#7357D6,#8b329d8a,#9479f6)"><strong>Cadastrar</strong></button>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('membro.create.success'))
            <script>
                Swal.fire(
                    'Membro Cadastrado Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('membro.create.error'))
            <script>
                Swal.fire(
                    'Erro ao cadastrar Membro',
                    '',
                    'error'
                )
            </script>

        @endif

    @endsection
