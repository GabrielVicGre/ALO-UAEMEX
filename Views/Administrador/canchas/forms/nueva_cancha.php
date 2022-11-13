
<div class="card">
    <div class="card-header text-center">
        <spam class="h6 text-muted">Registro de canchas</spam>
    </div>
    <div class="card-body">
        <form action="Views/Administrador/canchas/index.php" method="POST" autocomplete="FALSE">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required> <br>

            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" class="form-control" id="direccion" required> <br>

            <label for="url" class="form-label">Url:</label>
            <input type="text" name="url" class="form-control" id="url" required> <br>
          

            <div class="text-center">
                <button type="submit" name="add" value="Guardar" style="background-color:#C5A42A" class="btn  text-white btn-sm mt-2">Guardar</button>
            </div>
        </form>
    </div>
</div>