<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>

    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

<style>
    .min-h-screen{
        background: url("{{ asset('assets/images/login.jpg') }}");
        background-size: cover;
        height: 100vh;
        display: grid;
        place-items: center;
        }

        .w-full{
            background: none !importanrt;
            border-radius: 0.35rem;
        }
</style>
