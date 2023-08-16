<x-app-layout>

<div class="container-xl px-4">
                        <!-- Wizard card example with navigation-->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <!-- Wizard navigation-->
                                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                                    <!-- Wizard navigation item 1-->
                                    <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                        <div class="wizard-step-icon">1</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Compresoras</div>
                                            <!-- <div class="wizard-step-text-details">Basic details and information</div>-->
                                        </div>
                                    </a>
                                    <!-- Wizard navigation item 2-->
                                    <a class="nav-item nav-link" id="wizard2-tab" href="#wizard2" data-bs-toggle="tab" role="tab" aria-controls="wizard2" aria-selected="false">
                                        <div class="wizard-step-icon">2</div>
                                        <div class="wizard-step-text">
                                            <div class="wizard-step-text-name">Tanques pulmón</div>
                                            <!-- <div class="wizard-step-text-details">Credit card information</div>-->
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="cardTabContent">
                                    <!-- Wizard tab pane item 1-->
                                    <div class="tab-pane py-5 fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-12 col-xl-12">
                                                <!--<h3 class="text-primary">Compresoras</h3>-->
                                                <form method="POST" action="{{ route('nuevo-reporte.store') }}">
                                                @csrf
                                                    <!-- 
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
                                                    -->
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
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">K23</button>
                                                            <input type="hidden" name="nombre_1" value="K23"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_1">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_1">
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
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">K24 (GA30)</button>
                                                            <input type="hidden" name="nombre_2" value="K24"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_2">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_2">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_2">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_2">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">K25 (GA37)</button>
                                                            <input type="hidden" name="nombre_3" value="K25"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_3">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_3">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_3">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_3">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">K36 (G110)</button>
                                                            <input type="hidden" name="nombre_4" value="K36"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_4">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_4">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_4">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_4">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">K37 (GA90)</button>
                                                            <input type="hidden" name="nombre_5" value="K37"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_5">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_5">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_5">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_5">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-teal rounded-pill fw-500" type="button">GA15 (Cat Etpsa)</button>
                                                            <input type="hidden" name="nombre_6" value="GA15"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_6">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_6">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_6">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_6">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-yellow rounded-pill fw-500" type="button">K70 (GA22 DOT)</button>
                                                            <input type="hidden" name="nombre_7" value="K70"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_7">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_7">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_7">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_7">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">K800A (GA22 B. Zinc)</button>
                                                            <input type="hidden" name="nombre_8" value="K800A"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_8">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_8">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_8">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_8">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">K800B (B. Zinc)</button>
                                                            <input type="hidden" name="nombre_9" value="K800B"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_9">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_9">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_9">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_9">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">K800C (B. Zinc)</button>
                                                            <input type="hidden" name="nombre_10" value="K800C"/>
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="presion_10">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="capacidad_10">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="corriente_10">
                                                        </div>
                                                        <div class="mb-3 col">
                                                            <input class="form-control" type="text" name="temperatura_10">
                                                        </div>
                                                    </div>
                                                    <h6 class="card-title mt-4">Ten en cuenta que si algún valor es igual a 0 no es necesario completar ese campo. ¡Gracias!</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Wizard tab pane item 2-->
                                    <div class="tab-pane py-5 fade fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-12 col-xl-12">
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Presión (bar)</label>
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">Tanque pulmón V23</button>
                                                            <input type="hidden" name="tanqueNombre_1" value="V23"/>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tanquePresion_1">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                            <button class="btn btn-facebook rounded-pill fw-500" type="button">Manómetro PI24</button>
                                                            <input type="hidden" name="tanqueNombre_2" value="PI24"/>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tanquePresion_2">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                            <button class="btn btn-teal rounded-pill fw-500" type="button">Tanque pulmón del GA15</button>
                                                            <input type="hidden" name="tanqueNombre_3" value="GA15"/>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tanquePresion_3">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                            <button class="btn btn-yellow rounded-pill fw-500" type="button">Tanque pulmón S70 (DOT)</button>
                                                            <input type="hidden" name="tanqueNombre_4" value="S70"/>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tanquePresion_4">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">Tanque pulmón SK800A</button>
                                                            <input type="hidden" name="tanqueNombre_5" value="SK800A"/>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tanquePresion_5">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">Tanque pulmón SK800B</button>
                                                            <input type="hidden" name="tanqueNombre_6" value="SK800B"/>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tanquePresion_6">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 justify-content-center">
                                                        <div class="mb-3 col-3">
                                                            <button class="btn btn-twitter rounded-pill fw-500" type="button">Filtro de mangas B. ZINC</button>
                                                            <input type="hidden" name="tanqueNombre_7" value="Filtro de Mangas B.Zinc"/>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" name="tanquePresion_7">
                                                        </div>
                                                    </div>
                                                    <h6 class="card-title mt-4">Ten en cuenta que si algún valor es igual a 0 no es necesario completar ese campo. ¡Gracias!</h6>
                                                    <hr class="my-4">
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