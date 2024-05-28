<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<div class="min-h-screen sm:pt-0 bg-gray-100">
    <div>

    </div>

    <div class="w-full shadow p-5">
        {{ $slot }}
    </div>
</div>

<style>
    .min-h-screen{
        background:linear-gradient(rgb(173, 1, 173), #1664eb );
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
