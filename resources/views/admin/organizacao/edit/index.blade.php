@extends('layouts.admin.body')
@section('titulo', 'Editar Organização')

@section('conteudo')

<h3 class="p-4">Cadastrar Organização</h3>

    <form action="{{ route('admin.organizacao.update', ['id'=>$organizacao->id]) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
            @include('_forms.OrgForm.index')

            <button class="btn btn-outline-primary w-100 m-2" style="width: 100px !important">Editar</button>
        </div>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('organizacao.update.success'))
            <script>
                Swal.fire(
                    'Organização Atuatizada Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('organizacao.update.error'))
            <script>
                Swal.fire(
                    'Erro ao Atuatizar Organização',
                    '',
                    'error'
                )
            </script>

        @endif

@endsection
