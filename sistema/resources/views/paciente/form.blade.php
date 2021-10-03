@csrf
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="nombres">Nombre</label>
            <input type="text" name="nombres" value="{{ old('nombres',$paciente->nombres) }}" class="form-control" placeholder="Nombre...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" name="paterno" value="{{ old('paterno',$paciente->paterno) }}" class="form-control" placeholder="Apellido Paterno...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="materno">Apellido Materno</label>
            <input type="text" name="materno" value="{{ old('materno',$paciente->materno) }}" class="form-control" placeholder="Apellido Materno...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="ci">Cedula de Identidad</label>
            <input type="text" name="ci" value="{{ old('ci',$paciente->ci) }}" class="form-control" placeholder="N° C.I ...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo" value="{{ old('sexo',$paciente->sexo) }}" class="form-control" placeholder="Sexo...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="text" name="edad" value="{{ old('edad',$paciente->id) }}" class="form-control" placeholder="Edad...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email',$paciente->email) }}" class="form-control" placeholder="Email...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="{{ old('password',$paciente->password) }}" class="form-control" placeholder="Password...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="presion_arterial">Presion Arterial</label>
            <input type="text" name="presion_arterial" value="{{ old('presion_arterial',$paciente->presion_arterial) }}" class="form-control" placeholder="Presion Arterial...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="frecuencia_respiratoria">Frecuencia Respiratoria</label>
            <input type="text" name="frecuencia_respiratoria" value="{{ old('frecuencia_respiratoria',$paciente->frecuencia_respiratoria) }}" class="form-control" placeholder="Frecuencia Respiratoria...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="pulso">Pulso</label>
            <input type="text" name="pulso" value="{{ old('pulso',$paciente->pulso) }}" class="form-control" placeholder="Pulso...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="temperatura">Temperatura</label>
            <input type="text" name="temperatura" value="{{ old('temperatura',$paciente->temperatura) }}" class="form-control" placeholder="Temperatura...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="alergias">Alergias</label>
            <input type="text" name="alergias" value="{{ old('alergias',$paciente->alergias) }}" class="form-control" placeholder="Alergias...">
        </div>
    </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a class="btn btn-danger" href="{{ route('paciente.index') }}">Cancelar</a>
    </div>
</div>