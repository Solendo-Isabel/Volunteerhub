@extends('layouts.admin.body')
@section('titulo','Listar Membros')

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
        <h6 class="mb-4">Membros</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">BI</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Província</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Organização</th>
                        <th scope="col">###</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->vc_pr_nome }} {{ $user->vc_nome_meio }} {{ $user->vc_ult_nome }}</td>
                            <td>{{ $user->BI }}</td>
                            @if ($user->genero == "M")
                                <td>Masculino</td>
                            @endif
                            @if ($user->genero == "F")
                                <td>Feminino</td>
                            @endif
                            <td>{{ $user->telefone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->provincia }}</td>
                            <td>{{ $user->municipio }}</td>
                            <td>{{ $user->org_nome }}</td>
                            <td><img src="{{ asset($user->imagem) }}" style="width: 70px; border-radius:0.35rem" alt=""></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('admin.membro.edit.index',['id'=>$user->id]) }}">Editar</a>
                                        <a class="dropdown-item" href="{{ route('admin.membro.delete',['id'=>$user->id])}}">Eliminar</a>
                                        <a class="dropdown-item" href="{{ route('admin.membro.purge',['id'=>$user->id]) }}">Purgar</a>
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
@if (session('membro.delete.success'))
    <script>
        Swal.fire(
            'useranização Eliminada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('membro.delete.error'))
    <script>
        Swal.fire(
            'Erro ao Eliminar useranização!',
            '',
            'error'
        )
    </script>
@endif
@if (session('membro.purge.success'))
    <script>
        Swal.fire(
            'useranização Purgada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('membro.purge.error'))
    <script>
        Swal.fire(
            'Erro ao Purgar useranização!',
            '',
            'error'
        )
    </script>
@endif

@endsection

