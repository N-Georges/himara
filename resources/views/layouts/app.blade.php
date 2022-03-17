<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
        <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.9.1/cdn.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
    
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
    
            <!-- Page Content -->
            <main class="px-6 py-4 flex flex-col">
                <div class="">
                    @include('layouts.flash')
                </div>
                @yield('content')
            </main>
        </div>



        <script>
            function viewPassword() {
                let x = document.getElementById("old_password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
                let y = document.getElementById("new_password");
                if (y.type === "password") {
                    y.type = "text";
                } else {
                    y.type = "password";
                }
                let z = document.getElementById("confirm_password");
                if (z.type === "password") {
                    z.type = "text";
                } else {
                    z.type = "password";
                }
            }
        </script>
        <script src="./node_modules/tw-elements/dist/js/index.min.js"></script>
    </body>
</html>
