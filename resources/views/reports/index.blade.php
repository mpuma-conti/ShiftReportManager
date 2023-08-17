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
                                                <h3 class="text-primary">Reporte diario</h3>
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
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Categoría</label>
                                                            <select class="form-select" id="categoria_1" name="categoria_1" required>
                                                                <option value="" selected disabled hidden></option>  
                                                                <option value="Rutinario">Rutinario</option>
                                                                <option value="Mantto. de equipo">Mantto. de equipo</option>
                                                                <option value="Cambio de equipo">Cambio de equipo</option>
                                                                <option value="Modificación de equipo">Modificación de equipo</option>
                                                                <option value="OT programada">OT programada</option>
                                                                <option value="Emergencia planta">Emergencia planta</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <label class="small mb-1">Código de planta</label>
                                                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="left" title="Sin guión o espacio" placeholder="MP201" id="codigo_1" name="codigo_1" required>
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <label class="small mb-1">Descripción</label>
                                                            <input class="form-control" type="text" id="descripcion_1" name="descripcion_1" maxlength="255" required>
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
                                                                <option value="Rutinario">Rutinario</option>
                                                                <option value="Mantto. de equipo">Mantto. de equipo</option>
                                                                <option value="Cambio de equipo">Cambio de equipo</option>
                                                                <option value="Modificación de equipo">Modificación de equipo</option>
                                                                <option value="OT programada">OT programada</option>
                                                                <option value="Emergencia planta">Emergencia planta</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>    
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_2" name="codigo_2">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_2" name="descripcion_2" maxlength="255">
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
                                                                <option value="Rutinario">Rutinario</option>
                                                                <option value="Mantto. de equipo">Mantto. de equipo</option>
                                                                <option value="Cambio de equipo">Cambio de equipo</option>
                                                                <option value="Modificación de equipo">Modificación de equipo</option>
                                                                <option value="OT programada">OT programada</option>
                                                                <option value="Emergencia planta">Emergencia planta</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_3" name="codigo_3">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_3" name="descripcion_3" maxlength="255">
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
                                                                <option value="Rutinario">Rutinario</option>
                                                                <option value="Mantto. de equipo">Mantto. de equipo</option>
                                                                <option value="Cambio de equipo">Cambio de equipo</option>
                                                                <option value="Modificación de equipo">Modificación de equipo</option>
                                                                <option value="OT programada">OT programada</option>
                                                                <option value="Emergencia planta">Emergencia planta</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_4" name="codigo_4">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_4" name="descripcion_4" maxlength="255">
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
                                                                <option value="Rutinario">Rutinario</option>
                                                                <option value="Mantto. de equipo">Mantto. de equipo</option>
                                                                <option value="Cambio de equipo">Cambio de equipo</option>
                                                                <option value="Modificación de equipo">Modificación de equipo</option>
                                                                <option value="OT programada">OT programada</option>
                                                                <option value="Emergencia planta">Emergencia planta</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_5" name="codigo_5">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_5" name="descripcion_5" maxlength="255">
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
                                                                <option value="Rutinario">Rutinario</option>
                                                                <option value="Mantto. de equipo">Mantto. de equipo</option>
                                                                <option value="Cambio de equipo">Cambio de equipo</option>
                                                                <option value="Modificación de equipo">Modificación de equipo</option>
                                                                <option value="OT programada">OT programada</option>
                                                                <option value="Emergencia planta">Emergencia planta</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2">
                                                            <input class="form-control" type="text" id="codigo_6" name="codigo_6">
                                                        </div>
                                                        <div class="mb-3 col-5">
                                                            <input class="form-control" type="text" id="descripcion_6" name="descripcion_6" maxlength="255">
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


<div class="modal fade" id="modalCambioEquipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambio de equipo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form name="modalCambio">
            <input type="hidden" id="fila" name="fila"/>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><i data-feather="log-out"></i> Código de equipo saliente</label>
            <input type="text" class="form-control" id="cod_equipo_saliente" name="cod_equipo_saliente">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><i data-feather="log-in"></i> Código de equipo entrante</label>
            <input type="text" class="form-control" id="cod_equipo_entrante" name="cod_equipo_entrante">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarModalCambio()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script>
