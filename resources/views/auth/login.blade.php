
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="form">
            <h3>Login</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <span class=" text-gray-600">{{ __('Remember me') }}</span>
                        <x-checkbox id="remember_me" name="remember" />
                    </label>
                </div>

                    <x-button class="ms-4">
                        {{ __('Log in') }}
                    </x-button>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                </div>
            </form>
        </div>


    </x-authentication-card>
</x-guest-layout>

<style>

    .form{
        background-color: rgba(0, 0, 0, 0.5);
        padding:10px;
        border-radius: 0.35rem;
        padding-left: 3rem;
        width: 100%;
        padding-right: 3rem;
    }

    .form h3{
        color:#fff;
        border-bottom:solid 1px rgb(114, 40, 114);
        margin-bottom: 7rem;
        width: 70px;
    }

    .underline{
        color: #fff;
    }
</style>
