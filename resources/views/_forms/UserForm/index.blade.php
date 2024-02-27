<div class="row">

<div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Membros</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="vc_pr_nome" name="vc_pr_nome"
                placeholder="Digite o nome aqui" value="{{ isset($user->vc_pr_nome) ? $user->vc_pr_nome : old('vc_pr_nome')}}">
            <label for="vc_pr_nome">Primeiro nome</label>

            @error('vc_pr_nome')
            <span class="invalid-feedbackj" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="vc_nome_meio" name="vc_nome_meio"
                placeholder="Digite o nome aqui" value="{{ isset($user->vc_nome_meio) ? $user->vc_nome_meio : old('vc_nome_meio')}}">
            <label for="vc_nome_meio">Nome Do Meio</label>

            @error('vc_nome_meio')
            <span class="invalid-feedbackj" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="vc_ult_nome" name="vc_ult_nome"
                placeholder="Digite o nome aqui" value="{{ isset($user->vc_ult_nome) ? $user->vc_ult_nome : old('vc_ult_nome')}}">
            <label for="vc_ult_nome">Primeiro nome</label>

            @error('vc_ult_nome')
            <span class="invalid-feedbackj" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="BI" name="BI"
                placeholder="" value="{{ isset($user->BI) ? $user->BI : old('BI')}}">
            <label for="BI">Número do BI</label>

            @error('BI')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="telefone" name="telefone"
                placeholder="O responsável pela Organização" value="{{ isset($user->telefone) ? $user->telefone : old('telefone')}}">
            <label for="telefone">Número de telefone</label>

            @error('telefone')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>


        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email"
                placeholder="" value="{{ isset($user->email) ? $user->email : old('email')}}">
            <label for="email">Email</label>

            @error('email')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="provincia" name="provincia"
                placeholder="" value="{{ isset($user->provincia) ? $user->provincia : old('provincia')}}">
            <label for="provincia">Província</label>

            @error('provincia')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="municipio" name="municipio"
                placeholder="" value="{{ isset($user->municipio) ? $user->municipio : old('municipio')}}">
            <label for="municipio">Municipio</label>

            @error('municipio')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">

            <label for="genero">Gênero</label> <br>
            <select name="genero" id="genero" class="form-control select2" required>
                @if (!isset($user->genero))
                    <option value="" selected disabled>Selecione um ítem</option>
                @endif

                <option value="M" {{ isset($user) && $user->genero == 'M' ? 'selected' : "" }}>Masculino</option>
                <option value="F" {{ isset($user) && $user->genero == 'F' ? 'selected' : "" }}>Feminino</option>
            </select>

            @error('genero')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password"
                placeholder="" value="{{ isset($user->password) ? $user->password : old('password')}}">
            <label for="password">Senha</label>

            @error('password')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">

            <label for="it_id_org">Organização</label> <br>
            <select name="it_id_org" id="it_id_org" class="form-control select2" required>
                @if (!isset($user->it_id_org))
                    <option value=""  disabled selected>Selecione um ítem</option>
                @endif

                @foreach ($organizacoes as $org)
                    <option value="{{ $org->id }}"  {{ isset($user) ? ($user->it_id_org == $org->id ? 'selected' : ""):""}}>{{ $org->vc_nome }}</option>
                @endforeach
            </select>

            @error('it_id_org')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
</div>

<style>
    .form-control{
        background: #fff !important;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid 2px #dac7f0
    }
</style>
