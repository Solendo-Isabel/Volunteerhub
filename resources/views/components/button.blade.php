<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

<style>
    button{
        width: 100%;
        height: 40px;
        background: linear-gradient(to right,black,rgb(200, 122, 200),#fff);
        color: #fff;
        border: none;
        margin-bottom: 2rem;
        border-radius: 0.25rem;
        cursor: pointer;
    }
</style>
