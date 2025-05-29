<div class="">
    <div class="mb-2">
        <label for="Estado">Estado</label>
        <select name="Estado" id="Estado" class="form-select" wire:model="EstadoId" required>
            <option value="">Seleccionar un Estado</option>
            @if(count($estados))
                @foreach ($estados as $estado)
                    <option value="{{ $estado->idEstado }}">{{ $estado->nombreEstado }}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="mb-2">
        <label for="Municipio">Municipio</label>
        <select name="Municipio" id="Municipio" class="form-select" wire:model="MunicipioId" required>
            <option value="">Seleccionar un Municipio</option>
            @if(count($municipios))
                @foreach ($municipios as $municipio)
                    <option value="{{ $municipio->idMunicipio }}">{{ $municipio->nombreMunicipio }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>