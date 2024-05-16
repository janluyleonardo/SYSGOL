<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-banner />
                <center><strong> Esta es la lista de equipos participantes</strong></center>
                <center>
                    <table border="1" class="border-separate border border-slate-500">
                        <tr>
                            <th class="border border-cyan-600">Identificador</th>
                            <th class="border border-cyan-600">Equipo</th>
                            <th class="border border-cyan-600">Categoría</th>
                            <th class="border border-cyan-600">Fecha ingreso</th>
                        </tr>
                        @php
                        $posicion = 1;
                        @endphp
                        @foreach ($Equipo as $item)
                        <tr>
                            <td> {{ $item->id_equipo }} </td>
                            <td> {{ $item->nombre_equipo }} </td>
                            <td> {{ $item->categoria }} </td>
                            <td> {{ $item->fecha_registro }} </td>
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
