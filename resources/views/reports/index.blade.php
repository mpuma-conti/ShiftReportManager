<x-app-layout>

<div class="container-xl px-4 mt-n10">
                        <!-- Wizard card example with navigation-->
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="cardTabContent">
                                    <!-- Wizard tab pane item 1-->
                                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Reporte diario</h3>
                                                <form method="POST" action="{{ route('reportes.store') }}">
                                                @csrf
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-md-4">
                                                            <label class="small mb-1" for="fecha">Fecha</label>          
                                                            <input class="form-control" type="date" id="fecha" name="fecha" required>
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="small mb-1" for="turno">Turno</label>
                                                            <select class="form-select" id="turno" name="turno" required>
                                                                <option value="" selected disabled hidden>Selecciona</option>  
                                                                <option value="1">1er turno</option>
                                                                <option value="2">2do turno</option>
                                                                <option value="3">3er turno</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="small mb-1" for="jefe_turno">Jefe de turno</label>
                                                            <select class="form-select" id="jefe_turno" name="jefe_turno" required>
                                                                <option value="" selected disabled hidden>Selecciona</option>  
                                                                <option value="Elio Monje">Elio Monje</option>
                                                                <option value="Gonzalo Delgado">Gonzalo Delgado</option>
                                                                <option value="Jorge Espinoza">Jorge Espinoza</option>
                                                                <option value="Jose Granados">José Granados</option>
                                                                <option value="Ricardo Noriega">Ricardo Noriega</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Código</label>
                                                            <input class="form-control" type="text" placeholder="LIC220" name="codigo_1">
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <label class="small mb-1">Descripción</label>
                                                            <input class="form-control" type="text" name="descripcion_1">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Horas</label>
                                                            <input class="form-control" type="text" placeholder="8" name="tiempo_1">
                                                        </div>
                                                        <div class="mb-3 col-2 form-check form-switch" style="padding-left: 0px;">
                                                            <label class="small mb-1">¿Importante?</label>
                                                            <input type="checkbox" class="form-check-input" style="margin-left: 0px; width: 42px; height: 22px;" name="importancia_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="codigo_2">
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <input class="form-control" type="text" name="descripcion_2">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tiempo_2">
                                                        </div>
                                                        <div class="mb-3 col-2 form-check form-switch" style="padding-left: 0px;">
                                                            <input type="checkbox" class="form-check-input" style="margin-left: 0px; width: 42px; height: 22px;" name="importancia_2">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="codigo_3">
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <input class="form-control" type="text" name="descripcion_3">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tiempo_3">
                                                        </div>
                                                        <div class="mb-3 col-2 form-check form-switch" style="padding-left: 0px;">
                                                            <input type="checkbox" class="form-check-input" style="margin-left: 0px; width: 42px; height: 22px;" name="importancia_3">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="codigo_4">
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <input class="form-control" type="text" name="descripcion_4">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tiempo_4">
                                                        </div>
                                                        <div class="mb-3 col-2 form-check form-switch" style="padding-left: 0px;">
                                                            <input type="checkbox" class="form-check-input" style="margin-left: 0px; width: 42px; height: 22px;" name="importancia_4">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="codigo_5">
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <input class="form-control" type="text" name="descripcion_5">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tiempo_5">
                                                        </div>
                                                        <div class="mb-3 col-2 form-check form-switch" style="padding-left: 0px;">
                                                            <input type="checkbox" class="form-check-input" style="margin-left: 0px; width: 42px; height: 22px;" name="importancia_5">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="codigo_6">
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <input class="form-control" type="text" name="descripcion_6">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tiempo_6">
                                                        </div>
                                                        <div class="mb-3 col-2 form-check form-switch" style="padding-left: 0px;">
                                                            <input type="checkbox" class="form-check-input" style="margin-left: 0px; width: 42px; height: 22px;" name="importancia_6">
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-primary" type="button">{{ __('Enviar reporte') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
</div>


        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($reports as $report)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $report->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $report->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $report->descripcion }}</p>
                    </div>
                </div>
            @endforeach
        </div>


</x-app-layout>