<!DOCTYPE html>
<html lang="es" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OmniCraft - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-base-200">
    {{-- Navbar --}}
    <div class="navbar bg-base-100 shadow-lg px-4 lg:px-8">
        <div class="flex-1 gap-2">
            <span class="text-2xl">⛏</span>
            <a class="text-xl font-bold tracking-wide">OmniCraft</a>
        </div>
        <div class="flex-none gap-3">
            <div class="badge badge-success gap-1">
                <span class="size-2 rounded-full bg-success animate-pulse"></span>
                Servidor Online
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar placeholder">
                    <div class="bg-neutral text-neutral-content w-10 rounded-full">
                        <span class="text-sm">U</span>
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-10 mt-3 w-52 p-2 shadow">
                    <li><a>Perfil</a></li>
                    <li><a>Configuracion</a></li>
                    <li><a>Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Content --}}
    <main class="p-4 lg:p-8 max-w-7xl mx-auto">
        @yield('content')
    </main>
</body>

</html>
