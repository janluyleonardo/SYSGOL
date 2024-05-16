<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configurar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-100 overflow-hidden shadow-xl sm:rounded-lg md:container md:mx-auto">
                <x-jet-banner />
                <center><strong> Esta es la lista de equipos participantes</strong></center>
                <center>
                    <table class="table-auto hover:table-fixed border-collapse border border-slate-500">
                        <thead>
                            <tr>
                            <th class="border border-slate-600">Identificador</th>
                            <th class="border border-slate-600">Equipo</th>
                            <th class="border border-slate-600">Categoría</th>
                            <th class="border border-slate-600">Fecha ingreso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                            </tr>
                            <tr>
                            <td>Witchy Woman</td>
                            <td>The Eagles</td>
                            <td>1972</td>
                            </tr>
                            <tr>
                            <td>Shining Star</td>
                            <td>Earth, Wind, and Fire</td>
                            <td>1975</td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th align="center">CUMPLIMIENTO (%)</th>
                            <th align="center">NO CUMPLIMIENTO (%)</th>
                        </tr>
                        </thead>
                        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-1">
                        <td><i class="fa fa-plus" aria-hidden="true"></i></td>
                        <td align="center">COCINAS A GAS</td>
                        <td align="center">63.97</td>
                        <td align="center">36.03</td>
                        </tr>
                        <tbody id="group-of-rows-1" class="collapse">
                        <tr>
                            <td></td>
                            <td align="center">Campo / Carpa
                            <td>
                                <td align="center">0.40</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="center">No hay stock
                            <td>
                                <td align="center">7.69</td>
                        </tr>
                        <tr class="clickable" data-toggle="collapse" data-target="#group-of-cau-1">
                            <td></td>
                            <td align="center">Se encuentra en otro lugar exhibido
                            <td>
                                <td align="center">25.51</td>
                        </tr>
                        <tbody id="group-of-cau-1" class="collapse">
                            <tr>
                            <td>Solucionado</td>
                            <td>data 1</td>
                            <td>data 1</td>

                            </tr>
                            <tr>
                            <td>No Solucionado</td>
                            <td>data 1</td>
                            <td>data 1</td>

                            </tr>
                        </tbody>
                        <tr class="clickable" data-toggle="collapse" data-target="#group-of-cau-2">
                            <td></td>
                            <td align="center">Stock en almacén
                            <td>
                                <td align="center">2.43</td>
                        </tr>
                        <tbody id="group-of-cau-2" class="collapse">
                            <tr>
                            <td>Solucionado</td>
                            <td>data 1</td>
                            <td>data 1</td>

                            </tr>
                            <tr>
                            <td>No Solucionado</td>
                            <td>data 1</td>
                            <td>data 1</td>

                            </tr>
                        </tbody>
                        </tbody>
                    </table> --}}
                </center>
            </div>
        </div>
    </div>
</x-app-layout>
