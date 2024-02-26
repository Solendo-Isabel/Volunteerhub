@extends('layouts.admin.body')
@section('titulo','Cadastrar Organizações')

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
        <h6 class="mb-4">Responsive Table</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome da organização</th>
                        <th scope="col">Unidade de Comando</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">###</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($organizacoes as $org)
                        <tr>
                            <td>{{ $org->id }}</td>
                            <td>{{ $org->vc_nome }}</td>
                            <td>{{ $org->unid_comando }}</td>
                            <td>{{ $org->descricao }}</td>
                            <td><img src="{{ asset($org->imagem) }}" style="width: 70px; border-radius:0.35rem" alt=""></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('admin.organizacao.edit.index',['id'=>$org->id]) }}">Editar</a>
                                        <a class="dropdown-item" href="{{ route('admin.organizacao.delete',['id'=>$org->id])}}">Eliminar</a>
                                        <a class="dropdown-item" href="{{ route('admin.organizacao.purge',['id'=>$org->id]) }}">Purgar</a>
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
@if (session('organizacao.delete.success'))
    <script>
        Swal.fire(
            'Organização Eliminada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('organizacao.delete.error'))
    <script>
        Swal.fire(
            'Erro ao Eliminar Organização!',
            '',
            'error'
        )
    </script>
@endif
@if (session('organizacao.purge.success'))
    <script>
        Swal.fire(
            'Organização Purgada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('organizacao.purge.error'))
    <script>
        Swal.fire(
            'Erro ao Purgar Organização!',
            '',
            'error'
        )
    </script>
@endif

@endsection

