<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Karelogic</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- CSS/SASS y JS desde Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="login__body min-h-screen flex flex-col sm:justify-center items-center  sm:pt-0 justify-center">
            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-3xl">
                <div class="py-5 px-5">
                    <div class="flex flex-col items-center">
                        <div class="flex flex-col items-center">
                            <h2 class="text-xl pb-1">
                                {{ request()->is('login') ? 'Iniciar sesión' : 'Crea tu cuenta'}}
                            </h2>
                            <img class="w-36" src="/img/logo-karelogic.png" alt="Logo Karelogic">
                        </div>
                        <div class="flex mt-4">
                            <div class="flex justify-center items-center my-1 mx-1
                            px-4 py-2 bg-gray-300 rounded-lg">
                                <img class="w-5" src="/img/logo-google.png" alt="Logo Google">
                                <span class="pl-2 font-bold">
                                    Google
                                </span>
                            </div>
                            <div class="flex justify-center items-center my-1 mx-1
                            px-4 py-2 bg-gray-300 rounded-lg">
                                <img class="w-5" src="/img/logo-facebook.png" alt="Logo Google">
                                <span class="pl-2 font-bold">
                                    Facebook
                                </span>
                            </div>
                            <div class="flex justify-center items-center my-1 mx-1
                            px-4 py-2 bg-gray-300 rounded-lg">
                                <img class="w-5" src="/img/logo-apple.png" alt="Logo Google">
                                <span class="pl-2 font-bold">
                                    Apple
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="relative top-3 bg-white px-3 text-gray-400">o</span>
                            <hr class="border-1 border-gray-400 w-96" />
                        </div>
                    </div>
                
                    <!-- FORM -->
                    {{ $slot }}
                </div>            
            </div>
        </div>
    </body>
</html>
