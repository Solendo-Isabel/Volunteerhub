@extends('layouts.admin.body')
@section('titulo', 'Editar Actividades e Voluntarios')

@section('conteudo')

    <h3 class="p-4 pb-0" style="color:#312f2f">Editar Actividades e Voluntarios</h3>

    <form action="{{ route('admin.act_vol.update',['id'=>$act_vol->id]) }}" method="post" enctype="multipart/form-data" class="mt-3 mb-5">
        @csrf
        <div class="card-body">
            @include('_forms.ActVolForm.index')
                <button class="btn btn-outline-primary w-100 m-2" style="width: 82% !important; margin-left: 9% !important; color: #fff; background:linear-gradient(to left,#7357D6,#8b329d8a,#9479f6)"><strong>Editar</strong></button>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('act_vol.update.success'))
            <script>
                Swal.fire(
                    'act_vol Editado Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('act_vol.update.error'))
            <script>
                Swal.fire(
                    'Erro ao Editar act_vol',
                    '',
                    'error'
                )
            </script>

        @endif

    @endsection
