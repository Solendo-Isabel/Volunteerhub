<div class="row">

<div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Organizações</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="vc_nome" name="vc_nome"
                placeholder="Digite o nome aqui" value="{{ isset($organizacao->vc_nome) ? $organizacao->vc_nome : old('vc_nome')}}">
            <label for="vc_nome">Nome da Organização</label>

            @error('vc_nome')
            <span class="invalid-feedbackj" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="unid_comando" name="unid_comando"
                placeholder="O responsável pela Organização" value="{{ isset($organizacao->unid_comando) ? $organizacao->unid_comando : old('unid_comando')}}">
            <label for="unid_comando">Unidade de Comando</label>

            @error('unid_comando')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Descreva aqui" name="descricao"
                id="descricao" style="height: 150px;">{{ isset($organizacao->descricao) ? $organizacao->descricao : old('descricao')}}</textarea>
            <label for="descricao">Descrição</label>

            @error('descricao')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
        <div class="form-floating mb-3">
                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*"
                    placeholder="Selecione a imagem" value="{{ isset($organizacao->imagem) ? $organizacao->imagem : old('imagem')}}">
                <label for="imagem">Imagem</label>

                @error('imagem')
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
