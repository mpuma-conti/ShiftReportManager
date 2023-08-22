@php
    use Carbon\Carbon;
@endphp

<x-app-layout>
<x-slot name="header">
        Reportes de Mantto. Maquinarias
</x-slot>

<div class="container-fluid px-4">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatablesSimple" class="stripe hover">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Turno</th>
                                            <th>Responsable</th>
                                            <th>Código de equipo</th>
                                            <th>Descripción</th>
                                            <th>Horas</th>
                                            <th>Importancia</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Turno</th>
                                            <th>Responsable</th>
                                            <th>Código de equipo</th>
                                            <th>Descripción</th>
                                            <th>Horas</th>
                                            <th>Importancia</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($reports as $report)
                                        <tr>
                                            <td>{{ Carbon::parse($report->fecha)->format('d/m/Y') }}</td>
                                            <td>{{ $report->turno }}º</td>
                                            <td>{{ $report->user->name }}</td>
                                            <td>{{ $report->codigo_equipo }}</td>
                                            <td>{{ $report->descripcion }}</td>
                                            <td>{{ $report->tiempo }}</td>
                                            <td>
                                                @if($report->importancia === 'Urgente')
                                                    <span class="badge bg-red-soft text-red">Urgente</span>
                                                @elseif($report->importancia === 'Alta')
                                                    <span class="badge bg-yellow-soft text-yellow">Alta</span>
                                                @elseif($report->importancia === 'Media')
                                                    <span class="badge bg-purple-soft text-purple">Media</span>
                                                @else
                                                    <span class="badge bg-green-soft text-green">Baja</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('report.edit', $report) }}"><i data-feather="edit"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>


<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" crossorigin="anonymous"></script>


<script src="js/datatables/datatables-simple-demo.js"></script>

</x-app-layout>