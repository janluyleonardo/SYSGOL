<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugadores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-banner />
                <center><strong> Esta es la tabla de estadisticas de jugadores inscritos</strong></center>
                <center>
                    <table border="1" class="border-separate border border-slate-500">
                        <tr>
                            <th class="border border-cyan-600">Identificador</th>
                            <th class="border border-cyan-600">Nombre</th>
                            <th class="border border-cyan-600">Documento</th>
                            <th class="border border-cyan-600">Edad</th>
                            <th class="border border-cyan-600">Fecha nacimiento</th>
                            <th class="border border-cyan-600">Equipo al que pertenece</th>
                        </tr>
                        @php
                        $posicion = 1;
                        @endphp
                        @foreach ($Jugador as $item)
                        <tr>
                            <td> {{ $item->id_jugador }} </td>
                            <td> {{ $item->nombre_jugador }} </td>
                            <td> {{ $item->num_documento }} </td>
                            <td> {{ $item->edad }} </td>
                            <td> {{ $item->fecha_nacido }} </td>
                            <td> {{ $item->equipo }} </td>
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
