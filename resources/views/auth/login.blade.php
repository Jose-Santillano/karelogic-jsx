<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label class="inline relative top-4 left-4 bg-white px-1" for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full border-black" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2" x-data="{ show: false}">
            <x-input-label class="inline relative top-4 left-4 bg-white px-1" for="password" :value="__('Contraseña')" />

            <input id="password" class="block mt-1 w-full border-black border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            :type="show ? 'text' : 'password'"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="flex justify-end h-2">
                <!-- Show password-->
                <button class="relative bottom-8 right-3" type="button" @click="show = !show" :class="{'hidden': show, 'block': !show}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />  
                    </svg>
                </button>

                <!-- Hidden password-->
                <button class="relative bottom-8 right-3" type="button" @click="show = !show" :class="{'hidden': !show, 'block': show}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                        <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                        <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                    </svg>                   
                </button>
            </div>
        </div>
        

        <!-- Remember Me -->
        <div class="flex block justify-between items-center">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-black text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-violet-700 hover:text-violet-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>

        <div class="mt-6">
            <x-primary-button class="flex justify-center w-full py-3">
                {{ __('Iniciar sesión') }}
            </x-primary-button>
        </div>

        <div class="flex justify-center mt-4">
            <label for="remember_me" class="inline-flex text-center items-center">
                <span class="ml-2 text-sm text-gray-600">¿No tienes una cuenta?</span>
                <a href="/register" class="ml-2 text-sm text-violet-700">Regístrate gratis</a>
            </label>
        </div>
    </form>
</x-guest-layout>
