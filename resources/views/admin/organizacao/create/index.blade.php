@extends('layouts.admin.body')
@section('titulo', 'Cadastrar Organizações')

@section('conteudo')

    <h3 class="p-4">Cadastrar Organização</h3>

    <form action="{{ route('admin.organizacao.store') }}" method="post" enctype="multipart/form-data" class="mt-5 mb-5">
        @csrf
        <div class="card-body">
            @include('_forms.OrgForm.index')
            <button class="btn btn-outline-primary w-100 m-2" style="width: 100px !important">Cadastrar</button>
        </div>
    </form>

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
