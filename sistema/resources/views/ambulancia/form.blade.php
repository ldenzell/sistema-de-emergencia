@csrf
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" name="placa" value="{{ old('placa',$ambulancia->placa) }}" class="form-control" placeholder="N° placa...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" value="{{ old('tipo',$ambulancia->tipo) }}" class="form-control" placeholder="Tipo...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo',$ambulancia->modelo) }}" class="form-control" placeholder="Modelo...">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" value="{{ old('marca',$ambulancia->marca) }}" class="form-control" placeholder="Marca...">
        </div>
    </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a class="btn btn-danger" href="{{ route('ambulancia.index') }}">Cancelar</a>
    </div>
</div>