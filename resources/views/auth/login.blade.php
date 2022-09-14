<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h2 class="font-semibold text-gray-800 leading-tight text-center text-3xl"> {{__('Familia')}}</h2>
            <i class="fa-solid fa-people-line fa-7x"></i>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 float-right" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-3 bg-green-500">
                    {{ __('Ingresar') }}
                </x-button>

                @if (Route::has('password.request'))
                    <x-button class="ml-3">
                        <a href="{{ route('register') }}" >
                            {{ __('Registrarme') }}
                        </a>
                    </x-button>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
