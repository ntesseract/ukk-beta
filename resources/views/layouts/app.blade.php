<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

        <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

        <title>{{ config('app.name', 'UKK') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        nav {
             transition: background-color 0.3s ease;
        }

        nav:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        nav .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
                    @media print {
                    body * {
                visibility: hidden;
            }
            .modal-body * {
                visibility: visible;
            }
            .modal-body {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
        </style>
    </head>
    <body class="font-sans antialiased min-h-screen flex flex-col">
        <div class="min-h-screen bg-blue-50">
            @include('layouts.navigation')

            {{-- <div class="flex justify-center mt-10">
                <img src="{{ asset('assets/img/logo.png ') }}" alt="" class="h-20">
            </div> --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <x-footer />
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </body>
</html>
