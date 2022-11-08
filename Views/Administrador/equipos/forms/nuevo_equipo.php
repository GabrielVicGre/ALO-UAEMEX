<h6 class="pb-4 text-center">Registra equipo</h6>
<form action="Views/Administrador/equipos/index.php"  method="POST" autocomplete="FALSE">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre" class="form-control" id="nombre" required>
        <label for="descripcion" class="form-label mt-4">Descripción:</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion" required>
        <label for="fecha_registro" class="form-label mt-4">Fecha de registro:</label>
        <input type="date" name="fecha_registro" class="form-control" id="fecha_registro" required>
    </div>
    <button type="submit" name="add" value="Guardar" style="background-color:#C5A42A" class="btn text-white btn-sm mt-2">Guardar</button>
</form>