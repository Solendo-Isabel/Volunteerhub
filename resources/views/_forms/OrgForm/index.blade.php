<div class="row">

    @isset($organizacao->imagem)
        <div class="col-md-6">

        </div>
    @endisset

<div class="col-sm-12 col-xl-9 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Organizações</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="vc_nome"
                placeholder="Digite o nome aqui" value="{{ isset($organizacao->vc_nome) ? $organizacao->vc_nome : old('vc_nome')}}">
            <label for="vc_nome">Nome da Organização</label>

            @error('vc_nome')
            <span class="invalid-feedbackj" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="unid_comando"
                placeholder="O responsável pela Organização" value="{{ isset($organizacao->unid_comando) ? $organizacao->unid_comando : old('unid_comando')}}">
            <label for="unid_comando">Unidade de Comando</label>

            @error('unid_comando')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Descreva aqui"
                id="descricao" style="height: 150px;"value="{{ isset($organizacao->descricao) ? $organizacao->descricao : old('vc_descricao')}}"></textarea>
            <label for="descricao">Descrição</label>

            @error('descricao')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
    </div>
</div>
