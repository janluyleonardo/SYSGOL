<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goleadores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-banner />
                <center><strong> Esta es la tabla de estadisticas de goleadores</strong></center>
                <center>
                    <table border="1" class="border-separate border border-slate-500">
                        <tr>
                            <th class="border border-cyan-600">Posición</th>
                            <th class="border border-cyan-600">Nombre de jugador</th>
                            <th class="border border-cyan-600">Equipo</th>
                            <th class="border border-cyan-600">Goles anotados</th>
                        </tr>
                        @php
                        $posicion = 0;
                        @endphp
                        @foreach ($Goleador as $item)
                        <tr>
                            <td> {{ $posicion + 1 }} </td>
                            <td> {{ $item->nombre_goleador }} </td>
                            <td> {{ $item->equipo }}</td>
                            <td> {{ $item->g_anotados }} </td>
                        </tr>
                        @php
                        $posicion = $posicion + 1;
                        @endphp
                        @endforeach
                    </table>
                </center>
            </div>
        </div>
    </div>
</x-app-layout>
