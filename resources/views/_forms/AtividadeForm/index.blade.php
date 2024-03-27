<div class="row">

<div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Atividades</h6>
        <div class="form-floating mb-3">
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
            <textarea class="form-control" placeholder="Descreva aqui" name="descricao"
                id="descricao" style="height: 150px;">{{ isset($atividade->descricao) ? $atividade->descricao : old('descricao')}}</textarea>
            <label for="descricao">Descrição</label>

            @error('descricao')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>


        <div class="form-floating mb-3">

            <label for="estado">Estado</label> <br>
            <select name="estado" id="estado" class="form-control select2" required>
                @if (!isset($atividade->estado))
                    <option value="" selected disabled>Selecione um ítem</option>
                @endif

                <option value= {{ isset($user) ?  $user->estado  'selected' : "" }}>Masculino</option>
            </select>

            @error('estado')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="unid_comando" name="unid_comando"
                placeholder="O responsável pela Organização" value="{{ isset($atividade->unid_comando) ? $atividade->unid_comando : old('unid_comando')}}">
            <label for="unid_comando">Unidade de Comando</label>

            @error('unid_comando')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
       



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
