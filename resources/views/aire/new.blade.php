<x-app-layout>

<div class="container-xl px-4 mt-n10">
                        <!-- Wizard card example with navigation-->
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="cardTabContent">
                                    <!-- Wizard tab pane item 1-->
                                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-12 col-xl-12">
                                                <h3 class="text-primary">Control de suministros de aire</h3>
                                                <form method="POST" action="{{ route('nuevo-reporte.store') }}">
                                                @csrf
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-md-4">
                                                            <label class="small mb-1" for="fecha">Fecha</label>          
                                                            <input class="form-control" type="date" id="fecha" name="fecha" required autofocus>
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
                                                    <h5 class="card-title mb-4">Compresoras</h5>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <label class="small mb-1">Presión de salida (bar)</label>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <label class="small mb-1">Capacidad de operación (%)</label>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <label class="small mb-1">Consumo de corriente (A)</label>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <label class="small mb-1">Temperatura (°C)</label>
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">K23 (GA 30)</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                        <button class="btn btn-facebook rounded-pill fw-500" type="button">K24</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                        <button class="btn btn-facebook rounded-pill fw-500" type="button">K25 (GA 37)</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">G110VSD</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">GA90 (Nuevo)</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-teal rounded-pill fw-500" type="button">GA15 (Cat Etpsa.)</button>
                                                        
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-yellow rounded-pill fw-500" type="button">GA22 (Planta DOT)</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">K800A (GA 22 B. Zinc)</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">K800B (B. Zinc)</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">K800C (B. Zinc)</button>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="presion_1" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" id="capacidad_1" name="capacidad_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_1">
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-primary" type="submit">{{ __('Enviar reporte') }}</button>
                                                    </div>
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
                        </div>
</div>




</x-app-layout>