<x-app-layout>

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="edit"></i></div>
                                            Editar reporte
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="{{ route('reportes.mostrarTodos') }}">
                                            <i class="me-1" data-feather="arrow-left"></i>
                                            Volver a lista de reportes
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
</header>

<div class="container-xl px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- card-->
                                <div class="card mb-4">
                                    <div class="card-header">{{ $report->user->area .' - '. $report->user->name }}</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('report.update', $report) }}">
                                        @csrf
                                        @method('patch')
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-4">
                                                    <label class="small mb-1" for="fecha">Fecha</label>
                                                    <input class="form-control" type="date" id="fecha" name="fecha" value="{{ $report->fecha }}" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="small mb-1" for="turno">Turno</label>
                                                    <select class="form-select" id="turno" name="turno" required>
                                                                <option value="1" {{ $report->turno == 1 ? 'selected' : '' }}>1er turno</option>
                                                                <option value="2" {{ $report->turno == 2 ? 'selected' : '' }}>2do turno</option>
                                                                <option value="3" {{ $report->turno == 3 ? 'selected' : '' }}>3er turno</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="small mb-1" for="jefe_turno">Jefe de turno</label>
                                                    <select class="form-select" id="jefe_turno" name="jefe_turno" required>
                                                                <option value="Elio Monje" {{ $report->jefe_turno == 'Elio Monje' ? 'selected' : '' }}>Elio Monje</option>
                                                                <option value="Gonzalo Delgado" {{ $report->jefe_turno == 'Gonzalo Delgado' ? 'selected' : '' }}>Gonzalo Delgado</option>
                                                                <option value="Jorge Espinoza" {{ $report->jefe_turno == 'Jorge Espinoza' ? 'selected' : '' }}>Jorge Espinoza</option>
                                                                <option value="Jose Granados" {{ $report->jefe_turno == 'Jose Granados' ? 'selected' : '' }}>José Granados</option>
                                                                <option value="Ricardo Noriega" {{ $report->jefe_turno == 'Ricardo Noriega' ? 'selected' : '' }}>Ricardo Noriega</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Form Group-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="codigo">Código de planta</label>
                                                <input class="form-control" type="text" name="codigo" value="{{ $report->codigo_equipo }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="small mb-1" for="descripcion">Descripción de trabajo realizado</label>
                                                <textarea class="lh-base form-control" type="text" name="descripcion" rows="2" maxlength="255">{{ $report->descripcion }}</textarea>
                                            </div>
                                            <!-- Form Group-->
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1">Categoría</label>
                                                    <select class="form-select" id="categoria" name="categoria" required>
                                                                    <option value="Rutinario" {{ $report->categoria == 'Rutinario' ? 'selected' : '' }}>Rutinario</option>
                                                                    <option value="Mantto. de equipo" {{ $report->categoria == 'Mantto. de equipo' ? 'selected' : '' }}>Mantto. de equipo</option>
                                                                    <option value="Cambio de equipo" {{ $report->categoria == 'Cambio de equipo' ? 'selected' : '' }}>Cambio de equipo</option>
                                                                    <option value="Modificación de equipo" {{ $report->categoria == 'Modificación de equipo' ? 'selected' : '' }}>Modificación de equipo</option>
                                                                    <option value="OT programada" {{ $report->categoria == 'OT programada' ? 'selected' : '' }}>OT programada</option>
                                                                    <option value="Emergencia planta" {{ $report->categoria == 'Emergencia planta' ? 'selected' : '' }}>Emergencia planta</option>
                                                                    <option value="Otros" {{ $report->categoria == 'Otros' ? 'selected' : '' }}>Otros</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="small mb-1 fw-bold">Importancia</label>
                                                    <select class="form-select" style="border-color: #00ac69;" onfocus="this.style.boxShadow='0 0 0 0.25rem rgba(0, 172, 105, 0.25)';" onblur="this.style.boxShadow='';" id="importancia" name="importancia" required>
                                                                    <option value="Baja" {{ $report->importancia == 'Baja' ? 'selected' : '' }}>Baja</option>
                                                                    <option value="Media" {{ $report->importancia == 'Media' ? 'selected' : '' }}>Media</option>
                                                                    <option value="Alta" {{ $report->importancia == 'Alta' ? 'selected' : '' }}>Alta</option>
                                                                    <option value="Urgente" {{ $report->importancia == 'Urgente' ? 'selected' : '' }}>Urgente</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="small mb-1">Tiempo de ejecución (en horas)</label>
                                                <input class="form-control" type="text" name="tiempo" value="{{ $report->tiempo }}"required>
                                            </div>
                                            <!-- Submit button-->
                                            <button class="btn btn-primary" type="submit">Guardar cambios</button>
                                        </form>

                                        @if (session('success'))
                                                    <div class="alert alert-success mt-2" role="alert">
                                                        {{ session('success') }}
                                                    </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</x-app-layout>