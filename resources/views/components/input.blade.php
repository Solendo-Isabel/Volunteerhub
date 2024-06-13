@props(['disabled' => false])

<input class="form-control pb-2 input" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '']) !!}>

<style>

.input{
    background: transparent !important;
    border: none;
    border-radius: 0;
    border-bottom: solid 2px #fff;
    margin-bottom: 2rem;
}
.input:focus{
    background: transparent !important;
}
</style>
