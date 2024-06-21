<div class="form-group">
    <label for="nombreCompleto">Nombre Completo</label>
    <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" value="{{ old('nombreCompleto', $empleado->nombreCompleto ?? '') }}">
</div>
<div class="form-group">
    <label for="ci">CI</label>
    <input type="text" class="form-control" id="ci" name="ci" value="{{ old('ci', $empleado->ci ?? '') }}">
</div>
<div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $empleado->telefono ?? '') }}">
</div>
<div class="form-group">
    <label for="fechaNacimiento">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ old('fechaNacimiento', $empleado->fechaNacimiento ?? '') }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $empleado->email ?? '') }}">
</div>
<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $empleado->direccion ?? '') }}">
</div>
<div class="form-group">
    <label for="cargo">Cargo</label>
    <input type="text" class="form-control" id="cargo" name="cargo" value="{{ old('cargo', $empleado->cargo ?? '') }}">
</div>
<div class="form-group">
    <label for="salario">Salario</label>
    <input type="text" class="form-control" id="salario" name="salario" value="{{ old('salario', $empleado->salario ?? '') }}">
</div>
