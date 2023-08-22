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
                                                <h3 class="text-primary">Reporte diario de Maquinarias 🚜</h3>
                                                <form method="POST" action="{{ route('reportes.storeReporteMaquinaria') }}">
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
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Categoría</label>
                                                            <select class="form-select" id="categoria_1" name="categoria_1" required>
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Mantto. Preventivo">Mantto. Preventivo</option>
                                                                <option value="Mantto. Correctivo">Mantto. Correctivo</option>
                                                                <option value="Emergencia">Emergencia</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Código de equipo</label>
                                                            <input class="form-control" type="text" id="codigo_1" name="codigo_1" required>
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <label class="small mb-1">Descripción</label>
                                                            <input class="form-control" type="text" id="descripcion_1" name="descripcion_1" maxlength="1023" required>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Criticidad</label>
                                                            <select class="form-select" name="importancia_1" required>
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Baja">Baja</option>
                                                                <option value="Media">Media</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Urgente">Urgente</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-1">
                                                            <label class="small mb-1">Horas</label>
                                                            <input class="form-control" type="text" placeholder="8" name="tiempo_1" required>
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" id="categoria_2" name="categoria_2">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Mantto. Preventivo">Mantto. Preventivo</option>
                                                                <option value="Mantto. Correctivo">Mantto. Correctivo</option>
                                                                <option value="Emergencia">Emergencia</option>
                                                            </select>
                                                        </div>    
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_2" name="codigo_2">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_2" name="descripcion_2" maxlength="1023">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" name="importancia_2">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Baja">Baja</option>
                                                                <option value="Media">Media</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Urgente">Urgente</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-1">
                                                            <input class="form-control" type="text" name="tiempo_2">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" id="categoria_3" name="categoria_3">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Mantto. Preventivo">Mantto. Preventivo</option>
                                                                <option value="Mantto. Correctivo">Mantto. Correctivo</option>
                                                                <option value="Emergencia">Emergencia</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_3" name="codigo_3">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_3" name="descripcion_3" maxlength="1023">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" name="importancia_3">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Baja">Baja</option>
                                                                <option value="Media">Media</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Urgente">Urgente</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-1">
                                                            <input class="form-control" type="text" name="tiempo_3">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" id="categoria_4" name="categoria_4">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Mantto. Preventivo">Mantto. Preventivo</option>
                                                                <option value="Mantto. Correctivo">Mantto. Correctivo</option>
                                                                <option value="Emergencia">Emergencia</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_4" name="codigo_4">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_4" name="descripcion_4" maxlength="1023">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" name="importancia_4">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Baja">Baja</option>
                                                                <option value="Media">Media</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Urgente">Urgente</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-1">
                                                            <input class="form-control" type="text" name="tiempo_4">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" id="categoria_5" name="categoria_5">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Mantto. Preventivo">Mantto. Preventivo</option>
                                                                <option value="Mantto. Correctivo">Mantto. Correctivo</option>
                                                                <option value="Emergencia">Emergencia</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_5" name="codigo_5">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_5" name="descripcion_5" maxlength="1023">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" name="importancia_5">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Baja">Baja</option>
                                                                <option value="Media">Media</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Urgente">Urgente</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-1">
                                                            <input class="form-control" type="text" name="tiempo_5">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" id="categoria_6" name="categoria_6">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Mantto. Preventivo">Mantto. Preventivo</option>
                                                                <option value="Mantto. Correctivo">Mantto. Correctivo</option>
                                                                <option value="Emergencia">Emergencia</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_6" name="codigo_6">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_6" name="descripcion_6" maxlength="1023">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <select class="form-select" name="importancia_6">
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Baja">Baja</option>
                                                                <option value="Media">Media</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Urgente">Urgente</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-1">
                                                            <input class="form-control" type="text" name="tiempo_6">
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


<!-- typeahead, para sugerir codigos de equipos al tipear -->


</x-app-layout>