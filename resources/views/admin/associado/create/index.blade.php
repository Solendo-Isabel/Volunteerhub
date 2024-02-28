@extends('layouts.admin.body')
@section('titulo', 'Cadastrar Associados')

@section('conteudo')

    <h3 class="p-4 pb-0" style="color:#312f2f">Cadastrar Associado</h3>

    <form action="{{ route('admin.associado.store') }}" method="post" enctype="multipart/form-data" class="mt-3 mb-5">
        @csrf
        <div class="card-body">
            @include('_forms.AssociadoForm.index')
                <button class="btn btn-outline-primary w-100 m-2" style="width: 82% !important; margin-left: 9% !important; color: #fff; background:linear-gradient(to left,#7357D6,#8b329d8a,#9479f6)"><strong>Cadastrar</strong></button>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('associado.create.success'))
            <script>
                Swal.fire(
                    'associado Cadastrado Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('associado.create.error'))
            <script>
                Swal.fire(
                    'Erro ao cadastrar associado',
                    '',
                    'error'
                )
            </script>

        @endif

    @endsection
