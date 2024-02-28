<div class="row">

<div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Voluntarios</h6>
        <div class="form-floating mb-3">

            <label for="id">Membro</label> <br>
            <select name="id" id="id" class="form-control select2" required>
                @if (!isset($voluntario->id))
                    <option value=""  disabled selected>Selecione um ítem</option>
                @endif

                @foreach ($users as $user)
                    <option value="{{ $user->id }}"  {{ isset($voluntario) ? ($voluntario->id == $user->id ? 'selected' : ""):""}}>{{ $user->vc_pr_nome }} {{ $user->vc_nome_meio }} {{ $user->vc_ult_nome }}</option>
                @endforeach
            </select>

            @error('id')
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
