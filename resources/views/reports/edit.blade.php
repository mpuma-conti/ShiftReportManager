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
                                        <form>
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
                                                <input class="form-control" type="text" name="descripcion" value="{{ $report->descripcion }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="small mb-1">Horas</label>
                                                <input class="form-control" type="text" name="tiempo" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="small mb-1">Categoría</label>
                                                <select class="form-select" id="categoria" name="categoria" required>
                                                                <option value="Rutinario">Rutinario</option>
                                                                <option value="Mantto. de equipo">Mantto. de equipo</option>
                                                                <option value="Cambio de equipo">Cambio de equipo</option>
                                                                <option value="Modificación de equipo">Modificación de equipo</option>
                                                                <option value="OT programada">OT programada</option>
                                                                <option value="Emergencia planta">Emergencia planta</option>
                                                                <option value="Otros">Otros</option>
                                                </select>
                                            </div>
                                            <!-- Submit button-->
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</x-app-layout>