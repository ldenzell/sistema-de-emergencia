@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Emergencias</h3>
            @include('emergencia.search')
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
                            <th>Ci</th>
                            <th>Alergias</th>
                            <th>Presion Arterial</th>
                            <th>Frecuencia Respiratoria</th>
                            <th>Pulso</th>
                            <th>Temperatura</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($emergencias))
                            @foreach($emergencias as $emergencia)
                                <tr>
                                    <td>{{ $emergencia->id }}</td>
                                    <td>{{ $emergencia->nombres }} {{ $emergencia->apellidopat }} {{ $emergencia->apellidomat }}</td>
                                    <td>{{ $emergencia->ci }}</td>
                                    <td>{{ $emergencia->alergias }}</td>
                                    <td>{{ $emergencia->presion_arterial }}</td>
                                    <td>{{ $emergencia->frecuencia_respiratoria }}</td>
                                    <td>{{ $emergencia->pulso }}</td>
                                    <td>{{ $emergencia->temperatura }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('emergencia.show',$emergencia->id) }}">Ver</a>
                                    </td>
                                </tr>
                            @endforeach                            
                        @else
                            <tr>
                                <td colspan="9" style="text-align: center;">
									<h2><span class="badge badge-danger">No Existen Pacientes</span></h2>
								</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $emergencias->appends(request()->all())->render() }}
        </div>
    </div>
@endsection