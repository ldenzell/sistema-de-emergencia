@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>Editar Paciente: {{$seguimiento->idpaci}}</h3>
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
            <form action="{{ route('seguimiento.update',$seguimiento->id) }}" method="POST">
                @csrf @method('PATCH')
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="paciente_id">Paciente</label>
                            <select name="paciente_id" class="form-control" disabled>
                                <option value="{{ $seguimiento->paciente_id }}">{{ $seguimiento->paciente->nombres }} {{ $seguimiento->paciente->paterno }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion del Paciente</label>
                            <textarea name="descripcion" cols="30" rows="10" class="form-control">{{ $seguimiento->descripcion }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a class="btn btn-danger" href="{{ route('seguimiento.index') }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection