@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Pacientes 
                <a href="{{ route('paciente.create') }}" class="btn btn-success">Nuevo</a>
            </h3>
        @include('paciente.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table.bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Paciente</th>
                            <th>Cedula Identidad</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Presion Arterial</th>
                            <th>Frecuencia Respiratoria</th>
                            <th>Pulso</th>
                            <th>Temperatura</th>
                            <th>Alergias</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($pacientes))
                            @foreach ($pacientes as $paciente)
                                <tr>
                                    <td>{{ $paciente->id}} </td>
                                    <td>{{ $paciente->nombres }} {{ $paciente->paterno }} {{ $paciente->materno }}</td>
                                    <td>{{ $paciente->ci }} </td>
                                    <td>{{ $paciente->sexo }} </td>
                                    <td>{{ $paciente->edad }} </td>
                                    <td>{{ $paciente->presion_arterial }} </td>
                                    <td>{{ $paciente->frecuencia_respiratoria }} </td>
                                    <td>{{ $paciente->pulso }} </td>
                                    <td>{{ $paciente->temperatura }} </td>
                                    <td>{{ $paciente->alergias }} </td>
                                    <td>
                                        <a href="{{ route('paciente.edit',$paciente->id) }}" class="btn btn-info">Editar</a>
                                        <a href="" data-target="#modal-delete-{{ $paciente->id }}" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                                @include('paciente.modal')
                            @endforeach                            
                        @else
                            <tr>
                                <td colspan="11" style="text-align: center;">
									<h2><span class="badge badge-danger">No Existen Pacientes</span></h2>
								</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $pacientes->appends(request()->all())->render() }}
        </div>
    </div>
@endsection