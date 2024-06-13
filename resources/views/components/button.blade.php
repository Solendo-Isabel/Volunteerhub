<button class="form-control button mt-2"  {{ $attributes->merge(['type' => 'submit', 'class' => '']) }} >
    {{ $slot }}
</button>

<style>
    .button{
        border: none;
        color:#7357D6;
        border-radius: 25px;
    }

    .button:hover{
        background: #7357D6;
        transition: ease-in-out;
        color: #fff;
    }
</style>
