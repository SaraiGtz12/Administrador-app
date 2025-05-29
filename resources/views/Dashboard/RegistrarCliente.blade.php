@extends('../Layout/Layout')
@section('RegistrarCliente')
    <div class="container bg-white rounded shadow p-4 mt-5">
        <h2 class="text-center mb-4">Registrar Cliente</h2>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col container">
                    <div class="mb-2">
                        <label for="razonSocial">Razón Social</label>
                        <input type="text" class="form-control" id="razonSocial" name="razonSocial" required>
                    </div>
                    <div class="mb-2">
                        <label for="nombreResponsable">Nombre del Responsable</label>
                        <input type="text" class="form-control" id="nombreResponsable" name="nombreResponsable" required>
                    </div>
                    <div class="mb-2">
                        <label for="cargoResponsable">Cargo del Responsable</label>
                        <input type="text" class="form-control" id="cargoResponsable" name="cargoResponsable" required>
                    </div>
                    <div class="mb-2">
                        <label for="telefono">Telefono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono"  required>
                    </div>
                </div>
                <div class="col">
                    <livewire:select-ubicacion />
                </div>
            </div>
        </form>

    </div>
@endsection