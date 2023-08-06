<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @livewireStyles

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    @auth
        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <label for="my-drawer" class="btn btn-primary drawer-button">Open drawer</label>
                {{ $slot }}
            </div>
            <div class="drawer-side">
                <label for="my-drawer" class="drawer-overlay"></label>
                <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
                    <li><a>Sidebar Item 1</a></li>
                    <li><a>Sidebar Item 2</a></li>
                </ul>
            </div>
        </div>
    @else
        <div class="flex flex-1 justify-center items-center h-screen">
            <div class="card lg:card-side bg-base-200 w-full max-w-3xl shadow-xl">
                <figure>
                    <img src="https://daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.jpg" alt="Album" />
                </figure>
                {{ $slot }}
            </div>
        </div>
    @endauth

    @livewireScripts
</body>

</html>
