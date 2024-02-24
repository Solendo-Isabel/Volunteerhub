@extends('layouts.admin.body')
@section('titulo', 'Editar Organização')

@section('conteudo')

<h3 class="p-4">Cadastrar Organização</h3>

    <form action="{{ route('admin.organizacao.update', ['id'=>$organizacao->id]) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
            @include('_forms.OrgForm.index')

            <button class="btn btn-outline-primary w-100 m-2" style="width: 100px !important" type="button">Editar</button>
        </div>
        </div>
    </form>

    @if (session('organizacao.update.success'))
        <script>
            Swal.fire(
                'Organização Cadastrada Com Sucesso!',
                '',
                'success'
            )
        </script>
    @endif

    @if (session('organizacao.update.error'))
        <script>
            Swal.fire(
                'Erro ao cadastrar Organização',
                '',
                'error'
            )
        </script>
        @endif

@endsection
