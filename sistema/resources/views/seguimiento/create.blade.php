@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>Registrar Seguimiento</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="{{ route('seguimiento.create') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>N° C.I de Pacientes</label>
                            <select name="paciente_id" class="form-control select2bs4" id="paciente_id">
                                @foreach ($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}_{{ $paciente->nombres }}_{{ $paciente->paterno }}_{{ $paciente->materno }}_{{ $paciente->alergias }}">{{ $paciente->ci }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nombres">Nombre</label>
                            <input type="text" disabled name="nombres" id="nombres" class="form-control" placeholder="nombre" value="{{ old('nombres') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="apellidopat">Ap. Paterno</label>
                            <input type="text" disabled name="paterno" id="paterno" class="form-control" placeholder="apellido paterno" value="{{ old('paterno') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="apellidomat">Ap. Materno</label>
                            <input type="text" disabled name="materno" id="materno" class="form-control" placeholder="apellido materno" value="{{ old('materno') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="alergias">Alergias</label>
                            <input type="text" disabled name="alergias" id="alergias" class="form-control" placeholder="alergias" value="{{ old('alergias') }}">
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
                        <div class="form-group">
                            <label for="descripcion">Descripcion del paciente</label>
                            <textarea name="descripcion" cols="30" rows="10" class="form-control">{{ old('descripcion') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a class="btn btn-danger" href="{{ route('seguimiento.index') }}">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script>
            $("#paciente_id").change(mostrarValores);
            function mostrarValores()
            {
                datosPaciente=document.getElementById('paciente_id').value.split('_');
                $("#alergias").val(datosPaciente[4]);
                $("#materno").val(datosPaciente[3]);
                $("#paterno").val(datosPaciente[2]);
                $("#nombres").val(datosPaciente[1]);
            }
        </script>
    @endpush       
@endsection