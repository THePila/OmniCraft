@extends('layouts.app')

@section('content')
    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        {{-- Jugadores Conectados --}}
        <div class="stat bg-base-100 rounded-box shadow">
            <div class="stat-figure text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                </svg>
            </div>
            <div class="stat-title">Jugadores Online</div>
            <div class="stat-value text-primary">12</div>
            <div class="stat-desc">de 50 slots disponibles</div>
        </div>

        {{-- Estado del Servidor --}}
        <div class="stat bg-base-100 rounded-box shadow">
            <div class="stat-figure text-success">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z"></path>
                </svg>
            </div>
            <div class="stat-title">Estado</div>
            <div class="stat-value text-success text-lg">Online</div>
            <div class="stat-desc">Uptime: 3d 14h 22m</div>
        </div>

        {{-- TPS del Servidor --}}
        <div class="stat bg-base-100 rounded-box shadow">
            <div class="stat-figure text-info">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                </svg>
            </div>
            <div class="stat-title">TPS</div>
            <div class="stat-value text-info">19.8</div>
            <div class="stat-desc">Rendimiento del servidor</div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        {{-- Chat del Servidor --}}
        <div class="lg:col-span-2">
            <div class="card bg-base-100 shadow-lg h-full">
                <div class="card-body p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h2 class="card-title text-base">Chat del Servidor</h2>
                        <div class="badge badge-ghost badge-sm">En vivo</div>
                    </div>

                    {{-- Mensajes --}}
                    <div class="bg-base-200 rounded-box p-4 h-96 overflow-y-auto flex flex-col gap-3" id="chat-messages">
                        {{-- Mensaje del sistema --}}
                        <div class="chat chat-start">
                            <div class="chat-header">
                                <span class="text-warning font-bold">Servidor</span>
                            </div>
                            <div class="chat-bubble chat-bubble-warning text-sm">
                                Bienvenido a OmniCraft! Recuerda leer las reglas.
                            </div>
                            <div class="chat-footer opacity-50 text-xs">14:30</div>
                        </div>

                        {{-- Mensaje de jugador --}}
                        <div class="chat chat-start">
                            <div class="chat-image avatar placeholder">
                                <div class="bg-primary text-primary-content w-8 rounded-full">
                                    <span class="text-xs">S</span>
                                </div>
                            </div>
                            <div class="chat-header">
                                <span class="font-semibold">Steve_MC</span>
                            </div>
                            <div class="chat-bubble text-sm">Hola! Alguien quiere ir al Nether?</div>
                            <div class="chat-footer opacity-50 text-xs">14:32</div>
                        </div>

                        <div class="chat chat-start">
                            <div class="chat-image avatar placeholder">
                                <div class="bg-secondary text-secondary-content w-8 rounded-full">
                                    <span class="text-xs">A</span>
                                </div>
                            </div>
                            <div class="chat-header">
                                <span class="font-semibold">Alex_Builder</span>
                            </div>
                            <div class="chat-bubble text-sm">Yo voy! Espera que agarro mis cosas</div>
                            <div class="chat-footer opacity-50 text-xs">14:33</div>
                        </div>

                        <div class="chat chat-start">
                            <div class="chat-image avatar placeholder">
                                <div class="bg-accent text-accent-content w-8 rounded-full">
                                    <span class="text-xs">C</span>
                                </div>
                            </div>
                            <div class="chat-header">
                                <span class="font-semibold">Creeper_Pro</span>
                            </div>
                            <div class="chat-bubble text-sm">Cuidado con los Ghasts por el portal principal</div>
                            <div class="chat-footer opacity-50 text-xs">14:34</div>
                        </div>

                        {{-- Mensaje propio --}}
                        <div class="chat chat-end">
                            <div class="chat-image avatar placeholder">
                                <div class="bg-info text-info-content w-8 rounded-full">
                                    <span class="text-xs">T</span>
                                </div>
                            </div>
                            <div class="chat-header">
                                <span class="font-semibold">Tu</span>
                            </div>
                            <div class="chat-bubble chat-bubble-primary text-sm">Yo tambien voy, los espero en spawn</div>
                            <div class="chat-footer opacity-50 text-xs">14:35</div>
                        </div>

                        <div class="chat chat-start">
                            <div class="chat-header">
                                <span class="text-success font-bold">[Admin] NicoOwner</span>
                            </div>
                            <div class="chat-bubble chat-bubble-success text-sm">
                                Recuerden que hoy a las 8pm hay evento PvP!
                            </div>
                            <div class="chat-footer opacity-50 text-xs">14:36</div>
                        </div>
                    </div>

                    {{-- Input de mensaje --}}
                    <div class="join w-full mt-2">
                        <input type="text" placeholder="Escribe un mensaje..." class="input input-bordered join-item w-full" id="chat-input" />
                        <button class="btn btn-primary join-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Panel Lateral --}}
        <div class="flex flex-col gap-6">
            {{-- Lista de Jugadores --}}
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h2 class="card-title text-base">Jugadores Online</h2>
                        <div class="badge badge-primary">12</div>
                    </div>

                    <ul class="space-y-2 max-h-64 overflow-y-auto">
                        <li class="flex items-center gap-3 p-2 rounded-lg hover:bg-base-200 transition-colors">
                            <div class="avatar placeholder online">
                                <div class="bg-primary text-primary-content w-8 rounded-full">
                                    <span class="text-xs">S</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">Steve_MC</p>
                            </div>
                            <div class="badge badge-ghost badge-xs">Survival</div>
                        </li>

                        <li class="flex items-center gap-3 p-2 rounded-lg hover:bg-base-200 transition-colors">
                            <div class="avatar placeholder online">
                                <div class="bg-secondary text-secondary-content w-8 rounded-full">
                                    <span class="text-xs">A</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">Alex_Builder</p>
                            </div>
                            <div class="badge badge-ghost badge-xs">Creative</div>
                        </li>

                        <li class="flex items-center gap-3 p-2 rounded-lg hover:bg-base-200 transition-colors">
                            <div class="avatar placeholder online">
                                <div class="bg-accent text-accent-content w-8 rounded-full">
                                    <span class="text-xs">C</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">Creeper_Pro</p>
                            </div>
                            <div class="badge badge-ghost badge-xs">Survival</div>
                        </li>

                        <li class="flex items-center gap-3 p-2 rounded-lg hover:bg-base-200 transition-colors">
                            <div class="avatar placeholder online">
                                <div class="bg-success text-success-content w-8 rounded-full">
                                    <span class="text-xs">N</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">NicoOwner</p>
                            </div>
                            <div class="badge badge-warning badge-xs">Admin</div>
                        </li>

                        <li class="flex items-center gap-3 p-2 rounded-lg hover:bg-base-200 transition-colors">
                            <div class="avatar placeholder online">
                                <div class="bg-info text-info-content w-8 rounded-full">
                                    <span class="text-xs">D</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">DiamondKing</p>
                            </div>
                            <div class="badge badge-ghost badge-xs">Survival</div>
                        </li>

                        <li class="flex items-center gap-3 p-2 rounded-lg hover:bg-base-200 transition-colors">
                            <div class="avatar placeholder online">
                                <div class="bg-warning text-warning-content w-8 rounded-full">
                                    <span class="text-xs">E</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">EnderWalker</p>
                            </div>
                            <div class="badge badge-ghost badge-xs">Survival</div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Info del Servidor --}}
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body p-4">
                    <h2 class="card-title text-base mb-2">Info del Servidor</h2>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="opacity-70">IP</span>
                            <div class="flex items-center gap-2">
                                <code class="bg-base-200 px-2 py-1 rounded text-xs">play.omnicraft.net</code>
                                <button class="btn btn-ghost btn-xs" title="Copiar IP">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-3.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9.75a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="divider my-0"></div>
                        <div class="flex justify-between">
                            <span class="opacity-70">Version</span>
                            <span class="font-medium">1.21.4</span>
                        </div>
                        <div class="divider my-0"></div>
                        <div class="flex justify-between">
                            <span class="opacity-70">Mapa</span>
                            <span class="font-medium">Mundo Principal</span>
                        </div>
                        <div class="divider my-0"></div>
                        <div class="flex justify-between">
                            <span class="opacity-70">Dificultad</span>
                            <span class="badge badge-error badge-sm">Hard</span>
                        </div>
                        <div class="divider my-0"></div>
                        <div class="flex justify-between items-center">
                            <span class="opacity-70">RAM</span>
                            <div class="flex items-center gap-2">
                                <progress class="progress progress-info w-20" value="65" max="100"></progress>
                                <span class="text-xs opacity-70">65%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
