<x-guest-layout>
    <x-jet-authentication-card>
        <!-- Logo para el login -->
        <x-slot name="logo">
            <img src="https://i.ibb.co/CmWZvGm/Logo-Epic-Pelis.png">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <!-- Estado de la sesion del usuario-->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <!-- Login de usuario-->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="Correo" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Contraseña" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        Recuperar contraseña
                    </a>
                @endif
                <x-jet-button class="ml-4">
                    Ingresar
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
