@extends('layouts.admin.body')
@section('titulo', 'Editar Atividades')

@section('conteudo')

    <h3 class="p-4 pb-0" style="color:#312f2f">Editar Atividade</h3>

    <form action="{{ route('admin.atividade.update',['id'=>$atividade->id]) }}" method="post" enctype="multipart/form-data" class="mt-3 mb-5">
        @csrf
        <div class="card-body">
            @include('_forms.AtividadeForm.index')
                <button class="btn btn-outline-primary w-100 m-2" style="width: 82% !important; margin-left: 9% !important; color: #fff; background:linear-gradient(to left,#7357D6,#8b329d8a,#9479f6)"><strong>Editar</strong></button>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('atividade.update.success'))
            <script>
                Swal.fire(
                    'atividade Editado Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('atividade.update.error'))
            <script>
                Swal.fire(
                    'Erro ao Editar atividade',
                    '',
                    'error'
                )
            </script>

        @endif

    @endsection
