<div class="row">

<div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Associados</h6>
        <div class="form-floating mb-3">

            <label for="id_membro">Membro</label> <br>
            <select name="id_membro" id="id_membro" class="form-control select2" required>
                @if (!isset($associado->id_membro))
                    <option value=""  disabled selected>Selecione um ítem</option>
                @endif

                @foreach ($users as $user)
                    <option value="{{ $user->id }}"  {{ isset($associado) ? ($associado->id_membro == $user->id ? 'selected' : ""):""}}>{{ $user->vc_pr_nome }} {{ $user->vc_nome_meio }} {{ $user->vc_ult_nome }}</option>
                @endforeach
            </select>

            @error('id_membro')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="credencial" name="credencial"
                placeholder="" value="{{ isset($associado->credencial) ? $associado->credencial : old('credencial')}}">
            <label for="credencial">Credencial</label>

            @error('credencial')
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
