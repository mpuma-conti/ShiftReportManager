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
                                    <div class="card-header">Account Details {{ $report->codigo }}</div>
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
                                                                <option value="1">1er turno</option>
                                                                <option value="2">2do turno</option>
                                                                <option value="3">3er turno</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna" />
                                                </div>
                                            </div>
                                            <!-- Form Group-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="codigo">Código de planta</label>
                                                <input class="form-control" type="text" name="codigo" value="{{ $report->codigo }}" required>
                                            </div>
                                            <!-- Form Group (Group Selection Checkboxes)-->
                                            <div class="mb-3">
                                                <label class="small mb-1">Group(s)</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupSales" type="checkbox" value="" checked="" />
                                                    <label class="form-check-label" for="groupSales">Sales</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupDevs" type="checkbox" value="" checked="" />
                                                    <label class="form-check-label" for="groupDevs">Developers</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupMarketing" type="checkbox" value="" />
                                                    <label class="form-check-label" for="groupMarketing">Marketing</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupManagers" type="checkbox" value="" checked="" />
                                                    <label class="form-check-label" for="groupManagers">Managers</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupCustomer" type="checkbox" value="" />
                                                    <label class="form-check-label" for="groupCustomer">Customer</label>
                                                </div>
                                            </div>
                                            <!-- Form Group (Roles)-->
                                            <div class="mb-3">
                                                <label class="small mb-1">Role</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="" disabled="">Select a role:</option>
                                                    <option value="administrator" selected="">Administrator</option>
                                                    <option value="registered">Registered</option>
                                                    <option value="edtior">Editor</option>
                                                    <option value="guest">Guest</option>
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