@extends('../Layout/Layout')
@section('AgregarServicio')
    <div class="container rounded shadow p-4 mb-4">
        <div class="text-center">
            <h3>Registrar Orden de Servicio</h3>
        </div>
        <form action="">
            <div class="card mb-2">
                <!--Datos Cliente-->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Datos del Cliente</h6>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <span class="form-label">Razón Social</span>
                        <input type="text" name="RazonSocial" id="RazonSocial" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <span class="form-label">Calle y Número</span>
                        <input type="text" name="Calle" id="Calle" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <span class="form-label">Código Postal</span>
                                <input type="text" name="CP" id="CP" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <span class="form-label">Nombre del Responsable</span>
                                <input type="text" name="Responsable" id="Responsable" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <span class="form-label">Municipio</span>
                                <input type="text" name="Municipio" id="Municipio" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <span class="form-label">Cargo del Responsable</span>
                                <input type="text" name="CargoResponsable" id="CargoResponsable" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <span class="form-label">Estado</span>
                                <input type="text" name="Estado" id="Estado" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <span class="form-label">Telefono</span>
                                <div class="input-group">
                                    <span class="input-group-text" id="telefonoGroup">+52</span>
                                    <input type="tel" name="Telefono" id="Telefono" class="form-control" aria-describedby="telefonoGroup " required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <!--Datos Servicio-->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Datos del Servicio</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <span>Número de Servicios</span>
                                <input type="number" name="Cantidad" id="Cantidad" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid mb-2 mt-4">
                                <span></span>
                                <button class="btn btn-info" type="button" id="NumServicios">Agregar Servicios</button>
                            </div>
                        </div>
                    </div>
                    <div id="ContenidoServicio"></div>
                    <div class="mb-4">
                        <span>Descripción del Servicio</span>
                        <textarea name="Descripcion" id="Descripcion" class="form-control" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Información Adicional</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <span>Fecha de Muestreo</span>
                                <input type="date" name="FechaMuestreo" id="FechaMuestreo" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <span>Cantidad de Muestreadores</span>
                                <input type="number" name="NumMuetreador" id="NumMuetreador" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid mb-2 mt-4">
                                <span></span>
                                <button class="btn btn-info" type="button" id="BuscarMuestreador">Buscar Muestreador</button>
                            </div>
                        </div>
                    </div>
                    <div id="Muestreadores"></div>
                    
                    <div class="d-grid">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('Scripts')
    <script src="{{asset('js/Formularios/srcipt.js')}}"></script>
@endsection