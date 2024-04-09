<div class="row">

<div class="col-sm-12 col-xl-10 offset-md-1">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Actividades E Voluntários</h6>
        <div class="form-floating mb-3">

            <label for="id_atividade">Actividade</label> <br>
            <select name="id_atividade" id_="id_atividade" class="form-control select2" required>
                @if (!isset($act_vol->id_atividade))
                    <option value=""  disabled selected>Selecione um ítem</option>
                @endif

                @foreach ($atividades as $atividade)
                    <option value="{{ $atividade->id }}"  {{ isset($act_vol) ? ($act_vol->id_atividade == $atividade->id ? 'selected' : ""):""}}>{{ $atividade->titulo }}</option>
                @endforeach
            </select>

            @error('id_atividade')
        <span class="invalid-feedbackj" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        <div class="form-floating mb-3">

            <label for="id_voluntario">Voluntário</label> <br>
            <select name="id_voluntario" id_="id_voluntario" class="form-control select2" required>
                @if (!isset($act_vol->id_voluntario))
                    <option value=""  disabled selected>Selecione um ítem</option>
                @endif

                @foreach ($voluntarios as $voluntario)
                    <option value="{{ $voluntario->id }}"  {{ isset($act_vol) ? ($act_vol->id_voluntario == $voluntario->id ? 'selected' : ""):""}}>{{ $voluntario->voluntario }} {{ $voluntario->voluntario2 }} {{ $voluntario->voluntario3 }}</option>
                @endforeach
            </select>

            @error('id_voluntario')
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
