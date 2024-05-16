<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estadisticas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-banner />
                <center><strong> Esta es la tabla de estadisticas del torneo</strong></center>
                <center>
                    <table border="1" class="border-separate border border-slate-500">
                        <tr>
                            <th class="border border-cyan-600">Equipos</th>
                            <th class="border border-cyan-600">Delegado</th>
                            <th class="border border-cyan-600"> P J</th>
                            <th class="border border-cyan-600">P G</th>
                            <th class="border border-cyan-600">P P</th>
                            <th class="border border-cyan-600">P E</th>
                            <th class="border border-cyan-600">G F</th>
                            <th class="border border-cyan-600">G C</th>
                            <th class="border border-cyan-600">G D</th>
                            <th class="border border-cyan-600">Puntos</th>
                            <th class="border border-cyan-600">Posición</th>
                        </tr>
                        @php
                        $posicion = 1;
                        @endphp
                        @foreach ($Estadistica as $item)
                        <tr>
                            <td class="border border-slate-700"> {{ $item->nombre_equipo }} </td>
                            <td class="border border-slate-700"> {{ $item->delegado }} </td>
                            <td class="border border-slate-700"> {{ $item->P_jugados }} </td>
                            <td class="border border-slate-700"> {{ $item->P_ganados }} </td>
                            <td class="border border-slate-700"> {{ $item->P_perdidos }} </td>
                            <td class="border border-slate-700"> {{ $item->P_empatados }} </td>
                            <td class="border border-slate-700"> {{ $item->G_favor }} </td>
                            <td class="border border-slate-700"> {{ $item->G_contra }} </td>
                            <td class="border border-slate-700"> {{ $item->G_diferencia }} </td>
                            <td class="border border-slate-700"> {{ $item->puntos }} </td>
                            <td class="border border-slate-700"> {{ $posicion }} </td>
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
