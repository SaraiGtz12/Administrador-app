$(document).ready(function () {
    console.log("JQuery Listo");
    $("#NumServicios").click(function () {
        let cantidad = $("#Cantidad").val();
        $("#ContenidoServicio").empty(); // Limpiar contenido previo

        for (let i = 0; i < cantidad; i++) {
            let nuevoElemento = `
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <label class="form-label">Puntos o Equipos a Evaluar</label>
                        <input type="number" name="Puntos[]" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <label class="form-label">Tipo de Servicio (NOM)</label>
                        <select class="form-select" name="Servicio[]" required>
                            <option value="">Selecciona un Servicio</option>
                            <option value="1">NOM025</option>
                        </select>
                    </div>
                </div>
            </div>
            `;
            $("#ContenidoServicio").append(nuevoElemento);
        }
    });

    $("#BuscarMuestreador").click(function(){
        let cantidad = $('#NumMuetreador').val();
        $("#Muestreadores").empty();

        for (i = 0; i< cantidad; i ++){
            let nuevoElemento = `
            <div class="mb-2">
                <label class="form-label">Muestreador</label>
                <select class="form-select" name="muestreador" id="muestreado">
                    <option value="">Seleccionar un Muestreador</option>
                </select>
            </div>
            `;
            $("#Muestreadores").append(nuevoElemento);
        }
    });
});

