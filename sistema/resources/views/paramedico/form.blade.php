@csrf
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre',$paramedico->nombre) }}" class="form-control" placeholder="Nombre...">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" name="paterno" value="{{ old('paterno',$paramedico->paterno) }}" class="form-control" placeholder="Apellido Paterno...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="materno">Apellido Materno</label>
            <input type="text" name="materno" value="{{ old('materno',$paramedico->materno) }}" class="form-control" placeholder="Apellido Materno...">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo" value="{{ old('sexo',$paramedico->sexo) }}" class="form-control" placeholder="Sexo...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email',$paramedico->email) }}" class="form-control" placeholder="Email...">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="rol">Rol</label>
            <select name="rol" class="form-control">
                <option value="0" {{ old('rol', $paramedico->rol) == 0 ? 'selected' : '' }}>Administrador</option>
                <option value="1" {{ old('rol', $paramedico->rol) == 1 ? 'selected' : '' }}>Paramedico</option>
            </select>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a class="btn btn-danger" href="{{ route('paramedico.index') }}">Cancelar</a>
    </div>
</div>