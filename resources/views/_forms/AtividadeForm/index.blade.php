<div class="row">

<div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Atividades</h6>
        <div class="form-floating mb-3">
<<<<<<< HEAD
            <input type="text" class="form-control" id="titulo" name="titulo"
                placeholder="Digite o nome aqui" value="{{ isset($atividade->titulo) ? $atividade->titulo : old('titulo')}}">
            <label for="titulo">Nome da atividade</label>

            @error('titulo')
            <span class="invalid-feedbackj" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


         <div class="form-floating mb-3">
=======

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="titulo" name="titulo"
                placeholder="" value="{{ isset($atividade->titulo) ? $atividade->titulo : old('titulo')}}">
            <label for="titulo">titulo</label>

            @error('titulo')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
>>>>>>> cca9b14f604134edf58c9ee7b9923c3c59cbd9aa
            <textarea class="form-control" placeholder="Descreva aqui" name="descricao"
                id="descricao" style="height: 150px;">{{ isset($atividade->descricao) ? $atividade->descricao : old('descricao')}}</textarea>
            <label for="descricao">Descrição</label>

            @error('descricao')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

<<<<<<< HEAD

=======
>>>>>>> cca9b14f604134edf58c9ee7b9923c3c59cbd9aa
        <div class="form-floating mb-3">

            <label for="estado">Estado</label> <br>
            <select name="estado" id="estado" class="form-control select2" required>
                @if (!isset($atividade->estado))
                    <option value="" selected disabled>Selecione um ítem</option>
                @endif

<<<<<<< HEAD
                <option value= {{ isset($user) ?  $user->estado  'selected' : "" }}>Masculino</option>
=======
                <option value="R" {{ isset($atividade) && $atividade->estado == 'R' ? 'selected' : "" }}>Realizada</option>
                <option value="P" {{ isset($atividade) && $atividade->estado == 'P' ? 'selected' : "" }}>No Processo</option>
                <option value="NR" {{ isset($atividade) && $atividade->estado == 'NR' ? 'selected' : "" }}>Não Realizado</option>
>>>>>>> cca9b14f604134edf58c9ee7b9923c3c59cbd9aa
            </select>

            @error('estado')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
<<<<<<< HEAD
            <input type="text" class="form-control" id="unid_comando" name="unid_comando"
                placeholder="O responsável pela Organização" value="{{ isset($atividade->unid_comando) ? $atividade->unid_comando : old('unid_comando')}}">
            <label for="unid_comando">Unidade de Comando</label>

            @error('unid_comando')
=======
            <textarea class="form-control" placeholder="Descreva aqui" name="desc_estado"
                id="desc_estado" style="height: 150px;">{{ isset($atividade->desc_estado) ? $atividade->desc_estado : old('desc_estado')}}</textarea>
            <label for="desc_estado">Descrição do Estado</label>

            @error('desc_estado')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="data_inicio" name="data_inicio"
                placeholder="" value="{{ isset($atividade->data_inicio) ? $atividade->data_inicio : old('data_inicio')}}">
            <label for="data_inicio">Data de Início</label>

            @error('data_inicio')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="data_fim" name="data_fim"
                placeholder="" value="{{ isset($atividade->data_fim) ? $atividade->data_fim : old('data_fim')}}">
            <label for="data_fim">Data de Encerramento</label>

            @error('data_fim')
>>>>>>> cca9b14f604134edf58c9ee7b9923c3c59cbd9aa
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
<<<<<<< HEAD
       
=======
>>>>>>> cca9b14f604134edf58c9ee7b9923c3c59cbd9aa



    </div>
</div>

<style>
    .form-control{
        background: #fff !important;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid 2px #cdcdcd
    }
</style>
