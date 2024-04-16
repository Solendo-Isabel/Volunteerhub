@extends('layouts.admin.body')
@section('titulo','Listar Actividades e Voluntarios')

@section('conteudo')

<div class="col-11 m-5">
    <form class="form">
        <div class="form-row">
          <div class="form-group col-auto mr-auto">
            <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
            <select class="custom-select mr-sm-2 form-control" style="border: none; background:#fff9f9; width:100px" id="inlineFormCustomSelectPref1">
              <option value="">...</option>
              <option value="1">12</option>
              <option value="2" selected>32</option>
              <option value="3">64</option>
              <option value="3">128</option>
            </select>
          </div>
          <div class="form-group col-auto mt-2 mb-2">
            <label for="search" class="sr-only">Search</label>
            <input type="text" style="background: white;color:#191818; border:none;"  class="form-control" id="search1" value="" placeholder="Search">
          </div>
        </div>
      </form>
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Actividades e Voluntarios</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Voluntário</th>
                        <th scope="col">Actividade</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($atividade_voluntario as $act_vol)
                        <tr>
                            <td>{{ $act_vol->id }}</td>
                            <td>{{ $act_vol->id_voluntario }}</td>
                            <td>{{ $act_vol->id_atividade }}</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('admin.act_vol.edit.index',['id'=>$act_vol->id]) }}">Editar</a>
                                        <a class="dropdown-item" href="{{ route('admin.act_vol.delete',['id'=>$act_vol->id])}}">Eliminar</a>
                                        <a class="dropdown-item" href="{{ route('admin.act_vol.purge',['id'=>$act_vol->id]) }}">Purgar</a>
                                    </div>
                                </div>

                            </td>
                        </tr>


                    @endforeach


                </tbody>
            </table>
            <nav aria-label="Table Paging" class="mb-0 text-muted">
                <ul class="pagination justify-content-center mb-0">
                  <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                </ul>
              </nav>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
@if (session('act_vol.delete.success'))
    <script>
        Swal.fire(
            'act_vol Eliminado com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('act_vol.delete.error'))
    <script>
        Swal.fire(
            'Erro ao Eliminar act_vol!',
            '',
            'error'
        )
    </script>
@endif
@if (session('act_vol.purge.success'))
    <script>
        Swal.fire(
            'act_vol Purgada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('act_vol.purge.error'))
    <script>
        Swal.fire(
            'Erro ao Purgar act_vol!',
            '',
            'error'
        )
    </script>
@endif

@endsection

