 <div class="row">

 <div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Atividades</h6>
        <div class="form-floating mb-3">

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

        <p class="mt-5">Descrição da Atividade</p>

        <div class="form-floating mb-3">
            <div id="container">
                <textarea class="form-control" id="editor" placeholder="Descreva aqui" name="descricao"
                style="height: 150px;">{{ isset($atividade->descricao) ? $atividade->descricao : old('descricao')}}</textarea>
            </div>



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

                <option value="R" {{ isset($atividade) && $atividade->estado == 'R' ? 'selected' : "" }}>Realizada</option>
                <option value="P" {{ isset($atividade) && $atividade->estado == 'P' ? 'selected' : "" }}>No Processo</option>
                <option value="NR" {{ isset($atividade) && $atividade->estado == 'NR' ? 'selected' : "" }}>Não Realizado</option>
            </select>

            @error('estado')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <p class="mt-5">Descrição do Estado</p>

        <div class="form-floating mb-3">
            <div id="container">
                <textarea class="form-control" placeholder="Descreva aqui" id="desc_estado" rows="2"  name="desc_estado"
            style="height: 150px !important;">{{ isset($atividade->desc_estado) ? $atividade->desc_estado : old('desc_estado')}}</textarea>
        </div>


            @error('desc_estado')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <br>
        <br>
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

        <br>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="data_fim" name="data_fim"
                placeholder="" value="{{ isset($atividade->data_fim) ? $atividade->data_fim : old('data_fim')}}">
            <label for="data_fim">Data de Encerramento</label>

            @error('data_fim')
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
        border-bottom: solid 2px #cdcdcd;
    }

    #container{
        width: 100%;
        margin: 0 auto;
        height: 20vh;
        margin-top: 20px;
        overflow: hidden;
        border-bottom: solid 2px #eee;
    }


    </style>

