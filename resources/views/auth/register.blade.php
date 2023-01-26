<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex gap-3">
            <!-- Name -->
            <div>
                <x-input-label class="inline relative top-4 left-4 bg-white px-1"  for="name" :value="__('Nombre')" />
                <x-text-input id="name" class="block mt-1 w-full border-black" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Last name -->
            <div>
                <x-input-label class="inline relative top-4 left-4 bg-white px-1" for="last-name" :value="__('Apellidos')" />
                <x-text-input id="last-name" class="block mt-1 w-full border-black" type="text" name="last-name" :value="old('last-name')" required />
                <x-input-error :messages="$errors->get('last-name')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-1">
            <x-input-label class="inline relative top-4 left-4 bg-white px-1" for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full border-black" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-1">
            <x-input-label class="inline relative top-4 left-4 bg-white px-1" for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full border-black"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <!--
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        -->

        <div class="flex flex-col items-center justify-end mt-6">
            <x-primary-button class="w-full flex justify-center py-3">
                {{ __('Crear cuenta') }}
            </x-primary-button>
            <div class="text-xs self-start mt-2">
                <span>Al continuar, aceptas los 
                    <a class="text-violet-700">Términos</a>
                    y la
                    <a class="text-violet-700">Política de privacidad</a>
                </span>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <label for="remember_me" class="inline-flex text-center items-center">
                <span class="ml-2 text-sm text-gray-600">¿Ya tienes una cuenta?</span>
                <a href="/login" class="ml-2 text-sm text-violet-700">Inicia sesión</a>
            </label>
        </div>
    </form>
</x-guest-layout>