//codigo para mostrar popups en cambio de equipo
const select_1 = document.getElementById('categoria_1');
select_1.addEventListener('change', function(evt) {
    if (this.value === 'Cambio de equipo') {
        var myModal = new bootstrap.Modal(document.getElementById('modalCambioEquipo'), {
            keyboard: true
        })
        myModal.toggle();
        document.modalCambio.fila.value = 'descripcion_1'
    }
});
const select_2 = document.getElementById('categoria_2');
select_2.addEventListener('change', function(evt) {
    if (this.value === 'Cambio de equipo') {
        var myModal = new bootstrap.Modal(document.getElementById('modalCambioEquipo'), {
            keyboard: true
        })
        myModal.toggle();
        document.modalCambio.fila.value = 'descripcion_2'
    }
});
const select_3 = document.getElementById('categoria_3');
select_3.addEventListener('change', function(evt) {
    if (this.value === 'Cambio de equipo') {
        var myModal = new bootstrap.Modal(document.getElementById('modalCambioEquipo'), {
            keyboard: true
        })
        myModal.toggle();
        document.modalCambio.fila.value = 'descripcion_3'
    }
});
const select_4 = document.getElementById('categoria_4');
select_4.addEventListener('change', function(evt) {
    if (this.value === 'Cambio de equipo') {
        var myModal = new bootstrap.Modal(document.getElementById('modalCambioEquipo'), {
            keyboard: true
        })
        myModal.toggle();
        document.modalCambio.fila.value = 'descripcion_4'
    }
});
const select_5 = document.getElementById('categoria_5');
select_5.addEventListener('change', function(evt) {
    if (this.value === 'Cambio de equipo') {
        var myModal = new bootstrap.Modal(document.getElementById('modalCambioEquipo'), {
            keyboard: true
        })
        myModal.toggle();
        document.modalCambio.fila.value = 'descripcion_5'
    }
});
const select_6 = document.getElementById('categoria_6');
select_6.addEventListener('change', function(evt) {
    if (this.value === 'Cambio de equipo') {
        var myModal = new bootstrap.Modal(document.getElementById('modalCambioEquipo'), {
            keyboard: true
        })
        myModal.toggle();
        document.modalCambio.fila.value = 'descripcion_6'
    }
});

//funcion para guardar el cambio de equipo
function guardarModalCambio () {
    var fila = document.modalCambio.fila.value
    var cod_equipo_saliente = document.modalCambio.cod_equipo_saliente.value
    var cod_equipo_entrante = document.modalCambio.cod_equipo_entrante.value
    document.getElementById(fila).value = 'Sale ' + cod_equipo_saliente + ', ingresa ' + cod_equipo_entrante + '. '
    var myModal = bootstrap.Modal.getInstance(document.getElementById('modalCambioEquipo'))
    myModal.hide()
}
</script>

<!-- typeahead, para sugerir codigos de equipos al tipear -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        for (let i = 1; i <= 6; i++) {
            configurarAutocompletar('codigo_' + i);
            restringirCaracteres('codigo_' + i);
        }

        function configurarAutocompletar(inputId) {
            var campo = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/buscar_campos?q=%QUERY',
                    wildcard: '%QUERY'
                }
            });

            $('#' + inputId).typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'campos',
                source: campo
            });
        }

        function restringirCaracteres(inputId) {
            $('#' + inputId).on('input', function() {
                // Obtener el valor actual del campo
                let currentValue = this.value;

                // Reemplazar cualquier ocurrencia del carácter "-" con una cadena vacía
                let sanitizedValue = currentValue.replace(/-/g, "");

                // Si el valor se modificó, actualizar el campo
                if (currentValue !== sanitizedValue) {
                    this.value = sanitizedValue;
                }
            });
        }
    });
</script>

</x-app-layout>