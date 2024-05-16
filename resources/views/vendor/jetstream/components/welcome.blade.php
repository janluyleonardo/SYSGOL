<div class="p-6 sm:px-20 bg-red-500 border-b border-gray-200">
    <center>
        <div>
            <x-jet-application-logo class="block h-12 w-auto" />
        </div>
    </center>

    {{-- <div class="mt-6 text-2xl">
        Welcome to your sysgol application!
    </div> --}}

    {{-- <div class="mt-6 text-gray-500">
        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is
        designed
        to help you build your application using a development environment that is simple, powerful, and enjoyable. We
        believe
        you should love expressing your creativity through programming, so we have spent time carefully crafting the
        Laravel
        ecosystem to be a breath of fresh air. We hope you love it.
    </div> --}}
</div>

<div class="bg-gray-900 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <img src=" {{ url('images/dashboard/tabla-de-crecimiento.png') }}" alt="tabla-de-estadistica" width="75">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="{{ route('estadistica.index') }}">
                    Estadistica
                </a>
            </div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Estadisticas generales de los equipos participantes de nuestro torneo de futbol de salón.
            </div>
            <a href="{{ route('estadistica.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Explore la tabla de estadisticas.</div>
                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <img src=" {{ url('images/dashboard/goleador.png') }}" alt="tabla-de-estadistica" width="75">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="{{ route('goleador.index') }}">Goleadores</a>
            </div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Estadisticas de los jugadores que han anotado goles a lo largo del torneo de futbol de salón.
            </div>

            <a href="{{ route('goleador.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Explore la tabla de goleadores.</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path
                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                </path>
            </svg> --}}
            <img src=" {{ url('images/dashboard/equipos.png') }}" alt="tabla-de-estadistica" width="75">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="{{ route('equipos.index') }}">Equipos</a>
            </div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Galeria de fotos de nuestros equipos participantes, los cuales estan en la busqueda de quedarse con el
                titulo de nuestro torneo.
            </div>
            <a href="{{ route('equipos.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Explore la galeria de equipos participantes.</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                </path>
            </svg> --}}
            <img src=" {{ url('images/dashboard/jugador.png') }}" alt="tabla-de-estadistica" width="75">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="{{ route('jugador.index') }}">Jugadores</a>
            </div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Listado de jugadores activos dentro del torneo, ademas podra ver la estadistica de cada uno de ellos
                donde se evidencia los puntos de juego limpio, amonestaciones , fechas de sanción, y los datos
                personales de cada uno de ellos.
            </div>
            <a href="{{ route('jugador.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Explore la lista de jugadores.</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
