@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>

<style>
    input{
        width: 100%;
        margin-bottom: 2rem;
        background: transparent;
        border: none;
        border-bottom: solid 1px #fff;
        border-radius:0px;
        height: 30px;
    }

    input:hover{
        background: none;
    }
</style>
