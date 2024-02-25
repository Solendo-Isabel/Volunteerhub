@extends('layouts.admin.body')
@section('titulo', 'Cadastrar Organizações')

@section('conteudo')

    <h3 class="p-4 pb-0" style="color:#312f2f">Cadastrar Organização</h3>

    <form action="{{ route('admin.organizacao.store') }}" method="post" enctype="multipart/form-data" class="mt-3 mb-5">
        @csrf
        <div class="card-body">
            @include('_forms.OrgForm.index')
                <button class="btn btn-outline-primary w-100 m-2" style="width: 82% !important; margin-left: 9% !important; color: #fff; background:linear-gradient(to left,#7357D6,#8b329d8a,#9479f6)"><strong>Cadastrar</strong></button>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('organizacao.create.success'))
            <script>
                Swal.fire(
                    'Organização Cadastrada Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('organizacao.create.error'))
            <script>
                Swal.fire(
                    'Erro ao cadastrar Organização',
                    '',
                    'error'
                )
            </script>

        @endif

    @endsection
